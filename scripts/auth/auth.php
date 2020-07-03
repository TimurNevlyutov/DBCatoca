<?php


//Если нажата кнопка то обрабатываем данные
 if(isset($_POST['do_login']))
 {
    if(empty($_POST['login']))
        $err[] = 'Не введен Логин';

    if(empty($_POST['password']))
        $err[] = 'Не введен Пароль';

    //Проверяем наличие ошибок и выводим пользователю
    if(count($err) > 0)
        echo showErrorMessage($err);
    else
    {
        /*Создаем запрос на выборку из базы
        данных для проверки подлиности пользователя*/
        $sql = 'SELECT *
                FROM users
                WHERE status = 1'
                ;
        $res = mysqlQuery($sql);
/**'. escape_str($_POST['login']) .'
        // AND status = 1' **/
        //Если логин совподает, проверяем пароль
        if(pg_num_rows($res) > 0)
        {
            //Получаем данные из таблицы
            $row = pg_fetch_assoc($res);

            if(md5(md5($_POST['password']).$row['salt']) == $row['password'])
            {
                $_SESSION['user'] = true;

                //Сбрасываем параметры
                header('Location:'. localhost .'less/reg/?mode=auth');
                exit;
            }
            else
                echo showErrorMessage('Неверный пароль!');
        }
        else
            echo showErrorMessage('Логин <b>'. $_POST['login'] .'</b> не найден!');
    }

 }

?>