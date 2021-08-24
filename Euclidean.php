<?php

#Calculating euclidean distance.
function euclideanDist($x,$y)
{
    $dist = sqrt(($x * $x)+($y * $y));
    echo "Euclidean Distance of (".$x.",".$y.") is ".$dist;
}

#taking x,y values from user and calling euclideanDist.
echo "Calculating Euclidean Distance";
echo "\n";
$x=readline("enter the value of x in cartesian point: ");
$y=readline("enter the value of y in cartesian point: ");
euclideanDist($x,$y);
?>