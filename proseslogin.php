<?php
    include_once "koneksi.php";
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM data WHERE nama_lengkap='$nama_lengkap' AND password='$password'";;

    $login=mysqli_query($koneksi,$sql);

    $ketemu=mysqli_num_rows($login);
    $r=mysqli_fetch_array($login);
    if ($ketemu > 0){
        session_start();

        $_SESSION['nama_lengkap']=$r['nama_lengkap'];
        $_SESSION['password']=$r['password'];
        header('location:Home.php');
        echo"<center><a href=index.php><b>LOGOUT</b></a></center>";
    }
    else{
      echo"<center>Login gagal! username & password tidak benar<br></center>";
      echo"<center><a href=Login.php><b>ULANGI LAGI</b></a></center>";
    }
    mysqli_close($koneksi);
    ?>