<?php
$hospital = $_POST['hospital'];
$department = $_POST['department'];
$treatment = $_POST['treatment'];
$Doctor = $_POST['Doctor'];


$price = $_POST['price'];
$conn = new mysqli('localhost','root','','project');
if(!$conn){echo "Database is not connected";}
else{
$query = "INSERT INTO `hospital`(`h_dep`, `h_treat`, `treat_price`,`h_name`,`d_name`) VALUES ('$department','$treatment','$price','$hospital','$Doctor')";
$query_run= mysqli_query($conn,$query);
if($query_run)
{
    echo "
        <script type='text/javascript'>alert('Data Inserted');
        window.location='data_insert_form.php';
        
        
        </script>";
}
else {
    echo "Error";
}
}


?>