 <?PHP include"header1.php";?>




   
      <h4>แพ็คเกจล้างรถ</h4>
      <hr>
      <h2><span class="glyphicon glyphicon-time"></span> เลือก แพ็คเกจล้างรถ ล้างสีดูดฝุ่น </h2>
      <p>
	  
	  
	  <form method="get" name="dateForm" id="dateForm">
 
 &nbsp;&nbsp;
 <div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">เลือกวันที่ใช้บริการ</label>
  <div class="col-xs-3">
<input name="date_time" type="date" class="form-control" id="example-text-input"  />
  
  </div>

  <a href="package_time_search.php" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span> ค้นหา</a> 
 
</form>
  <p>&nbsp;      </p>
	  
	  
      <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="7%"><div align="center">ลำดับที่  </div></th>
            <th width="10%"><div align="center">เวลา</div></th>
            <th width="14%"><div align="center">สถานะ</div></th>
            <th width="15%" ><div align="center">ช่องบริการ</div></th>
			<th width="25%" ><div align="right">เลือก</div></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row"><div align="center">1</div></th>
            <td><div align="center">08.00 - 09.00 </div></td>
            <td><div align="center">ว่าง</div></td>
			<td> <div align="center">1</div></td>
			<td width="25%" ><div align="right">
			
			
			
			
			 <a href="package_car.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-time"></span> เลือก </a> </div></td>
          </tr>
		  
		  
		  <tr>
            <th scope="row"><div align="center">2</div></th>
            <td><div align="center">08.00 - 09.00 </div></td>
            <td><div align="center">ว่าง</div></td>
			<td> <div align="center">2</div></td>
			<td width="25%"><div align="right"> <a href="package_car.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-time"></span> เลือก </a> </div></td>
          </tr>
		  
		  <tr>
            <th scope="row"><div align="center">3</div></th>
            <td><div align="center">09.00 -10.00 </div></td>
            <td><div align="center">ว่าง</div></td>
			<td> <div align="center">1</div></td>
			<td width="25%"><div align="right"> <a href="package_car.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-time"></span> เลือก </a> </div></td>
          </tr>
		  
		  <tr>
            <th scope="row"><div align="center">4</div></th>
            <td><div align="center">09.00 - 10.00 </div></td>
            <td><div align="center">ไม่ว่าง</div></td>
			<td> <div align="center">2</div></td>
			<td width="25%"><div align="right">  <a href="#" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-time"></span> ไม่ว่าง </a> </div></td>
          </tr>
		  
		  <tr>
            <th scope="row"><div align="center">5</div></th>
            <td><div align="center">10.00 - 11.00 </div></td>
            <td><div align="center">ว่าง</div></td>
			<td> <div align="center">1</div></td>
			<td width="25%"><div align="right"> <a href="package_car.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-time"></span> เลือก </a> </div></td>
          </tr>
		  
		  
		  
		  
        </tbody>
      </table>
	  
	  
    
      <hr>
