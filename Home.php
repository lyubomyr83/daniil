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

class superHome extends Home
{
    public function __construct($wc,$wm,$w,$d,$rc,$rm)
    {
        $this->wall_color = $wc;
        $this->wall_material = $wm;
        $this->window = $w;
        $this->doors = $d;
        $this->roof_color = $rc;
        $this->roof_material = $rm;

        $this->getInfo();
    }


}

$myHome = new superHome("Белый","Гипрок",2,2,"Серый","Метало-черепица");
$friendHome = new superHome("Голубой","Бетон",2,1,"Коричневый","Метало-черепица");


