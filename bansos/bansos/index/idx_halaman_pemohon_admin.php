<?php
include "../main/main_header_admin.php";

if (isset ($_GET["cek1"])){
    include "../main/main_data_puskesmas_pemohon_admin.php";
    include "../main/main_foother.php";
}

else if (isset ($_GET["cek2"])){
    include "../main/main_data_mahasiswa_pemohon_admin.php";
    include "../main/main_foother.php";
}
else if (isset ($_GET["cek3"])){
    include "../main/main_data_masyarakat_pemohon_admin.php";
    include "../main/main_foother.php";
}
else {
    include "../main/main_rumah_admin.php";
    include "../main/main_foother.php";
}
?>