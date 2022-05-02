<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>About | EssentiaLyfe</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="/images/favicon.png" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/fonts.css">
  <link rel="stylesheet" href="/css/style.css">
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
    <div class="container" >

      <!-- Why choose us-->
      <section class="section section-sm section-first bg-default text-md-left" style="margin-top: 65px;">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="images/teamwork.jpg" alt="" width="519" height="364" />
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h1 class="text-spacing-25 font-weight-normal title-opacity-9">About Us</h1>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>
                      EssentiaLyfe is a luxury home rentals service in Southern California, providing the finest homes & exotic cars.
                      We focus on villas and unique estates for luxury vacation rentals, events and film productions.<br><br>

                      EssentiaLyfe is a boutique firm made up of a highly experienced and dedicated group of professionals and tastemakers.</p>
                    <!-- Linear progress bar-->
                    <article class="progress-linear progress-secondary">
                      <a class="button button-secondary button-md" href="contact">Get in Touch</a>
                    </article>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-2">
                    <div class="row row-40 justify-content-center text-center inset-top-10">
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.87" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Tours</p>
                      </div>
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.74" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Excursions</p>
                      </div>
                      <div class="col-sm-4">
                        <!-- Circle Progress Bar-->
                        <div class="progress-bar-circle" data-value="0.99" data-gradient="#01b3a7" data-empty-fill="transparent" data-size="150" data-thickness="12" data-reverse="true"><span></span></div>
                        <p class="progress-bar-circle-title">Hotel Bookings</p>
                      </div>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Get in touch</a><a class="button button-black-outline button-width-xl-230" href="#">Read more</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-4-3">
                    <p>
                      EssentiaLyfe is a luxury home rentals service in Southern California, providing the finest homes & exotic cars.
                      We focus on villas and unique estates for luxury vacation rentals, events and film productions.

                      EssentiaLyfe is a boutique firm made up of a highly experienced and dedicated group of professionals and tastemakers.</p>
                    <div class="text-center text-sm-left offset-top-30 tab-height">
                      <ul class="row-16 list-0 list-custom list-marked list-marked-sm list-marked-secondary">
                        <li>Lorem ipsum</li>
                        <li>Consectetur adipiscing</li>
                        <li>Sed do eiusmod</li>
                        <li>Tempor incididunt</li>
                        <li>Sem fringilla</li>
                        <li>Ut venenatis</li>
                      </ul>
                    </div>
                    <div class="group-md group-middle"><a class="button button-width-xl-230 button-primary button-pipaluk" href="#">Get in touch</a><a class="button button-black-outline button-md" href="#">Download presentation</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><br>
      </section>
     
  </div>
  <!--subscribe newsletetter start-->
    <?php require('footer.php'); ?>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>