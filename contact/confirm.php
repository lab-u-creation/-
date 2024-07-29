<?php
require_once '../_app/http/contact/confirm.php';
appConfigPage::$tmpl = 'form';
appConfigPage::$title = appConfigSite::sitemap['confirm']['title'];
appConfigPage::$css = <<<EOF
<style>
h1,h2,h4{font-size:1.7rem;}
.btn-disabled{opacity:0.25;}
</style>
EOF;
?>

<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<div id="sec1" class="container pt-4 pb-3">
    <div class="pt-5 pb-3">
        <div class="row no-gutters justify-content-center">
            <div class="col-auto position-relative">
                <div class="d-block">
                    <div class="step-number position-relative text-center color-dgray bg-dyellow">
                        <p class="step-number-inner position-absolute font-weight-bold font-size-1_6 font-size-sm-1_8 font-size-lg-2 line-height-1 p-0 m-0 pb-lg-2"><span class="font-size-1_2">STEP</span><br>1</p>
                    </div>
                    <p class="text-center font-weight-bold font-size-lg-1_2 pt-2">情報入力</p>
                </div>
            </div>
            <div class="col-1 position-relative">
                <div class="step-line bg-dyellow"></div>
            </div>
            <div class="col-auto position-relative">
                <div class="d-block">
                    <div class="step-number position-relative text-center color-dgray bg-dyellow">
                        <p class="step-number-inner position-absolute font-weight-bold font-size-1_6 font-size-sm-1_8 font-size-lg-2 line-height-1 p-0 m-0 pb-lg-2"><span class="font-size-1_2">STEP</span><br>2</p>
                    </div>
                    <p class="text-center font-weight-bold font-size-lg-1_2 pt-2">内容確認</p>
                </div>
            </div>
            <div class="col-1 position-relative">
                <div class="step-line bg-dyellow"></div>
            </div>
            <div class="col-auto position-relative">
                <div class="d-block">
                    <div class="step-number position-relative text-center color-dgray bg-lgray">
                        <p class="step-number-inner position-absolute font-weight-bold font-size-1_6 font-size-sm-1_8 font-size-lg-2 line-height-1 p-0 m-0 pb-lg-2"><span class="font-size-1_2">STEP</span><br>3</p>
                    </div>
                    <p class="text-center font-weight-bold font-size-lg-1_2 pt-2">送信完了</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="sec2" class="pb-5">
    <div class="container p-0 pl-lg-3 pr-lg-3 pt-md-4">

        <?php /*分岐1：入力必須項目に未記入あり（/contact/confirmに直接アクセスされた場合を想定）*/ ?>
        <?php if (!isset($_POST['name']) || !isset($_POST['name_kana']) || !isset($_POST['address']) || !isset($_POST['tel']) || !isset($_POST['status'])) : ?>
            <p class="text-center pdb-none">入力必須項目に不備があります。「戻る」ボタンにて修正をお願い致します</p>
            <div class="container">
                <div class="pt-2 pb-2 row align-items-center no-gutters justify-content-center">
                    <button type="button" onClick="history.back()" class="btn bg-lgray-gradient w-300px border text-center p-3 font-size-lg-1_2 text-decoration-none border d-block"><i class="fa fa-chevron-circle-left mr-2 color-orange" aria-hidden="true"></i><span class="color-dgray">入力内容を修正する</span></button>
                </div>
            </div>

        <?php else : ?>

            <?php /*分岐2：入力必須項目を全て記入*/ ?>
            <p class="text-center pdb-none">以下の内容で間違いがなければ、<br class="d-sm-none">「送信する」ボタンを押してください。</p>
            <div class="container">
                <form id="form-confirm" action="<?php echo h($_SERVER['SCRIPT_NAME']); ?>" method="POST" class="pd-middle">
                    <?php
                    /*
                    TIPS:
                    お名前やフリガナのように、入力フォームが複数あるものは　appFuncArray::issetDispArrayToString()を使用します
                    電話番号のように、入力フォームが1つだけのものはappFuncArray::issetDisp()を使用します
                    */
                    ?>
                    <div class="pdb-large">
                        <table class="contact w-100">
                            <tr class="border">
                                <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">お名前</th>
                                <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4"><?php echo appFuncArray::issetDispArrayToString($_POST, 'name', '&nbsp;'); ?></td>
                            </tr>
                            <tr class="border">
                                <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">フリガナ</th>
                                <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4"><?php echo appFuncArray::issetDispArrayToString($_POST, 'name_kana', '&nbsp;'); ?></td>
                            </tr>
                            <tr class="border">
                                <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">ご住所</th>
                                <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">〒<?php echo appHttpContactConfirm::addressDisp($_POST, 'address'); ?></td>
                            </tr>
                            <tr class="border">
                                <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">資料の封筒について</th>
                                <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
                                    <?php if (isset($_POST['secret'])) : ?><?php echo appFuncArray::issetDisp($_POST, 'secret'); ?><?php else : ?>都民のお葬式ロゴ入り封筒<?php endif; ?>
                                </td>
                            </tr>
                            <tr class="border">
                                <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">電話番号</th>
                                <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4"><?php echo appFuncArray::issetDisp($_POST, 'tel'); ?></td>
                            </tr>
                            <tr class="border">
                                <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">現在のご状況</th>
                                <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4"><?php echo appFuncArray::issetDisp($_POST, 'status'); ?></td>
                            </tr>
                            <tr class="border">
                                <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">電話での<br class="d-none d-md-block d-lg-none">無料相談を希望</th>
                                <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
                                    <?php if (isset($_POST['telhope'])) : ?><?php echo $_POST['telhope']; ?><?php else : ?>希望しない<?php endif; ?>
                                </td>
                            </tr>
                            <?php if (isset($_POST['telday'])) : ?>
                                <tr class="border">
                                    <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">希望日程</th>
                                    <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4"><?php echo appFuncArray::issetDisp($_POST, 'telday'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (isset($_POST['teltime'])) : ?>
                                <tr class="border">
                                    <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">希望時間帯</th>
                                    <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4"><?php echo appFuncArray::issetDispArrayToString($_POST, 'teltime', '、'); ?></td>
                                </tr>
                            <?php endif; ?>
                        </table>
                    </div>

                    <input type="hidden" name="name" value="【お名前】<?php echo appFuncArray::issetDispArrayToString($_POST, 'name', ' '); ?>" />
                    <input type="hidden" name="name_kana" value="【フリガナ】<?php echo appFuncArray::issetDispArrayToString($_POST, 'name_kana', ' '); ?>" />
                    <input type="hidden" name="address" value="【ご住所】〒<?php echo appFuncArray::issetDispArrayToString($_POST, 'address', ' '); ?>" />
                    <input type="hidden" name="secret" value="【資料送付について】<?php if (isset($_POST['secret'])) : ?><?php echo appFuncArray::issetDisp($_POST, 'secret'); ?><?php else : ?>都民のお葬式ロゴ入り封筒<?php endif; ?>" />
                    <input type="hidden" name="tel" value="【電話番号】<?php echo appFuncArray::issetDisp($_POST, 'tel'); ?>" />
                    <input type="hidden" name="status" value="【現在のご状況】<?php echo appFuncArray::issetDisp($_POST, 'status'); ?>" />
                    <input type="hidden" name="telhope" value="【電話での無料相談を希望】<?php if (isset($_POST['telhope'])) : ?><?php echo $_POST['telhope']; ?><?php else : ?>希望しない<?php endif; ?>" />
                    <?php if (isset($_POST['telday'])) : ?>
                        <input type="hidden" name="telday" value="【希望日程】<?php echo appFuncArray::issetDisp($_POST, 'telday'); ?>" />
                    <?php endif; ?>
                    <?php if (isset($_POST['teltime'])) : ?>
                        <input type="hidden" name="teltime" value="【希望時間帯】<?php echo appFuncArray::issetDispArrayToString($_POST, 'teltime', '、'); ?>" />
                    <?php endif; ?>
                    <?php echo confirmOutput($_POST); ?>
                    <input type="hidden" name="mail_set" value="confirm_submit">
                    <input type="hidden" name="httpReferer" value="<?php echo h($_SERVER['HTTP_REFERER']); ?>">

                    <div class="container">
                        <div class="pt-4 pb-4 row align-items-center no-gutters justify-content-center">
                            <button id="submit-btn" type="submit" class="btn text-decoration-none w-100 mw-400px m-auto rounded text-center border-0 bg-orange color-white font-weight-bold font-size-1_6 pt-3 pb-3"><span class="color-white">入力内容を送信する</span></button>
                        </div>
                        <div class="pt-2 pb-2 row align-items-center no-gutters justify-content-center">
                            <button type="button" onClick="history.back()" class="btn bg-lgray-gradient w-300px border text-center p-3 font-size-lg-1_2 text-decoration-none border d-block"><i class="fa fa-chevron-circle-left mr-2 color-orange" aria-hidden="true"></i><span class="color-dgray">入力内容を修正する</span></button>
                        </div>
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<script>
    $('#form-confirm').on('click', '#submit-btn', function() {
        $("#submit-btn").attr('readonly', true).addClass('btn-disabled');
    });
</script>
<?php require_once '../_tmpl/footer.php'; ?>