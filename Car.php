<?php

class Car
{
    public $car_material;
    public $car_color;
    public $windows;
    public $doors;
    public $car_speed;
    public $car_condition;
    public $car_cost;
    public $car_year;

    public function getInfo()
    {
        echo "Цвет машины: ".$this->car_color."<br>";
        echo "Материал машины: ".$this->car_material."<br>";
        echo "Окна: ".$this->windows."<br>";
        echo "Двери: ".$this->doors."<br>";
        echo "Скорость машины: ".$this->car_speed."<br>";
        echo "Состояние машины: ".$this->car_condition."<br>";
        echo "Скорость машины: ".$this->car_cost."<br>";
        echo "Год выпуска: ".$this->car_year."<br>";
    }
}
class superHome extends Car
{
    public function __construct($cc,$cm,$w,$d,$cs,$c_con,$cco,$cy)
    {
        $this->car_color = $cc;
        $this->car_material = $cm;
        $this->window = $w;
        $this->doors = $d;
        $this->car_speed = $cs;
        $this->car_condition = $c_con;
        $this->car_cost = $cco;
        $this->car_year = $cy;

        $this->getInfo();
    }


}

$myCar = new superHome("Черный","Железо",6,2,230,"Новая",1500000,2004);
$friendCar = new superHome("Голубой","Бетон",6,4,200,"Разбитая",1200000,1999);