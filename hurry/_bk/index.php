<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$title = 'お急ぎの方へ';
appConfigPage::$css = <<<EOF
<style>
    .bg-sec2-hospital {
        background-color: #fae5ef;
    }

    .bg-sec2-house {
        background-color: #ddede7;
    }

    .bg-flow {
        background-image: url("/assets/img/hurry/bg_line.png");
        background-repeat: repeat-y;
        background-position: center;
    }

    .border-gray2 {
        border: 1px solid #ccc;
    }

    .keyvisual {
        background-image: url("/assets/img/hurry/keyvisual.png");
        background-repeat: no-repeat;
        background-position: right 0px top 20px;
        background-size: 180px;
    }

    .keyvisual-baloon {
        top: -20px;
        right: 1rem;
    }

    .flow-arrow::after {
        font-family: FontAwesome;
        content: "\\f04b";
        position: absolute;
        top: 40%;
        right: -0.3rem;
        transform: translateY(-50%);
        color: #999;
        z-index: 100;
    }

    @media (min-width: 768px) {
        .keyvisual {
            background-position: right top;
            background-size: 250px;
        }
    }

    @media (min-width: 992px) {
        .border-lg {
            border: 1px solid #ccc;
        }

        .mh-lg-sec2-1 {
            min-height: 160px;
        }

        .mh-lg-sec2-2 {
            min-height: 240px;
        }

        .keyvisual {
            background-position: right -20px bottom;
            background-size: 400px;
        }

        .keyvisual-baloon {
            top: 55px;
            right: 10px;
        }

    }

    @media (min-width: 1200px) {
        .keyvisual {
            background-position: right bottom;
            background-size: 480px;
        }

        .keyvisual-baloon {
            top: 35px;
            right: 20px;
        }
    }
</style>

EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<section id="keyvisual" class="bg-base">
    <div>
        <div class="container keyvisual pb-4 position-relative">
            <img src="/assets/img/hurry/fig_baloon.png" alt="夜間の手配もおまかせください" class="position-absolute keyvisual-baloon w-100px w-lg-240px z-index-100">
            <header class="row">
                <div class="col-12 col-lg-8 col-xl-7 pt-2 pb-3 pt-md-4 pb-md-4 pt-lg-3 pb-lg-3">
                    <div class="row no-gutters">
                        <div class="col-5 col-lg-3 position-relative text-center pt-1 pt-lg-2 pr-3 pb-2 pb-lg-0 line-height-1">
                            <div class="font-weight-normal font-size-0_8 font-size-lg-1 bg-pink color-white rounded-pill pt-1 pb-1 pt-lg-2 pb-lg-2 pl-3 pr-3">お急ぎの方へ</div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <h1 class="m-0 font-weight-bold font-size-1_4 font-size-md-2 font-size-lg-2_4 pb-1">ご逝去・ご危篤<br class="d-md-none d-lg-none">の場合</h1>
                            <p class="font-size-0_8 font-size-lg-1_2 m-0 p-0 pl-1">深夜でも受付中　まずはお電話ください</p>
                        </div>
                    </div>
                </div>
            </header>
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="text-center bg-white border-gray rounded overflow-hidden">
                        <h2 class="font-size-1 font-size-lg-1_4 border-bottom line-height-1 bg-lgray m-0 p-2">都内全域対応</h2>
                        <div class="container pt-3 pt-lg-1">
                            <p class="m-0">
                                <span class="d-block d-md-inline d-lg-inline font-size-lg-1_4 pr-2">お迎えまで</span>
                                <span class="color-pink font-size-2 font-size-md-3 font-size-lg-2_4 font-weight-bold">最短１時間程度</span>
                            </p>
                            <p class="pb-2 m-0">で、ご指定の場所に<br class="d-lg-none">寝台車でお伺い致します </p>
                        </div>
                        <div class="container">
                            <div class="row no-gutters font-size-0_8 font-size-lg-1">
                                <div class="col-6 p-1">
                                    <div class="border-gray p-1">通話・相談無料</div>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="border-gray p-1"><?php echo appConfigSite::telTime; ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="container pt-2 pb-3">
                            <div class="text-center font-oswald p-1">
                                <a href="tel:<?php echo appConfigSite::tel; ?>" class="d-block text-decoration-none bg-pink rounded p-2 box-shadow-l">
                                    <div class="font-size-lg-1_2 d-block color-white pb-1">お急ぎの方専用ダイヤル</div>
                                    <div class="line-height-1 pb-1">
                                        <span class="font-size-1_4 font-size-lg-3 color-white mr-lg-2"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                        <span class="pl-1 font-size-2 font-size-lg-3 color-white"><?php echo appConfigSite::tel; ?></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sec2" class="container pb-5 pt-4">
    <div id="sec2-1" class="row no-gutters">
        <div class="col-12 col-lg-6 pr-lg-2 pb-3">
            <div class="border-gray2 rounded position-relative overflow-hidden">
                <header class="p-2 bg-sec2-hospital">
                    <h4 class="m-0 font-size-1 font-size-lg-1_2 font-weight-bold text-center">病院にいらっしゃる方</h4>
                </header>
                <div class="p-2 pt-3">
                    <div class="row no-gutters">
                        <div class="col-3 col-md-2 col-lg-3 pl-2 pr-3 pb-3">
                            <img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_hospital2.png?20220928" alt="アイコン_病院" class="w-100">  
                        </div>
                        <div class="col-9 col-md-10 col-lg-9 pb-4">
                            <div class="mh-lg-sec2-1 pr-1">
                                <p class="m-0 pb-2 color-pink">まずは「都民のお葬式」まで<br class="d-md-none">お電話下さい。</p>
                                <p class="m-0 pb-2">状況をお伺いし、お迎えに向かう時間などを調整して手配をさせて頂きます。</p>
                                <p class="m-0">病院から葬儀社を紹介されることがありますが、ご自身でお探しになれない方のためですのでお断りしても失礼にはあたりません。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 pl-lg-2 pb-3">
            <div class="border-gray2 rounded position-relative overflow-hidden">
                <header class="p-2 bg-sec2-house">
                    <h4 class="m-0 font-size-1 font-size-lg-1_2 font-weight-bold text-center">ご自宅にいらっしゃる方</h4>
                </header>
                <div class="p-2 pt-3">
                    <div class="row no-gutters">
                        <div class="col-3 col-md-2 col-lg-3 col-lg-2 pl-2 pr-3 pb-3">
                            <img src="/assets/img/spacer.png" data-echo="/assets/img/hurry/pic_house2.png?20220928" alt="アイコン_自宅" class="w-100">
                        </div>
                        <div class="col-9 col-md-10 col-lg-9 pb-4">
                            <div class="mh-lg-sec2-1 pr-1">
                                <p class="m-0 pb-2">主治医やお医者様へのご連絡はお済でしょうか？</p>
                                <p class="m-0 pb-2">主治医と連絡が取れない場合（休診等）は、<span class="color-pink">最寄りの警察署への連絡が必要</span>です。</p>
                                <p class="m-0">その後のお迎えや安置・ご葬儀のお手配については「都民のお葬式」にて承りますのでお電話ください。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sec2-2" class="row pt-3 no-gutters">
        <div class="col-12 col-lg-4 pb-3 pr-lg-2">
            <div class="border-lg p-lg-1">
                <header class="position-relative">
                    <h3 class="font-size-1 font-size-lg-1_2 bg-contrast m-0 p-3 p-lg-2 text-lg-center font-weight-bold">
                        <i class="fa fa-exclamation-circle mr-2 color-pink d-lg-none" aria-hidden="true"></i>
                        <ruby>ご逝去<rt class="pl-2">　せいきょ</rt></ruby>の場合
                    </h3>
                    <div class="position-left_middle z-index-100 w-100 d-lg-none">
                        <button class="btn btn-acd collapsed p-4 w-100 box-shadow-l" type="button" data-toggle="collapse" data-target="#sec2-2-1"></button>
                    </div>
                </header>
                <div id="sec2-2-1" class="collapse-lg-expand collapse">
                    <div class="pt-3 mh-lg-sec2-2">
                        <ul class="list check-circle">
                            <li class="pb-3"><span class="color-pink">最短１時間程度</span>で病院まで<br class="d-none d-lg-block">お迎えに上がります</li>
                            <li class="pb-3">故人様をご希望の安置場所まで<br class="d-none d-lg-block">ご搬送いたします</li>
                            <li class="pb-3">お葬式の流れ・費用について<br class="d-none d-lg-block">ご案内いたします</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 pb-3">
            <div class="border-lg p-lg-1">
                <header class="position-relative">
                    <h3 class="font-size-1 font-size-lg-1_2 bg-contrast m-0 p-3 p-lg-2 text-lg-center font-weight-bold">
                        <i class="fa fa-exclamation-circle mr-2 color-pink d-lg-none" aria-hidden="true"></i>ご<ruby>危篤<rt>きとく</rt></ruby>の場合
                    </h3>
                    <div class="position-left_middle z-index-100 w-100 d-lg-none">
                        <button class="btn btn-acd collapsed w-100 box-shadow-l p-4" type="button" data-toggle="collapse" data-target="#sec2-2-2"></button>
                    </div>
                </header>
                <div id="sec2-2-2" class="collapse-lg-expand collapse">
                    <div class="pt-3 mh-lg-sec2-2">
                        <ul class="list check-circle">
                            <li class="pb-3">万が一のために、事前に準備できることを<br class="d-none d-lg-block">ご案内いたします</li>
                            <li class="pb-3">お葬式の流れ・費用について<br class="d-none d-lg-block">ご案内いたします</li>
                            <li class="pb-3">お近くの葬儀場などをご紹介し、万が一に備えた事前準備をさせて頂きます。<br class="d-none d-lg-block">ご要望やご相談などをお聞かせください。</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 pb-3 pl-lg-2">
            <div class="border-lg p-lg-1">
                <header class="position-relative">
                    <h3 class="font-size-1 font-size-lg-1_2 bg-contrast m-0 p-3 p-lg-2 text-lg-center font-weight-bold">
                        <i class="fa fa-exclamation-circle mr-2 color-pink d-lg-none" aria-hidden="true"></i>事前相談をご希望の方へ
                    </h3>
                    <div class="position-left_middle z-index-100 w-100 d-lg-none">
                        <button class="btn btn-acd collapsed w-100 box-shadow-l p-4" type="button" data-toggle="collapse" data-target="#sec2-2-3"></button>
                    </div>
                </header>
                <div id="sec2-2-3" class="collapse-lg-expand collapse">
                    <div class="p-3 mh-lg-sec2-2">
                        <p>ご心配なことや確認しておきたいことがある方は気軽にお電話下さい。<br class="d-none d-lg-block">
                            <span class="color-pink">24時間365日</span>専門スタッフがお客様に寄り添って対応させて頂きます。
                        </p>
                        <p>月間数百件以上のご相談を承っておりますので、しっかりとご要望に合わせてご回答させて頂きます。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sec3">
    <header class="container pb-3">
        <h2 class="font-size-1_4 font-size-lg-2 border-contrast-left pl-3 color-dgray font-weight-bold">お問い合わせから、<br class="d-lg-none">ご葬儀までの流れ</h2>
        <p class="m-0 p-0">月間数百件以上のご相談を承っている専門スタッフがサポートいたします。どのようなことでもお気軽にご相談ください。</p>
    </header>
    <div class="pb-3 pb-lg-5">
        <div class="bg-base">
            <div class="container">
                <div class="w-100per w-lg-75per mx-auto pt-3 pb-3 pt-lg-5 pb-lg-5">
                    <div class="row font-size-0_6 font-size-lg-1 justify-content-center no-gutters">
                        <div class="col flow-arrow text-center pl-2 pr-2 pl-lg-3 pr-lg-3">
                            <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/pic_contact.png" alt="イメージ画像" class="w-100 border mb-2">
                            問い合わせ
                        </div>
                        <div class="col flow-arrow text-center pl-2 pr-2 pl-lg-3 pr-lg-3">
                            <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/pic_operator.png" alt="イメージ画像" class="w-100 border mb-2">
                            説明<span class="d-none d-lg-inline">・</span><br class="d-lg-none">金額の確認
                        </div>
                        <div class="col flow-arrow text-center pl-2 pr-2 pl-lg-3 pr-lg-3">
                            <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/option/thum_car_shindai.png" alt="イメージ画像" class="w-100 border mb-2">
                            お迎え<span class="d-none d-lg-inline">・</span><br class="d-lg-none">ご安置
                        </div>
                        <div class="col flow-arrow text-center pl-2 pr-2 pl-lg-3 pr-lg-3">
                            <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/option/thum_reception.png" alt="イメージ画像" class="w-100 border mb-2">
                            お打ち合わせ
                        </div>
                        <div class="col text-center pl-2 pr-2 pl-lg-3 pr-lg-3">
                            <img src="/assets/img/blank_square.png" data-echo="/assets/img/plan/option/thum_flower_altar.png" alt="イメージ画像" class="w-100 border mb-2">
                            お葬式
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg-flow w-100per w-lg-75per mx-auto">
            <section id="sec3-1" class="pb-4">
                <header class="container bg-lgray">
                    <h3 class="m-0 pt-3 pb-2 pb-lg-3 font-size-1 font-size-lg-1_4 font-weight-bold color-dgray text-center">問い合わせ</h3>
                </header>
                <div class="container pb-3 bg-lgray">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '1.ご依頼',
                        'まずは「都民のお葬式」にお電話ください<br><span class="font-size-1_4 font-size-lg-3 font-oswald color-pink">' . appConfigSite::tel . '</span>',
                        '/assets/img/plan/pic_contact.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
            </section>
            <section id="sec3-2" class="pb-4">
                <header class="container bg-lgray">
                    <h3 class="m-0 pt-3 pb-2 pb-lg-3 font-size-1 font-size-lg-1_4 font-weight-bold color-dgray text-center">説明・金額の確認 </h3>
                </header>
                <div class="container pb-3 bg-lgray">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '2.説明・金額の確認',
                        'お客様の状況をお伺いし、今後の流れや、おおまかな費用についてご案内いたします。',
                        '/assets/img/plan/pic_operator.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
            </section>
            <section id="sec3-3" class="pb-4">
                <header class="container bg-lgray">
                    <h3 class="m-0 pt-3 pb-2 pb-lg-3 font-size-1 font-size-lg-1_4 font-weight-bold color-dgray text-center">お迎え・ご安置</h3>
                </header>
                <div class="container pb-2 bg-lgray">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '3.お迎え',
                        'ご指定の場所（ご自宅・病院・警察署など）に最短１時間程度でお迎えにあがります。',
                        '/assets/img/plan/option/thum_car_shindai.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
                <div class="container pb-3 bg-lgray">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '4.ご安置',
                        '故人様を弊社指定の安置場所までご搬送いたします。<br>※安置場所は「ご自宅」または「安置施設」となります。',
                        '/assets/img/plan/option/thum_enshrined.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
            </section>
            <section id="sec3-4" class="pb-4">
                <header class="container bg-lgray">
                    <h3 class="m-0 pt-3 pb-2 pb-lg-3 font-size-1 font-size-lg-1_4 font-weight-bold color-dgray text-center">お打ち合わせ</h3>
                </header>
                <div class="container pb-3 bg-lgray">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '5.お打ち合わせ',
                        'ご遺族様の要望に沿って葬儀の内容を決めていきます。<br>葬儀の内容が決まりましたら、お見積書を提示させていただきます。',
                        '/assets/img/plan/option/thum_reception.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
            </section>
            <section id="sec3-5">
                <header class="container bg-lgray">
                    <h3 class="m-0 pt-3 pb-2 pb-lg-3 font-size-1 font-size-lg-1_4 font-weight-bold color-dgray text-center">お葬式</h3>
                </header>
                <div class="container pb-2 bg-lgray">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '6.納棺',
                        '故人様を棺にお納めいたします。',
                        '/assets/img/plan/option/thum_coffin.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
                <div class="container pb-2 bg-lgray">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '7.通夜式',
                        '故人様を式場にお運びし、通夜式を行います。<br>※通夜式後は翌日の告別式までお付添い（宿泊）が可能です。',
                        '/assets/img/plan/option/thum_pillow_decoration.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
                <div class="container pb-2 bg-lgray">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '8.告別式',
                        '故人様との最後のお別れの場となる告別式を行います。告別式後に火葬場へご出棺いたします。',
                        '/assets/img/plan/option/thum_flower_altar.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
                <div class="container pb-2 bg-lgray">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '9.火葬',
                        '火葬を行います。<br>火葬後は収骨し、骨壺へ納めて葬儀は終了となります。',
                        '/assets/img/plan/option/thum_pot.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
                <div class="container bg-lgray pb-4">
                    <?php
                    appFuncDisp_plan::flowSection(
                        '10.お支払い',
                        '火葬後に直接葬儀担当者へお支払いください。<br>※お支払方法につきましては、お打ち合わせ時にご確認ください。',
                        '/assets/img/plan/option/thum_reception.png',
                        './_module/flow.php'
                    );
                    ?>
                </div>
            </section>
        </div>
    </div>
    <footer class="pt-5">
        <?php appFuncDisp::cta('WEB葬儀社最安値・最高品質にてお手配いたします'); ?>
    </footer>
