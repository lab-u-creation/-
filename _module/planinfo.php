<?php
/*PlanPriceImage*/
if (!isset($planid)) {
    $planid = 'home';
}
?>
<div class="container" data-animation="parent">
    <div class="row align-items-center pt-md-4 pb-md-4 p-lg-5">
        <div class="col-12 col-md-7 p-0">
            <header class="pb-5 pb-md-0">
                <?php if ($planid === 'home') : ?>
                    <h3 class="color-dgray font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center text-lg-left font-weight-bold mb-3"><span class="color-orange">業界最安クラス</span>の<br class="d-375-none">プラン料金</h3>
                <?php else : ?>
                    <h2 class="color-dgray font-size-1_4 font-size-md-1_6 font-size-lg-2 text-center text-lg-left font-weight-bold mb-3"><span class="color-orange">業界最安クラス</span>のプラン料金</h2>
                <?php endif; ?>
                <p class="line-height-1_7 m-0">葬儀に本当に必要な物品・サービスを厳選することにより、<br class="d-none d-xl-block">業界最安クラスの葬儀価格を実現いたしました。</p>
                <p class="line-height-1_7">また、常に競合他社の価格をチェックし、最安値に取り組んでいます。</p>
                <p class="font-size-0_8 m-0">※経済産業省 2022年7月分確報「特定サービス産業動態統計調査」<br class="d-none d-sm-block d-md-none">（2021年より集計）</p>
            </header>
        </div>
        <div class="col-12 col-sm-8 col-md-5 col-lg-4 p-0 pl-md-4 m-auto">
            <?php if ($planid == 'home') : ?>
                <div class="pb-3 pb-lg-0 text-center">
                    <div class="bg-white">
                        <img src="/assets/img/plan/fig_illustrated_<?php echo $planid; ?>.png?<?php echo appConfigSite::update; ?>" alt="全国平均112.5万円：<?php echo appConfigPlan::plan['plan1']['name']; ?>なら<?php echo appFuncString::omitInt(appConfigPlan::plan['plan1']['price']); ?>万円" class="w-100per w-md-100per bg-white image-rendering">
                    </div>
                </div>
            <?php else : ?>
                <div class="pb-3 pb-lg-0 text-center">
                    <div class="bg-white">
                        <img src="/assets/img/plan/fig_illustrated_<?php echo $planid; ?>.png?<?php echo appConfigSite::update; ?>" alt="全国平均112.5万円：<?php echo appConfigPlan::plan[$planid]['name']; ?>なら<?php echo appFuncString::omitInt(appConfigPlan::plan[$planid]['price']); ?>万円" class="w-100per bg-white image-rendering">
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>
