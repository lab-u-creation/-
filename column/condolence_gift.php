<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnother::column['condolence_gift']['name'];
appConfigPage::$css = <<<EOF
<style>
@media (max-width:991px) {
  .order_1{
    order: 2;
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
    <?php echo appConfigColumnother::column['condolence_gift']['name']; ?><br>
    <span class="font-size-1 font-size-lg-1_2"><?php echo appConfigColumnother::column['condolence_gift']['sub']; ?></span>
  </div>
</div>
</header>

<div class="container p-0">
  <div class="row no-gutters">
    <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

      <div class="border-top pt-4 pb-5">
          <p class="font-size-lg-1_1 line-height-1_7">
            香典袋の書き方には、「どのような筆記用具を使うのか？」「どのように書けばいいのか？」など気をつけるべきポイントが複数あり、慣れるまでは難しいと感じる方が多いと思います。そこで、使用する筆記用具の種類から香典袋の選び方まで、香典についてのマナーを詳しく解説いたします。
          </p>

        <div class="pt-4 pb-3">
          <div class="bg-llyellow pt-3 pb-3 pr-4 pl-4 pr-lg-5 pl-lg-5 border-orange">
            <p class="font-size-1_2 font-size-lg-1_4 line-height-1_7 text-center">目次</p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">1. <a href="#01" class="font-size-1_1 font-size-lg-1_2"><u>香典袋とは</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">2. <a href="#02" class="font-size-1_1 font-size-lg-1_2"><u>記載する項目</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">3. <a href="#03" class="font-size-1_1 font-size-lg-1_2"><u>使用するペンの種類について</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">4. <a href="#04" class="font-size-1_1 font-size-lg-1_2"><u>香典袋の選び方</u></a></p>
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">香典袋とは</h3>
              </div>
            </div>
          </div>
            <p class="font-size-lg-1_1 line-height-1_7">香典袋とは、「外袋」と「中袋」の二つの袋から成り立っています。</p>

          <div class="col-12 bg-lgray p-4 mb-3">
              <ul class="font-size-lg-1_1 pl-4 m-0">
                  <li class="pb-2 color-gray"><span class="color-dgray">外袋：中袋を包むための袋</span></li>
                  <li class="pb-2 color-gray"><span class="color-dgray">中袋：遺族に渡す現金を包むための袋</span></li>
              </ul>
          </div>

          <div class="col-lg-12 p-0 pt-4 pb-4 mb-2">
            <div class="pb-3 p-0 col-md-9">
              <img src="/assets/img/column/condolence_gift01.png" alt="一般的な葬儀の流れ（「都民の一般葬」も同様）" class="w-100 pl-lg-4">
            </div>
          </div>

            <p class="font-size-lg-1_1 line-height-1_7">それぞれ役割が違うため、記載する項目や書き方が異なります。</p>
        </section>

        <section id="02" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">記載する項目</h3>
              </div>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7">外袋・中袋に記載する項目・記載箇所は以下の通りです。</p>

          <div class="col-12 bg-lgray p-4 mb-2">
            <div class="pt-3 pb-2">
              <p class="font-size-1_2 font-size-lg-1_4 line-height-1 font-weight-bold color-plan5">外袋（表面のみ記載）</p>
              <ul class="font-size-lg-1_1 pl-4 m-0">
                  <li class="pb-2 color-gray"><span class="color-dgray">表書き</span></li>
                  <li class="pb-2 color-gray"><span class="color-dgray">名前</span></li>
              </ul>
            </div>

            <div class="pt-3 pb-2">
              <p class="font-size-1_2 font-size-lg-1_4 line-height-1 font-weight-bold color-plan5">中袋（両面記載）</p>
              <p class="font-size-lg-1_2 m-0">（表面）</p>
                <ul class="font-size-lg-1_1 pl-4 m-0">
                    <li class="pb-2 color-gray"><span class="color-dgray">金額</span><br><span class="font-size-0_9 font-size-lg-1 color-dgray">※大字（旧字体の漢数字。例：壱、参、伍）で記載。縦書き。</span></li>
                </ul>

                <p class="font-size-lg-1_2 m-0">（裏面）</p>
                  <ul class="font-size-lg-1_1 pl-4 m-0">
                      <li class="pb-2 color-gray"><span class="color-dgray">郵便番号</span></li>
                      <li class="pb-2 color-gray"><span class="color-dgray">住所</span></li>
                      <li class="pb-2 color-gray"><span class="color-dgray">名前</span></li>
                  </ul>
              </div>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-lg-1_1 line-height-1_7">それぞれの内容について説明いたします。</p>
            </div>

            <div class="pb-3">
              <div class="pt-3 pb-2">
                <div class="bg-plan5 text-left font-size-1 font-size-1_4 color-white m-0 p-3">外袋（表面のみ記載）</div>
              </div>

              <div class="pt-2 pb-4">
                <p class="font-size-lg-1_1 line-height-1_7">外袋は表面のみ記載が必要で、記載する項目は表書き、名前の２つです。</p>
              </div>

              <div class="pt-2 pb-4">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">表書き</p>
                <p class="font-size-lg-1_1 line-height-1_7">
                  「表書き」とは香典を贈る名目の事で、水引上段に記載します。仏式の場合、通夜や葬儀では「御霊前」、四十九日以降は「御仏前」「御沸前」などが用いられます。また、神式では「御玉串料」、キリスト教では「御花料」等と記載します。どの表書きが適しているかは故人の宗派・宗教によって異なります。<br>
                  <span class="color-pink font-weight-bold">※浄土真宗は四十九日以前も「御仏前」と記載します。</span>
                </p>
              </div>

              <div class="pt-2 pb-4">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">名前</p>
                <p class="font-size-lg-1_1 line-height-1_7">
                  水引下段には名前を記載します。<br>
                  自分だけの香典であれば自分の名前のみ記載すれば良いですが、家族や会社の同僚など、複数人からまとめて一つの香典袋を贈る場合には注意が必要です。
                </p>
              </div>

            <div class="pb-4">
              <p class="font-size-1_2 line-height-1 mb-lg-1"><span class="color-plan5">■</span>夫婦2名で贈る場合</p>
              <div class="row no-gutters pt-2 pb-2">
                <div class="col-12 col-lg-9 position-relative order_1">
                    <p class="font-size-lg-1_1 line-height-1_7">「夫のフルネーム」または「夫のフルネーム＋（左隣に）妻の名前のみ」を記載します。基本的には夫のフルネームのみで問題ありませんが、地域・風習によっても異なります。念のため、事前に親族や葬儀社に確認しておくと安心です。</p>
                </div>
                <div class="col-4 col-lg-3 line-height-1 m-auto m-lg-0">
                  <img src="/assets/img/column/condolence_gift02.png" alt="夫婦2名で贈る場合" class="w-100 mb-3 pl-lg-4">
                </div>
              </div>
            </div>

            <div class="pb-4">
              <p class="font-size-1_2 line-height-1 mb-lg-1"><span class="color-plan5">■</span>複数人の香典を一つの香典袋で贈る場合（会社や友人等）</p>
              <div class="row no-gutters pt-2 pb-2">
                <div class="col-12 col-lg-9 position-relative order_1">
                    <p class="font-size-lg-1_1 line-height-1_7">最大3名までであれば連名で贈ることが可能です。<br>
                      その場合、年長者や役職者を中央に記載し、その左側に他の方の名前を記載していきます。<br>
                      4名以上で贈る場合は「団体名＋一同」や「団体名＋代表者１名の名前＋他一同（他〇名）」のように記載します。</p>
                </div>
                <div class="col-4 col-lg-3 line-height-1 m-auto m-lg-0">
                  <img src="/assets/img/column/condolence_gift03.png" alt="複数人の香典を一つの香典袋で贈る場合（会社や友人等）" class="w-100 mb-3 pl-lg-4">
                </div>
              </div>
            </div>
        </div>

        <div class="pb-3">
          <div class="pt-3 pb-4">
            <div class="bg-plan5 text-left font-size-1 font-size-1_4 color-white m-0 p-3">中袋（両面記載）</div>
          </div>
            <p class="font-size-lg-1_1 line-height-1_7">中袋は表面・裏面ともに記載が必要です。<br>
              記載する項目は表書きが金額、裏面が、郵便番号、住所、名前（連名の場合はプラスして個別の金額）となります。</p>

          <div class="pt-2 pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">金額</p>
            <p class="font-size-lg-1_1 line-height-1_7">
            中袋の表面には、「大字」（旧字体の漢数字。壱、参、伍、圓など）を用いて、縦書きで金額を記載します。例えば、5,000円であれば「金伍仟圓」と記載します。<br>
            ただし、「圓」は地域によっては「円」でも良い場合があります。<br>
              <span class="color-pink font-weight-bold">※偶数の金額は「割り切れる＝縁が切れる」を連想させる事から、香典では使用しません。</span>
            </p>
          </div>

          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">郵便番号・住所・名前</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              中袋の裏面左下に縦書きで記載します。<br>
              住所は省略せず、名前はフルネームで、数字は漢数字で記載しましょう。<br>
              また、連名で贈る場合は<span class="color-pink font-weight-bold">3名までであれば裏面に、4名以上であれば別紙</span>に記入し、中袋の中に入れます。<br>
              記入の際は年長者や役職者から順に、郵便番号・住所・名前・<span class="color-pink font-weight-bold">包んだ金額</span>を記載しましょう。
            </p>
          </div>

          </div>
        </section>

        <section id="03" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">3</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">使用するペンの種類について</h3>
              </div>
            </div>
          </div>

          <div class="m-auto pb-3 p-0 col-md-9">
            <img src="/assets/img/column/condolence_gift.png" alt="御香典" class="w-100 pl-lg-4">
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-lg-1_1 line-height-1_7">
              香典を書く際に適したペンとはどのようなものでしょうか。<br>
              日頃使い慣れたボールペンは使えるのでしょうか。実は香典に適したペンは「外袋」と「中袋」で異なっています。理由も交えて説明いたします。
            </p>
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">外袋</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              外袋の表書きや名前は、<span class="color-pink font-weight-bold">原則として薄墨の毛筆や筆ペンを用いて記載します</span>。薄墨を用いる理由には諸説ありますが、昔は硯（すずり）で墨を擦って筆で記載していた事から、「悲しみの涙が硯に落ちて墨が薄くなってしまった」とか「墨を擦る時間も惜しんで急いで駆けつけた」ということを表していると言われています。<br>
              ボールペンで記載すると見た目も良くないですし、そもそもマナー違反でご遺族に不信感を抱かれる可能性もありますので、ボールペンの使用は止めましょう。<br>
              また、葬儀や告別式では前述の通り薄墨を使用しますが、<span class="color-pink font-weight-bold">四十九日以降（一周忌など）の場合は濃墨を使用します</span>。四十九日以降であれば前もってスケジュールを把握できますし、準備する時間も十分あるためです。<br>
              ただし、地域によっては薄墨を使用せず濃墨を使用する場合もあるので、不安であれば同じ地域に住む親族などに地域のしきたりを確認しておきましょう。
            </p>
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">中袋</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              外袋と違い、<span class="color-pink font-weight-bold">中袋にはボールペンを用いても問題ありません</span>。中袋はご遺族以外の方の目に触れる機会がないため、対外的なマナーを重視する必要がありません。<br>
              <br>
              また、中袋に記載される贈った方の名前・住所・金額は、ご遺族が帳簿と照らし合わせたり、香典返しの準備のために用いることもあるため、読みやすく、間違いのないはっきりした文字で記載する必要があります。筆ペン等では文字が読みにくかったり、狭いスペースにたくさんの情報を書ききれない場合もありえますので、使用するペンはご遺族の見やすさを重視して選びましょう。<br>
              <br>
              ただし、中袋のマナーも外袋と同様に地域によって異なる場合があります。（ボールペンは使用不可など）不安であれば事前に確認しておくことをお勧めします。
            </p>
          </div>

          <div class="pt-4 pb-2">
            <div class="bg-lgray pt-3 pb-3 pr-4 pl-4 border-gray">
              <p class="font-size-1_2 font-size-lg-1_4 line-height-1_7 mb-2 font-weight-bold">薄墨・濃墨の購入場所について</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                薄墨や濃墨を普段から使用している方は少ないと思いますので、いざという時に「薄墨や濃墨がない！」という場合もあるでしょう。<br>
                薄墨や濃墨はスーパー・コンビニ・100均などで販売しています。<br>
                また、濃墨や筆ペンは祝い事でも使用できますので、一つは購入しておくと良いでしょう。
              </p>
            </div>
          </div>
        </section>

        <section id="04" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">4</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">香典袋の選び方</h3>
              </div>
            </div>
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-lg-1_1 line-height-1_7">
              ここまで香典袋の書き方や使用可能なペンについて見てきましたが、使用する香典袋にも宗教・宗派ごとに特徴があります。下記の表を参考にして頂き、故人の宗教・宗派に適したものを選びましょう。
            </p>
          </div>

          <div class="pb-5">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">仏教</p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-5 col-sm-4 col-lg-3 line-height-1 m-auto">
                <img src="/assets/img/column/buddhismpng.png" alt="仏教" class="w-100 mb-4 pr-lg-4">
              </div>
              <div class="col-12 col-lg-9 position-relative">
                <div class="pt-2 pb-2">
                  <table border="1" class="col-12">
                    <tr class="font-size-1_2 bg-lgray color-dgray text-center">
                      <th class="col-3 col-lg-2 p-2">宗派</th>
                      <th class="p-2">香典袋</th>
                      <th class="col-4 col-lg-3 p-2">表書き</th>
                    </tr>
                    <tr>
                      <td class="text-center p-2">浄土真宗</td>
                      <td class="text-center p-2" rowspan="2">白黒の「結び切り」の水引付き</td>
                      <td class="p-2">
                        <li class="pl-3 color-gray"><span class="color-dgray">御仏前</span></li>
                        <li class="pl-3 color-gray"><span class="color-dgray">御香典</span></li>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center p-2">それ以外</td>
                      <td class="p-2">
                        <li class="pl-3 color-gray"><span class="color-dgray">御霊前</span></li>
                        <li class="pl-3 color-gray"><span class="color-dgray">御香典</span></li>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

              <p class="font-size-lg-1_1 line-height-1_7">
                ※一般的には、四十九日までは「御霊前」、四十九日以降（一周忌、三周忌など）は「御仏前」と記載します。ただし、浄土真宗では、四十九日の前後を問わず「御仏前」と記載します。
              </p>
          </div>

          <div class="pb-5">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">神道</p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-5 col-sm-4 col-lg-3 line-height-1 m-auto">
                <img src="/assets/img/column/shinto.png" alt="神道" class="w-100 mb-4 pr-lg-4">
              </div>
              <div class="col-12 col-lg-9 position-relative">
                <div class="pt-2 pb-2">
                  <table border="1" class="col-12">
                    <tr class="font-size-1_2 bg-lgray color-dgray text-center">
                      <th class="col-3 col-lg-2 p-2">宗派</th>
                      <th class="p-2">香典袋</th>
                      <th class="col-4 col-lg-3 p-2">表書き</th>
                    </tr>
                    <tr>
                      <td class="text-center p-2">−</td>
                      <td class="text-center p-2">白黒・双銀・双白の「結び切り」の水引付き</td>
                      <td class="p-2">
                        <li class="pl-3 color-gray"><span class="color-dgray">御霊前</span></li>
                        <li class="pl-3 color-gray"><span class="color-dgray">御玉串料</span></li>
                        <li class="pl-3 color-gray"><span class="color-dgray">御榊料</span></li>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

              <p class="font-size-lg-1_1 line-height-1_7">
                ※「結び切り」とは「真結び」とも呼ばれ、水引を中心で固く結ぶ方法です。簡単に解けないようにすることで「同じことが何度も起こらないように」という意味を表しています。
              </p>
          </div>

          <div class="pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">キリスト教</p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-5 col-sm-4 col-lg-3 line-height-1 m-auto">
                <img src="/assets/img/column/christianity.png" alt="キリスト教" class="w-100 mb-4 pr-lg-4">
              </div>
              <div class="col-12 col-lg-9 position-relative">
                <div class="pt-2 pb-2">
                  <table border="1" class="col-12">
                    <tr class="font-size-1_2 bg-lgray color-dgray text-center">
                      <th class="col-3 col-lg-3 p-2">宗派</th>
                      <th class="p-2">香典袋</th>
                      <th class="col-4 col-lg-3 p-2">表書き</th>
                    </tr>
                    <tr>
                      <td class="text-center p-2">プロテスタント</td>
                      <td class="text-center p-2" rowspan="2">水引なしの「十字架」<br>または「花模様」<br>※上記が無い場合は白封筒</td>
                      <td class="p-2">
                        <li class="pl-3 color-gray"><span class="color-dgray">お花料</span></li>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center p-2">カトリック</td>
                      <td class="p-2">
                        <li class="pl-3 color-gray"><span class="color-dgray">御ミサ料</span></li>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
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
              香典の書き方については様々なマナーがありますが、大まかにでも把握しておくことで万が一の場合にも慌てずに対応することができます。また、マナーの由来を知ることで、そのマナーに込められた想いを知り、よりご遺族の気持ちに寄り添うことができるでしょう。<br>
              ただし、本記事に掲載した内容はあくまでも一般論です。葬儀マナーは地域差が大きいため、事前に親族や葬儀社に確認しておくとより安心できます。
            </p>
        </section>

        <section class="pt-4 pb-5">
          <a href="<?php echo appConfigSite::sitemap['column']['path']; ?>fukusa" class="column-hover btn text-left">
          <div class="bg-llyellow w-lx-90per rounded p-3 border-orange position-relative m-auto arrow-column">
            <div class="position-absolute d-inline-block bg-orange rounded-pill color-white p-1 pl-3 pr-3 font-size-1" style="top:-17px;">関連記事</div>
              <div class="row no-gutters pt-2">
                <div class="col-4 col-lg-3">
                  <img src="/assets/img/column/fukusa.png" alt="袱紗" class="w-100 pr-4">
                </div>
                <div class="col-8 col-lg-9 pr-sm-3">
                  <div class="font-size-1_2 font-size-lg-1_4 line-height-1 font-weight-bold pb-2">袱紗（ふくさ）とは？</div>
                  <div class="d-none d-sm-block d-md-none color-dgray text-justify font-size-1 line-height-1_4"><?php echo appFuncString::substr('袱紗（ふくさ）とは、冠婚葬祭においてご祝儀やお香典などを包む四角い布のことで、中身が汚れたり、水引が崩れたりするのを防ぐ目的で使用されます。', '35'); ?></div>
                  <div class="d-none d-md-block color-dgray text-justify font-size-1 line-height-1_4"><?php echo appFuncString::substr('袱紗（ふくさ）とは、冠婚葬祭においてご祝儀やお香典などを包む四角い布のことで、中身が汚れたり、水引が崩れたりするのを防ぐ目的で使用されます。', '74'); ?></div>
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
