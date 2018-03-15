<?PHP include"header1.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>แก้ไขข้อมูลรถที่ใช้บริการ </h4>
      <hr>
<form class="form-horizontal"  method="post" action="s_car_edit_q.php" enctype="multipart/form-data">

<?PHP 
include "config.inc.php"; 
$sql="SELECT * FROM tbl_car , tbl_type  where  tbl_car.type_id=tbl_type.type_id
and tbl_car.car_id=$_GET[car_id]"; 
$query = $conn->query($sql); 
$result = $query->fetch_assoc();

?>


 

<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"> ชื่อ - สกุล </label>
      <div class="col-sm-10">
         คุณ ปนัดดา จินเดหวา
         <input type="hidden" name="cus_id" value="<?=$result['cus_id'];?>" />
    </div> 
</div>
	

  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">รุ่นรถ</label>
      <div class="col-sm-10">
       <input  name="car_gen" type="text" class="form-control" id="car_gen" value="<?=$result['car_gen'];?>" placeholder="รุ่นรถ" required="required">
	   
     </div> 
</div>

  
  
  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ยี่ห้อรถ</label>
      <div class="col-sm-10">
           <input  name="car_brand" type="text" class="form-control" id="car_brand" value="<?=$result['car_brand'];?>" placeholder="ยี่ห้อรถ" required="required">
	   
     </div> 
</div>




  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ทะเบียนรถ</label>
      <div class="col-sm-10">
		    <input  name="car_liceplat" type="text" class="form-control" id="car_liceplat" value="<?=$result['car_liceplat'];?>" placeholder="ทะเบียนรถ" required="required">
     </div> 
</div>



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
      <label for="inputEmail3" class="col-sm-2 col-form-label">สถานะรถ</label>
    <div class="col-sm-10">
           
	   
           <label>
           <select name="car_status" class="form-control" >
             <option value="1">Normal</option>
             <option value="2">Member</option>
           </select>
           </label>
    </div> 
</div>



  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">วันที่สิ้นสุด</label>
      <div class="col-sm-5">
		    <input  name="car_dateend_mem" type="date" class="form-control" id="car_dateend_mem" value="<?=$result['lateend_mem'];?>" placeholder="ทะเบียนรถ" >
     </div> 
</div>






  
  
  



  
  
  


  
      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
	   <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่มข้อมูลรถ </button> 
	   
     </div> 
</div>
 

</form> 

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

