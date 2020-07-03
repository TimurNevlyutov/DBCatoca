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
 define('DBUSER','catadmin');

 //Пароль БД
 define('DBPASSWORD','e2f5catdb');

 //БД
 define('DATABASE','');

 //Префикс БД
 define('DBPREFIX','');

 //Errors
 define('ERROR_CONNECT','Немогу соеденится с БД');

 //Errors
 define('NO_DB_SELECT','Данная БД отсутствует на сервере');

 //Адрес хоста сайта
 define('HOST','http://'. $_SERVER['HTTP_HOST'] .'/');
 
 //Адрес почты от кого отправляем
// define('BEZ_MAIL_AUTOR','Регистрация на http://bezramok-tlt.ru <no-reply@bezramok-tlt.ru>');
 ?>