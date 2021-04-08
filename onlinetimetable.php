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
                        <h2 class="font-weight-bold text-uppercase display-4 text-white">Online Timetable</h2>
                        <ol class="list-inline text-center">
                            <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                           
                            <li class="list-inline-item">Student Corner /</li>
                            <li class="list-inline-item active">Online Timetable</li>
                        </ol>
                    </div>
                </div>
            </div>  
        </div>	   

     <section class="course">
     <div class="container">
			<div class="mt-5 text-center sort-title">
          		<h4>Online Timetable</h4>
     		</div>
     		 <?php 
							        $query=mysqli_query($con,"SELECT * FROM onlinetime WHERE class='".$_GET['class']."'");
							        while($row=mysqli_fetch_assoc($query))
							        {
							            $class=$_GET['class'];
							            $detail=$row['timetable'];
							        }
							    ?>
     		<div class="p-5">
     		 <div class="card" >
     		 
     		   <div class="text-center card-header">
  			 TimeTable of class <?php echo $class;?> 
  		  </div>
  		  
     	          <div class="card-body">
     	        <div id="collapse16" class="acod-body collapse show table-responsive" data-parent="#accordion006">
										<div class="acod-content p-3">
											<?php echo $detail;?>
										</div>
									</div>
		    </div>
		   
     		</div>
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
    
