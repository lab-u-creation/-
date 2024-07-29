<?php
require_once '../../_app/base.php';
include_once '../../_app/func/database.php';
include_once '../../_app/func/disp_saijo.php';
include_once '../../_app/database/saijo/sql.php';

class appHttpSaijoDetailIndex
{
    public static $sql = "";
    public static $params = array();
    public static $results = array();
    public static $getId = null;
}

appHttpSaijoDetailIndex::$getId = appFuncPath::uri(3);
if (preg_match("/^[0-9]+$/", appHttpSaijoDetailIndex::$getId)) {
    appHttpSaijoDetailIndex::$params[':id'] = appHttpSaijoDetailIndex::$getId;
    appHttpSaijoDetailIndex::$results = appFuncDatabase::getData(
        appFuncDatabase::connect(),
        appDatabaseSaijoSql::$detail,
        appHttpSaijoDetailIndex::$params
    );
} else {
    http_response_code(404);
    appConfigPage::$title = "ページにアクセスできません";
    include_once '../../_tmpl/header.php';
    include_once '../../_tmpl/l-header.php';
    include_once '../../_module/404.php';
    include_once '../../_tmpl/l-footer.php';
    include_once '../../_tmpl/footer.php';
    exit;
}

if (count(appHttpSaijoDetailIndex::$results) <= 0) {
    http_response_code(404);
    appConfigPage::$title = "ページにアクセスできません";
    include_once '../../_tmpl/header.php';
    include_once '../../_tmpl/l-header.php';
    include_once '../../_module/404.php';
    include_once '../../_tmpl/l-footer.php';
    include_once '../../_tmpl/footer.php';
    exit;
}
