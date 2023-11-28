<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php
  use Bitrix\Main\Localization\Loc;
  use Bitrix\Main\Page\Asset;
  
  //Наше
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css");
  //От версталы
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.min.css");

  //Jquery
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.5.1.min.js");
  
  //От версталы
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/common.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/fancybox.umd.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/nouislider.js");
  // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/scripts.min.js"); - ЭТО дубль common.js
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/slimselect.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/swiper-bundle.min.js");
  //Наше
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/main.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/auth.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/question.js");

//Конструктор настроек
  $APPLICATION->IncludeComponent(
    "swf:designer",
    "settings",
    [
      "IB"=>$arSettings["IB"]["designer_settings"],
    ],
  );
?>
<?php
$headerClass = "";
$headersWhite = ["/" => "class='header-white'","article_" => "class='header-white'","kupalnik" => "class='header-white'"];

$lastPartUrl = basename($_SERVER['REQUEST_URI']);
if($lastPartUrl != "")
  $headerUrl = substr($lastPartUrl, 0, -1);
else
  $headerUrl = $_SERVER['REQUEST_URI'];

if(isset($headersWhite[$headerUrl]))
  $headerClass = $headersWhite[$headerUrl];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <?php $APPLICATION->ShowHead();?>
    <title><?php $APPLICATION->ShowTitle()?></title>
    <?//favicon start?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=SITE_TEMPLATE_PATH;?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH;?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH;?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH;?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=SITE_TEMPLATE_PATH;?>/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH;?>/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php //favicon end?>
  </head>
  <body>
  <header <?php echo $headerClass;?>>
    <div class="container">
      <div class="header-top">
        <a href="tel:<?php echo Loc::getMessage("TITLE_PHONE_TEL");?>" class="header-phone">
          <?php echo Loc::getMessage("TITLE_PHONE");?>
        </a>
        <div class="header-burger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        <a href="/" class="header-logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="136" height="54" viewBox="0 0 136 54" fill="none">
            <g clip-path="url(#clip0_577_2259)">
              <path d="M24.6684 0.439688C25.2021 0.0134279 25.9239 0.132078 26.5538 0.105711C30.178 0.15405 33.8088 0.0332028 37.4309 0.167233C37.0153 0.63524 36.6719 1.39548 35.9632 1.42624C34.5022 1.4592 33.0389 1.42624 31.5888 1.42624C31.1155 1.82656 30.7119 2.30329 30.3945 2.83685C28.6885 5.74377 27.5052 8.92534 25.7882 11.8257C25.2743 12.7045 24.3425 13.2077 23.4895 13.7087C24.4497 13.645 25.412 13.5988 26.3744 13.612C26.1098 14.0361 25.8932 14.5238 25.4755 14.8227C24.2528 14.9457 23.0105 14.8732 21.7812 14.8424C22.4002 14.0602 23.3123 13.5417 23.8176 12.6606C25.5673 9.71414 26.8294 6.5084 28.5201 3.51799C29.0625 2.51825 30.0512 1.89644 31.0485 1.42184C29.0166 1.47458 26.9825 1.39328 24.9527 1.4592C24.1872 1.4592 23.6579 2.07442 23.0389 2.42817C23.4802 1.68735 24.0295 1.01709 24.6684 0.439688Z" fill="white"/>
              <path d="M33.4874 5.98564C35.4428 2.36683 39.4323 -0.482961 43.6711 0.0685404C44.5591 0.154232 43.9008 1.14518 43.4239 1.35391C42.0985 2.03285 40.6724 1.0485 39.3207 0.965005C38.0434 1.35831 37.0416 2.33167 36.3504 3.45225C35.1497 5.39459 34.2398 7.49513 33.0827 9.46384C32.9362 9.70993 32.9865 10.1845 33.3693 9.90328C34.2179 8.74974 35.2918 7.78517 36.3723 6.85794C37.1641 6.25371 38.0149 5.57477 39.0407 5.49127C39.8194 5.47809 40.1344 6.4163 39.8806 7.0491C39.2113 9.1035 37.8093 10.8041 36.9563 12.7728C36.8185 13.1508 36.5517 13.6913 37.0132 13.9593C37.8771 14.0516 38.4524 13.2738 39.1435 12.8893C38.7936 13.6342 38.0499 14.0626 37.3938 14.513C36.8513 14.8382 36.1252 15.2711 35.528 14.8229C35.0075 14.4252 35.1037 13.6759 35.2853 13.1266C35.9633 11.1491 37.3522 9.51437 38.1965 7.60719C38.3474 7.26662 38.518 6.60746 38.0106 6.47562C37.1072 6.4976 36.4161 7.19411 35.7599 7.73683C33.658 9.68356 31.7179 11.8852 30.4821 14.4977C30.2 15.1568 29.3163 14.7613 28.7673 14.8294C30.2459 11.8412 31.9169 8.9387 33.4874 5.98564Z" fill="white"/>
              <path d="M45.2643 6.06224C46.1588 5.6228 47.2328 5.27564 48.2039 5.67114C48.7769 5.89086 48.8863 6.63132 48.6676 7.14327C48.3264 7.93866 47.6286 8.50555 46.9878 9.05265C45.3649 10.338 43.6063 11.4344 41.8675 12.5484C42.0687 13.2537 42.5608 13.959 43.3723 13.9481C44.6518 14.1326 45.6208 13.1768 46.6531 12.5946C46.021 13.502 45.0302 14.0667 44.0744 14.5721C43.1186 15.0774 41.8084 15.2906 40.9357 14.4952C39.9996 13.6163 40.2161 12.1617 40.6251 11.0785C41.5564 8.92362 43.1934 7.15358 45.2643 6.06224ZM44.8552 6.59177C42.9764 7.79365 42.0119 10.0678 41.8544 12.2408C43.3854 11.2762 44.934 10.3182 46.2288 9.04606C46.7866 8.4594 47.4034 7.63545 47.1146 6.78512C46.6816 5.94359 45.5202 6.20726 44.8552 6.59177Z" fill="white"/>
              <path d="M4.27078 17.4311C8.48338 15.0296 13.8421 15.6008 18.0809 17.6487C18.129 19.2878 18.0612 20.9445 18.1619 22.5726C17.5735 21.206 16.1737 19.1428 14.4611 18.0859C11.8976 16.3765 8.22966 15.9282 5.53062 17.6047C3.0853 19.1318 2.73972 23.0384 4.90507 24.9588C7.07043 26.8792 9.85477 27.7141 12.4182 28.8654C14.9773 29.9377 17.9191 31.3659 18.7852 34.2442C19.8045 37.6851 17.6916 41.4247 14.5092 42.8134C10.021 44.8634 4.68416 43.5868 0.61811 41.1369C0.559055 39.1352 0.596238 37.1336 0.5 35.1319C1.44051 37.138 3.04812 40.2514 5.54812 41.684C8.31496 43.3231 12.3023 43.8263 14.8876 41.5807C16.8692 39.8889 16.9829 36.5271 15.1194 34.721C11.7358 31.3879 6.57611 31.0187 2.99344 27.9778C-0.232721 25.2137 0.635608 19.446 4.27078 17.4311Z" fill="white"/>
              <path d="M122.924 24.4445C126.66 22.9591 128.672 18.8965 128.672 18.8965C128.672 18.8965 128.724 22.2736 128.724 23.9501L134.919 24.0424C134.919 24.0424 134.919 24.3851 134.919 24.4818C133.696 24.5345 131.885 24.5433 131.885 24.5433C131.885 24.5433 130.135 24.5214 128.731 24.5214C128.731 29.0344 128.72 33.5146 128.731 38.032C128.709 39.4075 129.028 41.1653 130.481 41.7014C132.333 42.3606 134.015 41.0312 135.271 39.8228C135.334 39.959 135.452 40.2293 135.511 40.3655C134.149 41.7168 132.699 43.1406 130.804 43.6811C129.317 44.0986 127.46 43.7624 126.587 42.3628C125.671 40.9082 125.66 39.1175 125.643 37.4564C125.656 33.1388 125.643 28.8191 125.656 24.4928C124.737 24.4987 123.826 24.4825 122.924 24.4445Z" fill="white"/>
              <path d="M41.4004 25.5908C42.973 24.8767 44.5456 24.1516 46.162 23.5518C46.2692 25.2348 46.2429 26.9223 46.1948 28.6054C47.7674 24.9206 52.1353 22.5279 55.9826 24.167C56.8706 24.769 55.9826 26.4806 54.3072 26.4103C52.5684 26.3928 52.3234 23.7297 48.8129 25.883C46.2976 28.1242 45.9695 31.5958 46.232 34.7576C46.5119 37.6689 45.2674 41.4173 48.0364 43.4476C45.8069 43.4314 43.5767 43.4314 41.3457 43.4476C43.6795 41.8524 43.0955 38.8334 43.1567 36.4165C43.0802 33.5315 43.3011 30.6356 43.0386 27.7572C42.9599 26.7663 42.494 26.0126 41.4004 25.5908Z" fill="white"/>
              <path d="M100.648 25.5981C102.216 24.8439 103.822 24.1736 105.46 23.5898C105.478 24.7917 105.478 26.0068 105.471 27.2043C108.343 25.007 111.994 22.9197 115.723 23.937C117.984 24.4402 119.487 26.6198 119.693 28.861C120.091 32.816 119.612 36.8083 119.951 40.7699C119.907 41.9432 120.931 42.6485 121.609 43.4483C119.421 43.4322 117.234 43.4322 115.047 43.4483C115.666 42.6529 116.578 41.9498 116.613 40.8512C116.904 37.5883 116.727 34.2925 116.738 31.0186C116.72 28.8214 116.027 26.1848 113.741 25.3762C110.758 24.1963 107.753 26.0727 105.473 27.8854C105.561 32.1832 105.34 36.4897 105.587 40.7743C105.62 41.9322 106.578 42.6683 107.289 43.4483C105.054 43.4322 102.822 43.4322 100.594 43.4483C102.932 41.8465 102.344 38.8341 102.405 36.3864C102.333 33.5301 102.543 30.6407 102.291 27.7777C102.268 27.2903 102.099 26.8212 101.806 26.4322C101.513 26.0432 101.109 25.7524 100.648 25.5981Z" fill="white"/>
              <path d="M25.7407 25.4886C29.1287 23.1332 34.284 22.8893 37.3701 25.8929C38.6694 27.1167 39.2074 28.8811 39.4283 30.6059C34.343 30.6235 29.2577 30.6059 24.1746 30.6059C23.969 33.2953 24.2599 36.2 25.9944 38.3819C28.1816 41.2382 32.3658 42.049 35.6182 40.6911C37.2411 40.1023 38.3281 38.6675 39.8155 37.8567C38.5218 40.1447 36.5457 41.967 34.1658 43.0663C29.9073 44.6747 24.8964 43.1081 22.6173 39.3311C19.9139 34.807 21.3137 28.4439 25.7407 25.4886ZM24.3408 30.0346C28.3325 30.0237 32.3176 30.05 36.305 30.0237C35.6488 26.9344 32.9869 24.0011 29.6142 24.4449C26.6505 24.6097 24.8789 27.3826 24.3408 30.0346Z" fill="white"/>
              <path d="M57.916 25.5651C59.4711 24.8774 61.0284 24.1743 62.6011 23.5195C62.6776 24.5698 62.7104 25.6245 62.7257 26.6747C65.7157 24.4995 69.7117 22.7351 73.3688 24.271C77.1242 25.8728 78.6312 30.3639 78.2594 34.1958C78.0166 38.0365 75.6347 41.8575 71.9165 43.1451C68.8893 44.325 65.4488 43.8218 62.6951 42.1651C62.8023 45.2566 62.5617 48.3569 62.846 51.4352C62.9007 52.5008 63.8215 53.182 64.3771 53.9883C62.2292 53.9883 60.0792 54.0059 57.9313 53.9883C58.8893 52.971 59.6811 51.7648 59.5783 50.297C59.6592 43.1714 59.6264 36.0393 59.5958 28.9137C59.7205 27.5295 59.3071 25.987 57.916 25.5651ZM62.7039 27.3822C62.7257 30.2123 62.7039 33.0489 62.7039 35.8833C62.1877 40.8951 68.7144 44.9314 72.8788 42.0355C75.4204 40.1415 75.6632 36.5754 75.3788 33.6641C75.0223 30.4935 73.8106 26.8351 70.6435 25.4992C67.8963 24.2666 64.913 25.708 62.7039 27.3822Z" fill="white"/>
              <path d="M84.6893 25.6906C88.0883 23.1353 93.4382 22.7991 96.625 25.884C97.9177 27.1122 98.4557 28.8766 98.6723 30.597C93.5935 30.6146 88.5082 30.597 83.4229 30.597C83.2173 33.2754 83.5039 36.1582 85.2165 38.3334C87.4037 41.2228 91.5988 42.0511 94.8578 40.6888C96.4785 40.0978 97.5677 38.6586 99.0594 37.8478C97.7724 40.1337 95.8063 41.9583 93.4361 43.0662C89.2082 44.679 84.615 43.1893 82.3315 39.4188C79.6872 34.9915 80.4877 28.747 84.6893 25.6906ZM83.5848 30.0345C87.5699 30.0345 91.5572 30.0499 95.5424 30.0235C94.8862 26.9343 92.2243 23.9966 88.8473 24.4448C85.9011 24.6096 84.1229 27.3825 83.5848 30.0345Z" fill="white"/>
            </g>
            <defs>
              <clipPath id="clip0_577_2259">
                <rect width="135" height="54" fill="white" transform="translate(0.5)"/>
              </clipPath>
            </defs>
          </svg>
        </a>
        <?php
          //Конструктор меню
          $APPLICATION->IncludeComponent(
          "swf:designer",
          "menu_top_2",
            [
              "IB"=>$arSettings["IB"]["designer_menu_top_2"],
              "DESIGNER_MENU"=>"Y",
            ],
          );
        ?>
      </div>
      <div class="header_bottom">
        <div class="header_bottom__container">
          <div class="header_bottom__mobile">
            <a href="" class="btn auth-event">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                <path d="M8.86976 9.3252C11.1687 9.3252 13.0324 7.46154 13.0324 5.1626C13.0324 2.86366 11.1687 1 8.86976 1C6.57081 1 4.70715 2.86366 4.70715 5.1626C4.70715 7.46154 6.57081 9.3252 8.86976 9.3252Z" stroke="white" stroke-miterlimit="10"/>
                <path d="M1.3252 17C1.3252 12.7593 4.75934 9.3252 8.99999 9.3252C13.2406 9.3252 16.6748 12.7593 16.6748 17" stroke="white" stroke-miterlimit="10"/>
              </svg>
              Войти в личный кабинет
            </a>
            <a href="tel:<?php echo Loc::getMessage("TITLE_PHONE_TEL");?>" class="phone-mobile">
              <?php echo Loc::getMessage("TITLE_PHONE");?>
              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                <path d="M9.40656 11.0212C9.74289 10.5167 11.1723 8.91911 12.1813 9.0032C12.5176 9.08728 12.7699 9.17136 13.0221 9.42361C13.863 10.2644 14.5356 11.1894 15.1242 12.1984C15.2924 13.2074 14.1152 13.7118 14.5356 14.7208C15.3765 16.907 17.0581 18.5887 19.2443 19.4295C20.2533 19.7658 20.8419 18.5887 21.7668 18.8409C22.7758 19.4295 23.7007 20.1022 24.5415 20.943C24.7938 21.1952 24.9619 21.4475 24.9619 21.7838C24.9619 22.8769 23.2803 24.3904 22.9439 24.5586C22.1872 25.1471 21.1782 25.1471 19.9169 24.5586C16.4695 23.1292 10.9201 17.6638 9.49064 14.0482C8.90206 12.7869 8.90206 11.7779 9.40656 11.0212Z" stroke="#263740" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        <?php
          //Конструктор меню
          $APPLICATION->IncludeComponent(
            "swf:designer",
            "menu_top_1",
            [
              "IB"=>$arSettings["IB"]["designer_menu_top_1"],
              "DESIGNER_MENU"=>"Y",
            ],
          );
        ?>
        </div>
      </div>
    </div>
  </header>