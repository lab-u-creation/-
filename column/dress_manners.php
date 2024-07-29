<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnother::column['dress_manners']['name'];
appConfigPage::$css = <<<EOF
<style>
@media (max-width:991px) {
  .order_1{
    order: 2;
  }
}
.suit{
  width: 90%;
  max-width: 250px;
}
.justify td {
  padding: 0!important;
}
.suit th{
  width: 95px;
}
.justify th {
  display: list-item;
  padding: 0!important;
  text-align: justify;
  text-align-last: justify;
  color: #85847b;
}
.justify th span{
  color: #212529;
}

@media (min-width: 992px) {
  .suit th{
    width: 106px;
  }
}
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<header class="pt-3 pb-3 pb-lg-4">
<div class="container">
  <div class="font-size-1_4 font-size-lg-2_4 line-height-1 border-contrast-left pl-3 color-dgray font-weight-bold">
    <?php echo appConfigColumnother::column['dress_manners']['name']; ?><br>
    <span class="font-size-1 font-size-lg-1_2"><?php echo appConfigColumnother::column['dress_manners']['sub']; ?></span>
  </div>
</div>
</header>

<div class="container p-0">
  <div class="row no-gutters">
    <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

      <div class="border-top pt-4 pb-5">
          <p class="font-size-lg-1_1 line-height-1_7">
            葬儀にあまり参列したことが無い男性の中には「葬儀ってどんな服装で行けばいいのだろう？」と悩む方も多いと思います。<br>
            そこで、今回は男性が葬儀に参列する際の服装マナーや小物選びについて解説していきます。
          </p>

        <div class="pt-4 pb-3">
          <div class="bg-llyellow pt-3 pb-3 pr-4 pl-4 pr-lg-5 pl-lg-5 border-orange">
            <p class="font-size-1_2 font-size-lg-1_4 line-height-1_7 text-center">目次</p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">1. <a href="#01" class="font-size-1_1 font-size-lg-1_2"><u>葬儀全般の服装マナーに対する考え方</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">2. <a href="#02" class="font-size-1_1 font-size-lg-1_2"><u>服装</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">3. <a href="#03" class="font-size-1_1 font-size-lg-1_2"><u>髪</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">4. <a href="#04" class="font-size-1_1 font-size-lg-1_2"><u>小物</u></a></p>
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">葬儀全般の服装マナーに対する考え方</h3>
              </div>
            </div>
          </div>
          <p class="font-size-lg-1_1 line-height-1_7">葬儀の服装マナーを理解するためには、まず、葬儀とはどのような場なのかを知る必要があります。葬儀の意義を知ることで葬儀のマナーも理解しやすくなります。</p>
          <p class="font-size-1_2 font-size-lg-1_4 line-height-1_7 color-dgray font-weight-bold">葬儀＝故人への哀悼の意を表し、悲しみの中にいる遺族に寄り添う場</p>
          <p class="font-size-lg-1_1 line-height-1_7">つまり、<span class="color-pink font-weight-bold">葬儀は自分をアピールしたり、自分の過ごしやすさを優先する場ではない</span>という事です。このことから、服装や小物には次のようなマナーがあります。</p>

          <div class="col-lg-12 bg-lgray mb-3">
            <div class="pt-3 pb-2 list-box">
              <ul class="font-size-lg-1_1 pl-4 m-0">
                  <li class="pb-2 color-gray"><span class="color-dgray">清潔感を重視する</span></li>
                  <li class="pb-2 color-gray"><span class="color-dgray">色は黒や白を基本とし、派手な色や光沢のあるものは避ける</span></li>
                  <li class="pb-2 color-gray"><span class="color-dgray">デザインはなるべくシンプルなものを選ぶ</span></li>
                  <li class="pb-2 color-gray"><span class="color-dgray">フォーマルを意識し、カジュアルなものは避ける</span></li>
                  <li class="pb-2 color-gray"><span class="color-dgray">殺生や不幸を連想させるものは身に付けない</span></li>
              </ul>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7">それでは、この基本を元に個別のマナーについて解説していきます。</p>

        </section>

        <section id="02" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">服装</h3>
              </div>
            </div>
          </div>

          <div class="m-auto pb-4 p-0 col-md-9">
            <img src="/assets/img/column/dress_manners.png" alt="スーツの男性" class="w-100 pl-lg-4">
          </div>

          <p class="font-size-lg-1_1 line-height-1_7 mb-5">参列に適した服装は「通夜」と「葬儀」で異なっており、ビジネススーツとブラックスーツを使い分ける事になります。<br>
            そのため、まずはこの二つのスーツの違いを説明いたします。</p>

            <div class="pt-2 pb-2">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">ブラックスーツとは？</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                「ブラックスーツ」とは、冠婚葬祭の場で着用する礼服の事で、黒色のビジネススーツとは全く違います。以下の図をご覧ください。
              </p>
            </div>

              <div class="pt-3 pb-4">
                <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1">
                  <span class="color-plan5">■</span>ブラックスーツとビジネススーツの違い
                </p>

                <div class="row no-gutters pt-2 pb-3">
                  <div class="col-12 col-sm-6 mb-4 p-sm-2 position-relative">
                    <div class="bg-llyellow border-gray rounded-1 pt-3 pb-3 pl-2 pr-2 pl-md-4 pr-md-4">
                      <p class="font-size-1_4 line-height-1_7 font-weight-bold text-center">ブラックスーツ</p>
                      <div class="col-10 m-auto">
                        <img src="/assets/img/column/black_suit.png" alt="ブラックスーツ" class="w-100 mb-4">
                      </div>
                      <div class="pb-2 ml-2 list-box justify suit m-auto">
                        <table class="col-12 font-size-lg-1_1 line-height-1_7 ml-2">
                          <tr>
                            <th><span>色：</span></th>
                            <td>光沢の無い黒色</td>
                          </tr>
                          <tr>
                            <th><span>シルエット：</span></th>
                            <td>ゆったり</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-sm-6 mb-4 p-sm-2 position-relative">
                    <div class="bg-llyellow border-gray rounded-1 pt-3 pb-3 pl-2 pr-2 pl-md-4 pr-md-4">
                      <p class="font-size-1_4 line-height-1_7 font-weight-bold text-center">ビジネススーツ</p>
                      <div class="col-10 m-auto">
                        <img src="/assets/img/column/business_suit.png" alt="ビジネススーツ" class="w-100 mb-4">
                      </div>
                      <div class="pb-2 ml-2 list-box justify suit m-auto">
                        <table class="col-12 font-size-lg-1_1 line-height-1_7 ml-2">
                          <tr>
                            <th><span>色：</span></th>
                            <td>墨色、濃いグレー</td>
                          </tr>
                          <tr>
                            <th><span>シルエット：</span></th>
                            <td>細身</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                  <p class="font-size-lg-1_1 line-height-1_7">
                    礼服であるブラックスーツは頻繁に着用する機会がないため、多少体形が変わっても着用できるようにサイズに余裕を持たせて作られています。これに対して、ビジネススーツは毎日着用するため、体形にフィットするように作られています。<br>
                    <br>
                    また、色には特に違いがあり、同じ黒色ではないか？と思う方もいるかもしれませんが、生地の光沢と色味が全く異なります。<br>
                    <br>
                    それでは、二つのスーツの違いを説明したところで、通夜と葬儀の服装について解説していきます。
                  </p>
                </div>

                  <div class="pt-3 pb-4">
                    <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">通夜への参列時</p>
                    <p class="font-size-lg-1_1 line-height-1_7">通夜への参列時は<span class="color-pink font-weight-bold">紺やグレーなどの暗めの色のビジネススーツ</span>を着用する事がマナーです。ブラックスーツは着用しません。<br>
                      <br>
                      以前は遺体の保存技術が今ほど発達していなかったため、通夜は亡くなった次の日に行われることが通常でした。そのため、参列者は急遽参列となることが多く、そこでブラックスーツを着用していると<span class="column_marker">故人の死に備えていたのではないかと思われたのです</span>。<br>
                      <br>
                      ただし、現在は遺体の保存技術が向上し、亡くなってから数日後に通夜が行われることも多くなっています。そのような場合はブラックスーツでも問題ありません。
                    </p>
                  </div>

                  <div class="pt-3 pb-4">
                    <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">告別式への参列時</p>
                    <p class="font-size-lg-1_1 line-height-1_7">
                      葬儀への参列時は「<span class="color-pink font-weight-bold">ブラックスーツ</span>」を着用するのが一般的です。通夜と違い、告別式までは時間的な余裕があるため、正式な礼服であるブラックスーツを着用します。<br>
                      <span class="column_marker">ビジネススーツとブラックスーツは並べるとはっきりと違いが分かります</span>。告別式でのビジネススーツの着用は、ご遺族に対して失礼に当たるので止めましょう。
                    </p>
                  </div>

                  <div class="pt-3 pb-4">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>シャツについて</p>
                    <p class="font-size-lg-1_1 line-height-1_7">
                      シャツは通夜・告別式を問わず、「レギュラーカラー」か「ワイドカラー」の白を選びましょう。<br>
                      ボタンダウンや、白であっても柄（ストライプ、ドット等）が入っているものはNGです。葬儀の服装は「黒・白を基本としてカジュアルなものは避ける」が基本です。
                    </p>
                  </div>

                  <div class="pt-3 pb-4">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>ベルトについて</p>
                    <p class="font-size-lg-1_1 line-height-1_7">ベルトの色やデザインについても注意すべきポイントがあります。</p>

                    <div class="col-lg-12 bg-lgray mb-3">
                      <div class="pt-4 pb-2 pl-3 list-box">
                        <div class="pb-2 list-box justify">
                          <table class="col-11 m-auto font-size-lg-1_1 line-height-1_7">
                            <tr>
                              <th><span>色：</span></th>
                              <td>艶のない黒</td>
                            </tr>
                            <tr>
                              <th><span>デザイン：</span></th>
                              <td>無地</td>
                            </tr>
                            <tr>
                              <th><span>素材：</span></th>
                              <td>本革か合皮 ※</td>
                            </tr>
                            <tr>
                              <th><span>バックル：</span></th>
                              <td class="col-8 col-sm-9">黒革でカバーされているタイプがベスト。シルバーのバックルでもOK。</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>

                    <p class="font-size-lg-1_1 line-height-1_7">
                      ※葬儀では一般的に動物の皮を使用しているものは殺生を連想させるのでNGとされていますが、ベルトや靴の皮革素材は問題がないとされています。
                    </p>
                  </div>

              </section>

            <section id="03" class="pt-4 pb-5">
              <div class="pb-3">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto text-center mr-3">
                    <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">3</div>
                  </div>
                  <div class="col-9 col-lg-10">
                    <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">髪</h3>
                  </div>
                </div>
              </div>

              <div class="pt-2 pb-5">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">髪色</p>
                <p class="font-size-lg-1_1 line-height-1_7">黒が望ましいです。黒に近い茶色程度でも問題ありません。<br>
                  薄い茶色や金髪など派手な色に染めている場合はカラースプレーなどで一時的に黒髪に戻しましょう。<br>
                  葬儀は故人を偲ぶ場ですので、派手にならないように気をつけましょう。
                </p>
              </div>

                <div class="pt-2 pb-5">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">髪型</p>

                  <div class="pt-2 pb-2">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>短髪の場合</p>
                    <p class="font-size-lg-1_1 line-height-1_7">前髪が目にかからないように気をつけましょう。葬儀では、遺族への挨拶などで頭を下げることが頻繁にあります。その際に前髪が目にかかっていると、相手に失礼になったり、周囲の方に不快感を与えてしまう場合があります。<br>
                      短くカットするか、ワックスやジェルを使用して前髪を横に流し、おでこや眉毛が見えるようにしましょう。ただし、ワックスやジェルを使用し過ぎて髪にテカリが出たり、強い香料が入ってるものはマナー違反です。<br>
                      使用は髪のはねや膨らみを抑える程度に限り、香りは無香料のものを選びましょう。
                    </p>
                  </div>

                  <div class="pt-2 pb-2">
                    <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>長髪の場合</p>
                    <p class="font-size-lg-1_1 line-height-1_7">「前髪が顔にかかり過ぎない」「頭を下げた時に髪が前に流れてこない」という2点に注意します。<br>
                      カットするのが理想的ですが、カットしない場合はオールバックかサイドに流してワックスやジェルで固めるか、ヘアゴムやピンを使用します。<br>
                      後ろ髪はヘアゴムでまとめると良いでしょう。ヘアゴムは黒色で装飾のついていないものを選びます。<br>
                      ワックスやジェルを付け過ぎない、無香料のものを選ぶという点は短髪の場合と同様です。
                    </p>
                  </div>
                </div>

                  <div class="pt-2 pb-4">
                    <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">髭</p>
                    <p class="font-size-lg-1_1 line-height-1_7">髭については特にルールがある訳ではありませんが、大切なのは周りからどのように見えるかです。<br>
                      無精髭はもちろんNGですが、普段から清潔に整えている髭の場合はそのまま参列しても大丈夫です。特にこだわりがなければ剃っておいた方が良いでしょう。
                    </p>
                  </div>
              </section>

            <section id="04" class="pt-4 pb-3">
              <div class="pb-3">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto text-center mr-3">
                    <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">4</div>
                  </div>
                  <div class="col-9 col-lg-10">
                    <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">小物</h3>
                  </div>
                </div>
              </div>

              <div class="m-auto pb-4 p-0 col-md-9">
                <img src="/assets/img/column/pic_accessory.png" alt="小物" class="w-100 pl-lg-4">
              </div>

              <p class="font-size-lg-1_1 line-height-1_7 mb-4">葬儀では本来、結婚指輪以外のアクセサリーは控えるのがマナーです。ネクタイピンもNGですが、一部付けても問題がないものがあります。</p>

              <div class="pt-2 pb-5">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">時計</p>
                <p class="font-size-lg-1_1 line-height-1_7">シンプルなものであれば問題ありませんが、いくつか気をつけるべきポイントがあります。</p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>文字盤</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    白がベストです。黒でも悪くはないのですが、白いシャツに黒い文字盤では時計が目立ってしまうため、できれば白の方が良いです。<br>
                    文字盤が大きすぎるものや派手なものはNGです。
                  </p>
                </div>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>ベルト</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    ブラックフォーマルに合わせて基本は黒、革製のものを選びましょう。ただし、革製といっても殺生を連想させるクロコダイル革はNGです。派手な色や柄のものは避けて、金具もできるだけ艶がないものを選んでください。
                  </p>
                </div>
              </div>

              <div class="pt-2 pb-5">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">ハンカチ</p>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>色</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    白か黒が基本です。日本では古来より神事や弔事では白装束が用いられ、故人も白装束を身に付けているため、葬儀に持参するハンカチは白が基本とされていました。<br>
                    ただ、最近は喪服に併せて黒のハンカチを持つことも一般的になっています。
                  </p>
                </div>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>素材</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    吸水性の良い綿や、麻・ポリエステルなどがオススメです。カジュアル感のあるタオル生地や、光沢のあるシルクはおすすめできません。
                  </p>
                </div>

                <div class="pt-2 pb-2">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>デザイン</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    無地のものを選んでください。派手なものでなければ刺繍やレースがあしらわれていても問題ありません。
                  </p>
                </div>
              </div>

              <div class="pt-3 pb-4">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">傘</p>

                <div class="col-lg-9 bg-lgray mb-3">
                  <div class="pt-3 pb-2 list-box">
                    <div class="pb-2 list-box justify">
                      <table class="col-11 m-auto font-size-lg-1_1 line-height-1_7">
                        <tr>
                          <th><span>色：</span></th>
                          <td class="col-8 col-sm-9">暗いグレーなどの落ち着いた色。</td>
                        </tr>
                        <tr>
                          <th><span>デザイン：</span></th>
                          <td>無地。刺繍は控えめならOK。</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <p class="font-size-lg-1_1 line-height-1_7">※適した傘を持っていない場合は、透明や白のビニール傘でも問題ありません。</p>
              </div>
            </section>

            <section id="05" class="pt-4 pb-3">
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
                  ここまで男性の参列時の服装について説明してきましたが、基本となるのは冒頭でもご説明した「葬儀全般の服装マナーに対する考え方」です。<br>
                  故人を偲び、ご遺族に寄り添うために、フォーマルかつシンプル、清潔で控えめな服装になっているか。<br>
                  悩んだ場合はそのような服装になっているか考えてみて下さい。
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
