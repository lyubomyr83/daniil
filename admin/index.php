<?php
require_once "header.php";
require_once "lib/functions.php";
require_once "menu.php";

if(!$_SESSION['loged'])
{
    require_once "login_form.php";
}

if($_GET['logout'])
{
    $logout = new app\classes\Login();
    $logout->logout();
}

require_once "footer.php";