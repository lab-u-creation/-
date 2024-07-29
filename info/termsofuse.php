<?php
require_once '../_app/base.php';
appConfigPage::$title = "利用規約";
appConfigPage::$meta = '<meta name="robots" content="noindex">' . "\n";
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<?php appFuncDisp::h1(appConfigPage::$title); ?>

<div class="border-top border-bottom bg-lgray pt-4 pb-4">
    <?php for ($i = 1; $i < 5; $i++) : ?>
        <div class="pb-3">
            <div class="container w-90per w-lg-50per mx-auto border bg-white">
                <img src="/assets/img/info/text_termsofuse_0<?php echo $i; ?>.jpg" alt="page0<?php echo $i; ?>" class="w-100 d-block">
            </div>
        </div>
    <?php endfor; ?>
</div>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>