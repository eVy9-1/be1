<?php

declare(strict_types=1);
defined('TYPO3') or die();

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        // title
        'Services Element',
        // plugin signature: extkey_identifier
        'tx_domain1_services_element',
        // icon identifier
        'content-text',
    ],
    'textmedia',
    'after'
);

$temporaryColumn = [
    'tx_domain1_services_icon' => [
        'exclude' => 0,
        'label' => 'Services Icon',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Shopping cart', 'fa-shopping-cart'],
                ['Laptop', 'fa-laptop'],
                ['Lock', 'fa-lock'],
            ],
            'default' => 'fa-shopping-cart',
        ],
    ],
    'tx_domain1_services_title' => [
        'exclude' => 0,
        'label' => 'Services Title',
        'config' => [
            'type' => 'input',
        ],
    ],
    'tx_domain1_services_text' => [
        'exclude' => 0,
        'label' => 'Services Text',
        'config' => [
            'type' => 'text',
        ],
    ],
    'tx_domain1_services_icon_2' => [
        'exclude' => 0,
        'label' => 'Services Icon',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Shopping cart', 'fa-shopping-cart'],
                ['Laptop', 'fa-laptop'],
                ['Lock', 'fa-lock'],
            ],
            'default' => 'fa-shopping-cart',
        ],
    ],
    'tx_domain1_services_title_2' => [
        'exclude' => 0,
        'label' => 'Services Title',
        'config' => [
            'type' => 'input',
        ],
    ],
    'tx_domain1_services_text_2' => [
        'exclude' => 0,
        'label' => 'Services Text',
        'config' => [
            'type' => 'text',
        ],
    ],
    'tx_domain1_services_icon_3' => [
        'exclude' => 0,
        'label' => 'Services Icon',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Shopping cart', 'fa-shopping-cart'],
                ['Laptop', 'fa-laptop'],
                ['Lock', 'fa-lock'],
            ],
            'default' => 'fa-shopping-cart',
        ],
    ],
    'tx_domain1_services_title_3' => [
        'exclude' => 0,
        'label' => 'Services Title',
        'config' => [
            'type' => 'input',
        ],
    ],
    'tx_domain1_services_text_3' => [
        'exclude' => 0,
        'label' => 'Services Text',
        'config' => [
            'type' => 'text',
        ],
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumn);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['tx_domain1_services_element'] = [
    'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
               --palette--;;general,
               header; Überschrift des Content Elements,
               header_position; Position der Überschrift,
               subheader; Unterüberschrift,
               tx_domain1_services_icon; Services Icon,
               tx_domain1_services_title; Service Title,
               tx_domain1_services_text; Service Text,
               tx_domain1_services_icon_2; Services Icon 2,
               tx_domain1_services_title_2; Service Title 2,
               tx_domain1_services_text_2; Service Text 2,
               tx_domain1_services_icon_3; Services Icon 3,
               tx_domain1_services_title_3; Service Title 3,
               tx_domain1_services_text_3; Service Text 3,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
               --palette--;;hidden,
               --palette--;;access,
         ',
];


## Register my first plugin

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Domain1',
        'TestPlugin',
        'Domain1 Portfolio Site Plugin'
    );


