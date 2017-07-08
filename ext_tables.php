<?php
defined('TYPO3_MODE') or die();

call_user_func_array(function ($packageKey, $configuration) {

    /*
     * Add autoloader
     */
    \HDNET\Autoloader\Loader::extTables('MediaEssenz', $packageKey, [
        'TcaFiles',
        'SmartObjects',
        'Plugins',
    ]);

    /*
     * Add UserTSConfig
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . $packageKey . '/Configuration/TypoScript/User" extensions="tsconfig">');

    /*
     * Add main template
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($packageKey, 'Configuration/TypoScript/Main', 'Main');
}, [
    $_EXTKEY,
    unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])
]);
