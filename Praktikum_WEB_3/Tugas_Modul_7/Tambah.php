<?php
include "koneksi.php";

$NRP = $_POST['NIM'];
$Nama = $_POST['Nama'];
$jurusan = $_POST['ID_jur'];

$sql = "INSERT INTO mahasiswa(NIM,Nama,foto,ID_jur) VALUES('$NRP','$Nama','$jurusan')";
$query = mysqli_query($koneksi, $sql); 

if($query){
    echo "Data berhasil ditambahkan";
}else{
    echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>