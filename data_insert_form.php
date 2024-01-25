
<?php include 'includes/header1.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">

<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $("#catagory").change(function(){
            var aid = $("#catagory").val();
            $.ajax({
                url: 'hospital_reservation_data.php',
                method : 'post',
                data : 'aid=' + aid
            }).done(function(doctor){
                console.log(doctor);
               doctor = JSON.parse(doctor);
                $("#doctor").empty();
                doctor.forEach(function(d)
            
                {
                    $('#doctor').append('<option>' + d.treat + '</option>')
                })
            })
        })
    })


</script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Treatment Price Form </title>
</head>
<body>

<a href="admin_dashboard.php" class="btn btn-info p-2 ml-2">Back</a>
    <hr>
<div class="container p-2"> 
       
        <div class="col d-flex justify-content-center">
        <div class="card p-3">

<div class="card-header">
<h1 class="text-center">Hospital Treatment Price Form </h1>

</div>
<div class="card-body">

        <div class="row">

            <form action="data_insert.php" method="post">
                
            <div class="col-sm form-group">
            <label>Hospital</label><br>

        <select name="hospital" id="hospital" class="p-2" required="TRUE">
    
    <option value="" selected >Hospital selected</option>
            </select>
        </div>
                
<div class=" col-sm form-group"><label for="catagory"> Choose Department</label>
                        <select name="department" id="catagory" class="form-control" required="TRUE"> 
                            <option selected disabled>Select department </option>
                    <?php

                    require 'reservation_data.php';

                    $catagory = loadcatagory();
                    foreach ($catagory as $cat){
                        echo "<option id='".$cat['id']."' value = '".$cat['name']."'>" . $cat['name']."</option>";
                    }
        
                    
                    ?>
                
                    
                    </select>
                    </div>


                    <div class="col-sm form-group">
<label>Treatment</label><br>

<select name="treatment" id="treatment" class="p-2" required="TRUE">
    
    <option value="" selected >Treatment selected</option>
</select>
</div>

<div class="col-sm form-group">
<label>Doctor</label><br>

<select name="Doctor" id="Doctor" class="p-2" required="TRUE">
    
    <option value="" selected >Doctor selected</option>
</select>
</div>




              <div class="col-sm">
                  <div class="form-group">
                      <label for="price">Enter Price</label> <br>
                          <input type="text" name="price" id="price" placeholder="enter price" >
                  </div>
              </div>

              

                    </div>
                   

<input class="btn btn-success mt-2" type="submit" name="save" id="save" value="Save Data">

               
            </form>
                </div>
    </div>
</div>
        </div>
</div>

<?php


?>



<!-- hospital load start -->

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        function loadData(){
            $.ajax({
                url:"hospital-load.php",
                type:"POST",
                success:function(data){
                    $("#hospital").append(data);
                }
            });
        }
        loadData();
    });

</script>
<!-- hospital load end  -->

<!-- treatment load start -->

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        function loadData(){
            $.ajax({
                url:"treatment_load.php",
                type:"POST",
                success:function(data){
                    $("#treatment").append(data);
                }
            });
        }
        loadData();
    });

</script>
<!-- treatment load end  -->
<!-- Doctor load start -->

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        function loadData(){
            $.ajax({
                url:"Doctor_load.php",
                type:"POST",
                success:function(data){
                    $("#Doctor").append(data);
                }
            });
        }
        loadData();
    });

</script>
<!-- Doctor load end  -->


</body>
</html>