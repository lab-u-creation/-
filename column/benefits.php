<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigColumnother::column['benefits']['name'];
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>
<?php appFuncDisp::h1(appConfigPage::$title); ?>

<div class="container p-0">
  <div class="row no-gutters">
    <div class="col-12 col-lg-9 position-relative pl-3 pr-3">

      <div class="border-top pt-4 pb-5">
          <p class="font-size-lg-1_1 line-height-1_7">
            直葬・家族葬など様々な形式の葬儀がありますが、葬儀にかかる費用は決して安くありません。そこで、この記事では<span class="color-pink font-weight-bold">国民健康保険</span>や<span class="color-pink font-weight-bold">健康保険（社会保険）</span>に加入している方の給付金制度についてご紹介いたします。
          </p>

        <div class="pt-4 pb-3">
          <div class="bg-llyellow pt-3 pb-3 pr-4 pl-4 pr-lg-5 pl-lg-5 border-orange">
            <p class="font-size-1_2 font-size-lg-1_4 line-height-1_7 text-center">目次</p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">1. <a href="#01" class="font-size-1_1 font-size-lg-1_2"><u>給付金の種類</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">2. <a href="#02" class="font-size-1_1 font-size-lg-1_2"><u>葬祭費（国民健康保険）の申請手続き</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2 mb-1">3. <a href="#03" class="font-size-1_1 font-size-lg-1_2"><u>「埋葬料」「埋葬費」（健康保険）の申請手続き</u></a></p>
            <p class="font-size-1_1 font-size-lg-1_2">4. <a href="#04" class="font-size-1_1 font-size-lg-1_2"><u>まとめ</u></a></p>
          </div>
        </div>

        <section id="01" class="pt-4 pb-5">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">1</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">給付金の種類</h3>
              </div>
            </div>
          </div>

          <div class="m-auto pb-3 p-0 col-md-9">
            <img src="/assets/img/column/benefits.png" alt="御香典" class="w-100 pl-lg-4">
          </div>

            <div class="pt-2 pb-4">
              <p class="font-size-lg-1_1 line-height-1_7">葬儀を行った際に支給される給付金は、故人が加入していた保険の種類により異なります。<br>
                まずは故人が加入していた保険が国民健康保険なのか健康保険（社会保険）なのかを調べましょう。<br>
                支給される給付金は、<span class="color-pink font-weight-bold">国民健康保険は「葬祭費」</span>、<span class="color-plan5 font-weight-bold">健康保険（社会保険）は「埋葬料」または「埋葬費」</span>です。<br>
                それぞれの概要について説明いたします。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">国民健康保険の加入者＝「葬祭費」</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                葬儀後に自治体の窓口（市役所・町役場など）で申請する必要があります。金額は自治体によって異なりますが、おおよそ1万円～7万円程度です。<br>
                手続きには故人の保険証や、葬儀を行った方の印鑑などが必要になるので、事前に自治体に必要なものを確認しておきましょう。<br>
                また、葬儀から2年を経過すると申請できなくなるので注意してください。
              </p>
            </div>

            <div class="pt-2 pb-2">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">健康保険の加入者＝「埋葬料」「埋葬費」</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                国民健康保険の「葬祭費」が葬儀費用に対する給付であるのと違い、健康保険の<span class="color-pink font-weight-bold">「埋葬料」「埋葬費」は埋葬費用（霊柩車・火葬費用・僧侶へのお布施など）に対する給付</span>です。<br>
                健康保険を運営する組合への申請が必要で、支給上限は5万円です。<br>
                <br>
                なお、「埋葬料」と「埋葬費」は申請者が異なります。<br>
                故人に生計を維持されていた方が申請する場合は「埋葬料」、それ以外の方（身内のいない保険者の葬儀を行った方など）が申請する場合は「埋葬費」となります。<br>
                「生計を維持されていた」とは、故人に生活費の全部または一部を負担してもらっていたという意味で、民法上の親族で無くても問題が無く、同居の有無も問われません。
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">葬祭費（国民健康保険）の申請手続き</h3>
              </div>
            </div>
          </div>

            <div class="pt-2 pb-4">
              <p class="font-size-lg-1_1 line-height-1_7">
                故人が国民健康保険に加入していた場合、亡くなった後に保険の「資格喪失」手続きが必要です。この資格喪失手続きを行ってからでなければ葬祭費の申請ができませんので注意してください。<br>
                また、申請時に必要な書類や申請期間は<span class="color-pink font-weight-bold">自治体により異なります</span>。概要を記載しますが、詳細は各自治体にご確認ください。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">資格喪失手続き</p>
              <div class="bg-lgray p-3 mb-3">
                <div class="pt-2">
                  <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>届出先</p>
                  <p class="font-size-lg-1_1 line-height-1_7">故人の住所地の市区町村役場（市役所・町役場など）</p>
                </div>

                <div class="pt-2">
                  <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>届出期間</p>
                  <p class="font-size-lg-1_1 line-height-1_7">故人が亡くなってから14日以内</p>
                </div>

                <div class="pt-2">
                  <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>必要書類</p>
                  <p class="font-size-lg-1_1 line-height-1_7">国民健康保険証、死亡を証明する書類（戸籍謄本、死亡届のコピー等）、届出者の本人確認書類（運転免許証、マイナンバーカード等）、印鑑など</p>
                </div>
              </div>
              <p class="font-size-lg-1_1 line-height-1_7">
                自治体によっては死亡届を提出することで資格喪失手続きが不要となるところや、郵送でも手続きが可能なところがあります。
              </p>
            </div>

            <div class="pt-2 pb-4">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">申請手続き</p>
              <div class="bg-lgray p-3 mb-3">
                <div class="pt-2">
                  <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>申請者</p>
                  <p class="font-size-lg-1_1 line-height-1_7"><span class="color-pink font-weight-bold">葬儀を行った方（喪主）</span></p>
                </div>

                <div class="pt-2">
                  <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>申請先</p>
                  <p class="font-size-lg-1_1 line-height-1_7">故人の住所地の市区町村役場</p>
                </div>

                <div class="pt-2">
                  <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>申請期間</p>
                  <p class="font-size-lg-1_1 line-height-1_7">葬儀を行った日の翌日から２年以内</p>
                </div>

                <div class="pt-2">
                  <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>必要書類</p>
                  <p class="font-size-lg-1_1 line-height-1_7">故人の国民健康保険証、申請者の本人確認書類（運転免許証、マイナンバーカード等）、葬儀を行った方の氏名が確認できる書類（会葬礼状、葬儀の領収書など）、振込先口座がわかるもの、葬儀に関わった費用がわかるもの（領収書など）、印鑑など</p>
                </div>

                <div class="pt-2">
                  <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>振込時期</p>
                  <p class="font-size-lg-1_1 line-height-1_7">申請からおおよそ1～2か月</p>
                </div>

                <div class="pt-2">
                  <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>給付額</p>
                  <p class="font-size-lg-1_1 line-height-1_7">1万円～7万円程度</p>
                </div>
              </div>
              <p class="font-size-lg-1_1 line-height-1_7">
                ※故人が亡くなる直前に健康保険から国民健康保険に切り替えていた場合、健康保険側から給付を受けられる場合があります。その際は健康保険の条件が適用されます。詳細は各保険組合にご確認ください。
              </p>
            </div>

            <div class="pt-2 pb-2">
              <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">注意点</p>
              <p class="font-size-lg-1_1 line-height-1_7">
                「葬祭費」は葬儀にかかった費用に対して支給される給付金のため、<span class="color-pink font-weight-bold">「直葬」のような火葬のみの葬儀では支給されない場合があります</span>。支給対象となるかどうかは事前に各自治体にお問い合わせください。
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
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">「埋葬料」「埋葬費」（健康保険）の申請手続き</h3>
              </div>
            </div>
          </div>

          <div class="pt-2 pb-4">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">資格喪失手続き</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              健康保険も国民健康保険と同様に資格喪失手続きが必要ですが、<span class="color-pink font-weight-bold">手続きは故人が勤務していた会社が行います。申請は故人が亡くなってから5日以内に行う必要があるため、速やかに勤務先に連絡してください。</span><br>
              なお、故人が亡くなったことによりご家族等が国民健康保険へ切り替えをする必要がある場合は、故人の逝去日から14日以内に現在お住まいの自治体に「国民健康保険関係届」を提出します。<br>
              提出時には以下の書類が必要です。
            </p>

            <div class="bg-lgray p-3 mb-3">
              <div class="pt-2">
                <p class="font-size-1_2 line-height-1"><span class="color-plan5">■</span>健康保険資格喪失証明書（協会けんぽや健康保険組合などが発行）</p>
                <p class="font-size-1_2 line-height-1"><span class="color-plan5">■</span>マイナンバー確認書類（加入する方全員分、無くても手続きは可能です）</p>
                <p class="font-size-1_2 line-height-1 mb-2"><span class="color-plan5">■</span>印鑑</p>
              </div>
            </div>
            <p class="font-size-lg-1_1 line-height-1_7">
              また、即日交付を希望する場合は追加で「本人確認書類（運転免許証やパスポートなど）」が必要です。
            </p>
          </div>

          <div class="pt-2 pb-2">
            <p class="font-size-1_4 font-size-lg-1_6 color-plan5 color-dgray font-weight-bold border-bottom">申請手続き</p>
            <p class="font-size-lg-1_1 line-height-1_7">
              健康保険を運営する組合のホームページ等から申請書を入手して申請します。申請書には事業主に記載してもらう箇所があります。
            </p>


            <div class="bg-lgray p-3 mb-3">
              <div class="pt-2">
                <p class="font-size-1_2 line-height-1 mb-2"><span class="color-plan5">■</span>申請者</p>

                <ul class="font-size-lg-1_1 pl-4 m-0 color-gray">
                    <li><span class="color-dgray">埋葬料：故人に生計を維持されており、埋葬を行った方</span></li>
                    <li class="pb-2"><span class="color-dgray">埋葬費：上記以外で埋葬を行った方</span></li>
                </ul>
              </div>

              <div class="pt-2">
                <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>申請先</p>
                <p class="font-size-lg-1_1 line-height-1_7">故人の住所地の市区町村役場</p>
              </div>

              <div class="pt-2">
                <p class="font-size-1_2 line-height-1 mb-2"><span class="color-plan5">■</span>申請期間</p>
                <ul class="font-size-lg-1_1 pl-4 m-0 color-gray">
                    <li><span class="color-dgray">埋葬料：逝去日の翌日から２年以内</span></li>
                    <li class="pb-2"><span class="color-dgray">埋葬費：埋葬（葬儀）を終えた日の翌日から2年以内</span></li>
                </ul>
              </div>

              <div class="pt-2">
                <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>必要書類</p>
                <p class="font-size-lg-1_1 line-height-1_7">健康保険埋葬料支給申請書、死亡診断書のコピー、火葬・埋葬許可証、葬儀にかかった費用が分かる書類など</p>
              </div>

              <div class="pt-2">
                <p class="font-size-1_2 line-height-1 mb-1"><span class="color-plan5">■</span>振込時期</p>
                <p class="font-size-lg-1_1 line-height-1_7">組合によっても異なりますが、通常は申請後2～3週間以内</p>
              </div>

              <div class="pt-2">
                <p class="font-size-1_2 line-height-1 mb-2"><span class="color-plan5">■</span>給付額</p>
                <ul class="font-size-lg-1_1 pl-4 m-0 color-gray">
                    <li><span class="color-dgray">埋葬料：5万円</span></li>
                    <li class="pb-2"><span class="color-dgray">埋葬費：埋葬費用の実費（上限5万円）</span></li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section id="04" class="pt-4 pb-3">
          <div class="pb-3">
            <div class="row align-items-center no-gutters">
              <div class="col-auto text-center mr-3">
                <div class="bg-contrast font-size-2 pr-3 pl-3 pt-2 pb-2">4</div>
              </div>
              <div class="col-9 col-lg-10">
                <h3 class="font-size-1_4 font-size-lg-2 line-height-1_4 font-weight-bold color-dgray">まとめ</h3>
              </div>
            </div>
          </div>
            <p class="font-size-lg-1_1 line-height-1_7">
              いかがでしたでしょうか。葬儀の給付金は申請が必要なため、知らないと時効期間を過ぎて申請出来なくなってしまう事があります。しかし、多額の費用がかかる葬儀費用の一部を支援してもらえる有難い制度ですので、忘れずに申請しましょう。
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
