<?php
require_once "header.php";
require_once "lib/functions.php";
echo 'Админка<br><br>';
require_once "menu.php";
if($_GET['page']=="login")
{
    require_once "form.php";
}

if($_GET['logout'])
{
    logout();
}

require_once "footer.php";