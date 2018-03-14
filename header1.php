<?PHP 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IB CARCARE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	 <link href="css/the-big-picture.css" rel="stylesheet">
	<html class="full" lang="en">
	
	 </html>
	<style type="text/css">
body {
	margin-top: 0px;
	margin-bottom: 0px;
	background: none;
}

.full {
  background: url(images/1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
-->
</style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<a class="navbar-brand" href="index.php">

<img src="images/222.png" height="30" width="120">



</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

				
 <li>
     <a href="contact1.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> ติดต่อเรา</a>
 </li>	

  



		


		
		 
		 

		

		
		</ul>
		
		
		
		
		
		<ul class="nav navbar-nav navbar-right">
		
					

<?PHP if(isset($_SESSION["cus_id"])){?>

<li><a href="history.php"><i class='glyphicon glyphicon-user'></i> ยินดีต้อนรับ : คุณ <?=$_SESSION["cus_name"];?></a></li>

<?PHP }?>

<?PHP if(isset($_SESSION["staff_id"])){?>

<li><a href="book_list.php"><i class='glyphicon glyphicon-user'></i> เจ้าหน้าที่ <?=$_SESSION["staff_name"];?></a></li>

<?PHP }?>

<li><a href="logout.php"><i class='glyphicon glyphicon-off'></i> ออกจากระบบ</a></li>
				
					
      
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br>
<div class="container">
					
<div class="panel panel-default">
  <div class="panel-body">
  <div class="row content">
    <div class="col-sm-3 sidenav">
	<?PHP if(isset($_SESSION["cus_id"])){?>
      <h4>ยินดีต้อนรับ ลูกค้า</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index_part1.php">เมนู</a></li>
        <li><a href="custumer_edit.php">แก้ไขข้อมูลส่วนตัว</a></li>
		<li><a href="car_customer.php">ข้อมูลรถ</a></li>
		 <li><a href="book_car.php">จองคิวล้างรถ</a></li>
        <li><a href="history.php">ประวัติการจองคิว</a></li>
       
      </ul>
	  <?PHP }?>
	  
	  
	  <?PHP if(isset($_SESSION["staff_id"])){?>
	  
      <h4>ยินดีต้อนรับ ผู้ดูแลระบบ</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index2.php">เมนู</a></li>
        <li><a href="custumer_list.php">ข้อมูลลูกค้า</a></li>
		<li><a href="member_list.php">ข้อมูลผู้ใช้ระบบ</a></li>
        <li><a href="s_car_list.php">ข้อมูลรถ</a></li>
        <li><a href="package_list.php">ข้อมูลแพ็คเกจ</a></li>
		 <li><a href="type_list.php">ข้อมูลประเภทรถ</a></li>
		
		   <li><a href="acc_list.php">ข้อมูลอุปกรณ์ติดรถ</a></li>
		    <li><a href="book_list.php">รายการจองคิวล้างรถ</a></li>
<li><a href="report.php">รายงานสรุปผลรายได้</a></li>
<li><a href="report1.php">รายงานสรุปผลการจองคิวล้างรถ</a></li>
<li><a href="report2.php">รายงานผลการทำงานของพนักงาน</a></li>
    <?PHP }?>
    </div> 
	
	
	
	
	
	
	
	
	

 <div class="col-sm-9">