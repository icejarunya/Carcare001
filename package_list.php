<?PHP include"header1.php";?>




   
      <h4>แพ็คเกจล้างรถ</h4>
      <hr>
      <h2><span class="glyphicon glyphicon-flash"></span> รายการแพ็คเกจล้างรถ</h2>
    <a href="package_add.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> เพิ่มแพ็คเกจล้างรถ </a> 
      <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="7%">ลำดับที่  </th>
            <th width="10%">แพ็คเกจ</th>
            <th width="14%" class="hidden-xs">รายละเอียด</th>
            <th width="15%" >ราคา Member </th>
			<th width="16%">ราคา Normal </th>
			<th width="25%" ><div align="center">จัดการ</div></th>
          </tr>
        </thead>
        <tbody>
		
		<?PHP 
include "config.inc.php"; 
$sql="SELECT * FROM tbl_package"; 
$query = $conn->query($sql); 
$i=0;
while($result = $query->fetch_assoc()) 
{ 
$i++;
?>
<tr>
            <th scope="row"><div align="center"><?=$i;?></div></th>
			
            <td><div align="left"><?=$result['pack_name'];?></div></td>
			
			
			
            <td><div align="center"> <?=$result['pack_detail'];?></div></td>
			
			<td class="hidden-xs"> <div align="center"><?=$result['pack_member_price'];?></div></td>
			<td class="hidden-xs"> <div align="center"><?=$result['pack_normal_price'];?></div></td>
			<td width="27%"><div align="center">
			
				<a href="package_del.php?pack_id=<?=$result['pack_id'];?>" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> 
			
			
			
			<a href="member_list_edit.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a>
			
			
			

			  
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
<p>&nbsp;</p>
