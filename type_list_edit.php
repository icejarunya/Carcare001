<?PHP include"header1.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>ข้อมูลประเภทรถ</h4>
      <hr>

<form class="form-horizontal"  method="post" action="type_edit_q.php" enctype="multipart/form-data">

  <?PHP 
include "config.inc.php";
$sql="SELECT * FROM tbl_type 
where tbl_type.type_id=$_GET[type_id]"; 
$query = $conn->query($sql); 
$result = $query->fetch_assoc();

?>
 
  		<input name="type_id" type="hidden" id="type_id" value="<?=$result['type_id'];?>" />


<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อประเภทรถ</label>
    <div class="col-sm-10">
       <input  name="type_name" type="text" class="form-control" id="type_name" value="<?=$result['type_name'];?>" placeholder="ชื่อประเภทรถ" required="required">
       <label></label>
    </div> 
</div>








 


  
  
  


  
      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
        <label>
        <input name="Submit" type="submit" id="Submit" value="เพิ่มข้อมูล" />
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
