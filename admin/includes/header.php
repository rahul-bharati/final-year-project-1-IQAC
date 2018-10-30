<?php include "config/session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>IQAC</title>
    <script>
        window.onpageshow = function (event) {
            if (event.persisted) {
                window.location.reload();
            }
        };
    </script>
</head>
<body>
    <div class="loading">
        <div class="loading__container">
            <img src="../img/loading.svg" class="loading__image">
            <span class="loadin__span">Uploading. Please Wait.........</span>
        </div>
    </div>
    <div class="container">
        <header class="header">
            <h1 class="heading__primary">
                <span class="heading__primary--main">IQAC</span>
                <span class="heading__primary--sub">dashboard</span>
            </h1>
            <div class="logout">
                <span class="logout__span">
                    <i class="icon fa fa-user"></i>
                </span>
                <span class="logout__detail">
                    <span class="user-name"><?php echo $_SESSION["admin"]; ?></span>
                    <span class="logout__link"><a href="logout.php" class="link">logout</a></span>
                </span>
            </div>
        </header>
        <main class="main">
            <div class="nav-container">
                <h2 class="heading__secondary margin-bottom-small">
                    Navigation
                </h2>
                <nav class="nav">
                    <ul class="nav-wrapper">
                        <li class="nav-item"><a class="nav-link" href="index.php">View Applications</a></li>
                        <li class="nav-item"><a class="nav-link" href="changePass.php">Change dept Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="approvedApp.php">View accepted Applications</a></li>
                    </ul>
                </nav>
            </div>