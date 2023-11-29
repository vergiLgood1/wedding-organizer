<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<head>
<link rel="shortcut icon" href="../Front-end-wizz/assets/img/favicon.png" type="image/png">

<!--=============== REMIXICONS ===============-->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<!--=============== SWIPER CSS ===============-->
<link rel="stylesheet" href="../Front-end-wizz/assets/css/swiper-bundle.min.css">


<!--=============== CSS ===============-->
<link rel="stylesheet" href="../Front-end-wizz/assets/css/package.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>


<div>

<div class="modal fade" id="addpaket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Paket</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        
        <div class="form-group">
            <label> Name </label>
            <input type="text" name="judul_paket" class="form-control" placeholder="Enter Title" required>
        </div>
        <div class="form-group">
            <label> Deskripsi </label>
            <textarea name="deskripsi_paket" id="" cols="30" rows="10" class="form-control" placeholder="Enter Description" required></textarea>
        </div>
        <div class="form-group">
            <label> Harga </label>
            <input type="text" name="harga_paket" class="form-control" placeholder="Enter Price" required>
        </div>
        <div class="form-group">
            <label> Gambar </label>
            <input type="file" name="gambar_paket" class="form-control" id="gambar_paket" required>
        </div>
      

        <input type="hidden" name="usertype" value="admin">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="save_paket" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>



<div class="card-header py-3">
    <style>button{
            margin-top: 20px;
            background-color: #fc8c9c; 
        }
        h2{
            text-align: center;
        }
        </style>
        <h2 >Pilihan Paket</h2>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addpaket">
                Tambah Paket
            </button>
        
    </div>   

<section class="packages">
            <style>
                button {
            margin-bottom: 10px;
            
        }
            </style>
            <div class="product-grid">
                <!-- Product Card 1 -->
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
                <div class="product-card" onclick="detailPaket(1)">
                    <div class="badge">Hot</div>
                    <div class="product-tumb">
                    <?php echo '<img src="uppaket/'.$row['gambar'].'"alt="gambar">' ?>
                    </div>
                    <div class="product-details">
                    <style>
                            /* Gunakan CSS untuk mengatur tata letak tombol */
                            .button-container {
                                display: flex; /* Menggunakan flexbox untuk mengatur elemen secara horizontal */
                                gap: 10px; /* Menetapkan jarak antara elemen-elemen */
                            }

                            /* CSS tambahan untuk styling tombol, jika diperlukan */
                            button {
                                padding: 10px 20px;
                            }
                            </style>
                        <div class="button-container">
                        <form action="packagesedit.php" Method="POST">
                        <input type="hidden" name="edit_id1" value="<?php echo $row['id']; ?>">    
                        <button type="submit" name="btn_editpaket" class="btn btn-success btn-circle fas fa-edit"></button>
                        
                        </form>
                        <form action="code.php" Method="POST">
                        <input type="hidden" name="edit_id1" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="btn_deletepaket" class="btn btn-danger btn-circle fas fa-trash"></button>
                        </form>
                        </div>
                        <h4><a href="#"><?php echo $row['nama'] ?></a></h4>
                        <p><?php echo $row["deskripsi"]; ?></p>
                        <div class="product-bottom-details">
                            <div class="product-price"><small></small><?php echo $row["harga"] ?></div>
                            <div class="product-count"><small>5.0 |</small>5 Terjual</div>
                            <div class="product-links">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    
                }
                ?>
            </div>    
</section>

</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>