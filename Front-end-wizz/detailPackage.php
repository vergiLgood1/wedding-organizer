<?php
require_once('config/koneksi.php');

$id_paket = isset($_GET['id_paket']) ? mysqli_real_escape_string($koneksi, $_GET['id_paket']) : null;

$query = "SELECT * FROM detail_paket
        INNER JOIN paket ON detail_paket.id_paket = paket.id_paket
        WHERE paket.id_paket = '$id_paket'
        ";

$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi))



  ?>



<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>Wizz - Wedding Organizer</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/detailPackage.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />



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
              <li><a href="package.php">Packages</a></li>
              <li><a href="detailPackage.php" class="active">Detail Packages</a></li>
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

  <?php
  while ($data_paket = mysqli_fetch_array($result)) {


    ?>
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>
              <?php echo $data_paket['nama_paket']; ?>
            </h3>

          </div>
        </div>
      </div>
    </div>

    <div class="single-product section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="left-image">
              <img
                src="http://localhost/wedding-organizer/Front-end-wizz/assets/img/<?php echo $data_paket['img_path']; ?>"
                alt="">
            </div>
          </div>
          <div class="col-lg-6 align-self-center">
            <h4>
              <?php echo $data_paket['nama_paket']; ?>
            </h4>
            <span class="price"><em>$
                <?php echo $data_paket['harga']; ?>
              </em> $
              <?php echo $data_paket['harga']; ?>
            </span>
            <p>
              <?php echo $data_paket['description']; ?>
            </p>
            <form id="qty" action="detailPemesanan.php?id_paket=<?php echo $data_paket['id_paket']; ?>" method="post">
              <input type="hidden" name="id_paket" value="<?php echo $data_paket['id_paket']; ?>">
              <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1">
              <button type="submit"><i class="fa fa-shopping-bag"></i> Checkout</button>
            </form>




            <ul>
              <li><span>Paket ID:</span>
                <?php echo $data_paket['id_paket']; ?>
              </li>
              <li><span>Nama paket</span>
                <?php echo $data_paket['nama_paket']; ?></a>
              </li>

            </ul>
          </div>
          <div class="col-lg-12">
            <div class="sep"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="tabs-content">
              <div class="row">
                <div class="nav-wrapper ">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                        data-bs-target="#description" type="button" role="tab" aria-controls="description"
                        aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                        type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</button>
                    </li>
                  </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="description" role="tabpanel"
                    aria-labelledby="description-tab">
                    <p>
                      <?php echo $data_paket['description']; ?>
                    </p>
<br>
                    <p>
                    <?php echo $data_paket['description']; ?>
                    </p>
                  </div>
                  <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At ratione optio quo. Placeat explicabo
                      suscipit error esse maxime odit ea dicta sequi mollitia quisquam quos voluptatum, soluta iure
                      ducimus sint.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php

  }

  ?>



  <div class="section categories related-games">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Packages</h6>
            <h2>Paket lainnya</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="package.php">View All</a>
          </div>
        </div>

        <?php

        $sql = "SELECT * FROM paket
                LIMIT 5
        
        ";
        $all_paket = $koneksi->query($sql);

        while ($row = mysqli_fetch_assoc($all_paket)) {


          ?>
          <div class="col-lg col-sm-6 col-xs-12">
            <div class="item">
              <h4>
                <?php echo $row['nama_paket']; ?>
              </h4>
              <div class="thumb">
                <a href="detailPackage.php"><img src="assets/img/package.png" alt=""></a>
              </div>
            </div>
          </div>

          <?php

        }

        ?>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 WIZZ Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow"
            href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- !-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  <script src="assets/js/main.js"></script>


</body>

</html>