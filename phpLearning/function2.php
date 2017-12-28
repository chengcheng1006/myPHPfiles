<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12/27/17
 * Time: 9:49 PM
 */
/*
 * @param $num1
 * @param $num2
 * @param $operator
 */
    function myCalculator($num1, $num2, $operator){
        if($num1 == null || $num2 == null || $operator == null)
            return new Error("Error Input!");
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
                return new Error("Undefined Operator!");
        }
        return $res;
    }