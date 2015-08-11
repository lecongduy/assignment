<?php
	session_start();
?>
<!DOCTYPE HTML>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>   
        <link rel="stylesheet" href="css/login.css">    
  </head>

  <body>
<div id="login">
  <div id="triangle"></div>
  <h1>Đăng nhập</h1>
  <form action="admin_Xuly_Login.php" method="POST">
    <input type="text" placeholder="admin" name="TenDN" />
    <input type="password" placeholder="12345"  name="PassDN"/>
	<?php
										if(empty($_SESSION['valid'])==False){
											echo $_SESSION['valid'];
											$_SESSION['valid']= "";
										}
									?>
    <input type="submit" name="OK" value="Đăng nhập" />
  </form>
</div>


    
    
    
  </body>
</html>
