<?php
include('security.php');
include('adminonly.php');

$connection = mysqli_connect("localhost", "root", "", "db_weddingfix");
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];


    if($password === $cpassword)
    {
        $query = "INSERT INTO user (username, email, password, usertype) VALUES ('$username', '$email', '$password', '$usertype')";
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

    $query = "SELECT * FROM user WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
}


if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_user'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_pass'];
    $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE user SET username='$username', email='$email', password='$password', usertype='$usertypeupdate' WHERE id='$id' ";
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

    $query = "DELETE FROM user WHERE id='$id'";
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



// if(isset($_POST['login_btn']))
// {
//     $email_login = $_POST['email1'];
//     $password_login = $_POST['password1'];

//     $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'";
//     $query_run = mysqli_query($connection, $query);

//     if(mysqli_fetch_array($query_run))
//     {
//         $_SESSION['username'] = $email_login;
//         header('Location: index.php');
//     }
//     else
//     {
//         $_SESSION['status'] = "Email id atau Password salah";
//         header('Location: login.php');
//     }

// }


//ini kode php untuk about

if(isset($_POST['about_save']))
{
    $titleabt = $_POST['about_judul'];
    
    $descriptionabt = $_POST['about_deskripsi'];
    

    $queryabt = "INSERT INTO about (judul, deskripsi) VALUES ('$titleabt', '$descriptionabt' )";
    $query_run = mysqli_query($connection, $queryabt);

    if($query_run)
    {
        $_SESSION['success'] = "About telah ditambahkan";
        header('Location: aboutus.php');
    }
    else
    {
        $_SESSION['status'] = "About gagal ditambahkan";
        header('Location: aboutus.php');
    }

}

