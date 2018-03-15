<?PHP
include"config.inc.php";//ไฟล์ติดต่อฐานข้อมูล


 $sql="UPDATE tbl_type SET type_name = '$_POST[type_name]' WHERE tbl_type.type_id = $_POST[type_id];";
$conn->query($sql);




echo "<META http-equiv=refresh content=0;url=type_list.php>";  
?>
 
</html>
