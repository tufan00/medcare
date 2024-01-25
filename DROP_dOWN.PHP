<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awasome.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="">
        <div class="form-group">
            <label for="Catagory">Catagory
                <select class="form-control" name="Catagory" id="Catagory">
                    <option value="">Select Country</option>
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
            </label>
            <label for="Treatment">Treatment
                <select class="form-control" name="Treatment" id="Treatment">
                    <option value=""> Select Traetment</option>
                </select>
            </label>
            <!-- <label for="">
                <select name="" id="">
                    <option value=""></option>
                </select>
            </label> -->
        </div>
        </form>
    </div>

<script src="custom.js"></script>

</body>
</html>