<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.designstream.co.in/pro-education/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2021 06:09:34 GMT -->
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

        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">

        <!-- Animation Css -->
        <link rel="stylesheet" href="assets/css/animate.css">
		
		 <link rel="stylesheet" href="assets/plugins/thimfy-icon/themify-icons.css" />
        <link rel="stylesheet" href="assets/css/jquery-ui.css" />
        <link rel="stylesheet" href="assets/plugins/icofont/css/icofont.css">

        <!-- Fontawesome Css -->
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/layout.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
		
        <link rel="stylesheet" href="assets/css/new.css">

    </head>
    <body id="page-top">
        <!-- Nav Bar -->
        <?php include'header.php';
			if(isset($_POST['submit']))
{
    echo 	$name=$_POST['fname'];
    	$lname=$_POST['lname'];
		$email=$_POST['email'];
		$mes=$_POST['phone'];
		$messae=$_POST['message'];
		$date=date("y-m-d");
		$to='hitanshiitandel@gmail.com';
		$subject='contact message';
	    $message='Name - '.$name." ".$lname."\r\n".'Email - '.$email."\r\n".'Phone - '.$mes."\r\n".'Message - '.$messae;
		$header='From: '.$name;
		if(mail($to,$subject,$message,$header)){
		$result =" Thanks ".$_POST['fname']." for contacting us";
       echo "<script>alert('.$result.')</script>";
		}
		else
		{
		    echo "<script>alert('something wrong')</script>";
		}
}
?>


        <!-- Inner Banner -->
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-12 mx-auto text-center">
                        <h2 class="font-weight-bold text-uppercase display-4 text-white">Contact Us</h2>
                        <ol class="list-inline text-center">
                            <li class="list-inline-item"><a href="#">Home </a> &nbsp; / </li>
                            <li class="list-inline-item"><a href="#">Pages</a>  &nbsp; / </li>
                            <li class="list-inline-item active">Contact us</li>
                        </ol>
                    </div>
                </div>
            </div>  
        </div>	

        <!-- Contact Section -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 ">
                        <div class="">
<h4>Contact us</h4>
<hr  style="background-color: #2ec4b6; height: 3px; width: 40%;margin-left: 0px; ">
 <h2>Do You Have Any Questions?</h2>
</div><br>
<ul class="contact-question">
							<li>
								<i class="fa fa-map-marker"></i>
								<h4 class="title">Address</h4>
								<p><a href="https://maps.google.com/maps?q=Mar Thoma Mission Compound, Daman Road, Chala, Vapi - 396191 ">Mar Thoma Mission Compound, Daman Road, Chala, Vapi - 396191.</a></p>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<h4 class="title">Email</h4>
								<p><a href="mailto:stemsvapi@gmail.com">stemsvapi@gmail.com</a></p>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<h4 class="title">Phone</h4>
								<p><a href="tel:+91 9074829232">+91 9074829232</a>/<br><a href="tel:+91 7623078911</p">+91 7623078911</a></p>
							</li>
							<li>
								<i class="fa fa-globe"></i>
								<h4 class="title">Website</h4>
								<p><a href="http://stemsvapi.in">http://stemsvapi.in</a></p>
							</li>
						</ul>
                    </div>
					<div class="col-sm-8">
					<div class="">
     		 <div class="card" >
				   <div class="text-center card-header">
				If you have any further questions, please don’t hesitate to contact us.
			  </div>
				<div id="collapse16" class="acod-body collapse show" data-parent="#accordion006">
					<div class="acod-content p-3">
						<form method="post">
                            <div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="fname" type="text" required="" class="form-control" placeholder="First Name">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="lname" type="text" required="" class="form-control" placeholder="Last Name">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group">
											<input name="phone" type="tel" pattern="[6789][0-9]{9}" required="" class="form-control" placeholder="Phone">
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<div class="input-group"> 
											<input name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" type="email" class="form-control" required="" placeholder="Your Email Id">
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<div class="input-group">
											<textarea name="message" rows="4" class="form-control" required="" placeholder="Tell us about your  idea"></textarea>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<button type="submit" name="submit" class="default-btn" style="padding: 15px 35px 15px 35px; background-color: #2ec4b6; border:none; color: white; cursor: pointer; border-radius: 4px;"  >
<b>Get A Free Quote!</b>
<span></span>
</button>
								</div>
							</div>
                        </form>
					</div>
				</div>
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

    </body>

<!-- Mirrored from html.designstream.co.in/pro-education/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Feb 2021 06:09:34 GMT -->
</html>
