<?php
require_once "lib/functions.php";
?>
    <h1>Главная страница</h1>
<form method="post">
    Имя <input type="text" name="name">
    Возраст <input type="text" name="vozrast">
    <input type="submit" value="ОК">
</form>

<?php

//echo rand(1,10);




privet($_POST['name'],$_POST['vozrast']);
pifagor();
