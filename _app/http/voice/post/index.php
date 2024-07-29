<?php
require_once '../../_app/base.php';
require_once '../_database/postdata.php';

class appHttpVoicePostIndex
{
    public static $id = null;
    public static $gender = '---';
    public static $title = 'NO-TITLE';
    public static $date = '---';
    public static $planId = 'noData';
    public static $address = 'noData';
    public static $name = 'noData';
    public static $body = 'noData';


    public static function getId()
    {
        $id = appFuncPath::uri(3);
        return $id;
    }
    public static function getData($id)
    {
        foreach (voiceDatabasePostData::data as $value) {
            if ($value['id'] === $id) {
                self::$id = $value['id'];
                self::$gender = $value['gender'];
                self::$title = $value['title'];
                self::$date = $value['date'];
                self::$planId = $value['planId'];
                self::$address = $value['address'];
                self::$name = $value['name'];
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

appHttpVoicePostIndex::$id = appHttpVoicePostIndex::getId();
appHttpVoicePostIndex::getData(appHttpVoicePostIndex::$id);
