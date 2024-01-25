
<!-- load  hospital for doctor details.php file  -->

<?php
$conn = mysqli_connect("localhost","root","","project") or die("connection failed");
$sql =  "select * from hospital_details";
$query = mysqli_query($conn,$sql) or die("Query unsuccessful");
$str = "";

while($row = mysqli_fetch_assoc($query)){
    $str .= "<option value='{$row['name']}'>{$row['name']}</option>";
}
echo $str;

?>