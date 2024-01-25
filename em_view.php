<?php include 'includes/dummy-header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view calls</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awasome.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.min.js"></script>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h2>Details</h2>
    </div>
    <div class="card-body">
<table class="table table-striped">
  <thead>
    <tr>
     
        <th scope="col">Number</th>
      <th scope="col">Date</th>
      <!-- <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
      <?php
                    $con =new  mysqli("localhost","root","","project");
            $sql = "SELECT * FROM `emergency_call`";
            $result = mysqli_query($con,$sql);
            if($result){
                while($row = mysqli_fetch_array($result)){
                    $call = $row['number'];
                    $date = $row['date'];
                    echo '
                    <tr>
    
      <td>'.$call.'</td>
      <td>'.$date.'</td>
      
    </tr>
                    ';
                }

            }
    
    ?>
  </tbody>
</table>
</div>
</div>
</body>
</html>