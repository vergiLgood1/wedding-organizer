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
            <h4 class ="m-0 font-weight-bold text-primary">EDIT Experience</h4>
        </div>
        <div class="card-body">

        <?php
        $connection = mysqli_connect("localhost", "root", "", "db_weddingfix");
        if(isset($_POST['edit_btn_exp']))
        {
            $id = $_POST['id_edit_exp'];
        
            $queryexp = "SELECT * FROM experience WHERE id='$id' ";
            $query_run = mysqli_query($connection, $queryexp);
            
            foreach($query_run as $row)
            {
                ?>

        <form action="code.php" method="POST">
        <input type="hidden" name="id_edit_exp" value="<?php echo $row['id'] ?>">
            
        <div class="form-group">
            <label> Tahun Pengalaman </label>
            <input type="text" name="tahun_exp" value="<?php echo $row['tahun_pengalaman'] ?>" class="form-control" placeholder="Enter Data">
        </div>
        <div class="form-group">
            <label> Pernikahan Terlaksana </label>
            <input type="text" name="pernikahan_exp" value="<?php echo $row['pernikahan_terlaksana'] ?>" class="form-control" placeholder="Enter Data">
        </div>
        <div class="form-group">
            <label> Pasangan Pengantin </label>
            <input type="text" name="pasangan_exp" value="<?php echo $row['pasangan_pengantin'] ?>" class="form-control" placeholder="Enter Data">
        </div>
        

                <a href="experience.php" class="btn btn-danger">Kembali</a>
                <button type="submit" name="btn_update_exp" class="btn btn-dark">Update</button>
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