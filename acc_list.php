<?PHP include"header1.php";?>




   
      <h4>ข้อมูลอุปกรณ์ติดมากับรถรถ</h4>
      <hr>
      <h2><span class="glyphicon glyphicon-flash"></span> ข้อมูลอุปกรณ์ติดมากับรถ</h2>
    <a href="acc_add.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> เพิ่มอุปกรณ์ติดมากับรถ </a> 
      <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="7%">ลำดับที่  </th>
            <th width="10%"><div align="left">ชื่ออุปกรณ์</div></th>
			<th width="25%"><div align="center">จัดการ</div></th>
          </tr>
        </thead>
        <tbody>
		
		<?PHP 
include "config.inc.php"; 
$sql="SELECT * FROM tbl_accessories"; 
$query = $conn->query($sql); 
$i=0;
while($result = $query->fetch_assoc()) 
{ 
$i++;
?>


          <tr>
            <th scope="row"><div align="center"><?=$i;?></div></th>
			
            <td><div align="left"><?=$result['acc_name'];?></div></td>
				
			<td width="27%"><div align="center">
			
			
			<a href="acc_del.php?acc_id=<?=$result['acc_id'];?>" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> 
			
			
			
			<a href="acc_edit.php?acc_id=<?=$result['acc_id'];?>" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a>
			
			
			
			<a href="car_add.php?cus_id=<?=$result['acc_id'];?>" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> เพิ่มรถ </a> 
			  
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
