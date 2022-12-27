<?php
 include './vendor/_conexao.php'; 

$accepted_origins = array("http://localhost", "https://localhost", "");

$imageFolder = "assets/img/post/";

reset($_FILES);

$temp = current($_FILES);

if (is_uploaded_file($temp['tmp_name'])) {
    if (preg_match("/([^\w\s\d-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
        header("HTTP/1.1 400 Invalid file name.");
        return;
    }

    if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
        header("HTTP/1.1 400 Invalid extension.");
        return;
    }
    $filetowrite = $imageFolder . $temp['name'];
    move_uploaded_file($temp['tmp_name'], $filetowrite);

    echo json_encode(array('location' => $filetowrite));
    // echo json_encode(array('file_path' => $filetowrite));
} else {
    header("HTTP/1.1 500 Server Error");
}
