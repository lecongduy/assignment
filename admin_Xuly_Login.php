<?php
	$db = mysqli_connect("localhost","root","","db_ongpo");
	session_start();
	$_SESSION['valid']= "";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$user=$_POST['TenDN'];
		$pass=$_POST['PassDN'];
		$query="SELECT * FROM TaiKhoan WHERE TenTK='".$user."' AND PassTK='".$pass."'";
		$query1="SELECT * FROM TaiKhoan WHERE VaiTro=1 and TenTK='".$user."' AND PassTK='".$pass."'";
		$check=mysqli_query($db, $query);
		$check1=mysqli_query($db, $query1);
		if (empty($user) and empty($pass)) {
			$_SESSION['valid']= "Vui lòng điền thông tin.";
			header('Location:ad_login.php');
		}else if (mysqli_num_rows($check)==0){
			$_SESSION['valid']= "Tên đăng nhập và mật khẩu không đúng";
			header('Location:ad_login.php');
		}else{
			if (mysqli_num_rows($check1)==0){
				$_SESSION['valid']= "Bạn không phải là quản trị viên";
				header('Location:ad_login.php');
			}else {
				$_SESSION['namedn']=$user;
				$_SESSION['passdn']=$pass;
				header('Location:ad_thanhvien.php');
			}
		}
		
	}else{ header('location:ad_login.php');}