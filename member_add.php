<?PHP include"header2.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>ข้อมูลพนักงาน</h4>
      <hr>
<form class="form-horizontal"  method="post" action="" enctype="multipart/form-data">

  


<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">รหัสประชาชน</label>
      <div class="col-sm-10">
         <input type="text"  name="id_student" class="form-control" id="id_student" placeholder="รหัสนักศึกษา" required="required">
     </div> 
</div>
	

  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ - สกุล </label>
      <div class="col-sm-10">
       <input type="text"  name="name_student" class="form-control" id="name_student" placeholder="ชื่อนักศึกษา" required="required">
	   
     </div> 
</div>

  
  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">เบอร์โทร</label>
      <div class="col-sm-10">
           <input type="text"  name="surename_student" class="form-control" id="surename_student" placeholder="นามสกุล" required="required">
	   
     </div> 
</div>




  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ที่อยู่</label>
      <div class="col-sm-10">
		    <input type="text"  name="surename_student" class="form-control" id="surename_student" placeholder="นามสกุล" required="required">
     </div> 
</div>








  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">อีเมล</label>
      <div class="col-sm-10">
           <input type="email"  name="email_student" class="form-control" id="email_student" placeholder="อีเมล" required="required">
	   
     </div> 
</div>


<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ระดับผู้ใช้งาน</label>
    <div class="col-sm-10">
           
		   
		   
      <label>
		   <select name="select" class="form-control">
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
           <input type="password"  name="pass_student" class="form-control" id="pass_student" placeholder="รหัสผ่าน" required="required">
	   
     </div> 
</div>
  
  
  
<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
           <input type="password"  name="pass_student" class="form-control" id="pass_student" placeholder="รหัสผ่าน" required="required">
	   
     </div> 
</div>


  
  
  


  
      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
	   <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่มข้อมูล </button> 
	   
     </div> 
</div>
 

</form> 

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
