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
        $connection = mysqli_connect("localhost", "root", "", "wedding_organizer");
        if(isset($_POST['edit_btn2']))
        {
            $id = $_POST['edit_id'];
        
            $query = "SELECT * FROM about WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);
            
            foreach($query_run as $row)
            {
                ?>

        <form action="code.php" method="POST">
        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">    
        <div class="form-group">
            <label> Judul </label>
            <input type="text" name="edit_judul" value="<?php echo $row['judul'] ?>" class="form-control" placeholder="Enter Title">
        </div>
        
        <div class="form-group">
            <label> Deskripsi </label>
            
            <textarea name="edit_deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="Enter Description" required><?php echo $row['deskripsi'] ?></textarea>
        </div>
        

                <a href="aboutus.php" class="btn btn-danger">Kembali</a>
                <button type="submit" name="updatebtn2" class="btn btn-primary">Update</button>
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