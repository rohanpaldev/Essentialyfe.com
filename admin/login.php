<?php
include('../config.php');
if (isset($_SESSION['username'])) {
    header("location:index.php");
    // exit();
}

//login process
if (isset($_POST['login'])) {
    $username = trim(strtolower(mysqli_real_escape_string($conn, $_POST['username'])));
    $password = mysqli_real_escape_string($conn, $_POST['password']);

     $chkAdmin = mysqli_query($conn, "SELECT * FROM `register` where `username`='$username' AND `password`='$password'");
    // print_r($chkAdmin);
    // die();
    // print_r(mysqli_num_rows($chkAdmin));
    if (mysqli_num_rows($chkAdmin)){
        $adminData = mysqli_fetch_assoc($chkAdmin);
        print_r($_SESSION['username']['username']);
        $_SESSION['username'] = $adminData;
            header('location: index.php');
    }else {               
        echo "<div class='alert alert-danger' role='alert'>
      You have entered wrong username.!
      </div>";
    }
}




// if(isset($_POST['submit'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//    echo  $query = "SELECT `username`, `password` FROM `register` WHERE `username` = '$username' and `password`= '$password'";
//     $result = mysqli_query($conn, $query);
    
//     if(mysqli_num_rows($result) >0){
//         while ($row = mysqli_fetch_assoc($result)) {
//             session_start();
//             $_SESSION['username']=$row['username'];
//             $_SESSION['password'] = $row['password'];
//         }
//         header('location: index.php');
//     }else{
//         echo "<div class='alert alert-danger' role='alert'>
//         You have entered wrong username.!
//       </div>";
//       echo "r=lkajdslka";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>Essentialyfe.com|Login</title>
    <style>
        .login-box {
            background-image: url(./img/1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        body {
            background-image: url(./img/2.jpg);
            background-size: cover;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row login-cont">
            <div class="col  login-box">

            </div>
            <div class="col  login-box-2">
                <div class="row">
                    <div class="col-10 mx-auto login_form">
                        <caption>
                            <h3 class="text-center">Login</h3>
                        </caption>
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" placeholder="type your username" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="type your password" name="password" id="password">
                                <input type="checkbox" class="mt-3" onclick="showpass()"> Show Password
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-primary w-100" name="login" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
    function showpass() {
        const showpass = document.querySelector('#password');
        if (showpass.type === "password") {
            showpass.type = "text"
        } else {
            showpass.type = "password";
        }
    }
</script>

</html>