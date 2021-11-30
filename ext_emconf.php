<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Grid for Container',
    'description' => 'Add an easy to use grid element for Container. It\'s Framework independent. Prepared for Bootstrap.',
    'category' => 'plugin',
    'version' => '0.9.0',
    'state' => 'beta',
    'author' => 'Marco Schmidt',
    'author_email' => 'typo@schmidt-webmedia.de',
    'author_company' => 'Marco Schmidt - Webmedia',
    'constraints' => [
        'depends' => [
            'php' => '',
            'typo3' => '10.4.0-11.5.99',
            'container' => ''
        ],
    ],
    'autoload' => [
        'psr-4' => ['SchmidtWebmedia\\GridForContainer\\' => 'Classes']
    ],
];
