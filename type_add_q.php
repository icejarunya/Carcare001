<?PHP

include"config.inc.php";//ไฟล์ติดต่อฐานข้อมูล


$sql="INSERT INTO  tbl_type  (type_id ,  type_name ) VALUES ( '$_POST[type_id]',  '$_POST[type_name]')";
$conn->query($sql);



echo"<METAhttp-equiv=refreshcontent=0;url=index2.php>";
?>
 
</html>
