<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมูล   


 $sql = "INSERT INTO  tbl_booking  ( book_id ,  car_id ,  pack_id ,  book_date ,  book_time ,  book_channel ) VALUES ('$_POST[book_id]', '$_POST[car_id]', '$_POST[pack_id]', '$_POST[book_date]', '$_POST[book_time]', '$_POST[book_channel]')";
  $conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=index2.php>";  
?> 