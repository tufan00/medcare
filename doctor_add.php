
<?php include 'includes/user_header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./css/bootstrap4.min.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">



<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap4.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $("#catagory").change(function(){
            var aid = $("#catagory").val();
            $.ajax({
                url: 'reservation_data.php',
                method : 'post',
                data : 'aid=' + aid
            }).done(function(doctor){
                console.log(doctor);
               doctor = JSON.parse(doctor);
                $("#doctor").empty();
                doctor.forEach(function(d)
            
                {
                    $('#doctor').append('<option>' + d.name + '</option>')
                })
            })
        })
    })


</script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>







<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        echo "hello"; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    
<div class="container">
        <hr>
        
        <div class="d-flex justify-content-start">

            <a href="user_search.php" class="btn btn-primary  "> BACK </a>
        </div>

        <hr>
        <div class="col d-flex justify-content-center">
        <div class="card">
<div class="card-header">
<h1 class="text-center">Add Doctor</h1>

</div>
<div class="card-body">

        <div class="row">

            <form action="reservation_data_insert.php" method="post">
               
                    <div class="col">
                    <div class="form-group"><label for="catagory"> Choose Hospital</label>
                        <select name="catagory" id="catagory" class="form-control" required="TRUE"> 
                            <option selected disabled>Select Department </option>
                    <?php

                    require 'reservation_data.php';

                    $catagory = loadcatagory();
                    foreach ($catagory as $cat){
                        echo "<option id='".$cat['id']."' value = '".$cat['id']."'>" . $cat['name']."</option>";
                    }
        
                    
                    ?>
                
                    
                    </select>
                    </div>


              <div class="col">
                    <div class="form-group"><label for="doctor"> Choose Doctor </label>
                        <select name="doctor" id="doctor" class="form-control" required>     </select>
                </div>
              </div>

              <div class="col">
                    <div class="form-group"><label for="d_name"> Enter Doctor Name </label>
                        <input name="d_name" id="d_name" class="form-control" required>     
                </div>
              </div>
           

                    </div>
                    <br>
                    <input type="hidden" id="status" name="status" value="pending" >

<input class="btn btn-success mt-2 ml-5" type="submit" name="save" id="save" value="Add Doctor">

               
            </form>
                </div>
    </div>
</div>
        </div>
</div>
<!-- ................................  -->




</body>
</html>