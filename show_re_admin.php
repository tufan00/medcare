<?php include 'includes/dummy-header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awasome.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>Show reservation</title>
</head>
<body>

<div class="container">
    <a href="admin_dashboard.php" class="btn btn-info" style="float:right;">Back</a>
</div>

<?php
                    $con =new  mysqli("localhost","root","","project");

                    if(!$con){echo "database is not connected";}

                   else{

                            $query = "SELECT `r_id`, `p_name`, `email`, `phone`, `doctor`,`catagory`,`date`,`status` FROM `reservation`;";
                            $query_run = mysqli_query($con,$query);
                           
                   
                   ?>



<br>
                                    <div class="table-responsive table-bordered p-3 ml-5" id="my-form">

                                        <table class="table p-2">
                                            <thead>
                                                <tr>
                                                    <th scope="col" >ID </th>
                                                    <th scope="col" >Patient Name </th>
                                                    <th scope="col" >Email </th>
                                                    <th scope="col" >Phone </th>
                                                    <th scope="col" >Doctor </th>
                                                    <th scope="col" >Catagory </th>
                                                    <th scope="col" >Date </th>
                                                    
                                                    <th scope="col" >Status </th>
                                                    <th scope="col" >Action </th>

                                                    


                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php  

                                                if(mysqli_num_rows($query_run)>0){

                                                    while($row = mysqli_fetch_array($query_run)){
                                                        $id = $row['r_id'];
                                                        $p_name=$row['p_name'];
                                                        $email=$row['email'];
                                                        $phone=$row['phone'];
                                                        $doctor=$row['doctor'];
                                                        $name=$row['catagory'];
                                                        $date=$row['date']; 
                                                        $status = $row['status'];
                                                        echo '
        <tr>
                    <td>'.$id.'</td>
                    <td>'.$p_name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$doctor.'</td>
                    <td>'.$name.'</td>
                    <td>'.$date.'</td>
                
                    <td>'.$status.'</td>
                    <td>
                    <a href="accept1.php?acceptid='.$id.'" class="btn btn-primary text-light" name="confirm" id="myBtn">Confirm</a>
                     <a href="reject.php?rejectid='.$id.'" class="text-light btn btn-danger" name="reject"  >Reject</a>

                    <a href="complete.php?completeid='.$id.'" class="text-light btn btn-danger" id="completed" name="completed"  >Completed</a>

                    

                    </td>

                </tr>
        
        
        '; 

                                            ?>
                                                       <!-- code here -->
                                                    <?php 
                                                    }

                                                    }
                                                    else{
                                                        // echo "no data found";
                                                        ?>
                                                        <!-- <tr>
                                                            <td colspan="7">No data found</td>
                                                        </tr> -->
                                                        <?php
                                                    }    
                                                    ?>



                                                    </tbody>
                                        </table>
                                    </div>
                                    <?php 
                                    
                                                }
                                    ?>

                </div>


                <script>
function myFunction() {
  document.getElementById("myBtn").disabled = true;
   document.getElementById("myBtn1").disabled = true;
}
</script>
    
</body>
</html>