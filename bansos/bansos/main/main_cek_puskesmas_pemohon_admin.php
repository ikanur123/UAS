<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    </title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
  <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
  </head>
  <body>
  <?php 
  $connect= mysqli_connect("localhost", "root", "", "bansos_db");
	$id = $_GET['id'];
  $data = mysqli_query($connect,"SELECT * FROM puskesmas_sementara WHERE id='$id'")or die(mysql_error());
	while($d = mysqli_fetch_array($data)){
	?>
  <div class="card">
  <div class="card-body">

  <!-- Extended default form grid -->
<form action="../proses/proses_input_puskesmas.php" method="post">
  <!-- Grid row -->
  <div class="form-row">
  <!-- Default input -->
  <div class="form-group col-md-1">
      <label>id</label>
      <input type="text" class="form-control" id="id" placeholder="Masukan Id" name="id" readonly value="<?php echo $d['id'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Nama Puskesmas</label>
      <input type="text" class="form-control" id="namapuskesmas" placeholder="Masukan Nama Puskesmas" name="namapuskesmas" readonly value="<?php echo $d['nama_puskesmas'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-4">
      <label>Alamat</label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" readonly value="<?php echo $d['alamat'] ?>">
    </div>
  </div>
    <!-- Grid row -->
    <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label >Kelurahan</label>
      <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukan Kelurahan" readonly value="<?php echo $d['kelurahan'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-3">
      <label >kecamatan</label>
      <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukan kecamatan" readonly value="<?php echo $d['kecamatan'] ?>">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-3">
      <label >Kota</label>
      <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan Kota" readonly value="<?php echo $d['kota'] ?>">
    </div>
    </div>
    <!-- Grid row -->
    <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email" readonly value="<?php echo $d['email'] ?>">
    </div>
    <div class="form-group col-md-3">
      <label>No.HP</label>
      <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukan No.HP" readonly value="<?php echo $d['no_hp'] ?>">
    </div>
    <div class="form-group col-md-3">
      <label>Tanggal</label>
      <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan Tanggal" readonly value="<?php echo $d['tanggal'] ?>">
    </div>
    </div>
 <!-- Grid row -->
 <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-2">
      <label>Bantuan APD</label>
      <input type="text" class="form-control" id="bantuanapd" name="bantuanapd" placeholder="Masukan Jumlah APD" readonly value="<?php echo $d['bantuan_apd'] ?>">
    </div>
    <div class="form-group col-md-3">
      <label>Bantuan Hand Sanitizer</label>
      <input type="text" class="form-control" id="bantuanhs" name="bantuanhs" placeholder="Masukan Jumlah HS" readonly value="<?php echo $d['bantuan_hs'] ?>">
      <input type="hidden" name="status" value="Data Telah Terkonfirmasi"/>
    </div>
    </div>
  <button type="submit" class="btn btn-primary btn-md" name="submit">Konfirmasi</button>
</form>
    <?php } ?>
<!-- Extended default form grid -->
  </div>
  </body>
</html>