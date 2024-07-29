<?php require_once '../../_app/func/disp_plan.php'; ?>
<?php
appConfigPage::$title = $religion['name'] . 'のお葬式プラン';
appConfigPage::$addBreadcrumb = [
    'title' => appConfigSite::sitemap['planReligion']['title'],
    'path' => appConfigSite::sitemap['planReligion']['path']
];
appConfigPage::$css = <<<EOF
<style>
    .pos-top-m40{
        position:relative;
        top:-40px;
    }
    .bg-addoption {
        background-color: #faf8e6;
    }

    .nav-tablink{
        margin:0;
        display:block;
        padding:.6rem;
        border-radius: .5rem;
        border:none;
        opacity:0.5;
    }

    .nav-tablink.active,
    .nav-tablink:hover{
       opacity:1;
    }

    .pos-top-m25per {
        position: relative;
        top: -45%;
    }

    @media (min-width:768px) {
        .pos-top-md-0 {
            position: relative;
            top: 0;
        }
    }

    @media (min-width:992px) {
        .nav-tablink{
            display:block;
            padding:1rem 0;
            border-top-left-radius: .5rem;
            border-top-right-radius:.5rem;
            border-bottom-left-radius: 0;
            border-bottom-right-radius:0;
        }
        .nav-tablink.active{
            padding-bottom:1.6rem;
        }
    }
</style>
EOF;
?>
<?php require_once '../../_tmpl/header.php'; ?>
<?php require_once '../../_tmpl/l-header.php'; ?>

<div class="w-100 bg-<?php echo $religion['id']; ?> overflow-hidden" data-imagesloaded>
    <div class="container d-md-flex justify-content-between pb-4 pb-md-0">
        <div class="pt-4 pb-4 trans trans-bottom_small trans-wait-4 color-<?php echo $religion['id']; ?>">
            <h1 class="font-size-1_4 font-size-md-2 font-size-lg-2_4 font-size-xl-3 pt-1 pb-3 font-notoserif line-height-1 text-center text-md-left">
                <?php echo appConfigPage::$title; ?>
            </h1>
            <p class="pr-2">
                <?php if ($religion['id'] === appConfigPlan::religion['shinto']['id']) : ?>
                    都民のお葬式では神道のお葬式も承っております。<br class="d-none d-lg-block">様々なご要望にお応えいたしますのでご相談ください。
                <?php elseif ($religion['id'] === appConfigPlan::religion['christ']['id']) : ?>
                    都民のお葬式ではキリスト教のお葬式も承っております。<br class="d-none d-lg-block">様々なご要望にお応えいたしますのでご相談ください。
                <?php elseif ($religion['id'] === appConfigPlan::religion['yujinso']['id']) : ?>
                    都民のお葬式では友人葬のお葬式も承っております。<br class="d-none d-lg-block">様々なご要望にお応えいたしますのでご相談ください。
                <?php endif; ?>
            </p>
            <div class="d-flex justify-content-center justify-content-md-start align-items-center pt-2">
                <div class="text-center">
                    <span class="d-block pb-1 text-md-left">火葬のみ</span>
                    <span class="font-size-1_4 font-size-lg-3 font-oswald mr-md-2 line-height-1"><?php echo $religion['planList']['plan1']['price']; ?></span>
                    <span class="font-size-1 font-size-lg-2 font-weight-bold">円</span>
                    <span class="d-block font-size-0_8 font-size-md-1">税込：<?php echo $religion['planList']['plan1']['priceZei']; ?>円</span>
                </div>
                <div class="w-60px text-center font-size-1_4">～</div>
                <div class="text-center">
                    <span class="d-block pb-1 text-md-left">一般葬（<?php echo $religion['planList']['plan5']['numberPeople']; ?>）</span>
                    <span class="font-size-1_4 font-size-lg-3 font-oswald mr-md-2 line-height-1"><?php echo $religion['planList']['plan5']['price']; ?></span>
                    <span class="font-size-1 font-size-lg-2 font-weight-bold">円</span>
                    <span class="d-block font-size-0_8 font-size-md-1">税込：<?php echo $religion['planList']['plan5']['priceZei']; ?>円</span>
                </div>
            </div>
        </div>
        <div class="container-over-md-right m-lg-0 w-md-60per w-lg-45per h-210px h-md-auto">
            <div class="w-100 h-100 overflow-hidden bg-<?php echo $religion['id']; ?> trans trans-left_small position-relative p-3">
                <img src="/assets/img/plan/religion/keyvisual_<?php echo $religion['id']; ?>.png" alt="イメージ" class="w-100per w-md-500px w-xl-100per position-left_top trans trans-left_small trans-duration-slow trans-wait-9">
            </div>
        </div>
    </div>
</div>

