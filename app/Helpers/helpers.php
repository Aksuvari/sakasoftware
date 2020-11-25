<?php
use App\Models\SettingModel;
use claviska\SimpleImage;

function dizinolustur($path, $mode = 0777, $recursive = false, $force = false)
{
    if ($force) {
        return @mkdir($path, $mode, $recursive);
    } else {
        return mkdir($path, $mode, $recursive);
    }
}
function upload_picture($file, $uploadPath, $width, $height, $name)
{
    print_r("$uploadPath/$name");

    $upload_error = false;
    try {
        $img = new SimpleImage($file);
        $img->resize($width, $height);
        $img->save("$uploadPath/$name");

    } catch (Exception $err) {
        $error = $err->getMessage();
        $upload_error = true;
    }

    if ($upload_error) {
        echo $error;

    } else {
        return true;
    }
}