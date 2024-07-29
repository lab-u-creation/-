<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$title = appConfigSite::sitemap['serviceObousan']['title'];
appConfigPage::$description = '生活保護を受給されている方が、自己負担なしで行える葬儀です。';
appConfigPage::$css = <<<EOF
<style>
  .gradation{
    background: linear-gradient(to right, #fdfdf6, #faf8e6, #faf8e6, #faf8e6, #faf8e6, #fdfdf6);
  }
  .bg-kv {
      background-image: url("/assets/img/bg-kiku.png");
      background-repeat: no-repeat;
      background-size: 290px;
      background-position:bottom right;
  }
</style>
EOF;
?>

<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>


<section id="keyvisual">
  <header class="w-100 overflow-hidden position-relative">
    <div class="bg-arch position-absolute"></div>
    <div class="container position-relative p-0 pr-sm-3 pl-sm-3">
      <picture>
        <source media="(min-width:720px)" srcset="/assets/img/service/keyvisual_obousan_l.png?20231123">
        <img src="/assets/img/service/keyvisual_obousan.png?20231123" alt="都民のお葬式についてのパンフレットを無料で迅速にお届けいたします" class="w-100 d-block mx-auto mb-3 mt-sm-3 mb-lg-4 pt-10per">
      </picture>
    </div>
  </header>
</section>

<section class="pb-4">
  <div class="container font-size-1 font-size-lg-1_1 line-height-1_7">
    <p>お布施の金額は、宗派や寺院によって様々で明確な基準がありません。そのため、いくら包めば良いのか分かりづらく、宗派や寺院によっては<span class="color-plan5 font-weight-bold">お布施の相場が全く違うことも珍しくありません。</span><br>
      そこで、都民のお葬式では、お付き合いのあるお寺様をお持ちでないお客様に対して、明朗会計のセット料金でお坊さまのお手配を行っております。<br>
      <span class="color-pink font-weight-bold">セット料金には、お坊さまの読経料・お車代・お膳料・心づけ・宗派のご指定料金などが含まれており、これ以上のお布施をお渡しする必要がありません。</span></p>
  </div>
</section>


<section id="sec1" class="pt-5">
    <div class="container pb-2 pb-lg-5">
      <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray text-center">お坊さまの手配費用</h3>


      <div class="mb-4">
        <div class="row no-gutters pt-3 pb-4">

          <div class="col-12 col-lg-6 p-md-2">
            <div class="border mb-3 mb-sm-3 rounded">
              <div class="row no-gutters">
                <div class="col-12 col-sm-7 col-md-8 p-3 pb-md-0">
                  <h4 class="color-plan2 font-size-1_6 font-size-lg-1_4 font-weight-bold text-center text-md-left">都民の火葬式</h4>
                  <div class="d-sm-none">
                    <img src="/assets/img/blank_square.png" data-echo="/assets/img/service/pic_obousan2.png" class="w-100per is-trans-active" alt="都民の火葬式" style="object-fit:cover;">
                  </div>
                  <p class="text-center text-md-left">
                    <span class="color-pink font-oswald font-size-2 font-size-sm-1_6 font-size-lg-1_8 font-weight-bold">60,000</span>
                    <span class="font-size-1_2 font-weight-bold">円</span><br class="d-md-none">
                    <span class="font-size-1 font-weight-bold">＋戒名授与</span>
                    <span class="font-oswald font-size-1_2 font-weight-bold">10,000</span>
                    <span class="font-size-1 font-size-lg-1_2 font-weight-bold">円</span>
                  </p>
                  <div class="bg-base bg-md-none text-center text-md-left p-2 p-md-0">
                    <span class="font-size-md-1 font-size-lg-1_2 font-weight-bold">お勤め内容</span><br>
                    <span class="font-size-0_8 font-size-lg-0_9">炉前読経</span>
                  </div>
                </div>
                <div class="col-12 col-sm-5 col-md-4 overflow-hidden d-none d-sm-block">
                  <img src="/assets/img/blank_square.png" data-echo="/assets/img/service/pic_obousan2.png" class="w-100per h-220px h-md-180px is-trans-active" alt="都民の火葬式" style="object-fit:cover;">
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 p-md-2">
            <div class="border mb-3 mb-sm-3 rounded">
              <div class="row no-gutters">
                <div class="col-12 col-sm-7 col-md-8 p-3 pb-md-0">
                  <h4 class="color-plan3 font-size-1_6 font-size-lg-1_4 font-weight-bold text-center text-md-left">都民の一日葬</h4>
                  <div class="d-sm-none">
                    <img src="/assets/img/blank_square.png" data-echo="/assets/img/service/pic_obousan3.png" class="w-100per is-trans-active" alt="都民の一日葬" style="object-fit:cover;">
                  </div>
                  <p class="text-center text-md-left">
                    <span class="color-pink font-oswald font-size-2 font-size-sm-1_6 font-size-lg-1_8 font-weight-bold">95,000</span>
                    <span class="font-size-1_2 font-weight-bold">円</span><br class="d-md-none">
                    <span class="font-size-1 font-weight-bold">＋戒名授与</span>
                    <span class="font-oswald font-size-1_2 font-weight-bold">15,000</span>
                    <span class="font-size-1 font-size-lg-1_2 font-weight-bold">円</span>
                  </p>
                  <div class="bg-base bg-md-none text-center text-md-left p-2 p-md-0">
                    <span class="font-size-md-1 font-size-lg-1_2 font-weight-bold">お勤め内容</span><br>
                    <span class="font-size-0_8 font-size-lg-0_9">告別式読経／初七日読経／炉前読経</span>
                  </div>
                </div>
                <div class="col-12 col-sm-5 col-md-4 overflow-hidden d-none d-sm-block">
                  <img src="/assets/img/blank_square.png" data-echo="/assets/img/service/pic_obousan3.png" class="w-100per h-220px h-md-180px is-trans-active" alt="都民の一日葬" style="object-fit:cover;">
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 p-md-2">
            <div class="border mb-3 mb-sm-3 rounded">
              <div class="row no-gutters">
                <div class="col-12 col-sm-7 col-md-8 p-3 pb-md-0">
                  <h4 class="color-plan4 font-size-1_6 font-size-lg-1_4 font-weight-bold text-center text-md-left">都民の家族葬</h4>
                  <div class="d-sm-none">
                    <img src="/assets/img/blank_square.png" data-echo="/assets/img/service/pic_obousan4.png" class="w-100per is-trans-active" alt="都民の家族葬" style="object-fit:cover;">
                  </div>
                  <p class="text-center text-md-left">
                    <span class="color-pink font-oswald font-size-2 font-size-sm-1_6 font-size-lg-1_8 font-weight-bold">180,000</span>
                    <span class="font-size-1_2 font-weight-bold">円</span><br class="d-md-none">
                    <span class="font-size-1 font-weight-bold">＋戒名授与</span>
                    <span class="font-oswald font-size-1_2 font-weight-bold">15,000</span>
                    <span class="font-size-1 font-size-lg-1_2 font-weight-bold">円</span>
                  </p>
                  <div class="bg-base bg-md-none text-center text-md-left p-2 p-md-0">
                    <span class="font-size-md-1 font-size-lg-1_2 font-weight-bold">お勤め内容</span><br>
                    <span class="font-size-0_8 font-size-lg-0_9">通夜読経／告別式読経／初七日読経／炉前読経</span>
                  </div>
                </div>
                <div class="col-12 col-sm-5 col-md-4 overflow-hidden d-none d-sm-block">
                  <img src="/assets/img/blank_square.png" data-echo="/assets/img/service/pic_obousan4.png" class="w-100per h-220px h-md-180px is-trans-active" alt="都民の家族葬" style="object-fit:cover;">
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6 p-md-2">
            <div class="border mb-3 mb-sm-3 rounded">
              <div class="row no-gutters">
                <div class="col-12 col-sm-7 col-md-8 p-3 pb-md-0">
                  <h4 class="color-plan5 font-size-1_6 font-size-lg-1_4 font-weight-bold text-center text-md-left">都民の一般葬</h4>
                  <div class="d-sm-none">
                    <img src="/assets/img/blank_square.png" data-echo="/assets/img/service/pic_obousan5.png" class="w-100per is-trans-active" alt="都民の一般葬" style="object-fit:cover;">
                  </div>
                  <p class="text-center text-md-left">
                    <span class="color-pink font-oswald font-size-2 font-size-sm-1_6 font-size-lg-1_8 font-weight-bold">180,000</span>
                    <span class="font-size-1_2 font-weight-bold">円</span><br class="d-md-none">
                    <span class="font-size-1 font-weight-bold">＋戒名授与</span>
                    <span class="font-oswald font-size-1_2 font-weight-bold">15,000</span>
                    <span class="font-size-1 font-size-lg-1_2 font-weight-bold">円</span>
                  </p>
                  <div class="bg-base bg-md-none text-center text-md-left p-2 p-md-0">
                    <span class="font-size-md-1 font-size-lg-1_2 font-weight-bold">お勤め内容</span><br>
                    <span class="font-size-0_8 font-size-lg-0_9">通夜読経／告別式読経／初七日読経／炉前読経</span>
                  </div>
                </div>
                <div class="col-12 col-sm-5 col-md-4 overflow-hidden d-none d-sm-block">
                  <img src="/assets/img/blank_square.png" data-echo="/assets/img/service/pic_obousan5.png" class="w-100per h-220px h-md-180px is-trans-active" alt="都民の一般葬" style="object-fit:cover;">
                </div>
              </div>
            </div>
          </div>

        </div>

        <ul class="list asterisk font-size-0_8">
          <li class="pb-1">｢都民のお別れ葬｣はお坊さまのお手配に対応しておりません。火葬のみのお葬式で、お坊さまのお手配をご希望の方は、都民の火葬式（火葬のみ、仏具付きプラン）への変更が必要です。</li>
          <li class="pb-1">戒名は一般的な信士・信女・釋・釋尼を授与した場合の価格となります。</li>
          <li class="pb-1">高位の戒名（法名・法号）にも対応しております。ご不明な点がございましたらいつでもお問い合わせ下さい。</li>
        </ul>
      </div>
    </div>
</section>

<section id="sec2" class="pt-sm-4 pb-4">
  <div class="container p-0 pl-md-4 pr-md-4">
    <div class="text-center mb-4">
      <h3 class="font-size-1_2 font-size-lg-1_4 font-weight-bold gradation pt-2 pb-2 color-dgray">お勤め内容詳細</h3>
    </div>

    <div class="p-3 p-sm-0">
        <div class="pt-2 pb-4">
          <div class="border-bottom pb-1">
            <div class="row no-gutters align-items-center">
              <div class="col col-sm-7">
                <div class="font-size-1_2 font-size-md-1_4 font-size-lg-1_6 color-dgray ">
                  <span class="color-plan5 pr-2">■</span><span>通夜式読経</span>
                </div>
              </div>
              <div class="col col-sm-5">
                <div class="row no-gutters align-items-center justify-content-center font-size-0_6 font-size-lg-1 font-weight-bold">
                  <div class="col p-1">
                    <div class="bg-gray color-white text-center p-1 rounded">火葬式</div>
                  </div>
                  <div class="col p-1">
                    <div class="bg-gray color-white text-center p-1 rounded">一日葬</div>
                  </div>
                  <div class="col p-1">
                    <div class="bg-plan4 color-white text-center p-1 rounded">家族葬</div>
                    </div>
                  <div class="col p-1">
                    <div class="bg-plan5 color-white text-center p-1 rounded">一般葬</div>
                  </div>
                </div>
            </div>
          </div>
        </div>
          <p class="font-size-1 pt-1">
            お通夜で、僧侶が祭壇の前に座って読経を行います。<br>
            読経中にご遺族・ご親族・参列者の順に焼香を行います。
          </p>
          <p class="font-size-lg-1_1">【お時間の目安】20～30分程度</p>
        </div>

        <div class="pt-2 pb-4">
          <div class="border-bottom pb-1">
            <div class="row no-gutters align-items-center">
              <div class="col col-sm-7">
                <div class="font-size-1_2 font-size-md-1_4 font-size-lg-1_6 color-dgray ">
                  <span class="color-plan5 pr-2">■</span><span>告別式読経</span>
                </div>
              </div>
              <div class="col col-sm-5">
                <div class="row no-gutters align-items-center justify-content-center font-size-0_6 font-size-lg-1 font-weight-bold">
                  <div class="col p-1">
                    <div class="bg-gray color-white text-center p-1 rounded">火葬式</div>
                  </div>
                  <div class="col p-1">
                    <div class="bg-plan3 color-white text-center p-1 rounded">一日葬</div>
                  </div>
                  <div class="col p-1">
                    <div class="bg-plan4 color-white text-center p-1 rounded">家族葬</div>
                    </div>
                  <div class="col p-1">
                    <div class="bg-plan5 color-white text-center p-1 rounded">一般葬</div>
                  </div>
                </div>
            </div>
          </div>
        </div>
          <p class="font-size-1 pt-1">
            告別式で、僧侶が祭壇の前に座って読経を行います。<br>
            読経中にご遺族・ご親族・参列者の順に焼香を行います。
          </p>
          <p class="font-size-lg-1_1">【お時間の目安】40～60分程度</p>
        </div>

          <div class="pt-2 pb-4">
            <div class="border-bottom pb-1">
              <div class="row no-gutters align-items-center">
                <div class="col col-sm-7">
                  <div class="font-size-1_2 font-size-md-1_4 font-size-lg-1_6 color-dgray ">
                    <span class="color-plan5 pr-2">■</span><span>初七日読経</span>
                  </div>
                </div>
                <div class="col col-sm-5">
                  <div class="row no-gutters align-items-center justify-content-center font-size-0_6 font-size-lg-1 font-weight-bold">
                    <div class="col p-1">
                      <div class="bg-gray color-white text-center p-1 rounded">火葬式</div>
                    </div>
                    <div class="col p-1">
                      <div class="bg-plan3 color-white text-center p-1 rounded">一日葬</div>
                    </div>
                    <div class="col p-1">
                      <div class="bg-plan4 color-white text-center p-1 rounded">家族葬</div>
                      </div>
                    <div class="col p-1">
                      <div class="bg-plan5 color-white text-center p-1 rounded">一般葬</div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
            <p class="font-size-1 pt-1">
              告別式が終わると引き続き初七日読経を行います。<br>
              初七日は元々は故人の命日の七日後に行う儀式でしたが、通夜・告別式を終えてすぐに再び集らなければならないのは、遺族や参列者にとって時間的にも金銭的にも大きな負担となります。<br class="d-md-none">そこで、近年ではご遺族や参列者の負担を考慮し、告別式後に続けて初七日を行うことが多くなっています。
            </p>
            <p class="font-size-lg-1_1">【お時間の目安】10～20分程度</p>
          </div>

          <div class="pt-2 pb-4">
            <div class="border-bottom pb-1">
              <div class="row no-gutters align-items-center">
                <div class="col col-sm-7">
                  <div class="font-size-1_2 font-size-md-1_4 font-size-lg-1_6 color-dgray ">
                    <span class="color-plan5 pr-2">■</span><span>炉前読経</span>
                  </div>
                </div>
                <div class="col col-sm-5">
                  <div class="row no-gutters align-items-center justify-content-center font-size-0_6 font-size-lg-1 font-weight-bold">

                    <div class="col p-1">
                      <div class="bg-plan2 color-white text-center p-1 rounded">火葬式</div>
                    </div>
                    <div class="col p-1">
                      <div class="bg-plan3 color-white text-center p-1 rounded">一日葬</div>
                    </div>
                    <div class="col p-1">
                      <div class="bg-plan4 color-white text-center p-1 rounded">家族葬</div>
                      </div>
                    <div class="col p-1">
                      <div class="bg-plan5 color-white text-center p-1 rounded">一般葬</div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
            <p class="font-size-1 pt-1">
              火葬場の火葬炉の前で読経を行います。<br class="d-md-none">火葬前から火葬中にかけて読経を行うため、ご面会の時間が無くなるという事はありません。<br>
              ※お坊さまへのお布施は、炉前読経が終わった後に直接お坊さまにお渡し下さい。
            </p>
            <p class="font-size-lg-1_1">【お時間の目安】5分程度</p>
          </div>
        </div>

  </div>
</section>

<section id="sec3" class="pt-5" style="background:#f8f8f8">
  <div class="container pt-2 pb-4">
    <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray text-center"><span class="font-size-2 font-size-lg-3 color-orange">3</span>つのポイント</h3>
  </div>

  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-4 p-lg-2 mb-3">
        <div class="border bg-white rounded p-3 h-lg-430px">
        <div class="row no-gutters pt-2 pb-lg-0">
          <div class="col-12 col-md-2 col-lg-12 mb-4 mb-md-0 mb-lg-3">
            <img src="/assets/img/service/obousan_1.png" data-echo="/assets/img/service/obousan_1.png" alt="イメージ" class="w-50per w-md-100per w-lg-50per d-block mx-auto rounded-pill">
          </div>
          <div class="col-12 col-md-10 col-lg-12 mh-lg-200px pl-md-3 pl-lg-0">
              <header class="pb-3">
                <h3 class="m-0 p-0 color-dgray font-size-1_2 font-size-lg-1_4 line-height-1_4 text-center text-md-left text-lg-center font-weight-bold">信頼できるお坊さまを<br class="d-md-none d-lg-block">お手配いたします</h3>
              </header>
              <p class="font-size-1 line-height-1_7 m-0 pb-3">都民のお葬式が資格や身元確認などの審査を行い、信頼できるお坊さまのみをお手配しております。</p>
          </div>
        </div>
        </div>
      </div>

      <div class="col-lg-4 p-lg-2 mb-3">
        <div class="border bg-white rounded p-3 h-lg-430px">
        <div class="row no-gutters pt-2 pb-lg-0">
          <div class="col-12 col-md-2 col-lg-12 mb-4 mb-md-0 mb-lg-3">
            <img src="/assets/img/service/obousan_2.png" data-echo="/assets/img/service/obousan_2.png" alt="イメージ" class="w-50per w-md-100per w-lg-50per d-block mx-auto rounded-pill">
          </div>
          <div class="col-12 col-md-10 col-lg-12 mh-lg-200px pl-md-3 pl-lg-0">
              <header class="pb-3">
                <h3 class="m-0 p-0 color-dgray font-size-1_2 font-size-lg-1_4 line-height-1_4 text-center text-md-left text-lg-center font-weight-bold pt-lg-3 pb-lg-3">ご依頼ごとのお付き合い</h3>
              </header>
              <p class="font-size-1 line-height-1_7 m-0 pb-3">お客様からご要望がなければ、お付き合いはそのご葬儀限りとなります。<br>檀家として継続的なお付き合いをする必要はございません。</p>
          </div>
        </div>
        </div>
      </div>

      <div class="col-lg-4 p-lg-2 mb-3">
        <div class="border bg-white rounded p-3 h-lg-430px">
        <div class="row no-gutters pt-2 pb-lg-0">
          <div class="col-12 col-md-2 col-lg-12 mb-4 mb-md-0 mb-lg-3">
            <img src="/assets/img/service/obousan_3.png" data-echo="/assets/img/service/obousan_3.png" alt="イメージ" class="w-50per w-md-100per w-lg-50per d-block mx-auto rounded-pill">
          </div>
          <div class="col-12 col-md-10 col-lg-12 mh-lg-200px pl-md-3 pl-lg-0">
              <header class="pb-3">
                <h3 class="m-0 p-0 color-dgray font-size-1_2 font-size-lg-1_4 line-height-1_4 text-center text-md-left text-lg-center font-weight-bold">一般的な宗派に<br class="d-md-none d-lg-block">対応しております</h3>
              </header>
              <p class="font-size-1 line-height-1_7 m-0 pb-3">浄土真宗(本願寺・大谷派)、浄土宗、天台宗、真言宗、臨済宗、曹洞宗、日蓮宗など主要宗派に対応しています。また、神道・キリスト教の宗教者のお手配も承っております。</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="sec4" class="pt-4 pb-4">
  <div class="container">

    <div class="bg-lbase p-3 pr-md-4 pl-md-4 border-gray mt-5 bg-kv">
      <div>
        <h2 class="font-size-1_6 font-size-lg-2 font-weight-bold">
          <i class="fa fa-exclamation-circle color-pink" aria-hidden="true"></i>
          <span class="font-size-1_4 font-size-lg-1_6">ご注意</span>
        </h2>

        <ul class="font-size-1 font-size-lg-1_1 pl-4 m-0">
            <li class="pb-2">菩提寺をお持ちの方（檀家になられている方）は必ず事前に菩提寺の許可を得てからご利用ください。</li>
            <li class="pb-2">菩提寺の許可を得ずに別のお坊さまに読経を頼むと、葬儀や戒名授与のやり直しを要求されたり、納骨を断られたりする場合があります。</li>
            <li class="pb-2">お客様がご自身で手配されたお坊さまには上記の金額は適用できません。</li>
        </ul>
      </div>
    </div>
  </div>
</section>




<section id="sec5" class="pb-4">
    <h2 class="font-size-1_4 font-size-md-1_6 font-size-lg-2 font-weight-bold color-dgray mt-5 mb-4 text-center">この価格で<br class="d-sm-none">お葬式が行えます</h2>
    <?php require_once '../plan/_module/list.php'; ?>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
