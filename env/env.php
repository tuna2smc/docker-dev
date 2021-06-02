<?php
return [
    'cache_types' => [
        'compiled_config' => 1,
        'config' => 1,
        'layout' => 1,
        'block_html' => 0,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 0,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'google_product' => 1,
        'vertex' => 1
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '40d_',
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '0',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '1',
                    'compression_lib' => ''
                ]
            ],
            'page_cache' => [
                'id_prefix' => '40d_',
                'backend' => 'Cm_Cache_Backend_Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '1',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '0',
                    'compression_lib' => ''
                ]
            ]
        ]
    ],
    'MAGE_MODE' => 'developer',
    'cron' => [

    ],
    'backend' => [
        'frontName' => 'admin'
    ],
    'db' => [
        'connection' => [
            'default' => [
                'username' => 'root',
                'host' => 'db',
                'dbname' => 'magento',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1'
            ],
            'indexer' => [
                'username' => 'root',
                'host' => 'db',
                'dbname' => 'magento',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'persistent' => null
            ],
            'gerp' => [
                'username' => 'root',
                'host' => 'db',
                'dbname' => 'gerp',
                'password' => 'magento',
                'active' => 0
            ]
        ],
        'table_prefix' => ''
    ],
    'queue' => [
        'consumers_wait_for_messages' => 0
    ],
    'crypt' => [
        'key' => '63834273ba8361f469458c594165227c'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ],
        'gerp_setup' => [
            'connection' => 'gerp'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'redis',
            'port' => '6379',
            'database' => '2',
            'disable_locking' => 1,
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '4',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
            'sentinel_master' => '',
            'sentinel_servers' => '',
            'sentinel_connect_retries' => '5',
            'sentinel_verify_master' => '0'
        ]
    ],
    'lock' => [
        'provider' => 'file',
        'config' => [
            'path' => '/run/2d4zyvpqknsng_stg/locks'
        ]
    ],
    'downloadable_domains' => [
        'local.lg.com'
    ],
    'install' => [
        'date' => 'Fri, 13 Mar 2020 19:40:25 +0000'
    ],
    'static_content_on_demand_in_production' => 0,
    'force_html_minification' => 1,
    'cron_consumers_runner' => [
        'cron_run' => true,
        'max_messages' => 1000,
        'consumers' => [

        ]
    ],
    'system' => [
        'default' => [
            'dev' => [
                'js' => [
                    'session_storage_key' => 'collected_errors',
                    'merge_files' => '0',
                    'enable_js_bundling' => '0',
                    'minify_files' => '0'
                ],
                'restrict' => [
                    'allow_ips' => null
                ],
                'static' => [
                    'sign' => '1'
                ],
                'css' => [
                    'merge_css_files' => '0',
                    'minify_files' => '0'
                ],
                'template' => [
                    'minify_html' => '0'
                ]
            ],
            'system' => [
                'magento_scheduled_import_export_log' => [
                    'error_email' => null
                ]
            ],
            'web' => [
                'unsecure' => [
                    'base_url' => 'http://local.lg.com/',
                    'base_link_url' => 'http://local.lg.com/',
                    'base_static_url' => 'https://local.lg.com/static/',
                    'base_media_url' => 'https://local.lg.com/media/'
                ],
                'secure' => [
                    'base_url' => 'https://local.lg.com/',
                    'base_link_url' => 'https://local.lg.com/',
                    'base_static_url' => 'https://local.lg.com/static/',
                    'base_media_url' => 'https://local.lg.com/media/'
                ],
                'default' => [
                    'front' => 'cms'
                ],
                'cookie' => [
                    'cookie_path' => '/',
                    'cookie_domain' => null
                ]
            ],
            'currency' => [
                'import' => [
                    'error_email' => null
                ]
            ],
            'customer' => [
                'create_account' => [
                    'email_domain' => 'example.com'
                ]
            ],
            'catalog' => [
                'productalert_cron' => [
                    'error_email' => null
                ],
                'product_video' => [
                    'youtube_api_key' => null
                ],
                'search' => [
                    'engine' => 'elasticsearch6',
                    'elasticsearch5_server_hostname' => 'localhost',
                    'elasticsearch5_server_port' => '9200'
                ]
            ],
            'payment' => [
                'authorizenet_directpost' => [
                    'debug' => '0',
                    'email_customer' => '0',
                    'login' => null,
                    'merchant_email' => null,
                    'test' => '1',
                    'trans_key' => null,
                    'trans_md5' => null,
                    'cgi_url' => 'https://secure.authorize.net/gateway/transact.dll',
                    'cgi_url_td' => 'https://api2.authorize.net/xml/v1/request.api'
                ],
                'authorizenet_acceptjs' => [
                    'email_customer' => '0',
                    'login' => null,
                    'trans_key' => null,
                    'trans_md5' => null
                ],
                'eway' => [
                    'sandbox_flag' => '1',
                    'live_api_key' => null,
                    'live_api_password' => null,
                    'live_encryption_key' => null,
                    'sandbox_api_key' => null,
                    'sandbox_api_password' => null,
                    'sandbox_encryption_key' => null
                ],
                'paypal_express' => [
                    'debug' => '0'
                ],
                'paypal_express_bml' => [
                    'publisher_id' => null
                ],
                'payflow_express' => [
                    'debug' => '0'
                ],
                'payflowpro' => [
                    'user' => null,
                    'pwd' => null,
                    'partner' => null,
                    'sandbox_flag' => '0',
                    'debug' => '0'
                ],
                'paypal_billing_agreement' => [
                    'debug' => '0'
                ],
                'payflow_link' => [
                    'pwd' => null,
                    'url_method' => 'GET',
                    'sandbox_flag' => '0',
                    'use_proxy' => '0',
                    'debug' => '0'
                ],
                'payflow_advanced' => [
                    'user' => null,
                    'pwd' => null,
                    'url_method' => 'GET',
                    'sandbox_flag' => '0',
                    'debug' => '0'
                ],
                'checkmo' => [
                    'mailing_address' => null
                ],
                'braintree' => [
                    'private_key' => null,
                    'merchant_id' => null,
                    'merchant_account_id' => null,
                    'descriptor_phone' => null,
                    'descriptor_url' => null
                ],
                'braintree_paypal' => [
                    'merchant_name_override' => null
                ],
                'cybersource' => [
                    'sandbox_flag' => '1',
                    'access_key' => null,
                    'profile_id' => null,
                    'secret_key' => null,
                    'merchant_id' => null,
                    'transaction_key' => null
                ],
                'worldpay' => [
                    'response_password' => null,
                    'auth_password' => null,
                    'md5_secret' => null,
                    'sandbox_flag' => '1',
                    'signature_fields' => 'instId:cartId:amount:currency',
                    'installation_id' => null
                ]
            ],
            'cataloginventory' => [
                'source_selection_distance_based_google' => [
                    'api_key' => null
                ]
            ],
            'checkout' => [
                'payment_failed' => [
                    'copy_to' => null
                ]
            ],
            'promo' => [
                'magento_reminder' => [
                    'identity' => 'general'
                ]
            ],
            'contact' => [
                'email' => [
                    'recipient_email' => 'hello@example.com'
                ]
            ],
            'analytics' => [
                'url' => [
                    'signup' => 'https://advancedreporting.rjmetrics.com/signup',
                    'update' => 'https://advancedreporting.rjmetrics.com/update',
                    'bi_essentials' => 'https://dashboard.rjmetrics.com/v2/magento/signup',
                    'otp' => 'https://advancedreporting.rjmetrics.com/otp',
                    'report' => 'https://advancedreporting.rjmetrics.com/report',
                    'notify_data_changed' => 'https://advancedreporting.rjmetrics.com/report'
                ],
                'general' => [
                    'token' => 'mMG7YhAG6QVBgwk669VvXn7VMACbWEzFH39jImJ4pGxmPQmn3YeXMBYimN6AZ__6eS3aYBTxfl6pNSjafsSepw'
                ]
            ],
            'carriers' => [
                'dhl' => [
                    'account' => null,
                    'gateway_url' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet',
                    'id' => null,
                    'password' => null,
                    'debug' => '0'
                ],
                'fedex' => [
                    'account' => null,
                    'meter_number' => null,
                    'key' => null,
                    'password' => null,
                    'sandbox_mode' => '0',
                    'production_webservices_url' => 'https://ws.fedex.com:443/web-services/',
                    'sandbox_webservices_url' => 'https://wsbeta.fedex.com:443/web-services/',
                    'smartpost_hubid' => null
                ],
                'ups' => [
                    'access_license_number' => null,
                    'gateway_url' => 'https://www.ups.com/using/services/rave/qcostcgi.cgi',
                    'gateway_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Rate',
                    'tracking_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Track',
                    'username' => null,
                    'password' => null,
                    'is_account_live' => '0',
                    'shipper_number' => null,
                    'debug' => '0'
                ],
                'usps' => [
                    'gateway_url' => 'http://production.shippingapis.com/ShippingAPI.dll',
                    'gateway_secure_url' => 'https://secure.shippingapis.com/ShippingAPI.dll',
                    'userid' => null,
                    'password' => null
                ]
            ],
            'paypal' => [
                'wpp' => [
                    'api_password' => null,
                    'api_signature' => null,
                    'api_username' => null,
                    'sandbox_flag' => '0'
                ],
                'fetch_reports' => [
                    'ftp_login' => null,
                    'ftp_password' => null,
                    'ftp_sandbox' => '0',
                    'ftp_ip' => null,
                    'ftp_path' => null
                ],
                'general' => [
                    'business_account' => null
                ]
            ],
            'newrelicreporting' => [
                'general' => [
                    'api_url' => 'https://api.newrelic.com/deployments.xml',
                    'insights_api_url' => 'https://insights-collector.newrelic.com/v1/accounts/%s/events',
                    'account_id' => '2267823',
                    'app_id' => '280854613',
                    'api' => '2:3:3ZvEeL3Vedhb3oJhK8B/lMU3azs74/JUAbj7WbhGPiR6vMqDT5RxXTIk1TqJD7MgtOMfrHNFaugkQ2tVJ1QfwJB84RjpmyMj5LaZ',
                    'insights_insert_key' => '2:3:RariEhu3TDAejZzMzCxj9t1KlaC4fuiiL5hdJU/z0qCwfEI9sEZZcpzpiDx29FSOaYJMVDL0c6GbYy5d'
                ]
            ],
            'fraud_protection' => [
                'signifyd' => [
                    'api_url' => 'https://api.signifyd.com/v2/',
                    'api_key' => null
                ]
            ],
            'sitemap' => [
                'generate' => [
                    'error_email' => null
                ]
            ],
            'crontab' => [
                'default' => [
                    'jobs' => [
                        'analytics_update' => [
                            'schedule' => [
                                'cron_expr' => '0 * * * *'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'websites' => [
            'in' => [
                'web' => [
                    'unsecure' => [
                        'base_url' => 'http://local.lg.com/',
                        'base_link_url' => 'http://local.lg.com/'
                    ],
                    'secure' => [
                        'base_url' => 'https://local.lg.com/',
                        'base_link_url' => 'https://local.lg.com/'
                    ],
                    'cookie' => [
                        'cookie_path' => '/in',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'au' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/au',
                        'cookie_domain' => '.lg.com'
                    ]
                ],
                'general' => [
                    'locale' => [
                        'code' => 'en_AU'
                    ]
                ]
            ],
            'br' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/br',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'it' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/it',
                        'cookie_domain' => '.lg.com'
                    ]
                ],
                'general' => [
                    'locale' => [
                        'code' => 'it_IT'
                    ]
                ]
            ],
            'pl' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/pl',
                        'cookie_domain' => '.lg.com'
                    ]
                ],
                'general' => [
                    'locale' => [
                        'code' => 'pl_PL'
                    ]
                ]
            ],
            'vn' => [
                'general' => [
                    'locale' => [
                        'code' => 'vi_VN'
                    ]
                ],
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/vn',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'tw' => [
                'general' => [
                    'locale' => [
                        'code' => 'zh_Hant_TW'
                    ]
                ],
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/tw',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'de' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/de',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'uk' => [
                'web' => [
                    'cookie' => [
                        'cookie_domain' => '.lg.com',
                        'cookie_path' => '/uk'
                    ]
                ],
                'general' => [
                    'locale' => [
                        'code' => 'en_GB'
                    ]
                ]
            ],
            'se' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/se',
                        'cookie_domain' => '.lg.com'
                    ]
                ],
                'general' => [
                    'locale' => [
                        'code' => 'sv_SE'
                    ]
                ]
            ],
            'nl' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/nl',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'fr' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/fr',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'ch_de' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/ch_de',
                        'cookie_domain' => '.lg.com'
                    ]
                ],
                'general' => [
                    'locale' => [
                        'code' => 'de_CH'
                    ]
                ]
            ],
            'eg_en' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/eg_en',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'cac_en' => [
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/cac_en',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'cz' => [
                'general' => [
                    'locale' => [
                        'code' => 'cs_CZ'
                    ]
                ],
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/cz',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'hu' => [
                'general' => [
                    'locale' => [
                        'code' => 'hu_HU'
                    ]
                ],
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/hu',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ],
            'kz' => [
                'general' => [
                    'locale' => [
                        'code' => 'ru_RU'
                    ]
                ],
                'web' => [
                    'cookie' => [
                        'cookie_path' => '/kz',
                        'cookie_domain' => '.lg.com'
                    ]
                ]
            ]
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ]
];
