<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// register icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'grid-for-container-onecol',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:grid_for_container/Resources/Public/Icons/onecol.png']
);$iconRegistry->registerIcon(
    'grid-for-container-twocol',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:grid_for_container/Resources/Public/Icons/twocol.png']
);
$iconRegistry->registerIcon(
    'grid-for-container-threecol',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:grid_for_container/Resources/Public/Icons/threecol.png']
);
$iconRegistry->registerIcon(
    'grid-for-container-fourthcol',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:grid_for_container/Resources/Public/Icons/fourcol.png']
);
