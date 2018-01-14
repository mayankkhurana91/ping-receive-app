<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Testing.PingReceive',
            'Information',
            [
                'Order' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Order' => 'list, show'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Testing.PingReceive',
            'Management',
            [
                'Order' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Order' => 'list, show'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Testing.PingReceive',
            'Administration',
            [
                'Order' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Order' => 'list, show'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    information {
                        iconIdentifier = ping_receive-plugin-information
                        title = LLL:EXT:ping_receive/Resources/Private/Language/locallang_db.xlf:tx_ping_receive_information.name
                        description = LLL:EXT:ping_receive/Resources/Private/Language/locallang_db.xlf:tx_ping_receive_information.description
                        tt_content_defValues {
                            CType = list
                            list_type = pingreceive_information
                        }
                    }
                    management {
                        iconIdentifier = ping_receive-plugin-management
                        title = LLL:EXT:ping_receive/Resources/Private/Language/locallang_db.xlf:tx_ping_receive_management.name
                        description = LLL:EXT:ping_receive/Resources/Private/Language/locallang_db.xlf:tx_ping_receive_management.description
                        tt_content_defValues {
                            CType = list
                            list_type = pingreceive_management
                        }
                    }
                    administration {
                        iconIdentifier = ping_receive-plugin-administration
                        title = LLL:EXT:ping_receive/Resources/Private/Language/locallang_db.xlf:tx_ping_receive_administration.name
                        description = LLL:EXT:ping_receive/Resources/Private/Language/locallang_db.xlf:tx_ping_receive_administration.description
                        tt_content_defValues {
                            CType = list
                            list_type = pingreceive_administration
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'ping_receive-plugin-information',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:ping_receive/Resources/Public/Icons/user_plugin_information.svg']
			);
		
			$iconRegistry->registerIcon(
				'ping_receive-plugin-management',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:ping_receive/Resources/Public/Icons/user_plugin_management.svg']
			);
		
			$iconRegistry->registerIcon(
				'ping_receive-plugin-administration',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:ping_receive/Resources/Public/Icons/user_plugin_administration.svg']
			);
		
    }
);
