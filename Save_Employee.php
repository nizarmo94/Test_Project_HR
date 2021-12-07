<?php
include 'lib.php';
 header('Content-Type: text/html; charset=utf-8');
$Name = $_POST['Name'];
$Gender = $_POST['Gender'];
$Date_of_birth = $_POST['Date_of_birth'];
$Birth_No = $_POST['Birth_No'];
$Birth_Place = $_POST['Birth_Place'];
$Birth_Date = $_POST['Birth_Date'];
$National_ID = $_POST['National_ID'];
$National_ID_Place = $_POST['National_ID_Place'];
$National_ID_Date = $_POST['National_ID_Date'];
$Job_Type = $_POST['Job_Type'];
$ID = $_POST['ID'];
$Job_Description = $_POST['Job_Description'];
$Date_of_hiring = $_POST['Date_of_hiring'];
$Current_job_rank = $_POST['Current_job_rank'];
$Data_job_rank = $_POST['Data_job_rank'];
$Work_place = $_POST['Work_place'];
$Social_status = $_POST['Social_status'];
$Qualification = $_POST['Qualification'];
$Specialization = $_POST['Specialization'];
$PhoneNumber = $_POST['PhoneNumber'];
$Email = $_POST['Email'];
$Notes = $_POST['Notes'];
if($Current_job_rank == 111){
	$Order_By = 0.1;

}
elseif($Current_job_rank == 22){
	$Order_By = 0.2;

}
elseif($Current_job_rank == 33){
	$Order_By = 0.3;

}else
	{
	$Order_By = $Current_job_rank;

}
$User_entry = $_SESSION['username'];
 $result = result($con  , "select * from man_power where `National_ID` = $National_ID and `ID` = '$ID' ");
 $result0 = result($con  , "select * from man_power where `National_ID` = $National_ID ");
 $result1 = result($con  , "select * from man_power where `ID` = '$ID' ");
$Check = mysqli_num_rows($result);
$Check_National_ID = mysqli_num_rows($result0);
$Check_ID = mysqli_num_rows($result1);
if($Check > 0){
	   header ("location:Add_Employee_National_ID.php?National_ID= $National_ID");

}
elseif($Check_National_ID > 0){
	   header ("location:Add_Employee_National_ID.php?National_ID= $National_ID");

}
elseif($Check_ID  > 0){
		   header ("location:Add_Employee_ID.php?National_ID= $ID");

}
else{  
 mysqli_query ( $con ,"INSERT INTO `man_power` (`#`, `Name`, `Gender`, `Date_of_birth`, `Birth_No`, `Birth_Place`, `Birth_Date`, `National_ID`, `National_ID_Place`, `National_ID_Date`, `Job_Type`, `ID`, `Job_Description`, `Date_of_hiring`, `Current_job_rank`, `Data_job_rank`, `Work_place`, `Social_status`, `Qualification`, `Specialization`, `PhoneNumber`, `Email`, `IMG`, `Notes`, `Order_By`, `Data_entry`, `User_entry`) VALUES (NULL, '$Name', '$Gender', '$Date_of_birth', '$Birth_No', '$Birth_Place', '$Birth_Date', '$National_ID', '$National_ID_Place', '$National_ID_Date', '$Job_Type', '$ID', '$Job_Description', '$Date_of_hiring', '$Current_job_rank', '$Data_job_rank', '$Work_place', '$Social_status', '$Qualification', '$Specialization', '$PhoneNumber', '$Email', 'IMG', '$Notes', '$Order_By' , CURRENT_Time(), '$User_entry');");

			   header ("location:Employee.php?ID=$National_ID&Page=2");

 }

	
	


?>





 



  
 
 
