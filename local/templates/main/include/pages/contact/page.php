<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="response">
    <div class="overlay"> </div>
    <div class="response__inner">
        <button class="btn-close" type="button my-modal__close" name="close"><span class="icon-cross"></span><span class="visually-hidden"></span></button>
        <p class="response__title">Ваша заявка успешно отправлена! Наш менеджер свяжется с вами в ближайшее время!</p>
    </div>
</div>
<section class="preview-page__preview background-element preview-page_contact">
    <div class="preview-page__titlebox">
        <div class="breadcrumb"> <a class="breadcrumb__link breadcrumb__homie" href="/">Главная</a><span>/</span>
            <div class="breadcrumb__link breadcrumb__target"><? $APPLICATION->ShowTitle() ?></div>
        </div>
        <h1 class="preview-page__title"><? $APPLICATION->ShowTitle() ?></h1>
    </div>
</section>
<section class="contact">
    <div class="contact__inner">
        <div class="contact__map">
            <div class="contact__map-body">
                <div class="contact__map-overlay"><img class="contact__map-tap" src="<?= SITE_TEMPLATE_PATH ?>/images/tap.svg" alt="" /></div>
                <script type="text/javascript" charset="utf-8" async="" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A298b118c05514fa7cf3d448d37f9574217fd1486cc8927396840209148ac2cee&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
        <div class="container">
            <div class="contact__block">
                <div class="contact__form">
                    <form class="contact-form" action="#" id="form-page-contact">
                        <div class="contact-form__input">
                            <div class="input-wrapper" data-input-parent="">
                                <div class="input-wrapper__placeholder">Имя</div>
                                <input class="input" data-input="" required="required" type="text" placeholder="Имя" name="name" />
                            </div>
                        </div>
                        <div class="contact-from-input">
                            <div class="input-wrapper" data-input-parent="">
                                <div class="input-wrapper__placeholder">Фамилия</div>
                                <input class="input" data-input="" required="required" type="text" placeholder="Фамилия" name="surname" />
                            </div>
                        </div>
                        <div class="contact-from-input">
                            <div class="input-wrapper" data-input-parent="">
                                <div class="input-wrapper__placeholder">Телефонный номер</div>
                                <input class="input" data-input="" required="required" type="text" placeholder="Телефонный номер" data-mask-phone="data-mask-phone" name="phone" />
                            </div>
                        </div>
                        <div class="input-wrapper" data-input-parent="">
                            <div class="input-wrapper__placeholder">Комментарий</div>
                            <textarea class="textarea" data-input="" name="comment" placeholder="Комментарий"></textarea>
                        </div>
                        <button class="btn btn_yellow contact__button contact-form__button" name="Связаться с нами">Связаться с нами</button>
                    </form>
                </div>
                <div class="contact__bottom">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/areas/includes/contact/info.php"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</section>