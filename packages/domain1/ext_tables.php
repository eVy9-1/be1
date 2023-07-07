<?php
defined('TYPO3') || die();


call_user_func(
    function()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('domain1', 'Configuration/TypoScript', 'domain1 package');
    }
);