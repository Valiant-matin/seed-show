<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->createFrame()->begin("Загрузка навигации");
?>

<? if ($arResult["NavPageCount"] > 1) : ?>

    <? if ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"]) : ?>
        <?
        $plus = $arResult["NavPageNomer"] + 1;
        $url = $arResult["sUrlPathParams"] . "PAGEN_" . $arResult["NavNum"] . "=" . $plus;

        ?>

        <button class="btn btn_yellow gallery-block__btn" name="Еще фото" data-url="<?= $url ?>">Еще фото</button>

    <? endif ?>

<? endif ?>