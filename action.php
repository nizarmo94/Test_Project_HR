
<?php
session_start();

//action.php
$User_entry = $_SESSION['username'];

if (isset($_POST["action"])) {

  $connect = mysqli_connect("localhost", "root", "", "tes");
  if ($_POST["action"] == "fetch") {
    $ID = $_POST["cur"];
    $query = "SELECT * FROM followers where National_ID = $ID ORDER BY id DESC";
    $result = mysqli_query($connect, $query);
    $output = '
<table  dir="rtl" class="table table-bordered">  
<tr class="table-secondary">
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>م</strong></pre></td>
<td align="center" ><pre style="font-size: 20px; direction: rtl;"><strong>اسم التابع</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>صلته بالموظف</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>المستند المؤيد لذلك </strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>تعديل</strong></pre></td>
<td align="center" ><pre style="font-size: 20px;direction: rtl;"><strong>حذف</strong></pre></td>
</tr>
  ';
    $i = 0;
    $mes = mysqli_num_rows($result);

    while ($row = mysqli_fetch_array($result)) {
      $i++;
      $output .= '

    <tr>
<td align="center"><h1>' . $i . '</h1></td>
<td align="center"><h1>' . $row["FName"] . '</h1></td>
<td align="center"><h1>' . $row["Link"] . '</h1></td>
<td align="center">
<a target="_blank" href="data:image/jpeg;base64,' . base64_encode($row['name']) . '"">
<img src="data:image/jpeg;base64,' . base64_encode($row['name']) . '" height="75" width="120px" class="img-thumbnail" id ="img"/></a>
</td>
<td align="center"><button type="button" name="update" class="btn btn-warning bt-xs update" id="' . $row["id"] . '">تعديل</button></td>
<td align="center"><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="' . $row["id"] . '">حذف</button></td>
    </tr>
';
    }
    if ($mes == 0) {
      $output .= '<td align="center" colspan="12"><h1 style="font-family: khalid art;font-size:20px; color: red;margin-top: 10px;">عفواً لا توجد بيانات تابعين لهذا الموظف يمكنكم الاضافة بالنقر على اضافة تابع</h1></td>';
    }
    $output .= '</table>';
    echo $output;
  }

  if ($_POST["action"] == "insert") {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    if ($_POST['FLink'] == 'ابن' or $_POST['FLink'] == 'إبنة' or $_POST['FLink'] == 'إبن متبنى' or $_POST['FLink'] == 'إبنة متبنية') {
      $Social = 1;
    } else {
      $Social = 0;
    }
    $query = "INSERT INTO followers(name ,`FName`,`Link`,`National_ID`,`Date_Entry`,`User_Entry`,`Notes`) VALUES ('$file', '" . $_POST["FName"] . "', '" . $_POST["FLink"] . "', '" . $_POST["National_ID"] . "', CURRENT_Time(), '$User_entry','$Social')";
    if (mysqli_query($connect, $query)) {
      echo 'تم إضافة التابع بنجاح';
    }
  }
  if ($_POST["action"] == "update") {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    if ($_POST['FLink'] == 'إبن' or $_POST['FLink'] == 'إبنة' or $_POST['FLink'] == 'إبن متبنى' or $_POST['FLink'] == 'إبنة متبنية') {
      $Social = 1;
    } else {
      $Social = 0;
    }
    $query = "UPDATE followers SET name = '$file' , FName = '" . $_POST["FName"] . "' , Link = '" . $_POST["FLink"] . "' , Notes = '$Social' WHERE id = '" . $_POST["image_id"] . "'";
    if (mysqli_query($connect, $query)) {
      echo 'تم تعديل بيانات التابع بنجاح';
    }
  }
  if ($_POST["action"] == "update2") {
    if ($_POST['FLink'] == 'إبن' or $_POST['FLink'] == 'إبنة' or $_POST['FLink'] == 'إبن متبنى' or $_POST['FLink'] == 'إبنة متبنية') {
      $Social = 1;
    } else {
      $Social = 0;
    }
    $query = "UPDATE followers SET FName = '" . $_POST["FName"] . "' , Link = '" . $_POST["FLink"] . "' , Notes = '$Social' WHERE id = '" . $_POST["image_id"] . "'";
    if (mysqli_query($connect, $query)) {
      echo 'تم تعديل بيانات التابع بنجاح';
    }
  }
  if ($_POST["action"] == "delete") {
    $query = "DELETE FROM followers WHERE id = '" . $_POST["image_id"] . "'";
    if (mysqli_query($connect, $query)) {
      echo 'تم حذف تابع بتجاح';
    }
  }
}
?>