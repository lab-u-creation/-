<style>
  .fa-check-circle:before {
    display: none;
  }

  .service {
    position: relative;
    top: -20px;
  }

  .arrow {
    position: relative;
    padding: 15px;
    margin-bottom: 40px;
  }

  .arrow:before {
    content: '';
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translateX(-50%);
    border-top: 25px solid #d88252;
    /* 好みで色を変えてください */
    border-right: 30px solid transparent;
    border-left: 30px solid transparent;
  }

  .arrow::after {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    border-top: 25px solid #ecaf8d;
    /* 好みで色を変えてください */
    border-right: 30px solid transparent;
    border-left: 30px solid transparent;
  }

  .thum-obousan {
    height: 40vw;
    object-fit: cover;
    object-position: 0 55%;
  }

  @media (min-width: 576px) {
    .fa-check-circle:before {
      display: inline;
      position: relative;
      top: 4px;
    }

    .arrow {
      position: relative;
      padding: 15px;
      margin-bottom: 60px;
    }

    .arrow:before {
      content: '';
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translateX(-50%);
      border-top: 30px solid #d88252;
      /* 好みで色を変えてください */
      border-right: 40px solid transparent;
      border-left: 40px solid transparent;
    }

    .arrow::after {
      content: '';
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      border-top: 30px solid #ecaf8d;
      /* 好みで色を変えてください */
      border-right: 40px solid transparent;
      border-left: 40px solid transparent;
    }

    .bg-sm-white {
      background-color: #fff;
    }

    .thum-obousan {
      height: auto;
    }

  }

  @media (min-width: 992px) {
    .bg-sm-lbase {
      background-color: #faf8e6;
    }
  }

  @media screen and (max-width: 992px) {
    .table {
      border: 1px solid #aaa;
      border-collapse: collapse;
      /* writing-mode: vertical-lr; */
    }

    .table th,
    .table td {
      border: 1px solid #aaa;
      padding: 4px;
      /* writing-mode: horizontal-tb; */
      height: 25px;
      /* 追加 */
    }

    .table th span,
    .table td span {
      /* writing-mode: horizontal-tb; */
    }
  }
</style>

<div class="pt-2 pb-4">
  <div class="border-<?php echo $planid; ?>-bottom">
    <div class="container">
      <nav class="navbar navbar-expand-lg p-0">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav w-100">
            <?php foreach (appConfigPlan::planNavList as $value) : ?>
              <li class="w-20per pl-1 pr-1 position-relative">
                <?php if ($value == $planid) : ?>
                  <a class="d-block rounded-top font-notoserif bg-<?php echo $value; ?> pt-3 pb-3 text-center font-weight-bold text-decoration-none" href="/plan/<?php echo appConfigPlan::plan[$value]['id']; ?>">
                    <span class="color-white"><?php echo appConfigPlan::plan[$value]['name']; ?></span>
                  </a>
                <?php else : ?>
                  <a class="d-block rounded-top font-notoserif bg-lgray pt-3 pb-3 text-center color-dgray text-decoration-none" href="/plan/<?php echo appConfigPlan::plan[$value]['id']; ?>">
                    <span class="color-gray"><?php echo appConfigPlan::plan[$value]['name']; ?></span>
                  </a>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <?php if ($planid != appConfigPlan::plan['plan1']['id'] && $planid != appConfigPlan::plan['plan2']['id']) : ?>
    <div class="bg-orange">
      <div class="container p-1">
        <div class="pt-1 p-lg-0">
          <picture>
            <source media="(min-width:760px)" srcset="/assets/img/bnr_upgrade_l.png">
            <img src="/assets/img/bnr_upgrade.png" alt="お値段そのままでプラン内容をグレードアップいたしました。今後も都民の皆様の支えとなるよう努力を重ねてまいります。" class="w-100">
          </picture>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>

