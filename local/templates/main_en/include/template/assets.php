<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

# init core
CJSCore::Init();
CJSCore::Init(array("jquery"));

# favicon
# Asset::getInstance()->addString('<link rel="icon" type="image/png" href="' . SITE_TEMPLATE_PATH . '/favicon.png" />');

#meta
Asset::getInstance()->addString('<meta content="width=device-width, initial-scale=1" name="viewport">');
Asset::getInstance()->addString('<meta content="ie=edge" http-equiv="x-ua-compatible">');
Asset::getInstance()->addString('<meta name="format-detection" content="telephone=no">');

# Css files
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/styles/index.css");

# Js files
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/scripts/scripts.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/scripts/backend.js");
