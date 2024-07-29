<div class="row">
    <?php foreach (appConfigArea::tokyo as $value) : ?>
        <?php if ($value[0] === '628') : ?>
            <div class="col-12 p-2">
                <h2 class="font-size-1_4 pb-2">東京23区</h2>
            </div>
        <?php elseif ($value[0] === '651') : ?>
            <div class="col-12 p-2">
                <h2 class="font-size-1_4 pt-4 pb-2">その他地域</h2>
            </div>
        <?php endif; ?>
        <div class="col-4 col-md-3 col-lg-2 p-2 font-size-0_9 font-size-lg-1"><a href="<?php echo appConfigSite::sitemap['saijoArea']['path']; ?>/<?php echo $value[1]; ?><?php echo $value[2]; ?>" class="color-dgray text-decoration-none"><i class="fa fa-chevron-circle-right pr-2 color-gray" aria-hidden="true"></i><?php echo $value[2]; ?></a></div>
    <?php endforeach; ?>
</div>