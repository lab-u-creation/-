<?php
class appFuncArray
{
    /*配列にキーが存在すれば値を描画*/
    public static function issetDisp($array, $key)
    {
        $result = "";
        if (isset($array[$key])) {
            $result = $array[$key];
        }
        return $result;
    }

    /*配列を文字列に変換して描画*/
    public static function arrayToString($array, $separator = "")
    {
        $result = "";
        if (count($array) > 0) {
            foreach ($array as $index => $value) {
                $result .= $value;
                if ($index != array_key_last($array)) {
                    $result .= $separator;
                }
            }
        }
        return $result;
    }

    /*連想配列にキーが存在すれば、文字列に変換して描画*/
    public static function issetDispArrayToString($array, $key, $separator = "")
    {
        $result = "";
        if (isset($array[$key])) {
            $result = self::arrayToString($array[$key], $separator);
        }
        return $result;
    }
}
