<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnother::column['nichire']['name'];
?>

<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<header class="pt-3 pb-3 pb-lg-4">
<div class="container">
  <div class="font-size-1_4 font-size-lg-2_4 line-height-1 border-contrast-left pl-3 color-dgray font-weight-bold">
    <?php echo appConfigColumnother::column['nichire']['name']; ?><br>
    <span class="font-size-1 font-size-lg-1_2"><?php echo appConfigColumnother::column['nichire']['sub']; ?></span>
  </div>
</div>
</header>

<style>
  /* .sticky-item {
    margin: 10px 0 80px;
    position: sticky;
    top: 80px;
    transition-duration: 0.25s;
    transition-timing-function: ease;
    transition-delay: 0;
  } */
  th,td{
    padding: 8px 10px;
  }
  .list-item {
    display: list-item;
    padding: 0!important;
    font-weight: normal;
    color: #212529;
    color: #85847b;
    list-style:disc;
    margin: 0 0 5px 50px;
  }
  .list-item span{
    color: #212529;
  }
  .list-pink{
    color: #c85554 !important;
  }

  .list-box li {
    color: #85847b;
  }
  .list-box li span {
    color: #212529;
  }

  /* 初期設定 */
  .number ol {
    position: relative;
    margin: 0;
    padding: 0;
    list-style: none;
  }
  .number ol li {
    position: relative;
    margin: 0 0 0 35px;
    padding: 0;
    line-height: 1.5;
    font-weight: normal;
  }
  .number ol {
    counter-reset: li;
  }
  .number ol > li:before {
    position: absolute;
    font-weight: bold;
    counter-increment: li;
    content: counter(li) "";
    left: -34px;
    top: 2px;
    color: #fff;
    width: 24px;
    height: 24px;
    font-size: 80%;
    text-align: center;
    border-radius: 100%;
    box-sizing: border-box;
    font-weight: bold;
    line-height: 1;
    background: #4c4d4e;
    padding: 4px 0;
  }
  .bg-column{
    background: #fffef1;
  }
  .connection{
    position: absolute;
    top:-17px;
  }
  .rounded-half {
    border-radius: 5px;
  }
  .bg-column{
    background: #fffef1;
  }
  .arrow-column::after{
    content: "";
      margin: auto;
      position: absolute;
      top: 0;
      bottom: 0;
      right: 15px;
      width: 10px;    /* くの字を山なりに見た時、左側の長さ */
      height: 10px;   /* くの字を山なりに見た時、右側の長さ */
      border-top: 2px solid #d8804e;     /* くの字を山なりに見た時、左側の太さと色 */
      border-right: 2px solid #d8804e;   /* くの字を山なりに見た時、右側の太さと色 */
      transform: rotate(45deg);    /* くの字の向き */
    }
  .a-column {
    color: #212529;
  }
  .a-column:hover {
    opacity: 0.7;
    color: #212529;
    text-decoration: none;
  }

  @media screen and (max-width: 1199px) {
    .ellipsis {
    	position: relative;
    	height: 40px;
    	overflow: hidden;
    	line-height: 20px;
    }
    .ellipsis:before, .ellipsis:after {
    	position: absolute;
    	background: #fffef1;
    }

    .ellipsis:before {
    	content: "･･･";
    	bottom: 0;
    	right: 0;
      padding:0 13px 0 3px;
    }

    .ellipsis:after {
    	content: "";
    	width: 100%;
    	height: 100%;
    }
  }
  @media screen and (max-width: 992px) {
    .ellipsis{
      height: 80px;
    }
  }
@media screen and (max-width: 767px) {
    .ellipsis{
      display: none;
    }
    .number ol > li:before {
      left: -30px;
      top: 2px;
      padding: 3px 0;
      width: 20px;
      height: 20px;
    }
  }

  @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {
    .sticky-item {
      position: inherit;
    }
  }
</style>

