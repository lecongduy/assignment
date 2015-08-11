<?php
	session_start();
	if(isset($_SESSION['namedn'])==False){
		header('Location:admin_Login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="css/quanlisanpham.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lí sản phẩm</title>
<meta name="keywword" content="Ống pô, ống pô xe máy, ống pô cho exciter, ống pô ahm"/>
<meta name="description" content="Chuyên cung cấp các loại Ống pô, ống pô xe máy" />
</head>
<body>
<div id="wrapper">
<div id="header">
<img src="images/logo.gif" width="980" height="132">
</div>
     <div id = "menu_tab" >
        <ul>
          <li><a href ="index.php">Trang chủ </a></li>
          <li><a href ="ad_thanhvien.php">Quản lí thành viên  </a></li>
            <li><a href =""> Quản lí sản phẩm</a></li>
       <li><a href ="ad_hd.php"> Quản lí đơn hàng </a></li>
          
    <li><a style="width:auto" href="admin_Logout.php">Chào  <span style="color:#d310d5"><?php echo $_SESSION['namedn'];?> </span>,THOÁT</a></li>
        </ul>
      </div>	
      <div style="clear:both"></div>
  <div class="content">
  <div class="chitiethang">
  <form action="admin_Xuly_SP.php" method="POST" enctype="multipart/form-data" >
  <h1 style="color:#0594d2;">Quản lí sản phẩm</h1>
  <?php 
											if (empty($_SESSION['baoloi'])==False){
												echo $_SESSION['baoloi'];
												$_SESSION['baoloi']="";
											}else {echo '';}
									?>
 <div class="form">
 
		<label> Mã sản phẩm:</label>
		<input class="chung" type="ID" name="MaSP">
		</div>
        <div class="form">
		<label> Tên sản phẩm:</label>
		<input class="chung" type="ID" name="TenSP">
		</div>
         <div class="form">
		<label> Đơn giá:</label>
		<input class="chung" type="ID" name="DonGia">
		</div>
          <div class="form">
		<label>Hình ảnh:</label>
		<input class="chung" type="file" name="File">
		</div>
          <div class="form">
        <label> Mô tả:</label>
		<input class="chung" type="ID" name="MoTa">
		</div>
       <input style="margin-left:148px" type="submit" class="cil" name="DEL" value="Xóa">
         <input  type="submit" class="cil" name="FIX" value="Chỉnh sửa">
           <input type="submit" class="cil" name="OK" value="Thêm mới">
       
  </div>
    
</div>
  <!--end wrapper-->

</body>
</html>