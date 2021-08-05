<?php
require '../function.php';

// 350 Gram
$getjumlah = mysqli_query($koneksi,"SELECT * FROM stock WHERE id_stock = '26'");
$jumlah = mysqli_fetch_array($getjumlah);

$stock = $jumlah['qty'];
$ukuran = $jumlah ['ukuran'];
$namabarang = $jumlah ['namabarang'];
$harga = $jumlah['harga'];

// 500 Gram
$getjumlah1 = mysqli_query($koneksi,"SELECT * FROM stock WHERE id_stock = '27'");
$jumlah1 = mysqli_fetch_array($getjumlah1);

$stock1 = $jumlah1['qty'];
$ukuran1 = $jumlah1['ukuran'];
$namabarang1 = $jumlah1['namabarang'];
$harga1 = $jumlah1['harga'];

// 690 Gram
$getjumlah2 = mysqli_query($koneksi,"SELECT * FROM stock WHERE id_stock = '28'");
$jumlah2 = mysqli_fetch_array($getjumlah2);

$stock2 = $jumlah2['qty'];
$ukuran2 = $jumlah2['ukuran'];
$namabarang2 = $jumlah2['namabarang'];
$harga2 = $jumlah2['harga'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Java Hills Raw Honey</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Style Css -->
    <link rel="stylesheet" type="text/css" href="../style.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Java Hills</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="../index.php">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jenis Madu</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="multiflora.php">Multiflora</a>
              <a class="dropdown-item" href="coffee.php">Coffee Blossom</a>
              <a class="dropdown-item" href="acacia.php">Acacia Blossom</a>
              <a class="dropdown-item" href="wild.php">Wild Grass</a>
              <a class="dropdown-item" href="mint.php">Madu Mint</a>
              <a class="dropdown-item" href="maag.php">Madu Maag</a>
              <a class="dropdown-item" href="kalimantan.php">Kalimantan Super</a>
              <a class="dropdown-item" href="diet.php">Madu Diet</a>
              <a class="dropdown-item" href="randu.php">Randu Blossom</a>
              <a class="dropdown-item  active" href="#">Rambutan Blossom</a>
              <a class="dropdown-item" href="javatrigona.php">Javatrigona</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lain.php">Produk Lain</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testimanis.php">Testimanis</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="../login.php" class="btn btn-outline-success my-2 my-sm-0" target="_blank">Masuk</a>
        </form>
      </div><!-- collapse -->
    </nav><!-- navbar -->

    
    <main role="main" class="container">

      <div class="starter-template">
          <h1 class="text-center text-warning">Madu Rambutan Blossom</h1>
          <h5 class="border-bottom">Java Hills Madu rasa <i>Rambutan Blossom</i> merupakan Madu murni dari nektar bunga rambutan dengan citra rasa manis dan segar. sejak ribuan tahun silam madu dipercaya sebagai bahan alami penjaga kesehatan.</h5>
          <div class="card-deck">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-dark border-bottom text-center">Manfaat Madu Rambutan Blossom</h5>
                  <div class="card-group">
                    <div class="card">
                      <div class="card-body">
                        <?php
                          $getrambutan = mysqli_query ($koneksi,"SELECT * FROM rambutan ");
                          while ($data=mysqli_fetch_array($getrambutan)) {
                          $idrambutan = $data['id_rambutan'];
                          $manfaatkiri = $data['manfaat_kiri'];
                        ?>
                        <p class="card-text text-dark"><img src="../assets/img/dot.svg" width="20px;"><?=$manfaatkiri;?></p>
                        <?php };?>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <?php
                          $getrambutan = mysqli_query ($koneksi,"SELECT * FROM rambutan ");
                          while ($data=mysqli_fetch_array($getrambutan)) {
                          $idrambutan = $data['id_rambutan'];
                          $manfaatkanan = $data['manfaat_kanan'];
                        ?>
                        <p class="card-text text-dark"><img src="../assets/img/dot.svg" width="20px;"><?=$manfaatkanan;?></p>
                        <?php };?>
                      </div>
                    </div>
                  </div>
              </div><!-- card-body -->
              <div class="card-footer text-center">
                <small class="text-muted">Noted : Sebaiknya menggunakan sendok kayu atau plastik untuk mengambil madunya</small>
              </div>
            </div><!-- card -->
          </div><!-- card-deck -->
          <div class="card-deck text-dark text-center mt-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?=$ukuran;?> @ Rp <?=number_format($harga);?></h5>
                <h5 class="card-title">
                  <?php
                  if($stock <=0)
                  {
                    echo "<font color='red'>Stock Sedang Kosong</font>";
                  }
                  else
                  {
                    echo "Sisa Stock : $stock";
                    echo "<div><a href='https://api.whatsapp.com/send?phone=6287780534000&text=Assalamuaikum,%20Saya%20mau%20pesan%20madunya%20gan/sis,%20dengan%20detail%20sebagai%20berikut%0ANama:%0AAlamat:%0AMadu: $namabarang%0AUkuran: $ukuran%0AJumlah:%0ATerima Kasih' class='btn btn-success mt-2'>Pemesanan</a></div> ";
                  }
                  ?>
                  </h5>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?=$ukuran1;?> @ Rp <?=number_format($harga1);?></h5>
                <h5 class="card-title">
                  <?php
                  if($stock1 <=0)
                  {
                    echo "<font color='red'>Stock Sedang Kosong</font>";
                  }
                  else
                  {
                    echo "Sisa Stock : $stock1";
                    echo "<div><a href='https://api.whatsapp.com/send?phone=6287780534000&text=Assalamuaikum,%20Saya%20mau%20pesan%20madunya%20gan/sis,%20dengan%20detail%20sebagai%20berikut%0ANama:%0AAlamat:%0AMadu: $namabarang%0AUkuran: $ukuran1%0AJumlah:%0ATerima Kasih' class='btn btn-success mt-2'>Pemesanan</a></div> ";
                  }
                  ?>
                  </h5>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?=$ukuran2;?> @ Rp <?=number_format($harga2);?></h5>
                <h5 class="card-title">
                  <?php
                  if($stock2 <=0)
                  {
                    echo "<font color='red'>Stock Sedang Kosong</font>";
                  }
                  else
                  {
                    echo "Sisa Stock : $stock2";
                    echo "<div><a href='https://api.whatsapp.com/send?phone=6287780534000&text=Assalamuaikum,%20Saya%20mau%20pesan%20madunya%20gan/sis,%20dengan%20detail%20sebagai%20berikut%0ANama:%0AAlamat:%0AMadu: $namabarang%0AUkuran: $ukuran2%0AJumlah:%0ATerima Kasih' class='btn btn-success mt-2'>Pemesanan</a></div> ";
                  }
                  ?>
                  </h5>
              </div>
            </div>
          </div>
      </div><!-- starter-template -->
      <div class="media">
        <a href="https://instagram.com/hannasuciati"><img src="../assets/img/instagram.svg"> Hanna Suciati</a>
        <a href="https://facebook.com/anasimutch"><img src="../assets/img/facebook.svg"> Hanna Suciati</a>
        <a href="https://api.whatsapp.com/send?phone=6287780534000"><img src="../assets/img/whatsapp.svg"> Hanna Suciati</a>
      </div><!-- /media -->
    </main><!-- /.container -->

    <footer>
      <h5 class="pt-2 pb-2 text-center" style="font-size: 14px;">Copyright@2021 - Java Hills Raw Honey</h5>
    </footer>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
  </body>
</html>
