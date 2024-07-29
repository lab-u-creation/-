<style>
  table {
    border-collapse: collapse;
  }

  .w-35per {
    width: 35%;
  }

  .table-bordered td,
  .table-bordered th,
  .table thead th {
    border: 1px solid #999;
  }

  .bg-thin-plan1,
  .bg-thin-plan2 {
    background: #f0e2da;
  }

  .bg-thin-plan3 {
    background: #e1ddea;
  }

  .bg-thin-plan4 {
    background: #d4dcd7;
  }

  .bg-thin-plan5 {
    background: #d2d9e0;
  }

  .area-post p {
    padding-bottom: 1rem;
  }

  .col-price {
    position: relative;
    width: 100%;
  }

  .col-tax {
    position: relative;
    width: 100%;
  }

  .font-price {
    font-size: 1.8rem;
  }

  .font-tax {
    font-size: 0.8rem;
  }

  .heading {
    align-items: center;
    /* 横線を上下中央 */
    display: flex;
    /* 文字と横線を横並び */
    justify-content: center;
    /* 文字を中央寄せ */
  }

  .heading::before,
  .heading::after {
    background-color: #444;
    /* 横線の色 */
    content: "";
    height: 1px;
    /* 横線の高さ */
    width: 80px;
    /* 横線の長さ */
  }

  .heading::before {
    margin-right: 15px;
    /* 文字との余白 */
  }

  .heading::after {
    margin-left: 15px;
    /* 文字との余白 */
  }

  .table tr:hover td {
    background-color: #f0e2da;
  }

  #plan3:hover td {
    background-color: #e1ddea;
  }

  #plan1:hover td,
  #plan2:hover td {
    background-color: #f0e2da;
  }

  #plan3:hover td {
    background-color: #e1ddea;
  }

  #plan4:hover td {
    background-color: #d4dcd7;
  }

  #plan5:hover td {
    background-color: #d2d9e0;
  }

  #plan1:hover td:first-child,
  #plan2:hover td:first-child {
    background: #e9d3c7;
  }

  #plan3:hover td:first-child {
    background: #cfc5e3;
  }

  #plan4:hover td:first-child {
    background: #bbccc2;
  }

  #plan5:hover td:first-child {
    background: #bacad9;
  }

  tr[data-href] {
    cursor: pointer;
  }

  @media (min-width:400px) {
    .d-ssm-block {
      display: block !important;
    }
  }

  @media (min-width: 992px) {
    .container-2 {
      max-width: 1060px;
    }
  }

  @media (max-width: 1199px) {
    .font-content {
      font-size: 0.8rem;
    }
  }

  @media(max-width:767px) {
    thead {
      display: none;
    }

    tr,
    th,
    td {
      display: block;
    }

    tr {
      display: grid;
      flex-wrap: wrap;
    }

    .col-price {
      width: auto;
    }

    .col-tax {
      width: auto;
    }

    .font-price {
      font-size: 3rem;
    }

    .font-tax {
      padding-left: 10px;
    }

    .order3 {
      order: 3 !important;
    }

    .order2 {
      order: 2 !important;
    }

    .table-bordered td,
    .table-bordered th {
      border: transparent !important;
    }

    .font-content {
      font-size: 1rem;
    }
  }

  @media (min-width:992px) {
    .w-lg-40per {
      width: 40%;
    }
  }

  @media(max-width: 767px) {
    .font-size-per {
      font-size: 210%;
    }
  }

  @media(max-width:460px) {
    .font-price {
      font-size: 2.4rem;
    }

    .font-size-per {
      font-size: 160%;
    }
  }
</style>

