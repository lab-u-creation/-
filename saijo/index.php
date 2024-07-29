<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$title = appConfigSite::sitemap['saijo']['title'];
appConfigPage::$js = "<script>function map(city) {window.location.href = '/saijo/area/東京都' + city;}</script>";
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<?php appFuncDisp::h1(appConfigPage::$title, '東京都内で300箇所以上の利用可能式場がございます'); ?>

<div class="container pt-lg-3">
    <div class="d-none d-lg-block w-100 h-600px bg-lgray position-relative" data-saijomap="false">
        <div class="position-middlecenter text-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="pt-2">LOADING</div>
        </div>
    </div>
    <div class="pt-lg-4 pb-5">
        <?php include_once '../_module/saijo_search.php'; ?>
    </div>
</div>

<div class="pb-5 pt-4 border-top bg-llgray">
    <div class="container pb-5">
        <?php include_once './_module/arealist.php'; ?>
    </div>
</div>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>