<?php
//======================================================================
// 価格の紹介
//======================================================================
?>
<section id="sec-1" class="pt-3 pb-5 container">
    <header>
        <h2 class="font-notoserif font-size-1_4 font-size-lg-2 font-weight-bold pt-2 pb-2 m-0 text-md-center line-height-1_4">
            <?php echo $religion['name']; ?>プラン
        </h2>
    </header>
    <div class="text-md-center pt-2 pb-2 font-size-1 line-height-1_7">
        <p>
            <?php if ($religion['id'] === appConfigPlan::religion['shinto']['id']) : ?>
                神式に必要な物品を含んだプランをご用意いたしました。<br class="d-none d-md-block">
                神道備品付きの花祭壇で玉串奉奠なども行って頂けます。<br>
                ご要望により本格的な白木祭壇への変更も可能です。
            <?php elseif ($religion['id'] === appConfigPlan::religion['christ']['id']) : ?>
                キリスト教のお葬式に必要な物品を含んだプランをご用意いたしました。<br class="d-none d-md-block">
                白布の上質な棺が含まれております。<br>
                ご希望により追加料金にてキリスト棺への変更も可能です。
            <?php elseif ($religion['id'] === appConfigPlan::religion['yujinso']['id']) : ?>
                友人葬に必要な物品を含んだプランをご用意いたしました。<br class="d-none d-md-block">
                花祭壇は友人葬用の樒入り生花祭壇と通常の花祭壇からお選び頂けます。<br>
                ご要望をお聞かせ下さい。
            <?php endif; ?>
        </p>
    </div>
    <div class="row justify-content-center">
        <?php foreach ($religion['planList'] as $plan) : ?>
            <?php if ($plan['id'] != $religion['planList']['plan1']['id'] && $plan['id'] != $religion['planList']['plan2']['id']) : ?>
                <?php include './_module/detail_planlist.php'; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="row justify-content-center">
        <?php foreach ($religion['planList'] as $plan) : ?>
            <?php if ($plan['id'] === $religion['planList']['plan1']['id'] || $plan['id'] === $religion['planList']['plan2']['id']) : ?>
                <?php include './_module/detail_planlist.php'; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php
//======================================================================
// オプションの紹介
//======================================================================
?>
<section id="sec2" class="pb-5">
    <header class="container">
        <h2 class="font-notoserif font-size-1_4 font-size-lg-2 font-weight-bold pt-2 pb-3 pb-md-4 m-0 text-center line-height-1_4">
            <?php echo $religion['name']; ?>プランに含まれるもの
        </h2>
    </header>
    <nav id="sec2-nav" class="border-<?php echo appConfigPlan::plan['plan1']['id']; ?>-bottom">
        <div class="container pb-3 pb-lg-0">
            <ul class="nav nav-tabs align-items-end border-0" id="myTab" role="tablist">
                <?php foreach ($religion['planList'] as $index => $plan) : ?>
                    <li class="d-block w-50per w-lg-20per text-center p-1 pb-md-0">
                        <a id="sec2-<?php echo $plan['id']; ?>" data-changeborder='{"target":"#sec2-nav","bordercolor":"border-<?php echo $plan['id']; ?>-bottom"}' class="nav-tablink text-decoration-none bg-<?php echo $plan['id']; ?><?php if ($index === array_key_first($religion['planList'])) : ?> active<?php endif; ?>" data-toggle="tab" href="#<?php echo $plan['id']; ?>" role="tab">
                            <nobr class="color-white"><?php echo $plan['name']; ?></nobr>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
    <div id="sec2-contents" class="bg-lgray pt-4 pb-4">
        <div class="tab-content">
            <?php foreach ($religion['planList'] as $index => $plan) : ?>
                <section class="tab-pane fade<?php if ($index === array_key_first($religion['planList'])) : ?> show active<?php endif; ?>" id="<?php echo $plan['id']; ?>" role="tabpanel">
                    <div class="container">
                        <div class="rounded-lg overflow-hidden">
                            <header class="bg-<?php echo $plan['id']; ?> pt-3 pb-4">
                                <span class="d-block text-center pb-2 color-white"><?php echo $plan['overview']; ?></span>
                                <h3 class="m-0 text-center font-notoserif font-size-1_4 font-size-lg-3 font-weight-bold line-height-1 color-white">
                                    <?php echo $plan['name']; ?>
                                </h3>
                            </header>
                            <div class="bg-white p-3 p-md-4">
                                <div class="row no-gutters justify-content-center align-items-center">
                                    <div class="col-12 col-lg-6 col-xl-5 p-md-2">
                                        <div class="bg-base p-2 p-md-3">
                                            <div class="text-center pb-1 pb-md-2"><i class="fa fa-users mr-2 color-<?php echo $plan['id']; ?>" aria-hidden="true"></i>参列者数目安：<?php echo $plan['numberPeople']; ?></div>
                                            <div class="row no-gutters align-items-center justify-content-center font-size-0_8 font-size-lg-1">
                                                <div class="col p-1">
                                                    <div class="bg-<?php echo $plan['id']; ?> color-white text-center p-1 rounded">お迎え</div>
                                                </div>
                                                <div class="col p-1">
                                                    <div class="bg-<?php echo $plan['id']; ?> color-white text-center p-1 rounded">ご安置</div>
                                                </div>
                                                <div class="col p-1">
                                                    <?php if ($plan['id'] == appConfigPlan::plan['plan1']['id'] || $plan['id'] == appConfigPlan::plan['plan2']['id'] || $plan['id'] == appConfigPlan::plan['plan3']['id']) : ?>
                                                        <div class="bg-lgray color-gray text-center p-1 rounded"><?php echo $religion['tuya']; ?></div>
                                                    <?php else : ?>
                                                        <div class="bg-<?php echo $plan['id']; ?> color-white text-center p-1 rounded"><?php echo $religion['tuya']; ?></div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col p-1">
                                                    <?php if ($plan['id'] == appConfigPlan::plan['plan1']['id'] || $plan['id'] == appConfigPlan::plan['plan2']['id']) : ?>
                                                        <div class="bg-lgray color-gray text-center p-1 rounded"><?php echo $religion['kokubetsu']; ?></div>
                                                    <?php else : ?>

                                                        <div class="bg-<?php echo $plan['id']; ?> color-white text-center p-1 rounded"><?php echo $religion['kokubetsu']; ?></div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col p-1">
                                                    <div class="bg-<?php echo $plan['id']; ?> color-white text-center p-1 rounded">火葬</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xl-3 pr-3 pr-md-0">
                                        <div class="pt-2 text-right">
                                            <span class="color-<?php echo $plan['id']; ?> font-size-3 font-size-lg-3_5 font-oswald line-height-1"><?php echo $plan['price']; ?></span>
                                            <span class="color-<?php echo $plan['id']; ?> font-size-2 font-weight-bold pl-1 pb-1">円</span>
                                        </div>
                                        <div class="font-size-1 font-size-lg-1_2 text-right pb-2 color-dgray">
                                            （税込：<span class="font-oswald d-inline-block mr-2"><?php echo $plan['priceZei']; ?></span>円）
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3 pb-5">
                                    <?php appFuncDisp_plan::option($plan, appConfigPlan::option, '../_module/option.php'); ?>
                                </div>
                                <?php if (count($plan['addOption']) > 0) : ?>
                                    <section class="pt-4 pl-2 pr-2 pl-md-4 pr-md-4 bg-addoption">
                                        <header class="pos-top-m40">
                                            <div class=" w-lg-70per w-lg-800px mx-auto text-center rounded-pill bg-<?php echo $plan['id']; ?>">
                                                <h3 class="font-size-1 font-size-lg-1_6 pl-3 color-white font-weight-bold pt-2 pb-2">
                                                    追加できるサービス
                                                </h3>
                                            </div>
                                            <p class="text-md-center pt-2">お客様のご要望に合わせて、様々な商品・サービスがご手配可能です。<br class="d-none d-md-block">記載のない商品も承りますので、ご要望をお聞かせください。</p>
                                        </header>
                                        <div class="row pos-top-m40">
                                            <?php appFuncDisp_plan::addoption($plan, appConfigPlan::addOption, '../_module/option.php'); ?>
                                        </div>
                                    </section>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php
