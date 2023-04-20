<?php
// register icons
use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
$iconRegistry->registerIcon(
    'grid-for-container-onecol',
    BitmapIconProvider::class,
    ['source' => 'EXT:grid_for_container/Resources/Public/Icons/onecol.png']
);$iconRegistry->registerIcon(
    'grid-for-container-twocol',
    BitmapIconProvider::class,
    ['source' => 'EXT:grid_for_container/Resources/Public/Icons/twocol.png']
);
$iconRegistry->registerIcon(
    'grid-for-container-threecol',
    BitmapIconProvider::class,
    ['source' => 'EXT:grid_for_container/Resources/Public/Icons/threecol.png']
);
$iconRegistry->registerIcon(
    'grid-for-container-fourthcol',
    BitmapIconProvider::class,
    ['source' => 'EXT:grid_for_container/Resources/Public/Icons/fourcol.png']
);
