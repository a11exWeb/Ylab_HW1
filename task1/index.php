<?php

include_once "sort_array.php";

$array = [
    'SKLAD1' => [
        'EDA' => [
            'TOVAR1' => [
                'NAME' => '....',
                'PRICE' => 1000
            ],
            'TOVAR2' => [
                'NAME' => '....',
                'PRICE' => 500
            ],
        ],
        'NAPITKI' => [
            'TOVAR55' => [
                'NAME' => '....',
                'PRICE' => 6000
            ],
            'TOVAR54' => [
                'NAME' => '....',
                'PRICE' => 7000
            ],
        ],
    ],
    'SKLAD2' => [
        'EDA' => [
            'TOVAR66' => [
                'NAME' => '....',
                'PRICE' => 4000
            ],
            'TOVAR67' => [
                'NAME' => '....',
                'PRICE' => 3000
            ],
        ],
        'NAPITKI' => [
            'TOVAR77' => [
                'NAME' => '....',
                'PRICE' => 2000
            ],
            'TOVAR78' => [
                'NAME' => '....',
                'PRICE' => 5000
            ],
        ],
    ],
];

$sorted_items = getSortedProducts($array);

echo "<pre>";
print_r($sorted_items);
echo "</pre>";
