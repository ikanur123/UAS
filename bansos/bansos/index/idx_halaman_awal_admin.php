<?php
include "../main/main_header_admin.php";

if (isset ($_GET["penerima"])){
    include "../main/main_penerima_admin.php";
    include "../main/main_foother.php";
}

else if (isset ($_GET["pemohon"])){
    include "../main/main_pemohon_admin.php";
    include "../main/main_foother.php";
}

else {
    include "../main/main_rumah_admin.php";
    include "../main/main_foother.php";
}
?>