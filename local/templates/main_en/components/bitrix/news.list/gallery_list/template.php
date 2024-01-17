<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="gallery-block__box">
    <div class="gallery-block__images">
        <? foreach ($arResult['ITEMS'] as $key => $item) : ?>
            <?
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <a class="gallery-block__img fancybox" data-fancybox="gallery" href="<?= $item['PREVIEW_PICTURE']["SRC"] ?>" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                <picture class="picture">
                    <source class="lazyload" type="image/webp" srcset="<?= $item['webp_src'] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']["ALT"] ?>" media="(min-width: 769px)" />
                    <source class="lazyload" type="image/jpeg" srcset="<?= $item['PREVIEW_PICTURE']["SRC"] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']["ALT"] ?>" media="(min-width: 769px)" />
                    <img class="picture__img lazyload" data-src="<?= $item['PREVIEW_PICTURE']["SRC"] ?>" alt="<?= $item['PREVIEW_PICTURE']["ALT"] ?>" />
                </picture>
            </a>
        <? endforeach; ?>
    </div>
    <div data-container-button="">
        <?= $arResult['NAV_STRING'] ?>
    </div>
</div>