if(isset($_POST['btn_update_about']))
{
    $idabt = $_POST['id_edit_about'];
    $titleabt = $_POST['about_judul'];
    $descriptionabt = $_POST['about_deskripsi'];
    

    $queryabt = "UPDATE about SET judul='$titleabt',  deskripsi='$descriptionabt'  WHERE id='$idabt' ";
    $query_run = mysqli_query($connection, $queryabt);

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

if(isset($_POST['btn_delete_about']))
{
    $idabt = $_POST['id_delete_about'];

    $queryabt = "DELETE FROM about WHERE id='$idabt'";
    $query_run = mysqli_query($connection, $queryabt);

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

// if(isset($_POST['fasi_save']))
// {
//     $title = $_POST['nama_fasi'];
//     $description = $_POST['deskripsi_fasi'];
//     $image = $_FILES['gambar_fasi']['name'];

//         if(file_exists("upload/".$_FILES["gambar_fasi"]["name"]))
//         {
//             $store = $_FILES["gambar_fasi"]["name"];
//             $_SESSION['status'] = "Gambar telah ada. '.$store.'";
//             header('Location: fasilitas.php');
//         }
//         else
//         {
        
//             $query = "INSERT INTO fasilitas (judul, deskripsi, gambar) VALUES ('$title', '$description', '$image')";
//             $query_run = mysqli_query($connection, $query);
            
//             if($query_run)
//             {
//                 move_uploaded_file($_FILES["gambar_fasi"]["tmp_name"], "upload/".$_FILES["gambar_fasi"]["name"]);
//                 $_SESSION['success'] = "Fasilitas ditambahkan";
//                 header('Location: fasilitas.php');
//             }
//             else
//             {
//                 $_SESSION['status'] = "Fasilitas gagal ditambahkan";
//                 header('Location: fasilitas.php');
//             }
//         }
// }

// if(isset($_POST['updatebtn3']))
// {
//     $id = $_POST['edit_id'];
//     $judul = $_POST['nama_fasi'];
//     $deskripsi = $_POST['deskripsi_fasi'];
//     $image = $_FILES['gambar_fasi']['name'];

//     $query = "UPDATE fasilitas SET judul='$judul', deskripsi='$deskripsi', gambar='$image' WHERE id='$id' ";
//     $query_run = mysqli_query($connection, $query);

//     if($query_run)
//     {
//         move_uploaded_file($_FILES["gambar_fasi"]["tmp_name"], "upload/".$_FILES["gambar_fasi"]["name"]);
//         $_SESSION['success'] = "Data telah di Update";
//         header('Location: fasilitas.php');
//     }
//     else
//     {
//         $_SESSION['status'] = "Data gagal di Update";
//         header('Location: fasilitas.php');
//     }

// }

// if(isset($_POST['deletebtn3']))
// {
//     $id = $_POST['delete_id'];

//     $query = "DELETE FROM fasilitas WHERE id='$id'";
//     $query_run = mysqli_query($connection, $query);

//     if($query_run)
//     {
//         $_SESSION['success'] = "Data telah di Hapus";
//         header('Location: fasilitas.php');
//     }
//     else
//     {
//         $_SESSION['status'] = "Data gagal di Hapus";
//         header('Location: fasilitas.php');
//     }

// }

// if(isset($_POST['search_data']))
// {
//     $id = $_POST['id'];
//     $visible = $_POST['visible'];

//     $query = "UPDATE fasilitas SET visible='$visible' WHERE id='$id'";
//     $query_run = mysqli_query($connection, $query);
// }

// if(isset($_POST['delete_data2']))
// {
//     $id2 = "1";
//     $query = "DELETE FROM fasilitas WHERE visible='$id2'";
//     $query_run = mysqli_query($connection, $query);

//     if($query_run)
//     {
//         $_SESSION['success'] = "Data telah di Hapus";
//         header('Location: fasilitas.php');
//     }
//     else
//     {
//         $_SESSION['status'] = "Data gagal di Hapus";
//         header('Location: fasilitas.php');
//     }

// }

//paket

// if(isset($_POST['save_paket']))
// {
//     $title3 = $_POST['judul_paket'];
//     $description3 = $_POST['deskripsi_paket'];
//     $harga3 = $_POST['harga_paket'];
//     $image3 = $_FILES['gambar_paket']['name'];

//         if(file_exists("uppaket/".$_FILES["gambar_paket"]["name"]))
//         {
//             $store3 = $_FILES["gambar_paket"]["name"];
//             $_SESSION['status'] = "Gambar telah ada. '.$store3.'";
//             header('Location: packages.php');
//         }
//         else
//         {
        
//             $query = "INSERT INTO paket (nama, deskripsi, harga, gambar) VALUES ('$title3', '$description3', '$harga3', '$image3')";
//             $query_run = mysqli_query($connection, $query);
            
//             if($query_run)
//             {
//                 move_uploaded_file($_FILES["gambar_paket"]["tmp_name"], "uppaket/".$_FILES["gambar_paket"]["name"]);
//                 $_SESSION['success'] = "Paket ditambahkan";
//                 header('Location: packages.php');
//             }
//             else
//             {
//                 $_SESSION['status'] = "Paket gagal ditambahkan";
//                 header('Location: Packages.php');
//             }
//         }
// }

// if(isset($_POST['updatebtn4']))
// {
//     $id3 = $_POST['edit_id1'];
//     $title3 = $_POST['judul_paket'];
//     $deskripsi3 = $_POST['deskripsi_paket'];
//     $harga3 = $_POST['harga_paket'];
//     $image3 = $_FILES['gambar_paket']['name'];

//     $query = "UPDATE paket SET nama='$title3', deskripsi='$deskripsi3', harga='$harga3', gambar='$image3' WHERE id='$id3' ";
//     $query_run = mysqli_query($connection, $query);

//     if($query_run)
//     {
//         move_uploaded_file($_FILES["gambar_paket"]["tmp_name"], "uppaket/".$_FILES["gambar_paket"]["name"]);
//         $_SESSION['success'] = "Data telah di Update";
//         header('Location: packages.php');
//     }
//     else
//     {
//         $_SESSION['status'] = "Data gagal di Update";
//         header('Location: packages.php');
//     }

// }

// if(isset($_POST['btn_deletepaket']))
// {
//     $id = $_POST['edit_id1'];

//     $query = "DELETE FROM paket WHERE id='$id'";
//     $query_run = mysqli_query($connection, $query);

//     if($query_run)
//     {
//         $_SESSION['success'] = "Data telah di Hapus";
//         header('Location: packages.php');
//     }
//     else
//     {
//         $_SESSION['status'] = "Data gagal di Hapus";
//         header('Location: packages.php');
//     }

// }

//ini paket baru
if(isset($_POST['paket_save']))
{
    $namapkt = $_POST['nama_paket'];
    $hargapkt = $_POST['harga_paket'];
    $despkt = $_POST['des_paket'];
    $rinpkt = $_POST['rin_paket'];
    $gambarpkt = $_FILES['gambar_paket']['name'];
    $dekorpkt = $_FILES['gambar_dekor']['name'];
    $id_baru = $_POST['id_paket_baru'];

        if(file_exists("upload/".$_FILES["gambar_paket"]["name"]))
        {
            $store1 = $_FILES["gambar_paket"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store1.'";
            header('Location: paket.php');
        }
        else
        {
        
            $query = "INSERT INTO packages (id_paket, nama_paket, harga, gambar) VALUES ('$id_baru', '$namapkt', '$hargapkt', '$gambarpkt')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                $query2 = "INSERT INTO packages_detail (id_paket, deskripsi, rincian_paket, gambar_dekorasi) VALUES ('$id_baru', '$despkt', '$rinpkt', '$dekorpkt')";
                $query_run2 = mysqli_query($connection, $query2);

                if($query_run2)
                {
                    move_uploaded_file($_FILES["gambar_paket"]["tmp_name"], "upload/".$_FILES["gambar_paket"]["name"]);
                    $_SESSION['success'] = "Paket ditambahkan";
                    header('Location: paket.php');
                }
                else
                {
                    $_SESSION['status'] = "Detail Paket gagal ditambahkan";
                    header('Location: paket.php');
                }

                if($query_run2)
                {
                    move_uploaded_file($_FILES["gambar_dekor"]["tmp_name"], "upload/".$_FILES["gambar_dekor"]["name"]);
                    
                }
                else
                {
                    $_SESSION['status'] = "Gambar kedua gagal ditambahkan";
                }

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
    $idpkt = $_POST['id_edit_paket'];
    $namapkt = $_POST['nama_paket'];
    $hargapkt = $_POST['harga_paket'];
    $gambarpkt = $_FILES['gambar_paket']['name'];

    $querypkt = "UPDATE packages SET nama_paket='$namapkt', harga='$hargapkt', gambar='$gambarpkt' WHERE id_paket='$idpkt' ";
    $query_run = mysqli_query($connection, $querypkt);

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
    $idpkt = $_POST['id_deletepkt'];

    $querypkt = "DELETE FROM packages WHERE id_paket='$idpkt'";
    $query_run = mysqli_query($connection, $querypkt);

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
    $idpkt = $_POST['id_detail_paket'];
    $description = $_POST['edit_deskripsipkt'];
    $rinpkt = $_POST['edit_rincianpkt'];
    $dekorpkt1 = $_FILES['gambar_dekor']['name'];
    

    $querypkt = "UPDATE packages_detail SET deskripsi='$description', rincian_paket='$rinpkt', gambar_dekorasi='$dekorpkt1' WHERE id_paket='$idpkt' ";
    $query_run = mysqli_query($connection, $querypkt);

    if($query_run)
    {
        move_uploaded_file($_FILES["gambar_dekor"]["tmp_name"], "updet/".$_FILES["gambar_dekor"]["name"]);
        
        $_SESSION['success'] = "Data telah di Update";
        header('Location: paket.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Update";
        header('Location: paket.php');
    }

}

if(isset($_POST['search_data']))
{
    $idbox = $_POST['idbox'];
    $visible = $_POST['visible'];

    $querypkt = "UPDATE packages SET status_terkunci ='$visible' WHERE id_paket='$idbox'";
    $query_run = mysqli_query($connection, $querypkt);
}




//kode untuk gallery
if(isset($_POST['gallery_save']))
{
    
    $gambarglr = $_FILES['gambar_gallery']['name'];

        if(file_exists("upgallery/".$_FILES["gambar_gallery"]["name"]))
        {
            $storeglr = $_FILES["gambar_gallery"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$storeglr.'";
            header('Location: gallery.php');
        }
        else
        {
        
            $query = "INSERT INTO gallery (gambar) VALUES ('$gambarglr')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_gallery"]["tmp_name"], "upgallery/".$_FILES["gambar_gallery"]["name"]);
                $_SESSION['success'] = "Gambar ditambahkan";
                header('Location: gallery.php');
            }
            else
            {
                $_SESSION['status'] = "Gambar gagal ditambahkan";
                header('Location: gallery.php');
            }
        }
}

if(isset($_POST['deleteglr']))
{
    $idglr = $_POST['id_deleteglr'];

    $queryglr = "DELETE FROM gallery WHERE id='$idglr'";
    $query_run = mysqli_query($connection, $queryglr);

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
            $storetst = $_FILES["gambar_testi"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$storetst.'";
            header('Location: testimoni.php');
        }
        else
        {
        
            $querytst = "INSERT INTO testimoni (nama_user, judul, deskripsi, gambar_user) VALUES ('$namatst', '$judultst', '$destst', '$gambartst')";
            $query_run = mysqli_query($connection, $querytst);
            
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
    $idtst = $_POST['id_testi'];
    $namatst = $_POST['nama_testi'];
    $judultst = $_POST['judul_testi'];
    $destst = $_POST['des_testi'];
    $gambartst = $_FILES['gambar_testi']['name'];

    $querytst = "UPDATE testimoni SET nama_user='$namatst', judul='$judultst', deskripsi='$destst', gambar_user='$gambartst' WHERE id='$idtst' ";
    $query_run = mysqli_query($connection, $querytst);

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
    $idtst = $_POST['id_deletetesti'];

    $querytst = "DELETE FROM testimoni WHERE id='$idtst'";
    $query_run = mysqli_query($connection, $querytst);

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

//insert ke paket

if(isset($_POST['submitpesanan']))
{
    $idpaketpsn = $_POST['id'];
    #$tanggalpemesanan = $_POST['tanggal_penggunaan'];
    $tanggalpenggunaan = $_POST['tanggal_penggunaan'];
    $namapemesan = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['tlp'];
    $bukti = $_FILES['payment_proof']['name'];

        if(file_exists("../Admin/upbukti/".$_FILES["payment_proof"]["name"]))
        {
            $store9 = $_FILES["payment_proof"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store9.'";
            header('Location: ../Front-end-wizz/pesananSaya.php');
        }
        else
        {
        
            $query = "INSERT INTO pemesanan (id_pesan, id_paket, tanggal_pemesanan, tanggal_penggunaan, nama, alamat, telpon, bukti, status) VALUES ('', '$idpaketpsn', NOW(), '$tanggalpenggunaan', '$namapemesan', '$alamat', '$notelp', '$bukti', 'Menunggu Konfirmasi')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["payment_proof"]["tmp_name"], "upbukti/".$_FILES["payment_proof"]["name"]);
                $_SESSION['success'] = "Pesanan ditambahkan";
                header('Location: ../Front-end-wizz/pesananSaya.php');
            }
            else
            {
                $_SESSION['status'] = "Pesanan gagal ditambahkan";
                header('Location: ../Front-end-wizz/pesananSaya.php');
                
            }
        }
}


if(isset($_POST['updateconf']))
{
    $idconfir = $_POST['idpesan'];

    $query = "UPDATE pemesanan SET status ='Terkonfirmasi' WHERE id_pesan='$idconfir' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Konfirmasi";
        header('Location: pesanan.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Konfirmasi";
        header('Location: pesanan.php');
    }

}

if(isset($_POST['deletepsn']))
{
    $idconfir = $_POST['idpesan'];

    $query = "DELETE FROM pemesanan WHERE id_pesan='$idconfir'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: pesanan.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: pesanan.php');
    }

}

//gallery landing
if(isset($_POST['gallerylnd_save']))
{
    
    $gambarglnd = $_FILES['gambar_gallery2']['name'];

        if(file_exists("upgallery/".$_FILES["gambar_gallery2"]["name"]))
        {
            $store0 = $_FILES["gambar_gallery2"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store0.'";
            header('Location: gallerylanding.php');
        }
        else
        {
        
            $query = "INSERT INTO landing_gallery (gambar) VALUES ('$gambarglnd')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_gallery2"]["tmp_name"], "upgallery/".$_FILES["gambar_gallery2"]["name"]);
                $_SESSION['success'] = "Gambar ditambahkan";
                header('Location: gallerylanding.php');
            }
            else
            {
                $_SESSION['status'] = "Gambar gagal ditambahkan";
                header('Location: gallerylanding.php');
            }
        }
}

if(isset($_POST['deleteglnd']))
{
    $id = $_POST['id_deleteglnd'];

    $query = "DELETE FROM landing_gallery WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: gallerylanding.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: gallerylanding.php');
    }

}

//Login Baru
if(isset($_POST['tombol_daftar'])) {
    $userMail = $_POST['email_login'];
    $userPass = $_POST['password_login'];
    $userName = $_POST['username_login'];

    $query = "INSERT INTO user VALUES ('', '$userName', '$userMail', '$userPass', 'user')";
    $result = mysqli_query($connection, $query);
    header('Location: ../Admin/login.php');
} 

if (isset($_POST['tombol_lupa'])) {
    $userMail = $_POST['email_login'];
    $userPass = $_POST['password_login'];
    $userPass2 = $_POST['password2_login'];

    if ($userPass === $userPass2) {
        $query = "UPDATE user set password='$userPass' WHERE email='$userMail'";
        $result = mysqli_query($connection, $query);
        header('Location: ../Admin/login.php');
    }
}

//experience

if(isset($_POST['exp_save']))
{
    $tahunexp = $_POST['tahun_exp'];
    $pernikahanexp = $_POST['pernikahan_exp'];
    $pasanganexp = $_POST['pasangan_exp'];
    

    $queryexp = "INSERT INTO experience (tahun_pengalaman, pernikahan_terlaksana, pasangan_pengantin) VALUES ('$tahunexp', '$pernikahanexp', '$pasanganexp')";
    $query_run = mysqli_query($connection, $queryexp);

    if($query_run)
    {
        $_SESSION['success'] = "Pengalaman telah ditambahkan";
        header('Location: experience.php');
    }
    else
    {
        $_SESSION['status'] = "Pengalaman gagal ditambahkan";
        header('Location: experience.php');
    }

}

if(isset($_POST['btn_update_exp']))
{
    $idexp = $_POST['id_edit_exp'];
    $tahunexp = $_POST['tahun_exp'];
    $pernikahanexp = $_POST['pernikahan_exp'];
    $pasanganexp = $_POST['pasangan_exp'];
    

    $queryexp = "UPDATE experience SET tahun_pengalaman='$tahunexp',  pernikahan_terlaksana='$pernikahanexp', pasangan_pengantin='$pasanganexp' WHERE id='$idexp' ";
    $query_run = mysqli_query($connection, $queryexp);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Update";
        header('Location: experience.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Update";
        header('Location: experience.php');
    }

}

if(isset($_POST['btn_delete_exp']))
{
    $idexp = $_POST['id_delete_exp'];

    $queryabt = "DELETE FROM experience WHERE id='$idexp'";
    $query_run = mysqli_query($connection, $queryabt);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: experience.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: experience.php');
    }

}

