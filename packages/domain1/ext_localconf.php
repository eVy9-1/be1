<?php
defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addPageTSConfig('@import "EXT:domain1/Configuration/TsConfig/Page.tsconfig"');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'domain1',
    'setup',
    "@import 'EXT:domain1/Configuration/TypoScript/setup.typoscript'"
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'domain1',
    'constants',
    "@import 'EXT:domain1/Configuration/TypoScript/constants.typoscript'"
);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'domain1',
    'TestPlugin',
    [
        \SCHEER\Domain1\Controller\ElementController::class => 'index',
    ]
);