<section id="firsrview" class="container pb-3">
  <div class="row">
    <div class="col-lg-6 pb-3">
      <header id="plan-title" class="pb-3">
        <?php if (appConfigPlan::plan[$planid]['recommend']) : ?>
          <img src="/assets/img/plan/badge_medal.png" alt="推奨" class="img-medal-detail img-medal-detail-lg">
        <?php endif; ?>
        <div class="pt-3 pb-4 color-white rounded bg-<?php echo $planid; ?>">
          <p class="pb-2 text-center m-0 font-size-1"><?php echo appConfigPlan::plan[$planid]['overview']; ?></p>
          <h1 class="font-notoserif font-size-2_4 font-size-md-3 p-0 m-0 text-center">
            <?php echo appConfigPlan::plan[$planid]['name']; ?>
          </h1>
        </div>
      </header>
      <div class="w-100per mx-auto border-orange color-orange font-size-lg-1_4 rounded-pill p-1 text-center font-weight-bold">
        明朗会計セットプラン
      </div>
      <div id="plan-price">
        <div class="pt-2 text-right">
          <span class="color-<?php echo $planid; ?> font-size-4 font-size-lg-5 font-oswald line-height-1"><?php echo appConfigPlan::plan[$planid]['price']; ?></span>
          <span class="color-<?php echo $planid; ?> font-size-2 font-size-lg-3 font-weight-bold pl-2 pb-1">円</span>
        </div>
        <div class="font-size-1 font-size-lg-1_4 text-right pb-3">
          （税込：<span class="font-oswald d-inline-block mr-2"><?php echo appConfigPlan::plan[$planid]['priceZei']; ?></span>円）
        </div>
      </div>
      <div id="planflow" class="bg-base pt-3 pb-3">
        <div class="text-center pb-2"><i class="fa fa-users mr-2 color-<?php echo $planid; ?>" aria-hidden="true"></i>参列者数目安：<?php echo appConfigPlan::plan[$planid]['numberPeople']; ?></div>
        <div class="container position-relative">
          <div class="row no-gutters align-items-center justify-content-center font-size-0_8 font-size-lg-1">
            <div class="col p-1">
              <div class="bg-<?php echo $planid; ?> color-white text-center p-1 rounded">お迎え</div>
            </div>
            <div class="col p-1">
              <div class="bg-<?php echo $planid; ?> color-white text-center p-1 rounded">ご安置</div>
            </div>
            <div class="col p-1">
              <?php if ($planid == appConfigPlan::plan['plan1']['id'] || $planid == appConfigPlan::plan['plan2']['id'] || $planid == appConfigPlan::plan['plan3']['id']) : ?>
                <div class="bg-lgray color-gray text-center p-1 rounded">お通夜</div>
              <?php else : ?>
                <div class="bg-<?php echo $planid; ?> color-white text-center p-1 rounded">お通夜</div>
              <?php endif; ?>
            </div>
            <div class="col p-1">
              <?php if ($planid == appConfigPlan::plan['plan1']['id'] || $planid == appConfigPlan::plan['plan2']['id']) : ?>
                <div class="bg-lgray color-gray text-center p-1 rounded">告別式</div>
              <?php else : ?>
                <div class="bg-<?php echo $planid; ?> color-white text-center p-1 rounded">告別式</div>
              <?php endif; ?>
            </div>
            <div class="col p-1">
              <div class="bg-<?php echo $planid; ?> color-white text-center p-1 rounded">火葬</div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center p-2">
        <a href="#modal-plan-price" class="color-dgray" data-toggle="modal" data-target="#modal-plan-price"><i class="fa fa-plus-circle mr-2 color-<?php echo $planid; ?>" aria-hidden="true"></i>追加の費用がかかる場合</a>
      </div>
    </div>
    <div id="planimage" class="col-lg-6 text-lg-right">
      <div class="position-relative">
        <img src="/assets/img/plan/<?php echo appConfigPlan::plan[$planid]['id']; ?>.png" alt="イメージ画像" class="w-100">
        <?php if ($planid != appConfigPlan::plan['plan1']['id']) : ?>
          <p class="position-right_bottom font-size-0_6 m-0 p-2 bg-white-05">
            ※写真の棺・お花はイメージです。お式ではお客様のお選びになった商品をご用意致します。<br class="d-none d-lg-block">
            （プランに含まれている内容詳細については含まれるもの一覧をご覧ください）
          </p>
        <?php endif; ?>
      </div>
      <div class="row no-gutters pt-2">
        <?php if ($planid == appConfigPlan::plan['plan1']['id'] || $planid == appConfigPlan::plan['plan2']['id']) : ?>
          <div class="col-3"><img src="/assets/img/plan/option/thum_enshrined.png" alt="イメージ画像" class="w-100"></div>
          <div class="col-3"><img src="/assets/img/plan/option/thum_coffin.png" alt="イメージ画像" class="w-100"></div>
          <div class="col-3"><img src="/assets/img/plan/option/thum_pot.png" alt="イメージ画像" class="w-100"></div>
          <div class="col-3"><img src="/assets/img/plan/option/thum_clothes.png" alt="イメージ画像" class="w-100"></div>
        <?php elseif ($planid == appConfigPlan::plan['plan3']['id'] || $planid == appConfigPlan::plan['plan4']['id'] || $planid == appConfigPlan::plan['plan5']['id']) : ?>
          <div class="col-3"><img src="/assets/img/plan/option/thum_enshrined.png" alt="イメージ画像" class="w-100"></div>
          <div class="col-3"><img src="/assets/img/plan/option/thum_pillow_decoration.png" alt="イメージ画像" class="w-100"></div>
          <div class="col-3"><img src="/assets/img/plan/option/thum_coffin.png" alt="イメージ画像" class="w-100"></div>
          <div class="col-3"><img src="/assets/img/plan/option/thum_saijo.png" alt="イメージ画像" class="w-100"></div>
        <?php endif; ?>
      </div>
      <?php if ($planid == appConfigPlan::plan['plan5']['id']) : ?>
        <div class="text-center pt-2 pb-2 font-size-0_9">お花の色・デザインはご相談いただけます</div>
      <?php endif; ?>
    </div>

    <div class="container pt-3">
      <ul class="list asterisk font-size-0_8">
        <li class="pb-1">⽕葬料⾦はお客様負担となります（23区内：44,000円～90,000円 程度／23区以外：無料～90,000円 程度）</li>
        <li class="pb-1">火葬は国が定めた火葬場でのみ執り行うことができます。火葬料金は火葬場ごとに定められており、ご利用者様の住所や時期により変動がございます。予めご了承ください。</li>
        <?php if ($planid == appConfigPlan::plan['plan3']['id'] || $planid == appConfigPlan::plan['plan4']['id'] || $planid == appConfigPlan::plan['plan5']['id']) : ?>
          <li class="d-none d-md-block">地域（公営式場の有無など）やご要望（広さ・条件など）により、手配可能な式場が異なります。式場利用料がプランに含まれる金額を超える場合、差額が追加費用として発生いたします。</li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>


