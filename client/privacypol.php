<?php
session_start();
include ('../admin/koneksi.php');
if (!isset($_SESSION["user_id"])) {
    // Jika tidak ada sesi atau belum login, arahkan ke halaman login
    header("location: login.php"); 
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../element/NavbarLS.php' ?>
    <style>
        .loginbox {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 1180px;
height: 2200px;
            flex-shrink: 0;
            border-radius: 46px;
            background: rgba(128, 255, 0, 0.32);
        }

        .loginbox2 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 985px;
height: 2108px;
            flex-shrink: 0;
            border-radius: 46px;
            background: rgba(0, 255, 179, 0.27);
        }

        .loginbox3 {
            width: 780px;
height: 1999px;
            flex-shrink: 0;
            border-radius: 46px;
            background: #2BECB2;
        }
    </style>
</head>

<body>
    
    <section>
        <div style="padding: 46px" class="container">
            <div class="row">
                <div class="loginbox">
                    <div class="loginbox2">
                        <img src="../element/SponTy2.png" class="img-fluid" alt="SponTy">
                        <div class="loginbox3">
                            <div class="col-6 ">
                                <h2 style="color: #000; text-align: left; font-family: Poppins; font-size: 36pxpx; font-style: normal; font-weight: 700; line-height: normal; width: 580px; height: 190px; flex-shrink: 0;"><p><b>Kebijakan dan Syarat Pendaftaran Toko di SponTy</b></p></h2>
                            </div>

                            <!--  -->
                            




                            <!--  -->

<br>
<div class="col-4 mx-auto">
    <button style="width: 380px; height: 99px; flex-shrink: 0; border-radius: 58px; background: #FFF;" type="button" class="btn btn-warning custom-btn" onclick="window.location.href = 'daftartoko2.php';"><h3><b>Buka Toko Gratis ></b></h3></button>
</div>
<div class="col-4 mx-auto">
    <button style="width: 300px; height: 99px; flex-shrink: 0; border-radius: 58px; background: #FFF;" type="button" class="btn btn-warning custom-btn" onclick="window.location.href = 'beranda.php';"><h3><b>Kembali</b></h3></button>
</div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
  <?php
  include ('../element/footer.php');
  ?>
  </footer>
</body>
</html>
