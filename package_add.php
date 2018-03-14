<?PHP include"header1.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>ข้อมูลแพ็คเกจล้างรถ</h4>
      <hr>
<form class="form-horizontal"  method="post" action="package_add_q.php" enctype="multipart/form-data">

  

<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ประเภทรถ</label>
    <div class="col-sm-10">
         
	   
           <label>
           <select name="type_id" class="form-control">
		   
		   <?PHP 
include "config.inc.php"; 
$sql1="SELECT * FROM tbl_type"; 
$query1 = $conn->query($sql1); 
while($result1 = $query1->fetch_assoc()) 
{ 

?>
             <option value="<?=$result1['type_id'];?>"><?=$result1['type_name'];?></option>
			 
<?PHP }?>
		
           </select>
           </label>
     </div> 
</div>



<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อแพ็คเกจ</label>
      <div class="col-sm-10">
         <input type="text"  name="pack_name" class="form-control" id="pack_name" placeholder="ชื่อแพ็คเกจ" required="required">
     </div> 
</div>
	

  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">รายละเอียด </label>
      <div class="col-sm-10">
        <p>
          <input type="text"  name="pack_detail" class="form-control" id="pack_detail" placeholder="รายละเอียด" required="required">
        </p>
     </div> 
</div>

  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ระยะเวลาของแต่ละเเพ็คเกจ </label>
      <div class="col-sm-10">
       <input type="text"  name="pack_duration" class="form-control" id="pack_duration" placeholder="ระยะเวลาของแต่ละเเพ็คเกจ" required="required">
	   
     </div> 
</div>
  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ราคา Member</label>
      <div class="col-sm-10">
           <input type="text"  name="pack_member_price" class="form-control" id="pack_member_price" placeholder="ราคา Member" required="required">
	   
     </div> 
</div>




  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"> ราคา Normal</label>
      <div class="col-sm-10">
		    <input type="text"  name="pack_normal_price" class="form-control" id="pack_normal_price" placeholder="ราคา Normal" required="required">
     </div> 
</div>

<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">วันสิ้นสุดราคาเเพ็คเกจ</label>
      <div class="col-sm-10">
       <input type="date"  name="pack_end_date" class="form-control" id="pack_end_date" placeholder="วันสิ้นสุดราคาเเพ็คเกจ" required="required">
	   
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
