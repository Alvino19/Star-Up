<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Keperluan Form</title>
    <link rel="stylesheet" href="{{ asset('/login.css') }}" />
  </head>
  <body>
    <a href="#" class="home-button">home</a>
    <div class="container">
      <div class="form-box">
        <h2>Keperluan</h2>
        <form action="/postKeperluan" method="post">
          @csrf
          <div class="input-box">
            <input type="text" name="keperluan" required />
            <label>Keperluan</label>
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
