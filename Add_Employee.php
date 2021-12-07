<?php
//index.php
include 'lib.php';

?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
<meta  http-equiv="refresh" content="3200;url=logout.php" />
<meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>نظام إدارة الموارد البشرية </title>
<link rel="shortcut icon" href="logo.png">
	<link rel="stylesheet" href="css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
<link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
	<script src ="popper.min.js"></script>
	<script src="jquery-3.5.1.slim.min.js"></script>
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
<body  dir="rtl" style="font-family:adobe arabic;">
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
	@font-face {
  font-family: khalid art;
  src: url(Font_Sys/Khalid-Art-bold.ttf);
}
	@font-face {
  font-family: adobe arabic;
  src: url(Font_Sys/AdobeArabic-Bold.otf);
}
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
	$result = result($con  , "select * from Navbar where ID = 1 ");
while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a href="<?php echo $Href; ?>" style="font-family:ae_AlArabiya;"><?php echo $Title; ?></a>
	<?php }?>
		<?php 
	$result = result($con  , "select * from Navbar where ID = 2 ");
while ( $row =  mysqli_fetch_array($result)  )
{
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a class="active"  style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
	<?php }?>
<?php 
	$result = result($con  , "select * from Navbar where ID = 3 ");
  while ( $row =  mysqli_fetch_array($result)  )
  {
$Href = $row ['Href'];
$Title = $row ['Title'];
	?>
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
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
  <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
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
<div class="container" style="width: 80%;">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color:lavender;">
		  <h1 style="font-size: 30px;">إضافة موظف للقوى العاملة</h1>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body" >
        <div class="p-3 border bg-light" style="margin-left:0%;">
          <table width="100%" style="margin-right:0%;">
			  <form action="Save_Employee.php" method="post" name="form" enctype="multipart/form-data" >
            <tr>
              <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;" >
                  <input type="text" name="Name" class="form-control" id="floatingInput" placeholder="" required>
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">إسم الموظف رباعي</h1>
                  </label>
                </div></td>
              
				  <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select name="Gender" class="form-select" id="floatingSelect" aria-label="Floating label select example" style="margin-top:-7%;" required>
                    <option value disabled selected style="font-family: adobe arabic;font-size: 23px;">يرجى الاختيار </option>
                    
                    <option value="1" style="font-family: adobe arabic;font-size: 20px;">ذكر</option>
                    <option value="2" style="font-family: adobe arabic;font-size: 20px;">انثى</option>
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">الجنس</h1>
                  </label>
                </div></td>
				<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="date" class="form-control" id="floatingInput" placeholder="" name="Date_of_birth" required>
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ الميلاد</h1></label>
                </div></td>
              <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="Birth_No" required>
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">رقم شهادة الميلاد أو تقدير العمر</h1>
                  </label>
                </div></td>
             
            </tr>
            <tr>
				 <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="Birth_Place" required>
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">مكان اصدار شهادة الميلاد</h1>
                  </label>
                </div></td>
				<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="date" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="Birth_Date" required>
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ اصدار شهادة الميلاد</h1></label>
                </div></td>
				 <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="National_ID"  pattern="[0-9]{11}" title="يجب إدخال الرقم الوطني كاملاً من غير فواصل" required>
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">الرقم الوطني</h1>
                  </label>
                </div></td>
				<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="National_ID_Place" required>
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">مكان اصدار الرقم الوطني </h1>
                  </label>
                </div></td>
				  </tr>
				  <tr>
              <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="date" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="National_ID_Date" required>
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ اصدار الرقم الوطني</h1></label>
                </div></td>
				
					    <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="margin-top:-7%;" name="Job_Type" required>
                    <option value disabled selected style="font-family: adobe arabic;font-size: 23px;">يرجى الاختيار </option>
                    <option value="خدمة مدنية" style="font-family: adobe arabic;font-size: 20px;">
                    <h1 >
                     خدمة مدنية
                    </h1>
                    </option>
                    <option value="تعاقد" style="font-family: adobe arabic;font-size: 20px;">تعاقد</option>
                    <option value="مؤقت" style="font-family: adobe arabic;font-size: 20px;">مؤقت</option>
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">نوع الوظيفة</h1>
                  </label>
                </div></td>
					  <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="ID" required>
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">النمرة الوظيفية</h1>
                  </label>
                </div></td>
              <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="margin-top:-7%;" name="Job_Description" required>
                    <option value disabled selected style="font-family: adobe arabic;font-size: 23px;">يرجى الاختيار </option>
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
                  <input type="date" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="Date_of_hiring" required>
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ التعيين</h1></label>
                </div></td>
<td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="margin-top:-7%;" name="Current_job_rank" required>
                    <option value disabled selected style="font-family: adobe arabic;font-size: 23px;">يرجى الاختيار </option>
                    <option value="15" style="font-family: adobe arabic;font-size: 20px;">الخامسة عشر</option>
                    <option value="14" style="font-family: adobe arabic;font-size: 20px;">الرابعة عشر</option>
                    <option value="13" style="font-family: adobe arabic;font-size: 20px;">الثالثة عشر</option>
                    <option value="12" style="font-family: adobe arabic;font-size: 20px;">الثانية عشر</option>
                    <option value="11" style="font-family: adobe arabic;font-size: 20px;">الحادية عشر</option>
                    <option value="10" style="font-family: adobe arabic;font-size: 20px;">العاشرة</option>
                    <option value="9" style="font-family: adobe arabic;font-size: 20px;">التاسعة</option>
                    <option value="8" style="font-family: adobe arabic;font-size: 20px;">الثامنة</option>
                    <option value="7" style="font-family: adobe arabic;font-size: 20px;">السابعة</option>
                    <option value="5" style="font-family: adobe arabic;font-size: 20px;">الخامسة</option>
                    <option value="4" style="font-family: adobe arabic;font-size: 20px;">الرابعة</option>
                    <option value="3" style="font-family: adobe arabic;font-size: 20px;">الثالثة</option>
                    <option value="2" style="font-family: adobe arabic;font-size: 20px;">الثانية</option>
                    <option value="1" style="font-family: adobe arabic;font-size: 20px;">الأولى</option>
                    <option value="33" style="font-family: adobe arabic;font-size: 20px;">الثالثة الخاصة</option>
                    <option value="22" style="font-family: adobe arabic;font-size: 20px;">الثانية الخاصة</option>
                    <option value="11" style="font-family: adobe arabic;font-size: 20px;">الأولى الخاصة</option>
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">الدرجة الحالية</h1>
                  </label>
                </div></td>
              <td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="date" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="Data_job_rank" required>
                  <label for="floatingPassword" ><h1 style="font-family: adobe arabic;font-size: 23px;">تاريخ الدخول في الدرجة الحالية</h1></label>
                </div></td> 
          <td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="Work_place" style="margin-top:-7%;" required>
                    <option value disabled selected style="font-family: adobe arabic;font-size: 23px;">يرجى الاختيار </option>
                      <?php
 $result = result($con  , "select * from work_place ");
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
                  <option value disabled selected style="font-family: adobe arabic;font-size: 23px;">يرجى الاختيار </option>
                  <option value="1" style="font-family: adobe arabic;font-size: 20px;">
                  <h1 >
                  أعزب
                  </h1>
                  </option>
                  <option value="2" style="font-family: adobe arabic;font-size: 20px;">متزوج</option>
                  <option value="3" style="font-family: adobe arabic;font-size: 20px;">أرمل</option>
                  </select>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">الحالة الاجتماعية</h1>
                  </label>
                </div></td>
			<td width="25%"><div class="form-floating" style="margin-left: 15px;">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="Qualification" required>
                  <option value disabled selected style="font-family: adobe arabic;font-size: 23px;" >يرجى الاختيار </option>
	<?php
 $result = result($con  , "select * from Qualification ");
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
                                    <input type="text" class="form-control" id="floatingInput" placeholder="" style="margin-top:0%;" name="Specialization" required>
                  <label for="floatingSelect">
                  <h1 style="font-family: adobe arabic;font-size: 23px;">التخصص الأكاديمي </h1>
                  </label>
                </div></td>
<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" style="margin-top:7%;" name="PhoneNumber">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">رقم هاتف الموظف</h1>
                  </label>
                </div></td>              
</tr>
<tr>
<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="email" class="form-control" id="floatingInput" placeholder="" style="margin-top:7%;" name="Email">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">البريد الإلكتروني</h1>
                  </label>
                </div></td>
<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="file" class="form-control" id="floatingInput" placeholder="" style="margin-top:7%;" name="IMG">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 23px; margin-bottom: 5px;">صورة شخصية للموظف</h1>
                  </label>
                </div></td>
<td width="25%"><div class="form-floating mb-3" style="margin-left: 15px;">
                  <input type="text" class="form-control" id="floatingInput" placeholder="" name="Notes" style="margin-top:7%;">
                  <label for="floatingPassword" >
                  <h1 style="font-family: adobe arabic;font-size: 20px;">ملاحظات</h1>
                  </label>
                </div></td>
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
                e.target.setCustomValidity("لطفاً أدخل الرقم الوطني للموظف   ");
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
