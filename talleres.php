<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Talleres | Laura Rudi</title>
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
					<div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="" title=""></a></div>
				</div>
				
				
				<!-- Nav Outer -->
				<?php
            include("./nav.php")
            ?>
				
            </div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title=""><img src="assets/images/logo-small-black.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
				
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
					<!-- Main Menu End-->
					
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/logo-small-black.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
      <?php
            include("./sidebar.php")
            ?>
      <!-- END sidebar widget item -->
	
	<!-- Page Title Section -->
	<section class="page-title" style="background-image: url(assets/images/resource/coaching-deportivo-image2222.jpg); background-size: cover; background-position: center center;">
		<div class="auto-container">			
			<div class="auto-container">
				<div class="content">				
				<h1>Talleres temáticos</h1>
				<div class="text" style="margin-top: 20px;">Espacios de aprendizaje y crecimiento personal.<br />Descubrí herramientas prácticas para transformar tu vida.</div>
			</div>
			<div class="breadcrumb-outer">
				<ul class="page-breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li>Mis talleres</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Page Title Section -->
	
	<!-- Courses Page Section -->
	<section class="courses-page-section">
		<div class="auto-container">
			
			<div class="row clearfix">
			
				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="autoconfianza.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-autoconfianza.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="autoconfianza.php">Como construir autoconfianza</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="poder-control.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-poder.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="poder-control.php">Poder y <br> control</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="ansiedad.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-ansiedad.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="ansiedad.php">Piedra libre a <br>la ansiedad</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="tristeza-alegria.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-tristeza.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="tristeza-alegria.php">De la tristeza a <br>la alegría</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="enojo.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-enojo.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="enojo.php">El enojo <br>inteligente</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="aprendizaje.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-aprendizaje.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="aprendizaje.php">El camino del <br>aprendizaje</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="heridas.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-infancia.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="heridas.php">Heridas emocionales <br>de la infancia</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="ofertas-promesas.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-promesas.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="ofertas-promesas.php">Pedido de ofertas <br>y promesas</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="transformacion.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-transformacion.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="transformacion.php">El camino de <br>la transformación</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Course Block -->
				<div class="course-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="culpa.php"><img class="transition-500ms" style="height: 200px; width: 300px; object-fit: cover;" src="assets/images/resource/service-culpa.webp" alt="" /></a>
						</div>
						<div class="lower-content">
							<h5><a href="culpa.php">Por mi gran <br>culpa</a></h5>
							<ul class="post-info">
								<li><span class="icon flaticon-book-1"></span>Ontológico</li>
								<li><span class="icon flaticon-clock"></span>90 Minutos</li>
							</ul>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</section>
	<!-- End Courses Page Section -->
	
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