<?PHP include"header1.php";?>




   
      <h4>รายการจองคิวล้างรถ</h4>
      <hr>
      <h2><span class="glyphicon glyphicon-time"></span> ประวัติการล้าง </h2>
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
            <th width="9%"><div align="center">ลำดับ  </div></th>
            <th width="17%"><div align="center">วันที่</div></th>
            <th width="10%"><div align="center">เวลา</div></th>
            <th width="10%" ><div align="center">ทะเบียนรถ</div></th>
			<th width="25%" ><div align="center">ชื่อแพ๊คเก๊ต</div></th>
			<th width="8%" ><div align="center">สถานะ</div></th>
          </tr>
        </thead>
		
		
				<?PHP 
				$cus_id1=$_SESSION['cus_id'];
include "config.inc.php"; 
$sql="SELECT * FROM tbl_booking , tbl_car , tbl_package where tbl_booking.car_id=tbl_car.car_id and tbl_booking.pack_id=tbl_package.pack_id and tbl_car.cus_id=$cus_id1"; 
$query = $conn->query($sql); 
$i=0;
while($result = $query->fetch_assoc()) 
{ 
$i++;
?>
        <tbody>

          <tr>
            <th scope="row"><div align="center">
              <?=$i;?>
            </div></th>
            <td><div align="center">
              <?=$result['book_date'];?>
            </div></td>
            <td><div align="center">
              <?=$result['book_time'];?> 
            </div></td>
			<td> <div align="center">
			  <?=$result['car_liceplat'];?> 
		    </div></td>
			<td> <div align="center">
			  <?=$result['pack_name'];?> 
		    </div></td>
			
			
            <td >
			
			  <div align="center">
			    <?PHP if($result['book_status']==0){?>
			    รอล้าง
			    <?PHP }?>
			    <?PHP if($result['book_status']==1){?>
			    กำลังล้าง
			    <?PHP }?>
			    <?PHP if($result['book_status']==2){?>
			    ล้างเสร็จ 
			    <?PHP }?>
			  </div></td>
          </tr>
        </tbody>
		
<?PHP }?>		
      </table>
    
      <hr>
</div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
