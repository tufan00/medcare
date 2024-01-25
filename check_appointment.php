<?php include 'includes/user_header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <title>Show Appointment</title>
</head>
<body>
    

<div class="container p-3 mt-3">
<div class="d-flex justify-content-start">

<a href="user_search.php" class="btn btn-primary m-2  "> BACK </a>
<hr>
</div>
    <div class="card p-3">


    <table class ="table table-stripep ">
<tr>    
    
                    
                    <th>Patient name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Catagory</th>
                    <th>Hospital </th>
                    <th>Doctor name</th>
                    <th>Date</th>

                
                    <th>Status</th>
</tr>
<?php 
//require 'reservation_db.php';
$conn = new mysqli('localhost','root','','project' );
// session_start();
$p_name = $_SESSION['username'];
// echo $p_name;

if(isset($p_name)){
    //$id = $_GET['chid'];
    $p = $p_name; 
   //echo $id;
   //echo $p_name;

$select1 = "SELECT `p_name`, `email`, `phone`, `doctor`,`catagory` ,`date`, `status` FROM `reservation`WHERE p_name = '$p'";
$select ="SELECT reservation.p_name,reservation.email,reservation.phone,reservation.doctor,reservation.catagory, hospital_dep_doctor.h_name,reservation.date,reservation.status  FROM reservation LEFT JOIN `hospital_dep_doctor` on reservation.doctor = hospital_dep_doctor.doctor_name where reservation.p_name = '$p'";
$result = mysqli_query($conn,$select);
if ($result){
while($row = mysqli_fetch_array($result)){
        $p_name = $row['p_name'];
        $email=$row['email'];
        // $email=$row['email'];
        $phone=$row['phone'];
        $doctor=$row['doctor'];
        $name=$row['catagory'];
        $date=$row['date'];
        //$time = $row['time'];
        $status = $row['status'];
        $hospital = $row['h_name'];
        echo '
        <tr>
        <td>'.$p_name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        
        <td>'.$name.'</td>
        <td>'.$hospital.'</td>
                    <td>'.$doctor.'</td>
                    <td>'.$date.'</td>
                   
                    <td>'.$status.'</td>
                </tr> ';

?>
    

        <?php
        } }

        else {
            // echo '
            // <tr><td>"No data Found "</td></tr>
            // '
            die(mysqli_error($conn));
            ; 

        }

    }

else{
    echo "NO reservation";
}
        ?>

</table>

        </div>
   



    </div>
</div>

</body>
</html>