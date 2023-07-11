CREATE TABLE tt_content (
    tx_domain1_services_icon varchar(255) DEFAULT '' NOT NULL,
    tx_domain1_services_title varchar(255) DEFAULT '' NOT NULL,
    tx_domain1_services_text varchar(255) DEFAULT '' NOT NULL,
    tx_domain1_services_icon_2 varchar(255) DEFAULT '' NOT NULL,
    tx_domain1_services_title_2 varchar(255) DEFAULT '' NOT NULL,
    tx_domain1_services_text_2 varchar(255) DEFAULT '' NOT NULL,
    tx_domain1_services_icon_3 varchar(255) DEFAULT '' NOT NULL,
    tx_domain1_services_title_3 varchar(255) DEFAULT '' NOT NULL,
    tx_domain1_services_text_3 varchar(255) DEFAULT '' NOT NULL,
);

CREATE TABLE tx_domain1_domain_model_portfolio (
    main_header             varchar(255) DEFAULT '' NOT NULL,
    sub_header              varchar(255) DEFAULT '' NOT NULL,
    picture_id              int(11) unsigned DEFAULT '0' NOT NULL,
    picture_text            text NOT NULL,
    client                  varchar(255) DEFAULT '' NOT NULL,
    category                varchar(255) DEFAULT '' NOT NULL,
);