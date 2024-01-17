<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="preview-page__preview background-element preview-page_delivery">
    <div class="preview-page__titlebox">
        <div class="breadcrumb"> <a class="breadcrumb__link breadcrumb__homie" href="/">Home</a><span>/</span>
            <div class="breadcrumb__link breadcrumb__target"><? $APPLICATION->ShowTitle() ?></div>
        </div>
        <h1 class="preview-page__title"><? $APPLICATION->ShowTitle() ?></h1>
    </div>
</section>
<div class="container">
    <section class="about-advantages mt-section delivery-section" data-aos="fade-up">
        <div class="about-advantages__inner">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "PATH" => SITE_TEMPLATE_PATH . "/include/areas/includes/delivery/info.php"
                )
            ); ?>
        </div>
        <div class="catalog__btn">
            <button class="btn btn_yellow modal-on" name="LEARN MORE">LEARN MORE</button>
        </div>
    </section>
</div>