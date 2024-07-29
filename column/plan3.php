<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnplan::column['plan3']['name'];
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<?php appFuncDisp::h1(appConfigSite::sitemap['columnplan']['title']); ?>

<div class="container p-0">
    <div class="row no-gutters">
        <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

          <div class="border-top pt-4 pb-5">

            <div class="text-left p-1 pl-lg-0 font-size-2 font-size-lg-3 font-weight-bold mb-4">
              <span class="color-plan5">一日葬</span>
            </div>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">身内だけで告別式のみ行いたい</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  コロナ禍以降、最もお問い合わせが増えているプランがこの「都民の一日葬」です。<br>
                  「身内だけできちんとしたお葬式を行いたい。身内だけなのでお通夜までは必要ない」と仰る方が多いように思います。<br>
                  「<a href="/column/format2" class="font-size-1_4 font-size-lg-1_2">家族葬</a>をしたい」と言うお客様のお話をよく伺ってみると、「<a href="/column/plan4" class="font-size-1_4 font-size-lg-1_2">都民の家族葬</a>」より「都民の一日葬」の方がご要望に近かったという事もよくあります。
                </p>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民の一日葬」とは？</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  親族や生前親しかった友人などの少数で、「通夜」は行わず、「告別式」・「火葬」のみを行うプランです。<br>
                  告別式と火葬は同日に行うため、葬儀は一日で終了します。
                </p>
                <div class="col-lg-12 p-0 pt-4 pb-4 mb-3">
                  <div class="pb-3 p-0 col-md-9">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1"><span class="color-plan5">■</span>一般的な葬儀の流れ</p>
                    <img src="/assets/img/column/funeral_plan_formal.png" alt="一般的な葬儀の流れ" class="w-100 pl-4">
                  </div>
                  <div class="pt-3 p-0 col-md-9">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1"><span class="color-plan5">■</span>「都民の一日葬」の流れ</p>
                    <img src="/assets/img/column/funeral_plan2.png" alt="「都民の一日葬」の流れ" class="w-100 pl-4">
                  </div>
                </div>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">3</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民の一日葬」のメリット</h3>
                      </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  参列者が限定され、通夜を行わないため、以下のメリットが考えられます。
                </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">経済的な負担が少ない</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    少人数に対応している葬儀場を一日のみ利用すれば良いため、式場利用料を抑えることができます。また、会食や返礼品などの費用も抑えられます。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">体力的・精神的な負担が少ない</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    参列者が親族などの気心の知れた方に限定されているため、事前の準備や参列者の対応に要する体力的・精神的な負担を軽減できます。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">参列者の負担も少ない</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    葬儀が一日で終了するため宿泊の必要がありません。<br>
                    また、葬儀場から火葬場までの移動の負担も、火葬場が併設されている葬儀場や火葬場近くの葬儀場を利用すれば軽減が可能です。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">告別式の内容を柔軟に決められる</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    親族などごく少数の参列者で行われることが多いため、告別式の内容についても参列者の理解を得られやすく、比較的自由に決められます。<br>
                    故人が好きだった音楽を流したり、ムービーを流したりすることも可能です。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">付添い安置が選択できる</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    「付添い安置」とは、告別式前夜に故人様に付き添って宿泊できるお部屋を式場内にご用意するサービスです。<br>
                    故人様の側で思い出を語り合いながら、ゆっくりとお別れの時間をお過ごし頂けます。
                  </p>
                </div>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">4</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民の一日葬」のデメリット</h3>
                      </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  告別式を行うことで直葬よりもしっかりとしたお別れができる「都民の一日葬」ですが、「少人数」「通夜を行わない」という特徴ゆえのデメリットも存在します。
                </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">宗教儀式を重んじる親族などの反発を受けやすい</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    通夜を省略しているため、宗教儀式（通夜→告別式→火葬）を重んじる方からの反発を受けることがあります。<br>
                    近年は直葬・一日葬・家族葬など様々な形式の葬儀が行われていますが、全国的にはまだ8割近くの方が通夜・告別式のある葬儀を行っているというデータもあります。<br>
                    そのため、親族や参列者には事前に通夜は行わない旨の理解を得ておくことが重要です。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">故人と親しかった友人・知人からの不満</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    ご家族・ご親族など少人数で葬儀を行うことが前提となっているため、招待されなかった友人・知人から不満を持たれる可能性があります。<br>
                    また、日程が一日しかないため、都合が合わず参列できない方が出てしまう可能性もあります。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">葬儀後に弔問客が訪れる可能性</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    参列者を絞っているため、後日招待しなかった友人・知人が弔問に訪れる可能性があります。<br>
                    葬儀後もしばらく弔問が続くと、なかなか気持ちの整理がつかず落ち着かないということもあり得ます。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">菩提寺がある場合は事前の許可が必要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    菩提寺への納骨をお考えであれば、葬儀についても菩提寺のしきたりに従う必要があります。<br>
                    菩提寺によっては通夜・告別式での読経を必須としており、告別式のみの納骨を認めていないこともあります。<br>
                    後にトラブルにならないよう菩提寺への事前相談・確認が必要です。
                  </p>
                </div>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">5</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">まとめ</h3>
                      </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  「都民の一日葬」は、通夜を省いてご遺族や参列者の負担を軽減しつつ、故人様とのお別れはしっかりと行えるプランです。<br>
                  葬儀の内容も柔軟に決められるため、従来の形式にこだわらない葬儀（お別れ会形式など）をご希望の方にもおすすめです。<br>
                  分からないこと、お悩みのことがございましたらいつでもお気軽にお問い合わせ下さい。
                </p>
            </section>
          </div>
        </div>

        <div class="col-12 col-lg-3 text-right line-height-1 p-0">
            <div class="pt-1 pl-lg-3 pr-lg-0 sticky-item">
                <?php require_once './_module/detail.php'; ?>
            </div>
        </div>
    </div>
</div>

<div class="container border-top pt-5"></div>
<section id="sec-info" class="pb-5">
  <?php
  $planindex = true;
  include '../plan/_module/list.php';
  ?>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
