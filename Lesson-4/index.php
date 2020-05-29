<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Lesson 4</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
<?php
include "fileLoad.php";
?>

<div class="container">
    <h3>Задание 1</h3>
    <h4> Создать галерею фотографий. Она должна состоять всего из одной странички, на которой
        пользователь видит все картинки в уменьшенном виде и форму для загрузки нового
        изображения. При клике на фотографию она должна открыться в браузере в новой вкладке.
        Размер картинок можно ограничивать с помощью свойства width. При загрузке изображения
        необходимо делать проверку на тип и размер файла.</h4>
    <h3>Задание 2</h3>
    <h4>
        * При загрузке изображения на сервер должна создаваться его уменьшенная копия, а на
        странице index.php должны выводиться именно копии. На реальных сайтах это активно
        используется для экономии трафика. При клике на уменьшенное изображение в браузере в
        новой вкладке должен открываться оригинал изображения. Функция изменения размера
        картинок дана в исходниках. Вам необходимо суметь встроить её в систему.

    </h4>

    <form action="?" method="post" enctype="multipart/form-data">
        <input type="file" name="upfile"/>
        <input type="submit" value="Отправить файл"/>
    </form>

    <?php
    $path_fotogalleryFolder = 'public/img/fotogallery/';
    $path_smallImgFolder = 'public/img/fotogallery/small/';
    $path_bigImgFolder = 'public/img/fotogallery/big/';
    $name_upfile = 'upfile';

    if (isset($_FILES[$name_upfile]))
    {
      upload_file($path_smallImgFolder, $path_bigImgFolder, $name_upfile);
    }
    ?>


    <div class="fotoGallery">
        <?php
            render_fotogallery($path_smallImgFolder, $path_bigImgFolder);
        ?>
    </div>



</div>

</body>
</html>



