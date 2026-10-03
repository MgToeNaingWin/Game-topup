<?php
$games = [
    [
        'name' => 'Valorant',
        'category' => 'Valorant',
        'class' => 'valorant-game',
        'icon' => 'V',
        'url' => 'index.php?category=Valorant'
    ],
    [
        'name' => 'Mobile Legends',
        'category' => 'Mobile Legends',
        'class' => 'ml-game',
        'icon' => 'ML',
        'url' => 'product.php?game=ml'
    ],

    [
        'name' => 'Rocket League',
        'category' => 'Rocket League',
        'class' => 'rocket-game',
        'icon' => 'RL',
        'url' => 'index.php?category=Rocket League'
    ],
    [
        'name' => 'Clash of Clans',
        'category' => 'Clash of Clans',
        'class' => 'coc-game',
        'icon' => 'COC',
        'url' => 'index.php?category=Clash of Clans'
    ],
    [
        'name' => 'Telegram Acc',
        'category' => 'Telegram Acc',
        'class' => 'rocket-game',
        'icon' => 'Tg',
        'url' => 'index.php?category=Telegram Acc'
    ],
    [
        'name' => 'PUBG Mobile',
        'category' => 'PUBG Mobile',
        'class' => 'pubg-game',
        'icon' => 'PUBG',
        'url' => 'product.php?game=pubg'
    ],
];

$products = [
    1 => [
        'name'=>'625 Points Valorant', 'game'=>'Valorant', 'category'=>'Valorant',
        'price'=>21.00, 'oldPrice'=>35.00, 'discount'=>40, 'value'=>'625',
        'brand'=>'VALORANT', 'imageLabel'=>'POINTS', 'imageClass'=>'valorant-product',
        'stock'=>75, 'delivery'=>'5 Minutes', 'sold'=>823,
        'description'=>'Instant delivery! Your Valorant Points voucher will be delivered immediately after payment is completed.'
    ],
    2 => [
        'name'=>'6004 Diamonds – ML', 'game'=>'Mobile Legends', 'category'=>'Mobile Legends',
        'price'=>59.00, 'oldPrice'=>85.00, 'discount'=>30, 'value'=>'6004',
        'brand'=>'MOBILE LEGENDS', 'imageLabel'=>'DIAMONDS', 'imageClass'=>'ml-product',
        'stock'=>92, 'delivery'=>'10 Minutes', 'sold'=>1203,
        'description'=>'Instant delivery! Vouchers will be received immediately after payment is complete. Voucher information may include code, password, serial number, or similar digital details.'
    ],
    3 => [
        'name'=>'1100 Credits – Rocket League', 'game'=>'Rocket League', 'category'=>'Rocket League',
        'price'=>9.99, 'oldPrice'=>14.99, 'discount'=>33, 'value'=>'1100',
        'brand'=>'ROCKET LEAGUE', 'imageLabel'=>'CREDITS', 'imageClass'=>'rocket-product',
        'stock'=>48, 'delivery'=>'5 Minutes', 'sold'=>674,
        'description'=>'Digital credits delivered quickly after successful payment.'
    ],
    4 => [
        'name'=>'500 Gems – Clash of Clans', 'game'=>'Clash of Clans', 'category'=>'Clash of Clans',
        'price'=>7.99, 'oldPrice'=>10.99, 'discount'=>27, 'value'=>'500',
        'brand'=>'CLASH OF CLANS', 'imageLabel'=>'GEMS', 'imageClass'=>'coc-product',
        'stock'=>60, 'delivery'=>'10 Minutes', 'sold'=>551,
        'description'=>'Digital game currency with fast delivery.'
    ],
    5 => [
        'name'=>'385 UC – PUBG Mobile', 'game'=>'PUBG Mobile', 'category'=>'PUBG Mobile',
        'price'=>5.99, 'oldPrice'=>7.99, 'discount'=>25, 'value'=>'385',
        'brand'=>'PUBG MOBILE', 'imageLabel'=>'UC', 'imageClass'=>'pubg-product',
        'stock'=>110, 'delivery'=>'5 Minutes', 'sold'=>932,
        'description'=>'PUBG Mobile UC top-up with fast digital delivery.'
    ],
    6 => [
        'name'=>'Telegram', 'game'=>'Telegram', 'category'=>'tg',
        'brand'=>'Telegram',  'imageClass'=>'valorant-product',
        ],
];

