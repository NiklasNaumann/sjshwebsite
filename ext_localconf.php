<?php

defined('TYPO3') or die('Access denied.');

// Add default RTE configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sjsh_website'] = 'EXT:sjsh_website/Configuration/RTE/Default.yaml';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
  @import "EXT:sjsh_website/Configuration/TypoScript/setup.typoscript"
');