<div class="container p-0">
  <div class="row no-gutters">
    <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

      <div class="border-top pt-4 pb-5">
          <p class="font-size-lg-1_1 line-height-1_7">
            日蓮宗は鎌倉時代に日蓮聖人によって開かれた日本仏教の宗派の一つで、他の宗派には無い独特の考え方を持っています。<br>
            そこで、この記事では日蓮宗の法要を執り行う際の他宗派との違いについて解説いたします。
          </p>

        <div class="pt-4 pb-3">
          <div class="bg-column pt-3 pb-3 pr-4 pl-4 pr-lg-5 pl-lg-5 border-orange">
            <p class="font-size-1_2 font-size-lg-1_4 line-height-1_7 text-center">目次</p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">1. <a href="#01" class="font-size-1_1 font-size-lg-1_2"><u>日蓮宗の特徴とは？</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">2. <a href="#02" class="font-size-1_1 font-size-lg-1_2"><u>日蓮宗の宗派</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">3. <a href="#03" class="font-size-1_1 font-size-lg-1_2"><u>法要での他宗派との違い</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">4. <a href="#04" class="font-size-1_1 font-size-lg-1_2"><u>法要の流れ</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">5. <a href="#05" class="font-size-1_1 font-size-lg-1_2"><u>法要のタイミング</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">6. <a href="#06" class="font-size-1_1 font-size-lg-1_2"><u>法要で必要なもの（施主）</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">7. <a href="#07" class="font-size-1_1 font-size-lg-1_2"><u>香典について（参列者）</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2">8. <a href="#08" class="font-size-1_1 font-size-lg-1_2"><u>まとめ</u></a></p>
          </div>
        </div>

        <section id="01" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">日蓮宗の特徴とは？</h3>
              </div>
            </div>
          </div>

          <div class="m-auto pb-3 p-0 col-md-9">
            <img src="/assets/img/column/nichiren.png" alt="御香典" class="w-100 pl-lg-4">
          </div>

            <div class="pt-2 pb-4">
              <p class="font-size-lg-1_1 line-height-1_7">
                日蓮宗の一番の特徴は、法華経の教えを最も重視している点で、「南無妙法蓮華経」のお題目を繰り返し唱えることで、死後「霊山浄土（りょうぜんじょうど）で釈迦牟尼仏（しゃかむにぶつ）にお会いし、成仏することができる」という独特の考え方を持っています。そして、この考え方が法要にも大きな影響を与えています。
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">日蓮宗の宗派</h3>
              </div>
            </div>
          </div>

            <div class="pt-2 pb-4">
              <p class="font-size-lg-1_1 line-height-1_7">
                日蓮宗から派生した宗派は日蓮宗、日蓮正宗、創価学会、真門法華宗など数多くありますが、宗派ごとに教義の捉え方や法要の行い方に違いがあります。<br>
                例えば、日蓮宗では釈迦をご本尊としていますが、日蓮正宗では日蓮聖人をご本尊としています。また、日蓮正宗では、葬儀の際に花の祭壇を使わずに樒（しきみ）と呼ばれる常緑樹を使用するなどの違いがあります。<br>
                <br>
                参列する場合は、事前に宗派も確認しておきましょう。
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">法要での他宗派との違い</h3>
              </div>
            </div>
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-lg-1_1 line-height-1_7">
              日蓮宗の法要の流れやタイミングは基本的には他宗派と変わりません。<br>
              ただし、法要内で以下の違いが見られます。
            </p>
          </div>

          <div class="pt-2 pb-3 number">
            <ol>
                <li class="font-size-1_2 font-weight-bold line-height-1_7">参列者も一緒に「南無妙法蓮華経」と唱える場面がある</li>
                <p class="font-size-lg-1_1 line-height-1_7 mb-5">
                  日蓮宗では、「南無妙法蓮華経」のお題目を繰り返し唱えながら修行を続ければ、「霊山浄土」で釈迦牟尼仏（しゃかむにぶつ）にお会いして成仏できると考えられています。そのため、僧侶・参列者が一緒にお題目を唱えることは非常に重要です。<br>
                  お題目を唱えるタイミングについては、ほとんどの場合、僧侶や葬儀担当者から事前に説明があります。また、分かりやすくフリガナが振られた教本等が配られることも多いため、心配はいりません。
                </p>

                <li class="font-size-1_2 font-weight-bold line-height-1_7">読経・焼香の回数</li>
                <p class="font-size-lg-1_1 line-height-1_7 mb-5">
                  日蓮宗の読経・焼香の正式な回数は3回です。これは仏教の三宝である仏・法・僧（ぶっぽうそう）を供養し、仏教の3つの心理である空・仮・中（くうけちゅう）の三諦（さんだい）にならうためです。ただし、導師は3回でも一般葬参列者については1回の場合があります（参列者が多い場合など）。<br>
                  <br>
                  焼香を行う際は、合掌して一礼し、数珠を左手に持った状態で、焼香盆の中のお香を右手の親指・人差し指で軽くつまみ、押しいただいて（額に近づけて）から香炉にくべます。これを回数分繰り返します。終わったら再び合掌・一礼し、席へ戻ります。
                </p>

                <li class="font-size-1_2 font-weight-bold line-height-1_7">数珠</li>
                <div class="m-auto pb-3 p-0 mt-sm-2 col-md-5" style="float:left">
                  <img src="/assets/img/column/pic_prayer_beads.png" alt="御香典" class="w-100 pr-4">
                </div>
                <p class="font-size-lg-1_1 line-height-1_7 mb-4">
                  日蓮宗の数珠も、他宗派と同様に108個の主珠から成っていますが、その他に「親珠」と呼ばれる大きな珠が2個、「四天珠」と呼ばれる小さな珠が4個ついており、片側に2本、もう片方に3本の房がついています。<br>
                  この2本の房が出ている方の親珠は「釈迦如来」、3本の房が出ている方の親珠は「多宝如来」を表しています。また、3本の房のうち短い1本には「数取玉」と呼ばれる10個の玉が付いています。<br>
                  <br>
                  日蓮宗の正式な数珠には僧侶が使用する数珠である「装束数珠（しょうぞくじゅず）」と、檀家や信徒が使用する「勤行数珠（ごんぎょうじゅず）」の2種類が存在しますが、参列者が必ず勤行数珠を持参するというルールはなく、すでに数珠を持っている場合、改めて購入する必要はありません。
                </p>

                <div class="pb-2 mb-5">
                  <table border="1" class="col-12 text-center">
                    <tr class="color-dgray bg-lgray">
                      <th class="col-3 col-lg-3 font-size-1_2"></th>
                      <th class="col-3 col-lg-3 font-size-1_2">勤行数珠</th>
                      <th class="col-3 col-lg-3 font-size-1_2">装束数珠</th>
                    </tr>
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray bg-lgray">用途</th>
                      <td>檀家・信徒・一般向け</td>
                      <td>僧侶向け</td>
                    </tr>
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray bg-lgray">素材</th>
                      <td>華美でないもの<br>（自然木・木の実など）</td>
                      <td>高価なもの<br>（白水晶・真珠など）</td>
                    </tr>
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray bg-lgray">房</th>
                      <td>丸い（菊房・玉房）</td>
                      <td>切り房<br>（希望の長さで切ったもの）</td>
                    </tr>
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray bg-lgray">房の長さ</th>
                      <td>短房（普通の長さ）</td>
                      <td>中房（少し長い）<br>長房（長い）</td>
                    </tr>
                  </table>
                </div>

                  <li class="font-size-1_2 font-weight-bold line-height-1_7">法要に使用する物品</li>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    日蓮宗全体で見れば法要で使用する物品に大きな差はありませんが、宗派によっては仏花を供えない場合や、樒（しきみ）を供える場合などがあります。宗派ごとに独自の物品が必要になることもあるので、葬儀社に確認しておきましょう。
                  </p>
                </ol>
              </div>
            </section>

            <section id="04" class="pt-4 pb-5">
              <div class="pb-3">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto text-center mr-3">
                    <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">4</div>
                  </div>
                  <div class="col-9 col-lg-10">
                    <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">法要の流れ</h3>
                  </div>
                </div>
              </div>

                <p class="font-size-lg-1_1 line-height-1_7">
                  ここからは日蓮宗の法要の流れについて説明していきます。<br>
                  ※法要の流れ自体は他宗派もほぼ同様です。
                </p>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">法要の準備：2～3か月前</p>
                  <div class="pt-2 pb-3 number">
                    <ol>
                        <li class="font-size-1_2 font-weight-bold line-height-1_7">日程を決める</li>
                        <p class="font-size-lg-1_1 line-height-1_7">寺院や僧侶に連絡して日程を決めます。人が集まりやすい土日に法要が集中することが多いため、できるだけ早めに連絡しましょう</p>

                        <li class="font-size-1_2 font-weight-bold line-height-1_7">会場と参列者の人数を決める</li>
                        <p class="font-size-lg-1_1 line-height-1_7">会場は葬祭会館、寺院、自宅などがあります。法要後の会食の場所まで決めて予約を取ります。</p>

                        <li class="font-size-1_2 font-weight-bold line-height-1_7">案内状を送付する</li>
                        <p class="font-size-lg-1_1 line-height-1_7">身内だけで行う場合は電話やメールでの連絡でも良いですが、そうでない場合は案内状を送りましょう。</p>
                    </ol>
                  </div>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">法要の準備：2週間前</p>
                  <p class="font-size-lg-1_1 line-height-1_7">参列者の人数を確定し、会食や引き物（返礼品）の手配をします。</p>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">法要の準備：1週間前～前日</p>
                  <p class="font-size-lg-1_1 line-height-1_7">お布施、供物、花、線香などを用意しておきます。</p>
                </div>

                <div class="pt-2 pb-3">
                  <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">当日の流れ</p>

                  <div class="bg-lgray p-4 number mb-4">
                    <ol>
                      <li class="font-size-1_2 line-height-1_7 mb-2">僧侶の入場</li>
                      <li class="font-size-1_2 line-height-1_7 mb-2">開式の挨拶（施主）</li>
                      <li class="font-size-1_2 line-height-1_7 mb-2">僧侶の読経</li>
                      <li class="font-size-1_2 line-height-1_7 mb-2">焼香</li>
                      <li class="font-size-1_2 line-height-1_7 mb-2">僧侶の法話</li>
                      <li class="font-size-1_2 line-height-1_7 mb-2">お墓参り ※お墓の近くで行う場合</li>
                      <li class="font-size-1_2 line-height-1_7 mb-2">閉式の挨拶（施主）</li>
                      <li class="font-size-1_2 line-height-1_7">会食</li>
                    </ol>
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
                    <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">法要のタイミング</h3>
                  </div>
                </div>
              </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-lg-1_1 line-height-1_7">
                    一般的な法要のタイミングをご説明いたします。日蓮宗もほぼ同じです。
                  </p>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>初七日法要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    初七日法要とは、命日を含めて7日目に行う法要のことです。（葬儀や火葬を行った日が基準になっている訳ではありません）<br>
                    初七日は、故人が三途の川のほとりに到達する日とされており、川の流れの緩い場所と激しい場所、どちらを渡らされるか判断される日と言われています。故人が緩やかな流れを渡らせてもらえるよう手を合わせて祈ります。<br>
                    もっとも、現在は、初七日法要を葬儀と同日に行うことが一般的になっています。<br>
                    これは、葬儀後に再び参列者やご遺族が集まらなければならないのは、時間的・金銭的負担が大きい等の理由によるものです。
                  </p>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>四十九日法要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    四十九日法要は、故人の命日を含んで49日目に行われる法要で、忌日法要の中でも最も重要な法要です。故人の魂は、亡くなってから七日ごとに生前犯した罪を閻魔様に裁かれ、四十九日に来世の行き先が決定されるのです。そのため、審判の日である四十九日には、故人の魂が極楽浄土へ行けることを祈って法要を執り行うのです。<br>
                    <br>
                    また、日蓮宗は「南無妙法蓮華経」の題目を唱えることで誰でも四十九日に成仏できるという考えを持っているため、四十九日法要は祝いの一つと捉えられる面もあります。
                  </p>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>開眼供養</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    新しく位牌（本位牌）や仏壇を用意した場合は、四十九日法要と一緒に「開眼供養」を執り行うのが一般的です。開眼供養とは、仏壇・位牌・お墓などに故人の魂を込めるための儀式で、開眼供養を行っていない仏壇や位牌は単なる「物」に過ぎません。<br>
                    四十九日は故人が成仏する日のため、このタイミングで白木位牌を本位牌に変え、開眼供養を行うのです。<br>
                    <br>
                    日蓮宗で開眼供養を行う際は、日蓮宗が推薦するご本尊である法華曼荼羅「臨滅度時本尊（りんめつどじのほんぞん）」か、菩提寺のご住職が書写された御本尊をおまつりします。
                  </p>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>百箇日（ひゃっかにち）法要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    百箇日法要とは、故人の命日から百日目に行う法要のことです。別名「卒哭忌（そっこくき）」とも呼ばれ、遺族が「哭（声を上げて泣くこと）」を「卒（終える）」という意味があります。遺族が故人を亡くした悲しみに区切りをつけ、日常に戻るための法要です。<br>
                    ただし、現在では四十九日法要と一緒に執り行われたり、省略されることもあります。
                  </p>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>年忌法要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    「一周忌」は故人の命日から１年後に行う法要で、年忌法要の中でも最も重要とされている法要です。遺族や親族、友人、知人などを招いて行います。三回忌からは数え年での実施となり、3と7がつく年忌に法要を行います。<br>
                    <br>
                    また、日蓮宗では、忌明けの四十九日で故人は成仏していると考えられているため、弔い上げという概念はありません。ただし、他の宗派と同様に三十三回忌を一つの締めくくりとすることが一般的です。
                  </p>

                  <div class="pb-2 mb-2">
                    <table border="1" class="col-12 text-center">
                      <tr class="color-dgray bg-lgray">
                        <th class="col-3 col-lg-3 font-size-1_2">法要</th>
                        <th class="col-3 col-lg-3 font-size-1_2">時期</th>
                      </tr>
                      <tr>
                        <td>一周忌</td>
                        <td>満1年目</td>
                      </tr>
                      <tr>
                        <td>三回忌</td>
                        <td>満2年目</td>
                      </tr>
                      <tr>
                        <td>七回忌</td>
                        <td>満6年目</td>
                      </tr>
                      <tr>
                        <td>十三回忌</td>
                        <td>満12年目</td>
                      </tr>
                      <tr>
                        <td>十七回忌</td>
                        <td>満16年目</td>
                      </tr>
                      <tr>
                        <td>二十三回忌 ※</td>
                        <td>満22年目</td>
                      </tr>
                      <tr>
                        <td>二十七回忌 ※</td>
                        <td>満26年目</td>
                      </tr>
                      <tr>
                        <td>三十三回忌</td>
                        <td>満32年目</td>
                      </tr>
                    </table>
                  </div>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    ※二十三回忌と二十七回忌をまとめて二十五回忌として執り行う場合があります。
                  </p>
                </div>

            </section>

            <section id="06" class="pt-4 pb-5">
              <div class="pb-3">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto text-center mr-3">
                    <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">6</div>
                  </div>
                  <div class="col-9 col-lg-10">
                    <h3 class="font-size-1_4 font-size-lg-2 line-height-1 font-weight-bold color-dgray">法要で必要なもの（施主）<br><span class="font-size-1_2">※「施主」=法事の主催者のこと</span></h3>
                  </div>
                </div>
              </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>年忌法要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    年忌法要で一般的に必要となるものです。
                  </p>

                    <div class="pb-2 mb-2">
                      <table border="1" class="col-12">
                        <tr class="color-dgray bg-lgray">
                          <th class="col-3 col-lg-3 font-size-1_2 text-center">必要なもの</th>
                          <th class="col-8 col-lg-8 font-size-1_2 text-center">手配方法</th>
                        </tr>
                        <tr>
                          <td class="text-center">本位碑</td>
                          <td>四十九日法要で白木位牌から交換した位牌</td>
                        </tr>
                        <tr>
                          <td class="text-center">遺影</td>
                          <td>葬儀で使用した写真</td>
                        </tr>
                        <tr>
                          <td class="text-center">本堂供花</td>
                          <td>葬儀社・生花店などに手配</td>
                        </tr>
                        <tr>
                          <td class="text-center">本堂供え物</td>
                          <td>葬儀社・生花店などに手配</td>
                        </tr>
                        <tr>
                          <td class="text-center">墓用供花</td>
                          <td>葬儀社・生花店などに手配</td>
                        </tr>
                        <tr>
                          <td class="text-center">墓用線香</td>
                          <td>葬儀社・寺院などに手配</td>
                        </tr>
                      </table>
                    </div>

                    <p class="font-size-lg-1_1 line-height-1_7">
                      ※日蓮宗で使用する花は、派手過ぎる色合いでなければ基本的には問題ありません。ただし、宗派によっても異なるため、葬儀社に任せた方が安心です。
                    </p>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>四十九日法要</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    四十九日法要では、年忌法要で必要なものに加えて<span class="color-pink font-weight-bold">「白木位牌」</span>と<span class="color-pink font-weight-bold">「本位牌」</span>の2つが必要です。<br>
                    「白木位牌」とは、葬儀の際に祭壇に安置する仮の位牌のことで、忌明けとなる四十九日法要でこの「白木位牌」から「本位牌」へと置きかえます。置き換えの際には白木位牌から故人の魂を抜き取り、本位牌に魂を入れる閉眼供養・開眼供養を行います。
                  </p>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5 box">■</span>四十九日や一周忌などで納骨も行う場合</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    納骨を行う場合は、その法要に必要な物品に加えて「ご遺骨」と「埋葬許可証」（正確には火葬場から返却された火葬許可証）が必要です。納骨するまで「埋葬許可証」を紛失しないよう気をつけましょう。
                  </p>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5 box">■</span>お布施（全ての法要に必要）</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    お布施とは、本来は各宗派のご本尊に収める金品ですが、法要では読経や法話などへの感謝の気持ちを込めて僧侶へお渡しする金銭です。お布施の目安については日蓮宗も他宗派と変わりませんが、そもそもお布施は感謝の「気持ち」を表したものであり、明確な基準がある訳ではありません。迷うようであれば菩提寺とお付き合いのある親族や、葬儀社に相談しましょう。
                  </p>

                  <div class="pb-2 mb-2">
                    <table border="1" class="col-12">
                      <tr class="color-dgray bg-lgray">
                        <th class="col-5 col-lg-5 font-size-1_2 text-center">法要の種類</th>
                        <th class="col-3 col-lg-3 font-size-1_2 text-center">お布施の目安</th>
                      </tr>
                      <tr>
                        <td>四十九日法要・一周忌（納骨法要を含まない）</td>
                        <td class="text-center">3万円～5万円</td>
                      </tr>
                      <tr>
                        <td>四十九日法要・一周忌（納骨法要を含む）</td>
                        <td class="text-center">3万円～10万円</td>
                      </tr>
                      <tr>
                        <td>三回忌～</td>
                        <td class="text-center">1万円～5万円</td>
                      </tr>
                    </table>
                  </div>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    ※二十三回忌と二十七回忌をまとめて二十五回忌として執り行う場合があります。
                  </p>
                </div>
            </section>

            <section id="07" class="pt-4 pb-5">
              <div class="pb-3">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto text-center mr-3">
                    <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">7</div>
                  </div>
                  <div class="col-9 col-lg-10">
                    <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">香典について（参列者）</h3>
                  </div>
                </div>
              </div>

              <p class="font-size-lg-1_1 line-height-1_7">
                「香典」とは、線香や花の代わりに故人の霊前に供える金品のことで、ご遺族の急な出費を互いに助け合う相互扶助の意味もあります。<br>
                日蓮宗に特別な香典のマナーはありませんが、一つだけ注意すべき点があります。それは、四十九日法要以降は、香典の表書きを<span class="color-pink font-weight-bold">「御仏前」</span>または<span class="color-pink font-weight-bold">「御香典」</span>と記載することです。日蓮宗では、故人は四十九日に成仏すると考えられているため、<span class="color-pink font-weight-bold">「御霊前」</span>とは書かないように気をつけましょう。
              </p>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-2"><span class="color-plan5 box">■</span>香典の書き方</p>

                    <div class="pb-2 mb-2">
                      <table border="1" class="col-12">
                        <tr class="color-dgray bg-lgray text-center">
                          <th class="col-3 col-lg-3 font-size-1_2">項目</th>
                          <th class="col-8 col-lg-8 font-size-1_2">マナー</th>
                        </tr>
                        <tr>
                          <td class="text-center">不祝儀袋</td>
                          <td>蓮の花が印刷されたもの、または白無地</td>
                        </tr>
                        <tr>
                          <td class="text-center">水引</td>
                          <td>「黒白」または「双銀」の結びきり</td>
                        </tr>
                        <tr>
                          <td class="text-center">表書き</td>
                          <td>[水引上段]<br>四十九日法要まで：「<span class="color-pink font-weight-bold">御霊前</span>」または「御香典」<br>四十九日法要以降：「<span class="color-plan5 font-weight-bold">御仏前</span>」または「御香典」<br>
                            <br>
                            [水引下段]<br>中央に名前（フルネーム）を記載</td>
                        </tr>
                        <tr>
                          <td class="text-center">中袋</td>
                          <td>葬儀社・生花店などに手配</td>
                        </tr>
                        <tr>
                          <td class="text-center">筆記方法</td>
                          <td>葬儀社・生花店などに手配</td>
                        </tr>
                      </table>
                    </div>
                </div>

                <div class="pt-2 pb-4">
                  <p class="font-size-1_2 font-size-lg-1_4 line-height-1 mb-1"><span class="color-plan5">■</span>香典の目安</p>
                  <p class="font-size-lg-1_1 line-height-1_7">
                    基本的には配偶者の親族も同様ですが、配偶者の「両親」の一周忌のみ１万円～３万円が目安となります。
                  </p>

                  <div class="pb-2 mb-5">
                    <table border="1" class="col-12 text-center">
                      <tr class="color-dgray bg-lgray">
                        <th class="col-3 col-lg-3 font-size-1_2">故人との関係</th>
                        <th class="col-4 col-lg-4 font-size-1_2">香典（参列）</th>
                        <th class="col-4 col-lg-4 font-size-1_2">香典（一周忌）</th>
                      </tr>
                      <tr>
                        <td>両親</td>
                        <td>5万円～10万円</td>
                        <td>1万円～5万円 ※</td>
                      </tr>
                      <tr>
                        <td>祖父母</td>
                        <td>1万円～3万円</td>
                        <td>1万円～3万円</td>
                      </tr>
                      <tr>
                        <td>兄弟姉妹</td>
                        <td>3万円～5万円</td>
                        <td>1万円～3万円</td>
                      </tr>
                      <tr>
                        <td>親戚のおじ、おば</td>
                        <td>1万円～2万円</td>
                        <td>1万円～3万円</td>
                      </tr>
                      <tr>
                        <td>遠い親戚</td>
                        <td>5千～1万円</td>
                        <td>1万円～3万円</td>
                      </tr>
                      <tr>
                        <td>元上司</td>
                        <td>5万円</td>
                        <td>1万円</td>
                      </tr>
                    </table>
                  </div>

                  <div class="pt-4 pb-5">
                    <a href="<?php echo appConfigSite::sitemap['column']['path']; ?>condolence_gift" class="a-column">
                    <div class="bg-column w-lg-90per rounded-half p-3 border-orange position-relative m-auto">
                      <div class="arrow-column">
                      <div class="d-inline-block bg-orange rounded-pill color-white p-1 pl-3 pr-3 font-size-1 connection">関連記事</div>
                        <div class="row no-gutters pt-2">
                          <div class="col-4 col-lg-3">
                            <img src="/assets/img/column/condolence_gift.png" alt="香典の書き方" class="w-100 pr-4">
                          </div>
                          <div class="col-8 col-lg-9 pr-3">
                            <p class="font-size-1_2 font-size-lg-1_4 line-height-1 font-weight-bold">香典の書き方 <span class="font-size-1">～基本マナーと注意点を徹底解説～</span></p>
                            <p class="ellipsis font-size-1 font-size-lg-1 line-height-1_4">香典袋の書き方には、「どのような筆記用具を使うのか？」「どのように書けばいいのか？」など気をつけるべきポイントが複数あり、慣れるまでは難しいと感じる方が多いと思います。</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                </div>

                </div>
            </section>

        <section id="08" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">8</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">まとめ</h3>
              </div>
            </div>
          </div>
            <p class="font-size-lg-1_1 line-height-1_7">
              いかがでしたでしょうか。日蓮宗には他宗派には無い考え方・特徴がありますが、マナーや作法が大きく違う訳ではありません。焼香や香典など、いくつかの違いさえ把握していれば困ることはありませんので、心配せずに参列しましょう。
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
