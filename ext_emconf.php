<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Ter test',
    'description' => '',
    'version' => '0.0.1',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.4.99',
            'typo3' => '12.4.26-12.4.99',
        ],
    ],
    'state' => 'alpha',
    'author' => '',
    'author_email' => 'typo3@ba-ro.de',
    'author_company' => '',
    'autoload' => [
        'psr-4' => [
            'Barow\\TerTest\\' => 'Classes/',
        ],
    ],
];
