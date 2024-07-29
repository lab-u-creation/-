<?php
session_start();
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
/*GA対策...サンクスページに直接アクセスされたらリダイレクト*/
if (!isset($_GET['preview6736466']) && !isset($_SESSION['confirm'])) {
  header("Location: " . appConfigSite::sitemap['contact']['path']);
  exit;
}
appConfigPage::$tmpl = 'form';
appConfigPage::$title = appConfigSite::sitemap['thanks']['title'];
appConfigPage::$css = <<<EOF
<style>
h1,h2,h4{font-size:1.7rem;}
.mh-100vh{
  min-height:auto;
}
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<section id="sec1" class="container pt-4 pb-3">
  <div class="pt-5 pb-3">
    <div class="row no-gutters justify-content-center">
      <div class="col-auto position-relative">
        <div class="d-block">
          <div class="step-number position-relative text-center color-dgray bg-dyellow">
            <p class="step-number-inner position-absolute font-weight-bold font-size-1_6 font-size-sm-1_8 font-size-lg-2 line-height-1 p-0 m-0 pb-lg-2"><span class="font-size-1_2">STEP</span><br>1</p>
          </div>
          <p class="text-center font-weight-bold font-size-lg-1_2 pt-2">情報入力</p>
        </div>
      </div>
      <div class="col-1 position-relative">
        <div class="step-line bg-dyellow"></div>
      </div>
      <div class="col-auto position-relative">
        <div class="d-block">
          <div class="step-number position-relative text-center color-dgray bg-dyellow">
            <p class="step-number-inner position-absolute font-weight-bold font-size-1_6 font-size-sm-1_8 font-size-lg-2 line-height-1 p-0 m-0 pb-lg-2"><span class="font-size-1_2">STEP</span><br>2</p>
          </div>
          <p class="text-center font-weight-bold font-size-lg-1_2 pt-2">内容確認</p>
        </div>
      </div>
      <div class="col-1 position-relative">
        <div class="step-line bg-dyellow"></div>
      </div>
      <div class="col-auto position-relative">
        <div class="d-block">
          <div class="step-number position-relative text-center color-dgray bg-dyellow">
            <p class="step-number-inner position-absolute font-weight-bold font-size-1_6 font-size-sm-1_8 font-size-lg-2 line-height-1 p-0 m-0 pb-lg-2"><span class="font-size-1_2">STEP</span><br>3</p>
          </div>
          <p class="text-center font-weight-bold font-size-lg-1_2 pt-2">送信完了</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="sec2" class="pb-5">
  <div class="container">
    <header class="pt-2">
      <h4 class="color-orange font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3">資料のご請求<br class="d-sm-none">ありがとうございました。</h4>
    </header>
    <p class="font-size-1 font-size-lg-1_2 line-height-1_4 color-dgray text-sm-center pb-md-3">ご入力いただいたご住所に資料をお送りいたします。<br class="d-none d-sm-block d-md-none">今しばらくお待ちください。<br></p>
    <div class="p-4 bg-base">
      <ul class="font-size-md-1_2 list asterisk m-0 pt-2 pb-4">
        <li class="m-0 pb-2">郵便事情によりお届けまで2～3日かかる場合がございます。</li>
        <li class="m-0">夜間(20時以降)にお申込み頂いた場合は翌日以降での最短発送となります。</li>
      </ul>
      <div class="pb-2">
        <picture>
          <source media="(min-width:768px)" srcset="/assets/img/contact/bnr_cta_l.png?20230911">
          <img src="/assets/img/contact/bnr_cta.png?20230911" alt="電話番号：<?php echo appConfigSite::tel; ?>" class="w-100 d-block mx-auto">
        </picture>
      </div>
    </div>
    <div class="pt-4 pb-5">
      <a href="/" class="btn bg-lgray-gradient w-300px border text-center p-3 font-size-lg-1_2 text-decoration-none border d-block mx-auto"><span class="color-dgray"><i class="fa fa-chevron-circle-right mr-2 color-orange" aria-hidden="true"></i>トップに戻る</span></a>
    </div>
  </div>
</section>



<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>