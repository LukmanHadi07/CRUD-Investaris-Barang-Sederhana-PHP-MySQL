<?php 
include 'koneksi.php';

$id_barang = $_GET['id_barang'];
$query = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang = '$id_barang'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='dashboard.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}