  <?php
  require_once '../../_app/http/voice/post/index.php';
    appConfigPage::$title = appHttpVoicePostIndex::$title . '｜' . appConfigSite::sitemap['voice']['title'];
    appConfigPage::$css = <<<EOF
    <style>
    h1{font-size: 1.7rem;}
    #category-voice{
      background :#fdfbf0;
    }
    .bg-img{
      background-image: url('/assets/img/voice/bg-voice.png');
      background-position: top 30px center;
      background-size: 750px;
      background-repeat: no-repeat;
      background-blend-mode: multiply;
      padding-bottom: 0 !important;
    }
    .area-post p{
      padding-bottom:1rem;
    }
    .heading::before,
    .heading::after {
      content: "";
      background-color: #444;
      height: 1px;
      width: 80px;
    }
    .heading::before {
      margin-right: 15px;
    }
    .heading::after {
      margin-left: 15px;
    }
    @media(max-width: 510px){
      .heading::before,
      .heading::after {
        display: none;
      }
    }
    @media (min-width:400px) {
      .d-ssm-block{
        display:block !important;
      }
    }
    @media (min-width:576px) {
      .bg-img{
        background-position: top 50px right -190px;
        background-size:790px;
      }
      .border-sm{
        border: 1px solid #dee2e6!important;
      }
      .border-sm-bottom{
        border-bottom: 1px solid #dee2e6!important;
      }
      .bg-sm-transparent{
        background-color: transparent !important;
      }
    }
    @media (min-width:992px) {
      .bg-img{
        background-position: top 100px right -100px;
        background-size: 870px;
      }
    }
    </style>
  EOF;
  ?>
  <?php require_once '../../_tmpl/header.php'; ?>
  <?php appConfigPage::$title = appHttpVoicePostIndex::$title; ?>
  <?php require_once '../../_tmpl/l-header.php'; ?>


  <header class="pt-4 pb-4 pt-lg-3 border-bottom">
     <div class="container pt-3 pt-md-0">
        <h1 class="font-size-lg-2_4 color-dgray font-weight-bold text-center text-lg-left mb-4 mb-lg-2"><?php echo appFuncString::format_textAdd(appConfigSite::sitemap['voice']['title'], 7, '<br class="d-md-none">'); ?></h1>
     </div>
  </header>

   <section class="bg-white">
     <div class="container-md pt-5 pb-4">
       <div class="border-sm p-sm-3 pt-sm-4 pb-sm-4 p-md-4 p-lg-5">
        <div class="w-100per mx-auto">

          <div class="row no-gutters align-items-center bg-base bg-sm-transparent p-2 p-sm-0 pb-sm-3 border-sm-bottom">
            <div class="col-auto col-lg-auto p-0 p-md-auto">
               <img src="/assets/img/voice/pic_<?php echo appHttpVoicePostIndex::$gender; ?>.png?20230912" class="w-80px w-md-100px pr-2 pr-sm-3" alt="お客様写真">
            </div>

            <div class="col-8 col-sm-auto">
              <div class="d-none d-sm-block">
                <h2 class="font-size-1_4 font-size-lg-2 color-dgray"><?php echo appHttpVoicePostIndex::$title; ?></h2>
              </div>

              <div class="pr-3 mb-1 mb-sm-0 d-inline-block ">
                <div class="bg-<?php echo appHttpVoicePostIndex::$planId; ?> rounded-pill color-white p-1 pl-3 pr-3 font-size-0_8  font-size-lg-1"><?php echo appConfigPlan::plan[appHttpVoicePostIndex::$planId]['name']; ?></div>
              </div>
               <div class="d-inline-block font-size-0_8 font-size-lg-1">
                 <span class="pr-3"><?php echo appHttpVoicePostIndex::$date; ?></span>
                  <span class="pr-3"><?php echo appHttpVoicePostIndex::$address; ?></span>
                  <span><?php echo appHttpVoicePostIndex::$name; ?><span class="pl-1">様</span></span>
               </div>
              </div>
            </div>
            <div class="d-sm-none">
              <h2 class="pt-5 pb-3 font-size-1_4 font-size-lg-2 color-dgray border-bottom"><?php echo appHttpVoicePostIndex::$title; ?></h2>
            </div>




           <div class="pt-sm-3 pb-5 font-size-lg-1_2 line-height-2 color-dgray area-post">
              <?php echo appHttpVoicePostIndex::$body; ?>
              <p class="font-size-0_8">※個人情報に配慮し、本文中の個人が特定できる内容やお写真の背景等は添削・加工させて頂いております。</p>
           </div>
           <div class="pt-3 pb-sm-3 rounded overflow-hidden">
             <h2 class="text-center font-size-1_4 font-size-lg-1_6 color-dgray heading d-flex align-items-center justify-content-center mb-4">口コミのお客様がご利用になられた<br class="d-lg-none">プラン内容</h2>

             <div class="pb-2 w-100per mx-auto">
                <table class="table m-0">
                    <thead>
                      <tr>
                        <th class="w-35per text-center align-middle font-size-1 bg-lgray p-1 p-lg-2">プラン名</th>
                        <th class="w-20per text-center align-middle font-size-1 bg-lgray p-1 p-lg-2">料金</th>
                        <th class="w-30per w-lg-40per text-center align-middle font-size-1 bg-lgray p-1 p-lg-2">プラン内容</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr id="<?php echo appHttpVoicePostIndex::$planId; ?>" class="table-bordered bg-white mb-3 m-md-0 rounded overflow-hidden" data-href="/plan/<?php echo appHttpVoicePostIndex::$planId; ?>">
                        <td class="p-2 align-middle bg-thin-<?php echo appHttpVoicePostIndex::$planId; ?>">
                          <div class="row align-items-center m-0">
                            <div class="col-4 text-center p-0 d-none d-ssm-block">
                               <img src="/assets/img/plan/<?php echo appHttpVoicePostIndex::$planId; ?>.png" class="w-100" alt="プラン写真">
                            </div>
                            <div class="col col-md-8 text-center p-2">
                              <div class="color-dgray font-size-1"><?php echo appConfigPlan::plan[appHttpVoicePostIndex::$planId]['overview']; ?></div>
                              <div class="font-size-per font-notoserif font-size-1_4 font-size-lg-1_6 color-<?php echo appHttpVoicePostIndex::$planId; ?>"><?php echo appConfigPlan::plan[appHttpVoicePostIndex::$planId]['name']; ?></div>
                            </div>
                            <div class="col-1 d-md-none p-0">
                              <div class="align-middle color-<?php echo appHttpVoicePostIndex::$planId; ?> fa fa-chevron-circle-right"></div>
                            </div>
                          </div>
                        </td>

                        <td class="p-2 align-middle text-right order3">
                          <div class="row align-items-baseline m-0 justify-content-center">
                            <div class="col-price font-size-1_4 font-size-lg-1_2 color-<?php echo appHttpVoicePostIndex::$planId; ?>"><span class="font-oswald d-inline-block mr-1 font-price"><?php echo appConfigPlan::plan[appHttpVoicePostIndex::$planId]['price']; ?></span>円</div>
                            <div class="col-tax color-dgray font-tax">(税込：<span class="font-oswald d-inline-block mr-1 font-size-1_4 font-size-lg-1_2"><?php echo appConfigPlan::plan[appHttpVoicePostIndex::$planId]['priceZei']; ?></span>円)</div>
                          </div>
                        </td>

                        <td class="p-2 align-middle text-center order2">
                          <div class="text-center pb-2"><i class="fa fa-users mr-2 color-<?php echo appHttpVoicePostIndex::$planId; ?>" aria-hidden="true"></i>参列者数目安：<?php echo appConfigPlan::plan[appHttpVoicePostIndex::$planId]['numberPeople']; ?></div>
                          <div class="container position-relative">
                              <div class="row no-gutters align-items-center justify-content-center font-content font-size-lg-1">
                                <div class="col p-1 d-none d-lg-block">
                                  <div class="bg-<?php echo appHttpVoicePostIndex::$planId; ?> color-white text-center p-1 rounded">お迎え</div>
                                </div>
                                <div class="col p-1 d-none d-lg-block">
                                  <div class="bg-<?php echo appHttpVoicePostIndex::$planId; ?> color-white text-center p-1 rounded">ご安置</div>
                                </div>
                                <div class="col p-1">
                                  <div class="bg-<?php echo appHttpVoicePostIndex::$planId; ?> color-white text-center p-1 rounded">火葬</div>
                                </div>
                                <div class="col p-1">
                                    <?php if (appHttpVoicePostIndex::$planId == 'plan1' || appHttpVoicePostIndex::$planId == 'plan2') : ?>
                                        <div class="bg-lgray color-gray text-center p-1 rounded">告別式</div>
                                    <?php else : ?>
                                        <div class="bg-<?php echo appHttpVoicePostIndex::$planId; ?> color-white text-center p-1 rounded">告別式</div>
                                    <?php endif; ?>
                                </div>
                                <div class="col p-1">
                                  <?php if (appHttpVoicePostIndex::$planId == 'plan1' || appHttpVoicePostIndex::$planId == 'plan2' || appHttpVoicePostIndex::$planId == 'plan3') : ?>
                                    <div class="bg-lgray color-gray text-center p-1 rounded">お通夜</div>
                                  <?php else : ?>
                                    <div class="bg-<?php echo appHttpVoicePostIndex::$planId; ?> color-white text-center p-1 rounded">お通夜</div>
                                  <?php endif; ?>
                                </div>
                              </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>

         </div>
        </div>

      <div class="container pt-sm-5 pb-sm-5 text-lg-center">
       <a href="<?php echo appConfigSite::sitemap['voice']['path']; ?>" class="btn bg-lgray-gradient w-100per w-lg-400px bg-white mx-auto text-center p-3 font-size-lg-1_2 text-decoration-none border d-block"><span class="color-dgray"><?php echo appConfigSite::sitemap['voice']['nav']; ?>一覧へ<i class="fa fa-chevron-circle-right ml-2 color-orange" aria-hidden="true"></i></span></a>
      </div>

    </div>

    </section>


    <?php require_once '../../_module/table.php'; ?>
    <?php require_once '../../_tmpl/l-footer.php'; ?>
    <?php require_once '../../_tmpl/footer.php'; ?>
