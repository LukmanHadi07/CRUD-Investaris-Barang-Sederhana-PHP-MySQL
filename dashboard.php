<?php 
 session_start();
 include 'koneksi.php';
 ?>
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
    <div class="row">
      <div class="col-12">
    <a href="form_tambahData.php">
      <button type="button" class="btn btn-primary">+ Tambah Data </button>
    </a>
    <a href="logout.php">
          <button type="button" class="btn btn-danger" style="text-Salign:right;">Logout</button>
          </a>
    <h3 style="text-align:center;">Data Investaris Barang Disperindag</h3>
      <div style="overflow: auto;">
        <table border="1" class="table">
            <thead class="bg-info" style="text-align:center;">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Tahun Pembelian</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Keadaan Barang</th>
                <th scope="col">Kuantitas</th>
                <th scope="col">Aksi</th>
                <!-- <th scope="col">Aksi</th>
 -->             </tr>
            </thead>
            <?php 
            include "koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM barang") or die(mysqli_error($koneksi));






            // Konfigurasi Pagination //

             // Menghitung maskimal Pagination //
             $jumlahData = 5;
             $totalData = mysqli_num_rows($query);
             $jumlahPagination = ceil($totalData / $jumlahData);
             // end Menghitung //

             // Mengecek halaman apakah bisa diproses atau tidak //
             if (isset($_GET['halaman'])) {
               $halamanAktif = $_GET['halaman']; // jika halaman sudah diproses arahkan ke halaman aktif 
             } else {
               $halamanAktif = 1; // tidak diproses maka tetap ke halaman 1 // 
             }
             // end Mengecek pemprosesan //

            // Mencari dataAwal pada Pagination //
             $dataAwal = ($halamanAktif * $jumlahData) - $jumlahData;


            // Menghitung batas maksimal paginationnya //
             $jumlahLink = 3;
             if ($halamanAktif > $jumlahLink) {
                 $start_number = $halamanAktif - $jumlahLink;
             } else {
                $start_number = 1;
             }

             if ($halamanAktif < ($jumlahPagination - $jumlahLink)) {
               $end_number = $halamanAktif + $jumlahLink;
             } else  {
               $end_number = $jumlahPagination;
             }
            // end Konfigurasi //






             $ambilData_perhalaman = mysqli_query($koneksi, "SELECT * FROM barang LIMIT $dataAwal,$jumlahData") or die(mysqli_error($koneksi));
            $nomor = 1 + $dataAwal;
            while($data = mysqli_fetch_array($ambilData_perhalaman)) { ?>

            <tbody style="text-align:center;" >
              <tr>
                <td align="center"><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['Tahun_Pem']; ?></td>
                <td><?php echo $data['Harga_B']; ?></td>
                <td><?php echo $data['keadaan_b']; ?></td>
                <td><?php echo $data['Kuantitas_B']; ?></td>
                <td>
                  <a href="form_editData.php?id_barang=<?php echo $data['id_barang']; ?>"><button class="btn btn-danger badge">Edit</button></a>
                  ||
                  <a href="proses_hapusData.php?id_barang=<?php echo $data['id_barang']; ?>" onclick="return confirm('Yakin Hapus Data')"><button class="btn btn-warning badge" >Hapus</button></a> 
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

          <!-- Menampilkan Pagination -->
              <nav aria-label="Page navigation example">
                <ul class="pagination">

                  <?php if ($halamanAktif > 1): ?>
                     <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif - 1 ?>">
                       Previous
                     </a></li>
                  <?php endif ?>
                  <?php for ($i=$start_number; $i <= $end_number ; $i++) : ?>

                    <?php if ($halamanAktif == $i) :?>
                     <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>">
                       <?= $i; ?>
                     </a></li>

                    <?php else : ?>
                       <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>">
                       <?= $i; ?>
                     </a></li>

                    <?php endif; ?>

                  <?php endfor; ?>

                   <?php if ($halamanAktif < $jumlahPagination): ?>
                     <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif + 1 ?>">
                       Next
                     </a></li>
                  <?php endif ?>
                </ul>
              </nav>
          <!-- end Pagination -->
          </div>
          </div>
           
          </div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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



    