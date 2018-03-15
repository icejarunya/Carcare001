<?PHP include"header1.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
แก้ไขข้อมูลอุปกรณ์ที่ติดมากับรถ
<hr>
<form class="form-horizontal"  method="post" action="acc_edit_q.php" enctype="multipart/form-data">

  
<?PHP 
include "config.inc.php"; 
$sql="SELECT * FROM tbl_accessories where  tbl_accessories.acc_id=$_GET[acc_id] "; 

$query = $conn->query($sql); 

$result = $query->fetch_assoc();


?>

<input name="acc_id" type="hidden" id="acc_id" value="<?=$result['acc_id'];?>" />
<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่ออุปกรณ์ติดมากับรถ</label>
      <div class="col-sm-10">
         <input  name="acc_name" type="text" class="form-control" id="acc_name" value="<?=$result['acc_name'];?>" placeholder="ชื่ออุปกรณ์ติดมากับรถ" required="required">
     </div> 
</div>







  
      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <label>
        <input type="submit" name="Submit" value="เพิ่มข้อมูล" />
       </label>
      </div> 
</div>
 

</form> 

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

