<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'ba8f1d890323033e1b3468cfe2e87418'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'scanpwa',
                'username' => 'root',
                'password' => 'narola21',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '6aa_'
            ],
            'page_cache' => [
                'id_prefix' => '6aa_'
            ]
        ],
	'persisted-query' => [
    	'redis' => [
        	'host' => '127.0.0.1',
        	'scheme' => 'tcp',
        	'port' => '6379',
        	'database' => '5'
    		]
	]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 0,
        'reflection' => 0,
        'db_ddl' => 0,
        'compiled_config' => 1,
        'eav' => 0,
        'customer_notification' => 0,
        'config_integration' => 0,
        'config_integration_api' => 0,
        'google_product' => 0,
        'full_page' => 0,
        'config_webservice' => 0,
        'translate' => 0,
        'vertex' => 0
    ],
    'downloadable_domains' => [
        '64.227.88.13'
    ],
    'install' => [
        'date' => 'Wed, 26 Aug 2020 10:07:10 +0000'
    ],
    'http_cache_hosts' => [
        [
            'host' => '127.0.0.1',
            'port' => '6082'
        ]
    ],
	'directories' => [
   	 'document_root_is_pub' => false
	]

];
