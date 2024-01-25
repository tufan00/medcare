
<?php include 'includes/header1.php'; ?>


<?php include 'connection.php'; ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv = "refresh" content="30"> -->

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awasome.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap4.min.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap4.min.js"></script>
    <title> Admin Here
    </title>
</head>
<body>


<div class="container">
    
    <a href="admin_dashboard.php" class="btn btn-info">Back</a>
   


    


<form action="" method="post" class="insert-form" id="insert_form">
    <hr>
        <h1 class="text-center">Enter Details Of Hospital </h1>
            <hr>
                <div class="input-field">
            <table class="table table-bordered" id="table_field">
                <tr>
                    <th>Hospital name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Pincode</th>
                    <th>Department</th>


                </tr>


<?php 

$conn = mysqli_connect("localhost","root","","project");

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $pincode = $_POST['pincode'];
    $catagory = $_POST['catagory'];

    $department = implode(",",$catagory);
     //echo $department;

    foreach ($name as $key => $value){

        $save = "INSERT INTO hospital_details(name,email,phone,state,district,pincode)VALUES('".$value."','".$email[$key]."','".$phone[$key]."','".$state[$key]."','".$district[$key]."','".$pincode[$key]."');
    INSERT INTO `demo`(`department`,`hospital`) VALUES ('$department','".$value."')";
    
        //$query = mysqli_query($conn,$save);
        $result = $conn -> multi_query($save);
        if(!$result){
            echo "error";
        }
       
    }
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<tr>
    <td><input class="form-control" type="text" name="name[]" required="" id="" autofill="off" ></td>
    <td><input class="form-control" type="email" name="email[]" required="" id="" autofill="off" ></td>
    <td><input class="form-control" type="phone" name="phone[]" required="" id="" autofill="off" maxlength="10" pattern="[0-9]{10}"></td>
    <!-- <td><input class="form-control" type="text" name="state[]"required=""  id="" autofill="off" ></td> -->
    <td><select name="state[]" class="dropdown p-2" required id="">
    <option selected value="West Bengal" class="w-100" >West Bengal</option>
    </select>
</td>
    
    <!-- <td><input class="form-control" type="text" name="district[]" required="" id="" autofill="off" ><select name="district[]" class="dropdown p-2" required id="">
    <option selected value="" class="w-100" >Midnapore </option></select></td> -->
    <td><select name="district[]" class="from-control dropdown p-2" required="" id="">
    <option selected value="" class="w-100" >Select District </option>
    <option value="Jalpaiguri">Jalpaiguri</option>
    <option value="Bankura">Bankura</option>
    <option value="purulia">purulia</option>
    <option value="Murshidabad">Murshidabad</option>
    <option value="Nadia">Nadia</option>
    <option value="Malda">Malda</option>
    <option value="Darjeeling">Darjeeling</option>
    <option value="Hoogly">Hoogly</option>
    <option value="Paschim Midnapore">Paschim Midnapore</option>
    <option value="Purba Midnapore">Purba Midnapore</option>
    <option value="Bardhaman">Bardhaman</option>
    <option value="Kolkata">Kolkata</option>

    </select>

</td>




    <td><input class="form-control" type="text" name="pincode[]" required id="" autofill="off" maxlength="6" pattern="[0-9]{6}" ></td>
    <td>
      <!-- this code only for catagory start   -->
    
    <div class="form-group">
<?php

$con = mysqli_connect('localhost','root','','project');
$query = "select * from catagory";
$query_run = mysqli_query($con,$query);

if (mysqli_num_rows($query_run) > 0){

    foreach($query_run as $cat){

        ?>
        <input class="form-group" type="checkbox" name="catagory[]" id="catagory" value="<?=$cat['name'];?>"/> <?= $cat['name']; ?> <br/>
        <?php
    }
}
else{}

?>

</div> 
      <!-- this code only for catagory end   -->

</td>
</tr>

            </table>
            <center>
            <input class="btn btn-success p-2 m-2" type="submit" name="save" id="save" value="save data">
            <!-- <button id="RefreshPage">refresh</button> -->
            <!-- <input type="button" value="Reload Page" onClick="document.location.reload(true)"> -->
            </center>

                </div>
            </hr>
        
    </hr>
</form>

<!-- showing data  -->

<table class ="table table-bordered mt-3 p-2">
<tr>    
    
                    <th> ID </th>
                    <th>Hospital name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>District</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Operation</th>
</tr>
<?php 
$select = "SELECT * FROM hospital_details ORDER BY id DESC";
$result1 = mysqli_query($conn,$select);
if(!$result1){echo "";}
else{
while($row = mysqli_fetch_array($result1)){
 
$id = $row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $district=$row['district'];
        $state=$row['state'];
        $pincode=$row['pincode'];
        echo '
        <tr>
        <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$district.'</td>
                    <td>'.$state.'</td>
                    <td>'.$pincode.'</td>
                    <td><button class="btn btn-primary m-1"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger m-1"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                    <!-- <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter"><a href="view.php?viewid='.$id.'" class="text-light">view</a></button> -->
                    

                    </td>

                </tr>
        
        
        '; ?>
    

        <?php
        }  }
        ?>

</table>


        </div>
   

        <script>
   $('#RefreshPage').click(function() {
      //location.reload();
      setTimeout(function() { location.reload(true); }, 1000);
   });
</script>  


</body>
</html>