<header id="page-header" class="l-header w-100 bg-white position-fixed is-firstview" data-disp="firstview">
    <div class="l-header-top is-firstview" data-disp="firstview">
        <div class="d-none d-lg-block font-size-0_9 bg-lgray text-center p-1">
            <?php echo appConfigSite::catchcopy; ?>
        </div>
        <div class="container-lg p-0">
            <div class="row align-items-center no-gutters justify-content-between">
                <div class="col-7 col-lg-4 position-relative pt-lg-2 pl-2">
                    <a href="/" class="d-block"><img src="/assets/img/logo_header.svg" alt="都民のお葬式" class="w-100per mw-200px mw-lg-300px"></a>
                </div>
                <div class="col-5 col-lg-auto">
                    <div class="row align-items-center no-gutters">
                        <div class="col-6 col-lg-auto text-center line-height-1 p-0">
                            <div class="d-none d-lg-block pr-4 pr-lg-3">
                                <div class="pb-1 pt-2">
                                    <span class="border p-1 pl-3 pr-3 mr-1 font-size-0_8 d-inline-block">通話・相談無料</span>
                                    <span class="border p-1 pl-4 pr-4 font-size-0_8 d-inline-block"><?php echo appConfigSite::telTime; ?></span>
                                </div>
                                <div class="font-size-2_4 font-weight-bold text-decoration-none">
                                    <span class="color-pink font-oswald"><i class="fa fa-phone mr-2" aria-hidden="true"></i><?php echo appConfigSite::tel; ?></span>
                                </div>
                            </div>
                            <div class="d-lg-none text-center align-middle position-relative">
                                <span class="position-left_middle d-block color-white"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                <button data-toggle="modal" data-target="#modal-tel" class="btn rounded-0 font-oswald h-60px bg-pink position-relative w-100 text-center text-decoration-none">
                                    <span class="position-middlecenter color-white font-size-1_4 w-100">
                                        <i class="fa fa-phone d-block pb-1" aria-hidden="true"></i>
                                        <span class="d-block font-size-0_9">電話する</span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="col-6 col-lg-auto text-right line-height-1 p-0">
                            <div class="d-lg-none navbar-light bg-light">
                                <button class="border-0 w-100 d-block bg-white font-size-2 h-60px collapsed" type="button" data-toggle="collapse" data-target="#gnav" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-bars color-gray" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="row align-items-center no-gutters justify-content-end">
                                <div class="d-none d-lg-block pt-1 pr-2">
                                    <a href="<?php echo appConfigSite::sitemap['contact']['path']; ?>" class="btn bg-dyellow w-100 pt-2 pb-2 font-size-1_4">
                                        <span class="color-dgray font-size-1_2"><i class="fa fa-file mr-2" aria-hidden="true"></i>資料請求</span>
                                    </a>
                                </div>
                                <div class="d-none d-lg-block pt-1 pl-2">
                                    <a href="<?php echo appConfigSite::sitemap['hurry']['path']; ?>" class="btn bg-pink w-100 pt-2 pb-2 font-size-1_4">
                                        <span class="color-white font-size-1_2"><i class="fa fa-exclamation-circle mr-2 color-contrast" aria-hidden="true"></i>お急ぎの方へ</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="nav-smt" class="d-lg-none">
        <ul class="row no-gutters border-top list-style-none m-0 p-0 line-height-1 bg-lbase">
            <li class="col-4 text-center m-0 p-0"><a href="<?php echo appConfigSite::sitemap['plan']['path']; ?>" class="nav-smt-link text-decoration-none is-firstview" data-disp="firstview"><span class="color-dgray font-size-1_4 nav-smt-icon pb-1 is-firstview" data-disp="firstview"><i class="fa fa-jpy" aria-hidden="true"></i></span><span class="color-dgray font-size-0_8"><?php echo appConfigSite::sitemap['plan']['title']; ?></span></a></li>
            <li class="col-4 text-center m-0 p-0 border-left border-right"><a href="<?php echo appConfigSite::sitemap['saijo']['path']; ?>" class="nav-smt-link text-decoration-none is-firstview" data-disp="firstview"><span class="color-dgray font-size-1_4 nav-smt-icon pb-1 is-firstview" data-disp="firstview"><i class="fa fa-search" aria-hidden="true"></i></span><span class="color-dgray font-size-0_8"><?php echo appConfigSite::sitemap['saijo']['title']; ?></span></a></li>
            <li class="col-4 text-center m-0 p-0"><a href="<?php echo appConfigSite::sitemap['voice']['path']; ?>" class="nav-smt-link text-decoration-none is-firstview" data-disp="firstview"><span class="color-dgray font-size-1_4 nav-smt-icon pb-1 is-firstview" data-disp="firstview"><i class="fa fa-user" aria-hidden="true"></i></span><span class="color-dgray font-size-0_8"><?php echo appConfigSite::sitemap['voice']['nav']; ?></span></a></li>
        </ul>
    </nav>
    <nav class="navbar-expand-lg">
        <!-- h-100vh h-lg-auto overflow-y overflow-lg-auto-->
        <div id="gnav" class="collapse navbar-collapse">
            <div class="bg-white border-top w-100 overflow-y overflow-lg-auto h-80vh h-lg-auto">
                <div class="container">
                    <div class="navbar-nav justify-content-start no-gutters">
                        <div class="flex-fill" id="gnav-home">
                            <a class="nav-item nav-item-first text-decoration-none pt-3 pb-3 pt-lg-2 pb-lg-2 text-lg-center d-block <?php echo appFuncDisp::addClass(appConfigPage::$pageCategory, 'home', 'is-current'); ?>" href="<?php echo appConfigSite::sitemap['home']['path']; ?>">
                                <span class="font-size-1 color-dgray font-weight-bold p-1 d-block"><i class="fa fa-home mr-2 d-lg-none color-gray" aria-hidden="true"></i>
                                    <?php echo appConfigSite::sitemap['home']['title']; ?></span>
                            </a>
                        </div>
                        <div class="d-lg-none bg-base" id="gnav-hurry">
                            <a class="nav-item text-decoration-none pt-3 pb-3 pt-lg-2 pb-lg-2 text-lg-center d-block <?php echo appFuncDisp::addClass(appConfigPage::$pageCategory, 'hurry', 'is-current'); ?>" href="<?php echo appConfigSite::sitemap['hurry']['path']; ?>">
                                <span class="font-size-1 color-dgray font-weight-bold p-1 d-block">
                                    <i class="fa fa-exclamation-triangle mr-2 color-pink" aria-hidden="true"></i><?php echo appConfigSite::sitemap['hurry']['title']; ?></span>
                            </a>
                        </div>
                        <div class="flex-fill" id="gnav-info">
                            <a class="nav-item text-decoration-none pt-3 pb-3 pt-lg-2 pb-lg-2 text-lg-center d-block <?php echo appFuncDisp::addClass(appConfigPage::$pageCategory, 'about', 'is-current'); ?>" href="<?php echo appConfigSite::sitemap['about']['path']; ?>">
                                <span class="font-size-1 color-dgray font-weight-bold p-1 d-block"><?php echo appConfigSite::sitemap['about']['title']; ?></span>
                            </a>
                        </div>
                        <div class="flex-fill" id="gnav-plan">
                            <a class="nav-item text-decoration-none pt-3 pb-3 pt-lg-2 pb-lg-2 text-lg-center d-block <?php echo appFuncDisp::addClass(appConfigPage::$pageCategory, 'plan', 'is-current'); ?>" href="<?php echo appConfigSite::sitemap['plan']['path']; ?>" data-megamenu-open>
                                <span class="font-size-1 color-dgray font-weight-bold p-1 d-block"><?php echo appConfigSite::sitemap['plan']['title']; ?><i class="fa fa-caret-down ml-2 d-none d-lg-inline" aria-hidden="true"></i></span>
                            </a>
                            <div class="l-megamenu border-top" data-megamenu>
                                <div class="container pt-2 pb-2 pl-2 pr-2">
                                    <p class="m-0 pb-2 font-weight-bold d-none d-lg-block">プラン・料金</p>
                                    <nav class="row no-gutters">
                                        <?php foreach (appConfigPlan::planNavList as $value) : ?>
                                            <div class="col-12 col-lg p-lg-1">
                                                <a class="mb-1 border border-lg-none text-decoration-none d-flex d-lg-block align-items-center bg-white" href="/plan/<?php echo appConfigPlan::plan[$value]['id']; ?>">
                                                    <picture class="d-none d-lg-block h-100px overflow-hidden">
                                                        <source media="(min-width:720px)" srcset="/assets/img/plan/nav/<?php echo appConfigPlan::plan[$value]['id']; ?>.png?<?php echo appConfigSite::update; ?>">
                                                        <img src="/assets/img/blank.png?<?php echo appConfigSite::update; ?>" alt="<?php echo appConfigPlan::plan[$value]['name']; ?>" class="w-100">
                                                    </picture>
                                                    <div class="bg-thin-<?php echo appConfigPlan::plan[$value]['id']; ?> p-2 text-lg-center font-weight-bold color-dgray line-height-1 w-40per w-lg-auto mb-lg-2">
                                                        <span class="p-1 p-lg-0 font-size-0_9 font-size-lg-1"><?php echo appConfigPlan::plan[$value]['name']; ?></span>
                                                    </div>
                                                    <div class="text-lg-right line-height-1 pl-2 p-lg-0">
                                                        <span class="font-oswald color-pink text-right font-size-lg-2"><?php echo appConfigPlan::plan[$value]['price']; ?><span class="font-size-lg-1_4 pl-1 font-weight-bold">円</span></span>
                                                        <span class="color-dgray d-inline d-lg-block font-size-0_6 font-size-lg-0_8 pt-lg-2">（税込：<span class="font-oswald font-size-lg-1_2 pr-1"><?php echo appConfigPlan::plan[$value]['priceZei']; ?></span>円）</span>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </nav>
                                </div>
                                <div class="border-top">
                                    <div class="container pt-2 pb-2 pl-2 pr-2">
                                        <p class="m-0 pb-2 font-weight-bold d-none d-lg-block"><?php echo appConfigSite::sitemap['planReligion']['title']; ?></p>
                                        <nav class="row no-gutters">
                                            <?php foreach (appConfigPlan::religion as $navReligion) : ?>
                                                <div class="col-12 col-lg p-lg-1">
                                                    <a class="border border-lg-none text-decoration-none d-flex d-lg-block align-items-center bg-white" href="<?php echo appConfigSite::sitemap['planReligion']['path']; ?><?php echo $navReligion['id']; ?>">
                                                        <picture class="d-none d-lg-block h-100px overflow-hidden">
                                                            <source media="(min-width:720px)" srcset="/assets/img/plan/plan_<?php echo $navReligion['id']; ?>.png?<?php echo appConfigSite::update; ?>">
                                                            <img src="/assets/img/blank.png?<?php echo appConfigSite::update; ?>" alt="<?php echo $navReligion['name']; ?>" class="w-100">
                                                        </picture>
                                                        <div class="p-2 text-lg-center color-dgray line-height-1">
                                                            <i class="fa fa-chevron-circle-right mr-2 color-orange d-lg-none" aria-hidden="true"></i>
                                                            <span class="font-size-0_9 font-size-lg-1"><?php echo $navReligion['name']; ?></span>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endforeach; ?>
                                            <div class="col-12 col-lg p-lg-1"></div>
                                            <div class="col-12 col-lg p-lg-1"></div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <nav class="container pb-3 pt-2 pt-lg-0 pb-lg-2 pl-2 pr-2">
                                        <a href="<?php echo appConfigSite::sitemap['corona']['path']; ?>" class="d-block d-lg-inline-block bg-white p-2 text-decoration-none border border-lg-none"><i class="fa fa-chevron-circle-right mr-2 color-orange" aria-hidden="true"></i><span class="color-dgray"><?php echo appConfigSite::sitemap['corona']['title']; ?></span></a>
                                        <a href="<?php echo appConfigSite::sitemap['serviceJitakuso']['path']; ?>" class="d-block d-lg-inline-block bg-white p-2 text-decoration-none border border-lg-none"><i class="fa fa-chevron-circle-right mr-2 color-orange" aria-hidden="true"></i><span class="color-dgray"><?php echo appConfigSite::sitemap['serviceJitakuso']['title']; ?></span></a>
                                        <a href="<?php echo appConfigSite::sitemap['serviceSeikatsuhogo']['path']; ?>" class="d-block d-lg-inline-block bg-white p-2 text-decoration-none border border-lg-none"><i class="fa fa-chevron-circle-right mr-2 color-orange" aria-hidden="true"></i><span class="color-dgray"><?php echo appConfigSite::sitemap['serviceSeikatsuhogo']['title']; ?></span></a>
                                        <a href="<?php echo appConfigSite::sitemap['serviceObousan']['path']; ?>" class="d-block d-lg-inline-block bg-white p-2 text-decoration-none border border-lg-none"><i class="fa fa-chevron-circle-right mr-2 color-orange" aria-hidden="true"></i><span class="color-dgray"><?php echo appConfigSite::sitemap['serviceObousan']['title']; ?></span></a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="flex-fill" id="gnav-saijo">
                            <a class="nav-item text-decoration-none pt-3 pb-3 pt-lg-2 pb-lg-2 text-lg-center d-block <?php echo appFuncDisp::addClass(appConfigPage::$pageCategory, 'saijo', 'is-current'); ?>" href="<?php echo appConfigSite::sitemap['saijo']['path']; ?>">
                                <span class="font-size-1 color-dgray font-weight-bold p-1 d-block"><?php echo appConfigSite::sitemap['saijo']['title']; ?></span>
                            </a>
                        </div>
                        <div class="flex-fill" id="gnav-voice">
                            <a class="nav-item text-decoration-none pt-3 pb-3 pt-lg-2 pb-lg-2 text-lg-center d-block <?php echo appFuncDisp::addClass(appConfigPage::$pageCategory, 'voice', 'is-current'); ?>" href="<?php echo appConfigSite::sitemap['voice']['path']; ?>">
                                <span class="font-size-1 color-dgray font-weight-bold p-1 d-block"><?php echo appConfigSite::sitemap['voice']['nav']; ?></span>
                            </a>
                        </div>
                        <div class="flex-fill" id="gnav-column">
                            <a class="nav-item text-decoration-none pt-3 pb-3 pt-lg-2 pb-lg-2 text-lg-center d-block <?php echo appFuncDisp::addClass(appConfigPage::$pageCategory, 'column', 'is-current'); ?>" href="<?php echo appConfigSite::sitemap['column']['path']; ?>">
                                <span class="font-size-1 color-dgray font-weight-bold p-1 d-block"><?php echo appConfigSite::sitemap['column']['title']; ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="d-lg-none text-center w-100 pt-4 pb-4 line-height-1">
                        <div class="font-size-0_8">都民専用葬儀デスク</div>
                        <div class="font-size-2_4 font-oswald line-height-1"><span class="color-pink"><i class="fa fa-phone mr-2" aria-hidden="true"></i><?php echo appConfigSite::tel; ?></span></div>
                        <div class="font-size-0_8 line-height-1">通話・相談無料／<?php echo appConfigSite::telTime; ?></div>
                        <a href="<?php echo appConfigSite::sitemap['contact']['path']; ?>" class="btn bg-dyellow w-200px pt-2 pb-2 mt-3 font-size-1_4">
                            <span class="color-dgray font-size-1_2"><i class="fa fa-file mr-2" aria-hidden="true"></i>資料請求</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


