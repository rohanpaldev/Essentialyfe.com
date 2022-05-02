<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Guest Form | EssentiaLyfe</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    .iti__selected-dial-code{
      color: #fff;
    }


    /* #vr-start-time[type="time"]:before {
    content: 'Request Check In time:';
    color: #ffffff;
    position: absolute;
    background: #130d0d;
    height: 18px;
    } */

    /* input[type="time"]:before {
    content: '';
    color: #ffffff;
    position: absolute;
    background: #130d0d;
    height: 18px;
    } */

    /* input[type="time"]::before { 
    	content: attr(data-placeholder);
    	width: 100%;
    }*/

    /* input[type="time"]:focus::before,
    input[type="time"]:valid::before { 
      display: none;
      content: '';
    
    }  */

    .input_wrapper_div {
      position: relative;
    }

    .input_wrapper_div input {
      position: relative;
      z-index: 100;
      background-color: transparent !important;
    }

    /* .input_wrapper_div .inner_fram_div {
      position: absolute;
    width: 100%;
    height: 100%;
    border: 1px solid rebeccapurple;
    z-index: 999;
} */
    .input_wrapper_div p {
      position: absolute;
      color: #fff;
      top: 25%;
      left: 17%;
      transform: translate(0, -50%);
      z-index: 10;
    }



    .input_wrapper_div1 {
      position: relative;
    }

    .input_wrapper_div1 input {
      position: relative;
      z-index: 100;
      background-color: transparent !important;
    }

    /* .input_wrapper_div1 .inner_fram_div {
      position: absolute;
    width: 100%;
    height: 100%;
    border: 1px solid rebeccapurple;
    z-index: 999;
} */
    .input_wrapper_div1 p {
      position: absolute;
      color: #fff;
      top: 25%;
      left: 17%;
      transform: translate(0, -50%);
      z-index: 10;
    }

    input[type="time"]:hover::before {
      content: '';
    }


  </style>
  
  <style>
    .checkInOut{
        height: 100%;
        top:0px;
        font-size:12px;
        background: #fff;
        border:1px solid #bab5b5;
    }
</style>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


  <script>
    // $(document).ready(function () {
    //     $("#rental-type").keyup(function () {
    //         if(this.value == "vacation-rental" || this.value=="event-venue" || this.value=="film-location" || this.value=="short-term-stay-event" || this.value=="long-term-furnished-rental"){


    //             $('#rest-of-form').css("display", "block");
    //         }else{
    //             $('#rest-of-form').css("display", "none");
    //         }
    //     });
    // });
    window.addEventListener('DOMContentLoaded', (event) => {
      const target = document.querySelector('.input_wrapper_div');
      const reqestParaElm = document.querySelector('.reqest_para');


      target.addEventListener('click', function(ev) {
        console.log(reqestParaElm);
        reqestParaElm.style.display = 'none'
      });
    });

    window.addEventListener('DOMContentLoaded', (event) => {
      const target = document.querySelector('.input_wrapper_div1');
      const reqestParaElm = document.querySelector('.reqest_para1');


      target.addEventListener('click', function(ev) {
        console.log(reqestParaElm);
        reqestParaElm.style.display = 'none'
      });
    });
  </script>

</head>

