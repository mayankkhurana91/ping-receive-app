<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Testing.PingReceive',
            'Information',
            'Information'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Testing.PingReceive',
            'Management',
            'Management'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Testing.PingReceive',
            'Administration',
            'Administration'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ping_receive', 'Configuration/TypoScript', 'PingReceiveApp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pingreceive_domain_model_order', 'EXT:ping_receive/Resources/Private/Language/locallang_csh_tx_pingreceive_domain_model_order.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pingreceive_domain_model_order');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pingreceive_domain_model_dishes', 'EXT:ping_receive/Resources/Private/Language/locallang_csh_tx_pingreceive_domain_model_dishes.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pingreceive_domain_model_dishes');

    }
);
