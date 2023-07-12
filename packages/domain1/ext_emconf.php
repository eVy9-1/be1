<?php
$EM_CONF['domain1'] = [
    'title' => 'domain1',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Scheer, Timon',
    'author_email' => 'cenaa8@gmx.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.5.0-12.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'SCHEER\\Domain1\\' => 'Classes',
        ]
    ],
];
