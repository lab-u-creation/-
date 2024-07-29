<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnformat::column['format1']['name'];
appConfigPage::$css = <<<EOF
<style>
@media (max-width:430px) {
  .col-10{
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%
  }
}
.staff-img {
    width: 125px;
    left:auto;
    right:-30px;
    bottom:-20px;
}
@media (min-width:400px) {
    .staff-img {
      right:-20px;
    }
}
@media (min-width:600px) {
    .staff-img {
      width: 135px;
      left:auto;
      right:-20px;
      top:-10px;
      bottom:auto;
    }
}
@media (min-width:768px) {
    .staff-img {
      width: 130px;
      right:-10px;
      top:-15px;
    }
  }
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<?php appFuncDisp::h1(appConfigSite::sitemap['columnformat']['title']); ?>



<div class="container p-0">
    <div class="row no-gutters">
        <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

          <div class="border-top pt-4 pb-5">

            <div class="text-left p-1 pl-lg-0 font-size-2 font-size-lg-3 font-weight-bold">
              <span class="color-plan5">直葬とは</span>
            </div>

            <div class="font-size-1 mb-4">
                <div class="list-inline-item color-white bg-orange rounded-pill pt-2 pb-2 pl-3 pr-3 font-size-0_8">対応プラン</div>
                <div class="list-inline-item">都民のお別れ葬<span>｜</span>都民の火葬式</div>
            </div>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">最もシンプルなお葬式「直葬」</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  「都民のお葬式」では、お客様から以下のようなご要望を多くいただきます。
                </p>

                <div class="col-12 bg-lgray mb-3">
                  <div class="pt-3 pb-2">
                    <ul class="font-size-lg-1_1 pl-4 m-0">
                        <li class="pb-2">家族だけでこじんまりとお葬式をしたい</li>
                        <li class="pb-2">宗教色は無いお葬式にしたい</li>
                        <li class="pb-2">できるだけ簡素なお葬式がしたい</li>
                    </ul>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  このようなお客様から承ることが多いプランが「都民のお別れ葬」「都民の火葬式」。<br>
                  この２つは「直葬」プランで、「直葬」とは火葬のみを執り行うお葬式のことです。<br>
                  <br>
                  今回は「直葬」のメリットや注意事項をご紹介いたします。
                </p>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「直葬」と「一般的なお葬式」の違い</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  一般的なお葬式は、ご逝去日の翌日にお通夜、その翌日に告別式・火葬を行います。<br>
                  <br>
                  「直葬」はこの流れからお通夜と告別式を省き、火葬のみを執り行うお葬式です。<br>
                  故人様をご安置場所から火葬場へ直接搬送して火葬を執り行います。
                </p>

                <div class="col-lg-12 p-0 pt-4 pb-4 mb-3">
                  <div class="pb-3 p-0 col-md-9">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1"><span class="color-plan5">■</span>一般的な葬儀の流れ</p>
                    <img src="/assets/img/column/funeral_plan_formal.png" alt="一般的な葬儀の流れ" class="w-100 pl-4">
                  </div>
                  <div class="pt-3 p-0 col-md-9">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1"><span class="color-plan5">■</span>直葬の流れ</p>
                    <img src="/assets/img/column/funeral_plan1.png" alt="直葬の流れ" class="w-100 pl-4">
                  </div>
                </div>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">3</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">直葬のメリット</h3>
                      </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  「直葬」は通常二日間かかるお葬式を一日で終えるため、様々なメリットがあります。
                </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">費用が格段に抑えられる</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    お葬式に漠然と「値段が高い」というイメージをお持ちの方も多いのではないでしょうか。<br>
                    この点「直葬」にはお通夜と告別式がないため、費用を大幅に抑えることが可能です。<br>
                    「都民のお葬式」でご用意している他プランと料金を比較いたします。
                  </p>
                </div>

                <div class="col-12 col-lg-9 p-0 pt-4 pb-4 mb-3">
                  <div class="pb-3 p-0 d-none d-md-inline">
                    <img src="/assets/img/column/columnformat1_pc.png" alt="他プランと料金の比較" class="w-100">
                  </div>
                  <div class="pb-3 p-0 d-md-none">
                    <img src="/assets/img/column/columnformat1_sp.png" alt="他プランと料金の比較" class="w-100">
                  </div>
                </div>
                  <p class="font-size-0_9">※ 価格は税込表示<br>
                  ※ 火葬料金は別途（火葬場・地域ごとに異なります）</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    通夜・告別式を省くことで必要な物品・サービスも減るため、プラン料金も大幅に抑えることが可能です。
                  </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">喪主・ご遺族の負担を減らせる</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    少数の身内だけでお葬式を行うため、喪主の式中のご挨拶や参列者への対応がほぼ必要ありません。<br>
                    そのため、喪主・ご遺族の体力的・精神的な負担を減らし、心に余裕を持つことができます。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">参列者の負担を減らせる</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    高齢者や妊娠中の方、小さなお子さまは長時間のお葬式が苦痛に感じることもございます。そのような方にも負担の少ないお葬式です。
                  </p>
                </div>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">4</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">注意事項</h3>
                      </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  直葬はお通夜と告別式を省略しているため、気をつけなければならないポイントもあります。
                </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">参列者の理解を得る必要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    参列者の中には「お坊さまに読経して欲しい」「ご焼香をあげたい」と思う方がいらっしゃるかもしれません。そのため、事前に参列者に火葬のみのお葬式となる事を理解を得ておく必要があります。
                  </p>
                  <p class="font-size-0_9">※ 都民のお葬式の直葬プラン「都民の火葬式」には仏具が含まれているため、お坊さまをお呼びいただくことも可能です。（お坊さまの手配はオプションにて承ります）</p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">参列できなかった方への配慮</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    直葬は身内やごく親しい方など少数で執り行うことが多い葬儀です。<br>
                    葬儀後に参列できなかった方々へ弔問の機会を設けるなど、ご配慮が必要になることもございます。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">菩提寺に確認が必要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    菩提寺とは先祖代々のお墓があるお寺のことです。<br>
                    菩提寺によっては葬儀本来の流れである通夜・告別式を省略してしまうと、納骨を断られる場合があります。<br>
                    後々トラブルにならないよう事前に許可を得ておくことが必要です。
                  </p>
                </div>
            </section>

            <section class="pt-4 pb-5">
                <div class="bg-lbase pt-4 pr-2 pl-2 mb-5 border-gray col-lg-12" style="overflow: hidden;">
                    <div class="container position-relative">
                        <img src="/assets/img/column/pic_staff.png" alt="女性スタッフ" class="keyvisual-baloon staff-img position-absolute">

                          <header class="row">
                              <div class="row no-gutters">
                                <div class="col-12 col-lg-10 pb-2">
                                  <p class="font-size-lg-1_1 line-height-1_7 col-10 col-lg-12 m-0">都民のお葬式は24時間、専門スタッフが対応しております。</p>
                                  <p class="font-size-lg-1_1 line-height-1_7 col-9 col-md-10 col-lg-12">お葬式のことで不安なことや分からないことがありましたら、些細なことでもすぐにご相談ください。</p>
                                </div>
                              </div>
                          </header>
                      </div>
                  </div>
              </section>
            </div>
          </div>

        <div class="col-12 col-lg-3 text-right line-height-1 p-0">
            <div class="pt-1 pl-lg-3 pr-lg-0 sticky-item">
                <?php require_once './_module/detail.php'; ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row no-gutters border-top pt-5">
        <?php foreach (appConfigPlan::planList as $value) : ?>
            <?php if ($value === 'plan3') : ?>
            <?php endif; ?>
            <?php if ($value === 'plan1') : ?>
                <div class="col-12 text-center p-4">
                    <?php if (isset($planindex) && $planindex == true) : ?>
                        <h2 class="font-size-2 font-weight-bold">直葬ができるプラン一覧はこちら</h2>
                    <?php else : ?>
                        <h3 class="font-size-2 font-weight-bold">直葬ができるプラン一覧はこちら</h3>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($value === 'plan2' || $value === 'plan1') : ?>
                <div class="col-12 col-lg-6 p-2 position-relative">
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
                            <div class="w-100 text-right pr-2">
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
                <div class="col-12 col-lg-4 p-2 position-relative">
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