</section>


<section id="faq" class="pt-4 pb-5">
    <div class="container">
        <header class="pb-2 pt-4">
            <h2 class="font-size-1_4 font-size-lg-2 border-contrast-left pl-3 color-dgray font-weight-bold">よくある質問</h2>
        </header>
        <?php  ?>
        <?php
        $id = 'qa1';
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
        $id = 'qa2';
        $q = 'プラン料金以外に追加費用が発生することはありませんか？';
        $a = <<<EOF
<p>各プランには葬儀に必要となる基本的な物品やサービスを含んでおりますが、火葬料金や寺院手配は別途費用が発生いたします。<br>
また、各プランに含まれている搬送距離や安置日数を超えるなど、プランの設定金額を超える場合は追加で費用が発生いたします。</p>
EOF;
        appFuncDisp::faq($id, $q, $a);
        $id = 'qa4';
        $q = '生前に葬儀の相談をすることはできますか？';
        $a = <<<EOF
<p>生前のご相談も承ります。ご心配なことがございましたらお気兼ねなくお問合せください。</p>
EOF;
        appFuncDisp::faq($id, $q, $a);
        $id = 'qa5';
        $q = '役所の手続きは代行してもらえますか？';
        $a = <<<EOF
<p>代行しております。死亡届や火葬許可証の申請もプラン内に含まれておりますのでご安心ください。</p>
EOF;
        appFuncDisp::faq($id, $q, $a);
        $id = 'qa6';
        $q = appConfigSite::siteName . 'にはいつ連絡すればよいですか？';
        $a = <<<EOF
<p>葬儀のご依頼はお急ぎでの対応も承っておりますので、まずはお電話ください。<br>葬儀についてのご心配事や不明点など、専門スタッフがお話を伺います。</p>
<p>どんな些細なことでも結構ですのでお気兼ねなくお問合せください。</p>
EOF;
        appFuncDisp::faq($id, $q, $a);
        $id = 'qa7';
        $q = '病院や施設等で亡くなった場合、自宅まで搬送していただけますか？';
        $a = <<<EOF
<p>ご自宅まで搬送いたしますのでご安心ください。ただし、ご自宅の状況によってはご安置ができない場合もございますので、詳しくはスタッフにご相談ください。</p>
EOF;
        appFuncDisp::faq($id, $q, $a);
        ?>
    </div>
</section>

<section id="sec-info" class="pt-4">
    <header class="pb-3 container">
        <h2 class="font-size-1_4 font-size-lg-2 border-contrast-left pl-3 color-dgray font-weight-bold">葬儀プランのご案内</h2>
    </header>
    <div class="bg-base pt-4 pb-4">
        <?php include_once '../_module/planinfo.php'; ?>
    </div>
    <div class="pb-4 pt-4">
        <?php
        include '../plan/_module/list.php';
        ?>
    </div>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>