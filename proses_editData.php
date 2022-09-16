<?php  
include 'koneksi.php';

$id_barang      =   $_POST['id_barang'];
$nama_barang 	= 	$_POST['nama_barang'];
$Tahun_Pem 		= 	$_POST['Tahun_Pem'];
$Harga_B 		= 	$_POST['Harga_B'];
$keadaan_b 		= 	$_POST['keadaan_b'];
$Kuantitas_B 	= 	$_POST['Kuantitas_B'];

$query = mysqli_query($koneksi , "UPDATE  barang SET nama_barang = '$nama_barang',Tahun_Pem = '$Tahun_Pem' , Harga_B = '$Harga_B' ,keadaan_b = '$keadaan_b' ,Kuantitas_B = '$Kuantitas_B' WHERE id_barang = '$id_barang'") or die(mysql_error($koneksi));

if ($query) {
	echo "<script>alert('Data berhasil diedit!'); window.location='dashboard.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}