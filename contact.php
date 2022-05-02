email<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contact | EssentiaLyfe</title>
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body style="background-color:#0E0C0D;">
    <div class="page">
      <?php require('header.php'); ?>
 
    <div class="container" style=" margin-top:50px;">
        
           <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left" style="background-color: #0E0C0D;">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h4 style="color:white;">Get in touch</h4>
            </div>
            <div class="title-classic-text">
              <p style="color:white;">Tell us how we can help.</p>
            </div>
          </article>
          <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post" action="form-to-email.php" data-callback="XXX">
               <img src="https://www.essentialyfe.com/images/properties/BSS_6678.jpg" style="float:right; width:37%; border:1px solid white; padding:2px;">
            <div class="row row-14 gutters-14" style="width:55%;">
                
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required" style="background:#0E0C0D; color:white;">
                  <label class="form-label" for="contact-your-name-2" style="color:white;">Name (Company/Personal)</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required" style="background:#0E0C0D; color:white;">
                  <label class="form-label" for="contact-email-2" style="color:white;">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric" style="background:#0E0C0D; color:white;">
                  <label class="form-label" for="contact-phone-2" style="color:white;">Phone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-2" style="color:white;">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required" style="background:#0E0C0D; color:white;"></textarea>
                </div>
              </div>
            </div>
            
           <div class="group-md group-middle">
               
               <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdmirEeAAAAACnZDcNkMN_N7BwOYKzylUWOW7-B" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;">
                   
               </div>
           
            <button class="button button-black-outline" type="submit" onclick="window.location.href='index.php';" style="color: #0E0C0D; float:right; margin-top:-20px; margin-left:-40px;" id="submitBtn" disabled>Send Message</button>
            </div>
          </form>
          
        </div>
        
      </section>     
     </div>
       <!--subscribe newsletetter start-->
      <?php require('footer.php'); ?>
    </div>
    <script>
        function recaptchaCallback() {
    $('#submitBtn').removeAttr('disabled');
};
    </script>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>