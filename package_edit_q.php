<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล
 

 $sql = "UPDATE tbl_package SET type_id = '$_POST[type_id]', pack_name = '$_POST[pack_name]', pack_detail = '$_POST[pack_detail]', pack_duration = '$_POST[pack_duration]', pack_normal_price = '$_POST[pack_normal_price]', pack_member_price = '$_POST[pack_member_price]', pack_end_date = '$_POST[pack_end_date]' WHERE tbl_package.pack_id = $_POST[pack_id]"; 
$conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=package_list.php>";  
?> 
 
 