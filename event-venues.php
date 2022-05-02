<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
require('./config.php');

$search = $_POST['search'];
$House_style = $_POST['House_style'];
// $Country = $_POST['Country']; 
$Location = $_POST['Location'];
$Capacity = $_POST['Capacity'];
if (isset($Capacity)) {
  $value = explode('-', $Capacity);
  // print_r($value);
  // die();
}
$View  = $_POST['View'];
$Pool  = $_POST['Pool'];
$Parking  = $_POST['Parking'];
$Price  = $_POST['Price'];
// $Style = $_POST['Style'];
// $Bedrooms = $_POST['Bedrooms'];



?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Event Venues | EssentiaLyfe</title>
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
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
      <div class="breadcrumbs-custom context-dark bg-overlay-60">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Event Venues</h2>
          <ul class="breadcrumbs-custom-path">
            <li>Ideal spaces for any gatherings</li>
          </ul>
        </div>
        <div class="box-position" style="background-image: url(images/npXyqDP0.jpeg);"></div>
      </div>
    </section>
    <?php
    require('./search_venues.php');
    ?>
    <!-- Card Deck -->
    <div class="card-deck-container">
      <div class="card-deck">



        <?php

        if (isset($search)) {

          $query ="
          SELECT * FROM properties WHERE 
          venue='on' AND 
          area LIKE '%" . $Location . "%' AND 
          pool IN " . $Pool . " AND 
          guest BETWEEN " . $value[0] .  " AND  " . $value[1] . "
          ";
          // echo $sql;
       $result = mysqli_query($conn, $result);
          if ($res = mysqli_fetch_assoc($result)) {

            do {

              echo "  
            <div class='w-25 d-none d-sm-block'>
              <div class='card mb-4' style='margin-top:20px;'>
                  <form method='post' action='property.php'><a href='contact.php'>
                          <div class='card-img-caption'>
                              <img src='https://www.essentialyfe.com/images/properties/$res[file]' class='card-img-top' alt='...'>
                          </div>
                          <div class='card-body'>
                              <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $res[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$res[area]</small></h5>
                              <hr><br>
                              <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                                  <ul>
                                      <li>&#8226 Up to $res[guest] Guests</li>
                                      <li>&#8226 Up to $res[guest] Attendees</li>
                                      <li>&#8226 $res[bedroom] Bedrooms</li>
                                      <li>&#8226 $res[bathroom] Baths</li>
                                      <li>&#8226 $res[sqft] Sq. Ft.</li>
                                  </ul>
                              </div>
                              <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $res[price] Per Night</b></p>
                              <input type='text' name='real_id' value='$res[id]' style='display:none;'>
          
                          </div><input value='Starting at $res[price] Per Event' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
              </div></a>
            </div>";
            } while ($res = mysqli_fetch_assoc($result));
          } else {
            echo "<h4 style='margin: revert;'>No Result Found</h4>";
          }
          //".number_format($result['price'])."
        } else {


          // $stmt = $conn->prepare("SELECT * FROM properties WHERE venue='on'");
          // $stmt->execute();
          // while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $query = "SELECT * FROM properties WHERE venue='on";
            $result = mysqli_query($conn, $query);
            while ($res = mysqli_fetch_assoc($result)) {


            echo "  
            <div class='w-25 d-none d-sm-block'>
              <div class='card mb-4' style='margin-top:20px;'>
                  <form method='post' action='property.php'><a href='contact.php'>
                          <div class='card-img-caption'>
                              <img src='https://www.essentialyfe.com/images/properties/$res[image]' class='card-img-top' alt='...'>
                          </div>
                          <div class='card-body'>
                              <h5 class='card-title' style='line-height:20px; padding-bottom:20px;'> $res[name] <br><small class='text-muted' style='font-size:14px; margin-top:-18px;'><br>$res[area]</small></h5>
                              <hr><br>
                              <div class='card-text' style='text-align:left; font-size:14px; line-height:25px;'>
                                  <ul>
                                      <li>&#8226 Up to $res[guest] Guests</li>
                                      <li>&#8226 Up to $res[guest] Attendees</li>
                                      <li>&#8226 $res[bedroom] Bedrooms</li>
                                      <li>&#8226 $res[bathroom] Baths</li>
                                      <li>&#8226 $res[sqft] Sq. Ft.</li>
                                  </ul>
                              </div>
                              <p style='float:right; margin-bottom:5px; margin-top:-22px; font-size:12.5px;'><b>Starting at $res[price] Per Night</b></p>
                              <input type='text' name='real_id' value='$res[id]' style='display:none;'>
          
                          </div><input value='Starting at $res[price] Per Event' type='submit' class='btn btn-purple' style='display:none; width:100%; font-size:14px;'></form>
              </div></a>
            </div>";
          }
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

    document.querySelector(`.checkInOut`).addEventListener(`click`, function() {
      document.querySelector(`.inputCheckInOut`).click()
      document.querySelector(`.checkInOut`).innerHTML = document.querySelector(`.inputCheckInOut`).value
    })
  </script>
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>

</html>