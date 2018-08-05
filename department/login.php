<?php
    include "../config/config.php";
    session_start();

    if(isset($_SESSION["dept"]))
    {
        header("location: index.php");
    }
    

    $user = "";
    $error="";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_SESSION["admin"]))
        {
            unset($_SESSION["admin"]);
        }
        $user = $_POST["Department"];
        $password = $_POST["password"];
        $password = md5($password);
        
        $sql = "select Department_name,Password from iqac.facultyDept where Department_name='$user' and Password='$password'";
        $result = $con->query($sql) or die($con->error);
        if($result->num_rows == 1)
        {
            unset($_SESSION["admin"]);
            $_SESSION["dept"] = $user;

            header("Location: index.php");
        }
        else
        {
            $error = "invalid password";
            header("location:login.php");
        }
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
        <div class="login__box">
            <h1 class="login__heading">Department Login</h1>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" method="POST">
                <div class="form__group">
                    <select name="Department" id="dep" class="form__select">
                        <option value="">--Select--</option>
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
                    <button class="btn">Log in &rarr;</button>`
                </div>
                <span><?php echo $error; ?></span>
            </form>
        </div>
    </div>
</body>
</html>