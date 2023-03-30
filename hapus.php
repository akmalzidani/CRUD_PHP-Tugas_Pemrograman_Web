<?php

//  connect database
include 'koneksi.php';

//  tangkap data yang dikirim dari form
$id = $_GET['id'];

//  hapus data ke database
mysqli_query($koneksi,"delete from mahasiswa where id='$id'");

// mengarahkan kembali ke page index.php
header("location:index.php");

?>