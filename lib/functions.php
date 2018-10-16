<?php

function privet($name,$age)
{


    switch ($name)
    {
        case "Иван":echo "Привет ".$name."(Ivan)";
        break;
        case "Петя":echo "Привет ".$name."(Petr)";
            break;
        case "":echo "Вы не ввели имя";
            break;
    }

    switch ($age)
    {

        case "":echo "Вы не ввели возраст";
            break;
        default:echo ". Ваш возрас ".$age." лет.";
    }

}

function pifagor ($tr,$td)
{
    echo "<table>";
        for ($i=1;$i<=20;$i++)
        {
            echo '<tr>';
            if($i==1)
            {
                for ($j=1;$j<=20;$j++)
                {
                    echo '<td>';
                    echo $j;
                    echo '</td>';
                }
            }
            else
            {
                for ($j=1;$j<=20;$j++)
                {
                    echo '<td>';
                    echo $j*$i;
                    echo '</td>';
                }
            }

            echo '</tr>';
        }

    echo "</table>";
}


