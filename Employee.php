<?php
//index.php
include 'lib.php';

?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<meta  http-equiv="refresh" content="1200;url=logout.php" />
<meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>نظام إدارة الموارد البشرية </title>
<link rel="shortcut icon" href="logo.png">
	<link rel="stylesheet" href="css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
<link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
	<script src ="popper.min.js"></script>
	<script src="jquery-3.5.1.slim.min.js"></script>
	<script src="jquery.min.js"></script>  
<style>
#img {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 150px; /* Set a small width */
}
/* Add a hover effect (blue shadow) */
#img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
<style>
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: right;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}
/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
	float: right;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 100%;	
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
input[type=text]::placeholder {
color:darkorchid;
font-family: adobe arabic;
font-size: 20px;
}
input[type=password]::placeholder {
color:darkorchid;
font-family: adobe arabic;
font-size: 20px;
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
<body  dir="rtl" style="font-family:adobe arabic; background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);	">
<div id="bg_img">
  <table width="100%" >
    <tr>
      <td align="center"  class="headertd" ><div id="header">
          <div class="logo"><img src="images/sd.png" width="69" height="87" id="myImg"></div>
          <div class="center_logo"><img src="images/title.png" width="995" height="448" id="myImg"></div>
          <div class="left_Logo"><img src="images/states.png" width="69" height="87" class="logo" id="myImg"></div>          
          <!-- end of title --> 
        </div>
        <!--  header end -->
        <hr /></td>
      <!-- end of td --> 
    </tr>
    <!-- end of tr -->
  </table>
</div>
<!--  table end -->
<style>
.topnav {
  overflow: hidden;
  background-color:#3123DC;
}
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
	.topnav .search-container {
  float: right;
}
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
	width: 90px;
}
.topnav .search-container button {
  float: left;
  padding: 6px 10px;
  margin-top: 8px;
  margin-left: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.topnav .search-container button:hover {
  background: #ccc;
}
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: right;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}	
</style>
<center>
  <div class="topnav" style="width: 80%; margin-bottom: 20px;">
	<?php 
$Page = $_GET['Page'];
	$result = result($con  , "select * from Navbar where ID = 1 ");
while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a <?php if ($Page == 1){echo 'class="active"';}  ?> href="<?php echo $Href; ?>" style="font-family:ae_AlArabiya;"><?php echo $Title; ?></a>
	<?php }?>
		<?php 
	$result = result($con  , "select * from Navbar where ID = 2 ");

while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a <?php if ($Page == 2 or $Page == 4 or $Page == 5){echo 'class="active"';}  ?> style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>
<?php 
	$result = result($con  , "select * from Navbar where ID = 3 ");

while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a <?php if ($Page == 3 or $Page == 7){echo 'class="active"';}  ?>style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>
<?php 
	$result = result($con  , "select * from Navbar where ID = 4 ");

