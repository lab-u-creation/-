<div class="p-20mm">
    <header class="text-center pb-2">
        <h2 class="font-size-1_6 font-weight-bold pt-2 pb-1 m-0 text-center line-height-1_4 color-<?php echo $planid; ?>">
            「<?php echo appConfigPlan::plan[$planid]['name']; ?>」に含まれるもの
        </h2>
        <p class="m-0 p-0 font-size-0_9">都民のお葬式では、お葬式に必要なものを明朗会計セットプランでご提供しています</p>
    </header>
    <div>
        <div class="row no-gutters">
            <?php appFuncDisp_plan::option(appConfigPlan::plan[$planid], appConfigPlan::option, './_module/planoption.php'); ?>
        </div>
        <div class="pt-1 pb-3 font-size-0_8">
            <span class="pr-1">※1：</span>
            <span class="pr-4"><?php echo str_replace('<br>', '', appConfigPlan::plan[$planid]['optionAddComment']['car_shindai']); ?></span>
            <?php if (in_array('enshrined_stay', appConfigPlan::plan[$planid]['option'])) : ?>
                <span class="pr-1">※2：</span>
                <span><?php echo str_replace('<br>', '', appConfigPlan::option['enshrined_stay']['summary']); ?></span>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($planid === 'plan1') : ?>
        <div class="pt-4">
            <header class="pb-3">
                <h2 class="font-size-1_6 font-weight-bold pt-2 pb-1 m-0 text-center line-height-1_4 color-<?php echo $planid; ?>">
                    「<?php echo appConfigPlan::plan[$planid]['name']; ?>」で出来ないこと
                </h2>
            </header>
            <div class="bg-white mb-3 border-<?php echo $planid; ?>"><span class="d-inline-block bg-<?php echo $planid; ?> p-2 color-white">！</span><span class="d-inline-block p-2">ご自宅安置、ご面会はできません</span></div>
            <div class="bg-white border-<?php echo $planid; ?>"><span class="d-inline-block bg-<?php echo $planid; ?> p-2 color-white">！</span><span class="d-inline-block p-2">宗教者（お坊さん）を呼ばない火葬のみのプランです</span></div>
        </div>
    <?php endif; ?>
</div>

<aside class="position-right_bottom p-20mm w-100">
    <header class="text-center pb-3">
        <h2 class="font-size-1_6 font-weight-bold pt-2 pb-1 m-0 text-center line-height-1_4 color-<?php echo $planid; ?>">
            追加できるサービスのご案内
        </h2>
        <p class="m-0 p-0 font-size-0_8">
            お客様のご予算・ご要望に合わせて、様々なサービスをご用意いたします<br>
            詳しくはスタッフまでお問い合わせください
        </p>
    </header>
    <div class="row no-gutters">
        <?php if (appConfigPlan::plan[$planid]['optionObousan'] != '') : ?>
            <div class="col-4 p-1">
                <div class="rounded overflow-hidden">
                    <div class="row no-gutters bg-white align-items-center">
                        <div class="col-4 pr-2">
                            <img src="/assets/img/plan/option/thum_obousan.png" class="bg-lgray thum-option">
                        </div>
                        <div class="col-8">
                            <header class="font-size-0_8">
                                寺院・お坊様の手配 </header>
                            <div class="font-size-small line-height-1_2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php appFuncDisp_plan::addOptionPrint(appConfigPlan::plan[$planid], appConfigPlan::addOption, './_module/planoption.php'); ?>
    </div>
    <div class="text-right p-1">・・・等</div>
</aside>