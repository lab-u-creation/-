<?php
include_once '../../_app/base.php';
include_once '../../_app/func/database.php';
include_once '../../_app/func/disp_saijo.php';
include_once '../../_app/database/saijo/sql.php';

class appHttpSaijoIndex
{
    public static $sql = "";
    public static $sqlWhere = "";
    public static $sqlOrderby = "";
    public static $params = array();
    public static $results = "";
    public static $resultsCount = "";

    public static $uri = "";
    public static $searchArea = array();
    public static $searchResultsCount = 0;
    public static $areaCityName = null;
    public static $areaName = null;
    public static $cityName = null;
    public static $adjacentAreaName = null;
    public static $pageNum = 0;
    public static $pageDisp = 10;
    public static $imgId = 0;

    /*SQL生成用の配列を作成*/
    public function getSearchArea($configArea, $areaName, $cityName): array
    {
        $retult = array();
        $strRinsetsu = "";
        $imgId = 0;
        $flagExistence = false;
        foreach ($configArea as $key => $value) {
            $area = $value[1];
            $city = $value[2];
            if ($areaName == $area && $cityName == $city) {
                $strRinsetsu = $value[4];
                $imgId = $value[5];
                $flagExistence = true;
                break;
            }
        }
        if ($flagExistence === true) {
            $strRinsetsu = $city . ',' . $strRinsetsu;
            $arrayRinsetsu = explode(",", $strRinsetsu);
            $count = 0;
            foreach ($arrayRinsetsu as $value) {
                $retult[$count][0] = $area;
                $retult[$count][1] = $value;
                if ($count == 0) {
                    $retult[$count][2] = $imgId;
                }
                $count += 1;
            }
        }
        return $retult;
    }

    /*SQL生成*/
    public static function clateSqlWhere($searchArea): string
    {
        $result = ' and (';
        $count = 0;
        foreach ($searchArea as $key => $value) {
            if ($count === 0) {
                $result .= ' area="' . $value[0] . '" and city="' . $value[1] . '"';
            } else {
                $result .= ' OR area="' . $value[0] . '" and city="' . $value[1] . '"';
            }
            $count++;
        }
        $result .= ') ';
        return $result;
    }

    /*SQL生成+Orderby追加*/
    public static function clateSqlOrderby($pageNum, $area, $city)
    {
        if ($pageNum > 1) {
            $limitStart = ($pageNum - 1) * self::$pageDisp;
        } else {
            $limitStart = 0;
        }
        return 'ORDER BY city="' . $city . '" DESC LIMIT ' . $limitStart . ',' . self::$pageDisp;
    }
}


/*1.都道府県・市区町村名を取得*/
appHttpSaijoIndex::$areaCityName = urldecode(appFuncPath::uri(3));
appHttpSaijoIndex::$areaName = '東京都'; //突貫対応
appHttpSaijoIndex::$cityName = str_replace('東京都', '', appHttpSaijoIndex::$areaCityName);

/*ページ番号を取得*/
if (appFuncPath::uri(4) != '' && preg_match("/^[0-9]+$/", appFuncPath::uri(4))) {
    appHttpSaijoIndex::$pageNum = appFuncPath::uri(4);
}

/*2.検索する地域を定義*/
appHttpSaijoIndex::$searchArea = appHttpSaijoIndex::getSearchArea(
    appConfigArea::tokyo, //突貫対応
    appHttpSaijoIndex::$areaName,
    appHttpSaijoIndex::$cityName
);

/*3.市区町村名で斎場を検索*/
if (count(appHttpSaijoIndex::$searchArea) > 0) {
    appHttpSaijoIndex::$sqlWhere = appHttpSaijoIndex::clateSqlWhere(appHttpSaijoIndex::$searchArea);
    appHttpSaijoIndex::$imgId = appHttpSaijoIndex::$searchArea[0][2];
    appHttpSaijoIndex::$sqlOrderby = appHttpSaijoIndex::clateSqlOrderby(
        appHttpSaijoIndex::$pageNum,
        appHttpSaijoIndex::$areaName,
        appHttpSaijoIndex::$cityName
    );
    appHttpSaijoIndex::$sql = appDatabaseSaijoSql::$list . appHttpSaijoIndex::$sqlWhere . appHttpSaijoIndex::$sqlOrderby;
    appHttpSaijoIndex::$results = appFuncDatabase::getData(
        appFuncDatabase::connect(),
        appHttpSaijoIndex::$sql,
        appHttpSaijoIndex::$params
    );
} else {
    /*存在しない市区町村が指定されていた場合*/
    http_response_code(404) ;
    appConfigPage::$title = "ページにアクセスできません";
    include_once '../../_tmpl/header.php';
    include_once '../../_tmpl/l-header.php';
    include_once '../../_module/404.php';
    include_once '../../_tmpl/l-footer.php';
    include_once '../../_tmpl/footer.php';
    exit;
}


/*4.検索結果の件数を取得*/
appHttpSaijoIndex::$sql = appDatabaseSaijoSql::$count . appHttpSaijoIndex::$sqlWhere;
appHttpSaijoIndex::$resultsCount = appFuncDatabase::getData(
    appFuncDatabase::connect(),
    appHttpSaijoIndex::$sql,
    appHttpSaijoIndex::$params
);
appHttpSaijoIndex::$searchResultsCount = appHttpSaijoIndex::$resultsCount[0]['count'];
appHttpSaijoIndex::$uri = appFuncPath::uri();
