<?php
require_once( PATH_site . 'typo3conf/localconf_global.php');

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

$typo_db = 'database';
$typo_db_username = 'user';
$typo_db_password = 'password';
$typo_db_host = 'localhost';

// If this config is set, TYPO3 writes sql errors to the FE
//$TYPO3_CONF_VARS['SYS']['sqlDebug'] = '1';

// This config enables the TYPO3 deprecation log.
// It logs deprecated TYPO3 functions (not PHP functions!) to typo3conf/deprecation_{HASH}.log
//$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = '1';

?>