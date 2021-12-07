<?php
session_start();
if (isset($_SESSION['type'])){
$type = $_SESSION['type'];

if ($type== '100')
   {
	header ("location:Administrator.php");
   }
   elseif ($type == '1')
   {
	header ("location:Man_power.php");
   }
   elseif ($type == '2')
   {
	header ("location:engineer.php");
   }
   elseif ($type == '3')
   {
	header ("location:administrative.php");
   }
   elseif ($type == '4')
   {
	header ("location:accounts.php");
   }
   elseif ($type == '5')
   {
	header ("location:Sadad.php");
   }
	elseif ($type == '110')
   {
	header ("location:Sadad2.php");
   }
   elseif ($type == '6')
   {
	header ("location:Man_power.php");
   }
   elseif ($type == '7')
   {
	header ("location:Mmaly.php");
   }
   elseif ($type == '101')
   {
	header ("location:admin.php");
   }
}
else 
   header ("location:logout.php");
