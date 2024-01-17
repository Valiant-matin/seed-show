<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="preview-page__preview background-element preview-page_catalog">
    <div class="preview-page__titlebox">
        <div class="breadcrumb"> <a class="breadcrumb__link breadcrumb__homie" href="/">Главная</a><span>/</span>
            <div class="breadcrumb__link breadcrumb__target"><? $APPLICATION->ShowTitle() ?></div>
        </div>
        <h1 class="preview-page__title"><? $APPLICATION->ShowTitle() ?></h1>
    </div>
</section>
<? $APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "catalog_list",
    array(
        "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
        "ADD_SECTIONS_CHAIN" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COUNT_ELEMENTS" => "Y",
        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
        "FILTER_NAME" => "sectionsFilter",
        "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
        "IBLOCK_ID" => "7",
        "IBLOCK_TYPE" => "ib_type_main",
        "SECTION_CODE" => "",
        "SECTION_FIELDS" => array("", ""),
        "SECTION_ID" => $_REQUEST["SECTION_ID"],
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array("", ""),
        "SHOW_PARENT_NAME" => "Y",
        "TOP_DEPTH" => "2",
        "VIEW_MODE" => "LINE"
    )
); ?>