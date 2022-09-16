 <?php 

  session_start();
  include 'koneksi.php';
  if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = mysqli_query ($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ");
      // $hasilQuery = mysqli_query($koneksi,$query);
      $jumlahData = mysqli_num_rows($query);

      if ($jumlahData > 0 ) {
           $row = mysqli_fetch_assoc($query);
           $_SESSION['username'] = $row['username'];
           $_SESSION['password'] = $row['password'];


           header('location: dashboard.php');
       }  else {

            echo "<script>window.location='index.php';</script>";
       }
  }
  







  ?>