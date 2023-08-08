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

CREATE TABLE tx_domain1_domain_model_element (
    mainheader             varchar(255) DEFAULT '' NOT NULL,
    subheader              varchar(255) DEFAULT '' NOT NULL,
    picture                int(11) unsigned NOT NULL default '0',
    pictureid              int(11) unsigned NOT NULL default '0',
    picturetext            text DEFAULT '' NOT NULL,
    client                 varchar(255) DEFAULT '' NOT NULL,
    category               varchar(255) DEFAULT '' NOT NULL,
);

CREATE TABLE tx_beratungsstellen_domain_model_beratungsstelle (
    name                    varchar(255) DEFAULT '' NOT NULL,
    street                  varchar(255) DEFAULT '' NOT NULL,
    city                    varchar(255) DEFAULT '' NOT NULL,
    plz                     int(11) DEFAULT '0' NOT NULL,
    longitude               int(11) DEFAULT '0' NOT NULL,
    latitude                int(11) DEFAULT '0' NOT NULL,
    link                    varchar(255) DEFAULT '' NOT NULL,
    email                   varchar(255) DEFAULT '' NOT NULL,
);

CREATE TABLE tx_beratungsstellen_domain_model_keyword (
    keyword                 varchar(255) DEFAULT '' NOT NULL,
    description             varchar(255) DEFAULT '' NOT NULL,
);

