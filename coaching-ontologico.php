<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Coaching Ontológico | Laura Rudi</title>
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
                    <a href="index.php" title=""><img src="assets/images/logo-small.png" alt="" title=""></a>
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
	<section class="page-title" style="background-image: url(assets/images/background/bg-ontologico.webp); background-size: cover; background-position: center center;">
		<div class="auto-container">
			<div class="content">				
				<h1>Coaching Ontológico</h1>
				<div class="text" style="margin-top: 20px;">Una herramienta transformadora para alcanzar tus objetivos.<br />Descubre tu potencial y crea la vida que querés vivir.</div>
			</div>
			<div class="breadcrumb-outer">
				<ul class="page-breadcrumb">					
					<li>Coaching</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Page Title Section -->

	<!-- Choose Section -->
	<section class="choose-section">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image" data-tilt data-tilt-max="3">
							<img src="assets/images/resource/coachingLaura.jpg" alt="" />
						</div>
						<div class="image-two" data-tilt data-tilt-max="3">
							<img src="assets/images/resource/coachingLaura2.jpg" alt="" />
							<div class="story-text">Sobre mi viaje</div>
						</div>
						<div class="experiance-box">
							<div class="count-outer count-box">
								<span class="count-text" data-speed="2500" data-stop="5">0</span>+
							</div>
							<span class="experiances">Años de experiencia</span>
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title Two -->
						<div class="sec-title-two">
							<div class="title">Que es el coaching?</div>							  
							<h2>Es una disciplina <br>qué te acerca <br> al logro de objetivos.</h2>
							<div class="text">El coaching te permite pensarte diferente e identificar cuáles son los obstáculos que te están impidiendo traer lo que queres para tu vida.</div>
						</div>
						<!-- Author Info -->
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="assets/images/resource/lau-thumbnail.jpg" alt="" style="border-radius: 50%;" />
								</div>
								<h5 style="margin-left: 5px;">Laura D. Rudi</h5>
								<div style="margin-left: 5px;" class="designation">Coach Ontológico Profesional.</div>
								<div class="signature"><img src="assets/images/icons/signature.png" alt="" /></div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section -->

	
	
	
	<!-- Portfolio Detail Section -->
	<section class="portfolio-detail-section">
		<div class="auto-container">
			<div class="inner-box">
				<h3>Coaching <span style="color: #eb5352;">Ontológico</span></h3>
				<p>El coaching considera el lenguaje, emociones y cuerpo como interconectados, moldeando cómo interpretamos situaciones y cómo nos relacionamos con los demás.</p>
				
				<p>El coaching ontológico investiga cómo cada persona observa el mundo de manera única y subjetiva. Esta "mirada" condiciona nuestras interpretaciones, decisiones y respuestas, limitando o ampliando las posibilidades de acción para  <span style="color: #eb5352;"><strong>enfrentar desafíos y alcanzar metas personales.</strong></span></p>
				<!-- Gallery Images -->
				<div class="gallery-images">
					<div class="row clearfix">
						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<!-- Main Image -->
							<div class="main-image">
								<img src="assets/images/resource/570x400-1.jpg" alt="" />
							</div>
							<!-- End Main Image -->
						</div>
						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<!-- Main Image -->
							<div class="main-image">
								<img src="assets/images/resource/570x400-2.jpg" alt="" />
							</div>
							<!-- End Main Image -->
						</div>
					</div>
				</div>		
				<div class="button-box text-center">
                    <a href="contact.php" class="theme-btn btn-style-two"
                      ><span class="txt">¡Charlemos!</span></a
                    >
                  </div>
                </div>		
				<p>Al cambiar nuestra interpretación de los hechos, ganamos libertad para tomar nuevas acciones, logrando una transformación auténtica y duradera.</p>
				<h6>PASOS DEL PROCESO DE COACHING</h6>
				<!-- Steps Outer -->
				<div class="steps-outer">
					<div class="row clearfix">
					
						<!-- Step Block -->
						<div class="step-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="step-content">
									<span class="number">01</span>
									<h5>Autodiagnóstico y objetivos</h5>
									<div class="step-text">Identificación del camino y los objetivos a lograr de forma realista.</div>
								</div>
							</div>
						</div>
						
						<!-- Step Block -->
						<div class="step-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="step-content">
									<span class="number">02</span>
									<h5>Planificación e intervención</h5>
									<div class="step-text">Plan de acción para identificar motivaciones y el desarrollo de buenos hábitos.</div>
								</div>
							</div>
						</div>
						
						<!-- Step Block -->
						<div class="step-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box">
								<div class="step-content">
									<span class="number">03</span>
									<h5>Evaluación del proceso y desarrollo</h5>
									<div class="step-text">Interpretación de las interacciones con el entorno y los resultados obtenidos.</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!-- End Portfolio Detail Section -->
	
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
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>