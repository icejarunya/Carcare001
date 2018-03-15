<?PHP include"header1.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
แก้ไขข้อมูลสมาชิก (ลูกค้า)
<hr>
<form class="form-horizontal"  method="post" action="custumer_edit_q.php" enctype="multipart/form-data">

<?PHP 
include "config.inc.php"; 
$sql="SELECT * FROM tbl_customer 
where tbl_customer.cus_id=$_GET[cus_id]"; 
$query = $conn->query($sql); 
$result = $query->fetch_assoc();
?>

<input name="cus_id" type="hidden" id="cus_id" value="<?=$result['cus_id'];?>" />


<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">รหัสประจำตัวประชาชน</label>
      <div class="col-sm-10">
         <input  name="cus_idcard" type="text" class="form-control" id="cus_idcard" value="<?=$result['cus_idcard'];?>" maxlength="13" placeholder="รหัสประจำตัวประชาชน" required="required">
     </div> 
</div>
	

  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ - สกุล </label>
      <div class="col-sm-10">
       <input  name="cus_name" type="text" class="form-control" id="cus_name" value="<?=$result['cus_name'];?>" placeholder="ชื่อ - สกุล" required="required">
	   
     </div> 
</div>

  
  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">เบอร์โทร</label>
      <div class="col-sm-10">
           <input  name="cus_tel" type="text" class="form-control" id="cus_tel" value="<?=$result['cus_tel'];?>" maxlength="10" placeholder="เบอร์โทร" required="required">
	   
     </div> 
</div>




  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ที่อยู่</label>
      <div class="col-sm-10">
		    <input  name="cus_address" type="text" class="form-control" id="cus_address" value="<?=$result['cus_address'];?>" placeholder="ที่อยู่" required="required">
     </div> 
</div>








  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">อีเมล</label>
      <div class="col-sm-10">
           <input  name="cus_email" type="email" class="form-control" id="cus_email" value="<?=$result['cus_email'];?>" placeholder="อีเมล" required="required">
	   
     </div> 
</div>




 <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
           <input  name="cus_username" type="text" class="form-control" id="cus_username" value="<?=$result['cus_username'];?>" placeholder="Username" required="required">
	   
     </div> 
</div>
  
  
  
<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
           <input  name="cus_password" type="password" class="form-control" id="cus_password" value="<?=$result['cus_password'];?>" placeholder="Password" required="required">
	   
     </div> 
</div>


  
  
  


  
      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
	 
	   
       <label>
       <input type="submit" name="Submit" class="btn btn-default"  value="เพิ่มข้อมูล" />
       </label>&nbsp; 
      </div> 
</div>
 

</form> 

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
