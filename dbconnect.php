<?php
// Соединение, выбор базы данных
$dbconn = pg_connect("host=localhost port=5432 dbname=cat_db user=postgres password=e2f5psql");
    $stat = pg_connection_status($dbconn);
if ($stat === PGSQL_CONNECTION_OK) {
  echo 'Статус соединения: доступно';
} else {
  echo 'Статус соединения: разорвано';
}
session_start();