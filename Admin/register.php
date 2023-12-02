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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Data Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="code.php" method="POST">
      <div class="modal-body">
        
        <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label> Email </label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label> Password </label>
            <input type="password" name="password" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label> Confirm Password </label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Enter Username">
        </div>

        <input type="hidden" name="usertype" value="admin">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save changes</button>
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
        <h3 class="m-0 font-weight-bold text-primary">Admin Profile</h3>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addadminprofile">
                add Admin Profile
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
        
    <?php
    

    $query = "SELECT * FROM user";
    $query_run = mysqli_query($connection, $query);
    ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Level User</th>
                    <th>EDIT</th>
                    <th>Delete</th>    
                </tr>    
            </thead>
            <tbody>
            <?php
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['usertype']; ?></td>
                    <td>
                        <form action="register_edit.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">    
                        <button type="submit" name="edit_btn" class="btn btn-success fas fa-edit"></button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">    
                        <button type="submit" name="deletebtn" class="btn btn-danger">DELETE</button>
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