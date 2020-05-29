<?php


function exequteQuery($sql)
{
    $linkDB = mysqli_connect(HOST, USER, PASS, DB);
    $result = mysqli_query($linkDB, $sql);
    mysqli_close($linkDB);
    return $result;
}


function getResult($sql)
{
    $linkDB = mysqli_connect(HOST, USER, PASS, DB);
    $result = mysqli_query($linkDB, $sql);

    $array_result = array();

    while ($row = mysqli_fetch_row($result)) {
        $array_result[] = $row;
    }

    mysqli_close($linkDB);
    return $array_result;
}

?>