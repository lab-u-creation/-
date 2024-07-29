<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$id = 'planindex';
appConfigPage::$title = appConfigSite::sitemap['plan']['title'];
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<!-- <?php appFuncDisp::h1(appConfigPage::$title); ?> -->
<section id="sec-info" class="pt-5 pb-5">
  <?php
  $planindex = true;
  include '../plan/_module/list.php';
  ?>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
