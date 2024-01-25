<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<link rel="stylesheet" href="./css/style.css">

<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.min.js"></script>



<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treatment Searching</title>
</head>
<body>

    
<div class="container">
       
        <div class="col d-flex justify-content-center">
        <div class="card p-4 mt-4">
<div class="card-header bg-warning">
<h1 class="text-center bg-warning">Check Treatment </h1>

</div>
<div class="card-body bg-info d-flex justify-content-center">

        <div class="row">

            <form action="hospital_reservation_data_insert.php" method="post">
                
                
                
            <div class="container">
        <div class="form-group">
            <label for="Catagory"> <b>Catagory</b> </label>
                <select class="form-control" name="Catagory" id="Catagory">
                    <option value="">Select Catagory</option>
                <?php
                $conn = new mysqli("localhost","root","","project");
                $sql = "SELECT * FROM `catagory`;";
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <option value= "<?php echo $row['id']; ?> "> <?php echo $row['name']; ?> </option>
                    <?php
                }
                ?>
                
                
                
                </select>
            <br>
            <label for="Treatment"><b>Treatment</b></label>
                <select class="form-control" name="Treatment" id="Treatment">
                    <option value=""  selected> Select Traetment</option>
                </select>
            
            
        </div>
        
    </div>
                   
<div class="col-sm form-group">
<input class="btn btn-success mt-2 m-4" type="submit" name="save" id="save" value="Search">
<a href="index.php" class="btn btn-warning  p-2 mr-3">Back</a>

</div>               
            </form>
                </div>
    </div>
</div>
        </div>
</div>


<script src="custom.js"></script>
    
</body>
</html>