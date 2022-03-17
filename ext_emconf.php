<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Multi Framework grids for Container',
    'description' => 'Add an easy to use grid element for Container. It\'s Framework independent. Prepared for Bootstrap.',
    'category' => 'plugin',
    'version' => '1.0.2',
    'state' => 'stable',
    'author' => 'Marco Schmidt',
    'author_email' => 'typo@schmidt-webmedia.de',
    'author_company' => 'Marco Schmidt - Webmedia',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'container' => ''
        ],
    ],
    'autoload' => [
        'psr-4' => ['SchmidtWebmedia\\GridForContainer\\' => 'Classes']
    ],
];
