<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php 
require('./config.php');

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=ybuhphmy_properties", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

$daterange = $_POST['daterange'];
$stay = $_POST['stay'];
$search = $_POST['search'];
$pool = $_POST['pool'];
$Location =$_POST['Location'];
$Capacity =$_POST['Capacity'];
if (isset($Capacity)) {
  $value = explode('-', $Capacity);
  // print_r($value);
  // die();
}

if(isset($pool))
{
  $sql = $conn->prepare("
    SELECT * FROM properties WHERE 
    ".$_SESSION['stay'] ."='on' AND 
    area LIKE '%" . $_SESSION['Location'] . "%' AND 
    pool = 'Y' AND
    guest BETWEEN " . $_SESSION['value'][0] .  " AND  " . $_SESSION['value'][1] . "
    ");
    $sql->execute();
}elseif(isset($search))
{
  $_SESSION['stay'] = $stay ;
  $_SESSION['Location'] = $Location;
  $_SESSION['value'] = $value;

  $sql = $conn->prepare("
    SELECT * FROM properties WHERE 
    ".$stay."='on' AND 
    area LIKE '%" . $Location . "%' AND 
    guest BETWEEN " . $value[0] .  " AND  " . $value[1] . "
    ");
    $sql->execute();
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>EssentiaLyfe | Official Website</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <div class="page">
    <?php require('header.php'); ?>
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="12000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
      <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark" data-slide-bg="images/slider4.jpeg">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">A team of certified professionals</h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Trust</span><span class="font-weight-bold"> Our Experience</span></h2><a class="button button-default-outline button-ujarak" href="contact" data-caption-animate="fadeInLeft" data-caption-delay="0"><b>Get In Touch</b></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="images/Q1KwYEjw.jpeg">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Providing memorable experiences</h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Results That</span><span class="font-weight-bold"> Move You</span></h2><a class="button button-default-outline button-ujarak" href="contact" data-caption-animate="fadeInLeft" data-caption-delay="0"><b>Get In Touch</b></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="images/_kKGR_5c.jpeg">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">We help you find your dream property</h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Bringing Your</span><span class="font-weight-bold"> Dreams Home</span></h2><a class="button button-default-outline button-ujarak" href="contact" data-caption-animate="fadeInLeft" data-caption-delay="0"><b>Get In Touch</b></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination"></div>
    </section>
    <!-- Section Box Categories-->
    <section class="section section-lg section-top-1 bg-gray-4">
      <div class="container offset-negative-1">
        <div class="box-categories cta-box-wrap">
          <div class="box-categories-content">
            <div class="row justify-content-center">
              <div class="col-md-3 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="vacation-rentals"><img src="images/slider-1.jpeg" alt="" style="border:5px solid white; border-radius:2px;" /></a>
                    <h5 class="box-categories-title">Vacation Rentals</h5>
                  </li>
                </ul>
              </div>
              <div class="col-md-3 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="event-venues"><img src="images/_RVJs3Jw.jpeg" alt="" style="border:5px solid white; border-radius:2px;" /></a>
                    <h5 class="box-categories-title">Event Venues</h5>
                  </li>
                </ul>
              </div>
              <div class="col-md-3 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="film-locations"><img src="images/5lp3Jkg8.jpeg" alt="" style="border:5px solid white; border-radius:2px;" /></a>
                    <h5 class="box-categories-title">Film Locations</h5>
                  </li>
                </ul>
              </div>
              <div class="col-md-3 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="long-term-rentals"><img src="images/IT3Iodio.jpeg" alt="" style="border:5px solid white; border-radius:2px;" /></a>
                    <h5 class="box-categories-title">Long Term Rentals</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><a class="link-classic wow fadeInUp" href="services">Learn More<span></span></a>
        <!-- Owl Carousel-->
      </div>
      <div>
        <?php require('search.php');
        
        
        if(isset($search) || isset($pool))
        {
          echo "
          <div class='card-deck-container'>
          <div class='card-deck'>
          ";

          if ($result = $sql->fetch()) {
          
            do{

              echo "  
            <div class='w-25 d-none d-sm-block'>
              <div class='card mb-4' style='margin-top:20px;'>
                  <form method='post' action='property.php'><a href='contact.php'>
                          <div class='card-img-caption'>
                              <img src='https://www.essentialyfe.com/images/properties/$result[image]' class='card-img-top' alt='...'>
                          </div>
                          <div class='card-body'>
                              <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $result[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$result[area]</small></h5>
                              <hr><br>
                              <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                                  <ul>
                                      <li>&#8226 Up to $result[guest] Guests</li>
                                      <li>&#8226 Up to $result[guest] Attendees</li>
                                      <li>&#8226 $result[bedroom] Bedrooms</li>
                                      <li>&#8226 $result[bathroom] Baths</li>
                                      <li>&#8226 $result[sqft] Sq. Ft.</li>
                                  </ul>
                              </div>
                              <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $$result[price] Per Night</b></p>
                              <input type='text' name='real_id' value='$result[id]' style='display:none;'>
          
                          </div><input value='Starting at $result[price] Per Event' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
              </div></a>
            </div>";
            }while ($result = $sql->fetch());
            }else
            {
              echo "<h4 style='margin: revert;'>No Result Found</h4>";
            }
          }

          echo "
          </div>
          </div>
          ";
          ?>
      </div>
    </section>
    <!-- Discover New Horizons-->
    <section class="section section-sm section-first bg-default text-md-left">
      <div class="container">
        <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
          <div class="col-lg-6 text-center wow fadeInUp"><img src="images/L6pNiaZY.jpeg" alt="" width="556" height="382" />
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
            <div class="box-width-lg-470">
              <h3>Make Any Occasion Unforgettable</h3>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">About us</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Why choose us</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab">Our mission</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-7-1">
                    <p>EssentiaLyfe is a luxury home rentals service in Southern California, providing the finest homes & exotic cars.
                      We focus on villas and unique estates for luxury vacation rentals, events and film productions.</p>
                    <div class="group-md group-middle"><a class="button button-secondary button-md" href="contact">Get in Touch</a><a class="button button-black-outline button-md" href="about">Read More</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-7-2">
                    <p>EssentiaLyfe is a luxury home rentals service in Southern California, providing the finest homes & exotic cars.
                      We focus on villas and unique estates for luxury vacation rentals, events and film productions.</p>
                    <div class="group-md group-middle"><a class="button button-secondary button-md" href="contact">Get in Touch</a><a class="button button-black-outline button-md" href="about">Read More</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-7-3">
                    <p>EssentiaLyfe is a luxury home rentals service in Southern California, providing the finest homes & exotic cars.
                      We focus on villas and unique estates for luxury vacation rentals, events and film productions.</p>
                    <div class="group-md group-middle"><a class="button button-secondary button-md" href="contact">Get in Touch</a><a class="button button-black-outline button-md" href="about">Read More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--	Our Services-->
    <section class="section section-sm">
      <div class="container">
        <h3>Our Services</h3>
        <div class="row row-30">
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 20 20" style="width:70px; height:40px;">
                    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                  </svg>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="services">Event Management</a></h5>
                  <p class="box-icon-classic-text">EssentiaLyfe takes pride with managing your event.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 20 20" style="width:70px; height:40px;">
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                  </svg>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="services">Event Planning</a></h5>
                  <p class="box-icon-classic-text">Striving to provide our customers with all possible conveniences and amenities, we organize all types of events, small private dinners to full-fledged luxury wedding celebrations.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 20 20" style="width:70px; height:40px;">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                  </svg>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="services">Event Sponsorship Brokerage</a></h5>
                  <p class="box-icon-classic-text">One of our specialy departments is finding sponsors for big corporate events.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 20 20" style="width:70px; height:40px;">
                    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                    <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                  </svg>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="services">Security Services</a></h5>
                  <p class="box-icon-classic-text">EssentiaLyfe works with top military security services to protect your loved ones and to ensure your event goes as smooth as possible.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 20 20" style="width:70px; height:40px;">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                  </svg>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="services">Shuttle & Valet Services</a></h5>
                  <p class="box-icon-classic-text">Essntialyfe will happily provide and coordinate your guests access and assist with professional shuttle or valet services.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 20 20" style="width:70px; height:40px;">
                    <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                  </svg>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="services">Event Cleaning</a></h5>
                  <p class="box-icon-classic-text">In addition to our pre and post event cleaning 5-star service, EssentiaLyfe provides professional Event Cleaners for your events.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>


    <!-- Counter Classic-->
    <section class="section section-fluid bg-default">
      <div class="parallax-container" data-parallax-img="images/properties/1814Marcheeta-mls-b.jpg">
        <div class="parallax-content section-xl context-dark bg-overlay-26">
          <div class="container">
            <div class="row row-50 justify-content-center border-classic">
              <div class="col-sm-6 col-md-5 col-lg-3">
                <div class="counter-classic">
                  <p style="font-size:18px;">Over</p>
                  <div class="counter-classic-number"><span class="counter">250</span>
                  </div>
                  <h5 class="counter-classic-title">Properties Under Management</h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3">
                <div class="counter-classic">
                  <p style="font-size:18px;">Over</p>
                  <div class="counter-classic-number"><span class="counter!">1,000</span>
                  </div>
                  <h5 class="counter-classic-title">Rentals Completed</h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3">
                <div class="counter-classic">
                  <div class="counter-classic-number"><span class="counter!">4.7</span>
                  </div>
                  <h5 class="counter-classic-title">Customer & Homeowner Satisfaction</h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3">
                <div class="counter-classic">
                  <p style="font-size:18px;">Over</p>
                  <div class="counter-classic-number"><span class="counter">20+</span>
                  </div>
                  <h5 class="counter-classic-title">Years of experience</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Hot tours-->
    <section class="section section-sm bg-default">
      <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Our Properties</span></h3>
        <div class="row row-sm row-40 row-md-50">
          <div class="col-sm-6 col-md-12 wow fadeInRight">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left"><a class="product-big-figure" href="vacation-rentals"><img src="images/image_2021-08-11_090738.png" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="vacation-rentals">The Dream House</a> <small>Hollywood Hills, CA</small></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="vacation-rentals">4 customer reviews</a>
                    </div>
                    <p class="product-big-text">This 5,000 sq. ft. mansion is perfect for films, photo-shoots, lavish dinners, cocktail parties, baby-showers, lectures, seminars, holistic retreats, birthdays, weddings, Bar/Bat Mitzvahs, Masquerade Parties, charity events, pop-up store, product launch and other private events and gatherings.</p><a class="button button-black-outline button-ujarak" href="vacation-rentals">Learn More</a>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-12 wow fadeInLeft">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left"><a class="product-big-figure" href="vacation-rentals"><img src="images/o-XxiYLI.jpeg" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="vacation-rentals">The Gayle House</a> <small>Los Angeles, CA</small></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="vacation-rentals">5 customer reviews</a>
                    </div>
                    <p class="product-big-text">This 5,000 sq. ft. mansion is perfect for films, photo-shoots, lavish dinners, cocktail parties, baby-showers, lectures, seminars, holistic retreats, birthdays, weddings, Bar/Bat Mitzvahs, Masquerade Parties, charity events, pop-up store, product launch and other private events and gatherings.</p><a class="button button-black-outline button-ujarak" href="vacation-rentals">Learn More</a>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section><br>
  <!--subscribe newsletetter start-->
<?php require('footer.php'); ?>

  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script>
    $(document).ready(function() {
      $(function() {
        $('input[name="daterange"]').daterangepicker({
        //   "startDate": "21/04/2022",
        //   "endDate": "11/05/2022",
          opens: 'center',
          locale: {
            format: 'DD/MM/YYYY'
          }
        });
      });
    });
    
  document.querySelector(`.checkInOut`).addEventListener(`click`, function(){
  document.querySelector(`.inputCheckInOut`).click()
  document.querySelector(`.checkInOut`).innerHTML = document.querySelector(`.inputCheckInOut`).value
})
  </script>
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>

</html>