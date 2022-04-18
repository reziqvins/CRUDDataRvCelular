<?php

    include 'Connection.php';
    $tampil = pg_query("SELECT * FROM data_hp");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body shadow" style="margin-auto;">
                <a href="tambahdata.php" class="btn btn-primary" >Tambah</a>
                <h3 class="text-center"><b>Daftar Data HP</b></h3>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama merk</td>
                            <td>tipe merk</td>
                            <td>tahun produksi</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while($data = pg_fetch_array($tampil)):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_merk'];?></td>
                            <td><?= $data['tipe_hp'];?></td>
                            <td><?= $data['tahun_produksi'];?></td>
                            <td>
                                <a href="editdata.php?id=<?= $data['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapusdata.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>4
</body>
</html>