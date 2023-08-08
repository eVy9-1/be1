<?php
defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addPageTSConfig('@import "EXT:domain1/Configuration/TsConfig/Page.tsconfig"');

// TYPO3 AFTER SAVE HOOK
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['domain1'] = \SCHEER\Domain1\Hook\MyHook::class;

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


