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
<div class="container">
  <div class="container p-5">
    <h2 class="text-center">CRUD DATA MAHASISWA</h2>
  </div>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">+ Tambah Data</button>
  <!-- <a href="tambah.php">+ TAMBAH MAHASISWA</a> -->
  <br>
  <br>
  <table border="1" class="table align-middle table-hover ">
    <tr style="background-color: #ffab52" class="text-center">
      <th>NO</th>
      <th class="col-2">NAMA</th>
      <th class="col-1">NRP</th>
      <th>Jenis Kelamin</th>
      <th class="col-2">Jurusan</th>
      <th class="col-1">Email</th>
      <th class="col-2">Alamat</th>
      <th class="col-1">No HP</th>
      <th class="col-2">Asal SMA</th>
      <th class="col-1">Mata Kuliah Favorit</th>
      <th class="col-1">OPSI</th>
    </tr>
    <?php
      include 'koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi,"select * from mahasiswa");
      while($d = mysqli_fetch_array($data)){
        ?>
        <tr class="table-bordered">
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['nrp']; ?></td>
          <td><?php echo $d['jenis_kelamin']; ?></td>
          <td><?php echo $d['jurusan']; ?></td>
          <td><?php echo $d['email']; ?></td>
          <td><?php echo $d['alamat']; ?></td>
          <td><?php echo $d['no_hp']; ?></td>
          <td><?php echo $d['asal_sma']; ?></td>
          <td><?php echo $d['matkul_fav']; ?></td>
          <td>
            <div class="d-flex justify-content-evenly">
              <a href="edit.php?id= <?php echo $d['id']; ?>"><i class="btn btn-warning text-white fa-solid fa-pen"></i></a>
              <a href="hapus.php?id= <?php echo $d['id']; ?>"><i class="btn btn-danger text-white fa-solid fa-trash"></i></a>
            </div>
          </td>
        </tr>
        <?php
      }
      ?>
  </table>

  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">TAMBAH DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="tambah_aksi.php" method="post">
                      <input type="text" name="nama" class="form-control mb-2" placeholder="Nama">
                        <input type="text" name="nrp" class="form-control mb-2" placeholder="NRP">
                      <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <div class="form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                          <label class="form-check-label" for="flexRadioDefault1">Laki-laki</label>
                        </div>
                        <div class="form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                          <label class="form-check-label" for="flexRadioDefault2">Perempuan</label>
                        </div>
                        </div>
                        <input type="text" name="jurusan" id="" class="form-control mb-2" placeholder="Jurusan">
                        <input type="email" name="email" id="" class="form-control mb-2" placeholder="Email">
                        <input type="text" name="alamat" id="" class="form-control mb-2" placeholder="Alamat">
                        <input type="number" name="no_hp" id="" class="form-control mb-2" placeholder="No HP">
                        <input type="text" name="asal_sma" id="" class="form-control mb-2" placeholder="Asal SMA">
                        <input type="text" name="matkul_fav" id="" class="form-control mb-2" placeholder="Mata Kuliah Favorit">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">TAMBAH</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/bedc76568f.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>