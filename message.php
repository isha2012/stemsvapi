<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.designstream.co.in/pro-education/about-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2021 06:08:09 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>St Thomas</title>

         <!-- Favicon -->
       	<link rel="icon" type="image/png" href="favicon-16x16.png">
	    
		<!-- Google Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />

        <!--  Bootstrap Css -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">

        <!--  Animation Css -->
        <link rel="stylesheet" href="../../cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">

        <!-- Plugin CSS -->
        <link href="assets/plugins/thimfy-icon/themify-icons.css" rel="stylesheet">
       	<link rel="stylesheet" href="assets/css/jquery-ui.css" />

        <!--  Fontawesome Css -->
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

        <!--  Custom Css -->
        <link rel="stylesheet" href="assets/css/layout.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
		<link rel="stylesheet" href="assets/css/new.css">

    </head>
    <body id="page-top" style="background-color: #F8F8F8;">
        <!-- Nav Bar -->
       <?php include'header.php';?>
 
        <!-- Inner Banner -->
        <div class="inner-page-banner-area" style="">
            <div class="container" style="">
                <div class="row">
                    <div class="col-md-12 col-md-12 mx-auto text-center">
                        <h2 class="font-weight-bold text-uppercase display-4 text-white">About Us</h2>
                        <ol class="list-inline text-center">
<!--                             <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
 -->                            <li class="list-inline-item"><a href="#">home</a>  &nbsp; / </li>
                            <li class="list-inline-item active">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>  
        </div>	
        <?php	 
            
            $id=$_GET['id'];
			$query=mysqli_query($con,"SELECT * FROM msg WHERE ID = '$id'");
			while($row=mysqli_fetch_assoc($query))
			{
				$name=$row['mname'];
				$post=$row['post'];
				$quote=$row['quote'];
				$msg=$row['msg'];
				$image=$row['profile'];
				$school="St Thomas English Medium School";
			}
		?>
		<section>
        <div class="inner-content " >
           	<div class="container ">
           	   <div class="row">
					<div class="col-lg-4 col-md-5 m-b30">
						<div class="teachers-profile">
							<div class="img">
								
								<img src="admin/img/messanger/<?php echo $image;?>">
							</div>
							<div class="teachers-info">
								<h4 class="name"><?php echo $name;?></h4>
								<span class="position"><?php echo $post;?></span>
								</div>
							<div class="teachers-contact">
								<ul>
									<li class="title">Contact Info</li>
									<li><span>Address:</span><a href="https://maps.google.com/maps?q=Mar Thoma Mission Compound, Daman Road, Chala, Vapi - 396191">Mar Thoma Mission Compound, Daman Road, Chala, Vapi - 396191.</a></li>
									<li><span>Email:</span><a href="mailto:stemsvapi@gmail.com">stemsvapi@gmail.com</a></li>
									<li><span>Phone:</span><a href="tel:+91 9074829232">+91 9074829232 </a><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="tel:+91 7623078911"> +91 7623078911</a></li>
								</ul>
								</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-7">
						<div class="teachers-details">
							<p class="m-b10" style="text-align: justify;"><?php echo $quote?></p>
							<h2>About Us</h2>
							<p class="m-b30"><?php echo $msg;?></p>
						</div>
					</div>
				</div>
            </div>  
        </div>
		</section>
  <!-- Footer Section -->
      <?php include'footer.php';?>


        <!-- Jquery Js -->
        <script type="text/javascript" src="assets/plugins/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap/js/popper.min.js"></script>

        <!-- Bootstrap Js -->
        <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Header Scroll -->
        <script type="text/javascript" src="assets/js/custom.js"></script>

        <!-- counter js -->
        <script type="text/javascript" src="assets/plugins/counter/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>   
        <script type="text/javascript" src="assets/js/counter-custom.js"></script>

        <!-- Bg maker Custom Js -->
        <script type="text/javascript" src="assets/js/bg-maker-custom.js"></script>
    </body>

<!-- Mirrored from html.designstream.co.in/pro-education/about-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2021 06:08:22 GMT -->
</html>
