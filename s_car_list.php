<?PHP include"header1.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>ข้อมูลรถ</h4>
      <hr>
	     <h2><span class="glyphicon glyphicon-th-list"></span> ข้อมูลรถ</h2>
      <p>&nbsp; </p>
<table width="100%" class="table table-striped">
  <thead>
    <tr>
      <th width="10%"><div align="center">ลำดับที่ </div></th>
	  <th width="15%"><div align="center">ประเภทรถ</div></th>
      <th width="9%"class="hidden-xs"><div align="center">รุ่น</div></th>
      <th width="11%"><div align="center">ยี่ห้อ</div></th>
      <th width="15%" ><div align="center">ทะเบียน</div></th>
      <th width="14%" ><div align="center">สถานะ</div></th>
      <th width="26%"><div align="center">จัดการ</div></th>
    </tr>
  </thead>
  <tbody>
  
<?PHP 
include "config.inc.php"; 
$sql="SELECT * FROM tbl_car , tbl_type  where  tbl_car.type_id=tbl_type.type_id "; 
$query = $conn->query($sql); 
$i=0;
while($result = $query->fetch_assoc()) 
{ 
$i++;
?>
 <tr>
            <th scope="row"><div align="center"><?=$i;?></div></th>
			
            <td><div align="left"><?=$result['type_name'];?></div></td>
			
			
            <td><div align="center"> <?=$result['car_gen'];?></div></td>
			
			<td class="hidden-xs"> <div align="center"><?=$result['car_brand'];?></div></td>
			
			<td class="hidden-xs"> <div align="center"><?=$result['car_liceplat'];?></div></td>
			
			<td class="hidden-xs"> <div align="center">
			
			
			
			<?PHP if($result['car_status']==1){?>   Normal   <?PHP }?>
			<?PHP if($result['car_status']==2){?>   Member   <?PHP }?>
			
			
			
			</div></td>
			
			<td width="27%"><div align="center">
			
				<a href="s_car_del.php?car_id=<?=$result['car_id'];?>" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> 
			
			
			
			<a href="s_car_list_edit.php?car_id=<?=$result['car_id'];?>" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a>
			
			
			

			  
			  </div></td>
          </tr>
		  <?PHP } ?>
  </tbody>
</table>
<p>&nbsp;</p>

</body>
</html>
