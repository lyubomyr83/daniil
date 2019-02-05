<h2>Меню</h2>

<ul>


    <?php
    // получаем массив с меню
    $menus = $menu->receiveMenu();

    foreach ($menus as $item)
    {
        ?>

        <li><a href="?page=<?=$item['id']?>"><?=$item['menu_name']?></a> </li>

        <?php
    }

    ?>

</ul>