<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class ="m-0 font-weight-bold text-primary">EDIT Fasilitas</h6>
        </div>
        <div class="card-body">

        <?php
        
        if(isset($_POST['edit_data_btn']))
        {
            $id = $_POST['edit_id'];
        
            $query = "SELECT * FROM fasilitas WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);
            
            foreach($query_run as $row)
            {
                ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">    
        <div class="form-group">
            <label> Judul </label>
            <input type="text" name="nama_fasi" value="<?php echo $row['judul'] ?>" class="form-control" placeholder="Enter Judul">
        </div>
        <div class="form-group">
            <label> Deskripsi </label>
            <input type="text" name="deskripsi_fasi" value="<?php echo $row['deskripsi'] ?>" class="form-control" placeholder="Enter Description">
        </div>
        <div class="form-group">
            <label> Gambar </label>
            <input type="file" name="gambar_fasi" value="<?php echo $row['gambar'] ?>" class="form-control">
        </div>


                <a href="fasilitas.php" class="btn btn-danger">Kembali</a>
                <button type="submit" name="updatebtn3" class="btn btn-primary">Update</button>
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