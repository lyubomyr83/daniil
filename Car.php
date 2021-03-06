<?php

require_once "header.php";


class Car
{
    protected $type = "Автомобиль";
    protected $brand;
    protected $car_material;
    protected $car_color;
    protected $windows;
    protected $doors;
    protected $car_speed;
    protected $car_condition;
    protected $car_cost;
    protected $car_year;
    protected static $col; // количество

    public function __construct($br,$cc,$cm,$w,$d,$cs,$c_con,$cco,$cy)
    {
        $this->brand = $br;
        $this->car_color = $cc;
        $this->car_material = $cm;
        $this->window = $w;
        $this->doors = $d;
        $this->car_speed = $cs;
        $this->car_condition = $c_con;
        $this->car_cost = $cco;
        $this->car_year = $cy;

        // считаем количество автомобилей
        static::$col ++;
    }

    public function getInfo($param)
    {
        echo "<div class=\"card\">";
        echo "<h3>".$this->type."</h3>";
        echo "Марка: ".$this->brand."<br>";
        echo "Цвет машины: ".$this->car_color."<br>";
        echo "Материал машины: ".$this->car_material."<br>";
        echo "Окна: ".$this->windows."<br>";
        echo "Двери: ".$this->doors."<br>";
        echo "Скорость машины: ".$this->car_speed."<br>";
        echo "Состояние машины: ".$this->car_condition."<br>";
        echo "Стоимость машины: ".$this->car_cost."<br>";
        echo "Год выпуска: ".$this->car_year."<br>";
        if($param)
        {
            foreach ($param as $k=>$v)
            {
                echo $k.": ".$v;
            }
        }
        echo "</div>";
    }

    public static function getCol()
    {
        echo static::$col;
        echo "<br>";
    }
}

class Bus extends Car
{
    protected $type = "Автобус";
    protected $bus_seats;
    protected static $col; // количество

    public function __construct($st,$br, $cc, $cm, $w, $d, $cs, $c_con, $cco, $cy)
    {
        parent::__construct($br, $cc, $cm, $w, $d, $cs, $c_con, $cco, $cy);
        $this->bus_seats = $st;

    }

    public function getInfo()
    {

        parent::getInfo(["Количество мест"=>$this->bus_seats]);
    }


}

class Truck extends Car
{
    protected $type = "Грузовик";
    protected $truck_cargo;
    protected static $col; // количество

    public function __construct($tc,$br, $cc, $cm, $w, $d, $cs, $c_con, $cco, $cy)
    {
        parent::__construct($br, $cc, $cm, $w, $d, $cs, $c_con, $cco, $cy);
        $this->truck_cargo = $tc;
    }

    public function getInfo()
    {
        parent::getInfo(["Грузоподъёмность"=>$this->truck_cargo]);
    }
}

$myCar = new Car("Ford","Черный","Железо",6,2,230,"Новая",1500000,2004);
$myCar->getInfo();
$friendCar = new Bus(18,"Mercedes","Синиий","Дерево",20,3,220,"Новый",120034000000,1956);
$friendCar->getInfo();
$friendCar2 = new Bus(60,"Mercedes","Желтый","Бетон",10,2,150,"Помят",1200678,1234);
$friendCar2->getInfo();
$friendCar3 = new Truck( 15,"Камаз","Голубой","МОРОЖЕНОЕ",18,2,180,"РАЗБИТ",1204566,1996);
$friendCar3->getInfo();

Car::getCol();
Bus::getCol();
Truck::getCol();

require_once "footer.php";