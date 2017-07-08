<?php
defined('TYPO3_MODE') or die();

call_user_func_array(function ($packageKey, $configuration) {

    /*
     * Add autoloader
     */
    \HDNET\Autoloader\Loader::extLocalconf('MediaEssenz', $packageKey, [
        'TcaFiles',
        'SmartObjects',
        'Plugins',
    ]);

    /*
     * Add PageTSConfig
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . $packageKey . '/Configuration/TypoScript/Page" extensions="pagets">');

}, [
    $_EXTKEY,
    unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])
]);
