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

    <title>Doctor Details</title>
</head>
<body>

<a href="admin_dashboard.php" class="btn btn-info p-2 ml-3">Back </a>
<hr>

<?php
$conn = mysqli_connect("localhost","root","","project") or die("connection failed");
    
if (isset($_POST['add_doctor'])){

    $h_name = $_POST['hospital'];
    $dep_name = $_POST['department'];
    $doctor = $_POST['doctor'];
    // echo "well done bro!"+ $h_name +" " + $dep_name+" " +$doctor;
    //echo $h_name;
    //echo $dep_name;
    //echo $doctor;
    $sql = "INSERT INTO `hospital_dep_doctor`(`h_name`, `dep_name`, `doctor_name`) VALUES ('$h_name','$dep_name','$doctor')";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "
        <script type='text/javascript'>alert('Doctor Added Sucessfully');
        window.location='doctor_details.php';
        </script>";}
    }


?>


<div class="container  mt-4">
<form action="" method="post">
<div class="row d-flex flex-content-between mt-4">
    
<div class="col-sm form-group">
<label>Hospital</label><br>

<select name="hospital" id="hospital" class="p-2" required="TRUE">
    
    <option value="" selected >Hospital selected</option>
</select>
</div>
<div class="col-sm form-group">
<!-- <label>Department</label> -->

<div class="form-group"><label for="catagory"> Choose Department</label>
                        <select name="department" id="catagory" class="form-control" required="TRUE"> 
                            <option selected disabled>Select department </option>
                    <?php

                    require 'reservation_data.php';

                    $catagory = loadcatagory();
                    foreach ($catagory as $cat){
                        echo "<option id='".$cat['id']."' value = '".$cat['name']."'>" . $cat['name']."</option>";
                    }
        
                    
                    ?>
                
                    
                    </select>
                    </div>



</div>
<div class="col-sm form-group">
<label>Doctor Name</label>
<br>
<input type="text" name="doctor"  id="doctor" placeholder="Enter Doctor name" required>

</div>
<div class="col-sm form-group">
    <br>
<input class="btn btn-info form-group text-bold" type="submit" name="add_doctor" value="Add Doctor">

</div>


</div>
</form>
</div>
<!-- display all the data in the tab;le  -->

<div class="container">
<table class="table">
<thead>
<tr>
<th>Hospital</th>
<th>Department</th>
<th>Doctor</th>
</tr>
</thead>
<tbody>

<?php
$conn = mysqli_connect("localhost","root","","project") or die("connection failed");
$sql =  "SELECT * FROM `hospital_dep_doctor` ORDER BY h_name ASC";
$query = mysqli_query($conn,$sql) or die("Query unsuccessful");
//$str = "";

while($row = mysqli_fetch_assoc($query)){
    //$str .= "<option value='{$row['name']}'>{$row['name']}</option>";
    $hospital = $row['h_name'];
    $dep =$row['dep_name'];
    $doctor =$row['doctor_name'];
    ?>
    <tr>

    
    <td><?php echo $hospital ?></td>
    <td><?php echo $dep ?></td>
    <td><?php echo $doctor ?></td>
</tr>
<?php
}

?>

</tbody>

</table>


</div>



<!-- javascript for load hospital start -->


<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        function loadData(){
            $.ajax({
                url:"hospital-load.php",
                type:"POST",
                success:function(data){
                    $("#hospital").append(data);
                }
            });
        }
        loadData();
    });

</script>

</body>
</html>