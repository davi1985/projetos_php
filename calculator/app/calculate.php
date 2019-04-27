<?php

function calculate()
{
    if (!empty($_GET['numberOne']) && !empty($_GET['numberTwo']) && !empty($_GET['operation'])) {
        $numberOne = floatval($_GET['numberOne']);
        $operation = $_GET['operation'];
        $numberTwo = floatval($_GET['numberTwo']);
        $result;
        $err = 'ERRO';
        switch ($operation) {
          case '+':
            $result = $numberOne + $numberTwo;
            break;
          
          case '-':
            $result = $numberOne - $numberTwo;
            break;

          case '*':
            $result = $numberOne * $numberTwo;
            break;
          
          case '/':
            $result = $numberOne / $numberTwo;
          break;
        }
        return ($result != '')? $numberOne.' '.$operation.' '.$numberTwo. ' = '.$result : $err;
    }
}
