<?php
session_start(); // Memulai sesi
include ('../admin/koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari form login
  $username = $_POST["usrnm"];
  $password = $_POST["psswrd"];

  // Lakukan query ke database untuk memeriksa data login
  $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
   
      $row = mysqli_fetch_array($result);
      $_SESSION["user_id"] = $row["id_acc"];
      $_SESSION["username"] = $row["username"];
      $_SESSION["role"] = $row["role"];
      $_SESSION['logged_in'] = true;


      if ($_SESSION['role'] == 'admin') {
      
          header("location: ../admin/index.php");
      } else {
          
          header("location: beranda.php");
      }
      
  } 
  else {
    // Jika akun tidak ditemukan atau password salah
    $error_message = "Username atau password salah. Silakan coba lagi.";

    // Menampilkan alert menggunakan JavaScript
    echo '<script>
            alert("' . $error_message . '");
            window.location.href = "login.php"; // Redirect ke halaman login
          </script>';
}
}

include ('../admin/koneksi.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../element/NavbarLS.php'?>
    <br>
</head>

<style>
    .loginbox
    {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1280px;
        height: 850px;
        flex-shrink: 0;
        border-radius: 46px;
        background: #ADD8FF;
    }
    .loginbox2{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1064px;
        height: 800px;
        flex-shrink: 0;
        border-radius: 46px;
        background: #FFFF;
    }

    .loginbox3{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 550px;
        height: 750px;
        flex-shrink: 0;
        border-radius: 46px;
        background:#2B61EC;
    }  

 
</style>





<body style="background-image: repeating-linear-gradient(to right, rgba(71, 74, 255, 0.14), rgba(71, 74, 255, 0.14) 9px, transparent 9px, transparent);
background-size: 38px 38px;
background-color: #ffffff;">
    
<!-- Login -->
<!-- kalau sudah bisa,lebih baik jangan disentuh lagi aokwoakwokwa -->

<section>
  <div style="padding:46px"class="container ">
    <div class="row">
      <div class="col-12 col-md-6 ">
        <div class="loginbox">
          <div class="loginbox2">
          <img src="../logo_revisi2/LSPOTY_D.png" class="img-fluid" alt="SponTy" style="width: 380px;
    height: 390px;">            <div class="loginbox3">


              <form method="POST" >
                <h2 class="mb-4" style="text-align:center; font-family:Poppins;color:white;"> <b>Silakan Login</b></h2>
                <div class="mb-3">
                  
           
                  <input type="text" style="width: 414px;
                                            height: 53px;
                                            border-radius: 17px;" class="form-control custom-input" id="username" name="usrnm"placeholder="Masukkan username Anda" required>
                </div>
                <div class="mb-3">

                  <input type="password" class="form-control custom-input" style="width: 414px;
                                            height: 53px;
                border-radius: 17px;" name="psswrd" id="password" placeholder="Masukkan password Anda"  required>
                </div>
                <br>
                <button style="
                border-radius: 17px;
width: 196px;
height: 53px;
flex-shrink: 0; font-family:Poppins;
" name="login" type="submit" class="btn btn-warning custom-btn"><b>Login</b></button>
<br>

<a class="text-light" href="daftar.php">Belum Punya Akun? Klik disini..</a>
</form>


              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




</body>

<br>
<br>
<br>
<footer>
  <?php
  include ('../element/footer.php');
  ?>
  </footer>
</html>