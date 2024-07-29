<?php
include_once __DIR__ . '/../_env/define.php';
include_once __DIR__ . '/config/site.php';
include_once __DIR__ . '/config/page.php';
include_once __DIR__ . '/config/plan.php';
include_once __DIR__ . '/config/area.php';
include_once __DIR__ . '/config/string.php';
include_once __DIR__ . '/config/column.php';
include_once __DIR__ . '/func/array.php';
include_once __DIR__ . '/func/path.php';
include_once __DIR__ . '/func/string.php';
include_once __DIR__ . '/func/disp.php';
include_once __DIR__ . '/func/pager.php';
appConfigPage::$path = appFuncPath::uri();
appConfigPage::$pageCategory = appFuncPath::category(appConfigPage::$path);
