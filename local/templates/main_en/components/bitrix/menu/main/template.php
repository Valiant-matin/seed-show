<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)) : ?>
    <nav class="navigation">
        <ul class="navigation__list">
            <? foreach ($arResult as $arItem) : ?>
                <li class="navigation__item"><a class="navigation__link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
            <? endforeach; ?>
        </ul>
    </nav>
<? endif ?>