
<!-- load  hospital for doctor details.php file  -->

<?php
$conn = mysqli_connect("localhost","root","","project") or die("connection failed");
$sql =  "SELECT * FROM `only_treatment`";
$query = mysqli_query($conn,$sql) or die("Query unsuccessful");
$str = "";

while($row = mysqli_fetch_assoc($query)){
    $str .= "<option value='{$row['treat_name']}'>{$row['treat_name']}</option>";
}
echo $str;

?>