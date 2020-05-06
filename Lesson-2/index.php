<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Lesson 1</title>
</head>
<body>

<div class="container">
    <!--1-->
    <!--Объявить две целочисленные переменные $a и $b и задать им произвольные начальные-->
    <!--значения. Затем написать скрипт, который работает по следующему принципу:-->
    <!--a. Если $a и $b положительные, вывести их разность.-->
    <!--b. Если $а и $b отрицательные, вывести их произведение.-->
    <!--c. Если $а и $b разных знаков, вывести их сумму.-->
    <!--Ноль можно считать положительным числом.-->
    <h3>Задание 1</h3>
    <p>Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
        значения. <br> Затем написать скрипт, который работает по следующему принципу: <br>
        a. Если $a и $b положительные, вывести их разность. <br>
        b. Если $а и $b отрицательные, вывести их произведение.<br>
        c. Если $а и $b разных знаков, вывести их сумму.<br>
        Ноль можно считать положительным числом.</p>
    <?php
    $a = 0;
    $b = 2;

    numberSearch($a, $b);


    function numberSearch($a, $b)
    {
        if ($a >= 0 && $b >= 0) {
            $desired = $a - $b;
            echo '$a и $b положительные, вывести их разность = ' . "$desired";
        } else if ($a < 0 && $b < 0) {
            $desired = $a * $b;
            echo '$а и $b отрицательные, вывести их произведение = ' . "$desired";
        } else {
            $desired = $a + $b;
            echo '$а и $b разных знаков, вывести их сумму = ' . "$desired";
        }
    }


    ?>

    <h3>Задание 2</h3>
    <p>Присвоить переменной $а значение в промежутке [0..15]. <br> С помощью оператора
        switch организовать вывод чисел от $a до 15.</p>

    <?php
    $a = 14;

    switch ($a) {
        case 0:
            echo '0 - ';
        case 1:
            echo '1 - ';
        case 2:
            echo '2 - ';
        case 3:
            echo '3 - ';
        case 4:
            echo '4 - ';
        case 5:
            echo '5 - ';
        case 6:
            echo '6 - ';
        case 7:
            echo '7 - ';
        case 8:
            echo '8 - ';
        case 9:
            echo '9 - ';
        case 10:
            echo '10 - ';
        case 11:
            echo '11 - ';
        case 12:
            echo '12 - ';
        case 13:
            echo '13 - ';
        case 14:
            echo '14 - ';
        case 15:
            echo '15';
    }

    ?>

    <h3>Задание 3</h3>
    <p>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. <br>
        Обязательно использовать оператор return.</p>

    <?php
    function sum($a, $b)
    {
        return $a + $b;
    }

    function substraction($a, $b)
    {
        return $a - $b;
    }

    function multiplication($a, $b)
    {
        return $a * $b;
    }

    function division($a, $b)
    {
        if ($b == 0) {
            return 'Деление на ноль';
        };
        return $a / $b;
    }


    $a = 5;
    $b = 0;

    echo "a = 5, b = 6 <br>";
    echo "Сумма: " . sum($a, $b) . "<br>";
    echo "Разность: " . substraction($a, $b) . "<br>";
    echo "Умножение: " . multiplication($a, $b) . "<br>";
    echo "Деление: " . division($a, $b) . "<br>";

    ?>

    <h3>Задание 4</h3>
    <p>Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
        где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В
        зависимости от переданного значения операции выполнить одну из арифметических операций
        (использовать функции из пункта 3) и вернуть полученное значение.</p>

    <?php
    function mathOperation($a, $b, $operation)
    {
        switch ($operation) {
            case '+':
                return sum($a, $b);
                break;
            case '-':
                return substraction($a, $b);
                break;
            case '*':
                return multiplication($a, $b);
                break;
            case '/';
                return division($a, $b);
                break;
        }


    }

    echo "a = 5 <br> b = 4 <br>";
    echo "a - b = " . mathOperation(5, 4, '-') . "<br>";
    echo "a + b = " . mathOperation(5, 4, '+') . "<br>";
    echo "a * b = " . mathOperation(5, 4, '*') . "<br>";
    echo "a / b = " . mathOperation(5, 4, '/') . "<br>";

    ?>

    <h3>Задание 5</h3>
    <p>Посмотреть на встроенные функции PHP. Вывести текущий год при помощи встроенных функций PHP.</p>

    <?php
    echo date('d-M-Y');
    ?>

    <h3>Задание 6*</h3>
    <p>С помощью рекурсии организовать функцию возведения числа в степень. Формат: function
        power($val, $pow), где $val – заданное число, $pow – степень.</p>

    <?php

    function power($val, $pow)
    {
        if ($pow == 1) {
            return $val;
        } else {
            return $val * power($val, $pow - 1);
        }
    }

    echo "2^3 = " . power(2, 3);
    echo "<br>";
    ?>


    <h3>Задание 7*</h3>
    <p>Написать функцию, которая вычисляет текущее время и возвращает его в формате с
        правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.</p>
    <?php
    date_default_timezone_set('Asia/Irkutsk');
    $hours = date('G');
    $minits = date('i');

    //часы
    // 1,21 час
    // 2,3,4,22,23,24 часа
    // 5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20, часов

    if ($hours == 1 || $hours == 21) {
        $hoursTitle = 'час';
    } else if (($hours >= 2 && $hours <= 4) || ($hours >= 22 && $hours <= 24)){
        $hoursTitle = 'часа';
    } else if ($hours >= 5 && $hours <= 20) {
        $hoursTitle = 'часов';
    }

    //минуты
    //1, 21, 31, 41, 51 минута
    //2-4, 22-24, 32-34, 42-44, 52-54  минуты
    //5-20, 25-30, 35-40, 45-50, 55-60 минут

    if ($minits == 1 || $minits == 21 || $minits = 31 || $minits == 41 || $minits == 51) {
        $minitsTitle = 'минута';
    } else if (($minits >= 2 && $minits <= 4) || ($minits >=22 || $minits <= 24) || ($minits >=32 || $minits <= 34) || ($minits >=42 || $minits <= 44) || ($minits >=52 || $minits <= 54)) {
        $minitsTitle = 'минуты';
    } else if (($minits >= 5 && $minits <= 20) || ($minits >= 25 && $minits <= 30) || ($minits >= 35 && $minits <= 40) || ($minits >= 45 && $minits <= 50) || ($minits >= 55 && $minits <= 60)) {
        $minitsTitle = 'минут';
    }



    echo $hours . " $hoursTitle " . $minits . " $minitsTitle";

    ?>


</div>

</body>
</html>



