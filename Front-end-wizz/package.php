<?php


require_once('config/koneksi.php');

$sql = "SELECT * FROM paket";
$all_paket = $koneksi->query($sql);



?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Wizz - Wedding Organizer</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/detailPackage.css">

    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>



    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/img/WIZZARD.svg" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="home.php">Home</a></li>
                      <li><a href="package.php" class="active">Packages</a></li>
                      <li><a href="detailPackage.php">Detail Packages</a></li>
                      <li><a href="login.php">Log In</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Packages</h3>

        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Silver</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Gold</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Express</a>
        </li>
      </ul>
      <div class="row trending-box">
        <?php
           while($row = mysqli_fetch_assoc($all_paket)){
            
           
        ?>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
          <div class="item">
            <div class="thumb">
            <a href="detailPackage.php?id_paket=<?php echo $row["id_paket"]; ?>"><img src="http://localhost/wedding-organizer/Front-end-wizz/assets/img/<?php echo $row["img_path"]; ?>" alt="">
</a>
              <span class="price"><em>$<?php echo $row["harga"];?></em>$<?php echo $row["harga"];?></span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4><?php echo $row["nama_paket"];?></h4>
              <a href="detailPackage.php?id_paket=<?php echo $row["id_paket"]; ?>"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <?php
           }
        ?>
        <!-- <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str">
          <div class="item">
            <div class="thumb">
              <a href="detailPackage.php"><img src="assets/img/package2.png" alt=""></a>
              <span class="price"><em>$32</em>$22</span>
            </div>
            <div class="down-content">
              <span class="category">Paket</span>
              <h4>Silver Package</h4>
              <a href="detailPackage.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
      </div> -->
        <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
      <p>Copyright © 2023 WIZZ Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="" target="_blank"></a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/main.js"></script>

  </body>
</html>