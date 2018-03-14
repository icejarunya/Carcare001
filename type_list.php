<?PHP include"header1.php";?>




   
      <h4>ข้อมูลประเภทรถ</h4>
      <hr>
      <h2><span class="glyphicon glyphicon-flash"></span> รายการข้อมูลประเภทรถ</h2>
    <a href="type_add.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> เพิ่มข้อมูลประเภทรถ </a> 
      <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="7%">ลำดับที่  </th>
            <th width="10%"><div align="left">ประเภทรถ</div></th>
            <th width="25%" ><div align="center">จัดการ</div></th>
          </tr>
        </thead>
        <tbody>
		
		<?PHP 
include "config.inc.php";
$sql="SELECT * FROM tbl_type ORDER BY type_name DESC"; 
$query = $conn->query($sql); 
$i=0;
while($result = $query->fetch_assoc()) 
{ 
$i++;
?>

 <tr>
            <th scope="row"><div align="center"><?=$i;?></div></th>
			
            <td><div align="left"><?=$result['type_name'];?></div></td>
			
			<td width="27%"><div align="center">
			
			
			<a href="type_del.php?type_id=<?=$result['type_id'];?>" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> 
			
			
			
			<a href="custumer_edit.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a>
			
			

			  
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
