<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
<?php
require_once "config/configDB.php";
require_once "engine/workWithDB.php";

$id = $_GET['id'];

$sql = "SELECT view_file, name_file FROM data_foto WHERE id = $id";
$result_request = getResult($sql);
$view = $result_request[0][0] + 1;
$name_file = $result_request[0][1];


$sql = "UPDATE data_foto SET view_file = $view WHERE id = $id;";
exequteQuery($sql);

?>

<div class="big_img">
    <img src="<?=UPLOAD_BIG_DIR . $name_file;?>" alt="">
</div>
</body>
</html>