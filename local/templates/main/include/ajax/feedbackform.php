<?php
define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use CEvent;
use Bitrix\Highloadblock\HighloadBlockTable;

$request = Application::getInstance()->getContext()->getRequest();

Loader::includeModule('highloadblock');

$data = [];
$data['UF_LANG'] = 'ru';
$data['UF_NAME'] = $request['name'];
$data['UF_PHONE'] = $request['phone'];
$data['UF_TEXT'] = $request['message'];

$hlblock_id = 1;
$hlblock = HighloadBlockTable::getById($hlblock_id)->fetch();
$entity = HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$result = $entity_data_class::add($data);

if (!$result->getId()) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 1, 'message' => 'не удалось создать элемент', 'data' => $data]);
    die();
}

CEvent::Send('feedback_message', SITE_ID, $data);

header('Content-Type: application/json');
echo json_encode(['error' => 0, 'id' => $result->getId(), 'data' => $data]);
die();
