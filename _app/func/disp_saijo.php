<?php
class appFuncDisp_saijo
{
    public function __construct()
    {
    }

    private function trueOrFalse($int): string
    {
        if ($int >= 1) {
            return '○';
        } else {
            return '---';
        }
    }

    /*駐車場*/
    private function parking($parking, $vicinityParking): string
    {
        $result = "";
        if ($parking >= 1) {
            $result .= $parking . '台';
        } else {
            $result .= 'なし';
        }
        if ($vicinityParking >= 1) {
            $result .= '(近隣に有料駐車場あり)';
        }
        return $result;
    }

    /*火葬場*/
    private function kasou($int): string
    {
        if ($int === 1) {
            return 'あり';
        } else {
            return 'なし';
        }
    }

    /*Googlemap*/
    private function createGooglemap($str)
    {
        $header = '<iframe src="https://maps.google.com/maps?output=embed&q=';
        $footer = '" class="w-100 h-100" frameborder="0" allowfullscreen="" aria-hidden="true" tabindex="0"></iframe>';
        return $header . $str . $footer;
    }

    /*一覧表示*/
    public static function indexPage($result, $tmplFile)
    {
        foreach ($result as $value) {
            $id = $value['id'];
            $name = $value['name'];
            $address = $value['address'];
            $access = explode("\n", $value['access']);
            $access = $access[0];
            $category = $value['category'];
            $parking = $value['parking'];
            $anti = $value['anti'];
            $tomaru = $value['tomaru'];
            $kasou = $value['kasou'];
            $image = "/assets/img/nodata.png";
            if (file_exists(__DIR__ . '/../../assets/img/saijo/data/' . $id . '.png')) {
                $image = '/assets/img/saijo/data/' . $id . '.png';
            } else if (file_exists(__DIR__ . '/../../assets/img/saijo/data/' . $id . '.jpg')) {
                $image = '/assets/img/saijo/data/' . $id . '.jpg';
            }
            include $tmplFile;
        }
    }

    /*詳細ページ*/
    public static function detailPage($result, $tmplFile)
    {
        $id = $result[0]['id'];
        $name = $result[0]['name'];
        $area = $result[0]['area'];
        $city = $result[0]['city'];
        $address = $result[0]['address'];
        $access = preg_replace('/(\d)分/', '$1 分<br>', $result[0]['access']);
        $category = $result[0]['category'];
        $comment = $result[0]['comment'];
        $parking = self::parking($result[0]['parking'], $result[0]['vicinity_parking']);
        $kasou = self::kasou($result[0]['kasou']);
        $menkai = self::trueOrFalse($result[0]['menkai']);
        $anti = self::trueOrFalse($result[0]['anti']);
        $hikae = self::trueOrFalse($result[0]['hikae']);
        $tomaru = self::trueOrFalse($result[0]['tomaru']);
        $room_eat = self::trueOrFalse($result[0]['room_eat']);
        $barrierfree = self::trueOrFalse($result[0]['barrierfree']);
        $furo = self::trueOrFalse($result[0]['furo']);
        $houyou = self::trueOrFalse($result[0]['room_houyou']);
        $map = self::createGooglemap($address);
        $image = "/assets/img/nodata.png";
        if (file_exists(__DIR__ . '/../../assets/img/saijo/data/' . $id . '.png')) {
            $image = '/assets/img/saijo/data/' . $id . '.png';
        } else if (file_exists(__DIR__ . '/../../assets/img/saijo/data/' . $id . '.jpg')) {
            $image = '/assets/img/saijo/data/' . $id . '.jpg';
        }
        include $tmplFile;
    }
}
