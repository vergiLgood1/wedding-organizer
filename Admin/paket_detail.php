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
            <h4 class ="m-0 font-weight-bold text-primary">EDIT Detail Paket</h4>
        </div>
        <div class="card-body">

        <?php
        $connection = mysqli_connect("localhost", "root", "", "db_weddingfix");
        if(isset($_POST['edit_data_detail']))
        {
            $id = $_POST['id_detail_paket'];
        
            $query = "SELECT * FROM packages_detail WHERE id_paket='$id' ";
            $query_run = mysqli_query($connection, $query);
            
            foreach($query_run as $row)
            {
                ?>

        <form action="code.php" method="POST">
        <input type="hidden" name="id_detail_paket" value="<?php echo $row['id_paket'] ?>">    
        
        
        <div class="form-group">
            <label> Deskripsi </label>
            <textarea name="edit_deskripsipkt" id="" cols="30" rows="10" class="form-control" placeholder="Enter Description" required><?php echo $row['deskripsi'] ?></textarea>
        </div>
        <div class="form-group">
            <label> Rincian Paket </label>
            <textarea name="edit_rincianpkt" id="" cols="30" rows="10" class="form-control" placeholder="Enter Description" required><?php echo $row['rincian_paket'] ?></textarea>
        </div>
        <div class="form-group">
            <label> Gambar Dekorasi </label>
            <input type="file" name="gambar_dekor" value="<?php echo $row['gambar_dekorasi'] ?>" class="form-control">
        </div>


                <a href="paket.php" class="btn btn-danger">Kembali</a>
                <button type="submit" name="updatedetailpkt" class="btn btn-dark">Update</button>
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