<?php
/*======================================================================

各ページで使用する変数

======================================================================*/
class appConfigPage
{
    public static $uri = null;
    public static $id = null;
    public static $title = null;
    public static $description = null;
    public static $ogimage = null;
    public static $meta = null;
    public static $css = null;
    public static $js = null;
    public static $tmpl = 'default';
    public static $path = null;
    public static $pageCategory = null;
    public static $canonical = null;
    public static $addBreadcrumb = [
        'title' => null, 'path' => null
    ];
}
