<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
<?php
//
//require($_SERVER["DOCUMENT_ROOT"]."/local/function.php");die;
?>
    <main>
        <section class="section-gray">
            <section class="banner-main__wrap">
                <div class="container">
                    <div class="banner-main">
                        <div class="banner-main__inner">
                            <div class="banner-main__title">Причина оставить бизнес-подарок или промосувенир у себя</div>
                            <div class="banner-main__block-list">
                                <div class="banner-main__block-item">
                                    <div class="banner-main__block-top">
                                        <div class="banner-main__block-img">
                                            <img src="<?= DIST_PATH ?>img/banner-main/utility.png"></div>
                                        <div class="banner-main__block-title">82%</div>
                                    </div>
                                    <div class="banner-main__block-text">Полезность</div>
                                </div>
                                <div class="banner-main__block-item">
                                    <div class="banner-main__block-top">
                                        <div class="banner-main__block-img">
                                            <img src="<?= DIST_PATH ?>img/banner-main/attractiveness.png"></div>
                                        <div class="banner-main__block-title">29%</div>
                                    </div>
                                    <div class="banner-main__block-text">Привлекательность</div>
                                </div>
                                <div class="banner-main__block-item">
                                    <div class="banner-main__block-top">
                                        <div class="banner-main__block-img">
                                            <img src="<?= DIST_PATH ?>img/banner-main/great.png"></div>
                                        <div class="banner-main__block-title">26%</div>
                                    </div>
                                    <div class="banner-main__block-text">Просто здорово!</div>
                                </div>
                                <div class="banner-main__block-item">
                                    <div class="banner-main__block-top">
                                        <div class="banner-main__block-img">
                                            <img src="<?= DIST_PATH ?>img/banner-main/info.png">
                                        </div>
                                        <div class="banner-main__block-title">6%</div>
                                    </div>
                                    <div class="banner-main__block-text">Есть контактые данные</div>
                                </div>
                            </div>
                            <div class="banner-main__text">По материалам исследования ASI (Advertising Speciality Institute)</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="choice-block__wrap">
                <div class="choice-block">
                    <div class="choice-block__inner">
                        <div class="choice-block__left">
                            <div class="choice-block__left-box">
                                <a class="btn btn-fix choice-block__btn" href="#">Знаю</a>
                                <div class="choice-block__done"></div>
                            </div>
                        </div>
                        <div class="choice-block__center">
                            <div class="choice-block__center-box">
                                <div class="choice-block__title">Вы знаете что&nbsp;выбрать?</div>
                                <div class="choice-block__desc">Мы поможем найти, то&nbsp;что&nbsp;Вы&nbsp;ищете</div>
                            </div>
                        </div>
                        <div class="choice-block__right">
                            <div class="choice-block__right-box">
                                <div class="choice-block__question"></div>
                                <a class="btn btn-fix choice-block__btn" href="#">Не знаю</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="catalog-category-main__wrap">
            <div class="container">
                <div class="catalog-category-main__title">Выберите подходящую<br/>категорию</div>
                <div class="catalog-category-main">
                    <div class="catalog-category-main__group big-small">
                        <a class="catalog-category-main__item purple" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/set_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/set_icon.png"                                                        alt="Подарочные наборы"/>
                                </div>
                                <div class="catalog-category-main__name">Подарочные наборы</div>
                            </div>
                        </a>
                        <a class="catalog-category-main__item pacific-blue" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/electronics_bg.png);">

                            </div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/electronics_icon.png"                                                alt="Электроника"/>
                                </div>
                                <div class="catalog-category-main__name">Электроника</div>
                            </div>
                        </a>
                    </div>
                    <div class="catalog-category-main__group small-big"><a class="catalog-category-main__item brown" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/house_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/house_icon.png" alt="Для                                             дома"/>
                                </div>
                                <div class="catalog-category-main__name">Для дома</div>
                            </div>
                        </a>
                        <a class="catalog-category-main__item green" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/t-shirts_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/t-shirt_icon.png"                                                    alt="Футболки"/>
                                </div>
                                <div class="catalog-category-main__name">Футболки</div>
                            </div>
                        </a>
                    </div>
                    <div class="catalog-category-main__group big"><a class="catalog-category-main__item blue" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/relaxation_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/relaxation_icon.png" alt="Для                                        отдыха"/></div>
                                <div class="catalog-category-main__name">Для отдыха</div>
                            </div>
                        </a>
                    </div>
                    <div class="catalog-category-main__group big-small">
                        <a class="catalog-category-main__item light-grey" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/dishes_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/dishes_icon.png" alt="Посуда и                                       кухонные аксессуары"/></div>
                                <div class="catalog-category-main__name">Посуда и кухонные аксессуары</div>
                            </div>
                        </a>
                        <a class="catalog-category-main__item dark-blue" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/diaries_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/diaries_icon.png" alt="Ежедневники                                    и блокноты"/></div>
                                <div class="catalog-category-main__name">Ежедневники и блокноты</div>
                            </div>
                        </a>
                    </div>
                    <div class="catalog-category-main__group big-half-small">
                        <a class="catalog-category-main__item red" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/new-year_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/new-year_icon.png" alt="Новый год"/></div>
                                <div class="catalog-category-main__name">Новый год</div>
                            </div>
                        </a>
                        <a class="catalog-category-main__item light-green" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/awards_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/awards_icon.png" alt="Награды"/></div>
                                <div class="catalog-category-main__name">Награды</div>
                            </div>
                        </a>
                        <a class="catalog-category-main__item red" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/packaging_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/packaging_icon.png" alt="Упаковка"/></div>
                                <div class="catalog-category-main__name">Упаковка</div>
                            </div>
                        </a>
                    </div>
                    <div class="catalog-category-main__group small-big">
                        <a class="catalog-category-main__item orange" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/promo_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/promo_icon.png" alt="Промо продукция"/></div>
                                <div class="catalog-category-main__name">Промо продукция</div>
                            </div>
                        </a>
                        <a class="catalog-category-main__item yellow" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/bags_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/bags_icon.png" alt="Сумки и рюкзаки"/></div>
                                <div class="catalog-category-main__name">Сумки и рюкзаки</div>
                            </div>
                        </a>
                    </div>
                    <div class="catalog-category-main__group equal-half"><a class="catalog-category-main__item purple" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/clothes_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/clothes_icon.png" alt="Одежда с нанесением"/></div>
                                <div class="catalog-category-main__name">Одежда с нанесением</div>
                            </div>
                        </a>
                        <a class="catalog-category-main__item pacific-blue" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/umbrellas_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/umbrellas_icon.png" alt="Зонты"/></div>
                                <div class="catalog-category-main__name">Зонты</div>
                            </div>
                        </a>
                        <a class="catalog-category-main__item dark-blue" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/office_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/office_icon.png" alt="Для офиса"/></div>
                                <div class="catalog-category-main__name">Для офиса</div>
                            </div>
                        </a>
                    </div>
                    <div class="catalog-category-main__group big-small"><a class="catalog-category-main__item gray" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(<?= DIST_PATH ?>img/catalog/pens_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/pens_icon.png" alt="Ручки"/></div>
                                <div class="catalog-category-main__name">Ручки</div>
                            </div>
                        </a>
                        <a class="catalog-category-main__item light-red" href="#">
                            <div class="catalog-category-main__bg" style="background-image:url(img/catalog/presents_bg.png);"></div>
                            <div class="catalog-category-main__content">
                                <div class="catalog-category-main__icon">
                                    <img src="<?= DIST_PATH ?>img/catalog/presents_icon.png" alt="Праздничные подарки"/></div>
                                <div class="catalog-category-main__name">Праздничные подарки</div>
                            </div>
                        </a>
                    </div>
                </div>
                <a class="catalog-category-main__more" href="#"><span>Полный каталог</span>
                    <div class="btn btn-rounded btn-rounded_large btn-arrow-right product-recommended__more-arrow"></div>
                </a>
            </div>
        </section>
        <section class="product-recommended">
            <div class="container">
                <div class="product-recommended__title">Рекомендуемые товары</div>
                <div class="swiper-container js-slider-recommended">
                    <div class="product-recommended__list blocks swiper-wrapper">
                        <div class="product-card swiper-slide" id="product-recommended-0" data-price="3690" data-quantity="1">
                            <div class="product-card__inner">
                                <div class="product-card__marker-list">
                                    <div class="product-card__marker">136 шт.</div>
                                </div>
                                <a class="product-card__img" href="#">
                                    <img src="<?= DIST_PATH ?>img/catalog/product-card-backpack.png" alt="Рюкзак Classic Adicolor"></a>
                                <div class="product-card__info">
                                    <div class="product-card__price">3 690 ₽</div>
                                    <a class="product-card__title" href="#">Рюкзак Classic Adicolor</a>
                                    <div class="product-card__article">Арт.6802.20</div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__size">
                                        <select class="select js-select" name="size">
                                            <option value="s">Размер (S)</option>
                                            <option value="m">Размер (M)</option>
                                            <option value="l">Размер (L)</option>
                                        </select>
                                    </div>
                                    <div class="product-card__quantity">
                                        <div class="select-quantity">
                                            <div class="select-quantity__inner">
                                                <span class="select-quantity__minus js-quantity-minus">-</span>
                                                <input class="js-quantity-input" type="text" value="1" data-product-id="product-recommended-0">
                                                <span class="select-quantity__plus js-quantity-plus">+</span>
                                            </div>
                                            <div class="select-quantity__text">шт.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__order">
                                <div class="product-card__blocks-price">3 690 ₽</div>
                                <a class="btn btn-basket" href="#">В корзину</a>
                                <div class="product-card__total-sum js-quantity-sum">3 690 ₽</div>
                            </div>
                        </div>
                        <div class="product-card swiper-slide" id="product-recommended-1" data-price="1607" data-quantity="5">
                            <div class="product-card__inner">
                                <div class="product-card__marker-list">
                                    <div class="product-card__marker">429 шт.</div>
                                    <div class="product-card__marker product-card__marker_new">new</div>
                                </div><a class="product-card__img" href="#">
                                    <img src="<?= DIST_PATH ?>img/catalog/product-card-umbrella.png" alt="Зонт реверсивный MO9002-37"></a>
                                <div class="product-card__info">
                                    <div class="product-card__price">1 607 ₽</div>
                                    <a class="product-card__title" href="#">Зонт реверсивный MO9002-37</a>
                                    <div class="product-card__article">Арт. MO9002-37</div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__size">
                                        <select class="select js-select" name="size">
                                            <option value="s">Размер (S)</option>
                                            <option value="m">Размер (M)</option>
                                            <option value="l">Размер (L)</option>
                                        </select>
                                    </div>
                                    <div class="product-card__quantity">
                                        <div class="select-quantity">
                                            <div class="select-quantity__inner">
                                                <span class="select-quantity__minus js-quantity-minus">-</span>
                                                <input class="js-quantity-input" type="text" value="5" data-product-id="product-recommended-1">
                                                <span class="select-quantity__plus js-quantity-plus">+</span>
                                            </div>
                                            <div class="select-quantity__text">шт.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__order">
                                <div class="product-card__blocks-price">1 607 ₽</div>
                                <a class="btn btn-basket" href="#">В корзину</a>
                                <div class="product-card__total-sum js-quantity-sum">8 035 ₽</div>
                            </div>
                        </div>
                        <div class="product-card empty swiper-slide" id="product-recommended-2" data-price="8850" data-quantity="0">
                            <div class="product-card__inner">
                                <div class="product-card__marker-list">
                                    <div class="product-card__marker product-card__marker_empty product-card__marker_little">0 шт.</div>
                                </div>
                                <a class="product-card__img" href="#">
                                    <img src="<?= DIST_PATH ?>img/catalog/product-card-clock.png" alt="Часы настольные «Статус»">
                                </a>
                                <div class="product-card__info">
                                    <div class="product-card__price">8 850 ₽</div>
                                    <a class="product-card__title" href="#">Часы настольные «Статус»</a>
                                    <div class="product-card__article">Арт. 126211</div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__size">
                                    </div>
                                    <div class="product-card__quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__order">
                                <div class="product-card__blocks-price">8 850 ₽</div>
                                <a class="btn btn-basket btn-gray" href="#">Заказать</a>
                            </div>
                        </div>
                        <div class="product-card swiper-slide" id="product-recommended-3" data-price="1308" data-quantity="1">
                            <div class="product-card__inner">
                                <div class="product-card__marker-list">
                                    <div class="product-card__marker product-card__marker_little">1 шт.</div>
                                </div><a class="product-card__img" href="#">
                                    <img src="<?= DIST_PATH ?>img/catalog/product-card-lamp.png" alt="Светильник Flexible"></a>
                                <div class="product-card__info">
                                    <div class="product-card__price">1 308 ₽</div>
                                    <a class="product-card__title" href="#">Светильник Flexible</a>
                                    <div class="product-card__article">Арт. P513.714</div>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__size">
                                    </div>
                                    <div class="product-card__quantity">
                                        <div class="select-quantity">
                                            <div class="select-quantity__inner">
                                                <span class="select-quantity__minus js-quantity-minus">-</span>
                                                <input class="js-quantity-input" type="text" value="1" data-product-id="product-recommended-3">
                                                <span class="select-quantity__plus js-quantity-plus">+</span>
                                            </div>
                                            <div class="select-quantity__text">шт.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card__order">
                                <div class="product-card__blocks-price">1 308 ₽</div>
                                <a class="btn btn-basket" href="#">В корзину</a>
                                <div class="product-card__total-sum js-quantity-sum">1 308 ₽</div>
                            </div>
                        </div>
                        <a class="product-recommended__more swiper-slide" href="#" style="background-image: url(<?= DIST_PATH ?>img/bg/product-more-bg.png)">
                            <div class="product-recommended__more-inner">
                                <div class="product-recommended__more-title">Больше товаров</div>
                                <div class="btn btn-rounded btn-rounded_large btn-arrow-right product-recommended__more-arrow"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="announce">
            <div class="container">
                <div class="swiper-container js-slider-announce">
                    <div class="announce__inner swiper-wrapper">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "articles_template",
                            Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array("",""),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "5",
                                "IBLOCK_TYPE" => "fortemplate",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "2",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Статьи",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array("",""),
                                "SET_BROWSER_TITLE" => "Y",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "Y",
                                "SET_META_KEYWORDS" => "Y",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "Y",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "ASC",
                                "STRICT_SECTION_CHECK" => "N"
                            )
                        );?>

                        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_template", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "fortemplate",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "2",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "DATE_CREATE",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "news_template",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>

                        <div class="announce__content">
                            <div class="announce__content-box">
                                <div class="announce__content-title">Производство корпоративных<br>сувениров на заказ</div>
                                <div class="announce__content-text">
                                    <p>
                                        Желаете оставить приятное впечатление о себе и своей компании? Компания
                                        «Гифтон» станет вашим надежным помощником. Занимаясь более 10 лет
                                        поставкой и продажей сувенирной продукции оптом, мы предлагаем
                                        изготовление промоматериалов с нанесением корпоративной символики и
                                        оригинальным дизайнерским оформлением.
                                    </p>
                                    <p>
                                        У нас вы можете купить готовые сувениры со склада, заказать изделия по
                                        европейским каталогам, а также индивидуальное производство сувенирной
                                        продукции с логотипом.
                                    </p>
                                    <p>
                                        В каталоге вы легко отыщите подходящий товар, отсортировав ассортимент по
                                        названию, разделу, виду нанесения, бренду, материалу изготовления, цвету и т.д
                                    </p>
                                </div>
                            </div>
                            <div class="announce__content-box">
                                <div class="announce__content-title">Преимущества изготовления<br>сувениров на заказ в «Гифтон»</div>
                                <div class="announce__content-text">
                                    <p>
                                        Обратившись за производством корпоративных сувениров с логотипом
                                        компании к нам, вы  получите:
                                    </p>
                                    <div class="typography">
                                        <ul>
                                            <li>единый каталог с удобной системой поиска;</li>
                                            <li>регулярные спецпредложения и акции;</li>
                                            <li>максимум внимания и творческих сил при разработке индивидуального дизайна;</li>
                                            <li>использование современного оборудования;</li>
                                            <li>оперативную и бережную доставку;</li>
                                            <li>удобную систему оплаты;</li>
                                            <li>персональные условия сотрудничества, при которых необычные сувениры и другая рекламная продукция принесут вам еще большую выгоду.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="brief__wrap section-gray">
            <div class="container">
                <div class="brief js-brief">
                    <form class="validator js-brief-form" action="" method="POST">
                        <div class="brief-inner js-brief-step" data-brief-step="1">
                            <div class="brief-top">
                                <div class="brief__head">
                                    <div class="brief__title">Online бриф</div>
                                    <div class="brief__desc">Техническое задание, займет < 5 минут.</div>
                                </div>
                                <div class="brief__status-bar status-bar">
                                    <div class="status-bar__item active js-brief-status" data-brief-status="1">
                                        <div class="status-bar__number">1</div>
                                        <div class="status-bar__desc">
                                            <div class="status-bar__text">Выберите ценовую категорию сувенира</div>
                                            <a class="btn btn-blue status-bar__btn" href="javascript:void(0)">Выбрать все</a>
                                        </div>
                                    </div>
                                    <div class="status-bar__line"></div>
                                    <div class="status-bar__item js-brief-status" data-brief-status="2">
                                        <div class="status-bar__number">2</div>
                                    </div>
                                    <div class="status-bar__line"></div>
                                    <div class="status-bar__item js-brief-status" data-brief-status="3">
                                        <div class="status-bar__number">3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="brief-center">
                                <div class="swiper-container js-slider-brief">
                                    <div class="brief-card__list swiper-wrapper">
                                        <label class="brief-card promo swiper-slide">
                                            <div class="brief-card__inner">
                                                <div class="brief-card__title">Промо</div>
                                                <div class="brief-card__price">
                                                    до
                                                    <span>500 ₽</span>
                                                </div>
                                                <div class="btn btn-fix brief__btn">
                                                    <span>Выбрать</span>
                                                    <input class="hide" type="radio" name="price" value="promo">
                                                </div>
                                            </div>
                                        </label>
                                        <label class="brief-card business swiper-slide">
                                            <div class="brief-card__inner">
                                                <div class="brief-card__title">Бизнес</div>
                                                <div class="brief-card__price">
                                                    до
                                                    <span>1500 ₽</span>
                                                </div>
                                                <div class="btn btn-fix brief__btn">
                                                    <span>Выбрать</span>
                                                    <input class="hide" type="radio" name="price" value="business">
                                                </div>
                                            </div>
                                        </label>
                                        <label class="brief-card vip swiper-slide">
                                            <div class="brief-card__inner">
                                                <div class="brief-card__title">VIP</div>
                                                <div class="brief-card__price">
                                                    до
                                                    <span>5000 ₽</span>
                                                </div>
                                                <div class="btn btn-fix brief__btn">
                                                    <span>Выбрать</span>
                                                    <input class="hide" type="radio" name="price" value="vip">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="brief-bottom js-dropdown">
                                <div class="brief__title brief__title_arrow js-dropdown-name">Дополнительные опции</div>
                                <div class="brief-bottom__inner">
                                    <div class="brief__options js-dropdown-block">
                                        <label class="switch-wrap">
                                            <div class="switch">
                                                <input type="checkbox" name="packaging" checked="checked" disabled="disabled">
                                                <span class="switch-slider"></span>
                                            </div>
                                            <span class="switch-title">Упаковака</span>
                                        </label>
                                        <label class="switch-wrap">
                                            <div class="switch">
                                                <input type="checkbox" name="prototyping" checked="checked" disabled="disabled">
                                                <span class="switch-slider"></span>
                                            </div>
                                            <span class="switch-title">Макетирование</span>
                                        </label>
                                        <label class="switch-wrap always-on">
                                            <div class="switch">
                                                <input type="checkbox" name="delivery" checked="checked" disabled="disabled">
                                                <span class="switch-slider"></span>
                                            </div>
                                            <span class="switch-title">Доставка</span>
                                        </label>
                                        <label class="switch-wrap">
                                            <div class="switch">
                                                <input type="checkbox" name="infliction" checked="checked" disabled="disabled">
                                                <span class="switch-slider"></span>
                                            </div>
                                            <span class="switch-title">Нанесение</span>
                                        </label>
                                    </div>
                                    <div class="brief__step">
                                        <div class="brief__step-count">1/3</div>
                                        <a class="btn btn-rounded btn-rounded_large btn-check-mark brief__btn-step" href="javascript:void(0)"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="brief-inner js-brief-step hide" data-brief-step="2">
                            <div class="brief-top">
                                <div class="brief__head">
                                    <div class="brief__title">Online бриф</div>
                                    <div class="brief__desc">Техническое задание, займет < 5 минут.</div>
                                </div>
                                <div class="brief__status-bar status-bar">
                                    <div class="status-bar__item selected js-brief-status" data-brief-status="1">
                                        <div class="status-bar__number">1</div>
                                        <div class="status-bar__desc">
                                            <div class="status-bar__icon business"></div>
                                            <div class="status-bar__text">
                                                <ul>
                                                    <li>+ Макетирование</li>
                                                    <li>+ Нанесение</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="status-bar__line"></div>
                                    <div class="status-bar__item active js-brief-status" data-brief-status="2">
                                        <div class="status-bar__number">2</div>
                                        <div class="status-bar__desc status-bar__desc_center">
                                            <div class="status-bar__text">Выберите срок и тираж</div>
                                        </div>
                                    </div>
                                    <div class="status-bar__line"></div>
                                    <div class="status-bar__item js-brief-status" data-brief-status="3">
                                        <div class="status-bar__number">3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="brief-center">
                                <div class="brief-row">
                                    <div class="brief-card business selected">
                                        <div class="brief-card__inner">
                                            <div class="brief-card__title">Бизнес</div>
                                            <label class="btn btn-fix brief__btn disabled">Выбрано
                                                <input class="hide" type="radio" name="price" value="business" disabled>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="brief-settings">
                                        <div class="brief-settings__inner">
                                            <div class="brief-options">
                                                <label class="switch-wrap">
                                                    <div class="switch">
                                                        <input type="checkbox" name="from-15-days" checked="checked">
                                                        <span class="switch-slider"></span>
                                                    </div>
                                                    <span class="switch-title"><b>от 15 дней</b>
                                                        <span>Есть время ждать - <br>поставка из Китая</span>
                                                    </span>
                                                </label>
                                                <label class="switch-wrap">
                                                    <div class="switch">
                                                        <input type="checkbox" name="10-15-days"><span class="switch-slider"></span>
                                                    </div>
                                                    <span class="switch-title"><b>10-15 дней</b>
                                                        <span>Есть время - <br>склад в Москве</span>
                                                    </span>
                                                </label>
                                                <label class="switch-wrap">
                                                    <div class="switch">
                                                        <input type="checkbox" name="10-15-days"><span class="switch-slider"></span>
                                                    </div>
                                                    <span class="switch-title"><b class="icon-pseudo-fire">до 15 дней</b>
                                                        <span>Нет времени ни на что!<br> Все уже вот-вот начнется</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="brief-options">
                                                <!--+price-slider(days, 'catalog-filter')-->
                                                <div class="price-slider">
                                                    <div class="price-slider__name catalog-filter__name">Тираж</div>
                                                    <div class="price-slider__list catalog-filter__list">
                                                        <label>
                                                            <input class="js-count-slider-min" type="text" name="min" value="1500" data-min="100">
                                                        </label>
                                                        <label>
                                                            <input class="js-count-slider-max" type="text" name="max" value="4900" data-max="10000">
                                                        </label>
                                                    </div>
                                                    <div class="js-count-slider" data-step="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brief-bottom">
                                <div class="brief-bottom__inner">
                                    <div class="brief__back"><a class="btn btn-back brief__btn-back" href="javascript:void(0)"></a>
                                        <div class="brief__back-text">назад</div>
                                    </div>
                                    <div class="brief__step">
                                        <div class="brief__step-count">2/3</div><a class="btn btn-rounded btn-rounded_large btn-check-mark brief__btn-step" href="javascript:void(0)"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="brief-inner js-brief-step hide" data-brief-step="3">
                            <div class="brief-top">
                                <div class="brief__head">
                                    <div class="brief__title">Online бриф</div>
                                    <div class="brief__desc">Техническое задание, займет < 5 минут.</div>
                                </div>
                                <div class="brief__status-bar status-bar">
                                    <div class="status-bar__item selected js-brief-status" data-brief-status="1">
                                        <div class="status-bar__number">1</div>
                                        <div class="status-bar__desc">
                                            <div class="status-bar__icon business"></div>
                                            <div class="status-bar__text">
                                                <ul>
                                                    <li>+ Макетирование</li>
                                                    <li>+ Нанесение</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="status-bar__line"></div>
                                    <div class="status-bar__item selected js-brief-status" data-brief-status="2">
                                        <div class="status-bar__number">2</div>
                                        <div class="status-bar__desc status-bar__desc_center">
                                            <div class="status-bar__text">от 15 дней<br>1 500 - 4 900 шт.</div>
                                        </div>
                                    </div>
                                    <div class="status-bar__line"></div>
                                    <div class="status-bar__item active js-brief-status" data-brief-status="3">
                                        <div class="status-bar__number">3</div>
                                        <div class="status-bar__desc status-bar__desc_right">
                                            <div class="status-bar__text">Заполните контактные данные</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brief-center">
                                <div class="brief-row">
                                    <div class="brief-options selected">
                                        <label class="switch-wrap">
                                            <div class="switch">
                                                <input type="checkbox" name="from-15-days" checked="checked" disabled="disabled">
                                                <span class="switch-slider"></span>
                                            </div>
                                            <span class="switch-title"><b>от 15 дней</b>
                                                <span>Есть время ждать - <br>поставка из Китая</span>
                                            </span>
                                        </label>
                                        <label class="switch-wrap">
                                            <div class="switch">
                                                <input type="checkbox" name="10-15-days" disabled="disabled">
                                                <span class="switch-slider"></span>
                                            </div>
                                            <span class="switch-title"><b>10-15 дней</b>
                                                <span>Есть время - <br>склад в Москве</span>
                                            </span>
                                        </label>
                                        <label class="switch-wrap">
                                            <div class="switch">
                                                <input type="checkbox" name="10-15-days" disabled="disabled">
                                                <span class="switch-slider"></span>
                                            </div>
                                            <span class="switch-title"><b class="icon-pseudo-fire">до 15 дней</b>
                                                <span>Нет времени ни на что!<br> Все уже вот-вот начнется</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="brief-settings">
                                        <label class="brief-form__label">
                                            <input class="brief-form__input" name="name" type="text" placeholder="Имя Фамилия" data-validator-require="true">
                                        </label>
                                        <div class="brief-form__half">
                                            <label class="brief-form__label">
                                                <input class="brief-form__input" name="site" type="text" placeholder="Сайт" data-validator-require="true">
                                            </label>
                                            <label class="brief-form__label">
                                                <input class="brief-form__input js-input-mask" name="phone" type="text" placeholder="Телефон" data-validator-require="true" data-validator-type="phone">
                                            </label>
                                        </div>
                                        <div class="brief-form__half">
                                            <label class="brief-form__label">
                                                <input class="brief-form__input" name="email" type="text" placeholder="Email" data-validator-require="true" data-validator-type="email">
                                            </label>
                                            <label class="brief-form__label">
                                                <input class="brief-form__input" name="company" type="text" placeholder="Компания" data-validator-require="true">
                                            </label>
                                        </div>
                                        <label class="brief-form__label">
                                            <textarea class="brief-form__textarea" name="message" placeholder="Сообщение" data-validator-require="true"></textarea>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="brief-bottom">
                                <div class="brief-bottom__inner">
                                    <div class="brief__back"><a class="btn btn-back brief__btn-back" href="javascript:void(0)"></a>
                                        <div class="brief__back-text">назад</div>
                                    </div>
                                    <div class="brief__step">
                                        <div class="brief__step-inner">
                                            <label class="form__label form__label_checkbox">
                                                <input class="form__input-checkbox js-validator-agree" type="checkbox" name="agree">
                                                <span class="form__input-checkbox-custom"></span>
                                                <span class="form__label-text">Даю согласие на обработку персональных данных</span>
                                            </label>
                                            <div class="brief__step-count">3/3</div>
                                            <button class="btn btn-rounded btn-rounded_large btn-check-mark brief__btn-step" type="submit" disabled></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="map__inner" id="map"></div>
            <div class="container"><a class="map__navigator" href="https://30488.redirect.appmetrica.yandex.com/show_point_on_map?appmetrica_tracking_id=745803332332869252&amp;desc=Работа&amp;lang=ru&amp;lat=55.675281&amp;lon=37.560958&amp;subtitle=Россия, Москва, Профсоюзная улица, 23" target="_blank"></a>
                <div class="map__qr">
                    <img src="<?= DIST_PATH ?>img/map/yandex-navigator.png"></div>
            </div>
        </section>
    </main>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>