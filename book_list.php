<?PHP include"header2.php";?>




   
      <h4>รายการจองคิวล้างรถ</h4>
      <hr>
      <h2><span class="glyphicon glyphicon-time"></span> รายการจองคิวล้างรถ</h2>
	  <form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="get" name="dateForm" id="dateForm">
 
 &nbsp;&nbsp;
 <div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">เลือกวันที่ใช้บริการ</label>
  <div class="col-xs-3">
<input name="date_time" type="date" class="form-control" id="example-text-input" value="<?=$_GET['date_time'];?>" />
  
  </div>

  <button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span> ค้นหา</button>

</form>
    
      <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="7%">ลำดับ  </th>
            <th width="10%">วันที่</th>
            <th width="14%">เวลา</th>
            <th width="15%" >ทะเบียนรถ</th>
			<th width="16%" >ชื่อแพ๊คเก๊ต</th>
			<th width="13%" >สถานะ</th>
            <th width="25%" ><div align="right">จัดการ</div></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row"><div align="center">1</div></th>
            <td><div align="center">10/11/2560</div></td>
            <td><div align="center">12.00 - 13.00 </div></td>
			<td> <div align="center">กน 3565 สงขลา </div></td>
			<td> <div align="center">ล้างสีดูดฝุ่น </div></td>
			
			
            <td ><div align="center">รอล้าง</div></td>
            <td width="25%"><div align="right"><a href="#" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ยกเลิก </a> <a href="book_next.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> ทำรายการต่อ </a> </div></td>
          </tr>
		  
		  
		  <tr>
            <th scope="row"><div align="center">2</div></th>
            <td><div align="center">10/11/2560</div></td>
            <td><div align="center">13.00 - 14.00 </div></td>
			<td> <div align="center">ยน 1118 สงขลา </div></td>
			<td> <div align="center">ล้างสีดูดฝุ่น </div></td>
			
			
            <td><div align="center">รอล้าง</div></td>
            <td width="25%" ><div align="right"><a href="#" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ยกเลิก </a> <a href="book_next.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> ทำรายการต่อ </a> </div></td>
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
