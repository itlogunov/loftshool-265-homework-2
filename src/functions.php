<?php

function task1(array $arrStringList, bool $return = false)
{
    $htmlString = '';
    foreach ($arrStringList as $string) {
        $htmlString .= '<p>' . $string . '</p>';
    }

    if ($return) {
        echo $htmlString;
    } else {
        return $htmlString;
    }
}

function task2(...$args)
{
    $sum = 0;
    $operator = array_shift($args);

    if ($operator == '+') {
        foreach ($args as $value) {
            $sum += $value;
        }
    } elseif ($operator == '*') {
        $sum = 1;
        foreach ($args as $value) {
            $sum *= $value;
        }
    }

    return $sum;
}

function task3($num1, $num2)
{
    if (is_int($num1) && is_int($num2)) {
        echo '<table>';
        for ($i = 1; $i <= $num1; $i++) {
            echo '<tr>';
            for ($k = 1; $k <= $num2; $k++) {
                if (($i % 2 == 0) && ($k % 2 == 0)) {
                    $value = '(' . $i * $k . ')';
                } elseif (($i % 2 != 0) && ($k % 2 != 0)) {
                    $value = '[' . $i * $k . ']';
                } else {
                    $value = $i * $k;
                }
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Ошибка, введите целые числа!';
    }
}

function task4(): array
{
    return [
        'current' => date('d.m.Y H:i:s'),
        'unix' => mktime(0, 0, 0, 02, 24, 2016)
    ];
}

function task5(): array
{
    return [
        str_ireplace('К', '', 'Карл у Клары украл Кораллы'),
        str_replace('Две', 'Три', 'Две бутылки лимонада')
    ];
}

function createFile(string $text, string $fileName)
{
    file_put_contents($fileName, $text);
}

function task6(string $fileName)
{
    if (file_exists($fileName)) {
        $text = file_get_contents($fileName);
        echo $text;
    } else {
        echo 'Ошибка, файл не найден!';
    }
}
