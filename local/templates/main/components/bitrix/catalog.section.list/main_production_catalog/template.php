<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="service mt-section" data-aos="fade-up">
    <div class="container">
        <div class="service__inner">
            <h2 class="service__title">Ознакомьтесь с предложением нашей компании для дальнейшего сотрудничества</h2>
            <div class="service__box" data-aos="fade-up">
                <? foreach ($arResult['SECTIONS'] as $key => $item) : ?>
                    <?
                    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <a class="service-card" href="/catalog/#<?= $item['CODE'] ?>" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                        <div class="service-card__img">
                            <picture class="picture">
                                <source class="lazyload" type="image/webp" srcset="<?= $item['webp_src'] ?> 1x" alt="<?= $item['PICTURE']['ALT'] ?>" media="(min-width: 769px)" />
                                <source class="lazyload" type="image/jpeg" srcset="<?= $item['PICTURE']['SRC'] ?> 1x" alt="<?= $item['PICTURE']['ALT'] ?>" media="(min-width: 769px)" />
                                <img class="picture__img lazyload" data-src="<?= $item['PICTURE']['SRC'] ?>" alt="<?= $item['PICTURE']['ALT'] ?>" />
                            </picture>
                        </div>
                        <div class="service-card__body">
                            <h4 class="service-card__title"><?= $item['NAME'] ?></h4>
                            <div class="service-card__button">
                                <svg class="service-card__arrow" viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-305.000000, -6679.000000)" fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path d="M249.365851,6538.70769 L249.365851,6538.70769 C249.770764,6539.09744 250.426289,6539.09744 250.830166,6538.70769 L259.393407,6530.44413 C260.202198,6529.66364 260.202198,6528.39747 259.393407,6527.61699 L250.768031,6519.29246 C250.367261,6518.90671 249.720021,6518.90172 249.314072,6519.28247 L249.314072,6519.28247 C248.899839,6519.67121 248.894661,6520.31179 249.302681,6520.70653 L257.196934,6528.32352 C257.601847,6528.71426 257.601847,6529.34685 257.196934,6529.73759 L249.365851,6537.29462 C248.960938,6537.68437 248.960938,6538.31795 249.365851,6538.70769" id="arrow_right-[#336]"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>