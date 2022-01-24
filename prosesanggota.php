<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$posisi = $_POST['posisi'];
$tgl_lahir = $_POST['tgl_lahir'];
$jkel = $_POST['jkel'];

mysqli_query($koneksi,"insert into dataanggota values('$id','$nama_lengkap','$posisi','$tgl_lahir','$jkel')");
 
header("location:anggota.php");
 
?>