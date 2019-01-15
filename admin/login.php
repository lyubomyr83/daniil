<?php
session_start();
require_once "header.php";

if($_POST)
{
    $autorisation = new app\classes\Login($_POST);
}