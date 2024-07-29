<div class="p-1 w-300px">
   <a href="<?php echo appConfigSite::sitemap['voicePost']['path']; ?><?php echo $value['id']; ?>" class="border rounded-1 overflow-hidden d-block text-decoration-none bg-white">
      <div class="p-3 h-210px">
        <div class="row no-gutters bg-white align-items-center">
          <div class="col-5 pr-3">
            <img src="/assets/img/blank.png" data-echo="/assets/img/voice/pic_<?php echo $value['gender']; ?>.png?20231023" class="w-100 m-auto" alt="<?php echo $value['title']; ?>">
          </div>
          <div class="col-7">
            <div class="bg-<?php echo $value['planId']; ?> rounded-pill text-center color-white p-1 pl-3 pr-3 mr-1 font-size-0_9">
               <?php echo appConfigPlan::plan[$value['planId']]['name']; ?>
             </div>
             <div class="font-size-0_9 color-dgray pt-2 text-center text-lg-left">
                <div class="d-block d-lg-inline pt-1 pt-lg-0"><?php echo $value['date']; ?></div>
             </div>

          </div>
        </div>
         <h3 class="font-size-1_2 font-size-lg-1_2 color-dgray mt-3"><?php echo $value['title']; ?></h3>
      </div>
   </a>
</div>
