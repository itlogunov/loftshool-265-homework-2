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
task1($arrStringList, true);
$result = task1($arrStringList);
echo $result;

/**
 * Задание #2
 */
$result = task2('+', 1, 2, 3, 5.2);
$result = task2('-', 15, 5);
$result = task2('*', 2, 3);
$result = task2('/', 20, 5, 2);
echo $result;

/**
 * Задание #3
 */
task3(8, 10);

/**
 * Задание 4
 */
$arrDateTimeList = task4();
echo 'current: ' . $arrDateTimeList['current'] . '<br>';
echo 'unix: ' . $arrDateTimeList['unix'] . '<br>';

/**
 * Задание 5
 */
$arrStringList = task5();
echo $arrStringList[0] . '<br>';
echo $arrStringList[1] . '<br>';

/**
 * Задание 6
 */
createFile('Hello again!','test.txt');
task6('test.txt');
