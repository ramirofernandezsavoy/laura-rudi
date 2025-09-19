<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Laura Rudi - Coach Ontológico y Deportivo | Contacto</title>
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
                    <a href="index.html" title=""><img src="assets/images/logo-small-black.png" alt="" title=""></a>
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
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-small.png" alt="" title=""></a></div>
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
	<section class="page-title" style="background-image: url(assets/images/background/bg-contacto.webp); background-size: cover; background-position: center center;">
		<div class="auto-container">
			<div class="auto-container">
				<div class="content">				
				<h1>Contacto</h1>
				<div class="text" style="margin-top: 20px;">¿Listo para comenzar tu transformación?<br />Conversemos sobre tu próximo paso hacia el cambio.</div>
			</div>
			<div class="breadcrumb-outer">
				<ul class="page-breadcrumb">
					<li><a href="index.html">Inicio</a></li>
					<li>Contactame</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Page Title Section -->
		
	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="assets/images/resource/about-1-laura.jpg" alt="" />
						</div>
						<div class="image-two">
							<img src="assets/images/resource/about-2-laura.jpg" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="title color-three">Charlemos</div>
							<h2>Enviame un mensaje</h2>
							
							<?php
							// Mostrar mensajes de confirmación
							if(isset($_GET['message'])) {
								if($_GET['message'] == 'success') {
									echo '<div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">¡Mensaje enviado exitosamente! Te contactaré pronto.</div>';
								} elseif($_GET['message'] == 'error') {
									echo '<div style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">Error al enviar el mensaje. Por favor, intenta nuevamente.</div>';
								}
							}
							?>
						</div>
						
						<!-- Contact Form -->
						<div class="contact-form">
							<form method="post" action="sendemail.php">
								<div class="row clearfix">
								
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<span class="icon flaticon-user-4"></span>
										<input type="text" name="username" placeholder="Nombre" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<span class="icon flaticon-envelope"></span>
										<input type="email" name="email" placeholder="Email" required>
									</div>
									
									<!--Form Group-->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<span class="icon flaticon-notebook"></span>
										<select name="subject" class="custom-select-box">
											<option>Elegí asunto</option>
											<option>Talleres</option>
											<option>Personal</option>
											<option>Coaching</option>
											<option>Contrataciones</option>
										</select>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<span class="icon flaticon-pen"></span>
										<textarea name="message" placeholder="Mensaje"></textarea>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Enviar</span></button>
									</div>
									
								</div>
							</form>
								
						</div>
						<!-- eND Contact Form -->
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Form Section -->
	
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
	<form method="post" action="blog.html">
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
<script src="assets/js/mixitup.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/validate.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>