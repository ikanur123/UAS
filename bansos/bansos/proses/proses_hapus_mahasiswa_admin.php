<?php
$connect= mysqli_connect("localhost", "root", "", "bansos_db1");
// menyimpan data id kedalam variabel
$nim   = $_GET['nim'];
// query SQL untuk insert data
$query="DELETE from mahasiswa where nim='$nim'";
mysqli_query($connect, $query);
// mengalihkan ke halaman index.php
echo "<script>alert('Data Berhasil Dihapus');document.location='../index/idx_halaman_awal_admin.php'</script>";
?>