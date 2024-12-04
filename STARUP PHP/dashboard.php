<?php 
    session_start();
    if($_SESSION['username'] == null) {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Startup Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h1>Star up</h1>
      <nav>
        <ul>
          <li>Beranda</li>
          <a href="tambah-keuangan.php">
          <li>Laporan</li>
          </a>
         <a href="tambah-keperluan.php">
            <li>Keperluan</li>
        </a> 
        </ul>
      </nav>
    </aside>
    <main class="content">
      <div class="graphs">
        <div class="graph">
          <h2>Laporan Keuangan</h2>
          <?php 
          include 'koneksi.php';
          $query_keuangan = "SELECT COUNT(*) AS total_keuangan FROM tb_keuangan";
          $result_keuangan = mysqli_query($koneksi, $query_keuangan);
          $row_keuangan = mysqli_fetch_assoc($result_keuangan);
          $total_keuangan = $row_keuangan['total_keuangan'];
          echo "<h2>$total_keuangan</h2>";
          ?>
        </div>
        <div class="graph">
          <h2>Keperluan</h2>
         <?php 
         $query_keperluan = "SELECT COUNT(*) AS total_keperluan FROM tb_keperluan";
         $result_keperluan = mysqli_query($koneksi, $query_keperluan);
         $row_keperluan = mysqli_fetch_assoc($result_keperluan);
         $total_keperluan = $row_keperluan['total_keperluan'];
         echo"<h2>$total_keperluan</h2>"
         ?>
        </div>
      </div>
      <a href="cetak.php">
        <button>Cetak</button>
      </a>
      <table>
                <thead>
                    <tr>
                        
                        <th>Jumlah Uang</th>
                        <th>Keperluan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>                        
                    </tr>
                </thead>
                <tbody>
                <?php
                include 'koneksi.php';
$query = "SELECT * 
          FROM tb_keuangan 
          INNER JOIN tb_keperluan ON tb_keuangan.id_keperluan = tb_keperluan.id";

$result = mysqli_query($koneksi, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tanggal = date('d F Y', strtotime($row['tanggal']));
        echo "<tr>
                <td>{$row['jumlah_uang']}</td>
                <td>{$row['keperluan']}</td>
                <td>{$row['tanggal']}</td>
                <td> <a href='delete'></a>  <button type='submit' class='btn btn-danger' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Hapus</button></td>

              </tr>";
    }
}
?>

                </tbody>
            </table>
    </main>
  </div>
</body>
</html>
