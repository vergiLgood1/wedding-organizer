<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">


    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Wizz</title>

</head>

<body>
    <section class="header__section">
        <div class="banner">
            <header class="header" id="header">
                <nav class="nav">
                    <div class="nav__left">
                        <a href="#" class="nav__logo">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                        <div class="nav__menu" id="nav-menu">
                            <ul class="nav__list">
                                <li class="nav__item">
                                    <a href="home.php" class="nav__link">Home</a>
                                </li>
                                <li class="nav__item">
                                    <a href="about.php" class="nav__link active-link">About</a>
                                </li>
                                <li class="nav__item">
                                    <a href="gallery.php" class="nav__link">Gallery</a>
                                </li>
                                <li class="nav__item">
                                    <a href="package.php" class="nav__link" onclick="ArahkanKePackage()">Package</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#testimoni" class="nav__link">Testimoni</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#contact" class="nav__link">Contact</a>
                                </li>
                                <li class="nav__item">
                                    <a href="#blog" class="nav__link">Blog</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <!-- ... (bagian lainnya tetap sama) -->

                    <div class="nav__right">
                        <div id="userSection" class="hidden">
                            <!-- Jika pengguna sudah login, tampilkan icon profil -->
                            <div id="userProfile">
                                <img src="assets/img/Profile.svg" alt="Profile Icon">
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
            <section class="showcaseImg">
                <div class="containerShowcase">
                    <div class="contentShowcase">
                        <section class="showcaseImg">
                            <div class="containerShowcase">
                                <div class="contentShowcase">
                                    <div class="imageWithCaption">
                                        <img src="assets/img/Showcase2.png" alt="">
                                        <span class="showcaseTittle">Gift</span>
                                    </div>
                                    <div class="imageWithCaption">
                                        <img src="assets/img/Showcase7.png" alt="">
                                        <span class="showcaseTittle">Dress</span>
                                    </div>
                                    <div class="imageWithCaption">
                                        <img src="assets/img/Showcase5.png" alt="">
                                        <span class="showcaseTittle">Photograph</span>
                                    </div>
                                    <div class="imageWithCaption">
                                        <img src="assets/img/Showcase8.png" alt="">
                                        <span class="showcaseTittle">Flower</span>
                                    </div>
                                    <div class="imageWithCaption">
                                        <img src="assets/img/Showcase1.png" alt="">
                                        <span class="showcaseTittle">Venue</span>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>

                </div>
            </section>
        </div>
        </div>
    </section>

    <div class="contentNav">
        <h1 class="contentTittle">GET TO KNOW ABOUT US</h1>

        <p class="contentDesc">
            Lorem ipsum, dolor sit amet consectetur <br> adipisicing elit. Labore,
        </p>
    </div>
    <div class="logoWizz">
        <img src="assets/img/WIZZ.png" alt="" class="logo" onclick="home()">
    </div>

    <section>

        <div class="banner__footer">
            <div class="container__banner__footer">
                <p class="text__banner">Buat akun untuk memulai petualangan mu</p>
                <a href="" class="buttonBanner" onclick="loginPhp()">Daftar gratis</a>
            </div>
    </section>

    <section>
        <div class="headerAboutUs">
            <div class="containerHeaderUs">

            </div>
        </div>
    </section>


    <div class="aboutTittle">
        <h1>About Us</h1>
    </div>

    <section class="aboutUs">
        <div class="mainAbout">
            <img src="assets/img/About5.png" alt="">
            <div class="all-text">
                <h4 class="aboutHeader4">Wizz</h4>
                <h1 class="aboutHeader1">A Place To Make Your Dreams Wedding</h1>
                <p class="aboutDesc">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod dignissimos dolor assumenda? Ea
                    obcaecati quisquam quo non a, commodi itaque delectus saepe repellendus voluptates, earum
                    dignissimos consequuntur aspernatur dolorum ratione!
                </p>
                <div class="buttonAbout">
                    <button class="btn1" type="button">Our Team</button>
                    <button class="btn2" type="button">Contact Us</button>
                </div>
            </div>
        </div>

    </section>

    <section class="Services">
        <div class="ourService">
            <div class="containerOurService">
                <h1>Our Services</h1>
                <div class="rowService">
                    <div class="cardService">
                        <img src="assets/img/gift.svg" alt="">
                        <h2>Gift</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="cardService">
                        <img src="assets/img/make up.svg" alt="">
                        <h2>Make Up</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="cardService">
                        <img src="assets/img/camera.svg" alt="">
                        <h2>Photograph</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="cardService">
                        <img src="assets/img/flower.svg" alt="">
                        <h2>Flower</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="cardService">
                        <img src="assets/img/venue.svg" alt="">
                        <h2>Decoration</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="cardService">
                        <img src="assets/img/dress.svg" alt="">
                        <h2>Wedding Dress</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================== AWAL KONTAK ====================-->
    <section id="contact" class="contactUs">
        <h2 class="section__title">Berbincang dengan kami</h2>
        <p class="section__desc">Untuk konsultasi dan informasi lebih lanjut</p>
        <div class="background">
            <div class="container__contact">
                <div class="screen">
                    <div class="screen-header">
                        <div class="screen-header-left">
                        </div>
                        <div class="screen-header-right">
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                        </div>
                    </div>
                    <div class="screen-body">
                        <div class="screen-body-item left">
                            <div class="app-title">
                                <span>Hubungi</span>
                                <span>Kami</span>
                            </div>
                            <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
                        </div>
                        <div class="screen-body-item">
                            <div class="app-form">
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="NAMA" value="">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="EMAIL">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="NOMOR KONTAK">
                                </div>
                                <div class="app-form-group message">
                                    <input class="app-form-control" placeholder="PESAN">
                                </div>
                                <div class="app-form-group buttons">
                                    <button class="app-form-button">BATAL</button>
                                    <button class="app-form-button">KIRIM</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--==================== AKHIR KONTAK ====================-->

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
    <script src="https://kit.fontawesome.com/a6202803d5.js" crossorigin="anonymous"></script>
</body>

</html>