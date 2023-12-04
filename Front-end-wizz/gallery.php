<?php 
include('../Admin/security.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
  
    <title>Wizz - Wedding Organizer</title>

</head>

<body>
    <header class="header" id="header">
        <nav class="nav">
            <div class="nav__left">
                <a href="#" class="nav__logo"><img src="assets/img/logo.png" alt=""></a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="home.php" class="nav__link ">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="about.php" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="gallery.php" class="nav__link active-link">Gallery</a>
                        </li>
                        <li class="nav__item">
                            <a href="package.php" class="nav__link" onclick="ArahkanKePackage()">Package</a>
                        </li>
                        <li class="nav__item">
                            <a href="#testimoni" class="nav__link">Testimoni</a>
                        </li>
                        <li class="nav__item">
                            <a href="#blog" class="nav__link">Blog</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ... (bagian lainnya tetap sama) -->

            <div class="nav__right">
                <div id="userSection" class="hidden">
                    <!-- Jika pengguna sudah login, tampilkan icon profil -->
                    <div id="userProfile">
                        <img src="profile-icon.png" alt="Profile Icon">
                        <span id="username"></span>
                        <div id="dropdownMenu" class="hidden">
                            <ul>
                                <li><a href="#">Pesanan Saya</a></li>
                                <li><a href="#">Akun Saya</a></li>
                                <li><a href="#" onclick="logout()">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Tombol keranjang belanja -->
                <button class="nav__button__shop" id="cartButton">
                    <i class="ri-shopping-cart-line" onclick="pesananSaya()"></i>
                </button>

                <!-- Tombol masuk -->
                <button id="loginButton" class="button-login" onclick="loginPhp()">Masuk</button>

            </div>
            <!-- ... (bagian lainnya tetap sama) -->


            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <section class="galleryShowcase">
        <div class="containerGallery">
                <div class="rowGallery">
                    <div class="col">
                        <h1>Gallery</h1>
                        <p>Abadikan momen indah bersama pasanganmu melalui gallery pernikahan kami, di mana setiap gambar adalah kisah cinta yang dipersembahkan dalam keanggunan dan keindahan yang abadi.
                        </p>
                    </div>
                    <div class="col">
                        <div class="card card1">
                            <h5>Kevin & Andin</h5>
                            <p>18-09-2018</p>
                        </div>
                        <div class="card card2">
                            <h5>Ezra & Hanin</h5>
                            <p>21-04-2020</p>
                        </div>
                        <div class="card card3">
                            <h5>Aksara & Gizka</h5>
                            <p>11-05-2019</p>
                        </div>
                        <div class="card card4">
                            <h5>raza & grece</h5>
                            <p>30-11-2023</p>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <div class="gallery__section">
        <h2 class="gallery__tittle">Gallery Pengantin</h2>
        <span class="gallery__desc">Simpan Kenangan mu bersama kami </span>

        <div class="gallery-container" id="gallery-container">
            <!-- Placeholder images -->

            <?php 
            
            $query = "SELECT * FROM gallery ORDER BY id ASC";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="gallery-item"><?php echo '<img src="../Admin/upgallery/'.$row['gambar'].'"alt="gambar">' ?></div>
            <?php 
            }
            ?>    
            <div class="gallery-item"><img src="assets/img/photos1.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/photos2.png" alt="Image 2"></div>
            <div class="gallery-item"><img src="assets/img/photos3.png" alt="Image 3"></div>
            <div class="gallery-item"><img src="assets/img/photos4.png" alt="Image 4"></div>
            <div class="gallery-item"><img src="assets/img/photos5.png" alt="Image 5"></div>
            <div class="gallery-item"><img src="assets/img/photos6.png" alt="Image 6"></div>
            <div class="gallery-item"><img src="assets/img/photos7.png" alt="Image 7"></div>
            <div class="gallery-item"><img src="assets/img/photos8.png" alt="Image 8"></div>
            <div class="gallery-item"><img src="assets/img/photos9.png" alt="Image 9"></div>
            <div class="gallery-item"><img src="assets/img/photos10.png" alt="Image 10"></div>
            
            <div class="gallery-item"><img src="assets/img/photos12.png" alt="Image 12"></div>
            <div class="gallery-item"><img src="assets/img/photos13.png" alt="Image 13"></div>
            <div class="gallery-item"><img src="assets/img/photos14.png" alt="Image 14"></div>
            <div class="gallery-item"><img src="assets/img/photos15.png" alt="Image 15"></div>
            <div class="gallery-item"><img src="assets/img/photos16.png" alt="Image 16"></div>
            <div class="gallery-item"><img src="assets/img/photos17.png" alt="Image 17"></div>
            <div class="gallery-item"><img src="assets/img/photos18.png" alt="Image 18"></div>
            <div class="gallery-item"><img src="assets/img/photos19.png" alt="Image 19"></div>
            <div class="gallery-item"><img src="assets/img/photos20.png" alt="Image 20"></div>
            <div class="gallery-item"><img src="assets/img/photos21.png" alt="Image 21"></div>
            <div class="gallery-item"><img src="assets/img/photos22.png" alt="Image 22"></div>
            
            <div class="gallery-item"><img src="assets/img/photos22.png" alt="Image 22"></div>
            <div class="gallery-item"><img src="assets/img/photos23.png" alt="Image 23"></div>
            <div class="gallery-item"><img src="assets/img/photos24.png" alt="Image 24"></div>
            <div class="gallery-item"><img src="assets/img/photos25.png" alt="Image 25"></div>
            <div class="gallery-item"><img src="assets/img/photos26.png" alt="Image 26"></div>
            <div class="gallery-item"><img src="assets/img/photos27.png" alt="Image 27"></div>
            <div class="gallery-item"><img src="assets/img/photos28.png" alt="Image 28"></div>
            <div class="gallery-item"><img src="assets/img/photos29.png" alt="Image 29"></div>
            <div class="gallery-item"><img src="assets/img/photos30.png" alt="Image 30"></div>
            <!-- Add more items as needed -->
        </div>

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
                    <p class="footer__copy">&#169; 2023 Wizz. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

        <!--==================== AKHIR FOOTER ====================-->
    </div>
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
