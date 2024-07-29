<?php
include_once '../_app/base.php';
appConfigPage::$title = "プランページ作成補助ツール";
?>
<?php include_once '../_tmpl/header.php'; ?>
<?php include_once '../_tmpl/l-header.php'; ?>

<?php appFuncDisp::h1(appConfigPage::$title,); ?>
<div class="container">
    <form method="get">
        <table class="table w-100">
            <?php
            foreach (appConfigPlan::option as $key => $value) {
                echo '<tr><td class="w-10per"><img src="/assets/img/plan/option/thum_' . $value['id'] . '.png" class="w-100"></td><td><label><input type="checkbox" name="option[]" value="' . $value['id'] . '">' . $value['name']  . '/' . $value['summary'] . '</label></td></tr>';
            }
            ?>
            <tr><th colspan="2" class="bg-lgray">追加オプション</th></tr>
            <?php
            foreach (appConfigPlan::addOption as $key => $value) {
                echo '<tr><td class="w-10per"><img src="/assets/img/plan/option/thum_' . $value['id'] . '.png" class="w-100"></td><td><label><input type="checkbox" name="option[]" value="' . $value['id'] . '">' . $value['name']  . '/' . $value['summary'] . '</label></td></tr>';
            }
            ?>
        </table>
        <button>生成</button>
    </form>
    <hr>
    <?php
    if (isset($_GET["option"])) {
        foreach ($_GET["option"] as $value) {
            echo "'" . $value . "',";
        }
    }
    ?>
</div>
<?php include_once '../_tmpl/l-footer.php'; ?>
<?php include_once '../_tmpl/footer.php'; ?>