<?php

class Login extends Db
{
    public function __construct($post)
    {
        $this->autorization($post);
    }

    public function autorization($user)
    {
        $user_from_db = $this->searchUser($user['login']);

        if($user_from_db['login'] == $user['login'] && $user_from_db['password'] == $user['pass'])
        {
            $_SESSION['loged']=$user_from_db['name'];

        }
        else
        {
            echo "Ошибка авторизации!";
        }


        if(!empty($_SESSION['loged']))
        {
            echo "Добро пожаловать, ".$_SESSION['loged'];
            header("refresh: 1; url=index.php");
        }
        else
        {

            header("refresh: 1; url=index.php");

        }

    }

    public function searchUser($login)
    {
        $sql = "SELECT * FROM users WHERE login='{$login}'";
        $result = $this->query($sql);
        $l = mysqli_fetch_assoc($result);

        return $l;


    }

    public function logout()
    {
        unset($_SESSION['loged']);
        echo "<br>Выход выполнен успешно";
        header("refresh: 1; url=index.php");
    }
}