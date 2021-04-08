<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.designstream.co.in/pro-education/index-1.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2021 06:06:30 GMT -->
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
        <link rel="stylesheet" href="assets/plugins/thimfy-icon/themify-icons.css" />
        <link rel="stylesheet" href="assets/css/jquery-ui.css" />
        <link rel="stylesheet" href="assets/plugins/icofont/css/icofont.css">

        <!--  Fontawesome Css -->
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

        <!--  Master Slider Css -->
        <link rel="stylesheet" href="assets/plugins/masterslider/style/masterslider.css" />

        <!--  Master Slider Skin -->
        <link rel="stylesheet" href="assets/plugins/masterslider/skins/default/style.css" />

        <!--  Owl Carousel -->
        <link rel="stylesheet" href="assets/plugins/owl-carousel/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/plugins/owl-carousel/css/owl.theme.min.css">
        <link rel="stylesheet" href="assets/plugins/owl-carousel/css/owl.transitions.css">

        <!--  Custom Css -->
        <link rel="stylesheet" href="assets/css/layout.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

    </head>
    <body id="page-top">
        <!-- Nav Bar -->
       <?php include'header.php';?>

        <!-- Master Slider -->
       <div class="overflo-h">
		<div class="master-slider ms-skin-default" id="masterslider"> 
			<div class="ms-slide slide-1" data-delay="9"> <img src="images/main-slider/bnr2.jpg" class="img-responsive" alt=""/> 
				<h3 class="ms-layer text-center full-width text-title margin-top"
					style="top:220px;left:0px;"
					data-type="text"
					data-delay="1000"
					data-ease="easeOutExpo"
					data-duration="1230"
					data-effect="bottom(250)"><span class="orange"><!-- Education --></span> <span class="text-white"> <!-- Organization --></span> </h3>
				<h3 class="ms-layer text-center text-subtitle full-width margin-top"
					style="top:330px;left:0; right:0;"
					data-type="text"
					data-delay="1500"
					data-ease="easeOutExpo"
					data-duration="1230"
					data-effect="bottom(250)"><!-- Lorem Ipsum is simply dummy text of the printing and typesetting. Contrary to popular belief.<br /> Lorem It has roots in a piece of popular belief. --></h3>
			  
				<p class="ms-layer text-center full-width margin-top"
				   style="top:410px;right:0;"
				   data-type="text"
				   data-delay="2500"
				   data-ease="easeOutExpo"
				   data-duration="1230"
				   data-effect="bottom(250)"><!-- <a href="#" class="btn btn-radius2 rounded-0  btn-xs text-uppercase">Register Now </a> --></p> 
				   
				  
		  </div>
		  	<div class="ms-slide slide-1" data-delay="9"> <img src="images/main-slider/slide7.jpg" class="img-responsive" alt=""/> 
				<h3 class="ms-layer  full-width text-title margin-top"
					style="top:220px;left:0px;"
					data-type="text"
					data-delay="1000"
					data-ease="easeOutExpo"
					data-duration="1230"
					data-effect="bottom(250)"> <span class="orange"><!-- Learning Today --></span> <span class="text-white"><!-- Perfect --> </span> </h3>
				<h3 class="ms-layer text-center text-subtitle full-width margin-top"
					style="top:330px;left:0; right:0;"
					data-type="text"
					data-delay="1500"
					data-ease="easeOutExpo"
					data-duration="1230"
					data-effect="bottom(250)"><!-- Lorem Ipsum is simply dummy text of the printing and typesetting. Contrary to popular belief.<br /> Lorem It has roots in a piece of popular belief. --></h3>
				
				   <p class="ms-layer learn-more full-width margin-top"
				   style="top:410px;"
				   data-type="text"
				   data-delay="2500"
				   data-ease="easeOutExpo"
				   data-duration="1230"
			</div>
			
		</div>
	</div>
	

