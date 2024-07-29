<section data-chatbot-id="<?php echo $currentId; ?>">
    <?php if ($tmpl != 'top') : ?>
        <header class="pl-5 trans trans-wait-3" data-animation>
            <h3 class="font-size-0_9 bg-contrast color-black p-3 mb-3 font-size-1 rounded-1 line-height-1_4"><?php echo $title; ?></h3>
        </header>
    <?php endif; ?>
    <div>
        <div class="font-size-0_9 bg-white p-3 mb-3 rounded-1 trans <?php if ($tmpl != 'top') echo 'trans-wait-6'; ?>" data-animation>
            <?php if ($body != null) : ?>
                <p><?php echo $body; ?></p>
            <?php endif; ?>
            <div class="pb-3">
                <?php if ($menuCount != 0) : ?>
                    <?php foreach ($menu as $value) : ?>
                        <button data-select="<?php echo $value; ?>" class="w-100 border bg-base text-left p-2 pl-3 mb-2 rounded-1">
                            <?php echo $data[$value]['title']; ?>
                        </button>
                    <?php endforeach; ?>
                <?php else : ?>
                    <span class="text-center d-block">都民のお葬式 お客様窓口</span>
                    <span class="text-center font-size-1_4 font-weight-bold color-pink d-block font-Oswald">
                        <i class="fa fa-phone mr-2" aria-hidden="true"></i><?php echo appConfigSite::tel; ?></span></span>

                    <div class="p-2 w-md-400px w-lg-100per m-auto">
                        <div onclick="location.href='<?php echo appConfigSite::sitemap['contact']['path']; ?>'" class="bg-white border rounded overflow-hidden cursor-pointer">
                            <div class="row align-items-center no-gutters">
                                <div class="col-12 col-lg-4 position-relative footer-file-btn text-center color-white h-60px font-size-lg-2">
                                    <img src="/assets/img/pic_document.png?20231012" alt="資料請求" class="d-none d-lg-block w-100 position-absolute pr-2" style="bottom:-5px;left:2px;">
                                    <div class="d-lg-none position-middlecenter w-100 font-size-1 color-dgray"><i class="fa fa-file mr-2" aria-hidden="true"></i>資料請求</div>
                                </div>
                                <div class="d-none d-lg-block col-12 col-lg-8 pl-2 text-center font-size-0_8 font-size-lg-1 pr-2">
                                  <div class="bg-orange color-white rounded-pill font-size-0_8 font-weight-bold">無料で即日お届け！</div>
                                    <span class="font-weight-bold">資料請求はこちら</span>
                                </div>
                            </div>
                        </div>
                      </div>


                <?php endif; ?>
            </div>
            <?php if ($tmpl != 'top') : ?>
                <button data-select="<?php echo $prevId; ?>" class="w-100 border bg-lgray text-left p-2 pl-3 mb-2 rounded-1">
                    直前の選択肢に戻る
                </button>
            <?php endif; ?>
            <?php if ($menuCount === 0) : ?>
                <button data-select="p" class="w-100 bg-lgray border text-left p-2 pl-3 mb-2 rounded-1">
                    最初に戻る
                </button>
            <?php endif; ?>
        </div>
    </div>
</section>
