<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD PHP dan MySQLi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div style="height:100vh;" class="d-flex justify-content-center align-items-center" >
<div style="width:50%; height:90vh"  class="container p-3 card card-box rounded shadow">
  <h3 class="text-center p-3">EDIT DATA MAHASISWA</h3>
  <?php
  include 'koneksi.php';
  $id = $_GET['id'];
  $data = mysqli_query($koneksi, "select * from mahasiswa where id='$id'");
  while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="update.php">
      <table class="table align-middle table-hover">
        <tr>
          <td>Nama</td>
          <td>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input class="form-control" type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
          </tr>
          <tr>  
            <td>NRP</td>
            <td>
              <input class="form-control" type="number" name="nrp" value="<?php echo $d['nrp']; ?>"></td>
            </tr>
            <tr>
              <td>Jurusan</td>
              <td>
                <input class="form-control" type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
              </td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td><div class="form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($d['jenis_kelamin'] == "Laki-laki") ? 'checked':''?>>
                          <label class="form-check-label" for="flexRadioDefault1">Laki-laki</label>
                   </div>
                   <div class="form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?= ($d['jenis_kelamin'] == "Perempuan") ? 'checked':''?>>
                          <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
                        </div>
            </td>
            <tr>
              <td>Email</td>
              <td><input class="form-control" type="text" name="email" value="<?php echo $d['email']; ?>"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td><input class="form-control" type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
            </tr>
            <tr>
              <td>No HP</td>
              <td><input class="form-control" type="number" name="no_hp" value="<?php echo $d['no_hp']; ?>"></td>
            </tr>
            <tr>
              <td>Asal SMA</td>
              <td><input class="form-control" type="text" name="asal_sma" value="<?php echo $d['asal_sma']; ?>"></td>
            </tr>
            <tr>
              <td>Mata Kuliah Favorit</td>
              <td><input class="form-control" type="text" name="matkul_fav" value="<?php echo $d['matkul_fav']; ?>"></td>
            </tr>
          </table>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <input class="btn btn-primary" type="submit" value="SIMPAN"> <a class="btn btn-danger"href="index.php">KEMBALI</a></td>
          </div>
        </form>
    <?php
  }
  ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
</div>
</body>
</html>