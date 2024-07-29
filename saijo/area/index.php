<?php
require_once '../../_app/http/saijo/area/index.php';
appConfigPage::$title = appHttpSaijoIndex::$areaCityName . 'の式場';
appConfigPage::$description = appHttpSaijoIndex::$areaCityName . "の方々に向けた、葬儀プラン・葬儀式場をご案内いたします";
appConfigPage::$canonical = appConfigSite::baseurl . appConfigSite::sitemap['saijoArea']['path'] . '/' . appHttpSaijoIndex::$areaName . appHttpSaijoIndex::$cityName;
appConfigPage::$css ='<style>.bg-keyvisual{background-image:url("/assets/img/saijo/keyvisual_' .appHttpSaijoIndex::$imgId . '.jpg?20220331");background-color:#eee;background-repeat:no-repeat;background-size:cover;background-position:bottom right;}</style>';
$area = appHttpSaijoIndex::$areaName;
$city = appHttpSaijoIndex::$cityName;
appConfigPage::$js = <<<EOF
<script>
    $.ajax({
        type: "GET",
        url: "/saijo/getwaittime",
        data: "area={$area}&city={$city}",
        dataType: "json",
        success: function(data) {
            data_stringify = JSON.stringify(data);
            data_json = JSON.parse(data_stringify);
            $('[data-waittime]').text(data_json["time"]);
        }
    });
</script>
EOF;
?>

<?php require_once '../../_tmpl/header.php'; ?>
<?php require_once '../../_tmpl/l-header.php'; ?>

<header class="bg-keyvisual position-relative mh-400px" data-keyvisual>
    <div class="keyvisual-main">
        <div class="container pt-4 pb-4" data-animation="parent">
            <div class="w-100per w-lg-800px mx-auto trans trans-bottom_small trans-duration-slow" data-animation="child">
                <div class="bg-white-08 p-3 rounded-1 overflow-hidden">
                    <h1 class="pt-2 font-size-2 font-size-lg-3 font-notoserif pb-2 text-center">
                        <?php echo appHttpSaijoIndex::$cityName; ?>民のお葬式
                    </h1>
                    <p class="font-size-lg-1_2 pb-2">
                        <span class="color-pink pr-2"><?php echo appHttpSaijoIndex::$areaName; ?><?php echo appHttpSaijoIndex::$cityName; ?></span>のお葬式なら「<?php echo appConfigSite::siteName; ?>」におまかせください。お客様の状況やご要望を丁寧に伺い、最適なお葬式を提案いたします。
                    </p>
                    <div class="bg-white border border-secondary w-100per">
                        <header class="text-lg-center font-size-lg-1_4 p-2 bg-lgray">
                            <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>ただいまのお時間
                        </header>
                        <div class="row no-gutters position-relative align-item-end">
                            <div class="col-8 col-lg-12 text-lg-center p-3">
                                <div class="pb-2">
                                    <span class="color-pink line-height-1 font-size-2 font-size-lg-3 font-weight-bold">最短<span class="pl-2 pr-2" data-waittime></span>分</span><span class="font-size-lg-2 ml-2">で</span>
                                </div>
                                ご指定の場所に<br class="d-md-none">寝台車でお伺い致します
                            </div>
                            <div class="col-4 col-lg-12 text-center">
                                <img src="/assets/img/spacer.png" data-echo="/assets/img/pic_staff_left.png" alt="スタッフ画像" class="position-lg-left_bottom w-100per w-lg-160px pl-3 d-none d-lg-block">
                                <img src="/assets/img/spacer.png" data-echo="/assets/img/pic_staff_right.png" alt="スタッフ画像" class="position-right_bottom w-100per w-md-75per w-lg-160px pl-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="keyvisual-cover bg-lgray"></div>
</header>

<div class="pt-4">
    <?php if (appHttpSaijoIndex::$pageNum <= 1) : ?>
        <?php appFuncDisp::cta(); ?>
    <?php endif; ?>
</div>

<section>
    <header class="pb-2 pt-4">
        <div class="sideborder sideborder-top50 text-center font-weight-bold">
            <h2 class="w-100 font-weight-bold color-dgray">
                <span class="font-size-1 font-size-lg-2 pb-2"><?php echo appHttpSaijoIndex::$areaName; ?><?php echo appHttpSaijoIndex::$cityName; ?>と周辺の</span>
                <span class="font-size-2 font-size-lg-3">葬儀式場</span>
            </h2>
        </div>
    </header>
    <p class="text-center"><?php echo appHttpSaijoIndex::$searchResultsCount; ?>&nbsp;件の式場を選択いただけます</p>
    <?php if (appHttpSaijoIndex::$searchResultsCount > 0) : ?>
        <div class="container pt-3">
            <div class="">
                <?php
                appFuncDisp_saijo::indexPage(
                    appHttpSaijoIndex::$results,
                    '../../_module/saijo_list.php'
                );
                ?>
            </div>
            <div class="pt-3">
                <?php
                appFuncPager::disp(
                    'path',
                    '/saijo/area/' . appHttpSaijoIndex::$areaCityName . '/',
                    appHttpSaijoIndex::$pageNum,
                    appHttpSaijoIndex::$searchResultsCount,
                    appHttpSaijoIndex::$pageDisp
                );
                ?>
            </div>
        </div>
    <?php else : ?>
        <p class="text-center"><?php echo appHttpSaijoIndex::$areaName; ?>に式場はありませんでした</p>
    <?php endif; ?>
</section>


<section id="plan" class="pb-5 pt-4">
    <?php appFuncDisp::h2('都民限定特別プラン'); ?>
    <?php include '../../plan/_module/list.php'; ?>
</section>


<?php require_once '../../_tmpl/l-footer.php'; ?>
<?php require_once '../../_tmpl/footer.php'; ?>