//blog

if(isset($_POST['berita_save']))
{
    $namabl = $_POST['nama_blog'];
    $judulbl = $_POST['judul_blog'];
    $urlbl = $_POST['url_berita'];
    $sumberbl = $_POST['sumber_berita'];
    $tglbl = $_POST['tanggal_berita'];
    $gambarbl = $_FILES['gambar_berita']['name'];

        if(file_exists("upblog/".$_FILES["gambar_berita"]["name"]))
        {
            $storebl = $_FILES["gambar_berita"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$storetbl.'";
            header('Location: blog.php');
        }
        else
        {
        
            $querytst = "INSERT INTO blog (nama_blog, judul_blog, url_berita, sumber_berita, tanggal_berita, gambar) VALUES ('$namabl', '$judulbl', '$urlbl', '$sumberbl', '$tglbl', '$gambarbl')";
            $query_run = mysqli_query($connection, $querytst);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_berita"]["tmp_name"], "upblog/".$_FILES["gambar_berita"]["name"]);
                $_SESSION['success'] = "blog ditambahkan";
                header('Location: blog.php');
            }
            else
            {
                $_SESSION['status'] = "blog gagal ditambahkan";
                header('Location: blog.php');
            }
        }
}

if(isset($_POST['deleteblog']))
{
    $idebl = $_POST['id_deleteblog'];

    $querybl = "DELETE FROM blog WHERE id='$idebl'";
    $query_run = mysqli_query($connection, $querybl);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: blog.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: blog.php');
    }

}

