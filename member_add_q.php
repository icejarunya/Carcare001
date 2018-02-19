<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล  


 $sql = "INSERT INTO tbl_staff ( staff_id, staff_name, staff_tel, staff_address, staff_email, staff_idcard, staff_level, staff_username, staff_password) VALUES ('$_POST[staff_id]', '$_POST[staff_name]', '$_POST[staff_tel]', '$_POST[staff_address]', '$_POST[staff_email]', '$_POST[staff_idcard]', '$_POST[staff_level]', '$_POST[staff_username]', '$_POST[staff_password]')";
  $conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=index2.php>";  
?> 
 
 
