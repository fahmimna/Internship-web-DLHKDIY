<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_bidang'];
$nama = $_POST['nama_bidang'];
$kriteria = $_POST['kriteria'];
$alur = $_POST['alur'];
$kuota = $_POST['kuota'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query($koneksi, "update bidang set nama_bidang='$nama', kriteria='$kriteria', alur='$alur', kuota='$kuota', latitude='$latitude', longitude='$longitude' where id_bidang='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
