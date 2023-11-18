<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>



<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data Fasilitas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        
        <div class="form-group">
            <label> Name </label>
            <input type="text" name="nama_fasi" class="form-control" placeholder="Enter Title" required>
        </div>
        <div class="form-group">
            <label> Deskripsi </label>
            <input type="text" name="deskripsi_fasi" class="form-control" placeholder="Enter Description" required>
        </div>
        <div class="form-group">
            <label> Gambar </label>
            <input type="file" name="gambar_fasi" class="form-control" id="gambar_fasi" required>
        </div>
      

        <input type="hidden" name="usertype" value="admin">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="fasi_save" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">
<!--DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <style>
        h3{
            text-align: center;
        }
        </style>
        <h3 class="m-0 font-weight-bold text-primary">Fasilitas</h3>
        <!-- <form action="code.php" method"POST">
            <button type="submit" name="delete_data2" class="btn btn-danger">Delete Data</button>
        </form> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                Tambah Fasilitas
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
                    <th>judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>EDIT</th>
                    <th>Delete</th>    
                </tr>    
            </thead>
            <tbody>
            
            <?php
            $query = "SELECT * FROM fasilitas";
            $query_run = mysqli_query($connection, $query);
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
                    <tr>
                        <!-- <td>
                            <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php #echo $row['id'] ?>" <?php #echo $row['visible'] == 1 ? "checked" : "" ?>>
                        </td> -->
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['judul']; ?></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    <td><?php echo '<img src="upload/'.$row['gambar'].'" width="100px;" height="100px" alt="gambar">' ?></td>
                    <td>
                        <form action="fasilitasedit.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">    
                        <button type="submit" name="edit_data_btn" class="btn btn-success">EDIT</button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">    
                        <button type="submit" name="deletebtn3" class="btn btn-danger">DELETE</button>
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
include('includes/scripts.php') ;
include('includes/footer.php');
?>

<!-- <script>
    function toggleCheckbox(box)
    {
        var id = $(box).attr("value");

        if($(box).prop("checked") == true)
        {
            var visible = 1;
        }
        else
        {
            var visible = 0;
        }
        var data = {
            "search_data": 1,
            "id": id,
            "visible": visible
        };

        $.ajax({
            type: "POST",
            url: "code.php",
            data: data,
            
            success: function(response) {
                //alert("Data Checked");
            }
        });
    }
</script> -->