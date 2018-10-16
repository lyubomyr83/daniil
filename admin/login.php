<?php
require_once "lib/functions.php";
require_once "users.php";

if($_POST)
{
    autorisation($_POST['login'],$_POST['pass'],$users);
}