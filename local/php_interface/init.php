<?php
  use Bitrix\Main\Localization\Loc;
  //Грузим глобальные переменные
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/global_var.php");
  //Грузим утилиты
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/class_swf_util.php");
  //Грузим методы каталога
  include_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/class_swf_catalog.php");
  //Грузим общий языковой файл
  Loc::loadMessages(__FILE__);
?>