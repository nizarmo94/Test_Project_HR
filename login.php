<?php
//login.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tes");
if(isset($_POST["username"]) && isset($_POST["password"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["username"]);
 $password = md5(mysqli_real_escape_string($connect, $_POST["password"]));
 $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
 $result = mysqli_query($connect, $sql);
 $num_row = mysqli_num_rows($result);
 if($num_row > 0)
 {
  $data = mysqli_fetch_array($result);
  $_SESSION["username"] = $data["username"];
  $_SESSION["password"] = $data["password"];
  $_SESSION['type'] = $data["type"];
  $_SESSION['Notes'] = $data["Notes"];
if($_SESSION['Notes'] == 1){
	  echo 1;
}
	 else{
		 echo 4;
	 }
 } else {
	$sql = "SELECT * FROM users WHERE username = '".$username."'";
 $result = mysqli_query($connect, $sql);
 $num_row = mysqli_num_rows($result);
 if($num_row > 0)
 {
	 echo 2;
	 
 } else {
	 $sqlp = "SELECT * FROM users WHERE password = '".$password."'";
 $resultp = mysqli_query($connect, $sqlp);
 $num_rowp = mysqli_num_rows($resultp);
if ($num_rowp > 0){
	echo 3;
	
}
		 
	 }
}

}
?>