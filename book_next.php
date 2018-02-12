<?PHP include"header2.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>จัดการจองคิวล้างรถ</h4>
      <hr>
<form class="form-horizontal"  method="post" action="" enctype="multipart/form-data">

  
  <table width="100%" class="table table-striped">
    <thead>
      <tr>
        <th width="10%">วันที่</th>
        <th width="14%">เวลา</th>
        <th width="15%" >ทะเบียนรถ</th>
        <th width="16%">ชื่อแพ๊คเก๊ต</th>
        <th width="13%" >สถานะ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div align="center">10/11/2560</div></td>
        <td><div align="center">12.00 - 13.00 </div></td>
        <td><div align="center">กน 3565 สงขลา </div></td>
        <td><div align="center">ล้างสีดูดฝุ่น </div></td>
        <td class=><div align="center">รอล้าง</div></td>
      </tr>
    </tbody>
  </table>
  


  <hr>
  <p>&nbsp;</p>
        <p>เช็คอุปกรณ์ติดรถ</p>

      <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="13%">ลำดับที่ </th>
            <th width="43%"><div align="left">ชื่ออุปกรณ์</div></th>
            <th width="44%" ><div align="right">เลือก</div></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><div align="center">1</div></th>
            <td><div align="left">นวมหุ้มเบลท์</div></td>
            <td width="44%" ><div align="right">
              <label>
              <input type="checkbox" name="checkbox" value="checkbox" />
              เลือก</label>
            </div></td>
          </tr>
          <tr>
            <th scope="row"><div align="center">2</div></th>
            <td><div align="left">หมอนรองคอ</div></td>
            <td width="44%" ><div align="right">  <label>
              <input type="checkbox" name="checkbox" value="checkbox" />
              เลือก</label>  </div></td>
          </tr>
        </tbody>
      </table>
	  <hr>
  <p>&nbsp;</p>
        <p>พนักงานล้าง</p>
		
		
 <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="10%">ลำดับที่  </th>
            <th width="42%">ชื่อ - สกุล </th>
            <th width="18%" class="hidden-xs"><div align="right">จัดการ</div></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row"><div align="center">1</div></th>
            <td>คุณจรัญญา บุญญา </td>
            <td width="18%" ><div align="right"><label>
              <input type="checkbox" name="checkbox" value="checkbox" />
              เลือก</label></div></td>
          </tr>
		  
		  
		  <tr>
            <th scope="row"><div align="center">2</div></th>
            <td>คุณธิดา ลาวรรณ </td>
            <td width="18%" ><div align="right"><label>
              <input type="checkbox" name="checkbox" value="checkbox" />
              เลือก</label> </div></td>
          </tr>
        </tbody>
      </table>
	  
	    <hr>
<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">ปรับสถานะ</label>
    <div class="col-sm-10">
    
         <label>
         <select name="select"class="form-control">
           <option value="รอล้าง">รอล้าง</option>
           <option value="กำลังล้าง">กำลังล้าง</option>
           <option value="ล้างเสร็จ">ล้างเสร็จ</option>
         </select>
         </label>
     </div> 
</div>


      <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
	
	   
       
      </div> 
</div>
	  
	  
	     <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> บันทึกข้อมูล </button> 
		 
		 
		 
	     <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-print" aria-hidden="true"></span> พิมพ์ใบเสร็จชำระเงิน</button> 
		 
</form> 

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
