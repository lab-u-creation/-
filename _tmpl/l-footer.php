  <?php if (appConfigPage::$tmpl != 'form' && appConfigPage::$tmpl != 'company') : ?>
      <?php appFuncDisp::cta('業界最安値クラス＆最高品質にて<br class="d-lg-none">お手配致します'); ?>
  <?php endif; ?>
  <?php if (appConfigPage::$id === 'planindex') : ?>
      <div class="container pb-5 pr-3 pl-3 pl-sm-3 pr-sm-3 pl-lg-4 pr-lg-4" style="margin-top: -40px">
          <div class="mr-lg-4 ml-lg-4">
              <a href="<?php echo appConfigSite::sitemap['corona']['path']; ?>" onClick="gtag('event', 'click', {'event_category':'button','コンバージョン':'トップページ⇒コロナ関連葬儀をご検討の皆様へ'});">
                  <picture>
                      <source media="(min-width:768px)" srcset="/assets/img/corona/bnr_corona_l.png?20230911">
                      <img src="/assets/img/corona/bnr_corona.png?20230911" alt="コロナ関連葬儀をご検討の皆様へ" class="w-100 d-block mx-auto">
                  </picture>
              </a>
          </div>
      </div>
  <?php endif; ?>
  </main>

  <aside id="bottom" class="w-100 l-bottom is-firstview" data-disp="firstview">
      <div class="btn-totop">
          <a href="#page-top" class="pl-3 pr-3 pb-2 text-center bg-black-08 rounded font-size-2">
              <i class="fa fa-angle-up color-white" aria-hidden="true"></i>
          </a>
      </div>
      <div class="bg-base">
          <div class="container p-lg-0">
              <div class="row align-items-center no-gutters">
                  <div class="col-6 p-2">
                      <button data-toggle="modal" data-target="#modal-tel" class="btn border bg-pink text-center w-100 h-60px d-lg-none">
                          <span class="color-white font-size-1_2 font-size-sm-1_4 font-weight-bold text-left"><i class="fa fa-phone mr-2" aria-hidden="true"></i>電話相談</span>
                      </button>
                      <div class="d-none d-lg-block">
                          <div class="border rounded bg-pink text-center w-100 h-60px d-flex justify-content-center align-items-center">
                              <span class="font-size-1_4 font-size-lg-2 color-white">
                                  <i class="fa fa-phone mr-2" aria-hidden="true"></i>
                              </span>
                              <span class="font-oswald font-weight-bold font-size-0_8 font-size-lg-1_7 color-white"><?php echo appConfigSite::tel; ?></span>
                              <span class="font-size-0_8 font-size-lg-1 pl-2 p-2 pr-lg-2 color-white"><span class="d-none d-lg-inline">通話相談無料・</span><?php echo appConfigSite::telTime; ?></span>
                          </div>
                      </div>
                  </div>

                  <div class="col-3 p-2">
                      <div onclick="location.href='<?php echo appConfigSite::sitemap['contact']['path']; ?>'" class="bg-white border rounded overflow-hidden cursor-pointer">
                          <div class="row align-items-center no-gutters">
                              <div class="col-12 col-lg-4 position-relative footer-file-btn text-center color-white h-60px font-size-lg-2">
                                  <img src="/assets/img/pic_document.png?20231012" alt="資料請求" class="d-none d-lg-block w-80px position-absolute pr-2" style="top:5px;left:2px;">
                                  <div class="d-lg-none position-middlecenter w-100 font-size-1 color-dgray"><i class="fa fa-file mr-2 d-none d-sm-inline" aria-hidden="true"></i>資料<br class="d-sm-none">請求</div>
                              </div>
                              <div class="d-none d-lg-block col-12 col-lg-8 pl-2 text-center font-size-0_8 font-size-lg-1 pr-2">
                                  <div class="bg-orange color-white rounded-pill font-size-0_8 font-weight-bold">無料で即日お届け！</div>
                                  <span class="font-weight-bold">資料請求はこちら</span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-3 p-2">
                      <div data-chatbot-start='/chatbot/modal' class="bg-white border rounded overflow-hidden cursor-pointer">
                          <div class="row align-items-center no-gutters">
                              <div class="col-12 col-lg-3 bg-orange text-center color-white h-60px font-size-lg-2">
                                  <i class="fa fa-commenting position-middlecenter d-none d-lg-block" aria-hidden="true"></i>
                                  <div class="d-lg-none position-middlecenter w-100 font-size-0_8">チャットで<br>質問</div>
                              </div>
                              <div class="d-none d-lg-block col-12 col-lg-9 pl-2 text-center font-size-0_8 font-size-lg-0_9">
                                  <span class="font-weight-bold">ご質問にお答えします</span>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </aside>

  <div id="modal-tel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-tel-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header justify-content-center bg-contrast p-0">
                  <h2 class="font-size-1 pt-2 pb-2 m-0" id="modal-tel-label"><span class="pt-1 d-block">ご不安なこと、なんでもご相談下さい</span></h2>
              </div>
              <div class="modal-body p-0 pb-3 position-relative">
                  <button type="button" class="close position-right_top p-2" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="m-0 p-0 border-bottom"><img src="/assets/img/pic_modal_tel.png?202405241835" alt="<?php echo appConfigSite::siteName; ?>電話受付窓口" class="w-100 p-0 m-0"></div>
                  <div class="text-center font-size-1_2 m-0 pt-2 pb-1 color-pink font-weight-bold">通話料無料・<?php echo appConfigSite::telTime; ?></div>
                  <div class="container text-center">
                      <a href="tel:<?php echo appConfigSite::tel; ?>" class="btn font-oswald line-height-1 pt-3 pb-3 align-items-center bg-pink w-100 d-flex justify-content-center text-center text-decoration-none">
                          <span class="font-size-1_6 color-white"><i class="fa fa-phone pr-2 color-white" aria-hidden="true"></i></span>
                          <span class="font-size-1_6 color-white align-middle pb-1">電話をかける</span>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <aside id="page-append"></aside>

  <footer id="page-footer" class="l-footer bg-lgray">
      <div class="border-top pt-3 pt-lg-0 pb-4 pb-xl-0">
          <div class="container p-0 p-lg-auto">
              <div class="row no-gutters align-items-center">
                  <div class="col-12 col-lg-2 col-xl-3 text-center pb-1">
                      <a href="/" class="navbar-brand p-2">
                          <img src="/assets/img/logo_site.svg" alt="<?php echo appConfigSite::siteName; ?>" class="w-100">
                      </a>
                  </div>
                  <div class="col-12 col-lg-10 col-xl-9">
                      <nav id="nav-footer" class="font-size-lg-0_9 pt-2 pb-3">
                          <div class="pb-0 pb-lg-2">
                              <a class="d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['about']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['about']['title']; ?></span></a>
                              <a class="border-top border-lg-none d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['plan']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['plan']['title']; ?></span></a>
                              <a class="border-top border-lg-none d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['saijo']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['saijo']['title']; ?></span></a>
                              <a class="border-top border-lg-none d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['voice']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['voice']['nav']; ?></span></a>
                              <a class="border-top border-lg-none d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['column']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['column']['title']; ?></span></a>
                              <a class="border-top border-lg-none d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['hurry']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['hurry']['title']; ?></span></a>
                          </div>
                          <div class="pb-0">
                              <a class="border-top border-lg-none d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['corona']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['corona']['title']; ?></span></a>
                              <a class="border-top border-lg-none d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['serviceJitakuso']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['serviceJitakuso']['title']; ?></span></a>
                              <a class="border-top border-lg-none d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['company']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['company']['title']; ?></span></a>
                              <a class="border-top border-lg-none d-block d-lg-inline text-left text-lg-center p-2 pr-lg-2 text-decoration-none" href="<?php echo appConfigSite::sitemap['infoTermsofuse']['path']; ?>"><span class="color-black"><i class="fa fa-caret-right pr-2 pl-3 pl-lg-0" aria-hidden="true"></i><?php echo appConfigSite::sitemap['infoTermsofuse']['title']; ?></span></a>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <div class="text-center font-size-0_8 p-5 border-top">
          Copyright© <?php echo appConfigSite::siteName; ?> Corporation All Rights Reserved.
      </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
      window.jQuery || document.write('<script src="/assets/js/jquery-3.3.1.min.js"><\/script>');
  </script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/imagesLoaded.js"></script>
  <script src="/assets/js/echo.js"></script>
  <script src="/assets/js/common.js?20231223"></script>