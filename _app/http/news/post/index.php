<?php
require_once '../../_app/base.php';
require_once '../_database/postdata.php';

class appHttpNewsPostIndex
{
    public static $id = null;
    public static $title = 'NO-TITLE';
    public static $date = '---';
    public static $body = 'noData';


    public static function getId()
    {
        $id = appFuncPath::uri(3);
        return $id;
    }
    public static function getData($id)
    {
        foreach (newsDatabasePostData::data as $value) {
            if ($value['id'] === $id) {
                self::$id = $value['id'];
                self::$title = $value['title'];
                self::$date = $value['date'];
                self::$body = $value['body'];
                return;
            }
        }
        http_response_code(404);
        appConfigPage::$title = "ページにアクセスできません";
        include_once '../../_tmpl/header.php';
        include_once '../../_tmpl/l-header.php';
        include_once '../../_module/404.php';
        include_once '../../_tmpl/l-footer.php';
        include_once '../../_tmpl/footer.php';
        exit;
    }
}

appHttpNewsPostIndex::$id = appHttpNewsPostIndex::getId();
appHttpNewsPostIndex::getData(appHttpNewsPostIndex::$id);
