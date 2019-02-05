<?php
// настройки
require_once "config/ini.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="stylesheet" href="style/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/style.css">

    <title></title>
</head>
<body>

<div class="row">
    <div class="col-md-2">Логотип</div>
    <div class="col-md-9">Название сайта</div>
</div>

<div class="row">
    <div class="col-md-2 menu">
        <?php
        require_once "views/VMenu.php";
        ?>
    </div>
    <div class="col-md-9">



