<div class="p-20mm">
    <header id="plan-title" class="pb-3">
        <div class="pt-3 pb-4 color-white rounded-1 bg-<?php echo $planid; ?>">
            <p class="pb-2 text-center m-0"><?php echo appConfigPlan::plan[$planid]['overview']; ?></p>
            <h1 class="font-notoserif font-size-3 p-0 m-0 text-center">
                <?php echo appConfigPlan::plan[$planid]['name']; ?>
            </h1>
        </div>
    </header>
    <div class="row align-items-center border-gray no-gutters">
        <div class="col-7">
            <img src="/assets/img/plan/<?php echo appConfigPlan::plan[$planid]['id']; ?>.png" alt="イメージ画像" class="w-100">
        </div>
        <div class="col-5">
            <div class="p-4">
                <div class="w-100per mx-auto border-orange color-orange rounded-pill p-1 text-center font-weight-bold">
                    明朗会計プラン
                </div>
                <div class="pt-3 text-center">
                    <span class="color-<?php echo $planid; ?> font-size-3 font-oswald line-height-1"><?php echo appConfigPlan::plan[$planid]['price']; ?></span>
                    <span class="color-<?php echo $planid; ?> font-size-2 font-weight-bold pl-2 pb-1">円</span>
                </div>
                <div class="font-size-1 text-center pb-1">
                    （税込：<span class="font-oswald d-inline-block mr-2"><?php echo appConfigPlan::plan[$planid]['priceZei']; ?></span>円）
                </div>
            </div>
            <div class="text-center pb-2 pt-2 border-top">
                <i class="fa fa-user pr-2 color-gray" aria-hidden="true"></i>参列者数目安：<?php echo appConfigPlan::plan[$planid]['numberPeople']; ?>
            </div>
        </div>
    </div>
    <section class="pt-3 pb-3">
        <header>
            <h2 class="font-size-1_2 font-weight-bold pt-2 pb-2 m-0 text-center line-height-1_4 color-<?php echo $planid; ?>">
                <?php echo appConfigPlan::plan[$planid]['description']; ?>
            </h2>
        </header>
        <div class="text-center pb-3">
            <?php if ($planid == appConfigPlan::plan['plan1']['id']) : ?>
                面会も省略し、葬儀にかかる費用を<br class="d-block">最小限に抑えることができます
            <?php elseif ($planid == appConfigPlan::plan['plan2']['id']) : ?>
                ご家族やご親族の準備の負担が少なく<br class="d-block">葬儀にかかる費用も抑えることができます
            <?php elseif ($planid == appConfigPlan::plan['plan3']['id']) : ?>
                ご高齢の方や遠方からの参列者の負担を減らしつつ、<br class="d-block">最後のお別れはしっかりとしていただけます
            <?php elseif ($planid == appConfigPlan::plan['plan4']['id']) : ?>
                ご家族や親しい方々と、<br class="d-block">お別れの時間をゆっくりお過ごしいただけます
            <?php elseif ($planid == appConfigPlan::plan['plan5']['id']) : ?>
                故人とご縁のあった方たちを幅広く招いて、花一杯の祭壇で<br>お見送りをするために必要な物品・サービスが含まれています
            <?php endif; ?>
        </div>
    </section>
    <section>
        <h2 class="font-size-1_2 pt-2 pb-3 m-0 font-weight-bold text-center line-height-1_4 color-<?php echo $planid; ?>">
            <i class="fa fa-check-circle pr-2" aria-hidden="true"></i></span><?php echo appConfigPlan::plan[$planid]['name']; ?>はこのような方に選ばれています
        </h2>
        <div class="row font-size-0_8 no-gutters">
            <?php include_once '../plan/_module/feature.php'; ?>
        </div>
    </section>
    <aside class="p-20mm position-left_bottom">
        <h2 class="font-size-1_2 font-weight-bold pt-2 pb-3 m-0 text-center line-height-1_4 color-<?php echo $planid; ?>">
            <?php echo appConfigPlan::plan[$planid]['name']; ?>の流れ
        </h2>
        <?php include_once './_module/flow.php'; ?>
    </aside>
</div>