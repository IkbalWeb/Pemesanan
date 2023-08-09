<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemesanan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
  <?php
  $cabang = "";
  $namaPelanggan = "";
  $nomorHP = "";
  $jumlahKotak = "";
  $tagihanAwal = 0;
  $diskon = 0;
  $tagihanAkhir = 0; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cabang = $_POST["cabang"];
        $namaPelanggan = $_POST["namaPelanggan"];
        $nomorHP = $_POST["nomorHP"];
        $jumlahKotak = $_POST["jumlahKotak"];

        $tagihanAwal = 50000 * $jumlahKotak; // tagihan awal
        $diskon = 0.1 * $tagihanAwal; // diskon
        $tagihanAkhir = $tagihanAwal - $diskon; // tagihan akhir
    }
    ?>
    <form method="post">
      <h3>Form Pemesanan Nasi Kotak</h3>
      <div class="row mb-3">
        <label for="cabang" class="col-sm-2 col-form-label">Cabang :</label>
        <div class="col-sm-4">
          <select class="form-select" name="cabang" aria-label="Cabang" required>
            <option selected>-Pilih Cabang-</option>
            <option value="Talaga">Talaga</option>
            <option value="Cikijing">Cikijing</option>
            <option value="Bantarujeg">Bantarujeg</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="namaPelanggan" class="col-sm-2 col-form-label">Nama Pelanggan :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="namaPelanggan" placeholder="Nama Pelanggan" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="nomorHP" class="col-sm-2 col-form-label">Nomor HP :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="nomorHP" placeholder="Nomor HP" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="jumlahKotak" class="col-sm-2 col-form-label">Jumlah Kotak :</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="jumlahKotak" placeholder="Jumlah Kotak" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Pesan</button>
      <div class="row mb-3">
        <label for="tagihanAwal" class="col-sm-2 col-form-label">Cabang</label>
        <div class="col-sm-4">
          <p>:<?php echo $cabang; ?></p>
        </div>
        <label for="tagihanAwal" class="col-sm-2 col-form-label">Nama Pelanggan</label>
        <div class="col-sm-4">
          <p>:<?php echo $namaPelanggan; ?></p>
        </div>
      <label for="tagihanAwal" class="col-sm-2 col-form-label">Nomor HP</label>
        <div class="col-sm-4">
          <p>:<?php echo $nomorHP; ?></p>
        </div>
        <label for="tagihanAwal" class="col-sm-2 col-form-label">Jumlah Kotak</label>
        <div class="col-sm-4">
          <p>:<?php echo $jumlahKotak; ?></p>
        </div>
        <label for="tagihanAwal" class="col-sm-2 col-form-label">Tagihan Awal</label>
        <div class="col-sm-4">
          <p>:<?php echo $tagihanAwal; ?></p>
        </div>
        <label for="diskon" class="col-sm-2 col-form-label">Diskon</label>
        <div class="col-sm-4">
          <p>:<?php echo $diskon; ?></p>
        </div>
        <label for="tagihanAkhir" class="col-sm-2 col-form-label">Tagihan Akhir</label>
        <div class="col-sm-4">
          <p>:<?php echo $tagihanAkhir; ?></p>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
