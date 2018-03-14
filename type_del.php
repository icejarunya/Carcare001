<?PHP 

include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล

$sql = "DELETE FROM  tbl_type  WHERE  tbl_type.type_id  = $_GET[type_id];"; 
$conn->query($sql); 

echo "<META http-equiv=refresh content=0;url=type_list.php>"; 
?> 
 
 
