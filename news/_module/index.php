<section class="position-relative border-bottom ">
  <a href="<?php echo appConfigSite::sitemap['newsPost']['path']; ?><?php echo $value['id']; ?>" class="news-hover">
   <div class="row no-gutters pt-4 pb-4 align-items-center arrow-news">
     <div class="col-12 col-md-3 col-lg-2">
       <div class="d-inline-block font-size-0_8 font-size-md-1 color-dgray">
          <span class="d-block d-md-inline"><?php echo $value['date']; ?></span>
       </div>
       </div>

       <div class="col-12 col-md-9 col-lg-10 pr-4">
         <div class="font-size-1">
            <div class="color-dgray"><u><?php echo $value['title']; ?></u></div>
         </div>
       </div>
     </div>
   </a>
</section>
