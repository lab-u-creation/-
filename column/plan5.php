<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnplan::column['plan5']['name'];
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<?php appFuncDisp::h1(appConfigSite::sitemap['columnplan']['title']); ?>

<div class="container p-0">
  <div class="row no-gutters">
    <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

      <div class="border-top pt-4 pb-5">

        <div class="text-left p-1 pl-lg-0 font-size-2 font-size-lg-3 font-weight-bold mb-4">
          <span class="color-plan5">一般葬</span>
        </div>

        <section class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">最も多く行われている葬儀の形式</h3>
              </div>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7">
            近年、インターネットやTVでは、<a href="/column/format1" class="font-size-1_4 font-size-lg-1_2">直葬</a>や<a href="/column/format2" class="font-size-1_4 font-size-lg-1_2">家族葬</a>の広告が目につきますが、実は最も多く行われている葬儀はこの通夜・告別式・大人数という旧来の葬儀です。<br>
            故人様の交友関係が広かった場合など、ご縁のあった多数の方に見送って欲しいという方におすすめしているのが「都民の一般葬」です。
          </p>
        </section>

        <section class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民の一般葬」とは？</h3>
              </div>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7">
            一般的な葬儀の流れである「通夜」「告別式」を親族はもちろん、職場の同僚・サークルの友人・ご近所の知人など、幅広く招いて行いたい方におすすめのプランです。<br>
            このような大規模な葬儀には非常に高額なイメージをお持ちの方が多いと思いますが、「都民の一般葬」では対応地域を東京都に限定し、本当に必要な物品・サービスを見直すことで葬儀費用を大幅に抑えています。<br>
            全体的な葬儀の流れは、通夜・告別式を行う一般的な葬儀と同様です。
          </p>
          <div class="col-lg-12 p-0 pt-4 pb-4 mb-3">
            <div class="pb-3 p-0 col-md-9">
              <p class="font-size-1_2 font-size-lg-1_4 line-height-1"><span class="color-plan5">■</span>一般的な葬儀の流れ<span class="font-size-1 font-size-lg-1">（｢都民の一般葬｣も同様）</span></p>
              <img src="/assets/img/column/funeral_plan_formal.png" alt="一般的な葬儀の流れ（「都民の一般葬」も同様）" class="w-100 pl-4">
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民の一般葬」のメリット</h3>
              </div>
            </div>
          </div>
          <p class="font-size-lg-1_1 line-height-1_7">
            「通夜・告別式（二日間）」を「大人数」で行うことにより、以下のメリットがございます。
          </p>

          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">宗教儀礼を重んじる葬儀の形式</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              一般的な葬儀の形式のため、宗教儀礼を重んじる親族や年配者などの反発を受ける心配がほとんどありません。
            </p>
          </div>
          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">生前お世話になった多数の方々にお見送りしてもらえる</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              故人様の交友関係が広かった場合は特に重視されるポイントです。<br>
              「人と話すのが大好きだった」「いつも故人を慕う方々に囲まれていた」というような場合には、「身内だけのお見送りでは忍びない」と一般葬を選択されるお客様が多くいらっしゃいます。<br>
              また、家族葬のように、葬儀後に生前親しかった方々から「どうして最後のお別れをさせてくれなかったのか」「質素な葬儀で見送られて可哀想」などと言われる心配がありません。
            </p>
          </div>
          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">葬儀後に弔問客が訪れる可能性を減らせる</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              一般葬ではご縁のあった方々と一堂に会してお別れができるため、後日個別に弔問客が訪れる可能性は低くなります。<br>
              葬儀後にいつまでも弔問客が訪れると、ご遺族にとっても心の切り替えが難しく感じるかもしれません。
            </p>
          </div>
          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">故人の人となりや思い出にふれる機会が得られる</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              故人と生前ご縁のあった方々と接することで、故人の様々なエピソードにふれる機会が得られます。懐かしい思い出や、知られざる一面を垣間見られるような機会もあるかもしれません。<br>
              また、故人を失った悲しみを多数の方と語り合うことで、癒されることもあるかと思います。
            </p>
          </div>
          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">参列者が参加しやすい</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              葬儀を告別式と通夜の二日間・異なる時間帯に行うため、多忙な方も参列しやすくなります。
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「都民の一般葬」のデメリット</h3>
              </div>
            </div>
          </div>
          <p class="font-size-lg-1_1 line-height-1_7">
            続いて一般葬のデメリットについても見ていきます。
          </p>

          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">事前の準備・参列者の対応に時間がかかる</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              最大のデメリットがこの事前準備・参列者の対応です。<br>
              <span class="color-pink font-weight-bold">通夜・告別式でのご挨拶のみならず、挨拶状の準備や会場の選定、香典返しの数や会食内容の決定など、様々な準備・対応が発生します。</span><br>
              喪主やご遺族にとって、大切な人を失った悲しみの中、多数の参列者の対応を行うのは体力的にも精神的にも相当な負担となります。<br>
              そのため、「都民の一般葬」では故人とゆっくりお別れの時間をお過ごしいただけるよう「付添い安置」がセットになっています。
            </p>
            <p class="font-size-0_9">※「付添い安置」とは…告別式前夜に故人様に付き添って宿泊できるお部屋をご用意するサービスです。</p>
          </div>
          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">経済的負担が大きい</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              多数の参列者を招くため、参列者の数に見合った大きな葬儀場や、<span class="color-pink font-weight-bold">会食、返礼品など様々な負担が発生します</span>。<br>
              ただし、香典収入があるため、香典返しの費用などを考慮しても最終的な負担額は家族葬とあまり変わらない場合もあります。
            </p>
          </div>
          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">葬儀内容の柔軟性がない</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              宗教儀礼（しきたり・風習など）が重視されるため、葬儀内容の柔軟性はありません。<br>
              家族葬のように葬儀内容を自由に変更することはできません。
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
            「都民の一般葬」は多数の参列者を招いて大規模に行う、経済的にも体力的にも負担のかかる葬儀です。<br>
            しかし、<span class="color-pink font-weight-bold">故人が社会に残した足跡やご縁をしっかりと振り返り、残された遺族が新たな一歩を踏み出すための大切な区切りともなる葬儀です</span>。<br>
            故人の旅立ちを盛大に見送りたいという方は是非ご検討ください。<br>
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
