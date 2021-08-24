<?php
function quadratic($a,$b,$c)
{
    $root1 = 0;
    $root2 = 0;
    #calculating roots of quadratic equation.
    $delta = $b*$b - 4*$a*$c;
    if($delta >= 0)
    {
        $root1 = (-$b + sqrt($delta)) / (2 * $a);
        $root2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Roots are: ".$root1.",".$root2.".";
    }
    else if($delta <= 0)
    {
        echo "roots are imaginary because delta is less than zero: ";
        $root1 = (-$b + sqrt($delta)) / (2 * $a);
        $root2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Roots are: ".$root1.",".$root2.".";
    }
}

#taking a,b,c values from user and calling quadratic method by passing arguments.
echo "calculating quadratic roots of the equation";
echo "\n";
$a = readline("Enter the value of 'a' in Quadratic equation: ");
$b = readline("Enter the value of 'b' in Quadratic equation: ");
$c = readline("Enter the value of 'c' in Quadratic equation: ");
echo "The roots of the equation ".$a."x^2+".$b."x+".$c." are: ";
echo "\n";
quadratic($a,$b,$c);
?>