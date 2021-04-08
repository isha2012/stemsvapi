<?php require "config.php";
?> 

<div class="top-header-area " style="background-color: #191F23; font-weight:200;">
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 top-header-text">
                <p style=""><i class="fa fa-phone" aria-hidden="true"></i> <a style="color: white;" href="tel:+91 9074829232"> +91 9074829232</a>/<a style="color: white;" href="tel:+91 7623078911">+91 7623078911</a></p>
            </div>

            <div class="col-lg-2">
                <div class="top-header-text">
                    <p style=""><i class="fa fa-phone" aria-hidden="true"></i><a style="color: white;" href="tel:+0260-2464327"> +0260-2464327</a>
                    </p>
                </div>
            </div>

            <!-- <div class="col-lg-1" >
            </div> -->

           <div class="col-lg-3 top-header-text">
                    <p ><i class="fa fa-envelope" aria-hidden="true"></i>   <a style="color: white;" href="mailto:stemsvapi@gmail.com"> stemsvapi@gmail.com</a></p> 
            </div>
<div class="col-lg-3 top-header-text">
                    <p ><i class="fa fa-phone" aria-hidden="true"></i><a style="color: white;" href="tel:18001088010">Tol free:- 18001088010</a></p> 
            </div>


</div>





</div>
</div>



<nav class="navbar fixed-top navbar-expand-lg navbar-light" id="header-fix">
            <div class="container">
                <!--  <a style="color:#fff;" class="navbar-brand" href="index-1.php">Education</a> -->
<a href="index.php"><img src="images/logo.png" style="height: 60px;"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
                </button>
				
                <div class="collapse navbar-collapse justify-content-center" id="navbarColor03">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="index.php">Home </a>
                            <div class="">
