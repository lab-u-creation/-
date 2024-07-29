<!-- コラム記事一覧 -->

<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_column.php';
require_once '../column/_database/postdata.php';
appConfigPage::$title = appConfigSite::sitemap['column']['title'];
appConfigPage::$css = <<<EOF
<style>
  .sticky-item.is-firstview {
    top: 170px;
  }
  .columm a:hover{
    opacity: 0.7;
    text-decoration: none;
  }
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<?php appFuncDisp::h1(appConfigPage::$title); ?>

<div class="container p-0">
  <div class="row no-gutters">
    <div class="col-12 col-lg-9 position-relative pl-3 pr-4">

      <div class="row no-gutters border-top">
        <?php appFuncDisp_column::list(columnDatabasePostData::data, './_module/index.php'); ?>
      </div>

      <section id="faq" class="pt-4 pb-5">
        <header class="pb-3 pt-4">
          <h2 class="font-size-1_4 font-size-lg-2 border-contrast-left pl-3 color-dgray font-weight-bold">よくある質問</h2>
        </header>
        <nav class="nav nav-pills pb-4">
          <a class="btn border rounded-pill bg-faqbtn active mr-2 mb-2" id="nav-faq-1-tab" data-toggle="tab" href="#faq-1" role="tab" aria-controls="nav-faq-1" aria-selected="true"><span class="color-dgray">手続き・サービスについて</span></a>
          <a class="btn border rounded-pill bg-faqbtn mr-2 mb-2" id="nav-faq-2-tab" data-toggle="tab" href="#faq-2" role="tab" aria-controls="nav-faq-2" aria-selected="false"><span class="color-dgray">価格・費用について</span></a>
          <a class="btn border rounded-pill bg-faqbtn mr-2 mb-2" id="nav-faq-3-tab" data-toggle="tab" href="#faq-3" role="tab" aria-controls="nav-faq-3" aria-selected="false"><span class="color-dgray">菩提寺について</span></a>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="faq-1" role="tabpanel" aria-labelledby="nav-faq-1-tab">
            <?php
            $id = 'faq-1-1';
            $q = 'はじめてのお葬式で何から始めればいいですか？';
            $a = <<<EOF
<p>まずはお電話ください。専門スタッフが今後の流れや必要な手続きについてご説明させていただきます。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-2';
            $q = '何もお葬式のことを知らないのですが、電話しても大丈夫ですか？';
            $a = <<<EOF
<p>もちろん大丈夫です。<br>葬儀に慣れている方などおりませんので、どのような些細なことでもお気兼ねなくお電話下さい。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-3';
            $q = '生前に葬儀の相談をすることはできますか？';
            $a = <<<EOF
<p>生前のご相談も承ります。ご心配なことがございましたらお気兼ねなくお問合せください。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-4';
            $q = '役所の手続きは代行してもらえますか？';
            $a = <<<EOF
<p>代行しております。死亡届や火葬許可証の申請もプラン内に含まれておりますのでご安心ください。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-5';
            $q = appConfigSite::siteName . 'にはいつ連絡すればよいですか？';
            $a = <<<EOF
<p>葬儀のご依頼はお急ぎでの対応も承っておりますので、まずはお電話ください。<br>葬儀についてのご心配事や不明点など、専門スタッフがお話を伺います。</p>
<p>どんな些細なことでも結構ですのでお気兼ねなくお問合せください。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-6';
            $q = '病院や施設等で亡くなった場合、自宅まで搬送していただけますか？';
            $a = <<<EOF
<p>ご自宅まで搬送いたしますのでご安心ください。<br>ただし、ご自宅の状況によってはご安置ができない場合もございますので、詳しくはスタッフにご相談ください。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-1-7';
            $q = '都民のお葬式の口コミ情報はありますか？';
            $a = '<p><a href="' . appConfigSite::sitemap['voice']['path'] . '">' . appConfigSite::sitemap['voice']['title'] . '</a>ページをご参照ください</p>';
            appFuncDisp::faq($id, $q, $a);
            ?>
          </div>

          <div class="tab-pane fade" id="faq-2" role="tabpanel" aria-labelledby="nav-faq-3-tab">
            <?php
            $id = 'faq-2-1';
            $q = 'プラン料金だけで本当に葬儀ができますか？';
            $a = <<<EOF
<p>各プランには、葬儀に必要となる基本的な物品やサービスを含んでいるため、プラン内容のみでご葬儀を行っていただけます。<br>
ただし、ご葬儀の日程や内容の変更によっては、追加で費用が発生する場合がございます。<br>
※ 火葬料金は別途お客様のご負担となります。</p>
<ol>
<li>各プランに含まれる内容（ご安置日数・搬送距離・式場利用料など）を超える場合</li>
<li>追加オプション（付添い安置・寺院手配など）をご希望の場合</li>
<li>事件・事故等でご遺体の状態が良くない場合</li>
</ol>
<p>
ご不明な点等がございましたら、お気軽にお問合せください。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-2-2';
            $q = 'プラン料金以外に追加費用が発生することはありませんか？';
            $a = <<<EOF
<p>各プランには葬儀に必要となる基本的な物品やサービスを含んでおりますが、火葬料金や寺院手配は別途費用が発生いたします。<br>
また、各プランに含まれている搬送距離や安置日数を超えるなど、プランの設定金額を超える場合は追加で費用が発生いたします。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-2-3';
            $q = '安置の日数がプランに含まれている日数を超えた場合、追加費用はかかりますか？';
            $a = <<<EOF
<p>各プランの規定日数を超えた場合は、1日毎に追加の費用が発生いたします。<br>火葬場の混雑状況によっては規定の日数を超えてしまう場合がございますのでご注意ください。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-2-4';
            $q = 'プラン料金にはお坊さんの手配費用も含まれていますか？';
            $a = <<<EOF
<p>お坊さんの手配費用は含まれておりません。<br>菩提寺をお持ちでない場合は都民のお葬式にてお手配が可能です。<br>菩提寺をお持ちの場合は菩提寺にご連絡下さい。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
          </div>

          <div class="tab-pane fade" id="faq-3" role="tabpanel" aria-labelledby="nav-faq-3-tab">
            <?php
            $id = 'faq-3-1';
            $q = 'お別れ葬、火葬式でも菩提寺の許可が必要ですか？';
            $a = <<<EOF
<p>必要です。読経等の宗教儀式を行わずに火葬した場合、納骨時にトラブルになることがございます。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
            <?php
            $id = 'faq-3-2';
            $q = '菩提寺のお坊さんに来てもらうことはできますか？';
            $a = <<<EOF
<p>お呼びいただけます。ただし、お坊さんへのお布施はプランには含まれておりませんのでご注意ください。</p>
EOF;
            appFuncDisp::faq($id, $q, $a);
            ?>
          </div>
        </div>
      </section>
    </div>

    <div class="col-12 col-lg-3 text-right line-height-1 p-0">
      <div class="pt-1 pl-lg-3 pr-lg-0 sticky-item" data-disp="firstview">
        <?php require_once './_module/detail.php'; ?>
      </div>
    </div>
  </div>
</div>

<?php require_once '../_tmpl/l-footer.php'; ?>
<?php require_once '../_tmpl/footer.php'; ?>
