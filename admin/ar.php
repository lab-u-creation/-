<?php
include_once '../_app/base.php';
appConfigPage::$title = "プランページ作成補助ツール";
?>
<?php include_once '../_tmpl/header.php'; ?>
<?php include_once '../_tmpl/l-header.php'; ?>

<?php appFuncDisp::h1(appConfigPage::$title,); ?>
<div class="container">
    <form method="get">
        <?php
        foreach (appConfigPlan::option as $key => $value) {
            echo '<label><input type="checkbox" name="option[]" value="' . $value['id'] . '">' . $value['name'] . '／'.$value['summary'].'</label><br>';
        }
        ?>
        <button>生成</button>
    </form>
</div>
<?php include_once '../_tmpl/l-footer.php'; ?>
<?php include_once '../_tmpl/footer.php'; ?>