<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tingkatan = $_POST['tingkatan'];
$jumlah_anggota = $_POST['jumlah_anggota'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi,"insert into dataforumanak values('$id','$nama','$tingkatan','$jumlah_anggota','$deskripsi')");
 
header("location:forum.php");
 
?>