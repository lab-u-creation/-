<article class="container pb-3 position-relative">
    <div class="w-lg-900px mx-auto">
        <a href="/saijo/detail/<?php echo $id; ?>" class="border-boldgray mb-2 d-block color-dgray rounded-1 overflow-hidden text-decoration-none">
            <header class="pl-3 pr-3 pt-2 pb-1 border-bottom position-relative">
                <h3 class="font-size-1 font-size-lg-1_4 font-weight-bold pt-1 pt-lg-2 pb-1 pb-lg-2 m-0 text-left color-dgray">
                    <i class="fa fa-chevron-circle-right mr-2 color-orange" aria-hidden="true"></i><?php echo $name; ?>
                </h3>
            </header>
            <div class="p-3">
                <div class="row no-gutters pb-2">
                    <div class="col-5 col-lg-4">
                        <div class="thum-saijo">
                            <img src="/assets/img/spacer.png" data-echo="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                        </div>
                    </div>
                    <div class="col-7 col-lg-8 font-size-0_8 font-size-lg-1 pl-2">
                        <dl class="row m-0 p-0 color-dgray">
                            <dt class="col-6 col-lg-2 m-0 p-0 pb-1 pb-lg-0 font-weight-normal"><span class="border-gray d-block text-center line-height-1 p-1">住所</span></dt>
                            <dd class="col-12 col-lg-10 m-0 pb-2 pl-0 pl-lg-2"><?php echo $address; ?></dd>
                        </dl>
                        <dl class="row m-0 p-0 color-dgray">
                            <dt class="col-6 col-lg-2 m-0 p-0 pb-1 pb-lg-0 font-weight-normal"><span class="border-gray d-block text-center line-height-1 p-1">アクセス</span></dt>
                            <dd class="col-12 col-lg-10 m-0 pb-2 pl-0 pl-lg-2"><?php echo $access; ?></dd>
                        </dl>
                        <div class="d-none d-lg-block pt-3">
                            <div class="row no-gutters color-dgray">
                                <div class="col-3 pr-1">
                                    <?php if ($parking >= 1) : ?>
                                        <div class="border text-center bg-contrast p-lg-2 font-weight-bold">駐車場あり</div>
                                    <?php else : ?>
                                        <div class="border text-center bg-lgray color-gray p-lg-2">駐車場あり</div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-3 pr-1">
                                    <?php if ($anti >= 1) : ?>
                                        <div class="border text-center bg-contrast p-lg-2 font-weight-bold">安置可</div>
                                    <?php else : ?>
                                        <div class="border text-center bg-lgray color-gray p-lg-2">安置可</div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-3 pr-1">
                                    <?php if ($tomaru >= 1) : ?>
                                        <div class="border text-center bg-contrast p-lg-2 font-weight-bold">宿泊可</div>
                                    <?php else : ?>
                                        <div class="border text-center bg-lgray color-gray p-lg-2">宿泊可</div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-3 pr-1">
                                    <?php if ($kasou >= 1) : ?>
                                        <div class="border text-center bg-contrast p-lg-2 font-weight-bold">火葬場併設</div>
                                    <?php else : ?>
                                        <div class="border text-center bg-lgray color-gray p-lg-2">火葬場併設</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none">
                    <div class="row no-gutters color-dgray font-size-0_8">
                        <div class="col-3">
                            <?php if ($parking >= 1) : ?>
                                <div class="border text-center bg-contrast font-weight-bold pt-1 pb-1">駐車場あり</div>
                            <?php else : ?>
                                <div class="border text-center bg-lgray color-gray pt-1 pb-1">駐車場あり</div>
                            <?php endif; ?>
                        </div>
                        <div class="col-3">
                            <?php if ($anti >= 1) : ?>
                                <div class="border text-center bg-contrast font-weight-bold pt-1 pb-1">安置可</div>
                            <?php else : ?>
                                <div class="border text-center bg-lgray color-gray pt-1 pb-1">安置可</div>
                            <?php endif; ?>
                        </div>
                        <div class="col-3">
                            <?php if ($tomaru >= 1) : ?>
                                <div class="border text-center bg-contrast font-weight-bold pt-1 pb-1">宿泊可</div>
                            <?php else : ?>
                                <div class="border text-center bg-lgray color-gray pt-1 pb-1">宿泊可</div>
                            <?php endif; ?>
                        </div>
                        <div class="col-3">
                            <?php if ($kasou >= 1) : ?>
                                <div class="border text-center bg-contrast font-weight-bold pt-1 pb-1">火葬場併設</div>
                            <?php else : ?>
                                <div class="border text-center bg-lgray color-gray pt-1 pb-1">火葬場併設</div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</article>