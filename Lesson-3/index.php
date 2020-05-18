<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Lesson 3</title>
    <style>
        h5:not(:first-child) {
            margin-top: 25px;
        }
    </style>
</head>
<body>

<div class="container">
    <h5>Задача 1</h5>
    <h6>С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без
        остатка.
    </h6>
    <?php
    $i = 0;
    while ($i <= 100) {
        if ($i % 3 == 0) {
            echo "$i, ";
        }
        $i++;
    }
    echo '<hr>';
    ?>


    <h5>Задача 2</h5>
    <h6>С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат
        выглядел так:
        0 – это ноль.
        1 – нечетное число.
        2 – четное число.
        3 – нечетное число.
        …
    </h6>
    <?php

    $i = 0;

    do {
        echo "$i - " . oddOrEven($i) . '<br>';
        $i++;
    } while ($i <= 10);
    //Определение четности числа
    function oddOrEven($i)
    {
        if ($i == 0) {
            return 'это ноль';
        }

        if ($i % 2 == 0) {
            return 'четное число';
        } else {
            return 'нечетное число';
        }
    }

    echo '<hr>';

    ?>

    <h5>Задача 3</h5>
    <h6>Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в
        качестве значений – массивы с названиями городов из соответствующей области.
        Вывести в цикле значения массива, чтобы результат был таким:
        Московская область:
        Москва, Зеленоград, Клин
        Ленинградская область:
        Санкт-Петербург, Всеволожск, Павловск, Кронштадт
        Рязанская область
        …

    </h6>
    <?php
    $regionAndCity = [];
    $regionAndCity[0] = [
        'Московская область' => ['Москва', 'Зеленоград', 'Клин']
    ];
    $regionAndCity[1] = [
        'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']
    ];

    foreach ($regionAndCity as $i => $value) {
        foreach ($value as $region => $cities) {
            echo "<hr>";
            echo "$region <br>";
            foreach ($cities as $j => $city) {
                echo "$city <br>";
            }
        }
    }
    echo '<hr>';

    ?>

    <h5>Задача 4</h5>

    <h6>
        Объявить массив, индексами которого являются буквы русского языка, а значениями –
        соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’,
        ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
        Написать функцию транслитерации строк.
    </h6>

    <?php
    $arrayLetters = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e',
        'ж' => 'j', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'];

    echo 'здравствуйте - ';
    transliteration('здравствуйте', $arrayLetters);

    function transliteration($str, $arrayLetters)
    {
        mb_regex_encoding('UTF-8');
        mb_internal_encoding("UTF-8");
        $str = preg_split('/(?<!^)(?!$)/u', $str);

        foreach ($str as $key => $letter) {
            echo $arrayLetters[$letter];
        }
    }

    echo '<hr>';

    ?>

    <h5>Задание 5</h5>
    <h6>Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает
        видоизмененную строчку.
    </h6>
    <?php

    $str = 'Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.';
    echo 'С помощью функции str_ireplace <br>';
    $newStr = str_ireplace(' ', '_', $str);
    echo "$newStr <br>";

    echo 'С помощью функций explode и implode <br>';
    replace($str);

    function replace($str)
    {
        $newStr = explode(' ', $str);
        $newStr = implode('_', $newStr);
        echo $newStr;
    }

    echo '<hr>';
    ?>

    <h5>Задание 6</h5>
    <h6>В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.
        Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать,
        как можно реализовать меню с вложенными подменю? Попробовать его реализовать.</h6>

    <?php
    $menuArr = [
        'Menu 1',
        'Menu 2' => ['Submenu 1', 'Submenu 2', 'Submenu 3'],
        'Menu 3' => ['Submenu 4' => ['One level deeper 1', 'One level deeper 2']]
    ];

    function menuRender($arr)
    {

        if (!is_array($arr)) {
            return 'incorrect argument';
        }

        $renderArr[] = '<ul>';
        foreach ($arr as $key => $value) {
            //перебираем массив, если значение - массив, то обрабатываем его нашей функцией
            if (is_array($value)) {
                $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
            } else {
                $renderArr[] = '<li>' . $value . '</li>';
            }
        }
        $renderArr[] = '</ul>';

        return implode($renderArr);
    }

    echo menuRender($menuArr);
    echo '<hr>';
    ?>

    <h5>Задание 7*</h5>
    <h6>Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть
        должно так: for(…){// здесь пусто}
    </h6>

    <?php
    for ($i = 0; $i <= 9; print_r($i++)) {
    }
    echo '<hr>';
    ?>

    <h5>Задание 8*</h5>
    <h6>
        Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
    </h6>

    <?php
    $regionAndCity = [];
    $regionAndCity[0] = [
        'Московская область' => ['Москва', 'Зеленоград', 'Клин']
    ];
    $regionAndCity[1] = [
        'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']
    ];


    foreach ($regionAndCity as $i => $value) {
        foreach ($value as $region => $cities) {
            echo "<hr>";
            echo "$region <br>";
            foreach ($cities as $j => $city) {
                mb_regex_encoding('UTF-8');
                mb_internal_encoding("UTF-8");
                $str = preg_split('/(?<!^)(?!$)/u', $city);

                if ($str[0] == 'к' || $str[0] == 'К') {
                    echo "$city <br>";
                }
            }
        }
    }
    echo '<hr>';
    ?>
</div>

</body>
</html>



