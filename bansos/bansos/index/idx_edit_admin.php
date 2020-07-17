<?php
include "../main/main_header_admin.php";

if (isset ($_GET["id"])){
    include "../main/main_edit_puskesmas_admin.php";
    include "../main/main_foother.php";
}

else if (isset ($_GET["nim"])){
    include "../main/main_edit_mahasiswa_admin.php";
    include "../main/main_foother.php";
}

else if (isset ($_GET["id1"])){
    include "../main/main_edit_masyarakat_admin.php";
    include "../main/main_foother.php";
}
else {
    include "../main/main_rumah_admin.php";
    include "../main/main_foother.php";
}
?>