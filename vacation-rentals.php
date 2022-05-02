<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
require('./config.php');
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Vacation Rentals | EssentiaLyfe</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="./images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="page">
      <?php require('header.php'); ?>
      
           <!-- Breadcrumbs -->
           <section class="breadcrumbs-custom-inset">
            <div class="breadcrumbs-custom context-dark bg-overlay-60">
              <div class="container">
                <h2 class="breadcrumbs-custom-title">Vacation Rentals</h2>
                <ul class="breadcrumbs-custom-path">
                  <li>Beautiful rentals for any occasion</li>
                </ul>
              </div>
              <div class="box-position" style="background-image: url(images/PCM1QjFQ.jpeg);"></div>
            </div>
          </section>

          <!-- Card Deck -->
            <div class="card-deck-container">
              <div class="card-deck">
                  
                  
                      <?php
  $query = "SELECT * FROM properties WHERE vacation='on'";
  $result = mysqli_query($conn, $query);
  while ($res = mysqli_fetch_assoc($result)) {


     echo "  
    <div class='w-25 d-none d-sm-block'>
         <div class='card mb-4' style='margin-top:20px;'>
          <form method='post' action='property.php'><a href='contact.php'>
                    <div class='card-img-caption'>
                    <img src='https://www.essentialyfe.com/images/properties/$res[file]' class='card-img-top' alt='$res[alttext]'>
                    </div>
                    <div class='card-body'>
                      <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $res[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$res[area]</small></h5><hr><br>
                      <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                       <ul>
                        <li>&#8226 Up to $res[guest] Guests</li>
                        <li>&#8226 $res[bedroom] Bedrooms</li>
                        <li>&#8226 $res[bathroom] Baths</li>
                        <li>&#8226 $res[sqft] Sq. Ft.</li>
                      </ul>
                      </div>
                         <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $res[price] Per Night</b></p>
                      <input type='text' name='real_id' value='$res[id]' style='display:none;'>
                      
                  </div><input value='Starting at $res[price] Per Night' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
                  </div></a></div>";
}
    ?>
                  
              </div>
              </div>
  <!--subscribe newsletetter start-->
    <?php require('footer.php'); ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>