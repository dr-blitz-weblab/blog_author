<?php


if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'blog_author',
    'Configuration/TypoScript/Static',
    'TYPO3 Blog: Authors'
);
