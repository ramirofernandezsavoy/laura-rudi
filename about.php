<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Laura Rudi | Coach Ontológico y Deportivo</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
      <!-- Header Style One -->
      <header class="main-header">
        <!-- Header Lower -->
        <div class="header-lower">
          <div class="auto-container clearfix">
            <!-- Logo Box -->
            <div class="pull-left logo-box">
              <div class="logo">
                <a href="index.php"
                  ><img src="assets/images/logo.png" alt="Logo Laura Rudi"
                /></a>
              </div>
            </div>

            <!-- Nav Outer -->
            <?php
            include("./nav.php")
            ?>

          </div>
        </div>

	<!-- Sticky Header  -->
	<div class="sticky-header">
	  <div class="auto-container clearfix">
		<!--Logo-->
		<div class="logo pull-left">
		  <a href="index.php" title=""
			><img src="assets/images/logo-small-black.png" alt="Logo pequeño Laura Rudi" title=""
		  /></a>
		</div>
		<!--Right Col-->
		<div class="pull-right">
		  <!-- Main Menu -->
		  <nav class="main-menu">
			<!--Keep This Empty / Menu will come through Javascript-->
		  </nav>
		  <!-- Main Menu End-->

		  <!-- Mobile Navigation Toggler -->
		  <div class="mobile-nav-toggler">
			<span class="icon flaticon-menu-1"></span>
		  </div>
		</div>
	  </div>
	</div>
	<!-- End Sticky Menu -->

	<!-- Mobile Menu  -->
	<div class="mobile-menu">
	  <div class="menu-backdrop"></div>
	  <div class="close-btn">
		<span class="icon flaticon-multiply"></span>
	  </div>

	  <nav class="menu-box">
		<div class="nav-logo">
		  <a href="index.php"
			><img src="assets/images/logo-small.png" alt="" title=""
		  /></a>
		</div>
		<div class="menu-outer">
		  <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
		</div>
	  </nav>
	</div>
	<!-- End Mobile Menu -->
  </header>
  <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
      <?php
            include("./sidebar.php")
            ?>
      <!-- END sidebar widget item -->
	
	<!-- Page Title Section -->
	<section class="page-title" style="background-image: url(assets/images/background/bg-about.webp); background-size: cover; background-position: center center;">
		<div class="auto-container">
			<div class="auto-container">
				<div class="content">				
				<h1>Sobre mí</h1>
				<div class="text" style="margin-top: 20px;">Conocé mi historia y mi pasión por acompañarte.<br />Juntos construiremos el camino hacia tu mejor versión.</div>
			</div>
			<div class="breadcrumb-outer">
				<ul class="page-breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li>Sobre mí</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Page Title Section -->

	<!-- About me Section -->	 
	<section class="skill-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Skill Column -->
				<div class="skill-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title color-three">Laura Rudi</div>
							<h2>Coach ontológico y deportivo</h2>
							<div class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque autem nesciunt eum eveniet sed minima, blanditiis a quas commodi iure tempore.</div>
						</div>
						
						<!-- Skills -->
						<div class="skills">

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Desarrollo personal</div>
								</div>
								<div class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam quisquam unde placeat consectetur dolore aspernatur beatae eum libero.</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image titlt" data-tilt data-tilt-max="3">
							<img src="assets/images/resource/coaching-grupal.jpg" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>	
	 <!-- End Page Title Section -->
	
	<!-- History Section -->
	<section class="history-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title color-four">Mi viaje</div>
				<h2>Laura Daniela Rudi</h2>
			</div>
			<!-- End Sec Title -->
			<div class="inner-container">
			
				<!-- Rocket Icon -->
				<div class="rocket-icon flaticon-rocket"></div>
				<!-- End Rocket Icon -->
				
				<!-- History Block -->
				<div class="history-block">
					<div class="inner-box">
						<div class="row clearfix">
							<!-- Year Column -->
							<div class="year-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="year">2006</div>
								</div>
							</div>
							<!-- Image Column -->
							<div class="image-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="course_details"><img src="assets/images/resource/year-1.jpg" alt="" /></a>
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<h3><a href="course_details">Comienza mi viaje</a></h3>
									<div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, harum. Rem corrupti consequatur explicabo asperiores, deleniti nihil velit incidunt magnam.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- History Block -->
				
				<!-- History Block -->
				<div class="history-block style-two">
					<div class="inner-box">
						<div class="row clearfix">
							
							<!-- Content Column -->
							<div class="content-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<h3><a href="course_details">Continua mi viaje</a></h3>
									<div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, harum. Rem corrupti consequatur explicabo asperiores.</div>
								</div>
							</div>
							
							<!-- Image Column -->
							<div class="image-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="course_details"><img src="assets/images/resource/year-2.jpg" alt="" /></a>
									</div>
								</div>
							</div>
							
							<!-- Year Column -->
							<div class="year-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="year">2010</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- History Block -->
				
				<!-- History Block -->
				<div class="history-block">
					<div class="inner-box">
						<div class="row clearfix">
							<!-- Year Column -->
							<div class="year-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="year">2018</div>
								</div>
							</div>
							<!-- Image Column -->
							<div class="image-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="course_details"><img src="assets/images/resource/year-3.jpg" alt="" /></a>
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<h3><a href="course_details">Sigo viajando</a></h3>
									<div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, harum. Rem corrupti consequatur explicabo asperiores, deleniti.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- History Block -->
				
				<!-- History Block -->
				<div class="history-block style-two">
					<div class="inner-box">
						<div class="row clearfix">
							
							<!-- Content Column -->
							<div class="content-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<h3><a href="course_details">El viaje continúa</a></h3>
									<div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, harum. Rem corrupti consequatur explicabo asperiores, deleniti nihil velit incidunt magnam.</div>
								</div>
							</div>
							
							<!-- Image Column -->
							<div class="image-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="course_details"><img src="assets/images/resource/year-4.jpg" alt="" /></a>
									</div>
								</div>
							</div>
							
							<!-- Year Column -->
							<div class="year-column col-lg-4 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="year">2024</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- History Block -->
				
				<!-- Plus Icon -->
				<div class="plus-icon flaticon-plus"></div>
				<!-- End Plus Icon -->
				
			</div>
		</div>
	</section>
	<!-- End History Section -->
	
	<!-- Main Footer -->
	<?php
       include("./footer.php")
       ?>
	
	
</div>
<!-- End PageWrapper -->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow"></span></button>
	<form method="post" action="blog.php">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Revolution Slider -->
<script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/plugins/revolution/js/main-slider-script.js"></script>
<!-- For Js Library -->

<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>