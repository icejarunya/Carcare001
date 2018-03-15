<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล
 

 $sql = "UPDATE tbl_accessories SET acc_name = '$_POST[acc_name]' WHERE tbl_accessories.acc_id = $_POST[acc_id];"; 
 

$conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=acc_list.php>";  
?> 