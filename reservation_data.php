<?php

require 'reservation_db.php';

if(isset($_POST['aname'])){
    $db = new db;
    $conn = $db -> connect();
    
    $stmt = $conn-> prepare("Select * from hospital_dep_doctor where doctor_name = ". $_POST['aname']);
    $stmt->execute();
    $doctor = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($doctor);
        
}

function loadcatagory(){
$db = new db;
$conn = $db -> connect();

$stmt = $conn-> prepare("Select * from catagory");
$stmt->execute();
$catagory = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $catagory;

}

?>