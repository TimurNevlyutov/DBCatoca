<?php
 /**
 * Подключение к базе данных
 * Site: http://bezramok-tlt.ru
 * Регистрация пользователя письмом
 */

 //Ключ защиты
 if(!defined('SEC_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('./../404.html'));
 }

 //Соединение с БД MySQL
 $db_connect = pg_connect("host=localhost port=5432 dbname=db user=postgres password=''") or die(ERROR_CONNECT);

 define('CONNECT', $db_connect);

 $stat = pg_connection_status($db_connect);
if ($stat === PGSQL_CONNECTION_OK) {
  echo 'Статус соединения: доступно';
} else {
  echo 'Статус соединения: разорвано';
}

 //Устанавливаем кодировку UTF8
 //pg_query ("SET NAMES utf8");
 //pg_query ("set character_set_client='utf8'");
 //pg_query ("set character_set_results='utf8'");
 //pg_query ("set collation_connection='utf8_general_ci'");
