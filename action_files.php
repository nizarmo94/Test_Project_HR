<?php
session_start();

//action.php
$User_entry = $_SESSION['username'];

if(isset($_POST["action"]))
{
$connect = mysqli_connect("localhost", "root", "", "tes");
if($_POST["action"] == "fetch")
{
$ID = $_POST["cur"];
  $query = "SELECT * FROM e_files where National_ID = $ID ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
<table  dir="rtl" class="table table-bordered">  
<tr class="table-secondary">
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>م</strong></pre></td>
<td align="center" ><pre style="font-size: 20px; direction: rtl;"><strong>اسم الملف</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>النسخة الإلكترونية للملف </strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>تعديل</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>حذف</strong></pre></td>
</tr>
';
$i=0;
$mes = mysqli_num_rows($result);	
  while($row = mysqli_fetch_array($result))
  {
$i++;
$output .= '
<tr>
<td align="center"><h1>'.$i.'</h1></td>
<td align="center"><h1>'.$row["Title"].'</h1></td>
<td align="center">
<a target="_blank" href="data:image/jpeg;base64,'.base64_encode($row['name'] ).'"">
<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="75" width="120px" class="img-thumbnail" id = "img"/></a>
</td>
<td align="center"><button type="button" name="update_files" class="btn btn-warning bt-xs update2" id="'.$row["id"].'">تعديل</button></td>
<td align="center"><button type="button" name="files" class="btn btn-danger bt-xs delete2" id="'.$row["id"].'">حذف</button></td>
    </tr>
';
  }
if($mes == 0){ 
$output .= '<td align="center" colspan="12"><h1 style="font-family: khalid art;font-size:20px; color: red;margin-top: 10px;">عفواً لم يتم أرشفة أي ملفات إلكترونية لهذا الموظف يمكنكم الاضافة بالنقر على اضافة ملف</h1></td>';
}
$output .= '</table>';
echo $output;
}
if($_POST["action"] == "insert")
{
  if (isset($_POST['checkbox']) && $_POST['checkbox'] == 'checked') 
{
$Tamsel = 40;
}else{
$Tamsel = 0;
}	
  $file = addslashes(file_get_contents($_FILES["image_files"]["tmp_name"]));
  $query = "INSERT INTO e_files (`name`,`Title`,`Tamsel` ,`National_ID`,`Date_Entry`,`User_Entry`) VALUES ('$file','".$_POST["FileName"]."','$Tamsel','".$_POST["National_ID"]."',CURRENT_Time(), '$User_entry')";
  if(mysqli_query($connect, $query))
  {
  echo 'تم إضافة الملف بنجاح';
  }

if($_POST["action"] == "update")
{
  if (isset($_POST['checkbox']) && $_POST['checkbox'] == 'checked') 
{
$Tamsel = 40;
}else{
$Tamsel = 0;
}
  $file = addslashes(file_get_contents($_FILES["image_files"]["tmp_name"]));
  $query = "UPDATE e_files SET name = '$file' , `Title` = '".$_POST["FileName"]."' ,`Tamsel` = '$Tamsel' WHERE id = '".$_POST["image_id"]."'"; 
  if(mysqli_query($connect, $query))
  {
  echo 'تم تعديل بيانات الملف بنجاح';
  }
}
}
if($_POST["action"] == "update2")
{
  if (isset($_POST['checkbox']) && $_POST['checkbox'] == 'checked') 
{
$Tamsel = 40;
}else{
$Tamsel = 0;
}		 
  $query = "UPDATE e_files SET Title = '".$_POST["FileName"]."' , `Tamsel` = '$Tamsel'  WHERE id = '".$_POST["image_id"]."'"; 
  if(mysqli_query($connect, $query))
  {
echo 'تم تعديل بيانات الملف بنجاح';
  }
}
		if($_POST["action"] == "delete")
{
  $query = "DELETE FROM e_files WHERE id = '".$_POST["image_id"]."'";
  if(mysqli_query($connect, $query))
  {
echo 'تم حذف ملف بتجاح';
  }

}

}
?>