while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>  
<?php 
	$result = result($con  , "select * from Navbar where ID = 5 ");

  while ( $row =  mysqli_fetch_array($result)  )
  {
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>  
<?php 
	$result = result($con  , "select * from Navbar where ID = 6 ");

  while ( $row =  mysqli_fetch_array($result)  )
  {
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>  
<?php 
	$result = result($con  , "select * from Navbar where ID = 7 ");

  while ( $row =  mysqli_fetch_array($result)  )
  {
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>  
<?php 
	$result = result($con  , "select * from Navbar where ID = 8 ");

  while ( $row =  mysqli_fetch_array($result)  )
  {
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>  
<?php 
	$result = result($con  , "select * from Navbar where ID = 9 ");

  while ( $row =  mysqli_fetch_array($result)  )
  {
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>
<?php 
	$result = result($con  , "select * from Navbar where ID = 10 ");

while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?> 
<?php 
	$result = result($con  , "select * from Navbar where ID = 11 ");

while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a <?php if ($Page == 6){echo 'class="active"';}  ?>style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>	
<?php 
	$result = result($con  , "select * from Navbar where ID = 12 ");

  while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>

<?php 
	$result = result($con  , "select * from Navbar where ID = 13 ");

while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>
	</center></div>
</center>
<style>
.alert {
  padding: 10px;
  background-color: #4CAF50;
  color: white;
}
.alert2 {
  padding: 10px;
  background-color: red;
  color: white;
		}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: left;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<?php if ($Page == 7){ ?>
		<div class="alert" style="width:30%; margin-right:32%; ">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
	<h1 style ="color: aliceblue;">
 ✔   تمت تعديل بيانات الموظف بنحاج </h1></div>
	<?php } ?>
	<?php if ($Page == 2){ ?>
		<div class="alert" style="width:30%; margin-right:32%; ">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
	<h1 style ="color: aliceblue;">
 ✔   تمت إضافة الموظف بنحاج إلى القوى العاملة للهيئة</h1></div>
	<?php } elseif ($Page == 4){ ?>
	<div class="alert2" style="width:34%; margin-right:32%; ">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
	<h1 style ="color: aliceblue;">
تحذير! النمرة الوظيفية لهذا الموظف موجود في بيانات موظف أخر   </h1></div>
	<?php }elseif ($Page == 5){?>
		<div class="alert2" style="width:34%; margin-right:32%; ">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
	<h1 style ="color: aliceblue;">
تحذير! الرقم الوطني لهذا الموظف موجود في بيانات موظف أخر   </h1></div>
	<?php }?>
<div class="container" style=" width: 80%;	
">
			
<div class="accordion-item" >
	 
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color:lavender;">
		  <?php if ($Page == 3){ ?>
		  		  <h1 style="font-size: 30px;"> تعديل معلومات التابعين والعهد وملفات الإرشفة الإلكترونية</h1>
<?php }else{?>
		  <h1 style="font-size: 30px;">معلومات موظف</h1>
		  <?php }?>
      </button>
    </h2>
    <div style=" width: auto;height: auto; background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);		
" >
		&nbsp;

<div class="tab" style="margin-top:0px; margin-right: 3%;margin-left: 3%; ">
  <button class="tablinks" onclick="openCity(event, 'Basic')" id="defaultOpen"><h1>المعلومات الشخصية</h1></button>
  <button class="tablinks" onclick="openCity(event, 'Contact')" ><h1>معلومات الاتصال</h1></button>
  <button class="tablinks" onclick="openCity(event, 'Job')" ><h1>معلومات الوظيفة</h1></button>
  <button class="tablinks" onclick="openCity(event, 'Salary')" ><h1> معلومات  الراتب</h1></button>
  <button class="tablinks" onclick="openCity2(event, 'SH')" id ="Sh_Click"><h1>التابعين</h1></button>
  <button class="tablinks" onclick="openCity(event, 'Ershif')" ><h1>ملفات الأرشفة الإلكترونية</h1></button>
  <button class="tablinks" onclick="openCity(event, 'Ahad')" ><h1> العهد</h1></button>
</div>
<div id="Basic" class="tabcontent" style="background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);		
">
 <table style="width: 97%; margin-top: 10px; margin-bottom:23px; margin-right:4%;  " align="center" border="0" >
	<tr><td width="80%">
		<table class="table table-bordered" style="width: 95%; margin-top: 10px; margin-bottom:19px; " align="center" border="1" >
  <tr  >
<td align="center" ><pre style="font-size: 20px; direction: rtl;"><strong>م</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>اسم الموظف رباعي</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>الجنس</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>تاريخ الميلاد</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>الرقم الوطني</strong></pre></td>
<td align="center" ><pre style="font-size: 20px; direction: rtl;"><strong>المؤهل </strong></pre></td>
<td align="center" ><pre style="font-size: 20px; direction: rtl;"><strong>التخصص</strong></pre></td>
<td align="center" ><pre style="font-size: 20px; direction: rtl;"><strong>اجتماعياً</strong></pre></td>
</tr>
<tr >
<?php
$National_ID_v = $_GET['ID'];
 $result = result($con  , "select * from man_power where National_ID = '$National_ID_v' ");
while ( $row =  mysqli_fetch_array($result)  )
{
$ID2 = $row ['#'];
$Specialization = $row ['Specialization'];
$National_ID = $row ['National_ID'];
$Name = $row ['Name'];
$Gender = $row ['Gender'];
$Date_of_birth = $row ['Date_of_birth'];
$Qualification = $row ['Qualification'];
$Social_status = $row ['Social_status'];
$Job_Type = $row ['Job_Type'];
$ID = $row ['ID'];
$Job_Description = $row ['Job_Description'];
$Date_of_hiring = $row ['Date_of_hiring'];
$Current_job_rank = $row ['Current_job_rank'];
$Data_job_rank = $row ['Data_job_rank'];
$Work_place = $row ['Work_place'];	   
$Birth_No = $row ['Birth_No'];	   
$Birth_Place = $row ['Birth_Place'];	   
$National_ID_Place = $row ['National_ID_Place'];	   
$National_ID_Date = $row ['National_ID_Date'];	   
$PhoneNumber = $row ['PhoneNumber'];	   
$Email = $row ['Email'];	   
$Notes = $row ['Notes'];	   
$Birth_Date = $row ['Birth_Date'];	   
?>
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID2; ?></h1></center></td>

	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1></td>
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php if($Gender == 1){echo 'ذكر';}else {echo 'أنثى';} ?></h1></center></td>
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_birth; ?></h1></center></td>
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1></center></td>
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1></center></td>
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $Specialization; ?></h1></center></td>
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php if($Social_status == 1){echo 'أعزب'; }elseif($Social_status == 2){echo 'متزوج'; }if($Social_status == 3){echo 'أرمل'; }?></h1></center></td>			
</tr>  
</table></td>

</tr>
</table>
<style>
	img.avatar {
    margin-right: 1%;
    width: 90;
    border-radius: 50%;
    height: 90px;
    cursor: pointer;
    transition: 0.3s;
align-content: center;
		margin-right: 10px;


}
</style>
</div>
<div id="Contact" class="tabcontent"style="background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);		
" >
	<table width="80%" border="0" align="center" style="margin-right:12.8%; margin-bottom: 23px;margin-top:10px;  "><tr>
		<td width="50%"><div class="form-floating mb-3" style="margin-left: 15px; width: 70%;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" style="margin-top:7%; direction: ltr; font-size: 25px;" name="PhoneNumber" readonly value="<?php echo $row['PhoneNumber']; ?>">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 25px;">رقم هاتف الموظف</h1>
                  </label>
                </div></td>
		<td width="50%"><div class="form-floating mb-3" style="margin-left: 15px; width: 70%;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" style="margin-top:7%; direction: ltr; font-size: 25px;" name="PhoneNumber" readonly value="<?php echo $row['Email']; ?>">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 25px;">البريد الإلكتروني</h1>
                  </label>
                </div></td>
		</tr></table>
</div>
<?php }?>
<div id="Job" class="tabcontent" style="background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);		
">
  <table class="table table-bordered" style="width: 95%; margin-top:20px; margin-bottom:23px;margin-right: 2%;	 " align="center" border="1" >
  <tr  >
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>النمرة </strong></pre></td>
<td align="center" ><pre style="font-size: 20px; direction: rtl;"><strong>الوصف الوظيفي</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>تاريخ التعيين</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>الدرجة </strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>تاريخ الدخول فيها</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>مكان العمل</strong></pre></td>	
</tr>
<tr >  
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1></td>
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
 	$result = result($con  , "select * from Job_Description where ID = $Job_Description ");

while ( $row =  mysqli_fetch_array($result)  )
{
echo $row ['Job_Description'];
}
?>
	</h1></center></td>
<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1></center></td>
<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php if($Current_job_rank == 33 ){echo '3/خ';}elseif($Current_job_rank == 22 ){echo '2/خ';}elseif($Current_job_rank == 111 ){echo '1/خ';}else {echo $Current_job_rank;} ?></h1></center></td>
<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $Data_job_rank; ?></h1></center></td>
<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php echo $Work_place; ?></h1></center></td>			
</tr>  
</table>
</div>
<div id="Salary" class="tabcontent" style="background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);		
">
	<style>
div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
}
div.scrollmenu a:hover {
  background-color: #777;
}
</style>
	<div class="scrollmenu">
  <table class="table table-bordered" style="width: 95%; margin-top:20px; margin-bottom:23px;margin-right: 2%;	 " align="center" border="1" >
<tr>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>الفئة الإبتدائية</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>علاوة تمثيل </strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>الاجتماعية</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>طبيعة عمل</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>مؤهل</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>وجبة</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>مفارقة</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>معيشة</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>جملة المرتب</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>دمغة</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>المعاش</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>التأمين الصحي</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>جملة الاستقطاعات</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>صافي المرتب</strong></pre></td>
</tr>
<tr>
<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
$result = result($con  , " SELECT DATEDIFF(CURRENT_DATE,`Data_job_rank`) AS Nizar FROM `man_power` WHERE National_ID = $National_ID ");

while ( $row =  mysqli_fetch_array($result)  )
{
$Start =$row ['Nizar'];
$Find_Start = $Start / 365;
if (($Find_Start > 0 && $Find_Start < 1) || ($Find_Start > 0 && $Find_Start < 1))
{
		    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary = $row ['Start'];
	   echo number_format($Start_Salary);
	   }
   }

if (($Find_Start >= 1 && $Find_Start < 2) || ($Find_Start >= 1 && $Find_Start < 2))
	   {
		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary =$row ['Start2'];
	   echo number_format($Start_Salary);
	   }
	   }
if (($Find_Start >= 2 && $Find_Start < 3) || ($Find_Start >= 2 && $Find_Start < 3))
		  {
		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary = $row ['Start3'];
	   echo number_format($Start_Salary);
	   }
	   }
if (($Find_Start >= 3 && $Find_Start < 4) || ($Find_Start >= 3 && $Find_Start < 4))
		  {
		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary = $row ['Start4'];
	   echo number_format($Start_Salary);
	   }
	   }
if (($Find_Start >= 4 && $Find_Start < 5) || ($Find_Start >= 4 && $Find_Start < 5))
		  {
		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary = $row ['Start5'];
	   echo number_format($Start_Salary);
	   }
	   }
	   if (($Find_Start >= 5 && $Find_Start < 6) || ($Find_Start >= 5 && $Find_Start < 6))
		  {
		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary =$row ['Start6'];
	   echo number_format($Start_Salary);
	   }
	   }
	   if (($Find_Start >= 6 && $Find_Start < 7) || ($Find_Start >= 6 && $Find_Start < 7))
		  {
		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary =$row ['Start7'];
	   echo number_format($Start_Salary);
	   }
	   }
	   if (($Find_Start >= 7 && $Find_Start < 8) || ($Find_Start >= 7 && $Find_Start < 8))
		  {
		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary = $row ['Start8'];
	   echo number_format($Start_Salary);
	   }
	   }
	   if (($Find_Start >= 8 && $Find_Start < 9) || ($Find_Start >= 8 && $Find_Start < 9))
		  {
		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary = $row ['Start9'];
	   echo number_format($Start_Salary);
	   }
	   }
	      if ($Find_Start >= 9 )
		  {
		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $Start_Salary = $row ['Start9'];
	   echo number_format($Start_Salary);
	   }
	   }
   }
