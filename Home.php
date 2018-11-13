<?php


class Home
{
    public $wall_material;
    public $wall_color;
    public $windows;
    public $doors;
    public $roof_material;
    public $roof_color;

    public  function getInfo()
    {
        echo "Цвет стен: ".$this->wall_color."<br>";
        echo "Материал стен: ".$this->wall_material."<br>";
        echo "Количество окон: ".$this->windows."<br>";
        echo "Количество дверей: ".$this->doors."<br>";
        echo "Цвет крыши: ".$this->roof_color."<br>";
        echo "Материал крыши: ".$this->roof_material."<br><br>";
    }
}
$myHome = new Home();
$myHome->doors = 2;
$myHome->roof_color ="Серый";
$myHome->roof_material="Метало-черепица";
$myHome->windows=2;
$myHome->wall_color="Белый";
$myHome->wall_material="Гипрок";

$friendHome = new Home();
$friendHome->doors=1;
$friendHome->roof_color ="Коричневый";
$friendHome->roof_material="Метало-черепица";
$friendHome->windows=2;
$friendHome->wall_color="Голубой";
$friendHome->wall_material="Бетон";

$friendHome->getInfo();
$myHome->getInfo();




