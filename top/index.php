<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_news.php';
require_once '../_app/func/disp_voice.php';
require_once '../news/_database/postdata.php';
require_once '../voice/_database/postdata.php';
appConfigPage::$title = "【公式】" . appConfigSite::siteName . '｜地域密着の葬儀手配サービス';
appConfigPage::$description = "困ったときに頼れる東京都民の葬儀サービス「" . appConfigSite::siteName . "」";
appConfigPage::$tmpl = "home";
appConfigPage::$meta = <<<EOF
<meta name="thumbnail" content="https://tomin-osohshiki.jp/assets/img/thumbnail.png">
<!--
  <PageMap>
    <DataObject type="thumbnail">
      <Attribute name="src" value="https://tomin-osohshiki.jp/assets/img/thumbnail.png"/>
      <Attribute name="width" value="200"/>
      <Attribute name="height" value="200"/>
    </DataObject>
  </PageMap>
-->

EOF;
appConfigPage::$css = <<<EOF
<link href="/assets/slick/slick.css" rel="stylesheet" />
<link href="/assets/slick/slick-theme.css" rel="stylesheet" />
<style>

.fig-medal{display:none;}
.bg-base2{background:rgb(255 252 237 / 80%);}
.keyvisual-catch{position:absolute;top:10px;left:100px;width:260px;}
.keyvisual-title{width:300px; margin:0 auto; display:block; padding:20px 0;}
.keyvisual-price{width:100%;z-index:300;padding-bottom:0px;background:#fff;border:1px solid #dee2e6;}
.keyvisual-img{height:48vw;max-height:280px;position:relative;}
.keyvisual-human{position:absolute;width:60%;bottom:0px;right:-30px;z-index:200;}
.keyvisual-saidan{position:absolute;width:80%;bottom:-20px;left:-15px;z-index:100;}
.keyvisual-medal{position:absolute;width:20%;min-width:60px;max-width:90px;top:-20px;right:15px;}
.keyvisual-movie{position:absolute;top:0;left:0;z-index:300;width:90px;height:auto;}
.keyvisual-balloon{position: relative;}
.keyvisual-balloon::before{content: "";position: absolute;top: 100%;right: 25%;border: 7px solid transparent;border-top: 8px solid #1e4164;}
.line-height-1_2{line-height:1.2;}
.font-size-top{font-size:7.4vw;}
.collapsed-disp{display:none;}
.collapsed .collapsed-disp{display:block;}
.collapsed .collapsed-nodisp{display:none;}

/*slick*/
.slick-prev{left:20px;}
.slick-next{right:20px;}
.slick-prev,.slick-next{z-index:300;background:#fdf49c!important;width:50px;height:50px;border-radius:50rem;}
.slick-prev:hover,.slick-next:hover{background:#fdf49c!important;}
.slick-prev:before{
    font-family:FontAwesome;
    content:"\\f104";
    font-size:30px;
    margin-right:.25rem;
    color:#000;
}
.slick-next:before{
    font-family:FontAwesome;
    content:"\\f105";
    font-size:30px;
    margin-left:.25rem;
    color:#000;
}

.bg-arch{
  background-color: #faf8e6;
  border-radius: 2000px 2000px 0 0 / 300px 300px 0 0;
  margin: 16px 0 0;
  min-height: 300px;
}
.arrow{
    position: relative;
    padding: 15px;
    margin-bottom: 40px;
}
.arrow:before{
    content: '';
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translateX(-50%);
    border-top: 30px solid #d88252;  /* 好みで色を変えてください */
    border-right: 40px solid transparent;
    border-left: 40px solid transparent;
}
.arrow::after{
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    border-top: 30px solid #ecaf8d;  /* 好みで色を変えてください */
    border-right: 40px solid transparent;
    border-left: 40px solid transparent;
}
.bg-saijo{
  background-image: url('/assets/img/bg-saijo.png');
  background-position: top center;
  background-size: 140%;
  background-repeat: no-repeat;
}
.border-movie{border:3px solid #444;}
.btn-movie{margin:0; padding:0;}
.btn-movie:hover{opacity: 0.75;}
.l-movie{width:80%;height:auto;background:none;margin:0 auto}

@media (min-width:375px) {
  .d-375-none{
    display: none;
  }
  .heading {
    align-items: center;
    display: flex;
    justify-content: center;
  }
  .heading::before,
  .heading::after {
    content: "";
    background-color: #444;
    height: 1px;
    width: 5%;
  }
  .heading::before {
    margin-right: 3%;
  }
  .heading::after {
    margin-left: 3%;
  }
}

@media (min-width:576px) {
  .font-size-top{font-size:2.4rem;}
  .bg-arch{
    background-color: #faf8e6;
    border-radius: 2000px 2000px 0 0 / 300px 300px 0 0;
    margin: 16px -200px 0;
    padding-top:10px;
    min-height: 300px;
  }
  .heading::before,
  .heading::after {
    width: 15%;
  }
  .heading::before {
    margin-right: 15px;
  }
  .heading::after {
    margin-left: 15px;
  }
}
  @media (min-width:768px) {
    .fig-medal{display:block; position:absolute; top:-20px; left:10px; width:80px;}
    .keyvisual-catch{top:7px;left:15px;width:340px;}
    .keyvisual-title{width:400px; margin:0; padding:20px 0;}
    .keyvisual-price{width:400px;padding-bottom:10px;background:transparent;border:none;margin-bottom:0;}
    .keyvisual-human{width:300px;bottom:0px;right:-80px;}
    .keyvisual-saidan{width:300px;bottom:0px;left:auto;right:20px;}
    .keyvisual-img{height:auto;max-height:100%;position:initial;}
    .keyvisual-medal{position:absolute;width:100px;top:-30px;right:15px;}
    .keyvisual-movie{display:none;}
    .w-md-470px {width:470px;}
    .line {margin: 0.5rem 1rem; width: 1.5px; background-color: #fff;}
    .bg-md-orange{background:#d8804e;}
    .bg-md-base_ct{background:#f6f3d4;}
    .color-md-white{color:#fff;}
    .l-movie{width:400px;height:auto;background:none;margin:0 auto}
}
@media (min-width:992px) {
  .bg-base2{background:rgb(245 242 225 / 100%);}
  .fig-medal{display:block; position:absolute; top:-20px; left:10px; width:80px;}
  .bg-lg-white{background:#fff;}
  .border-lg-orange{border:1px solid #d8804e;}
  .keyvisual-catch{top:11px;left:15px;width:500px;}
  .keyvisual-title{width:400px; margin:0; padding:20px 0 15px;}
  .keyvisual-price{width:500px;padding-bottom:30px;}
  .keyvisual-human{width:310px;height:auto;bottom:0px;right:-90px;}
  .keyvisual-saidan{width:450px;bottom:-10px;right:0px;}
  .keyvisual-medal{position:absolute;width:120px;top:30px;right:5px;}
  .font-size-lg-1_8{font-size:2rem;}
  .bg-lg-yellowborder{width:100%;height:100%;background:#ffff9e;position:absolute;left:-20%;bottom:0;z-index:50;border-radius:0 50rem 50rem 0;}
  .bg-saijo{background:none;}
  .l-movie{position:absolute;width:190px;height:auto;top:-230px;right:230px;z-index:1000;background:none;}
}
@media (min-width:1200px) {
    .fig-medal{display:block; position:absolute; top:-20px; left:20px; width:100px;}
    .keyvisual-saidan{width:580px;bottom:-10px;right:0px;}
    .keyvisual-human{width:360px;height:auto;bottom:0px;right:-100px;}
    .keyvisual-medal{position:absolute;width:120px;top:-20px;right:5px;}
    .l-movie{position:absolute;width:290px;height:auto;top:-230px;right:290px;z-index:400;background:none;}
}

</style>
EOF;
appConfigPage::$js = <<<EOF
<script src="/assets/slick/slick.min.js"></script>
<script>
    $(function() {
        const target = "#keyvisual";
        $(target).imagesLoaded(function() {
            $(target).find('[data-keyvisual-img]').addClass('is-trans-active');
        });
        $(window).resize(function() {
            $(target).find('[data-keyvisual-img]').removeClass('trans-wait-12 trans-wait-9 trans-wait-5 trans-wait-3 trans-wait-2 trans-wait-1');
        });
        $('#columnlist').slick({
            arrow:true,
            dots: true,
            centerMode: true,
            slidesToShow: 1,
            infinite: true,
            variableWidth: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    centerPadding: '40px'
                }
            }]
        });
    });
</script>
EOF;
?>

<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<header id="keyvisual" class="bg-dyellow color-dgray w-100 overflow-hidden pt-4 overflow-hidden">
  <div class="bg-arch">
    <div class="pb-2">
      <div class="container position-relative">
        <img data-animation data-keyvisual-img src="/assets/img/medal.png?20231006" alt="月間利用ユーザー25000突破" class="keyvisual-medal trans trans-wait-12" />
        <div data-animation class="trans trans-wait-1 trans-bottom_xsmall text-center w-200px w-lg-240px font-size-1 font-size-lg-1_2 line-height-1 color-white p-2 keyvisual-balloon rounded bg-plan5">東京都のお葬式専門</div>
        <h1 data-animation class="trans trans-wait-1 trans-bottom_xsmall font-size-top font-size-lg-3 line-height-1_2 font-weight-bold pt-3">東京でお葬式なら<br>都民の<span class="color-orange">頼れる</span>葬儀サービス</h1>
        <div class="w-100per w-md-470px w-lg-500px">
          <div data-animation class="trans trans-wait-1 trans-bottom_xsmall text-center heading font-size-1_2 font-weight-bold pb-2">特別な<span class="color-pink">最安プラン</span>でご提供します</div>
        </div>
      </div>
    </div>

    <div class="container position-relative">
      <div class="keyvisual-img">
        <div class="keyvisual-movie">
          <a href="#movie-header">
            <img src="/assets/img/top/fig_baloon_movie.png" alt="CM放映中" data-keyvisual-img class="w-100 trans trans-bottom_xsmall trans-wait-15">
          </a>
        </div>
        <div class="keyvisual-human">
          <img src="/assets/img/top/keyvisual_human.png" alt="写真_人物" data-keyvisual-img class="w-100 trans trans-wait-9 trans-left_small trans-duration-slow" />
        </div>
        <div class="keyvisual-saidan">
          <img src="/assets/img/top/keyvisual_saidan.png" alt="写真_祭壇" data-keyvisual-img class="w-100 trans trans-wait-5" />
        </div>
      </div>
      <div data-animation class="trans trans-wait-3 keyvisual-price position-relative rounded overflow-hidden">
        <div class="row no-gutters rounded-pill bg-md-orange color-md-white justify-content-center mb-2">
          <div class="col-12 col-md-auto font-size-1 font-size-lg-1_2 bg-orange color-white p-1 text-center">
            <span class="d-block">都&nbsp;民&nbsp;価&nbsp;格</span>
          </div>
          <div class="line"></div>
          <div class="col-12 col-md-auto font-size-1 font-size-lg-1_2 text-center p-1">
            <span class="d-block"><?php echo appConfigPlan::plan['plan1']['name']; ?>をご利用の場合</span>
          </div>
        </div>

        <div class="row align-items-end no-gutters text-center text-lg-left pt-lg-3 m-2 justify-content-center">
          <div class="col-2 col-sm-1 col-lg-1 font-size-1_2 font-weight-bold line-height-1 color-pink">
            <span class="d-block pb-1">最</span><span class="d-block pb-1">安</span>
          </div>
          <div class="w-200px col-sm-5 col-md-6 col-lg-5 text-right text-lg-center color-pink">
            <span class="font-size-3 mr-1 font-oswald line-height-0"><?php echo appConfigPlan::plan['plan1']['price']; ?></span>
            <span class="font-size-1_2 font-size-lg-2 font-weight-bold">円</span>
          </div>
          <div class="col-12 col-sm-5 col-lg-6 text-sm-right text-lg-center">
            <span class="font-size-lg-1_4 font-weight-bold mr-2 line-height-0">（税込</span><span class="font-size-lg-2 mr-1 font-oswald"><?php echo appConfigPlan::plan['plan1']['priceZei']; ?></span><span class="font-size-lg-1_4 font-weight-bold">円）～</span>
          </div>
        </div>
        <button class="btn w-100 p-2 border-top collapsed d-md-none" type="button" data-toggle="collapse" data-target="#keyvisual-cautionarynote" aria-controls="keyvisual-cautionarynote" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-plus-circle color-orange collapsed-disp" aria-hidden="true"></i>
          <i class="fa fa-minus-circle color-orange collapsed-nodisp" aria-hidden="true"></i>
        </button>
        <div id="keyvisual-cautionarynote" class="collapse-lg-expand collapse">
          <p class="font-size-0_8 line-height-1_2 m-0 p-2 p-lg-0">
            ※祭壇の有無、規模はプランにより異なります<br>※⽕葬料⾦はお客様負担となります<br class="d-none d-lg-block">（23区内：44,000円～90,000円 程度／23区以外：無料～90,000円 程度）
          </p>
        </div>
      </div>
    </div>
  </div>

  <div id="movie-header" class="pt-2 pt-md-0 bg-base">
    <div class="bg-base bg-md-base_ct pt-3 pb-4 p-lg-0">
      <div class="container position-relative z-index-100 trans trans-wait-1" data-animation>
        <div class="l-movie">
          <h2 class="font-size-1_4 font-size-md-2 font-size-lg-1 text-center font-weight-bold title"><span class="color-orange">ＣＭ&nbsp;放映中！</span></h2>
          <div id="movie" class="embed-responsive embed-responsive-16by9 bg-white border-movie">
            <button class="btn-movie embed-responsive-item" data-load-movie='{"target":"#movie","movie":"/assets/media/movie.mp4"}'>
              <img src="/assets/img/top/thum_movie.png" alt="ムービー再生" class="w-100 trans" data-keyvisual-img>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="bg-orange">
  <div class="container p-1">
    <picture>
      <source media="(min-width:760px)" srcset="/assets/img/bnr_upgrade_l.png">
      <img src="/assets/img/bnr_upgrade.png" alt="お値段そのままでプラン内容をグレードアップいたしました。今後も都民の皆様の支えとなるよう努力を重ねてまいります。" class="w-100 image-rendering">
    </picture>
  </div>
</div>

<section id="sec-cta" class="container pt-4">
  <div class="container p-0 pl-lg-4 pr-lg-4 pb-md-5">

    <div class="row align-items-end no-gutters mt-3 mr-lg-4 ml-lg-4">
      <div class="col-12 col-md-6 pb-3 pb-md-0 pr-md-2">
        <a href="<?php echo appConfigSite::sitemap['hurry']['path']; ?>">
          <img src="/assets/img/bnr_cta_hurry.png?20230911" alt="お急ぎの方へ_ボタン" class="w-100 d-block mx-auto">
        </a>
      </div>
      <div class="col-12 col-md-6 pl-md-2">
        <a href="<?php echo appConfigSite::sitemap['plan']['path']; ?>">
          <img src="/assets/img/bnr_cta_plun.png?20230911" alt="プラン一覧_ボタン" class="w-100 d-block mx-auto">
        </a>
      </div>
    </div>

    <div class="mt-3 mr-lg-4 ml-lg-4">
      <a href="<?php echo appConfigSite::sitemap['contact']['path']; ?>" onClick="gtag('event', 'click', {'event_category':'button','コンバージョン':'プラン・料金⇒資料請求'});">
        <picture>
          <source media="(min-width:768px)" srcset="/assets/img/bnr_contact_l.png?20231004">
          <img src="/assets/img/bnr_contact.png?20231004" alt="資料請求" class="w-100 d-block mx-auto">
        </picture>
      </a>
    </div>

  </div>
</section>

<section id="sec-info">
  <div class="container pt-5 pb-1 pt-md-0">
    <?php include_once '../_module/planinfo.php'; ?>
  </div>
  <div class="align-items-center text-center pb-5 pt-4">
    <h2 class="color-dgray font-size-1_4 font-size-md-1_6 font-size-lg-2 line-height-1_4 text-center font-weight-bold mb-3">都民の皆様なら<span class="bg-contrast-under color-pink font-size-lg-2 ml-2 mr-2">最安値価格</span>で<br class="d-lg-none">ご利用頂ける<br class="d-sm-none">葬儀の強い味方です</h2>
  </div>
  <div class="arrow"></div>

  <section id="sec-plan" class="pb-4">
    <?php include '../plan/_module/list.php'; ?>
  </section>
</section>

<section id="sec-comparison" class="pb-4">
  <?php include_once '../_module/comparison.php'; ?>
</section>

<section id="sec-saijo" class="bg-saijo">
  <div class="bg-base2 pb-5">
    <div class="container pt-5">
      <h2 class="font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3 color-dgray">近隣の葬儀場をご案内</h2>
      <div class="pb-2 text-center color-dgray">
        <p class="font-size-1 font-size-lg-1_2 line-height-1_2">東京都内で<span class="color-orange pl-1 pr-1">300箇所以上</span>の<br class="d-sm-none">利用可能式場がございます</p>
      </div>

      <div class="container bg-white rounded-1 border p-3 p-lg-4">
        <div class="pt-4 pb-2">
          <?php include_once '../_module/saijo_search.php'; ?>
        </div>
        <div id="arealist1" class="d-none d-lg-block w-100 h-600px bg-lgray position-relative" data-saijomap="false">
          <div class="position-middlecenter text-center">
            <div class="spinner-border" role="status">
              <span class="sr-only">Loading...</span>
            </div>
            <div class="pt-2">LOADING</div>
          </div>
        </div>
        <div id="arealist2" class="d-lg-none">
          <?php include_once '../saijo/_module/arealist.php'; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <?php appFuncDisp::cta('業界最安値クラス＆最高品質にて<br class="d-lg-none">お手配致します'); ?> -->

<section id="sec-about" class="pb-4">
  <div class="pt-5">
    <?php include_once '../about/_module/3melit.php'; ?>
  </div>
  <div class="pt-2 pb-4 row align-items-center no-gutters justify-content-center">
    <a href="<?php echo appConfigSite::sitemap['about']['path']; ?>" class="btn bg-lgray-gradient w-lg-400px border text-center p-3 font-size-lg-1_2 text-decoration-none border d-block"><span class="color-dgray">続きを読む<i class="fa fa-chevron-circle-right ml-2 color-orange" aria-hidden="true"></i></span></a>
  </div>
</section>

<section id="sec-voice" class="pt-5 overflow-hidden bg-base">
  <div class="pb-5 position-relative">
    <h2 class="font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3 color-dgray">お葬式･家族葬で<br class="d-sm-none">ご利用いただいた<span class="color-orange pl-1 pr-1"><?php echo appConfigSite::sitemap['voice']['title']; ?></span></h2>
    <div class="pb-2 text-center color-dgray">
      <div class="font-size-1 font-size-lg-1_2 line-height-1_2"><span class="color-orange pl-1 pr-1">お客さま満足度98%</span> <br class="d-sm-block d-md-none">実際にご利用いただいた<br class="d-sm-none">お客様のアンケートをご紹介しています</div>
      <p class="font-size-0_8 font-size-lg-1">※対象期間 2022年5月〜2023年8月（自社アンケート調べ）</p>
    </div>
    <div id="columnlist">
      <?php appFuncDisp_voice::list(voiceDatabasePostData::data, '../voice/_module/list.php', 7); ?>
    </div>
    <div class="mt-4 pt-4 pb-4 row align-items-center no-gutters justify-content-center">
      <a href="<?php echo appConfigSite::sitemap['voice']['path']; ?>" class="btn bg-lgray-gradient w-lg-400px border text-center p-3 font-size-lg-1_2 text-decoration-none border d-block"><span class="color-dgray"><?php echo appConfigSite::sitemap['voice']['nav']; ?>をもっと見る<i class="fa fa-chevron-circle-right ml-2 color-orange" aria-hidden="true"></i></span></a>
    </div>
  </div>
</section>

<section id="sec-news" class="pt-4">
  <div class="container pt-5 pb-5">
    <h2 class="border-contrast-left pl-3 text-left font-size-1_4 font-size-md-1_6 font-size-lg-2 font-weight-bold mb-md-3">お知らせ</h2>

    <div class="container p-0 pb-2">
      <?php appFuncDisp_news::list(newsDatabasePostData::data, '../news/_module/index.php', 4); ?>
    </div>

    <div class="mt-4 pt-4 pb-4 row align-items-center no-gutters justify-content-center">
      <a href="<?php echo appConfigSite::sitemap['news']['path']; ?>" class="btn bg-lgray-gradient w-lg-400px border text-center p-3 font-size-lg-1_2 text-decoration-none border d-block"><span class="color-dgray"><?php echo appConfigSite::sitemap['news']['title']; ?>一覧へ<i class="fa fa-chevron-circle-right ml-2 color-orange" aria-hidden="true"></i></span></a>
    </div>

  </div>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<script>
  $(document).ready(function() {
    const movieCall = '[data-load-movie]';
    $(movieCall).on('click', function() {
      loadMovie = $(this).data('load-movie');
      target = loadMovie.target;
      movie = loadMovie.movie;
      $(this).remove();
      setTimeout(function() {
        $(target).append('<video class="embed-responsive-item" src="' + movie + '" controls playinline autoplay controlsList="nodownload" oncontextmenu="return false;"></video>');
      }, 1000);
    });
  });
</script>
<?php require_once '../_tmpl/footer.php'; ?>