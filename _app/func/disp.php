<?php
class appFuncDisp
{
    public static function h1($title, $description = null)
    {
        return include __DIR__ . '/../../_module/h1.php';
    }
    public static function h2($title, $description = null, $addCss = null)
    {
        return include __DIR__ . '/../../_module/h2.php';
    }
    public static function h2_border($title, $description = null, $addCss = null)
    {
        return include __DIR__ . '/../../_module/h2_border.php';
    }
    public static function cta($title = null)
    {
        return include __DIR__ . '/../../_module/cta.php';
    }
    public static function faq($id, $q, $a)
    {
        return include __DIR__ . '/../../_module/faq.php';
    }
    public static function addClass($val1, $val2, $className = null)
    {
        if ($val1 == $val2) {
            echo $className;
        }
    }

    public static function notfound()
    {
        include __DIR__ . '/../../error/404.php';
    }

    public static function addActiveClass($pageCategory, $getPageCategory)
    {
        if ($pageCategory === $getPageCategory) {
            echo 'is-active';
        }
    }
}
