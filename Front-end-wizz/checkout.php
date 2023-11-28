
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizz - Wedding Organizer</title>
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Add this in the head section of your HTML -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


</head>

<body>
    <header class="header" id="header">
        <nav class="nav">
            <div class="nav__left">
                <a href="#" class="nav__logo"><img src="assets/img/logo.png" alt="" onclick="home()"></a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="home.php" class="nav__link" onclick="home()">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="about.php" class="nav__link" onclick="about()">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="gallery.php" class="nav__link" onclick="gallery()">Gallery</a>
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
                <button class="nav__button__shop" id="cartButton">
                    <i class="ri-shopping-cart-line"></i>
                </button>
                <button class="button-login">Masuk</button>
            </div>

            <!-- ... (bagian lainnya tetap sama) -->


            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>
    <main>


        <!--==================== PACKAGES DETAILS ====================-->
          <section class="sectionPackageDetail">
          <div class="small-container detailPackage">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cartInfo">
                        <img src="assets/img/paket4.png" alt="Paket 1">
                        <div>
                            <p>Package 1</p>
                            <small>Price: Rp. 1.000.000</small>
                            <br>
                          
                        </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>Rp. 1.000.000</td>
                </tr>
            
               
            </table>

            <div class="totalPrice">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>Rp. 1.000.000</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rp. 100.000</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>Rp. 1.100.000</td>
                    </tr>
                    <button class="checkoutBtn" onclick="detailPemesanan()">Checkout</button>
                </table>
            </div>
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






    <!--==================== AWAL FOOTER ====================-->
    <section>


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
    </section>

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

    <!-- Tambahkan script Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

</html>