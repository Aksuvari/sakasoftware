<?php
use App\Models\SettingModel;
use abeautifulsite\SimpleImage;


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

function convertToSEO($text)
{

    $turkce = array("ç", "Ç", "ğ", "Ğ", "ü", "Ü", "ö", "Ö", "ı", "İ", "ş", "Ş", ".", ",", "!", "'", "\"", " ", "?", "*", "_", "|", "=", "(", ")", "[", "]", "{", "}");
    $convert = array("c", "c", "g", "g", "u", "u", "o", "o", "i", "i", "s", "s", "", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");

    return strtolower(str_replace($turkce, $convert, $text));

}
function sendMail($template, $toMail = "", $subject = "", $message = [])
{
    $item = \App\Models\EmailModel::where('isActive', 1)->first();
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
    $mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = $item->host;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = false;
    $mail->SMTPAutoTLS = false;
    $mail->Username = $item->username;
    $mail->Password = $item->password;
    $mail->Port = $item->port;
    $mail->CharSet = 'UTF-8';
    $mail->WordWrap = 50;
    $mail->setFrom($item->from, $item->title);
    $mail->addAddress($toMail);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = view($template, compact('message'));
    return $mail->send();
}




