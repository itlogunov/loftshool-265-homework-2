<?php

require('src/functions.php');

/**
 * Задание #1
 */
$arrStringList = [
    'первая строка',
    'вторая строка',
    'третья строка'
];
task1($arrStringList);
$result = task1($arrStringList, true);

/**
 * Задание #2
 */
$result = task2('+', 1, 2, 3, 5.2);
echo $result;

/**
 * Задание #3
 */
task3(8, 10);

/**
 * Задание 4
 */
$arrDateTimeList = task4();
print_r($arrDateTimeList);

/**
 * Задание 5
 */
$arrStringList = task5();
print_r($arrStringList);

/**
 * Задание 6
 */
createFile('Hello again!','test.txt');
task6('test.txt');
