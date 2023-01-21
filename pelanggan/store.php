<?php
session_start();
require_once '../helper/connection.php';

$jenis_kendala = $_POST['jenis_kendala'];
$nama = $_POST['nama'];
$jenis_perangkat = $_POST['jenis_perangkat'];
$versi_os = $_POST['versi_os'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$alamat_rumah = $_POST['alamat_rumah'];
$versi_os_i = $_POST['versi_os_i'];
$keterangan = $_POST['keterangan'];

$query = mysqli_query($connection, "insert into pelanggan (jenis_kendala, nama, jenis_perangkat, versi_os, tanggal_pesan, alamat_rumah, versi_os_i, keterangan) value('$jenis_kendala', '$nama', '$jenis_perangkat', '$versi_os', '$tanggal_pesan', '$alamat_rumah', '$versi_os_i', '$keterangan')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}