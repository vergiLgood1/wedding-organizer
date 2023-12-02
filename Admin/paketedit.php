<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('adminonly.php');
?>

<div class="container-fluid">
    <style>
        .btn-dark {
        background-color: #ff8f9c;
        
        }
        .text-primary {
        color: #ff8f9c !important;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class ="m-0 font-weight-bold text-primary">EDIT Paket</h4>
        </div>
        <div class="card-body">

        <?php
        
        if(isset($_POST['edit_data_paket']))
        {
            $id = $_POST['id_edit_paket'];
        
            $query = "SELECT * FROM packages WHERE id_paket='$id' ";
            $query_run = mysqli_query($connection, $query);
            
            foreach($query_run as $row)
            {
                ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_edit_paket" value="<?php echo $row['id_paket'] ?>">    
        <div class="form-group">
            <label> Nama </label>
            <input type="text" name="nama_paket" value="<?php echo $row['nama_paket'] ?>" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label> Harga </label>
            <input type="text" name="harga_paket" value="<?php echo $row['harga'] ?>" class="form-control" placeholder="Enter Price">
        </div>
        <div class="form-group">
            <label> Gambar </label>
            <input type="file" name="gambar_paket" value="<?php echo $row['gambar'] ?>" class="form-control">
        </div>


                <a href="paket.php" class="btn btn-danger">Kembali</a>
                <button type="submit" name="updatepaket" class="btn btn-dark">Update</button>
                </form>
                <?php
            }
        }
        ?>
        
        

        </div>
    </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>