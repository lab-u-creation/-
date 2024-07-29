<?php
require_once '../../_app/base.php';
require_once '../../_app/func/disp_plan.php';
appConfigPage::$title = appConfigSite::sitemap['planReligion']['title'];
?>
<?php require_once '../../_tmpl/header.php'; ?>
<?php require_once '../../_tmpl/l-header.php'; ?>

<?php appFuncDisp::h1(appConfigPage::$title, 'さまざまな宗派・宗教に対応した葬儀の対応も承っております'); ?>

<div class="container pb-5">
    <div class="row no-gutters">
        <?php foreach (appConfigPlan::religion as $religion) : ?>
            <div class="col-6 col-md-4 p-2">
                <section class="border">
                    <a href="./<?php echo $religion['id']; ?>" class="text-decoration-none">
                        <img src="/assets/img/blank.png" class="w-100" alt="" data-echo="/assets/img/plan/plan_<?php echo $religion['id']; ?>.png">
                        <h2 class="color-dgray font-size-1_4 text-center pt-2 pb-2 font-notoserif"><?php echo $religion['name']; ?></h2>
                    </a>
                </section>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once '../../_tmpl/l-footer.php'; ?>
<?php require_once '../../_tmpl/footer.php'; ?>