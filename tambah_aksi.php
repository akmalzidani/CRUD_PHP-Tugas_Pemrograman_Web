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

//  input data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nrp','$jenis_kelamin','$jurusan','$email','$alamat','$no_hp','$asal_sma','$matkul_fav')");

// mengarahkan kembali ke page index.php
header("location:index.php");

?>