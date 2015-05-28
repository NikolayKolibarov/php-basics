<?php
$firstNumber = 1234.5678;
$secondNumber = 333;
$result = $firstNumber + $secondNumber;
$result = number_format($result, 2);
echo '$firstNumber + $secondNumber = ' . "$firstNumber + $secondNumber = " . $result;
?>