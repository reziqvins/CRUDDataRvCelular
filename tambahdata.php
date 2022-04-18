<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah</title>
</head>
<body>
    <div class="container">
        <div class="card mt-3">
        <form method="post" action="tambahproses.php" >
            <div class="card-body shadow" style="margin:auto;" >
                <h3 class="text-center"><b>Tambah Data</b></h3>
            <div class="form-group">
                <label for="nama_merk">nama merk</label>
                <input type="text" class="form-control" id="nama_merk"  name="nama" placeholder="masukan merk" required>
            </div>
            <div class="form-group">
                <label for="tipe">tipe</label>
                <select class="form-control" name="tipe" id="tipe" required>
                    <option value="entry">entry level</option>
                    <option value="mid">mid level</option>
                    <option value="flagship">flaghsip</option>
                    <option value="Komputer">Komputer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tahun">tahun</label>
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
</body>
</html>