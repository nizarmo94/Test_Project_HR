<?php
//index.php
include 'lib.php';

?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>نظام إدارة الموارد البشرية </title>
  <link rel="shortcut icon" href="logo.png">
  <link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="popper.min.js"></script>
  <script src="jquery-3.5.1.slim.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
  <style>
    /* margin for all = 0 */
    * {
      margin: 0;
    }
    @font-face {
      font-family: khalid art;
      src: url(Font_Sys/Khalid-Art-bold.ttf);
    }
    @font-face {
      font-family: adobe arabic;
      src: url(Font_Sys/AdobeArabic-Bold.otf);
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
  </div>
  <!--  table end -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    var myToastEl = document.getElementById('myToast')
    myToastEl.addEventListener('hidden.bs.toast', function() {
      // do something...
    })
    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function(toastEl) {
      return new bootstrap.Toast(toastEl, option)
    })
  </script>
  <style>
    .topnav {
      overflow: hidden;
      background-color: #3123DC;
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
      .topnav a,
      .topnav input[type=text],
      .topnav .search-container button {
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
    <div class="topnav" style="width: 80%;margin-bottom: 20px;">
      <?php
      $result = result($con, "select * from Navbar where ID = 1 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a class="active" href="<?php echo $Href; ?>" style="font-family:ae_AlArabiya;"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 2 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 3 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 4 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 5 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 6 ");

      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 7 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 8 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 9 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 10 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 11 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 12 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
      <?php
      $result = result($con, "select * from Navbar where ID = 13 ");
      while ($row =  mysqli_fetch_array($result)) {
        $Href = $row['Href'];
        $Title = $row['Title'];
      ?>
        <a style="font-family:ae_AlArabiya;" href="<?php echo $Href; ?>"><?php echo $Title; ?></a>
      <?php } ?>
  </center>
  </div>
  <style>
    /* Style the tab */
    .tab {
      float: right;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 10%;
    }
    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 12px 1px;
      width: 100%;
      border: none;
      outline: none;
      text-align: right;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;
    }
    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }
    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #ccc;
    }
    /* Style the tab content */
    .tabcontent {
      float: right;
      padding: 0px 12px;
      border: 1px solid #ccc;
      width: 80%;
    }
  </style>
  <div style="width:89%; margin-right: 10%; margin-top:20px; ">
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'All')" id="defaultOpen">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">الجملة</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'General_manager')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">مكتب المدير العام</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'City')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; "> مياه المدينة</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'Dawahy')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; "> مياه الضواحي </h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'ref')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; "> مياه الريف </h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'Jabra')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">أبوجابرة</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'Arab')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">بحر العرب</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'Fardos')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">الفردوس</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'Karinka')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">ابوكارنكا</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'Aslaya')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">عسلاية</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'Yasen')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">ياسين</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'SH')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">شعيرية</h1>
      </button>
      <button class="tablinks" onclick="openCity(event, 'Adela')">
        <h1 align="center" style="font-family:Khalid Art;font-size:18px; ">عديلة</h1>
      </button>
    </div>
    <div id="All" class="tabcontent">
      <table class="table table-success table-striped" style="width: 100%; margin-top: 20px; " align="center">
        <?php
        $result4 = result($con, "select * from man_power");
        $Total_all = mysqli_num_rows($result4);
        ?>
        <tr class="table-info">
          <td class="table-info" align="center" colspan="12">
            <h1 style="color:#3123DC;font-size:23px;font-family: khalid art; direction: rtl;margin-bottom:10px; margin-top:10px;">جملة القوى العاملة بهيئة مياه ولاية شرق دارفور</pre>(<?php echo $Total_all  ?>)عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>
        <tr>
          <td align="center">
            <pre style="font-size: 20px; direction: rtl;"><strong>م</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 20px;direction: rtl;"><strong>مكان العمل</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 20px;direction: rtl;"><strong>رجال</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 20px;direction: rtl;"><strong>نساء</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 20px;direction: rtl;"><strong>المجموع</strong></pre>
          </td>
        </tr>
        <tr>
          <?php
          $result = result($con, "select * from work_place ");
          while ($row =  mysqli_fetch_array($result)) {
            $ID = $row['ID'];
            $Work_place = $row['Work_Place'];
            $result1 = result($con, "select * from man_power where Work_place = '$Work_place' and Gender = 1 ");
            $Man = mysqli_num_rows($result1);
            $result2 = result($con, "select * from man_power where Work_place = '$Work_place' and Gender = 2 ");
            $women = mysqli_num_rows($result2);
            $result3 = result($con, "select * from man_power where Work_place = '$Work_place' ");
            $Total = mysqli_num_rows($result3);
            $result4 = result($con, "select * from man_power");
            $Total_all = mysqli_num_rows($result4);
          ?>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Work_place; ?></h1>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Man; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $women; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Total; ?></h1>
              </center>
            </td>
        </tr>
      <?php } ?>
      </table>
    </div>
    <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction2() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput2");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable2");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction4() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput4");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable4");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction5() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput5");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable5");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction6() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput6");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable6");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction7() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput7");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable7");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction8() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput8");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable8");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction9() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput9");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable9");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction10() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput10");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable10");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction11() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput11");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable11");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction12() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput12");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable12");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      function myFunction13() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput13");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable13");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>
    <div id="General_manager" class="tabcontent">
      <button id="Fillter" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
		margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
		font-family: khalid art;
		font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter").click(function() {
            $("#div3").fadeIn(1500);
          });
        });
      </script>
      <div id="div3" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 5px; " align="center" id="myTable">
        <?php
        $result4 = result($con, "select * from man_power where Work_place = 'مكتب المدير العام'");
        $Total_all = mysqli_num_rows($result4);
        ?>
        <td class="table-info" align="center" colspan="12">
          <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة القوى العاملة بمكتب المدير العام للهيئة (<?php echo  number_format($Total_all);  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
        </td>
        </tr>
        <tr class="table-info">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <th align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </th>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>
        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مكتب المدير العام' ORDER BY `man_power`.`Order_By` ASC");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $i++;
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
        ?>
          <tr class="table-info">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>
            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>


      </table>
    </div>

    <div id="City" class="tabcontent">
      <button id="Fillter1" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter1").click(function() {
            $("#div1").fadeIn(1500);
            $("#div2").fadeIn();
          });
        });
      </script>
      <div id="div1" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput2" onkeyup="myFunction2()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable2">
        <?php



        $result4 = result($con, "select * from man_power where Work_place = 'مياه المدينة'");
        $Total_all = mysqli_num_rows($result4);
        ?>
        <tr class="table-secondary">
          <td class="table-secondary" align="center" colspan="12">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة القوى العاملة بمياه المدنية (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>

        <tr class="table-secondary">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>

        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه المدينة' ORDER BY `man_power`.`Order_By` ASC ");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>

          <tr class="table-secondary">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>

            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>


      </table>
    </div>
    <div id="Dawahy" class="tabcontent">
      <button id="Fillter4" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter4").click(function() {
            $("#div4").fadeIn(1500);
          });
        });
      </script>
      <div id="div4" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput4" onkeyup="myFunction4()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable4">
        <?php



        $result4 = result($con, "select * from man_power where Work_place = 'مياه الضواحي'");
        $Total_all = mysqli_num_rows($result4);
        ?>
        <tr class="table-Danger">
          <td class="table-warning" align="center" colspan="12">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه الضواحي (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>

        <tr class="table-warning">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م </strong></pre>
          </td>

          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>

        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه الضواحي' ORDER BY `man_power`.`Order_By` ASC");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>

          <tr class="table-warning">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>

            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>


      </table>
    </div>
    <div id="ref" class="tabcontent">
      <button id="Fillter5" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter5").click(function() {
            $("#div5").fadeIn(1500);
          });
        });
      </script>
      <div id="div5" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput5" onkeyup="myFunction5()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable5">
        <?php



        $result4 = result($con, "select * from man_power where Work_place = 'مياه الريف'");
        $Total_all = mysqli_num_rows($result4);
        ?>
        <tr class="table-Danger">
          <td class="table-primary" align="center" colspan="12">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه الريف (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>

        <tr class="table-primary">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>

          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>

        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه الريف' ORDER BY `man_power`.`Order_By` ASC");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>

          <tr class="table-primary">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>

            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>


      </table>
    </div>
    <div id="Jabra" class="tabcontent">
      <button id="Fillter6" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter6").click(function() {
            $("#div6").fadeIn(1500);
          });
        });
      </script>
      <div id="div6" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput6" onkeyup="myFunction6()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable6">
        <?php



        $result4 = result($con, "select * from man_power where Work_place = 'مياه محلية أبوجابرة'");
        $Total_all = mysqli_num_rows($result4);
        ?>
        <tr class="table-Danger">
          <td class="table-success" align="center" colspan="12">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه محلية أبوجابرة (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>

        <tr class="table-success">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>

          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>

        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه محلية أبوجابرة' ORDER BY `man_power`.`Order_By` ASC");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>

          <tr class="table-success">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>

            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>


      </table>
    </div>
    <div id="Arab" class="tabcontent">
      <button id="Fillter7" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter7").click(function() {
            $("#div7").fadeIn(1500);
          });
        });
      </script>
      <div id="div7" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput7" onkeyup="myFunction7()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable7">
        <?php
        $result4 = result($con, "select * from man_power where Work_place = 'مياه محلية بحر العرب'");
        $Total_all = mysqli_num_rows($result4);
        ?>
        <tr class="table-Danger">
          <td align="center" colspan="12">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه محلية بحر العرب (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>
        <tr>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>
        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه محلية بحر العرب' ORDER BY `man_power`.`Order_By` ASC");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>
          <tr>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>
            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>
      </table>
    </div>
    <div id="Fardos" class="tabcontent">
      <button id="Fillter8" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
		margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
		font-family: khalid art;
		font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter8").click(function() {
            $("#div8").fadeIn(1500);
          });
        });
      </script>
      <div id="div8" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput8" onkeyup="myFunction8()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable8">
        <?php
        $result4 = result($con, "select * from man_power where Work_place = 'مياه محلية الفردوس'");
        $Total_all = mysqli_num_rows($result4);
        ?>
        <tr class="table-Danger">
          <td align="center" colspan="12" class="table-primary">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه محلية الفردوس (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>
        <tr class="table-primary">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>
        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه محلية الفردوس' ORDER BY `man_power`.`Order_By` ASC");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>
          <tr class="table-primary">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>
            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");
                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>
              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>
      </table>
    </div>
    <div id="Karinka" class="tabcontent">
      <button id="Fillter9" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter9").click(function() {
            $("#div9").fadeIn(1500);
          });
        });
      </script>
      <div id="div9" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput9" onkeyup="myFunction9()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable9">
        <?php
        $result4 = result($con, "select * from man_power where Work_place = 'مياه محلية ابوكارنكا'");
        $Total_all = mysqli_num_rows($result4);
        ?>
        <tr class="table-Danger">
          <td align="center" colspan="12" class="table-light">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه محلية ابوكارنكا (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>
        <tr class="table-light">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>
        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه محلية ابوكارنكا' ORDER BY `man_power`.`Order_By` ASC ");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>
          <tr class="table-light">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>
            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>
              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>
      </table>
    </div>
    <div id="Aslaya" class="tabcontent">
      <button id="Fillter10" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter10").click(function() {
            $("#div10").fadeIn(1500);
          });
        });
      </script>
      <div id="div10" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput10" onkeyup="myFunction10()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable10"> <?php
                                                                                                                  $result4 = result($con, "select * from man_power where Work_place = 'مياه محلية عسلاية'");
                                                                                                                  $Total_all = mysqli_num_rows($result4);
                                                                                                                  ?>
        <tr class="table-Danger">
          <td align="center" colspan="12" class="table-success">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه محلية عسلاية (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>

        <tr class="table-success">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>

        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه محلية عسلاية' ORDER BY `man_power`.`Order_By` ASC ");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>

          <tr class="table-success">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>

            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>


      </table>
    </div>
    <div id="Yasen" class="tabcontent">
      <button id="Fillter11" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter11").click(function() {
            $("#div11").fadeIn(1500);
          });
        });
      </script>
      <div id="div11" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput11" onkeyup="myFunction11()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable11"> <?php



                                                                                                                  $result4 = result($con, "select * from man_power where Work_place = 'مياه محلية ياسين'");
                                                                                                                  $Total_all = mysqli_num_rows($result4);
                                                                                                                  ?>
        <tr class="table-Danger">
          <td align="center" colspan="12" class="table-secondary">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه محلية ياسين (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>

        <tr class="table-secondary">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>

        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه محلية ياسين' ORDER BY `man_power`.`Order_By` ASC");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>

          <tr class="table-secondary">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>

            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>


      </table>
    </div>
    <div id="SH" class="tabcontent">
      <button id="Fillter12" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter12").click(function() {
            $("#div12").fadeIn(1500);
          });
        });
      </script>
      <div id="div12" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput12" onkeyup="myFunction12()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable12"> <?php



                                                                                                                  $result4 = result($con, "select * from man_power where Work_place = 'مياه محلية  شعيرية'");
                                                                                                                  $Total_all = mysqli_num_rows($result4);
                                                                                                                  ?>
        <tr>
          <td align="center" colspan="12" class="table-secondary">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه محلية شعيرية (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>

        <tr>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>

        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه محلية  شعيرية' ORDER BY `man_power`.`Order_By` ASC");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>

          <tr>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>

            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>


      </table>
    </div>
    <div id="Adela" class="tabcontent">
      <button id="Fillter13" style="
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:34%;
								margin-top: 20px;
    border: none;
    cursor: pointer;
    width: 20%;
								font-family: khalid art;
								font-size: 15px;
">فلترة البيانات</button><br><br>
      <script src="jquery.min.js"></script>
      <script>
        $(document).ready(function() {
          $("#Fillter13").click(function() {
            $("#div13").fadeIn(1500);
          });
        });
      </script>
      <div id="div13" style="width:1300px;display:none;"> <input type="text" class="form-control" id="myInput13" onkeyup="myFunction13()" placeholder="فلترة البيانات المعروضة عبر إسم الموظف" title="تتم الفلترة عبر اسم الموظف" style="width: 45%; margin-right: 10%; margin-bottom:10px; font-family:khalid art ;  ">
      </div>
      <table class="table table-bordered" style="width: 100%; margin-top: 20px; " align="center" id="myTable13"> <?php



                                                                                                                  $result4 = result($con, "select * from man_power where Work_place = 'مياه محلية عديلة'");
                                                                                                                  $Total_all = mysqli_num_rows($result4);
                                                                                                                  ?>
        <tr class="table-Danger">
          <td align="center" colspan="12" class="table-info">
            <h1 style="color:#000;font-size:23px;font-family: khalid art; margin-bottom:10px; margin-top:10px;direction: rtl;">جملة العاملين بمياه محلية عديلة (<?php echo $Total_all  ?>) عامل وعاملة تفاصيلهم كالتالي:</h1>
          </td>
        </tr>

        <tr class="table-info">
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>م</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>النمرة </strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>اسم الموظف رباعي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الجنس</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الرقم الوطني</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>المؤهل الاكاديمي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px; direction: rtl;font-family: adobe arabic;"><strong>الوصف الوظيفي</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>تاريخ التعيين</strong></pre>
          </td>
          <td align="center">
            <pre style="font-size: 23px;direction: rtl;font-family: adobe arabic;"><strong>الدرجة </strong></pre>
          </td>

        </tr>
        <?php
        $result = result($con, "select * from man_power where Work_place = 'مياه محلية عديلة' ORDER BY `man_power`.`Order_By` ASC");
        $i = 0;
        while ($row =  mysqli_fetch_array($result)) {
          $ID = $row['ID'];
          $Name = $row['Name'];
          $Gender = $row['Gender'];
          $National_ID = $row['National_ID'];
          $Qualification = $row['Qualification'];
          $Job_Description = $row['Job_Description'];
          $Date_of_hiring = $row['Date_of_hiring'];
          $Current_job_rank = $row['Current_job_rank'];
          $i++;
        ?>

          <tr class="table-info">
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $i; ?></h1>
              </center>
            </th>
            <th align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $ID; ?></h1>
              </center>
            </th>

            <td align="center"><a href="Employee.php?ID=<?php echo $National_ID; ?>&Page=1">
                <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Name; ?></h1>
              </a></td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Gender == 1) {
                                                                    echo 'ذكر';
                                                                  } else {
                                                                    echo 'أنثى';
                                                                  } ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $National_ID; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Qualification; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php
                                                                  $result1 = result($con, "select * from Job_Description where ID = $Job_Description ");

                                                                  while ($row =  mysqli_fetch_array($result1)) {
                                                                    echo $row['Job_Description'];
                                                                  }
                                                                  ?>


              </h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php echo $Date_of_hiring; ?></h1>
              </center>
            </td>
            <td align="center">
              <h1 style="font-family: khalid art;font-size:17px;"><?php if ($Current_job_rank == 33) {
                                                                    echo '3/خ';
                                                                  } elseif ($Current_job_rank == 22) {
                                                                    echo '2/خ';
                                                                  } elseif ($Current_job_rank == 111) {
                                                                    echo '1/خ';
                                                                  } else {
                                                                    echo $Current_job_rank;
                                                                  } ?></h1>
              </center>
            </td>

          </tr>
        <?php } ?>


      </table>
    </div>
  </div>
  <script>
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
      document.getElementById("footer").style.display = "none";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <p>&nbsp; </p>
  <!--  bg end -->
  <div id="footer">
    <h5 align="center"> جميع الحقوق محفوظة <?php echo '' . date("Y") . "" ?> &copy; Continue IT 0123223171 </h5>
  </div>
</body>
</html>