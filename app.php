<?php
session_start();
define('APP_URI', 'http://localhost/zip');
include "Zip.php";
$zip = new Zip();
if (isset($_POST['save_zip'])) {
    $ress = $zip->uploads($_FILES['files']);
    $_SESSION['response'] = $ress;
    header("location:upload.php");
}
?>