<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Lesson 5</title>
</head>
<body>
<?php
include "engine/fileLoad.php";
require_once "config/configDB.php";
require_once "engine/workWithDB.php";
?>

<div class="container">
        <h4> После предыдущего урока вы реализовали галерею изображений с помощью файлов и папок. Теперь
            необходимо сделать то же самое, но для хранения имен картинок следует использовать базу данных.
        </h4>
        <h4>Задание 1</h4>
        <h5>
            Создать галерею изображений, состоящую из двух страниц:
            a. просмотр всех фотографий (уменьшенных копий);
            b. просмотр конкретной фотографии (изображение оригинального размера) по её ID в
            базе данных.
        </h5>
        <h4>Задание 2</h4>
        <h5>
            В базе данных создать таблицу, в которой будет храниться информация о картинках (адрес на
            сервере, размер, имя).
        </h5>
        <h4>Задание 3</h4>
        <h5>
            * На странице просмотра фотографии полного размера под картинкой должно быть указано
            число её просмотров.
        </h5>
        <h4>Задание 4</h4>
        <h5>
            * На странице просмотра галереи список фотографий должен быть отсортирован по
            популярности. Популярность - число кликов по фотографии.
        </h5>

    <?php
    $id = $_GET['id'];
    $sql = "select * from data_foto";
    $gallery_foto = getResult($sql);

    if (isset($_FILES['upfile'])) {
        upload_file(UPLOAD_SMALL_DIR, UPLOAD_BIG_DIR, 'upfile');
    }
    ?>

    <div class="fotoGallery">
        <div class="fotoGallery--big_img"></div>
        <?php
        render_fotogallery(UPLOAD_SMALL_DIR, UPLOAD_BIG_DIR);
        ?>
    </div>

    <form action="?" method="post" enctype="multipart/form-data">
        <input type="file" name="upfile"/>
        <input type="submit" value="Отправить файл"/>
    </form>

</div>
</body>
</html>



