<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Club</title>
    <link rel="stylesheet" href="./css/User/LogIn.css">
    <link rel="stylesheet" href="./css/User/changepass.css">
    <link rel="stylesheet" href="./css/User/index.css">
    <link rel="stylesheet" href="./css/User/ManageUser.css">
    <link rel="stylesheet" href="./css/User/userlog.css">
    <link rel="stylesheet" href="./css/User/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" href="./image/download.jpg">
</head>

<body style="background-color:  #0c5774;">
    <div id="header">
        <!-- logo left -->
        <div class="head-left">
            <img src="./image/lg-school.png" alt="logo-school" class="img-lg">
        </div>
        <div class="head-name">
            <img src="./image/lg-cl.png" alt="">
        </div>
        <div class="head-right">
            <img src="./image/lg-club.png" alt="logo-club" class="img-lg-club">
        </div>
    </div>

    <?php if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page != 'login') { ?>
            <!-- menu -->
            <ul class="menu-bar">
                <li class="menu-item">
                    <a href="index.php?page=user" class="menu-name">Home</a>
                </li>
                <li class="menu-item">
                    <a href="index.php?page=changepass" class="menu-name">Change-Pass</a>
                </li>
                </li>
                <li class="menu-item">
                    <a href="index.php?page=logout" class="menu-name">Log-out</a>
                </li>
            </ul>
    <?php }
    } ?>

    <!-- body -->
    <?php
    session_start();
    if (!isset($_SESSION["us"]) && isset($_GET['page'])) {
        echo "<script> location.href='index.php'</script>";
        exit;
    }
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 'user') {
            include_once("user.php");
        }
        if ($page == 'logout') {
            include_once("logout.php");
        }
        if ($page == 'manageuser') {
            include_once("manageuser.php");
        }
        if ($page == 'login') {
            include_once("login.html");
        }
        if ($page == 'changepass') {
            include_once("Changepass.html");
        }
        if ($page == 'prodetail') {
            include_once("Product_Details.php");
        }
        if ($page == 'search') {
            include_once("search.php");
        }
    } else {
        include("login.html");
    }
    ?>


    <!-- footer -->
    <div id="footer">
        <div class="contact-infor">
            <div class="about">
                <h2 class="about-header"> Can Tho campus</h2>
                <hr>
                <p class="ft-content">UNIVERSITY OF GREENWICH (VIET NAM)</p>
                <p class="ft-content">160 30/4 street, An Phu ward, Ninh Kieu District - Cantho City</p>
                <p class="ft-content">Tel: 0292.3512.369</p>
                <p class="ft-content">Hotline: 0968.670.804 | 0936.600.861</p>
            </div>
            <div class="icon">
                <i class="fa fa-solid fa-envelope">
                    <span> Gmail </span>
                </i>
                <i class="gm fa-brands fa-facebook">
                    <span class="text1">Facebook</span>
                </i>
            </div>
        </div>
        <div class="tag">
            <p>© Greenwich University | 2022 IT Club copyright</p>
        </div>
    </div>
    <script src="./js/index.js"></script>

</body>

</html>