<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$COo/zi9bZof8tKQDZUmWaA$eG8Owiasq57VKEywIfe99REWVEcRi0HsIRrQPYrzzZc',
        'loginSecurityLevel' => 'normal',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'typo3_ping_receive',
                'driver' => 'mysqli',
                'host' => 'localhost',
                'password' => 'dev',
                'user' => 'developer',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'about' => 'a:0:{}',
            'backend' => 'a:5:{s:9:"loginLogo";s:0:"";s:19:"loginHighlightColor";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'belog' => 'a:0:{}',
            'beuser' => 'a:0:{}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'felogin' => 'a:0:{}',
            'fluid_styled_content' => 'a:0:{}',
            'form' => 'a:0:{}',
            'func' => 'a:0:{}',
            'impexp' => 'a:0:{}',
            'info' => 'a:0:{}',
            'info_pagetsconfig' => 'a:0:{}',
            'introduction' => 'a:0:{}',
            'lowlevel' => 'a:0:{}',
            'ping_receive' => 'a:0:{}',
            'reports' => 'a:0:{}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
            'setup' => 'a:0:{}',
            'tstemplate' => 'a:0:{}',
            'version' => 'a:0:{}',
            'viewpage' => 'a:0:{}',
            'wizard_crpages' => 'a:0:{}',
            'wizard_sortpages' => 'a:0:{}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'eu',
            ],
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => -1,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcuBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'enableDeprecationLog' => false,
        'encryptionKey' => '84ff94d6ee24324c5e7a67aa5f72e7c23463092ea30339cce4538ac3145f3fd403c61612bb44ae91511f21c2a449ef59',
        'exceptionalErrors' => 20480,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'TYPO3 New Site',
        'sqlDebug' => 0,
        'systemLogLevel' => 2,
    ],
];
