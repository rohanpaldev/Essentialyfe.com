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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#rental-type").keyup(function() {
        if (this.value == "vacation-rental" || this.value == "event-venue" || this.value == "Film Location Rental" || this.value == "short-term-stay-event" || this.value == "long-term-furnished-rental") {
          $('#rest-of-form').css("display", "block");
        } else {
          $('#rest-of-form').css("display", "none");
        }
      });
    });
  </script>
</head>