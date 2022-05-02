<?php
//connecting data base
include('../config.php');
// // fecthing form data  using OOPS
if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    $query = $conn -> prepare("INSERT INTO `register`( `email`, `username`, `password`) VALUES ('$email','$username','$password')") ;
    $result = $query->execute();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./style.css" type="text/css">
   
    <title>Essentialyfe.com | Register</title>
    <style>
        .login-box {
            background-image: url(./img/1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        body {
            background-image: url(./img/5.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row login-cont">
            <div class="col  login-box">
                <div class="row">
                    <div class="col-10 mx-auto  login_form justify-content-center">
                        <caption>
                            <h2 class="text-center  text-white">Register yourself for Essentialyfe</h2>
                        </caption>
                        <div class="row mt-5 mx-5">
                            <div class="col">
                                <div class="social">
                                    <a href=""><h1 class="text-white "><i class="fa-brands fa-facebook-square"></i></h1></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="social">
                                    <a href=""><h1 class="text-white "><i class="fa-brands fa-instagram"></i></h1></a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="social">
                                    <a href=""><h1 class="text-white "><i class="fa-brands fa-twitter"></i></h1></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col  login-box-2">
                <div class="row">
                    <div class="col-10 mx-auto login_form">
                        <caption>
                            <h3 class="text-center">Sign Up</h3>
                        </caption>
                        <form method="POST" id="form" >
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="type your email" class="form-control" name="email" id="email">
                                <div class="error"></div>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" placeholder="type your username" name="username" id="username">
                                <div class="error"></div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="type your password"  name="password" id="password">
                                <div class="error"></div>
                                <input type="checkbox" class="mt-3" onclick="showpass()"> Show Password
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-primary w-100 hi" name="submit" type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                   <span class="mt-4">
                   </span>
                </div>
            </div>
        </div>
  
    </div>
</body>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function showpass() {
  const showpass = document.querySelector("#password");
  if (showpass.type === "password") {
    showpass.type = "text";
  } else {
    showpass.type = "password";
  }
}
</script>
<script src="./registervalidate.js" ></script>

</html>