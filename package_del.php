<?PHP 

include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล

$sql = "DELETE FROM tbl_package WHERE tbl_package.pack_id  = $_GET[pack_id];"; 
$conn->query($sql); 

echo "<META http-equiv=refresh content=0;url=package_list.php>"; 
?> 
 
 