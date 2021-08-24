<?php

#Creating a twoDimArray method it takes array values from user and prints it.
function twoDimArray($rows,$columns)
{
    $twoDimArray = array(array());
    echo "Enter the Elements of the Array: ";
    for ($i=0; $i < $rows ; $i++) 
    { 
        for ($j=0; $j < $columns ; $j++) 
        { 
            $twoDimArray[$i][$j] = readline();
        }
    }
    echo "\n".$twoDimArray[0][0];
    echo "Array elements are: ";
    for ($i=0; $i < $rows ; $i++) 
    { 
        for ($j=0; $j < $columns; $j++) 
        { 
            echo "\n".$twoDimArray[$i][$j];
        }
    }
}

#Taking rows and columns from user and calling twoDimArray by passing rows and columns.
$rows = readline("Enter no. of rows: ");
$columns = readline("Enter no. of columns: ");
twoDimArray($rows,$columns);
?>