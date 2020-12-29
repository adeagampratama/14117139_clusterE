<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "praktikumweb6";

$kon = mysqli_connect($hot, $user, $password, $db);
if(!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>