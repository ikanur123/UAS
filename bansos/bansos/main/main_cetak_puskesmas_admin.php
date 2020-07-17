<!DOCTYPE html>
<html>
<head>
	  <title>CETAK PRINT </title>
</head>
<body>
 
	<center>
 
		<h2>DATA PENERIMA BANSOS</h2>
	</center>
    <?php 
  $connect= mysqli_connect("localhost", "root", "", "bansos_db1");
	$id = $_GET['id'];
  $data = mysqli_query($connect,"SELECT * FROM puskesmas WHERE id='$id'")or die(mysql_error());
	while($d = mysqli_fetch_array($data)){
	?>
  
	<table border="1" style="width: 100%">
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
		<?php 
		}
		?>
	</table>
	<script>
		window.print();
	</script>
 
</body>
</html>