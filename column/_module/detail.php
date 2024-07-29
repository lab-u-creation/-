<style>
  .btn_design:hover{
    cursor: pointer;
    opacity: 0.8;
   }
  .btn_column span:hover{
    opacity: 0.7;
  }
</style>

<section>
  <div class="row no-gutters">
    <div class="col-12 col-sm-6 col-lg-12 position-relative pl-3 pr-3 btn_design">
      <div class="pt-2 pb-4">
        <a href="<?php echo appConfigSite::sitemap['plan']['path']; ?>"><img src="/assets/img/column/plan_btn.png" alt="葬儀のプラン・費用" class="w-100"></a>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-12 position-relative pl-3 pr-3 btn_design">
      <div class="pt-2 pb-4">
        <a href="<?php echo appConfigSite::sitemap['about']['path']; ?>"><img src="/assets/img/column/about_btn.png" alt="初めての方へ" class="w-100"></a>
      </div>
    </div>
  </div>
</section>

<section class="pb-4 col-lg-auto">
  <header class="position-relative">
      <h3 class="bg-plan5 text-left font-size-1 font-size-lg-1_2 color-white m-0 p-3"><?php echo appConfigSite::sitemap['columnformat']['title']; ?></h3>
      <div class="position-left_middle z-index-100 w-100 d-lg-none">
          <button class="btn btn-acd collapsed p-4 w-100" type="button" data-toggle="collapse" data-target="#column-1"></button>
      </div>
  </header>

  <div id="column-1" class="collapse collapse-lg-expand">
    <nav class="navbar navbar-expand-lg p-0">
      <div class="w-100">
          <?php foreach (appConfigColumnformat::columnNavList as $value) : ?>
                  <div>
                      <a class="d-block rounded-top color-dgray border-bottom text-left p-3 pl-lg-3 text-decoration-none btn_column" href="/column/<?php echo appConfigColumnformat::column[$value]['id']; ?>">
                          <span class="color-dgray line-height-1_2"><?php echo appConfigColumnformat::column[$value]['name']; ?></span>
                      </a>
                  </div>
          <?php endforeach; ?>
      </div>
    </nav>
  </div>
</section>


<section class="pb-4 col-lg-auto">
  <header class="position-relative">
      <h3 class="bg-plan5 text-left font-size-1 font-size-lg-1_2 color-white m-0 p-3"><?php echo appConfigSite::sitemap['columnplan']['title']; ?></h3>
      <div class="position-left_middle z-index-100 w-100 d-lg-none">
          <button class="btn btn-acd collapsed p-4 w-100" type="button" data-toggle="collapse" data-target="#column-2"></button>
      </div>
  </header>

  <div id="column-2" class="collapse collapse-lg-expand">
    <nav class="navbar navbar-expand-lg p-0">
      <div class="w-100">
          <?php foreach (appConfigColumnplan::columnNavList as $value) : ?>
                  <div>
                      <a class="d-block rounded-top color-dgray border-bottom text-left p-3 pl-lg-3 text-decoration-none btn_column" href="/column/<?php echo appConfigColumnplan::column[$value]['id']; ?>">
                          <span class="color-dgray line-height-1_2"><?php echo appConfigColumnplan::column[$value]['name']; ?></span>
                      </a>
                  </div>
          <?php endforeach; ?>
      </div>
    </nav>
  </div>
</section>


<section class="pb-4 col-lg-auto">
  <header class="position-relative">
      <h3 class="bg-plan5 text-left font-size-1 font-size-lg-1_2 color-white m-0 p-3"><?php echo appConfigSite::sitemap['columnother']['title']; ?></h3>
      <div class="position-left_middle z-index-100 w-100 d-lg-none">
          <button class="btn btn-acd collapsed p-4 w-100" type="button" data-toggle="collapse" data-target="#column-3"></button>
      </div>
  </header>

  <div id="column-3" class="collapse collapse-lg-expand">
    <nav class="navbar navbar-expand-lg p-0">
      <div class="w-100">
          <?php foreach (appConfigColumnother::columnNavList as $value) : ?>
                  <div>
                      <a class="d-block rounded-top color-dgray border-bottom text-left p-3 pl-lg-3 text-decoration-none btn_column" href="/column/<?php echo appConfigColumnother::column[$value]['id']; ?>">
                          <span class="color-dgray line-height-1_2"><?php echo appConfigColumnother::column[$value]['name']; ?></span>
                      </a>
                  </div>
          <?php endforeach; ?>
      </div>
    </nav>
  </div>
</section>
