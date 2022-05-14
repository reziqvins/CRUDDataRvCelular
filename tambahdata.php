<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Tambah</title>
</head>
<body>
<?php include ('header.php');?>

    <div class="container">
        <div class="card mt-3">
        <form method="post" action="tambahproses.php" >
            <div class="card-body shadow" style="margin:auto;" >
                <h3 class="text-center"><b>Tambah Data</b></h3>
            <div class="form-group">
                <label for="nama_merk">Nama Merk</label>
                <input type="text" class="form-control" id="nama_merk"  name="nama" placeholder="masukan merk" required>
            </div>
            <div class="form-group">
                <label for="tipe">Tipe</label>
                <select class="form-control" name="tipe" id="tipe" required>
                    <option value="Entry Level">entry level</option>
                    <option value="Mid Range">mid Range</option>
                    <option value="high End">High end</option>
                    <option value="flaghsip">Flagship</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun Produksi</label>
                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="masukan tahun" required>
            </div>
            <div class="form-group">
            <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
            <input type="submit" name="submit" class="btn btn-primary mt-3" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
            </div>
            </div>
            
            

        </form>
        </div>
    </div>
    <?php include ('footer.php');?>
</body>
</html>