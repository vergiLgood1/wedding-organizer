<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
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
            <h4 class ="m-0 font-weight-bold text-primary">EDIT Testimoni</h4>
        </div>
        <div class="card-body">

        <?php
        
        if(isset($_POST['edit_data_testi']))
        {
            $id = $_POST['id_testi'];
        
            $query = "SELECT * FROM testimoni WHERE id='$id' ";
            $query_run = mysqli_query($connection, $query);
            
            foreach($query_run as $row)
            {
                ?>

        <form action="code.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_testi" value="<?php echo $row['id'] ?>">    
        <div class="form-group">
            <label> Nama </label>
            <input type="text" name="nama_testi" value="<?php echo $row['nama_user'] ?>" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label> Judul </label>
            <input type="text" name="judul_testi" value="<?php echo $row['judul'] ?>" class="form-control" placeholder="Enter Price">
        </div>
        <div class="form-group">
            <label> Deskripsi </label>
            <textarea name="des_testi" id="" cols="30" rows="10" class="form-control" " required><?php echo $row['deskripsi'] ?></textarea>
        </div>
        <div class="form-group">
            <label> Gambar </label>
            <input type="file" name="gambar_testi" value="<?php echo $row['gambar_user'] ?>" class="form-control">
        </div>
                <a href="testimoni.php" class="btn btn-danger">Kembali</a>
                <button type="submit" name="updatetesti" class="btn btn-dark">Update</button>
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