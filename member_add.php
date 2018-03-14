<?PHP include"header1.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>ข้อมูลพนักงาน</h4>
      <hr>
<form class="form-horizontal"  method="post" action="member_add_q.php" enctype="multipart/form-data">

  


<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">รหัสประจำตัวประชาชน</label>
      <div class="col-sm-10">
         <input  name="staff_idcard" type="text" class="form-control" id="staff_idcard" maxlength="13" placeholder="รหัสประจำตัวประชาชน" required="required">
     </div> 
</div>
	

  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ - สกุล </label>
      <div class="col-sm-10">
       <input type="text"  name="staff_name" class="form-control" id="staff_name" placeholder="ชื่อ - สกุล" required="required">
	   
     </div> 
</div>

  
  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">เบอร์โทร</label>
      <div class="col-sm-10">
           <input  name="staff_tel" type="text" class="form-control" id="staff_tel" maxlength="10" placeholder="เบอร์โทร" required="required">
	   
     </div> 
</div>




  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ที่อยู่</label>
      <div class="col-sm-10">
		    <input type="text"  name="staff_address" class="form-control" id="staff_address" placeholder="ที่อยู่" required="required">
     </div> 
</div>








  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">อีเมล</label>
      <div class="col-sm-10">
           <input type="email"  name="staff_email" class="form-control" id="staff_email" placeholder="อีเมล" required="required">
	   
     </div> 
</div>


<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ระดับผู้ใช้งาน</label>
    <div class="col-sm-10">
           
		   
		   
      <label>
		   <select name="staff_level" class="form-control" id="staff_level">
		     <option value="1">พนักงานล้างรถ</option>
		     <option value="2">พนักงานรับรถ</option>
		     <option value="3">ผู้ดูแลระบบ</option>
           </select>
      </label>
     </div> 
</div>



 <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
           <input type="text"  name="staff_username" class="form-control" id="staff_username" placeholder="Username" required="required">
	   
     </div> 
</div>
  
  
  
<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
           <input type="password"  name="staff_password" class="form-control" id="staff_password" placeholder="Password" required="required">
	   
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
</body>
</html>
