<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$title = 'お急ぎの方へ';
appConfigPage::$css = <<<EOF
<style>
h1,h2,h4{font-size:1.7rem;}
.bg-sec2-hospital{background-color:#fbf1f6;}
.bg-sec2-house{background-color:#e7f4ef;}

#sec1 a:hover{opacity: 0.7;}
.arrow_u {position: relative;}
.arrow_u:before {
  content: '';
  width: 10px;
  height: 10px;
  border: 0;
  border-top: solid 3px #fff;
  border-right: solid 3px #fff;
  position: absolute;
  bottom: 40%;
  right: 20px;
  transform: rotate(45deg);
}
.flow::after{
  content: '';
  margin: 0 auto;
  border-radius: 50%;
  width: 70px;
  height: 70px;
  line-height: 70px;
  text-align: center;
  background: #f7e762;
  font-size: 1.2rem;
  z-index: 1;
  top: 40px;
  left: -20px;
}
.flow-number{
  position: absolute;
  margin-left: .8rem;
  border-radius: 50%;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  background: #f7e762;
  font-size: .9rem;
  font-weight: bold;
  z-index: 1;
  top: 12px;
  left: 5px;
}
.flow-line{
  content: '';
  display:block;
  position: absolute;
  top: 70%;
  left: -75%;
  transform: rotate(90deg);
  width: 250%;
  height: 3px;
  background-image : linear-gradient(to right, #373634 3px, transparent 3px);
  background-size: 10px 1px;
  background-repeat: repeat-x;
  background-position: left bottom;
}
.tab-002 {
  display: flex;
  flex-wrap: wrap;
  gap: 0 10px;
}
.tab-002 > label {
  position: relative;
  flex: 1 1;
  order: -1;
  min-width: 70px;
  padding: .6em 1em;
  border-radius: 5px;
  background-color: #fff;
  color: #d8804e;
  border:2px solid #d8804e;
  font-size: 1.2rem;
  text-align: center;
  cursor: pointer;
}
.tab-002 > div {
  width: 100%;
  padding: 1.5em 0;
}
.tab-002 label:has(:checked) {
  background-color: #d8804e;
  color: #fff;
}
.tab-002 > label:has(:checked)::before{
  content: '';
  position: absolute;
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%);
  border-top: 15px solid #d88252;
  border-right: 20px solid transparent;
  border-left: 20px solid transparent;
}
.selectwrap::after {
  position: absolute;
  top: 40%;
  right: 15px;
  width: 10px;
  height: 10px;
  border-top: 3px solid #fff; /* 矢印の線 */
  border-right: 3px solid #fff; /* 矢印の線 */
  -webkit-transform: rotate(135deg); /* 矢印の傾き */
  transform: rotate(135deg); /* 矢印の傾き */
  pointer-events: none; /* 矢印部分もクリック可能にする */
  content: "";
  }

@media (min-width: 576px){
  .heading {
    align-items: center;
    display: flex;
  }
  .heading::before,
  .heading::after {
    content: "";
    background-color: #444;
    height: 1px;
    width: 30px;
  }
  .heading::before {margin-right: 15px;}
  .heading::after {margin-left: 15px;}

  .w-h2{width:auto;padding-left:15px;}
}
@media (min-width: 576px){
  .arrow_u:before {
    content: '';
    width: 10px;
    height: 10px;
    border: 0;
    border-top:none;
    border-bottom: solid 3px #fff;
    border-right: solid 3px #fff;
    position: absolute;
    bottom: 20%;
    right: 50%;
    margin-top: -6px;
    transform: rotate(45deg);
  }
  #sample,
  .tab-002 > div {display: none;}
  .tab-002 label:has(:checked) + div {display: block !important;}
}
@media (min-width:768px) {
  .d-md-none{display:none !important;}
  .flow-number{
    position: relative;
    margin: 0 auto;
    width: 110px;
    height: 110px;
    line-height: 110px;
    font-size: 2.2rem;
    top: auto;
    left:auto;
  }
  .heading::before,
  .heading::after {
    width: 80px;
  }
}
@media (min-width: 992px) {
  .keyvisual {
    background-image: url("/assets/img/hurry/pic_main.png");
    background-repeat: no-repeat;
    background-position: center right 2%;
    background-size: 28%;
  }
}
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<section id="keyvisual">
    <div class="container mt-4 pb-2 pb-lg-4 position-relative">
      <div class="border-boldpink rounded-1">
          <header class="w-100">
            <div class="container bg-pink color-white pt-4 pb-4">
              <h1 class="font-size-lg-2_4 font-size-lg-2_4 color-white font-weight-bold text-center mb-3 mb-lg-2">ご逝去・ご危篤で<br class="d-sm-none">お急ぎの方ヘ</h1>

                <div class="row no-gutters align-items-lg-baseline justify-content-center text-center">
                  <div class="w-100per w-sm-100px w-md-160px p-md-2">
                    <div class="balloon-right rounded p-2 bg-white"><span class="font-weight-normal font-weight-bold font-size-1 line-height-1_2 line-height-lg-1 font-size-lg-1_2 color-pink">都内全域<br class="d-none d-sm-block d-md-none">対応</span></div>
                  </div>
                  <div class="w-100per w-sm-auto pl-sm-3 pl-md-4">
                    <h2 class="font-size-1 font-size-lg-1_2 m-0 pl-lg-1" style="line-height: inherit;">お迎えまで <span class="color-yellow">最短 <span class="font-size-1_4 font-size-lg-2">45</span> 分ほど</span>で、<br class="d-lg-none">ご指定の場所に寝台車でお伺い致します</h2>
                  </div>
                </div>

            </div>
          </header>

          <div class="p-3 m-lg-4 keyvisual">
            <div class="row align-items-center">

              <div class="col-12 col-sm-9 col-md-8 col-lg-9 mt-2 mb-2 pr-sm-0 d-none d-sm-block">
                <div class="font-size-1 font-size-sm-1_3 font-weight-bold pt-lg-3 pb-lg-3">
                  スタッフが24時間365日、<br class="d-none d-md-block d-lg-none">いつでもすぐにお迎えにあがります。<br>まずは無料相談ダイヤルへお電話ください。
                </div>
              </div>

              <div class="col-6 col-sm-3 col-md-4 col-lg-8 pl-sm-0 pr-md-4 d-lg-none">
                <img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_main.png" alt="メイン画像" class="w-100">
              </div>



              <div class="col-6 col-sm-12 col-lg-8 mb-md-2 p-0 pr-3 pl-sm-3 mt-sm-3">
                  <div class="row no-gutters align-items-center">
                    <div class="col-12 col-sm-4 pb-2 pb-sm-0 pr-sm-2">
                      <div class="rounded bg-plan5 text-center color-white line-height-1 line-height-md-1_2 pt-2 pb-2"><img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_call.png" alt="アイコン_電話" class="d-none d-md-inline w-md-20per mw-md-35px pr-2" style="vertical-align:-30%;"><span class="font-size-0_8 font-size-sm-1 font-size-xl-1_2 line-height-1_2">通話･相談無料</span></div>
                    </div>
                    <div class="col-12 col-sm-4 pb-2 pb-sm-0">
                      <div class="rounded bg-plan5 text-center color-white line-height-1 line-height-md-1_2 pt-2 pb-2"><img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_time.png" alt="アイコン_時間" class="d-none d-md-inline w-md-20per mw-md-35px pr-2" style="vertical-align:-30%;"><span class="font-size-0_8 font-size-sm-1 font-size-xl-1_2 line-height-1_2">24時間･365日対応</span></div>
                    </div>
                    <div class="col-12 col-sm-4 pl-sm-2">
                      <div class="rounded bg-plan5 text-center color-white line-height-1 line-height-md-1_2 pt-2 pb-2"><img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_midnight.png" alt="アイコン_深夜" class="d-none d-md-inline w-md-20per mw-md-35px pr-2" style="vertical-align:-30%;"><span class="font-size-0_8 font-size-sm-1 font-size-xl-1_2 line-height-1_2">深夜でも受付中</span></div>
                    </div>
                  </div>
                </div>

                  <div class="row no-gutters align-items-center">
                    <div class="col-12 col-lg-8">
                      <div class="text-center font-oswald font-size-11_5vw font-size-sm-65px p-sm-0">
                          <span class="font-size-md-5 color-pink mr-lg-2"><i class="fa fa-phone" aria-hidden="true"></i></span>
                          <span class="font-size-md-5 color-pink"><?php echo appConfigSite::tel; ?></span>
                      </div>
                    </div>

                    <div class="col-12 col-lg-8 pb-md-4">
                      <div class="text-center font-size-1 font-size-lg-1_2 color-dgray heading justify-content-center">深夜でも受付中　<br class="d-sm-none">まずはお電話ください</div>
                    </div>
                  </div>

                </div>
              </div>

        </div>
    </div>
</section>

<section id="sec1" class="container pb-5 pt-4">
  <div class="row no-gutters">
    <div class="col-12 col-sm-6">
      <a href="#sec2" class="d-block text-decoration-none bg-pink rounded arrow_u m-2">
        <div class="text-center color-white pt-4 pb-4 pt-sm-3">
          <p class="font-weight-bold font-size-1 font-size-sm-1_2 font-size-lg-1_4 p-0 m-0 pb-sm-2">お亡くなりの場合<span class="d-sm-none">はこちら</span></p>
        </div>
      </a>
    </div>
    <div class="col-12 col-sm-6">
      <a href="#sec3" class="d-block text-decoration-none bg-dgray rounded arrow_u m-2">
        <div class="text-center color-white pt-4 pb-4 pt-sm-3">
          <p class="font-weight-bold font-size-1 font-size-sm-1_2 font-size-lg-1_4 p-0 m-0 pb-sm-2">ご危篤の場合<span class="d-sm-none">はこちら</span></p>
        </div>
      </a>
    </div>
  </div>
</section>

<section id="sec2" class="container pb-5 pt-4">
  <div class="border-lg rounded position-relative overflow-hidden">
    <header class="pt-5 pb-5">
      <h4 class="color-dgray font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3">お亡くなりの場合</h4>
    </header>
    <div class="p-md-4 pt-3">
      <div class="row no-gutters">
        <div class="col-12 col-lg-4 pb-5 pl-3 pr-3 pl-sm-0 pr-sm-0 pb-lg-3">
          <div class="row no-gutters align-items-center">
            <div class="col-12 col-sm-6 col-lg-12 pr-lg-4 pl-lg-4">
              <img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_hurry1.png" alt="アイコン_病院" class="w-100 pl-2 pr-2 p-sm-0">
            </div>
            <div class="col-12 col-sm-6 col-lg-12">
              <p class="text-center mt-3 font-size-1">最短<span class="font-weight-bold color-pink">45分程度</span>で病院まで<br>お迎えに上がります</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 pb-5 pl-3 pr-3 pl-sm-0 pr-sm-0 pb-lg-3">
          <div class="row no-gutters align-items-center">
            <div class="col-12 col-sm-6 col-lg-12 pr-lg-4 pl-lg-4">
              <img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_hurry2.png" alt="アイコン_葬儀" class="w-100 pl-2 pr-2 p-sm-0">
            </div>
            <div class="col-12 col-sm-6 col-lg-12">
              <p class="text-center mt-3 font-size-1">故人様をご希望の安置場所まで<br>ご搬送いたします</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 pb-5 pl-3 pr-3 pl-sm-0 pr-sm-0 pb-lg-3">
          <div class="row no-gutters align-items-center">
            <div class="col-12 col-sm-6 col-lg-12 pr-lg-4 pl-lg-4">
              <img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_hurry3.png" alt="アイコン_相談" class="w-100 pl-2 pr-2 p-sm-0">
            </div>
            <div class="col-12 col-sm-6 col-lg-12">
              <p class="text-center mt-3 font-size-1">お葬式の流れ・費用について<br>ご案内いたします</p>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-sec2-house rounded position-relative overflow-hidden p-4 m-lg-4">
        <header>
          <h4 class="row align-items-center no-gutters m-0 font-size-1_2 font-size-lg-1_4 font-weight-bold justify-content-center">
            <div class="w-60px">
              <img src="/assets/img/hurry/pic_house.png" data-echo="/assets/img/hurry/pic_house.png" alt="アイコン_自宅" class="w-100 mb-2 mb-sm-0 pr-sm-2">
            </div>
            <div class="col-12 col-sm">
              <div class="text-center text-sm-left">ご自宅にいらっしゃる方</div>
            </div>
          </h4>
        </header>
        <div class="pt-2 font-size-1">
          <p class="m-0 pb-2">主治医やお医者様へのご連絡はお済でしょうか？</p>
          <p class="m-0 pb-2">主治医と連絡が取れない場合（休診等）は、<span class="font-weight-bold color-pink">最寄りの警察署への連絡が必要</span>です。</p>
          <p class="m-0">その後のお迎えや安置・ご葬儀のお手配については「都民のお葬式」にて承りますのでお電話ください。</p>
        </div>
      </div>

      <div class="bg-sec2-hospital rounded position-relative overflow-hidden mt-4 p-4 m-lg-4">
        <header>
          <h4 class="row align-items-center no-gutters m-0 font-size-1_2 font-size-lg-1_4 font-weight-bold justify-content-center">
            <div class="w-60px">
              <img src="/assets/img/hurry/pic_hospital.png" data-echo="/assets/img/hurry/pic_hospital.png" alt="アイコン_病院" class="w-100 mb-2 mb-sm-0 pr-sm-2">
            </div>
            <div class="col-12 col-sm">
              <div class="text-center text-sm-left">病院にいる方へ</div>
            </div>
          </h4>
        </header>
        <div class="pt-2 font-size-1">
          <p class="m-0 pb-2 font-weight-bold color-pink">まずは「都民のお葬式」まで<br class="d-sm-none">お電話下さい。</p>
          <p class="m-0 pb-2">状況をお伺いし、お迎えに向かう時間などを調整して手配をさせて頂きます。</p>
          <p class="m-0">病院から葬儀社を紹介されることがありますが、ご自身でお探しになれない方のためですのでお断りしても失礼にはあたりません。</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="sec3" class="container pb-5 pt-4">
  <div class="border-lg rounded position-relative overflow-hidden">
    <header class="pt-5 pb-5">
      <h4 class="color-dgray font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3">ご危篤の場合</h4>
    </header>
    <div class="p-md-4 pt-3">
      <div class="row no-gutters">
        <div class="col-12 col-lg-4 pb-5 pl-3 pr-3 pl-sm-0 pr-sm-0 pb-lg-3">
          <div class="row no-gutters align-items-center">
            <div class="col-12 col-sm-6 col-lg-12 pr-lg-4 pl-lg-4">
              <img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_hurry4.png" alt="アイコン_プラン" class="w-100 pl-2 pr-2 p-sm-0">
            </div>
            <div class="col-12 col-sm-6 col-lg-12">
              <p class="text-center mt-3 font-size-1">万が一のために、事前に準備<br>できることをご案内いたします</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 pb-5 pl-3 pr-3 pl-sm-0 pr-sm-0 pb-lg-3">
          <div class="row no-gutters align-items-center">
            <div class="col-12 col-sm-6 col-lg-12 pr-lg-4 pl-lg-4">
              <img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_hurry3.png" alt="アイコン_相談" class="w-100 pl-2 pr-2 p-sm-0">
            </div>
            <div class="col-12 col-sm-6 col-lg-12">
              <p class="text-center mt-3 font-size-1">お葬式の流れ・費用について<br>ご案内いたします</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 pb-5 pl-3 pr-3 pl-sm-0 pr-sm-0 pb-lg-3">
          <div class="row no-gutters align-items-center">
            <div class="col-12 col-sm-6 col-lg-12 pr-lg-4 pl-lg-4">
              <img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_hurry5.png" alt="アイコン_地域" class="w-100 pl-2 pr-2 p-sm-0">
            </div>
            <div class="col-12 col-sm-6 col-lg-12">
              <p class="text-center mt-3 font-size-1">お近くの葬儀場をご紹介し<br>事前準備いたします</p>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-base rounded position-relative overflow-hidden mt-4 p-4 m-lg-4">
        <header>
          <h4 class="row align-items-center no-gutters m-0 font-size-1_2 font-size-lg-1_4 font-weight-bold justify-content-center">
            <div class="w-60px">
              <img src="/assets/img/hurry/pic_consultation.png" data-echo="/assets/img/hurry/pic_consultation.png" alt="アイコン_相談" class="w-100 mb-2 mb-sm-0 pr-sm-2">
            </div>
            <div class="col-12 col-sm">
              <div class="text-center text-sm-left">事前相談をご希望の方へ</div>
            </div>
          </h4>
        </header>
        <div class="pt-2 font-size-1">
          <p>ご心配なことや確認しておきたいことがある方は気軽にお電話下さい。<br class="d-none d-lg-block">
            <span class="font-weight-bold color-pink">24時間365日</span>専門スタッフがお客様に寄り添って対応させて頂きます。
          </p>
          <p>月間数百件以上のご相談を承っておりますので、しっかりとご要望に合わせてご回答させて頂きます。</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="sec4" class="bg-base pt-5 pb-5">
  <div class="container pt-md-4">
  <header class="pt-5 pb-4">
    <h2 class="color-dgray font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3">お迎えからご葬儀までの<br class="d-sm-none">流れ</h2>
    <p class="font-size-1 font-size-lg-1_2 m-0 p-0 text-center">月間数百件以上のご相談を承っている<br class="d-md-none"> 専門スタッフがサポートいたします。<br>どのようなことでもお気軽にご相談ください。</p>
  </header>
      <section id="sec4-1" class="pb-sm-4">
        <div class="row no-gutters position-relative">
          <div class="col-2 col-md-2">
            <div class="flow-number">01</div>
            <div class="flow-line d-none d-md-block"></div>
          </div>
          <div class="col-12 col-md-10">
              <div class="pb-3 pl-md-3 pr-md-3">
                <?php
                appFuncDisp_plan::flowSection(
                  'まずはお電話ください',
                  'ご危篤、ご逝去に関わらず、ご葬儀のご準備が必要になりましたら、まずは「都民のお葬式」へお問い合わせください。24時間365日いつでも対応しております。<br><div class="text-decoration-none"><span class="font-size-2 font-size-md-3 font-oswald color-pink">' . appConfigSite::tel . '</span></div>　<br class="d-ms-none">(お急ぎの方専用ダイヤル)',
                  '/assets/img/plan/pic_contact.png',
                  './_module/flow.php'
                );
                ?>
              </div>
          </div>
        </div>
      </section>

      <section id="sec4-2" class="pb-sm-4">
        <div class="row no-gutters position-relative">
          <div class="col-2 col-md-2">
            <div class="flow-number">02</div>
            <div class="flow-line d-none d-md-block"></div>
          </div>
          <div class="col-12 col-md-10">
              <div class="pb-3 pl-md-3 pr-md-3">
                <?php
                appFuncDisp_plan::flowSection(
                  '料金や流れのご案内',
                  'お客様の状況をお伺いし、今後の流れや、おおまかな費用についてご案内いたします。',
                  '/assets/img/plan/pic_operator.png',
                  './_module/flow.php'
                );
                ?>
              </div>
          </div>
        </div>
      </section>

      <section id="sec4-3" class="pb-sm-4">
        <div class="row no-gutters position-relative">
          <div class="col-2 col-md-2">
            <div class="flow-number">03</div>
            <div class="flow-line d-none d-md-block"></div>
          </div>
          <div class="col-12 col-md-10">
              <div class="pb-3 pl-md-3 pr-md-3">
                <?php
                appFuncDisp_plan::flowSection(
                  '寝台車でお迎え',
                  'ご依頼をいただけましたら、病院またはご自宅へ、最短45分程度でお迎えにあがります。',
                  '/assets/img/plan/option/thum_car_shindai.png',
                  './_module/flow.php'
                );
                ?>
              </div>
          </div>
        </div>
      </section>

      <section id="sec4-4" class="pb-sm-4">
        <div class="row no-gutters position-relative">
          <div class="col-2 col-md-2">
            <div class="flow-number">04</div>
            <div class="flow-line d-none d-md-block"></div>
          </div>
          <div class="col-12 col-md-10">
              <div class="pb-3 pl-md-3 pr-md-3">
                <?php
                appFuncDisp_plan::flowSection(
                  'ご安置',
                  '故人様を弊社指定の安置場所までご搬送いたします。<br>※安置場所は「ご自宅」または「安置施設」となります。',
                  '/assets/img/plan/option/thum_enshrined.png',
                  './_module/flow.php'
                );
                ?>
              </div>
          </div>
        </div>
      </section>

      <section id="sec4-5" class="pb-sm-4">
        <div class="row no-gutters position-relative">
          <div class="col-2 col-md-2">
            <div class="flow-number">05</div>
            <div class="flow-line d-none d-md-block"></div>
          </div>
          <div class="col-12 col-md-10">
              <div class="pb-3 pl-md-3 pr-md-3">
                <?php
                appFuncDisp_plan::flowSection(
                  'お打ち合わせ',
                  'ご遺族様の要望に沿って葬儀の内容を決めていきます。葬儀の内容が決まりましたら、お見積書を提示させていただきます。お客様が安心して、「お別れの時間」を過ごせるよう、真心を込めてお手伝いをいたします。',
                  '/assets/img/plan/pic_meeting.png',
                  './_module/flow.php'
                );
                ?>
              </div>
          </div>
        </div>
      </section>

      <section id="sec4-6" class="pb-sm-4">
        <div class="row no-gutters position-relative">
          <div class="col-2 col-md-2">
            <div class="flow-number">06</div>
          </div>
          <div class="col-12 col-md-10">
              <div class="pb-3 pl-md-3 pr-md-3">
                <?php
                appFuncDisp_plan::flowSection(
                  'ご葬儀',
                  'お打ち合わせ内容に沿った形式でご葬儀を進行させていただきます。当日は故人様とゆっくりお別れができる時間を大切に葬儀を執り行います。',
                  '/assets/img/plan/pic_funeral.png',
                  './_module/flow.php'
                );
                ?>
              </div>
          </div>
        </div>
      </section>

  </div>
</section>

<section id="faq" class="pt-4 pb-5">
  <div class="container">
    <header class="pt-5 pb-5">
      <h2 class="color-dgray font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3">よくある質問</h2>
      <p class="font-size-1 font-size-lg-1_2 m-0 p-0 text-center">よくお寄せいただく<br class="d-sm-none">ご質問と回答をご紹介します。</p>
    </header>

      <div class="selectwrap position-relative">
        <select class="button w-100 p-3 rounded bg-orange color-white text-left font-size-1" style="appearance:none;" id="sample" onchange="viewChange();">
          <option value="select1" class="color-white">手続き・サービスについて</option>
          <option value="select2">価格・費用について</option>
          <option value="select3">菩提寺について</option>
        </select>
      </div>

    <div class="tab-002 align-items-center">
        <label class="d-none d-sm-inline">
            <input type="radio" name="tab-002" checked class="d-none">
            手続き・サービスについて
        </label>
        <div id="Box1">
            <?php
            $id = 'faq-1-1';
            $q = 'はじめてのお葬式で何から始めればいいですか？';
            $a = <<<EOF
                  <p>まずはお電話ください。専門スタッフが今後の流れや必要な手続きについてご説明させていただきます。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-2';
            $q = '何もお葬式のことを知らないのですが、電話しても大丈夫ですか？';
            $a = <<<EOF
                  <p>もちろん大丈夫です。<br>葬儀に慣れている方などおりませんので、どのような些細なことでもお気兼ねなくお電話下さい。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-3';
            $q = '生前に葬儀の相談をすることはできますか？';
            $a = <<<EOF
                  <p>生前のご相談も承ります。ご心配なことがございましたらお気兼ねなくお問合せください。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-4';
            $q = '役所の手続きは代行してもらえますか？';
            $a = <<<EOF
                  <p>代行しております。死亡届や火葬許可証の申請もプラン内に含まれておりますのでご安心ください。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-5';
            $q = appConfigSite::siteName . 'にはいつ連絡すればよいですか？';
            $a = <<<EOF
                  <p>葬儀のご依頼はお急ぎでの対応も承っておりますので、まずはお電話ください。<br>葬儀についてのご心配事や不明点など、専門スタッフがお話を伺います。</p>
                  <p>どんな些細なことでも結構ですのでお気兼ねなくお問合せください。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-6';
            $q = '病院や施設等で亡くなった場合、自宅まで搬送していただけますか？';
            $a = <<<EOF
                  <p>ご自宅まで搬送いたしますのでご安心ください。<br>ただし、ご自宅の状況によってはご安置ができない場合もございますので、詳しくはスタッフにご相談ください。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-7';
            $q = '都民のお葬式の口コミ情報はありますか？';
            $a = '<p><a href="' . appConfigSite::sitemap['voice']['path'] . '">' . appConfigSite::sitemap['voice']['title'] . '</a>ページをご参照ください</p>';
            appFuncDisp::faq($id, $q, $a);
            ?>
        </div>

        <label class="d-none d-sm-inline">
            <input type="radio" name="tab-002" class="d-none">
            価格・費用に<br class="d-lg-none">ついて
        </label>
        <div id="Box2" style="display:none">
            <?php
            $id = 'faq-2-1';
            $q = 'プラン料金だけで本当に葬儀ができますか？';
            $a = <<<EOF
                  <p>各プランには、葬儀に必要となる基本的な物品やサービスを含んでいるため、プラン内容のみでご葬儀を行っていただけます。<br>
                  ただし、ご葬儀の日程や内容の変更によっては、追加で費用が発生する場合がございます。<br>
                  ※ 火葬料金は別途お客様のご負担となります。</p>
                  <ol>
                  <li>各プランに含まれる内容（ご安置日数・搬送距離・式場利用料など）を超える場合</li>
                  <li>追加オプション（付添い安置・寺院手配など）をご希望の場合</li>
                  <li>事件・事故等でご遺体の状態が良くない場合</li>
                  </ol>
                  <p>
                  ご不明な点等がございましたら、お気軽にお問合せください。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-2-2';
            $q = 'プラン料金以外に追加費用が発生することはありませんか？';
            $a = <<<EOF
                  <p>各プランには葬儀に必要となる基本的な物品やサービスを含んでおりますが、火葬料金や寺院手配は別途費用が発生いたします。<br>
                  また、各プランに含まれている搬送距離や安置日数を超えるなど、プランの設定金額を超える場合は追加で費用が発生いたします。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-2-3';
            $q = '安置の日数がプランに含まれている日数を超えた場合、追加費用はかかりますか？';
            $a = <<<EOF
                  <p>各プランの規定日数を超えた場合は、1日毎に追加の費用が発生いたします。<br>火葬場の混雑状況によっては規定の日数を超えてしまう場合がございますのでご注意ください。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-2-4';
            $q = 'プラン料金にはお坊さんの手配費用も含まれていますか？';
            $a = <<<EOF
                  <p>お坊さんの手配費用は含まれておりません。<br>菩提寺をお持ちでない場合は都民のお葬式にてお手配が可能です。<br>菩提寺をお持ちの場合は菩提寺にご連絡下さい。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
        </div>

        <label class="d-none d-sm-inline">
            <input type="radio" name="tab-002" class="d-none">
            菩提寺に<br class="d-lg-none">ついて
        </label>
        <div id="Box3" style="display:none">
            <?php
            $id = 'faq-3-1';
            $q = 'お別れ葬、火葬式でも菩提寺の許可が必要ですか？';
            $a = <<<EOF
                  <p>必要です。読経等の宗教儀式を行わずに火葬した場合、納骨時にトラブルになることがございます。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-3-2';
            $q = '菩提寺のお坊さんに来てもらうことはできますか？';
            $a = <<<EOF
                  <p>お呼びいただけます。ただし、お坊さんへのお布施はプランには含まれておりませんのでご注意ください。</p>
                  EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
        </div>
    </div>

  </div>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<script>
function viewChange(){
    if(document.getElementById('sample')){
        id = document.getElementById('sample').value;
        if(id == 'select1'){
            document.getElementById('Box1').style.display = "";
            document.getElementById('Box2').style.display = "none";
            document.getElementById('Box3').style.display = "none";
        }else if(id == 'select2'){
            document.getElementById('Box1').style.display = "none";
            document.getElementById('Box2').style.display = "";
            document.getElementById('Box3').style.display = "none";
        }
        else if(id == 'select3'){
            document.getElementById('Box1').style.display = "none";
            document.getElementById('Box2').style.display = "none";
            document.getElementById('Box3').style.display = "";
        }
    }
window.onload = viewChange;
}
</script>
<?php require_once '../_tmpl/footer.php'; ?>


