<?php
    include 'Connection.php';

    $nama_merk = $_POST['nama'];
    $tipe = $_POST['tipe'];
    $tahun = $_POST['tahun'];

    $query_tambah = "INSERT INTO data_hp (nama_merk,tipe_hp,tahun_produksi) VALUES ('$nama_merk','$tipe','$tahun')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        header("location: index.php");
    }else{
        header("location: tambahdata.php");
    }

?>