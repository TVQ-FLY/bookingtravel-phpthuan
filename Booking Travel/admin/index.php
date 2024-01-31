<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
	
	echo "<script>alert('Đăng nhập thất bại !');</script>";

}

}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/hi.css">
    <title>Admin Login</title>
</head>

<body>
<div class="clearfix"></div>
    <div class="container" id="container">		
			<div class="form-container sign-in">
				<form method="post">
					<h2>Đăng nhập Admin</h2>
					<div class="social-icons">
						<a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
						<a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
						<a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
						<a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
					</div>
					<span>Vui lòng nhập Username và Password</span>
					<input type="text" name="username" class="name" placeholder="Username" required="">
					<input type="password" name="password" class="password" placeholder="Password" required="">
					<button type="submit" class="login" name="login" value="Sign In">Sign In</button>
					<a href="../index.php"><- Quay lại trang chủ</a>
				</form>
			</div>
			<div class="toggle-container">
				<div class="toggle">
					<div class="toggle-panel toggle-left">
						<h1>Welcome Back!</h1>
						<p>Enter your personal details to use all of site features</p>
						<button class="hidden" >Sign In</button>
					</div>
					<div class="toggle-panel toggle-right">
						<h1>Xin chào !</h1>
						<p>Chào mừng bạn đã đến với Website</br>của chúng tôi</p>
						<!-- <button class="hidden" >Sign Up</button> -->
					</div>
				</div>
			</div>
    </div>

    
</body>

</html>
















<!-- 
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Sign in</title>

</head> 
<body>
	<div class="main-wthree">
		<div class="container">
			<div class="sin-w3-agile">
				<h2>Sign In</h2>
				<form  method="post">
					<div class="username">
						<span class="username">Username:</span>
						<input type="text" name="username" class="name" placeholder="" required="">
						<div class="clearfix"></div>
					</div>
					<div class="password-agileits">
						<span class="username">Password:</span>
						<input type="password" name="password" class="password" placeholder="" required="">
						<div class="clearfix"></div>
					</div>
					
					<div class="login-w3">
							<input type="submit" class="login" name="login" value="Sign In">
					</div>
					<div class="clearfix"></div>
				</form>
						<div class="back">
							<a href="../index.php">Back to home</a>
						</div>
						
			</div>
		</div>
	</div>
</body>
</html>  -->