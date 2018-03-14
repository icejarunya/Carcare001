<?PHP 

include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล

$sql = "DELETE FROM  tbl_accessories  WHERE  tbl_accessories.acc_id  = $_GET[acc_id];"; 
$conn->query($sql); 

echo "<META http-equiv=refresh content=0;url=acc_list.php>"; 
?> 
 
 