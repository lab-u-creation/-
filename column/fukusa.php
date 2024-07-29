<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnother::column['fukusa']['name'];
appConfigPage::$css = <<<EOF
<style>
@media (max-width:991px) {
  .order_1{
    order: 2;
  }
}
.sticky-item.is-firstview {
  top: 170px;
}
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<?php appFuncDisp::h1(appConfigPage::$title); ?>

<div class="container p-0">
  <div class="row no-gutters">
    <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

      <div class="border-top pt-4 pb-5">
          <p class="font-size-lg-1_1 line-height-1_7">
            袱紗（ふくさ）とは、冠婚葬祭においてご祝儀やお香典などを包む四角い布のことで、中身が汚れたり、水引が崩れたりするのを防ぐ目的で使用されます。様々な色や種類がありますが、弔辞で使用できる色・形は決まっています。
          </p>

        <div class="pt-4 pb-3">
          <div class="bg-llyellow pt-3 pb-3 pr-4 pl-4 pr-lg-5 pl-lg-5 border-orange">
            <p class="font-size-1_2 font-size-lg-1_4 line-height-1_7 text-center">目次</p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">1. <a href="#01" class="font-size-1_1 font-size-lg-1_2"><u>袱紗の種類</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">2. <a href="#02" class="font-size-1_1 font-size-lg-1_2"><u>袱紗の包み方</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">3. <a href="#03" class="font-size-1_1 font-size-lg-1_2"><u>香典の渡し方</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">4. <a href="#04" class="font-size-1_1 font-size-lg-1_2"><u>袱紗についてのQ＆A</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2">5. <a href="#05" class="font-size-1_1 font-size-lg-1_2"><u>まとめ</u></a></p>
          </div>
        </div>

        <section id="01" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">袱紗の種類</h3>
              </div>
            </div>
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">形</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              袱紗には大きく分けて4つの形があります。それぞれの特徴やメリットをまとめます。
            </p>
          </div>

          <div class="pb-5">
            <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>風呂敷袱紗</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              風呂敷のようなシンプルな袱紗
            </p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-10 col-sm-8 col-lg-5 line-height-1 m-auto">
                <img src="/assets/img/column/fukusa01.png" alt="風呂敷袱紗" class="w-100 mb-4 pl-lg-3 pr-lg-5">
              </div>
              <div class="col-12 col-lg-7 position-relative">
                <div class="pt-3 pb-2">
                  <table border="1" class="col-12">
                    <tr class="font-size-1_2 font-size-lg-1_2 bg-lgray color-dgray">
                      <th class="col-4 col-lg-4 text-center p-2">メリット</th>
                      <th class="col-2 col-lg-2 text-center p-2">包む金額</th>
                    </tr>
                    <tr>
                      <td class="p-2">
                        <p class="list-item color-gray"><span class="color-dgray">使用後に小さく畳める</span></p>
                        <p class="list-item color-gray"><span class="color-dgray">リバーシブルで慶弔両用できるものもある</span></p>
                      </td>
                      <td class="text-center p-2">3万円以上</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="pb-5">
            <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>爪付き袱紗</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              型崩れしないように爪と留め糸がついている袱紗
            </p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-10 col-sm-8 col-lg-5 line-height-1 m-auto">
                <img src="/assets/img/column/fukusa02.png" alt="爪付き袱紗" class="w-100 mb-4 pl-lg-3 pr-lg-5">
              </div>
              <div class="col-12 col-lg-7 position-relative">
                <div class="pt-3 pb-2">
                  <table border="1" class="col-12">
                    <tr class="font-size-1_2 font-size-lg-1_2 bg-lgray color-dgray">
                      <th class="col-4 col-lg-4 text-center p-2">メリット</th>
                      <th class="col-2 col-lg-2 text-center p-2">包む金額</th>
                    </tr>
                    <tr>
                      <td class="p-2">
                        <p class="list-item color-gray"><span class="color-dgray">爪がついているのでほどけにくい</span></p>
                        <p class="list-item color-gray"><span class="color-dgray">包みやすい</span></p>
                      </td>
                      <td class="text-center ">3万円以上</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="pb-5">
            <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>台付き袱紗</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              袱紗の内側に、香典袋などを乗せるお盆代わりの台が付いている袱紗
            </p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-10 col-sm-8 col-lg-5 line-height-1 m-auto">
                <img src="/assets/img/column/fukusa03.png" alt="台付き袱紗" class="w-100 mb-4 pl-lg-3 pr-lg-5">
              </div>
              <div class="col-12 col-lg-7 position-relative">
                <div class="pt-3 pb-2">
                  <table border="1" class="col-12">
                    <tr class="font-size-1_2 font-size-lg-1_2 bg-lgray color-dgray">
                      <th class="col-4 col-lg-4 text-center p-2">メリット</th>
                      <th class="col-2 col-lg-2 text-center p-2">包む金額</th>
                    </tr>
                    <tr>
                      <td class="p-2">
                        <p class="list-item color-gray"><span class="color-dgray">中身がずれにくい</span></p>
                        <p class="list-item color-gray"><span class="color-dgray">香典袋などを台に乗せたまま渡すことができる</span></p>
                      </td>
                      <td class="text-center p-2">3万円以上</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="pb-5">
            <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>金封袱紗</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              内側にポケットがある二つ折りの袱紗。<br>
              <span class="color-pink font-weight-bold">※略式の袱紗。使用する際は注意が必要です。</span>
            </p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-10 col-sm-8 col-lg-5 line-height-1 m-auto">
                <img src="/assets/img/column/fukusa04.png" alt="金封袱紗" class="w-100 mb-4 pl-lg-3 pr-lg-5">
              </div>
              <div class="col-12 col-lg-7 position-relative">
                <div class="pt-3 pb-2">
                  <table border="1" class="col-12">
                    <tr class="font-size-1_2 font-size-lg-1_2 bg-lgray color-dgray">
                      <th class="col-4 col-lg-4 text-center p-2">メリット</th>
                      <th class="col-2 col-lg-2 text-center p-2">包む金額</th>
                    </tr>
                    <tr>
                      <td class="p-2">
                        <p class="list-item color-gray"><span class="color-dgray">香典袋などを包む面倒が無い</span></p>
                        <p class="list-item color-gray"><span class="color-dgray">形が崩れにくく、落としにくい</span></p>
                      </td>
                      <td class="text-center p-2">1〜3万円</td>
                    </tr>
                  </table>
                </div>
              </div>
              <p class="font-size-lg-1_1 line-height-1_7">
                「金封袱紗」は扱いやすく便利な袱紗ですが、略式の袱紗のため、相手との関係性などを考慮して使用する必要があります。また、包める金額も他の袱紗より少額になります。
              </p>
            </div>
          </div>


        <div class="pt-2 pb-5">
          <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">色</p>
          <p class="font-size-lg-1_1 line-height-1_7">
            様々な色の袱紗がありますが、弔事に使用する際は<span class="color-plan5 font-weight-bold">寒色系の色</span>を選んでください。<br>
              寒色系の色とは、紫・緑・紺・藍色・灰色などの視覚的に涼しさや冷たさを感じる色を指します。なお、慶事の場合は<span class="color-pink font-weight-bold">暖色系の色</span>を使用します。
          </p>

          <div class="row no-gutters pt-2 pb-2">
            <div class="col-12 col-sm-6 p-2 position-relative">
              <div class="bg-llyellow border-gray rounded-1 pt-3 pb-3 pl-4 pr-4">
                <p class="font-size-1_4 line-height-1_7 font-weight-bold text-center">弔事（寒色系）</p>
                <div class="col-12 m-auto">
                  <img src="/assets/img/column/pic_color01.png" alt="pic_color01" class="w-100 mb-4">
                </div>
                <p class="font-size-lg-1_1 line-height-1_7 text-center">紫、緑、紺、藍色、灰色など</p>
              </div>
            </div>

            <div class="col-12 col-sm-6 p-2 position-relative">
              <div class="bg-llyellow border-gray rounded-1 pt-3 pb-3 pl-4 pr-4">
                <p class="font-size-1_4 line-height-1_7 font-weight-bold text-center">慶事（暖色系）</p>
                <div class="col-12 m-auto">
                  <img src="/assets/img/column/pic_color02.png" alt="pic_color02" class="w-100 mb-4">
                </div>
                <p class="font-size-lg-1_1 line-height-1_7 text-center">紫、赤、オレンジ、ピンク、金など</p>
              </div>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7">
            紫は弔事にも慶事にも使用できるため、<span class="column_marker">一枚だけ用意する場合は<span class="color-plan3 font-weight-bold">紫</span>がオススメです</span>。
          </p>
        </div>

        <div class="pt-2 pb-2">
          <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">刺繍</p>
          <p class="font-size-lg-1_1 line-height-1_7">
            無地が多い袱紗ですが、中には刺繍（鶴・亀・蓮の花・家紋など）が入った高級品も存在します。弔事、慶事によって使用できる模様は異なります。
          </p>

          <div class="row no-gutters pt-2 pb-2">
            <div class="col-12 col-sm-6 p-2 position-relative">
              <div class="bg-llyellow border-gray rounded-1 pt-3 pb-3 pl-4 pr-4">
                <p class="font-size-1_4 line-height-1_7 font-weight-bold text-center">弔事用</p>
                <div class="col-12 m-auto">
                  <img src="/assets/img/column/mourning.png" alt="弔事（刺繍）" class="w-100 mb-4">
                </div>
                <p class="font-size-lg-1_1 line-height-1_7 text-center">蘭、蓮、菊、家紋</p>
              </div>
            </div>

            <div class="col-12 col-sm-6 p-2 position-relative">
              <div class="bg-llyellow border-gray rounded-1 pt-3 pb-3 pl-4 pr-4">
                <p class="font-size-1_4 line-height-1_7 font-weight-bold text-center">慶事用</p>
                <div class="col-12 m-auto">
                  <img src="/assets/img/column/auspicious_event.png" alt="慶事（刺繍）" class="w-100 mb-4">
                </div>
                <p class="font-size-lg-1_1 line-height-1_7 text-center">松、竹、梅、鳳凰、鶴、亀、家紋など</p>
              </div>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7">
            ※家紋は<span class="column_marker">袱紗の色次第</span>でどちらにも使用できます。
          </p>
        </div>
        </section>

        <section id="02" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">袱紗の包み方</h3>
              </div>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7"><span class="color-pink font-weight-bold">弔事は左開きにして畳みます。</span>（慶事は右開き）</p>

          <div class="pt-2 pb-5">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">台付き袱紗、爪付き袱紗、風呂敷袱紗</p>
            <div class="bg-llyellow border-gray p-4 p-sm-5">
              <img src="/assets/img/column/wrapping01.png" alt="台付き袱紗、爪付き袱紗、風呂敷袱紗" class="w-100">
            </div>

              <div class="pt-2 column-number">
                <ol>
                  <li class="font-size-1_2 line-height-1_7 mb-2">袱紗を裏向きにし、ひし形状に広げます。その際、爪付き袱紗は爪を左側に、台付き袱紗は台が右側にくるように広げます。</li>
                  <li class="font-size-1_2 line-height-1_7 mb-2">金封を中央より右寄り（金封の右端が袱紗から出ない程度）に、表書きが読める方向にして置きます。</li>
                  <li class="font-size-1_2 line-height-1_7 mb-2">袱紗を金封に被せるように、右端→上→下の順に折り畳みます。</li>
                  <li class="font-size-1_2 line-height-1_7 mb-2">最後に左端を右側に被せるように折り畳んで完成です。</li>
                </ol>
              </div>
            </div>

            <div class="pt-2 pb-5">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">金封袱紗</p>
              <div class="bg-llyellow border-gray p-4 p-sm-5 mb-2">
                <img src="/assets/img/column/wrapping02.png" alt="金封袱紗" class="w-100">
              </div>
              <p class="font-size-lg-1_1 line-height-1_7">左開きになるように開き、右側のポケットに表書きが読める方向にした香典を入れ、口を閉じます。</p>
            </div>
        </section>

        <section id="03" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">3</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">香典の渡し方</h3>
              </div>
            </div>
          </div>

          <div class="m-auto pb-4 p-0 col-md-9">
            <img src="/assets/img/column/pic_fukusa.png" alt="袱紗" class="w-100 pl-lg-4">
          </div>

          <div class="pt-2 pb-5">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">受付で渡す場合</p>
              <div class="bg-lgray p-3 p-lg-4 column-number">
                <ol>
                  <li class="font-size-1_2 line-height-1_7 mb-2">「この度はご愁傷様でございます」とお悔やみを言い、一礼します。</li>
                  <li class="font-size-1_2 line-height-1_7 mb-2">右手で袱紗を持ち、香典を取り出します。</li>
                  <li class="font-size-1_2 line-height-1_7">袱紗の上で半時計周りに180度回転させ、両手で渡します。</li>
                </ol>
              </div>
            </div>

            <div class="pt-2 pb-5">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">先方に直接渡す場合</p>
              <p class="font-size-lg-1_1 line-height-1_7">相手の前で袱紗を開き、お盆や台の上に相手から表書きが見えるように置いて渡します。</p>
            </div>
        </section>

        <section id="04" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">4</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">袱紗についてのQ＆A</h3>
              </div>
            </div>
          </div>

         <div class="pt-2">
           <div class="mb-0 p-0">
             <span class="d-inline-block w-30px align-top font-size-1">
                 <img src="/assets/img/icon_q.svg" alt="Q" style="width:30px;height:30px;">
             </span>
             <span class="d-inline-block w-90per align-top pl-2 font-size-1 font-size-lg-1_2">ハンカチで代用できますか</span>
           </div>
             <div class="pt-3 pb-4">
                 <div class="d-inline-block w-30px align-top font-size-1">
                     <img src="/assets/img/icon_a.svg" alt="A" style="width:30px;height:30px;">
                 </div>
                 <div class="d-inline-block w-90per align-top pl-2 font-size-1 line-height-1_7"><p>袱紗が用意できない時は、小さな風呂敷やハンカチで代用することもできます。ただし、代用するのは緊急の場合のみ。色・柄・素材などにも注意が必要です。包み方は袱紗と同じです。</p></div>
             </div>
          </div>

         <div class="pt-2">
           <div class="mb-0 p-0">
             <span class="d-inline-block w-30px align-top font-size-1">
                 <img src="/assets/img/icon_q.svg" alt="Q" style="width:30px;height:30px;">
             </span>
             <span class="d-inline-block w-90per align-top pl-2 font-size-1 font-size-lg-1_2">袱紗の購入場所</span>
           </div>
             <div class="pt-3 pb-4">
                 <div class="d-inline-block w-30px align-top font-size-1">
                     <img src="/assets/img/icon_a.svg" alt="A" style="width:30px;height:30px;">
                 </div>
                 <div class="d-inline-block w-90per align-top pl-2 font-size-1 line-height-1_7"><p>百貨店やショッピングセンターなどの呉服売り場・フォーマル売り場・文房具売り場や、紳士服専門店、文房具店、ネットショップや100円ショップでも販売しています。</p></div>
             </div>
          </div>

         <div class="pt-2">
           <div class="mb-0 p-0">
             <span class="d-inline-block w-30px align-top font-size-1">
                 <img src="/assets/img/icon_q.svg" alt="Q" style="width:30px;height:30px;">
             </span>
             <span class="d-inline-block w-90per align-top pl-2 font-size-1 font-size-lg-1_2">袱紗の価格</span>
           </div>
             <div class="pt-3 pb-4">
                 <div class="d-inline-block w-30px align-top font-size-1">
                     <img src="/assets/img/icon_a.svg" alt="A" style="width:30px;height:30px;">
                 </div>
                 <div class="d-inline-block w-90per align-top pl-2 font-size-1 line-height-1_7"><p>素材によりまちまちですが、ポリエステルのものであれば100円ショップでも購入できます。また、正絹や正絹縮緬は正絹のランクにより三千円から一万円程度します。</p></div>
             </div>
          </div>
        </section>

        <section id="05" class="pt-4 pb-5">
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
              袱紗には、香典袋の汚れや水引の型崩れを防ぐという役割だけではなく、香典を丁重に扱うことで贈る相手への礼儀を尽くし、色や刺繍などに配慮することで相手の喜びや悲しみに寄り添う姿勢を示すという役割もあります。大人のたしなみとして１枚は用意しておきましょう。
            </p>
          </section>

          <section class="pt-4 pb-5">
            <a href="<?php echo appConfigSite::sitemap['column']['path']; ?>condolence_gift" class="column-hover btn text-left">
            <div class="bg-llyellow w-lx-90per rounded p-3 border-orange position-relative m-auto arrow-column">
              <div class="position-absolute d-inline-block bg-orange rounded-pill color-white p-1 pl-3 pr-3 font-size-1" style="top:-17px;">関連記事</div>
                <div class="row no-gutters pt-2">
                  <div class="col-4 col-lg-3">
                    <img src="/assets/img/column/condolence_gift.png" alt="香典の書き方" class="w-100 pr-4">
                  </div>
                  <div class="col-8 col-lg-9 pr-sm-3">
                    <div class="font-size-1_2 font-size-lg-1_4 line-height-1 font-weight-bold">香典の書き方 <span class="font-size-1">～基本マナーと注意点を徹底解説～</span></div>
                    <div class="d-none d-sm-block d-md-none color-dgray text-justify font-size-1 line-height-1_4"><?php echo appFuncString::substr('香典袋の書き方には、「どのような筆記用具を使うのか？」「どのように書けばいいのか？」など気をつけるべきポイントが複数あり、慣れるまでは難しいと感じる方が多いと思います。', '35'); ?></div>
                    <div class="d-none d-md-block color-dgray text-justify font-size-1 line-height-1_4"><?php echo appFuncString::substr('香典袋の書き方には、「どのような筆記用具を使うのか？」「どのように書けばいいのか？」など気をつけるべきポイントが複数あり、慣れるまでは難しいと感じる方が多いと思います。', '74'); ?></div>
                    </div>
                  </div>
              </div>
            </a>
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
