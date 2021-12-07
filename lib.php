<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "tes") or die("!!!!!!!!!!!!!!");
mysqli_query($con, "set names utf8");
header('Content-Type: text/html; charset=utf-8');
function result($con, $q)
{
    if ($q != "")
        return mysqli_query($con, $q);
    else
        return "";
}
if (isset($_SESSION['username']) and isset($_SESSION['password']) and isset($_SESSION['type'])) {
    $username =  $_SESSION['username'];
    $password = $_SESSION['password'];
    $type =  $_SESSION['type'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND type = '$type'";
    $result = mysqli_query($con, $sql);
    $num_row = mysqli_num_rows($result);
    if ($num_row < 1) {
        header("location:logout.php");
    }
} else {
    header("location:indexx.php");
}
?>
<style>
    @font-face {
        font-family: khalid art;
        src: url(Font_Sys/Khalid-Art-bold.ttf);
    }
    @font-face {
        font-family: adobe arabic;
        src: url(Font_Sys/AdobeArabic-bold.otf);
    }
    h2 {
        font-family: khalid art;
    }
</style>
