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
<? foreach ($arResult['ITEMS'] as $key => $item) : ?>
    <?
    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <section class="direction mt-section" id="<?= $this->GetEditAreaId($item['ID']); ?>">
        <div class="container">
            <div class="direction__inner">
                <div class="direction__left" data-aos="fade-up">
                    <div class="direction__img">
                        <picture class="picture direction__img_1">
                            <source class="lazyload" type="image/webp" srcset="<?= $item['PROPERTIES']['img_webp']['webp_src'] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" media="(min-width: 769px)" />
                            <source class="lazyload" type="image/jpeg" srcset="<?= $item['PREVIEW_PICTURE']['SRC'] ?> 1x" alt="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" media="(min-width: 769px)" />
                            <img class="picture__img lazyload" data-src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" />
                        </picture>
                    </div>
                </div>
                <div class="direction__right" data-aos="fade-up">
                    <div class="direction__row">
                        <h2 class="direction__title"><?= $item['NAME'] ?></h2>
                        <ul class="direction__list">
                            <? foreach ($item['PROPERTIES']['list']['VALUE'] as $key2 => $item2) : ?>
                                <li data-aos="fade-right"><?= $item2 ?></li>
                            <? endforeach; ?>
                        </ul>
                    </div><a class="btn btn_green direction__button" href="<?= $item['PROPERTIES']['link']['VALUE'] ?>"><?= $item['PROPERTIES']['link']['DESCRIPTION'] ?></a>
                </div>
            </div>
        </div>
    </section>
<? endforeach; ?>