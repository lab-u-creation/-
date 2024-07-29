<div class="col-4 p-1">
    <div class="rounded overflow-hidden">
        <div class="row no-gutters bg-white align-items-center">
            <div class="col-4 pr-2">
                <img src="/assets/img/plan/option/thum_<?php echo $id; ?>.png" class="bg-lgray thum-option">
            </div>
            <div class="col-8">
                <header class="font-size-0_8">
                    <?php echo $name; ?>
                    <?php if ($id === appConfigPlan::option['car_shindai']['id']) : ?>
                        <span class="pl-2">※1</span>
                    <?php endif; ?>
                    <?php if ($id === appConfigPlan::option['enshrined_stay']['id']) : ?>
                        <span class="pl-2">※2</span>
                    <?php endif; ?>
                </header>
                <div class="font-size-small line-height-1_2">
                    <?php if ($id != appConfigPlan::option['car_shindai']['id'] && $id != appConfigPlan::option['flower_altar']['id']) : ?>
                        <?php echo $addComment; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>