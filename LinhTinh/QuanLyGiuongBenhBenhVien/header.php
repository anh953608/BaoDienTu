<?php
/**
 * Created by PhpStorm.
 * User: Q.Anh
 * Date: 12/3/2017
 * Time: 1:27 AM
 */
include ('ConnectDB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản lý giường bệnh</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><span>CN Web</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if(isset($_SESSION['ten'])){
                        ?>
                        <li><a href="Wellcome.php">
                            <?php echo "Hello! ".$_SESSION['ten']?></a></li>
                        <li class="btn-trial"><a href="logout.php"><i class="fa fa-power-off"></i></a></li>
                    <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>