<?php $query=mysqli_query($con,"SELECT * FROM about");
while($row=mysqli_fetch_array($query))
{
	$title=$row['stitle'];
	$sortdesc=$row['sdet'];
}
?>
<div class="content-block  ">
    <div class="section-full content-inner-2 contact-style-3 ">
            <div class="container media box-shadow1 " style="margin: 5%;">
                <div class="row m-lr0 contact-form-box">
                    <div class="col-lg-8 col-md-7 p-lr0 leftarea">
                        <div class="contact-form bg-white">
                            <div class="section-head text-left">
                                <h1 class="title">Welcome to  <?php echo $title; ?></h1>
                                <hr style="background-color: #2ec4b6; width: 20%; margin-left: 0;height: 3px;">
                                <div class="dlab-separator bg-primary"></div>
                            </div>
                            <div class="dzFormMsg"></div>
                            <p style="width: 90% ; font-size: 16px; margin-top: 50px;"><?php echo $sortdesc;?></p>   
                       <div class=" ">
                        <a href="about.php" class="btn btn-outline-info">Read More</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 p-lr0 contact-info wow fadeInRight leftarea" data-wow-duration="2s" data-wow-delay="0.2s" style="background-image:url(images/background/bg2.html); background-size: cover; background-color: #4A4C76;">
                        <div class="contact-info-inner text-white">
                        <div class="section-head text-center">
                                <h2 style="color: white;">UpComming Event</h2>
                                <hr style="background-color: #2ec4b6; width: 40%;height: 2px;">
                                <div class="dlab-separator bg-primary"></div>
                            </div>
                            
                            <marquee direction = "up" scrollamount="3"> 
                                       <?php 
                                $query=mysqli_query($con,"SELECT * FROM news");
                                while($row=mysqli_fetch_array($query))
                                {
                            ?>
							<p class="m-b30"><?php echo $row['new'];?></p>
							
                            <?php 
                                } 
                            ?>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>


	
		
	   		

        <!-- Courses -->
       


        <br>
        <br>
        <br>
        <br>


            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="row service-area-one">
                        <div class="col-lg-4 m-b30 hidden-sm">
                            <div class="rdx-thu"><img  src="images/why-choose-us-page.png" alt=""></div>
                        </div>
                        <div class="col-lg-8">
                            <div class="section-head">
                                <h2 class="title">Why Choose Us</h2>
                            </div>
							
                              <div class="row wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"> 
								<?php $query=mysqli_query($con,"SELECT * FROM ychoose");
							while($row=mysqli_fetch_array($query))
								{?>
									<div class="col-md-6 col-sm-6 m-b30">
                                    <div class="icon-bx-wraper left">
                                        <div class="icon-bx-xs bg-secondry radius"> <a href="#" class="icon-cell"><i class="fa  fa-trophy"></i></a> </div>
                                        <div class="icon-content">
                                            <h4 class="rdx-tilte"><?php echo $row['title'];?></h4>
                                            <p><?php echo $row['des'];?></p>
                                        </div>
                                    </div>
                                </div>
								<?php } ?>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<br>

 <div class="section-full fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" style="padding-bottom:50px">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">Special Video</h2>
                    </div>
                
                        <div class="row">
                        <?php $query=mysqli_query($con,"SELECT * FROM special ORDER BY ID DESC LIMIT 0,6");
					    	while($row=mysqli_fetch_array($query))
							{
						?>    
                        <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                    
                                <div class="card">
                                  <iframe width="300" height="250" src="<?php echo $row['url'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: auto;"></iframe>
                                  <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $row['occasion'];?></h5>
                                  </div>
                                </div>
                                
                            </div>
                        <?php } ?>    
                        </div>
                    
                
                </div>
        </div>

        <!-- Testimonials -->
        <section class="image-bg">
            <div class="background-image-maker"></div>
            <div class="holder-image">
                <img src="assets/images/counter-bg.jpg" alt="" class="img-fluid">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 mx-auto text-center">
                        <h2 class="mb-3 text-uppercase font-weight-bold" style="color: white;">OUR GALLERY <span class="orange"><!-- Reviews --></span></h2>
                        <div class="divider"></div>
                        <!-- <p class="pt-3 pb-3 text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, nventore veritatis.</p> -->
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div id="testimonial-slider" class="owl-carousel">
							<?php $query=mysqli_query($con,"SELECT * FROM gallerycat");
						while($row=mysqli_fetch_array($query))
							{?>
						   <div class="testimonial">
                        
                            <div class="card">
                                  <a href="galleryview.php?id=<?php echo $row['category']; ?>"><img class="" src="admin/img/gallery/<?php echo $row['img'];?>"></a>
                                  <div class="card-body">
                                    <h5 class="card-title text-center"><a href="galleryview.php?id=<?php echo $row['category']; ?>"><?php echo $row['category'];?></a></h5>
                                  </div>                                
                            </div> 

                            </div>
							<?php } ?>
                            
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

        <!-- Master Slider -->
        <script type="text/javascript" src="assets/plugins/masterslider/jquery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/masterslider/masterslider.min.js"></script>
        <script type="text/javascript" src="assets/js/master-slider-custom.js"></script>

        <!-- Testimonials Slider Js -->
        <script type="text/javascript" src="assets/plugins/owl-carousel/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/js/testimonials.js"></script>

        <!-- Counter Js -->	
        <script type="text/javascript" src="assets/plugins/counter/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>   
        <script type="text/javascript" src="assets/js/counter-custom.js"></script>

        <!-- Bg maker Custom Js -->
        <script type="text/javascript" src="assets/js/bg-maker-custom.js"></script>


    </body>

<!-- Mirrored from html.designstream.co.in/pro-education/index-1.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2021 06:07:35 GMT -->
</html>