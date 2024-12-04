<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Startup</title>
    <link rel="stylesheet" href="{{ asset('/style.css') }}" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a onclick="showTable()">Laporan Keuangan</a></li>
          <li><a href="#">Tentang</a></li>
          <li><a onclick="showMessage()">Bantuan</a></li>
          <script>
            function showMessage() {
              alert("Fitur akan segera dibuatkan!");
            }
          </script>
        </ul>
      </nav>
    </header>

    <main>
      <h3>Hallo, Selamat Datang</h3>
      <h1>Star Up</h1>
      <p>Pengelola Keuangan Perusahaan</p>
      <div class="buttons">
        <a href="login.php" class="btn login">Login</a>
        <a href="register.php" class="btn sign">Sign</a>
      </div>
      <table id="myTable">
        <tr>
          <th>Nama</th>
          <th>Usia</th>
          <th>Kota</th>
        </tr>
        <tr>
          <td>Alice</td>
          <td>25</td>
          <td>Bandung</td>
        </tr>
        <tr>
          <td>Bob</td>
          <td>30</td>
          <td>Jakarta</td>
        </tr>
        <tr>
          <td>Charlie</td>
          <td>28</td>
          <td>Surabaya</td>
        </tr>
      </table>
      <script>
        function showTable() {
          var table = document.getElementById("myTable");
          if (table.style.display === "none") {
            table.style.display = "block";
          } else {
            table.style.display = "none";
          }
        }
      </script>
    </main>
  </body>
</html>
