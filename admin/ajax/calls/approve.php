<?php
    include "../../../config/config.php";

    $id = $_POST["id"];
    $msg = "";

    $sql = "update iqac.report set status='Approved' where id='$id'";
    if($con->query($sql))
    {
        $msg = "Approved";
    }

    echo "$msg";
?>