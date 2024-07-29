<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_news.php';
require_once '../news/_database/postdata.php';
appConfigPage::$title = appConfigSite::sitemap['news']['title'];
appConfigPage::$css = <<<EOF
<style>
#category-news{
  background :#fdfbf0;
}
.bg-img{
  background-image: url('/assets/img/bg-news.png');
  background-position: top 100px right;
  background-size: 410px;
  background-repeat: no-repeat;
  background-blend-mode: multiply;
  padding-bottom: 0 !important;
}
@media (min-width:576px) {
  .bg-img{
    background-position: top 60px right;
    background-size:570px;
  }
}
@media (min-width:992px) {
  .bg-img{
    background-position: top -20px right;
    background-size: 790px;
  }
}
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<div class="pt-3 pt-md-0 border-bottom">
  <?php appFuncDisp::h1(appConfigPage::$title, '都民のお葬式の最新情報をお知らせ致します。'); ?>
</div>

<div class="bg-white">
  <div class="container pt-sm-4 pt-md-5 pb-5">
     <?php appFuncDisp_news::list(newsDatabasePostData::data, './_module/index.php'); ?>
  </div>
</div>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
