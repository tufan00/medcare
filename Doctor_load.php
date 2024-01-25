
<!-- load  hospital for doctor details.php file  -->

<?php
$conn = mysqli_connect("localhost","root","","project") or die("connection failed");
//$dep = $_POST['catagory'];
$sql =  "SELECT * FROM hospital_dep_doctor";
//$sql = "SELECT doctor_name FROM `hospital_dep_doctor` WHERE dep_name = "nurologist";";
$query = mysqli_query($conn,$sql) or die("Query unsuccessful");
$str = "";

while($row = mysqli_fetch_assoc($query)){
    $str .= "<option value='{$row['doctor_name']}'>{$row['doctor_name']}</option>";
}
echo $str;

?>