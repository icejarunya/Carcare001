<?PHP 

include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล

$sql = "DELETE FROM  tbl_staff  WHERE  tbl_staff.staff_id   = $_GET[staff_id];"; 
$conn->query($sql); 

echo "<META http-equiv=refresh content=0;url=member_list.php>"; 
?> 
 