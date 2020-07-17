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
$query1="INSERT INTO puskesmas SET  id='$id', nama_Puskesmas='$namapuskesmas', alamat='$alamat', kelurahan='$kelurahan', Kecamatan='$kecamatan', kota='$kota', email='$email', no_hp='$nohp', tanggal='$tanggal', bantuan_apd='$bantuanapd', bantuan_hs='$bantuanhs', 
status='$status'";
$query2="DELETE from puskesmas_sementara where id='$id'";
if (mysqli_query($connect, $query1)) {
    mysqli_query ($connect, $query2);
    echo "<script>alert('Data Telah Terverifikasi, dan Telah Masuk Ke Data Puskesmas Peneriama BanSos');document.location='../index/idx_halaman_awal_admin.php'</script>";
}
else {
echo "Gagal Input";
}

?>