<?php

namespace SchmidtWebmedia\GridForContainer\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

class GridViewHelper extends AbstractViewHelper
{
    private static $GridConfiguration;

    public function initializeArguments()
    {
        $this->registerArgument('type', 'string', 'col, row or colLabel', true);
        $this->registerArgument('layout', 'string', 'Name of CType');
        $this->registerArgument('colIndex', 'int', 'Index of Column');
        $this->registerArgument('grid_config', 'int', 'Stored Grid_config value');
    }

    /**
     * @param $key string
     * @return string
     */
    public function render() {
        self::readJSON();
        switch($this->arguments['type']) {
            case 'row':
                return self::$GridConfiguration['row'][0]['class'] ?? 'row';
            case 'col':
                $layout = $this->arguments['layout'];
                $ratio = $this->arguments['grid_config'];
                $index = $this->arguments['colIndex'];
                return self::$GridConfiguration['cols'][0][$layout][$ratio]['class'][$index] ?? 'col';
            case 'colLabel':
                $layout = $this->arguments['layout'];
                $ratio = $this->arguments['grid_config'];
                return self::$GridConfiguration['cols'][0][$layout][$ratio]['label'] ?? 'auto';
        }

        return $this->arguments['type'];
    }

    private static function readJSON() {
        if(self::$GridConfiguration === null) {
            $path = GeneralUtility::makeInstance(ExtensionConfiguration::class)->get('grid_for_container', 'gridConfig');
            $jsonInput = file_get_contents(GeneralUtility::getFileAbsFileName($path));
            self::$GridConfiguration = json_decode($jsonInput, true);
        }
    }
}
