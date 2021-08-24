<?php

#Taking Arguments from user and Calculating windchill.
function calcwindChill($t,$v)
{
    if($t < 50 && ($v < 120 || $v > 3))
    {
        $windChill = 35.74+0.6215*$t+(0.4275*$t-35.75)*pow($v,0.16);
        echo "windchill is :".$windChill;
    }
    else
    {
        echo "Enter Valid inputs";
    }
}

#taking temperature and windspeed as inputs and calling windChill method.
echo "calculating windchill";
echo "\n";
$temperature = readline("Enter the value of temperatue: ");
$windChill = readline("Enter the value of wind speed: ");
calcwindChill($temperature,$windChill);
?>