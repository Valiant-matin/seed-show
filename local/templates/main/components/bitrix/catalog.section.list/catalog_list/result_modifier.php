<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$elements = [];
$arFilter = ["IBLOCK_ID" => $arParams['IBLOCK_ID'], "ACTIVE" => "Y"];
$rsData = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, false, ['*', 'PROPERTY_img_webp']);
while ($arData = $rsData->Fetch()) {
    $arData['img_webp'] =  CFile::GetPath($arData['PROPERTY_IMG_WEBP_VALUE']);
    $elements[] = $arData;
}

$sections = [];
foreach ($arResult['SECTIONS'] as $key => $item) {
    $sections[$item['ID']] = $item;
}

foreach ($elements as $key => $item) {
    if ($sections[$item['IBLOCK_SECTION_ID']]) {
        $sections[$item['IBLOCK_SECTION_ID']]['childs'][] = $item;
    }
}

$arResult['SECTIONS'] = $sections;
