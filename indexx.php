<?php
//index.php
session_start();
if (isset($_SESSION["username"])) {
	header("location:trans.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>نظام إدارة الموارد البشرية </title>
	<link rel="shortcut icon" href="logo.png">
	<link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
		input[type=text]::placeholder {
			color: darkorchid;
			font-family: adobe arabic;
			font-size: 20px;
		}
		input[type=password]::placeholder {
			color: darkorchid;
			font-family: adobe arabic;
			font-size: 20px;
		}
		img.avatar {
			margin-right: 1%;
			width: 17%;
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
			background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%, rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%, rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%, rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%, rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%), linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%, rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%, rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%), linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%, rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%, rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%, rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%), linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%, rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%, rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%), linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%, rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%, rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%, rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%, rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%), linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%, rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%, rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%), linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%, rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%, rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%), linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%, rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%, rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%), linear-gradient(90deg, #ffffff, #ffffff);
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
			margin: 0px 24% 0px 0px;
			float: right;
			width: 21%;
			height: 170px;
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
			height: 110px;
			margin-top: 0px;
			float: left;
			margin-left: 7%;
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
			width: 60%;
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
			color: #000;
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
		input[type=text]:focus {
			box-shadow: none;
			outline: none;
			border-color: blue;
			border-style: solid solid solid solid;
			border-radius: 50px;
		}
		input[type=password]:focus {
			box-shadow: none;
			outline: none;
			border-color: blue;
			border-style: solid solid solid solid;
			border-radius: 50px;
		}
		input[type=password] {
			width: 50%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 3px solid #ccc;
			box-sizing: border-box;
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
			font-size: 25px;
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
</head>
<body dir="rtl">
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
					<div class="container" id="container">
						<pre>تسجيل الدخول للنظام  </pre>
						<form method="post" id="programmer_form" autocomplete="off">
							<img src="images/img_avatar-.png" alt="Iame" class="avatar" />
							<p></p>
							<p></p>
							<input type="text" id="username" class="form-control" name="username" placeholder="ادخل اسم المستخدم" onchange="myFunction(this);" required />
							<style>
								.inputbox {
									position: relative;
									width: 50%;
									height: 60px;
								}

								.inputbox input {
									width: 99%;
									padding: 12px 20px;
									margin: 8px 0;
									display: inline-block;
									border: 3px solid #ccc;
									box-sizing: border-box;
								}
								.inputbox input::placeholder {
									color: darkorchid;
									font-family: adobe arabic;
								}
								#toggle {
									position: absolute;
									top: 50%;
									margin-right: 85%;
									transform: translateY(-50%);
									width: 30px;
									height: 30px;
									background-image: none;
									background-size: cover;
									cursor: pointer;
								}

								#toggle.hide {
									background: url(hide_password.png);
									background-size: cover;
								}
								#boxn {
									width: 100%;
									max-width: 500px;
									border: 1px solid #ccc;
									border-radius: 5px;
									margin: 0 auto;
									padding: 0 20px;
									box-sizing: border-box;
									height: 270px;
								}
							</style>
							<div class="inputbox">
								<input type="password" id="psw" name="password" title="يجب أن تحتوي كلمة المرور على أحرف إنجليزية كبيرة وصغيرة ورقم واحد على الأقل" placeholder="ادخل كلمة المرور" onFocus="myFunctionPass();" required />
								<script>
									document.addEventListener("DOMContentLoaded", function() {
										var elements = document.getElementsByName("username");
										for (var i = 0; i < elements.length; i++) {
											elements[i].oninvalid = function(e) {
												e.target.setCustomValidity("");
												if (!e.target.validity.valid) {
													e.target.setCustomValidity("لطفاً أدخل اسم المستخدم");
												}
											};
											elements[i].oninput = function(e) {
												e.target.setCustomValidity("");
											};
										}
										var elements = document.getElementsByName("password");
										for (var i = 0; i < elements.length; i++) {
											elements[i].oninvalid = function(e) {
												e.target.setCustomValidity("");
												if (!e.target.validity.valid) {
													e.target.setCustomValidity("لطفاً أدخل كلمة المرور ");
												}
											};
											elements[i].oninput = function(e) {
												e.target.setCustomValidity("");
											};
										}
									})
								</script>
								<div id="toggle" onClick="ShowHide();"></div>
								<script type="text/javascript">
									function myFunction() {

										if (password.type === 'password' && password.value == '') {
											document.getElementById('toggle').style.cssText = 'background:none;';
										} else {
											if (password.type === 'password') {
												document.getElementById('toggle').style.cssText = 'background-image: url(show_password.png);';
											} else {
												document.getElementById('toggle').style.cssText = 'background-image: url(hide_password.png);';

											}
										}
									}

									function myFunctionPass() {
										if (password.type === 'password') {
											document.getElementById('toggle').style.cssText = 'background-image: url(show_password.png);';
										} else {
											document.getElementById('toggle').style.cssText = 'background-image: url(hide_password.png);';

										}
									}
									const password = document.getElementById('psw');
									const toggle = document.getElementById('toggle');

									function ShowHide() {
										if (password.type === 'password') {
											password.setAttribute('type', 'text');
											toggle.classList.add('hide');
											document.getElementById('toggle').style.cssText = 'background-image: url(hide_password.png);';
										} else {
											password.setAttribute('type', 'password');
											toggle.classList.remove('hide');
											document.getElementById('toggle').style.cssText = 'background-image: url(show_password.png);';
										}

									}
								</script>
							</div>
							<H1 id="text"> تحذير : مفتاح "Caps lock" قيد التشغيل</H1>

							<style>
								input[type=submit] {
									background-color: green;
									border-color: #4CAF50;
									border: 0px solid black;
									color: black;
									padding: 14px 1px;
									font-size: 20px;
									cursor: pointer;
									font-family: adobe arabic;
									width: 50%;
								}
								/* Green */
								.success {
									overflow: hidden;
									transition: 0.2s;
									background-color: darkorchid;
									border-color: #4CAF50;
									color: Black;
								}
								.success:hover {
									background-color: darkgreen;
									color: white;
									box-shadow: 0 0 10px darkgreen, 0 0 40px darkgreen, 0 0 80px darkgreen;
									transition-delay: 0.1s;
								}
							</style>

							<input type="submit" name="login" id="submit" class="success" value="تسجيل الدخول" />
							<div id="error"></div>
					</div>
					</form>




					<script>
						var input = document.getElementById("psw");
						var text = document.getElementById("text");
						input.addEventListener("keyup", function(event) {

							if (event.getModifierState("CapsLock")) {
								text.style.display = "block";
							} else {
								text.style.display = "none"
							}
						});
					</script>

				</div>
				<script src="jquery-2.1.1.js"></script>
				<script src="jquery-ui.js"></script>
				<script>
					$(document).ready(function() {

						$('#programmer_form').on('submit', function(event) {
							event.preventDefault();
							var username = $('#username').val();
							var password = $('#psw').val();
							if ($.trim($('#username').val()).length == 0 && $.trim($('#psw').val()).length == 0) {

								alert(" لطفاً ادخل إسم المستخدم وكلمة المرور أولاً ");

								return false;
							} else if ($.trim($('#username').val()).length == 0) {
								alert(" لطفاً ادخل إسم المستخدم أولاً ");


							} else if ($.trim($('#psw').val()).length == 0) {
								alert(" لطفاً ادخل كلمة المرور أولاً ");

								return false;
							} else {
								var form_data = $(this).serialize();
								$.ajax({
									url: "login.php",
									method: "POST",
									data: {
										username: username,
										password: password
									},
									cache: false,
									beforeSend: function() {
										$('#submit').val('تسجيل الدخول...');
									},
									success: function(data) {
										if (data == 1) {
											window.location.replace("trans.php");

										} else if (data == 2) {
											$("#container").effect("shake", options, 800);
											$('#submit').val("تسجيل الدخول");
											$('#error').html("<h1 style = 'color:red;margin-top:20px;font-family:khalid art;font-size:22px;'>هنالك خطا في كلمة المرور </h1>");


										} else if (data == 3) {
											$("#container").effect("shake", options, 800);
											$('#submit').val("تسجيل الدخول");
											$('#error').html("<h1 style = 'color:red;margin-top:20px;font-family:khalid art;font-size:22px;'>هنالك خطا في اسم المستخدم </h1>");

										} else if (data == 4) {
											$("#container").effect("shake", options, 800);
											$('#submit').val("تسجيل الدخول");
											$('#error').html("<h1 style = 'color:red;margin-top:20px;font-family:khalid art;font-size:22px;'>عفواً تم تعطيل اسم المستخدم الخاص بكم</h1>");

										} else {
											var options = {
												distance: '40',
												direction: 'left',
												times: '3'
											}
											$("#container").effect("shake", options, 800);
											$('#submit').val("تسجيل الدخول");
											$('#error').html("<h1 style = 'color:red;margin-top:20px;font-family:khalid art;font-size:22px;'>هنالك خطا في اسم المستخدم و كلمة المرور</h1>");
										}
									}
								});

							}
						});

					});
				</script>



				<p>&nbsp; </p>
				<p>&nbsp; </p>
				<p>&nbsp; </p>
				<p>&nbsp; </p>
				<p>&nbsp; </p>
				<p>&nbsp; </p>




				<!--  bg end -->





			</div>
			<div id="footer">
				<h5 align="center"> جميع الحقوق محفوظة <?php echo '' . date("Y") . "" ?> &copy; Continue IT 0123223171 </h5>
			</div>

		</div>
	</div>

	</div>
</body>

</html>