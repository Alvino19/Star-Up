<?php
// Include koneksi database
include "koneksi.php";

// Periksa apakah form dikirim

    // Ambil data dari form
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $jumlah_uang = mysqli_real_escape_string($koneksi, $_POST['jumlah_uang']);
    $id_keperluan = mysqli_real_escape_string($koneksi, $_POST['id_keperluan']);

    // Validasi input (opsional)
    if (empty($tanggal) || empty($id_keperluan)) {
        echo "Semua field harus diisi.";
        exit;
    }

    // Query untuk menambahkan data
    $sql = "INSERT INTO tb_keuangan (jumlah_uang,tanggal, id_keperluan) VALUES ('$jumlah_uang','$tanggal', '$id_keperluan')";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href = 'dashboard.php'; // Ganti dengan halaman yang diinginkan
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

// Tutup koneksi
mysqli_close($koneksi);
?>
