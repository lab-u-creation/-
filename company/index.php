<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
require_once '../_app/func/disp_voice.php';
require_once '../voice/_database/postdata.php';
appConfigPage::$title = "運営情報";
appConfigPage::$meta = '<meta name="robots" content="noindex">' . "\n";
appConfigPage::$css = <<<EOF
<link href="/assets/slick/slick.css" rel="stylesheet" />
<link href="/assets/slick/slick-theme.css" rel="stylesheet" />
<style>
.btn-hurry{margin-top:-20px;z-index:310;position:relative;}
.keyvisual-bg{background:#f2efa1;}
.bg-yellow{background: #ffff9e;}
.bg-yellow2{background: #fefecf;}
.w-medal{width:70px;}
.slick-prev{left:20px;}
.slick-next{right:20px;}
.slick-prev,.slick-next{z-index:300;background:#fdf49c!important;width:50px;height:50px;border-radius:50rem;}
.slick-prev:hover,.slick-next:hover{background:#fdf49c!important;}
.slick-prev:before{
    font-family:FontAwesome;
    content:"\\f104";
    font-size:30px;
    margin-right:.25rem;
    color:#000;
}
.slick-next:before{
    font-family:FontAwesome;
    content:"\\f105";
    font-size:30px;
    margin-left:.25rem;
    color:#000;
}
@media (min-width:992px) {
    .bg-lg-base{background: #fefecf;}
    .bg-lg-yellowborder{width:100%;height:100%;background:#ffff9e;position:absolute;left:-20%;bottom:0;z-index:50;border-radius:0 50rem 50rem 0;}
    .w-lg-500px{width:500px;}
    .h-lg-480px{height:480px;}
    .w-medal{width:96px;}
}
@media (min-width:1200px) {
    .pr-xl-220px{padding-right:220px;}
}
</style>
EOF;
appConfigPage::$js = <<<EOF
<script src="/assets/slick/slick.min.js"></script>
<script>
    $(function() {
        const target = "#keyvisual";
        $(target).imagesLoaded(function() {
            $(target).find('[data-keyvisual-img]').addClass('is-trans-active');
        });
        $(window).resize(function() {
            $(target).find('[data-keyvisual-img]').removeClass('trans-wait-12 trans-wait-9 trans-wait-5');
        });
        $('#columnlist').slick({
            arrow:true,
            dots: true,
            centerMode: true,
            slidesToShow: 1,
            infinite: true,
            variableWidth: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    centerPadding: '40px'
                }
            }]
        });
    });
</script>
EOF;
$title = "運営情報"
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<?php appFuncDisp::h1($title); ?>

<section class="container pb-4">
    <header class="pb-3">
        <h2 class="text-center font-size-1_2 font-size-lg-1_4"><?php echo appConfigSite::siteName; ?>&reg;<span class="d-block d-lg-inline pl-lg-2"></span></h2>
    </header>
    <table class="table table-bordered">
        <colgroup>
            <col class="w-30per">
        </colgroup>
        <tbody>
            <tr>
                <th class="bg-lgray">サービス名</th>
                <td class="align-middle"><?php echo appConfigSite::siteName; ?>&reg;</td>
            </tr>
            <tr>
                <th class="bg-lgray">カスタマー<br class="d-lg-none">サポート<br class="d-lg-none"><span class="font-size-0_8 font-size-lg-1">（顧客窓口）</span></th>
                <td class="align-middle">
                    <?php echo appConfigSite::siteName; ?>&reg;　コールセンター<br>
                </td>
            </tr>
            <tr>
                <th class="bg-lgray">顧客対応<br class="d-lg-none">連絡先</th>
                <td class="align-middle"><?php echo appConfigSite::tel; ?></td>
            </tr>
            <tr>
                <th class="bg-lgray">法人対応<br class="d-lg-none">窓口</th>
                <td class="align-middle"><?php echo appConfigSite::siteName; ?>&reg;　運営事務局</td>
            </tr>
            <tr>
                <th class="bg-lgray">法人対応<br class="d-lg-none">連絡先</th>
                <td class="align-middle">0120-959-218</td>
            </tr>
            <tr>
                <th class="bg-lgray">サービス<br class="d-lg-none">概要</th>
                <td class="align-middle">
                    <ul class="mb-0 pl-4">
                        <li>安心して利用できる葬儀の普及に関する活動</li>
                        <li>地域に根差した明朗会計で高クオリティなお葬式手配</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th class="bg-lgray">サービス<br class="d-lg-none">提供元</th>
                <td class="align-middle">
                    株式会社LAB.U（東京都渋谷区）
                </td>
            </tr>
        </tbody>
    </table>

    <div class="pt-2">
        <div class="border pointer-events-none">
            <img src="/assets/img/company/fig_warning.png" alt="警告文" class="w-100per w-lg-auto d-block mx-auto">
        </div>
    </div>

</section>

<section class="pb-4 color-dgray bg-lbase pt-5">
    <div class="container">
        <header class="sideborder sideborder-top50 pb-3 text-center">
            <h2 class="m-0 pb-2 line-height-1_4 font-weight-bold">
                <span class="font-size-1 font-size-lg-1_4 d-block">お客様の生活を支える</span>
                <span class="font-size-1_2 font-size-lg-2 d-block"><?php echo appConfigSite::siteName; ?><br class="d-lg-none">カスタマーサポートセンターの目指す姿</span>
            </h2>
        </header>
        <div class="font-size-1 font-size-lg-1_2 pb-3 text-center line-height-2">
            <p class="m-0">
                常にお客様の支えとなるよう、<br class="d-lg-none">真心を込めて対応し<br>誠実で安心してご利用頂ける相談窓口を目指し<br><?php echo appConfigSite::siteName; ?><br class="d-lg-none">を運営しております。
            </p>
        </div>
    </div>
</section>

<section id="sec-plan" class="pt-5 pb-5">
    <?php require_once '../plan/_module/list.php'; ?>
</section>

<section id="sec-voice" class="overflow-hidden">
    <div class="pb-5 position-relative">
        <?php appFuncDisp::h2(appConfigSite::sitemap['voice']['title'], ''); ?>
        <div id="columnlist">
            <?php appFuncDisp_voice::list(voiceDatabasePostData::data, '../voice/_module/list.php', 4); ?>
        </div>
        <div class="pt-4 container">
            <a href="<?php echo appConfigSite::sitemap['voice']['path']; ?>" class="border p-3 mx-auto rounded-lg w-100per w-lg-400px text-center text-decoration-none d-block overflow-hidden">
                <span class="pr-2 d-inline-block color-orange">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </span>
                <span class="color-dgray border border-white font-weight-bold rounded-lg"><?php echo appConfigSite::sitemap['voice']['title']; ?>をもっと見る</span>
            </a>
        </div>
    </div>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>