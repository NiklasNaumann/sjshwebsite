<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'SJSH Website',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '16.0.0-16.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SchachjugendSchleswigHolstein\\SjshWebsite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Niklas Naumann',
    'author_email' => 'niklas.naumann@sjsh.de',
    'author_company' => 'Schachjugend Schleswig-Holstein',
    'version' => '1.0.0',
];
