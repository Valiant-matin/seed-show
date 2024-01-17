<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['ITEMS'][$key]['webp_src'] = CFile::GetPath($item['PROPERTIES']['img_webp']['VALUE']);
}
