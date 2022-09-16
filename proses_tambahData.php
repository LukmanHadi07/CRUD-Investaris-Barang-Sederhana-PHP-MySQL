<?php  
include 'koneksi.php';

$nama_barang 	= 	$_POST['nama_barang'];
$Tahun_Pem 		= 	$_POST['Tahun_Pem'];
$Harga_B 		= 	$_POST['Harga_B'];
$keadaan_b 		= 	$_POST['keadaan_b'];
$Kuantitas_B 	= 	$_POST['Kuantitas_B'];

$query = mysqli_query($koneksi , "INSERT INTO barang(nama_barang,Tahun_Pem,Harga_B,keadaan_b,Kuantitas_B) VALUES('$nama_barang','$Tahun_Pem','$Harga_B','$keadaan_b','$Kuantitas_B')") or die(mysql_error($koneksi));

if ($query) {
	echo "<script>alert('Data berhasil ditambahkan!'); window.location='dashboard.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
