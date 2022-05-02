<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php

include('../config.php');
if (!isset($_SESSION['username'])) {
	header("location:login.php");
}


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

if (isset($House_style)) {
	$sql = "
        SELECT * FROM properties WHERE 
        venue='on' AND 
        area LIKE '%" . $Location . "%' AND 
        pool = '" . $Pool . "' AND 
        guest BETWEEN'" . $value[0] . "' AND '" . $value[1] . "'
        ";

	$result = mysqli_query($conn, $sql);
}

?>

<!doctype html>
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
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
	<style>
		/* .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    } */

		html.ie-10 .ie-panel,
		html.lt-ie-10 .ie-panel {
			display: block;
		}
	</style>
	<style>

	</style>

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
								<p class="user-name mb-0"><?php print_r($_SESSION['username']['username'])?></p>
								<p class="designattion mb-0">Web Designer</p>
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
						<div class="col">
							<h1 class="text-center">Welcome to EssentiaLyfe</h1>
							<p class="text-center">Search Your Product here...!</p>
							<div class="container-fluid">
								<div class="row">
									<div class="col">
										<div>
											<div style="margin-top: 45px;">
												<div class="col">
													<form autocomplete="off" action='search_filter.php' method='post'>

														<!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button>
                    										</form> -->
														<!-- <form > -->
														<div class='container-fluid'>

															<div class='input-group input-group-sm mb-3'>
																<div class='input-group-prepend'>
																	<!-- <span class='form-select' id='inputGroup-sizing-sm'>Date Select</span> -->
																</div>
																<select name='Event' class='form-select' id='inputGroupSelect01'>
                                                                    <option value=" " selected > Event type</option>
                                                                    <option value='Private'>Private</option>
                                                                    <option value='Corporate'>Corporate</option>
                                                                </select>
																<input type="text" class='form-select' name="daterange" value="01/01/2018 - 01/15/2018" readonly style="width: 115px;" />
																<select name='House_style' class='form-select' id='inputGroupSelect01'>
																	<option selected>House Style</option>
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
																<select name='Location' class='form-select' id='inputGroupSelect01'>
																	<option selected>Location</option>
																	<option value='Hollywood'>Hollywood</option>
																	<option value='Hollywood Hills'>Hollywood Hills</option>
																	<option value='Traditional'>West Hollywood</option>
																	<option value='Sherman Oaks'>Sherman Oaks</option>
																	<option value='Malibu'>Malibu</option>
																	<option value='Beverly Hills'>Beverly Hills</option>
																	<option value='Bel Air'>Bellair</option>
																	<option value='Studio City'>Studio City</option>
																	<option value='Brentwood'>Brentwood</option>
																	<option value='Holmby Hills'>Holmby Hills</option>
																	<option value='DTLA'>DTLA</option>
																	<option value='Westwood'>Westwood</option>
																	<option value='Woodland Hills'>Woodland Hills</option>
																	<option value='Encino'>Encino</option>
																	<option value='Tarzana'>Tarzana</option>
																	<option value='Newport Beach'>Newport Beach</option>
																</select>
																<select name='Capacity' class='form-select' id='inputGroupSelect01'>
																	<option selected>Capacity</option>
																	<option value='0-25'>Up to 25 People</option>
																	<option value='25-50'>25-50</option>
																	<option value='50-100'>50-100</option>
																	<option value='100-250'>100-250</option>
																	<option value='250-500'>250-500</option>
																	<option value='500-1000'>500-1,000</option>
																	<option value='1000-10000'>1,000 and Up</option>
																</select>
																<select name='View' class='form-select' id='inputGroupSelect01'>
																	<option selected>View</option>
																	<option value='Y'>Yes</option>
																	<option value='N'>No</option>
																	<option value=''>Doesn't Matter</option>
																</select>
																<select name='Pool' class='form-select' id='inputGroupSelect01'>
																	<option selected>Pool</option>
																	<option value='Y'>Yes</option>
																	<option value='N'>No</option>
																	<option value=''>Doesn't Matter</option>
																</select>
																<select name='Parking' class='form-select' id='inputGroupSelect01'>
																	<option selected>Parking</option>
																	<option value='Y'>Yes</option>
																	<option value='N'>No</option>
																	<option value=''>Doesn't Matter</option>
																</select>
																<select name='Price' class='form-select' id='inputGroupSelect01' class="form-control">
																	<option selected>Venue Price</option>
																	<option value='5000'>Up to $5,000</option>
																	<option value='10000'>$5,000 - $10,000</option>
																	<option value='25000'>$10,000 - $25,000</option>
																	<option value='100000'>$25,000 - $100,000</option>
																	<option value='250000'>$100,000 - $250,000</option>
																	<option value='250001'>$250,000 and up</option>
																</select>
																<!-- <button class='button button-black-outline' type='submit' data-toggle='modal' data-target='#exampleModalCenter'>Submit</button> -->
																<button id="searchBtn" type="submit" class="btn btn-secondary btn-search search-btng" style="font-weight:300; color:white; background:black; margin-left:-4px; width: 115px;"><span class="glyphicon glyphicon-search">&nbsp;</span> <span class="label-icon"><i class="fa-solid fa-magnifying-glass" style="font-size:13px; margin-right:2px; height:24px; margin-top:12px;"></i> Search</span></button>
															</div>
													</form>
												</div>
											</div>
										</div>
										
										<?php

										if ($result->num_rows > 0) {
											echo "
											<div class='container'>
											<div class='row mb-5'>
											<div class='col'>
												<h3 class='text-center'>Here is your search result</h3>
											</div>
											</row>
											</div>
    
            							<table  class='table table-dark table-responsive no-berder table-hover'>
										<thead class='text-uppercase'>
    										<tr>
    										    <th>ID</th>
    										    <th>Name</th>
    										    <th>Address</th>
    										    <th>Area</th>
    										    <th>Price</th>
    										    <th>Bedroom</th>
    										    <th>Bathroom</th>
    										    <th>Guest</th>
    										    <th>Sqft</th>
    										    <th>Description</th>
    										    <th>Image</th>
    										    <th>Vacation</th>
    										    <th>Venue</th>
    										    <th>Film</th>
    										    <th>Ltfr</th>
    										    <th>Pool</th>
    										    <th>Reg_date</th>
    										    <th>Wedding</th>
    										</tr>
												</thead>
											";
												// output data of each row
												while ($row = $result->fetch_assoc()) {
													echo "<tr>
    										  <td>" . $row["id"] . "</td>
     										 <td>" . $row["name"] . " </td>
     										 <td>" . $row["address"] . "</td>
     										 <td>" . $row["area"] . "</td>
     										 <td>" . $row["price"] . "</td>
     										 <td> " . $row["bedroom"] . "</td>
     										 <td>" . $row["bathroom"] . "</td>
     										 <td>" . $row["guest"] . " </td>
     										 <td>" . $row["sqft"] . "</td>
     										 <td>" . $row["description"] . "</td>
     										 <td>" . $row["image"] . " </td>
     										 <td>" . $row["vacation"] . "</td>
     										 <td>" . $row["venue"] . "</td>
     										 <td>" . $row["film"] . " </td>
     										 <td>" . $row["ltfr"] . "</td>
     										 <td>" . $row["pool"] . "</td>
     										 <td>" . $row["reg_date"] . "</td>
     										 <td> " . $row["Wedding"] . "</td>
  											</tr>";
											}
											echo "</table>";
										} else {
											echo "0 results";
										}

										?>
									</div>
								</div>
							</div>
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
	<script src="js/core.min.js"></script>
	<script src="js/script.js"></script>
	<script>
		$(document).ready(function() {
			$(function() {
				$('input[name="daterange"]').daterangepicker({
					"startDate": "21/04/2022",
					"endDate": "11/05/2022",
					opens: 'center',
					locale: {
						format: 'DD/MM/YYYY'
					}
				});
			});
		});
	</script>
	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 06:34:40 GMT -->

</html>