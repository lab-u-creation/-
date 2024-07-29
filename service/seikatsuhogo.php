<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$title = appConfigSite::sitemap['serviceSeikatsuhogo']['title'];
appConfigPage::$description = '生活保護を受給されている方が、自己負担なしで行える葬儀です。';
appConfigPage::$css = <<<EOF
<style>
    .color-jitakuso {
        color: #59d38a;
    }
    .bg-kv {
        background-image: url("/assets/img/bg-yellowfrower.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-color:#f9f7ea;
    }
    @media (min-width: 768px) {
        .bg-kv {
            background-position: 0 0;
        }
    }
    .kv-photo1 {
        transform:translate(-5%, 10%) rotate(-3deg);
        margin: 0 auto;
        display: block;
        border: 5px solid #fff;
        box-shadow: 0px 0px 15px -5px #777777;
    }
    .kv-photo2 {
        position:absolute;
        bottom:-35%;
        right:10px;
        z-index:1;
        width:40%;
    }
    @media (min-width: 768px) {
        .kv-photo1 {
            transform:translate(-5%, 5%) rotate(6deg);
        }
        .kv-photo2 {
            bottom:-40%;
            right:10px;
            width:50%;
        }
    }
    .trans-top_large {
        transform: translate(0, -50%) rotate(10deg);
        transition-duration: 0.7s;
    }
    .h-kv{
        min-height: 370px;
        margin-top:-15px;
    }
    @media (min-width: 768px) {
        .h-kv{
            min-height: 270px;
        }
    }
    @media (min-width: 992px) {
        .h-kv{
            min-height: 330px;
            margin-top:5px;
        }
    }
    .border-bottom-note{
        border-bottom:1px dotted #ccc;
    }

    @media (min-width:576px) {
      .seikatuhogo{
        position:relative;
        margin-top: -38px;
      }
    }
    .list.asterisk li:nth-child(1):before{
      content:"※1";
    }
    .list.asterisk li:nth-child(2):before{
      content:"※2";
    }
</style>
EOF;
?>

<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<section class="pb-4">
    <div class="bg-kv pt-4 pb-4 h-kv">
        <div class="container pt-4">
            <div class="row align-items-center">
                <div class="col-12 col-md-7">
                    <header class="trans trans-duration-slow" data-animation>
                        <h1 class="font-size-2 font-size-lg-3 color-orange font-weight-bold pt-2 pt-lg-0 pb-2 text-center font-notoserif">
                            <?php echo appConfigPage::$title; ?>
                        </h1>
                        <div class="text-center color-dgray font-size-1 font-size-lg-1_4">生活保護を受給されている方が、<br><span class="bg-contrast-under color-pink font-weight-bold font-size-1_4 font-size-lg-1_7">自己負担なし</span><sup>※1</sup>で行える葬儀です。</div>
                    </header>
                </div>
                <div class="col-12 col-md-5">
                    <div class="trans trans-top_large trans-wait-5 position-relative" data-animation>
                        <img src="/assets/img/spacer.png" data-echo="/assets/img/service/pic_yellowfrower.png" alt="花束" class="kv-photo2 trans trans-wait-12 trans-bottom_xsmall" data-animation>
                        <img src="/assets/img/blank.png" data-echo="/assets/img/service/keyvisual_seikatuhogo.png" alt="image" class="bg-white w-300px w-lg-100per kv-photo1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5 pt-lg-4 font-size-1 font-size-lg-1_2 line-height-2">
      <p>生活保護を受給されている方が、ご親族の葬儀を行うための収入や資産をお持ちでない場合に、<br class="d-none d-lg-block">自治体の「葬祭扶助制度<sup>※2</sup>」を利用することで行えます。福祉葬や民生葬とも呼ばれます。</p>

      <ul class="list asterisk font-size-0_8 line-height-1_4">
        <li class="pb-1">葬祭扶助の申請が受理された場合、申請した範囲内でのご葬儀が行政機関の負担によりお客様の自己負担なしで執り行えます。申請が受理されなかった場合は、葬儀費用はお客様のご負担となります。</li>
        <li class="pb-1">葬祭扶助制度とは、経済的に葬儀の費用を用意することが難しい方を自治体が支援する制度です。本ページでのご案内は申請の受理を確約するものではございません。</li>
      </ul>
    </div>
</section>




<section id="sec1" class="container pt-sm-4 pb-3">
  <div class="container p-0 pl-md-4 pr-md-4">
    <div class="border-sm-contact rounded p-sm-3 pr-md-4 pl-md-4 pr-lg-5 pl-lg-5 pb-lg-4">

          <header class="seikatuhogo sideborder sideborder-top50 text-center">
            <div class="col-12 w-lg-800px mx-auto text-center rounded-pill bg-dyellow">
              <h2 class="font-size-1_2 font-size-lg-1_6 pl-3 font-weight-bold pt-2 pb-2">
                葬儀が必要になったら、<br class="d-sm-none">まずはご連絡下さい
              </h2>
            </div>
          </header>

          <div class="row no-gutters align-items-center justify-content-center mb-md-1 mt-lg-4 mb-lg-3">
            <div class="col-12 col-md-11 col-lg-auto order-2 order-md-1">
                <ul class="list check-circle m-0 font-size-1 font-size-lg-1_2">
                    <li class="pt-2 pb-2">生活保護葬には葬祭扶助の申請が必要ですが、<br class="d-none d-sm-block">申請は<span class="color-pink">ご依頼後から火葬までの間</span>に行えば問題ありません。</li>
                    <li class="pt-2 pb-2">お支払いは自治体が行いますので、お客様の<span class="color-pink">お支払いは不要</span>です。</li>
                </ul>
            </div>
          </div>

      <div class="mt-2 pb-md-2">
        <picture>
          <source media="(min-width:720px)" srcset="/assets/img/bnr_cta_l.png?20230911">
          <img src="/assets/img/bnr_cta.png?20230911" alt="電話番号：<?php echo appConfigSite::tel; ?>" class="w-100 d-block mx-auto">
        </picture>
      </div>
    </div>
  </div>
</section>

<section id="sec2" class="pt-5">
  <div class="container pb-4 pb-lg-5">
    <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray border-contrast-left pl-2">生活保護葬の内容</h3>
      <div class="row no-gutters m-0">
         <div class="col-12 col-md-4 p-0 pb-2">
             <img src="/assets/img/blank.png" data-echo="/assets/img/service/pic_saidan.png?20231018" class="w-100" alt="祭壇写真">
         </div>
         <div class="col-12 col-md-8 p-0 pl-md-4">
            <p class="color-dgray font-size-1 font-size-lg-1">火葬のみのお葬式となります。（通夜・告別式・お坊さまのお手配はできません）<br>
              火葬までに必要な、棺・骨壺・故人さまのご搬送・ドライアイス・火葬料金などが含まれます。</p>
            <p class="color-dgray font-size-0_8 font-size-lg-0_9">※告別式・通夜・お坊さまのお手配などを行うと、経済的な余裕があると判断され、扶助費の支給を受けられません。</p>
         </div>
      </div>
  </div>

  <div class="container pb-5">
    <div class="">
      <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray border-contrast-left pl-2">葬祭扶助の申請方法</h3>
      <div class="color-dgray font-size-1_2 font-size-lg-1_4" style="font-feature-settings: 'palt'">【申請先】</div>
    </div>
    <div class="">
      <p class="color-dgray font-size-1">申請する方の住民票がある自治体の役所または福祉事務所</p>
      <div class="color-dgray font-size-1_2 font-size-lg-1_4" style="font-feature-settings: 'palt'">【申請タイミング】</div>
      <p class="color-dgray font-size-1">葬儀前（火葬前）に行う必要があります。</p>
    </div>
    <div class="color-dgray font-size-1">事前に福祉事務所のケースワーカー様などに相談しておくと安心ですが、急に葬儀が必要になった場合は、まずは都民のお葬式にお電話ください。<br class="d-none d-lg-block">葬儀のお手配や申請方法などについてもご案内いたします。</div>

    <div class="bg-lbase p-3 pr-md-4 pl-md-4 border-gray mt-4">
      <div>
        <h2 class="font-size-1_6 font-size-lg-2 font-weight-bold">
          <i class="fa fa-exclamation-circle color-pink" aria-hidden="true"></i>
          <span class="font-size-1_4 font-size-lg-1_6">ご注意</span>
        </h2>
          <div class="font-size-lg-1_1 line-height-1_7">葬儀費用を自分で立て替え、葬儀後（火葬後）に申請すると、ご自分で葬儀を行うだけの蓄えがあったと見なされ、申請が受理されないのでお気をつけください。</div>
      </div>

    </div>
  </div>


  <div class="container pb-2 pb-lg-5">
    <div class="align-items-center no-gutters">
      <div class="col-12">
        <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray border-contrast-left pl-2">ご葬儀の流れ</h3>
      </div>
    </div>

    <div class="border mb-4">
      <div class="row no-gutters pt-3 pb-4">

        <div class="col-12 col-lg-6">
          <div class="p-3">
            <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-sm-none">1.ご依頼</h4>
            <div class="row no-gutters">
              <div class="col-12 col-sm-3 overflow-hidden">
                <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/flow/pic_contact.png" class="w-100per h-120px is-trans-active" alt="2.ご依頼" style="object-fit:cover;">
              </div>
              <div class="col-12 col-sm-9 pl-sm-3 pt-2 pt-sm-0">
                <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-none d-sm-block">1.ご依頼</h4>
                まずは「都民のお葬式」にお電話ください<br><span class="font-size-1_4 font-oswald color-pink">0120-922-720</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="p-3">
            <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-sm-none">2.納棺</h4>
            <div class="row no-gutters">
              <div class="col-12 col-sm-3 overflow-hidden">
                <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/flow/pic_coffin.png" class="w-100per h-120px is-trans-active" alt="2.納棺" style="object-fit:cover;">
              </div>
              <div class="col-12 col-sm-9 pl-sm-3 pt-2 pt-sm-0">
                <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-none d-sm-block">2.納棺</h4>
                ご指定の場所（ご自宅・病院・警察署など）に最短1時間程度でお迎えにあがります。
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="p-3">
            <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-sm-none">3.ご安置</h4>
            <div class="row no-gutters">
              <div class="col-12 col-sm-3 overflow-hidden">
                <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/flow/pic_enshrined.png" class="w-100per h-120px is-trans-active" alt="3.ご安置" style="object-fit:cover;">
              </div>
              <div class="col-12 col-sm-9 pl-sm-3 pt-2 pt-sm-0">
                <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-none d-sm-block">3.ご安置</h4>
                故人様を弊社指定の安置場所までご搬送いたします。
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="p-3">
            <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-sm-none">4.お打ち合わせ</h4>
            <div class="row no-gutters">
              <div class="col-12 col-sm-3 overflow-hidden">
                <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/flow/pic_meeting.png" class="w-100per h-120px is-trans-active" alt="4.お打ち合わせ" style="object-fit:cover;">
              </div>
              <div class="col-12 col-sm-9 pl-sm-3 pt-2 pt-sm-0">
                <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-none d-sm-block">4.お打ち合わせ</h4>
                ご遺族様の要望に沿って葬儀の内容を決めていきます。葬儀の内容が決まりましたら、お見積書を提示させていただきます。
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="p-3">
            <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-sm-none">5.火葬</h4>
            <div class="row no-gutters">
              <div class="col-12 col-sm-3 overflow-hidden">
                <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/flow/pic_pot.png" class="w-100 h-120px is-trans-active" alt="5.火葬" style="object-fit:cover;">
              </div>
              <div class="col-12 col-sm-9 pl-sm-3 pt-2 pt-sm-0">
                <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-none d-sm-block">5.火葬</h4>
                火葬を行います。<br>火葬後は収骨し、骨壺へ納めて葬儀は終了となります。
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</section>

<section id="sec3" class="pb-4">
    <h2 class="font-size-1_4 font-size-md-1_6 font-size-lg-2 font-weight-bold color-dgray mt-5 mb-4 text-center">他のプランも<br class="d-sm-none">ご用意がございます</h2>
    <?php require_once '../plan/_module/list.php'; ?>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
