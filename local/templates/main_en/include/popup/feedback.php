<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="my-modal">
    <div class="overlay"></div>
    <div class="my-modal__inner">
        <button class="btn-close" type="button my-modal__close" name="close" aria-label="Close modal window"><span class="icon-cross"></span><span class="visually-hidden"></span></button>
        <div class="my-modal__body">
            <h3 class="my-modal__title">Submit your application</h3>
            <div class="contact__form my-modal__form">
                <form class="contact-form" action="#">
                    <div class="contact-form__input">
                        <div class="input-wrapper" data-input-parent="">
                            <div class="input-wrapper__placeholder">Name</div>
                            <input class="input" data-input="" required="required" placeholder="Name" name="name" />
                        </div>
                    </div>
                    <div class="contact-from-input">
                        <div class="input-wrapper" data-input-parent="">
                            <div class="input-wrapper__placeholder">Phone number</div>
                            <input class="input" data-input="" required="required" placeholder="Phone number" data-mask-phone="data-mask-phone" name="phone" />
                        </div>
                    </div>
                    <div class="input-wrapper" data-input-parent="">
                        <div class="input-wrapper__placeholder">Comment</div>
                        <textarea class="textarea" data-input="" placeholder="Comment" name="comment"></textarea>
                    </div>
                    <p class="contact-form__text">By clicking the "contact us" button, I consent to the transfer and processing of personal data, and also confirm that I have read the privacy policy.</p>
                    <button class="btn btn_yellow contact__button modal-response contact-form__button" name="Connect with us">Connect with us</button>
                </form>
            </div>
        </div>
        <div class="my-modal__response">
            <p class="my-modal__response-text">Your application has been successfully sent! Our manager will contact you soon!</p>
        </div>
    </div>
</div>