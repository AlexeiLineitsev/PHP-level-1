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

<?php
$h1 = "Переменная для домашнего задания 3";
$navbar = 'Переменная для заголовка';
$btnHome = "btnHome";
$btnLink = 'btnLink';
$btnDropdown = 'btnDropdown';
$btnDisable = 'btnDisable';
?>

<!--3-->
<!--Используя любой HTML шаблон, сделать так, чтобы главная страница генерировалась-->
<!--через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и-->
<!--текущий год генерировались в блоке контента из созданных переменных.-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo $navbar; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?php echo $btnHome;?> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $btnLink;?></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $btnDropdown;?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><?php echo $btnDisable;?></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<h1><?php echo $h1; ?></h1>




<h2>Домашнее задание</h2>
<!--1.-->
<!--Выполнить примеры из методички, разобраться, как это работает.-->
<h3>Задание 1</h3>
<?php
$a = 3;
$b = 4;

echo $a + $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>"; //остаток от деления
echo $a ** $b . "<br>"; //возведение в степень

?>


<?php
$a += $b;

echo "a = $a <br>";

$a = 0;

echo $a++ . "<br>";
echo ++$a . "<br>";
echo $a-- . "<br>";
echo --$a . "<br>";

$a = 4;
$b = 5;

var_dump($a == $b); // сравнение по значению

echo "<br>";
//однострочный комментарий
/*
 * * Многострочный комментарий
 *
 */

var_dump($a === $b); //сравнение по типу и значению
echo "<br>";
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a <> $b);
echo "<br>";
var_dump($a !== $b); //не равно без приведение типов
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";

?>

<!--2  -->
<!--Объяснить, как работает данный код:-->
<h3>Задание 2</h3>
<?php
$a = 5;
$b = '05';
echo 'var_dump($a == $b); // Почему true?';
echo "<br>";
var_dump($a == $b); // Почему true?
echo "<br>";
echo "Ответ: cравнение без приведение типов<br>";
echo "<hr>";
echo 'var_dump(( int )\'012345\'); // Почему 12345?';
echo "<br>";
var_dump(( int )'012345'); // Почему 12345?
echo "<br>";
echo "Ответ: приводит запись справа к целому числу";
echo "<hr>";
echo "var_dump(( float )123.0 === ( int )123.0); // Почему false?";
echo "<br>";
var_dump(( float )123.0 === ( int )123.0); // Почему false?
echo "<br>";
echo "Ответ: сравнивается не только числа но и типы, если одно из них не верно то и равенство не верно";
echo "<hr>";
echo "var_dump(( int )0 === ( int )'hello, world'); // Почему true?";
echo "<br>";
var_dump(( int )0 === ( int )'hello, world'); // Почему true?
echo "<br>";
echo "Ответ: запись ( int )'hello, world' при приведении к int даст 0 т.к. запись не число";
echo "<br>";
?>




</body>
</html>



