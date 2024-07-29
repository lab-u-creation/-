<style>
@media (min-width:576px) {
  .font-size-sm-1_2{
      font-size:1.2rem;
    }
  }
</style>
<?php if ($price != null) : ?>
    <div class="col-12 col-md-6 col-xl-4 pb-3 p-md-2">
        <div class="border">
            <div class="row no-gutters bg-white align-items-top">
                <div class="col-4">
                    <img src="/assets/img/blank_square.png" alt="IMAGE" data-echo="/assets/img/plan/option/thum_<?php echo $id; ?>.png?202312251857" class="bg-lgray thum-option">
                </div>
                <div class="col-8 p-2">
                    <header class="font-size-1 font-weight-bold pb-1 color-dgray">
                        <span><?php echo $name; ?></span>
                    </header>
                    <div class="font-size-0_9">
                        <?php echo $summary; ?><?php echo $addComment; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="col-12 col-md-6 col-xl-4 pb-3 p-md-2">
        <div class="overflow-hidden border">
            <div class="row no-gutters bg-white align-items-top">
                <div class="col-4">
                    <img src="/assets/img/blank_square.png?202312251857" alt="IMAGE" data-echo="/assets/img/plan/option/thum_<?php echo $id; ?>.png?202312251857" class="bg-lgray thum-option">
                </div>
                <div class="col-8 p-2">
                    <header class="font-size-1 font-weight-bold pb-1 color-dgray">
                        <span><?php echo $name; ?></span>
                    </header>
                    <div class="font-size-0_8">
                        <?php echo $summary; ?><?php echo $addComment; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
