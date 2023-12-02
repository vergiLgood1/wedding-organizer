<?php
include('../Admin/security.php');
$sql = "SELECT packages.*, pemesanan.*
            FROM packages
            INNER JOIN pemesanan ON packages.id = pemesanan.id";

    // Menjalankan query
    $result = $connection>query($sql);

    // Memeriksa apakah query berhasil dijalankan
    if ($result->num_rows > 0) {
        // Inisialisasi total harga
        $totalHarga = 0;

        // Menampilkan hasil
        while ($row = $result->fetch_assoc()) {
            #echo "Nama Paket: " . $row["nama_paket"] . "<br>";
            #echo "Harga: " . $row["harga"] . "<br><br>";

            // Menambahkan harga ke total harga
            $totalHarga += $row["harga"];
        }
        $jumlah = $totalHarga;

        // Menampilkan total harga setelah iterasi selesai
        #echo "Total Harga: " . $totalHarga;
    } else {
        #echo "Tidak ada hasil ditemukan";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Barang</title>
    
</head>
<body>
    <h1> <?php echo $jumlah?></h1>
    
</body>
</html>