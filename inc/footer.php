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
                        <div class="unit-body"><a class="link-phone" href="tel:#">+1 855-701-27258</a></div>
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
                    <li class=""><a href="index">Home</a></li>
                    <li><a href="vacation-rentals">Vacation Rentals</a></li>
                    <li><a href="event-venues">Event Venues</a></li>
                    <li><a href="film-locations">Film Locations</a></li>
                    <li><a href="cars">Cars</a></li>
                    <li><a href="services">Services</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    <li><a href="guest-form">Guest Form</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="ambassador-program">Ambassador Program</a></li>
                    <li><a href="list-your-property">List Your Property</a></li>
                    <li><a href="join">Join Our Team</a></li>
                    <li><a href="privacy-policy">Privacy Policy</a></li>
                    <li><a href="terms-of-use">Terms Of Use</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-corporate-bottom-panel">
        <div class="container">
          <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2" style="padding:10px;">
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span>EssentiaLyfe, Inc. - All Rights Reserved. Designed and Powered by EssentiaLyfe, Inc. All photos are property of EssentiaLyfe, Inc., or used with permission of owners. Photos may not be used for any other purpose without written consent from EssentiaLyfe, Inc.</p>
          </div>
        </div>
      </div>

    </footer>
  </div>

  <style type="text/css">
    input[type="date"]::-webkit-calendar-picker-indicator {
      background: transparent;
      bottom: 0;
      color: transparent;
      cursor: pointer;
      height: auto;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      width: auto;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
      background: transparent;
      bottom: 0;
      color: transparent;
      cursor: pointer;
      height: auto;
      left: 0;
      position: absolute;
      right: 0;
      top: 0;
      width: auto;
    }
  </style>
  <script>
    function recaptchaCallback() {
      $('#submitBtn').removeAttr('disabled');
    };


    $("#rental-type").on("change", function() {
      $("#" + $(this).val()).show().siblings().hide();
    })


    $('#myModal').on('shown.bs.modal', function() {
      $('#myInput').trigger('focus')
    })
  </script>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>