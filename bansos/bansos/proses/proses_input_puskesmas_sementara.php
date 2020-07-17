<?php
$connect= mysqli_connect("localhost", "root", "", "bansos_db1");
// menyimpan data kedalam variabel
$id                = $_POST['id'];
$namapuskesmas                = $_POST['namapuskesmas'];
$alamat               = $_POST['alamat'];
$kelurahan             = $_POST['kelurahan'];
$kecamatan          = $_POST['kecamatan'];
$kota          = $_POST['kota'];
$email                = $_POST['email'];
$nohp                = $_POST['nohp'];
$tanggal           = $_POST['tanggal'];
$bantuanapd       = $_POST['bantuanapd'];
$bantuanhs      = $_POST['bantuanhs'];
$status        = $_POST['status'];


// query SQL untuk insert data
$query="INSERT INTO puskesmas_sementara SET id='$id', nama_puskesmas='$namapuskesmas', alamat='$alamat', kelurahan='$kelurahan', Kecamatan='$kecamatan', kota='$kota', email='$email', no_hp='$nohp', tanggal='$tanggal', bantuan_apd='$bantuanapd', bantuan_hs='$bantuanhs', 
status='$status'";
if (mysqli_query($connect, $query)) {
    echo "<script>alert('Data Bansos Berhasil Dimasukan, Data Akan DIverivikasi Terlebih Dahulu ');document.location='../index/idx_halaman_user_puskesmas.php'</script>";
}
else {
echo "Gagal Input";
}
?>