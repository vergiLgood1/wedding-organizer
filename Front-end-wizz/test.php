<?php
require('config/koneksi.php');

// Tangani pemesanan jika formulir sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memastikan semua data terisi
    if (
        isset($_POST['id_paket']) && isset($_POST['tanggal_penggunaan']) &&
        isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['tlp']) &&
        isset($_FILES['payment_proof'])
    ) {
        $id_paket = $_POST['id_paket'];
        $tanggal_penggunaan = $_POST['tanggal_penggunaan'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tlp = $_POST['tlp'];

        // Memproses file bukti pembayaran
        $namaFile = $_FILES['payment_proof']['name'];
        $ukuranFile = $_FILES['payment_proof']['size'];
        $tmpName = $_FILES['payment_proof']['tmp_name'];

        // Membaca seluruh konten file sebagai BLOB
        $bukti_dp = file_get_contents($tmpName);

        // Memasukkan data pemesanan ke dalam database
        $query = "INSERT INTO pemesanan (pemesanan_id, id_paket, tanggal_pemesanan, tanggal_penggunaan, nama, alamat, tlp, bukti_dp) 
            VALUES ('', '$id_paket', NOW(), '$tanggal_penggunaan', '$nama', '$alamat', '$tlp', ?)";

        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, 's', $bukti_dp);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Pemesanan berhasil!";
            // Redirect ke halaman pemesanan
            header("Location: detailPemesanan.php");
            exit();
        } else {
            echo "Gagal melakukan pemesanan. Kode Kesalahan: " . mysqli_errno($koneksi) . "<br>";
            echo "Pesan Kesalahan: " . mysqli_error($koneksi);
        }

        // Tutup pernyataan persiapan
        mysqli_stmt_close($stmt);
    }
}

// Ambil informasi paket berdasarkan id_paket dari tabel paket dan detail_paket
$id_paket = isset($_GET['id_paket']) ? mysqli_real_escape_string($koneksi, $_GET['id_paket']) : null;

$query = "SELECT * FROM detail_paket
    INNER JOIN paket ON detail_paket.id_paket = paket.id_paket
    WHERE paket.id_paket = '$id_paket'";

$result = mysqli_query($koneksi, $query);

if ($result && $data_paket = mysqli_fetch_assoc($result)) {

    $id_paket = $data_paket["id_paket"];
    $nama_paket = $data_paket["nama_paket"];
    $harga = $data_paket["harga"];
    $img_path = $data_paket["img_path"];
    $description = $data_paket["description"];
} else {
    echo "Tidak dapat menemukan informasi paket.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wizz - Wedding Organizer</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
                <div class="details shadow">
                    <div class="details__item">
                        <div class="item__image">
                            <img class="iphone"
                                src="http://localhost/wedding-organizer/Front-end-wizz/assets/img/<?php echo $data_paket["img_path"]; ?>"
                                alt="">
                        </div>
                        <div class="item__details">
                            <div class="item__title">
                                <h2>
                                    <?php echo $data_paket['nama_paket']; ?>
                                </h2>
                            </div>
                            <div class="item__price">
                                <h2>
                                    <?php echo $data_paket['harga']; ?>
                                </h2>
                            </div>
                            <div class="item__quantity">
                            </div>
                            <div class="item__description">
                                <ul>
                                    <li>"<?php echo $data_paket['description']; ?>"</li>
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
                    <div class="sidebar shipping-address-sidebar">
                        <div class="section-heading">Data diri & alamat</div>
                        <div class="shipping-address-container">
                            <div class="receiver-info">
                                <form action="detailPemesanan.php" method="post" enctype="multipart/form-data"
                                    id="pemesananForm">
                                    <div class="form-group">
                                        <input type="text" id="fullName" placeholder="Nama Lengkap" maxlength="30"
                                            autocomplete="name" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="phoneNumber" placeholder="Nomor Telepon"
                                            autocomplete="user-address-phone" name="tlp">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="streetAddress" placeholder="Nama Jalan, Gedung, No. Rumah"
                                            rows="2" maxlength="160" autocomplete="user-street-address"
                                            name="alamat"></textarea>
                                    </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="usage-date-card">
                        <div class="card-header">
                            <h2 class="header-date">Pilih Tanggal Penggunaan</h2>
                        </div>
                        <div class="card-content">
                            <label for="usage-date">Tanggal Penggunaan:</label>
                            <input type="date" id="usageDate" name="tanggal_penggunaan" class="date-picker"
                                onchange="disableSelectedDate()">
                        </div>
                    </div>

                    <div class="checkout-summary-container">
                        <div class="summary-heading">Ringkasan Belanja</div>
                        <div class="shopping-details-wrapper">
                            <div class="summary-detail-row">
                                <div class="detail-label">Total Harga</div>
                                <div class="detail-value">Rp <?php echo $data_paket['harga']; ?></div>
                            </div>
                            <div class="summary-detail-row">
                                <div class="detail-label">Total Ongkos Kirim</div>
                                <div class="detail-value"> - </div>
                            </div>
                            <div class="summary-detail-row">
                                <div class="detail-label">Asuransi Pengiriman</div>
                                <div class="detail-value"> - </div>
                            </div>
                            <div class="summary-detail-row">
                                <div class="detail-label">Biaya Proteksi Produk</div>
                                <div class="detail-value"> - </div>
                            </div>
                            <div class="summary-detail-row">
                                <div class="detail-label">Biaya Jasa Aplikasi</div>
                                <div class="detail-value" data-testid="Biaya Jasa Aplikasi-slashed"></div>
                                <div class="detail-value-highlight">Rp 1000</div>
                            </div>
                        </div>
                        <div class="summary-total-row">
                            <div class="total-label">Total Belanja</div>
                            <div class="total-value"><?php echo $data_paket['harga']; ?></div>
                        </div>
                        <div class="insurance-message">
                            Pastikan untuk membayar dp terlebih dahulu.
                            <span class="insurance-link" role="button" tabindex="0">
                                ketentuan dp yaitu 50% dari harga yg tertera
                            </span>.
                        </div>

                        <h2 class="payment">Pembayaran</h2>
                        <div class="form-group">
                            <span><img src="assets/img/BANK_BRI_logo.svg" class="BRI" alt=""></span>
                            <div class="rek">
                                <span>No rek: 12345678</span>
                                <div class="rek">
                                    <span>Nama: Heimdal</span>
                                </div>
                            </div>
                            <label for="paymentProof">Unggah bukti:</label>
                            <input type="file" id="paymentProof" name="payment_proof" accept=".jpg, .jpeg, .png, .pdf"
                                required>
                        </div>
                        <div class="form-group">
                        </div>
                    </div> 
                </div>
                <div class="actions">
                    <button type="button" class="btn action__submit" id="submitOrderBtn">Place your Order
                        <i class="icon icon-arrow-right-circle"></i>
                    </button>
                    </form>
                    <a href="package.php" class="backBtn">Go Back to Shop</a>
                </div>
                </form>
            </div>
        </section>
    </section>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
