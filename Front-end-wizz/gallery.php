<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/package.css">
    <title>Gallery</title>

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

    <div class="gallery__section">
        <h2 class="gallery__tittle">Gallery Pengantin</h2>
        <span class="gallery__desc">Simpan Kenangan mu bersama kami </span>

        <div class="gallery-container" id="gallery-container">
            <!-- Placeholder images -->
            <div class="gallery-item"><img src="assets/img/about1.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/about2.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/BNP1.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/gallery4.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/blog-3.jpg" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/gallery2.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/blog-2.jpg" alt="Image 2"></div>
            <div class="gallery-item"><img src="assets/img/blog-4.jpg" alt="Image 3"></div>
            <div class="gallery-item"><img src="assets/img/about1.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/banner-6.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/about2.png" alt="Image 2"></div>
            <div class="gallery-item"><img src="assets/img/gallery5.png" alt="Image 3"></div>
            <div class="gallery-item"><img src="assets/img/about1.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/pengantin5.png" alt="Image 1"></div>
            <div class="gallery-item"><img src="assets/img/blog-4.jpg" alt="Image 2"></div>
            <div class="gallery-item"><img src="assets/img/gallery2.png" alt="Image 3"></div>
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
                    <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

        <!--==================== AKHIR FOOTER ====================-->
    </div>

    <script src="masonry.pkgd.min.js"></script>
    <script src="main.js"></script>

</body>

</html>

<script>
    // Inisialisasi Masonry setelah halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
        var galleryContainer = document.getElementById('gallery-container');
        var masonry = new Masonry(galleryContainer, {
            itemSelector: '.gallery-item',
            columnWidth: '.gallery-item',
            percentPosition: true
        });
    });
</script>