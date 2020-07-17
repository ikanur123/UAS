<?php

include "../proses/koneksi.php";

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='../main/main_login.php'>Klik disini</a>";
	exit;
}


$id=$_SESSION["id"];

?>

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
           if(!isset($_SESSION["id"] )){
            echo "<font color='red'>Red without code</font><br>";
			}else{
                $id = $_SESSION["id"];
				$sql = mysqli_query($kon,"select * from puskesmas where id='$id'");
                
			}
			while($d = mysqli_fetch_array($sql)){
			?>
 <table class="table table-striped table-responsive-md btn-table">
  <thead>
  <tr>
      <th>id</th>
      <th>nama_puskesmas</th>
      <th>alamat</th>
      <th>kelurahan</th>
      <th>kecamatan</th>
      <th>kota</th>
      <th>email</th>
      <th>no.hp</th>
      <th>tanggal</th>
      <th>bantuan_apd</th>
      <th>bantuan_hs</th>
      <th>status</th>
    </tr>
</thead>
      <tbody>
      <tr> 
        <td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama_Puskesmas']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['kelurahan']; ?></td>
        <td><?php echo $d['kecamatan']; ?></td>
				<td><?php echo $d['kota']; ?></td>
        <td><?php echo $d['email']; ?></td>
				<td><?php echo $d['no_hp']; ?></td>
        <td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['bantuan_apd']; ?></td>
        <td><?php echo $d['bantuan_hs']; ?></td>
        <td><?php echo $d['status']; ?></td>
 </tr>
      <tbody><?php
            }
            ?>
  </body>
</html>