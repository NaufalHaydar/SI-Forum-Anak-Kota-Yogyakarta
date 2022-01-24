<?php 

include 'koneksi.php';

$id = $_GET['id'];
 
mysqli_query($koneksi,"delete from dataanggota where id='$id'");

header("location:anggota.php");
 
?>