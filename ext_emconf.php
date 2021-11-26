<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Example Extension (for DDEV for TYPO3 extensions)',
    'description' => 'Add an easy to use grid element for Container. It\'s Framework independent. Prepared for Bootstrap.',
    'version' => '1.0.0',
    'state' => 'stable',
    'author' => 'Marco Schmidt',
    'author_email' => 'typo@schmidt-webmedia.de',
    'author_company' => 'Marco Schmidt - Webmedia',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-7.4.99',
            'typo3' => '9.5.0-11.99.99',
            'container' => '1.0.0-1.99.99'
        ],
    ],
    'autoload' => [
        'psr-4' => ['SchmidtWebmedia\\GridForContainer\\' => 'Classes']
    ],
];
