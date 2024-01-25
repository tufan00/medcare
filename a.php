<?php
$conn = NEW mysqli('localhost','root','','project');

if (isset($_POST['save'])){
$dip_id = $_POST['Catagory'];
$treat = $_POST['Treatment'];
//echo " dep id =" . $dip_id;
//echo "treatment id =" .$treat;

$sql = "SELECT hospital.h_dep,hospital.h_treat,hospital.treat_price, hospital.h_name,hospital.d_name,only_treatment.treat_name,catagory.name FROM hospital LEFT JOIN catagory ON hospital.h_dep = catagory.name LEFT JOIN only_treatment 
ON only_treatment.department = catagory.id AND hospital.h_treat = only_treatment.treat_name WHERE only_treatment.id = '$treat' AND catagory.id='$dip_id';";
$result = mysqli_query($conn,$sql);
if($result){
    //echo "Excuted";
    $row = mysqli_fetch_array($result);
    echo $row['h_dep']; 
    echo $row['treat_name']; 
    echo $row['treat_price']; 
    echo $row['name'];


}
else{
    echo "bye bye";
}

}

?>