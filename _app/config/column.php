<?php
/*======================================================================

葬儀コラムに関する情報

======================================================================*/
class appConfigColumnformat
{
    const columnList = ['format1', 'format2'];
    const columnNavList = ['format1', 'format2'];

    /*
    プラン
    */
    const column = [
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

class appConfigColumnplan
{
    const columnList = ['plan1', 'plan2', 'plan3', 'plan4', 'plan5'];
    const columnNavList = ['plan1', 'plan2', 'plan3', 'plan4', 'plan5'];

    /*
    プラン
    */
    const column = [
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


class appConfigColumnother
{
    const columnList = ['condolence_gift', 'fukusa', 'memorial_service', 'benefits', 'nichiren', 'dress_manners', 'wake'];
    const columnNavList = ['condolence_gift', 'fukusa', 'memorial_service', 'benefits', 'nichiren', 'dress_manners', 'wake'];

    /*
    プラン
    */
    const column = [
        'condolence_gift' => [
            'id' => 'condolence_gift',
            'name' => '香典の書き方',
            'sub' => '〜基本マナーと注意点を徹底解説〜',
        ],
        'fukusa' => [
            'id' => 'fukusa',
            'name' => '袱紗（ふくさ）とは？',
        ],
        'memorial_service' => [
            'id' => 'memorial_service',
            'name' => '手元供養とは？',
            'sub' => '〜供養の方法や注意点について〜',
        ],
        'benefits' => [
            'id' => 'benefits',
            'name' => '葬儀費用の給付金制度について',
        ],
        'nichiren' => [
            'id' => 'nichiren',
            'name' => '日蓮宗の法要の特徴は？',
            'sub' => '〜多宗派との違い〜',
        ],
        'dress_manners' => [
            'id' => 'dress_manners',
            'name' => '葬儀に参列する際の服装マナー',
            'sub' => '～男性編～',
        ],
        'wake' => [
            'id' => 'wake',
            'name' => '喪主必見！「通夜」での立ち振る舞い',
        ]
    ];
}
