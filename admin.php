<?PHP include"header.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: large}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<br />
<br />

<div class="container">
					
<div class="panel panel-default">
  <div class="panel-body">
    <div align="center" class="style1">เข้าสู่ระบบ <span class="style2">สำหรับเจ้าหน้าที่ </span></div>
    <form id="form1" name="form1" method="post" action="chk_login_admin.php">

    <p>&nbsp;    </p>
	
	
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label"></label>
      <div class="col-sm-5">USERNAME
         <input type="text"  name="staff_username" class="form-control" id="staff_username" placeholder="USERNAME" required="required">
     </div> 
</div>



<div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label"></label>
      <div class="col-sm-5">PASSWORD
         <input type="password"  name="staff_password" class="form-control" id="staff_password" placeholder="PASSWORD" required="required">
	</div> 
</div>



   <div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label"></label>
      <div class="col-sm-5">
	  
	   
          <label>
          <input type="submit" name="Submit" class="btn btn-default" value="LOGIN" />
          </label>
      </div> 
</div> 

   </form>
  </div>
  </div>
  </div>
</body>
</html>

<?PHP include"footer.php";?>