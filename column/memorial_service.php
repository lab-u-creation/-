<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnother::column['memorial_service']['name'];
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<header class="pt-3 pb-3 pb-lg-4">
<div class="container">
  <div class="font-size-1_4 font-size-lg-2_4 line-height-1 border-contrast-left pl-3 color-dgray font-weight-bold">
    <?php echo appConfigColumnother::column['memorial_service']['name']; ?><br>
    <span class="font-size-1 font-size-lg-1_2"><?php echo appConfigColumnother::column['memorial_service']['sub']; ?></span>
  </div>
</div>
</header>

<div class="container p-0">
  <div class="row no-gutters">
    <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

      <div class="border-top pt-4 pb-5">
          <p class="font-size-lg-1_1 line-height-1_7">
            供養といえば、実際にご遺骨がある場所（お墓、納骨堂など）まで足を運び、お花を供えたり、お線香を手向け、手を合わせるというイメージをお持ちの方が多いのではないでしょうか。しかし、遠方の方や新しいお墓を用意できない方など、様々なご事情からそのような供養が難しい方もいらっしゃいます。そこで、今回は供養の一つの形として「手元供養」についてご説明いたします。
          </p>

        <div class="pt-4 pb-3">
          <div class="bg-llyellow pt-3 pb-3 pr-4 pl-4 pr-lg-5 pl-lg-5 border-orange">
            <p class="font-size-1_2 font-size-lg-1_4 line-height-1_7 text-center">目次</p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">1. <a href="#01" class="font-size-1_1 font-size-lg-1_2"><u>手元供養とは？</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">2. <a href="#02" class="font-size-1_1 font-size-lg-1_2"><u>手元供養の保管方法</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">3. <a href="#03" class="font-size-1_1 font-size-lg-1_2"><u>手元供養のメリット</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">4. <a href="#04" class="font-size-1_1 font-size-lg-1_2"><u>手元供養の注意点</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">5. <a href="#05" class="font-size-1_1 font-size-lg-1_2"><u>手元供養の種類</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">6. <a href="#06" class="font-size-1_1 font-size-lg-1_2"><u>手元供養の流れ</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">7. <a href="#07" class="font-size-1_1 font-size-lg-1_2"><u>分骨方法について</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">8. <a href="#08" class="font-size-1_1 font-size-lg-1_2"><u>残った遺骨の供養について</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2">9. <a href="#09" class="font-size-1_1 font-size-lg-1_2"><u>まとめ</u></a></p>
          </div>
        </div>

        <section id="01" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">手元供養とは？</h3>
              </div>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7">
            手元供養とは、遺骨や遺灰を自宅で保管・供養する方法のことで、「自宅供養」とも呼ばれています。手元供養は、少子化に伴うお墓の承継問題や、住宅環境の変化などにより、2000年代に入ってから徐々に広まってきています。
          </p>
        </section>

        <section id="02" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">2</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">手元供養の保管方法</h3>
              </div>
            </div>
          </div>

            <p class="font-size-lg-1_1 line-height-1_7">手元供養の保管方法には、</p>
              <div class="pb-2 column-number">
                <ol>
                  <li class="font-size-lg-1_2 font-weight-bold line-height-1_7 mb-2">遺骨や遺灰を全て自宅で管理する</li>
                  <li class="font-size-lg-1_2 font-weight-bold line-height-1_7 mb-2">墓地や寺院へ納骨したうえで一部のみ自宅で管理する</li>
                </ol>
              </div>
              <p class="font-size-lg-1_1 line-height-1_7">という二通りの方法があります。</p>
              <p class="font-size-lg-1_1 line-height-1_7">「遺骨や遺灰を分けて管理すると故人が成仏できないのでは？」と不安に思う方もいるかもしれませんが、<span class="color-pink font-weight-bold">「分骨」は仏教で一般的に認められている方法なので問題はありません</span>。</p>
          </section>

          <section id="03" class="pt-4 pb-5">
            <div class="pb-3">
              <div class="row align-items-center no-gutters">
                <div class="col-auto text-center mr-3">
                  <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">3</div>
                </div>
                <div class="col-9 col-lg-10">
                  <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">手元供養のメリット</h3>
                </div>
              </div>
            </div>

              <p class="font-size-lg-1_1 line-height-1_7">手元供養には以下のようなメリットが存在します。</p>

              <div class="pt-2 pb-4">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">故人をいつでも近くに感じられる</p>
                <p class="font-size-lg-1_1 line-height-1_7">故人のお身体の一部である遺骨や位牌を身近な場所で管理することで、故人の存在をいつでも近くに感じることができます。</p>
              </div>

              <div class="pt-2 pb-4">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">遠方まで出向く必要がない</p>
                <p class="font-size-lg-1_1 line-height-1_7">長距離の移動が必要なくなるため、体力的な負担や交通費を（場合によっては宿泊費も）抑えられます。また、移動の時間もかからないため、時間のある時にいつでも供養が行えます。</p>
              </div>

              <div class="pt-2 pb-4">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">費用を抑えられる</p>
                <p class="font-size-lg-1_1 line-height-1_7">お墓や納骨堂の手配が必要ないため、費用を大幅に抑えられます。</p>
              </div>

              <div class="pt-2 pb-3">
                <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">保管場所の自由度が高い</p>
                <p class="font-size-lg-1_1 line-height-1_7">手元供養品には様々な種類があり、中に遺骨・遺灰・遺髪などを納めて携帯できる「遺骨ペンダント」、手の平に収まるサイズで置き場所に困らない「ミニ骨壺」、コンパクト・シンプルなデザインでご自宅のどこにでも違和感なく飾れる「遺骨プレート」など、住環境や好みに応じて自由に選ぶことができます。</p>
              </div>
          </section>

        <section id="04" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">4</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">手元供養の注意点</h3>
              </div>
            </div>
          </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">家族や親族に反対されることがある</p>
              <p class="font-size-lg-1_1 line-height-1_7">手元供養が注目されるようになったのは10年程前からで、比較的最近のことです。<br>
                そのため、<span class="color-pink font-weight-bold">特に年配者などにはなじみが薄く、お墓や納骨堂以外で供養することに反対されることもあります</span>。<br>
                反対される方も故人のことを思って反対されていると思いますので、強引に進めず、ご自身の気持ちを丁寧に説明しながら、わだかまりが残らないように進めましょう。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">紛失する危険がある</p>
              <p class="font-size-lg-1_1 line-height-1_7">手元供養品は<span class="color-pink font-weight-bold">持ち運びや省スペースでの設置を想定して小型に作られているものが多いため、紛失する危険はあります</span>。<br>
                例えば、遺骨ペンダントであれば鎖が切れて落としてしまうケースや、バッグなどに入るミニ遺骨であればバッグごと紛失してしまうケースもあります。<br>
                また、ミニ仏壇も地震などの災害で紛失してしまう可能性はあります。<br>
                <br>
                大切なご遺骨・遺灰ですから、万が一にも紛失することが無いよう保管方法は慎重に検討しましょう。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">カビが生えにくい保管場所を選ぶ</p>
              <p class="font-size-lg-1_1 line-height-1_7"><span class="color-pink font-weight-bold">遺骨にカビが生えるトラブルはよくあるトラブルの一つです</span>。<br>
                カビは温度や湿度の高い環境を好むため、直射日光の当たらない風通しの良い場所を選ぶことが重要です。<br>
                水回り（キッチン、お風呂場など）の近くや、クローゼットの中などに保管するのは避けましょう。<br>
                また、エアコンの風が直接当たる場所も容器内に結露が発生する可能性があるためお勧めできません。<br>
                <br>
                カビを防ぐ手段の一つとして、しっかり密閉できるタイプの保管容器を選ぶことも有効です。真空パックや乾燥剤を入れる方法もあるのでご検討ください。
              </p>
            </div>
        </section>

        <section id="05" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">5</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">手元供養の種類</h3>
              </div>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7">手元供養品には様々な種類がありますが、主なものとしてアクセサリー・骨壺・プレートの3種類があります。それぞれの特徴をまとめました。</p>

          <div class="pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">アクセサリー</p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-12 col-sm-8 col-lg-5 line-height-1 m-auto">
                <img src="/assets/img/column/accessories.png" alt="風呂敷袱紗" class="w-100 mb-4 pl-lg-2 pr-lg-4">
              </div>
              <div class="col-12 col-lg-7 position-relative">
                <div class="pb-2">
                  <table border="1" class="col-12">
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray text-center bg-lgray p-2">特徴</th>
                      <td class="p-2">遺骨や遺灰を入れて携帯できるペンダントや、遺骨や遺灰で作ったダイヤモンドをアクセサリーにしたもの等があります。</td>
                    </tr>
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray text-center bg-lgray p-2">値段</th>
                      <td class="p-2">素材や装飾によって数千円～数十万円まで様々。ステンレス製・ガラス製ペンダントは比較的安価だが、貴金属性のネックレス・指輪でダイヤモンドやパールなどの装飾がされているものは高価。</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">骨壺</p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-12 col-sm-8 col-lg-5 line-height-1 m-auto">
                <img src="/assets/img/column/memorial_service.png" alt="骨壺" class="w-100 mb-4 pl-lg-2 pr-lg-4">
              </div>
              <div class="col-12 col-lg-7 position-relative">
                <div class="pb-2">
                  <table border="1" class="col-12">
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray text-center bg-lgray p-2">特徴</th>
                      <td class="p-2">遺骨や遺灰を保管するための壺。</td>
                    </tr>
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray text-center bg-lgray p-2">値段</th>
                      <td class="p-2">ミニ骨壺（手の平に乗るサイズ）は数千円から、それより大きいものは五千円～数万円程度で購入が可能。<br>
                        デザインが凝ったもの、大理石などを使用したものは数十万円する場合もある。</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">プレート</p>
            <div class="row no-gutters pt-2 pb-2">
              <div class="col-12 col-sm-8 col-lg-5 line-height-1 m-auto">
                <img src="/assets/img/column/plate.png" alt="骨壺" class="w-100 mb-4 pl-lg-2 pr-lg-4">
              </div>
              <div class="col-12 col-lg-7 position-relative">
                <div class="pb-2">
                  <table border="1" class="col-12">
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray text-center bg-lgray p-2">特徴</th>
                      <td class="p-2">遺骨の一部を粉骨し、金属と混ぜあわせてプレート状にしたもの。</td>
                    </tr>
                    <tr>
                      <th class="col-3 col-lg-3 font-size-1_2 font-size-lg-1_2 color-dgray text-center bg-lgray p-2">値段</th>
                      <td class="p-2">加工技術が必要となるため、10万円～30万円程度と高価。価格はプレートのデザインや素材、写真の刻印の有無などで変動する。</td>
                    </tr>
                  </table>
                </div>
              </div>
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">手元供養の流れ</h3>
              </div>
            </div>
          </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">手元供養の方法を決める</p>
              <p class="font-size-lg-1_1 line-height-1_7">手元供養には「遺骨や遺灰をすべて自宅で管理する方法」と「墓地や寺院へ納骨したうえで一部のみ自宅で保管する方法」の二通りがあります。まずはどちらの方法にするか決めましょう。<br>
                また、手元供養を行うにあたっては、<span class="color-pink font-weight-bold">事前に家族や親族にきちんと説明を行い、理解を得てから行うようにしましょう</span>。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">手元供養品を選ぶ</p>
              <p class="font-size-lg-1_1 line-height-1_7">次に、手元供養品の種類を決めます。骨壺を選ばれる方が多いですが、骨壺にもたくさんの種類があり、遺骨を納める量により適した大きさは異なります。<br>
                また、分骨する場合はアクセサリーやプレートも選択肢に入ります。それぞれ納められる遺骨の量が決まっているため、早い段階でどの手元供養品にするか決めた方が良いでしょう。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">手元供養品を注文する</p>
              <p class="font-size-lg-1_1 line-height-1_7">手元供養品を決めたら業者に注文しましょう。注文先は一部の葬儀社や、仏壇などを取り扱う業者などです。最近はインターネットでも購入可能です。<br>
                一般的な商品であればすぐに取り寄せ可能ですが、特注品は納入まで時間がかかる場合もあるので注意が必要です。
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">分骨方法について</h3>
              </div>
            </div>
          </div>

          <p class="font-size-lg-1_1 line-height-1_7">火葬時に行う場合と納骨後に行う場合で手続きが異なります。<br>
            なお、分骨せずに遺骨全てを手元供養する場合は手続きは不要ですが、後からお墓などへ分骨する場合は各自治体または納骨先に「分骨証明書」を発行してもらう必要があります。<br>
            <br>
            それぞれの手続き内容・連絡先については以下の表をご覧下さい。
          </p>

          <div class="pt-3 pb-5">
            <p class="font-size-1_2 line-height-1 mb-2"><span class="color-plan5">■</span>火葬時に行う場合</p>
            <div class="row no-gutters">
              <div class="col-12 col-lg-9">
                <table border="1" class="col-12">
                  <tr class="font-size-1_4 font-size-lg-1_2 bg-lgray color-dgray">
                    <th class="col-4 col-lg-4 text-center p-2">依頼内容</th>
                    <th class="col-2 col-lg-2 text-center p-2">連絡先</th>
                  </tr>
                  <tr>
                    <td class="p-2">お骨上げ時の分骨</td>
                    <td class="text-center p-2">火葬業者</td>
                  </tr>
                  <tr>
                    <td class="p-2">分骨するための骨壺の手配</td>
                    <td class="text-center p-2">火葬業者、販売業者</td>
                  </tr>
                  <tr>
                    <td class="line-height-1 p-2">分骨証明書の発行<br><span class="font-size-0_9">※分骨する数だけ必要</span></td>
                    <td class="text-center p-2">火葬業者</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          <div class="pt-3 pb-5">
            <p class="font-size-1_2 line-height-1 mb-2"><span class="color-plan5">■</span>納骨後に行う場合</p>
            <div class="row no-gutters">
              <div class="col-12 col-lg-9">
                <table border="1" class="col-12">
                  <tr class="font-size-1_4 font-size-lg-1_2 bg-lgray color-dgray">
                    <th class="col-4 col-lg-4 text-center p-2">依頼内容</th>
                    <th class="col-2 col-lg-2 text-center p-2">連絡先</th>
                  </tr>
                  <tr>
                    <td class="line-height-1 p-2">遺骨の取り出し、日程調整<br><span class="font-size-0_9">※合祀と樹木葬は不可</span></td>
                    <td class="text-center p-2">霊園、寺院</td>
                  </tr>
                  <tr>
                    <td class="p-2">分骨証明書の発行</td>
                    <td class="text-center p-2">霊園、寺院</td>
                  </tr>
                  <tr>
                    <td class="p-2">開眼供養・閉眼供養など儀式の手配</td>
                    <td class="text-center p-2">霊園、寺院、僧侶</td>
                  </tr>
                </table>
              </div>
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">残った遺骨の供養について</h3>
              </div>
            </div>
          </div>

            <p class="font-size-lg-1_1 line-height-1_7">
              手元供養をしていた方が逝去されたり、手元供養のために遺骨を分骨した場合は遺骨が残ります。残った遺骨の供養について、4種類の方法をご紹介します。
            </p>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">お墓に納骨する</p>
              <p class="font-size-lg-1_1 line-height-1_7">最も一般的な方法で、遺骨の一部を手元供養し、残りの遺骨をお墓に収める方法です。<br>
                お墓と自宅の距離が離れていて、お墓に出向く事が難しいという方がよくお選びになります。<br>
                ただし、既にお墓があれば別ですが、新たにお墓を建てる場合は費用や手続きで大きな負担がかかります。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">納骨堂や永代供養墓への納骨</p>
              <p class="font-size-lg-1_1 line-height-1_7">納骨堂には、ロッカールームのように扉付きのお壇が並んだロッカー式納骨堂や、遺骨が保管場所から参拝場所まで自動で搬送される自動搬送式納骨堂などがあります。<br>
                どちらもお墓に比べて安価で、駅近など利便性の良い場所に建っていることが多いという特徴があります。<br>
                <br>
                永代供養墓には様々な種類がありますが、大きく分けると合祀型と集合安置型の2種類があります。合祀型は他の方の遺骨と一緒に埋葬する方法で、比較的安価に納骨が可能です。ただし、一度納骨してしまうと場所を移動したり、分骨することはできません。これに対して、集合安置型は収めるところは一緒ですが、骨壺が分かれているため、後から他の場所へ納骨したり分骨したりすることが可能です。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">樹木葬</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                樹木葬には明確な定義がある訳ではありませんが、埋葬方法で区別すると以下の3種類があります。
              </p>

              <div class="pt-3 pb-2">
                <div class="row no-gutters">
                  <div class="col-12 col-lg-9">
                    <table border="1" class="col-12">
                      <tr class="font-size-1_4 font-size-lg-1_2 bg-lgray color-dgray">
                        <th class="col-3 text-center p-2">種類</th>
                        <th class="col-8 text-center p-2">特徴</th>
                      </tr>
                      <tr>
                        <td class="text-center p-2">合祀型</td>
                        <td class="p-2">
                          <p class="list-item color-gray"><span class="color-dgray">象徴となる樹木は共同で一本</span></p>
                          <p class="list-item color-gray"><span class="color-pink">埋葬場所は他の方と共通</span></p>
                          <p class="list-item color-gray"><span class="color-dgray">樹木葬では最も安価</span></p>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center p-2">集合型</td>
                        <td class="p-2">
                          <p class="list-item color-gray"><span class="color-dgray">象徴となる樹木は共同で一本</span></p>
                          <p class="list-item color-gray"><span class="color-pink">埋葬場所は他の方と区別される</span></p>
                          <p class="list-item color-gray"><span class="color-dgray">樹木葬の中では中間的な価格</span></p>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center p-2">個別型</td>
                        <td class="p-2">
                          <p class="list-item color-gray"><span class="color-dgray">象徴となる樹木は故人ごとに一本</span></p>
                          <p class="list-item color-gray"><span class="color-dgray">植える樹木は桜や薔薇など自由に選べる</span></p>
                          <p class="list-item color-gray"><span class="color-pink">埋葬場所は他の方と区別される</span></p>
                          <p class="list-item color-gray"><span class="color-dgray">樹木葬の中では最も高額</span></p>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">散骨</p>
              <p class="font-size-lg-1_1 line-height-1_7">散骨とは、遺骨を粉末状にして海や山に撒く方法のことです。<br>
                散骨するために特別な手続きは必要はありませんが、多くの自治体で散骨場所や散骨方法などの制限が設けられているため、抵触しないよう事前に確認しておく必要があります。散骨場所として最もメジャーな海洋散骨なども、海岸近くでは漁業権の問題が発生する場合があります。後にトラブルにならないように、散骨は専門業者に任せた方が安心です。<br>
              </p>
            </div>
        </section>


        <section id="09" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">9</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">まとめ</h3>
              </div>
            </div>
          </div>
            <p class="font-size-lg-1_1 line-height-1_7">
              手元供養には、故人をいつも傍に感じられる等のメリットがありますが、他方で様々な手続きや親族の理解を得る必要など、解決しなければならない問題も多く存在します。<br>
              一旦合祀すると後で戻すことはできないので、慎重に検討しましょう。
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
