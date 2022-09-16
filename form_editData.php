<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title> Pencatatan investaris Kantor || Web Pendataan</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <div class="jumbotron jumbotron-fluid bg-info">
  <div class="container mt-1">
    <h1 class="display-4" style="text-align: center;" >PENCATATAN INVESTARIS BARANG</h1>
    <p class="lead" style="text-align: center;">Ini merupakan website pendataan dan pencatatan investaris barang di kantor Dinas Perindustrian dan Perdagangan.</p>
  </div>
</div>
  
  <div class="container">
    <a href="dashboard.php"><button class="btn btn-danger"> Lihat Semua Data</button></a>
    <div class="row">
      <div class="col-12">
    
  <form method="post" action="proses_editData.php">
    <?php 
      include 'koneksi.php';
      $id_barang = $_GET['id_barang'];

      $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$id_barang'") or die(mysqli_error($koneksi));
      $data = mysqli_fetch_array($query);
    ?>
    <table>
     <h3 style="text-align:center;">Form Barang Disperindag</h3>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Barang</label>
        <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
        <input type="text" class="form-control" id="nama1" name="nama_barang"    placeholder="Masukan Nama barang" required value="<?php echo $data['nama_barang']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tahun Pembelian</label>
        <input type="text" class="form-control" id="tahun1" name="Tahun_Pem"  placeholder="Masukan Tahun Pembelian" required value="<?php echo $data['Tahun_Pem']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Harga Barang</label>
        <input type="text" class="form-control" id="harga1" name="Harga_B" Placeholder="Masukan Harga Barang" required value="<?php echo $data['Harga_B']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Keadaan Barang</label>
        <input type="text" class="form-control" id="keadaan1" name="keadaan_b" placeholder="Masukan Kondisi barang Baik atau Rusak" required value="<?php echo $data['keadaan_b']; ?>">
      </div>
       <div class="form-group">
        <label for="exampleInputEmail1">Kuanitas</label>
        <input type="text" class="form-control" id="kuantitas1" name="Kuantitas_B"  placeholder="Masukan Jumlah Barang" required value="<?php echo $data['Kuantitas_B']; ?>">
      </div>
      <button type="submit" class="btn btn-primary">Ubah Data</button>
    </table>
    </form>
    </div>
    </div>
    </div>
  </div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Footer -->
  <footer class="page-footer font-small blue">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <a href="#"> Tim PKL Disperindag</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>