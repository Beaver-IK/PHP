<?php

$data = [
    'question' => ['почему', 'как', 'зачем', 'столько'],
    'animals' => [
        'birds' => [
            [
                'name' => 'грачи',
            ],
            [
                'name' => 'воробьи',
            ],
        ],
        'others' => [
            [
                ['name' => 'кошки'],
                ['name' => 'рыбы'],
                ['name' => 'собаки'],
            ],
        ],
    ],
    'parts' => [
        'hands' => 'рук',
        'feathers' => 'перьев',
        'eyes' => 'глаз',
    ],
];

/* ===== Ваш код ниже ===== */

$res = $data['question'][0] . ' ' . // почему
       $data['animals']['birds'][0]['name'] . ' ' .// грачи
       'не' . ' ' .
       $data['animals']['others'][0][0]['name'] . ' ' . // кошки
       'и' . ' ' .
       $data['question'][2] . ' ' . // зачем
       'им' . ' ' .
       $data['question'][3] . ' ' . // столько
       $data['parts']['feathers']; // перьев
echo $res;