<!--                                 <a class="dropdown-item" href="index-1.php">Home Slider</a>
                                <a class="dropdown-item" href="index-2.php">Home Search</a> -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about.php">About Us</a>
								 <?php 
									$query=mysqli_query($con,"SELECT * FROM msg");
									while($row=mysqli_fetch_assoc($query))
									{
								?>
									<a class="dropdown-item" href="message.php?id=<?php echo $row['ID'];?>"><?php echo $row['post']; ?> Message</a>
								<?php
									}
								?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="admission.php">Admission</a>
                                <a class="dropdown-item" href="circular.php">Circulars</a>
                                <a class="dropdown-item" href="houseinc.php">House Incharge</a>
                                <a class="dropdown-item" href="uniform.php">Uniform</a>
                                <a class="dropdown-item" href="schooltiming.php">School Timings</a>
                                <a class="dropdown-item" href="housesystem.php">House Systems</a>
                                <a class="dropdown-item" href="career.php">Career</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student Corner</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="fee.php">Fees</a>
                                <a class="dropdown-item" href="fee_structure.php">Fees Structure</a>
                                <a class="dropdown-item" href="notes.php">Teacher Resource</a>
                                <a class="dropdown-item" href="student_resource.php">Student Resource</a>
                                <a class="dropdown-item" href="ontime.php">Online Timetable</a>
                                <a class="dropdown-item" href="offtime.php">Offline Timetable</a>
                                <a class="dropdown-item" href="library.php">Library</a>
                                <a class="dropdown-item" href="annualplan.php">Annual Plan</a>
                                <a class="dropdown-item" href="tc.php">Student Tc</a>
                                <a class="dropdown-item" href="booklist.php">Books</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="faculty.php">Faculty</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rules</a>
                            <div class="dropdown-menu">
                                 <?php 
									$query=mysqli_query($con,"SELECT * FROM rules");
									while($row=mysqli_fetch_assoc($query))
									{
								?>
								<a class="dropdown-item" href="rules.php?id=<?php echo $row['ID'];?>"><?php echo $row['rule'];?> </a>
								<?php 
                                                }
                                            ?>
                                
                                 </div>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="gallery-grid-4.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-1.php">Contact Us</a>
                        </li>
                         <li class="nav-item" style="margin-left: 5px; " >
                            <a type="button" class="addform btnhover13" href="https://docs.google.com/forms/d/e/1FAIpQLSfYoUEXxmT6od3M8qxQMfSCPCkIwfPU97EPPox6TPunq9_7jw/viewform" style="padding:7px 20px 7px 20px; background-color: #2ec4b6; border: none; color: white; border-radius: 4px;">Admission form</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<?php /*<nav class="navbar fixed-top navbar-expand-lg " style="background-color: black;"  >
            <div class=" container" >
<!--                 <a style="color:#fff;" class="navbar-brand" href="index-1.php">Education</a> -->
<a href="index.php"><img src="images/logo.png" style="height: 60px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
                </button>
				
                <div class="collapse navbar-collapse justify-content-center" id="navbarColor03">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="index.php"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home </a>
                            <div class="">
<!--                                 <a class="dropdown-item" href="index-1.php">Home Slider</a>
                                <a class="dropdown-item" href="index-2.php">Home Search</a> -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about.php">About Us</a>
								 <?php 
									$query=mysqli_query($con,"SELECT * FROM msg");
									while($row=mysqli_fetch_assoc($query))
									{
								?>
									<a class="dropdown-item" href="message.php?id=<?php echo $row['ID'];?>"><?php echo $row['post']; ?> Message</a>
								<?php
									}
								?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="admission.php">Admission</a>
                                <a class="dropdown-item" href="circular.php">Circulars</a>
                                <a class="dropdown-item" href="houseinc.php">House Incharge</a>
                                <a class="dropdown-item" href="uniform.php">Uniform</a>
                                <a class="dropdown-item" href="schooltiming.php">School Timings</a>
                                <a class="dropdown-item" href="housesystem.php">House Systems</a>
                                <a class="dropdown-item" href="career.php">Career</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student Corner</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="fee.php">Fees</a>
                                <a class="dropdown-item" href="fee_structure.php">Fees Structure</a>
                                <a class="dropdown-item" href="notes.php">Teacher Resource</a>
                                <a class="dropdown-item" href="Student_resource.php">Student Resource</a>
                                <a class="dropdown-item" href="ontime.php">Online Timetable</a>
                                <a class="dropdown-item" href="offtime.php">Offline Timetable</a>
                                <a class="dropdown-item" href="library.php">Library</a>
                                <a class="dropdown-item" href="annualplan.php">Annual Plan</a>
                                <a class="dropdown-item" href="tc.php">Student Tc</a>
                                <a class="dropdown-item" href="booklist.php">Books</a>

                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="faculty.php">Faculty</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rules</a>
                            <div class="dropdown-menu">
                                 <?php 
									$query=mysqli_query($con,"SELECT * FROM rules");
									while($row=mysqli_fetch_assoc($query))
									{
								?>
								<a class="dropdown-item" href="rules.php?id=<?php echo $row['ID'];?>"><?php echo $row['rule'];?> </a>
								<?php 
                                                }
                                            ?>
                                
                                 </div>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="gallery-grid-4.php">Gallery</a>
                        </li>
                         

                     <!--    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> News  </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="news.php">News 3 Column</a>
                                <a class="dropdown-item" href="news-left.php">News Left Sidebar</a>
                                <a class="dropdown-item" href="news-right.php">News Right Sidebar</a>
                                <a class="dropdown-item" href="news-single.php">News Single</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pages  </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="register.php">Register </a>
                                <a class="dropdown-item" href="login.php">Login</a>
                                <a class="dropdown-item" href="gallery.php">Gallery 3 Column</a>
                                <a class="dropdown-item" href="gallery-grid.php">Gallery Grid</a>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="contact-1.php">Contact Us</a>
                        </li>
                         <li class="nav-item" style="margin-left: 5px; " >
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfYoUEXxmT6od3M8qxQMfSCPCkIwfPU97EPPox6TPunq9_7jw/viewform" style="padding:7px 20px 7px 20px; background-color: #2ec4b6; border: none; color: white; border-radius: 4px;">Admission form</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
*/?>
