
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
<link rel="stylesheet" type="text/css" href="css/quanlidonhang.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đơn hàng</title>
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
  <h1 style="color:#0594d2;">Thông tin đơn hàng</h1>
<table width="800" border="1" cellspacing="0" bordercolor="#0594d2">
  <tr>
    <td><p>Mã HĐ</p></td>
    <td><p>Tên khách hàng</p></td>
    <td><p>Ngày mua</p></td>
    <td><p>Tổng tiền</p></td>
    <td><p>Tình trạng</p></td>
  </tr>
	<?php
		$db = mysqli_connect("localhost","root","","db_ongpo");
		$sql= "select MaHD, TaiKhoan.HoTen, NgayMua,TongTien,TinhTrang From HoaDon,TaiKhoan Where TaiKhoan.TenTk=HoaDon.TenTK";
		$query=mysqli_query($db,$sql);
		while($sanpham = mysqli_fetch_row($query)) {
			echo '<tr>';
			echo	'<td>'.$sanpham[0].'</td>';
			echo	'<td>'.$sanpham[1].'</td>';
			echo	'<td>'.$sanpham[2].'</td>';
			echo	'<td>'.number_format($sanpham[3]).' Vnđ</td>';
			echo	'<td>'.$sanpham[4].'</td>';
			echo '</tr>';
		}		
	?>
  
</table>

  </div>
  </div>
    
</div><!--end wrapper-->

</body>
</html>
