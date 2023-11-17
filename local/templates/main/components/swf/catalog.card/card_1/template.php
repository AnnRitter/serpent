<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
  use Bitrix\Main\Localization\Loc;

  $tmpArPodob_1=$arParams["tmpArPodob_1"];
  $val=$arParams["val"];
  $val_general=$arParams["val_general"];
  if (!is_array($val_general)) {
    $val_general=[];
  }
  
  //Скрываем карточки подобных
  if ($arParams["HIDE_PODOB_CLASS"]!="") {
    $class_gen="product-slide ".$arParams["HIDE_PODOB_CLASS"];
  } else {
    $class_gen="product-slide";
  }
?>
<div class="cast_card_<?php echo $val["arFields"]["ID"];?> <?php echo $class_gen;?>">
  <?php echo $val["arProps"]["CML2_ARTICLE"]["VALUE"];?>
  <div class="product-slide__pic">
    <div class="product-favorite">
      <input type="checkbox">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
         viewBox="0 0 20 18" fill="none">
        <path fill="transparent"
          d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
          stroke="#263740" stroke-miterlimit="10"/>
      </svg>
    </div>
    <!--<div class="product-slide__tags">
      <div class="product-slide__tag product-slide__new">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
           xmlns="http://www.w3.org/2000/svg">
          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
            stroke-width="2"/>
        </svg>
        <span>new</span>
      </div>
      <div class="product-slide__tag product-slide__hit">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
           xmlns="http://www.w3.org/2000/svg">
          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
            stroke-width="2"/>
        </svg>
        <span>Hit</span>
      </div>
      <div class="product-slide__tag product-slide__sale">
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
           xmlns="http://www.w3.org/2000/svg">
          <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
            stroke-width="2"/>
        </svg>
        <span>-23%</span>
      </div>
    </div>-->
    <div class="product-slide__swiper swiper">
      <div class="swiper-wrapper">
        <?php if(count($val["arPhotos"])>0):?>
          <?php foreach($val["arPhotos"] AS $key_ph=>$val_ph):?>
            <div class="swiper-slide">
              <img src="<?php echo $val_ph;?>" alt="">
            </div>
          <?php endforeach;?>
        <?php else:?>
          <div class="swiper-slide">
            <img src="<?php echo SITE_TEMPLATE_PATH."/img/no-photo.jpg";?>" alt="">
          </div>
        <?php endif;?>
      </div>
      <div class="swiper-arrow swiper-arrow__left">
        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
           viewBox="0 0 9 14" fill="none">
          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
            stroke="#263740" stroke-width="2"></path>
        </svg>
      </div>
      <div class="swiper-arrow swiper-arrow__right">
        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
           viewBox="0 0 9 14" fill="none">
          <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
            stroke="#263740" stroke-width="2"></path>
        </svg>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="product-slide__event">
    <div class="product-slide__color">
      <div class="product-slide__color-item">
        <?php
          if (count($val_general)>0) {
            $tmp_bg=$arParams["arParamsDef"]["SETT_COLOR_1"][$val_general["arProps"][$arParams["arParamsDef"]["GROUP_PODOB_1_PROP"]]["VALUE"]];
            $tmp_checked="";
            $tmp_code_card=$val_general["arFields"]["ID"];
          } else {
            $tmp_bg=$arParams["arParamsDef"]["SETT_COLOR_1"][$val["arProps"][$arParams["arParamsDef"]["GROUP_PODOB_1_PROP"]]["VALUE"]];
            $tmp_checked="checked";
            $tmp_code_card=$val["arFields"]["ID"];
          }
        ?>
        <input code-card="<?php echo $tmp_code_card;?>" class="cast_card_prod_podob_1_action" type="radio" name="color-9" <?php echo $tmp_checked;?>>
        <span class="product-slide__color-circle cast_product-slide__color-circle <?php echo $tmp_checked;?>">
          <span style="background: <?php echo $tmp_bg;?>"></span>
        </span>
      </div>
        <?php //Грузим ссылки на подобные 1?>
        <?php if(count($tmpArPodob_1)>0):?>
          <?php foreach($tmpArPodob_1 AS $key_p1=>$val_p1):?>
            <?php
              $tmp_checked="";
              if (count($val_general)>0) {
                if ($val_p1["arFields"]["ID"]==$val["arFields"]["ID"]) {
                  $tmp_checked="checked";
                }
              }
              $tmp_code_card=$val_p1["arFields"]["ID"];
            ?>
            <div class="product-slide__color-item" <?php echo $tmp_checked;?>>
              <input code-card="<?php echo $tmp_code_card;?>" class="cast_card_prod_podob_1_action" type="radio" name="color-9">
              <span class="product-slide__color-circle cast_product-slide__color-circle <?php echo $tmp_checked;?>">
                <span style="background: <?php echo $arParams["arParamsDef"]["SETT_COLOR_1"][$val_p1["arProps"][$arParams["arParamsDef"]["GROUP_PODOB_1_PROP"]]["VALUE"]];?>"></span>
              </span>
            </div>
          <?php endforeach;?>
        <?php endif;?>
    </div>
    <div class="product-slide__size">
      <div class="product-slide__size-default">
        <div class="product-slide__size-default-text">
          <?php echo Loc::getMessage("SHOP_CATALOG_SIZE");?>
          <span><?php echo $val["OFFERS"][0]["arProps"]["RAZMER"]["VALUE"];?></span>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
          viewBox="0 0 13 7" fill="none">
          <path d="M11.9899 0.988847L7.05135 5.94975L2.11147 0.990131"
          stroke="#263740"/>
        </svg>
      </div>
      <div class="product-slide__size-items">
        <?php
          $basket_addet=0;
        ?>
        <?php foreach($val["OFFERS"] AS $key_off=>$val_off):?>
          <?php
            if ($key_off==0) {
              $tmp_active="active";
              
              //Проверяем добавлено ли отображаемое предложение в корзину.
              foreach ($arParams["BASKET"] AS $key_basket=>$val_basket) {
                if ($val_off["arFields"]["ID"]==$key_basket) {
                  $basket_addet=1;
                }
              }
            } else {
              $tmp_active="";
            }
          ?>
          <div prod-id="<?php echo $val_off["arFields"]["ID"];?>" class="product-slide__size-item <?php echo $tmp_active;?>"><?php echo $val_off["arProps"]["RAZMER"]["VALUE"];?></div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
  <div class="product-slide__info">
    <div class="product-slide__content">
      <a href="<?php echo $val["arFields"]["DETAIL_PAGE_URL"];?>" class="product-slide__title"><?php echo $val["arFields"]["NAME"];?></a>
      <div class="product-slide__price">
        <span><?php echo swf_util::get_num_form_2($val["OFFERS"][0]["arPrice"][$arParams["arParamsDef"]["SETT_SHOP_1"]["BASE_PRICE_CODE"]]["PRICE"]);?></span>&nbsp;<?php echo Loc::getMessage("CURR_RUB");?>
      </div>
    </div>
    <?php
      if ($basket_addet==1) {
        $basket_class_but="product-basket__added";
      } else {
        $basket_class_but="add_to_cart_section_action";
      }
    ?>
    <div class="product-basket <?php echo $basket_class_but;?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
        viewBox="0 0 18 20" fill="none">
        <path d="M17.0011 5.63635H1.0011V18.7273H17.0011V5.63635Z" stroke="white"
        stroke-width="1.6" stroke-miterlimit="10"/>
        <path d="M6.09216 10.2749V4.18181C6.09216 3.41027 6.39865 2.67032 6.94421 2.12476C7.48977 1.5792 8.22971 1.27271 9.00125 1.27271C9.77279 1.27271 10.5127 1.5792 11.0583 2.12476C11.6038 2.67032 11.9103 3.41027 11.9103 4.18181V10.2749"
        stroke="white" stroke-miterlimit="10"/>
      </svg>
    </div>
  </div>
</div>