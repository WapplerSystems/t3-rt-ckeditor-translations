<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Translations for CKEditor',
    'description' => 'Provides translation files',
    'category' => 'be',
    'version' => '12.0.0',
    'state' => 'stable',
    'author' => 'Sven Wappler',
    'author_email' => 'typo3YYYY@wappler.systems',
    'author_company' => 'WapplerSystems',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'rte_ckeditor' => '12.0.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
