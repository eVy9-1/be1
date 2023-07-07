<?php
defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
ExtensionManagementUtility::addPageTSConfig('@import "EXT:domain1/Configuration/TSconfig/BackendLayouts.tsconfig"');
ExtensionManagementUtility::addPageTSConfig('@import "EXT:domain1/Configuration/TSconfig/Page.tsconfig"');
