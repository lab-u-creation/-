<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnplan::column['plan1']['name'];
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<?php appFuncDisp::h1(appConfigSite::sitemap['columnplan']['title']); ?>

<div class="container p-0">
    <div class="row no-gutters">
        <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

          <div class="border-top pt-4 pb-5">

            <div class="text-left p-1 pl-lg-0 font-size-2 font-size-lg-3 font-weight-bold mb-4">
              <span class="color-plan5">お別れ葬</span>
            </div>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">お葬式の価値観に変化</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  近年、新型コロナウィルスの影響や少子高齢化、無宗教者の増加などにより、「できる限り簡素な葬儀を行いたい」というお問い合わせが増えています。<br>
                  そのような方におすすめしているのが「都民のお別れ葬」。<br>
                  今回は「都民のお別れ葬」のメリットやデメリットについて説明いたします。
                </p>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民のお別れ葬」とは？</h3>
                      </div>
                  </div>
                </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  通夜・告別式を省いて火葬のみを行うプランです。葬儀の流れは以下のようになります。
                </p>

                <div class="col-lg-12 p-0 pt-4 pb-4 mb-3">
                  <div class="pb-3 p-0 col-md-9">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1"><span class="color-plan5">■</span>一般的な葬儀の流れ</p>
                    <img src="/assets/img/column/funeral_plan_formal.png" alt="一般的な葬儀の流れ" class="w-100 pl-4">
                  </div>
                  <div class="pt-3 p-0 col-md-9">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1"><span class="color-plan5">■</span>「都民のお別れ葬」の流れ</p>
                    <img src="/assets/img/column/funeral_plan1.png" alt="「都民のお別れ葬」の流れ" class="w-100 pl-4">
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  一般的な葬儀が「通夜」と「告別式」を二日間に渡って行うのに対して、「都民のお別れ葬」は火葬のみを一日で行います。<br>
                  このように火葬のみを行う葬儀の形式を「<a href="/column/format1" class="font-size-1_4 font-size-lg-1_2">直葬</a>」とも言います。
                </p>
            </section>

            <section class="pt-4 pb-5">
              <div class="pb-3">
                  <div class="row align-items-center no-gutters">
                      <div class="col-auto text-center mr-3">
                          <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">3</div>
                      </div>
                      <div class="col-9 col-lg-10">
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民のお別れ葬」のメリット</h3>
                      </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  お通夜・告別式がないため、以下のようなメリットがあります。
                </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">経済的な負担が少ない</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    葬儀場を借りる必要がないため、圧倒的に費用を抑えてお葬式を行うことができます。また、仏具がついていないため、仏具が必要ない方（無宗教者など）にとっては不要なコストも抑えられます。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">参列者の対応に時間を取られない</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    喪主やご遺族にとって、大切な人を失った悲しみの中、多数の参列者の対応を行うのは体力的にも精神的にも相当な負担となります。<br>
                    この点、お別れ葬では参列者が少ないため、対応に時間を取られることはほぼありません。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">参列者の負担が少ない</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    一日で終了するため宿泊の必要性が無く、葬儀場から火葬場までの移動もありません。遠方からの参列者・お子様・高齢者などの負担を減らせます。
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
                          <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民のお別れ葬」のデメリット</h3>
                      </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">
                  他方で葬儀を簡素化することによるデメリットも存在します。
                </p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">面会できる時間がほとんど無い</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    ご安置は「預かり安置」のみ。安置施設での面会も不可のため、一旦故人が安置されるとお別れは火葬炉の前、お時間も5分程度のみとなります。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">仏具がつかないため、宗教者による読経ができない</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    「通夜・告別式は行わなくてもせめてお坊さんによる読経はして欲しい」と希望される方がいらっしゃいますが、「都民のお別れ葬」には焼香用具や白木位牌がつかないため、宗教者をお手配することができません。<br>
                    宗教者による読経をご希望の方は「<a href="/column/plan2" class="font-size-1_4 font-size-lg-1_2">都民の火葬式</a>」をお選び下さい。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">宗教儀式を重んじる親族などの反発を受けやすい</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    直葬や家族葬など葬儀の形は様々ですが、それでも「お葬式は当然、通夜・告別式を行うもの」という認識をお持ちの方は多くいらっしゃいます。<br>
                    実際、直葬を希望される方が年々増えているとはいえ、全国ではまだ8割近くの方が通夜・告別式のある葬儀を行っているというデータもあります。そのため、火葬のみの葬儀を行う場合は事前に親族や参列者の理解を得ておくことが重要です。
                  </p>
                </div>
                <div class="pt-2 pb-2">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">菩提寺がある場合は事前の許可が必要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    菩提寺への納骨をお考えであれば、葬儀についても菩提寺のしきたりに従う必要があります。<br>
                    菩提寺によっては通夜・告別式での読経を必須としており、直葬での納骨を認めていない場合もあります。後にトラブルにならないよう菩提寺への事前相談・確認が必要です。
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
                  メリット・デメリット両面ある「都民のお別れ葬」ですが、希望される方は年々確実に増えています。<br>
                  お葬式で一番大切なのは故人を想う気持ちです。<br>
                  どのお葬式が正解ということはありませんので、自分に合った後悔のないお葬式をお選び下さい。<br>
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
