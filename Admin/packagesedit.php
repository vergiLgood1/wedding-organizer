<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class ="m-0 font-weight-bold text-primary">EDIT Paket</h6>
        </div>
        <div class="card-body">

        <?php
        
        if(isset($_POST['btn_editpaket']))
        {
            $id = $_POST['edit_id1'];
        
            $query = "SELECT * FROM paket WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);
            
            foreach($query_run as $row)
            {
                ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_id1" value="<?php echo $row['id'] ?>">    
        <div class="form-group">
            <label> Judul </label>
            <input type="text" name="judul_paket" value="<?php echo $row['nama'] ?>" class="form-control" placeholder="Enter Judul">
        </div>
        <div class="form-group">
            <label> Deskripsi </label>
            <textarea name="deskripsi_paket" id="" cols="30" rows="10" class="form-control" placeholder="Enter Description" required><?php echo $row['deskripsi'] ?></textarea>
        </div>
        <div class="form-group">
            <label> Harga </label>
            <input type="text" name="harga_paket" value="<?php echo $row['harga'] ?>" class="form-control" placeholder="Enter Description">
        </div>
        <div class="form-group">
            <label> Gambar </label>
            <input type="file" name="gambar_paket" value="<?php echo $row['gambar'] ?>" class="form-control">
        </div>


                <a href="packages.php" class="btn btn-danger">Kembali</a>
                <button type="submit" name="updatebtn4" class="btn btn-primary">Update</button>
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