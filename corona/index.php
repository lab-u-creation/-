<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$tmpl = "planindex";
appConfigPage::$title = 'コロナ関連葬儀をご検討の皆様へ';
appConfigPage::$css = <<<EOF
<style>
  .keyvisual {
    background-image: url("/assets/img/corona/pic_bg.png");
    background-repeat: no-repeat;
    background-position: right -115px bottom 0;
    background-size: 370px;
    overflow:hidden;
    margin-top:-10px;
  }
  .keyvisual-baloon {
    bottom: 0;
    right: -25px;
  }
  .bg-orange-gradient {background: #d8804e;}

  @media (min-width: 768px) {
    .keyvisual-baloon {
      bottom: -40px;
      right: -20px;
    }
    .keyvisual {
      background-position: right -120px bottom;
      background-size: 500px;
    }
  }

  @media (min-width: 992px) {
    .keyvisual {
      background-position: right -20px bottom 0;
      background-size: 400px;
    }
    .keyvisual-baloon {
      right: 10px;
    }
    .bg-orange-gradient {
        background: linear-gradient(90deg, rgba(255, 255, 255, 1), rgba(216, 128, 78, 1) 10% 90%, rgba(255, 255, 255, 1));
    }
  }

  @media (min-width: 1200px) {
    .keyvisual {
      background-position: right bottom;
      background-size: 480px;
    }
    .keyvisual-baloon {
      right: 100px;
    }
  }
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<section id="keyvisual" class="bg-base">
  <div>
    <div class="container keyvisual pt-4 pb-4 position-relative">
      <img src="/assets/img/corona/pic_human.png" alt="写真_葬儀場スタッフ" class="position-absolute keyvisual-baloon w-50per w-md-45per w-lg-330px">
      <div class="row">
        <div class="col-12 col-md-8">
          <h2 class="font-size-1_4 font-size-lg-2 color-dgray font-weight-bold pt-4 pb-2">コロナ関連葬儀をご検討の皆様へ</h2>
          <div class="w-60per w-lg-100per font-size-lg-1_2 line-height-1_7 pb-3">都民のお葬式ではコロナ関連葬儀への対応を行っております。<br>ご相談は24時間365日、ご不安な事やご不明点は気軽にお問い合わせ下さい。</div>

          <div class="w-100per w-lg-400px">
            <div class="text-center font-oswald p-1">
              <div class="d-block text-decoration-none bg-pink rounded p-3 box-shadow-l">
                <div class="line-height-1 pb-1">
                  <span class="font-size-1_4 font-size-lg-2 color-white mr-lg-2"><i class="fa fa-phone" aria-hidden="true"></i></span>
                  <span class="pl-1 font-size-1_4 font-size-lg-2 color-white"><span class="pl-1 pr-1">24</span>時間<span class="pl-1 pr-1">365</span>日対応</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section id="sec2" class="pb-5 pt-4">
  <div class="container pt-3 pb-3 font-size-1_4 font-size-lg-2 text-center bg-orange-gradient mt-2 mb-5">
    <div class="line-height-1_4 color-white pl-1 pr-1">新型コロナウィルス関連葬儀のご案内</div>
  </div>

  <div class="container pb-4">
    <div class="align-items-center no-gutters">
      <div class="col-12">
        <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray border-contrast-left pl-2">適切な対応でご安心してお任せいただけます</h3>
        <p class="font-size-lg-1_1 line-height-1_7">国のガイドラインに沿った感染対策を実施の上で対応いたします。<br class="d-none d-lg-block">
          感染対策用の物品を使用するため、別途感染症対策費用が発生いたします。</p>
        <p class="font-size-lg-1_1 line-height-1_7">※対策費用には御身体の処置（古式湯灌）、お迎え・搬送に使用する備品や除菌対策等一式が含まれて
          おります。</p>
      </div>
    </div>
  </div>

  <div class="container pb-4">
    <div class="align-items-center no-gutters">
      <div class="col-12">
        <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray border-contrast-left pl-2">対応料金について</h3>
        <div class="pt-1 pb-3 w-md-600px">
          <img src="/assets/img/blank_square.png" data-echo="/assets/img/corona/fig_illustrated_corona1.png?202301" alt="図" class="w-100 trans">
        </div>
        <ul class="list asterisk">
          <li class="pb-2">火葬は国が定めた火葬場でのみ執り行うことができます。<br>⽕葬料⾦は別途お客様負担となります（23区内：40,000円～75,000円 程度／23区以外：無料～78,000円 程度）<br>
            火葬料金は火葬場ごとに定められており、ご利用者様の住所や時期により変動がございます。予めご了承ください。
          </li>
          <li>対応内容により金額が異なりますので詳しくはお電話にてお問い合わせください。<br>お客様のご状況をお伺いの上、ご案内させて頂きます。</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container pb-4">
    <div class="align-items-center no-gutters">
      <div class="col-12">
        <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray border-contrast-left pl-2">ご葬儀の形式について</h3>
        <p class="font-size-lg-1_1 line-height-1_7">
          ご葬儀は通常通りすべてのプランからお選び頂けますが、斎場や火葬場により対応が異なる場合がございますので、<br class="d-none d-lg-block">お打ち合わせ内でお客様のご要望に合わせてご提案させて頂きます。</p>
        <p class="font-size-lg-1_1 line-height-1_7">お客様のご希望のエリア・内容をお伺いし最もお客様のご要望に近い施設をご提案をさせて頂きます。</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="align-items-center no-gutters">
      <div class="col-12">
        <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray border-contrast-left pl-2">ご葬儀の流れ</h3>
      </div>
    </div>

    <header class="position-relative">
      <h3 class="font-size-1 font-size-lg-1_4 bg-plan1 color-white m-0 p-3">ご逝去日</h3>
    </header>
    <div class="border mb-4">
      <div class="row pt-3 pb-4">
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
                <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/option/thum_enshrined.png" class="w-100per h-120px is-trans-active" alt="3.ご安置" style="object-fit:cover;">
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

      </div>
    </div>


    <header class="position-relative">
      <h3 class="font-size-1 font-size-lg-1_4 bg-plan1 color-white m-0 p-3">1日目・2日目：葬儀</h3>
    </header>
    <div class="border">
      <div class="row pt-3 pb-4">

        <div class="col-12 col-lg-6">
          <div class="p-3">
            <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-sm-none">5.火葬</h4>
            <div class="row no-gutters">
              <div class="col-12 col-sm-3 overflow-hidden">
                <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/flow/pic_pot.png" class="w-100per h-120px is-trans-active" alt="5.火葬" style="object-fit:cover;">
              </div>
              <div class="col-12 col-sm-9 pl-sm-3 pt-2 pt-sm-0">
                <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-none d-sm-block">5.火葬</h4>
                火葬を行います。<br>火葬後は収骨し、骨壺へ納めて葬儀は終了となります。
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6">
          <div class="p-3">
            <h4 class="font-size-1_2 font-size-lg-1_2 font-weight-bold d-sm-none">6.お支払い</h4>
            <div class="row no-gutters">
              <div class="col-12 col-sm-3 overflow-hidden">
                <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/flow/pic_reception.png" class="w-100per h-120px is-trans-active" alt="6.お支払い" style="object-fit:cover;">
              </div>
              <div class="col-12 col-sm-9 pl-sm-3 pt-2 pt-sm-0">
                お式後に直接葬儀担当者へお支払いください。<br>
                ※お支払方法につきましては、お打ち合わせ時にご確認ください。
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section id="sec3" class="pt-4 pb-3 pb-md-5">
  <div class="container pt-3 pb-3 font-size-1_4 font-size-lg-2 text-center bg-orange-gradient mt-2 mb-4">
    <h2 class="line-height-1_4 color-white pl-1 pr-1 m-0">ご相談ください</h2>
  </div>

  <div class="container">
    <div class="row align-items-start">
      <div class="col-12 col-md-4 pt-4 pr-3 pl-3">
        <img src="/assets/img/corona/pic_corona.jpg" class="w-100per w-lg-100per" alt="写真_スタッフ">
      </div>
      <div class="col-12 col-lg-8 pt-4">
        <div class="font-size-lg-11_1 line-height-2 color-dgray">
          <p>これまではお通夜・告別式・火葬場での立会いはほとんどできませんでしたが（葬儀社が火葬場で立会い・収骨後にご遺族様へお届け）、国のガイドラインが改定されたことにより、感染症対策を行ったうえで、従来通りのお通夜・告別式・火葬場での立会いが行えるようになってきております。</p>
          <p>故人様へ触れたり、お棺にお花を入れることも可能です。ご心配なことがございましたら、お気軽にお問い合わせ下さい。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="sec4" class="pt-3 pt-md-5 pb-4">
    <h2 class="font-size-1_4 font-size-md-1_6 font-size-lg-2 font-weight-bold color-dgray mt-5 mb-4 text-center">他のプランも<br class="d-sm-none">ご用意がございます</h2>
    <?php require_once '../plan/_module/list.php'; ?>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
