<?php

//  connect database
include 'koneksi.php';

//  tangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$asal_sma = $_POST['asal_sma'];
$matkul_fav = $_POST['matkul_fav'];

//  update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nrp='$nrp', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', email='$email', alamat='$alamat', no_hp='$no_hp', asal_sma='$asal_sma', matkul_fav='$matkul_fav' where id='$id'");

// mengarahkan kembali ke page index.php
header("location:index.php");

?>