<?PHP include"header1.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>ข้อมูลสมาชิก (ลูกค้า)</h4>
      <hr>
<form class="form-horizontal"  method="post" action="custumer_add_q.php" enctype="multipart/form-data">

  


<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">รหัสประจำตัวประชาชน</label>
      <div class="col-sm-10">
         <input  name="cus_idcard" type="text" class="form-control" id="cus_idcard" maxlength="13" placeholder="รหัสประจำตัวประชาชน" required="required">
     </div> 
</div>
	

  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ - สกุล </label>
      <div class="col-sm-10">
       <input  name="cus_name" type="text" class="form-control" id="cus_name" placeholder="ชื่อ - สกุล" required="required">
	   
     </div> 
</div>

  
  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">เบอร์โทร</label>
      <div class="col-sm-10">
           <input type="text"  name="cus_tel" class="form-control" id="cus_tel" placeholder="เบอร์โทร" required="required">
	   
     </div> 
</div>




  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ที่อยู่</label>
      <div class="col-sm-10">
		    <input  name="cus_address" type="text" class="form-control" id="cus_address" placeholder="ที่อยู่" required="required">
     </div> 
</div>








  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">อีเมล</label>
      <div class="col-sm-10">
           <input  name="cus_email" type="email" class="form-control" id="cus_email" placeholder="อีเมล" required="required">
	   
     </div> 
</div>




 <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
           <input type="text"  name="cus_username" class="form-control" id="cus_username" placeholder="Username" required="required">
	   
     </div> 
</div>
  
  
  
<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
           <input type="password"  name="cus_password" class="form-control" id="cus_password" placeholder="Password" required="required">
	   
     </div> 
</div>


  
  
  


  
      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
	   <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> เพิ่มข้อมูล </button> 
	   
     </div> 
</div>
 

</form> 

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
