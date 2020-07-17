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
      <th>Id</th>
      <th>Kelurahan</th>
      <th>Kecamatan</th>
      <th>RT</th>
      <th>RW</th>
      <th>Kota</th>
      <th>Email</th>
      <th>No.HP</th>
      <th>Bantuan Sembako</th>
      <th>Bantuan HS</th>
      <th>Tanggal</th>
      <th>Status</th>
    </tr>
</thead>
<?php
            $sql = mysqli_query($connect,"select * from masyarakat_sementara");
			while($d = mysqli_fetch_array($sql)){
			?>
      <tbody>
      <tr> 
      <td><?php echo $d['id']; ?></td>
		<td><?php echo $d['kelurahan']; ?></td>
        <td><?php echo $d['kecamatan']; ?></td>
		<td><?php echo $d['rt']; ?></td>
        <td><?php echo $d['rw']; ?></td>
		<td><?php echo $d['kota']; ?></td>
        <td><?php echo $d['email']; ?></td>
		<td><?php echo $d['no_hp']; ?></td>
		<td><?php echo $d['bantuan_sembako']; ?></td>
        <td><?php echo $d['bantuan_hs']; ?></td>
        <td><?php echo $d['tanggal']; ?></td>
        <td><?php echo $d['status']; ?></td>
        <td><button type="button" class="btn btn-primary btn-rounded" ><a class="btn btn-link" style="color: #ffffff;" href="../index/idx_cek_pemohon_admin.php?id1=<?php echo $d['id']; ?>">Konfirmasi</a></button></td>	
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