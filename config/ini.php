<?php
// автозагрузка классов
spl_autoload_register(function ($name)
{
// конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);

    require_once($name.'.php');
});

// создаем объекты
    $menu = new \app\classes\CMenu(); // для работы с меню