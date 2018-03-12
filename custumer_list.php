<?PHP include"header2.php";?>




   
      <h4>รายการข้อมูลลูกค้า</h4>
      <hr>
      <h2><span class="glyphicon glyphicon-user"></span> รายการข้อมูลลูกค้า</h2>
      <p> <a href="custumer_add.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> เพิ่มลูกค้า </a> &nbsp;</p>
     
	 
	  <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="10%"><div align="center">ลำดับที่  </div></th>
            <th width="30%"><div align="center">ชื่อ - สกุล </div></th>
            <th width="15%"><div align="center">ชื่อผู้ใช้</div></th>
            <th width="18%" class="hidden-xs"><div align="center">เบอร์โทร</div></th>
			<th width="27%" ><div align="center">จัดการ</div></th>
          </tr>
        </thead>
        <tbody>




<?PHP 
include "config.inc.php"; 
$sql="SELECT * FROM tbl_customer ORDER BY tbl_customer.cus_id DESC"; 
$query = $conn->query($sql); 
$i=0;
while($result = $query->fetch_assoc()) 
{ 
$i++;
?>


          <tr>
            <th scope="row"><div align="center"><?=$i;?></div></th>
			
            <td><div align="left"><?=$result['cus_name'];?></div></td>
			
			
			
            <td><div align="center"> <?=$result['cus_username'];?></div></td>
			
			<td class="hidden-xs"> <div align="center"><?=$result['cus_tel'];?></div></td>
			
			<td width="27%"><div align="center">
			
			
			<a href="custumer_del.php?cus_id=<?=$result['cus_id'];?>" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> 
			
			
			
			<a href="custumer_edit.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a>
			
			
			
			<a href="car_add.php?cus_id=<?=$result['cus_id'];?>" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> เพิ่มรถ </a> 
			  
			  </div></td>
          </tr>
		  <?PHP } ?>
		  
		  
		  
		  
        </tbody>
      </table>
    
      <hr>
</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
