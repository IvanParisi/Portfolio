<?php
if(file_exists("config_local.ini")):
    $config = $_SERVER["HTTP_HOST"] == "localhost" ? parse_ini_file("config_local.ini",true) : (null);
elseif(file_exists("../config_local.ini")):
    $config = $_SERVER["HTTP_HOST"] == "localhost" ? parse_ini_file("../config_local.ini",true) : (null);
elseif (file_exists("../../config_local.ini")):
    $config = $_SERVER["HTTP_HOST"] == "localhost" ? parse_ini_file("../../config_local.ini",true) : (null);
endif;
  error_reporting(E_ALL);
  ini_set('display_errors', $config["display_errors"]);
  date_default_timezone_set($config["timezone"]);
?>