//insert ke paket

if(isset($_POST['submitpesanan']))
{
    $idpaketpsn = $_POST['id'];
    #$tanggalpemesanan = $_POST['tanggal_penggunaan'];
    $tanggalpenggunaan = $_POST['tanggal_penggunaan'];
    $namapemesan = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['tlp'];
    $bukti = $_FILES['payment_proof']['name'];

        if(file_exists("../Admin/upbukti/".$_FILES["payment_proof"]["name"]))
        {
            $store9 = $_FILES["payment_proof"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store9.'";
            header('Location: ../Front-end-wizz/pesananSaya.php');
        }
        else
        {
        
            $query = "INSERT INTO pemesanan (id_pesan, id_paket, tanggal_pemesanan, tanggal_penggunaan, nama, alamat, telpon, bukti, status) VALUES ('', '$idpaketpsn', NOW(), '$tanggalpenggunaan', '$namapemesan', '$alamat', '$notelp', '$bukti', 'Menunggu Konfirmasi')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["payment_proof"]["tmp_name"], "upbukti/".$_FILES["payment_proof"]["name"]);
                $_SESSION['success'] = "Pesanan ditambahkan";
                header('Location: ../Front-end-wizz/pesananSaya.php');
            }
            else
            {
                $_SESSION['status'] = "Pesanan gagal ditambahkan";
                header('Location: ../Front-end-wizz/pesananSaya.php');
                
            }
        }
}


