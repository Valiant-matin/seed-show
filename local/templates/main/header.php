<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">

<head>
    <meta charset="utf-8">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? require $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/template/assets.php'; ?>
    <? $APPLICATION->ShowHead(); ?>
</head>

<? $APPLICATION->ShowPanel(); ?>
<body>
    <div class="preloader">
        <div class="clear-loading loading-effect-2"><span></span></div>
    </div>
    <div class="wrapper" style="opacity: 0">
        <? require $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/popup/feedback.php'; ?>
        <? require $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/areas/gotop.php'; ?>
        <? require $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/template/header.php'; ?>
        <main>
           