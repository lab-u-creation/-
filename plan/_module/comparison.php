<div class="col-6 col-lg-4 p-1 p-lg-2 <?php if ($tmplOption === 'sp-nodisp') echo 'd-none d-lg-block'; ?>">
    <div class="rounded-1 overflow-hidden border<?php if ($tmplOption === 'current') echo '-' . $planid; ?>">
        <header class="p-3 text-center <?php echo $bgColor; ?>">
            <div class="d-none d-lg-block <?php echo $fontColor; ?>"><?php echo appConfigPlan::plan[$planid]['overview']; ?></div>
            <?php if ($tmplOption === 'current') : ?>
                <h2 class="font-notoserif font-size-1 font-size-lg-2 <?php echo $fontColor; ?>">
                    <?php echo appConfigPlan::plan[$planid]['name']; ?>
                </h2>
            <?php else : ?>
                <h2 class="font-notoserif font-size-1 font-size-lg-2 color-<?php echo $planid; ?>">
                    <?php echo appConfigPlan::plan[$planid]['name']; ?>
                </h2>
            <?php endif; ?>
        </header>
        <div>
            <img src="/assets/img/plan/<?php echo appConfigPlan::plan[$planid]['id']; ?>.png" alt="イメージ画像" class="w-100 mx-auto">
        </div>
        <h3 class="text-center <?php echo $fontColor; ?> <?php echo $bgColor; ?> pt-2 pb-2 font-size-1 font-size-lg-1_4">葬儀内容</h3>
        <p class="text-center font-size-lg-1_4">
            <?php if (appConfigPlan::plan[$planid]['flowSougi'] === 1) : ?>
                火葬のみ
            <?php elseif (appConfigPlan::plan[$planid]['flowSougi'] === 2) : ?>
                告別式/火葬
            <?php elseif (appConfigPlan::plan[$planid]['flowSougi'] === 3) : ?>
                通夜/告別式/火葬
            <?php endif; ?>
        </p>
        <h3 class="text-center <?php echo $fontColor; ?> <?php echo $bgColor; ?> pt-2 pb-2 font-size-1 font-size-lg-1_4">日数</h3>
        <p class="text-center font-size-lg-1_4">
            <?php if (appConfigPlan::plan[$planid]['flowSougi'] === 1) : ?>
                1日間
            <?php elseif (appConfigPlan::plan[$planid]['flowSougi'] === 2) : ?>
                1日間
            <?php elseif (appConfigPlan::plan[$planid]['flowSougi'] === 3) : ?>
                2日間
            <?php endif; ?>
        </p>
        <h3 class="text-center <?php echo $fontColor; ?> <?php echo $bgColor; ?> pt-2 pb-2 font-size-1 font-size-lg-1_4">人数</h3>
        <p class="text-center font-size-lg-1_4">
            <?php echo appConfigPlan::plan[$planid]['numberPeople']; ?>
        </p>
        <h3 class="text-center <?php echo $fontColor; ?> <?php echo $bgColor; ?> pt-2 pb-2 font-size-1 font-size-lg-1_4">ご安置</h3>
        <div class="pt-2 pb-4 mh-140px">
            <ul>
                <?php foreach (appConfigPlan::plan[$planid]['enshrined'] as $value) : ?>
                    <li><?php echo appConfigPlan::enshrined[$value]['name']; ?></li>
                <?php endforeach; ?>
            </ul>
            <div class="pl-3"><?php echo appConfigPlan::plan[$planid]['visitText']; ?></div>
        </div>
        <?php
        /*
        <h3 class="text-center <?php echo $fontColor; ?> <?php echo $bgColor; ?> pt-2 pb-2 font-size-1 font-size-lg-1_4">仏具</h3>
        <div class="pt-2 pb-4 mh-300px">
            <ul>
                <?php foreach (appConfigPlan::plan[$planid]['option'] as $value) : ?>
                    <?php if (appConfigPlan::option[$value]['category'] == appConfigPlan::optionCategory['funeralItem']) : ?>
                        <li><?php echo appConfigPlan::option[$value]['name']; ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        */
        ?>
    </div>
</div>