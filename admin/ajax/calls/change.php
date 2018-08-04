<?php
    include "../../../config/config.php";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $dept = $_POST["Department"];
        $pass = md5($_POST["password"]);
    
        $sql = "update iqac.facultyDept set Password='$pass' where Department_name='$dept'";
        if($con->query($sql))
        {
            echo "Password changed";
        }
    }
?>