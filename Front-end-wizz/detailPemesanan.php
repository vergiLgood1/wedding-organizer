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
    <link rel="stylesheet" href="assets/css/checkout.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Add this in the head section of your HTML -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-rMPQNlc5ZZ1FjV3JQVg3aL6NZF5JHI9v4o7cU+6GGUAYQ73F1eRSTrCJ4zZU5m3h" crossorigin="anonymous">


</head>

<body>
    <section>
        <header>
            <div class="container">
                <div class="navigation">

                    <div class="logo">
                        <i class="icon icon-basket"><img src="assets/img/Wizz2.png" alt=""></i>
                    </div>
                    <div class="secure">
                        <i class="icon icon-shield"></i>
                        <span>Secure Checkout</span>

                    </div>
                </div>
                <div class="notification">
                    Complete Your Purchase
                </div>
            </div>
        </header>
        <section class="content">

            <div class="container">

            </div>
            <div class="details shadow">
                <div class="details__item">

                    <div class="item__image">
                        <img class="iphone" src="http://localhost/wedding-organizer/Front-end-wizz/assets/img/<?php echo $data_paket["img_path"]; ?>" alt="">
                    </div>
                    <div class="item__details">
                        <div class="item__title">

                        </div>
                        <div class="item__price">

                        </div>
                        <div class="item__quantity">

                        </div>
                        <div class="item__description">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>

                        </div>

                    </div>
                </div>

            </div>
            <div class="checkout-container">
                <!-- Sidebar (Alamat Pengiriman) -->
                <div class="sidebar shipping-address-sidebar">
                    <div class="section-heading">Alamat Pengiriman</div>
                    <div class="shipping-address-container">
                        <div class="receiver-info">
                            <b class="receiver-name"></b>
                            <span class="address-title"></span>
                            <div class="address-label"></div>
                        </div>
                        <div class="phone-number"></div>
                        <div class="address-description">
                            <div class="address-desc"></div>
                            <div class="address-city"></div>
                        </div>
                        <div class="footer-buttons-container">
                            <button type="button" class="open-modal-address-button" data-testid="btnOpenModalAddress"
                                onclick="openAddressModal()">
                                <span>Masukkan alamat</span>
                            </button>
                        </div>
                    </div>
                    <!-- Popup Form -->
                    <div id="addressModal" class="modal">
                        <div class="modal-content">
                            <div class="modal-heading">Alamat Baru</div>
                            <div class="modal-description">Untuk membuat pesanan, silakan tambahkan alamat pengiriman
                            </div>
                            <form>
                                <div class="form-group">
                                    <input type="text" id="fullName" placeholder="Nama Lengkap" maxlength="30"
                                        autocomplete="name">
                                </div>
                                <div class="form-group">

                                    <input type="text" id="phoneNumber" placeholder="Nomor Telepon"
                                        autocomplete="user-address-phone">
                                </div>
                                <div class="form-group">

                                    <input type="text" id="province" placeholder="Provinsi, Kota, Kecamatan, Kode pos">
                                </div>

                                <div class="form-group">

                                    <textarea id="streetAddress" placeholder="Nama Jalan, Gedung, No. Rumah" rows="2"
                                        maxlength="160" autocomplete="user-street-address"></textarea>
                                </div>
                                <div class="form-group">

                                    <input type="text" id="otherDetails"
                                        placeholder="Detail Lainnya (Cth: Blok / Unit No., Patokan)" maxlength="20">
                                </div>
                                <div class="form-group">
                                    <label>Tandai Sebagai:</label>
                                    <div class="radio-group">
                                        <div class="radio-option" role="radio" aria-checked="true" aria-disabled="false"
                                            tabindex="0">
                                            <span>Rumah</span>
                                        </div>
                                        <div class="radio-option" role="radio" aria-checked="false"
                                            aria-disabled="false" tabindex="0">
                                            <span>Kantor</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="button-container">
                                    <button type="button" class="cancel-button" onclick="closeAddressModal()">Nanti
                                        Saja</button>
                                    <button type="button" class="confirm-button"
                                        onclick="copyToShippingAddress()">OK</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Section Tanggal Penggunaan -->
                <div class="usage-date-card">
                    <div class="card-header">
                        <h2 class="header-date">Pilih Tanggal Penggunaan</h2>
                    </div>
                    <div class="card-content">
                        <label for="usage-date">Tanggal Penggunaan:</label>
                        <input type="date" id="usageDate" name="usage-date" class="date-picker"
                            onchange="disableSelectedDate()">
                    </div>
                </div>

                <!-- Section Ringkasan Belanja -->
                <div class="checkout-summary-container">
                    <div class="summary-heading">Ringkasan Belanja</div>
                    <div class="shopping-details-wrapper">
                        <div class="summary-detail-row">
                            <div class="detail-label">Total Harga</div>
                            <div class="detail-value"></div>
                        </div>
                        <div class="summary-detail-row">
                            <div class="detail-label">Total Ongkos Kirim</div>
                            <div class="detail-value"></div>
                        </div>
                        <div class="summary-detail-row">
                            <div class="detail-label">Asuransi Pengiriman</div>
                            <div class="detail-value"></div>
                        </div>
                        <div class="summary-detail-row">
                            <div class="detail-label">Biaya Proteksi Produk</div>
                            <div class="detail-value"></div>
                        </div>
                        <div class="summary-detail-row">
                            <div class="detail-label">Biaya Jasa Aplikasi</div>
                            <div class="detail-value" data-testid="Biaya Jasa Aplikasi-slashed"></div>
                            <div class="detail-value-highlight">Rp1.000</div>
                        </div>
                    </div>
                    <div class="summary-total-row">
                        <div class="total-label">Total Belanja</div>
                        <div class="total-value"></div>
                    </div>
                    <div class="insurance-message">
                        Pastikan untuk membayar dp terlebih dahulu.<span class="insurance-link" role="button"
                            tabindex="0"> ketentuan dp yaitu 50% dari harga yg tertera </span>.
                    </div>
                    <div class="summary-main-buttons">
                        <div class="main-button">
                            <div role="button" tabindex="0">
                                <h2 class="methodPayment">Metode Pembayaran</h2>
                                <span><img src="assets/img/BANK_BRI_logo.svg" class="BRI" alt=""></span>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="actions">

                    <a href="" class="btn action__submit">Place your Order
                        <i class="icon icon-arrow-right-circle"></i>
                    </a>
                    <a href="package.php" class="backBtn">Go Back to Shop</a>

                </div>
        </section>
        </div>
    </section>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/modal.js"></script>

    <!-- Tambahkan script Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>

</html>