if(isset($_POST['updateconf']))
{
    $idconfir = $_POST['idpesan'];

    $query = "UPDATE pemesanan SET status ='Terkonfirmasi' WHERE id_pesan='$idconfir' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Konfirmasi";
        header('Location: pesanan.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Konfirmasi";
        header('Location: pesanan.php');
    }

}

if(isset($_POST['deletepsn']))
{
    $idconfir = $_POST['idpesan'];

    $query = "DELETE FROM pemesanan WHERE id_pesan='$idconfir'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: pesanan.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: pesanan.php');
    }

}

//gallery landing
if(isset($_POST['gallerylnd_save']))
{
    
    $gambarglnd = $_FILES['gambar_gallery2']['name'];

        if(file_exists("upgallery/".$_FILES["gambar_gallery2"]["name"]))
        {
            $store0 = $_FILES["gambar_gallery2"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$store0.'";
            header('Location: gallerylanding.php');
        }
        else
        {
        
            $query = "INSERT INTO landing_gallery (gambar) VALUES ('$gambarglnd')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_gallery2"]["tmp_name"], "upgallery/".$_FILES["gambar_gallery2"]["name"]);
                $_SESSION['success'] = "Gambar ditambahkan";
                header('Location: gallerylanding.php');
            }
            else
            {
                $_SESSION['status'] = "Gambar gagal ditambahkan";
                header('Location: gallerylanding.php');
            }
        }
}

