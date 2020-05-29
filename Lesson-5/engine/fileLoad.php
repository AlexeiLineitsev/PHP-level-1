<?php
include_once "engine/resize.php";
include_once "config/configDB.php";

function upload_file($path_smallImgFolder, $path_bigImgFolder, $name_upfile)
{
    $tmp_filename = $_FILES[$name_upfile]['tmp_name'];
    $size_file = $_FILES[$name_upfile]['size'];
    $file_type = $_FILES[$name_upfile]['type'];
    $file_extension = get_extension($file_type);
    $next_file_name = get_count_file_in_folder($path_bigImgFolder) + 1;
    $hash = hash_file('md5', $tmp_filename);
    $name_file = $next_file_name . ".$file_extension";

    $sql_request_hash = "select * from data_foto where hash_file = '$hash'";
    $hash_file = getResult($sql_request_hash);

    if (!$hash_file) {
        if (check_img($file_type)) {
            if (check_size_img($size_file)) {
                if (move_uploaded_file($tmp_filename, $path_bigImgFolder . $next_file_name . ".$file_extension")) {
                    create_thumbnail($path_bigImgFolder . $name_file, $path_smallImgFolder . $name_file, 800, 530);
                    $sql_request_add_foto = "insert into data_foto (hash_file, name_file, view_file) value ('$hash', '$name_file', '0')";
                    exequteQuery($sql_request_add_foto);
                    echo "<script>alert('Файл загружен успешно')</script>";
                    //echo "Файл загружен успешно <br>";
                } else {
                    echo "Ошибка загрузки файла <br>";
                }
            } else {
                echo "Загрузите файл меньше 3 мб";
            }
        } else {
            echo "Вы загрузили не фото";
        }
    } else {
        echo "Такой файл уже есть в базе данных";
    }

}

function render_fotogallery($path_smallImgFolder, $path_bigImgFolder)
{
    $sql_request_data_foto = "SELECT * from data_foto order by view_file desc";
    $fotogallery = getResult($sql_request_data_foto);

    foreach ($fotogallery as $array_name_file) {
        $nameFile = $array_name_file[2];
        $view_file = $array_name_file[3];
        $id_file = $array_name_file[0];

        if (is_file($path_smallImgFolder . $nameFile)) {
            echo "<a href='foto_gallery.php?id=$id_file' target='_blank' class='item-foto' id='$id_file'>
                  <img src='$path_smallImgFolder$nameFile' alt='' class='fotoGallery--img'>
                  <span class=\"view-foto\">$view_file</span>
                  </a>";
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
        echo "Вы пока не загрузили ничего";
    }
}



?>