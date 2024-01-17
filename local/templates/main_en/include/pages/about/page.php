<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="preview-page__preview background-element preview-page_about">
    <div class="preview-page__titlebox">
        <div class="breadcrumb"> <a class="breadcrumb__link breadcrumb__homie" href="/">Home</a><span>/</span>
            <div class="breadcrumb__link breadcrumb__target"><? $APPLICATION->ShowTitle() ?></div>
        </div>
        <h1 class="preview-page__title"><? $APPLICATION->ShowTitle() ?></h1>
    </div>
</section>
<div class="about-section">
    <about>
        <div class="container">
            <div class="about__inner">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "",
                        "PATH" => SITE_TEMPLATE_PATH . "/include/areas/includes/about/main.php"
                    )
                ); ?>
                <section class="about-modal mt-section" data-aos="fade-up">
                    <div class="about-modal__inner">
                        <p class="about__title">Any questions left?</p>
                        <button class="btn btn_yellow about-modal__btn modal-on" name="WRITE TO US">WRITE TO US</button>
                    </div>
                </section>
            </div>
        </div>
    </about>
</div>