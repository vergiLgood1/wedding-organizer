<<<<<<< HEAD
<?php 
include('../Admin/security.php');
?>
=======
>>>>>>> e76c49282c0f208873a8ecb9f3871bd2de452004
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">


    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/package.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



    <title>Responsive Website Travel</title>
</head>

<body>
<<<<<<< HEAD
    <header class="header" id="header">
=======
<header class="header" id="header">
>>>>>>> e76c49282c0f208873a8ecb9f3871bd2de452004
        <nav class="nav">
            <div class="nav__left">
                <a href="#" class="nav__logo">Wizz</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
<<<<<<< HEAD
                            <a href="home.html" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="about.html" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="gallery.html" class="nav__link">Gallery</a>
                        </li>
                        <li class="nav__item">
                            <a href="package.html" class="nav__link" onclick="ArahkanKePackage()">Package</a>
                        </li>
                        <li class="nav__item">
                            <a href="#testimoni" class="nav__link">Testimoni</a>
                        </li>
                        <li class="nav__item">
                            <a href="#blog" class="nav__link">Blog</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact</a>
=======
                            <a href="home.php" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="about.php" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="gallery.php" class="nav__link">Gallery</a>
                        </li>
                        <li class="nav__item">
                            <a href="package.php" class="nav__link" onclick="ArahkanKePackage()">Package</a>
                        </li>
                        <li class="nav__item">
                            <a href="home.php" class="nav__link">Testimoni</a>
                        </li>
                        <li class="nav__item">
                            <a href="home.php" class="nav__link">Blog</a>
                        </li>
                        <li class="nav__item">
                            <a href="home.php" class="nav__link">Contact</a>
>>>>>>> e76c49282c0f208873a8ecb9f3871bd2de452004
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ... (bagian lainnya tetap sama) -->

            <div class="nav__right">
                <button class="nav__button__shop" id="cartButton">
<<<<<<< HEAD
                    <i class="ri-shopping-cart-line"></i>
                </button>
                <button class="button-login">Masuk</button>
=======
                    <i class="ri-shopping-cart-line" a href="pesananSaya.php"></i>
                </button>
                <button class="button-login" a href="../Login/login.php">Masuk</button>
>>>>>>> e76c49282c0f208873a8ecb9f3871bd2de452004
            </div>

            <!-- ... (bagian lainnya tetap sama) -->


            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="packages">
            <div class="title_container">
                <h2 class="section__title">Pilih paket <br>sesuai kebutuhanmu</h2>
                <p class="package__title">Pilih, pesan dan laksanakan pernikahanmu</p>
            </div>
            <div class="product-grid">
<<<<<<< HEAD
                <?php
                // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                $query = "SELECT * FROM paket ORDER BY id ASC";
                $result = mysqli_query($connection, $query);
                //mengecek apakah ada error ketika menjalankan query
                if (!$result) {
                    die("Query Error: " . mysqli_errno($connection) .
                        " - " . mysqli_error($connection));
                }
                
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
=======
>>>>>>> e76c49282c0f208873a8ecb9f3871bd2de452004
                <!-- Product Card 1 -->
                <div class="product-card" onclick="detailPaket(1)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
<<<<<<< HEAD
                    <?php echo '<img src="../Admin/uppaket/'.$row['gambar'].'"alt="gambar">' ?>
                    </div>
                    <div class="product-details">
                        <h4><a href="#"><?php echo $row['nama'] ?></a></h4>
                        <p><?php echo $row["deskripsi"]; ?></p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small><?php echo $row["harga"] ?></div>
=======
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 1</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
>>>>>>> e76c49282c0f208873a8ecb9f3871bd2de452004
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
<<<<<<< HEAD
                <?php
                    
                }
                ?>
=======
                <!-- Product Card 2 -->
                <div class="product-card" onclick="detailPaket(2)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 2</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Product Card 3 -->
                <div class="product-card" onclick="detailPaket(3)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 3</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Product Card 4 -->
                <div class="product-card" onclick="detailPaket(4)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 4</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Product Card 5 -->
                <div class="product-card" onclick="detailPaket(5)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 5</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="product-card" onclick="detailPaket(6)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">paket 6</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="product-card" onclick="detailPaket(7)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 7</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="product-card" onclick="detailPaket(8)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 8</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="product-card" onclick="detailPaket(9)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 9</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="product-card" onclick="detailPaket(10)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 10</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="product-card" onclick="detailPaket(11)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb"  a href="detailPackage.php">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 11</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="product-card" onclick="detailPaket(12)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                        <img src="assets/img/Homepage1.png" alt="">
                    </div>
                    <div class="product-details">
                        <h4><a href="detailPackage.php">Paket 12</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small>Rp1.500.000</div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

>>>>>>> e76c49282c0f208873a8ecb9f3871bd2de452004
            </div>
        </section>

        
        
          <!--==================== SPONSORS ====================-->
          <section class="sponsor__section">
            <div class="sponsor__container container grid">
                <div class="sponsor__content">
                    <img src="assets/img/sponsors1.png" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="assets/img/sponsors2.png" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="assets/img/sponsors3.png" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="assets/img/sponsors4.png" alt="" class="sponsor__img">
                </div>
                <div class="sponsor__content">
                    <img src="assets/img/sponsors5.png" alt="" class="sponsor__img">
                </div>
            </div>
        </section>
    </main>
    </main>


    


    <!--==================== AWAL FOOTER ====================-->
    <footer class="footer__section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="footer__data">
                    <h3 class="footer__title">Travel</h3>
                    <p class="footer__description">Travel you choose the <br> destination,
                        we offer you the <br> experience.
                    </p>
                    <div>
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                            <i class="ri-youtube-fill"></i>
                        </a>
                    </div>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">About</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">About Us</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Features</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">New & Blog</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Company</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">Team</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Plan y Pricing</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Become a member</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Support</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">FAQs</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Support Center</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
                <div class="footer__terms">
                    <a href="#" class="footer__terms-link">Terms & Agreements</a>
                    <a href="#" class="footer__terms-link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!--==================== AKHIR FOOTER ====================-->

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

</body>

</html>