<?php
    include "../config/config.php";
    session_start();

    $id = $_GET["id"];
    $type = $_GET["type"];
    $event_type="";
    $title = $subtitle = $description = $date = $name = $topic = $contact = $guide = $image1 = $image2 = $image3 = $image4 = $report = "";

    switch ($type) {
        case 1:
            $sql = "select * from iqac.workshop where id='$id'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
            $title = $row["title"];
            $subtitle = $row["subtitle"];
            $description = $row["description"];
            $date = $row["dateOfConduct"];
            $report = $row["report"];
            $image1 = $row["img1"];
            $image2 = $row["img2"];
            $image3 = $row["img3"];
            $image4 = $row["img4"];
            break;
        case 2:
            $sql = "select * from iqac.seminars where id='$id'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
            $title = $row["title"];
            $subtitle = $row["subtitle"];
            $description = $row["description"];
            $date = $row["dateOfConduct"];
            $name = $row["lecturerName"];
            $topic = $row["topic"];
            $contact = $row["contact"];
            $report = $row["report"];
            $image1 = $row["img1"];
            $image2 = $row["img2"];
            $image3 = $row["img3"];
            $image4 = $row["img4"];
            break;
        case 3:
            $sql = "select * from iqac.guest_lectures where id='$id'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
            $title = $row["title"];
            $subtitle = $row["subtitle"];
            $description = $row["description"];
            $date = $row["dateOfConduct"];
            $name = $row["lecturerName"];
            $topic = $row["topic"];
            $contact = $row["contact"];
            $report = $row["report"];
            $image1 = $row["img1"];
            $image2 = $row["img2"];
            $image3 = $row["img3"];
            $image4 = $row["img4"];
            break;
        case 4:
            $sql = "select * from iqac.iv where id='$id'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
            $title = $row["title"];
            $subtitle = $row["subtitle"];
            $description = $row["description"];
            $date = $row["dateOfConduct"];
            $name = $row["industryName"];
            $topic = $row["topic"];
            $guide = $row["guide"];
            $contact = $row["contact"];
            $report = $row["report"];
            $image1 = $row["img1"];
            $image2 = $row["img2"];
            $image3 = $row["img3"];
            $image4 = $row["img4"];
            break;
        case 5:
            $sql = "select * from iqac.workshop where id='$id'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
            $title = $row["title"];
            $subtitle = $row["subtitle"];
            $description = $row["description"];
            $date = $row["dateOfConduct"];
            $report = $row["report"];
            $image1 = $row["img1"];
            $image2 = $row["img2"];
            $image3 = $row["img3"];
            $image4 = $row["img4"];
            break;
        default:
            # code...
            break;
    }

    // echo $id.$type;
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
                    <span class="user-name">
                    <?php 
                        if(isset($_SESSION["dept"]))
                        {
                            echo $_SESSION["dept"];
                        }
                        if(isset($_SESSION["admin"]))
                        {
                            echo $_SESSION["admin"];
                        } 
                    ?></span>
                    <span class="logout__link"><a href="<?php 
                            if(isset($_SESSION["dept"]))
                            {
                                echo "./../department/logout.php";
                            }
                            if(isset($_SESSION["admin"]))
                            {
                                echo "./../admin/logout.php";
                            }
                        ?>" class="link">logout</a></span>
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
                        <?php 
                            if(isset($_SESSION["dept"]))
                            {
                                echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"../department/index.php\">Workshops</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"../department/seminars.php\">Seminars</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"../department/glectures.php\">Guest Lectures</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"../department/iv.php\">Industrial Visit</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"../department/events.php\">Events</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"../department/applications.php\">View Applications</a></li>";
                            }
                            if(isset($_SESSION["admin"]))
                            {
                                echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"../admin/index.php\">View Applications</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"../admin/changePass.php\">Change dept Password</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"../admin/approvedApp.php\">View accepted Applications</a></li>";      
                            }
                        ?>
                        <!--
                        <li class="nav-item"><a class="nav-link" href="index.php">Workshops</a></li>
                        <li class="nav-item"><a class="nav-link" href="seminars.php">Seminars</a></li>
                        <li class="nav-item"><a class="nav-link" href="glectures.php">Guest Lectures</a></li>
                        <li class="nav-item"><a class="nav-link" href="iv.php">Industrial Visit</a></li>
                        <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="applications.php">View Applications</a></li>
                        -->
                    </ul>
                </nav>
            </div>
            <div class="form-container">
                <h2 class="heading__secondary"><?php echo $title; ?></h2>
                <span class="tag__text font-weight-bold-heading"><?php echo $subtitle; ?></span>
                <span class="tag__text--right font-weight-bold-heading">Date: <?php echo date("d-m-Y", strtotime($date)); ?></span>
                <p class="description__para margin-top-small margin-bottom-small"><?php echo $description; ?></p>
                <?php 
                    if($type == 2 || $type == 3)
                    {
                        echo "<span class=\"extra-info\">Lecturer Name: $name</span>
                        <span class=\"extra-info\">Topic: $topic</span>
                        <span class=\"extra-info\">Contact: $contact</span>";
                    }
                    if($type == 4)
                    {
                        echo "<span class=\"extra-info\">Industry Name: $name</span>
                        <span class=\"extra-info\">Topic: $topic</span>
                        <span class=\"extra-info\">Guide: $guide</span>
                        <span class=\"extra-info\">Contact: $contact</span>";
                    }
                ?>
                <span class="report__link">Report: <a href="<?php echo "../".$report; ?>" class="link">Click here to download</a></span>
                <div class="img-grid">
                    <div class="img-grid__container"><img src="<?php echo "../".$image1; ?>" class="img-grid__image"></div>
                    <div class="img-grid__container"><img src="<?php echo "../".$image2; ?>" class="img-grid__image"></div>
                    <div class="img-grid__container"><img src="<?php echo "../".$image3; ?>" class="img-grid__image"></div>
                    <div class="img-grid__container"><img src="<?php echo "../".$image4; ?>" class="img-grid__image"></div>
                </div>
                <?php
                    echo "<div class=\"button-div align-right margin-right-small\"><a class=\"btn margin-top-small\" href=\"pdfPrint.php?id=".$id."&type=".$type."\" target=\"_blank\">Print &rarr;</a></div>";
                    if(isset($_SESSION["admin"]))
                    {
                        $sql = "select id,iqac.report.status as status from iqac.report where ref_id='$id' and event_type='$type'";
                        $result = $con->query($sql);
                        $row = $result->fetch_assoc();
                        if($row["status"] == "Approved")
                        {
                            echo "<div class=\"button-div approved\"><a class=\"margin-top-large\">Approved </a></div>";    
                        }
                        else
                        {
                            echo "<div class=\"button-div align-right margin-right-small\"><a class=\"btn margin-top-small\" onclick=\"viewApprove(this,".$row["id"].")\">Approve &rarr;</a></div>";
                        }
                    }
                ?>
            </div>
        </main>
    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>