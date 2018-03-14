<?PHP 
	session_start();

	include "config.inc.php";
?>

<?PHP


 $sql = "select * from tbl_staff where  staff_username='$_POST[staff_username]' and staff_password='$_POST[staff_password]'"; 
$query = $conn->query($sql);
$objResult = $query->fetch_assoc();

	if(!$objResult)
	{
	?>
	<script language="javascript">
alert("NO PASSWORD");
</script>
<meta http-equiv='refresh'content='0;url=index.php'>
<?PHP

	}
	else
	{
	
	    $_SESSION["staff_id"] = $objResult["staff_id"];
		$_SESSION["staff_name"] = $objResult["staff_name"];
		$_SESSION["staff_username"] = $objResult["staff_username"];
	
	
	
	    $_SESSION["txtuser"]=true;
			
			session_write_close();
			
			
		
?>
<meta http-equiv='refresh'content='0;url=book_list.php'>
<?PHP }?>
