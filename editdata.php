<?php
    include 'Connection.php';
    $query = "SELECT * FROM data_hp WHERE id = '$_GET[id]'";
    $statement = pg_query($connection,$query);
    while($data= pg_fetch_array($statement)){
        $id = $data['id'];
        $merk = $data['nama_merk'];
        $tipe = $data['tipe_hp'];
        $tahun = $data['tahun_produksi'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <?php include ('header.php');?>

<div class="container">
    <div class="card shadow mt-3" >
    <form method="post" action="editproses.php" >
        <div class="card-body" style="margin: auto;">
         <h3 class="text-center"><b>Edit Data</b></h3>
        <div class="form-group">
                
                <input type="hidden" class="form-control" id ="id" name ="id" value ="<?php echo $id; ?>" required>
            </div>
            <div class="form-group">
                <label class="mt-2mb-2" for="merk">Nama Merk</label>
                <input type="text" class="form-control" name="merk" id="merk" value="<?php echo $merk;?>"  required>
            </div>
            <div class="form-group">
                <label for="tipe">Tipe</label>
                <select class="form-control" name="tipe" id="prodi">
                    <option value="<?php echo $tipe; ?>"><?php echo $tipe; ?></option>
                    <option value="Entry Level">entry level</option>
                    <option value="Mid Range">mid Range</option>
                    <option value="high End">High end</option>
                    <option value="flaghsip">Flagship</option>
                </select>
            </div>
            <div class="form-group">
                <label class="mt-5-mb-5" for="tahun">Tahun</label>
                <input type="text" class="form-control" name="tahun" id="tahun" placeholder="masukan nama"value ="<?php echo $tahun; ?>" required>
            </div>
            
            <div class="form-group">
                <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
            <input type="submit" name="submit" class="btn btn-primary mt-3" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
            </div>
        </div>
        </form>
    </div>
       
    </div>
</div>
</div>
<?php include ('footer.php');?>
</body>
</html>