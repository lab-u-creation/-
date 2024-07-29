<section class="border-bottom">
    <header class="position-relative pt-3 pb-3">
        <div class="position-left_top z-index-100 w-100 h-100">
            <button class="btn btn-acd color-dgray w-100 h-100 text-left m-0 collapsed" type="button" data-toggle="collapse" data-target="#<?php echo $id; ?>"></button>
        </div>
        <h3 class="mb-0 p-0">
            <span class="d-inline-block w-30px align-top font-size-1">
                <img src="/assets/img/icon_q.svg" alt="Q" style="width:30px;height:30px;">
            </span>
            <span class="d-inline-block w-70per align-top pl-2 font-size-1 font-size-lg-1_2 pt-1"><?php echo $q; ?></span>
        </h3>
    </header>
    <div id="<?php echo $id; ?>" class="collapse">
        <div class="pt-3 pb-4">
            <div class="d-inline-block w-30px align-top font-size-1">
                <img src="/assets/img/icon_a.svg" alt="A" style="width:30px;height:30px;">
            </div>
            <div class="d-inline-block w-80per align-top pl-2 font-size-1 pt-1 line-height-1_7"><?php echo $a; ?></div>
        </div>
    </div>
</section>