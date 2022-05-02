<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php

include('../config.php');
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

//fetching form data
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $bedroom = $_POST['bedroom'];
    $bathroom = $_POST['bathroom'];
    $guest = $_POST['guest'];
    $sqft = $_POST['sqft'];
    $description = $_POST['description'];
    $vacation = $_POST['vacation'];
    $vanue = $_POST['venue'];
    $film = $_POST['film'];
    $pool = $_POST['pool'];
    $ltfr = $_POST['ltfr'];
    $reg_date = $_POST['reg_date'];
    $wedding = $_POST['wedding'];
    $alttext = $_POST['alttext'];
    $file = $_FILES['file'];
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_error = $_FILES['file']['error'];
    move_uploaded_file($file_tmp, "../images/properties/" . "$file_name");

    if (isset($_GET['update'])) {
        $id = $_GET['update'];
     $name = $_POST['name'];
    $address = $_POST['address'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $bedroom = $_POST['bedroom'];
    $bathroom = $_POST['bathroom'];
    $guest = $_POST['guest'];
    $sqft = $_POST['sqft'];
    $description = $_POST['description'];
    $vacation = $_POST['vacation'];
    $vanue = $_POST['venue'];
    $film = $_POST['film'];
    $pool = $_POST['pool'];
    $ltfr = $_POST['ltfr'];
    $reg_date = $_POST['reg_date'];
    $wedding = $_POST['wedding'];
    $alttext = $_POST['alttext'];
    $file = $_FILES['file'];
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_error = $_FILES['file']['error'];
    move_uploaded_file($file_tmp, "../images/properties/" . "$file_name");
        $query = "UPDATE `properties` SET `name`='$name',`address`='$address',`area`='$area',`price`='$price',`bedroom`='$bedroom',`bathroom`='$bathroom',`guest`='$guest',`sqft`='$sqft',`description`='$description',`image`='$file',`alttext`='$alttext',`vacation`='$vacation',`venue`='$venue',`film`='$film',`ltfr`='$ltfr',`pool`='$pool',`reg_date`='$reg_date',`wedding`='$wedding' WHERE `id`='$id'";
        $result = mysqli_query($conn, $query);
    } else {
        $query = "INSERT INTO `properties`( `name`, `address`, `area`, `price`, `bedroom`, `bathroom`, `guest`, `sqft`, `description`, `image`,`alttext`, `vacation`, `venue`, `film`, `ltfr`, `pool`, `reg_date`,`wedding`) VALUES ('$name','$address','$area','$price','$bedroom','$bathroom','$guest','$sqft','$description','$file_name','$alttext','$vacation','$venue','$film','$pool','$ltfr','$reg_date','$wedding')";
        $result = mysqli_query($conn, $query);
    }
    if ($result) {
        echo "Data Saved";
        header('location:Add_card.php');
    } else {
        echo "data not saved";
        print_r($query);
    }

    if (empty($file_error) == true) {
        move_uploaded_file($file_name, "" . $file_tmp);
        echo "Success";
    } else {
        print_r($errors);
    }
}


if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $query = "SELECT * FROM `properties` WHERE `id`='$id'";
    $result = mysqli_query($conn, $query);
    $row = $result->fetch_assoc();
}
// die();  

?>
<!doctype html>
<!-- <img src="../images/properties/" alt=""> -->
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <title>EssentiaLyfe | Admin</title>
</head>

