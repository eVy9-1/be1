<?php

return [
    'ctrl' => [
        'title' => 'Beratungsstelle hinzufügen',
        'label' => 'name',
        'label_alt' => 'street',
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
        '1' => ['showitem' => 'sys_language_uid, name, street, city, plz, link, email'],
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
                'foreign_table' => 'tx_beratungsstellen_domain_model_beratungsstelle',
                'foreign_table_where' =>
                    'AND {#tx_beratungsstellen_domain_model_beratungsstelle}.{#pid}=###CURRENT_PID###'
                    . ' AND {#tx_beratungsstellen_domain_model_beratungsstelle}.{#sys_language_uid} IN (-1,0)',
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
        'name' => [
            'label' => 'Name der Beratungsstelle',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'required' => true,
                'max' => 255,
            ],
        ],
        'street' => [
            'label' => 'Straße und Hausnummer der Beratungsstelle',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'required' => true,
                'max' => 255,
            ],
        ],
        'city' => [
            'label' => 'Stadt der Beratungsstelle',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim',
                'required' => true,
                'max' => 255,
            ],
        ],
        'plz' => [
            'label' => 'PLZ der Beratungsstelle',
            'config' => [
                'type' => 'input',
                'size' => 6,
                'eval' => 'trim',
                'required' => true,
                'max' => 255,
            ],
        ],
        'link' => [
            'label' => 'URL der Beratungsstelle',
            'config' => [
                'type' => 'input',
                'size' => 12,
                'eval' => 'trim',
                'required' => true,
                'max' => 255,
            ],
        ],
        'email' => [
            'label' => 'Kontakt-EMail-Adresse',
            'config' => [
                'type' => 'input',
                'size' => 16,
                'eval' => 'trim',
                'required' => true,
                'max' => 255,
            ],
        ],
    ],
];