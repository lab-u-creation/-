<?php
require_once '../../_app/http/news/post/index.php';
  appConfigPage::$title = appHttpNewsPostIndex::$title . '｜' . appConfigSite::sitemap['news']['title'];
  appConfigPage::$css = <<<EOF
  <style>
  h1{font-size: 1.7rem;}
  #category-news{
    background :#fdfbf0;
  }
  .bg-img{
    background-image: url('/assets/img/bg-news.png');
    background-position: top 90px right;
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
    .border-sm{
      border: 1px solid #c7c7c7!important;
    }
    .bg-sm-transparent{
      background-color: transparent !important;
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
<?php require_once '../../_tmpl/header.php'; ?>
<?php appConfigPage::$title = appHttpNewsPostIndex::$title; ?>
<?php require_once '../../_tmpl/l-header.php'; ?>

<div class="border-bottom">
  <header class="pt-4 pb-4 pt-lg-3">
   <div class="container">
      <h1 class="font-size-lg-2_4 color-dgray font-weight-bold text-center text-lg-left mb-4 mb-lg-2"><?php echo appConfigSite::sitemap['news']['title']; ?></h1>
      <div>都民のお葬式の最新情報をお知らせ致します。</div>
   </div>
  </header>
</div>

<div class="bg-white">
  <section class="pt-sm-5">
   <div class="container-md p-0 pr-sm-5 pl-sm-5 p-md-0 pb-4 bg-white bg-sm-transparent">
     <div class="bg-white bg-white border-sm">
      <div class="w-100per w-lg-75 mx-auto pt-3 p-md-3">
        <div class="m-3 border-bottom">
          <div class="font-size-0_8 font-size-lg-1 pb-2"><i class="fa fa-clock-o pr-2" aria-hidden="true"></i><?php echo appHttpNewsPostIndex::$date; ?></div>
          <h2 class=" m-0 font-size-1_4 font-size-lg-1_6 color-dgray pb-3"><?php echo appHttpNewsPostIndex::$title; ?></h2>
        </div>
        <div class="p-3">
           <div class="pb-4 font-size-lg-1_2 line-height-1_2 color-dgray">
              <?php echo appHttpNewsPostIndex::$body; ?>
           </div>
         </div>

       </div>
      </div>

    <div class="mt-4 pt-4 pb-4 row align-items-center no-gutters justify-content-center pl-3 pr-3">
      <a href="<?php echo appConfigSite::sitemap['news']['path']; ?>" class="btn bg-lgray-gradient w-300px border text-center p-3 font-size-lg-1_2 text-decoration-none border d-block"><span class="color-dgray"><?php echo appConfigSite::sitemap['news']['title']; ?>一覧へ<i class="fa fa-chevron-circle-right ml-2 color-orange" aria-hidden="true"></i></span></a>
    </div>

  </div>
  </section>
</div>

  <?php require_once '../../_module/table.php'; ?>
  <?php require_once '../../_tmpl/l-footer.php'; ?>
  <?php require_once '../../_tmpl/footer.php'; ?>
