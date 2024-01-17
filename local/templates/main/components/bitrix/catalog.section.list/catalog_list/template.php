<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="catalog">
    <div class="container">
        <div class="catalog__inner">
            <? foreach ($arResult['SECTIONS'] as $key => $item) : ?>
                <? if (!empty($item['childs'])) : ?>
                    <?
                    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <section class="catalog__section" data-aos="fade-up" id="<?= $item['CODE'] ?>">
                        <h2 class="catalog__title"><?= $item['NAME'] ?></h2>
                        <div class="catalog__box" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                            <div class="catalog__item">
                                <? foreach ($item['childs'] as $key2 => $item2) : ?>
                                    <div class="catalog-card">
                                        <div class="catalog-card__img">
                                            <picture class="picture">
                                                <source class="lazyload" type="image/webp" srcset="<?= $item2['img_webp'] ?> 1x" alt="<?= $item2['NAME'] ?>" media="(min-width: 769px)" />
                                                <source class="lazyload" type="image/jpeg" srcset="<?= $item2['img_webp'] ?> 1x" alt="<?= $item2['NAME'] ?>" media="(min-width: 769px)" />
                                                <img class="picture__img lazyload" data-src="<?= $item2['img_webp'] ?>" alt="<?= $item2['NAME'] ?>" />
                                            </picture>
                                        </div>
                                        <div class="catalog-card__body">
                                            <h4 class="catalog-card__title"><?= $item2['NAME'] ?></h4>
                                        </div>
                                    </div>
                                <? endforeach; ?>
                            </div>
                        </div>
                        <div class="catalog__btn">
                            <button class="btn btn_yellow modal-on" name="Узнать о наличии товара">Узнать о наличии товара</button>
                        </div>
                    </section>
                <? endif; ?>
            <? endforeach; ?>
        </div>
    </div>
</div>