<body class="bg-theme bg-theme1">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <?php 
            include('./sidebar.php')
            ?>
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">

                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
                                    <i class='bx bx-bell'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- <a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a> -->
                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify"><i class="bx bx-group"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                                            ago</span></h6>
                                                    <p class="msg-info">5 new user registered</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Notifications</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                    <i class='bx bx-comment'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Messages</p>
                                            <p class="msg-header-clear ms-auto">Marks all as read</p>
                                        </div>
                                    </a>
                                    <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                                                            ago</span></h6>
                                                    <p class="msg-info">The standard chunk of lorem</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Messages</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0"><?php print_r($_SESSION['username']['username']) ?></p>
                                <p class="designattion mb-0">All Previligious</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="./logout.php"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8 mx-auto mt-3">
                            <caption>
                                <h1 class="text-center">
                                    Add Your New Card
                                </h1>
                            </caption>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Type your name" required value="<?php echo $row['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" name="address" id="address" cols="30" rows="10" placeholder="Type your address" required value="<?php echo $row['address'] ?>"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="area">Area</label>
                                    <input type="text" class="form-control" name="area" id="area" placeholder="type your area" required value="<?php echo $row['area'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" name="price" id="price" placeholder="type your price" value="<?php echo $row['price'] ?>">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bedroom">Bedroom</label>
                                            <select name="bedroom" id="bedroom" class="form-select">
                                                <option value="<?php $var =  isset($row['bedroom']) ? $row['bedroom'] : 'Select Bedroom';
                                                                echo $var; ?>"><?php $var =  isset($row['bedroom']) ? $row['bedroom'] : 'Select Bedroom';
                                                                                                                                                            echo $var; ?></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="15+">15+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="bathroom">Bathroom</label>
                                            <select name="bathroom" id="bathroom" class="form-select">
                                                <option value="<?php $var =  isset($row['bathroom']) ? $row['bathroom'] : 'Select Bathroom';
                                                                echo $var; ?>"><?php $var =  isset($row['bathroom']) ? $row['bathroom'] : 'Select Bathroom';
                                                                                                                                                            echo $var; ?></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="guest">Guest</label>
                                            <select name="guest" id="guest" class="form-select">
                                                <option value="<?php $var =  isset($row['guest']) ? $row['guest'] : 'Select Guest';
                                                                echo $var; ?>"><?php $var =  isset($row['guest']) ? $row['guest'] : 'Select Guest';
                                                                                                                                                    echo $var; ?></option>
                                                <option value="25">Up to 25 People</option>
                                                <option value="25-50">25-50</option>
                                                <option value="50-100">50-100</option>
                                                <option value="100-250">100-250</option>
                                                <option value="250-500">250-500</option>
                                                <option value="500-1000">500-1,000</option>
                                                <option value="1000-and-upto">1,000 and Up</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sqft">Square feet</label>
                                    <input type="text" name="sqft" id="sqft" class="form-control" placeholder="type square feet" value="<?php echo $row['sqft'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="type description here" value="<?php echo $row['description'] ?>"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="file">Image</label>
                                            <input type="file" class="form-control" name="file" id="file">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="alttext">Alt Text</label>
                                            <input type="text" name="alttext" id="alttext" placeholder="type your Alt Text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="vacation">Vacation</label>
                                            <select name="vacation" id="vacation" class="form-select">
                                                <option value="<?php $var =  isset($row['vacation']) ? $row['vacation'] : '';
                                                                echo $var; ?>"><?php $var =  isset($row['vacation']) ? $row['vacation'] : 'Select Vacation';
                                                                                                                                                echo $var; ?></option>
                                                <option value="off">off</option>
                                                <option value="on">on</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="venue">Venue</label>
                                            <select name="venue" id="venue" class="form-select">
                                                <option value="<?php $var =  isset($row['venue']) ? $row['venue'] : 'Select venue';
                                                                echo $var; ?>"><?php $var =  isset($row['venue']) ? $row['venue'] : 'Select venue';
                                                                                                                                                    echo $var; ?></option>
                                                <option value="on">on</option>
                                                <option value="off">off</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="film">Film</label>
                                            <select name="film" id="film" class="form-select" value="">
                                                <option value="<?php $var =  isset($row['film']) ? $row['film'] : 'Select Film';
                                                                echo $var; ?>"><?php $var =  isset($row['film']) ? $row['film'] : 'Select Film';
                                                                                                                                                echo $var; ?></option>
                                                <option value="off">on</option>
                                                <option value="off">off</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="pool">Pool</label>
                                            <select name="pool" id="pool" class="form-select" value="">
                                                <option value="<?php $var =  isset($row['pool']) ? $row['pool'] : 'Select pool';
                                                                echo $var; ?>"><?php $var =  isset($row['pool']) ? $row['pool'] : 'Select pool';
                                                                                                                                                echo $var; ?></option>
                                                <option value="on">on</option>
                                                <option value="off">off</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="ltfr">Long Term Film Rentals</label>
                                            <select name="ltfr" id="ltfr" class="form-select" value="<?php $var =  isset($row['ltfr']) ? $row['ltfr'] : 'Select ltfr';
                                                                                                        echo $var; ?>">
                                                <option value="select"><?php $var =  isset($row['ltfr']) ? $row['ltfr'] : 'Select ltfr';
                                                                        echo $var; ?></option>
                                                <option value="on">On</option>
                                                <option value="off">Off</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="wedding">Wedding</label>
                                            <select name="wedding" id="wedding" class="form-select" value="<?php $var =  isset($row['wedding']) ? $row['wedding'] : 'Select wedding';
                                                                                                            echo $var; ?>">
                                                <option value="select"><?php $var =  isset($row['wedding']) ? $row['wedding'] : 'Select wedding';
                                                                        echo $var; ?></option>
                                                <option value="on">on</option>
                                                <option value="off">off</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="reg_date">Registration Date</label>
                                    <input type="date" name="reg_date" id="reg_date" class="form-control">
                                </div>
                                <div class="form-group mt-3 mb-5">
                                    <button class="btn btn-primary w-100" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!-- <footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer> -->
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <p class="mb-0">Gaussian Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>
            <hr>
            <p class="mb-0">Gradient Background</p>
            <hr>

            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>
        </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <script src="assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
    <script src="assets/js/index.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>



</html>