
<?php include 'includes/user_header.php'; ?>


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
                url: 'reservation_data.php',
                method : 'post',
                data : 'aname=' + aname
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

    
<div class="container">
        <hr>
        
        <div class="d-flex justify-content-start">

            <a href="user_search.php" class="btn btn-primary  "> BACK </a>
        </div>

        <hr>
        <div class="col d-flex justify-content-center">
        <div class="card">
<div class="card-header">
<h1 class="text-center">Reservation Form </h1>

</div>
<div class="card-body">

        <div class="row">

            <form action="reservation_data_insert.php" method="post">
                <div class="col">
                    <label for="P_name"> <b>Patient name</b> </label>
    <!-- <input class="form-control" type="text" name="p_name" required="" id="" autofill="off" > -->
    <!-- .................  -->
    <select name="p_name" class="form-control" > 
                            <option selected disabled>
                                <?php
                            //session_start();
                    
                            echo "  ". $_SESSION['username'];
                            ?> 
                            </option>
    </select>
<!-- .............  -->
                </div>
                
                <div class="col">
                    
                    <label for="Email" class="p-2"> <b>Email</b> </label>
    <input class="form-control" type="text" name="email" required="" id="" autofill="off" placeholder="enter email" >

                </div>

                <div class="col">
                    <label for="Phone"> <b>Phone</b> </label>
    <input class="form-control" type="text" name="phone" placeholder="enter Mobile" required="" id="" autofill="off" maxlength="10" pattern="[0-9]{10}">

                </div>
                    <div class="col">
                    <label for="Catagory"> <b>Catagory</b> </label>
                <select class="form-control" name="catagory" id="Catagory">
                    <option value="">Select Catagory</option>
                <?php
                $conn = new mysqli("localhost","root","","project");
                $sql = "SELECT * FROM `catagory`;";
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <option value= "<?php echo $row['name']; ?> "> <?php echo $row['name']; ?> </option>
                    <?php
                }
                ?>
                </select>
            </label>
            </div>

            <div class="col">
            <label for="Doctor"><b>Doctor </b> </label>
                <select class="form-control" name="Doctor" id="Doctor">
                    <option value=""  selected> Select Doctor</option>
                </select>
            
            </div>
            </div>

              <div class="col">
              <div class="form-group">
              <label for="Date"> <b> Choose Date </b></label>
              <input class="form-control" type="date" name="date" required id="" autofill="off"  >
              </div>
            </div>

            <!-- <div class="col">
            <label for="Time">Choose Time</label> 
              <input class="form-control" type="time" name="time" required id="" autofill="off"  >
            </div> -->

                    
                    
                    <input type="hidden" id="status" name="status" value="pending" >

<input class="btn btn-success form-control p-2 btn-lg btn-block" type="submit" name="save" id="save" value="Request For Appointment">

               
            </form>
            </div>
                </div>
    </div>
</div>
        </div>
</div>
<!-- ................................  -->

<!-- javascript for load doctor start -->


<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$('#Catagory').on('change',function(){
    var CatagoryId = $(this).val();
    $.ajax({
        method: "POST",
        url:"ajax1.php",
        data:{name:CatagoryId},
        dataType:"html",
        success:function(data){
            $("#Doctor").html(data);
        }

    });
});
});
</script>


</body>
</html>