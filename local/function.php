<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule('iblock');

function fetchInfoblockElements($additionalFilter = [])
{
    //получение свойств
    $arSelect = Array(
        "ID",
        "NAME",
        "DATE_ACTIVE_FROM",
        "PROPERTY_ARTICLE_NUM"

    );
    $arFilter = Array(
        "IBLOCK_ID"=>10,
        "ACTIVE"=>"Y",
    );
    $fullFilter = array_merge($arFilter, $additionalFilter);
    $elementsRes = CIBlockElement::GetList([], $fullFilter, false, false, $arSelect);

    while ($ob = $elementsRes->GetNext()) {
        $infoblockElements[] = $ob;
    }
    return $infoblockElements;
}

$filename = __DIR__ . '/products.txt';
$fileElememts = file($filename);
$parsedFileElements = [];
foreach ($fileElememts as $elem) {
    $elem = explode(';', $elem);
    $parsedFileElements[] = $elem;
    $articles[] = $elem[1];
}

$allElements = fetchInfoblockElements();

//удаление из бд
//foreach ($allElements as $allElement) {
//    $article = $allElement["PROPERTY_ARTICLE_NUM_VALUE"];
//        if(in_array($article, $articles)) {
//            $existElements[] = $allElement;
//        } else {
//            CIBlockElement::Delete($allElement['ID']);
//        }
//}

foreach ($parsedFileElements as $elem) {
    $el = new CIBlockElement;

    $PROP['ARTICLE_NUM'] = $elem[1];
    $PROP['BRAND'] = $elem[4];
    $PROP['COLOR'] = $elem[5];
    $PROP['SIZE'] = $elem[6];
    $PROP['DETAIL_PRODUCT_PICTURES'] = $elem[7];

    $arLoadProductArray = Array(
        'MODIFIED_BY' => $GLOBALS['USER']->GetID(),
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID" => 10,
        "ACTIVE" => "Y",
        "NAME" => $elem[0],
        "PROPERTY_VALUES"=> $PROP,
    );
    $needUpdate = false;

    foreach ($existElements as $existElement){
        if ($existElement['PROPERTY_ARTICLE_NUM_VALUE'] == $elem[1]) {
            $PRODUCT_ID = $existElement['ID'];
            $needUpdate = true;
        }
    }

    if ($needUpdate) {
        $res = $el->Update($PRODUCT_ID, $arLoadProductArray);
    } else {
        $PRODUCT_ID = $el->Add($arLoadProductArray);
        $res = $PRODUCT_ID;
    }

    if ($res) {
        echo 'element ' . $PRODUCT_ID . ' is done';
    } else {
        echo $el->LAST_ERROR;
    }

    //добавляем цену
    $arFieldsPrice = Array(
        "PRODUCT_ID" => $PRODUCT_ID,
        "CATALOG_GROUP_ID" => 1,
        "PRICE" => $elem[2],
        "CURRENCY" => "RUB",
    );

    $res = CPrice::GetList(
        array(),
        array(
            "PRODUCT_ID" => $PRODUCT_ID,
            "CATALOG_GROUP_ID" => "BASE"
        )
    );

    if ($arr = $res->Fetch()) {
        CPrice::Update($arr["ID"], $arFieldsPrice);
    } else {
        CPrice::add($arFieldsPrice);
    }

    //добавляем кол-во товара
    $arFieldsProduct = array(
        "ID" => $PRODUCT_ID,
        "VAT_ID" => 1, //выставляем тип ндс (задается в админке)
        "VAT_INCLUDED" => "Y", //НДС входит в стоимость
        "QUANTITY" => $elem[3]
    );

    $paramsProduct = CCatalogProduct::GetByID($PRODUCT_ID);
    $quantityProductDb = $paramsProduct["QUANTITY"];
    if($elem[3] !== $quantityProductDb) {
        CCatalogProduct::Update($PRODUCT_ID, $arFieldsProduct);
    } else if(CCatalogProduct::Add($arFieldsProduct)) {
        echo "Добавили параметры товара к элементу каталога ".$PRODUCT_ID.'<br>';
    } else {
        echo 'Ошибка добавления параметров<br>';
    }
}