<div class="bg-lgray pt-sm-5 pb-sm-5">
  <div class="pt-5 pb-2 container bg-sm-white">
    <?php
    //======================================================================
    // プランの特徴
    //======================================================================
    ?>
    <section id="sec1" class="pb-3 pb-lg-5">
      <header>
        <h2 class="font-size-1_4 font-size-lg-2 font-weight-bold pt-2 pb-2 m-0 text-md-center line-height-1_4 color-<?php echo $planid; ?>">
          <?php echo appConfigPlan::plan[$planid]['description']; ?>
        </h2>
      </header>

      <div class="text-center pt-2 pb-3 pb-lg-5 font-size-1 line-height-1_7">
        <?php if ($planid == appConfigPlan::plan['plan1']['id']) : ?>
          面会も省略し、葬儀にかかる費用を<br class="d-lg-none">最小限に抑えることができます
        <?php elseif ($planid == appConfigPlan::plan['plan2']['id']) : ?>
          ご家族やご親族の準備の負担が少なく<br class="d-lg-none">葬儀にかかる費用も抑えることができます
        <?php elseif ($planid == appConfigPlan::plan['plan3']['id']) : ?>
          ご高齢の方や遠方からの参列者の負担を<br class="d-sm-none">減らしつつ、<br class="d-none d-sm-block">最後のお別れは<br class="d-sm-none">しっかりとしていただけます
        <?php elseif ($planid == appConfigPlan::plan['plan4']['id']) : ?>
          ご家族や親しい方々と、<br class="d-lg-none">お別れの時間をゆっくりお過ごしいただけます
        <?php elseif ($planid == appConfigPlan::plan['plan5']['id']) : ?>
          故人とご縁のあった方たちを幅広く招いて、<br class="d-sm-none">花一杯の祭壇で<br class="d-none d-sm-block">お見送りをするために<br class="d-sm-none">必要な物品・サービスが含まれています
        <?php endif; ?>
      </div>

      <section id="sec1-2">
        <h3 class="text-center font-size-1_2 font-size-lg-1_4 m-0 pb-4 pb-lg-4">
          <span class="font-size-2 pr-sm-3 d-block d-sm-inline"><i class="fa fa-check-circle color-<?php echo $planid; ?>" aria-hidden="true"></i></span><?php echo appConfigPlan::plan[$planid]['name']; ?>は<br class="d-sm-none">このような方に選ばれています
        </h3>
        <div class="container row m-0 p-0">
          <?php include_once '../plan/_module/feature.php'; ?>
        </div>
      </section>
    </section>

    <?php
    //======================================================================
    // オプションの紹介
    //======================================================================
    ?>
    <section id="sec2" class="p-lg-4 pb-3 pb-lg-4">
      <div class="d-lg-none p-sm-2">
        <button class="btn btn-acd bg-<?php echo $planid; ?> text-left color-white w-100 p-3 collapsed box-shadow-l" type="button" data-toggle="collapse" data-target="#plan-option">
          <span class="color-white font-size-1_2 pr-5">プランに含まれるもの</span>
        </button>
      </div>
      <div class="container p-0 pr-sm-3 pl-sm-3">
        <div id="plan-option" class="collapse collapse-lg-expand">
          <header class="sideborder sideborder-top50 pt-2 pb-3">
            <div class="d-none d-lg-block col-12 col-sm-9 w-lg-800px mx-auto text-center rounded-pill bg-<?php echo $planid; ?>">
              <h2 class="font-size-1_4 font-size-lg-1_6 pl-3 color-white font-weight-bold pt-2 pb-2">
                <span class="font-size-1_4 font-size-lg-1_6">「<?php echo appConfigPlan::plan[$planid]['name']; ?>」</span>
                <span class="font-size-1 font-size-lg-1_4">に含まれるもの</span>
              </h2>
            </div>
            <div class="font-size-1 text-lg-center mt-3">都民のお葬式では、お葬式に必要なものを明朗会計セットプランでご提供しています。</div>
          </header>
          <div class="row pt-3">
            <?php appFuncDisp_plan::option(appConfigPlan::plan[$planid], appConfigPlan::option, './_module/option.php'); ?>
          </div>
        </div>
      </div>
    </section>

  </div>
</div>

<?php
//======================================================================
// 料金について
//======================================================================
?>
<section id="sec6" class="pt-5">
  <div class="text-center mt-3 mb-5">
    <h2 class="font-size-1_4  font-size-md-1_6  font-size-lg-2 font-weight-bold">
      <span class="font-size-1_4 font-size-md-2 ml-2 mr-2 color-<?php echo $planid; ?>"><?php echo appConfigPlan::plan[$planid]['name']; ?></span>なら<br>
      <span class="bg-contrast-under color-black font-size-lg-2 ml-2 mr-2">業界最安値クラス</span>＆<span class="bg-contrast-under font-size-lg-2 ml-2 mr-2">最高品質</span><br class="d-sm-none">にてお手配致します
    </h2>
  </div>
  <div class="container">
    <?php include '../_module/planinfo.php'; ?>
    <?php include '../_module/comparison.php'; ?>
  </div>
