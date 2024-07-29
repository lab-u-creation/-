<?php if ($planid == appConfigPlan::plan['plan1']['id']) : ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_money.png', '費用を最小限に抑えたい<br>　', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_sanretsu.png', 'ご近親者のいらっしゃらない方<br>などが選ばれます', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_kasou.png', '通夜や告別式は省き<br>火葬のみ行いたい', './_module/info.php'); ?>
<?php elseif ($planid == appConfigPlan::plan['plan2']['id']) : ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_money.png', '葬儀にかかる費用を<br>できるだけ抑えたい', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_nayamu.png', '葬儀の準備にかかる<br>負担を減らしたい', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_obousan.png', '火葬前にお坊さんに<br>供養してもらいたい', './_module/info.php'); ?>
<?php elseif ($planid == appConfigPlan::plan['plan3']['id']) : ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_nayamu.png', '通夜式は不要だが<br>火葬のみではしのびない', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_sanretsu.png', '参列者の体力的な<br>負担を減らしたい', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_family.png', '親しい人とゆっくり<br>お見送りをしたい', './_module/info.php'); ?>
<?php elseif ($planid == appConfigPlan::plan['plan4']['id']) : ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_money.png', '一般的な葬儀を<br>費用を抑えて行いたい', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_family.png', '家族や親族、親しい友人たちと<br>ゆっくり故人を偲びたい', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_ongaku.png', '故人の遺志を尊重した、形式に<br>こだわらない葬儀を行いたい', './_module/info.php'); ?>
<?php elseif ($planid == appConfigPlan::plan['plan5']['id']) : ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_sanretsu.png', '家族葬よりも<br>多くの参列者を招きたい', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_saidan.png', '従来の慣例や習慣を大切にした<br>しっかりとした葬儀を行いたい', './_module/info.php'); ?>
    <?php appFuncDisp_plan::infoCol('/assets/img/plan/pic_flower.png', '故人を花一杯の祭壇で<br>華やかにお見送りしたい', './_module/info.php'); ?>
<?php endif; ?>
