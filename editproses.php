<?php

    include('Connection.php');
        $id = $_POST['id'];
        $merk = $_POST['merk'];
        $tipe = $_POST['tipe'];
        $tahun = $_POST['tahun']; 

        $query_edit = "UPDATE data_hp SET nama_merk='$merk', tipe_hp='$tipe', tahun_produksi='$tahun' WHERE id = '$id' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            header("location:index.php");
        }else{
            header("location:index.php?id=$id");
        }
?>