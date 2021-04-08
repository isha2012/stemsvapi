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

    </head>
    
<body>

     <?php include 'header.php'?>
 <!-- Inner Banner -->
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-12 mx-auto text-center">
                        <h2 class="font-weight-bold text-uppercase display-4 text-white">Videos</h2>
                        <ol class="list-inline text-center">
                            <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                           
                            <li class="list-inline-item">Student Resources /</li>
                            <li class="list-inline-item active">Videos</li>
                        </ol>
                    </div>
                </div>
            </div>  
        </div>	   

<section class="course">
        
        <div class="container">
                
				 <div class="mt-5 text-center sort-title">
          		<h4><?php echo $_GET['class']." ".$_GET['subject'];?></h4>
     		</div>
		 <div class="row">
		        <?php
					$class=$_GET['class'];
					$subject=$_GET['subject'];
					$query=mysqli_query($con,"SELECT * FROM video WHERE class='$class' AND subject = '$subject'");
					while($row=mysqli_fetch_assoc($query))
					{
?>	
			  <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                    
                                <div class="card">
                                  <iframe width="300" height="250" src="<?php echo $row['vurl'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: auto;"></iframe>
                                  <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $row['subject']."<br>".$row['title'];?></h5>
                                  </div>
                                </div>
                                
                            </div>
			  <?php } ?>
		 </div>
        </div>
</section>      
       
      <!-- Footer Section -->
      <?php include 'footer.php';?>

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

</html>
