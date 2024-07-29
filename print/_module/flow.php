<?php if (appConfigPlan::plan[$planid]['flowSougi'] == 1) : ?>
    <div class="w-80per mx-auto">
        <table>
            <tr class="align-top font-size-0_8 text-center color-white">
                <th colspan="4">
                    <div class="bg-<?php echo $planid; ?> p-1">ご逝去日</div>
                </th>
                <th colspan="3">
                    <div class="bg-<?php echo $planid; ?> p-1">1日目：火葬</div>
                </th>
            </tr>
            <tr class="align-top font-size-0_8 text-center">
                <td><img src="/assets/img/plan/pic_contact.png" class="w-100" alt="IMAGE">
                    <div>ご依頼</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_car_shindai.png" class="w-100" alt="IMAGE">
                    <div>お迎え</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_enshrined.png" class="w-100" alt="IMAGE">
                    <div>ご安置</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_reception.png" class="w-100" alt="IMAGE">
                    <div>お打合せ</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_coffin.png" class="w-100" alt="IMAGE">
                    <div>納棺</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_pot.png" class="w-100" alt="IMAGE">
                    <div>火葬</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_reception.png" class="w-100" alt="IMAGE">
                    <div>お支払い</div>
                </td>
            </tr>
        </table>
    </div>
<?php endif; ?>
<?php if (appConfigPlan::plan[$planid]['flowSougi'] == 2) : ?>
    <div class="w-90per mx-auto">
        <table>
            <tr class="align-top font-size-0_8 text-center color-white">
                <th colspan="4">
                    <div class="bg-<?php echo $planid; ?> p-1">ご逝去日</div>
                </th>
                <th colspan="4">
                    <div class="bg-<?php echo $planid; ?> p-1">1日目：告別式／火葬</div>
                </th>
            </tr>
            <tr class="align-top font-size-0_8 text-center">
                <td><img src="/assets/img/plan/pic_contact.png" class="w-100" alt="IMAGE">
                    <div>ご依頼</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_car_shindai.png" class="w-100" alt="IMAGE">
                    <div>お迎え</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_enshrined.png" class="w-100" alt="IMAGE">
                    <div>ご安置</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_reception.png" class="w-100" alt="IMAGE">
                    <div>お打合せ</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_coffin.png" class="w-100" alt="IMAGE">
                    <div>納棺</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_flower_altar.png" class="w-100" alt="IMAGE">
                    <div>告別式</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_pot.png" class="w-100" alt="IMAGE">
                    <div>火葬</div>
                </td>
                <td><img src="/assets/img/plan/option/thum_reception.png" class="w-100" alt="IMAGE">
                    <div>お支払い</div>
                </td>
            </tr>
        </table>
    </div>
<?php endif; ?>
<?php if (appConfigPlan::plan[$planid]['flowSougi'] == 3) : ?>
    <table>
        <tr class="align-top font-size-0_8 text-center color-white">
            <th colspan="4">
                <div class="bg-<?php echo $planid; ?> p-1">ご逝去日</div>
            </th>
            <th colspan="2">
                <div class="bg-<?php echo $planid; ?> p-1">1日目：通夜</div>
            </th>
            <th colspan="3">
                <div class="bg-<?php echo $planid; ?> p-1">2日目：告別式／火葬</div>
            </th>
        </tr>
        <tr class="align-top font-size-0_8 text-center">
            <td><img src="/assets/img/plan/pic_contact.png" class="w-100" alt="IMAGE">
                <div>ご依頼</div>
            </td>
            <td><img src="/assets/img/plan/option/thum_car_shindai.png" class="w-100" alt="IMAGE">
                <div>お迎え</div>
            </td>
            <td><img src="/assets/img/plan/option/thum_enshrined.png" class="w-100" alt="IMAGE">
                <div>ご安置</div>
            </td>
            <td><img src="/assets/img/plan/option/thum_reception.png" class="w-100" alt="IMAGE">
                <div>お打合せ</div>
            </td>
            <td><img src="/assets/img/plan/option/thum_coffin.png" class="w-100" alt="IMAGE">
                <div>納棺</div>
            </td>
            <td><img src="/assets/img/plan/option/thum_pillow_decoration.png" class="w-100" alt="IMAGE">
                <div>通夜式</div>
            </td>
            <td><img src="/assets/img/plan/option/thum_flower_altar.png" class="w-100" alt="IMAGE">
                <div>告別式</div>
            </td>
            <td><img src="/assets/img/plan/option/thum_pot.png" class="w-100" alt="IMAGE">
                <div>火葬</div>
            </td>
            <td><img src="/assets/img/plan/option/thum_reception.png" class="w-100" alt="IMAGE">
                <div>お支払い</div>
            </td>
        </tr>
    </table>
<?php endif; ?>