<?php
session_start(); 
include ('../admin/koneksi.php');
$akun_siapa=$_SESSION['user_id'];
$toko_siapa=$_SESSION['user_id'];
$sql = "SELECT * FROM account WHERE id_acc='$akun_siapa'";
$sql2 = "SELECT * FROM toko_user WHERE id_owner='$toko_siapa'";
$data = mysqli_query($conn, $sql);
$tampil = mysqli_fetch_array($data);
$data2 = mysqli_query($conn, $sql2);
$tampil2 = mysqli_fetch_array($data2);


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
 

    <?php
  include ('../element/navbar.php');
  ?>

</head>
<body style="background:
      conic-gradient(from -60deg at 50% calc(100%/3),rgba(112, 112, 138, 0.54) 0 120deg,#0000 0),
      conic-gradient(from 120deg at 50% calc(200%/3),rgba(112, 112, 138, 0.54) 0 120deg,#0000 0),
      conic-gradient(from  60deg at calc(200%/3),rgba(112, 112, 138, 0.54) 60deg,rgba(168,168,184,0.54) 0 120deg,#0000 0),
      conic-gradient(from 180deg at calc(100%/3),rgba(224,224,230,0.54) 60deg,rgba(112, 112, 138, 0.54) 0 120deg,#0000 0),
      linear-gradient(90deg,rgba(224,224,230,0.54) calc(100%/6),rgba(168,168,184,0.54) 0 50%,
      rgba(224,224,230,0.54) 0 calc(500%/6), rgba(168,168,184,0.54) 0);
background-size: 288px 166px;


">
<br>
    <div class="container bg-light p-4" style="width:40%; border-radius:2%" >
        <div class="row">
        <h3><b>Profil Anda</b></h3>
        
    <hr>
    <div class="text-center">
  <img src="../Logo_revisi/Edulang1.png" class="rounded" alt="..." style="width:200px; border-radius:200px">
  <hr>
</div>
    <div class="col-md-8">
    <h5 class="text-dark   mt-5">Nama : <b class="text-secondary"><?php echo $tampil["username"]?></b></h5>
    <h5 class="text-dark   mt-5">Email : <b class="text-secondary"><?php echo $tampil["email"]?></h5>
    
    <h5 class="text-dark  mt-5">Nama Toko : <b> <a style="text-decoration:none" class="text-primary" href="beranda_toko.php"><?php if(isset($tampil2["nama_toko"]) && !empty($tampil2["nama_toko"])) {
    echo $tampil2["nama_toko"];
} else {
  
    echo '<a class="btn bg-primary text-light" href="daftartoko.php">Buat Toko</a>';
}?></a></b></h5>


</div>
</div>
<br>
<br>
<br>
   

    <div class="row">
    <div class="col">
<div class="text-center ">
<a href="update_akun.php?id_acc=<?php echo $tampil['id_acc']; ?>" class="btn btn-primary w-100">Edit Akun</a>


</div>
</div>
</div>
</div>


    


</body>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<footer>
<?php
  include ('../element/footer.php');?>
</footer>
</html>