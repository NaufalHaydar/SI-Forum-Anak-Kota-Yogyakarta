<?php
include "koneksi.php";

$sql="SELECT*FROM gudang order by id_barang";
$tampil=mysqli_query($koneksi,$sql);
if(mysqli_num_rows($tampil)>0){
    $no=1;
    $response=array();
    $response["data"]=array();
    while($r=mysqli_fetch_array($tampil)){
        $h['id_barang']=$r['id_barang'];
        $h['nama_barang']=$r['nama_barang'];
        $h['stock']=$r['stock'];
        $h['harga']=$r['harga'];
        array_push($response["data"],$h);
    }
    echo json_encode($response);
}
else{
    $response["message"]="tidak ada data";
    echo json_encode($response);
}
?>