
<?php
session_start(); 
if (!isset($_SESSION["user_id"])) {
    header("location: login.php"); 
    exit;
}
include ('../admin/koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../element/navbar.php' ?>
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
    background: #FFFF;
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
</head>

<body>
    
    <section>
        <div style="padding: 46px" class="container">
            <div class="row">        
                <div class="loginbox">
                
                    <div class="loginbox2">
                        
                        <div class="loginbox3">
                            <div class="col-6 mx-auto">
                                <h2 style="color: #ffff; font-family: Poppins; font-size: 64px; font-style: normal; font-weight: 700;  width: 580px; ;"><p><b>Ciptakan Peluangmu !</b></p></h2>
                            </div>

                            <div class="col-6 mx-auto">
                                <p><h5 style="color: #ffff  ; width: 580px; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 400; line-height: normal;">Waktu untuk Bersinar! Bergabunglah dengan EduLang dan buka toko onlinemu hari ini. Jangan lewatkan peluang untuk meraih sukses dan meraih hati pelanggan.</h5></p>
                            </div>
<br>
<br>
<br>
<br>
<div class="col-4 mx-auto">
    <button style="width: 380px; height: 99px; flex-shrink: 0; border-radius: 58px; background: #FFF;" type="button" class="btn btn-warning custom-btn" onclick="window.location.href = 'daftartoko2.php';"><h3><b>Buka Toko Gratis ></b></h3></button>
</div>


                            <div class="col-2 mx-auto">               
                                <br>
                                <button style="border-radius: 17px; width: 196px; height: 53px; flex-shrink: 0; font-family: Poppins;" type="submit" class="btn btn-warning custom-btn"><b>Kembali</b></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
    <footer>
  <?php
  include ('../element/footer.php');
  ?>
  </footer>
