<?PHP

include"config.inc.php";//ไฟล์ติดต่อฐานข้อมูล


 $sql="UPDATE tbl_car  SET  type_id = '$_POST[type_id]', car_liceplat = '$_POST[car_liceplat]', car_gen = '$_POST[car_gen]', car_brand = '$_POST[car_brand]', car_status = '$_POST[car_status]', car_dateend_mem = '$_POST[car_dateend_mem]' WHERE tbl_car.car_id = $_POST[car_id]";

$conn->query($sql);



echo "<META http-equiv=refresh content=0;url=s_car_list.php>";  


?>
 
</html>