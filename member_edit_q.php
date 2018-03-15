<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล  


 $sql = "UPDATE tbl_staff SET staff_name = '$_POST[staff_name]', staff_tel = '$_POST[staff_tel]', staff_address = '$_POST[staff_address]', staff_email = '$_POST[staff_email]', staff_idcard = '$_POST[staff_idcard]', staff_level = '$_POST[staff_level]', staff_username = '$_POST[staff_username]', staff_password = '$_POST[staff_password]' WHERE tbl_staff.staff_id = $_POST[staff_id]";
  $conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=member_list.php>";  
?> 
 
 
