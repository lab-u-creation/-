<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnother::column['wake']['name'];
appConfigPage::$css = <<<EOF
<style>
  table{
    table-layout: fixed;
  }
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<header class="pt-3 pb-3 pb-lg-4">
<div class="container">
  <div class="font-size-1_4 font-size-lg-2_4 line-height-1 border-contrast-left pl-3 color-dgray font-weight-bold">
    <?php echo appConfigColumnother::column['wake']['name']; ?><br>
  </div>
</div>
</header>

<div class="container p-0">
  <div class="row no-gutters">
    <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

      <div class="border-top pt-4 pb-5">
          <p class="font-size1_1 line-height-1_7">
            皆さんは「喪主」と聞くとどのようなイメージをお持ちになるでしょうか。詳しくは分からなくても、葬儀でのご挨拶や弔問客の対応など、何となく大変そうなイメージを持つ方が多いのではないでしょうか。そこで、今回は「通夜」での喪主の役割や立ち振る舞いについて解説していきます。
          </p>

        <div class="pt-4 pb-3">
          <div class="bg-llyellow pt-3 pb-3 pr-4 pl-4 pr-lg-5 pl-lg-5 border-orange">
            <p class="font-size-1_2 font-size-lg-1_4 line-height-1_7 text-center">目次</p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">1. <a href="#01" class="font-size-1_1 font-size-lg-1_2"><u>「通夜」「喪主」とは？</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">2. <a href="#02" class="font-size-1_1 font-size-lg-1_2"><u>通夜の進行と喪主の役割</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">3. <a href="#03" class="font-size-1_1 font-size-lg-1_2"><u>通夜で挨拶する場合の注意点</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">4. <a href="#04" class="font-size-1_1 font-size-lg-1_2"><u>通夜での喪主の挨拶（例文）</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">5. <a href="#05" class="font-size-1_1 font-size-lg-1_2"><u>「通夜」での喪主の服装・持ち物について</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2">6. <a href="#06" class="font-size-1_1 font-size-lg-1_2"><u>まとめ</u></a></p>
          </div>
        </div>

        <section id="01" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「通夜」「喪主」とは？</h3>
              </div>
            </div>
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-lg-1_1 line-height-1_7">喪主の役割について詳しく説明する前に、「通夜」「喪主」とは何なのかをご説明いたします。</p>
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">通夜</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              通夜とは、葬儀・告別式の前夜に、親族や親しい友人など故人とゆかりの深い人々が集まり、故人との別れを惜しむ儀式です。夜通し故人に付き添い、灯明と線香の火を絶やさないようにする習わしから「夜伽（よとぎ）」とも呼ばれていましたが、現在は1～2時間程度で終わる「半通夜」が主流になっています。
            </p>
          </div>

          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">喪主</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              喪主とは、遺族の代表者であり、葬儀全般の主催者のことです。葬儀を取り仕切り、参列者や僧侶への対応も行います。一般的には故人との関係性が最も近い方（子供や配偶者など）が努めます。
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">通夜の進行と喪主の役割</h3>
              </div>
            </div>
          </div>

          <div class="m-auto pb-4 p-0 col-md-9">
            <img src="/assets/img/column/wake.png" alt="喪主" class="w-100 pl-lg-4">
          </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">通夜の進行の最終確認</p>
              <p class="font-size-lg-1_1 line-height-1_7">通夜の開式時刻の2時間ほど前には会場入りし、会場の確認や受付係との顔合わせ、僧侶のお出迎え、返礼品や礼状の内容・数の確認などを行います。通夜の進行についても最終確認を行います。</p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">受付</p>
              <p class="font-size-lg-1_1 line-height-1_7">通夜の開式時刻の30分～1時間前から受付を開始します。受付は弔問客の名前の確認や、香典の受け取り、返礼品のお渡しなどが主な仕事ですが、他にもトイレの場所の案内など細やかな気配りが必要な仕事です。そのため、事前に信頼のおける方を人選し、お声掛けしておく必要があります。遺族は参列者の対応や通夜の進行などがあるため、遠い親戚や喪主の友人・知人、故人の同僚などにお願いするのが一般的です。</p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">通夜</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                開式時刻の5分程前に僧侶が入場し、定刻になると通夜が始まります。進行は主に葬儀社の担当者が行うため、喪主は進行を把握しておく程度で問題ありません。<br>
                <br>
                一般的な席順は、祭壇に向かって右側が親族席、左側が一般席、それぞれ通路側が上座となります。親族席は故人との血縁関係が深かった順に座り、一般席は故人との関係が深かった順に座っていきます。<br>
                例えば、親族席であれば最前列の通路側が喪主、その右側に遺族、続いて親族の順になります。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">読経、焼香</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                続いて僧侶が読経を行います。30分ほど経過したタイミングで司会者から焼香を促されますので、まずは喪主から焼香を行いましょう。<br>
                喪主の焼香が終わったら、続いてご遺族→近親者→一般葬弔問客の順に焼香を行います。なお、この順番は席順と同様です。（故人との関係が深い順）焼香が終わると僧侶は退出し、葬儀によっては続けて喪主が挨拶を行います。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">通夜終了</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                焼香が終わると僧侶が退場し、通夜は終了となります。通夜の所要時間は、参列者の人数によっても前後しますがおおむね１時間程度です。
              </p>
            </div>

            <div class="pt-2 pb-2">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">通夜振る舞い</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                通夜終了後、通夜振る舞いの席に移動します。通夜振る舞いとは、通夜の後に摂る食事のことで、僧侶や弔問客に対して感謝の意を表すと共に、故人と共にする最後の食事という意味があります。僧侶が同席を辞退された場合は代わりに「御前料」をお渡しします。御前料の相場は地域や宗派によって異なりますが、一般的には五千円～一万円程度です。
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">通夜で挨拶する場合の注意点</h3>
              </div>
            </div>
          </div>

          <div class="m-auto pb-4 p-0 col-md-9">
            <img src="/assets/img/column/pic_greeting.png" alt="挨拶" class="w-100 pl-lg-4">
          </div>
          <div class="pt-2 pb-2">
            <p class="font-size-lg-1_1 line-height-1_7">通夜で僧侶が退場した後、最後に喪主が挨拶をする場合があります。ここでは挨拶時の注意点を記載いたします。</p>
          </div>

          <div class="pt-2 pb-3 column-number">
            <ol>
                <li class="font-size-1_2 font-weight-bold line-height-1_7">時間</li>
                <p class="font-size-lg-1_1 line-height-1_7">通夜は始まる時刻も夕刻のため、あまり長くならないよう注意が必要です。以下の項目を含め、<span class="color-pink font-weight-bold">3分程度</span>にまとめると良いでしょう。</p>
                <div class="bg-lgray mb-5">
                  <div class="p-4">
                    <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">参列者への感謝</span></p>
                    <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">故人のエピソード（簡潔に）</span></p>
                    <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">通夜振る舞いの案内</span></p>
                    <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">葬儀・告別式の案内</span></p>
                  </div>
                </div>

                <li class="font-size-1_2 font-weight-bold line-height-1_7">メモ</li>
                <p class="font-size-lg-1_1 line-height-1_7 mb-5">
                  人前で話すことが苦手な方や、大切な方を亡くして動揺している方にとって、喪主の挨拶はとても難しく感じるかもしれません。ですが、通夜の挨拶は<span class="color-pink font-weight-bold">メモを見ながら話しても失礼には当たりません</span>。<br>
                  それよりも、忌み言葉や重ね言葉を使ってしまうことの方が失礼に当たります。無理に暗記する必要もないので、メモをうまく活用しましょう。<br>
                  また、喪主が人前に立てるような状態に無い場合は、別の方が挨拶をしても問題ありません。
                </p>

                <li class="font-size-1_2 font-weight-bold line-height-1_7">内容は告別式と同じでOK</li>
                <p class="font-size-lg-1_1 line-height-1_7">
                  以前は通夜と葬儀・告別式の両方に参列される方が多かったのですが、最近ではどちらか一方にしか参列しない方が増えています。そのため、挨拶の内容は葬儀・告別式と同じで構いません。ただし、以下の点には注意しましょう。
                </p>
                <div class="bg-lgray mb-5">
                  <div class="p-4">
                    <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-pink">通夜の挨拶には必ず葬儀・告別式の案内を入れる。</span></p>
                    <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-pink">故人の長めのエピソードは葬儀・告別式の挨拶に含める。</span></p>
                  </div>
                </div>

                <li class="font-size-1_2 font-weight-bold line-height-1_7">忌み言葉や重ね言葉に注意</li>
                <p class="font-size-lg-1_1 line-height-1_7">
                  不吉なことを連想させる言葉や、生死を直接的に連想させる言葉を「忌み言葉」と呼びます。古代日本では、言葉には特別な霊力が宿っており（「言霊（ことだま）」といいます）、発した言葉通りの結果を実現する力があると考えられていました。そのため、縁起の良くない言葉は口にしないような風習があったのです。悲しみの中にあるご遺族を傷つけたり、不快な思いにさせてしまうこともあるので注意が必要です。<br>
                  <br>
                  また、不幸が重なることを連想させる「重ね言葉」も喪主の挨拶ではふさわしくありません。うっかり使わないように気をつけましょう。
                </p>

                  <div class="row no-gutters pt-2 pb-2">
                    <div class="col-12 col-sm-6 p-2 position-relative">
                      <div class="bg-llyellow border-gray rounded-1 p-3">
                        <p class="font-size-1_4 line-height-1_7 font-weight-bold text-center p-2">忌み言葉</p>
                          <table class="col-12 m-auto text-center">
                            <tr>
                              <td class="p-2">死亡</td>
                              <td class="p-2">生存中</td>
                              <td class="p-2">急死</td>
                            </tr>
                            <tr>
                              <td class="p-2">迷う</td>
                              <td class="p-2">浮かばれない</td>
                              <td class="p-2">続いて</td>
                            </tr>
                          </table>
                          <table class="col-12 col-lg-9 m-auto text-center">
                            <tr>
                              <td class="p-2" style="width:30%;">追って</td>
                              <td class="p-2">再び</td>
                              <td class="p-2">四</td>
                              <td class="p-2">九</td>
                            </tr>
                          </table>
                      </div>
                    </div>

                    <div class="col-12 col-sm-6 p-2 position-relative">
                      <div class="bg-llyellow border-gray rounded-1 pt-3 pb-3 pl-3 pr-3 pl-lg-4 pr-2">
                        <p class="font-size-1_4 line-height-1_7 font-weight-bold text-center p-2">重ね言葉</p>
                          <div class="row no-gutters">
                            <table class="col-9 col-sm-9 col-lg-7 text-center">
                              <tr>
                                <td class="p-2">次々</td>
                                <td class="p-2">重ね重ね</td>
                              </tr>
                              <tr>
                                <td class="p-2">しばしば</td>
                                <td class="p-2">いよいよ</td>
                              </tr>
                              <tr>
                                <td class="p-2">ますます</td>
                                <td class="p-2">たびたび</td>
                              </tr>
                            </table>
                            <div class="col-12 col-sm-12 col-lg-5">
                              <img src="/assets/img/column/cross_mark.png" alt="バツ" class="w-30per w-lg-100per pl-2 position-absolute" style="bottom:-16px;right:-5px;">
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>

                  <p class="font-size-lg-1_1 line-height-1_7 pt-2">
                    忌み言葉や重ね言葉を使いたい場合は言い換えが有効です。例を記載いたします。
                  </p>

                  <div class="bg-lgray mb-4">
                    <div class="p-4">
                      <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">「死亡」 → 「亡くなる」「逝去」「他界」</span></p>
                      <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">「急死」 → 「急逝」「突然の事」</span></p>
                      <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">「生存中」 → 「ご生前」「お元気だった頃」</span></p>
                      <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">「次々」 → 「たくさん」</span></p>
                      <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">「重ね重ね」 → 「深く」「加えて」</span></p>
                      <p class="font-size-lg-1_1 line-height-1_7 list-item color-gray"><span class="color-dgray">「ますます」 → 「さらに」「もっと」</span></p>
                    </div>
                  </div>

                  <p class="font-size-lg-1_1 line-height-1_7 pt-2">
                    分からない時や自信が無い時は、葬儀社の担当者に相談してみましょう。
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
                  <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">通夜での喪主の挨拶（例文）</h3>
                </div>
              </div>
            </div>

            <div class="pt-2 pb-2">
              <p class="font-size-lg-1_1 line-height-1_7">
                通夜での喪主の挨拶は、下記の5つの内容を含めて作成します。<br>
                状況によりそれぞれの長さを変更しますが、❷故人のエピソードは簡潔に記載します。長めのエピソードは葬儀・告別式のご挨拶に入れましょう。
              </p>
            </div>

            <div class="bg-lgray p-4 column-number mb-4">
              <ol>
                <li class="font-size-1_2 line-height-1_7 mb-2">弔問に対するお礼</li>
                <li class="font-size-1_2 line-height-1_7 mb-2">故人のエピソード（簡潔に）</li>
                <li class="font-size-1_2 line-height-1_7 mb-2">通夜振る舞いの案内</li>
                <li class="font-size-1_2 line-height-1_7 mb-2">葬儀・告別式の案内</li>
                <li class="font-size-1_2 line-height-1_7">お礼</li>
              </ol>
            </div>
            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">例文1（一般的な挨拶）</p>
              <p class="font-size-lg-1_1 line-height-1_7 font-weight-bold mb-1">死因は言わなくても問題ありません。</p>
              <div class="border-gray p-3">
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ① 本日はご多忙の中、母○○のために参列いただき、誠にありがとうございました。<br>
                  こうして皆様にお集まりいただき、母もさぞ喜んでいることと思います。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ② 母は１年程前から乳がんの治療のため入院しておりましたが、〇月〇日、容体が急変し、眠るように息を引き取りました。享年○○歳でございました。<br>
                  家族一同まだ信じられない気持ちですが、皆様のお陰で充実した生涯だったと存じております。<br>
                  生前、皆さまには様々なご配慮をいただきまして、改めて深く感謝申し上げます。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ③ 亡き母の思い出話などをお聞かせいただきたく、心ばかりではありますが、別室にお食事の席をご用意いたしました。お時間の許す方は、是非お召し上がりいただきたく存じます。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ④ なお、葬儀・告別式は、明日の11時より当斎場にて執り行いますので、よろしくお願いいたします。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ⑤ 本日は誠にありがとうございました。
                </p>
              </div>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">例文2（手短にする時）</p>
              <p class="font-size-lg-1_1 line-height-1_7 font-weight-bold mb-1">手短にしたい場合、「②故人のエピソード」を省略しましょう。</p>
              <div class="border-gray p-3">
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ① 本日はお忙しい中、ご足労いただき、誠にありがとうございます。<br>
                  また、父への生前のご厚情に、心より感謝申し上げます。<br>
                  亡き父に代わり、お礼申し上げます。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ④ なお、葬儀・告別式は明日11時より当斎場にて執り行いますので、ご都合がよろしければ、ご参列くださいますようお願いいたします。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ③ この後、心ばかりではありますが、別室にお食事の席を設けております。お時間の許す方は今しばらくお付き合いいただき、在りし日の故人の思い出話などお聞かせいただければと存じます。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ⑤ 本日は誠にありがとうございました。
                </p>
              </div>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">例文３（通夜振る舞いの挨拶）</p>
              <p class="font-size-lg-1_1 line-height-1_7 font-weight-bold mb-1">通夜振る舞いの場合はご挨拶に以下の内容を盛り込みます。</p>
              <div class="bg-lgray pt-4 pb-4 pl-3 pr-3 pl-lg-4 pr-lg-4 column-number mb-4">
                <ol>
                  <li class="font-size-lg-1_2 font-weight-bold line-height-1_7 mb-2">弔問に対するお礼</li>
                  <li class="font-size-lg-1_2 font-weight-bold line-height-1_7 mb-2">終了案内</li>
                  <li class="font-size-lg-1_2 font-weight-bold line-height-1_7 mb-2">葬儀・告別式の案内</li>
                  <li class="font-size-lg-1_2 font-weight-bold line-height-1_7">お礼</li>
                </ol>
              </div>

              <p class="font-size-lg-1_1 line-height-1_7 font-weight-bold m-1 color-pink">通夜振る舞いの閉式の挨拶では、参列者の帰路を気遣う文を付け加えましょう。</p>
              <div class="border-gray p-3">
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ① 本日はお忙しい中、お集まりいただきまして、ありがとうございました。<br>
                  皆様から父との思い出話をお聞かせいただき、生前、父がどれほど皆さまにお世話になっていたかを改めて知ることができました。亡き父に代わり、厚く御礼申し上げます。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ② 名残惜しくはございますが、夜も更けてまいりましたので、本日はこの辺りで終了とさせていただきます。どうか足元にお気を付けてお帰りください。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ③ なお、葬儀・告別式は、明日11時より当斎場で執り行う予定です。ご都合がよろしければご参列くださいますようお願いいたします。
                </p>
                <p class="font-size-lg-1_1 line-height-1_7 pl-4" style="text-indent:-1.4rem;">
                  ④ 本日はありがとうございました。
                </p>
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「通夜」での喪主の服装・持ち物について</h3>
              </div>
            </div>
          </div>

          <div class="m-auto pb-4 p-0 col-md-9">
            <img src="/assets/img/column/pic_benefits02.png" alt="通夜の小物" class="w-100 pl-lg-4">
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">通夜での服装</p>
              <p class="font-size-lg-1_1 line-height-1_7">通夜での喪主の服装は準喪服が一般的です。準喪服とは、男性はブラックスーツ、女性は黒のワンピース、アンサンブル等のブラックフォーマルが該当します。</p>

              <div class="pt-2 pb-3">
                <p class="font-size-1_2 ine-height-1 mb-1"><span class="color-plan5">■</span>男性</p>
                <p class="font-size-lg-1_1 line-height-1_7">ブラックスーツ。Yシャツは白、ネクタイは黒、ネクタイピンは付けません。靴やバッグ等の小物も黒（光沢のない落ち着いた黒）が基本になります。派手なデザインのものはNGです。</p>
              </div>

              <div class="pt-2 pb-3">
                <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>女性</p>
                <p class="font-size-lg-1_1 line-height-1_7">黒のワンピース、アンサンブル等のブラックフォーマル。<br>
                  靴・ストッキング・ヘアゴム・バッグ等の小物も黒（光沢のない落ち着いた黒）で統一し、メイクはナチュラルメイク（ノーメイクはNG）、アクセサリーは結婚指輪と、一連の真珠のネックレスのみOKです。<br>
                </p>
              </div>
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">持っていくと良いもの</p>
              <div class="pt-2 pb-3">
                <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>数珠</p>
                <p class="font-size-lg-1_1 line-height-1_7">
                  数珠には108つの煩悩を払い、身を護る功徳などがあるとされており、お守りの意味もあるため、<span class="color-pink font-weight-bold">他人との貸し借りはできません</span>。<br>
                  また、数珠には「本式数珠」と「略式数珠」があり、「本式数珠」は宗派ごとに珠や房の形が異なる正式な数珠、「略式数珠」は宗派のこだわりなく使える略式の数珠です。近年は略式数珠の持参が一般的になっていますが、男性用と女性用があるので気をつけましょう。
                </p>
              </div>

              <div class="pt-2 pb-3">
                <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>ハンカチ</p>
                <p class="font-size-lg-1_1 line-height-1_7">涙や汗を拭くのに利用します。色は白か黒、素材は綿・麻・ポリエステル等（タオル生地や光沢のあるシルクは不可）、デザインはできるだけ無地のものを選びます。地味なものであれば刺繍やレースがついていてもOKです。</p>
              </div>

              <div class="pt-2 pb-3">
                <p class="font-size-1_2 ine-height-1 mb-1"><span class="color-plan5">■</span>メモ帳と筆記用具</p>
                <p class="font-size-lg-1_1 line-height-1_7">葬儀社との打ち合わせの際や、参列者から大切な話を聞いた時、喪主挨拶での利用など幅広く使用できます。ポケットに入るサイズのものを持っておくと便利です。</p>
              </div>
          </div>

          </section>

          <section id="06" class="pt-4 pb-5">
            <div class="pb-3">
              <div class="row align-items-center no-gutters">
                <div class="col-auto text-center mr-3">
                  <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">6</div>
                </div>
                <div class="col-9 col-lg-10">
                  <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">まとめ</h3>
                </div>
              </div>
            </div>
              <p class="font-size-lg-1_1 line-height-1_7">
                通夜で喪主が行うべきことは数多くありますが、予めやるべき事は決まっています。準備や進行はほとんど葬儀社が行ってくれるので、分からないことや不安なことがあればどんどん質問しましょう。<br>
                <br>
                また、喪主として最も重要なことは、<span class="color-pink font-weight-bold">故人に代わり、参列して下さった方々へ感謝の気持ちを伝えるということです</span>。<br>
                故人が生前にお世話になったことや、忙しい中参列して下さったこと、頂戴したねぎらいの言葉など、参列者に感謝すべきことはたくさんあります。綺麗な言葉を並べるよりも、自分の言葉で伝えることを意識すると良いでしょう。
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