//======================================================================
// お坊様の手配（神道のみ）
//======================================================================
?>
<?php if ($religion['id'] === appConfigPlan::religion['shinto']['id']) : ?>
    <section id="sec3" class="container pb-6">
        <div class="w-100per w-lg-800px mx-auto border border-secondary rounded overflow-hidden shadow-sm bg-white position-relative">
            <div class="row no-gutters">
                <div class="col-12 col-md-3 p-2">
                    <div class="h-210px h-md-100per overflow-hidden position-relative">
                        <img src="/assets/img/blank_square.png" alt="写真" class="w-100 pos-top-m25per pos-top-md-0" data-echo="/assets/img/plan/pic_shinto.png?20231225">
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="text-justify p-2 p-md-3">
                        <header class="color-<?php echo $plan['id']; ?> pb-2">
                            <h2 class="font-notoserif font-size-1_2 font-size-md-1_4 font-size-lg-1_6 font-weight-bold">宮司・斎主の手配</span>
                        </header>
                        <div class="font-size-1 pb-3">
                            資格や身元確認などの審査を行い、信頼できる宮司を手配しております。<br class="d-none d-lg-block">
                            プランに合わせて火葬炉前 / 通夜祭 / 遷霊祭 / 葬場祭 のお務めを依頼頂けます。
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="text-center pr-2">火葬プラン<span class="d-block"><span class="color-dgray font-oswald font-size-1_2 pr-1">80,000</span>円</span></div>
                            <div class="p-2">～</div>
                            <div class="text-center pr-2">家族葬プラン<span class="d-block"><span class="color-dgray font-oswald font-size-1_2 pr-1">200,000</span>円</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php require_once '../../_tmpl/l-footer.php'; ?>
<script>
    $(function() {
        $('[data-changeborder]').click(function() {
            const data = $(this).data('changeborder');
            const target = data.target;
            const addClass = data.bordercolor;
            $(target).removeClass().addClass(addClass);
        });
        $('[data-trigger]').click(function() {
            const target = $(this).data('trigger');
            setTimeout(function() {
                $(target).trigger('click');
            }, 500);
        });
    });
</script>
<?php require_once '../../_tmpl/footer.php'; ?>