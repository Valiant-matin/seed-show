<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="slider preview">
    <div class="swiper preview-slider" data-swiper="top">
        <div class="swiper-wrapper">
            <? foreach ($arResult['ITEMS'] as $key => $item) : ?>
                <?
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="swiper-slide preview__slide" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                    <div class="preview__block">
                        <h2 class="preview__title slider-active fz-small"><?= $item['NAME'] ?></h2>
                    </div>
                    <picture class="picture preview__img">
                        <source class="lazyload" type="image/webp" srcset="<?= $item['PREVIEW_PICTURE']['SRC'] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>" media="(min-width: 769px)" />
                        <source class="lazyload" type="image/jpeg" srcset="<?= $item['PREVIEW_PICTURE']['SRC'] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>" media="(min-width: 769px)" />
                        <source class="lazyload" type="image/webp" srcset="<?= $item['DISPLAY_PROPERTIES']['mobile_image']['FILE_VALUE']['SRC'] ?> 1x" alt="<?= $item['DISPLAY_PROPERTIES']['mobile_image']['FILE_VALUE']['SRC'] ?>" media="(max-width: 768px)" />
                        <source class="lazyload" type="image/jpeg" srcset="<?= $item['DISPLAY_PROPERTIES']['mobile_image']['FILE_VALUE']['SRC'] ?> 1x" alt="<?= $item['DISPLAY_PROPERTIES']['mobile_image']['FILE_VALUE']['SRC'] ?>" media="(max-width: 768px)" />
                        <img class="picture__img lazyload" data-src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>" />
                    </picture>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>