<?PHP include"header1.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <h4>ข้อมูลรถ</h4>
      <hr>
      <p> <a href="s_car_add.php" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-edit"></span> เพิ่มรถ </a> &nbsp;</p>
<table width="100%" class="table table-striped">
  <thead>
    <tr>
      <th width="8%"><div align="center">ลำดับที่ </div></th>
      <th width="19%"><div align="center">รุ่น</div></th>
      <th width="23%"><div align="center">ยี่ห้อ</div></th>
      <th width="25%" ><div align="center">ทะเบียน</div></th>
      <th width="25%" ><div align="center">สถานะ</div></th>
    </tr>
  </thead>
  <tbody>
   
    	<?PHP 
include "config.inc.php"; 
$sql="SELECT * FROM tbl_car"; 
$query = $conn->query($sql); 
$i=0;
while($result = $query->fetch_assoc()) 
{ 
$i++;
?>


          <tr>
            <th scope="row"><div align="center"><?=$i;?></div></th>
			
            <td><div align="center"><?=$result['car_gen'];?></div></td>
			  <td><div align="center"><?=$result['car_brand'];?></div></td>
			    <td><div align="center"><?=$result['car_liceplat'];?></div></td>  
				<td><div align="center"><?=$result['car_status'];?></div></td>
				
			<td width="27%"><div align="center">
			
			  
			  </div></td>
          </tr>
		  <?PHP } ?>
  </tbody>
</table>
<p align="center">&nbsp;</p>
</body>
</html>
