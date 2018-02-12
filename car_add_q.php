<?PHP

include"config.inc.php";//ไฟล์ติดต่อฐานข้อมูล


$sql="INSERTINTOtbl_car(car_id, cus_id, car_liceplat, car_gen, car_brand, car_status, car_dateend_mem)VALUES(NULL , '$_POST[car_liceplat]', '$_POST[car_gen]', '$_POST[car_brand]', '$_POST[car_status]', '$_POST[car_dateend_mem]')";

$conn->query($sql);



echo"<METAhttp-equiv=refreshcontent=0;url=index1.php>";
?>
 
</html>
