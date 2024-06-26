<?php
  //Вызов компонента
  $APPLICATION->IncludeComponent(
      "swf:shop",
      "",
      [
        "arSettings"=>"",
        "IB_CAT"=>"",
        "IB_SKU"=>"",
        "IB_REW"=>"",
        "SETT_COLOR_1"=>"",
        "SETT_SHOP_1"=>"",
        "GROUP_PODOB_1"=>"",
        "GROUP_PODOB_1_PROP"=>"",
        "GROUP_PODOB_1_RAZD"=>"",
        "DETAIL_CODE"=>"",
        "SECTION_CODE"=>"",//Фильтр по коду секции
        "SECTION_CODE_PRINT"=>"",
        "SECTION_CODE_PRINT_PARAM"=>"?new=Y", //ФРОНТ Дополнительные гет параметры в главной ссылке слайдера для получения нужного среза
        "SECTION_CODE_PRINT_PARAM_INT"=>"?new=Y", //ФРОНТ Дополнительные гет параметры во внутренней ссылке слайдера для получения нужного среза
        "SECTION_NAME_PRINT"=>"",
        "LINK_CATALOG"=>"",
        "CART_DATA"=>"",
        "SLIDER_TITLE"=>"",
        "SLIDER_LIMIT"=>"",
        "ALL_CATALOG_CAST_TITLE"=>"",
        "BUTT_CENTER"=>"",
        "SEARCH_TEXT"=>"", //БЭК Текст поиска
        "GET_ORDERS_USER_NOW"=>"Y", //БЭК Получение заказов текущего пользователя
        "ITEMS_ON_ID_PROD"=>"Y", //БЭК Возврат дополнительного массива ITEMS с индексом=ID элемента. При использовании данного параметра необходимо отключать группировку подобных "GROUP_PODOB_1"=>"N"
        "FAVORITES"=>"Y", //БЭК Если заполнено - то выбираются только товары из массива избранных для донного пользователя
        "USE_FILTER"=>"Y", //БЭК Если заполнено - применяются фильтры пользователя
        "FILTER_NEW"=>"Y", //БЭК Если заполнено - применяется фильтр новых
        "FILTER_HIT"=>"Y", //БЭК Если заполнено - применяется фильтр хитов
        "FILTER_SALE"=>"Y", //БЭК Если заполнено - применяется фильтр скидка
        "FILTER_MODEL"=>"Модель", //БЭК Если заполнено - применяется дополнительный фильтр по модели
        "FILTER_VID"=>"Коллекция", //БЭК Если заполнено - применяется дополнительный фильтр по коллекции
        "FILTER_COLOR_EXT"=>"Зеленый", //БЭК Если заполнено - применяется дополнительный фильтр по цвету (Дополнительный. Так как фильтр цвет есть в плавающем фильтре)
        "FILTER_NO_ID"=>[], //БЭК Если заполнено - применяется дополнительный фильтр исключению полученных id)
        "TOUCH_EVENT"=>"N", //ФРОНТ СЛАЙДЕР Если заполнено N - отключается тачскрипт перемотки фоток слайдера карточки товара
        "SLIDER_MIN_PROD"=>3, //ФРОНТ СЛАЙДЕР Если заполнено то слайдер будет показан только при наличии в нем данного количества объектов
      ],
    );
  }
?>