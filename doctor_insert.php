<?php include 'includes/header1.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">

<script src="./js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Insert</title>
</head>
<body>
<div class="container d-flex flex-content-between">
    <a href="admin_dashboard.php" class="btn btn-info p-2 ml-2 mt-5"> Back </a>
    </div>
<hr>
<div class="container  p-2">
    <div class="row">
        <div class="col-sm">
    <h1 class="text-center form-group">Enter New Department</h1>
    <hr>
    <form action="" method="post">
    <?php 

$conn = mysqli_connect("localhost","root","","project");

if (isset($_POST['add_departmrnt'])){
    $department = $_POST['department'];

        $save = "INSERT INTO catagory(name)VALUES('$department')";
        $query = mysqli_query($conn,$save);
        if ($query) {
            echo "
            <script type='text/javascript'>alert('Department Added Sucessfully');
            window.location='doctor_insert.php';
            </script>";
        }
        else{
            die(mysqli_error($conn));
        }
}
?>
        <!-- <p>Enter Department</p> -->
        <div class="d-flex justify-content-center">
        <input type="text" class="form-group p-2" name="department" id="department">
    <input class="btn btn-warning d-inline form-group p-2 ml-2" type="submit" name="add_departmrnt" id="add_departmrnt" value="Add Department">

</div> 
    </form>
</div>
<div class="col-sm">
    <h1 class="text-center form-group">Enter New Treatment</h1>
    <hr>
    <form action="" method="post">
        <div>
        
        </div>
    <?php 

$conn = mysqli_connect("localhost","root","","project");

if (isset($_POST['add_treatment'])){
    $treatment = $_POST['treatment'];
    $department =$_POST['catagory'];

        $save1 = "INSERT INTO only_treatment(treat_name,department)VALUES('$treatment','$department')";
        // INSERT INTO `only_treatment`(`id`, `treat_name`) VALUES ('[value-1]','[value-2]')
        $query = mysqli_query($conn,$save1);
        if ($query) {
            echo "
            <script type='text/javascript'>alert('Treatment Added Sucessfully');
            window.location='doctor_insert.php';
            </script>";
        }
        else{
            die(mysqli_error($conn));
        }
}
?>
    <div class="d-flex justify-content-center">

    <div class="form-group"><label for="catagory"> Choose Department</label>
                        <select name="catagory" id="catagory" class="form-control" required="TRUE"> 
                            <option selected disabled>Select department </option>
                    <?php

                    require 'reservation_data.php';

                    $catagory = loadcatagory();
                    foreach ($catagory as $cat){
                        echo "<option id='".$cat['id']."' value = '".$cat['id']."'>" . $cat['name']."</option>";
                    }
        
                    
                    ?>
                
                    
                    </select>
                    </div>

        <input type="text" class="form-group ml-4" name="treatment" id="treatment" placeholder = "Enter Treatment">
    <input class="btn btn-info d-inline form-group p-2 ml-2" type="submit" name="add_treatment" id="add_Treatment" value="Add Treatment">

</div>

</div>

</div>
</div>
 <hr>
 <hr>
 <div class="text-center">

<button class="btn btn-info m-4 p-2" type="submit" name="show_all" value="show data">Show Data</button>
</div>

 <div class="text-center">
 
<table class ="table table-striped">
    
<tr>    
    
                    <th scope="col"> Department </th>
                    <th scope="col">Treatment name</th>
                    
</tr>

<?php 

$conn = mysqli_connect("localhost","root","","project");
if(isset($_POST['show_all'])){

$sql = "SELECT catagory.name,only_treatment.treat_name FROM `only_treatment`,`catagory`WHERE only_treatment.department = catagory.id ORDER BY catagory.name ASC;";
$result = mysqli_query($conn,$sql);
if (!$result){
    //echo "sucesssfull";
    echo "sorry!! bro..";
}
else {
    while($row = mysqli_fetch_array($result)){
        $h_name = $row['name'];
        $t_name = $row['treat_name'];
        echo '
        <tr>
        <td>'.$h_name.'</td>
        <td>'.$t_name.'</td>
        </tr>
        
        
        ';

        //echo "$h_name";
        //echo "$t_name";
    }
    
}
}

        ?>
      
</div>
</body>
</html>