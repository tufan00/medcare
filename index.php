<?php include 'includes/header.php'; ?>

		<!-- banner -->
		<!-- <div class="banner_w3lspvt position-relative">
			<div class="container">
				<div class="d-md-flex">
					<div class="w3ls_banner_txt">
						<h3 class="w3ls_pvt-title">Business <br><span>Startup</span></h3>
						<p class="text-sty-banner">Sed ut perspiciatis unde omnis iste natus doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
						<a href="about.php" class="btn button-style mt-md-5 mt-4">Read More</a>
					</div>
					<div class="banner-img">
						<img src="images/banner.png" width=300px height=400px alt="" class="img-fluid">
					</div>
				</div>
			</div>
			animations effects
			<div class="icon-effects-w3l">
				<img src="images/shape1.png" alt="" class="img-fluid shape-wthree shape-w3-one">
				<img src="images/shape2.png" alt="" class="img-fluid shape-wthree shape-w3-two">
				<img src="images/shape3.png" alt="" class="img-fluid shape-wthree shape-w3-three">
				<img src="images/shape5.png" alt="" class="img-fluid shape-wthree shape-w3-four">
				<img src="images/shape4.png" alt="" class="img-fluid shape-wthree shape-w3-five">
				<img src="images/shape6.png" alt="" class="img-fluid shape-wthree shape-w3-six">
			</div>
			<!- //animations effects -->
		<!-- </div> -->
		<!-- //banner -->
	
	<!-- //main banner -->
	<style>

#c-body{
	border:none;
	outline:none;
}
.card-header{
	border: none;
}
.card{
	border:none;
}

		</style>


	<div class="bg-image" 
     style ="background-image: url('./images/22.jpg');
	 background-size: cover;

            height: 100vh">
	<div class="container" id="banner" style="outline:none;" >
    <div class="row" id="row">
        <div class="col-md-12 mt-4" id="b4">
            <div id="b0" class="card bg-transparent  " style="width:100%;">
                <div id="b1" class="card-header bg-transparent text-dark " style="width:100%;">

                <h4 class="card-title d-flex justify-content-center bg-transparent text-primary" id="b3">Search Nearest Hospital</h4>
                        </div>

                <div class="card-body " id="c-body" >
                <div class="row">
					
					
                    <div class="col-md-12 ">
                        <form action="" method="post">
                        <div class="form-group d-flex justify-content-center">
                            <!-- <input type="text" class="form-control" name="get_state" placeholder="enter state" require> -->
                            <!-- <input type="text" class="form-control" name="get_district" placeholder="enter district" require> -->
                            <div class="col-md-4 form-group"><label> <b>State:</b>  </label> <br>
                            <select name="get_state" class="dropdown p-2" require id="">
    <option selected value="West Bengal" class="w-100" >West Bengal   </option>
    </select></div>
    
    <div class="col-md-4 form-group">
    <label><b> District:</b>  </label> <br>
    <select name="get_district" class="dropdown p-2" require id="">
    <option selected value="" class="w-100" >Select District </option>
    <option value="Jalpaiguri">Jalpaiguri</option>
    <option value="Bankura">Bankura</option>
    <option value="purulia">purulia</option>
    <option value="Murshidabad">Murshidabad</option>
    <option value="Nadia">Nadia</option>
    <option value="Malda">Malda</option>
    <option value="Darjeeling">Darjeeling</option>
    <option value="Hoogly">Hoogly</option>
    <option value="Paschim Midnapore">Paschim Midnapore</option>
    <option value="Purba Midnapore">Purba Midnapore</option>
    <option value="Bardhaman">Bardhaman</option>
    <option value="Kolkata">Kolkata</option>

    </select>
    </div>
<div class="col-md-4 form-group">   
<!-- <p> <b> OR use Only Pincode For Search<b> </p> -->

<label><b>Type your Pincode:</b></label>
 <input type="text" class="form-control" name="get_pincode" placeholder="enter pincode" maxlength="6" pattern="[0-9]{6}" > 

</div>

                        
                        </div>
                        
						<div class= "d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary m-2" name="search_by_id"  id="b1" >Search</button>
                    
                        <button  class="btn btn-primary  m-2"   id="b2" >Reset</button>
                        <a href="hospital_search_index.php" class="btn btn-primary  m-2" id="b3" >Search Treatment</a>
