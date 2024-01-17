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
<section class="section-swiper mt-section swiper-bottom">
    <div class="section-swiper__inner">
        <div class="swiper" data-swiper="bottom">
            <div class="swiper-wrapper">
                <? foreach ($arResult['ITEMS'] as $key => $item) : ?>
                    <?
                    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="swiper-slide" id="<?= $this->GetEditAreaId($item['ID']); ?>">
                        <picture class="picture">
                            <source class="lazyload" type="image/webp" srcset="<?= $item['webp_src'] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>" media="(min-width: 769px)" />
                            <source class="lazyload" type="image/jpeg" srcset="<?= $item['PREVIEW_PICTURE']['SRC'] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>" media="(min-width: 769px)" />
                            <img class="picture__img lazyload" data-src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>" />
                        </picture>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</section>