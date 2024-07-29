<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if (appConfigPage::$tmpl == "home") : ?><?php echo appConfigPage::$title; ?><?php else : ?><?php echo appConfigPage::$title; ?>｜<?php echo appConfigSite::siteName; ?><?php endif; ?></title>
    <meta name="description" content="<?php echo appConfigPage::$description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo appConfigPage::$title; ?>">
    <meta property="og:url" content="<?php echo appConfigSite::baseurl; ?>">
    <meta property="og:site_name" content="<?php echo appConfigSite::siteName; ?>">
    <meta property="og:description" content="<?php echo appConfigPage::$description; ?>">
    <meta property="og:image" content="<?php echo appConfigSite::baseurl; ?>/assets/img/ogp.png">
    <meta property="og:locale" content="ja_JP">
    <?php echo appConfigPage::$meta; ?>
    
    <link rel="canonical" href="<?php if (appConfigPage::$canonical === null) : ?><?php echo appConfigSite::baseurl; ?><?php echo appConfigPage::$path; ?><?php else : ?><?php echo appConfigPage::$canonical; ?><?php endif; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="<?php echo appConfigSite::baseurl; ?>/assets/img/icon_website.png" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Noto+Serif+JP:wght@600&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/common.css?20231223" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" onload="this.media='all'">
    <?php echo appConfigPage::$css; ?>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-203166174-2"></script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5S9CV7L');
    </script>
</head>

<body id="category-<?php echo appConfigPage::$pageCategory; ?>" class="font-notosans">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S9CV7L" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
