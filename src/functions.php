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
    $strExpression = 'Результат: ';

    if ($operator == '+') {
        foreach ($args as $value) {
            $sum += $value;
            $strExpression .= $value . ' + ';
        }
    } elseif ($operator == '-') {
        foreach ($args as $key => $value) {
            if ($key == 0) {
                $sum = $value;
            } else {
                $sum -= $value;
            }
            $strExpression .= $value . ' - ';
        }
    } elseif ($operator == '*') {
        $sum = 1;
        foreach ($args as $value) {
            $sum *= $value;
            $strExpression .= $value . ' * ';
        }
    } elseif ($operator == '/') {
        foreach ($args as $key => $value) {
            if ($key == 0) {
                $sum = $value;
            } else {
                $sum /= $value;
            }
            $strExpression .= $value . ' / ';
        }
    }

    return substr($strExpression, 0, -2) . ' = ' . $sum;
}

function task3($num1, $num2)
{
    if (is_int($num1) && is_int($num2)) {
        echo '<table>';
        for ($rows = 1; $rows <= $num1; $rows++) {
            echo '<tr>';
            for ($cols = 1; $cols <= $num2; $cols++) {
                if (($rows % 2 == 0) && ($cols % 2 == 0)) {
                    $value = '(' . $rows * $cols . ')';
                } elseif (($rows % 2 != 0) && ($cols % 2 != 0)) {
                    $value = '[' . $rows * $cols . ']';
                } else {
                    $value = $rows * $cols;
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

function readFileByPath(string $fileName)
{
    return file_get_contents($fileName);
}

function task6(string $fileName)
{
    if (file_exists($fileName)) {
        echo readFileByPath($fileName);
    } else {
        echo 'Ошибка, файл не найден!';
    }
}
