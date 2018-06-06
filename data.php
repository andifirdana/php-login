<!DOCTYPE html>
<html>
<head>
	<tittle></tittle>
	<style type="text/css">
	body{
			margin:0;
			padding: 0;
			background: url("Pictures/depan.jpg");
			background-size: cover;
			background-color: #000;
			background-position: center;
			font-family: sans-serif;
			color: #f00;
		}
	h1{
		text-align: center;
		font-size: 32px;
	}
	.register{
			width: 320px;
			height: 520px;
			background-color: #fff;
			color: #F00;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 100px 50px;
			transition: 1s;s
	}
	.register input{
			width: 100px;
			margin-bottom: 20px;
	}
	.register input[type="submit"]:hover{
			cursor: pointer;
			background: #ffc107;
			color: #000;
	</style>
</head>
<body>
	<div class="register">
	<h1>Registrasi</h1>
	<form action= " " method="post">
				<p><?php echo "Your Email" ?></p>
				<input type="text" name="username" id="username">
		
				<p><?php echo "password" ?></p>
				<input type ="password" name="password" id="password">
			
				<p><?php echo "password2" ?></p>
				<input type="password" name="password2" id="password2">
			    <br>
			    <br>
				<button type="submit" name="register">Register</button>
	</form>
	</div>	
</body>
</html>