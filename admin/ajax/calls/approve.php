<?php
    include "../../../config/config.php";

    $id = $_GET["id"];

    $sql = "update iqac.report set status='Approved' where id='$id'";
    if($con->query($sql))
    {
        echo "Approved";
    }
?>