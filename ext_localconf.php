<?php

use DrBlitz\BlogAuthor\Controller\AuthorController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:blog_author/Configuration/TsConfig/Page/Wizards.tsconfig">');


ExtensionUtility::configurePlugin(
    'BlogAuthor',
    'Authors',
    [
        AuthorController::class => 'show',
    ]
);
