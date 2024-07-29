<style>
@media (min-width:576px) {
  .font-size-sm-1 {
    font-size: 1rem;
  }
}
@media (min-width:992px) {
.font-size-lg-1_4{
  font-size: 1.4rem;
}
}
</style>
<?php
if (!isset($formValue)) {
    $formValue = "";
}
?>
<div class="w-100per w-lg-600px mx-auto">
    <p class="text-center font-size-0_8 font-size-sm-1 font-size-lg-1_4">地域名・駅名や式場名をご入力ください</p>
    <form method="get" action="/saijo/search/">
        <div class="input-group mb-2">
            <input type="text" name="word" value="<?php echo $formValue; ?>" placeholder="（例）東京都港区" class="form-control form-control-lg rounded-left">
            <div class="input-group-prepend">
                <button class="btn btn-lg border bg-contrast rounded-right pl-4 pr-4"><span class="color-black"><i class="fa fa-search mr-2" aria-hidden="true"></i>検索</span></button>
            </div>
        </div>
    </form>
</div>
