<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'BlogAuthor',
    'Authors',
    'LLL:EXT:blog_author/Resources/Private/Language/locallang_db.xlf:plugin.blog_authors.title',
    'plugin-blog-posts'
);
