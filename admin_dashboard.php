<?php include 'includes/header1.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awasome.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <title> Admin Here
    </title>
    <style>
        a{
            text-decoration:none;
            
            
        }
        .btn{
            color:white;
            font-weight:bold;
            font-family:arial;
            font-size:20px;
        }
        span{
            color:red;
            font-size:40px;
        }
    </style>
</head>
<body>
<div class="bg-image" 
     style="background-image: url('./images/1.jpg');
	 background-size: cover;

            height: 100vh">
<div class="container">
    <marquee behavior="" direction="left" speed="100">Admin Dashboard </marquee>
    <!-- <a href="display.php" class="btn btn-warning">Display Data</a> -->
    <div class="d-flex justify-content-around mt-5">
<a  class="btn btn-info" href="index1.php";> <span class="fa fa-check-square-o fa-2x mr-2 p-2"></span>Hospital Details</a>

    <!-- <a href="index1.php" class="btn btn-warning">Hospital Details</a> -->
    <a href="doctor_insert.php" class="btn btn-primary m-1"> <span class="fa fa-briefcase fa-2x mr-2 p-2"></span> Department Details</a>
    <a href="doctor_details.php" class="btn btn-secondary m-1"> <span class="fa fa-users fa-2x mr-2 p-2"></span> Doctor Details</a>
    
    
    <a href="show_re_admin.php" class="btn btn-success m-1"><span class="fa fa-calendar-plus-o fa-2x mr-2 p-2"></span>Reservation Details</a>
    <a href="data_insert_form.php" class="btn btn-dark m-1"><span class="fa fa-inr fa-2x mr-2 p-2"></span>Data Insert for Price Details</a>
</div>
</div>
    </div>
<!-- class="fa fa-calendar-check-o" -->
</body>
</html>