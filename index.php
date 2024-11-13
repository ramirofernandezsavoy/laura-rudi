<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Laura Rudi | Coach Ontológico y Deportivo</title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/x-icon"
    />
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />

    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
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

      <!-- Main Slider -->
      <section class="main-slider">
        <div
          class="rev_slider_wrapper fullwidthbanner-container"
          id="rev_slider_one_wrapper"
          data-source="gallery"
        >
          <div
            class="rev_slider fullwidthabanner"
            id="rev_slider_one"
            data-version="5.4.1"
          >
            <ul>
              <li
                data-transition="slidingoverlayhorizontal"
                data-description="Slide Description"
                data-index="rs-1688"
                data-slotamount="default"
                data-thumb="assets/images/main-slider/slider-1.jpg"
                data-title="slide 1"
              >
                <img
                  alt=""
                  class="rev-slidebg"
                  data-bgfit="cover"
                  data-bgparallax="10"
                  data-bgposition="center center"
                  data-bgrepeat="no-repeat"
                  data-no-retina=""
                  src="assets/images/main-slider/slider-1.jpg"
                />

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['1100','800','800','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['-150','-240','-210','-210']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                >
                  <div class="title">Mis servicios</div>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['1100','800','800','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['-30','-100','-100','-110']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                  
                >
                  <h1>Coaching Ontológico<br />y Deportivo</h1>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['1100','800','800','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['100','40','15','0']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"power3.out"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                  
                >
                  <div class="text">
                    Descubramos juntos los pasos que te harán alcanzar tus
                    objetivos. <br />
                    Funcional %100. ¿Querés transformar tu vida?
                  </div>
                </div>

                <div
                  class="tp-caption tp-resizeme"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['700','700','700','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['190','150','105','100']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                >
                  <div class="button-box">
                    <a href="contact.php" class="theme-btn btn-style-two"
                      ><span class="txt">¡Charlemos!</span></a
                    >
                  </div>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['700','700','700','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['260','240','180','180']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                ></div>
              </li>

              <li
                data-transition="slidingoverlayvertical"
                data-description="Slide Description"
                data-index="rs-1689"
                data-slotamount="default"
                data-thumb="assets/images/main-slider/slider-1.jpg"
                data-title="Slide Title"
              >
                <img
                  alt=""
                  class="rev-slidebg"
                  data-bgfit="cover"
                  data-bgparallax="10"
                  data-bgposition="center center"
                  data-bgrepeat="no-repeat"
                  data-no-retina=""
                  src="assets/images/main-slider/slider-2.jpg"
                />

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['1100','800','800','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['-150','-240','-210','-210']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'                  
                >
                  <div class="title">Sobre el coaching</div>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['1100','800','800','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['-30','-100','-100','-110']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                >
                  <h1>Mis talleres <br />temáticos</h1>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['1100','800','800','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['100','40','15','0']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                >
                  <div class="text">
                    Acercate a alguno de mis talleres y conocé como trabajo.
                    <br />¿Querés conocerlos?
                  </div>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['700','700','700','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['190','150','105','100']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                >
                  <div class="button-box">
                    <a href="#" class="theme-btn btn-style-two"
                      ><span class="txt">Conocé más</span></a
                    >
                  </div>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['700','700','700','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['260','240','180','180']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                ></div>
              </li>

              <li
                data-transition="slidingoverlayhorizontal"
                data-description="Slide Description"
                data-index="rs-1690"
                data-slotamount="default"
                data-thumb="assets/images/main-slider/slider-1.jpg"
                data-title="Slide Title"
              >
                <img
                  alt=""
                  class="rev-slidebg"
                  data-bgfit="cover"
                  data-bgparallax="10"
                  data-bgposition="center center"
                  data-bgrepeat="no-repeat"
                  data-no-retina=""
                  src="assets/images/main-slider/slider-3.jpg"
                />

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['1100','800','800','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['-150','-240','-210','-210']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                >
                  <div class="title">Sobre mí</div>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['1100','800','800','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['-30','-100','-100','-110']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                >
                  <h1>
                    Soy Laura Rudi <br />
                    y soy Coach
                  </h1>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['1100','800','800','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['100','40','15','0']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                >
                  <div class="text">
                    ¿Estas interesado en saber de mi proceso? <br />
                    Conocé más sobre mí
                  </div>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['700','700','700','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['190','150','105','100']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                >
                  <div class="button-box">
                    <a href="about.php" class="theme-btn btn-style-two"
                      ><span class="txt">Sobre mí</span></a
                    >
                  </div>
                </div>

                <div
                  class="tp-caption"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingtop="[0,0,0,0]"
                  data-responsive_offset="on"
                  data-type="text"
                  data-height="none"
                  data-width="['700','700','700','500']"
                  data-whitespace="normal"
                  data-hoffset="['15','15','15','15']"
                  data-voffset="['260','240','180','180']"
                  data-x="['left','left','left','left']"
                  data-y="['middle','middle','middle','middle']"
                  data-textalign="['top','top','top','top']"
                  data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                  
                ></div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- End Main Slider -->

      <!-- About Section -->
      <section class="about-section">
        <div class="auto-container">
          <div class="row clearfix">
            <!-- Image Column -->
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
              <div class="inner-column">
                <div class="image" data-tilt data-tilt-max="3">
                  <img src="assets/images/resource/about-1.jpg" alt="" />
                </div>
              </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-12 col-sm-12">
              <div class="inner-column">
                <div class="sec-title">
                  <div class="title">Sobre mí</div>
                  <h2>Te puedo acompañar a alcanzar tu mejor versión.</h2>
                  <div class="text">                    
                    La mejor versión de uno mismo implica un proceso de <strong>crecimiento
                    personal de autodescubrimiento, autenticidad, superar limitaciones
                    y aprender de los errores.</strong>
                    <br>
                    <br>
                    Quiero acompañarte en este proceso para enfocarnos
                    en tus objetivos y que puedas trabajar para obtener resultados siguiendo tres simples pasos.
                  </div>
                </div>
                <div class="row clearfix">
                  <!-- Column -->
                  <div class="column col-lg-4 col-md-4 col-sm-12">
                    <ul class="option-list">
                      <li>
                        <span
                          class="icon transition-500ms flaticon-check"
                        ></span>
                        Autodiagnóstico <br />y objetivos
                      </li>
                    </ul>
                  </div>
                  <!-- Column -->
                  <div class="column col-lg-4 col-md-4 col-sm-12">
                    <ul class="option-list">
                      <li>
                        <span
                          class="icon transition-500ms flaticon-check"
                        ></span>
                        Planificación
                        e intervención
                      </li>
                    </ul>
                  </div>
                  <!-- Column -->
                  <div class="column col-lg-4 col-md-4 col-sm-12">
                    <ul class="option-list">
                      <li>
                        <span
                          class="icon transition-500ms flaticon-check"
                        ></span>
                        Evaluación del proceso                      
                      </li>
                    </ul>
                  </div>
                </div>                
              </div>
             <!-- Counter Box -->
						<div class="counter-box counter-box-text" style="display: flex; justify-content: center;">
              <div>
                
							  <p style="font-size: 1.1rem; font-style: italic; text-align: end;">« La vida es una cuestión de elecciones, y cada elección que haces, te hace a ti ». <br><span style="font-weight: bold;" > John C. Maxwell.</span></p>
              </div>
						<!-- End Counter Box -->
            </div>
           
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- Services Section -->
      <section class="services-section">
        <div class="auto-container">
          <div class="sec-title">
            <div class="title color-two">Servicios</div>
            <h2>¡Conocé algunos de mis talleres!</h2>
          </div>
          <div class="inner-container">
            <div class="services-carousel owl-carousel owl-theme">
              <!-- Service Block -->
              <div class="service-block">
                <div class="inner-box">
                  <div class="image">
                    <a href="#"
                      ><img
                        class="transition-500ms"
                        src="assets/images/resource/service-culpa.webp"
                        alt=""
                    /></a>
                  </div>
                  <div class="lower-content">
                    <div class="lessons">Talleres</div>
                    <div class="lower-box">
                      <h4><a href="#">Por mi gran culpa</a></h4>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Service Block -->
              <div class="service-block translate-top">
                <div class="inner-box">
                  <div class="image">
                    <a href="#"
                      ><img
                        class="transition-500ms"
                        src="assets/images/resource/service-autoconfianza.webp"
                        alt=""
                    /></a>
                  </div>
                  <div class="lower-content">
                    <div class="lessons color-two">Talleres</div>
                    <div class="lower-box">
                      <h4>
                        <a href="#">Construir autoconfianza</a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Service Block -->
              <div class="service-block">
                <div class="inner-box">
                  <div class="image">
                    <a href="#"
                      ><img
                        class="transition-500ms"
                        src="assets/images/resource/service-poder.webp"
                        alt=""
                    /></a>
                  </div>
                  <div class="lower-content">
                    <div class="lessons color-three">Talleres</div>
                    <div class="lower-box">
                      <h4><a href="#">Poder y control</a></h4>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Service Block -->
              <div class="service-block translate-top">
                <div class="inner-box">
                  <div class="image">
                    <a href="#"
                      ><img
                        class="transition-500ms"
                        src="assets/images/resource/service-ansiedad.webp"
                        alt=""
                    /></a>
                  </div>
                  <div class="lower-content">
                    <div class="lessons color-four">Talleres</div>
                    <div class="lower-box">
                      <h4><a href="#">Piedra libre a la ansiedad</a></h4>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Service Block -->
              <div class="service-block">
                <div class="inner-box">
                  <div class="image">
                    <a href="#"
                      ><img
                        class="transition-500ms"
                        src="assets/images/resource/service-tristeza.webp"
                        alt=""
                    /></a>
                  </div>
                  <div class="lower-content">
                    <div class="lessons color-five">Talleres</div>
                    <div class="lower-box">
                      <h4>
                        <a href="#">De la tristeza a la alegría</a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Service Block -->
              <div class="service-block translate-top">
                <div class="inner-box">
                  <div class="image">
                    <a href="#"
                      ><img
                        class="transition-500ms"
                        src="assets/images/resource/service-enojo.webp"
                        alt=""
                    /></a>
                  </div>
                  <div class="lower-content">
                    <div class="lessons">Talleres</div>
                    <div class="lower-box">
                      <h4>
                        <a href="#">El enojo inteligente</a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>

                <!-- Service Block -->
                <div class="service-block">
                  <div class="inner-box">
                    <div class="image">
                      <a href="#"
                        ><img
                          class="transition-500ms"
                          src="assets/images/resource/service-aprendizaje.webp"
                          alt=""
                      /></a>
                    </div>
                    <div class="lower-content">
                      <div class="lessons color-two">Talleres</div>
                      <div class="lower-box">
                        <h4>
                          <a href="#">El camino del aprendizaje</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>

                  <!-- Service Block -->
              <div class="service-block translate-top">
                <div class="inner-box">
                  <div class="image">
                    <a href="#"
                      ><img
                        class="transition-500ms"
                        src="assets/images/resource/service-infancia.webp"
                        alt=""
                    /></a>
                  </div>
                  <div class="lower-content">
                    <div class="lessons color-three">Talleres</div>
                    <div class="lower-box">
                      <h4>
                        <a href="#">Heridas emocionales de la infancia</a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>

                <!-- Service Block -->
                <div class="service-block ">
                  <div class="inner-box">
                    <div class="image">
                      <a href="#"
                        ><img
                          class="transition-500ms"
                          src="assets/images/resource/service-promesas.webp"
                          alt=""
                      /></a>
                    </div>
                    <div class="lower-content">
                      <div class="lessons color-four">Talleres</div>
                      <div class="lower-box">
                        <h4>
                          <a href="#">Pedido de ofertas y promesas</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>

                  <!-- Service Block -->
              <div class="service-block translate-top">
                <div class="inner-box">
                  <div class="image">
                    <a href="#"
                      ><img
                        class="transition-500ms"
                        src="assets/images/resource/service-transformacion.webp"
                        alt=""
                    /></a>
                  </div>
                  <div class="lower-content">
                    <div class="lessons color-five">Talleres</div>
                    <div class="lower-box">
                      <h4>
                        <a href="#">El camino de la transformación</a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- Course Section -->
      <section class="course-section">
        <div class="auto-container">
          <div class="row clearfix">
            <!-- Title Column -->
            <div class="title-column col-lg-6 col-md-12 col-sm-12">
              <div class="inner-column">
                <div class="sec-title">
                  <div class="title color-three">
                    Taller gratis
                  </div>
                  <h2>Tirando paredes</h2>
                  <div class="text">
                    Accedé a uno de mis talleres gratuitamente. Ingresá tu correo electrónico y te enviaremos la información necesaria para ver el video.
                  </div>
                </div>

                <!-- Email Box -->
                <div class="email-box">
                  <form method="post" action="contact.php">
                    <div class="form-group">
                      <span class="icon flaticon-envelope"></span>
                      <input
                        type="email"
                        name="search-field"
                        value=""
                        placeholder="tunombre@mail.com"
                        required
                      />
                      <button type="submit" class="theme-btn btn-style-three">
                        <span class="txt">Enviame el video</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Video Column -->
            <div class="video-column col-lg-6 col-md-12 col-sm-12">
              <div
                class="inner-column wow fadeInRight"
                data-wow-delay="0ms"
                data-wow-duration="1500ms"
              >
                <div
                  class="pattern-layer"
                  style="
                    background-image: url(assets/images/background/pattern-1.png);
                  "
                ></div>
                <!-- Video Box -->
                <div class="video-box">
                  <figure class="video-image">
                    <img
                      class="transition-500ms"
                      src="assets/images/resource/video-image.jpg"
                      alt=""
                    />
                  </figure>
                  <a
                    href="https://www.youtube.com/watch?v=6WeFbSTsus8"
                    class="lightbox-image overlay-box"
                    ><span class="transition-900ms"
                      >Play<i class="ripple"></i></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Course Section -->

      <!-- Process Section -->
      <section
        class="process-section"
        style="background-image: url(assets/images/background/pattern-2.png)"
      >
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title light">
            <div class="title">Coaching</div>
            <h2>Otras modalidades de coaching</h2>
          </div>
          <div class="row clearfix">
            <!-- Process Block -->
            <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box transition-300ms">
                <div class="icon transition-500ms flaticon-coffee-cup"></div>
                <div class="step">Grupal</div>
                <h4><a href="#">Té & <br> Coaching</a></h4>
                <div class="text">
                  Conectá y crecé en sesiones de coaching grupal, compartiendo experiencias y merienda.
                </div>
              </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box transition-300ms">
                <div class="icon transition-500ms flaticon-trophy-1"></div>
                <div class="step">Deporte</div>
                <h4><a href="#">Coaching Deportivo</a></h4>
                <div class="text">
                  Superá tus límites con coaching especializado para alcanzar tus metas deportivas.
                </div>
              </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box transition-300ms">
                <div class="icon transition-500ms flaticon-briefcase-3"></div>
                <div class="step">Laboral</div>
                <h4><a href="#">Coaching de <br> grupos de trabajo</a></h4>
                <div class="text">
                  Soluciones efectivas para equipos que buscan superar obstáculos y mejorar su rendimiento.
                </div>
              </div>
            </div>

            <!-- Process Block -->
            <div class="process-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
              <div class="inner-box transition-300ms">
                <div class="icon transition-500ms flaticon-heart-2"></div>
                <div class="step">Familia</div>
                <h4><a href="#">Coaching <br> Familiar</a></h4>
                <div class="text">
                  Un espacio para fortalecer la unión familiar y alcanzar objetivos en conjunto.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Process Section -->      
      

      <!-- Testimonial Section -->
      <section class="testimonial-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title centered">
            <div class="title color-four">Opiniones</div>
            <h2>
              ¿Que dicen sobre mí?
            </h2>
          </div>
          <div class="testimonial-carousel owl-carousel owl-theme">
            <!-- Testimonial Block -->
            <div class="testimonial-block">
              <div class="inner-box">
                <div class="upper-box">
                  <span class="quote-icon flaticon-quote-3"></span>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="text">
                    "Me sentía estancada, pero Laura me ayudó a reconectar conmigo misma. Sus sesiones no solo me motivaron a volver a entrenar, sino que también me hicieron reflexionar profundamente sobre mis creencias limitantes."
                  </div>
                </div>
                <div class="lower-box">
                  <div class="box-inner">
                    <div class="author-image">
                      <img src="assets/images/resource/user3.jpg" alt="" />
                    </div>
                    <h5>Alesia Caprini </h5>
                    <div class="designation">Publicista, Mamá de tres.</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-block">
              <div class="inner-box">
                <div class="upper-box">
                  <span class="quote-icon flaticon-quote-3"></span>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="text">
                    "Trabajar con Lau me ayudó a equilibrar mi vida laboral y personal. Su enfoque ontológico me permitió aclarar mis prioridades y organizar mi vida, hoy me siento libre y hasta recuperé la energía que había perdido."
                  </div>
                </div>
                <div class="lower-box">
                  <div class="box-inner">
                    <div class="author-image">
                      <img src="assets/images/resource/user2.jpg" alt="" />
                    </div>
                    <h5>Jorge Martino</h5>
                    <div class="designation">Empresario, Buenos Aires.</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-block">
              <div class="inner-box">
                <div class="upper-box">
                  <span class="quote-icon flaticon-quote-3"></span>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="text">
                    "Con Laura pude descubrir bloqueos que ni sabía que tenía. Me ayudó a encontrar un nuevo sentido de propósito en mi vida y gestionar mis emociones fue clave en este proceso."
                  </div>
                </div>
                <div class="lower-box">
                  <div class="box-inner">
                    <div class="author-image">
                      <img src="assets/images/resource/user1.jpg" alt="" />
                    </div>
                    <h5>Mariano</h5>
                    <div class="designation">Castelar, Buenos Aires, ARG.</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-block">
              <div class="inner-box">
                <div class="upper-box">
                  <span class="quote-icon flaticon-quote-3"></span>
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="text">
                    "Gracias al apoyo que me brindo Laura, no solo mejoré mi rendimiento físico, sino que también aprendí a gestionar mis emociones en momentos clave de mis partidos. Su ayuda con el coaching deportivo fue exactamente lo que necesitaba."
                  </div>
                </div>
                <div class="lower-box">
                  <div class="box-inner">
                    <div class="author-image">
                      <img src="assets/images/resource/user4.jpg" alt="" />
                    </div>
                    <h5>Angela Paredes</h5>
                    <div class="designation">Futbolista, Buenos Aires.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonial Section -->

      <!-- News Section -->
      <section class="news-section">
        <div class="auto-container">
          <!-- Sec Title -->
          <div class="sec-title">
            <div class="title color-three">Blog</div>
            <h2>Blog e ideas</h2>
          </div>
          <div class="row clearfix">
            <!-- News Block -->
            <div class="news-block col-lg-6 col-md-6 col-sm-12">
              <div
                class="inner-box wow fadeInLeft"
                data-wow-delay="0ms"
                data-wow-duration="1500ms"
              >
                <div class="post-date">Enero 21, 2023</div>
                <h3>
                  <a href="#"
                    >Deja de ignorar estos 7 tips que van a hacer 1% mejor cada dia.</a
                  >
                </h3>
                <div class="author-box">
                  <div class="box-inner">
                    <div class="author-image">
                      <img src="assets/images/resource/user5.jpg" alt="" />
                    </div>
                    <h5>Sofi Rodriguez</h5>
                    <div class="designation">Coach Ontológico, @srodriguezcoaching</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- News Block -->
            <div class="news-block style-two col-lg-3 col-md-6 col-sm-12">
              <div
                class="inner-box wow fadeInRight"
                data-wow-delay="0ms"
                data-wow-duration="1500ms"
              >
                <div class="post-date">Diciembre 16, 2022</div>
                <h3>
                  <a href="#"
                    >¿Como establecer un plan de acción para lograr objetivos?</a
                  >
                </h3>
                <div class="author-box">
                  <h5>Daniel Dorio</h5>
                  <div class="designation">Psicólogo, Univ. de Luján</div>
                </div>
              </div>
            </div>

            <!-- News Block -->
            <div class="news-block style-two col-lg-3 col-md-6 col-sm-12">
              <div
                class="inner-box wow fadeInRight"
                data-wow-delay="0ms"
                data-wow-duration="1500ms"
              >
                <div class="post-date">Septiembre 22, 2022</div>
                <h3>
                  <a href="#"
                    >Involucrarse con las personas a tu alrededor, te prepara para cualquier tarea.</a
                  >
                </h3>
                <div class="author-box">
                  <h5>Alexis Borrione</h5>
                  <div class="designation">Blogger</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End News Section -->

      <!-- Main Footer -->
       <?php
       include("./footer.php")
       ?>
      
    </div>

    <!-- Search Popup -->
    <div class="search-popup">
      <button class="close-search style-two">
        <span class="flaticon-cancel-1"></span>
      </button>
      <button class="close-search">
        <span class="flaticon-up-arrow"></span>
      </button>
      <form method="post" action="blog.php">
        <div class="form-group">
          <input
            type="search"
            name="search-field"
            value=""
            placeholder="Search Here"
            required=""
          />
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>
    <!-- End Header Search -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="fa fa-arrow-up"></span>
    </div>

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
