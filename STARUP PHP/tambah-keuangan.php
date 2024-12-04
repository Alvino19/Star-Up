<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Keperluan Form</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <a href="#" class="home-button">home</a>
    <div class="container">
      <div class="form-box">
        <h2>Keuangan</h2>
        <form action="post-keuangan.php" method="post">
        <div class="input-box">
            <input type="text" name="jumlah_uang" required />
            <label>Jumlah Saldo</label>
          </div> 
          <div class="input-box">
          <select name="id_keperluan" value="id_keperluan" id="">
                    <?php
        include "koneksi.php";
        $user_to_find=$_SESSION['username'];
        $sql = "SELECT * FROM tb_keperluan";
        $result = mysqli_query($koneksi, $sql);  
        if (mysqli_num_rows($result) > 0) {  
          while ($row = mysqli_fetch_assoc($result)) {  
            echo '<option value="' . htmlspecialchars($row['id'], ENT_QUOTES) . '">' . htmlspecialchars($row['keperluan'], ENT_QUOTES) . '</option>';
          }  
      } else {  
          echo 'Pengguna tidak ditemukan.';  
      }  
      ?>

          </select>
           
          </div> 
          <style>
            select {  
    width: 100%; /* Mengatur lebar penuh */  
    padding: 10px; /* Ruang di dalam select */  
    border: 1px solid #ddd; /* Garis batas */  
    border-radius: 5px; /* Sudut membulat */  
    background-color: #f9f9f9; /* Warna latar belakang */  
    color: #333; /* Warna teks */  
    font-size: 16px; /* Ukuran font */  
    appearance: none; /* Menghilangkan gaya default */  
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.5 5.5a.5.5 0 0 1 .5-.5h12a.5.5 0 0 1 .5.5.5.5 0 0 1-.146.354l-6 6a.5.5 0 0 1-.707 0l-6-6A.5.5 0 0 1 1.5 5.5z"/></svg>'); /* Gambar panah */  
    background-repeat: no-repeat; /* Tidak mengulangi gambar */  
    background-position: right 10px center; /* Posisi gambar */  
    background-size: 12px; /* Ukuran gambar */  
    transition: border-color 0.3s; /* Efek transisi */  
}  

select:focus {  
    border-color: #9b59b6; /* Warna batas saat fokus */  
    outline: none; /* Menghilangkan outline default */  
    background-color: #ffffff; /* Warna latar belakang saat fokus */  
}  

/* Tambahan gaya untuk efek hover */  
select:hover {  
    border-color: #9b59b6; /* Warna batas saat hover */  
}
          </style>
          <div class="input-box">
            <input type="date" name="tanggal" required />
            <label>Tanggal</label>
          </div> 
          <div id="toast"></div>
          <button onclick="showToast()" class="submit-btn">Submit</button>
          <script>
            function showToast() {
              const toast = document.getElementById("toast");
              toast.className = "show";
              toast.innerHTML = "Login Berhasil!";

              setTimeout(() => {
                toast.className = toast.className.replace("show", "");
              }, 3000);

              toast.onclick = function () {
                toast.className = toast.className.replace("show", "");
              };
            }
          </script>
          <style>
            #toast {
              visibility: hidden;
              min-width: 250px;
              margin-left: -125px;
              background-color: #333;
              color: #fff;
              text-align: center;
              border-radius: 5px;
              padding: 16px;
              position: fixed;
              z-index: 1;
              left: 50%;
              bottom: 30px;
              font-size: 17px;
              opacity: 0;
              transition: opacity 0.5s ease-in-out, visibility 0s linear 0.5s;
            }

            #toast.show {
              visibility: visible;
              opacity: 1;
              transition: opacity 0.5s ease-in-out;
            }

            #toast:hover {
              cursor: pointer;
            }
          </style>
        </form>
        
      </div>
    </div>
  </body>
</html>
