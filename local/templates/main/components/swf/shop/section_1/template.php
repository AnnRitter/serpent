<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  //Проверяем поиск или нет
  if (isset($_GET["search"])) {
    $poisk=true;
  } else {
    $poisk=false;
  }
?>
<main>
  <?php //Страница каталога?>
  <?php if(!$poisk):?>
    <div class="catalog-container" style="background-image: url('<?php echo SITE_TEMPLATE_PATH;?>/img/catalog/bg.jpg')">
      <div class="catalog-container__tablet" style="background-image: url('<?php echo SITE_TEMPLATE_PATH;?>/img/catalog/bg-tablet.jpg')"></div>
      <div class="catalog-container__mobile" style="background-image: url('<?php echo SITE_TEMPLATE_PATH;?>/img/catalog/bg-mobile.jpg')"></div>
      <div class="container">
        <?php
          //Хлебные крошки
          $APPLICATION->IncludeComponent(
            "swf:breadcrumbs",
            "main_1",
            [
              "ITEMS"=>[
              [
                "NAME"=>"Главная",
                "LINK"=>"/",
              ],
              [
                "NAME"=>"Каталог",
                "LINK"=>"",
              ]
              ],
            ],
          );
        ?>
      </div>
      <div class="container">
        <div class="article-page__title">Купальники</div>
      </div>
    </div>
  <?php endif;?>
  <div class="container">
    <?php //Страница поиска?>
    <?php if($poisk):?>
      <?php
        $count_search=count($arResult["ITEMS"]);
        $arCountNames=[
          "товар",
          "товара",
          "товаров",
        ];
      ?>
      <?php
        //Хлебные крошки
        $APPLICATION->IncludeComponent(
          "swf:breadcrumbs",
          "main_1",
          [
            "ITEMS"=>[
            [
              "NAME"=>"Главная",
              "LINK"=>"/",
            ],
            [
              "NAME"=>"Результаты поиска",
              "LINK"=>"",
            ]
            ],
          ],
        );
      ?>
      <div class="search-head">
        <h1>Результаты поиска</h1>
        <div class="search-head__count">Найдено <?php echo swf_util::num_word($count_search,$arCountNames);?></div>
      </div>
    <?php endif;?>
    <div class="catalog-block">
      <div class="filter-mobile">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
          <path d="M6.82221 17L10.6444 15.2222V10.5111L16.6 4.46667C16.8667 4.2 16.9555 3.93333 16.9555 3.57778V2.24444C16.9555 1.62222 16.4222 1.08889 15.8 1H2.19999C1.57777 1 1.04443 1.53333 1.04443 2.24444V3.57778C1.04443 3.84444 1.13332 4.2 1.39999 4.37778L6.9111 10.4222L6.82221 17Z" stroke="#263740" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Фильтры
      </div>
      <div class="catalog-filter">
        <div class="filter-default">
          <div class="filter-mobile__block">
            Фильтры
            <div class="filter-close">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M1 1L17 17" stroke="#263740" stroke-linecap="square"/>
                <path d="M17 1L1 17" stroke="#263740" stroke-linecap="square"/>
              </svg>
            </div>
          </div>
          <div class="filter-item" data-attr="price">
            Цена
            <span></span>
          </div>
          <div class="filter-item" data-attr="size">
            Размер
            <span></span>
          </div>
          <div class="filter-item" data-attr="color">
            Цвет
            <span></span>
          </div>
          <div class="filter-item" data-attr="collection">
            Коллекция
            <span></span>
          </div>
          <div class="filter-send btn btn-mobile">Применить</div>
          <div class="filter-reset btn">Очистить</div>
        </div>
        <div class="filter-container" data-id="price">
          <div class="filter-head">
            Цена
            <div class="filter-close">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
                <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
          <div class="filter-price">
            <div class="filter-price__input">
              <input type="text" class="filter-price__input_start" placeholder="0">
              <div class="filter-price__delimiter">-</div>
              <input type="text" class="filter-price__input_end" placeholder="12000">
            </div>
            <div id="slider"></div>
          </div>
          <div class="btn_final">
            <a href="#" class="btn">Готово</a>
          </div>
        </div>
        <div class="filter-container" data-id="size">
          <div class="filter-head">
            Размер
            <div class="filter-close">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
                <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
          <div class="filter-size">
            <div class="filter-size__tr filter-size__tr-head">
              <div class="filter-size__td">
              </div>
              <div class="filter-size__td">RUs</div>
              <div class="filter-size__td">INT</div>
              <div class="filter-size__td">обхват груди, см</div>
              <div class="filter-size__td">обхват талии, см</div>
              <div class="filter-size__td">обхват бедер, см</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">40</div>
              <div class="filter-size__td">xxs</div>
              <div class="filter-size__td">80</div>
              <div class="filter-size__td">62</div>
              <div class="filter-size__td">86</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">42</div>
              <div class="filter-size__td">xs</div>
              <div class="filter-size__td">84</div>
              <div class="filter-size__td">66</div>
              <div class="filter-size__td">90</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">44</div>
              <div class="filter-size__td">s</div>
              <div class="filter-size__td">88</div>
              <div class="filter-size__td">70</div>
              <div class="filter-size__td">94</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">46</div>
              <div class="filter-size__td">m</div>
              <div class="filter-size__td">92</div>
              <div class="filter-size__td">74</div>
              <div class="filter-size__td">98</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">48</div>
              <div class="filter-size__td">l</div>
              <div class="filter-size__td">96</div>
              <div class="filter-size__td">78</div>
              <div class="filter-size__td">102</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">50</div>
              <div class="filter-size__td">xl</div>
              <div class="filter-size__td">100</div>
              <div class="filter-size__td">82</div>
              <div class="filter-size__td">106</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">52</div>
              <div class="filter-size__td">xxl</div>
              <div class="filter-size__td">104</div>
              <div class="filter-size__td">86</div>
              <div class="filter-size__td">110</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">54</div>
              <div class="filter-size__td">3xl</div>
              <div class="filter-size__td">108</div>
              <div class="filter-size__td">90</div>
              <div class="filter-size__td">114</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">56</div>
              <div class="filter-size__td">4xl</div>
              <div class="filter-size__td">112</div>
              <div class="filter-size__td">94</div>
              <div class="filter-size__td">118</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">58</div>
              <div class="filter-size__td">5xl</div>
              <div class="filter-size__td">116</div>
              <div class="filter-size__td">98</div>
              <div class="filter-size__td">122</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">
                <div class="filter-size__input">
                  <input type="checkbox">
                  <span class="filter-size__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                      <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="filter-size__td">60</div>
              <div class="filter-size__td">6xl</div>
              <div class="filter-size__td">120</div>
              <div class="filter-size__td">102</div>
              <div class="filter-size__td">126</div>
            </div>
          </div>
          <div class="btn_final">
            <a href="#" class="btn">Готово</a>
          </div>
        </div>
        <div class="filter-container" data-id="color">
          <div class="filter-head">
            Цена
            <div class="filter-close">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
                <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
          <div class="filter-color">
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                <span style="background: #E6B886"></span>
                Бежевый
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                <span style="background: #353535"></span>
                Черный
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                <span style="background: #347118"></span>
                Зеленый
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                <span style="background: #FF8500"></span>
                Оранжевый
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                <span style="background: #F7F7F5"></span>
                Белый
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                <span style="background: #FF0000"></span>
                Красный
              </div>
            </div>
          </div>
          <div class="btn_final">
            <a href="#" class="btn">Готово</a>
          </div>
        </div>
        <div class="filter-container" data-id="collection">
          <div class="filter-head">
            Коллекция
            <div class="filter-close">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
                <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
              </svg>
            </div>
          </div>
          <div class="filter-color">
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                Все коллекции
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                Belucci
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                Jane Bond
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                Mirabella
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                Prima Vera
              </div>
            </div>
            <div class="filter-color__item">
              <input type="checkbox">
              <div class="filter-color__element">
                Rozalia
              </div>
            </div>
          </div>
          <div class="btn_final">
            <a href="#" class="btn">Готово</a>
          </div>
        </div>
      </div>
      <div class="blackout"></div>
      <div class="catalog-items">
        <?php if(count($arResult["ITEMS"])>0):?>
          <?php foreach($arResult["ITEMS"] AS $key=>$val):?>
            <?php
              //Обнуляем подобные 1
              $tmpArPodob_1=[];
              $ex_name=explode($arParams["GROUP_PODOB_1_RAZD"],$val["arFields"]["NAME"]);
              $tmpArPodob_1=$arResult["ITEMS_PODOB_1"][$ex_name[0]];
              
              //Грузим карточку
              $APPLICATION->IncludeComponent(
                "swf:catalog.card",
                "card_1",
                [
                  "BASKET"=>$arResult["BASKET"],
                  "arParamsDef"=>$arParams,
                  "tmpArPodob_1"=>$tmpArPodob_1,
                  "val"=>$val,
                  "HIDE_PODOB_CLASS"=>"",
                ],
              );
              
              //Грузим карточки подобных
              foreach ($tmpArPodob_1 AS $key_p1=>$val_p1) {
                $APPLICATION->IncludeComponent(
                  "swf:catalog.card",
                  "card_1",
                  [
                    "BASKET"=>$arResult["BASKET"],
                    "arParamsDef"=>$arParams,
                    "tmpArPodob_1"=>$tmpArPodob_1,
                    "val"=>$val_p1,
                    "HIDE_PODOB_CLASS"=>"cast_hide",
                    "val_general"=>$val
                  ],
                );
              }
            ?>
          <?php endforeach;?>
        <?php else:?>
          <div class="cast_no_fined_search">
            <p>По вашему запросу ничего не найдено</p>
          </div>
        <?php endif;?>
      </div>
    </div>
  </div>
</main>