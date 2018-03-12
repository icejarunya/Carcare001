<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล
 

$sql = "DELETE FROM tbl_customer WHERE tbl_customer.cus_id = $_GET[cus_id]"; 
$conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=custumer_list.php>";  
?> 
 
 