?>

	          
	</h1></center></td>

		  <td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
	   $result = result($con  , "select * from bdlat where Job_Rank = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
echo $Tamsel = $row ['Tamsel'];
   
   }
?>

	          
	</h1></center></td>
		  <td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
	   $result = result($con  , "select * from followers where National_ID  = $National_ID and Notes = 1");
 $Social = mysqli_num_rows($result);
	 if  ($Social_status == 2 and $Social == 0){echo $SocialSalary = $mered = 50;}
	 if  ($Social_status == 2 and $Social != 0){$mered = 50; echo $SocialSalary = $mered + $Social * 15;}
	 if  ($Social_status != 2 ){echo $SocialSalary = $mered = 0;}

   
   
?>

	          
	</h1></center></td>
	  <td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
		  		   	    $res = result($con  , " SELECT * from basic_salary WHERE `Job_Rank` = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($res)  )
   {
	   $HamdokT = $row ['Hamdok'];
	   	   $result = result($con  , "select * from e_files where National_ID  = $National_ID and Tamsel = 40");
 $Select_Tamsel = mysqli_num_rows($result);
	   if($Select_Tamsel > 0){
		    $T_WorkR = $HamdokT + $Start_Salary ;
		   $T_Work = $T_WorkR * 40 / 100;
	   }
	   else{
		   		   $T_WorkR = $HamdokT + $Start_Salary ;

		   $T_Work = $T_WorkR * 20 / 100;

	   }
	   echo number_format($T_Work);
	   }

?>

	          
	</h1></center></td>
<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
		   $result = result($con  , "select * from Qualification where Qualification = '$Qualification' ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
echo $Qualification_Salary = $row ['Mony'];
   
   }
 
?>

	          
	</h1></center></td>
  <td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
	   $result = result($con  , "select * from bdlat where Job_Rank = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
echo $Wajba = $row ['Wajba'];
   }
?>

	          
	</h1></center></td>
	  <td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
	   $result = result($con  , "select * from bdlat where Job_Rank = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
 $Mofarga = $row ['Mofarga'];
	   echo number_format($Mofarga);
   }
?>

	          
	</h1></center></td>
	  
	  <td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
	   $result = result($con  , "select * from basic_salary where Job_Rank = $Current_job_rank ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
	   $Hamdok =
 $row ['Hamdok'];
	   echo number_format($Hamdok);
   }
?>

	          
	</h1></center></td>
	
	  <td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
		  $Total_Salary = $Start_Salary+ $Tamsel + $SocialSalary + $T_Work + $Qualification_Salary + $Wajba + $Mofarga + $Hamdok;
		  echo number_format($Total_Salary);

?>

	          
	</h1></center></td>	 

<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
		  echo $damga = 1;

?>

	          
	</h1></center></td>
<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
		   $maash_salary = $Total_Salary - $Mofarga - $Wajba;
		 $maash = $maash_salary * 8 / 100;
	echo number_format($maash);

?>

	          
	</h1></center></td>
	 
	<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
		   $maash_salary = $Total_Salary - $Mofarga - $Wajba;
	   $Tamen_salary = $Start_Salary + $Hamdok ;
		 $Tamen = $Tamen_salary * 4 / 100;
		echo number_format($Tamen);
?>

	          
	</h1></center></td>          
	
			<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
		$ggg =  $maash + $Tamen + 1 ;
echo number_format($ggg);
?>

	          
	</h1></center></td> 	
		<td align="center" ><h1 style="font-family: khalid art;font-size:17px;"><?php  
		$hhh = $Total_Salary - $maash - $Tamen - 1 ;
echo number_format($hhh);
?>

	          
	</h1></center></td> 
 </tr>
  



</table></div>
</div>

<div id="SH" class="tabcontent"  style="background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);		
">
	
	  <div align="right">
    <button type="button" name="add" id="add" class="btn btn-success" style="margin-top: 20px; margin-right: 7%;"><center><h1 style="color: mintcream;">إضافة تابع</h1></center></button>
   </div>
   <br />
   <div id="image_data" style="width: 85%;margin-right: 7%;">

   </div>

	



<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  var cur = "<?php echo $National_ID; ?>";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action,cur:cur},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
	   $('#title').text("إضافة تابع إلى الموظف");

  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Add Image");
  $('#image_id').val('');
  $('#action').val('insert');
  $('#insert').val("حفظ البيانات");
	 $('#FLink').html('<?php $conn = mysqli_connect("localhost","root","","tes");$query = "select * from `flink`";$do =mysqli_query($conn , $query);echo'<option value disabled selected style="font-family: adobe arabic;font-size: 23px;">يرجى الاختيار </option>';while($row = mysqli_fetch_array($do)){echo'<option value ="'.$row ['FLink'].'">'.$row ['FLink'].'</option>';}?>');
	 $('#i').html('<div class="form-floating mb-3" style="margin-left: 15px; width: 90%;"><input type="file" class="form-control" style="margin-top:5%;" name="image" id = "image" ><label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px; margin-bottom: 5px;">المستند المؤيد للتبيعة</h1></label></div>');
	 
 });
	 $('#Close').click(function(){
      $('#imageModal').modal('hide');

 });

 $('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  var check = $('#action').val();
  var FName = $('#FName').val();
  var FLink = $('#FLink').val();

  if(image_name == '' & check != 'insert')
  {
  $('#action').val("update2");
	     $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
		
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
  }
	  else if(image_name == '' && check == 'insert')
  {
	       alert("يرجى إرفاق المستند المؤيد للتبيعة");

	      return false;

  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("يرجي إرفاق الملف بصيغة صورة (jpg - jpeg - png - gif)");
    $('#image').val('');
    return false;
   }
   else
   {
	   
    $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
		
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
	 $('#i').html('<div class="form-floating mb-3" style="margin-left: 15px; width: 90%;"><input type="file" class="form-control" style="margin-top:5%;" name="image" id = "image"><label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px; margin-bottom: 5px;">المستند المؤيد للتبيعة</h1></label></div>');
	 	var ID = $(this).attr("id");
	 	 	var ID2 = $(this).attr("id");

		if(ID){
		$.get(
		'Ajax_Item2.php',
			{ID : ID},
			function(data){
				$('#FLink').html(data);
			}
		);
			
		}
	 	if(ID2){
		$.get(
		'Ajax_Item.php',
			{ID : ID},
			function(data){
				$('#FName').val(data);
			}
		);
			
		}
	 
  $('#action').val("update");
  $('#title').text("تعديل بيانات تابع إلى موظف");
  $('#insert').val("حفظ التعديل");
  $('#imageModal').modal("show");
 });
	 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("هل أنت متأكد من إنك تريد حذف هذا التابع"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  

</script>
	<div id="imageModal" class="modal fade" role="dialog" lang="ar" align="right" style="width:100%; " >
 <div class="modal-dialog" lang="ar" align="right">
  <div class="modal-content" lang="ar" align="right">
   <div class="modal-header"  lang="ar" align="right">
    <h1 style="font-family:khalid art; font-size:20px;  float: rtl;align-content: center;  " id ="title">إضافة تابع إلى الموظف</h1>
	   	   <button type="button" class="btn-close" aria-label="Close" id="Close"  ></button>

   </div>
   <div class="modal-body" lang="ar">

      
	       <form id="image_form" method="post" enctype="multipart/form-data">

	   <div class="form-floating mb-3" style="margin-left: 15px; width: 90%;" id="FName2" >
                  <input type="text" name="FName" class="form-control" id="FName" placeholder="" required>
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">إسم التابع رباعي</h1>
                  </label>
                </div>
	   <div class="form-floating" style="margin-left: 15px;width: 90%;" >
                  <select name="FLink" class="form-select" id="FLink" aria-label="Floating label select example" style="margin-top:0%;" required>
                    <option value disabled selected style="font-family: adobe arabic;font-size: 23px;">يرجى الاختيار </option>
                    
                   <?php
 $result = result($con  , "select * from flink ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
$FLink = $row ['FLink'];
?>

             <option style="font-family: adobe arabic;font-size: 20px;" value="<?php echo $FLink ?>"><?php echo $FLink ?> </option>
	          
	<?php } ?>
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">صلته بالموظف</h1>
                  </label>
					  
                </div>
			   <div id="i">
		 <div class="form-floating mb-3" style="margin-left: 15px; width: 90%;">
                  <input type="file" class="form-control" style="margin-top:5%;" name="image" id = "image">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 23px; margin-bottom: 5px;">المستند المؤيد للتبيعة</h1>
                  </label>
				 </div>
                </div>
                 
                
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="hidden" name="National_ID" id="National_ID" value="<?php echo $National_ID; ?>" />
	<input type="submit" name="insert" class="btn btn-info" id="insert" value="حفظ البيانات" style="width: 40%; margin-left: 10%; height:40px; " />

      
    </form>
   </div>
  
  </div>
 </div>
</div>
</div>
<div id="Ershif" class="tabcontent"  style="background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);		
">
	
	  <div align="right">
    <button type="button" name="add" id="add_files" class="btn btn-success" style="margin-top: 20px; margin-right: 7%;"><center><h1 style="color: mintcream;">إضافة ملف</h1></center></button>
   </div>
   <br />
   <div id="image_data_files" style="width: 85%;margin-right: 7%;">

   </div>

	



<script>  
$(document).ready(function(){
 
 fetch_data2();

 function fetch_data2()
 {
  var action = "fetch";
  var cur = "<?php echo $National_ID; ?>";
  $.ajax({
   url:"action_files.php",
   method:"POST",
   data:{action:action,cur:cur},
   success:function(data)
   {
    $('#image_data_files').html(data);
   }
  })
 }
 $('#add_files').click(function(){
	   $('#title_files').text("إضافة ملف إلى ملفات الموظف الإلكترونية");
											 $('#checked').html('<div class="form-check form-switch" style="margin-left: 15px; width: 90%;"><input class="form-check-input" name="checkbox" type="checkbox" role="switch" id="flexSwitchCheckChecked" value="checked"  style="margin-top:5%;margin-bottom: 3%;"><label><h1 style="font-family:khalid art ;font-size: 17px;margin-top:7.2%;margin-bottom: 3%;">الملف المرفق هو الرقم الهندسي</h1></label></div>');

  $('#imageModal_files').modal('show');
  $('#image_form_files')[0].reset();
  $('#image_id_files').val('');
  $('#action_files').val('insert');
  $('#insert_files').val("حفظ الملف");
	
	 
 });
	 $('#Close_files').click(function(){
      $('#imageModal_files').modal('hide');

 });

 $('#image_form_files').submit(function(event){
  event.preventDefault();
  var image_name = $('#image_files').val();
  var check = $('#action_files').val();

  if(image_name == '' && check != 'insert')
  {
  $('#action_files').val("update2");
	     $.ajax({
     url:"action_files.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
		
     success:function(data)
     {
      alert(data);
      fetch_data2();
      $('#image_form')[0].reset();
      $('#imageModal_files').modal('hide');
     }
    });
  }
	  else if(image_name == '' && check == 'insert')
  {
	       alert("يرجى إرفاق الملف قبل الحفظ");

	      return false;

  }
  else
  {
   var extension = $('#image_files').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("يرجي إرفاق الملف بصيغة صورة (jpg - jpeg - png - gif)");
    $('#image_files').val('');
    return false;
   }
   else
   {
	   
    $.ajax({
     url:"action_files.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
		
     success:function(data)
     {
      alert(data);
      fetch_data2();
      $('#image_form_files')[0].reset();
      $('#imageModal_files').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.update2', function(){
	   $('#action_files').val("update");
  $('#image_id_files').val($(this).attr("id"));
	 	var ID = $(this).attr("id");
	 	 	var ID2 = $(this).attr("id");

	 	 	if(ID){
		$.get(
		'Ajax_Item_files.php',
			{ID : ID},
			function(data){
				$('#FileName').val(data);
				
			}
		);
			
		}	 	if(ID2){
			$.get(
		'Ajax_Item_files_Tamsel.php',
			{ID : ID},
			function(data){ var Yes = data;
				if(data == 40){

						 $('#checked').html('<div class="form-check form-switch" style="margin-left: 15px; width: 90%;"><input class="form-check-input" checked name="checkbox" type="checkbox" role="switch" id="flexSwitchCheckChecked" value="checked"  style="margin-top:5%;margin-bottom: 3%;"><label><h1 style="font-family:khalid art ;font-size: 17px;margin-top:7.2%;margin-bottom: 3%;">الملف المرفق هو الرقم الهندسي</h1></label></div>');

				}else{
											 $('#checked').html('<div class="form-check form-switch" style="margin-left: 15px; width: 90%;"><input class="form-check-input" name="checkbox" type="checkbox" role="switch" id="flexSwitchCheckChecked" value="checked"  style="margin-top:5%;margin-bottom: 3%;"><label><h1 style="font-family:khalid art ;font-size: 17px;margin-top:7.2%;margin-bottom: 3%;">الملف المرفق هو الرقم الهندسي</h1></label></div>');

				}
			}
		);
			
		}
  $('#title_files').text("تعديل بيانات ملف موظف");
  $('#insert_files').val("حفظ التعديل");
  $('#imageModal_files').modal("show");
 });
 $(document).on('click', '.delete2', function(){
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("هل أنت متأكد من إنك تريد حذف هذا الملف ؟"))
  {
   $.ajax({
    url:"action_files.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data2();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  
</script>
	<div id="imageModal_files" class="modal fade" role="dialog" lang="ar" align="right" style="width:100%;margin-top: 2%; " >
 <div class="modal-dialog" lang="ar" align="right">
  <div class="modal-content" lang="ar" align="right">
   <div class="modal-header"  lang="ar" align="right">
    <h1 style="font-family:khalid art; font-size:20px;  float: rtl;align-content: center;  " id ="title_files"></h1>
	   	   <button type="button" class="btn-close" aria-label="Close" id="Close_files"  ></button>

   </div>
   <div class="modal-body" lang="ar">

      
	       <form id="image_form_files" method="post" enctype="multipart/form-data">

	   <div class="form-floating mb-3" style="margin-left: 15px; width: 90%;" id="FName2" >
                  <input type="text" name="FileName" class="form-control" id="FileName" placeholder="" required>
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">إسم الملف المراد أرشفته </h1>
                  </label>
                </div>
	   
		 <div class="form-floating mb-3" style="margin-left: 15px; width: 90%;">
                  <input type="file" class="form-control" style="margin-top:5%;" name="image_files" id = "image_files">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 23px; margin-bottom: 5px;">أرفق الملف المراد أرشفته</h1>
                  </label>
				 </div>
               <div id="checked">
			
			   </div>  	   
		
                
     <input type="hidden" name="action" id="action_files" value="insert" />
     <input type="hidden" name="image_id" id="image_id_files" />
     <input type="hidden" name="National_ID" id="National_ID" value="<?php echo $National_ID; ?>" />
	<input type="submit" name="insert" class="btn btn-info" id="insert_files" value="حفظ الملف" style="width: 40%; margin-left: 10%; height:40px; margin-top: 5%; " />

      
    </form>
   </div>
  
  </div>
 </div>
</div>
</div>


<div id="Ahad" class="tabcontent" style="background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);		
">
<center>
		<p style="margin-top:50px;"><h1>لا توجد بيانات حالياً...</h1></p>

<p>&nbsp; </p>
</center>
</div>

<script>
	$(document).ready(function(){
  $('#SH_Click').click(function(){

 });
	});
function openCity(evt, cityName) {

  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
	function openCity2(evt, cityName) {


  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
      <div class="accordion-body" style="background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);		
">


<style>

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: right;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  border: 1px solid #ccc;
  border-top: none;
	margin-right: 0%;
	}

/* Go from zero to full opacity */
@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>



</div>




        </div>
      </div>
	
  <div class="accordion-item"  >
	 
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color:lavender;">
		  <h1 style="font-size: 30px;">تعديل معلومات الموظف </h1>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample"  >
		
      <div class="accordion-body" style="background-image: linear-gradient(55deg, rgba(208, 208, 208, 0.03) 0%, rgba(208, 208, 208, 0.03) 20%,rgba(55, 55, 55, 0.03) 20%, rgba(55, 55, 55, 0.03) 40%,rgba(81, 81, 81, 0.03) 40%, rgba(81, 81, 81, 0.03) 60%,rgba(208, 208, 208, 0.03) 60%, rgba(208, 208, 208, 0.03) 80%,rgba(191, 191, 191, 0.03) 80%, rgba(191, 191, 191, 0.03) 100%),linear-gradient(291deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 14.286%,rgba(105, 105, 105, 0.02) 14.286%, rgba(105, 105, 105, 0.02) 28.572%,rgba(230, 230, 230, 0.02) 28.572%, rgba(230, 230, 230, 0.02) 42.858%,rgba(216, 216, 216, 0.02) 42.858%, rgba(216, 216, 216, 0.02) 57.144%,rgba(181, 181, 181, 0.02) 57.144%, rgba(181, 181, 181, 0.02) 71.42999999999999%,rgba(129, 129, 129, 0.02) 71.43%, rgba(129, 129, 129, 0.02) 85.71600000000001%,rgba(75, 75, 75, 0.02) 85.716%, rgba(75, 75, 75, 0.02) 100.002%),linear-gradient(32deg, rgba(212, 212, 212, 0.03) 0%, rgba(212, 212, 212, 0.03) 12.5%,rgba(223, 223, 223, 0.03) 12.5%, rgba(223, 223, 223, 0.03) 25%,rgba(11, 11, 11, 0.03) 25%, rgba(11, 11, 11, 0.03) 37.5%,rgba(86, 86, 86, 0.03) 37.5%, rgba(86, 86, 86, 0.03) 50%,rgba(106, 106, 106, 0.03) 50%, rgba(106, 106, 106, 0.03) 62.5%,rgba(220, 220, 220, 0.03) 62.5%, rgba(220, 220, 220, 0.03) 75%,rgba(91, 91, 91, 0.03) 75%, rgba(91, 91, 91, 0.03) 87.5%,rgba(216, 216, 216, 0.03) 87.5%, rgba(216, 216, 216, 0.03) 100%),linear-gradient(312deg, rgba(113, 113, 113, 0.01) 0%, rgba(113, 113, 113, 0.01) 14.286%,rgba(54, 54, 54, 0.01) 14.286%, rgba(54, 54, 54, 0.01) 28.572%,rgba(166, 166, 166, 0.01) 28.572%, rgba(166, 166, 166, 0.01) 42.858%,rgba(226, 226, 226, 0.01) 42.858%, rgba(226, 226, 226, 0.01) 57.144%,rgba(109, 109, 109, 0.01) 57.144%, rgba(109, 109, 109, 0.01) 71.42999999999999%,rgba(239, 239, 239, 0.01) 71.43%, rgba(239, 239, 239, 0.01) 85.71600000000001%,rgba(54, 54, 54, 0.01) 85.716%, rgba(54, 54, 54, 0.01) 100.002%),linear-gradient(22deg, rgba(77, 77, 77, 0.03) 0%, rgba(77, 77, 77, 0.03) 20%,rgba(235, 235, 235, 0.03) 20%, rgba(235, 235, 235, 0.03) 40%,rgba(215, 215, 215, 0.03) 40%, rgba(215, 215, 215, 0.03) 60%,rgba(181, 181, 181, 0.03) 60%, rgba(181, 181, 181, 0.03) 80%,rgba(193, 193, 193, 0.03) 80%, rgba(193, 193, 193, 0.03) 100%),linear-gradient(80deg, rgba(139, 139, 139, 0.02) 0%, rgba(139, 139, 139, 0.02) 14.286%,rgba(114, 114, 114, 0.02) 14.286%, rgba(114, 114, 114, 0.02) 28.572%,rgba(240, 240, 240, 0.02) 28.572%, rgba(240, 240, 240, 0.02) 42.858%,rgba(221, 221, 221, 0.02) 42.858%, rgba(221, 221, 221, 0.02) 57.144%,rgba(74, 74, 74, 0.02) 57.144%, rgba(74, 74, 74, 0.02) 71.42999999999999%,rgba(201, 201, 201, 0.02) 71.43%, rgba(201, 201, 201, 0.02) 85.71600000000001%,rgba(187, 187, 187, 0.02) 85.716%, rgba(187, 187, 187, 0.02) 100.002%),linear-gradient(257deg, rgba(72, 72, 72, 0.03) 0%, rgba(72, 72, 72, 0.03) 16.667%,rgba(138, 138, 138, 0.03) 16.667%, rgba(138, 138, 138, 0.03) 33.334%,rgba(54, 54, 54, 0.03) 33.334%, rgba(54, 54, 54, 0.03) 50.001000000000005%,rgba(161, 161, 161, 0.03) 50.001%, rgba(161, 161, 161, 0.03) 66.668%,rgba(17, 17, 17, 0.03) 66.668%, rgba(17, 17, 17, 0.03) 83.33500000000001%,rgba(230, 230, 230, 0.03) 83.335%, rgba(230, 230, 230, 0.03) 100.002%),linear-gradient(47deg, rgba(191, 191, 191, 0.01) 0%, rgba(191, 191, 191, 0.01) 16.667%,rgba(27, 27, 27, 0.01) 16.667%, rgba(27, 27, 27, 0.01) 33.334%,rgba(66, 66, 66, 0.01) 33.334%, rgba(66, 66, 66, 0.01) 50.001000000000005%,rgba(36, 36, 36, 0.01) 50.001%, rgba(36, 36, 36, 0.01) 66.668%,rgba(230, 230, 230, 0.01) 66.668%, rgba(230, 230, 230, 0.01) 83.33500000000001%,rgba(93, 93, 93, 0.01) 83.335%, rgba(93, 93, 93, 0.01) 100.002%),linear-gradient(90deg, #ffffff,#ffffff);">
		
        <div class="p-3 border bg-light" style="margin-left:0%;">
	
          <table width="100%" style="margin-right:0%;">
			  <form action="Save_Edit_Employee.php" method="post" name="form" enctype="multipart/form-data" >
				  	  <input name="ID2" type="hidden" value="<?php echo $ID2; ?>" />

	
            <tr>
              <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;" >
                  <input type="text" name="Name" class="form-control" id="floatingInput" placeholder="" required value="<?php echo $Name ?>" >
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">إسم الموظف رباعي</h1>
                  </label>
                </div></td>
              
				  <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select name="Gender" class="form-select" id="floatingSelect" aria-label="Floating label select example" style="margin-top:-7%;" required>
<?php if($Gender == 1){ ?>
                    <option value="1" style="font-family: adobe arabic;font-size: 20px;">ذكر</option>
                    <option value="2" style="font-family: adobe arabic;font-size: 20px;">انثى</option>
					  <?php }else {?>
                    <option value="2" style="font-family: adobe arabic;font-size: 20px;">انثى</option>
					<option value="1" style="font-family: adobe arabic;font-size: 20px;">ذكر</option>
					  <?php }?>
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">الجنس</h1>
                  </label>
                </div></td>
				<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="date" class="form-control" id="floatingInput" placeholder="" name="Date_of_birth" required value="<?php echo $Date_of_birth ?>">
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ الميلاد</h1></label>
                </div></td>
              <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="Birth_No" required value="<?php echo $Birth_No ?>">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">رقم شهادة الميلاد أو تقدير العمر</h1>
                  </label>
                </div></td>
             
            </tr>
            <tr>
				 <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="Birth_Place" required value="<?php echo $Birth_Place ?>">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">مكان اصدار شهادة الميلاد</h1>
                  </label>
                </div></td>
				<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="date" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="Birth_Date" required value="<?php echo $Birth_Date ?>">
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ اصدار شهادة الميلاد</h1></label>
                </div></td>
				 <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="National_ID"  pattern="[0-9]{11}" title="يجب إدخال الرقم الوطني كاملاً من غير فواصل" required value="<?php echo $National_ID ?>">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">الرقم الوطني</h1>
                  </label>
                </div></td>
				<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="National_ID_Place" required value="<?php echo $National_ID_Place ?>">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">مكان اصدار الرقم الوطني </h1>
                  </label>
                </div></td>
				  </tr>
				  <tr>
              <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="date" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="National_ID_Date" required value="<?php echo $National_ID_Date ?>">
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ اصدار الرقم الوطني</h1></label>
                </div></td>
				
					    <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="margin-top:-7%;" name="Job_Type" required>
					  <?php if($Job_Type == "خدمة مدنية"){ ?>
                     <option value="خدمة مدنية" style="font-family: adobe arabic;font-size: 20px;">
                    <h1 >
                     خدمة مدنية
                    </h1>
                    </option>
					  <option value="تعاقد" style="font-family: adobe arabic;font-size: 20px;">تعاقد</option>
                    <option value="مؤقت" style="font-family: adobe arabic;font-size: 20px;">مؤقت</option>
					  <?php }elseif ($Job_Type == "تعاقد") {?>
					  <option value="تعاقد" style="font-family: adobe arabic;font-size: 20px;">تعاقد</option>

					  <option value="خدمة مدنية" style="font-family: adobe arabic;font-size: 20px;">
                    <h1 >
                     خدمة مدنية
                    </h1>
                    </option>
                    <option value="مؤقت" style="font-family: adobe arabic;font-size: 20px;">مؤقت</option>
					  
					  <?php }
                   elseif ($Job_Type == "مؤقت") {?>
					                      <option value="مؤقت" style="font-family: adobe arabic;font-size: 20px;">مؤقت</option>

					  <option value="تعاقد" style="font-family: adobe arabic;font-size: 20px;">تعاقد</option>

					  <option value="خدمة مدنية" style="font-family: adobe arabic;font-size: 20px;">
                    <h1 >
                     خدمة مدنية
                    </h1>
                    </option>
					  
					  <?php }?>
                    
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">نوع الوظيفة</h1>
                  </label>
                </div></td>
					  <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="ID" required value = "<?php echo $ID ?>" >
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">النمرة الوظيفية</h1>
                  </label>
                </div></td>
              <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="margin-top:-7%;" name="Job_Description" required >
             <option style="font-family: adobe arabic;font-size: 20px;" value="<?php  $result = result($con  , "select * from job_description where ID = $Job_Description");

   while ( $row =  mysqli_fetch_array($result)  )
   {
$ID = $row ['ID'];
$job_description = $row ['Job_Description']; echo $ID ?>"><?php echo $job_description;} ?> </option>
                    <?php
 $result = result($con  , "select * from job_description ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
$ID = $row ['ID'];
$job_description = $row ['Job_Description'];
?>

             <option style="font-family: adobe arabic;font-size: 20px;" value="<?php echo $ID ?>"><?php echo $job_description ?> </option>
	          
	<?php } ?>
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">الوصف الوظيفي</h1>
                  </label>
                </div></td>
             
            
            </tr>
			       <tr>
					  
					    <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="date" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="Date_of_hiring" required  value="<?php echo $Date_of_hiring; ?>"/>
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ التعيين</h1></label>
                </div></td>
					     <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="margin-top:-7%;" name="Current_job_rank" required>
             <option style="font-family: adobe arabic;font-size: 20px;" value="<?php echo $Current_job_rank; ?>"><?php  $result = result($con  , "select * from job_rank where Job_Rank = '$Current_job_rank' ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
$ID = $row ['ID'];
$Job_Rank = $row ['Title']; }
				 echo $Job_Rank;?> </option>
                      <?php
 $result = result($con  , "select * from job_rank where Job_Rank != '$Current_job_rank' ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
$ID = $row ['Job_Rank'];
$Job_Rank = $row ['Title'];
?>

             <option style="font-family: adobe arabic;font-size: 20px;" value="<?php echo $ID ?>"><?php echo $Job_Rank ?> </option>
	          
	<?php } ?>
                    
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">الدرجة الحالية</h1>
                  </label>
                </div></td>
              <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="date" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="Data_job_rank" required value = "<?php echo $Data_job_rank; ?>"/>
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ الدخول في الدرجة الحالية</h1></label>
                </div></td>
             
             <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="Work_place" style="margin-top:-7%;" required>
             <option style="font-family: adobe arabic;font-size: 20px;" value="<?php echo $Work_place ?>"><?php echo $Work_place ?> </option>
                      <?php
 $result = result($con  , "select * from work_place where Work_Place != '$Work_place' ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
$ID = $row ['ID'];
$Work_place = $row ['Work_Place'];
?>

             <option style="font-family: adobe arabic;font-size: 20px;" value="<?php echo $Work_place ?>"><?php echo $Work_place ?> </option>
	          
	<?php } ?>
                    
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">مكان العمل الحالي</h1>
                  </label>
                </div></td>
            
            </tr>
			  <tr>
				  
				   <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="Social_status" required>
 <?php if($Social_status == 2){ ?>
                                        <option value="2" style="font-family: adobe arabic;font-size: 20px;">متزوج</option>

					  <option value="1" style="font-family: adobe arabic;font-size: 20px;">
                    <h1 >
                     أعزب
                    </h1>
                    </option>
                    <option value="3" style="font-family: adobe arabic;font-size: 20px;">أرمل</option>
					  <?php }elseif ($Social_status == 1) {?>
					   <option value="1" style="font-family: adobe arabic;font-size: 20px;">
                    <h1 >
                     أعزب
                    </h1>
                    </option>
					  <option value="2" style="font-family: adobe arabic;font-size: 20px;">متزوج</option>

					 
                    <option value="3" style="font-family: adobe arabic;font-size: 20px;">أرمل</option>
					  
					  <?php }
                   elseif ($Social_status == 3) {?>
					                      <option value="3" style="font-family: adobe arabic;font-size: 20px;">أرمل</option 

					   <option value="1" style="font-family: adobe arabic;font-size: 20px;">
                    <h1 >
                     أعزب
                    </h1>
                    </option>
					  <option value="2" style="font-family: adobe arabic;font-size: 20px;">متزوج</option>

					 
					  <?php }?>                   
					  
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">الحالة الاجتماعية</h1>
                  </label>
                </div></td>
				    <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="Qualification" required>
                   <option style="font-family: adobe arabic;font-size: 20px;" value="<?php echo $Qualification ?>"><?php  $result = result($con  , "select * from Qualification where Qualification = '$Qualification' ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
$ID = $row ['ID'];
$Qualification = $row ['Qualification']; }
				 echo $Qualification;?> </option>
                      <?php
 $result = result($con  , "select * from Qualification where Qualification != '$Qualification' ");

   while ( $row =  mysqli_fetch_array($result)  )
   {
$ID = $row ['ID'];
$Qualification = $row ['Qualification'];
?>

             <option style="font-family: adobe arabic;font-size: 20px;" value="<?php echo $Qualification ?>"><?php echo $Qualification ?> </option>
	          
	<?php } ?>

                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">المؤهل الأكاديمي </h1>
                  </label>
                </div></td>
               <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="Specialization" required value="<?php echo $Specialization ?>">

                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">التخصص الأكاديمي </h1>
                  </label>
                </div></td>
               <td width="25%">
				   <div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" style="margin-top:7%;" name="PhoneNumber" value="<?php echo $PhoneNumber ?>">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">رقم هاتف الموظف</h1>
                  </label>
                </div>
				  </td>
              
              
            </tr>
			  <tr>
				 
				  <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="email" class="form-control" id="floatingInput" placeholder="" style="margin-top:7%;" name="Email" value="<?php echo $Email ?>">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">البريد الإلكتروني</h1>
                  </label>
                </div></td>
				  <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="file" class="form-control" id="floatingInput" placeholder="" style="margin-top:7%;" name="IMG" disabled>
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 23px; margin-bottom: 5px;">صورة شخصية للموظف</h1>
                  </label>
                </div></td>
				  <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="Notes" style="margin-top:7%;" value="<?php echo $Notes ?>">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">ملاحظات</h1>
                  </label>
                </div></td>
				<input type = "hidden" Name = "ID2" value = "<?php echo $ID2; ?>"/>
			  <td width="25%">
				  <style>
				  .success {
  overflow: hidden;
	transition: 0.2s;
  background-color:lavender;
  border-color: lavender;
  color: Black;
					  font-size: 23px;
	
}

.success:hover {
  background-color: green;
  color: white;
	box-shadow: 0 0 10px green , 0 0 40px green , 0 0 80px green;
	transition-delay: 0.1s;
	  border-color: green;

}
				  </style>
				  
				  									 <input type="submit" name="login" id="submit" class="success" value="حفظ البيانات" style="width: 90%; margin-left: 10%; height:40px; " />

				  </td>
			  </tr>
				  </form>
			  
			  		  <script>
	
	document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByName("Name");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل اسم الموظف رباعي");
            }
        };
		
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
		 var elements = document.getElementsByName("FName");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل اسم التابع أولاً ");
            }
        };
		
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    } 
			 var elements = document.getElementsByName("FileName");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل اسم الملف المراد أرشفته أولاً ");
            }
        };
		
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
var elements = document.getElementsByName("image");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أرفق المستد المؤيد للتبيعة  ");
            }
        };
		
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    } 

		var elements = document.getElementsByName("FLink");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل حدد صلة التابع بالموظف  ");
            }
        };
		
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    } 
		var elements = document.getElementsByName("Gender");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أختر نوع جنس الموظف");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
		  var elements = document.getElementsByName("Date_of_birth");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أختر تاريخ الميلاد  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
		  var elements = document.getElementsByName("Birth_No");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل رقم شهادة الميلاد  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
	  var elements = document.getElementsByName("Birth_Place");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل مكان اصدار شهادة الميلاد  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
	  var elements = document.getElementsByName("Birth_Date");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أختر تاريخ اصدار شهادة الميلاد  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
	  var elements = document.getElementsByName("National_ID");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل الرقم الوطني للموظف كاملاً دون زيادة أو نقصان   ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
	  var elements = document.getElementsByName("National_ID_Place");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل مكان اصدار الرقم الوطني  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
		  var elements = document.getElementsByName("National_ID_Date");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل تاريخ اصدار الرقم الوطني  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
	  var elements = document.getElementsByName("Job_Type");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً حدد نوع الوظيفة");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
		
	  var elements = document.getElementsByName("ID");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل نمرة الوظيفة");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
	  var elements = document.getElementsByName("Job_Description");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أختر الوصف الوظيفي ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
	  var elements = document.getElementsByName("Date_of_hiring");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل تاريخ التعيين ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
		  var elements = document.getElementsByName("Current_job_rank");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أختر الدرجة الحالية ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
	  var elements = document.getElementsByName("Data_job_rank");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أختر تاريخ الدخول في الدرجة الحالية ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
		  var elements = document.getElementsByName("Work_place");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أختر مكان العمل الحالي  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
	 var elements = document.getElementsByName("Social_status");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أختر الحالة الاجتماعية للموظف  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }	
	 var elements = document.getElementsByName("Qualification");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أختر المؤهل الاكاديمي الحالي للموظف  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
		 var elements = document.getElementsByName("Specialization");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("لطفاً أدخل التخصص الاكاديمي للموظف  ");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
		
		
		
		
		
		
		
		
		
		
		
		
		
})
	</script>
          </table>


  </div>
</div>



          <div class="col"> </div>
        </div>
      </div>
    </div>
  </div>
	
</div>
</div>
<div id="footer">
  <h5 align="center"> جميع الحقوق محفوظة
    <?php  echo ''.date("Y").""?>
    &copy; Continue IT 0123223171 </h5>
</div>
</body>
</html>
