<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล   


 $sql = "UPDATE tbl_customer SET cus_name = '$_POST[cus_name]', cus_tel = '$_POST[cus_tel]', cus_address = '$_POST[cus_address]', cus_email = '$_POST[cus_email]', cus_idcard = '$_POST[cus_idcard]', cus_username = '$_POST[cus_username]', cus_password = '$_POST[cus_password]' WHERE tbl_customer.cus_id =$_POST[cus_id]"; 
$conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=custumer_list.php>";  
?> 
 