<body style="background-color:#0E0C0D;">
  <div class="page" style="min-height: auto;">
  <?php require('header.php'); ?>

    <div class="container" style=" margin-top:0px; ">

      <!-- Modal -->

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle" style="margin-left: auto;font-weight: 600;font-size: 22px;">Thank You!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              You have successuly submitted your interest in booking one of our Locations. Please check your email for a copy of your submision.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin: auto;">Close</button>
            </div>
          </div>
        </div>
      </div>


      <section class="section section-sm section-last bg-default text-left" style="display:block;background-color: #0E0C0D;">
        <caption>
          <h3 class="text-center mb-5" style="color:white;">Guest Form</h3>
        </caption>
        <div class="container" style="width:100%;">
          <article class="title-classic">
            <div class="title-classic" style="margin-left:25px;">
              <p style="color:white;"><b style="font-size: 22px;">Thank you for your interest in booking one of our Locations.</b><br><small style="color:white; font-size:15px;">To better assist you, please fill out the form:</small> </p>
            </div> <div id="rental-type1" style="display:block; --darkreader-inline-bgcolor:#1d2020;"> <img src="images/Guest Form Picture.jpg" alt="" style="height: 230px; max-width: 100%;margin-bottom: 25px;">
              </div>
            </div>
          </article>
          <section name="contact" id="contact" style="display:block; width:100%;">
            <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post" action="form-to-email.php">

              <div class="row row-14 gutters-14">
                <div class="col-md-12">
                  <div class="form-wrap">
                    <div id="form-shower">
                      <select name="rental-type" id="rental-type" class=" btn btn-secondary dropdown-toggle" style="background:#0E0C0D; color:white; border:1px solid white; width:100%; height: 60px; text-align:left; font-weight:400; font-size:14px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <option value="c" selected>Rental Type</option>
                        <option value="vacation-rental">Vacation Rental/ Short Term Stay</option>
                        <option value="event-venue">Event Venue Rental</option>
                        <option value="film-location">Production Rental</option>
                        <option value="short-term-stay-event">Stay Over + Event</option>
                        <option value="long-term-furnished-rental">Long Term Furnished Rental</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="title-classic" style="margin-left:-0px;">
                  <label for="" style="margin-left:5px; color:white;">*Please select a rental type to continue</label>
                </div>
            </form>
          </section>

          <!-- Vacation Rental/ Short Term Stay -->
          <div class="container-xxl">
            <div class="row" style="flex-wrap: inherit;">
              <!-- <div class="col-sm-10"> -->
                <section name="vacation-rental" id="vacation-rental" style="display:none; width:100%;">
                  <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post" action="form-to-email.php">
                    <!-- <input type="text" class="form-control" id="date"/> -->

                    <input type="text" name="vacation" value="Vacation" style="display:none;">
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="vr-name" type="text" name="vr-name" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="vr-name" style="color:white;">Full Name:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="vr-mail" type="mail" name="vr-mail" data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;" required>
                          <label class="form-label" for="vr-mail" style="color:white;">Email Address:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap" style="display: grid;">
                        <div style="max-width:75px;" onclick="enable_disable()">
                        <input class="form-input" type="tel" id="txtPhone"  style="background:#0E0C0D;  color:white;" name="txtPhone"/>
                        </div>
                        <div style="margin-top: -60px;margin-left: 75px;">
                        <input class="form-input" id = 'txtPhone1' type='tel' name="txtPhone1" style="background:#0E0C0D; color:white; height:30px;" disabled/>
                        <label class="form-label" for="txtPhone1" style="margin-left: 75px; color:white;">Phone Number:</label>
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="vr-insta" type="text" name="vr-insta" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="vr-insta" style="color:white;">Instagram Handle:</label>
                        </div>
                      </div>
                    </div>

                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <select name="vr-pets" id="vr-pets" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" onchange="ShowHideDiv1()" required>
                            <option value="no">Are you bringing any pets:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                          <select name="vr-no_pets" id="vr-no_pets" class="form-input" style="background:#0E0C0D; display:none; color:white;" >
                            <option value="1" selected>No of pets:</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                          <select name="vr-yes_pets" id="vr-yes_pets" class="form-input" style="background:#0E0C0D; display:none; color:white;">
                            <option value="0"  selected>Pet Size:</option>
                            <option value="Up to 20 Pounds" >Up to 20 pounds</option>
                            <option value="20-50 pounds">20-50 pounds</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="vr-party" id="vr-party" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Are you planning on hosting a party or a large gathering:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input chkdt datepicker" id="vr-start-date" type="text" name="vr-start-date" style="background:#0E0C0D; " placeholder="Requested Check In Date:" >
                          <!-- <label class="form-label" for="vr-start-date" style="color:white;">Requested Check In Date:</label> -->
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap ">
                          <!-- <input class="form-input" type="text" id="vr-end-date" name="vr-end-date" style="background:#0E0C0D; color:white;" > -->
                          <input class="form-input datepicker" id="vr-end-date" type="text" name="vr-end-date" style="background:#0E0C0D; color:white;" placeholder="Requested Check Out Date:">
                          <!-- <label class="form-label" for="vr-end-date" style="color:white;">Requested Check Out Date:</label> -->
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap input_wrapper_div1">
                          <input class="form-input" type="time" id="vr-start-time" name="vr-start-time" style="background:#0E0C0D; color:white;">
                          <p class="reqest_para1">Request check In time</p>
                          <!-- <label class="form-label" for="vr-start-time" style="color:white;">Requested Check In Time:</label> -->
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap input_wrapper_div">
                          <input class="form-input" type="time" id="vr-end-time" name="vr-end-time" style="background:#0E0C0D; color:white;">
                          <p class="reqest_para">Request check Out time</p>
                          <!-- <label class="form-label" for="vr-end-time" style="color:white;">Requested Check Out Time:</label> -->
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="vr-flex-date" id="vr-flex-date" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Are you flexible with the check in/out date:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                        <div class="form-wrap">
                          <select name="vr-flex-time" id="vr-flex-time" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Are you flexible with the check in/out time:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="vr-bed" id="vr-bed" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required># of Bedrooms Needed:</option>
                            <option value="1-2">1-2</option>
                            <option value="3-4">3-4</option>
                            <option value="5-6">5-6</option>
                            <option value="7-8">7-8</option>
                            <option value="9-10">9-10</option>
                            <option value="10+">10+</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="vr-stay" id="vr-stay" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required># of Guests Staying Over:</option>
                            <option value="1-2">1-2</option>
                            <option value="3-4">3-4</option>
                            <option value="5-6">5-6</option>
                            <option value="7-8">7-8</option>
                            <option value="9-10">9-10</option>
                            <option value="11-15">11-15</option>
                            <option value="16-20">16-20</option>
                            <option value="20+">20+</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="vr-city" id="vr-city" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>What city/area are you intersted in:</option>
                            <option value='Beverly Hills'>Beverly Hills</option>
                            <option value='Bel Air'>Bellair</option>
                            <option value='Brentwood'>Brentwood</option>
                            <option value='DTLA'>DTLA</option>
                            <option value='Encino'>Encino</option>
                            <option value='Hollywood'>Hollywood</option>
                            <option value='Hollywood Hills'>Hollywood Hills</option>
                            <option value='Holmby Hills'>Holmby Hills</option>
                            <option value='Malibu'>Malibu</option>
                            <option value='Newport Beach'>Newport Beach</option>
                            <option value='Sherman Oaks'>Sherman Oaks</option>
                            <option value='Studio City'>Studio City</option>
                            <option value='Traditional'>West Hollywood</option>
                            <option value='Westwood'>Westwood</option>
                            <option value='Woodland Hills'>Woodland Hills</option>                            
                            <option value='Tarzana'>Tarzana</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <select name="vr-style" id="vr-style" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>What house style are you interested in::</option>
                            <option value='Modern'>Modern</option>
                            <option value='Vintage'>Vintage</option>
                            <option value='Traditional'>Traditional</option>
                            <option value='Asian'>Asian</option>
                            <option value='Victorian'>Victorian</option>
                            <option value='Spanish'>Spanish</option>
                            <option value='French'>French</option>
                            <option value='Mediteranean'>Mediteranean</option>
                            <option value='Desert'>Desert</option>
                            <option value='Hi-Tech'>Hi-Tech</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="vr-hear" id="vr-hear" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>What is your total rental budget:</option>
                            <option value="5000">Up to $5,000</option>
                            <option value="5,000-10,000">$5,000-$10,000</option>
                            <option value="10,000-25,000">$10,000-$25,000</option>
                            <option value="25,000-50,000">$25,000-$50,000</option>
                            <option value="50,000-100,000">$50,000-$100,000</option>
                            <option value="100,000-250,000">$100,000-$250,000</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <!-- <select name="vr-serv" id="vr-serv" class="form-input" style="background:#0E0C0D; color:white;" onchange="ShowHideDiv2()"> -->
                          <select name="vr-serv" id="vr-serv" class="form-input" style="background:#0E0C0D; color:white;" onchange="ShowHideDiv4()" required>
                            <option value="Type Of Event/Production">Are you interested in any additonal services:</option>
                            <option value="House Cleaner">House Cleaner</option>
                            <option value="Mobile Spray Tax">Mobile Spray Tax</option>
                            <option value="Make up Artist">Make up Artist</option>
                            <option value="Jet Charter">Jet Charter</option>
                            <option value="Airport Transferr">Airport Transferr</option>
                            <option value="Exotic Car Rental">Exotic Car Rental</option>
                            <option value="Nightlife Arrangements">Nightlife Arrangements</option>
                            <option value="Yacht Charter">Yacht Charter</option>
                            <option value="Personal Security">Personal Security</option>
                            <option value="Covid Testing">Covid Testing</option>
                            <option value="IV Drip">IV Drip</option>
                            <option value="Personal Chef">Personal Chef</option>
                            <option value="Baby Sitter/ Pet Sitter">Baby Sitter/ Pet Sitter</option>
                            <option value="Hair Stylist">Hair Stylist</option>
                            <option value="Fashion Stylist">Fashion Stylist</option>
                            <option value="Chauffer">Chauffer</option>
                            <option value="Other">Other</option>
                            <option value="No">No</option>
                          </select>
                            <!-- <select name="vr-yes_service_home" id="vr-yes_service_home" class="form-input" style="background:#0E0C0D; display:none; color:white;">
                            <option value="NA" style="display:none;" selected>NA</option>
                            <option value="House Cleaner" selected>House Cleaner</option>
                            <option value="Mobile Tan ">Mobile Tan </option>
                            <option value="Covid Testing">Covid Testing</option>
                            <option value="IV Drip">IV Drip</option>
                            <option value="Therapy">Therapy</option>
                            </select>
                            <select name="vr-yes_service_lxr" id="vr-yes_service_lxr" class="form-input" style="background:#0E0C0D; display:none; color:white;">          
                            <option value="NA" style="display:none;" selected>NA</option>                  
                            <option value="Jet"selected>Jet</option>
                            <option value="Airport Transfer" >Airport Transfer</option>
                            <option value="Car Rental">Car Rental</option>
                            <option value="Yacht Charter">Yacht Charter</option>
                            <option value="Nightlife Arrangements">Nightlife Arrangements</option>
                            <option value="Personal Security">Personal Security</option>
                          </select> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" id="vr-other" style="padding:10px;display:none;">
                      <div class="form-wrap">
                        <!-- <intextareaput class="form-input" id="vr-other_info" type="textarea" name="vr-other_info" style="background:#0E0C0D; color:white;"> -->
                        <textarea class="form-control" rows="3" id="vr-other_info" name="vr-other_info" style="background:#0E0C0D; color:white;"></textarea>
                        <label class="form-label" for="vr-other_info" style="color:white;">Please fill your required services:</label>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="vr-req" type="text" style="background:#0E0C0D; color:white;" name="vr-req">
                          <label class="form-label" for="vr-req" style="color:white;">Do you have any accessibility requirements:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="vr-park" type="text" style="background:#0E0C0D; color:white;" name="vr-park">
                          <label class="form-label" for="vr-park" style="color:white;">Number of parking spots needed:</label>
                        </div>
                      </div>
                    </div>
                    
                    <!-- <div class="col-md-12" style="padding:10px;">
                <div class="form-wrap">
                  <select name="vr-attendees" id="vr-attendees" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                    <option selected># of attendees:</option>
                    <option value='0-30'>0-30</option>
                    <option value='30-60'>30-60</option>
                    <option value='60-90'>60-90</option>
                    <option value='90-120'>90-120</option>
                    <option value='120-150'>120-150</option>
                    <option value='150-180'>150-180</option>
                    <option value='180-200'>180-200</option>
                    <option value='200-250'>200-250</option>
                    <option value='250-300'>250-300</option>
                    <option value='300-400'>300-400</option>
                    <option value='400-500'>400-500</option>
                    <option value='500+'>500+</option>
                  </select>
                </div>
               </div> -->
                    <div class="col-md-12" style="padding:10px; display: flex;">
                      <div class="" style="width: 33%;">
                        <select name="vr-visits" id="vr-visits" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" onchange="ShowHideDiv()" required>
                          <option value="no">Are you expecting any visitors:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                        <select name="vr-yes_guest" id="vr-yes_guest" class="form-input" style="background:#0E0C0D; display:none; color:white;">
                          <option value="0" style="display:none;" selected>0</option>
                          <option value="1-2" selected>1-2</option>
                          <option value="3-4">3-4</option>
                          <option value="5-6">5-6</option>
                          <option value="7-8">7-8</option>
                          <option value="9-10">9-10</option>
                          <option value="10+">10+</option>
                        </select>
                      </div>
                    
                      <div class="" style="margin: auto;width: 33%; margin-block: inherit;">
                        <select name="vr-hear-us" id="vr-hear-us" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>How did you hear about us:</option>
                          <option value="Social Media">Social Media</option>
                          <option value="Google">Google</option>
                          <option value="Yelp">Yelp</option>
                          <option value="Referral">Referral</option>
                          <option value="3rd Party Booking Website">3rd Party Booking Website</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>

                      <div class="" style="width: 33%;">
                        <select name="vr-pro_film" id="vr-pro_film" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required> Will you be having any professional filming:</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="vr-info" type="text" name="vr-info" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="vr-info" style="color:white;">Any additional information you wish to share:</label>
                      </div>
                    </div>
                    <br>
                    <article class="title-classic">

                      <div class="title-classic" style="margin-left:15px;">
                        <input class="form-input" id="initials" type="text" value="" placeholder="Initials" style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                        <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the information here is correct</label>
                      </div>
                    </article><br><br>
                    <center>
                      <button class="button button-black-outline" type="submit" data-toggle="modal" id="btnSubmit" data-target="#exampleModalCenter">Submit</button>
                      <!-- <input id="btnSubmit" class="btn" type="submit" value="SUBMIT" > -->
                    </center>
                  </form>
                </section>

                <!-- Vacation Rental/ Short Term Stay End -->

                <!-- Event Venue -->

                <section name="event-venue" id="event-venue" style="display:none; width:100%;">
                  <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post" action="form-to-email.php">
                    <input type="text" name="Event" value="Event" style="display:none;">
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-name" type="text" name="ev-name" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="ev-name" style="color:white;">Full Name:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-mail" type="mail" name="ev-mail" data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;" required>
                          <label class="form-label" for="ev-mail" style="color:white;">Email Address:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-phone" type="text" style="background:#0E0C0D; color:white;" name="ev-phone" data-constraints="@Required" required>
                          <label class="form-label" for="ev-phone" style="color:white;">Phone Number:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-insta" type="text" name="ev-insta" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="ev-insta" style="color:white;">Instagram Handle:</label>
                        </div>
                      </div>
                    </div>

                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="ev-start-date" name="ev-start-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="ev-end-date" name="ev-end-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-start-time" name="ev-start-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-end-time" name="ev-end-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">

                        <div class="form-wrap">
                          <input class="form-input" id="ev-bed" type="text" name="ev-bed" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="ev-bed" style="color:white;"># of Bedrooms Needed:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-attendees" id="ev-attendees" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option selected># of attendees:</option>
                            <option value='0-30'>0-30</option>
                            <option value='30-60'>30-60</option>
                            <option value='60-90'>60-90</option>
                            <option value='90-120'>90-120</option>
                            <option value='120-150'>120-150</option>
                            <option value='150-180'>150-180</option>
                            <option value='180-200'>180-200</option>
                            <option value='200-250'>200-250</option>
                            <option value='250-300'>250-300</option>
                            <option value='300-400'>300-400</option>
                            <option value='400-500'>400-500</option>
                            <option value='500+'>500+</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-city-2" type="text" style="background:#0E0C0D; color:white;" name="ev-city-2" data-constraints="@Required" required>
                          <label class="form-label" for="ev-city-2" style="color:white;">What city/area are you intersted in:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-style-2" type="text" style="background:#0E0C0D; color:white;" name="ev-style-2" data-constraints="@Required" required>
                          <label class="form-label" for="ev-style-2" style="color:white;">What house style are you interested in:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-serve-alco" id="ev-serve-alco" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Will you be serving alcohol:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                        <div class="form-wrap">
                          <select name="ev-sell-alco" id="ev-sell-alco" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Will you be selling alcohol:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="ev-visits" id="ev-visits" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <option value="Type Of Event/Production">Will you be having any professional filming:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="ev-hear" id="ev-hear" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>Will you have any bodyguards during your rental:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="ev-event-plan" id="ev-event-plan" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>Are you working with an Event Planner:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="ev-furn" id="ev-furn" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>Will you need to move any of the furniture:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-deco" id="ev-deco" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Will you be adding any decorations:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-parts" type="text" style="background:#0E0C0D; color:white;" name="ev-parts" data-constraints="@Required" required>
                          <label class="form-label" for="ev-parts" style="color:white;">Parts of the house to be used:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-park-sp" id="ev-park-sp" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Do you need additional parking space:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-company" type="text" style="background:#0E0C0D; color:white;" name="ev-company" data-constraints="@Required" required>
                          <label class="form-label" for="ev-company" style="color:white;">Company Name:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-flex-date" id="ev-flex-date" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Are you flexible with the check in/out date:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-flex-time" id="ev-flex-time" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Are you flexible with the check in/out time:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-pets" id="ev-pets" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Are you bringing any pets:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-hear-2" type="text" style="background:#0E0C0D; color:white;" name="ev-hear-2" data-constraints="@Required" required>
                          <label class="form-label" for="ev-hear-2" style="color:white;">How did you hear about us:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-hear" id="ev-hear" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Will you have any minors:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-info" type="text" name="ev-info" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="ev-info" style="color:white;">Any additional information you wish to share:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-tickets" id="ev-tickets" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Will you be selling tickets to your event:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="ev-event_type" id="ev-event_type" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Event type:</option>
                            <option value="Private">Private</option>
                            <option value="Corporate">Corporate</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-guest-arr" type="text" name="ev-guest-arr" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="ev-guest-arr" style="color:white;">How will guests be arriving:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="text" id="ev-seated" name="ev-seated" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="ev-seated" style="color:white;">Will this be a seated or standing event:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="ev-park-spot" type="text" name="ev-park-spot" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="ev-park-spot" style="color:white;">Number of parking spots needed:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="text" id="ev-hour" name="ev-hour" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="ev-hour" style="color:white;">Hours of event:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-load-time" name="ev-load-time" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="ev-load-time" style="margin-left: 47px;color:white;">Load in time:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-load-out" name="ev-load-out" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="ev-load-out" style="margin-left: 47px;color:white;">Load out time:</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="ev-vehicles" type="text" name="ev-vehicles" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="ev-vehicles" style="color:white;">How many vehicles do you anticipate will park on the street:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="ev-acc" type="text" name="ev-acc" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="ev-acc" style="color:white;">Do you have any accessibility requirements:</label>
                      </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
               <div class="form-wrap">
                 <input class="form-input" id="ev-add-serv" type="text" name="ev-add-serv" style="background:#0E0C0D; color:white;">
                 <label class="form-label" for="ev-add-serv" style="color:white;">Are you interested in any additonal services:</label>
               </div>
               </div> -->
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="ev-vendors-anti" type="text" name="ev-vendors-anti" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="ev-vendors-anti" style="color:white;">How many vendors do you anticipate:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="ev-rent" id="ev-rent" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>What is your total rental budget:</option>
                          <option value="5000">Up to $5,000</option>
                          <option value="5,000-10,000">$5,000-$10,000</option>
                          <option value="10,000-25,000">$10,000-$25,000</option>
                          <option value="25,000-50,000">$25,000-$50,000</option>
                          <option value="50,000-100,000">$50,000-$100,000</option>
                          <option value="100,000-250,000">$100,000-$250,000</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="ev-other-serv" id="ev-other-serv" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>Are you interested in any additional services:</option>

                          <option value="Customer-Identification">Customer Identification</option>
                          <option value="Signed-Contract">Signed Contract</option>
                          <option value="Requested-Check-In-Time">Requested Check-In Time</option>
                          <option value="Payment">Payment</option>
                          <option value="Deposit">Deposit</option>
                          <option value="Insurance">Insurance</option>
                          <option value="Questionnaire">Questionnaire</option>
                          <option value="Shuttle-Valet-Service">Shuttle/Valet Service</option>
                          <option value="Event-Cleaner">Event Cleaner</option>
                          <option value="Post-Rental-Cleaning-Schedule">Post Rental Cleaning Schedule</option>
                          <option value="Security-Patrol">Security/Patrol</option>
                          <option value="Check-In-Rep-Site-Rep">Check In Rep/ Site Rep</option>
                          <option value="Security-Patrol-Briefing">Security/ Patrol Briefing</option>
                          <option value="Furniture Removal">Furniture Removale</option>
                          <option value="Shuttle-Valet-Briefing">Shuttle/Valet Briefing</option>
                          <option value="Event-Cleaner-Briefing">Event Cleaner Briefing</option>
                          <option value="Check-In-Form">Check In Form</option>


                          <option value="5000">House Cleaner</option>
                          <option value="5,000-10,000">Window Cleaning</option>
                          <option value="10,000-25,000">Security Services</option>
                          <option value="25,000-50,000">Jet</option>
                          <option value="50,000-100,000">Airport Transfer</option>
                          <option value="100,000-250,000">Car Rental</option>
                          <option value="50,000-100,000">Bottle Service</option>
                          <option value="100,000-250,000">Yacht</option>
                          <option value="50,000-100,000">Personal Security</option>
                          <option value="100,000-250,000">Covid Testing</option>
                          <option value="50,000-100,000">IV Drip Therapy</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <article class="title-classic">

                      <div class="title-classic" style="margin-left:15px;">
                        <input class="form-input" id="initials" type="text" value="" placeholder="Initials" style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                        <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the information here is correct</label>
                      </div>
                    </article><br><br>
                    <center>
                      <button class="button button-black-outline" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
                    </center>
                  </form>
                </section>

                <!-- Event Venue End -->

                <!-- Film Location -->

                <section name="film-location" id="film-location" style="display:none; width:100%;">
                  <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post" action="form-to-email.php">
                    <input type="text" name="Production" value="Production" style="display:none;">
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-name" type="text" name="f-name" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="f-name" style="color:white;">Full Name:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-mail" type="mail" name="f-mail" data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;" required>
                          <label class="form-label" for="f-mail" style="color:white;">Email Address:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-phone" type="text" style="background:#0E0C0D; color:white;" name="f-phone" data-constraints="@Required" required>
                          <label class="form-label" for="f-phone" style="color:white;">Phone Number:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-insta" type="text" name="f-insta" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="f-insta" style="color:white;">Instagram Handle:</label>
                        </div>
                      </div>
                    </div>

                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="vr-start-date" name="vr-start-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="vr-end-date" name="vr-end-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="vr-start-time" name="vr-start-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="vr-end-time" name="vr-end-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-bed" type="text" name="f-bed" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="f-bed" style="color:white;"># of Bedrooms Needed:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-stay" type="text" name="f-stay" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="f-stay" style="color:white;"># of expected staff + Talent:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-city" type="text" style="background:#0E0C0D; color:white;" name="f-city" data-constraints="@Required" required>
                          <label class="form-label" for="f-city" style="color:white;">What city/area are you intersted in:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-style" type="text" style="background:#0E0C0D; color:white;" name="f-style" data-constraints="@Required" required>
                          <label class="form-label" for="f-style" style="color:white;">What house style are you interested in:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="f-hear" id="f-hear" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>What is your total rental budget:</option>
                            <option value="5000">Up to $5,000</option>
                            <option value="5,000-10,000">$5,000-$10,000</option>
                            <option value="10,000-25,000">$10,000-$25,000</option>
                            <option value="25,000-50,000">$25,000-$50,000</option>
                            <option value="50,000-100,000">$50,000-$100,000</option>
                            <option value="100,000-250,000">$100,000-$250,000</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                        <div class="form-wrap">
                          <select name="f-flex-pr" id="f-flex-pr" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Will you be applying for a permit:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="f-company" type="text" style="background:#0E0C0D; color:white;" name="f-company" data-constraints="@Required" required>
                          <label class="form-label" for="f-company" style="color:white;">Company Name:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="f-parking-space" id="f-parking-space" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Do you need additional parking space:">Do you need additional parking space:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="f-attendees" id="f-attendees" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <option selected># of attendees:</option>
                          <option value='0-30'>0-30</option>
                          <option value='30-60'>30-60</option>
                          <option value='60-90'>60-90</option>
                          <option value='90-120'>90-120</option>
                          <option value='120-150'>120-150</option>
                          <option value='150-180'>150-180</option>
                          <option value='180-200'>180-200</option>
                          <option value='200-250'>200-250</option>
                          <option value='250-300'>250-300</option>
                          <option value='300-400'>300-400</option>
                          <option value='400-500'>400-500</option>
                          <option value='500+'>500+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="f-guards" id="f-guards" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <option value="Will you have any bodyguards during your rental:">Will you have any bodyguards during your rental:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="f-furniture" id="f-furniture" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <option value="Will you need to move any of the furniture:">Will you need to move any of the furniture:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="f-flex-date" id="f-flex-date" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Are you flexible with the check in/out date:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;padding:10px;">
                        <div class="form-wrap">
                          <select name="f-flex-time" id="f-flex-time" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Are you flexible with the check in/out time</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="f-pets" id="f-pets" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Are you bringing any pets:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="padding:10px;">
                        <div class="form-wrap">
                          <select name="vr-hear" id="vr-hear" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>How did you hear about us:</option>a
                            <option value="Google/Internet">Google/Internet</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Airbnb">Airbnb</option>
                            <option value="Referral">Referral</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="f-info" type="text" name="f-info" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="f-info" style="color:white;">Any additional information you wish to share:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="f-vehicles" type="text" name="f-vehicles" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="f-vehicles" style="color:white;">How many vehicles do you anticipate will park on the street</label>
                      </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="f-production-type" type="text" name="f-production-type" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="f-production-type" style="color:white;">How many vehicles do you anticipate will park on the street</label>
                      </div>
                    </div> -->
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="f-requirements" type="text" name="f-requirements" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="f-requirements" style="color:white;">Do you have any accessibility requirements: </label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="f-parking" type="text" name="f-parking" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="f-parking" style="color:white;">Number of parking spots needed:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="f-production" type="text" name="f-production" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="f-production" style="color:white;">Production Type</label>
                      </div>
                    </div>
                    <br>
                    <article class="title-classic">

                      <div class="title-classic" style="margin-left:15px;">
                        <input class="form-input" id="initials" type="text" value="" placeholder="Initials" style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                        <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the information here is correct</label>
                      </div>
                    </article><br><br>
                    <center>
                      <button class="button button-black-outline" type="submit">Submit</button>
                    </center>
                  </form>
                </section>

                <!-- Film Location End -->

                <!-- Short Term -->
                <section name="short-term-stay-event" id="short-term-stay-event" style="display:none; width:100%;">
                  <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post" action="form-to-email.php">
                    <input type="text" name="shortterm" value="shortterm" style="display:none;">
                    <input type="text" name="short-term-stay-event" value="short-term-stay-event" style="display:none;">
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-name" type="text" name="st-name" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="st-name" style="color:white;">Full Name:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-mail" type="mail" name="st-mail" data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;" required>
                          <label class="form-label" for="st-mail" style="color:white;">Email Address:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-phone" type="text" style="background:#0E0C0D; color:white;" name="st-phone" data-constraints="@Required" required>
                          <label class="form-label" for="st-phone" style="color:white;">Phone Number:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-insta" type="text" name="st-insta" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="st-insta" style="color:white;">Instagram Handle:</label>
                        </div>
                      </div>
                    </div>

                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="ev-start-date" name="ev-start-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="ev-end-date" name="ev-end-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-start-time" name="ev-start-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="ev-end-time" name="ev-end-time" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">

                        <div class="form-wrap">
                          <input class="form-input" id="st-bed" type="text" name="st-bed" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="st-bed" style="color:white;"># of Bedrooms Needed:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <select name="st-attendees" id="st-attendees" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option selected># of attendees:</option>
                            <option value='0-30'>0-30</option>
                            <option value='30-60'>30-60</option>
                            <option value='60-90'>60-90</option>
                            <option value='90-120'>90-120</option>
                            <option value='120-150'>120-150</option>
                            <option value='150-180'>150-180</option>
                            <option value='180-200'>180-200</option>
                            <option value='200-250'>200-250</option>
                            <option value='250-300'>250-300</option>
                            <option value='300-400'>300-400</option>
                            <option value='400-500'>400-500</option>
                            <option value='500+'>500+</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">

                        <div class="form-wrap">
                          <input class="form-input" id="st-guest" type="text" name="st-guest" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="st-guest" style="color:white;"># of Guests Staying Over:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-minrs" type="text" name="st-minrs" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="st-minrs" style="color:white;">Will you have any minors:</label>
                        </div>
                      </div>
                    </div>

                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-city-2" type="text" style="background:#0E0C0D; color:white;" name="st-city-2" data-constraints="@Required" required>
                          <label class="form-label" for="st-city-2" style="color:white;">What city/area are you intersted in:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-style-2" type="text" style="background:#0E0C0D; color:white;" name="st-style-2" data-constraints="@Required" required>
                          <label class="form-label" for="st-style-2" style="color:white;">What house style are you interested in:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="st-alchohol" id="st-alchohol" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Will you be serving alcohol:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px; margin-bottom:10px;">
                        <div class="form-wrap">
                          <select name="st-selling" id="st-selling" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                            <option value="Type Of Event/Production">Will you be selling alcohol:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="st-visits" id="st-visits" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <option value="Type Of Event/Production">Will you be having any professional filming:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="st-hear" id="st-hear" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>Will you have any bodyguards during your rental:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="st-hear-7" id="st-hear-7" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>Are you working with an Event Planner:</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="st-hear-2" id="st-hear-2" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Will you need to move any of the furniture:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="st-hear-3" id="st-hear-3" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Will you be adding any decorations:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="st-hear-8" id="st-hear-8" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Do you need additional parking space:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-company" type="text" style="background:#0E0C0D; color:white;" name="st-company" data-constraints="@Required" required>
                          <label class="form-label" for="st-company" style="color:white;">Company Name:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="st-flex-date" id="st-flex-date" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Are you flexible with the check in/out date:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="st-flex-time" id="st-flex-time" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Are you flexible with the check in/out time:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="st-pets" id="st-pets" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Are you bringing any pets:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-hear-6" type="text" style="background:#0E0C0D; color:white;" name="st-hear-6" data-constraints="@Required" required>
                          <label class="form-label" for="st-hear-2" style="color:white;">How did you hear about us :</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-12" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-info" type="text" name="st-info" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="st-info" style="color:white;">Any additional information you wish to share:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="st-tickets" id="st-tickets" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Will you be selling tickets to your event:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="st-event-type" type="text" name="st-event-type" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="st-event-type" style="color:white;">Event Type:</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-vehicles" type="text" name="st-vehicles" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-vehicles" style="color:white;">How many vehicles do you anticipate will park on the street:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-vendors" type="text" name="st-vendors" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-vendors" style="color:white;">How many vendors do you anticipate:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-party" type="text" name="st-party" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-party" style="color:white;">Are you plannning to host a party:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-visitor" type="text" name="st-visitor" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-visitor" style="color:white;">Are you expecting any visitors:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-siting" type="text" name="st-siting" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-siting" style="color:white;">Will this be a seated or standing event:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-requirements" type="text" name="st-requirements" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-requirements" style="color:white;">Do you have any accessibility requirements:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-parking-sp" type="text" name="st-parking-sp" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-parking-sp" style="color:white;">Number of parking spots needed:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-event-hr" type="text" name="st-event-hr" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-event-hr" style="color:white;">Hours of event:</label>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="st-load-time" name="st-load-time" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="st-load-time" style="margin-left: 47px;color:white;">Load in time:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="time" id="st-load-out" name="st-load-out" style="background:#0E0C0D; color:white;">
                          <label class="form-label" for="st-load-out" style="margin-left: 47px;color:white;">Load out time:</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-additional-ser" type="text" name="st-additional-ser" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-additional-ser" style="color:white;">Are you interested in any additonal services:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="st-arrive" type="text" name="st-arrive" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="st-arrive" style="color:white;">How will guests be arriving:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="st-hear-4" id="st-hear-4" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>Are you interested in any other services:</option>

                          <option value="Customer-Identification">Customer Identification</option>
                          <option value="Signed-Contract">Signed Contract</option>
                          <option value="Requested-Check-In-Time">Requested Check-In Time</option>
                          <option value="Payment">Payment</option>
                          <option value="Deposit">Deposit</option>
                          <option value="Insurance">Insurance</option>
                          <option value="Questionnaire">Questionnaire</option>
                          <option value="Shuttle-Valet-Service">Shuttle/Valet Service</option>
                          <option value="Event-Cleaner">Event Cleaner</option>
                          <option value="Post-Rental-Cleaning-Schedule">Post Rental Cleaning Schedule</option>
                          <option value="Security-Patrol">Security/Patrol</option>
                          <option value="Check-In-Rep-Site-Rep">Check In Rep/ Site Rep</option>
                          <option value="Security-Patrol-Briefing">Security/ Patrol Briefing</option>
                          <option value="Furniture Removal">Furniture Removale</option>
                          <option value="Shuttle-Valet-Briefing">Shuttle/Valet Briefing</option>
                          <option value="Event-Cleaner-Briefing">Event Cleaner Briefing</option>
                          <option value="Check-In-Form">Check In Form</option>


                          <option value="5000">House Cleaner</option>
                          <option value="5,000-10,000">Window Cleaning</option>
                          <option value="10,000-25,000">Security Services</option>
                          <option value="25,000-50,000">Jet</option>
                          <option value="50,000-100,000">Airport Transfer</option>
                          <option value="100,000-250,000">Car Rental</option>
                          <option value="50,000-100,000">Bottle Service</option>
                          <option value="100,000-250,000">Yacht</option>
                          <option value="50,000-100,000">Personal Security</option>
                          <option value="100,000-250,000">Covid Testing</option>
                          <option value="50,000-100,000">IV Drip Therapy</option>
                        </select>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-12" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="st-budget" id="st-budget" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>What is your total rental budget:</option>
                            <option value="5000">Up to $5,000</option>
                            <option value="5,000-10,000">$5,000-$10,000</option>
                            <option value="10,000-25,000">$10,000-$25,000</option>
                            <option value="25,000-50,000">$25,000-$50,000</option>
                            <option value="50,000-100,000">$50,000-$100,000</option>
                            <option value="100,000-250,000">$100,000-$250,000</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <br>
                    <article class="title-classic">

                      <div class="title-classic" style="margin-left:15px;">
                        <input class="form-input" id="initials" type="text" value="" placeholder="Initials" style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                        <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the information here is correct</label>
                      </div>
                    </article><br><br>
                    <center>
                      <button class="button button-black-outline" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
                    </center>
                  </form>
                </section>

                <!-- Short Term End -->


                <!-- Long Term -->

                <section name="long-term-furnished-rental" id="long-term-furnished-rental" style="display:none; width:100%;">
                  <form name="myemailform" class="rd-form rd-form-variant-2 rd-mailform" method="post" action="form-to-email.php">
                    <input type="text" name="Longterm" value="Longterm" style="display:none;">
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-name" type="text" name="lt-name" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="lt-name" style="color:white;">Full Name:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-mail" type="mail" name="lt-mail" data-constraints="@Required" style="background:#0E0C0D; color:white; height:30px;" required>
                          <label class="form-label" for="lt-mail" style="color:white;">Email Address:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-phone" type="text" style="background:#0E0C0D; color:white;" name="lt-phone" data-constraints="@Required" required>
                          <label class="form-label" for="lt-phone" style="color:white;">Phone Number:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-insta" type="text" name="lt-insta" style="background:#0E0C0D; color:white; height:30px;" data-constraints="@Required" required>
                          <label class="form-label" for="lt-insta" style="color:white;">Instagram Handle:</label>
                        </div>
                      </div>
                    </div>

                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="lt-start-date" name="lt-start-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" type="date" id="lt-end-date" name="lt-end-date" style="background:#0E0C0D; color:white;">
                        </div>
                      </div>
                    </div>
                    <!-- <div class="" style="display: flex;">
                <div class="col-md-6" style="margin-left: auto;  padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" type="time" id="lt-start-time" name="lt-start-time" style="background:#0E0C0D; color:white;">
                  </div>
                </div>
                <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                  <div class="form-wrap">
                    <input class="form-input" type="time" id="lt-end-time" name="lt-end-time" style="background:#0E0C0D; color:white;">
                  </div>
                </div>
               </div> -->
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto;  padding:10px;">

                        <div class="form-wrap">
                          <input class="form-input" id="lt-bed" type="text" name="lt-bed" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="lt-bed" style="color:white;"># of Bedrooms Needed:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-bathroom" type="text" name="lt-bathroom" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <label class="form-label" for="lt-bathroom" style="color:white;"># of Bathrooms Needed:</label>
                        </div>
                      </div>
                    </div>

                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-city-2" type="text" style="background:#0E0C0D; color:white;" name="lt-city-2" data-constraints="@Required" required>
                          <label class="form-label" for="lt-city-2" style="color:white;">What city/area are you intersted in:</label>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-style-2" type="text" style="background:#0E0C0D; color:white;" name="lt-style-2" data-constraints="@Required" required>
                          <label class="form-label" for="lt-style-2" style="color:white;">What house style are you interested in:</label>
                        </div>
                      </div>
                    </div>
                    <div class="" style="display: flex;">
                      <div class="col-md-6" style="margin-left: auto; padding:10px;">
                        <div class="form-wrap">
                          <select name="lt-flex-date" id="lt-flex-date" class="form-input" style="background:#0E0C0D; color:white;">
                            <option value="Type Of Event/Production" data-constraints="@Required" required>Are you flexible with the check in/out date:</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6" style="margin-right: auto;  padding:10px;">
                        <div class="form-wrap">
                          <input class="form-input" id="lt-hear-2" type="text" style="background:#0E0C0D; color:white;" name="lt-hear-2" data-constraints="@Required" required>
                          <label class="form-label" for="lt-hear-2" style="color:white;">How did you hear about us:</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="margin-right: auto; padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="lt-info" type="text" name="lt-info" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="lt-info" style="color:white;">Any additional information you wish to share:</label>
                      </div>
                    </div>
                    <!-- <div class="col-md-12" style="padding:10px;">
                <div class="form-wrap">
                  <input class="form-input" id="lt-vehicles" type="text" name="lt-vehicles" style="background:#0E0C0D; color:white;">
                  <label class="form-label" for="lt-vehicles" style="color:white;">How many vehicles do you anticipate will park on the street:</label>
                </div>
               </div> -->
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="lt-attendees" id="lt-attendees" class="form-input" style="background:#0E0C0D; color:white;" data-constraints="@Required" required>
                          <option selected># of attendees:</option>
                          <option value='0-30'>0-30</option>
                          <option value='30-60'>30-60</option>
                          <option value='60-90'>60-90</option>
                          <option value='90-120'>90-120</option>
                          <option value='120-150'>120-150</option>
                          <option value='150-180'>150-180</option>
                          <option value='180-200'>180-200</option>
                          <option value='200-250'>200-250</option>
                          <option value='250-300'>250-300</option>
                          <option value='300-400'>300-400</option>
                          <option value='400-500'>400-500</option>
                          <option value='500+'>500+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="lt-vendors" type="text" name="lt-vendors" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="lt-vendors" style="color:white;"># of Guests Staying Over:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="lt-requirements" type="text" name="lt-requirements" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="lt-requirements" style="color:white;">Do you have any accessibility requirements:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="lt-parking" type="text" name="lt-parking" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="lt-parking" style="color:white;">Number of parking spots needed:</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <input class="form-input" id="lt-pets" type="text" name="lt-pets" style="background:#0E0C0D; color:white;">
                        <label class="form-label" for="lt-pets" style="color:white;">Do you have any pets</label>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="lt-hear-4" id="lt-hear-4" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>Are you interested in any additonal services</option>

                          <option value="House Cleaner">House Cleaner</option>
                          <option value="Window Cleaning">Window Cleaning</option>
                          <option value="Security Services">Security Services</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12" style="padding:10px;">
                      <div class="form-wrap">
                        <select name="lt-hear-5" id="lt-hear-5" class="form-input" style="background:#0E0C0D; color:white;">
                          <option value="Type Of Event/Production" data-constraints="@Required" required>What is your total rental budget</option>

                          <option value="$5,000-$10,000">$5,000-$10,000</option>
                          <option value="$10,000-$25,000">$10,000-$25,000</option>
                          <option value="$25,000-$50,000">$25,000-$50,000</option>
                          <option value="$50,000-$100,000">$50,000-$100,000</option>
                          <option value="$100,000-$250,000">$100,000-$250,000</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <article class="title-classic">
                      <div class="title-classic" style="margin-left:15px;">
                        <input class="form-input" id="initials" type="text" value="" placeholder="Initials" style="background:#0E0C0D; color:white; height:-20px; width:100px;" required>
                        <label for="confirm" style="margin-left:5px; color:white;">I certify that all of the information here is correct</label>
                      </div>
                    </article><br><br>
                    <center>
                      <button class="button button-black-outline" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
                    </center>
                  </form>
                </section>

                <!-- Long Term End -->

                </form>
              <!-- </div> -->
      </section>


    </div>

    <!-- Contact Form-->


  </div>
  <!-- Page Footer-->

  <?php require('footer.php'); ?>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    $(".datepicker").datepicker()
  </script>
  <script>
    function recaptchaCallback() {
      $('#submitBtn').removeAttr('disabled');
    };

    const data = document.querySelector('.form-shower');

    $('#myModal').on('shown.bs.modal', function() {
      $('#myInput').trigger('focus')
    })

    const contact = document.querySelector(`#contact`)
    const vocation = document.querySelector(`#vacation-rental`)
    const eventvenueForm = document.querySelector(`#event-venue`)
    const longTermForm = document.querySelector(`#long-term-furnished-rental`)
    const shortTermForm = document.querySelector(`#short-term-stay-event`)
    const filmlocationForm = document.querySelector(`#film-location`)
    const selectType = document.querySelector(`#rental-type`)
    // const selectType1 = document.querySelector(`#rental-type1`)



    selectType.addEventListener(`click`, function() {
      console.log(selectType.value)

      if (selectType.value === `c`) {
        vocation.style.display = `none`
        longTermForm.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `none`
        // selectType1.style.display = `none`
      } else if (selectType.value === 'vacation-rental') {
        // contact.style.display = `none`
        longTermForm.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `none`
        vocation.style.display = `block`
        // selectType1.style.display = `block`
      } else if (selectType.value === `event-venue`) {
        // contact.style.display = `none`
        vocation.style.display = `none`
        longTermForm.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `block`
        // selectType1.style.display = `none`
      } else if (selectType.value === `long-term-furnished-rental`) {
        // contact.style.display = `none`
        vocation.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `none`
        longTermForm.style.display = `block`
        // selectType1.style.display = `none`
      } else if (selectType.value === `short-term-stay-event`) {
        // contact.style.display = `none`
        vocation.style.display = `none`
        shortTermForm.style.display = `block`
        filmlocationForm.style.display = `none`
        eventvenueForm.style.display = `none`
        longTermForm.style.display = `none`
        // selectType1.style.display = `none`
      } else if (selectType.value === `film-location`) {
        // contact.style.display = `none`
        vocation.style.display = `none`
        shortTermForm.style.display = `none`
        filmlocationForm.style.display = `block`
        eventvenueForm.style.display = `none`
        longTermForm.style.display = `none`
        // selectType1.style.display = `none`
      }
    })

    // const visit = document.querySelector(`#vr-visits`)
    // const guest = document.querySelector(`#vr-yes_guest`)
    // // selectType.addEventListener(`click`, function() {
    // //   console.log(selectType.value)

    // selectType.addEventListener(`onchange`, function() {
    //   console.log(selectType.value)

    //   if (selectType.value === `no`) {
    //     guest.style.display = `none`
    //   } else if (selectType.value === 'yes') {
    //     // contact.style.display = `none
    //     guest.style.display = `block`

    //   } 
    // })

    function ShowHideDiv() {
      var ddlPassport = document.getElementById("vr-visits");
      var dvPassport = document.getElementById("vr-yes_guest");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }

    function ShowHideDiv1() {
      var ddlPassport = document.getElementById("vr-pets");
      var dvPassport_no = document.getElementById("vr-no_pets");
      var dvPassport = document.getElementById("vr-yes_pets");
      dvPassport.style.display = ddlPassport.value == "yes" ? "block" : "none";
      dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    }

    // function ShowHideDiv3() {
    //   var ddlPassport = document.getElementById("vr-no_pets");
    //   // var dvPassport_no = document.getElementById("vr-no_pets");
    //   var dvPassport = document.getElementById("vr-yes_pets");
    //   dvPassport.style.display = ddlPassport.value == "1" ? "block" : "none";
      
    //   // dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    // }
    // function ShowHideDiv3() {
    //   var ddlPassport = document.getElementById("vr-no_pets");
    //   // var dvPassport_no = document.getElementById("vr-no_pets");
    //   var dvPassport = document.getElementById("vr-yes_pets");
    //   dvPassport.style.display = ddlPassport.value == "2" ? "block" : "none";
    //   // dvPassport_no.style.display = ddlPassport.value == "yes" ? "block" : "none";
    // }

    // function ShowHideDiv2() {
    //   var ddlPassport = document.getElementById("vr-serv");
    //   var dvPassport = document.getElementById("vr-yes_service_home");
    //   var dvPassport1 = document.getElementById("vr-yes_service_lxr");
    //   dvPassport.style.display = ddlPassport.value == "In HomeServices" ? "block" : "none";
    //   dvPassport1.style.display = ddlPassport.value == "Luxury Services" ? "block" : "none";
    // }

    function ShowHideDiv4() {
      var ddlPassport = document.getElementById("vr-serv");
      var dvPassport = document.getElementById("vr-other");
      dvPassport.style.display = ddlPassport.value == "Other" ? "block" : "none";
    }
    
  </script>
  <!-- Javascript-->

  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script> -->
  <!-- <script type="text/javascript">
    $(function() {
      var code = "+91"; // Assigning value from model.
      $('#txtPhone').val(code);
      $('#txtPhone').intlTelInput({
        autoHideDialCode: true,
        autoPlaceholder: "ON",
        dropdownContainer: document.body,
        formatOnDisplay: true,
        hiddenInput: "full_number",
        initialCountry: "auto",
        nationalMode: true,
        placeholderNumberType: "MOBILE",
        preferredCountries: ['US'],
        separateDialCode: true
      });
      $('#btnSubmit').on('click', function() {
        var code = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
        var phoneNumber = $('#txtPhone').val();
        var name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
        console.log('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
      });
    });
  </script> -->
  <!-- <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script> -->

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" /> -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var code = ""; // Assigning value from model.
            $('#txtPhone').val(code);
            $('#txtPhone').intlTelInput({
                autoHideDialCode: true,
                autoPlaceholder: "ON",
                dropdownContainer: document.body,
                formatOnDisplay: true,
                hiddenInput: "full_number",
                initialCountry: "auto",
                nationalMode: true,
                placeholderNumberType: "MOBILE",
                preferredCountries: ['US'],
                separateDialCode: true
            });
            $('#btnSubmit').on('click', function () {
                var code = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
                var phoneNumber = $('#txtPhone').val();
                var name = $("#txtPhone").intlTelInput("getSelectedCountryData").name; 
                document.getElementById("txtPhone").value = code;
                console.log('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);

                $.ajax({
                        url:"./a/m.php",
                        method:"post",
                        data: {
                            code: code
                        },
                        success: function(data){
                           console.log(data);
                        }
                    });
            });
        });

        
        // document.querySelector(`.country-listbox`).addEventListener(`click`, function(){
        //   // document.querySelector(`.iti`).click()
          
          
        //   document.getElementById("txtPhone1").disabled = false;
      
        //       })
        
function enable_disable() {
  var a = document.getElementById("txtPhone1");
  // console.log(a);
            // $("txtPhone1").prop('disabled', true);
            document.getElementById("txtPhone1").disabled = false;
        }

    </script>

</body>

</html>