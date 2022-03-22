<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$menu = query("SELECT * FROM menu");

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $menu = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk RTC</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <link rel="icon" type="image/x-icon" href="logo/cake1.png">
</head>

<body style="height:1500px">

  <div class="container-fluid text-center bg-dark">
    <br>
    <div id="t" class="card bg-dark" style="height: 200px;">
      <img class="card-img-top" src="image/R1.png" alt="Card image" style="height: 200px;">
      <div class="card-img-overlay">
        <h4 class="card-title">Roti Tata Cantik</h4>
        <p class="card-text">
          Kami menyediakan berbagai jenis menu kue dan roti yang siap untuk
          menemani hari-hari anda
        </p>
        <p> <strong>Note:</strong> Jika ada saran dan masukan bisa hubungi kami dilaman <strong>About Us</strong></p>
      </div>
    </div>
    <br>
  </div>


  <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.html">
      <img src="logo/cake1.png" alt="logo" style="width:80px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul id="li" class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Home
          </a>
          <div id="li" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="index.html">Home</a>
            <a class="dropdown-item" href="Produk.html">Cake</a>
            <a class="dropdown-item" href="Produk2.html">Bread</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">shopping cart</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Store
          </a>
          <div id="li" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Order</a>
            <a class="dropdown-item" href="https://t.me/devinursuryanita">Buy Now</a>
            <a class="dropdown-item" href="Produk3.html">Other</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Mitra
          </a>
          <div id="li" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Mitra.html">Mitra</a>
            <a class="dropdown-item" href="Maps.html">Location or Maps</a>
            <a class="dropdown-item" href="Mitra.html">List of Mitra</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Information
          </a>
          <div id="li" class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">History</a>
            <a class="dropdown-item" href="#">How to Order</a>
            <a class="dropdown-item" href="#">How to Buy</a>
            <a class="dropdown-item" href="About Us.html">Contact</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="About Us.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>


      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 style="font-family: 'Rochester';">Product Bread</h1>
      <br>

      <div class="card bg-dark text-center">
        <img src="image/bd3.png" class="card-img" alt="">
        <div id="t" class="card-img-overlay">
          <br>

          <div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-sm-6">

                <div class="card-img-overlay">
                  <div class="card text-dark bg-light mb-3" style="max-width: 22rem; height: 13.5rem;">
                    <div class="card-body">

                      <div class="col-md-20">
                        <img src="image/cute.jpg" class="img-fluid rounded-start" alt="..." style="max-width: 12rem; height: 8.5rem;">
                        <p class="card-text">
                          Lion cup
                          <strong>Rp.15.000,-</strong>
                        </p>
                      </div>
                      <div class="row mx-n1 text-center">
                        <div class="col px-1">
                          <div class="p-1 border bg-light">
                            <button type="button" class="btn btn-warning active">
                              <img src="image/button k2.png" alt=""></button>
                          </div>
                        </div>
                        <div class="col px-1">
                          <div class="p-2 border bg-light">
                            <a href="https://t.me/devinursuryanita" class="btn btn-danger active">Buy Now --></a>
                          </div>
                        </div>
                      </div>
                      <p class="card-text"></p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-sm-6">

                <div class="card-img-overlay">
                  <div class="card text-dark bg-light mb-3" style="max-width: 22rem; height: 13.5rem;">
                    <div class="card-body">

                      <div class="col-md-20">
                        <img src="image/new2.jpg" class="img-fluid rounded-start" alt="..." style="max-width: 12rem; height: 8.5rem;">
                        <p class="card-text">
                          Lion king cup
                          <strong>Rp.15.000,-</strong>
                        </p>

                      </div>
                      <div class="row mx-n1 text-center">
                        <div class="col px-1">
                          <div class="p-1 border bg-light">
                            <button type="button" class="btn btn-warning active">
                              <img src="image/button k2.png" alt=""></button>
                          </div>
                        </div>
                        <div class="col px-1">
                          <div class="p-2 border bg-light">
                            <a href="https://t.me/devinursuryanita" class="btn btn-danger active">Buy Now --></a>
                          </div>
                        </div>
                      </div>
                      <p class="card-text"></p>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-sm-6">

                <div class="card-img-overlay">
                  <div class="card text-dark bg-light mb-3" style="max-width: 22rem; height: 13.5rem;">
                    <div class="card-body">

                      <div class="col-md-20">
                        <img src="image/Roti.jpg" class="img-fluid rounded-start" alt="..." style="max-width: 12rem; height: 8.5rem;">
                        <p class="card-text">
                          Roti pasta
                          <strong>Rp.25.000,-</strong>
                        </p>


                      </div>
                      <div class="row mx-n1 text-center">
                        <div class="col px-1">
                          <div class="p-1 border bg-light">
                            <button type="button" class="btn btn-warning active">
                              <img src="image/button k2.png" alt=""></button>
                          </div>
                        </div>
                        <div class="col px-1">
                          <div class="p-2 border bg-light">
                            <a href="https://t.me/devinursuryanita" class="btn btn-danger active">Buy Now --></a>
                          </div>
                        </div>
                      </div>
                      <p class="card-text"></p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-sm-6">

                <div class="card-img-overlay">
                  <div class="card text-dark bg-light mb-3" style="max-width: 22rem; height: 13.5rem;">
                    <div class="card-body">

                      <div class="col-md-20">
                        <img src="image/Oreo.jpg" class="img-fluid rounded-start" alt="..." style="max-width: 12rem; height: 8.5rem;">
                        <p class="card-text">
                          White cup
                          <strong>Rp.18.000,-</strong>
                        </p>


                      </div>
                      <div class="row mx-n1 text-center">
                        <div class="col px-1">
                          <div class="p-1 border bg-light">
                            <button type="button" class="btn btn-warning active">
                              <img src="image/button k2.png" alt=""></button>
                          </div>
                        </div>
                        <div class="col px-1">
                          <div class="p-2 border bg-light">
                            <a href="https://t.me/devinursuryanita" class="btn btn-danger active">Buy Now --></a>
                          </div>
                        </div>
                      </div>
                      <p class="card-text"></p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="container" style="margin-top:30px">
            <div class="row">
              <div class="col-sm-6">

                <div class="card-img-overlay">
                  <div class="card text-dark bg-light mb-3" style="max-width: 22rem; height: 13.5rem;">
                    <div class="card-body">

                      <div class="col-md-20">
                        <img src="image/Keranjang.jpg" class="img-fluid rounded-start" alt="..." style="max-width: 12rem; height: 8.5rem;">
                        <p class="card-text">
                          Basket Cup
                          <strong>Rp.12.000,-</strong>
                        </p>


                      </div>
                      <div class="row mx-n1 text-center">
                        <div class="col px-1">
                          <div class="p-1 border bg-light">
                            <button type="button" class="btn btn-warning active">
                              <img src="image/button k2.png" alt=""></button>
                          </div>
                        </div>
                        <div class="col px-1">
                          <div class="p-2 border bg-light">
                            <a href="https://t.me/devinursuryanita" class="btn btn-danger active">Buy Now --></a>
                          </div>
                        </div>
                      </div>
                      <p class="card-text"></p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-sm-6">

                <div class="card-img-overlay">
                  <div class="card text-dark bg-light mb-3" style="max-width: 22rem; height: 13.5rem;">
                    <div class="card-body">

                      <div class="col-md-20">
                        <img src="image/mooncake.png" class="img-fluid rounded-start" alt="..." style="max-width: 12rem; height: 8.5rem;">
                        <p class="card-text">
                          Mooncake
                          <strong>Rp.35.000,-</strong>
                        </p>


                      </div>
                      <div class="row mx-n1 text-center">
                        <div class="col px-1">
                          <div class="p-1 border bg-light">
                            <button type="button" class="btn btn-warning active">
                              <img src="image/button k2.png" alt=""></button>
                          </div>
                        </div>
                        <div class="col px-1">
                          <div class="p-2 border bg-light">
                            <a href="https://t.me/devinursuryanita" class="btn btn-danger active">Buy Now --></a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="col px-1">
            <div class="p-1 border bg-light" style="float: right;">
              <a href="index.html" class="btn btn-warning active" style="font-family: 'Rochester';">
                <--- Back To Menu</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="card bg-dark text-center">
    <img src="image/R2.png" class="card-img" alt="">
    <div id="t" class="card-img-overlay">
      <h5>Another site :</h5>
      <p>Roti Tata Cantik</p>
      <button class="btn btn-outline-light my-2 my-sm-0">
        <a href="Produk3.html">
          <img src="image/dissert.jpg" class="card-img" style="max-width: 20rem; height: 13.5rem;">
          <div id="h" class="card-text">
            <h5>Dissert</h5>
            <p>Berbagai Olahan dissert Estetik</p>
          </div>
        </a>
      </button>
      <button class="btn btn-outline-light my-2 my-sm-0">
        <a href="#">
          <img src="image/Roti.jpg" class="card-img" style="max-width: 20rem; height: 13.5rem;">
          <div id="h" class="card-text">
            <h5>Roti Lukis</h5>
            <p>Macam-Macam Jenis Roti yang Bisa dipesan</p>
          </div>
        </a>
      </button>
      <button class="btn btn-outline-light my-2 my-sm-0">
        <a href="Produk2.html">
          <img src="image/cute.jpg" class="card-img" style="max-width: 20rem; height: 13.5rem;">
          <div id="h" class="card-text">
            <h5>Variant</h5>
            <p>Roti Tersedia Siap Antar Sekarang?</p>
          </div>
        </a>
      </button>
      <button class="btn btn-outline-light my-2 my-sm-0">
        <a href="Produk.html">
          <img src="image/owl.jpg" class="card-img" style="max-width: 20rem; height: 13.5rem;">
          <div id="h" class="card-text">
            <h5>Cake & Cookie</h5>
            <p>Beragam Kue yang tersedia</p>
          </div>
        </a>
      </button>
    </div>

    <div class="card bg-dark text-center">
      <img src="image/2022.png" class="image" alt="" style="max-width: 20rem;">
    </div>

  </div>

  <style>
    #h {
      color: azure;
      background-color: rgba(121, 89, 207, 0.747);
    }

    #f {
      color: azure;
      background-color: rgba(162, 80, 255, 0.473);
    }

    #t {
      color: azure;
    }

    #li a:hover,
    a:active {
      background-color: rgba(121, 89, 207, 0.747);
    }
  </style>

</body>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>