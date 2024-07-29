<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
$planid = 'plan2';
appConfigPage::$title = appConfigPlan::plan[$planid]['name'];
appConfigPage::$description = appConfigPlan::plan[$planid]['description'];
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<?php require_once './_module/detail.php'; ?>
<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>