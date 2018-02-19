<?PHP include"header2.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>ข้อมูลเวลาให้บริการ</h4>
      <hr>
<form class="form-horizontal"  method="post" action="time_add_q.php" enctype="multipart/form-data">

  


<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">เวลา</label>
      <div class="col-sm-10">
         <input type="text"  name="id_student" class="form-control" id="id_student" placeholder="เวลา" required="required">
     </div> 
</div>




<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ช่องให้บริการ</label>
      <div class="col-sm-10">
         
		   <select name="select" class="form-control">
           <option value="1">1</option>
           <option value="2">2</option>
         </select>
     </div> 
</div>


<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">สถานะ</label>
      <div class="col-sm-10">
         
		   <select name="select" class="form-control">
           <option value="1">เปิดให้บริการ</option>
           <option value="2">ปรับปรุง</option>
         </select>
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
