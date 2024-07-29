<?php
class appFuncString
{
    public static function format_textAdd($str, $val, $add)
    {
        $str1 = mb_substr($str, 0, $val);
        $str2 = mb_substr($str, $val);
        $result = $str1 . $add . $str2;
        return $result;
    }

    public static function omitInt($string)
    {
        $array = explode(',', $string);
        $str = $array[0];
        $strlen = strlen($str);
        if ($strlen > 2) {
            $result = self::format_textAdd($str, 2, '.');
        } else {
            $result = self::format_textAdd($str, 1, '.');
        }
        return $result;
    }

    public static function substr($string, $int, $addStr = '...')
    {
        $string = strip_tags($string);
        $strlen = strlen($string);
        $result = mb_substr($string, 0, $int);
        if ($strlen > $int) {
            $result = $result . $addStr;
        }
        return $result;
    }
}
