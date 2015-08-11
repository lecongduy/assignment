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
<link rel="stylesheet" type="text/css" href="css/quanlithanhvien.css" />
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
    
			<li><a style="width:auto" href="admin_Logout.php">Chào  <span style="color:#d310d5"><?php echo $_SESSION['namedn'];?> </span>,THOÁT</a></li>
        </ul>
      </div>	
      <div style="clear:both"></div>
  <div class="content">
  <div class="chitiethang">
  <h1 style="color:#0594d2;">Quản lí thành viên</h1>
<table width="800" border="1" cellspacing="0" bordercolor="#0594d2">
  <tr>
    <td><p>Tài khoản</p></td>
    <td><p>Họ tên</p></td>
    <td><p>Địa chỉ</p></td>
    <td><p>Giới tính</p></td>
    <td><p>Điện thoại</p></td>
    <td><p>Vai trò</p></td>
  </tr>
  <?php
										$db = mysqli_connect("localhost","root","","db_ongpo");
										$sql= "select * From TaiKhoan";
										$query=mysqli_query($db,$sql);
										while($sanpham = mysqli_fetch_row($query)) {
											if ($sanpham[3]=="1"){$sex="Nam";}else{$sex="Nữ";}
											if ($sanpham[6]=="1"){$vt="Quản trị";}else{$vt="Khách hàng";}
											echo '<tr>';
											echo	'<td>'.$sanpham[0].'</td>';
											echo	'<td>'.$sanpham[2].'</td>';
											echo	'<td>'.$sex.'</td>';
											echo	'<td>'.$sanpham[4].'</td>';
											echo	'<td>'.$sanpham[5].'</td>';
											echo	'<td>'.$vt.'</td>';
											echo '</tr>';
										}		
										?>

</table>
<a href="ad_taotv.php"><h2>Thêm mới thành viên</h2></a>

  </div>
  </div>
    
</div><!--end wrapper-->

</body>
</html>
