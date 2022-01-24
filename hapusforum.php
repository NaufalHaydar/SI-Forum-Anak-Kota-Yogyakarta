<?php 

include 'koneksi.php';

$id = $_GET['id'];
 
mysqli_query($koneksi,"delete from dataforumanak where id='$id'");

header("location:forum.php");
 
?>