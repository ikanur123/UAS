<!doctype html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" >
    <title>
    </title>
  </head>
  <body>
  <?php 
		$connect= mysqli_connect("localhost", "root", "", "bansos_db1");
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
<?php
            $sql = mysqli_query($connect,"select * from puskesmas_sementara");
			while($d = mysqli_fetch_array($sql)){
			?>
      <tbody>
      <tr> 
      <td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama_puskesmas']; ?></td>
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
        <td><button type="button" class="btn btn-primary btn-rounded" ><a class="edit" class="btn btn-link" style="color: #ffffff;" href="../index/idx_cek_pemohon_admin.php?id=<?php echo $d['id']; ?>">Konfirmasi</a></button></td>	
        </tr>
      <tbody>
     <?php
    }
    ?>   
  </table>
  <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
  </body>
</html>