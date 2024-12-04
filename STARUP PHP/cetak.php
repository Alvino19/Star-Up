<?php
include "koneksi.php"; // Koneksi ke database
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

// Query untuk mendapatkan data dari tb_keuangan dan tb_keperluan
$query = mysqli_query($koneksi, "
    SELECT 
       *
    FROM tb_keuangan
    INNER JOIN tb_keperluan ON tb_keuangan.id_keperluan = tb_keperluan.id
");

// Membuat struktur HTML untuk laporan
$html = '<center><h3>Laporan Keuangan dan Keperluan</h3></center><hr/><br>';
$html .= '<table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <th>No</th>
                <th>Jumlah Uang</th>
                <th>Keperluan</th>
                <th>Tanggal </th>
             
            </tr>';
$no = 1;

while ($data = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $data['jumlah_uang'] . "</td>
                <td>" . $data['keperluan'] . "</td>
                <td>" . date('d-m-Y H:i:s', strtotime($data['tanggal'])) . "</td>
              </tr>";
    $no++;
}

$html .= "</table>";

// Memuat HTML ke dalam DOMPDF
$dompdf->loadHtml($html);

// Mengatur ukuran kertas dan orientasi
$dompdf->setPaper('A4', 'landscape');

// Merender PDF
$dompdf->render();

// Menyimpan dan memaksa unduhan file PDF
$dompdf->stream('laporan-keuangan-keperluan.pdf');
?>
