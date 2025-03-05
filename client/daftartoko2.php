<?php
session_start(); 
include ('../admin/koneksi.php');
if (!isset($_SESSION["user_id"])) {
    // Jika tidak ada sesi atau belum login, arahkan ke halaman login
    header("location: login.php"); // Ganti dengan halaman login kamu
    exit;
}

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
         .loginbox {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 1280px;
            height: 1142px;
            flex-shrink: 0;
            border-radius: 46px;
            background:#ADD8FF;
        }

        .loginbox2 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 1064px;
    height: 1056px;
    flex-shrink: 0;
    border-radius: 46px;
    background: #9CC4FF;
    position: relative; 
}

.loginbox3 {
    width: 846px;
    height: 902px;
    flex-shrink: 0;
    border-radius: 46px;
    background:#2B61EC;
    position: relative; 
    z-index: 1;  
   text-align: center;
   
}

 
.img-fluid {
    position: absolute;
    z-index: 2;  
left:15%;

    
}
 
</style>





<body>
    
<!-- Login -->
<!-- kalau sudah bisa,lebih baik jangan disentuh lagi aokwoakwokwa -->

<section>
  <div style="padding: 46px" class="container">
    <div class="row">
      <div class="col-12 ">
        <div class="loginbox">
               <div class="loginbox2">
            
            <div class="loginbox3">
                
            <form method="POST" action="../admin/daftartokozzz.php" style="z-index: 4; ">
<input type="hidden" name="id_owner" value="<?php echo $_SESSION['user_id']; ?>">
            
                <div class="col-6 mx-auto">
                <h2 style="color: #ffff; font-family: Poppins; font-size: 64px; font-style: normal; font-weight: 700;  width: 580px; ;"><b>Masukkan Info Toko Kamu</b></h2>
<br>
<br>    
                <div class="mb-3 mx-auto">
                  
                  <input type="text" style="width: 580px; height: 73px; border-radius: 29px;" class="form-control custom-input" name="namatoko" placeholder="Maksimal 12-30 huruf" required>
                  <br>
                  <input type="text" style="width: 580px; height: 73px; border-radius: 29px;" class="form-control custom-input" name="lokasitoko" placeholder="Lokasi" required>
                </div>
                <div class="mb-3 mx-auto" >
                  <input type="text" style="width: 588px; height: 169px; border-radius: 29px;" class="form-control custom-input" name="desktoko" placeholder="Deskripsi toko anda" required>
                </div>
</div>

                <br>
                <div class="col-4 mx-auto">
                <button style="border-radius: 56px; width: 380px; height: 79px; flex-shrink: 0; font-family: Poppins;" type="submit" class="btn btn-warning custom-btn" name=submittoko><b>Lanjut ></b></button>
</div>
<div class="col-4 mx-auto">
    <br>
                <button style="border-radius: 56px; width: 153px; height: 79px; flex-shrink: 0; font-family: Poppins;" type="submit" class="btn btn-warning custom-btn" ><b>Kembali</b></button>
</div>
                <br>
                
  
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