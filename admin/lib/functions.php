<?php
session_start();
function autorisation($l,$p,$u)
{
    foreach ($u as $v)
    {
        if($l == $v['login'] && $p == $v['pass'])
        {
            $_SESSION['loged']=$v['name'];
        }
    }

    if(!empty($_SESSION['loged']))
    {
        echo "Добро пожаловать, ".$_SESSION['loged'];
        header("refresh: 1; url=index.php");
    }
    else
    {
        echo "Ошибка авторизации!";
        header("refresh: 1; url=index.php");
    }
}

function logout()
{
    unset($_SESSION['loged']);
    echo "<br>Выход выполнен успешно";
    header("refresh: 1; url=index.php");
}