</section>

<?php
//======================================================================
// CTA
//======================================================================
?>

<section class="container bg-white p-0 p-sm-3 pt-lg-5">
  <div class="arrow"></div>
  <div class="text-center">
    <h2 class="font-size-1_4 font-size-lg-2 font-weight-bold color-dgray"><span class="ml-2 mr-2 color-<?php echo $planid; ?>"><?php echo appConfigPlan::plan[$planid]['name']; ?></span>なら</h2>
    <div class="font-size-1 font-size-lg-1_4">葬儀に必要な<br class="d-md-none">サービス・物品・サポートを全て含んで</div>
    <div class="line-height-1 p-2 color-<?php echo $planid; ?>">
      <span class="font-size-3 font-size-lg-5 mr-2 font-number d-inline-block font-oswald"><?php echo appConfigPlan::plan[$planid]['price']; ?></span><span class="font-size-2 font-size-lg-3">円</span>
    </div>
    <div class="font-size-1_4 font-oswald pt-2">（税込：<?php echo appConfigPlan::plan[$planid]['priceZei']; ?>円）</div>
  </div>

  <div class="container pt-4 pb-4 pl-sm-3 pr-sm-3 pl-lg-4 pr-lg-4">
    <div class="mt-3 mr-lg-4 ml-lg-4">
      <picture>
        <source media="(min-width:768px)" srcset="/assets/img/bnr_cta_l.png?20231004">
        <img src="/assets/img/bnr_cta.png?20231004" alt="電話番号：<?php echo appConfigSite::tel; ?>" class="w-100 d-block mx-auto">
      </picture>
    </div>

    <div class="mt-3 mr-lg-4 ml-lg-4">
      <a href="<?php echo appConfigSite::sitemap['contact']['path']; ?>" onClick="gtag('event', 'click', {'event_category':'button','コンバージョン':'プラン・料金⇒資料請求'});">
        <picture>
          <source media="(min-width:768px)" srcset="/assets/img/bnr_contact_l.png?20231004">
          <img src="/assets/img/bnr_contact.png?20231004" alt="資料請求" class="w-100 d-block mx-auto">
        </picture>
      </a>
    </div>

    <div class="mt-3 mr-lg-4 ml-lg-4">
      <a href="<?php echo appConfigSite::sitemap['corona']['path']; ?>" onClick="gtag('event', 'click', {'event_category':'button','コンバージョン':'プラン・料金⇒コロナ関連葬儀をご検討の皆様へ'});">
        <picture>
          <source media="(min-width:768px)" srcset="/assets/img/corona/bnr_corona_l.png?20231004">
          <img src="/assets/img/corona/bnr_corona.png?20231004" alt="コロナ関連葬儀をご検討の皆様へ" class="w-100 d-block mx-auto">
        </picture>
      </a>
    </div>
  </div>

  <?php if (appConfigPlan::plan[$planid]['optionObousan'] != '') : ?>
    <?php $obousanId = appConfigPlan::plan[$planid]['optionObousan']; ?>
    <div class="container pt-5 pb-4">
      <div class="color-dgray font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3">寺院とお付き合いのない<br class="d-sm-none">お客様へ</div>

      <div class="w-100per w-lg-800px mx-auto border border-secondary rounded overflow-hidden shadow-sm bg-white position-relative">
        <a href="<?php echo appConfigSite::sitemap['serviceObousan']['path']; ?>" class="btn w-100 p-0">
          <div class="row no-gutters">
            <div class="col-12 col-sm-4 col-lg-3">
              <img src="/assets/img/blank_square.png" alt="IMAGE" data-echo="/assets/img/plan/option/thum_obousan.png" class="thum-option thum-obousan">
            </div>

            <div class="col-12 col-sm-8 col-lg-9">
              <div class="text-justify p-2 p-md-3">
                <header class="text-center color-<?php echo $planid; ?>">
                  <span class="font-size-1_2 font-size-md-1_4 font-size-lg-1_6 font-weight-bold"><?php echo appConfigPlan::obousan['name']; ?></span>
                </header>
                <div class="font-size-1 pb-sm-2 pt-md-2">
                  資格や身元確認などの審査を行い、信頼できるお坊さまを手配しております
                </div>
                <div class="font-size-0_8 font-size-lg-1 d-none d-md-block">
                  お勤め内容：<?php echo appConfigPlan::obousan[$obousanId]['service']; ?>
                </div>
              </div>

              <div class="row align-items-center align-items-lg-end m-0 p-0 pb-3 p-2">
                <div class="col text-right ltext-lg-right line-height-1 p-0">
                  <span class="font-size-2 font-size-lg-2 color-pink font-weight-bold font-oswald">
                    <?php echo appConfigPlan::obousan[$obousanId]['price']; ?><span class="font-size-1 ml-1">円</span></span>
                </div>
                <div class="col col-md-auto font-size-0_9 font-size-lg-1 text-left text-md-left line-height-1_2 pr-0 pt-lg-0">＋戒名授与<br class="d-md-none">
                  <span class="font-size-1_2 font-size-lg-1_4 font-weight-bold font-oswald">
                    <?php echo appConfigPlan::obousan[$obousanId]['priceKaimyo']; ?></span>
                  <span class="ml-1">円</span>（税込）
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="w-100per w-lg-800px mx-auto">
        <div class="font-size-0_8 pt-1">※菩提寺のある方（檀家になられている方）は必ず菩提寺の許可を得てください</div>
      </div>
    </div>
  <?php endif; ?>



