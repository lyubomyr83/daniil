<?php
if($_SESSION['loged'])
{
    echo "<a href=\"?logout=yes\">Выход</a>&nbsp;";
    echo "<a href=\"arrays.php\">Авто</a>";
}
else
{
    echo "<a href=\"index.php?page=login\">Авторизация</a>";
}

?>

