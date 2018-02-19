<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล
 

 $sql = "INSERT INTO tbl_package (pack_id, type_id, pack_name, pack_detail, pack_duration, pack_normal_price, pack_member_price, pack_end_date) VALUES ('$_POST[pack_id]', '$_POST[type_id]', '$_POST[pack_name]', '$_POST[pack_detail]', '$_POST[pack_duration] ', '$_POST[pack_normal_price]', '$_POST[pack_member_price]', '$_POST[pack_end_date]')"; 
$conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=index2.php>";  
?> 
 
 