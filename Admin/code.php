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
    $title = $_POST['edit_judul'];
    
    $description = $_POST['edit_deskripsi'];
    

    $query = "INSERT INTO about (judul, deskripsi) VALUES ('$title', '$description' )";
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

if(isset($_POST['updatebtn9']))
{
    $id = $_POST['edit_id9'];
    $title = $_POST['edit_judul'];
    $description = $_POST['edit_deskripsi'];
    

    $query = "UPDATE about SET judul='$title',  deskripsi='$description'  WHERE id='$id' ";
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

if(isset($_POST['deletebtn9']))
{
    $id = $_POST['delete_id9'];

    $query = "DELETE FROM about WHERE id='$id'";
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

//paket

if(isset($_POST['save_paket']))
{
    $title3 = $_POST['judul_paket'];
    $description3 = $_POST['deskripsi_paket'];
    $harga3 = $_POST['harga_paket'];
    $image3 = $_FILES['gambar_paket']['name'];

        if(file_exists("uppaket/".$_FILES["gambar_paket"]["name"]))
        {
            $store3 = $_FILES["gambar_paket"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store3.'";
            header('Location: packages.php');
        }
        else
        {
        
            $query = "INSERT INTO paket (nama, deskripsi, harga, gambar) VALUES ('$title3', '$description3', '$harga3', '$image3')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_paket"]["tmp_name"], "uppaket/".$_FILES["gambar_paket"]["name"]);
                $_SESSION['success'] = "Paket ditambahkan";
                header('Location: packages.php');
            }
            else
            {
                $_SESSION['status'] = "Paket gagal ditambahkan";
                header('Location: Packages.php');
            }
        }
}

if(isset($_POST['updatebtn4']))
{
    $id3 = $_POST['edit_id1'];
    $title3 = $_POST['judul_paket'];
    $deskripsi3 = $_POST['deskripsi_paket'];
    $harga3 = $_POST['harga_paket'];
    $image3 = $_FILES['gambar_paket']['name'];

    $query = "UPDATE paket SET nama='$title3', deskripsi='$deskripsi3', harga='$harga3', gambar='$image3' WHERE id='$id3' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["gambar_paket"]["tmp_name"], "uppaket/".$_FILES["gambar_paket"]["name"]);
        $_SESSION['success'] = "Data telah di Update";
        header('Location: packages.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Update";
        header('Location: packages.php');
    }

}

if(isset($_POST['btn_deletepaket']))
{
    $id = $_POST['edit_id1'];

    $query = "DELETE FROM paket WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: packages.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: packages.php');
    }

}

//ini paket baru
if(isset($_POST['paket_save']))
{
    $namapkt = $_POST['nama_paket'];
    $hargapkt = $_POST['harga_paket'];
    $gambarpkt = $_FILES['gambar_paket']['name'];

        if(file_exists("upload/".$_FILES["gambar_paket"]["name"]))
        {
            $store1 = $_FILES["gambar_paket"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store1.'";
            header('Location: paket.php');
        }
        else
        {
        
            $query = "INSERT INTO packages (nama_paket, harga, gambar) VALUES ('$namapkt', '$hargapkt', '$gambarpkt')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_paket"]["tmp_name"], "upload/".$_FILES["gambar_paket"]["name"]);
                $_SESSION['success'] = "Paket ditambahkan";
                header('Location: paket.php');
            }
            else
            {
                $_SESSION['status'] = "Paket gagal ditambahkan";
                header('Location: paket.php');
            }
        }
}

if(isset($_POST['updatepaket']))
{
    $id = $_POST['id_paket'];
    $namapkt = $_POST['nama_paket'];
    $hargapkt = $_POST['harga_paket'];
    $gambarpkt = $_FILES['gambar_paket']['name'];

    $query = "UPDATE packages SET nama_paket='$namapkt', harga='$hargapkt', gambar='$gambarpkt' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["gambar_paket"]["tmp_name"], "upload/".$_FILES["gambar_paket"]["name"]);
        $_SESSION['success'] = "Data telah di Update";
        header('Location: paket.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Update";
        header('Location: paket.php');
    }

}

if(isset($_POST['deletepaket']))
{
    $id = $_POST['id_deletepkt'];

    $query = "DELETE FROM packages WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: paket.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: paket.php');
    }

}

if(isset($_POST['updatedetailpkt']))
{
    $id = $_POST['id_paket'];
    
    $description = $_POST['edit_deskripsipkt'];
    

    $query = "UPDATE packages_detail SET deskripsi='$description'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Update";
        header('Location: paket.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Update";
        header('Location: paket.php');
    }

}


//kode untuk gallery
if(isset($_POST['gallery_save']))
{
    
    $gambarglr = $_FILES['gambar_gallery']['name'];

        if(file_exists("upgallery/".$_FILES["gambar_gallery"]["name"]))
        {
            $store2 = $_FILES["gambar_gallery"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store2.'";
            header('Location: gallery.php');
        }
        else
        {
        
            $query = "INSERT INTO gallery (gambar) VALUES ('$gambarglr')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_gallery"]["tmp_name"], "upgallery/".$_FILES["gambar_gallery"]["name"]);
                $_SESSION['success'] = "Paket ditambahkan";
                header('Location: gallery.php');
            }
            else
            {
                $_SESSION['status'] = "Paket gagal ditambahkan";
                header('Location: gallery.php');
            }
        }
}

if(isset($_POST['deleteglr']))
{
    $id = $_POST['id_deleteglr'];

    $query = "DELETE FROM gallery WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: gallery.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: gallery.php');
    }

}

//kode untuk testimoni
if(isset($_POST['testi_save']))
{
    $namatst = $_POST['nama_testi'];
    $judultst = $_POST['judul_testi'];
    $destst = $_POST['des_testi'];
    $gambartst = $_FILES['gambar_testi']['name'];

        if(file_exists("uptesti/".$_FILES["gambar_testi"]["name"]))
        {
            $store3 = $_FILES["gambar_testi"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store3.'";
            header('Location: testimoni.php');
        }
        else
        {
        
            $query = "INSERT INTO testimoni (nama_user, judul, deskripsi, gambar_user) VALUES ('$namatst', '$judultst', '$destst', '$gambartst')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_testi"]["tmp_name"], "uptesti/".$_FILES["gambar_testi"]["name"]);
                $_SESSION['success'] = "Paket ditambahkan";
                header('Location: testimoni.php');
            }
            else
            {
                $_SESSION['status'] = "Paket gagal ditambahkan";
                header('Location: testimoni.php');
            }
        }
}

if(isset($_POST['updatetesti']))
{
    $id = $_POST['id_testi'];
    $namatst = $_POST['nama_testi'];
    $judultst = $_POST['judul_testi'];
    $destst = $_POST['des_testi'];
    $gambartst = $_FILES['gambar_testi']['name'];

    $query = "UPDATE testimoni SET nama_user='$namatst', judul='$judultst', deskripsi='$destst', gambar_user='$gambartst' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["gambar_testi"]["tmp_name"], "uptesti/".$_FILES["gambar_testi"]["name"]);
        $_SESSION['success'] = "Data telah di Update";
        header('Location: testimoni.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Update";
        header('Location: testimoni.php');
    }

}

if(isset($_POST['deletetesti']))
{
    $id = $_POST['id_deletetesti'];

    $query = "DELETE FROM testimoni WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: testimoni.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: testimoni.php');
    }

}

?>