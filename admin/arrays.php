<?php
require_once "header.php";

/*$fruits[55] = "бананы";
$fruits[23] = "апельсины";
$fruits["яблоки"] = array("Гренны"=>5,"Глостер"=>8);

echo $fruits["яблоки"]["Глостер"];*/

$auto["Audi TT"]=array("скорость"=>200,"цвет"=>"серый","год выпуска"=>2005,'фото'=>'tt.jpg');
$auto["BMW M4"]=array("скорость"=>210,"цвет"=>"синий","год выпуска"=>2013,'фото'=>'bmw_m4.jpg');
$auto["ВАЗ 2101"]=array("скорость"=>150,"цвет"=>"белый","год выпуска"=>1970,'фото'=>'vaz_2101.jpg');
$auto["ВАЗ 2102"]=array("скорость"=>140,"цвет"=>"горничный","год выпуска"=>1973,'фото'=>'vaz_2102.jpg');


foreach ($auto as $k=>$v)
{
    echo "<a href='?model=$k'>$k</a>&nbsp;&nbsp;";
}

echo "<br><br>";




    echo "По запросу \"{$_GET['model']}\" найдено:<br>";
    foreach ($auto[$_GET['model']] as $k1=>$v1)
    {
        if ($k1 != 'фото')
        {
            echo $k1." - ";
            echo $v1."<br>";
        }



        if($k1 == "фото")
        {
            echo "<img class='car' src='../img/{$v1}' width='500px'>";
        }

    }

/*    define("NAME","Даниил");
    echo NAME;*/

require_once "footer.php";

