<?php
session_start();

if($_SESSION['loged'])
{
    echo "<a href=\"?logout=yes\">Выход</a>&nbsp;";
    echo "<a href=\"arrays.php\">Массивы</a>";
}
else
{
    echo "<a href=\"index.php?page=login\">Авторизация</a>";
}

?>