</section>

<div class="bg-lgray pt-5 pb-sm-5">
  <div class="container p-0 m-0 p-sm-4 pt-sm-5 pb-sm-2 pt-lg-5 m-sm-auto bg-sm-white">

    <?php
    //======================================================================
    // 葬儀の流れ
    //======================================================================
    ?>
    <section id="sec3" class="container p-0 pb-5 pt-5 p-lg-4 p-sm-0">
      <header class="sideborder sideborder-top50 pb-3 text-center">
        <h2 class="font-size-1_4 font-size-lg-2 pl-3 color-dgray font-weight-bold">
          <?php echo appConfigPlan::plan[$planid]['name']; ?>の流れ
        </h2>
        <div class="font-size-1 pt-3">ご依頼をいただいてから､通夜･告別式､<br class="d-md-none">アフターサポートまでの<br class="d-sm-none">流れをご紹介します。</div>
      </header>
      <figure>
        <img src="/assets/img/plan/fig_flow_<?php echo $planid; ?>.png" alt="<?php echo appConfigPlan::plan[$planid]['name']; ?>の流れ" class="w-100per w-lg-800px image-rendering d-block mx-auto">
      </figure>

      <?php
      //-----------------------------------------------------
      // 葬儀の流れ＞ご逝去日
      //-----------------------------------------------------
      ?>
      <section class="m-3 bg-white">
        <header class="position-relative">
          <h3 class="font-size-1_2 bg-<?php echo $planid; ?> color-white m-0 p-3">ご逝去日</h3>
          <div class="position-left_middle z-index-100 w-100 d-lg-none">
            <button class="btn btn-acd collapsed p-4 w-100" type="button" data-toggle="collapse" data-target="#flow-1"></button>
          </div>
        </header>
        <div class="border">
          <div id="flow-1" class="collapse collapse-lg-expand">
            <div class="row pt-3 pb-4">
              <div class="col-12 col-lg-6">
                <?php
                appFuncDisp_plan::flowSection(
                  '1.ご依頼',
                  'まずは「都民のお葬式」にお電話ください<br><span class="font-size-1_4 font-oswald color-pink">' . appConfigSite::tel . '</span>',
                  '/assets/img/plan/flow/pic_contact.png',
                  './_module/flow.php'
                );
                ?>
              </div>
              <div class="col-12 col-lg-6">
                <?php
                appFuncDisp_plan::flowSection(
                  '2.お迎え',
                  'ご指定の場所（ご自宅・病院・警察署など）に最短45分程度でお迎えにあがります。',
                  '/assets/img/plan/flow/pic_car_shindai.png',
                  './_module/flow.php'
                );
                ?>
              </div>
              <div class="col-12 col-lg-6">
                <?php
                if ($planid == appConfigPlan::plan['plan1']['id']) {
                  appFuncDisp_plan::flowSection(
                    '3.ご安置',
                    '故人様を弊社指定の安置場所までご搬送いたします。<br>※「' . appConfigPlan::plan['plan1']['name'] . '」はお預かり安置のみとなります。',
                    '/assets/img/plan/flow/pic_enshrined.png',
                    './_module/flow.php'
                  );
                } else {
                  appFuncDisp_plan::flowSection(
                    '3.ご安置',
                    '故人様を弊社指定の安置場所までご搬送いたします。<br>※安置場所は「ご自宅」または「安置施設」となります。',
                    '/assets/img/plan/flow/pic_enshrined.png',
                    './_module/flow.php'
                  );
                }
                ?>
              </div>
              <div class="col-12 col-lg-6">
                <?php appFuncDisp_plan::flowSection(
                  '4.お打ち合わせ',
                  'ご遺族様の要望に沿って葬儀の内容を決めていきます。葬儀の内容が決まりましたら、お見積書を提示させていただきます。',
                  '/assets/img/plan/flow/pic_meeting.png',
                  './_module/flow.php'
                );
                ?>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php
      //-----------------------------------------------------
      // 葬儀の流れ＞1日目
      //-----------------------------------------------------
      ?>
      <section class="m-3 bg-white">
        <header class="position-relative">
          <h3 class="font-size-1_2 bg-<?php echo $planid; ?> color-white m-0 p-3">
            <?php if ($planid == appConfigPlan::plan['plan1']['id'] || $planid == appConfigPlan::plan['plan2']['id']) : ?>
              1日目：火葬
            <?php elseif ($planid == appConfigPlan::plan['plan3']['id']) : ?>
              1日目：告別式／火葬
            <?php else : ?>
              1日目：通夜
            <?php endif; ?>
          </h3>
          <div class="position-left_middle z-index-100 w-100 d-lg-none">
            <button class="btn btn-acd collapsed p-4 w-100" type="button" data-toggle="collapse" data-target="#flow-2"></button>
          </div>
        </header>
        <div class="border">
          <div id="flow-2" class="collapse collapse-lg-expand pb-4">
            <div class="row pt-3">
              <?php if ($planid == appConfigPlan::plan['plan1']['id'] || $planid == appConfigPlan::plan['plan2']['id']) : ?>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '5.納棺',
                    '故人様を棺にお納めいたします。',
                    '/assets/img/plan/flow/pic_coffin.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '6.火葬',
                    '火葬を行います。<br> 火葬後は収骨し、骨壺へ納めて葬儀は終了となります。',
                    '/assets/img/plan/flow/pic_pot.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '7.お支払い',
                    '火葬後に直接葬儀担当者へお支払いください。<br>※お支払方法につきましては、お打ち合わせ時にご確認ください。',
                    '/assets/img/plan/flow/pic_reception.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
              <?php elseif ($planid == appConfigPlan::plan['plan3']['id']) : ?>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '5.納棺',
                    '故人様を棺にお納めいたします。',
                    '/assets/img/plan/flow/pic_coffin.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '6.告別式',
                    '故人様との最後のお別れの場となる告別式を行います。告別式後に火葬場へご出棺いたします。',
                    '/assets/img/plan/flow/pic_flower_altar.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '7.火葬',
                    '火葬を行います。<br> 火葬後は収骨し、骨壺へ納めて葬儀は終了となります。',
                    '/assets/img/plan/flow/pic_pot.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '8.お支払い',
                    '火葬後に直接葬儀担当者へお支払いください。<br>※お支払方法につきましては、お打ち合わせ時にご確認ください。',
                    '/assets/img/plan/flow/pic_reception.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
              <?php else : ?>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '5.納棺',
                    '故人様を棺にお納めいたします。',
                    '/assets/img/plan/flow/pic_coffin.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '6.通夜式',
                    '故人様を式場にお運びし、通夜式を行います。<br>※通夜式後は翌日の告別式までお付添い（宿泊）が可能です。',
                    '/assets/img/plan/flow/pic_pillow_decoration.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <?php
      //-----------------------------------------------------
      // 葬儀の流れ＞2日目
      //-----------------------------------------------------
      ?>
      <?php if ($planid == appConfigPlan::plan['plan4']['id'] || $planid == appConfigPlan::plan['plan5']['id']) : ?>
        <section class="m-3 bg-white">
          <header class="position-relative">
            <h3 class="font-size-1_2 bg-<?php echo $planid; ?> color-white m-0 p-3">
              2日目：告別式／火葬
            </h3>
            <div class="position-left_middle z-index-100 w-100 d-lg-none">
              <button class="btn btn-acd collapsed p-4 w-100" type="button" data-toggle="collapse" data-target="#flow-3"></button>
            </div>
          </header>
          <div class="border">
            <div id="flow-3" class="collapse collapse-lg-expand pb-4">
              <div class="row pt-3">
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '7.告別式',
                    '故人様との最後のお別れの場となる告別式を行います。告別式後に火葬場へご出棺いたします。',
                    '/assets/img/plan/flow/pic_flower_altar.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '8.火葬',
                    '火葬を行います。<br> 火葬後は収骨し、骨壺へ納めて葬儀は終了となります。',
                    '/assets/img/plan/flow/pic_pot.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
                <div class="col-12 col-lg-6">
                  <?php
                  appFuncDisp_plan::flowSection(
                    '9.お支払い',
                    '火葬後に直接葬儀担当者へお支払いください。<br>※お支払方法につきましては、お打ち合わせ時にご確認ください。',
                    '/assets/img/plan/flow/pic_reception.png',
                    './_module/flow.php'
                  );
                  ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endif; ?>

    </section>

    <?php
    //======================================================================
    // CTA
    //======================================================================
    ?>
    <section id="sec4" class="pt-5 pb-5 bg-white">
      <header class="sideborder sideborder-top50 pb-3 p-lg-4 text-center">
        <h2 class="font-size-1_4 font-size-lg-2 pl-3 color-dgray font-weight-bold">
          他の葬儀プランとの比較
        </h2>
      </header>
      <div class="container pr-4 pl-4 p-sm-0">
        <div class="row justify-content-center no-gutters">
          <?php if ($planid == appConfigPlan::plan['plan1']['id']) : ?>
            <?php appFuncDisp_plan::comparison('plan1', './_module/comparison.php', 'current'); ?>
            <?php appFuncDisp_plan::comparison('plan2', './_module/comparison.php'); ?>
          <?php elseif ($planid == appConfigPlan::plan['plan2']['id']) : ?>
            <?php appFuncDisp_plan::comparison('plan1', './_module/comparison.php', 'sp-nodisp'); ?>
            <?php appFuncDisp_plan::comparison('plan2', './_module/comparison.php', 'current'); ?>
            <?php appFuncDisp_plan::comparison('plan3', './_module/comparison.php'); ?>
          <?php elseif ($planid == appConfigPlan::plan['plan3']['id']) : ?>
            <?php appFuncDisp_plan::comparison('plan2', './_module/comparison.php', 'sp-nodisp'); ?>
            <?php appFuncDisp_plan::comparison('plan3', './_module/comparison.php', 'current'); ?>
            <?php appFuncDisp_plan::comparison('plan4', './_module/comparison.php'); ?>
          <?php elseif ($planid == appConfigPlan::plan['plan4']['id']) : ?>
            <?php appFuncDisp_plan::comparison('plan3', './_module/comparison.php', 'sp-nodisp'); ?>
            <?php appFuncDisp_plan::comparison('plan4', './_module/comparison.php', 'current'); ?>
            <?php appFuncDisp_plan::comparison('plan5', './_module/comparison.php'); ?>
          <?php elseif ($planid == appConfigPlan::plan['plan5']['id']) : ?>
            <?php appFuncDisp_plan::comparison('plan4', './_module/comparison.php'); ?>
            <?php appFuncDisp_plan::comparison('plan5', './_module/comparison.php', 'current'); ?>
          <?php endif; ?>
        </div>
      </div>
    </section>

  </div>
