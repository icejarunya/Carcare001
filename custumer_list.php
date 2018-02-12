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

          <tr>
            <th scope="row"><div align="center">1</div></th>
            <td><div align="left">คุณจรัญญา บุญญา</div></td>
            <td><div align="center">aum122 </div></td>
			<td class="hidden-xs"> <div align="center">089-9887877</div></td>
			<td width="27%"><div align="center"><a href="#" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> <a href="custumer_list_edit.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a><a href="car_add.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> เพิ่มรถ </a> 
			  
			  </div></td>
          </tr>
		  
		  
		  <tr>
            <th scope="row"><div align="center">2</div></th>
            <td><div align="left">คุณธิดา ลาวรรณ </div></td>
            <td><div align="center">tida89</div></td>
			<td class="hidden-xs"> <div align="center">029-9877411</div></td>
			<td width="27%" ><div align="center"><a href="student_del.php?id_student=" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> <a class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a><a href="custumer_list_edit.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> เพิ่มรถ </a> </div></td>
          </tr>
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
