<?php

// Record Settings
return [
    'ctrl' => [
        'title' => 'Portfolio',
        'label' => 'main_header',
        'label_alt' => 'sub_header',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
    ],
    'interface' => [
        'maxDBListItems' => 100,
        'maxSingleDBListItems' => 500,
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, hidden, main_header, sub_header, picture_id, picture_text, client, category'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => ' ',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => ' ',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '',
                        0,
                    ],
                ],
                'foreign_table' => 'tx_domain1_domain_model_portfolio',
                'foreign_table_where' =>
                    'AND {#tx_domain1_domain_model_portfolio}.{#pid}=###CURRENT_PID###'
                    . ' AND {#tx_domain1_domain_model_portfolio}.{#sys_language_uid} IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => '',
            ],
        ],
        't3ver_label' => [
            'displayCond' => 'FIELD:t3ver_label:REQ:true',
            'label' => ' ',
            'config' => [
                'type' => 'none',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true,
                    ],
                ],
            ],
        ],
        'main_header' => [
            'label' => 'Hauptüberschrift',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'required' => true,
                'max' => 256,
            ],
        ],
        'sub_header' => [
            'label' => 'Unterüberschrift',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'required' => true,
                'max' => 256,
            ],
        ],
        'picture_id' => [
            'label' => 'Bilddatei1',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types'
            ],
        ],
        'picture_text' => [
            'label' => 'Bilduntertext',
            'description' => 'cols=20, rows=4',
            'config' => [
                'type' => 'text',
                'cols' => 20,
                'rows' => 4,
            ],
        ],
        'client' => [
            'label' => 'Clienttext',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'required' => true,
                'max' => 256,
            ],
        ],
        'category' => [
            'label' => 'Categorytext',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'required' => true,
                'max' => 256,
            ],
        ],
    ],
];