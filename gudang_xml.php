<?php
    include "koneksi.php";
    
    header('Content-Type: text/xml');
    $query = "SELECT * FROM gudang";
    $hasil = mysqli_query($koneksi,$query);
    $jumField = mysqli_num_fields($hasil);
    echo "<?xml version='1.0'?>";
    echo "<data>";

    while ($data = mysqli_fetch_array($hasil)){
        echo "<gudang>";
        echo"<id_barang>",$data['id_barang'],"</id_barang>";
        echo"<nama_barang>",$data['nama_barang'],"</nama_barang>";
        echo"<stock>",$data['stock'],"</stock>";
        echo"<harga>",$data['harga'],"</harga>";
        echo "</gudang>";
    }
    echo "</data>";
?>