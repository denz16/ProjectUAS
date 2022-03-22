<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}


if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST['remember'])) {
        // buat cookie
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      header("Location: index.php");
      exit;
    }
  }

  $error = true;
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="icon" type="image/x-icon" href="logo/cake1.png">
</head>

<body id="body" class="bg-dark">

  <br>
  <br>
  <div class="col-lg-6 login-btm login-button" style="float: left;">
    <a href="login.php"><button type="button" class="btn btn-outline-primary">Login User</button></a>
  </div>

  <?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
  <?php endif; ?>

  <form action="" method="post" id="form-group">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
          <div class="col-lg-12 login-key">
            <i class="fa fa-key" aria-hidden="true"></i>
          </div>
          <div class="col-lg-12 login-title">
            Admin Panel
          </div>

          <div class="col-lg-12 login-form" id="login-form">
            <div class="col-lg-12 login-form">
              <form id="form-control:focus">
                <div class="form-group" id="input1">
                  <label class="form-control-label" for="username" name="username" id="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group" id="password">
                  <label class="form-control-label" name="password" id="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>

                <li>
                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember" style="color: #ECF0F5;">Remember me</label>
                </li>

                <div class="col-lg-12 loginbttm">
                  <div class="col-lg-6 login-btm login-text">
                    <!-- Error Message -->
                  </div>
                  <div class="col-lg-6 login-btm login-button">
                    <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-3 col-md-2"></div>
        </div>
      </div>

      <style>
        body {
          background: #222D32;
          font-family: 'Roboto', sans-serif;
        }

        .login-box {
          margin-top: 75px;
          height: auto;
          background: #1A2226;
          text-align: center;
          box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .login-key {
          height: 100px;
          font-size: 80px;
          line-height: 100px;
          background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }

        .login-title {
          margin-top: 15px;
          text-align: center;
          font-size: 30px;
          letter-spacing: 2px;
          margin-top: 15px;
          font-weight: bold;
          color: #ECF0F5;
        }

        .login-form {
          margin-top: 25px;
          text-align: left;
        }

        input[type=text] {
          background-color: #1A2226;
          border: none;
          border-bottom: 2px solid #0DB8DE;
          border-top: 0px;
          border-radius: 0px;
          font-weight: bold;
          outline: 0;
          margin-bottom: 20px;
          padding-left: 0px;
          color: #ECF0F5;
        }

        input[type=password] {
          background-color: #1A2226;
          border: none;
          border-bottom: 2px solid #0DB8DE;
          border-top: 0px;
          border-radius: 0px;
          font-weight: bold;
          outline: 0;
          padding-left: 0px;
          margin-bottom: 20px;
          color: #ECF0F5;
        }

        .form-group {
          margin-bottom: 40px;
          outline: 0px;
        }

        .form-control:focus {
          border-color: inherit;
          -webkit-box-shadow: none;
          box-shadow: none;
          border-bottom: 2px solid #0DB8DE;
          outline: 0;
          background-color: #1A2226;
          color: #ECF0F5;
        }

        input:focus {
          outline: none;
          box-shadow: 0 0 0;
        }

        label {
          margin-bottom: 0px;
        }

        .form-control-label {
          font-size: 10px;
          color: #6C6C6C;
          font-weight: bold;
          letter-spacing: 1px;
        }

        .btn-outline-primary {
          border-color: #0DB8DE;
          color: #0DB8DE;
          border-radius: 0px;
          font-weight: bold;
          letter-spacing: 1px;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        .btn-outline-primary:hover {
          background-color: #0DB8DE;
          right: 0px;
        }

        .login-btm {
          float: left;
        }

        .login-button {
          padding-right: 0px;
          text-align: right;
          margin-bottom: 25px;
        }

        .login-text {
          text-align: left;
          padding-left: 0px;
          color: #A2A4A4;
        }

        .loginbttm {
          padding: 0px;
        }
      </style>

  </form>







</body>

</html>