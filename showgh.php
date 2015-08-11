<?php  session_start() ;

?>
<!DOCTYPE html >
<html >
<head>
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="css/giohang.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giỏ hàng</title>
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
          <li><a href ="index.php"> Trang chủ </a></li>
          <li><a href ="gioi-thieu.php"> Về chúng tôi</a></li>
          <li><a href ="index.php"> Sản phẩm </a></li>
          <li><a href ="chinh-sach.php"> Chính sách </a></li>
            <li><a href ="tin-tuc.php"> Tin tức </a></li>
          <li><a href ="lien-he.php"> Liên hệ </a></li>
		   <li><a href ="showgh.php"> <span style="color:red;"><?php 
											if (empty($_SESSION['dem'] )==False){
												echo $_SESSION['dem'] ;
											}else {echo '0';}
										?>  </span>Sản phẩm</a></li>
        </ul>
      </div>	
      <div style="clear:both"></div>
  <div class="content">
  <div class="chitiethang">
  <h1 style="color:#0594d2;">Giỏ hàng</h1>
<table width="800" border="1" cellspacing="0" bordercolor="#0594d2">
  <tr>
    <td><p>Tên sản phẩm</p></td>
	
    <td><p>Số lượng</p></td>
    <td><p>thành tiền</p></td>
    <td><p>Ghi chú</p></td>

  </tr>
  <?php
							$tongtien=0;
							//Duyệt qua mảng Giỏ
							$kiemtra=1;
							if(isset($_SESSION['cart']))
							{
								foreach($_SESSION['cart'] as $masp=>$soluong)
								{
									$_SESSION['sl']=$soluong;
									if(isset($masp))
									{
										   $kiemtra=2;
									}
								}
							}
							if ($kiemtra == 2)
							{	
									foreach($_SESSION['cart'] as $masp=>$soluong){
										 $item[]=$masp;
									}
									$str=implode("','",$item);
									$db = mysqli_connect("localhost","root","","db_ongpo");
									$sql= "Select * From SanPham Where MaSP IN ('".$str."')";
									$query=mysqli_query($db,$sql);
									while($sanpham = mysqli_fetch_row($query)) 
									{ echo '
								<tr>
								<td>
								<img style="float:left;" src="images/ongpo/'.$sanpham[3].'" width="100" height="100">
									<p>'.$sanpham[1].'</p>
										<p>'.$sanpham[4].'</p>
								</td>
								<td><p>'.$_SESSION['cart'][$sanpham[0]].'</p></td>
								<td><p>'.number_format($_SESSION['cart'][$sanpham[0]] * $sanpham[2]).' đ</p></td>
								<td><p><a href="delcart.php?item='.$sanpham[0].'">Xóa sản phẩm</a></p></td>
								</tr>';
								$tongtien += $_SESSION['cart'][$sanpham[0]] * $sanpham[2];	
								}
								
								}else{
									echo '<tr><td style="text-align:center;padding:20px ;font-size:13pt;color:red">Chưa có sản phẩm nào trong Giỏ hàng.</td></tr>';
									$_SESSION['dem']=0;
								}
								?>

</table>
								<?php 
									echo'<div class="col-md-12 tongtien" style="text-align:right;color:red;"><h3>Tổng tiền : '.number_format($tongtien).'VNĐ</h3></div>';
																	$_SESSION['tongtien']=$tongtien;
								?>
<div class="col-md-6 thanhtoan" style="text-align:right; margin-bottom:11px;"><a href="delcart1.php?item=0"><input type="button" value="Thanh toán ngay"></a></div>

  </div>
  </div>
    
</div><!--end wrapper-->

</body>
</html>