</div>

<section class="container bg-white p-0 pt-sm-5 p-sm-3 pt-lg-5">
  <div class="arrow"></div>
  <div class="text-center">
    <h2 class="font-size-1_4 font-size-lg-2 font-weight-bold color-dgray"><span class="ml-2 mr-2 color-<?php echo $planid; ?>"><?php echo appConfigPlan::plan[$planid]['name']; ?></span>なら</h2>
    <div class="font-size-lg-1_4">葬儀に必要な<br class="d-md-none">サービス・物品・サポートを全て含んで</div>
    <div class="line-height-1 p-2 color-<?php echo $planid; ?>">
      <span class="font-size-3 font-size-lg-5 mr-2 font-number d-inline-block font-oswald"><?php echo appConfigPlan::plan[$planid]['price']; ?></span><span class="font-size-2 font-size-lg-3">円</span>
    </div>
    <div class="font-size-1_4 font-oswald pt-2">（税込：<?php echo appConfigPlan::plan[$planid]['priceZei']; ?>円）</div>
  </div>

  <div class="container pt-4 pb-4 pl-sm-3 pr-sm-3 pl-lg-4 pr-lg-4">
    <div class="mt-3 mr-lg-4 ml-lg-4">
      <picture>
        <source media="(min-width:768px)" srcset="/assets/img/bnr_cta_l.png?20231004">
        <img src="/assets/img/bnr_cta.png?20231004" alt="電話番号：<?php echo appConfigSite::tel; ?>" class="w-100 d-block mx-auto">
      </picture>
    </div>

    <div class="mt-3 mr-lg-4 ml-lg-4">
      <a href="<?php echo appConfigSite::sitemap['contact']['path']; ?>" onClick="gtag('event', 'click', {'event_category':'button','コンバージョン':'プラン・料金⇒資料請求'});">
        <picture>
          <source media="(min-width:768px)" srcset="/assets/img/bnr_contact_l.png?20231004">
          <img src="/assets/img/bnr_contact.png?20231004" alt="コロナ関連葬儀をご検討の皆様へ" class="w-100 d-block mx-auto">
        </picture>
      </a>
    </div>

    <div class="mt-3 mr-lg-4 ml-lg-4">
      <a href="<?php echo appConfigSite::sitemap['corona']['path']; ?>" onClick="gtag('event', 'click', {'event_category':'button','コンバージョン':'プラン・料金⇒コロナ関連葬儀をご検討の皆様へ'});">
        <picture>
          <source media="(min-width:768px)" srcset="/assets/img/corona/bnr_corona_l.png?20231004">
          <img src="/assets/img/corona/bnr_corona.png?20231004" alt="コロナ関連葬儀をご検討の皆様へ" class="w-100 d-block mx-auto">
        </picture>
      </a>
    </div>
  </div>
