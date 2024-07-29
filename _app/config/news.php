<?php
/*======================================================================

お知らせに関する情報

======================================================================*/
class appConfigNewsformat
{
    const newsList = ['format1', 'format2'];
    const newsNavList = ['format1', 'format2'];

    /*
    プラン
    */
    const news = [
        'format1' => [
            'id' => 'format1',
            'name' => '直葬とは',
        ],
        'format2' => [
            'id' => 'format2',
            'name' => '家族葬とは',
        ]
    ];
}

class appConfigNewsplan
{
    const newsList = ['plan1', 'plan2', 'plan3', 'plan4', 'plan5'];
    const newsNavList = ['plan1', 'plan2', 'plan3', 'plan4', 'plan5'];

    /*
    プラン
    */
    const news = [
        'plan1' => [
            'id' => 'plan1',
            'name' => 'お別れ葬',
        ],
        'plan2' => [
            'id' => 'plan2',
            'name' => '火葬式',
        ],
        'plan3' => [
            'id' => 'plan3',
            'name' => '一日葬',
        ],
        'plan4' => [
            'id' => 'plan4',
            'name' => '家族葬',
        ],
        'plan5' => [
            'id' => 'plan5',
            'name' => '一般葬',
        ]
    ];
}
