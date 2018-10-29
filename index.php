<html>
<head>
	<title>bootstap</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap4/css/bootstrap.min.css">
</head>
<body>

	<nav id="navbar-header" class="navbar fixed-top navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">data ware house system</a>
	  <ul class="nav nav-pills mr-auto">
	    <li class="nav-item dropdown ">
	      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ระบบคลังวัสดุ</a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="#one">รายการส่งเบิก</a>
	        <a class="dropdown-item" href="#two">รับพัสดุเข้าคลัง</a>
	      </div>
	    </li>
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ระบบรายงาน</a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="#one">รายการเบิกจ่ายแล้ว</a>
	        <a class="dropdown-item" href="#two">รายการเบิกตามช่วงเวลา</a>
	        <a class="dropdown-item" href="#three">รายการเบิกแยกประเภท</a>
	        <a class="dropdown-item" href="#three">รายการเบิกแยกตามหน่วยเบิก</a>
	      </div>
	    </li>
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ตั้งค่าระบบ</a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="#one">บันทึกข้อมูลองค์กร</a>
	        <a class="dropdown-item" href="#fore">บันทึกผู้ใช้งานระบบ</a>
	        <a class="dropdown-item" href="#two">บันทึกข้อมูลหน่วยงาน</a>
	        <a class="dropdown-item" href="#three">บันทึกหัวหน้าหน่วยงาน</a>
	        <a class="dropdown-item" href="#three">บันทึกประเภทพัสดุ</a>
	        <a class="dropdown-item" href="#three">บันทึกรายการพัสดุ</a>
	        <a class="dropdown-item" href="#three">บันทึกหน่วยนับ</a>
	      </div>
	    </li>
		</ul>
		<ul class="nav nav-pills ml-auto">
	    <li class="nav-item dropdown mr-auto">
	      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">user profile</a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="#one">setting</a>
	        <a class="dropdown-item" href="#two">inbox</a>
	        <div role="separator" class="dropdown-divider"></div>
	        <a class="dropdown-item" href="#three">logout</a>
	      </div>
	    </li>
	  </ul>
	</nav>
	  
	<div class="page">
		<?php include('frm_example.php'); ?>
	</div>



	<nav class="navbar fixed-bottom navbar-light navbar-dark bg-dark">
		<ul class="navbar-nav ml-auto">
	  	Navbar content
		</ul>
	</nav>

<script type="text/javascript" src="assets/jquery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/jquery/popper.min.js"></script>
<script type="text/javascript" src="assets/bootstrap4/js/bootstrap.min.js"></script>


</body>
</html>