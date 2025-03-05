<?php
session_start();
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
        height: 1142px;
        flex-shrink: 0;
        border-radius: 46px;
        background: rgba(128, 255, 0, 0.32);
    }
    .loginbox2{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 1064px;
        height: 1056px;
        flex-shrink: 0;
        border-radius: 46px;
        background: rgba(0, 255, 179, 0.27);
    }

    .loginbox3{
       
        width: 846px;
        height: 902px;
        flex-shrink: 0;
        border-radius: 46px;
        background: #2BECB2;
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
            <img src="../element/SponTy2.png" class="img-fluid" alt="SponTy">
            <div class="loginbox3">
                
              
                <div class="col-6 mx-auto ">
                <h2  style="width: 580px;
height: 190px;
flex-shrink: 0;
color: #000;
text-align: center;
font-family: Poppins;
font-size: 64px;
font-style: normal;
font-weight: 700;
line-height: normal;"><b> Selamat ! Toko Kamu Berhasil Dibuat!</b></h2>
<br>
<br>
                <br>
                <br>

                <br>
                <div class="col-4 mx-auto">
                <button style="border-radius: 56px; width: 380px; height: 79px; flex-shrink: 0; font-family: Poppins;" type="submit" class="btn btn-warning custom-btn" name=submittoko><b>Lanjut </b></button>
</div>
<div class="col-4 mx-auto">
    <br>
</div>
                <br>
  
             
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