<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <a href="#" class="home-button">home</a>
    <div class="container">
      <div class="form-box">
        <h2>Sign Up</h2>
        <form method="post" action="proses-register.php">
          <div class="input-box">
            <input type="text" name="username" required />
            <label>Username</label>
          </div>
          <div class="input-box">
            <input type="email" name="email" required />
            <label>Email</label>
          </div>
          <div class="input-box">
            <input type="password" name="password" required />
            <label>Password</label>
          </div>
          <button type="submit" class="submit-btn">Sign</button>
        </form>
        <a href="login.php" class="bottom-text">have an account?</a>
      </div>
    </div>
  </body>
</html>
