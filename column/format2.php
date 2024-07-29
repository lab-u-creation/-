<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnformat::column['format2']['name'];
appConfigPage::$css = <<<EOF
<style>
  table {
    table-layout: fixed;
  }
  table th,
  table td {
    padding: 1em 10px 1em 1em;
    vertical-align:middle !important;
  }
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
              <span class="color-plan5 ">家族葬とは</span>
            </div>

            <div class="font-size-1 mb-4">
                <div class="list-inline-item color-white bg-orange rounded-pill pt-2 pb-2 pl-3 pr-3 font-size-0_8">対応プラン</div>
                <div class="list-inline-item">都民の一日葬<span>｜</span>都民の家族葬<span>｜</span>都民の一般葬</div>
            </div>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">お問い合わせが増えている「家族葬」</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  皆さんは「家族葬」にどんなイメージをお持ちでしょうか？<br>
                  昨今の新型コロナウィルスの影響や、高齢の親族の負担を軽くしたいなどの理由から、「家族葬のような葬儀をしたい」というお声を多くいただきます。<br>
                  そこで、ここではお客様からよくご質問をいただく「家族葬」のプラン選びについてご説明いたします。
                </p>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「家族葬」とは？</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  お寄せいただく「家族葬」のご要望には以下のようなものがございます。
                </p>

                <div class="col-lg-10 bg-lgray mb-3">
                  <div class="pt-3 pb-2">
                    <ul class="font-size-lg-1_1 pl-4 m-0">
                      <li class="pb-2"><span class="color-pink font-weight-bold">身内が少ないの</span>で、告別式と火葬だけを一日で行いたい</li>
                      <li class="pb-2">故人が最低限の葬儀を望んでいたので、<span class="color-pink font-weight-bold">身内</span>で火葬だけ行いたい</li>
                      <li class="pb-2">無宗教なので、お坊さんは呼ばずに<span class="color-pink font-weight-bold">こじんまり</span>とした葬儀を行いたい</li>
                    </ul>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  いかがでしょうか。<br>
                  共通しているのは「参列者=家族・親族・親しい友人/知人などの少人数」ということのみで、それ以外はお客様によって異なっています。<br>
                  実は「家族葬」という厳密な葬儀の形式がある訳ではないので、参列者以外の部分について、どのような葬儀にしたいのかを決める必要があります。
                </p>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                    <div class="col-auto text-center mr-3">
                      <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">3</div>
                    </div>
                    <div class="col-9 col-lg-10">
                      <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">都民のお葬式のプランの基準</h3>
                    </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  お客様のご要望に沿ったお葬式を行うために、都民のお葬式がご用意しているプランの基準についてご説明いたします。基準は以下の２点です。
                </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">都民のお葬式のプランの基準</p>


                  <div class="pb-4">
                    <div class="font-size-lg-1_2 line-height-1_2" style="margin-left:27px;"><span class="color-orange mr-2 font-size-1_2 font-size-lg-1_6" style="margin-left:-27px;">❶</span><span class="position-relative" style="top:-1px">参列者の人数・ご関係</span></div>
                    <p class="font-size-lg-1_1 line-height-1_7">参列者に応じた規模の葬儀場をお手配いたします。</p>

                         <div class="row align-items-center no-gutters">
                             <div class="col-lg-4 p-1 pb-2">
                                 <div class="bg-white rounded-1 overflow-hidden border">
                                     <div class="h-md-80px bg-contrast p-2 d-flex align-items-center justify-content-center">
                                         <h3 class="m-0 p-0 font-size-1_2 font-size-lg-1_2 line-height-1_4 text-center">ごく少数の身内のみ</h3>
                                     </div>
                                     <div class="row no-gutters">
                                         <div class="col-3 col-lg-12">
                                             <img src="/assets/img/column/pic_kasou.png" alt="イメージ画像" class="w-100per w-md-75per w-lg-150px d-block mx-auto mb-3 mb-lg-0 p-0 p-lg-0">
                                         </div>
                                         <div class="col-9 col-lg-12 p-3">
                                           <div class="bg-lgray rounded overflow-hidden">
                                             <p class="line-height-lg-1 m-0 text-center m-3">都民のお別れ葬<br>都民の火葬式</p>
                                           </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-lg-4 p-1 pb-2">
                                 <div class="bg-white rounded-1 overflow-hidden border">
                                     <div class="h-md-80px bg-contrast p-2 d-flex align-items-center justify-content-center">
                                         <h3 class="m-0 p-0 font-size-1_2 font-size-lg-1_2 line-height-1_4 text-center">家族や親族で</h3>
                                     </div>
                                     <div class="row no-gutters">
                                         <div class="col-3 col-lg-12">
                                             <img src="/assets/img/column/pic_family.png" alt="イメージ画像" class="w-100per w-md-75per w-lg-150px d-block mx-auto mb-3 mb-lg-0 p-0 p-lg-0">
                                         </div>
                                         <div class="col-9 col-lg-12 p-3">
                                           <div class="bg-lgray rounded overflow-hidden">
                                             <p class="line-height-lg-1 m-0 text-center m-3">都民の一日葬<br>都民の家族葬</p>
                                           </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                              <div class="col-lg-4 p-1 pb-2">
                                  <div class="bg-white rounded-1 overflow-hidden border">
                                      <div class="h-md-80px bg-contrast p-2 d-flex align-items-center justify-content-center">
                                          <h3 class="m-0 p-0 font-size-1_2 font-size-lg-1_2 line-height-1_4 text-center">会社の同僚・友人・ご近所も含めて</h3>
                                      </div>
                                      <div class="row no-gutters">
                                          <div class="col-3 col-lg-12">
                                              <img src="/assets/img/column/pic_many_family.png" alt="イメージ画像" class="w-100per w-md-75per w-lg-150px d-block mx-auto mb-3 mb-lg-0 p-0 p-lg-0">
                                          </div>
                                          <div class="col-9 col-lg-12 p-3">
                                            <div class="bg-lgray rounded overflow-hidden h-md-80px d-flex align-items-center justify-content-center pt-3 pb-3 p-md-0">
                                              <p class="line-height-lg-1 m-0 text-center m-3">都民の一般葬</p>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                       </div>
                     </div>

                  <div class="pb-2">
                    <div class="font-size-lg-1_2 line-height-1_2" style="margin-left:27px;"><span class="color-orange mr-2 font-size-1_2 font-size-lg-1_6" style="margin-left:-27px;">❷</span><span class="position-relative" style="top:-1px">通夜・告別式の有無</span></div>
                    <p class="font-size-lg-1_1 line-height-1_7">葬儀場の手配の要否・日数に関ります。</p>

                    <div class="pb-4">
                        <table class="table mw-450px table-bordered">
                          <tr class="bg-white border-bottom">
                              <th style="background:#d8804e" class="color-white font-size-1 font-size-lg-1_2">火葬のみ</th>
                              <td class="font-size-1 font-size-lg-1_2 line-height-1"><span>手配不要</span></td>
                          </tr>
                          <tr class="bg-white border-bottom">
                              <th style="background:#6a5496" class="color-white font-size-1 font-size-lg-1_2">告別式＋火葬</th>
                              <td class="font-size-1 font-size-lg-1_2 line-height-1">1日</td>
                          </tr>
                          <tr class="bg-white border-bottom">
                              <th style="background:#2a4f37" class="color-white font-size-1 font-size-lg-1_2">お通夜＋告別式＋火葬</th>
                              <td class="font-size-1 font-size-lg-1_2 line-height-1">2日</td>
                          </tr>
                      </table>
                    </div>


                    <p class="font-size-lg-1_1 line-height-1_7">
                      ①と②をまとめるとこの図のようになります。
                    </p>

                    <div class="col-lg-12 p-0 mb-3">
                      <div class="p-0 col-md-11">
                        <img src="/assets/img/column/plan_standard.png" alt="プランの基準" class="w-100">
                      </div>
                    </div>

                    <p class="font-size-0_9">※1 「都民の一日葬」に追加の式場利用料をお支払いいただくことで対応が可能です。<br>
                    ※2 対応可能かどうかは火葬場の状況によります。ご希望の方はお電話にてお問い合わせください。</p>
                  </div>

                </div>
                </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                        <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">4</div>
                      </div>
                      <div class="col-9 col-lg-10">
                        <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">細かな葬儀内容のご希望について</h3>
                      </div>
                  </div>
              </div>
              <p class="font-size-lg-1_1 line-height-1_7">
                プランをお選びいただいた後、無宗教葬やお別れ会形式などのご要望は、葬儀担当者が詳細を伺ったうえで対応させていただきます。（別途物品・サービスが必要になるもの以外は原則として追加料金は不要）<br>
                また、寺院手配はオプションでのお申込となるため、ご希望の方のみお申込みください。<br>
                お花の追加・会食・返礼品のご要望なども追加費用にて承ります。<br>
                分からないこと、お悩みのことがございましたらいつでもお気軽にお問い合わせ下さい。
              </p>
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
                <div class="col-12 text-center p-4">
                    <?php if (isset($planindex) && $planindex == true) : ?>
                        <h2 class="font-size-2 font-weight-bold">家族葬ができるプラン一覧はこちら</h2>
                    <?php else : ?>
                        <h3 class="font-size-2 font-weight-bold">家族葬ができるプラン一覧はこちら</h3>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if ($value === 'plan2' || $value === 'plan1') : ?>
                <div class="col-12 col-lg-6 p-2 position-relative">
                </div>
            <?php else : ?>
                <div class="col-12 col-lg-4 p-2 position-relative">
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
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