</section>

<section id="sec5" class="container p-3 p-lg-4">
  <div class="pt-2 pb-4 font-size-1 text-md-center d-lg-none">
    時期や地域、葬儀式場によってお値段や対応できる内容が異なる場合がございます。<br>予めご了承下さい。詳しくは当社スタッフがご案内いたします。
  </div>

  <div class="bg-sm-lbase pr-lg-4 pl-lg-4 pb-lg-4 rounded-1">
    <header class="service d-none d-lg-block sideborder sideborder-top50 text-center">
      <div class="col-12 col-sm-9 w-lg-800px mx-auto text-center rounded-pill bg-<?php echo $planid; ?>">
        <h2 class="font-size-1_4 font-size-lg-1_6 pl-3 color-white font-weight-bold pt-2 pb-2">
          追加できるサービス
        </h2>
      </div>
    </header>
    <div class="d-lg-none">
      <button class="btn btn-acd bg-<?php echo $planid; ?> text-left color-white w-100 p-3 collapsed box-shadow-l" type="button" data-toggle="collapse" data-target="#plan-addoption">
        <span class="color-white font-size-1_2 pr-5">追加できるサービス</span>
      </button>
    </div>
    <div class="pb-2 font-size-1 text-lg-center d-none d-lg-block">
      時期や地域、葬儀式場によってお値段や対応できる内容が異なる場合がございます。<br>予めご了承下さい。詳しくは当社スタッフがご案内いたします。
    </div>
    <div id="plan-addoption" class="collapse collapse-lg-expand">
      <div class="row no-gutters mt-3">
        <?php appFuncDisp_plan::addOption(appConfigPlan::plan[$planid], appConfigPlan::addOption, './_module/option.php'); ?>
      </div>
    </div>
  </div>
