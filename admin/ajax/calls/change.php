<?php
    include "../../../config/config.php";
    
    $dept = $_POST["Department"];
    $pass = md5($_POST["password"]);
    $msg = "";

    $sql = "update iqac.facultyDept set Password='$pass' where Department_name='$dept'";
    if($con->query($sql))
    {
        $msg =  "Password changed";
    }

    echo "$msg";
    echo "$con->error";
?>