<?php
// Hubungkan ke database Anda di sini (gunakan koneksi sesuai dengan kebutuhan)
$connection = mysqli_connect("localhost", "root", "", "coba_db");

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

session_start();

function cekWaktuTunggu($email, $barang) {
    global $connection;

    // Query untuk mendapatkan waktu pemesanan terakhir pengguna untuk barang tertentu
    $query = "SELECT waktu_pesan, waktu_booking FROM pemesanan WHERE email = '$email' AND barang = '$barang' ORDER BY waktu_pesan DESC LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Jika pengguna pernah memesan barang tersebut sebelumnya
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $waktuPesan = strtotime($row['waktu_pesan']);
            $waktuBooking = strtotime($row['waktu_booking']);
            $waktuTunggu = 24 * 60 * 60; // 24 jam

            // Hitung selisih waktu antara sekarang dan waktu pemesanan terakhir
            $selisihWaktuPesan = time() - $waktuPesan;

            // Jika belum mencapai batas waktu tunggu dan waktu booking belum lewat
            if ($selisihWaktuPesan < $waktuTunggu && time() < $waktuBooking) {
                return $waktuTunggu - $selisihWaktuPesan;
            }
        }
    }

    // Jika pengguna belum pernah memesan barang tersebut atau sudah melewati batas waktu tunggu
    return 0;
}

function pesanBarang($email, $barang, $waktuBooking) {
    global $connection;

    // Cek waktu tunggu untuk barang tertentu
    $sisaWaktuTunggu = cekWaktuTunggu($email, $barang);

    if ($sisaWaktuTunggu > 0) {
        // Jika masih dalam batas waktu tunggu
        return "Anda harus menunggu " . gmdate("H:i:s", $sisaWaktuTunggu) . " sebelum dapat memesan kembali.";
    } else {
        // Jika sudah melewati batas waktu tunggu, lakukan pemesanan
        $waktuBooking = strtotime($waktuBooking); // Ubah format waktu_booking menjadi timestamp

        $query = "INSERT INTO pemesanan (email, barang, waktu_pesan, waktu_booking) VALUES ('$email', '$barang', NOW(), FROM_UNIXTIME($waktuBooking))";
        $result = mysqli_query($connection, $query);

        if ($result) {
            // Simpan waktu pemesanan terakhir ke dalam sesi atau database
            $_SESSION['last_order_time_' . $barang] = time();

            return "Pemesanan barang '$barang' berhasil! Tidak bisa dipesan hingga " . date("Y-m-d H:i:s", $waktuBooking);
        } else {
            return "Gagal melakukan pemesanan barang '$barang'. Silakan coba lagi.";
        }
    }
}

// Contoh penggunaan
$emailPengguna = "contoh@email.com";
$barang1 = "Barang A";
$barang2 = "Barang B";
$hasilPemesananBarang1 = '';
$hasilPemesananBarang2 = '';

if (isset($_POST['pesanBarang1'])) {
    $waktuBookingBarang1 = $_POST['waktu_booking_barang1'];
    $hasilPemesananBarang1 = pesanBarang($emailPengguna, $barang1, $waktuBookingBarang1);
}

if (isset($_POST['pesanBarang2'])) {
    $waktuBookingBarang2 = $_POST['waktu_booking_barang2'];
    $hasilPemesananBarang2 = pesanBarang($emailPengguna, $barang2, $waktuBookingBarang2);
}

// Tutup koneksi database
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        button:disabled {
            background-color: #ddd;
            cursor: not-allowed;
        }

        button {
            padding: 10px;
            margin-top: 10px;
            cursor: pointer;
        }

        input {
            padding: 5px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pemesanan Barang</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="waktu_booking_barang1">Waktu Booking Barang A:</label>
            <input type="datetime-local" id="waktu_booking_barang1" name="waktu_booking_barang1" required>
            <button type="submit" name="pesanBarang1" id="btnPesanBarang1">Pesan Barang A</button>

            <label for="waktu_booking_barang2">Waktu Booking Barang B:</label>
            <input type="datetime-local" id="waktu_booking_barang2" name="waktu_booking_barang2" required>
            <button type="submit" name="pesanBarang2" id="btnPesanBarang2">Pesan Barang B</button>
        </form>

        <p><?php echo $hasilPemesananBarang1; ?></p>
        <p><?php echo $hasilPemesananBarang2; ?></p>
        <button onclick="location.reload()">Coba Pesan Lagi</button>

        <script>
            // Fungsi untuk menonaktifkan tombol pesan selama waktu tunggu
            function nonaktifkanTombolPesan(waktuTunggu, btnId) {
                var btnPesan = document.getElementById(btnId);
                btnPesan.disabled = true;

                // Hitung waktu tersisa dan perbarui label tombol pesan
                var sisaWaktu = waktuTunggu;
                var interval = setInterval(function () {
                    btnPesan.innerHTML = "Harap tunggu " + formatWaktu(sisaWaktu);
                    sisaWaktu--;

                    if (sisaWaktu < 0) {
                        clearInterval(interval);
                        btnPesan.innerHTML = "Pesan Barang";
                        btnPesan.disabled = false;
                    }
                }, 1000);
            }

            // Fungsi untuk mengubah format waktu (detik ke HH:mm:ss)
            function formatWaktu(detik) {
                var jam = Math.floor(detik / 3600);
                var menit = Math.floor((detik % 3600) / 60);
                var detikSisa = detik % 60;

                return (
                    (jam < 10 ? "0" : "") + jam + ":" +
                    (menit < 10 ? "0" : "") + menit + ":" +
                    (detikSisa < 10 ? "0" : "") + detikSisa
                );
            }

            // Ambil waktu tunggu dari PHP dan nonaktifkan tombol jika diperlukan
            var waktuTungguBarang1 = <?php echo cekWaktuTunggu($emailPengguna, $barang1); ?>;
            if (waktuTungguBarang1 > 0) {
                nonaktifkanTombolPesan(waktuTungguBarang1, "btnPesanBarang1");
            }

            var waktuTungguBarang2 = <?php echo cekWaktuTunggu($emailPengguna, $barang2); ?>;
            if (waktuTungguBarang2 > 0) {
                nonaktifkanTombolPesan(waktuTungguBarang2, "btnPesanBarang2");
            }
        </script>
    </div>
</body>
</html>