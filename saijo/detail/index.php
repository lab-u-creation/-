<?php
require_once '../../_app/http/saijo/detail/index.php';
appConfigPage::$title = appHttpSaijoDetailIndex::$results[0]['name'];
?>

<?php require_once '../../_tmpl/header.php'; ?>
<?php require_once '../../_tmpl/l-header.php'; ?>

<?php appFuncDisp_saijo::detailPage(appHttpSaijoDetailIndex::$results, '../../_module/saijo_detail.php'); ?>

<div class="pt-4 pb-5 bg-base">
    <?php
    $title = "都民限定特別プラン";
    include_once '../../plan/_module/list.php';
    ?>
</div>
<?php require_once '../../_tmpl/l-footer.php'; ?>
<?php require_once '../../_tmpl/footer.php'; ?>