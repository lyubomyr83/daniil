<?php
namespace app\classes;

class CMenu extends MMenu
{
    public function receiveMenu()
    {
        // получаем данные с БД в сыром виде
        $raw_result = $this->getMenu();
        // в цикле формируем полный массив со всеми элементами меню
        while ($one_menu = mysqli_fetch_assoc($raw_result)) // преобразуем сырые данные к виду массива
        {
            $menu[] = $one_menu; // один элемент меню
        }

        // возвращаем массив с меню в вид
        return $menu;
    }
}