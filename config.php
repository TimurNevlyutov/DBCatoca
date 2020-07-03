<?php
 
 if(!defined('SEC_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('./404.html'));
 }

 //Адрес базы данных
 define('DBSERVER','localhost');

 //Порт
 define('DBPORT',5432);

 //Логин БД
 define('DBUSER','admin');

 //Пароль БД
 define('DBPASSWORD','123');

 //БД
 define('DATABASE','db');

 //Префикс БД
 define('DBPREFIX','');

 //Errors
 define('ERROR_CONNECT','Немогу соеденится с БД');

 //Errors
 define('NO_DB_SELECT','Данная БД отсутствует на сервере');

 //Адрес хоста сайта
 define('HOST','http://'. $_SERVER['HTTP_HOST'] .'/');
 
 //Адрес почты от кого отправляем
define('MAIL_ADMIN','Регистрация DB CATOCA <timur.nevlyutov@catoca.com>');
 ?>