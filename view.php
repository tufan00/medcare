<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awasome.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.min.js"></script>
    
   
<link rel="stylesheet" href="./css/font-awesome.min.css">
<script src="./js/jquery.min.js"></script>

<style>
    
</style>
</head>
<body>

<a href="index1.php" class="btn btn-info p-2 mt-4 m-2">Back</a>

    
<div class="card mt-5" id="a" style="width: 100%;">
<div class="card-header d-flex justify-content-center">
<h1> hospital and Department Details </h1>
  </div>
  <div class="card-body d-flex justify-content-center ml-5">
  <?php 


$mysqli = new mysqli("localhost","root","","project");
if($mysqli->connect_error)
die ("Connection failed".$mysqli->connect_error);

if(isset($_GET['viewid'])){
    $id = $_GET['viewid'];

$query = "SELECT demo.hospital,demo.department FROM `hospital_details`,`demo` WHERE hospital_details.id = $id  And hospital_details.name = demo.hospital; "; 
//$query .= "SELECT * FROM demo;";

if($mysqli->multi_query($query)){
    $result = $mysqli->store_result();
   // echo "Total Record".$result->num_rows;
    echo "<hr width = '100px' align='left'/>";
    $finfo = $result ->fetch_fields();
    echo "<table class='table' border = '2'>";
    echo "<tr>";
    foreach ($finfo as $f){
        echo "<th>" .$f->name."</th>";

    }
echo "</tr>";
while ($row = $result->fetch_assoc()){
echo "<tr>";
    foreach ($row as $v){
        echo "<td>".$v."</td>";
    }
    echo "</tr>";
}
 echo"</table>";   
}

}

?>
  
</div>

</body>
</html>



