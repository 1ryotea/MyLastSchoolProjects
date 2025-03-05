
<?php 
session_start();
include ('koneksi.php');
if ($_SESSION['role'] == 'user') {
header('../client/login.php');

}




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/207e6bc351.js" crossorigin="anonymous"></script>


  </head>

<style>
   h1 {
  animation: color-change 5s infinite;
}

@keyframes color-change {
  0% { color: red; }
  50% { color: green; }
  100% { color: blue; }
}
.rating {

  width : 20px;
  height : 20px;

}




p{

  font-family:'Poppins';
}

.gmbrproduk
{

height:100px;
width:100px;

}

</style>

<nav style="background-color: white;">
<a  href="../client/beranda.php" style="text-decoration: none;">
               <b> Kembali</b>
              </a> 
<h1 style="text-align:center;"><b>SELAMAT DATANG ADMIN</b></h1>
<h4 style="text-align:center;">Berikut Adalah Produk Yang Sudah Di Upload</h4>
</nav>


  <body style="background: linear-gradient(45deg, transparent 49%, #e7e5fd 49% 51%, transparent 51%) , linear-gradient(-45deg, transparent 49%, #e7e5fd 49% 51%, transparent 51%);
        background-size: 4em 4em;
        background-color: #dad9ff;
        opacity: 1">





<br>
<br>



<!-- Barang Lainnya -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_olshop";

$conn =  mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM produk";
$result = mysqli_query($conn, $sql);


?>


<section id="feed">
  
<div class="container-lg">
<button class="btn btn-primary" onclick="window.location.href='upload.php';">Tambah Produk +</button>

<button class="btn btn-danger" onclick="window.location.href='logout.php';">Log Out</button>
<br>
    <?php
    $count = 0; 
    while ($row = mysqli_fetch_assoc($result)) {
        if ($count % 6 === 0) {
            
            echo '<br> <div class="row">';
        }
    ?>
    
        <div class="col-md-2 col-6"><a href="halaman_produk.php?id=<?php echo $row['id_produk']; ?>" style="text-decoration: none;">


            <div class="card h-100" style="-webkit-box-shadow: 11.5px 7.5px 0 0.5px rgba(105, 0, 196, 0.29);
-moz-box-shadow: 11.5px 7.5px 0 0.5px rgba(105, 0, 196, 0.29);
box-shadow: 11.5px 7.5px 0 0.5px rgba(105, 0, 196, 0.29);">        <a href="../admin/hapus_produk.php?id=<?php echo $row['id_produk']; ?>"><i class="fa-solid fa-trash" style="color: #faaa;"></i></a>
                <img src="<?php echo $row["foto_produk"] ?>" class="card-img-top gmbrproduk" alt="..." style="object-fit: cover; object-position: center; height: 100%;">
                <div class="card-body">
                    <h5 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 15ch;"><?php echo $row["judul_produk"] ?></h5>
                    <p class="card-text"><h5><b>Rp.<?php echo number_format($row["harga"]) ?></b></h5></p>

                    <p class="card-text" style="color: gray;"><?php echo $row["lokasi"] ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary"><img src="../element/Star 3.png" alt="" class="rating"> 4.9 | 10k Terjual</small>
                </div>
                
            </div>
            </a>
        </div>
    <?php
        $count++;
        if ($count % 6 === 0) {
            // Akhiri baris setiap 6 data
            echo '</div>';
        }
    }
    ?>
</div>
</section>
<br>


</section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<footer>
  <?php
  include ('../element/footer.php');
  ?>
  </footer>
</html>
