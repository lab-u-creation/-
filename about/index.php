<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$title = appConfigSite::sitemap['about']['title'];
appConfigPage::$css = <<<EOF
<style>
#category-about{
  background :#fdfbf0;
}
.bg-img{
  background-image: url('/assets/img/about/bg-about.png');
  background-position: top 20px center;
  background-size: 750px;
  background-repeat: no-repeat;
  background-blend-mode: multiply;
  padding-bottom: 0 !important;
}
.arrow{
  position: relative;
}
.out{
  position: relative;
}
.ininer img{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  transition: .5s;
  z-index: 0;
}
img{
  display: block;
  width: 100%;
  height: auto;
}
label span{
  display: block;
  width: 25px;
  height: 25px;
  padding: 7px;
  margin: 10px 0 0;
  border-radius: 100%;
  cursor: pointer;
  position: relative;
  z-index: 2;
}
label span::before{
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  background: #a69f9f;
  opacity: 0.5;
  border-radius: 100%;
}
input:nth-of-type(1):checked ~ .in label:nth-of-type(1) span::before,
input:nth-of-type(2):checked ~ .in label:nth-of-type(2) span::before,
input:nth-of-type(3):checked ~ .in label:nth-of-type(3) span::before,
input:nth-of-type(4):checked ~ .in label:nth-of-type(4) span::before{
  background: #373737;
  opacity: 1;
}
label span::before{
  animation: slidebutton 14s infinite;
}
@keyframes slidebutton{
  0%{opacity: 0.5;background: #a69f9f;}
  3.5%{opacity: 1;background: #373737;}/* b÷x×100=y */
  25%{opacity: 1;background: #373737;}/* 100÷c=z */
  28.5%{opacity: 0.5;background: #a69f9f;}/* y+z */
}
label:nth-of-type(2) span::before,label:nth-of-type(2) img{
  animation-delay: 3.5s;
}
label:nth-of-type(3) span::before,label:nth-of-type(3) img{
  animation-delay: 7s;
}
label:nth-of-type(4) span::before,label:nth-of-type(4) img{
  animation-delay: 10.5s;
}
input:nth-of-type(1):checked ~ .in label:nth-of-type(1) img,
input:nth-of-type(2):checked ~ .in label:nth-of-type(2) img,
input:nth-of-type(3):checked ~ .in label:nth-of-type(3) img,
input:nth-of-type(4):checked ~ .in label:nth-of-type(4) img{
  opacity: 1;
  z-index: 1;
}
.ininer img{
  animation: slide 14s infinite;
  opacity: 0;
}
@keyframes slide{
  0%{opacity: 0;}
  3.5%{opacity: 1;z-index: 1;}
  25%{opacity: 1;}
  28.5%{opacity: 0;z-index: 0;}
}
input:checked ~ .in img,input:checked ~ .in span::before{
  animation: none;
}
.left-arrow::before{
  content: "";
  position: absolute;
  top: 50%;
  right: 100%;
  margin-top: -10px;
  border: 10px solid transparent;
  border-right: 15px solid #fdf49c;
}
.right-arrow::before{
  content: "";
  position: absolute;
  top: 50%;
  left: 100%;
  margin-top: -10px;
  border: 10px solid transparent;
  border-left: 15px solid #fdf49c;
}
.about-title{
  margin-top:-60px;
}
.about-number{
  position: absolute;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background: #f7e762;
  font-size: 1rem;
  font-weight: bold;
  z-index: 1;
  top: -10px;
  left: 0;
}
@media (min-width:375px) {
  .d-smx-block{
    display:block !important;
  }
  .d-smx-none{
    display:none !important;
  }
}
@media (min-width:420px) {
  .d-smm-block{
    display:block !important;
  }
  .d-smm-none{
    display:none !important;
  }
  .font-size-smm-1{
    font-size:1rem;
  }
}

@media (min-width:576px) {
  .bg-img{
    background-position: top 0 right;
    background-size:730px;
  }
}
@media (min-width:768px) {
  .arrow:before{
    content: '';
    position: absolute;
    top: 30%;
    right: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #d88252;
  }
}
@media (min-width:992px) {
  .bg-img{
    background-position: top 90px right;
    background-size: 970px;
  }
  .arrow:before{
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
  }
  .display-lg-flex{
    display: flex;
  }
  .ininer img{
    position: initial;
    animation:none;
    opacity:1;
  }
  label span,
  label span::before,
  .left-arrow::before,
  .right-arrow::before{
    display :none;
  }
  .about-title{
    margin-top:0;
  }
}
@media (min-width:1200px) {
  .d-xl-none{
    display:none !important;
  }
}
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<div class="pt-3 pt-md-0 border-bottom">
  <?php appFuncDisp::h1(appConfigPage::$title, '都民のお葬式は、明瞭で最高品質のお葬式プランを提供する、都民によりそうサービスです。'); ?>
</div>

<div class="bg-white pt-5 pb-5">
  <div class="container pb-sm-4">
  <div class="color-dgray font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3">こんな事で<br class="d-md-none">お悩みではありませんか？</div>

    <div class="row no-gutters justify-content-center mt-3 mb-3 mt-lg-5">

        <div class="col-12 col-md-10 col-lg-4 pb-4 pb-lg-0">
          <div class="row no-gutters position-relatove align-items-center p-lg-2">
            <div class="col-3 col-lg-4 position-lg-left_bottom z-index-100">
              <img src="/assets/img/about/pic_human1.png" alt="人のイラスト" class="w-100per p-md-3 pr-2 ml-lg-1 p-lg-0 pb-lg-2">
            </div>
            <div class="col col-lg-12 ml-3 m-lg-0">
              <div class="bg-contrast left-arrow rounded pr-md-2 pr-xl-4">
                <div class="display-lg-flex justify-content-lg-end text-center font-size-1 font-size-md-1_2 p-2 p-sm-3 p-lg-3">お葬式って<br class="d-none d-lg-none">結局<br class="d-lg-block">いくら<br class="d-none d-lg-none">かかるの？</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-10 col-lg-4 pb-4 pb-lg-0">
          <div class="row no-gutters position-relatove align-items-center p-lg-2">
            <div class="col col-lg-12 mr-3 m-lg-0">
              <div class="bg-contrast right-arrow rounded pr-md-2 pr-xl-4">
                <div class="display-lg-flex justify-content-lg-end text-center font-size-1 font-size-md-1_2 p-2 p-sm-3 p-lg-3">プラン選びは<br>どうすればいいの？</div>
              </div>
            </div>
            <div class="col-3 col-lg-4 position-lg-left_bottom z-index-100">
              <img src="/assets/img/about/pic_human2.png" alt="人のイラスト" class="w-100per p-md-3 pl-2 ml-lg-2 p-lg-0 pb-lg-2">
            </div>
          </div>
        </div>

        <div class="col-12 col-md-10 col-lg-4 pb-4 pb-lg-0">
          <div class="row no-gutters position-relatove align-items-center p-lg-2">
            <div class="col-3 col-lg-4 position-lg-left_bottom z-index-100">
              <img src="/assets/img/about/pic_human3.png" alt="人のイラスト" class="w-100per p-md-3 pr-2 ml-lg-2 p-lg-0 pb-lg-2">
            </div>
            <div class="col col-lg-12 ml-3 m-lg-0">
              <div class="bg-contrast left-arrow rounded pr-md-2 pr-xl-4">
                <div class="display-lg-flex justify-content-lg-end text-center font-size-1 font-size-md-1_2 p-2 p-sm-3 p-lg-3">万が一の際は<br>どうすればいいの？</div>
              </div>
            </div>
          </div>
        </div>

    </div>

    <div class="text-lg-center font-size-1 font-size-lg-1">
      <p>はじめてのお葬式、分からないことや不安なことが多いのは当然です。<br class="d-none d-md-block">そこで、都民のお葬式では、お客様によりそった<span class="color-orange font-weight-bold pl-1 pr-1">３つのご安心</span>を提供しています。</p>
    </div>
  </div>
</div>

  <div class="bg-base pt-5 pb-4">
    <div class="color-dgray font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center line-height-1_2 font-weight-bold mb-5 mb-lg-3">都民のお葬式がこだわった <br class="d-ms-none"><span class="color-orange"><span class="font-size-2 font-size-lg-3">3</span>つ</span> のご安心</div>

    <section id="sec1" class="container pb-5">
      <div class="bg-white rounded-1 border p-3 p-lg-4">

      <header>
        <div class="pt-3 pb-3">
          <div class="row align-items-center no-gutters justify-content-center">
              <div class="text-center font-weigh about-title">
                <div class="rounded bg-contrast font-size-1_2 font-weight-bold pt-2 pb-2 pl-3 pr-3">安心 <span class="font-size-1_2">その1</span></div>
              </div>
              <div class="w-100per w-lg-auto pt-2 pt-lg-0 pl-md-3 text-center tex-lg-left">
                  <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray m-0">全国平均の半額以下<br class="d-md-none"><span class="color-pink">業界最安クラス</span>の<br class="d-smx-none">プラン料金</h3>
              </div>
          </div>
        </div>
      </header>

        <div class="w-lg-90per m-auto">
          <div class="row align-items-top no-gutters mb-4">
              <div class="col-12 col-md-5 col-lg-5 p-2 p-md-0 pr-md-2">
                <img src="/assets/img/about/fig_illustrated_home.png?20230911" alt="全国平均112.5万円：都民のお別れ葬なら都民のお別れ葬万円" class="w-100per image-rendering">
                <p class="font-size-0_8 m-0">※経済産業省 2022年7月分確報「特定サービス産業動態統計調査」（2021年より集計）</p>
              </div>
              <div class="col-12 col-md-7 col-lg-7 p-md-2">
                <p class="font-size-lg-1_1 line-height-1_7 mh-120px">お葬式は人が亡くなった際に必ず必要となるものですが、その費用は高額になることが多く、残されたご遺族にとって大きな負担となっていました。ご遺族の中には、大切な故人さまのためにできる限りのことをしたいという想いから、無理をして費用を捻出される方も多くいらっしゃいます。<br>
                  そこで、都民のお葬式では、そのようなご遺族の負担をできる限り軽減し、笑顔で故人さまを見送って頂くため、<span class="color-pink">業界最安クラスのプラン料金</span>にてお葬式を執り行っています。
                </p>
              </div>

          </div>

          <div class="rounded border-orange overflow-hidden mb-2">
            <div class="bg-orange">
              <p class="font-size-1 font-size-smm-1 font-size-md-1_2 text-center font-weight-bold color-white pt-2 pb-2 p-md-3">業界最安クラスの葬儀価格を<br class="d-smm-none">実現するため、<br class="d-none d-smm-block d-xl-none">都民のお葬式では<br class="d-smm-none">以下の取り組みを行っております</p>
            </div>
            <div class="row align-items-center no-gutters justify-content-center pb-3 pr-3">
              <ul class="font-size-lg-1_1 m-0">
                <li class="pb-2">お葬式に本当に必要な物品・サービスに絞り<span class="color-orange">高品質・適正価格</span>のプランにまとめています。</li>
                <li class="pb-2">常に競合他社の価格をチェックし、<span class="color-orange">最安値に挑戦</span>しています。</li>
                <li class="pb-2">当社独自の最新システムで<span class="color-orange">事務コストを圧縮</span>し、お客様に還元しています。</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="pt-4 pb-4 row align-items-center no-gutters justify-content-center">
           <a href="<?php echo appConfigSite::sitemap['plan']['path']; ?>" class="bg-lgray-gradient w-300px border text-center p-3 font-size-lg-1_2 text-decoration-none border d-block"><span class="color-dgray">プラン料金を見る<i class="fa fa-chevron-circle-right ml-2 color-orange" aria-hidden="true"></i></span></a>
        </div>

      </div>
    </section>

    <section id="sec2" class="container pb-5">
      <div class="bg-white rounded-1 border p-3 p-lg-4">
        <header>
          <div class="pt-3 pb-3">
            <div class="row align-items-center no-gutters justify-content-center">
                <div class="text-center font-weigh about-title">
                  <div class="rounded bg-contrast font-size-1_2 font-weight-bold pt-2 pb-2 pl-3 pr-3">安心 <span class="font-size-1_2">その2</span></div>
                </div>
                <div class="w-100per w-lg-auto pt-2 pt-lg-0 pl-md-3 text-center tex-lg-left">
                    <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray m-0"><span class="color-pink">都内300ヶ所以上</span>の<br class="d-md-none">式場からご希望に<br class="d-smx-none">合わせた<br class="d-none d-smx-block d-smm-none">ご案内</h3>
                </div>
            </div>
          </div>
        </header>

        <div class="w-lg-90per m-auto">
          <div class="position-relative">
            <img src="/assets/img/about/pic_hole1.png" alt="葬儀場イメージ" class="d-lg-none">
            <input type=radio name="slide" id="slide1" class="d-none">
            <input type=radio name="slide" id="slide2" class="d-none">
            <input type=radio name="slide" id="slide3" class="d-none">
            <input type=radio name="slide" id="slide4" class="d-none">
            <div class="ininer d-flex justify-content-center">
                <label class="p-md-1" for="slide1"><span></span><img src="/assets/img/about/pic_hole1.png" alt="葬儀場イメージ"></label>
                <label class="p-md-1" for="slide2"><span></span><img src="/assets/img/about/pic_hole2.png" alt="葬儀場イメージ"></label>
                <label class="p-md-1" for="slide3"><span></span><img src="/assets/img/about/pic_hole3.png" alt="葬儀場イメージ"></label>
                <label class="p-md-1" for="slide4"><span></span><img src="/assets/img/about/pic_hole4.png" alt="葬儀場イメージ"></label>
            </div>
          </div>

          <div class="pt-3">
            <p class="font-size-lg-1_1 line-height-1_7 mh-120px">公営斎場でも、ご指定の式場でも、都内全域から厳選した<span class="font-size-1_6 font-size-lg-1_7 color-orange font-weight-bold pl-2 pr-2">300</span>ヶ所以上の式場がご案内可能です。当社だけの特別価格で利用可能な式場もございます。<br>
              24時間365日対応の電話窓口では、葬儀のプロがご手配はもちろん、お客様のご要望に合わせてご相談も承っております。「自分で探すのは難しい」とご心配の方も、専門スタッフが最寄り駅や駐車場の有無、参列者の人数や式場の利用料など、お客様のご希望に沿った式場探しをお手伝いいたします。火葬場・葬儀場のお手配まで代行いたしますのでご安心ください。
            </p>
          </div>
        </div>

        <div class="pt-4 pb-4 row align-items-center no-gutters justify-content-center">
           <a href="<?php echo appConfigSite::sitemap['saijo']['path']; ?>" class="bg-lgray-gradient w-300px border text-center p-3 font-size-lg-1_2 text-decoration-none border d-block"><span class="color-dgray">式場の検索をする<i class="fa fa-chevron-circle-right ml-2 color-orange" aria-hidden="true"></i></span></a>
        </div>

      </div>
    </section>

    <section id="sec3" class="container pb-5">
      <div class="bg-white rounded-1 border p-3 p-lg-4">
        <header>
          <div class="pt-3 pb-3">
            <div class="row align-items-center no-gutters justify-content-center">
                <div class="text-center font-weigh about-title">
                  <div class="rounded bg-contrast font-size-1_2 font-weight-bold pt-2 pb-2 pl-3 pr-3">安心 <span class="font-size-1_2">その3</span></div>
                </div>
                <div class="w-100per w-lg-auto pt-2 pt-lg-0 pl-md-3 text-center tex-lg-left">
                    <h3 class="font-size-1_4 font-size-lg-1_6 line-height-1_4 font-weight-bold color-dgray m-0"><span class="color-pink">いつでも、どなたでも</span><br class="d-sm-none">最安値料金で</h3>
                </div>
            </div>
          </div>
        </header>


        <div class="w-lg-90per m-auto">
          <div class="row align-items-top no-gutters">
              <div class="col-12 col-md-5 col-lg-4 p-2">
                <img src="/assets/img/about/pic_mind3.png" alt="ご相談窓口の女性" class="w-100per image-rendering">
              </div>
              <div class="col-12 col-md-7 col-lg-8 p-md-2">
                <p class="font-size-lg-1_1 line-height-1_7 mh-120px">都民のお葬式は「いつでも、どなたでも」変わらぬ最安値料金でご手配させていただきます。昨今、葬儀を取り扱う会社の多くが価格の割引条件として、事前の資料請求や会員登録を求めています。<br>
                  しかし、お葬式が必要になるタイミングは事前に予測できる場合ばかりではなく、突然の不幸でお葬式が必要になってしまう場合も多くございます。都民のお葬式では、全ての方々に悔いのないお別れをしていただくため、事前の資料請求や会員登録なしで、費用を抑えた・高品質のお葬式を提供しております。いつでも・どなたでも、安心してご利用いただけるお葬式サービスです。</p>
              </div>
          </div>
          <div class="p-md-2 pt-4 pb-4 pl-md-0">
            <div class="font-size-1_4 border-contrast-left pl-2 font-weight-bold">ご利用の流れ</div>
          </div>

          <div class="row align-items-center no-gutters">
            <div class="col-12 col-sm-6 col-md-3 p-2 pl-3 pl-md-2 pr-md-4 arrow position-relative">
              <img src="/assets/img/about/pic_flow1.png" alt="お電話" class="w-100per image-rendering">
              <div class="about-number d-md-none">1</div>
              <p class="text-center font-weight-bold font-size-1_2 pt-2">お電話</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 p-2 pl-3 pl-md-2 pr-md-4 arrow position-relative">
              <img src="/assets/img/about/pic_flow2.png" alt="お迎え・ご安置" class="w-100per image-rendering">
              <div class="about-number d-md-none">2</div>
              <p class="text-center font-weight-bold font-size-1_2 pt-2">お迎え・ご安置</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 p-2 pl-3 pl-md-2 pr-md-4 arrow position-relative">
              <img src="/assets/img/about/pic_flow3.png" alt="お打合せ" class="w-100per image-rendering">
              <div class="about-number d-md-none">3</div>
              <p class="text-center font-weight-bold font-size-1_2 pt-2">お打合せ</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 p-2 pl-3 pl-md-2 pr-md-4 position-relative">
              <img src="/assets/img/about/pic_flow4.png" alt="お葬式" class="w-100per image-rendering">
              <div class="about-number d-md-none">4</div>
              <p class="text-center font-weight-bold font-size-1_2 pt-2">お葬式</p>
            </div>
          </div>

        </div>
      </div>
    </section>

</div>
<div class="bg-white pt-5">
  <?php require_once '../plan/_module/list.php'; ?>
</div>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
