<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tingkatan = $_POST['tingkatan'];
$jumlah_anggota = $_POST['jumlah_anggota'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi,"update dataforumanak set nama='$nama',tingkatan='$tingkatan',jumlah_anggota='$jumlah_anggota',deskripsi='$deskripsi' where id='$id'");

header("location:forum.php");
 
?>
