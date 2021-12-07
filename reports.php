<?php
include 'lib.php';
$hacker = $_SESSION["type"];
if ($hacker != 6) {
	header("location:index.php");
}
$result = result($con, "select * from Water order by id desc limit 500 ");
$row;


?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="refresh" content="600;url=logout.php" />
	<meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>نظام إدارة الموارد البشرية </title>
	<link rel="shortcut icon" href="logo.png">
	<link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<style>
		body {
			font-family: adobe arabic, Helvetica, sans-serif;

			background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%, rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%, rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%, rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%, rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%), linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%, rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%, rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%), linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%, rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%, rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%, rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%), linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%, rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%, rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%), linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%, rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%, rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%, rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%, rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%), linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%, rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%, rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%), linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%, rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%, rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%), linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%, rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%, rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%), linear-gradient(90deg, #ffffff, #ffffff);
		}

		.notification {
			background-color: #4CAF50;
			/* Green background */
			border: 1px solid green;
			/* Green border */
			color: white;
			/* White text */
			padding: 10px 24px;
			/* Some padding */
			cursor: pointer;
			/* Pointer/hand icon */
			float: right;
			/* Float the buttons side by side */
		}

		.notification:hover {
			background: red;
		}

		.notification .badge {
			position: absolute;
			top: -10px;
			right: -10px;
			padding: 5px 10px;
			border-radius: 50%;
			background-color: red;
			color: white;
		}
	</style>
	<style>
		/* margin for all = 0 */
		* {
			margin: 0;
		}

		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}

		img.avatar {
			margin-right: 10% width: 45%;
			border-radius: 50%;
			height: 120px;
			cursor: pointer;
			transition: 0.3s;
		}

		img:hover {
			opacity: 0.7;
		}


		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
			line-height: auto;
			background: #37cd01;
			direction: rtl;
		}

		h5 {
			font-size: 20px;

		}

		#bg_img {
			background: url(images/bg.jpg) repeat-x;
		}

		#header {
			padding-top: 4px;
			width: 100%;
			height: 170px;
			margin-bottom: 0px;
		}

		#myImg {
			border-radius: 0px;
			cursor: pointer;
			transition: 0.3s;
		}

		#myImg:hover {
			opacity: 0.7;
		}

		#header .logo {
			float: right;
			width: 120px;
			height: 150px;
			margin-right: 8%;
			margin-top: 10px;

		}

		#header .center_logo {
			margin: 0px 22% 0px 0px;
			float: right;
			width: 23%;
			height: 150px;
		}

		#header .center_logo img {
			width: 100%;
			height: 100%;
		}

		#bg_img .headertd {
			border-radius: 10px;
			border: 0;

		}

		#header .left_Logo {
			width: 120px;
			height: 130px;
			margin-top: 10px;
			float: left;
			margin-left: 6%;
		}

		#header .logo img {
			margin-top: 2.5%;
			margin-bottom: 2.5%;
			width: 95%;
			height: 95%;
		}

		#header .login {
			float: left;
			margin-left: 10%;
			height: 100%;
			color: white;
			font-weight: bold;
		}

		#bg_img .BG_login {
			margin: auto;
			width: 80%;
			padding: 30px;
			font-weight: bold;
			font-size: 18px;
			color: white;

		}

		#bg_img .BG_login pre {
			font-family: ae_AlHor, ae_AlMohanad, AlArabiya, AL-Mohanad Bold;
			align: center;
			margin-top: 5px;
			margin-bottom: 5px;
			margin-right: 20px;
			font-weight: bold;
			color: darkblue;
			font-size: 26px;
		}

		.but {
			background: #ABC314;
			color: brown;
			border: 1px solid gray;
			margin-top: 3px;

			font-family: tradtional arabic;
			font-weight: bold;
		}

		#header .login .input {
			width: 180px;
			border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			-o-border-radius: 5px;
			border: 1px dotted white;
			background: paige;
		}

		/*Form styles */

		/* Full-width input fields */
		input[type=text] {
			width: 50%;

			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 3px solid #ccc;
			box-sizing: border-box;
		}

		input[type=password] {
			width: 50%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 3px solid #ccc;
			box-sizing: border-box;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%
		}

		/* Set a style for all buttons */

		.container {
			background-color: none;
			padding: 5px;
		}


		/* The message box is shown when the user clicks on the password field */
		#message {
			display: none;
			background: none;
			color: #000;
			position: relative;
			padding: 20px;
			margin-top: 0px;
		}

		#message p {
			padding: 5px 35px;
			font-size: 18px;
		}

		h1 {
			font-family: Adobe Arabic;
			font-size: 32px;
			margin-bottom: 0px;
			color: #000;
			font-size-adjust: inherit;
			border-spacing: 20px;

		}

		b {
			font-family: Adobe Arabic;
			font-size: 25px;
			align: center;
			margin-top: 5px;

		}

		p {
			font-family: Adobe Arabic;
			font-size: 25px;
			align: center;
			margin-top: 5px;

		}

		#text {
			display: none;
			color: red
		}

		/* Add a green text color and a checkmark when the requirements are right */
		.valid {
			color: green;
		}

		.valid:before {
			position: relative;
			content: " ✔";
		}

		/* Add a red text color and an "x" when the requirements are wrong */
		.invalid {
			color: red;
		}

		.invalid:before {
			position: relative;
			content: " ✖";
		}

		#footer {
			width: 100%;
			background: url(images/header-bg.jpg) repeat-x;
			color: white;
			margin-top: 20px;
			border-top: 1px orange solid;
			padding-bottom: 5px;
		}

		#footer .part {
			float: right;
			width: 50%;
			padding-right: 10px;
			padding-top: 5px;
		}

		#footer h5 {
			margin-top: 3px;
			border-bottom: 1px;
			padding: 3px 0 3px 0;
			font-family: ae_AlMohanad;
			font-size: 14px;
		}
	</style>
	<style>
		.btn-group button {
			background-color: #4CAF50;
			/* Green background */
			border: 1px solid green;
			/* Green border */
			color: white;
			/* White text */
			padding: 10px 24px;
			/* Some padding */
			cursor: pointer;
			/* Pointer/hand icon */
			float: right;
			/* Float the buttons side by side */
		}

		/* Clear floats (clearfix hack) */
		.btn-group:after {
			content: "";
			clear: both;
			display: table;
		}

		.btn-group button:not(:last-child) {
			border-right: none;
			/* Prevent double borders */
		}

		/* Add a background color on hover */
		.btn-group button:hover {
			background-color: #3e8e41;
		}

		h2 {
			font-family: Khalid Art bold;
			font-size: 17px;
		}

		.dropbtn {
			background-color: #3498DB;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}

		.dropbtn:hover,
		.dropbtn:focus {
			background-color: #2980B9;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			overflow: auto;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown a:hover {
			background-color: #ddd;
		}

		.show {
			display: block;
		}
	</style>
</head>

<body style="
background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);	">
	<div id="bg_img">
		<table width="100%">
			<tr>
				<td align="center" class="headertd">
					<div id="header">
						<div class="logo"><img src="images/sd.png" width="69" height="87" id="myImg"></div>
						<div class="center_logo"><img src="images/title.png" width="995" height="448" id="myImg"></div>
						<div class="left_Logo"><img src="images/states.png" width="69" height="87" class="logo" id="myImg"></div>

						<!-- end of title -->
					</div>
					<!--  header end -->
					<hr />
				</td>
				<!-- end of td -->
			</tr>
			<!-- end of tr -->
		</table>
		<!--  table end -->


		<div>
			<!--  ajax -->



			<div class="BG_login">


				<div align="center">
					<h2 style="color: darkblue; font-size: 25px;font-family:khalid art;">تقارير إلكترونية</h2>






					<img src="images/reports.png" width="400" height="200" alt="" style="margin-top: 15px;" />
					<div class="container" style="margin-top: 20px;">



						<div class="btn-group" style="width:100%">
							<a href="Print_Tasdeg_Salarys.php"><button style="width:24.3%">
									<h2 style="font-family: khalid art;">التصديق بمبلغ مرتبات هذا الشهر</h2>
								</button> </a>
							<a href="Print_Maash.php"><button style="width:29.3%">
									<h2 style="font-family: khalid art;">التصديق بمبلغ التأمين الإجتماعي للشهر</h2>
								</button> </a>
							<a href="Print_Tameen.php"><button style="width:26.3%">
									<h2 style="font-family: khalid art;">التصديق بمبلغ التأمين الصحي للشهر</h2>
								</button> </a>
							<a href="#"><button style="width:17%">
									<h2 style="font-family: khalid art;">جملة مبلغ المرتبات</h2>
								</button> </a>

						</div>
						<p>&nbsp; </p>

						<div class="btn-group" style="width:100%">
							<a href="#"><button style="width:24.3%">
									<h2 style="font-family: khalid art;">إجمالي الصرف على الفصل الأول</h2>
								</button> </a>
							<a href="#"><button style="width:29.3%">
									<h2 style="font-family: khalid art;">تقارير الإحالة إلى المعاش</h2>
								</button> </a>
							<a href="#"><button style="width:26.3%">
									<h2 style="font-family: khalid art;">تقرير عن السلفيات </h2>
								</button> </a>
							<a href="#"><button style="width:17%">
									<h2 style="font-family: khalid art;">تقرير عن الخصومات </h2>
								</button> </a>

						</div>
						<p>&nbsp; </p>

						<div class="btn-group" style="width:100%">
							<a href="#"><button style="width:24.3%">
									<h2 style="font-family: khalid art;">تقارير عن الترقيات</h2>
								</button> </a>
							<a href="#"><button style="width:29.3%">
									<h2 style="font-family: khalid art;">تقارير عن الإجازات</h2>
								</button> </a>
							<a href="#"><button style="width:26.3%">
									<h2 style="font-family: khalid art;">تقارير الموقوفين</h2>
								</button> </a>
							<a href="Man_Power.php"><button style="width:17%">
									<h2 style="font-family: khalid art;">الصفحة الرئيسية</h2>
								</button> </a>

						</div>
					</div>




					<p>&nbsp; </p>
					<p>&nbsp; </p>
					<p>&nbsp; </p>
					<p>&nbsp; </p>
					<p>&nbsp; </p>
					<p>&nbsp; </p>




					<!--  bg end -->





				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<h5 align="center"> جميع الحقوق محفوظة <?php echo '' . date("Y") . "" ?> &copy; Continue IT 0123223171 </h5>
	</div>

</body>

</html>