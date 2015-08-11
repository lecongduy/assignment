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
<link rel="stylesheet" type="text/css" href="css/index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ống pô, Ống pô xe máy, Ống pô cho exciter, ống pô inox</title>
<meta name="keywword" content="Ống pô, ống pô xe máy, ống pô cho exciter, ống pô ahm"/>
<meta name="description" content="Chuyên cung cấp các loại Ống pô, ống pô xe máy" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63492737-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="wrapper">
<div class="giohang">
<a href="showgh.php"><p>Giỏ hàng</p></a>
</div>
<div class="dangnhap">
<a href="ad_login.php"><p>Đăng nhập</p></a>
</div>
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
										?>   </span>Sản phẩm</a></li>
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
  <p>SẢN PHẨM NỔI BẬT</p>    
  </div>
    <div class="boxleft">
	
	<?php
						$db = mysqli_connect("localhost","root","","db_ongpo");
						$sql= "select * From Sanpham";
						$query=mysqli_query($db,$sql);
						while($sanpham = mysqli_fetch_row($query)) {
							echo	'<div class="boxanh">';
							echo			'<a href="chitietsanpham.php?code='.$sanpham[0].'"><img src="images/ongpo/'.$sanpham[3].'" width="161" height="128" /></a>';
							echo				'	<a href="chitietsanpham.php?code='.$sanpham[0].'"><h4>'.$sanpham[1].'</h4></a>';
							echo			'<div class="gia">';
							echo				'<p>GIÁ:'.number_format($sanpham[2]).' đ </p>';
							echo		'</div>	<div class="muahang">
		<a > <p>Mua Hàng</p></a>
	</div>';
							echo	'</div>';
						}		
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
     <p>ỐNG PÔ PHUN LỬA</p>
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
