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
            
            $query=mysqli_query($con,"SELECT * FROM about");
			while($row=mysqli_fetch_assoc($query))
			{
				$title=$row['stitle'];
				$image='admin/img/about/'.$row['aimage'];
				$school="St Thomas English Medium School";
				$detail=$row['sdet'];
				$history=$row['history'];
			}
		?>
		 <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2 class="text-uppercase font-weight-bold">Welcome to <span class="orange"> <?php echo $school;?></span></h2>
                        <div class="divider float-left"></div>
                        <div class="clearfix"></div>
                        <?php echo $detail;?>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="<?php echo $image;?>" class="rounded img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
		<section class="team" style="background: #e2eff17a;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 mx-auto text-center">
                        <h2 class="mb-3 text-uppercase font-weight-bold">Our <span class="orange">History</span></h2>
                        <div class="divider"></div>
                       
                    </div>
                </div>
                <div class="row" style="margin:5%; text-align: justify;">
                    <?php echo $history;?>
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
