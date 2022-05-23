<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 'userlog') { ?>
            <link rel="stylesheet" href="./css/User/LogIn.css">
            <link rel="stylesheet" href="./css/User/userlog.css">
        <?php } else { ?>
            <link rel="stylesheet" href="./css/User/user.css">
            <link rel="stylesheet" href="./css/User/LogIn.css">
            <link rel="stylesheet" href="./css/User/index.css">
            <link rel="stylesheet" href="./css/User/ManageUser.css">
            <link rel="stylesheet" href="./css/User/ManageDevice.css">
        <?php } ?>
    <?php } else { ?>
        <link rel="stylesheet" href="./css/User/user.css">
        <link rel="stylesheet" href="./css/User/LogIn.css">
        <link rel="stylesheet" href="./css/User/index.css">
        <link rel="stylesheet" href="./css/User/ManageUser.css">
        <link rel="stylesheet" href="./css/User/ManageDevice.css">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/download.jpg">
    <title>Manage User</title>
</head>

<body>

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

    <!-- menu -->
    <ul class="menu-bar">
        <li class="menu-item">
            <a href="admin.php" class="menu-name">Home</a>
        </li>
        <li class="menu-item">
            <a href="?page=manageuser" class="menu-name">Manage User</a>
        </li>
        <li class="menu-item">
            <a href="?page=managedevice" class="menu-name">Devices</a>
        </li>
        <li class="menu-item">
            <a href="?page=userlog" class="menu-name">User log</a>
        </li>
        <li class="menu-item">
            <a href="admin.php?page=logout" class="menu-name">Log-out</a>
        </li>
    </ul>

    <!-- body -->
    <?php
    session_start();
    if (!isset($_SESSION["Admin"])) {
        header("location: index.php?page=login");
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
        if ($page == 'manageuser_update') {
            include_once("manageuser_update.php");
        }
        if ($page == 'manageuserpro') {
            include_once("manageuserpro.php");
        }
        if ($page == 'managedevice') {
            include_once("ManageDevice.php");
        }
        if ($page == 'changepass') {
            include_once("Changepass.html");
        }
        if ($page == 'userlog') {
            include_once("UserLog.php");
        }
    } else {
        include("userlist.php");
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
</body>

</html>