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
</head>
<body>


<div class="card mt-5">
    <div class="card-header mt-3">
        <h1>Data fatch</h1>
    </div>
        <div class="card-body">

        <?php
$con = mysqli_connect('localhost','root','','project');

if(isset($_POST['save'])){
    $doctor = $_POST['d']; 
    $catagory = $_POST['catagory'];
    $department = implode(",",$catagory);
    //echo $department;
    $sql = "INSERT INTO `demo`(`department`,`doctor`) VALUES ('$department','$doctor')";
    $query_run = mysqli_query($con,$sql);

    //foreach($catagory as $department){
//$sql = "INSERT INTO `demo`(`department`,`doctor`) VALUES ('$department','$doctor')";
//$query_run = mysqli_query($con,$sql);
    //}
   
    if($query_run){ echo "data insertted ";}
else{
    echo "error";}
}


    ?>


            <form action="" method="post">
                <div class="form-group">
<?php

$con = mysqli_connect('localhost','root','','project');
$query = "select * from catagory";
$query_run = mysqli_query($con,$query);

if (mysqli_num_rows($query_run) > 0){

    foreach($query_run as $cat){

        ?>
        <input type="checkbox" name="catagory[]" id="catagory" value="<?=$cat['name'];?>"/> <?= $cat['name']; ?> <br/>
        <?php
    }
}
else{}

?>
</div>
<div class="form-group"> <label for="d">doctor name </label>
    <input type="text" name="d" id="d" required>
</div>
<hr>
<div class="form-group"><button class="btn btn-primary" name="save">Save </button></div>

</form>
        </div>
    </div>


</body>