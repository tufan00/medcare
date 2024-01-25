<?php include 'includes/user_header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
<script src="./js/bootstrap.bundle.min.js"></script>
<style>
    #username{
        color: red;
    }
    #btn{
        margin-top:2%;
    }
    #head{
        margin-top:5%;
    }
    a.dropdown-item1{
        font-size:40px;
        color:#666633;
        text-decoration:none;
        margin:2%;
        padding:2%;
    }
    a.dropdown-item2 {
        font-size:40px;
        color:black;
        text-decoration:none;
        margin:2%;
        padding:2%;
    }
    a.dropdown-item2 span{
        color:green;
    }
    a.dropdown-item1 span{
        color:blue;
    }
   
</style>

    <title>Search</title>
</head>
<body>
    <div class="container" id="head">

    <h1 style="color:blue;">Hello, <span id="username"> <?php 
  //session_start();
  echo "  ". $_SESSION['username']; ?> </span>  Welcome You to	<a href="#" class="logo" style="text-decoration:none;">  <i class="fa fa-heartbeat"></i> medcare </a></h1>
    </div>
    <div class="container d-flex flex-content-between" id="btn">
<a class="dropdown-item1" href="reservation_index.php"><span class="fa fa-calendar-check-o fa-2x mr-2 p-2"></span>Book Appointment</a>
	
<a  class="dropdown-item2" href="check_appointment.php";> <span class="fa fa-check-square-o fa-2x mr-2 p-2"></span>Check Appointment</a>

</div>
</body>
</html>