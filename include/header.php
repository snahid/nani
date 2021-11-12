<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Nani</title>

    <!-- Fonts  -->
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- Fonts  -->

    <!-- Bootstrap  -->
    <!-- FavIcon-->
    <link
      rel="shortcut icon"
      href="./assets/images/footerlogo.png"
      type="image/x-icon"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--AOS css-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Bootstrap style-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Material Icon  -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!-- Material Icon  -->
    <!-- FontAwesome style-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- font  -->
    <!--Owl Carouse css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <!--AOS css-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!--Animate css-->
    <link rel="stylesheet" href="css/animate.min.css" />
    <!-- Mobile Menu  -->
    <link rel="stylesheet" href="./css/menu.css" />
    <!-- Mobile Menu  -->
    <!-- Custom Style-->
    <link rel="stylesheet" href="./css/checkbox.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

  <body>
    <!-- Mobile Menu  -->
    <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div class="sidebar-header">
          <a href="./index.php"
            ><img
              style="width: 70%"
              src="./assets/images/footerlogo.png"
              alt=""
          /></a>
        </div>

        <ul class="list-unstyled components">
          <li><a href="./index.php">Home</a></li>
          <li>
              <a  href="#aboutSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle">
              About</a>
            <ul class="collapse list-unstyled" id="aboutSubmenu">
              <li><a href="./about.php">About Company</a></li>
              <li><a href="./brand.php">Our Brands</a></li>
            </ul>
          </li>
          <li>
            <a
              href="#pageSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              >Products</a
            >
            <ul class="collapse list-unstyled" id="pageSubmenu">
            <li><a href="./turmeric.php">Turmeric</a></li>
            <li><a href="./black_pepper.php">Black & White Pepper</a></li>
            <li><a href="./ginger.php">Ginger</a></li>
            <li><a href="./chillies.php">Chillies</a></li>
            <li><a href="./whole_spices.php">Whole spices</a></li>
            <li><a href="./ground_spice.php">Ground Spices</a></li>
            <li><a href="./mixed_spices.php">Mix spices-Whole</a></li>
            <li><a href="./spices_blends.php">Spice Blends</a></li> 
            <li><a href="./tamarind.php">Tamarind Products</a></li>
            <li><a href="./chana.php">Chana Products</a></li>
            <li><a href="./jaggery.php">Jaggery Products</a></li>
            <li><a href="./pappad.php">Pappad & Far Far Products</a></li>
            <li><a href="./coconut.php">Coconut Products</a></li>
            <li>
              <a href="./rice.php">Rice</a>
            </li> 
            <li><a href="./dry_fruits.php">Dry fruits & nuts</a></li>
            <li>
              <a href="./freshners.php">Mouth Freshners</a>
            </li>
            <li><a href="./grinders.php">Grinders</a></li>
            <li><a href="./delicacy.php">Delicacies</a></li>
            <li><a href="./miscellaneous.php">Miscellaneous products</a></li>   
            <li><a href="#" class="viewall">View All</a></li>   
            </ul>
          </li>
          <li>
            <a href="#serviceSubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
            >Services
          </a>
          <ul class="collapse list-unstyled" id="serviceSubmenu">
            <li><a href="./services.php#turmericExport">Turmeric Export</a></li>
            <li><a href="./services.php#spicefoodExport">Spice & Food Export</a></li>
            <li><a href="./services.php#spiceprocessingBlendings">Spice Processing Blending</a></li>
            <li><a href="./services.php#servicePrivate">Private Label Packaging</a></li>
            <li><a href="#">View All Services</a></li>
          </ul>
          </li>
          <li><a href="./infrastructure.php">Infrastructure</a></li>
          <li><a href="./sustainability.php">Sustainability</a></li>
          <li>
            <a href="#qualitySubmenu"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle">
              Policies
          </a>
          <ul class="collapse list-unstyled" id="qualitySubmenu">
            <li><a href="./quality_policy.php">Quality Policy</a></li>
            <li><a href="./certificate.php">Certificates</a></li>
          </ul>
        </li>
          <li><a href="./clients.php">Clients</a></li>
          <li><a href="./certificate.php">Certificates</a></li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>

        <ul class="m-address">
          <li>
            <a href="mailto:info@nani.co.in" class="e-address"
              ><i class="fa fa-envelope" aria-hidden="true"></i>
              info@nani.co.in</a
            >
          </li>
          <li>
            <a href="tel:+914242217126"
              ><i class="fa fa-phone" aria-hidden="true"></i> +91 4242 2171
              26</a
            >
          </li>
        </ul>
      </nav>
    </div>
    <!-- Mobile Menu  -->

    <!-- Mobile Navigation  -->
    <div class="mobilenavigation">
      <div class="container">
        <div class="mobile-navigation-position">
          <div class="mobilenavigation-wrapper mobileposition">
            <div class="mnavigation-left">
              <a href="./index.php"
                ><img src="./assets/images/footerlogo.png" alt=""
              /></a>
            </div>
            <div class="mnavigation-right">
              <div class="search-menu-icon">
                <div class="search-icon">
                  <i
                    class="fa fa-search"
                    id="searchicon"
                    aria-hidden="true"
                  ></i>
                </div>
                <div class="menu-icon">
                  <i
                    class="fa fa-bars burgur"
                    id="sidebarCollapse"
                    aria-hidden="true"
                  ></i>
                  <i class="fa fa-times cross" aria-hidden="true"></i>
                </div>
              </div>
              <div class="searchbar">
                <form action="">
                  <div class="searchbar-inner-wrapper">
                    <input type="text" class="search" placeholder="Search..." />
                    <div class="search-btn">
                      <button type="submit" class="search-submitbtn">
                        <i class="fa fa-search" aria-hidden="true"></i>
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
    <!-- Mobile Navigation  -->

    <!-- Scroll Navigation  -->
    <div class="scroll-navigation-bar">
      <div class="container">
        <div class="scroll-navigation-inner">
          <div class="scroll-left">
            <a href="./index.php"
              ><img src="./assets/images/footerlogo.png" alt=""
            /></a>
          </div>
          <div class="scroll-right">
            <div class="navigation-section-inner">
              <ul class="navul">
                <li class="aboutdropdown">
                  <a href="javascript:void(0)">About <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                  <!-- Submenu  -->
                  <div class="about-box">
                    <div class="content">
                      <div class="myrow">
                        <ul>
                          <li><a href="./about.php">About Company</a></li>
                          <li><a href="./brand.php">Our Brands</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Submenu  -->
                </li>
                <li class="mydropdownIocn productsdropdown">
                  <a href="javascript:void(0)">Products <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                  <!-- Submenu  -->
                  <div class="products-box">
                    <div class="content">
                      <div class="myrow">
                        <ul>
                          <li><a href="./turmeric.php">Turmeric</a></li>
                        <li><a href="./black_pepper.php">Black & White Pepper</a></li>
                        <li><a href="./ginger.php">Ginger</a></li>
                        <li>
                          <a href="./chillies.php">Chillies</a>
                        </li>
                        </ul>
                      </div>
                      <div class="myrow">
                        <ul>
                        <li>
                          <a href="./whole_spices.php">Whole spices</a>
                        </li>
                        <li><a href="./ground_spice.php">Ground Spices</a></li>
                        <li><a href="./mixed_spices.php">Mix spices-Whole</a></li>
                        <li><a href="./spices_blends.php">Spice Blends</a></li>  
                        </ul>
                      </div>
                      <div class="myrow">
                        <ul>
                        <li><a href="./tamarind.php">Tamarind Products</a></li>
                        <li><a href="./chana.php">Chana Products</a></li>
                        <li><a href="./jaggery.php">Jaggery Products</a></li>
                        <li>
                          <a href="./pappad.php">Pappad & Far Far Products</a>
                        </li>
                        <li><a href="./coconut.php">Coconut Products</a></li>
                        <li>
                          <a href="./rice.php">Rice</a>
                        </li>  
                        </ul>
                      </div>
                      <div class="myrow">
                        <ul>
                        <li><a href="./dry_fruits.php">Dry fruits & nuts</a></li>
                        <li>
                          <a href="./freshners.php">Mouth Freshners</a>
                        </li>
                        <li><a href="./grinders.php">Grinders</a></li>
                        <li><a href="./delicacy.php">Delicacies</a></li>
                        <li><a href="./miscellaneous.php">Miscellaneous products</a></li>
                        <li><a href="#" class="viewall">View All</a></li>         
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Submenu  -->
                </li>
                <li class="mydropdownIocn servicedropdown"><a href="javascript:void(0)">Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                 <!-- Submenu  -->
                 <div class="service-box">
                    <div class="content">
                      <div class="myrow">
                        <ul>
                          <li><a href="./services.php#turmericExport">Turmeric Export</a></li>
                          <li><a href="./services.php#spicefoodExport">Spice & Food Export</a></li>
                          <li><a href="./services.php#spiceprocessingBlendings">Spice Processing & Blending</a></li>
                          <li><a href="./services.php#servicePrivate">Private Label Packaging</a>
                        </li>
                        <li><a href="#">View All Services</a></li>
                        </ul>
                      </div>
                    </div>
                </div>
                  <!-- Submenu  -->
                </li>
                <li><a href="./infrastructure.php">Infrastructure</a></li>
                <li><a href="./sustainability.php">Sustainability</a></li>
                <li class="mydropdownIocn qualitydropdown"><a href="javascript:void(0)">Policies <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                   <!-- Submenu  -->
                   <div class="quality-box">
                    <div class="content">
                      <div class="myrow">
                        <ul>
                          <li><a href="./quality_policy.php">Quality Policy</a></li> 
                          <li><a href="./certificate.php">Certificates</a></li>                     
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Submenu  -->
                </li>
                <li><a href="./clients.php">Clients</a></li>
                <li><a href="./contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Scroll Navigation  -->

    <!-- Top Section  -->
    <div class="main-top-section">
      <div class="top-section-wrapper">
        <div class="container">
          <div class="top-section-inner-wrapper">
            <div class="top-section-left">
              <a href="./index.php"
                ><img src="./assets/images/logo.png" alt="logo"
              /></a>
            </div>
            <div class="top-section-right">
              <div class="top-address">
                <a href="mailto:info@nani.co.in" class="e-address"
                  ><i class="fa fa-envelope" aria-hidden="true"></i>
                  info@nani.co.in</a
                >
                <a href="tel:+914242217126"
                  ><i class="fa fa-phone" aria-hidden="true"></i> +91 4242 2171
                  26</a
                >
              </div>
              <div class="searchbar">
                <form action="">
                  <div class="searchbar-inner-wrapper">
                    <input type="text" class="search" placeholder="Search..." />
                    <div class="search-btn">
                      <button type="submit" class="search-submitbtn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="navigation-section-wrapper">
        <div class="container">
          <div class="navigation-section-inner">
            <ul class="navul mainnav">
            <li class="aboutdropdown">
                  <a href="javascript:void(0)">About <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                  <!-- Submenu  -->
                  <div class="about-box">
                    <div class="content">
                      <div class="myrow">
                        <ul>
                          <li><a href="./about.php">About Company</a></li>
                          <li><a href="./brand.php">Our Brands</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Submenu  -->
                </li>
              <li class="mydropdownIocn productsdropdown">
                <a href="javascript:void(0)">Products <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <!-- Submenu  -->
                <div class="products-box">
                  <div class="content">
                  <div class="myrow">
                        <ul>
                          <li><a href="./turmeric.php">Turmeric</a></li>
                        <li><a href="./black_pepper.php">Black & White Pepper</a></li>
                        <li><a href="./ginger.php">Ginger</a></li>
                        <li>
                          <a href="./chillies.php">Chillies</a>
                        </li>
                        </ul>
                      </div>
                      <div class="myrow">
                        <ul>
                        <li>
                          <a href="./whole_spices.php">Whole spices</a>
                        </li>
                        <li><a href="./ground_spice.php">Ground Spices</a></li>
                        <li><a href="./mixed_spices.php">Mix spices-Whole</a></li>
                        <li><a href="./spices_blends.php">Spice Blends</a></li>  
                        </ul>
                      </div>
                      <div class="myrow">
                        <ul>
                        <li><a href="./tamarind.php">Tamarind Products</a></li>
                        <li><a href="./chana.php">Chana Products</a></li>
                        <li><a href="./jaggery.php">Jaggery Products</a></li>
                        <li>
                          <a href="./pappad.php">Pappad & Far Far Products</a>
                        </li>
                        <li><a href="./coconut.php">Coconut Products</a></li>
                        <li>
                          <a href="./rice.php">Rice</a>
                        </li>  
                        </ul>
                      </div>
                      <div class="myrow">
                        <ul>
                        <li><a href="./dry_fruits.php">Dry fruits & nuts</a></li>
                        <li>
                          <a href="./freshners.php">Mouth Freshners</a>
                        </li>
                        <li><a href="./grinders.php">Grinders</a></li>
                        <li><a href="./delicacy.php">Delicacies</a></li>
                        <li><a href="./miscellaneous.php">Miscellaneous products</a></li> 
                        <li><a href="#" class="viewall">View All</a></li>         
                        </ul>
                      </div>
                  </div>
                </div>
                <!-- Submenu  -->
              </li>
              <li class="mydropdownIocn servicedropdown"><a href="javascript:void(0)">Services <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                 <!-- Submenu  -->
                 <div class="service-box">
                    <div class="content">
                      <div class="myrow">
                        <ul>
                          <li><a href="./services.php#turmericExport">Turmeric Export</a></li>
                          <li><a href="./services.php#spicefoodExport">Spice & Food Export</a></li>
                          <li><a href="./services.php#spiceprocessingBlendings">Spice Processing & Blending</a></li>
                          <li><a href="./services.php#servicePrivate">Private Label Packaging</a>
                        </li>
                        <li><a href="#">View All Services</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                  <!-- Submenu  -->
                </li>
              <li><a href="./infrastructure.php">Infrastructure</a></li>
              <li><a href="./sustainability.php">Sustainability</a></li>
              <li class="mydropdownIocn qualitydropdown"><a href="javascript:void(0)">Policies <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                   <!-- Submenu  -->
                   <div class="quality-box">
                    <div class="content">
                      <div class="myrow">
                        <ul>
                          <li><a href="./quality_policy.php">Quality Policy</a></li> 
                          <li><a href="./certificate.php">Certificates</a></li>                     
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- Submenu  -->
                </li>
              <li><a href="./clients.php">Clients</a></li>
              <li><a href="./contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Navigation Section  -->