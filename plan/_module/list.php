<style>
  .gradation {
    background: linear-gradient(to right, #fdfdf6, #faf8e6, #faf8e6, #faf8e6, #faf8e6, #fdfdf6);
  }

  .color-jitakuso {
    color: #59d38a;
  }

  .kv-photo-list {
    width: 100%;
    height: 100%;
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    object-position: 0 50%;
  }

  .kv-photo-hana::after {
    content: '';
    width: 160px;
    height: 160px;
    background-image: url("/assets/img/service/pic_frower.png");
    background-size: 100%;
    background-repeat: no-repeat;
    position: absolute;
    right: -80px;
    bottom: -40px;
    z-index: 1;
  }

  .h-jtakuso {
    height: 115px;
  }

  .border-bottom-note {
    border-bottom: 1px dotted #ccc;
  }

  @media (min-width: 385px) {
    .title:before {
      content: '';
      display: inline-block;
      width: 30px;
      height: 30px;
      background-image: url("/assets/img/pic_title.png");
      background-size: contain;
      background-repeat: no-repeat;
      vertical-align: middle;
      margin-right: 5px;
    }

    .title:after {
      content: '';
      display: inline-block;
      width: 30px;
      height: 30px;
      background-image: url("/assets/img/pic_title.png");
      background-size: contain;
      background-repeat: no-repeat;
      vertical-align: middle;
      transform: scale(-1, 1);
      margin-right: 5px;
    }
  }

  @media (min-width:576px) {
    .jtakuso_top {
      margin-top: -65px;
    }

    .h-jtakuso {
      height: 175px;
    }
  }

  @media (max-width: 850px) {
    .kv-photo-hana::after {
      display: none;
    }
  }

  @media (max-width: 767px) {
    .plan {
      display: none;
    }
  }
</style>

<?php
if (!isset($modulePlanList)) {
  $modulePlanList = appConfigPlan::planList;
}
if (!isset($dispTitle)) {
  $dispTitle = true;
}
?>

<?php if (appConfigPage::$pageCategory != 'service' && appConfigPage::$pageCategory != 'corona') : ?>
  <div class="text-center pb-4">
    <h2 class="color-dgray font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3">
      <span class="font-size-2 font-size-lg-3 color-orange">5</span>つの葬儀プラン
    </h2>
    <div class="font-size-1 font-size-lg-1_2">「都民のお葬式」ではご要望に合わせた<br class="d-lg-none">5つのセットプランをご用意しました。</div>
  </div>
<?php endif; ?>

<div class="container">
  <div class="row no-gutters">
    <?php foreach ($modulePlanList as $value) : ?>
      <?php if ($dispTitle === true) : ?>
        <?php if ($value === 'plan3') : ?>
          <div class="col-12 text-center pt-5 pb-3">
            <h3 class="font-size-0_9 font-size-md-1 font-size-lg-1_4 font-weight-bold gradation pt-2 pb-2 color-dgray">お通夜・告別式などを行うプラン</h3>
          </div>
        <?php endif; ?>
        <?php if ($value === 'plan1') : ?>
          <div class="col-12 text-center pb-3">
            <h3 class="font-size-0_9 font-size-md-1 font-size-lg-1_4 font-weight-bold gradation pt-2 pb-2 color-dgray">最小限のコストで火葬のみのプラン</h3>
          </div>
        <?php endif; ?>
      <?php endif; ?>



      <?php if ($value === 'plan2' || $value === 'plan1') : ?>
        <div class="col-12 col-lg-6 p-2 p-lg-2 position-relative">
          <?php if (appConfigPlan::plan[$value]['recommend']) : ?>
            <img src="/assets/img/plan/badge_medal.png" alt="推奨" class="img-medal-index img-medal-index-lg-plan3_4_5" />
          <?php endif; ?>
          <a class="btn bg-white p-0 border-gray mb-2 d-block color-dgray rounded-1 overflow-hidden" href="/plan/<?php echo appConfigPlan::plan[$value]['id']; ?>">
            <h4 class="font-notoserif m-0 p-3 bg-<?php echo appConfigPlan::plan[$value]['id']; ?> color-white font-size-lg-2 text-center line-height-1">
              <?php echo appConfigPlan::plan[$value]['name']; ?>
            </h4>
            <div class="text-center pt-2 p-lg-1 color-<?php echo appConfigPlan::plan[$value]['id']; ?>">
              <?php echo appConfigPlan::plan[$value]['overview']; ?>
            </div>
            <div class="row no-gutters">
              <div class="col-8 col-lg-5 text-center order-2 order-lg-1">
                <img src="/assets/img/blank.png" data-echo="/assets/img/plan/<?php echo appConfigPlan::plan[$value]['id']; ?>.png" alt="<?php echo appConfigPlan::plan[$value]['name']; ?>" class="w-100 p-2">
              </div>
              <div class="col-4 col-lg-7 p-1 font-size-0_8 font-size-lg-1 order-1 order-lg-2">
                <div class="row align-items-center no-gutters">
                  <div class="col-12 col-lg-3 text-center pb-2 pb-lg-1 font-size-0_9">
                    <span class="color-gray pr-1"><i class="fa fa-user" aria-hidden="true"></i></span><?php echo appConfigPlan::plan[$value]['numberPeople']; ?>
                  </div>
                  <div class="col-12 col-lg-3 text-center pl-1 pb-1">
                    <?php if (appConfigPlan::plan[$value]['flowSougi'] === 3) : ?>
                      <div class="pt-1 pb-1 color-white bg-<?php echo appConfigPlan::plan[$value]['id']; ?>">お通夜</div>
                    <?php else : ?>
                      <div class="pt-1 pb-1 bg-lgray color-gray">お通夜</div>
                    <?php endif; ?>
                  </div>
                  <div class="col-12 col-lg-3 text-center pl-1 pb-1">
                    <?php if (appConfigPlan::plan[$value]['flowSougi'] != 1) : ?>
                      <div class="pt-1 pb-1 color-white bg-<?php echo appConfigPlan::plan[$value]['id']; ?>">告別式</div>
                    <?php else : ?>
                      <div class="pt-1 pb-1 bg-lgray color-gray">告別式</div>
                    <?php endif; ?>
                  </div>
                  <div class="col-12 col-lg-3 text-center pl-1 pb-1">
                    <div class="pt-1 pb-1 color-white bg-<?php echo appConfigPlan::plan[$value]['id']; ?>">火葬</div>
                  </div>
                </div>
                <div class="text-center d-none d-md-block">
                  <div class="color-<?php echo appConfigPlan::plan[$value]['id']; ?>">
                    <span class="font-size-2_4 font-size-lg-3 font-oswald mr-2"><?php echo appConfigPlan::plan[$value]['price']; ?></span><span class="font-size-2 font-weight-bold">円</span>
                  </div>
                  <div class="pb-3">
                    （税込&nbsp;<span class="font-oswald font-size-lg-1_4 ml-2 mr-2"><?php echo appConfigPlan::plan[$value]['priceZei']; ?></span>円）
                  </div>
                </div>
              </div>
            </div>
            <div class="d-block d-md-none pb-2">
              <div class="w-100 text-right pr-2 pl-2">
                <div class="d-inline-block color-<?php echo appConfigPlan::plan[$value]['id']; ?>">
                  <span class="font-size-2_4 font-oswald"><?php echo appConfigPlan::plan[$value]['price']; ?></span>
                  <span class="font-size-1_4 font-weight-bold">円</span>
                </div>
                <div class="d-inline-block pb-1 font-size-0_9">
                  （税込&nbsp;<span class="font-oswald mr-1"><?php echo appConfigPlan::plan[$value]['priceZei']; ?></span>円）
                </div>
              </div>
            </div>
            <div class="text-center font-size-lg-1_2 pt-2 pb-2 pt-lg-3 pb-lg-3 border-top">
              <i class="fa fa-chevron-circle-right mr-2 color-<?php echo appConfigPlan::plan[$value]['id']; ?>" aria-hidden="true"></i>詳細を見る
            </div>
          </a>
        </div>
      <?php else : ?>
        <div class="col-12 col-lg-4 p-2 p-lg-2  position-relative">
          <?php if (appConfigPlan::plan[$value]['recommend']) : ?>
            <img src="/assets/img/plan/badge_medal.png" alt="推奨" class="img-medal-index img-medal-index-lg-plan3_4_5" />
          <?php endif; ?>
          <a class="btn bg-white p-0 border-gray mb-2 d-block color-dgray rounded-1 overflow-hidden" href="/plan/<?php echo appConfigPlan::plan[$value]['id']; ?>">
            <h4 class="font-notoserif m-0 p-3 bg-<?php echo appConfigPlan::plan[$value]['id']; ?> color-white font-size-lg-2 text-center line-height-1">
              <?php echo appConfigPlan::plan[$value]['name']; ?>
            </h4>
            <div class="text-center pt-2 p-lg-1 color-<?php echo appConfigPlan::plan[$value]['id']; ?>">
              <?php echo appConfigPlan::plan[$value]['overview']; ?>
            </div>
            <div class="row no-gutters">
              <div class="col-8 col-lg-12 order-2 order-lg-1 text-center">
                <img src="/assets/img/blank.png" data-echo="/assets/img/plan/<?php echo appConfigPlan::plan[$value]['id']; ?>.png" alt="<?php echo appConfigPlan::plan[$value]['name']; ?>" class="w-100 p-2 p-lg-0">
              </div>
              <div class="col-4 col-lg-12 order-1 order-lg-2 p-1 font-size-0_8 font-size-lg-1">
                <div class="row align-items-center no-gutters">
                  <div class="col-12 col-lg-3 text-center pb-2 pb-lg-1 font-size-0_9">
                    <span class="color-gray pr-1"><i class="fa fa-user" aria-hidden="true"></i></span><?php echo appConfigPlan::plan[$value]['numberPeople']; ?>
                  </div>
                  <div class="col-12 col-lg-3 text-center pl-1 pb-1">
                    <?php if (appConfigPlan::plan[$value]['flowSougi'] === 3) : ?>
                      <div class="pt-1 pb-1 color-white bg-<?php echo appConfigPlan::plan[$value]['id']; ?>">お通夜</div>
                    <?php else : ?>
                      <div class="pt-1 pb-1 bg-lgray color-gray">お通夜</div>
                    <?php endif; ?>
                  </div>
                  <div class="col-12 col-lg-3 text-center pl-1 pb-1">
                    <?php if (appConfigPlan::plan[$value]['flowSougi'] != 1) : ?>
                      <div class="pt-1 pb-1 color-white bg-<?php echo appConfigPlan::plan[$value]['id']; ?>">告別式</div>
                    <?php else : ?>
                      <div class="pt-1 pb-1 bg-lgray color-gray">告別式</div>
                    <?php endif; ?>
                  </div>
                  <div class="col-12 col-lg-3 text-center pl-1 pb-1">
                    <div class="pt-1 pb-1 color-white bg-<?php echo appConfigPlan::plan[$value]['id']; ?>">火葬</div>
                  </div>
                </div>
                <div class="text-center d-none d-md-block">
                  <div class="color-<?php echo appConfigPlan::plan[$value]['id']; ?>">
                    <span class="font-size-2_4 font-size-lg-3 font-oswald mr-2"><?php echo appConfigPlan::plan[$value]['price']; ?></span><span class="font-size-2 font-weight-bold">円</span>
                  </div>
                  <div class="pb-3">
                    （税込&nbsp;<span class="font-oswald font-size-lg-1_4 ml-2 mr-2"><?php echo appConfigPlan::plan[$value]['priceZei']; ?></span>円）
                  </div>
                </div>
              </div>
            </div>
            <div class="d-block d-md-none pb-2">
              <div class="w-100 text-right pr-2 pl-2">
                <div class="d-inline-block color-<?php echo appConfigPlan::plan[$value]['id']; ?>">
                  <span class="font-size-2_4 font-oswald"><?php echo appConfigPlan::plan[$value]['price']; ?></span>
                  <span class="font-size-1_4 font-weight-bold">円</span>
                </div>
                <div class="d-inline-block pb-1 font-size-0_9">
                  （税込&nbsp;<span class="font-oswald mr-1"><?php echo appConfigPlan::plan[$value]['priceZei']; ?></span>円）
                </div>
              </div>
            </div>
            <div class="text-center font-size-lg-1_2 pt-2 pb-2 pt-lg-3 pb-lg-3 border-top">
              <i class="fa fa-chevron-circle-right mr-2 color-<?php echo appConfigPlan::plan[$value]['id']; ?>" aria-hidden="true"></i>詳細を見る
            </div>
          </a>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <?php /*ディレクトリ「service」内にある場合は非表示*/ ?>

  <?php if (appConfigPage::$pageCategory != 'service' && appConfigPage::$pageCategory != 'about' && appConfigPage::$pageCategory != 'corona' && appConfigPage::$pageCategory != 'company') : ?>
    <div class="container p-0 pt-5 pl-lg-4 pr-lg-4 position-relative">
      <div class="text-center pb-2 font-size-1_4 font-size-md-1_6 font-weight-bold color-dgray title">ご自宅での葬儀も可能です</div>
      <a class="btn w-100per w-lg-90per mx-auto d-block p-0 m-0 position-relative" href="<?php echo appConfigSite::sitemap['serviceJitakuso']['path']; ?>">
        <div class="kv-photo-hana">
          <div class="w-100per mx-auto border border-secondary rounded overflow-hidden shadow-sm bg-white">
            <div class="row no-gutters">
              <div class="col-12 col-sm-8 col-md-9 pt-3 pr-3 pl-3 p-sm-3">
                <header class="text-center text-sm-left color-dgray">
                  <span class="font-size-1_4 font-size-lg-1_6">自宅葬のご案内</span>
                </header>
                <div class="pt-2 pb-2 font-size-1 font-size-lg-1 text-left">
                  <span class="d-none d-md-inline">故人さまの思い出の詰まった</span>ご自宅で時間を気にせずゆっくりとお見送りができる葬儀です。
                </div>
              </div>

              <div class="col-7 col-sm-4 col-md-3 pr-1 pl-3 pt-3 pb-3 p-sm-0">
                <div class="position-relative h-jtakuso">
                  <img src="/assets/img/blank.png" data-echo="/assets/img/service/keyvisual_jitakuso.png" alt="image" class="is-trans-active kv-photo1 kv-photo-list">
                </div>
              </div>

              <div class="col-5 col-sm-8 col-md-9 col-lg-8 p-2 jtakuso_top">
                <div class="row no-gutters align-items-center justify-content-center font-size-0_8 font-size-lg-1">
                  <div class="col-12 col-md">
                    <div class="text-center p-1 font-size-1 d-none d-md-inline">対応プラン：</div>
                  </div>
                  <div class="col-12 col-sm p-1">
                    <div class="bg-plan3 color-white text-center p-1 rounded">都民の一日葬</div>
                  </div>
                  <div class="col-12 col-sm p-1">
                    <div class="bg-plan4 color-white text-center p-1 rounded">都民の家族葬</div>
                  </div>
                  <div class="col-12 col-sm p-1">
                    <div class="bg-plan5 color-white text-center p-1 rounded">都民の一般葬</div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="container p-0 pt-5 pl-lg-4 pr-lg-4 pb-md-5 position-relative">
      <div class="text-center pb-2 font-size-1_4 font-size-md-1_6 font-weight-bold color-dgray title">さまざまな宗派・宗教に対応したプラン</div>
      <a class="btn w-100per w-lg-90per mx-auto d-block p-0 m-0 position-relative" href="<?php echo appConfigSite::sitemap['planReligion']['path']; ?>">
        <div class="w-100per mx-auto border border-secondary rounded overflow-hidden shadow-sm bg-white">
          <div class="row no-gutters">
            <div class="col-12 col-sm-8 col-md-9 pt-3 pr-3 pl-3 p-sm-3">
              <header class="text-center text-sm-left color-dgray">
                <span class="font-size-1_4 font-size-lg-1_6"><?php echo appConfigSite::sitemap['planReligion']['title']; ?></span>
              </header>
              <div class="pt-2 pb-2 font-size-1 font-size-lg-1 text-left">詳細なご要望もお応えいたします</div>
              <div class="d-flex justify-content-center font-size-0_8 font-size-lg-1 pt-3 pb-md-3">
                <?php foreach (appConfigPlan::religion as $religion) : ?>
                  <span class="border p-1 rounded w-25per mr-2 bg-<?php echo $religion['id']; ?>"><?php echo $religion['name']; ?></span>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="col-12 col-sm-4 col-md-3 p-3 p-sm-0 overflow-hidden">
              <img src="/assets/img/blank.png" data-echo="/assets/img/plan/plan_yujinso.png" alt="image" class="is-trans-active kv-photo1 kv-photo-list">
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="container p-0 pt-5 pl-lg-4 pr-lg-4 pb-md-5">
      <div class="color-dgray font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3 mb-lg-4">その他の葬儀案内は<br class="d-sm-none">こちらから</div>
      <div class="row align-items-end no-gutters mt-3 mr-lg-5 ml-lg-5">
        <div class="col-12 col-md-6 pb-3 pb-md-0 pr-md-2">
          <a href="<?php echo appConfigSite::sitemap['corona']['path']; ?>">
            <img src="/assets/img/corona/bnr_corona_t.png?20231020" alt="コロナ葬儀_ボタン" class="w-100 d-block mx-auto">
          </a>
        </div>
        <div class="col-12 col-md-6 pl-md-2">
          <a href="<?php echo appConfigSite::sitemap['serviceSeikatsuhogo']['path']; ?>">
            <img src="/assets/img/service/bnr_seikatuhogo.png?20231031" alt="生活保護葬_ボタン" class="w-100 d-block mx-auto">
          </a>
        </div>
      </div>
    </div>

  <?php endif; ?>
</div>