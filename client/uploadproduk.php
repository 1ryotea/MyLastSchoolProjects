
<?php 
session_start();
include ('../admin/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head> <?php include '../element/navbar.php'?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">

</head>
<body style="background: linear-gradient(161deg, #FFF 3.48%, #A7AEEB 69.29%); ">

<form action="../admin/uploadprodukzzz.php" method="POST" enctype="multipart/form-data">

    <div class="container">
      <div class="row">
      <div class="col-3">
    <img id="previewImage" src="../element/Group 33.png" alt="Preview" class="img-fluid img-thumbnail" style="width:300px;height:300px;">
</div>
<div class="col">
    <div class="mb-3">
        <label for="formFile" class="form-label">Masukkan Foto Produk</label>
        <input class="form-control" type="file" id="formFile" name="foto_product" onchange="previewFile()">
    </div>
</div>
<script>
function previewFile() {
    var preview = document.getElementById('previewImage');
    var fileInput = document.getElementById('formFile').files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (fileInput) {
        reader.readAsDataURL(fileInput);
    } else {
        preview.src = "../element/Group 33.png"; // Gambar default jika tidak ada gambar yang dipilih
    }
}
</script>
    
<div class="row">
<div class="col">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Product</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_produk">
</div>
</div>
</div>

<div class="row">
<div class="col">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi_produk"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Lokasi Toko</label>
  <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="lokasi"></input>
</div>   
</div>   
</div>   
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label class="col-form-label">Rp.</label>
  </div>
  <div class="col-1">
    <input type="nominal" id="nominal" class="form-control" aria-describedby="passwordHelpInline" name="nominal">
  </div>
  <div class="col-1">
    <label for="tipe" class="form-label">Tipe Produk</label>
    <select class="form-select" id="tipe" name="tipe">
        <option value="Aksesoris">Aksesoris</option>
        <option value="Elektronik">Elektronik</option>
        <option value="Pakaian">Pakaian</option>
        <option value="Hiasan">Hiasan</option>
    </select>
</div>
 
</div>
</div>
<br>
<div class="row">
<div class="col">
<div class="d-grid gap-2">
<button class="btn btn-primary" type="submit" name="upload_barang">Upload</button>
  <button class="btn btn-secondary" type="button" onclick="window.location.href='beranda_toko.php';">Batalkan</button>
</div>
</div>   
</div>   


</div>
    </div>

    </form>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
<footer>
  <?php
  include ('../element/footer.php');
  ?>
  </footer>
</html>