<?php
include "../main/main_header_user_puskesmas.php";

if (isset ($_GET["input"])){
    include "../main/main_input_puskesmas_user.php";
    include "../main/main_foother.php";
}

else if (isset ($_GET["status"])){
    include "../main/main_status_puskesmas_user.php";
    include "../main/main_foother.php";
}
else if (isset ($_GET["data"])){
    include "../main/main_data_puskesmas_user.php";
    include "../main/main_foother.php";
}
else {
    include "../main/main_rumah_admin.php";
    include "../main/main_foother.php";
}
?>