if(isset($_POST['deleteglnd']))
{
    $id = $_POST['id_deleteglnd'];

    $query = "DELETE FROM landing_gallery WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: gallerylanding.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: gallerylanding.php');
    }

}

//Login Baru
if(isset($_POST['tombol_daftar'])) {
    $userMail = $_POST['email_login'];
    $userPass = $_POST['password_login'];
    $userName = $_POST['username_login'];

    $query = "INSERT INTO user VALUES ('', '$userName', '$userMail', '$userPass', 'user')";
    $result = mysqli_query($connection, $query);
    header('Location: ../Admin/login.php');
} 

if (isset($_POST['tombol_lupa'])) {
    $userMail = $_POST['email_login'];
    $userPass = $_POST['password_login'];
    $userPass2 = $_POST['password2_login'];

    if ($userPass === $userPass2) {
        $query = "UPDATE user set password='$userPass' WHERE email='$userMail'";
        $result = mysqli_query($connection, $query);
        header('Location: ../Admin/login.php');
    }
}

//experience

if(isset($_POST['exp_save']))
{
    $tahunexp = $_POST['tahun_exp'];
    $pernikahanexp = $_POST['pernikahan_exp'];
    $pasanganexp = $_POST['pasangan_exp'];
    

    $queryexp = "INSERT INTO experience (tahun_pengalaman, pernikahan_terlaksana, pasangan_pengantin) VALUES ('$tahunexp', '$pernikahanexp', '$pasanganexp')";
    $query_run = mysqli_query($connection, $queryexp);

    if($query_run)
    {
        $_SESSION['success'] = "Pengalaman telah ditambahkan";
        header('Location: experience.php');
    }
    else
    {
        $_SESSION['status'] = "Pengalaman gagal ditambahkan";
        header('Location: experience.php');
    }

}

