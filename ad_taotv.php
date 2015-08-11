<?php
	session_start();
	if(isset($_SESSION['namedn'])==False){
		header('Location:ad_login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="css/themmoithanhvien.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lí thành viên</title>
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
            <li><a href ="ad_sanpham.php"> Quản lí sản phẩm</a></li>
       <li><a href ="ad_hd.php"> Quản lí đơn hàng </a></li>
          
			<li><a style="width:auto"href="admin_Logout.php">Chào  <span style="color:#d310d5"><?php echo $_SESSION['namedn'];?> </span>,THOÁT</a></li>
        </ul>
      </div>	
      <div style="clear:both"></div>
  <div class="content">
  <div class="chitiethang">
  <h1 style="color:#0594d2;">Quản lí thành viên</h1>
  <?php 
											if (empty($_SESSION['baoloi'])==False){
												echo $_SESSION['baoloi'];
												$_SESSION['baoloi']="";
											}
									?>
<form action="admin_Xuly_TV.php" method="POST" enctype="multipart/form-data" >
 <div class="form">
		<label> Tên đăng nhập:</label>
		<input class="chung" type="ID" name="Uname">
		</div>
        <div class="form">
		<label> Mật khẩu:</label>
		<input class="chung" type="ID" name="Upass">
		</div>
      <div class="form">
		<label> Xác nhận MK:</label>
		<input class="chung" type="ID" name="Upass1">
		</div>
      <div class="form">
		<label>Họ tên</label>
		<input class="chung" type="ID" name="HoTen">
		</div>
		 <div class="form">
      <label> Giới tính</label>
<input style="float:left;"  type="radio" name="GTinh" value="1">Nam
<input type="radio" name="GTinh" value="0">Nữ
	</div>
      <div class="form">
        <label> Địa chỉ</label>
		<input class="chung" type="ID" name="DiaChi">
		</div>
         <div class="form">
        <label> Số điện thoại</label>
		<input class="chung" type="ID" name="SoDT">
		</div>
      <div class="form">
      <label> Vai trò</label>
<input style="float:left;"  type="radio" name="VaiTro" value="1">Quản trị
<input type="radio" name="VaiTro" value="0">Thành viên
	</div>
      <input style="margin-left:148px" type="submit" class="cil" name="DEL" value="Xóa">
      <input  style=" background-color:#0F0;" type="submit" class="cil" name="FIX" value="Chỉnh sửa">
      <input style=" background-color:#F30" type="submit" class="cil" name="OK" value="Thêm mới">
       </form>
  </div>
    

 
  </div>
    
</div><!--end wrapper-->

</body>
</html>
