<?php 
include("admin/admin_inc/db.php");

$s="SELECT * FROM pages WHERE pid=3";
$rs=$con->query($s);
$row=$rs->fetch_assoc();
?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Syamaprasad Institute of Technology & Management</title>
	<link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Subject Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="inner-banner">
        <!-- header -->
        <?php include("inc/top.php"); ?>
        <!-- //header -->
		</div>
		<section class="header">
			<nav>
		<a href="index.php"><img src="images/collegelogo.jpeg"></a>
            <div class="nav-links" id="navlinks">
	</nav>
		<div class="text-box">
    <h1>One of Kolkata's biggest College</h1>
    <p>The discipline that applies scientific principles to design, develop and operate structures, machines,<br> apparatus,and other things like roads, bridges, vehicles, buildings, etc.</p>
    <a href="blog.php"class ="hero-btn">Visit Us To Know More</a>
	</section>

	
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $row['page'] ?></li>
    </ol>
	 <!-- //banner-text -->
	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center"><?php echo $row['page'] ?></h3>
			<div class="inner_sec_info_wthree_agile mt-md-5 pt-3">
				<div class="row help_full">
					<div class="col-lg-6 banner_bottom_grid help">
						<img src="images/why-us-img.png" alt=" " class="img-fluid">
					</div>
					<div class="col-lg-6 banner_bottom_left1">
						<p><?php echo $row['content']; ?></p>
						</div>
				</div>
			</div>
		</div>
	</section>

	 <!-- choose -->
	<section class="choose py-5">
		<div class="container py-md-4 mt-md-3"> 
			<div class="row inner_w3l_agile_grids-1 ">
				<div class="col-lg-6 w3layouts_choose_left_grid1">
					<div class="choose_top">
						<h4 class="mb-3 mt-3 text-white">Feel Free to Contact Our Agents Directly</h4>
						<p class="text-white">SITM (Syamaprasad Institute of Technology & Management) came into being in 2002 to fulfill the aspiration of extension of Technological and Management Education in our State of West Bengal.
Computer Education being the primary tool of knowledge in the 21st Century, we choose to introduce BCA first..</p>
						<a href="#" class="btn btn-primary mt-3" data-toggle="modal" data-target="#myModal">Read More</a>
					</div>
				</div>
				<div class="col-lg-6 w3layouts_choose_left_grid2">
					<div class="row">
						<div class="col-md-6 w3l_choose_bottom1 mt-3 pt-md-4">
							<div class="choose_bottom_top">
                                <i class="fas fa-globe mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">Education</h5>
                                <p class="card-text">develop the human capital with required knowledge, skills and competence.
                                </p>
                            </div>
						</div>
						<div class="col-md-6 w3l_choose_bottom2">
							<div class="choose_bottom_top">
                                <i class="fas fa-book mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">library</h5>
                                <p class="card-text">The readers can peacefully read books there and also borrow them from the librarian Itself.
                                </p>
                            </div>
						</div>
						<div class="col-md-6 w3l_choose_bottom3 mt-3 pt-md-4">
							<div class="choose_bottom_top">
							<i class="fa fa-futbol-o"></i> 
                                <h5 class="card-title text-uppercase my-3">Playground</h5>
                                <p class="card-text">Our playground is the biggest playground.
                                </p>
                            </div>
						</div>
						<div class="col-md-6 w3l_choose_bottom4">
							<div class="choose_bottom_top">
                            <i class="fa fa-cutlery"></i>
                                <h5 class="card-title text-uppercase my-3">Tasty & Healty Food</h5>
                                <p class="card-text">Our canteen food is cheap as well as best.
                                </p>
                            </div>
						</div>
					</div>
				</div>
			</div>
	</div>   
</section>
<!-- //choose -->
	<!-- team -->
	
		<section class="team py-md-5 py-4">
        <div class="container py-lg-5">
            <h2 class="heading-agileinfo text-center  mb-4">Our <span> Staff</span></h2>
			<div class="row inner-sec-w3layouts-agileinfo pt-md-5">
			<div class="col-md-3 col-sm-6 team-grids aos-init" data-aos="flip-left">
					<img src="images/goswami.png" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Manikaustabh Goswami</h4>
							<p><span>M.E.(COMPUTER SC.)</p></span>
							<h6>Designation: Executive Director Department: SITM</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest-p"></i>
							</a>

						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids aos-init" data-aos="flip-right">
					<img src="images/ganguly.jpeg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Birabrata Ganguly</h4>
							<p><span>M.SC. (COMPUTER SC.) , MCA</p></span>
							<h6>Designation: Assistant Professor (HOD) Department: SITM</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest-p"></i>
							</a>

						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6 team-grids aos-init" data-aos="flip-left">
					<img src="images/roy.jpeg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Suchandra Roy</h4>
							<p><span>MCA</p></span>
							<h6>Designation: Assistant Professor Department: SITM</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest-p"></i>
							</a>

						</div>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids aos-init" data-aos="flip-right">
					<img src="images/dutta.jpeg" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Soumita Dutta </h4>
							<p><span>M.SC COMPUTER SCIENCE</p></span>
							<h6>Designation: Assistant Professor Department: SITM</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest-p"></i>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //team -->

<!--/newsletter-->
<?php include("inc/footer.php"); ?>
	<div class="copyright py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-8">      
					<p class="copy-right mt-2">© 2018 Subject. All Rights Reserved 
					</p>
				</div>
				<div class="col-md-4">
					<ul class="social-icons scial justify-content-end">
						<li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
						<li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
						<li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <!--//newsletter-->

<!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>