<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeTemplateLangFile(__FILE__);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <? $APPLICATION->ShowHead();?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="theme-color" content="#c9e0e04d">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?
    Asset::getInstance()->addCss(DIST_PATH . "styles/main.min.css");

    Asset::getInstance()->addJs(DIST_PATH . "js/main.min.js");
    ?>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type=\"text/javascript\"></script>
</head>
<body>
<? $APPLICATION->ShowPanel();?>
<div class="wrapper">
    <div class="main-content">
        <header class="header js-mobile-menu-header">
            <div class="header__top">
                <div class="container">
                    <div class="header__top-inner">
                        <div class="header__top-left">
                            <ul class="header__contact-list">
                                <li class="header__contact">
                                    <a class="header__contact_phone" href="tel:+74952252528">+7&nbsp;(495)&nbsp;225-25-28</a>&nbsp;
                                    <span>(пн-пт 10-18)</span></li>
                                <li class="header__contact header__contact_address">г. Москва, Профсоюзная ул., 23</li>
                                <li class="header__contact">
                                    <a class="header__contact_mail" href="mailto:info@gifton.ru">info@gifton.ru</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__top-right">
                            <div class="header__attention">25 000 ₽ - мин. сумма заказа</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__main">
                <div class="container">
                    <div class="header__main-inner">
                        <div class="header__main-left">
                            <div class="header__mobile-menu-icon">
                                <button class="hamburger hamburger--collapse js-mobile-menu-open" type="button" aria-label="Меню" aria-controls="navigation">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                            <a class="header__logo" href="/">
                                <img class="header__logo-desktop"
                                     src="<?= DIST_PATH ?>img/header/header-logo.png">
                                <img class="header__logo-mobile" src="<?= DIST_PATH ?>img/header/header-logo-mobile.png">
                            </a>
                        </div>
                        <div class="header__main-right search__wrap js-search-activate">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "main-menu-for-header",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                    "ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
                                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                    "COMPONENT_TEMPLATE" => "catalog_horizontal",
                                    "MENU_THEME" => "site",	// Тема меню
                                ),
                                false
                            );?>
                            <!-- Если нужно убрать иконку количества товаров в корзине, то нужно добавить класс "is-empty"-->
                            <div class="header-basket js-header-basket-active" data-basket-count="4">
                                <a class="header-basket__link" href="basket.html"></a>
                                <div class="header-basket__product-wrap js-quantity-parent">
                                    <div class="header-basket__product-inner">
                                        <div class="header-basket__product-list js-header-basket-scroll">
                                            <div class="header-basket__product" id="header-basket-product-0" data-price="3690" data-quantity="1500">
                                                <div class="header-basket__product-img">
                                                    <img src="<?= DIST_PATH ?>img/header/basket-item-1.png"></div>
                                                <div class="header-basket__product-center">
                                                    <a class="header-basket__product-name" href="#">Рюкзак Classic Adicolor</a>
                                                    <div class="header-basket__product-price">3 690 ₽</div>
                                                </div>
                                                <div class="header-basket__product-quantity">
                                                    <div class="select-quantity-mini">
                                                        <div class="select-quantity-mini__inner">
                                                            <span class="select-quantity-mini__minus js-quantity-minus">-</span>
                                                            <input class="js-quantity-input" type="text" value="1500" data-product-id="header-basket-product-0" data-quantity-max="1505">
                                                            <span class="select-quantity-mini__plus js-quantity-plus">+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-basket__product-sum js-quantity-sum">5 535 000 ₽</div>
                                                <div class="header-basket__product-remove">
                                                    <div class="btn-remove js-header-basket-remove"></div>
                                                </div>
                                            </div>
                                            <div class="header-basket__product" id="header-basket-product-1" data-price="1607" data-quantity="155">
                                                <div class="header-basket__product-img">
                                                    <img src="<?= DIST_PATH ?>img/header/basket-item-2.png"></div>
                                                <div class="header-basket__product-center">
                                                    <a class="header-basket__product-name" href="#">Зонт реверсивный</a>
                                                    <div class="header-basket__product-price">1 607 ₽</div>
                                                </div>
                                                <div class="header-basket__product-quantity">
                                                    <div class="select-quantity-mini">
                                                        <div class="select-quantity-mini__inner">
                                                            <span class="select-quantity-mini__minus js-quantity-minus">-</span>
                                                            <input class="js-quantity-input" type="text" value="155" data-product-id="header-basket-product-1" data-quantity-max="160">
                                                            <span class="select-quantity-mini__plus js-quantity-plus">+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-basket__product-sum js-quantity-sum">249 085 ₽</div>
                                                <div class="header-basket__product-remove">
                                                    <div class="btn-remove js-header-basket-remove"></div>
                                                </div>
                                            </div>
                                            <div class="header-basket__product" id="header-basket-product-2" data-price="1607" data-quantity="155">
                                                <div class="header-basket__product-img">
                                                    <img src="<?= DIST_PATH ?>img/header/basket-item-3.png"></div>
                                                <div class="header-basket__product-center">
                                                    <a class="header-basket__product-name" href="#">Светильник Flexible</a>
                                                    <div class="header-basket__product-price">1 607 ₽</div>
                                                </div>
                                                <div class="header-basket__product-quantity">
                                                    <div class="select-quantity-mini">
                                                        <div class="select-quantity-mini__inner">
                                                            <span class="select-quantity-mini__minus js-quantity-minus">-</span>
                                                            <input class="js-quantity-input" type="text" value="155" data-product-id="header-basket-product-2" data-quantity-max="160">
                                                            <span class="select-quantity-mini__plus js-quantity-plus">+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-basket__product-sum js-quantity-sum">249 085 ₽</div>
                                                <div class="header-basket__product-remove">
                                                    <div class="btn-remove js-header-basket-remove"></div>
                                                </div>
                                            </div>
                                            <div class="header-basket__product" id="header-basket-product-3" data-price="1607" data-quantity="155">
                                                <div class="header-basket__product-img">
                                                    <img src="<?= DIST_PATH ?>img/header/basket-item-3.png"></div>
                                                <div class="header-basket__product-center">
                                                    <a class="header-basket__product-name" href="#">Светильник Flexible</a>
                                                    <div class="header-basket__product-price">1 607 ₽</div>
                                                </div>
                                                <div class="header-basket__product-quantity">
                                                    <div class="select-quantity-mini">
                                                        <div class="select-quantity-mini__inner">
                                                            <span class="select-quantity-mini__minus js-quantity-minus">-</span>
                                                            <input class="js-quantity-input" type="text" value="155" data-product-id="header-basket-product-3" data-quantity-max="160">
                                                            <span class="select-quantity-mini__plus js-quantity-plus">+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-basket__product-sum js-quantity-sum">249 085 ₽</div>
                                                <div class="header-basket__product-remove">
                                                    <div class="btn-remove js-header-basket-remove"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-basket__bottom">
                                        <div class="header-basket__attention">25 000 ₽ - Минимальная сумма заказа!</div>
                                        <div class="header-basket__total-sum js-quantity-total-sum">6 282 255 ₽</div>
                                    </div>
                                </div>
                            </div>
                            <div class="search__block">
                                <div class="btn-remove js-search-close"></div>
                                <form class="search js-search" action="" method="GET">
                                    <input type="text" name="q" placeholder="поиск..." autocomplete="off">
                                    <button class="btn btn-rounded btn-rounded_medium btn-search">
                                        <span>Поиск</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="color-line">
                <div class="container">
                    <div class="color-line__inner">
                        <div class="color-line__item bg-light-blue"></div>
                        <div class="color-line__item bg-green"></div>
                        <div class="color-line__item bg-yellow"></div>
                        <div class="color-line__item bg-red"></div>
                        <div class="color-line__item bg-blue"></div>
                        <div class="color-line__item bg-yellow"></div>
                        <div class="color-line__item bg-orange"></div>
                        <div class="color-line__item bg-light-green"></div>
                    </div>
                </div>
            </div>

