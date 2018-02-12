<?PHP include"header2.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>ข้อมูลรถ</h4>
      <hr>
	     <h2><span class="glyphicon glyphicon-th-list"></span> ข้อมูลรถ</h2>
      <p>&nbsp; </p>
<table width="100%" class="table table-striped">
  <thead>
    <tr>
      <th width="10%"><div align="center">ลำดับที่ </div></th>
	  <th width="15%"><div align="center">ประเภทรถ</div></th>
      <th width="9%"class="hidden-xs"><div align="center">รุ่น</div></th>
      <th width="11%"><div align="center">ยี่ห้อ</div></th>
      <th width="15%" ><div align="center">ทะเบียน</div></th>
      <th width="14%" ><div align="center">สถานะ</div></th>
      <th width="26%"><div align="right">จัดการ</div></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><div align="center">1</div></th>
	  <td><div align="center">Sedan</div></td>
      <td class="hidden-xs"><div align="center">vios</div></td>
      <td><div align="center">Toyota</div></td>
      <td><div align="center">งล 5698 สงลา </div></td>
      <td><div align="center">Member</div></td>
      <td width="26%"><div align="right"><a href="#" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> <a href="s_car_list_edit.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a> </div></td>
    </tr>
    <tr>
      <th scope="row"><div align="center">2</div></th>
	  <td><div align="center">Sedan</div></td>
      <td class="hidden-xs"><div align="center">vigo</div></td>
      <td><div align="center">Toyota</div></td>
      <td><div align="center">กล 885 สงลา </div></td>
      <td><div align="center">Normal</div></td>
      <td width="26%"><div align="right"><a href="#" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> <a href="s_car_list_edit.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a> </div></td>
    </tr>
    <tr>
      <th scope="row"><div align="center">3</div></th>
	  <td><div align="center">Suv</div></td>
      <td class="hidden-xs"><div align="center">swift</div></td>
      <td><div align="center">Isusu</div></td>
      <td><div align="center">หด 1111 สงลา </div></td>
      <td><div align="center">Normal</div></td>
      <td width="26%" ><div align="right"><a href="#" class="btn btn-danger btn-sm" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')"> <span class="glyphicon glyphicon-trash"></span> ลบ </a> <a href="s_car_list_edit.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> แก้ไข </a> </div></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>

</body>
</html>
