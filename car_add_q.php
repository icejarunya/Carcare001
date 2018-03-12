<?PHP

include"config.inc.php";//ไฟล์ติดต่อฐานข้อมูล


$sql="INSERT INTO tbl_car (car_id, cus_id, type_id, car_liceplat, car_gen, car_brand, car_status, car_dateend_mem) VALUES (NULL, '$_POST[cus_id]', '$_POST[type_id]', '$_POST[car_liceplat]', '$_POST[car_gen]', '$_POST[car_brand]', '$_POST[car_status]', '$_POST[car_dateend_mem]')";

$conn->query($sql);



echo "<META http-equiv=refresh content=0;url=custumer_list.php>";  


?>
 
</html>
