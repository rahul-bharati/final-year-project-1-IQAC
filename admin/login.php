<?php
    include "../config/config.php";
    session_start();


    $user = "";
    $error="";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $user = $_POST["Department"];
        $password = $_POST["password"];
        $password = md5($password);
        
        $sql = "select Department_name,Password from iqac.adminDept where Department_name='$user' and Password='$password'";
        $result = $con->query($sql) or die($con->error);
        $row = $result->fetch_assoc();

        if($result->num_rows == 1)
        {
            $_SESSION["admin"] = $user;

            header("location:index.php");
        }
        else
        {
            $error = "invalid password";
            header("location:login.php");
        }
    }

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>IQAC</title>
</head>
<body>
    <div class="login">
        <div class="login__box">admin
            <h1 class="login__heading">Department Login</h1>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" method="post">
                <div class="form__group">
                    <select name="Department" id="dep" class="form__select">
                        <option>--Select--</option>
                        <?php
                            $sql = "select Department_name from iqac.facultyDept";
                            $result = $con->query($sql);
                            if($result->num_rows > 0)
                            {
                                while($row = $result->fetch_assoc())
                                {
                                    echo "<option>".$row["Department_name"]."</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form__group">
                    <input type="password" name="password" id="password" class="form__input" placeholder="Password" required autocomplete="off">
                    <label for="password" class="form__label">Password</label>
                </div>
                <div class="form__group margin-top-small">
                    <button class="btn">Log in &rarr;</button>
                </div>
                <span class="error"><?php echo $error;?></span>
            </form>
        </div>
    </div>
</body>
</html>