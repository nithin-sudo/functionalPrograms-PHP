<?php
#finding the distinct triplets which adds upto Zero.
function findTriplets($triplet, $n)
{
    $triplets = 0;
    echo "the distinct triplets are: ";
    for ($i=0; $i < $n - 2; $i++) 
    { 
        for ($j= $i+1; $j < $n-1; $j++) 
        { 
           for ($k= $j+1; $k < $n; $k++)
           { 
               if($triplet[$i] + $triplet[$j] + $triplet[$k] == 0)
               {
                   $triplets++;
                   echo "\n";
                   echo $triplet[$i];
                   echo $triplet[$j];
                   echo $triplet[$k];
               }
           }
        }
    }
    echo "\nnumber of distinct triplets are: ".$triplets;
}
#creating a static array and calling findTriplets method by passing parameters.
$triplet = array(2,3,4,-5,-4,9);
$n=count($triplet);
findTriplets($triplet,$n);
?>