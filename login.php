<!DOCTYPE html>
<html>
<head>

	<tittle> <?php echo date("l, d-M-Y"); ?> </tittle>
	<style type="text/css">
		body{
			margin:0;
			padding: 0;
			background: url("Pictures/depan.jpg");
			background-size: cover;
			background-color: #000;
			background-position: center;
			font-family: sans-serif;
		}
		.loginbox{
			width: 320px;
			height: 520px;
			background-color: #fff;
			color: #F00;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 70px 30px;
			transition: 1s;s
		}
		.avatar{
			width: 200px;
			height: 200px;
			border-radius: 50%;
			position: absolute;
			top: -50%;
			left: calc(50% -50px);
		}
		h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
		}
		.loginbox input{
			width: 100px;
			margin-bottom: 20px;
		}
		.loginbox input[type="text"],input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: #000;
			font-size: 14px;
		}
		.loginbox input[type="submit"]:hover{
			cursor: pointer;
			background: #ffc107;
			color: #000;
		}
		.loginbox b{
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: grey;
		}
		.loginbox b:hover{
			color: #ffc107;
		}
	</style>
</head>
<body>
	<div class="loginbox">
		<img src="Pictures/depan.jpg" class="depan">
		<h1>Login Disini</h1>
		<form>
			<p><?php echo "username"; ?></p>
			<input type="text" name = " "placeholder = "your email">
			<p><?php echo "Password"; ?></p>
			<input type="password" name=" " placeholder ="password" >
			<br>
			<input type="submit" name=" " value="login">
			<br>
			<a href="data.php">forgot your Email/Password</a>
			<br>
			<a href="data.php">Don't have an account</a>
		</form>
	</div>
</body>
</html>