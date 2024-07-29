<?php appFuncDisp::h1($name, $address); ?>

<section class="container pb-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="w-100per mx-auto d-block border p-2">
                <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" class="w-100">
            </div>
        </div>
        <div class="col-lg-6">
            <table class="table">
                <colgroup>
                    <col class="w-25">
                    <col class="w-75">
                </colgroup>
                <tr>
                    <th class="font-size-0_8">住所</th>
                    <td><?php echo $address; ?></td>
                </tr>
                <tr>
                    <th class="font-size-0_8">駐車場</th>
                    <td><?php echo $parking; ?></td>
                </tr>
                <tr>
                    <th class="font-size-0_8">併設火葬場</th>
                    <td><?php echo $kasou; ?></td>
                </tr>
                <tr>
                    <th class="font-size-0_8">アクセス</th>
                    <td><?php echo $access; ?></td>
                </tr>
            </table>
            <div class="w-100 h-400px bg-lgray border">
                <?php echo $map; ?>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row no-gutters">
        <div class="col-xl-6 pb-2">
            <table class="table table-bordered text-center table-sm">
                <colgroup>
                    <col class="w-25per w-lg-100px">
                    <col class="w-25per w-lg-100px">
                    <col class="w-25per w-lg-100px">
                    <col class="w-25per w-lg-100px">
                </colgroup>
                <thead>
                    <tr class="bg-lgray">
                        <th class="font-size-0_8">面会</th>
                        <th class="font-size-0_8">安置</th>
                        <th class="font-size-0_8">宿泊</th>
                        <th class="font-size-0_8">法要室</th>
                    </tr>
                </thead>
                <tbody class="font-size-2_4">
                    <tr>
                        <td><?php echo $menkai; ?></td>
                        <td><?php echo $anti; ?></td>
                        <td><?php echo $tomaru; ?></td>
                        <td><?php echo $houyou; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xl-6 pb-2">
            <table class="table table-bordered text-center table-sm">
                <colgroup>
                    <col class="w-25per w-lg-100px">
                    <col class="w-25per w-lg-100px">
                    <col class="w-25per w-lg-100px">
                    <col class="w-25per w-lg-100px">
                </colgroup>
                <thead>
                    <tr class="bg-lgray">
                        <th class="align-middle font-size-0_8">控室</th>
                        <th class="align-middle font-size-0_8">会食室</th>
                        <th class="align-middle font-size-0_8">バリア<br class="d-md-none">フリー</th>
                        <th class="align-middle font-size-0_8">風呂・<br class="d-md-none">シャワー</th>
                    </tr>
                </thead>
                <tbody class="font-size-2_4">
                    <tr>
                        <td><?php echo $hikae; ?></td>
                        <td><?php echo $room_eat; ?></td>
                        <td><?php echo $barrierfree; ?></td>
                        <td><?php echo $furo; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php appFuncDisp::cta(); ?>
</section>