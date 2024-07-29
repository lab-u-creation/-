<?php
class appFuncPath
{
    public static function uri($int = null): string
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = strtok($uri, '?');
        if ($int === null) {
            return $uri;
        } else {
            $array = explode("/", $uri);
            if (isset($array[$int])) {
                return $array[$int];
            } else {
                return 'nodata';
            }
        }
    }

    public static function category($path): string
    {
        $array = explode("/", $path);
        if (isset($array[1]) && $array[1] != '') {
            return $array[1];
        } else {
            return 'home';
        }
    }
}
