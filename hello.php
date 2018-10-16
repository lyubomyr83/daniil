<form method="post">
    Логин<input type="text" name="login">
    Пароль<input type="password" name="pass">
    <input type="submit" value="Войти">
</form>


<?php

$good_login = "Даниил";
$good_pass = 12345;

if($_POST['login'] AND $_POST['pass'])
{
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    if($login == $good_login AND $pass == $good_pass)
    {
    echo $good_login.", добро пожаловать на сайт!";
    echo "ok";
    }
    else
    {
        echo "Мы вас не знаем!!!";
    }
}





// ПЕРЕМЕННЫЕ, УСЛОВИЯ, ФОРМЫ
//+ - / * == != < > !< !> %
