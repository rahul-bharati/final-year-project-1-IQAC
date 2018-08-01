<?php
    include "config/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font.min.css">
    <title>IQAC</title>
</head>
<body>
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
                    <span class="user-name"><?php echo $_SESSION["dept"]; ?></span>
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
                        <li class="nav-item"><a class="nav-link" href="index.php">Workshops</a></li>
                        <li class="nav-item"><a class="nav-link" href="seminars.php">Seminars</a></li>
                        <li class="nav-item"><a class="nav-link" href="glectures.php">Guest Lectures</a></li>
                        <li class="nav-item"><a class="nav-link" href="iv.php">Industrial Visit</a></li>
                        <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="applications.php">View Applications</a></li>
                    </ul>
                </nav>
            </div>
