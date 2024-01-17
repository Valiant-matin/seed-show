<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
</main>
<footer class="footer <? if (in_array($APPLICATION->GetCurDir(), ['/en/gallery/', '/en/contact/'])) : ?>mt-section<? endif; ?>">
    <div class="footer__inner">
        <div class="footer__col footer__col_left">
            <div class="footer__logo">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/logo-y.svg" alt="" />
            </div>
            <div class="footer__col">
                <p class="footer__text">© 2023 "Big Grain" All rights reserved</p><a class="footer__politic" href="/upload/document/PrivacyPolicyStatement.docx">Privacy Policy</a>
                <p class="footer__copirait">Website designed by:
                    <a href="https://t.me/Knyaz_36" target="_blank">
                        <svg width="426" height="73" viewBox="0 0 426 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_28)">
                                <path d="M139 1.5V71.7H122.8V42.9H90.8V71.7H74.6V1.5H90.8V29.2H122.7V1.5H139Z" fill="black"></path>
                                <path d="M171.9 36.9C169.6 34.7 168.4 31.6 168.4 27.5C168.4 23.3 169.6 20.1 172.1 18C174.5 15.9 178.1 14.8 182.7 14.8H212.6V1.5H182.3C176.1 1.5 170.8 2.6 166.3 4.7C161.8 6.8 158.2 9.8 155.8 13.7C153.3 17.6 152.1 22.3 152.1 27.7C152.1 33.2 153.4 37.9 155.9 41.8C158.4 45.7 162.1 48.6 166.8 50.6L152.2 71.8H169.3L181.7 53H196.5V71.6H212.5V40.2H182.2C177.7 40.2 174.3 39.1 171.9 36.9Z" fill="black"></path>
                                <path d="M279.6 41.7C281.9 44.7 283.1 48.1 283.1 52.1C283.1 56.4 281.7 60.1 278.9 63.2C276.1 66.3 272.3 68.7 267.5 70.4C262.7 72.1 257.5 72.9 251.8 72.9C247 72.9 242.2 72.3 237.4 71.1C232.6 69.9 228.1 68.1 223.8 65.6L228.8 54C231.9 55.9 235.3 57.3 239 58.3C242.7 59.3 246.3 59.8 249.9 59.8C254.7 59.8 258.7 58.9 261.9 57.2C265.1 55.5 266.7 53 266.7 49.9C266.7 47.3 265.6 45.3 263.4 44C261.2 42.7 258.3 42 254.5 42H237.4V29.6H253.3C256.6 29.6 259.1 28.9 261 27.6C262.8 26.3 263.8 24.4 263.8 22.1C263.8 19.4 262.5 17.2 259.8 15.7C257.2 14.2 253.8 13.4 249.6 13.4C246.5 13.4 243.4 13.8 240.1 14.7C236.8 15.5 233.7 16.8 230.8 18.5L225.9 5.90001C233.3 2.10001 241.3 0.200012 250 0.200012C255.5 0.200012 260.5 1.00001 265.1 2.60001C269.7 4.20001 273.4 6.50001 276.1 9.60001C278.8 12.7 280.2 16.3 280.2 20.3C280.2 23.6 279.3 26.6 277.5 29.2C275.7 31.8 273.2 33.8 270.1 35.2C274.1 36.5 277.3 38.7 279.6 41.7Z" fill="black"></path>
                                <path d="M350.2 71.7V58.7H312V42.4H344.6V29.8H295.9V71.7H350.2Z" fill="black"></path>
                                <path id="decor" d="M350.5 1.5H295.9V14.5H350.5V1.5Z" fill="#E5D14C"></path>
                                <path d="M421.8 41.3C419.5 38.4 416.3 36.4 412 35.1C415.1 33.6 417.6 31.5 419.3 28.8C421 26.2 421.9 23.1 421.9 19.6C421.9 13.8 419.6 9.3 415.1 6.2C410.6 3.1 404.2 1.5 396 1.5H363.3V13.5H394.6C398.1 13.5 400.7 14.2 402.6 15.7C404.4 17.2 405.4 19.3 405.4 22C405.4 24.8 404.5 26.9 402.7 28.4C400.9 29.8 398.2 30.6 394.7 30.6H363.4V71.7H398C406.8 71.7 413.5 70 418.2 66.5C422.9 63 425.3 58.2 425.3 52C425.2 47.7 424.1 44.2 421.8 41.3ZM397.3 59.7H379.5V41.9H397.3C404.9 41.9 408.7 44.8 408.7 50.6C408.8 56.6 404.9 59.7 397.3 59.7Z" fill="black"></path>
                                <path d="M36.2 32.8L65.3 1.5H47.2L16.1 34.3V1.5H0V70.8L25.6 44.1L48 71.7H67L36.2 32.8Z" fill="black"></path>
                            </g>
                            <defs>
                                <clippath id="clip0_1_28">
                                    <rect width="425.2" height="72.9" fill="white"></rect>
                                </clippath>
                            </defs>
                        </svg>
                    </a>
                </p>
            </div>
        </div>
        <div class="footer__col footer__links">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "PATH" => SITE_TEMPLATE_PATH . "/include/areas/includes/index/adress.php"
                )
            ); ?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "PATH" => SITE_TEMPLATE_PATH . "/include/areas/includes/index/phone.php"
                )
            ); ?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "PATH" => SITE_TEMPLATE_PATH . "/include/areas/includes/index/mail.php"
                )
            ); ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom__inner">
            <p class="footer-bottom__text">Leave a request and our manager will call you back</p>
            <div class="button-footer">
                <button class="btn btn_yellow modal-on" name="LEAVE A REQUEST">LEAVE A REQUEST</button>
            </div>
        </div>
    </div>
</footer>
</div>
</body>

</html>