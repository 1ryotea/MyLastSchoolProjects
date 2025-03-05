
<?php
include ('../admin/koneksi.php');
session_start(); 
$toko_siapa=$_SESSION['user_id'];
$sql = "SELECT * FROM toko_user WHERE id_owner='$toko_siapa'";
$data = mysqli_query($conn, $sql);
$tampil = mysqli_fetch_array($data);


if (!isset($_SESSION["user_id"])) {
    header("location: login.php"); 
    exit;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/207e6bc351.js" crossorigin="anonymous"></script>

    <?php include '../element/NavbarLS.php' ; ?>
</head>
<body style="background: 
      radial-gradient(farthest-side at -33.33% 50%,#0000 52%,#edf14c 54% 57%,#0000 59%) 0 calc(76px/2),
      radial-gradient(farthest-side at 50% 133.33%,#0000 52%,#edf14c 54% 57%,#0000 59%) calc(76px/2) 0,
      radial-gradient(farthest-side at 133.33% 50%,#0000 52%,#edf14c 54% 57%,#0000 59%),
      radial-gradient(farthest-side at 50% -33.33%,#0000 52%,#edf14c 54% 57%,#0000 59%),
      #8da0f1;
background-size: calc(76px/4.667) 76px,76px calc(76px/4.667);
">
<section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card" style="background-color:#8675F3; box-shadow: 33px 35px 0px 7px rgba(22,9,106,0.75);
-webkit-box-shadow: 33px 35px 0px 7px rgba(22,9,106,0.75);
-moz-box-shadow: 33px 35px 0px 7px rgba(22,9,106,0.75);">


          <div class="rounded-top text-white d-flex flex-row" style="background-image:url('../element/banner.png'); height:200px;"> 
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
              <img src="../element/pp.png"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                style="width: 150px; z-index: 1">
              <button type="button" class="btn text-light"  data-mdb-ripple-color="dark"
                style="z-index: 1; background: #3330A3;" onclick="window.location.href='edit_profile_toko.php';">
                Edit profile
              </button>
              <button type="button" class="btn text-light" data-mdb-ripple-color="dark"
                style="z-index: 1; background: #3330A3;" onclick="window.location.href='uploadproduk.php';">
                + Produk
              </button>
            </div>
            <div class="ms-3" style="margin-top: 130px; ">
              <h5 class="bg-dark text-white"><?php echo $tampil["nama_toko"]?></h5>
              <p   class="bg-dark text-white"><?php echo $tampil["alamat"]?></p>
            </div>
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1" >
              <div>
                <p class="mb-1 h5">253</p>
                <p class="small text-muted mb-0">Photos</p>
              </div>
              <div class="px-3">
                <p class="mb-1 h5">1026</p>
                <p class="small text-muted mb-0">Followers</p>
              </div>
              <div>
                <p class="mb-1 h5">478</p>
                <p class="small text-muted mb-0">Following</p>
              </div>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1 text-light">About</p>
              <div class="p-4" style=" background: #DBC5FF;">
                <p class="font-italic mb-1"><?php echo $tampil["deskripsi"]?></p>
              </div>
            </div>
            
          
           
<a href="../admin/hapus_toko.php"><i class="fa-solid fa-trash" style="color: #ffff;"></i></a>
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
<?php include '../element/footer.php';?>
</footer>
</html>