<?php

/*
|--------------------------------------------------------------------------
| Page Blocks
|--------------------------------------------------------------------------
|
| This configuration file is used to display page blocks and their content,
| where each key is a block and each property is specific to that block.
|
*/
$blocks = [];

// The 'global' fields we'll use on multiple blocks
$spacesField = [
    'field' => 'spaces',
    'display_name' => 'Add Vertical Space',
    'type' => 'select_dropdown',
    'required' => 0,
    'details' => [
        'options' => [
            'Bottom',
            'Top',
            'Top & Bottom',
            'None',
        ],
    ],
    'placeholder' => 0,
];

$animationsField = [
    'field' => 'animate',
    'display_name' => 'Animate this block (in)?',
    'type' => 'checkbox',
    'placeholder' => 'on',
    'required' => 0,
];

/**
 * Home - block1
 */
$blocks['block1'] = [
    'name' => 'Главная - Блок №1',
    'template' => 'voyager-page-blocks::blocks.block1',
    'fields' => [
        'title' => [
            'field' => 'title',
            'display_name' => 'Заголовок',
            'type' => 'text',
            'required' => 1,
        ],
        'amount_from' => [
            'field' => 'amount_from',
            'display_name' => 'Сумма от',
            'type' => 'text',
            'required' => 1,
        ],
        'amount_to' => [
            'field' => 'amount_to',
            'display_name' => 'Сумма до',
            'type' => 'text',
            'required' => 0,
        ],
        'desc' => [
            'field' => 'desc',
            'display_name' => 'Краткое описание',
            'type' => 'rich_text_box',
            'required' => 1,
        ],
        'btn_text1' => [
            'field' => 'btn_text1',
            'display_name' => 'Надпись кнопки №1',
            'type' => 'text',
            'required' => 1,
        ],
        'btn_text2' => [
            'field' => 'btn_text2',
            'display_name' => 'Надпись кнопки №2',
            'type' => 'text',
            'required' => 1,
        ],
        'image' => [
            'field' => 'image',
            'display_name' => 'Фото (баннер)',
            'type' => 'image',
            'required' => 0,
        ],
        'image_car1' => [
            'field' => 'image_car1',
            'display_name' => 'Фото машина (моб версия)',
            'type' => 'image',
            'required' => 0,
        ],
        'image_car2' => [
            'field' => 'image_car2',
            'display_name' => 'Фото машина',
            'type' => 'image',
            'required' => 0,
        ],
    ],
    'spaces' => $spacesField,
    'animate' => $animationsField,
];

/**
 * Home - block2
 */
$blocks['block2'] = [
    'name' => 'Главная - Блок №2',
    'template' => 'voyager-page-blocks::blocks.block2',
    'fields' => [
        'title' => [
            'field' => 'title',
            'display_name' => 'Заголовок',
            'type' => 'text',
            'required' => 1,
        ],
    ]
];

for ($i = 1; $i < 4; $i++) {
    $blocks['block2']['fields']["icon_{$i}"] = [
        'field' => "icon_{$i}",
        'display_name' => "Иконка №{$i}",
        'type' => 'image',
        'required' => $i == 1 ? 1 : 0,
    ];
    $blocks['block2']['fields']["name_{$i}"] = [
        'field' => "name_{$i}",
        'display_name' => "Название №{$i}",
        'type' => 'text',
        'required' => $i == 1 ? 1 : 0,
    ];
    $blocks['block2']['fields']["desc_{$i}"] = [
        'field' => "desc_{$i}",
        'display_name' => "Краткое описание №{$i}",
        'type' => 'text_area',
        'required' => $i == 1 ? 1 : 0,
    ];
}

$blocks['block2']['fields']['spaces'] = $spacesField;
$blocks['block2']['fields']['animate'] = $animationsField;

/**
 * Home - block3
 */
