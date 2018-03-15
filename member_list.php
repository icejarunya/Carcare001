<?PHP include"header1.php";?>




   
      <h4>รายการข้อมูลผู้ใช้ระบบ</h4>
      <hr>
      <h2><span class="glyphicon glyphicon-user"></span> รายการข้อมูลดูแลระบบ</h2>
      <p> <a href="member_add.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> เพิ่มผู้ดูแลระบบ </a> &nbsp;</p>
      <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="10%"><div align="center">ลำดับที่  </div></th>
            <th width="42%"><div align="center">ชื่อ - สกุล </div></th>
            <th width="11%"><div align="center">ชื่อผู้ใช้</div></th>
            <th width="19%" class="hidden-xs"><div align="center">เบอร์โทร</div></th>
			<th width="18%" class="hidden-xs"><div align="center">จัดการ</div></th>
          </tr>
        </thead>
        <tbody>
		
		
<?PHP 
include "config.inc.php"; 
$sql="SELECT * FROM tbl_staff"; 
$query = $conn->query($sql); 
$i=0;
while($result = $query->fetch_assoc()) 
{ 
$i++;
?>

  <tr>
            <th scope="row"><div align="center"><?=$i;?></div></th>
			
            <td><div align="left"><?=$result['staff_name'];?></div></td>
			
			
			
            <td><div align="center"> <?=$result['staff_username'];?></div></td>
			
			<td class="hidden-xs"> <div align="center"><?=$result['staff_tel'];?></div></td>
			
			<td width="27%"><div align="center">
			
				<a href="member_del.php?staff_id=<?=$result['staff_id'];?>" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> 
			
			
			
			<a href="member_list_edit.php?staff_id=<?=$result['staff_id'];?>" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a>
			
			
			

			  
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