if(isset($_POST['btn_update_exp']))
{
    $idexp = $_POST['id_edit_exp'];
    $tahunexp = $_POST['tahun_exp'];
    $pernikahanexp = $_POST['pernikahan_exp'];
    $pasanganexp = $_POST['pasangan_exp'];
    

    $queryexp = "UPDATE experience SET tahun_pengalaman='$tahunexp',  pernikahan_terlaksana='$pernikahanexp', pasangan_pengantin='$pasanganexp' WHERE id='$idexp' ";
    $query_run = mysqli_query($connection, $queryexp);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Update";
        header('Location: experience.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Update";
        header('Location: experience.php');
    }

}

if(isset($_POST['btn_delete_exp']))
{
    $idexp = $_POST['id_delete_exp'];

    $queryabt = "DELETE FROM experience WHERE id='$idexp'";
    $query_run = mysqli_query($connection, $queryabt);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: experience.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: experience.php');
    }

}

//blog

if(isset($_POST['berita_save']))
{
    $namabl = $_POST['nama_blog'];
    $judulbl = $_POST['judul_blog'];
    $urlbl = $_POST['url_berita'];
    $sumberbl = $_POST['sumber_berita'];
    $tglbl = $_POST['tanggal_berita'];
    $gambarbl = $_FILES['gambar_berita']['name'];

        if(file_exists("upblog/".$_FILES["gambar_berita"]["name"]))
        {
            $storebl = $_FILES["gambar_berita"]["name"];
            $_SESSION['status'] = "Gambar telah ada. '.$storetbl.'";
            header('Location: blog.php');
        }
        else
        {
        
            $querytst = "INSERT INTO blog (nama_blog, judul_blog, url_berita, sumber_berita, tanggal_berita, gambar) VALUES ('$namabl', '$judulbl', '$urlbl', '$sumberbl', '$tglbl', '$gambarbl')";
            $query_run = mysqli_query($connection, $querytst);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["gambar_berita"]["tmp_name"], "upblog/".$_FILES["gambar_berita"]["name"]);
                $_SESSION['success'] = "blog ditambahkan";
                header('Location: blog.php');
            }
            else
            {
                $_SESSION['status'] = "blog gagal ditambahkan";
                header('Location: blog.php');
            }
        }
}

if(isset($_POST['deleteblog']))
{
    $idebl = $_POST['id_deleteblog'];

    $querybl = "DELETE FROM blog WHERE id='$idebl'";
    $query_run = mysqli_query($connection, $querybl);

    if($query_run)
    {
        $_SESSION['success'] = "Data telah di Hapus";
        header('Location: blog.php');
    }
    else
    {
        $_SESSION['status'] = "Data gagal di Hapus";
        header('Location: blog.php');
    }

}

?>