$blocks['block3'] = [
    'name' => 'Главная - Блок №3',
    'template' => 'voyager-page-blocks::blocks.block3',
    'fields' => [
        'title' => [
            'field' => 'title',
            'display_name' => 'Заголовок',
            'type' => 'text',
            'required' => 1,
        ],
        'image' => [
            'field' => 'image',
            'display_name' => 'Изображение',
            'type' => 'image',
            'required' => 1,
        ],
        'cost' => [
            'field' => 'cost',
            'display_name' => 'Полная стоимость (только сумма)',
            'type' => 'text',
            'required' => 1,
        ],
        'cost_min' => [
            'field' => 'cost_min',
            'display_name' => 'Минимальная стоимость (только сумма)',
            'type' => 'text',
            'required' => 1,
        ],
        'cost_avg' => [
            'field' => 'cost_avg',
            'display_name' => 'Средняя стоимость (только сумма)',
            'type' => 'text',
            'required' => 0,
        ],
        'cost_max' => [
            'field' => 'cost_max',
            'display_name' => 'Максимальная стоимость (только сумма)',
            'type' => 'text',
            'required' => 1,
        ],
        'deadline' => [
            'field' => 'deadline',
            'display_name' => 'Срок микрокредита (только цифры)',
            'type' => 'text',
            'required' => 1,
        ],
        'deadline_min' => [
            'field' => 'deadline_min',
            'display_name' => 'Минимальный срок',
            'type' => 'text',
            'required' => 1,
        ],
        'deadline_avg' => [
            'field' => 'deadline_avg',
            'display_name' => 'Средний срок',
            'type' => 'text',
            'required' => 1,
        ],
        'deadline_max' => [
            'field' => 'deadline_max',
            'display_name' => 'Максимальный срок',
            'type' => 'text',
            'required' => 1,
        ],
        'payment' => [
            'field' => 'payment',
            'display_name' => 'Ежемесячный платёж (только сумма)',
            'type' => 'text',
            'required' => 1,
        ],
        'percent' => [
            'field' => 'percent',
            'display_name' => 'Процентная ставка (без %)',
            'type' => 'text',
            'required' => 1,
        ],
    ]
];

/**
 * Home - block5
 */
$blocks['block5'] = [
    'name' => 'Главная - Блок №5',
    'template' => 'voyager-page-blocks::blocks.block5',
    'fields' => [
        'title' => [
            'field' => 'title',
            'display_name' => 'Заголовок',
            'type' => 'text',
            'required' => 1,
        ],
        'btn_text' => [
            'field' => 'btn_text',
            'display_name' => 'Текст кнопки',
            'type' => 'text',
            'required' => 1,
        ],
    ]
];

for ($i = 1; $i < 4; $i++) {
    $blocks['block5']['fields']["name_{$i}"] = [
        'field' => "name_{$i}",
        'display_name' => "Название №{$i}",
        'type' => 'text',
        'required' => $i == 1 ? 1 : 0,
    ];
}

$blocks['block5']['fields']['spaces'] = $spacesField;
$blocks['block5']['fields']['animate'] = $animationsField;

/**
 * Home - block6
 */
$blocks['block6'] = [
    'name' => 'Главная - Блок №6',
    'template' => 'voyager-page-blocks::blocks.block6',
    'fields' => [
        'title' => [
            'field' => 'title',
            'display_name' => 'Заголовок',
            'type' => 'text',
            'required' => 1,
        ],
        'photo' => [
            'field' => 'photo',
            'display_name' => 'Изображение',
            'type' => 'image',
            'required' => 1,
        ],
    ]
];

for ($i = 1; $i < 4; $i++) {
    $blocks['block6']['fields']["name_{$i}"] = [
        'field' => "name_{$i}",
        'display_name' => "Название №{$i}",
        'type' => 'text',
        'required' => $i == 1 ? 1 : 0,
    ];
}

$blocks['block6']['fields']['spaces'] = $spacesField;
$blocks['block6']['fields']['animate'] = $animationsField;

return $blocks;
