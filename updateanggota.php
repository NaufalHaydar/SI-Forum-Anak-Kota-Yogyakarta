<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$posisi = $_POST['posisi'];
$tgl_lahir = $_POST['tgl_lahir'];
$jkel = $_POST['jkel'];

mysqli_query($koneksi,"update dataanggota set nama_lengkap='$nama_lengkap', posisi='$posisi', tgl_lahir='$tgl_lahir', jkel='$jkel' where id='$id'");

header("location:anggota.php");
 
?>