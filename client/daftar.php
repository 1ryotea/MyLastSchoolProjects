<?php
include ('../admin/koneksi.php');
session_start(); // Memulai sesi


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
  <div style="padding: 46px" class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="loginbox">
          <div class="loginbox2">
          <img src="../logo_revisi2/LSPOTY_D.png" class="img-fluid" alt="SponTy" style="width: 380px;
    height: 400px;">            <div class="loginbox3">

              <form method="POST"action="../admin/daftarakunzz.php">
                <h2 class="mb-4" style="text-align: center; color: #000;
text-align: center;
font-family: Poppins;
font-size: 36px;
font-style: normal;
font-weight: 800;
line-height: normal;
color:white;"><b>Daftar Sekarang !</b></h2>
                <div class="mb-3">
                  <input type="text" style="width: 414px; height: 53px; border-radius: 17px;" class="form-control custom-input" id="username" name="username" placeholder="Masukkan username Anda" required>
                </div>
                <div class="mb-3">
                  <input type="email" style="width: 414px; height: 53px; border-radius: 17px;" class="form-control custom-input" id="email" name="email" placeholder="Masukkan alamat email Anda" required>
                </div>
                <div class="mb-3">
                  <input type="password" style="width: 414px; height: 53px; border-radius: 17px;" class="form-control custom-input" id="password" name="password" placeholder="Masukkan password Anda" required>
                </div>
                <br>
                <button style="border-radius: 17px; width: 196px; height: 53px; flex-shrink: 0; font-family: Poppins;" type="submit" class="btn btn-warning custom-btn" name="daftaracc"><b>Daftar</b></button>
                <br>
                <a class="text-light"href="Login.php">Sudah Punya akun? Klik disini..</a>
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