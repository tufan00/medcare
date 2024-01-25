<?php
 $conn = new mysqli("localhost","root","","project");
 if(isset($_POST['name'])){
    $id = $_POST['name'];
    $query =mysqli_query($conn,"SELECT hospital_dep_doctor.doctor_name from hospital_dep_doctor LEFT JOIN catagory on catagory.name = hospital_dep_doctor.dep_name WHERE catagory.name = '$id' ");
    while($row =mysqli_fetch_array($query) ){

$id = $row['id'];
$treat = $row['doctor_name'];
echo "<option value = '$treat'> $treat </option>";

    }

 }

?>