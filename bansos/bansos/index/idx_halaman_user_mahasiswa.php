<?php
include "../main/main_header_user_mahasiswa.php";

if (isset ($_GET["input"])){
    include "../main/main_input_mahasiswa_user.php";
    include "../main/main_foother.php";
}

else if (isset ($_GET["status"])){
    include "../main/main_status_mahasiswa_user.php";
    include "../main/main_foother.php";
}
else if (isset ($_GET["data"])){
    include "../main/main_data_mahasiswa_user.php";
    include "../main/main_foother.php";
}
else {
    include "../main/main_rumah_admin.php";
    include "../main/main_foother.php";
}
?>