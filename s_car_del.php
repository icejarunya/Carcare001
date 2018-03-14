<?PHP 

include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล

$sql = "DELETE FROM  tbl_car  WHERE  tbl_car.car_id  = $_GET[car_id];"; 
$conn->query($sql); 

echo "<META http-equiv=refresh content=0;url=s_car_list.php>"; 
?> 
 
 