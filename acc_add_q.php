<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล
 

 $sql = "INSERT INTO  tbl_accessories  ( acc_id ,  acc_name ) VALUES ('$_POST[acc_id]', '$_POST[acc_name]')"; 
$conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=index2.php>";  
?> 