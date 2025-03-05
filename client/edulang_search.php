<?php
session_start();
include ('../admin/koneksi.php');
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
 

    <?php
  include ('../element/navbar.php');
  ?>
  </head>
<!-- css -->

<style>
     .hoverBRG:hover
{
border: 10px solid #B793FF;
}
.rating {

  width : 20px;
  height : 20px;

}



.box {
    width: 176.611px;
    height: 81px;
    border-radius: 17px;
    background-color: rgba(255, 255, 255, 0.42);
    color: #000;
    font-family: Poppins;
    font-size: 24px;
    font-weight: 500;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    border: none; 
   
}



hr.solid {
  border-top: 3px solid #bbb;
}

.gg-details-more {
 box-sizing: border-box;
 position: relative;
 display: block;
 transform: scale(var(--ggs,1));
 width: 20px;
 height: 14px;
 border: 2px solid transparent
}

.gg-details-more::after,
.gg-details-more::before {
 content: "";
 display: block;
 box-sizing: border-box;
 position: absolute;
 height: 2px;
 border-radius: 3px;
 background: currentColor
}

.gg-details-more::before {
 box-shadow: 0 4px 0 0;
 top: 0;
 width: 16px
}

.gg-details-more::after {
 width: 10px;
 bottom: 0
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


  <body style="background: linear-gradient(45deg, transparent 49%, #e7e5fd 49% 51%, transparent 51%) , linear-gradient(-45deg, transparent 49%, #e7e5fd 49% 51%, transparent 51%);
        background-size: 4em 4em;
        background-color: #dad9ff;
        opacity: 1">

  
    



<br>
<br>



<!-- Barang Lainnya -->
<?php

if (isset($_GET['type'])) {
  $kategori = $_GET['type'];

$sql = "SELECT * FROM produk WHERE tipe='$kategori'";

$result = mysqli_query($conn, $sql);



} 
?>

<section id="feed">
<div style="padding: 0 80px;" >
<div class="row">
        <?php
       
        if(isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];

            // Menggunakan prepared statement untuk mencegah SQL Injection
            $sql = "SELECT * FROM produk WHERE judul_produk LIKE ?";
            $stmt = $conn->prepare($sql);
            $searchKeyword = "%{$keyword}%";
            $stmt->bind_param("s", $searchKeyword);
            $stmt->execute();
            $result = $stmt->get_result();

            while($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-2 col-6">
                <a href="halaman_produk.php?id=<?php echo $row['id_produk']; ?>" style="text-decoration: none;">
                    <div class="card h-100" style="-webkit-box-shadow: 11.5px 7.5px 0 0.5px rgba(105, 0, 196, 0.29); -moz-box-shadow: 11.5px 7.5px 0 0.5px rgba(105, 0, 196, 0.29); box-shadow: 11.5px 7.5px 0 0.5px rgba(105, 0, 196, 0.29);">
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
            }
            // Tutup statement dan koneksi database setelah selesai menggunakan
            $stmt->close();
        } 
        $conn->close();
        ?>
    </div>
    <?php
    $count = 0; // Variabel hitungan untuk menghitung setiap 6 data
    while ($row = mysqli_fetch_assoc($result)) {
        if ($count % 6 === 0) {
            // Mulai baris baru setiap 6 data
            echo '<br> <div class="row">';
        }
    ?>
    
        <div class="col-md-2 col-6"><a href="halaman_produk.php?id=<?php echo $row['id_produk']; ?>" style="text-decoration: none;">

            <div class="card h-100 hoverBRG" >
                <img src="../foto_produk/<?php echo $row["foto_produk"] ?>" class="card-img-top gmbrproduk" alt="..." style="object-fit: cover; object-position: center; height: 100%;">
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

  </div>
</section>
<br>


</section>
</body>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<footer>
  <?php
  include ('../element/footer.php');
  ?>
  </footer>
</html>
