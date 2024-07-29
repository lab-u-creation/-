<?php
/*======================================================================

WEBサイトに関する情報

======================================================================*/
class appConfigSite
{
    const update = '20230911';
    const baseurl = "https://tomin-osohshiki.jp";
    const siteName = '都民のお葬式';
    const tel = "0120-922-720";
    const address = "";
    const catchcopy = "困ったときに頼れる東京都民の葬儀サービス";
    const telTime = "24時間365日対応";
    const mailAddres = "csp@tomin-osohshiki.jp"; //メールアドレス
    const mailAddres_test = "y-asakura@lab-unlimited.com"; //テスト用メールアドレス
    const sitemap = [
        'home' => ['path' => '/', 'title' => 'ホーム'],
        'about' => ['path' => '/about/', 'title' => 'はじめての方へ'],
        'plan' => ['path' => '/plan/', 'title' => 'プラン・料金'],
        'planPlan1' => ['path' => '/plan/plan1', 'title' => '都民のお別れ葬', 'parent' => 'plan'],
        'planPlan2' => ['path' => '/plan/plan2', 'title' => '都民の火葬式', 'parent' => 'plan'],
        'planPlan3' => ['path' => '/plan/plan3', 'title' => '都民の一日葬', 'parent' => 'plan'],
        'planPlan4' => ['path' => '/plan/plan4', 'title' => '都民の家族葬', 'parent' => 'plan'],
        'planPlan5' => ['path' => '/plan/plan5', 'title' => '都民の一般葬', 'parent' => 'plan'],
        'planReligion' => ['path' => '/plan/religion/', 'title' => '宗教にあわせたお葬式',],
        'planReligionShinto' => ['path' => '/plan/religion/shinto', 'title' => '神道のお葬式', 'parent' => 'planReligion'],
        'planReligionChirst' => ['path' => '/plan/religion/chirst', 'title' => 'キリスト教のお葬式', 'parent' => 'planReligion'],
        'planReligionYujinso' => ['path' => '/plan/religion/yujinso', 'title' => '友人葬のお葬式', 'parent' => 'planReligion'],
        'serviceJitakuso' => ['path' => '/service/jitakuso', 'title' => '自宅葬のご案内'],
        'serviceSeikatsuhogo' => ['path' => '/service/seikatsuhogo', 'title' => '生活保護葬のご案内'],
        'serviceObousan' => ['path' => '/service/obousan', 'title' => 'お坊さまのお手配'],
        'saijo' => ['path' => '/saijo/', 'title' => '式場検索'],
        'saijoArea' => ['path' => '/saijo/area', 'title' => '地域別式場案内', 'parent' => 'saijo'],
        'saijoSearch' => ['path' => '/saijo/search', 'title' => '検索結果', 'parent' => 'saijo'],
        'saijoDetail' => ['path' => '/saijo/detail', 'title' => '式場検索（詳細）', 'parent' => 'saijo'],
        'voice' => ['path' => '/voice/', 'title' => 'お客様からの声（口コミ・評判）', 'nav' => 'お客様からの声'],
        'voicePost' => ['path' => '/voice/post/', 'title' => 'お客様からの声（口コミ・評判）'],
        'company' => ['path' => '/company/', 'title' => '運営情報'],
        'hurry' => ['path' => '/hurry/', 'title' => 'お急ぎの方へ'],
        'corona' => ['path' => '/corona/', 'title' => 'コロナ関連葬儀をご検討の皆様へ'],
        'column' => ['path' => '/column/', 'title' => 'コラム・よくある質問'],
        'columnformat' => ['path' => '/columnformat', 'title' => '葬儀の形式'],
        'columnplan' => ['path' => '/columnplan', 'title' => 'プラン紹介'],
        'contact' => ['path' => '/contact/', 'title' => '資料請求フォーム'],
        'confirm' => ['path' => '/contact/confirm', 'title' => '内容確認'],
        'thanks' => ['path' => '/contact/thanks', 'title' => '送信完了'],
        'news' => ['path' => '/news/', 'title' => 'お知らせ', 'nav' => 'お知らせ'],
        'newsPost' => ['path' => '/news/post/', 'title' => 'お知らせ'],
        'columnother' => ['path' => '/columnother', 'title' => 'その他'],
        'infoTermsofuse' => ['path' => '/info/termsofuse', 'title' => '利用規約'],
    ];
}
