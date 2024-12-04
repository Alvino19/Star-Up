<?php
include 'koneksi.php';

    $keperluan=$_POST['keperluan'];
    if (!empty($keperluan)) {
        $sql = "INSERT INTO tb_keperluan (keperluan) VALUES ('$keperluan')";

        if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil ditambahkan!";
            header('location:dashboard.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Field keperluan tidak boleh kosong!";
    }
mysqli_close($koneksi);
?>