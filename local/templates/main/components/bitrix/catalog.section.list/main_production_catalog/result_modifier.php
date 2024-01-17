<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['SECTIONS'] as $key => $item) {
    $arResult['SECTIONS'][$key]['webp_src'] = CFile::GetPath($item['UF_IMAGE_WEBP']);
}