<section class="bg-white">
  <div class="container pb-4 p-lg-0">
    <div class="w-100per w-lg-75 mx-auto">

      <div class="pt-2">
        <?php if (appConfigPage::$pageCategory != 'service') : ?>
          <h2 class="font-size-1_4 font-size-md-1_4 font-size-lg-2 font-weight-bold color-dgray mb-4 mt-5 text-center">この価格で<br class="d-sm-none">お葬式が行えます</h2>
        <?php endif; ?>

        <div class="pb-2 w-100per w-lg-90per mx-auto">
          <table class="table m-0">

            <thead>
              <tr>
                <th class="w-35per text-center align-middle font-size-1 bg-lgray p-1 p-lg-2">プラン名</th>
                <th class="w-20per text-center align-middle font-size-1 bg-lgray p-1 p-lg-2">料金</th>
                <th class="w-30per w-lg-40per text-center align-middle font-size-1 bg-lgray p-1 p-lg-2">プラン内容</th>
              </tr>
            </thead>

            <tbody>
              <tr id="plan1" class="table-bordered bg-white mb-3 m-md-0 rounded overflow-hidden" data-href="/plan/<?php echo appConfigPlan::plan['plan1']['id']; ?>">
                <td class="p-2 align-middle bg-thin-<?php echo appConfigPlan::plan['plan1']['id']; ?>">
                  <div class="row align-items-center m-0">
                    <div class="col-4 text-center p-0 d-none d-ssm-block">
                      <img src="/assets/img/plan/<?php echo appConfigPlan::plan['plan1']['id']; ?>.png" class="w-100" alt="プラン写真">
                    </div>
                    <div class="col col-md-8 text-center p-2">
                      <div class="color-dgray font-size-1"><?php echo appConfigPlan::plan['plan1']['overview']; ?></div>
                      <div class="font-size-per font-notoserif font-size-1_4 font-size-lg-1_6 color-<?php echo appConfigPlan::plan['plan1']['id']; ?>"><?php echo appConfigPlan::plan['plan1']['name']; ?></div>
                    </div>
                    <div class="col-1 d-md-none p-0">
                      <div class="align-middle color-<?php echo appConfigPlan::plan['plan1']['id']; ?> fa fa-chevron-circle-right"></div>
                    </div>
                  </div>
                </td>

                <td class="p-2 align-middle text-right order3">
                  <div class="row align-items-baseline m-0 justify-content-center">
                    <div class="col-price font-size-1_4 font-size-lg-1_2 color-<?php echo appConfigPlan::plan['plan1']['id']; ?>"><span class="font-oswald d-inline-block mr-1 font-price"><?php echo appConfigPlan::plan['plan1']['price']; ?></span>円</div>
                    <div class="col-tax color-dgray font-tax">(税込：<span class="font-oswald d-inline-block mr-1 font-size-1_4 font-size-lg-1_2"><?php echo appConfigPlan::plan['plan1']['priceZei']; ?></span>円)</div>
                  </div>
                </td>

                <td class="p-2 align-middle text-center order2">
                  <div class="text-center pb-2"><i class="fa fa-users mr-2 color-<?php echo appConfigPlan::plan['plan1']['id']; ?>" aria-hidden="true"></i>参列者数目安：<?php echo appConfigPlan::plan['plan1']['numberPeople']; ?></div>
                  <div class="container position-relative">
                    <div class="row no-gutters align-items-center justify-content-center font-content font-size-lg-1">
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan1']['id']; ?> color-white text-center p-1 rounded">お迎え</div>
                      </div>
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan1']['id']; ?> color-white text-center p-1 rounded">ご安置</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-lgray color-gray text-center p-1 rounded">お通夜</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-lgray color-gray text-center p-1 rounded">告別式</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan1']['id']; ?> color-white text-center p-1 rounded">火葬</div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr id="plan2" class="table-bordered bg-white mb-3 m-md-0 rounded overflow-hidden" data-href="/plan/<?php echo appConfigPlan::plan['plan2']['id']; ?>">
                <td class="p-2 align-middle bg-thin-<?php echo appConfigPlan::plan['plan1']['id']; ?>">
                  <div class="row align-items-center m-0">
                    <div class="col-4 text-center p-0 d-none d-ssm-block">
                      <img src="/assets/img/plan/<?php echo appConfigPlan::plan['plan2']['id']; ?>.png" class="w-100" alt="プラン写真">
                    </div>
                    <div class="col col-md-8 text-center p-2">
                      <div class="color-dgray font-size-1"><?php echo appConfigPlan::plan['plan2']['overview']; ?></div>
                      <div class="font-size-per font-notoserif font-size-1_4 font-size-lg-1_6 color-<?php echo appConfigPlan::plan['plan1']['id']; ?>"><?php echo appConfigPlan::plan['plan2']['name']; ?></div>
                    </div>
                    <div class="col-1 d-md-none p-0">
                      <div class="align-middle color-<?php echo appConfigPlan::plan['plan2']['id']; ?> fa fa-chevron-circle-right"></div>
                    </div>
                  </div>
                </td>

                <td class="p-2 align-middle text-right order3">
                  <div class="row align-items-baseline m-0 justify-content-center">
                    <div class="col-price font-size-1_4 font-size-lg-1_2 color-<?php echo appConfigPlan::plan['plan2']['id']; ?>"><span class="font-oswald d-inline-block mr-1 font-price"><?php echo appConfigPlan::plan['plan2']['price']; ?></span>円</div>
                    <div class="col-tax color-dgray font-tax">(税込：<span class="font-oswald d-inline-block mr-1 font-size-1_4 font-size-lg-1_2"><?php echo appConfigPlan::plan['plan2']['priceZei']; ?></span>円)</div>
                  </div>
                </td>

                <td class="p-2 align-middle text-center order2">
                  <div class="text-center pb-2"><i class="fa fa-users mr-2 color-<?php echo appConfigPlan::plan['plan2']['id']; ?>" aria-hidden="true"></i>参列者数目安：<?php echo appConfigPlan::plan['plan2']['numberPeople']; ?></div>
                  <div class="container position-relative">
                    <div class="row no-gutters align-items-center justify-content-center font-content font-size-lg-1">
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan2']['id']; ?> color-white text-center p-1 rounded">お迎え</div>
                      </div>
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan2']['id']; ?> color-white text-center p-1 rounded">ご安置</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-lgray color-gray text-center p-1 rounded">お通夜</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-lgray color-gray text-center p-1 rounded">告別式</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan2']['id']; ?> color-white text-center p-1 rounded">火葬</div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr id="plan3" class="table-bordered bg-white mb-3 m-md-0 rounded overflow-hidden" data-href="/plan/<?php echo appConfigPlan::plan['plan3']['id']; ?>">
                <td class="p-2 align-middle bg-thin-<?php echo appConfigPlan::plan['plan3']['id']; ?>">
                  <div class="row align-items-center m-0">
                    <div class="col-4 text-center p-0 d-none d-ssm-block">
                      <img src="/assets/img/plan/<?php echo appConfigPlan::plan['plan3']['id']; ?>.png" class="w-100" alt="プラン写真">
                    </div>
                    <div class="col col-md-8 text-center p-2">
                      <div class="color-dgray font-size-1"><?php echo appConfigPlan::plan['plan3']['overview']; ?></div>
                      <div class="font-size-per font-notoserif font-size-1_4 font-size-lg-1_6 color-<?php echo appConfigPlan::plan['plan3']['id']; ?>"><?php echo appConfigPlan::plan['plan3']['name']; ?></div>
                    </div>
                    <div class="col-1 d-md-none p-0">
                      <div class="align-middle color-<?php echo appConfigPlan::plan['plan3']['id']; ?> fa fa-chevron-circle-right"></div>
                    </div>
                  </div>
                </td>

                <td class="p-2 align-middle text-right order3">
                  <div class="row align-items-baseline m-0 justify-content-center">
                    <div class="col-price font-size-1_4 font-size-lg-1_2 color-<?php echo appConfigPlan::plan['plan3']['id']; ?>"><span class="font-oswald d-inline-block mr-1 font-price"><?php echo appConfigPlan::plan['plan3']['price']; ?></span>円</div>
                    <div class="col-tax color-dgray font-tax">(税込：<span class="font-oswald d-inline-block mr-1 font-size-1_4 font-size-lg-1_2"><?php echo appConfigPlan::plan['plan3']['priceZei']; ?></span>円)</div>
                  </div>
                </td>

                <td class="p-2 align-middle text-center order2">
                  <div class="text-center pb-2"><i class="fa fa-users mr-2 color-<?php echo appConfigPlan::plan['plan3']['id']; ?>" aria-hidden="true"></i>参列者数目安：<?php echo appConfigPlan::plan['plan3']['numberPeople']; ?></div>
                  <div class="container position-relative">
                    <div class="row no-gutters align-items-center justify-content-center font-content font-size-lg-1">
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan3']['id']; ?> color-white text-center p-1 rounded">お迎え</div>
                      </div>
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan3']['id']; ?> color-white text-center p-1 rounded">ご安置</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-lgray color-gray text-center p-1 rounded">お通夜</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan3']['id']; ?> color-white text-center p-1 rounded">告別式</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan3']['id']; ?> color-white text-center p-1 rounded">火葬</div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr id="plan4" class="table-bordered bg-white mb-3 m-md-0 rounded overflow-hidden" data-href="/plan/<?php echo appConfigPlan::plan['plan4']['id']; ?>">
                <td class="p-2 align-middle bg-thin-<?php echo appConfigPlan::plan['plan4']['id']; ?>">
                  <div class="row align-items-center m-0">
                    <div class="col-4 text-center p-0 d-none d-ssm-block">
                      <img src="/assets/img/plan/<?php echo appConfigPlan::plan['plan4']['id']; ?>.png" class="w-100" alt="プラン写真">
                    </div>
                    <div class="col col-md-8 text-center p-2">
                      <div class="color-dgray font-size-1"><?php echo appConfigPlan::plan['plan4']['overview']; ?></div>
                      <div class="font-size-per font-notoserif font-size-1_4 font-size-lg-1_6 color-<?php echo appConfigPlan::plan['plan4']['id']; ?>"><?php echo appConfigPlan::plan['plan4']['name']; ?></div>
                    </div>
                    <div class="col-1 d-md-none p-0">
                      <div class="align-middle color-<?php echo appConfigPlan::plan['plan4']['id']; ?> fa fa-chevron-circle-right"></div>
                    </div>
                  </div>
                </td>

                <td class="p-2 align-middle text-right order3">
                  <div class="row align-items-baseline m-0 justify-content-center">
                    <div class="col-price font-size-1_4 font-size-lg-1_2 color-<?php echo appConfigPlan::plan['plan4']['id']; ?>"><span class="font-oswald d-inline-block mr-1 font-price"><?php echo appConfigPlan::plan['plan4']['price']; ?></span>円</div>
                    <div class="col-tax color-dgray font-tax">(税込：<span class="font-oswald d-inline-block mr-1 font-size-1_4 font-size-lg-1_2"><?php echo appConfigPlan::plan['plan4']['priceZei']; ?></span>円)</div>
                  </div>
                </td>

                <td class="p-2 align-middle text-center order2">
                  <div class="text-center pb-2"><i class="fa fa-users mr-2 color-<?php echo appConfigPlan::plan['plan4']['id']; ?>" aria-hidden="true"></i>参列者数目安：<?php echo appConfigPlan::plan['plan4']['numberPeople']; ?></div>
                  <div class="container position-relative">
                    <div class="row no-gutters align-items-center justify-content-center font-content font-size-lg-1">
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan4']['id']; ?> color-white text-center p-1 rounded">お迎え</div>
                      </div>
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan4']['id']; ?> color-white text-center p-1 rounded">ご安置</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan4']['id']; ?> color-white text-center p-1 rounded">お通夜</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan4']['id']; ?> color-white text-center p-1 rounded">告別式</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan4']['id']; ?> color-white text-center p-1 rounded">火葬</div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>

              <tr id="plan5" class="table-bordered bg-white mb-3 m-md-0 rounded overflow-hidden" data-href="/plan/<?php echo appConfigPlan::plan['plan5']['id']; ?>">
                <td class="p-2 align-middle bg-thin-<?php echo appConfigPlan::plan['plan5']['id']; ?>">
                  <div class="row align-items-center m-0">
                    <div class="col-4 text-center p-0 d-none d-ssm-block">
                      <img src="/assets/img/plan/<?php echo appConfigPlan::plan['plan5']['id']; ?>.png" class="w-100" alt="プラン写真">
                    </div>
                    <div class="col col-md-8 text-center p-2">
                      <div class="color-dgray font-size-1"><?php echo appConfigPlan::plan['plan5']['overview']; ?></div>
                      <div class="font-size-per font-notoserif font-size-1_4 font-size-lg-1_6 color-<?php echo appConfigPlan::plan['plan5']['id']; ?>"><?php echo appConfigPlan::plan['plan5']['name']; ?></div>
                    </div>
                    <div class="col-1 d-md-none p-0">
                      <div class="align-middle color-<?php echo appConfigPlan::plan['plan5']['id']; ?> fa fa-chevron-circle-right"></div>
                    </div>
                  </div>
                </td>

                <td class="p-2 align-middle text-right order3">
                  <div class="row align-items-baseline m-0 justify-content-center">
                    <div class="col-price font-size-1_4 font-size-lg-1_2 color-<?php echo appConfigPlan::plan['plan5']['id']; ?>"><span class="font-oswald d-inline-block mr-1 font-price"><?php echo appConfigPlan::plan['plan5']['price']; ?></span>円</div>
                    <div class="col-tax color-dgray font-tax">(税込：<span class="font-oswald d-inline-block mr-1 font-size-1_4 font-size-lg-1_2"><?php echo appConfigPlan::plan['plan5']['priceZei']; ?></span>円)</div>
                  </div>
                </td>

                <td class="p-2 align-middle text-center order2">
                  <div class="text-center pb-2"><i class="fa fa-users mr-2 color-<?php echo appConfigPlan::plan['plan5']['id']; ?>" aria-hidden="true"></i>参列者数目安：<?php echo appConfigPlan::plan['plan5']['numberPeople']; ?></div>
                  <div class="container position-relative">
                    <div class="row no-gutters align-items-center justify-content-center font-content font-size-lg-1">
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan5']['id']; ?> color-white text-center p-1 rounded">お迎え</div>
                      </div>
                      <div class="col p-1 d-none d-lg-block">
                        <div class="bg-<?php echo appConfigPlan::plan['plan5']['id']; ?> color-white text-center p-1 rounded">ご安置</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan5']['id']; ?> color-white text-center p-1 rounded">お通夜</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan5']['id']; ?> color-white text-center p-1 rounded">告別式</div>
                      </div>
                      <div class="col p-1">
                        <div class="bg-<?php echo appConfigPlan::plan['plan5']['id']; ?> color-white text-center p-1 rounded">火葬</div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>

            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</section>
