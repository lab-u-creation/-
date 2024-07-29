<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnplan::column['plan4']['name'];
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<?php appFuncDisp::h1(appConfigSite::sitemap['columnplan']['title']); ?>

<div class="container p-0">
    <div class="row no-gutters">
        <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

          <div class="border-top pt-4 pb-5">

            <div class="text-left p-1 pl-lg-0 font-size-2 font-size-lg-3 font-weight-bold mb-4">
              <span class="color-plan5">家族葬</span>
            </div>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">一般的な葬儀をご家族・ご親族で</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  新型コロナウィルスの発生以降、「多数の参列者を招くのは怖いので、身内だけでお葬式をしたい」というご依頼をよく頂くようになりました。<br>
                  従来のお葬式のように多数の参列者を招くと感染対策が大変ですし、万が一にも感染者が出てしまった場合は取り返しがつきません。<br>
                  そこで、身内だけでもしっかりとしたお葬式をしたいとご希望の方におすすめしているプランが「都民の家族葬」です。
                </p>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民の家族葬」とは？</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  「通夜」「告別式」を、家族や親族などの少人数で行うプランです。葬儀自体は全て行いますが、参列者を限定しているところがポイントです。<br>
                  「家族葬」という名前ですが、参列者は家族のみである必要はなく、親交の深かったご友人・知人などもお呼びいただけます。
                </p>

                <div class="col-lg-12 p-0 pt-4 pb-4 mb-3">
                  <div class="pb-3 p-0 col-md-9">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1"><span class="color-plan5">■</span>一般的な葬儀の流れ<span class="font-size-1 font-size-lg-1">（｢都民の家族葬｣も同様）</span></p>
                    <img src="/assets/img/column/funeral_plan_formal.png" alt="一般的な葬儀の流れ（「都民の家族葬」も同様）" class="w-100 pl-4">
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
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民の家族葬」のメリット</h3>
                      </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  少人数で告別式のみを行う「<a href="/column/plan3" class="font-size-1_4 font-size-lg-1_2">都民の一日葬</a>」に「通夜」を追加したイメージです。<br>
                  通夜・告別式という葬儀本来の形式を守りつつ、参列者を少人数にすることで様々なメリットがあります。
                </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">事前準備や参列者対応の負担を軽減できる</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    葬儀は二日間にわたって行いますが、家族を中心とした少人数で行われるため、事前準備や参列者への対応の負担が軽減されます。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">葬儀の内容を柔軟に決められる</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    葬儀の内容についても形式にとらわれず柔軟に決められます。告別式で故人が好きだった音楽を流したり、ムービーを流したりすることも可能です。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">宗教儀礼を重視する方々の反発を受けにくい</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    一般的な葬儀と同様に通夜・告別式を行うため、宗教儀礼を重んじる親族や年配者などの反発を受けにくい傾向にあります。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">参列者が参加しやすい</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    葬儀を告別式と通夜の二日間・異なる時間帯に行うため、多忙な方も参列しやすくなります。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">付添い安置が選択できる</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    「付添い安置」とは、告別式前夜に式場内に故人様に付き添って宿泊できるお部屋をご用意するサービスです。<br>
                    通夜を行った後、故人様の側で思い出を語り合いながら、ゆっくりとお別れの時間をお過ごし頂けます。
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
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民の家族葬」のデメリット</h3>
                      </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  「家族葬」の特徴の一つは「家族を中心とした少人数」ですが、この特徴から生まれるデメリットもあります。
                </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">香典が少ない</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    参列者が少ないため、香典の数も少なくなります。その結果、香典で葬儀費用を賄うことができなくなり、経済的な負担も大きくなります。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">参列者の範囲が難しい</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    親族・友人をどこまで招くのかが最大の問題となります。<br>
                    お声掛けしなかった方々の中には、実は故人との親交が深かった方や、招かれなかったことに不満を持つ方もいるかもしれません。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">少規模な葬儀に苦言を呈される可能性</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    少人数での葬儀が注目されるようになったのは比較的最近のため、「お葬式はたくさんの人を招いて盛大に行うもの」とお考えの方も多くいらっしゃいます。<br>
                    そのような方から「故人が寂しがるのではないか」「こんなに質素なお葬式では故人が可哀想」などと苦言を呈されることがあります。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">葬儀後に弔問客が訪れる可能性</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    葬儀後に招待されなかった方が弔問に訪れる可能性があります。葬儀後も個別の弔問が続くと、なかなか気持ちの整理がつかず、落ち着かないといったことも考えられます。<br>
                    また、返礼品の用意の手間などが発生する場合もあります。
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
                  「都民の家族葬」は、一般的な葬儀を限られた少人数の参列者で行うプランで、名前の通り「家族葬」をイメージして作られています。<br>
                  宗教上重要な儀式である通夜や告別式は省かず、それでいて喪主・ご遺族の負担は減らしてしっかりとしたお別れができます。分からないこと、お悩みのことがございましたらいつでもお気軽にお問い合わせ下さい。
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
