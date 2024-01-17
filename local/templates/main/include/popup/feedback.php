<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="my-modal">
    <div class="overlay"></div>
    <div class="my-modal__inner">
        <button class="btn-close" type="button my-modal__close" name="btn-close" aria-label="Close modal window"><span class="icon-cross"></span><span class="visually-hidden"></span></button>
        <div class="my-modal__body">
            <h3 class="my-modal__title">Оставить заявку</h3>
            <div class="contact__form my-modal__form">
                <form class="contact-form" action="#">
                    <div class="contact-form__input">
                        <div class="input-wrapper" data-input-parent="">
                            <div class="input-wrapper__placeholder">Имя</div>
                            <input class="input" data-input="" required="required" placeholder="Имя" name="name" />
                        </div>
                    </div>
                    <div class="contact-from-input">
                        <div class="input-wrapper" data-input-parent="">
                            <div class="input-wrapper__placeholder">Телефонный номер</div>
                            <input class="input" data-input="" required="required" placeholder="Телефонный номер" data-mask-phone="data-mask-phone" name="phone" />
                        </div>
                    </div>
                    <div class="input-wrapper" data-input-parent="">
                        <div class="input-wrapper__placeholder">Комментарий</div>
                        <textarea class="textarea" data-input="" placeholder="Комментарий" name="comment"></textarea>
                    </div>
                    <p class="contact-form__text">Нажимая кнопку "связаться с нами", я даю согласие на передачу и обработку персональных данных, а также подтверждаю, что ознакомлен с политикой конфеденциальности.</p>
                    <button class="btn btn_yellow contact__button modal-response contact-form__button" name="Связаться с нами">Связаться с нами</button>
                </form>
            </div>
        </div>
        <div class="my-modal__response">
            <p class="my-modal__response-text">Ваша заявка успешно отправлена! Наш менеджер свяжется с вами в ближайшее время!</p>
        </div>
    </div>
</div>