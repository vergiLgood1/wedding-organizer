<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('adminonly.php');
?>



<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data Pengalaman</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="code.php" method="POST">
      <div class="modal-body">
        
        <div class="form-group">
            <label> Tahun Pengalaman </label>
            <input type="text" name="tahun_exp" class="form-control" placeholder="Enter Data">
        </div>
        <div class="form-group">
            <label> Pernikahan Terlaksana </label>
            <input type="text" name="pernikahan_exp" class="form-control" placeholder="Enter Data">
        </div>
        <div class="form-group">
            <label> Pasangan Pengantin </label>
            <input type="text" name="pasangan_exp" class="form-control" placeholder="Enter Data">
        </div>
        

        

      </div>
      <div class="modal-footer">
        <style>
        .btn-dark {
        background-color: #ff8f9c;
        
        }
        .modal-title.fs-5 {
            color: #ff8f9c !important;
        }
        </style>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="exp_save" class="btn btn-dark">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">
<!--DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <style>button{
            margin-top: 20px;
            
        }
        h3{
            text-align: center;
        }
        .btn-dark {
        background-color: #ff8f9c;
        }
        .text-primary {
        color: #ff8f9c !important;
        }
        </style>
        <h3 class="m-0 font-weight-bold text-primary">Pengalaman</h3>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addadminprofile">
                add Experience
            </button>
        
    </div>    

<div class="card-body">

<?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
    {
        echo '<h2 class="bg-primary text-white">'.$_SESSION['success'].'</h2>';
        unset($_SESSION['success']);
    }

    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
        echo '<h2 class="bg-danger text-white">'.$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);
    }

    ?>

    <div class="table-responsive">
        
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    
                    <th>Tahun Pengalaman</th>
                    <th>Pernikahan Terlaksana</th>
                    <th>Pasangan Pengantin</th>
                    <th>EDIT</th>
                    <th>Delete</th>    
                </tr>    
            </thead>
            <tbody>
            
            <?php
            $query = "SELECT * FROM experience";
            $query_run = mysqli_query($connection, $query);
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['tahun_pengalaman']; ?></td>
                    <td><?php echo $row['pernikahan_terlaksana']; ?></td>
                    <td><?php echo $row['pasangan_pengantin']; ?></td>
                    <td>
                        <form action="experedit.php" method="POST">
                        <input type="hidden" name="id_edit_exp" value="<?php echo $row['id']; ?>">    
                        <button type="submit" name="edit_btn_exp" class="btn btn-success fas fa-edit"></button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                        <input type="hidden" name="id_delete_exp" value="<?php echo $row['id']; ?>">    
                        <button type="submit" name="btn_delete_exp" class="btn btn-danger ">DELETE</button>
                        </form>
                    </td>
                </tr>
                    <?php
                }
            }
            else{
                echo "Tidak ada Record data";
            }
            ?>  
            </tbody>    
        </table>

        </div>
    </div>
</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>