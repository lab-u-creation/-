<div class="col-12 col-sm-6 col-lg-6 position-relative pt-4 pb-4 pl-3 pr-3 columm">
     <a href="<?php echo appConfigSite::sitemap['column']['path']; ?><?php echo $value['id']; ?>">
          <img src="/assets/img/blank.png" data-echo="/assets/img/column/<?php echo $value['id']; ?>.png" class="w-100">
        <div class="pt-2 pb-2">
          <div class="list-inline-item border bg-lgray rounded-pill pt-2 pb-2 pl-3 pr-3 font-size-0_8 color-dgray"><?php echo $value['category']; ?></div>
        </div>
          <h2 class="font-size-1_4 font-size-lg-1_2 pb-lg-3 text-decoration-none">
             <div class="color-dgray"><?php echo $value['title']; ?></div>
          </h2>
        </a>
</div>
