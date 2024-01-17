<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$imgPath = CFile::GetPath($arResult['ITEMS'][0]['PROPERTIES']['img_webp']['VALUE']);
$arResult['ITEMS'][0]['PROPERTIES']['img_webp']['webp_src'] = $imgPath;