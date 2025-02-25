<?php
// catalog.php

$catalog = [
    'categories' => [
        1 => [
            'id' => 1,
            'name' => 'Игрушки',
            'room' => 'Детская',
        ],
        2 => [
            'id' => 2,
            'name' => 'Посуда',
            'room' => 'Кухня',
        ],
    ],
    'products' => [
        [
            'name' => 'Тетрис',
            'price' => 250,
            'category' => 1,
        ],
        [
            'name' => 'Кружка',
            'price' => 120,
            'category' => 2,
        ],
        [
            'name' => 'Плюшевый медведь',
            'price' => 100,
            'category' => 1,
        ],
    ]
];

echo 'Каталог товаров' . PHP_EOL;

foreach ($catalog['products'] as $product) {
    $productCategory = $catalog['categories'][$product['category']];
    echo 
    "Товар: {$product['name']}. Цена: {$product['price']}. " . 
    "Категория: {$productCategory['name']}. " .
    "Подходит для комнаты: {$productCategory['room']}." . PHP_EOL;    
}

// Каталог товаров
// Товар: Тетрис. Цена: 250. Категория: Игрушки. Подходит для комнаты: Детская.
// Товар: Кружка. Цена: 120. Категория: Посуда. Подходит для комнаты: Кухня.
// Товар: Плюшевый медведь. Цена: 100. Категория: Игрушки. Подходит для комнаты: Детская.
?>

<?php
// discount.php

$catalog = [
    'categories' => [
        1 => [
            'id' => 1,
            'name' => 'Игрушки',
            'room' => 'Детская',
        ],
        2 => [
            'id' => 2,
            'name' => 'Посуда',
            'room' => 'Кухня',
        ],
    ],
    'products' => [
        [
            'name' => 'Тетрис',
            'price' => 250,
            'category' => 1,
        ],
        [
            'name' => 'Кружка',
            'price' => 120,
            'category' => 2,
        ],
        [
            'name' => 'Плюшевый медведь',
            'price' => 100,
            'category' => 1,
        ],
    ]
];

$discountPercent = 10;

foreach ($catalog['products'] as $key => $product) {
    $product['oldPrice'] = $product['price'];
    $product['price'] *= (1 - $discountPercent / 100);
    $catalog['products'][$key] = $product;
}

echo 'Каталог товаров' . PHP_EOL;

foreach ($catalog['products'] as $product) {
    echo "Товар: {$product['name']}. Цена со скидкой: {$product['price']}. Старая цена {$product['oldPrice']}" . PHP_EOL;    
}

// Каталог товаров
// Товар: Тетрис. Цена со скидкой: 225. Старая цена 250
// Товар: Кружка. Цена со скидкой: 108. Старая цена 120
// Товар: Плюшевый медведь. Цена со скидкой: 90. Старая цена 100
?>