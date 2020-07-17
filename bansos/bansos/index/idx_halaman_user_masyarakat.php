<?php
include "../main/main_header_user_masyarakat.php";

if (isset ($_GET["input"])){
    include "../main/main_input_masyarakat_user.php";
    include "../main/main_foother.php";
}

else if (isset ($_GET["status"])){
    include "../main/main_status_masyarakat_user.php";
    include "../main/main_foother.php";
}
else if (isset ($_GET["data"])){
    include "../main/main_data_masyarakat_user.php";
    include "../main/main_foother.php";
}
else {
    include "../main/main_rumah_admin.php";
    include "../main/main_foother.php";
}
?>