$games_items = [
    1 => [
        'name'  => 'Valorant',
        'tabs'  => ['Normal', 'All', '2x'],
        'products' => [
            ['name' => 'Test Product',                        'price' => '9000 Ks'],
            ['name' => 'Vlorant Point', 'price' => '3,339 Ks'],
            ['name' => 'Diamond 86',                         'price' => '5,265 Ks'],
            ['name' => 'Diamond 100',                        'price' => '6,677 Ks'],
            ['name' => 'Diamond 172',                        'price' => '10,444 Ks'],
            ['name' => 'Weekly Pass2',                       'price' => '13,012 Ks'],
            ['name' => 'Diamond 257',                        'price' => '15,194 Ks'],
        ],
    ],
    2 => [
        'name'  => 'MLBB Normal',
        'tabs'  => ['Normal', 'Weekly', '2x'],
        'products' => [
            ['name' => 'Test Product',                        'price' => '9 Ks'],
            ['name' => 'mobilelegends BR Super Value Pass', 'price' => '3,339 Ks'],
            ['name' => 'Diamond 86',                         'price' => '5,265 Ks'],
            ['name' => 'Diamond 100',                        'price' => '6,677 Ks'],
            ['name' => 'Diamond 172',                        'price' => '10,444 Ks'],
            ['name' => 'Weekly Pass2',                       'price' => '13,012 Ks'],
            ['name' => 'Diamond 257',                        'price' => '15,194 Ks'],
            ['name' => 'event 250 Recharge',                 'price' => '16,350 Ks'],
            ['name' => 'Weekly Pass',                        'price' => '19,517 Ks'],
        ],
    ],
    3 => [
        'name'  => 'Rocket',
        'tabs'  => ['Normal', 'All', '2x'],
        'products' => [
            ['name' => 'Test Product',                        'price' => '9 Ks'],
            ['name' => 'Rc Diamond 86',                         'price' => '5,265 Ks'],
            ['name' => 'Diamond 100',                        'price' => '6,677 Ks'],
            ['name' => 'Diamond 172',                        'price' => '10,444 Ks'],
            ['name' => 'Weekly Pass2',                       'price' => '13,012 Ks'],
            ['name' => 'Diamond 257',                        'price' => '15,194 Ks'],
            ['name' => 'Weekly Pass',                        'price' => '19,517 Ks'],
        ],
    ],
    4 => [
        'name'  => 'COC',
        'tabs'  => ['Normal', 'Weekly', '2x'],
        'products' => [
            ['name' => 'Test Product',                        'price' => '9 Ks'],
            ['name' => 'mobilelegends BR Super Value Pass', 'price' => '3,339 Ks'],
            ['name' => 'Diamond 86',                         'price' => '5,265 Ks'],
            ['name' => 'Diamond 100',                        'price' => '6,677 Ks'],
            ['name' => 'Diamond 172',                        'price' => '10,444 Ks'],
            ['name' => 'Weekly Pass2',                       'price' => '13,012 Ks'],
            ['name' => 'Diamond 257',                        'price' => '15,194 Ks'],
            ['name' => 'event 250 Recharge',                 'price' => '16,350 Ks'],
            ['name' => 'Weekly Pass',                        'price' => '19,517 Ks'],
        ],
    ],
    5 => [
        'name'  => 'PUBG Mobile',
        'tabs'  => ['UC', 'Royal Pass', 'Lite'],
        'products' => [
            ['name' => '60 UC',      'price' => '1,500 Ks'],
            ['name' => '325 UC',     'price' => '7,500 Ks'],
            ['name' => '660 UC',     'price' => '15,000 Ks'],
            ['name' => '1800 UC',    'price' => '39,000 Ks'],
            ['name' => '3850 UC',    'price' => '79,000 Ks'],
            ['name' => '8100 UC',    'price' => '160,000 Ks'],
            ['name' => 'Royal Pass', 'price' => '25,000 Ks'],
            ['name' => 'RP Elite',   'price' => '45,000 Ks'],
        ],
    ],
    6 => [
        'name'  => 'VPN',
        'tabs'  => ['Normal', 'Weekly', '2x'],
        'products' => [
            ['name' => 'Test Product',                        'price' => '9000 Ks'],
            ['name' => 'Test 1 ',                         'price' => '5,265 Ks'],
            ['name' => 'Test 2 ',                        'price' => '6,677 Ks'],
            ['name' => 'Test 3 ',                        'price' => '10,444 Ks'],
            ['name' => 'Test 257',                        'price' => '15,194 Ks'],
        ],
    ],
];
?>