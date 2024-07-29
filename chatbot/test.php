<?php
require_once '../_app/base.php';
appConfigPage::$title = "【公式】" . appConfigSite::siteName . '｜地域密着の葬儀手配サービス';
appConfigPage::$css = '<style>body{background:#eee;}</style>';
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<div class="l-header-spacer"></div>

<div class="container">
    <h1 class="pt-5 pb-3">LAB.U CHATBOT／prototype:ZERO</h1>
    <div class="pb-5">
        <div id="chatbot" class="pb-3">
        </div>
        <div id="chatbot-loading">
            <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(function() {
        //関数：AJAXデータを読み込む
        let dispArea = '#chatbot';
        let loadingArea = '#chatbot-loading';
        let loadstatus = false;

        const ajaxDataLoad = function(url, params = "") {
            return $.ajax({
                type: "GET",
                url: url + params,
                dataType: "html",
                cache: false
            });
        }

        const chatbotLoad = function(ajaxUrl, ajaxParm, time) {
            return setTimeout(function() {
                ajaxDataLoad(ajaxUrl, ajaxParm).done(function(data) {
                    $(dispArea).append(data).addClass('is-active');
                    $(loadingArea).removeClass('is-active');
                    let elm = document.documentElement;
                    let bottom = elm.scrollHeight - elm.clientHeight;
                    window.scroll(0, bottom);
                }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
                    $(dispArea).append(errorMsg);
                });
            }, time);
        }

        $(dispArea).on('click', '[data-select]', function() {
            let dispId = $(this).data('select');
            let ajaxUrl = './';
            let ajaxParm = '?id=' + dispId;
            $(dispArea).removeClass('is-active');
            $(loadingArea).addClass('is-active');
            return chatbotLoad(ajaxUrl, ajaxParm, 250);
        });

        chatbotLoad('./', '?id=p', 500);
    });
</script>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>