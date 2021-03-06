<?php
include "resize.php";
function upload_file($path_smallImgFolder, $path_bigImgFolder, $name_upfile)
{

//    $filename = $_FILES[$name_upfile]['name'];
    $tmp_filename = $_FILES[$name_upfile]['tmp_name'];
    $size_file = $_FILES[$name_upfile]['size'];
    $file_type = $_FILES[$name_upfile]['type'];
    $file_extension = get_extension($file_type);
    $next_file_name = get_count_file_in_folder($path_bigImgFolder) + 1;

    if (check_img($file_type)) {
        if (check_size_img($size_file)) {

            if (move_uploaded_file($tmp_filename, $path_bigImgFolder . $next_file_name . ".$file_extension")) {
                create_thumbnail($path_bigImgFolder . $next_file_name . ".$file_extension", $path_smallImgFolder . $next_file_name . ".$file_extension", 800, 530);
                echo "Файл загружен успешно <br>";
            } else {
                echo "Ошибка загрузки файла <br>";
            }

        } else {
            echo "Загрузите файл меньше 3 мб";
        }
    } else {
        echo "Вы загрузили не фото";
    }

}

function render_fotogallery($path_smallImgFolder, $path_bigImgFolder)
{
    $fotogallery = scandir($path_smallImgFolder);
//    ksort($fotogallery);
    sort($fotogallery, SORT_NUMERIC);

    foreach ($fotogallery as $nameFile) {
        if (is_file($path_smallImgFolder . $nameFile)) {
            echo "<a href='$path_bigImgFolder$nameFile' target='_blank'><img src='$path_smallImgFolder$nameFile' alt='' class='fotoGallery--img'></a>";
        }
    }
}

function check_img($file_type)
{
    $allowed_types = [
        'image/gif',
        'image/jpeg',
        'image/png'
    ];

    if (in_array($file_type, $allowed_types)) {
        $check = true;
    } else {
        $check = false;
    }
    return $check;
}

function check_size_img($size_file)
{
    if ($size_file > 3145728) {
        $check = false;
    } else {
        $check = true;
    }
    return $check;
}

function get_extension($file_type)
{
    $arr_type = explode("/", $file_type);
    return $arr_type[1];
}

function get_count_file_in_folder($path)
{
    $count = 0;
    $folder = scandir($path);

    foreach ($folder as $file) {
        if (is_file($path . $file)) {
            $count++;
        }
    }

    if ($count > 0) {
        return $count;
    } else {
        echo "Папка пуста";
    }
}


?>