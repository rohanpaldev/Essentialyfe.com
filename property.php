<?php
$real_id = $_POST["real_id"];
$servername = "localhost";
$username = "ybuhphmy_prp";
$password = "f}@o{^a3=x$L";

try {
  $conn = new PDO("mysql:host=$servername;dbname=ybuhphmy_properties", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


    $stmt = $conn->prepare("SELECT * FROM properties WHERE id=$real_id");
    $stmt->execute();
     
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
                        $real_name = $result[name];
                        $real_address = $result[address];
                        $real_area = $result[area];
                        $real_price = $result[price];
                        $real_guest = $result[guest];
                        $real_bedroom = $result[bedroom];
                        $real_bathroom = $result[bathroom];
                        $real_sqft = $result[sqft];
                        $real_description = $result[description];
                        $real_image = $result[image];
                        $real_vacation = $result[vacation];
                        $real_venue = $result[venue];
                        $real_film = $result[film];
                        $real_ltfr = $result[ltfr];
                        $real_pool = $result[pool];
                        $real_time = $result[reg_date];
              
                  
                 
}

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title><?php echo $real_name;?> | EssentiaLyfe</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <script src="https://kit.fontawesome.com/f9c6d5c7a6.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="page">
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand logo1" href="index.php"><img src="images/logo-default-450x37.png" alt="" width="225" height="18"/></a>
                    <a class="brand logo2" href="index.php"><img src="images/logo2.png" alt="" width="225" height="18"/></a>
                  </div>
                </div>
              <div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-body mobile-contact-info">
                          <a class="link-phone"><small style="font-size:10px; margin-bottom:-10px;">Call us now:</small><br>+1 855-701-2725</a>
                        </div>
                         <div class=" ">
                        <a class="text-lowercase" href="mailto:info@essentialyfe.com"><small style="font-size:10px; margin-bottom:-10px;"  class="text-uppercase">Email:</small><br>info@essentialyfe.com</a>
                      </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
        <ul class="rd-navbar-nav">
                  <li class="rd-nav-item">
                    <a class="rd-nav-link mobile-center-links" href="vacation-rentals.php">Vacation Rentals</a>
                  </li><span id="nav-link-spacer">&bull;</span>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="event-venues.php">Event Venues</a>
                  </li><span id="nav-link-spacer">&bull;</span>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="film-locations.php">Film Locations</a>
                  </li><span id="nav-link-spacer">&bull;</span>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="long-term-rentals">Long Term Rentals</a>
                  </li><span id="nav-link-spacer">&bull;</span>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="cars.php">Cars</a>
                  </li><span id="nav-link-spacer">&bull;</span>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="services.php">Services</a>
                  </li><span id="nav-link-spacer">&bull;</span>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">About Us</a>
                  </li><span id="nav-link-spacer">&bull;</span>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="contact.php">Contact Us</a>
                </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
    <div class="container" style="margin: ` ; padding-bottom:10px; padding-top:70px;">
        <div>

            <h5 class="product-big-title" style="line-height:35px; text-align:left; margin-left:6%;"><?php echo $real_name;?><small><?php echo $real_area;?> </small></h5><br>
    

     <div class="btn-group" role="group" style="float:right; margin-right:5%;">
        <button class="button button-black-outline button-md" style="margin-top:-76px; background:white; width:55px; height:50px; margin-right:-2px;"><i class="fa-solid fa-share-nodes"></i> Share</button>
        <button class="button button-black-outline button-md" style="margin-top:-76px; background:white;  width:55px; height:50px; margin-right:-2px">Book Now</button>
        <button class="button button-black-outline button-md" style="margin-top:-76px; background:white; margin-right:5%;  width:55px; height:50px;"><i class="fa-solid fa-bookmark"></i> Save</button></div>

   
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $real_image;?>" alt="First slide" style="height:400px; object-fit: cover; opacity:0.9; padding:2px; border:2px solid black;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $real_image;?>" alt="Second slide" style="height:400px; object-fit: cover; opacity:0.9; padding:2px; border:2px solid black;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $real_image;?>" alt="Third slide" style="height:400px; object-fit: cover; opacity:0.9; padding:2px; border:2px solid black;">
    </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $real_image;?>" alt="Fourth slide" style="height:400px; object-fit: cover; opacity:0.9; padding:2px; border:2px solid black;">
    </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $real_image;?>" alt="Fifth slide" style="height:400px; object-fit: cover; opacity:0.9; padding:2px; border:2px solid black;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
        <div class="property-info-container" style="text-align:left; padding-top:30px; padding-bottom:5px;">
            <div class="product-big-title" style="color:#97a3b9; font-size:13px; ">
            <span></span>
                                    <a class="button button-black-outline button-ujarak" href="contact.php" style="float:right; margin-top:10px;">Starting at <?php echo $real_price; ?> Per Night</a>
            <i>
                        
                  <div class="product-big-rating" style="width:230px; margin-bottom:10px; margin-top:5px;"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span><a class="product-big-reviews" style="float:right; margin-top:2px;" href="">4 customer reviews</a></div>
                      </div>            <p style="text-align:left; margin-top:12px; padding-bottom:13px; font-weight:600; font-size:15px; color:#151515;"><span style="padding-right:25px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="width:20px; margin-bottom:5px; margin-right:5px;"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M176 288C220.1 288 256 252.1 256 208S220.1 128 176 128S96 163.9 96 208S131.9 288 176 288zM544 128H304C295.2 128 288 135.2 288 144V320H64V48C64 39.16 56.84 32 48 32h-32C7.163 32 0 39.16 0 48v416C0 472.8 7.163 480 16 480h32C56.84 480 64 472.8 64 464V416h512v48c0 8.837 7.163 16 16 16h32c8.837 0 16-7.163 16-16V224C640 170.1 597 128 544 128z"/></svg> <?php echo $real_bedroom; ?> Bedrooms</span> <span style="padding-right:25px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:20px; margin-bottom:5px; margin-right:5px;"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M32 384c0 28.32 12.49 53.52 32 71.09V496C64 504.8 71.16 512 80 512h32C120.8 512 128 504.8 128 496v-15.1h256V496c0 8.836 7.164 16 16 16h32c8.836 0 16-7.164 16-16v-40.9c19.51-17.57 32-42.77 32-71.09V352H32V384zM496 256H96V77.25C95.97 66.45 111 60.23 118.6 67.88L132.4 81.66C123.6 108.6 129.4 134.5 144.2 153.2C137.9 159.5 137.8 169.8 144 176l11.31 11.31c6.248 6.248 16.38 6.248 22.63 0l105.4-105.4c6.248-6.248 6.248-16.38 0-22.63l-11.31-11.31c-6.248-6.248-16.38-6.248-22.63 0C230.7 33.26 204.7 27.55 177.7 36.41L163.9 22.64C149.5 8.25 129.6 0 109.3 0C66.66 0 32 34.66 32 77.25v178.8L16 256C7.164 256 0 263.2 0 272v32C0 312.8 7.164 320 16 320h480c8.836 0 16-7.164 16-16v-32C512 263.2 504.8 256 496 256z"/></svg> <?php echo $real_bathroom; ?> Bathrooms</span> <span style="padding-right:25px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="width:20px; margin-bottom:5px; margin-right:5px;"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z"/></svg> <?php echo $real_guest; ?> Guests</span> <span style="padding-right:25px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:20px; margin-bottom:5px; margin-right:5px;"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"/></svg> <?php echo $real_sqft; ?> Sq. Ft.</span></p><br>
            <p style="text-align:left; font-size:15px; font-style: normal;"><?php echo $real_description; ?>
</span></p><br><hr>
    <div class="row">
        <div class="col-md-12" style="padding-bottom:40px;">
            <div style='float:right;width:500px;height:100%; margin-right:10px; object-fit: cover; padding:2px;'/>
      <p class="title-classic-text">Request a Date</p><br>
                <div class="form-wrap">
                 
                         <label class="form-label" for="contact-your-name-2">Full Name</label>
                  <input class="form-input" id="contact-your-name-2" type="email" name="name" data-constraints="@Required"></div>
                  <div class="form-wrap">
                  <label class="form-label" for="contact-your-name-2">Email</label>
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                  </div>
                  <div class="form-wrap">
                  <label class="form-label" for="contact-your-name-2">Phone</label>
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required"></div>
                  <div class="form-wrap">
                  <label class="form-label" for="contact-your-name-2">Number of Guests</label>
                  <input class="form-input" id="contact-your-name-2" type="number" name="name" data-constraints="@Required"></div>
                  <div class="form-wrap">
                  <label class="form-label" for="contact-your-name-2">Check-In Date</label>
                  <input class="form-input" id="contact-your-name-2" type="number" name="name" data-constraints="@Required"></div>
                  <div class="form-wrap">
                  <label class="form-label" for="contact-your-name-2">Check-Out Date</label>
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required"></div>
                     <button class="button button-primary button-pipaluk" type="submit" style="width:100%;">Send</button>
             
          
              
            </div>
            <p style="text-align:left; width:600px; font-style: normal;"><b>General Rules:</b><br><br><b>1.</b> We respect our neighbors and ask you to keep the music outdoors lowwered between 8pm-8am.<br><br><b>2.</b> Smoking is allowed only outside by the firepit only. No smoking inside the premises nor the balconies is allowed. This includes, but not limited to: tobacco, marijuana, any other substances.<br><br><b>3.</b> We offer 4 free parking spot on premisis. However, there is plenty of free street parking.</p><br>
            <ul style="text-align:left;">
                <li>&#65121; All ages are allowed</li>
                <li>&#65121; Furniture and decorations may be moved</li>
                <li>&#65121; Security cameras and recording devices may be available</li>
            </ul>
        </div>
                <div class="col-md-12" style="padding-bottom:40px;"><hr><div style="margin-top:40px;"></div>
            <img style='float:right;width:500px;height:300px; margin-right:10px; object-fit: cover; padding:2px; border:2px solid black;' src="https://bufferwall.com/download/B20190923T000000374_1200x600.jpg" />
            <p style="text-align:left; width:600px;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><br>
            <ul style="text-align:left;">
                <li>&#65121; 30 mins drive - International Airport</li>
                <li>&#65121; 28 mins drive - Executive Airport</li>
                <li>&#65121; 13 mins drive - Municipal Airport</li>
                <li>&#65121; 40 mins drive - South Beach</li>
                <li>&#65121; 27 mins drive - Terrace Public Beach</li>
            </ul>
        </div>
    </div><hr>
    
    
    
    <!--	Instagrram wondertour-->

<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4" style="background-color:white;">


<div class="container-fluid">
<br>

<h6 class="gallery-title">View More Properties</h6>


<!-- Owl Carousel-->


<div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">


<!-- Thumbnail Classic-->


<article class="thumbnail thumbnail-mary">


<a href="property.php"><div class="thumbnail-mary-figure"><img src="http://essentialyfe.com/images/gh.jpg" alt="" width="270" style="min-height:160px; max-height:160px; object-fit: cover;"/></a>


</div>




</article>


<!-- Thumbnail Classic-->


<article class="thumbnail thumbnail-mary">


<a href="property.php"><div class="thumbnail-mary-figure"><img src="http://essentialyfe.com/images/vh.jpg" alt="" width="270" style="min-height:160px; max-height:160px; object-fit: cover;"/></a>


</article>


<!-- Thumbnail Classic-->


<article class="thumbnail thumbnail-mary">


<a href="property.php"><div class="thumbnail-mary-figure"><img src="http://essentialyfe.com/images/8.jpg" alt="" width="270" style="min-height:160px; max-height:160px; object-fit: cover;"/></a>


</article>


<!-- Thumbnail Classic-->


<article class="thumbnail thumbnail-mary">


<a href="property.php"><div class="thumbnail-mary-figure"><img src="http://essentialyfe.com/images/9.jpg" alt="" width="270" style="min-height:160px; max-height:160px; object-fit: cover;"/></a>


</article>


<!-- Thumbnail Classic-->


<article class="thumbnail thumbnail-mary">


<a href="property.php"><div class="thumbnail-mary-figure"><img src="http://essentialyfe.com/images/7.jpg" alt="" width="270" style="min-height:160px; max-height:160px; object-fit: cover;"/></a>


</article>


<!-- Thumbnail Classic-->


<article class="thumbnail thumbnail-mary">


<a href="property.php"><div class="thumbnail-mary-figure"><img src="http://essentialyfe.com/images/image_2021-08-11_090738.png" alt="" width="270" style="min-height:160px; max-height:160px; object-fit: cover;"/></a>


</article>


<!-- Thumbnail Classic-->


<article class="thumbnail thumbnail-mary">


<a href="property.php"><div class="thumbnail-mary-figure"><img src="http://essentialyfe.com/images/2.jpg" alt="" width="270" style="min-height:160px; max-height:160px; object-fit: cover;"/></a>


</article>


</div>


</div>


</section><br>
    
        </div>
    </div>
     <!--subscribe newsletetter start-->
    <div class="container-fluid subscribe_container">
      <div class="row pt-5">
        <div class="col-4 offset-2">
        <h3 class=" text-white" id="subscribe_head">Subscribe to our Newsletter</h3>
              <!-- <p class="text-white " id="subscribe_text">Subscribe newsletter to get updated</p> -->
        </div>
        <div class="col-4">
          <form action="" method="POST">
            <div class="input-group">
              <input type="email" placeholder="Subscribe your news letter" class="form-control subscribe_input" id="subscribe" name="subscribe">
              <div class="input-group-btn">
                <button class="subscribe_btn" type="submit">Subscribe</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--subscribe newsletter end-->
     <!-- Page Footer-->
    
     <footer class="section footer-corporate context-dark">
      <div class="footer-corporate-inset">
        <div class="container">
          <div class="row row-40 justify-content-lg-between">
                 <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInRight" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase"><img src="images/logo1.png" width="200px"></h6><br>
                  <ul class="list-inline list-inline-sm footer-social-list-2 footer-links">
                    <li><a class="icon fa fa-facebook" href="https://www.facebook.com/EssentiaLyfe-106484414382866/"></a></li>
                    <li><a class="icon fa fa-twitter" href="https://twitter.com/Essentialyfe2"></a></li>
                    <li><a class="icon fa fa-linkedin" href="https://www.linkedin.com/company/42762466"></a></li>
                    <li><a class="icon fa fa-instagram" href="https://www.instagram.com/essentialyfe_/"></a></li>
                    <li><a class="icon fa fa-youtube" href="https://www.youtube.com/channel/UCPtwluXjJbKLDva9E289eDg"></a></li>
                    <li><a class="icon fa fa-pinterest" href="https://www.pinterest.com/0m0yut4g235odzk7zzdrxpf69teykj/"></a></li>
                  </ul>
                       <div class="group-md group-middle justify-content-sm-start"><img src="images/EssentiaLyfe-QR-Code.png" width="75px"><img src="https://tetonhabitat.org/wp-content/uploads/2018/01/equal-housing-opportunity-logo-vector.white_.png" width="75px"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInDown" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                  <ul class="footer-contacts d-inline-block d-sm-block footer-link-hover">
                    <li>
                      <div class="unit">
                        <div class="unit-left"></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+1 855-701-2725</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"></div>
                        <div class="unit-body"><a class="link-aemail" href="mailto:#">info@essentialyfe.com</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"></div>
                        <div class="unit-body"><a class="link-location" href="#"><small style="font-size:12px; margin-bottom:-22px;"><i>Home Office:</i></small><br>7969 Melrose Ave, West Hollywood, CA 90046</a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInLeft" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                  <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2 footer-link-hover">
                    <li class=""><a href="index.php">Home</a></li>
                    <li><a href="vacation-rentals.php">Vacation Rentals</a></li>
                    <li><a href="event-venues.php">Event Venues</a></li>
                    <li><a href="film-locations.php">Film Locations</a></li>
                    <li><a href="cars.php">Cars</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="guest-form.php">Guest Form</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="ambassador-program.php">Ambassador Program</a></li>
                    <li><a href="list-your-property.php">List Your Property</a></li>
                    <li><a href="join.php">Join Our Team</a></li>
                       <li><a href="privacy-policy.php">Privacy Policy</a></li>
                      <li><a href="terms-of-use.php">Terms Of Use</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-corporate-bottom-panel">
        <div class="container">
          <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2" style="padding:15px;">
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span>EssentiaLyfe, Inc. - All Rights Reserved. Designed and Powered by EssentiaLyfe, Inc. All photos are property of EssentiaLyfe, Inc., or used with permission of owners. Photos may not be used for any other purpose without written consent from EssentiaLyfe, Inc.</p>
            </div>
          </div>
        </div>
    
    </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
<script type="text/javascript">// <![CDATA[
function ShowHide(divId)
{
if(document.getElementById(divId).style.display == 'none')
{
document.getElementById(divId).style.display='block';
}
else
{
document.getElementById(divId).style.display = 'none';
}
}
// ]]></script>
  </body>
</html>