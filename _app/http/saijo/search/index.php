<?php
include_once '../../_app/base.php';
include_once '../../_app/func/database.php';
include_once '../../_app/func/disp_saijo.php';
include_once '../../_app/database/saijo/sql.php';

class appHttpSaijoSearchIndex
{

    public static $sql = "";
    public static $sqlWhere = "";
    public static $sqlOrderby = "";
    public static $params = array();
    public static $results = array();
    public static $resultsCount = 0;

    public static $uri;
    public static $pageDisp = 10;
    public static $pageNum = 0;
    public static $getWord = null;
    public static $getWordExplode = array();

    public static function clateSqlOrderby($pageNum)
    {
        if ($pageNum > 1) {
            $limitStart = ($pageNum - 1) * self::$pageDisp;
        } else {
            $limitStart = 0;
        }
        return 'LIMIT ' . $limitStart . ',' . self::$pageDisp;
    }
}

/*ページ番号抽出*/
if (isset($_GET['page']) && preg_match("/^[0-9]+$/", $_GET['page'])) {
    appHttpSaijoSearchIndex::$pageNum = $_GET['page'];
}

/*検索キーワード設定*/
if (isset($_GET['word']) && strlen($_GET['word']) >= 1) {
    appHttpSaijoSearchIndex::$getWord = $_GET['word'];
    appHttpSaijoSearchIndex::$getWordExplode = explode(" ", appHttpSaijoSearchIndex::$getWord);
    foreach (appHttpSaijoSearchIndex::$getWordExplode as $value) {
        appHttpSaijoSearchIndex::$sqlWhere .= ' and ( name LIKE "%' . appHttpSaijoSearchIndex::$getWord . '%"';
        appHttpSaijoSearchIndex::$sqlWhere .= ' or address LIKE "%' . appHttpSaijoSearchIndex::$getWord . '%"';
        appHttpSaijoSearchIndex::$sqlWhere .= ' or comment LIKE "%' . appHttpSaijoSearchIndex::$getWord . '%"';
        appHttpSaijoSearchIndex::$sqlWhere .= ' or access LIKE "%' . appHttpSaijoSearchIndex::$getWord . '%")';
    }
    appHttpSaijoSearchIndex::$sqlOrderby = appHttpSaijoSearchIndex::clateSqlOrderby(appHttpSaijoSearchIndex::$pageNum);
    appHttpSaijoSearchIndex::$sql = appDatabaseSaijoSql::$list . appHttpSaijoSearchIndex::$sqlWhere . appHttpSaijoSearchIndex::$sqlOrderby;
    appHttpSaijoSearchIndex::$results = appFuncDatabase::getData(
        appFuncDatabase::connect(),
        appHttpSaijoSearchIndex::$sql,
        appHttpSaijoSearchIndex::$params
    );
    /*4.検索結果の件数を取得*/
    appHttpSaijoSearchIndex::$sql =  appDatabaseSaijoSql::$count . appHttpSaijoSearchIndex::$sqlWhere;
    appHttpSaijoSearchIndex::$resultsCount = appFuncDatabase::getData(
        appFuncDatabase::connect(),
        appHttpSaijoSearchIndex::$sql,
        appHttpSaijoSearchIndex::$params
    );
    appHttpSaijoSearchIndex::$resultsCount = appHttpSaijoSearchIndex::$resultsCount[0]['count'];
    appHttpSaijoSearchIndex::$uri = appFuncPath::uri();
}
