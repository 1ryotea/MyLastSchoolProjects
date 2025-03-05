  <?php
  session_start();
include ('../admin/koneksi.php');

  ?>

<!doctype html>
<html lang="en">
  <head id='top'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
 

    <?php
  include ('../element/navbar.php');
  ?>
  </head>
  <script>

document.addEventListener("DOMContentLoaded", function() {
    // Atur posisi scroll ke elemen dengan ID "top"
    window.scrollTo(0, document.getElementById("top").offsetTop);
});
</script>

<style>
  .hoverBRG:hover
{
border: 10px solid #B793FF;
}

  @keyframes slideInFromLeft {
      0% {
          transform: translateY(100%);
          opacity: 0;
      }
      100% {
          transform: translateY(0);
          opacity: 1;
      }
  }

  .card.animated {
      animation: slideInFromLeft 0.5s ease forwards;
  }

.rating {

  width : 20px;
  height : 20px;

}



.box {
    width: 250px;
    height: 50px;
    background: #0456bf;
    background: -webkit-linear-gradient(135deg, #0456bf 0%, #1583c2 50%, #0b4dbf 100%);
    background: linear-gradient(135deg, #0456bf 0%, #1583c2 50%, #0b4dbf 100%);
    font-family: Poppins;
    font-size: 24px;
    font-weight: 500;
    text-align: center;
    float: left;
    text-decoration: none;
    display: flex; 
    justify-content: center; 
    align-items: center; 
    transition: 0.2s;
    
}
.box:hover {
  width: 280px;
  height: 80px;
  
}



hr.solid {
  border-top: 3px solid #bbb;
}

.bgp {
  background-image : linear-gradient(180deg, rgba(255, 255, 255, 0.51) 0%, rgba(255, 255, 255, 0.00) 100%);
  width: 100%;
  height: 500px;
  border-radius: 49px;
  -webkit-backdrop-filter: blur(5px);
backdrop-filter: blur(5px);


}

.bgpb {   
  background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 0%, rgba(255, 255, 255, 0.51) 100%);
  width: 100%;
  height: 600px;
  border-radius: 49px;
  -webkit-backdrop-filter: blur(5px);
backdrop-filter: blur(5px);
 
}
p{

  font-family:'Poppins';
}

.gmbrproduk
{

height:100px;
width:100px;

}
@keyframes pop {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

.box.pop {
    animation: pop 1s; /* 1s adalah durasi animasi */
}
.bg {
    /* Background style seperti yang telah kamu berikan */
    background-image: radial-gradient(#ffffff 2px, transparent 2px);
    background-size: 57px 57px;
    background-color: #3d3aae;
    z-index: -4;

    /* Animasi */
    animation: moveDots 50s linear infinite; /* Gerakan akan berlangsung selama 8 detik, menggunakan animasi linear, dan berulang tanpa henti */
}

@keyframes moveDots {
    0% {
        background-position: 0 0; /* Titik-titik pada posisi awal (0px horizontal, 0px vertikal) */
    }
    100% {
        background-position: 100% 0; /* Titik-titik pada posisi akhir (100% horizontal, 0px vertikal) */
    }
}



</style>


  <body style="
        background-size: 4em 4em;
        background-color: #FFFF;
        opacity: 1;">

    <!--CARAOUSELLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL -->
    <section id="carausel">
      <div class="bg" style="background-image: radial-gradient(#ffffff 2px, transparent 2px);
background-size: 57px 57px;
background-color: #3d3aae; z-index:-4;" >


    <div id="carouselExampleAutoplaying" class="carousel slide container " data-bs-ride="carousel" style="z-index:2; position:relative; top:20px;">
  <div class="carousel-inner" style="border: 9px solid #1C6EA4; border-radius:30px;">
    <div class="carousel-item active">
      <img src="../caraousel/banner1.jpg" class="d-block w-100" alt="banner1" >
    </div>
    <div class="carousel-item">
      <img src="../caraousel/banner2.jpg" class="d-block w-100" alt="banner2" >
    </div>
    <div class="carousel-item">
      <img src="../caraousel/banner3.jpg" class="d-block w-100" alt="banner3" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="z-index:2; position:relative; right:52%; width: 0;
height: 0;
border-style: solid;
border-width: 32.5px 50px 32.5px 0;
border-color: transparent #ffffff transparent transparent;"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="z-index:2; position:relative; left:52%; width: 0;
height: 0;
border-style: solid;
border-width: 32.5px 0 32.5px 50px;
border-color: transparent transparent transparent #ffffff;"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>

</section>
</div>
    



  <section id="menu"style="background-color: #2a278a;">
  <script>
   window.onload = function() {
    var buttons = document.querySelectorAll('.box');

    var delay = 500;  
    var duration = 1300;  
    var interval = duration / buttons.length;  

    function playAnimation() {
        buttons.forEach(function(button, index) {
            setTimeout(function() {
                button.classList.add('pop');

                setTimeout(function() {
                    button.classList.remove('pop');  
                }, 1000); 
            }, delay + index * interval);  
        });
    }

    playAnimation();  
};


</script>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
            <a class="box" href="edulang_search.php?type=Elektronik">
    
    <p class="text-light" style="margin-top: 15px ;" >Elektronik</p>
</a>

            </div>
            <div class="col-md-3 col-6">
                <a class="box" href="edulang_search.php?type=Aksesoris">
                    <p class="text-light" style="margin-top: 15px;">Aksesoris</p>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a class="box" href="edulang_search.php?type=Pakaian">
                    <p class="text-light" style="margin-top: 15px;">Pakaian</p>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a class="box" href="edulang_search.php?type=Hiasan">
                    <p class="text-light" style="margin-top: 15px;">Hiasan</p>
                </a>
            </div>
        </div>
        <br>
        <br>
        
        <br>
       
    </div>
</section>

<!-- Barang Lainnya -->
<?php
$sql = "SELECT * FROM produk";
$result = mysqli_query($conn, $sql);


?>


<section id="feed" style="background: #91b4ff;
background: -webkit-linear-gradient(4deg, #91b4ff 0%, #3330a3 100%);
background: linear-gradient(4deg, #91b4ff 0%, #3330a3 100%); ">
  <script>window.addEventListener('scroll', function() {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        const cardTop = card.offsetTop;
        const scrollPosition = window.scrollY;
        const windowHeight = window.innerHeight;
        
        if (cardTop < scrollPosition + windowHeight) {
            card.classList.add('animated');
        }
    });
});
</script>
<div style="padding: 0 80px;" >
    <?php
    $count = 0; 
    while ($row = mysqli_fetch_assoc($result)) {
        if ($count % 6 === 0) {
            
            echo '<br> <div class="row">';
        }
    ?>
    
        <div class="col-md-2 col-6 " ><a href="halaman_produk.php?id=<?php echo $row['id_produk']; ?>" style="text-decoration: none;">

            <div class="card h-100 hoverBRG" >
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
