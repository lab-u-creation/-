<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$title = appConfigSite::sitemap['serviceJitakuso']['title'];
appConfigPage::$description = '自宅葬とは、故人さまの思い出の詰まったご自宅で、時間を気にせずゆっくりとお見送りができる葬儀です';
appConfigPage::$css = <<<EOF
<style>
    .color-jitakuso {
        color: #59d38a;
    }
    .bg-kv {
        background-image: url("/assets/img/bg-frower.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: -100px 0;
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
            width:60%;
        }
    }
    .trans-top_large {
        transform: translate(0, -50%) rotate(10deg);
        transition-duration: 0.7s;
    }
    .h-kv{
        min-height: 460px;
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
</style>
EOF;
?>

<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<section class="pb-4">
    <div class="bg-kv pt-4 pb-4 h-kv">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-7 pb-3">
                    <header class="trans trans-duration-slow" data-animation>
                        <h1 class="font-size-2 font-size-lg-3 color-plan4 font-weight-bold pt-2 pt-lg-0 pb-2 text-center font-notoserif">
                            <?php echo appConfigPage::$title; ?>
                        </h1>
                        <p class="pb-lg-3 text-md-center color-plan4">自宅葬とは、故人さまの思い出の詰まったご自宅で<br class="d-none d-lg-block">時間を気にせずゆっくりとお見送りができる葬儀です</p>
                    </header>
                    <div class="trans trans-wait-2 trans-bottom_xsmall" data-animation>
                        <div class="w-100per w-lg-500px mx-auto">
                            <h2 class="w-200px border-plan4 color-plan4 font-size-0_8 font-size-lg-1 p-2 p-lg-1 text-center line-height-1 mx-auto m-lg-0">自宅葬 対応プラン</h2>
                            <div class="d-flex align-items-end justify-content-center justify-content-lg-end line-height-1 font-size-1 font-size-lg-1_2 font-weight-bold color-dgray pt-2 pt-lg-3">
                                <span class="font-size-1_4 font-size-lg-3 font-oswald color-pink">294,800</span>
                                <span class="font-size-0_8 font-size-sm-1 pl-2">円</span>
                                <span class="pl-1 pr-2">～</span>
                                <span class="font-size-1_4 font-size-lg-3 font-oswald color-pink">528,000</span>
                                <span class="font-size-0_8 font-size-sm-1 pl-2">円（税込）</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="trans trans-top_large trans-wait-5 position-relative" data-animation>
                        <img src="/assets/img/spacer.png" data-echo="/assets/img/service/pic_frower.png" alt="花束" class="kv-photo2 trans trans-wait-12 trans-bottom_xsmall" data-animation>
                        <img src="/assets/img/blank.png" data-echo="/assets/img/service/keyvisual_jitakuso.png" alt="image" class="bg-white w-300px w-lg-100per kv-photo1">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5 pt-lg-4 font-size-1 line-height-2">
        <p>マンションなどの集合住宅に住む方が増え、葬儀に必要なスペースの確保が難しくなったことや、<br class="d-none d-lg-block">核家族化・少子高齢化によって近所付き合いが減ってしまった事により、自宅葬は徐々に減る傾向にありました。</p>
        <p>しかし、近年の新型コロナ感染症の感染対策や、家族葬のように少人数で行う葬儀の認知度の高まりから、<br class="d-none d-lg-block">ご自宅に家族や親族のみが集まって行う「自宅葬」のご希望が増加しています</p>
    </div>
</section>

<section class="container pb-5 font-size-0_9 font-size-lg-1">
    <header>
        <h2 class="text-center font-size-1 font-size-lg-1_4 m-0 pb-2 pb-lg-4 font-weight-bold">
            <span class="font-size-2 pr-lg-3 d-block d-lg-inline"><i class="fa fa-check-circle color-orange" aria-hidden="true"></i></span>自宅葬はこのような方に選ばれています
        </h2>
    </header>
    <div class="row pb-4">
        <div class="col-6 col-md-3 p-2">
            <div class="border rounded-1 overflow-hidden">
                <div class="pt-2">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-12">
                            <img src="/assets/img/blank.png" data-echo="/assets/img/service/pic_virus.png" alt="イメージ画像" class="w-80per w-lg-50per d-block mx-auto p-3 p-lg-0">
                        </div>
                        <div class="col-lg-12">
                            <div class="p-2 p-lg-3 m-0 text-center">感染症対策で<br>多くの人が呼びにくい</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 p-2">
            <div class="border rounded-1 overflow-hidden">
                <div class="pt-2">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-12">
                            <img src="/assets/img/blank.png" data-echo="/assets/img/service/pic_family.png" alt="イメージ画像" class="w-80per w-lg-50per d-block mx-auto p-3 p-lg-0">
                        </div>
                        <div class="col-lg-12">
                            <div class="p-2 p-lg-3 m-0 text-center">家族や親族などの<br>身内だけで見送りたい</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 p-2">
            <div class="border rounded-1 overflow-hidden">
                <div class="pt-2">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-12">
                            <img src="/assets/img/blank.png" data-echo="/assets/img/service/pic_sanretsu.png" alt="イメージ画像" class="w-80per w-lg-50per d-block mx-auto p-3 p-lg-0">
                        </div>
                        <div class="col-lg-12">
                            <div class="p-2 p-lg-3 m-0 text-center">ご近所付き合いが<br>ほとんどない</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 p-2">
            <div class="border rounded-1 overflow-hidden">
                <div class="pt-2">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-12">
                            <img src="/assets/img/blank.png" data-echo="/assets/img/service/pic_flower.png" alt="イメージ画像" class="w-80per w-lg-50per d-block mx-auto p-3 p-lg-0">
                        </div>
                        <div class="col-lg-12">
                            <div class="p-2 p-lg-3 m-0 text-center">故人が住み慣れた自宅から<br class="d-none d-xl-block">見送ってあげたい</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="line-height-2">自宅葬には葬儀場にはないメリットがありますが、他方でご近所への配慮や事前の準備など負担のかかる面もあります。<br>この点、都民のお葬式には豊富な経験があり、様々な面でご相談いただけます。ご質問などございましたらお気軽にお電話ください。</p>
</section>

<section class="container pb-5">
    <h2 class="text-center font-size-1 font-size-lg-1_4 m-0 pb-4 font-weight-bold">
        自宅葬のメリットの一例
    </h2>
    <div class="border">
        <div class="row align-items-md-center no-gutters">
            <div class="col-12 col-md-3 col-lg-2 order-1 order-md-2 text-center text-lg-right p-3 p-lg-1">
                <picture>
                    <source media="(min-width:768px)" srcset="/assets/img/service/pic_enshrined_l.png">
                    <img src="/assets/img/spacer.png" data-echo="/assets/img/service/pic_enshrined_s.png" alt="葬儀イメージ" class="w-100">
                </picture>
            </div>
            <div class="col-12 col-md-9 col-lg-10 order-2 order-md-1 p-3">
                <ul class="list check-circle m-0">
                    <li class="pt-1 pb-1 border-bottom-note">しきたりに縛られることなく自由な葬儀が行えます。</li>
                    <li class="pt-1 pb-1 border-bottom-note">葬儀場のように時間を気にすることなく、ゆっくりとお見送りができます。</li>
                    <li class="pt-1 pb-1 border-bottom-note">故人さまの愛したご自宅で、家族や親族と気兼ねなくお別れができます。</li>
                    <li class="pt-1 pb-1">故人さまが病院などで亡くなった場合、最後に住み慣れたご自宅に帰してあげられます。</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="pb-4">
    <h2 class="text-center font-size-1_4 font-size-lg-2 font-weight-bold pb-2 pb-lg-4 color-dgray">自宅葬 対応プラン</h2>
    <?php
    $modulePlanList = appConfigPlan::jitakusoList;
    $dispTitle = false;
    include '../plan/_module/list.php';
    ?>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
