<?php
require_once "header.php";

/*$fruits[55] = "бананы";
$fruits[23] = "апельсины";
$fruits["яблоки"] = array("Гренны"=>5,"Глостер"=>8);

echo $fruits["яблоки"]["Глостер"];*/

$auto["ВАЗ 1111 Ока"]=array("скорость"=>160,"цвет"=>"бело-черный","год выпуска"=> 1990 - 2006,"стоимость"=>220000,"состояние"=>"средне",'фото'=>'vaz_1111.jpg');
$auto["ВАЗ 2101"]=array("скорость"=>150,"цвет"=>"белый","год выпуска"=>1970 - 1988,"стоимость"=>250000,"состояние"=>"новая",'фото'=>'vaz_2101.jpg');
$auto["ВАЗ 2102"]=array("скорость"=>140,"цвет"=>"горничный","год выпуска"=>1971 - 1986,"стоимость"=>350000,"состояние"=>"старавата",'фото'=>'vaz_2102.jpg');
$auto["ВАЗ 2103"]=array("скорость"=>156,"цвет"=>"черный","год выпуска"=>1972 - 1983,"стоимость"=>300000,"состояние"=>"средне",'фото'=>'vaz_2103.jpg');
$auto["ВАЗ 2104"]=array("скорость"=>178,"цвет"=>"синий","год выпуска"=>1984 - 2012,"стоимость"=>180000,"состояние"=>"новая",'фото'=>'vaz_2104.jpg');
$auto["ВАЗ 2105"]=array("скорость"=>185,"цвет"=>"розовый","год выпуска"=>1980 - 2010,"стоимость"=>200000,"состояние"=>"разбита",'фото'=>'vaz_2105.jpg');
$auto["ВАЗ 2106"]=array("скорость"=>200,"цвет"=>"красный","год выпуска"=>1976 - 2006,"стоимость"=>400000,"состояние"=>"новая",'фото'=>'vaz_2106.jpg');
$auto["ВАЗ 2107"]=array("скорость"=>205,"цвет"=>"зеленый","год выпуска"=>1982 - 2012,"стоимость"=>350000,"состояние"=>"разбита",'фото'=>'vaz_2107.jpg');
$auto["ВАЗ 2108"]=array("скорость"=>100,"цвет"=>"фиолетовый","год выпуска"=>1980 - 2005,"стоимость"=>250000,"состояние"=>"со вмятинами",'фото'=>'vaz_2108.jpg');
$auto["ВАЗ 2109"]=array("скорость"=>202,"цвет"=>"пурпурный","год выпуска"=>1987 - 2006,"стоимость"=>110000,"состояние"=>"новая со ржавчиной",'фото'=>'vaz_2109.jpg');
$auto["ВАЗ 2110"]=array("скорость"=>190,"цвет"=>"бирюзовый","год выпуска"=> 1996 - 2018,"стоимость"=>310000,"состояние"=>"с завода",'фото'=>'vaz_2110.jpg');
$auto["ВАЗ 2111"]=array("скорость"=>196,"цвет"=>"желтый","год выпуска"=> 1997 - 2018,"стоимость"=>450000,"состояние"=>"ржавая",'фото'=>'vaz_2111.jpg');
$auto["ВАЗ 2112"]=array("скорость"=>204,"цвет"=>"бордовый","год выпуска"=>1999 - 2009,"стоимость"=>256000,"состояние"=>"новая",'фото'=>'vaz_2112.jpg');
$auto["ВАЗ 2113"]=array("скорость"=>239,"цвет"=>"голубой","год выпуска"=>2004 - 2013,"стоимость"=>345000,"состояние"=>"старовата",'фото'=>'vaz_2113.jpg');
$auto["ВАЗ 2114"]=array("скорость"=>199,"цвет"=>"оранжевый","год выпуска"=>2001 - 2013,"стоимость"=>500000,"состояние"=>"новая",'фото'=>'vaz_2114.jpg');
$auto["ВАЗ 2115"]=array("скорость"=>198,"цвет"=>"черный","год выпуска"=>1997 - 2012,"стоимость"=>450000,"состояние"=>"ржавая",'фото'=>'vaz_2115.jpg');
$auto["ВАЗ 2120 Надежда"]=array("скорость"=>201,"цвет"=>"желтый","год выпуска"=>1999 - 2006,"стоимость"=>550000,"состояние"=>"крашенная",'фото'=>'vaz_2120.jpg');
$auto["ВАЗ 2121 (4x4)"]=array("скорость"=>231,"цвет"=>"белый","год выпуска"=>1977 - 2018,"стоимость"=>777777,"состояние"=>"новая",'фото'=>'vaz_2121.jpg');
$auto["ВАЗ 2123"]=array("скорость"=>215,"цвет"=>"красно-желтый","год выпуска"=>2000 - 2002,"стоимость"=>567897,"состояние"=>"старовата",'фото'=>'vaz_2123.jpg');
$auto["ВАЗ 2129"]=array("скорость"=>254,"цвет"=>"темно-зеленный","год выпуска"=>1992 - 1994,"стоимость"=>567000,"состояние"=>"разбитая",'фото'=>'vaz_2129.jpg');
$auto["ВАЗ 2131 (4x4)"]=array("скорость"=>236,"цвет"=>"коричневый","год выпуска"=>1993 - 2018,"стоимость"=>689000,"состояние"=>"помята",'фото'=>'vaz_2131.jpg');
$auto["ВАЗ 2328"]=array("скорость"=>200,"цвет"=>"розовый","год выпуска"=>1995 - 1997,"стоимость"=>454646,"состояние"=>"старовата",'фото'=>'vaz_2128.jpg');
$auto["ВАЗ Kalina I"]=array("скорость"=>234,"цвет"=>"хромированный","год выпуска"=>2004 - 2018,"стоимость"=>567899,"состояние"=>"новая",'фото'=>'vaz_kalina.jpg');
$auto["ВАЗ Priora"]=array("скорость"=>245,"цвет"=>"кораллавый","год выпуска"=>2007 - 2018,"стоимость"=>700000,"состояние"=>"новая",'фото'=>'vaz_priora.jpg');
$auto["ВАЗ Granta"]=array("скорость"=>233,"цвет"=>"фиолетовый","год выпуска"=>2011 - 2018,"стоимость"=>680000,"состояние"=>"из авто салона",'фото'=>'vaz_granta.jpg');
$auto["ВАЗ Largus"]=array("скорость"=>245,"цвет"=>"пурпурный","год выпуска"=>2012 - 2018,"стоимость"=>600000,"состояние"=>"крашенная",'фото'=>'vaz_largus.jpg');



foreach ($auto as $k=>$v)
{
    echo "<a href='?model=$k'>$k</a>&nbsp;&nbsp;";
}

echo "<br><br>";


if($_GET)
{
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

}

/*    define("NAME","Даниил");
    echo NAME;*/

require_once "footer.php";

