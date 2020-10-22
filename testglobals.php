<?php
$num1 = 5;
$num2 = 5;

function multiplication()
{
    $GLOBALS['sum'] = $GLOBALS['num1'] * $GLOBALS['num2'];
}

multiplication();
echo $num1 . " * " . $num2 . " = " . $sum;
