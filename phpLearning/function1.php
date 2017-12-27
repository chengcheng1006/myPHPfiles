<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12/26/17
 * Time: 7:24 PM
 */

    $num1 = 12;
    $num2 = 12;

    $operator = "+";

    $res = 0;
    switch ($operator){
        case "+":
            $res = $num1 + $num2;
            break;
        case "-":
            $res = $num1 - $num2;
            break;
        case "*":
            $res = $num1 * $num2;
            break;
        case "/":
            $res = $num1 / $num2;
            break;
        default:
            echo "something went wrong!";
    }
    echo $num1.$operator.$num2."=".$res;