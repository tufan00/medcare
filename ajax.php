<?php
 $conn = new mysqli("localhost","root","","project");
 if(isset($_POST['id'])){
    $id = $_POST['id'];
    $query =mysqli_query($conn,"SELECT * FROM `only_treatment` where department = '$id'");
    while($row =mysqli_fetch_array($query) ){

$id = $row['id'];
$treat = $row['treat_name'];
echo "<option value = '$id'> $treat </option>";

    }

 }

?>