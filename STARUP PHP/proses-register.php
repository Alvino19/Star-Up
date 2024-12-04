<?php 
include 'koneksi.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $sql = "INSERT INTO tb_admin VALUES(NULL, '$email', '$username', '$password')";
    if (mysqli_query($koneksi, $sql)) {
        header("location:login.php");
    } else {
        return "Terjadi kesalahan, coba lagi nanti.";
    }
?>
