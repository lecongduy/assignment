<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="css/sanphamcon.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ống pô xe máy - Ống pô cho exciter</title>
<meta name="keywword" content="Ống pô, ống pô xe máy, ống pô cho exciter, ống pô ahm"/>
<meta name="description" content="Chuyên cung cấp các loại Ống pô, ống pô xe máy" />
</head>
<body>
<div id="wrapper">
<div class="giohang">
<a href="#"><p>Giỏ hàng</p></a>
</div>
<div class="dangnhap">
<a href="login.html"><p>Đăng nhập</p></a>
</div>
<div id="header">
<img src="images/logo.gif" width="980" height="132">
</div>
     <div id = "menu_tab" >
        <ul>
          <li><a href ="index.php"> Trang chủ </a></li>
          <li><a href ="gioi-thieu.php"> Về chúng tôi </a></li>
           <li><a href ="index.php"> Sản phẩm </a></li>
       <li><a href ="chinh-sach.php"> Chính sách </a></li>
            <li><a href ="tin-tuc.php"> Tin tức </a></li>
          <li><a href ="lien-he.php"> Liên hệ </a></li>
        </ul>
      </div>	
      <div style="clear:both"></div>
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/wavers_banner.jpg" alt="" title="" id="wows1_0"/></li>
		<li><a href="http://wowslider.com/vf"><img src="data1/images/963260180.jpg" alt="" title="" id="wows1_1"/></a></li>
		<li><img src="data1/images/6dyas.jpg" alt="" title="" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><img src="data1/tooltips/wavers_banner.jpg" alt=""/>1</a>
		<a href="#" title=""><img src="data1/tooltips/963260180.jpg" alt=""/>2</a>
		<a href="#" title=""><img src="data1/tooltips/6dyas.jpg" alt=""/>3</a>
	</div></div><span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.4</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
    <div id="content">
    <div id="content_left"><!--content_left-->   
      <div class="titleleft">
  <p>Sản phẩm </p>    
</div>
  <div class="boxleft">
  
						<?php
								$sanpham=$_GET['code'];
								$db = mysqli_connect ("localhost","root","","db_ongpo");
								$sql1 = 'Select * from Sanpham Where MaSP="'.$sanpham.'"';
								$query1 = mysqli_query($db,$sql1);
								$rowsp = mysqli_fetch_row($query1);
								$masp=$rowsp[0];
								$tensp=$rowsp[1];
								$dongia=$rowsp[2];
								$hinhanh=$rowsp[3];
								$mota=$rowsp[4];
							
							echo ' <img src="images/ongpo/'.$hinhanh.'" width="280" height="280" />';
							echo '<h1>'.$tensp.'</h1>';
							echo '<h1>'.number_format($dongia).' đ </h1>';
							echo '<h1>Mã sản phẩm: '.$masp.' </h1>';
							echo '<h1>Mô tả: '.$mota.' </h1>';
							echo ' <a href="giohang2.php?item='.$masp.'" class="myButton">Mua Ngay</a><div style="clear:both"></div>';
				
						?>

</div>
    
       
       
    </div><!--end content_left-->   
    <div id="content_right"><!--content_right-->
    <div class="titleright">
    <h4 style="color:#fff; margin-left:25px; margin-top:7px">ỐNG PÔ</h4>
    </div>
    <div class="boxright1">
   <div class="spnoibat">
    <a href="ong-po-cho-exciter.html"><p style="float:left; margin-right:5px;">ỐNG PÔ CHO EXCITER</p>    <img src="images/new.gif" width="27" height="37"> </a>   
    </div>
    <div class="spnoibat">
    <a href="ong-po-ahm-tron.html"><p>ỐNG PÔ AHM TRÒN</p></a>
    </div>
    <div class="spnoibat">
    <a href="ong-po-inox.html"><p>ỐNG PÔ INOX</p></a>
    </div>
    <div class="spnoibat">
    <a href="ong-po-ahm-tam-giac-vang.html"><p>ỐNG PÔ TAM GIÁC</p></a>
    </div>
    <div class="spnoibat">
    <a href="ong-po-nobi.html"><p>ỐNG PÔ NOBI</p></a>
    </div>
	</div>
    <div class="titleright">
    <p>QUẢNG CÁO</p>
    </div>
    <video style=" margin-bottom:5px;" src="video/Pô xe máy nóng đỏ, phụt lửa khi tăng ga..mp4" width="287" height="168" autoplay="autoplay" controls="controls">
      </video>
       <div class="titleright">
   <p>FACE BOOK</p>
    </div>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/ongpoxemay?fref=ts&amp;width=287&amp;colorscheme=light&amp;stream=false&amp;header=false&amp;height=240" scrolling="no" frameborder="0" scrolling="no" style="border: medium none; overflow: hidden; height: 240px; width: 287px;background:fff;"></iframe>
    </div><!-- end content_right-->
    </div>
    <div style="clear:both"></div>
        <div id="footer">
    <p> Cung cấp các loại pô xe máy</p>
    <p>Giao hàng tận nơi trên toàn quốc</p>
    <p>Chính sách bảo mật | Điều khoản sử dụng | Liên hệ</p>
    </div>
    
</div><!--end wrapper-->

</body>
</html>
