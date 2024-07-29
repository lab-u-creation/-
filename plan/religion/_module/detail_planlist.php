<section class="p-2 col-12 col-md-4">
    <div class="bg-white p-0 border-gray d-block color-dgray rounded-1 overflow-hidden" href="/plan/<?php echo $plan['id']; ?>">
        <h3 class="m-0 p-3 bg-<?php echo $plan['id']; ?> color-white text-center font-size-1_2 font-size-lg-1_4">
            <span class="font-notoserif line-height-1 d-block"><?php echo $plan['name']; ?></span>
        </h3>
        <div class="text-center p-2 color-<?php echo $plan['id']; ?>">
            <?php echo $plan['overview']; ?>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center no-gutters font-size-0_8 font-size-md-1">
                <div class="col-12 col-lg-3 text-center pb-2 pb-lg-1 font-size-0_9">
                    <span class="color-gray pr-1"><i class="fa fa-user" aria-hidden="true"></i></span><?php echo $plan['numberPeople']; ?>
                </div>
                <div class="col-4 col-lg-3 text-center pl-1 pb-1">
                    <?php if ($plan['flowSougi'] === 3) : ?>
                        <div class="pt-1 pb-1 color-white bg-<?php echo $plan['id']; ?>"><?php echo $religion['tuya']; ?></div>
                    <?php else : ?>
                        <div class="pt-1 pb-1 bg-lgray color-gray"><?php echo $religion['tuya']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="col-4 col-lg-3 text-center pl-1 pb-1">
                    <?php if ($plan['flowSougi'] != 1) : ?>
                        <div class="pt-1 pb-1 color-white bg-<?php echo $plan['id']; ?>"><?php echo $religion['kokubetsu']; ?></div>
                    <?php else : ?>
                        <div class="pt-1 pb-1 bg-lgray color-gray"><?php echo $religion['kokubetsu']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="col-4 col-lg-3 text-center pl-1 pb-1">
                    <div class="pt-1 pb-1 color-white bg-<?php echo $plan['id']; ?>">火葬</div>
                </div>
            </div>
        </div>
        <div class="text-center pb-2 pb-md-4">
            <div class="color-<?php echo $plan['id']; ?>">
                <span class="font-size-2_4 font-size-lg-3 font-oswald mr-2"><?php echo $plan['price']; ?></span><span class="font-size-2 font-weight-bold">円</span>
            </div>
            <div>
                （税込&nbsp;<span class="font-oswald font-size-lg-1_4 ml-2 mr-2"><?php echo $plan['priceZei']; ?></span>円）
            </div>
        </div>
        <a href="#sec2-contents" data-trigger="#sec2-<?php echo $plan['id']; ?>" class="d-block text-center p-2 pb-2 border-top text-decoration-none font-size-1 font-size-md-0_8 font-size-lg-1 ">
            <span class="pb-1 d-block"><i class="fa fa-chevron-circle-right mr-2 color-<?php echo $plan['id']; ?>" aria-hidden="true"></i><span class="color-dgray">このプランに含まれるもの</span></span>
        </a>
    </div>
</section>