<?php

include("../Admin/security.php");

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer-master/src/Exception.php';
require 'vendor/PHPMailer-master/src/PHPMailer.php';
require 'vendor/PHPMailer-master/src/SMTP.PHP';

if (isset($_POST['submitEmail'])) {
    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'daygone002@gmail.com';
    $mail->Password   = 'bywanrfvkjkpjble';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom('daygone002@gmail.com');
    $mail->addAddress($_POST["email"]);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    // Try to send the email
    try {
        $mail->send();
        
        // If the email is sent successfully, insert data into the database
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $nomor_kontak = $_POST["nomor"];
        $pesan = $_POST["pesan"];

        // Connection to the database (modify with your actual database credentials)
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "wedding-organizer";

        $connection = mysqli_connect($hostname, $username, $password, $database);

        if (!$connection) {
            die("Connection to the database failed: " . mysqli_connect_error());
        }

        // Insert data into the database
        $insertQuery = "INSERT INTO kontak_saya (nama, email, nomor_kontak, pesan) VALUES ('$nama', '$email', '$nomor_kontak', '$pesan')";
        mysqli_query($connection, $insertQuery);

        // Close the database connection
        mysqli_close($connection);

        echo "
            <script>
                alert('Sent Successfully and Data Inserted into Database');
                document.location.href = 'home.php'
            </script>
        ";
    } catch (Exception $e) {
        echo "
            <script>
                alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
                document.location.href = 'home.php'
            </script>
        ";
    }
}
?>
