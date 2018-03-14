<?PHP
include"config.inc.php";//ไฟล์ติดต่อฐานข้อมูล


 $sql="INSERT INTO  tbl_type (type_id ,  type_name ) VALUES ( '',  '$_POST[type_name]')";
$conn->query($sql);




echo "<META http-equiv=refresh content=0;url=type_list.php>";  
?>
 
</html>