<main class="mh-100vh bg-img">

    <div id="page-top" class="l-wrap font-notosans">
        <?php if (appConfigPage::$tmpl != 'home') : ?>
            <div class="container pt-4 pb-2 d-none d-md-block">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent m-0 p-0 font-size-0_8 font-size-lg-1">
                        <li class="breadcrumb-icon"><a href="/" class="color-gray"><i class="fa fa-home mr-2" aria-hidden="true"></i><span class="d-none d-lg-inline">HOME</span></a></li>
                        <?php /*判断：親カテゴリが存在する場合、ハイパーリンクを追加*/ ?>
                        <?php if (isset(appConfigSite::sitemap[appConfigPage::$pageCategory])) : ?>
                            <?php if (appConfigSite::sitemap[appConfigPage::$pageCategory]['path'] !== appConfigPage::$path) : ?>
                                <li class="breadcrumb-icon" aria-current="page">
                                    <a href="<?php echo appConfigSite::sitemap[appConfigPage::$pageCategory]['path']; ?>" class="color-gray">
                                        <?php echo appConfigSite::sitemap[appConfigPage::$pageCategory]['title']; ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php /*判断：独自のパンくずを追加したい場合、ハイパーリンクを追加*/ ?>
                        <?php if (appConfigPage::$addBreadcrumb['path'] != null) : ?>
                            <li class="breadcrumb-icon" aria-current="page">
                                <a href="<?php echo appConfigPage::$addBreadcrumb['path']; ?>" class="color-gray">
                                    <?php echo appConfigPage::$addBreadcrumb['title']; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li aria-current="page"><?php echo appConfigPage::$title; ?></li>
                    </ol>
                </nav>
            </div>
        <?php endif; ?>
    </div>