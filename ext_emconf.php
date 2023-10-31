<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Blog author',
    'description' => 'Display authors - post detail view',
    'category' => 'fe',
    'author' => 'Krzysztof Napora',
    'author_company' => 'DR BLITZ WEBLAB',
    'author_email' => 'office@drblitz-weblab.com',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'blog' => '12.0.0-12.9.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
