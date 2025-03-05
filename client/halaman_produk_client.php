
<?php
session_start();
include ('../admin/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include ('../element/navbar.php');?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/207e6bc351.js" crossorigin="anonymous"></script>
<br>
<style>
    p {
        font-family:Poppins;
    }
    h1 {
        font-family:Poppins;
    }
    h2 {
        font-family:Poppins;
    }
    h3 {
        font-family:Poppins;
    }
    h4{
        font-family:Poppins;
    }
    h5 {
        font-family:Poppins;
    }
</style>

</style>
<body class="padding-bottom: 20px;"> 
    
<?php
    $id_produk = $_GET['id']; 


    $query = "SELECT * FROM produk WHERE id_produk = '$id_produk'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $gambar_produk = $row['foto_produk']; 
        $judul_produk = $row['judul_produk']; 
        $nominal = $row['harga']; 
        $desk = $row['deskripsi_produk'];
        $tag = $row['tipe'];
    
        $ekstensi = pathinfo($gambar_produk, PATHINFO_EXTENSION);

    
        if (!in_array($ekstensi, array('jpg', 'jpeg', 'png'))) {
            $gambar_produk .= '.jpg';
        }
    

        
    }

    ?>
<div class="container">
    <div class="row">
    <?php echo '<div class="col-4">';
    echo '<img src="../foto_produk/' . $gambar_produk . '" class="img-thumbnail" alt="Nama Produk">';
    echo '</div>';

?>
    <div class="col-6">
        <p><h5 class="text-bodys"><?php echo $judul_produk?></h5></p>
        <p><i class="fa-solid fa-tag small text-secondary"> <?php echo $tag?></i></p>
        <p><h1><b>Rp.<?php echo number_format($nominal)?></b></h1></p>
        <p ><h5 class="text-secondary small">Terjual 1.5k</h5></p><hr class="solid">
  
 
   
<p><h5 style="color:#3D3AAE;"><b>Deskripsi</b></h5></p>
<p class="text-secondary"><?php echo $desk?></p>
<hr class="solid">
</div>
</div>
<h5 style="margin-top: 30px;">
<a href="https://api.whatsapp.com/send?phone=62895601264247&text=Halo%20Saya%20Ingin%20Bertanya.%0Aapakah%20stok%20masih%20ada." class="btn btn-success btn-md w-full d-block font-weight-bold">
<i class="fa-brands fa-whatsapp"></i>
Pesan
</a>
</h5>


</div>

</body>

<footer>
  <?php
  include ('../element/footer.php');
  ?>
  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>