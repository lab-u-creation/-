<?php
/*PlanPriceImage*/
if (!isset($planid)) {
    $planid = 'home';
}
?>
<div class="container p-3" data-animation="parent">
    <div class="row align-items-center">

        <div class="col-12">
            <header class="w-lg-800px mx-auto">
                <?php if ($planid === 'home') : ?>
                    <div class="row no-gutters align-items-end pt-lg-4">
                        <div class="col-3 col-lg-12 pl-2 position-relative">
                            <img src="/assets/img/fig_badge_24hours.png?20221212" alt="公平・安心・24時間お電話対応" class="pic_badge">
                        </div>
                        <div class="col-9 col-lg-12 text-lg-center pl-3 pl-lg-0">
                            <h3 class="pt-2 font-size-1_2 font-size-lg-1_6 font-weight-bold color-dgray line-height-1_4">WEB葬儀サービス大手<br class="d-lg-none">３社とのプラン比較</h3>
                        </div>
                    </div>
                <?php else : ?>
                    <h3 class="pb-1 pt-3 font-size-1_4 font-size-lg-1_6 text-center color-orange font-weight-bold pb-2">WEB葬儀サービス大手３社との<br class="d-lg-none">プラン比較</h3>
                <?php endif; ?>
            </header>

            <?php if ($planid == 'home') : ?>
                <div class="container">
                    <picture>
                        <source media="(min-width:720px)" srcset="/assets/img/plan/fig_pricelist_pc.png?<?php echo appConfigSite::update; ?>">
                        <img src="/assets/img/plan/fig_pricelist.png?<?php echo appConfigSite::update; ?>" alt="図解：葬儀価格の比較" class="w-100per w-lg-900px image-rendering d-block mx-auto d-block">
                    </picture>
                    <p class="d-block w-100per w-lg-900px mx-auto text-right color-dlgray font-size-0_8 pt-2 pb-2">価格は税抜き表記（2023年5月時点当社調べ）</p>
                </div>
            <?php else : ?>
                <div class="pb-2 w-100per w-lg-75per mx-auto">
                    <div class="d-lg-flex w-100 border">
                        <div class="w-lg-25per border">
                            <div class="row no-gutters">
                                <div class="col-5 col-lg-12 pt-2 pt-lg-1 text-center font-weight-bold bg-<?php echo $planid; ?> color-white p-1">都民のお葬式</div>
                                <div class="col-7 col-lg-12 align-middle text-right color-<?php echo $planid; ?>">
                                    <span class="d-block line-height-1 p-2"><span class="font-size-1_4 font-size-lg-2 font-oswald"><?php echo appConfigPlan::plan[$planid]['price']; ?></span><span class="pl-2 font-size-0_8 font-size-lg-1">円</span></span>
                                </div>
                            </div>
                        </div>
                        <?php foreach (appConfigString::otherCompanyPlan as $valueCompany) : ?>
                            <div class="w-lg-25per border">
                                <div class="row no-gutters">
                                    <div class="col-5 col-lg-12 pt-3 pt-lg-1 text-center align-middle font-weight-bold bg-lgray p-1"><?php echo $valueCompany['name']; ?></div>
                                    <div class="col-7 col-lg-12 text-right align-middle p-2 color-dlgray">
                                        <span class="d-block line-height-1"><span class="font-size-1_4 font-oswald">
                                                <?php echo $valueCompany[$planid]; ?></span><span class="pl-2 font-size-0_8 font-size-lg-1">円</span>
                                        </span>
                                        <?php if ($valueCompany[$planid] != $valueCompany[$planid . 'Discount']) : ?>
                                            <p class="font-size-0_6 font-size-lg-0_8 line-height-1_2 m-0 pt-2">※割引条件が必要：<?php echo $valueCompany[$planid . 'Discount']; ?>円</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <p class="text-right color-dlgray font-size-0_8 pt-2">※C社：事前相談・資料請求をしないと割引無し／※Y社・I社：資料請求・その他条件を適用で割引<br>価格は税抜き表記（2023年5月時点当社調べ）</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>