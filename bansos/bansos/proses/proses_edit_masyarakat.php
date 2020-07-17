<?php
$connect= mysqli_connect("localhost", "root", "", "bansos_db1");
// menyimpan data kedalam variabel
$id                 = $_POST['id'];
$kelurahan          = $_POST['kelurahan'];
$kecamatan          = $_POST['kecamatan'];
$rt                 = $_POST['rt'];
$rw                 = $_POST['rw'];
$kota               = $_POST['kota'];
$email              = $_POST['email'];
$nohp               = $_POST['nohp'];
$bantuansembako     = $_POST['bantuansembako'];
$bantuanhs          = $_POST['bantuanhs'];
$tanggal            = $_POST['tanggal'];
$status             = $_POST['status'];

// query SQL untuk insert data
mysqli_query ($connect,"UPDATE masyarakat SET id='$id', kelurahan='$kelurahan', Kecamatan='$kecamatan', rt='$rt', rw='$rw', kota='$kota', email='$email', no_hp='$nohp', bantuan_sembako='$bantuansembako', bantuan_hs='$bantuanhs', tanggal='$tanggal',
status='$status' WHERE id='$id'");
    echo "<script>alert('Data Berhasil Diedit');document.location='../index/idx_halaman_awal_admin.php'</script>";

?>