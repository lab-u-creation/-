<?php
require_once '../../_app/http/saijo/search/index.php';
if (appHttpSaijoSearchIndex::$getWord == null) {
    appConfigPage::$title = 'キーワード検索';
} else {
    appConfigPage::$title = 'キーワード「' . appHttpSaijoSearchIndex::$getWord . '」検索結果';
}
?>

<?php require_once '../../_tmpl/header.php'; ?>
<?php require_once '../../_tmpl/l-header.php'; ?>

<?php if (appHttpSaijoSearchIndex::$getWord == null) : ?>
    <?php appFuncDisp::h1(appConfigPage::$title, '郵便番号・住所・式場名などキーワードで検索いただけます'); ?>
<?php else : ?>
    <?php appFuncDisp::h1(appConfigPage::$title, appHttpSaijoSearchIndex::$resultsCount . '&nbsp;件の式場が見つかりました'); ?>
<?php endif; ?>

<?php if (appHttpSaijoSearchIndex::$resultsCount > 0) : ?>
    <div class="container pt-3">
        <div class="">
            <?php
            appFuncDisp_saijo::indexPage(
                appHttpSaijoSearchIndex::$results,
                '../../_module/saijo_list.php'
            );
            ?>
        </div>
        <div class="pt-3 pb-4">
            <?php
            appFuncPager::disp(
                'query',
                '/saijo/search/?word=' . appHttpSaijoSearchIndex::$getWord . '&page=',
                appHttpSaijoSearchIndex::$pageNum,
                appHttpSaijoSearchIndex::$resultsCount,
                appHttpSaijoSearchIndex::$pageDisp
            );
            ?>
        </div>
    </div>
<?php endif; ?>

<aside id="searchform" class="bg-base">
    <div class="container pt-4 pb-5">
        <?php
        $formValue = appHttpSaijoSearchIndex::$getWord;
        include_once '../../_module/saijo_search.php';
        ?>
    </div>
</aside>

<?php require_once '../../_tmpl/l-footer.php'; ?>
<?php require_once '../../_tmpl/footer.php'; ?>