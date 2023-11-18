<?php
include('security.php');

$connection = mysqli_connect("localhost", "root", "", "wedding_organizer");
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];


    if($password === $cpassword)
    {
        $query = "INSERT INTO register (username, email, password, usertype) VALUES ('$username', '$email', '$password', '$usertype')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            // echo "saved";
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');
        }
        else
        {
            $_SESSION['status'] = "Admin Profile Not Added";
            header('location: register.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Kedua Password Tidak Sama!";
            header('location: register.php');
    }
}

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
}


if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_user'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_pass'];
    $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Update";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Data telah di Update";
        header('Location: register.php');
    }

}

if(isset($_POST['deletebtn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: register.php');
    }

}



if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email1'];
    $password_login = $_POST['password1'];

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = "Email id atau Password salah";
        header('Location: login.php');
    }

}


//ini kode php untuk about

if(isset($_POST['about_save']))
{
    $title = $_POST['judul'];
    $subtitle = $_POST['sub_judul'];
    $description = $_POST['deskripsi'];
    $links = $_POST['links'];

    $query = "INSERT INTO abouts (title, subtitle, description, links) VALUES ('$title', '$subtitle', '$description', '$links')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "About telah ditambahkan";
        header('Location: Aboutus.php');
    }
    else
    {
        $_SESSION['status'] = "About gagal ditambahkan";
        header('Location: aboutus.php');
    }

}

if(isset($_POST['updatebtn2']))
{
    $id = $_POST['edit_id'];
    $title = $_POST['edit_user'];
    $subtitle = $_POST['edit_email'];
    $description = $_POST['edit_pass'];
    $links = $_POST['edit_pass2'];

    $query = "UPDATE abouts SET title='$title', subtitle='$subtitle', description='$description', links='$links' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Update";
        header('Location: aboutus.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Update";
        header('Location: aboutus.php');
    }

}

if(isset($_POST['deletebtn2']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM abouts WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: aboutus.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: aboutus.php');
    }

}

//kode untuk fasilitas

if(isset($_POST['fasi_save']))
{
    $title = $_POST['nama_fasi'];
    $description = $_POST['deskripsi_fasi'];
    $image = $_FILES['gambar_fasi']['name'];

        if(file_exists("upload/".$_FILES["gambar_fasi"]["name"]))
        {
            $store = $_FILES["gambar_fasi"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store.'";
            header('Location: fasilitas.php');
        }
        else
        {
        
            $query = "INSERT INTO fasilitas (judul, deskripsi, gambar) VALUES ('$title', '$description', '$image')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_fasi"]["tmp_name"], "upload/".$_FILES["gambar_fasi"]["name"]);
                $_SESSION['success'] = "Fasilitas ditambahkan";
                header('Location: fasilitas.php');
            }
            else
            {
                $_SESSION['status'] = "Fasilitas gagal ditambahkan";
                header('Location: fasilitas.php');
            }
        }
}

if(isset($_POST['updatebtn3']))
{
    $id = $_POST['edit_id'];
    $judul = $_POST['nama_fasi'];
    $deskripsi = $_POST['deskripsi_fasi'];
    $image = $_FILES['gambar_fasi']['name'];

    $query = "UPDATE fasilitas SET judul='$judul', deskripsi='$deskripsi', gambar='$image' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["gambar_fasi"]["tmp_name"], "upload/".$_FILES["gambar_fasi"]["name"]);
        $_SESSION['success'] = "Data telah di Update";
        header('Location: fasilitas.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Update";
        header('Location: fasilitas.php');
    }

}

if(isset($_POST['deletebtn3']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM fasilitas WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: fasilitas.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: fasilitas.php');
    }

}

if(isset($_POST['search_data']))
{
    $id = $_POST['id'];
    $visible = $_POST['visible'];

    $query = "UPDATE fasilitas SET visible='$visible' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
}

if(isset($_POST['delete_data2']))
{
    $id2 = "1";
    $query = "DELETE FROM fasilitas WHERE visible='$id2'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: fasilitas.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: fasilitas.php');
    }

}





?>