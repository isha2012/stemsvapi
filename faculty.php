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
                        <h2 class="font-weight-bold text-uppercase display-4 text-white">Faculty</h2>
                        <ol class="list-inline text-center">
                            <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                           
                            <li class="list-inline-item active">Faculty </li>
                        </ol>
                    </div>
                </div>
            </div>  
        </div>	   

<section class="course">
     <div class="container" style="margin-bottom: 5%;">
               <div class="mb-10 mt-5">
                      <div id="accordion">
                         <!-- card1-->
			  <div class="card">
			  <a data-toggle="collapse" href="#collapseOne1" class="collapsed">
			    <div class="card-header" id="headingTwo">
			      <h6 class="text-center card-header">  1. Teaching Staff 
			    </div></a>
			    <div id="collapseOne1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
			      <div class="card-body">
				     <table class="table table-bordered">
                                                <thead class="bg-light">
                                                  <tr>
                                                    <th>Sr. No.</th>
		                                    <th>Name</th>
		                                    <th>Date of Birth</th>
		                                    <th>Designation</th>
                                                  </tr>
                                                </thead>
                                            <?php
                                                $counter='0';
                                                $query=mysqli_query($con,"SELECT * FROM tstaff WHERE status='1'");
                                                while($row=mysqli_fetch_row($query))
                                                    {
                                                        $counter++;
                                                ?>
                                            <tbody>
                                                <tr>
                                                <td><?php echo $counter; ?></td>
                                                <td><?php echo $row['1']; ?></td>
                                                <td><?php echo $row['2']; ?></td>
                                                <td><?php echo $row['3']; ?></td>
                                            </tr>
                                            </tbody>
                                         <?php  } ?>
                                   </table>
			      </div>
			    </div>
			  </div>
			  <!-- end card2 -->
			  <!-- card1-->
			  <div class="card">
			     <a data-toggle="collapse" href="#collapseTwo1" class="collapsed">
				<div class="card-header" id="headingThree">
			      <h5 class="mb-0">
				 <h6 class="text-center card-header"> 2. Non-Teaching Staff </h6>
			      </h5>
			    </div></a>
			    <div id="collapseTwo1" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
			      <div class="card-body">
				    <table class="table table-bordered">
                                                <thead class="card-header">
		                                    <th>Sr. No.</th>
		                                    <th>Name</th>
		                                    <th>Date of Birth</th>
		                                    <th>Designation</th>
		                                </thead>
                                               <?php      
		                                        $counter='0';
		                                        $query=mysqli_query($con,"SELECT * FROM ntstaff WHERE status='1'");
		                                        while($row=mysqli_fetch_row($query))
		                                            {
		                                                $counter++;
                                                ?>
                                            <tbody>
                                                <tr>
                                                <td><?php echo $counter; ?></td>
                                                <td><?php echo $row['1']; ?></td>
                                                <td><?php echo $row['2']; ?></td>
                                                <td><?php echo $row['3']; ?></td>
                                            </tr>
                                            </tbody>
                                        <?php  } ?>
                                </table>
			      </div>
			    </div>
			  </div>
			    <!-- end card2 -->
			</div>
			<div class="dlab-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
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