<? if ($APPLICATION->GetCurPage(false) === '/'): ?>
    <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "slider_template",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "NAME",
                    2 => "PREVIEW_TEXT",
                    3 => "PREVIEW_PICTURE",
                    4 => "",
                    ),
                "FILTER_NAME" => "",	// Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "1",	// Код информационного блока
                "IBLOCK_TYPE" => "fortemplate",	// Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                "MEDIA_PROPERTY" => "",	// Свойство для отображения медиа
                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "20",	// Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PARENT_SECTION" => "",	// ID раздела
                "PARENT_SECTION_CODE" => "",	// Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "BLINK",
                    2 => "BTEXT",
                    3 => "",
                ),
                "SEARCH_PAGE" => "/search/",	// Путь к странице поиска
                "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                "SHOW_404" => "N",	// Показ специальной страницы
                "SLIDER_PROPERTY" => "",	// Свойство с изображениями для слайдера
                "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                "TEMPLATE_THEME" => "blue",	// Цветовая тема
                "USE_RATING" => "N",	// Разрешить голосование
                "USE_SHARE" => "N",	// Отображать панель соц. закладок
            ),
            false
    );?>
<? else: ?>
    <div class="header__bottom">
        <div class="header__bg" style="background-image:url(<?= DIST_PATH ?>img/bg/news.png);"></div>
        <div class="header__bottom-inner">
            <div class="container">
                <div class="header__bottom-flex">
                    <div class="header__bottom-full">
                        <h1 class="title-balloon news-title-balloon">
                            <?$APPLICATION->ShowTitle()?>
                        </h1>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:breadcrumb",
                            "top-navigate",
                            Array(
                                "START_FROM" => "0",
                                "PATH" => "",
                                "SITE_ID" => "s1"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? endif; ?>
</header>
