<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
if (isset($_GET['planid'])) {
    $planid = $_GET['planid'];
}
appConfigPage::$title = appConfigPlan::plan[$planid]['name'];
appConfigPage::$css = '<link href="/assets/css/print.css" rel="stylesheet" />';
appConfigPage::$description = appConfigPlan::plan[$planid]['description'];
?>
<?php require_once '../_tmpl/header.php'; ?>

<div class="size-a3-beside">
    <div class="row no-gutters h-100">
        <div class="col-6 h-100">
            <?php include_once './_module/page_left.php'; ?>
        </div>
        <div class="col-6 h-100 bg-lgray position-relative">
            <?php include_once './_module/page_right.php'; ?>
        </div>
    </div>
</div>

<?php require_once '../_tmpl/footer.php'; ?>