<?php
/*======================================================================

使いまわしを行う文字情報

======================================================================*/
class appConfigString
{
    const planName = [
        'plan1' => 'お別れ葬',
        'plan2' => '火葬式',
        'plan3' => '一日葬',
        'plan4' => '家族葬',
        'plan5' => '一般葬'
    ];

    const otherCompanyPlan = [
        'c' => [
            'name' => 'Ｃ社',
            'originalName' => '小さなお葬式',
            'plan1' => '129,000',
            'plan1Zei' => '141,900',
            'plan1Discount' => '79,000',
            'plan2' => '209,000',
            'plan2Zei' => '229,300',
            'plan2Discount' => '159,000',
            'plan3' => '349,000',
            'plan3Zei' => '383,800',
            'plan3Discount' => '299,000',
            'plan4' => '449,000',
            'plan4Zei' => '493,900',
            'plan4Discount' => '399,000',
            'plan5' => '649,000',
            'plan5Zei' => '713,000',
            'plan5Discount' => '599,000'
        ],
        'y' => [
            'name' => 'Ｙ社',
            'originalName' => 'よりそう',
            'plan1' => '91,000',
            'plan1Zei' => '100,900',
            'plan1Discount' => '76,000',
            'plan2' => '150,000',
            'plan2Zei' => '165,900',
            'plan2Discount' => '135,000',
            'plan3' => '300,000',
            'plan3Zei' => '330,000',
            'plan3Discount' => '270,000',
            'plan4' => '399,000',
            'plan4Zei' => '438,900',
            'plan4Discount' => '369,000',
            'plan5' => '529,000',
            'plan5Zei' => '581,900',
            'plan5Discount' => '499,000',
        ],
        'i' => [
            //いい葬儀は値段の表記が葬儀社ごとに異なるため未採用
            'name' => 'Ｉ社',
            'originalName' => 'イオン葬儀',
            'plan1' => '90,000',
            'plan1Zei' => '99,000',
            'plan1Discount' => '90,000',
            'plan2' => '185,000',
            'plan2Zei' => '203,500',
            'plan2Discount' => '160,000',
            'plan3' => '325,000',
            'plan3Zei' => '357,500',
            'plan3Discount' => '290,000',
            'plan4' => '438,000',
            'plan4Zei' => '481,800',
            'plan4Discount' => '393,000',
            'plan5' => '655,000',
            'plan5Zei' => '720,500',
            'plan5Discount' => '590,000',
        ],
    ];
}
