<section class="mb-4 voice_link" data-item="<?php echo $value['planId']; ?>">
  <a href="<?php echo appConfigSite::sitemap['voicePost']['path']; ?><?php echo $value['id']; ?>" class="w-100 btn text-decoration-none bg-white p-3 border p-sm-4">
    <div class="text-left d-md-none">
      <h2 class="font-size-1_4 font-size-md-1_6"><?php echo $value['title']; ?></h2>
    </div>

    <div class="col-12 p-0 p-md-2">
      <div class="overflow-hidden">
        <div class="row no-gutters bg-white align-items-center">
          <div class="col-auto col-sm-2 col-lg-auto">
            <img src="/assets/img/blank_square.png" data-echo="/assets/img/voice/pic_<?php echo $value['gender']; ?>.png?20231023" class="w-80px w-md-100px pr-2 pr-sm-3" alt="お客様写真">
          </div>
          <div class="col-8 col-sm-9 col-lg-auto text-left">
            <h2 class="font-size-1_4 font-size-md-1_6 d-none d-md-block"><?php echo $value['title']; ?></h2>
            <div class="w-160px d-block d-sm-inline-block">
              <p class="bg-<?php echo $value['planId']; ?> rounded-pill color-white text-center p-1 pl-3 pr-3 font-size-0_8 font-size-lg-1 mr-2 mb-0 mb-md-0"><?php echo appConfigPlan::plan[$value['planId']]['name']; ?></p>
            </div>
            <div class="d-inline-block font-size-0_8 font-size-lg-1 color-dgray">
              <span class="pr-3 d-block d-sm-inline"><?php echo $value['date']; ?></span>
              <span class="pr-3"><i class="fa fa-user pr-2" aria-hidden="true"></i><?php echo $value['address']; ?></span>
              <span class="pr-3"><?php echo $value['name']; ?>様</span>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-3">
        <p class="d-md-none text-left color-dgray font-size-1 font-size-lg-1"><?php echo appFuncString::substr($value['body'], '47'); ?></p>
        <p class="d-none d-md-block text-left color-dgray font-size-1 font-size-lg-1"><?php echo appFuncString::substr($value['body'], '100'); ?></p>
      </div>

      <div class="color-orange font-size-1 text-right">続きを読む<i class="fa fa-chevron-circle-right ml-2 color-orange" aria-hidden="true"></i></div>
    </div>

  </a>
</section>
