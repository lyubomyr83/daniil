<?php
session_start();
require_once "header.php";

if($_POST)
{
    $autorisation = new Login($_POST);
}