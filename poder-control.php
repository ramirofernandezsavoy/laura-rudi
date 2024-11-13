<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Poder y control | Laura Rudi</title>
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
					<div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt="" title=""></a></div>
				</div>
				
				<!-- Nav Outer -->
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
	
	<!-- Cource Detail Banner Section -->
    <section class="cource-detail-banner-section" style="background-image: url(assets/images/background/talleres.jpg); background-position: 0%;">
		<div class="auto-container">
			<div class="content-box">
				<div class="title">Coaching Ontológico</div>
				<h1>Poder y <br> Control</h1>
				<ul class="course-info">
					<li>Última actualización 12 Nov. 2023</li>
					<li><span class="icon fa fa-user"></span>60+ personas ya lo tomaron</li>
					<li class="rating">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<i>(21)</i>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Cource Detail Banner Section -->
	
	<!-- Course Detail Section -->
	<section class="course-detail-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Course Info Tabs-->
						<div class="course-info-tabs">
							<!-- Course Tabs-->
							<div class="course-tabs tabs-box">
							
								<!--Tab Btns-->
								<ul class="tab-btns tab-buttons clearfix">
									<li data-tab="#prod-overview" class="tab-btn active-btn">Descripción</li>
									<li data-tab="#prod-curriculum" class="tab-btn">Contenido</li>
									<li data-tab="#prod-reviews" class="tab-btn">Opiniones</li>
								</ul>
								
								<!--Tabs Container-->
								<div class="tabs-content">
									
									<!-- Tab / Active Tab -->
									<div class="tab active-tab" id="prod-overview">
										<div class="content">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet maxime cupiditate, delectus ex molestias quis tempora consequatur quo amet.</p>
											<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni autem est consectetur tenetur, totam voluptatem at vel earum nemo delectus officiis necessitatibus. Beatae tempore adipisci nobis temporibus cum quos facere?</p>
											
											<!-- Requirement Box -->
											<div class="requirement">
												<h4>Requiere</h4>
												<div class="row clearfix">
													
													<!-- Required Column -->
													<div class="required-column col-lg-4 col-md-6 col-sm-12">
														<div class="required-inner">
															<div class="required-text">Lápiz y papel</div>
														</div>
													</div>
													
													<!-- Required Column -->
													<div class="required-column col-lg-4 col-md-6 col-sm-12">
														<div class="required-inner">
															<div class="required-text">Lápiz y papel</div>
														</div>
													</div>

													<!-- Required Column -->
													<div class="required-column col-lg-4 col-md-6 col-sm-12">
														<div class="required-inner">
															<div class="required-text">Lápiz y papel</div>
														</div>
													</div>
													
												</div>
											</div>
											<!-- End Requirement Box -->
											
											<!-- Target Box -->
											<div class="target-box">
												<h4>Audiencia ideal</h4>
												<ul class="target-list">
													<li>Individuos</li>
													<li>Grupos pequeños</li>
												</ul>
											</div>
											<!-- End Target Box -->
											
										</div>
									</div>
									
									<!-- Tab -->
									<div class="tab" id="prod-curriculum">
										<div class="content">
											
											<!-- Curriculum Box -->
											<div class="curriculum-box">
												<div class="clearfix">
													<div class="pull-left">
														<h4>Contenido</h4>
													</div>
													<div class="pull-right">
														<ul class="lessons">
															<li><span class="icon fa fa-book"></span>Charla grupal</li>
															<li><span class="icon fa fa-clock-o"></span>1h 30m</li>
														</ul>
													</div>
												</div>
											</div>
											<!-- End Curriculum Box -->
											
											<!-- Accordian Box -->
											<ul class="accordion-box">
												
												<!-- Block -->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Primera parte</div>
													<div class="acc-content">
														<div class="content">
															<ul class="accordion-list">
																<li>Tema 1 <a class="lightbox-image list-icon fa fa-play" href="https://www.youtube.com/watch?v=kxPCFljwJws"></a></li>
																<li>Tema 2 <span class="list-icon fa fa-lock"></span></li>
																<li>Tema 3 <span class="list-icon fa fa-lock"></span></li>
															</ul>
														</div>
													</div>
												</li>
												
													<!-- Block -->
													<li class="accordion block">
														<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Segunda parte</div>
														<div class="acc-content">
															<div class="content">
																<ul class="accordion-list">
																	<li>Tema 1 <a class="lightbox-image list-icon fa fa-play" href="https://www.youtube.com/watch?v=kxPCFljwJws"></a></li>
																	<li>Tema 2 <span class="list-icon fa fa-lock"></span></li>
																	<li>Tema 3 <span class="list-icon fa fa-lock"></span></li>
																</ul>
															</div>
														</div>
													</li>

														<!-- Block -->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Tercera parte</div>
													<div class="acc-content">
														<div class="content">
															<ul class="accordion-list">
																<li>Tema 1 <a class="lightbox-image list-icon fa fa-play" href="https://www.youtube.com/watch?v=kxPCFljwJws"></a></li>
																<li>Tema 2 <span class="list-icon fa fa-lock"></span></li>
																<li>Tema 3 <span class="list-icon fa fa-lock"></span></li>
															</ul>
														</div>
													</div>
												</li>
											</ul>
											<!-- End Accordian Box -->
										</div>
									</div>
									
									<!-- Tab -->
									<div class="tab" id="prod-reviews">
										<div class="content">
											
											<!-- Comments Area -->
											<div class="comments-area">
												<div class="group-title">
													<h4>Feedback</h4>
												</div>
												
												<div class="comment-box">
													<div class="comment">
														<div class="author-thumb"><img src="assets/images/resource/user1.jpg" alt=""></div>
														<div class="comment-info clearfix">
															<strong>Miguel Reverendo</strong>
															<div class="comment-time">21 de Julio, 2024</div>
															<div class="rating">
																<span class="fa fa-star"></span>
																<span class="fa fa-star"></span>
																<span class="fa fa-star"></span>
																<span class="fa fa-star"></span>
																<span class="fa fa-star"></span>
															</div>
														</div>
														<div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum a quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabocopytyping.</div>														
													</div>
												</div>
												
												<div class="comment-box">
													<div class="comment">
														<div class="author-thumb"><img src="assets/images/resource/user2.jpg" alt=""></div>
														<div class="comment-info clearfix">
															<strong>Marcelo Tirado</strong>
															<div class="comment-time">6 de Julio, 2024</div>
															<div class="rating">
																<span class="fa fa-star"></span>
																<span class="fa fa-star"></span>
																<span class="fa fa-star"></span>
																<span class="fa fa-star"></span>
																<span class="fa fa-star"></span>
															</div>
														</div>
														<div class="text">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum a quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabocopytyping mean refreshing que porro espanio.</div>														
													</div>
												</div>
												
											</div>
											
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
					
						<!-- Video Intro Widget -->
						<div class="video-intro-widget">
							<!-- Video Box -->
							<div class="intro-video" style="background-image: url(assets/images/resource/thumbnail-talleres.jpg)">
								<a href="https://www.youtube.com/watch?v=6WeFbSTsus8&t=210s" class="lightbox-image intro-video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
							</div>
							<div class="lower-content">								
								<ul class="intro-list">
									<li><span class="icon fa fa-link"></span><strong>Nivel</strong><i>Introductorio</i></li>
									<li><span class="icon fa fa-clock-o"></span><strong>Duración</strong><i>90 minutos</i></li>									
									<li><span class="icon fa fa-book"></span><strong>Temática</strong><i>Poder y Control</i></li>
									<li><span class="icon fa fa-money"></span><strong>Idioma</strong><i>Español</i></li>
								</ul>
								
								<!-- Buttons Box -->
								<div class="buttons-box">
									<a href="#" class="enroll-btn theme-btn">¡Anotate! <span class="icon fa fa-long-arrow-right"></span></a>									
								</div>
								<!-- End Buttons Box -->
								
								<!-- Social Box -->
								<ul class="social-box">
									<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
									<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>									
									<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
									<li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
								</ul>
								
							</div>
						</div>
						<!-- End Video Intro Widget -->
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Course Detail Section -->
	
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
<script src="assets/js/validate.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>