</section>

<section id="sec-info" class="pt-5 pb-5">
  <?php
  $planindex = true;
  include '../plan/_module/list.php';
  ?>
</section>

<?php
//======================================================================
// モーダル
//======================================================================
?>
<div id="modal-plan-price" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content line-height-2">
      <div class="modal-header">
        <h2 class="font-size-2">追加の費用がかかる場合</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container pt-4 font-size-0_8 font-size-lg-1">
        <section class="pb-4">
          <?php if (appConfigPlan::plan['plan1']['id'] == $planid) : ?>
            <h3 class="font-size-1_2 pb-2">【1】一回の搬送距離が20km、火葬場搬送30kmを超える場合</h3>
          <?php else : ?>
            <h3 class="font-size-1_2 pb-2">【1】一回の搬送距離が30kmを超える場合</h3>
          <?php endif; ?>
        </section>
        <section class="pb-4">
          <h3 class="font-size-1_2 pb-2">【2】ご遺体の状態が良くない場合</h3>
          <p>警察の指定する防水シート等の備品、死亡検案書を作成するための検案料がかかる場合がございます。<br>また、感染症予防や防臭対策が必要な場合も別途費用がかかる場合がございます。</p>
        </section>
        <section class="pb-4">
          <h3 class="font-size-1_2 pb-2">【3】各プランに設定されている安置日数を超える場合</h3>
          <h4 class="font-size-1">各プランに含まれる安置日数</h4>
          <div class="w-lg-500px">
            <table class="table table-bordered">
              <colgroup>
                <col class="w-50">
                <col class="w-50">
              </colgroup>
              <tbody>
                <tr>
                  <th class="bg-lgray"><?php echo appConfigPlan::plan['plan1']['name']; ?></th>
                  <td><?php echo appConfigPlan::plan['plan1']['optionAddComment']['enshrined']; ?></td>
                </tr>
                <tr>
                  <th class="bg-lgray"><?php echo appConfigPlan::plan['plan2']['name']; ?></th>
                  <td><?php echo appConfigPlan::plan['plan2']['optionAddComment']['enshrined']; ?></td>
                </tr>
                <tr>
                  <th class="bg-lgray"><?php echo appConfigPlan::plan['plan3']['name']; ?></th>
                  <td><?php echo appConfigPlan::plan['plan3']['optionAddComment']['enshrined']; ?></td>
                </tr>
                <tr>
                  <th class="bg-lgray"><?php echo appConfigPlan::plan['plan4']['name']; ?></th>
                  <td><?php echo appConfigPlan::plan['plan4']['optionAddComment']['enshrined']; ?></td>
                </tr>
                <tr>
                  <th class="bg-lgray"><?php echo appConfigPlan::plan['plan5']['name']; ?></th>
                  <td><?php echo appConfigPlan::plan['plan5']['optionAddComment']['enshrined']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section class="pb-4">
          <h3 class="font-size-1_2 pb-2">【4】各プランに含まれる式場利用料を超える葬儀場をご利用の場合</h3>
          <p>地域（公営式場の有無など）やご要望（広さ・条件など）により、手配可能な式場が異なります。<br>
            式場利用料がプランに含まれる金額を超える場合、差額が追加費用として発生いたします。
          </p>
          <div class="w-lg-600px">
            <table class="table table-bordered">
              <colgroup>
                <col class="w-25">
                <col class="w-75">
              </colgroup>
              <tbody>
                <tr>
                  <th class="bg-lgray"><?php echo appConfigPlan::plan['plan3']['name']; ?></th>
                  <td><?php echo appConfigPlan::plan['plan3']['optionAddComment']['saijo']; ?></td>
                </tr>
                <tr>
                  <th class="bg-lgray"><?php echo appConfigPlan::plan['plan4']['name']; ?></th>
                  <td><?php echo appConfigPlan::plan['plan4']['optionAddComment']['saijo']; ?></td>
                </tr>
                <tr>
                  <th class="bg-lgray"><?php echo appConfigPlan::plan['plan5']['name']; ?></th>
                  <td><?php echo appConfigPlan::plan['plan5']['optionAddComment']['saijo']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <section class="pb-5">
          <h3 class="font-size-1_2">【5】プランに含まれない物品やサービスへの変更・追加をご希望の場合</h3>
          <p>棺や祭壇の変更、控室のご利用など、お客様のご要望により物品やサービスの変更・追加をされる場合には別途費用がかかります。</p>
        </section>
      </div>
    </div>
  </div>
</div>

<div id="modal-obousan" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content line-height-2">
      <div class="modal-header">
        <h2 class="font-size-2">寺院・お坊さまの手配について</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container pt-4">
        <section class="pb-4">
          <h3 class="font-size-1_2 pb-2">【1】一回の搬送距離が50kmを超える場合</h3>
          <p>10kmあたり●●円の追加費用がかかります。<br>※高速料金や深夜料金、飛行機での搬送など、上記以外に費用がかかる場合もございます。</p>
        </section>
      </div>
    </div>
  </div>
</div>