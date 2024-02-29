<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_bidang'];
$kriteria = $_POST['kriteria'];
$alur = $_POST['alur'];
$kuota = $_POST['kuota'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// menginput data ke database
mysqli_query($koneksi, "insert into bidang values('','$nama','$kriteria','$alur','$kuota','$latitude','$longitude')");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