</div>
                    </form>
                    </div>
                    
                </div>

                    <?php
                    $con =new  mysqli("localhost","root","","project");

                    if(!$con){echo "database is not connected !!";}

                    if(isset($_POST['search_by_id']))
                    {
                        // echo "okay";
                    $state =$_POST['get_state'];
                    $district =$_POST['get_district'];
                    $pincode =$_POST['get_pincode'];

                            $query = "SELECT * FROM `hospital_details` WHERE (state = '$state' AND district ='$district') OR (pincode = '$pincode');";
                            $query_run = mysqli_query($con,$query);
                           
                    ?>



<hr><hr>
                                    <div class="table-responsive table-bordered bg-transparent text-dark">

                                        <table class="table table-striped table-dark">
                                            <thead class="thead-dark">
                                                <tr class="active">
                                                    <!-- <th scope="col" >ID </th> -->
                                                    <th scope="col" >Name </th>
                                                    <!-- <th scope="col" >Email </th> -->
                                                    <!-- <th scope="col" >Phone </th> -->
                                                    <th scope="col" >State </th>
                                                    <th scope="col" >District </th>
                                                    <th scope="col" >Pincode </th>
                                                    <th scope="col" >Action </th> 
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php  

                                                if(mysqli_num_rows($query_run)>0){

                                                    while($row = mysqli_fetch_array($query_run)){
														$id = $row['id'];
														//echo $id;

                                            ?>
                                                        <tr class="success">

                                                        
                                                           
                                                            <td><?php echo $row['name']; ?> </td>
                                                            <!-- <td><?php echo $row['email']; ?> </td> -->
                                                            <!-- <td><?php echo $row['phone']; ?> </td> -->
                                                            <td><?php echo $row['state']; ?> </td>
                                                            <td><?php echo $row['district']; ?> </td>
                                                            <td><?php echo $row['pincode']; ?> </td>
															<?php
															echo '
                                                            <td> <button class="btn btn-danger"><a href="view_user.php?viewid='.$id.'" class="text-light">view</a></button>
 </td>'; ?>
                                                        </tr>
                                                    <?php 
                                                    }

                                                    }
                                                    else{
                                                        // echo "no data found";
                                                        ?>
                                                        <tr>
                                                            <td colspan="7">No data found</td>
                                                        </tr>
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



            </div>
        </div>
    </div>
</div>
    


	<!-- what we do section -->
	<!-- <div class="what bg-li py-5" id="what">
		<div class="container py-xl-5 py-lg-3">
			<div class="row about-bottom-w3l text-center mt-4">
				<div class="col-lg-4 about-grid">
					<div class="about-grid-main">
						<img src="images/img1.png" alt="" class="img-fluid">
						<h4 class="my-4">Dolor Sit</h4>
						<p> Ut enim ad minim veniam, quis nostrud.Excepteur sint occaecat cupidatat non proident</p>
						<a href="about.php" class="button-w3ls btn mt-sm-5 mt-4">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 about-grid my-lg-0 my-5">
					<div class="about-grid-main">
						<img src="images/img2.png" alt="" class="img-fluid">
						<h4 class="my-4">Conse Tetur</h4>
						<p>Ut enim ad minim veniam, quis nostrud.Excepteur sint occaecat cupidatat non proident</p>
						<a href="about.php" class="button-w3ls btn mt-sm-5 mt-4">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 about-grid">
					<div class="about-grid-main">
						<img src="images/img3.png" alt="" class="img-fluid">
						<h4 class="my-4">Adip Cing</h4>
						<p>Ut enim ad minim veniam, quis nostrud.Excepteur sint occaecat cupidatat non proident</p>
						<a href="about.php" class="button-w3ls btn mt-sm-5 mt-4">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //what we do section -->

	

	<!-- services -->
	<section class="banner-bottom-w3layouts bg-li py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center font-weight-bold">Our Services</h3>
			<p class="sub-tittle text-center mt-3 mb-sm-5 mb-4" style="color:red;">.. We provide Best Health Services to our Customers ..</p>
			<div class="row pt-lg-4">
				<div class="col-lg-4 about-in text-center">
					<div class="card">
						<div class="card-body">
							<div class="bg-clr-w3l">
								<span class="fa fa-medkit"></span>
							</div>
							<h5 class="card-title mt-4 mb-3">Free Checkups</h5>
							<p class="card-text" style="font-weight: normal;">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 about-in text-center my-lg-0 my-3">
					<div class="card active">
						<div class="card-body">
							<div class="bg-clr-w3l">
								<span class="fa fa-ambulance" style="font-size:48px;color:blue"></span>
							</div>
							<h5 class="card-title mt-4 mb-3">24/7 Ambulance</h5>
							<p class="card-text" style="font-weight: normal;">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 about-in text-center">
					<div class="card">
						<div class="card-body">
							<div class="bg-clr-w3l">
								<span class="fa fa-user-md"></span>
								
							</div>
							<h5 class="card-title mt-4 mb-3">Expert Doctors</h5>
							<p class="card-text" style="font-weight: normal;">Lorem ipsum dolor sit amet consectetur elit,Adipisicing elit tempor.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //services -->

	<!-- stats -->
	<section class="bottom-count py-5" id="stats">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-5 left-img-w3ls">
					<img src="images/b2.png" alt="" class="img-fluid" />
				</div>
				<div class="col-lg-7 right-img-w3ls pl-lg-4 mt-lg-2 mt-4">
					<div class="bott-w3ls mr-xl-5">
						<h3 class="title-w3 text-bl mb-3 font-weight-bold">High-lightes</h3>
						<p class="title-sub-2 mb-3" style="font-weight:normal;">Some of the achivement which we achive by our hard work. <br>......</p>
					
					</div>
					<div class="row mt-5">
						<div class="col-sm-4 count-w3ls">
						<span class="fa fa-smile-o" style="font-size:60px ; color:lightgreen; margin-left:10px;"></span>

							<h4>1000+</h4>
							<p>Happy Customers</p>
						</div>
						<div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
						
						<span class="fa fa-ambulance" style="font-size:60px ; color:red; margin-left:10px;"></span>


							<h4>480+</h4>
							<p>Ambulance</p>
						</div>
						<div class="col-sm-4 count-w3ls mt-sm-0 mt-3">

						<span class="fa fa-trophy" style="font-size:60px ; color:yellow; margin-left:10px;"></span>

							<h4>600+</h4>
							<p>Award Winning</p>
						</div>
					</div>
					<!-- <div class="row mt-sm-5 mt-4">
						<div class="col-sm-4 count-w3ls">
							<h4>480+</h4>
							<p>Consultant</p>
						</div>
						<div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
							<h4>600+</h4>
							<p>Award Winning</p>
						</div>
						<div class="col-sm-4 count-w3ls mt-sm-0 mt-3">
							<h4>1000+</h4>
							<p>Project completed</p>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- //stats -->

	<!-- partners -->
	<section class="partners py-5" id="partners">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="tittle text-center font-weight-bold">Our Trusted Partners</h3>
			<p class="sub-tittle text-center mt-3 mb-sm-5 mb-4" style="font-weight:normal;">Some Of Our Trusted Partner Who Working With Us For A Very Long Time </p>
			<div class="row grid-part text-center pt-4">
				<div class="col-md-2 col-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa fa-angellist"></span></a>
						<h4>Angellist</h4>
					</div>
				</div>
				<div class="col-md-2 col-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa fa-opencart"></span></a>
						<h4>opencart</h4>
					</div>
				</div>
				<div class="col-md-2 col-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa fa-lastfm"></span></a>
						<h4>lastfm</h4>
					</div>
				</div>
				<div class="col-md-2 col-4 mt-md-0 mt-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa fa-openid"></span></a>
						<h4>openid</h4>
					</div>
				</div>
				<div class="col-md-2 col-4 mt-md-0 mt-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa fa-skyatlas"></span></a>
						<h4>skyatlas</h4>
					</div>
				</div>
				<div class="col-md-2 col-4 mt-md-0 mt-4">
					<div class="parts-w3ls">
						<a href="#"><span class="fa fa-ravelry"></span></a>
						<h4>ravelry</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //partners -->

	<!--footer  -->
	<?php include 'includes/footer-home.php'; ?>
	<style>
		#b1{
    background-color: black;
	color:white;
	font-weight:bold;
}

#b1:hover{
    background-color: white;
	color:black;
}
#b2{
    background-color: red;
	color:white;
	font-weight:bold;
}

#b2:hover{
    background-color: white;
	color:red;
}

#b3{
    background-color:blue;
	color:white;
	font-weight:bold;
}

#b3:hover{
    background-color: white;
	color:blue;
}
#banner{
	height:100vh;
	/* margin-top:5%; */
	background-image:url('/images/bg.jpg') no-repeat;
	/* background-color:red; */
	outline: none;
	
}
	</style>