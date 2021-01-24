<?php
echo '<h2> Week 1 Training </h2>';

print("1.1 Арифметика <br>");
$number_one = 5;
$number_two = 6;
$number_three = 578;

$summ = $number_one + $number_two;
print("Сумма чисел равна ".$summ = $number_one + $number_two.'<br><br>');

$summ_kv = $number_one**2 + $number_two**2;
print("Сумма квадратов чисел равна ".$summ_kv.'<br><br>');

$sr_arif = ($number_one + $number_two)/2;
print("Среднее арифметическое  ".$sr_arif.'<br><br>');

$string_number = (string)$number_three;
//print(gettype($string_number));
$summ_of_nums = (int)$string_number[0] + (int)$string_number[1] +(int)$string_number[2];
print("Сумма цифр числа  ".$summ_of_nums.'<br><br>');

?>
