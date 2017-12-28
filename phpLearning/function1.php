<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<?php
require_once 'function2.php';
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12/26/17
 * Time: 7:24 PM
 */

    $num1 = 12;
    $num2 = 12;

    $operator = "+";
    $res = myCalculator($num1,$num2,$operator);
    echo "计算结果：".$num1.$operator.$num2."=".$res;
//
//    $res = 0;
//    switch ($operator){
//        case "+":
//            $res = $num1 + $num2;
//            break;
//        case "-":
//            $res = $num1 - $num2;
//            break;
//        case "*":
//            $res = $num1 * $num2;
//            break;
//        case "/":
//            $res = $num1 / $num2;
//            break;
//        default:
//            echo "something went wrong!";
//    }
//    echo "计算结果：".$num1.$operator.$num2."=".$res;

//this is a new php learning project. new branch testing.
    ?>
</html>


