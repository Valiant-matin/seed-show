<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<header class="header">
    <div class="header__inner">
		<div class="header__col"><a class="header__logo" href="/en/">
                <div class="header__logo-inner">
                    <img class="header-logo" src="<?= SITE_TEMPLATE_PATH ?>/images/logo-y.svg" alt="logo" />
                </div>
            </a>
			<a class="header__logo header__logo_2 header-logo-circle" href="/en/" aria-label="Home page">
                <div class="header__logo-inner"></div>
            </a>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            ); ?>
        </div>
        <div class="header__col">
            <div class="language">
                <p class="language__text">EN</p>
                <div class="language__options">
                    <a class="language__option" href="<?= str_replace('/en', '', $APPLICATION->GetCurDir()) ?>">RU</a>
                </div>
            </div>
            <div class="header__connection modal-on">
                <p class="header__phone">Сonnect with us</p><img class="header__phone-img" src="<?= SITE_TEMPLATE_PATH ?>/images/phone.svg" alt="phone" />
            </div>
            <div class="header__burger"></div>
        </div>
    </div>
</header>