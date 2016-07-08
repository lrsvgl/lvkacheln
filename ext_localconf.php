<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Kacheln',
	array(
		'Kacheln' => 'list, show, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Kacheln' => 'create, update, delete',
		
	)
);
