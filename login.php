<!DOCTYPE html>
<html>
<head>
	<title>Prisijungti</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

	<style>
	*{
		padding: 0;
		margin: 0;
		border-radius: 25px;
		
	}
	.login-form{
		width: 350px;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		position: absolute;
		align-items: center;
		background-color: #caedff;
		
	}
	.login-form h1{
		font-size:40px;
		text-align:center;
		text-transform: uppercase;
		margin: 40px 0;
	}
	.login-form p{
		font-size: 20px;4
		margin: 15px 0;
		align: center;
	}
	
	.login-form input{
		font-size: 16px;
		width: 100%;
		padding: 15px 10px;
		border: 1;
		outline: none;
		border-radius: 5px;
	}
	.login-form button{
		font-size: 18px;
		font-weight: bold;
		margin: 20px 0;
		padding: 10px 15px;
		width: 49%;
		border-radius: 5px;
		border: 1;
	}
	.regis{
		font-size: 18px;
		font-weight: bold;
		margin: 20px 0;
		padding: 10px 15px;
		width: 49%;
		border-radius: 5px;
		border: 1;
	}
	
</style>
</head>   
	  
<body>
	<div class ="login-form">
		<h1>Prisijungti</h1>
		<form action="#" method="post">
			<p>El-pastas ar naudotojo vardas</p>
			<input type="text" name="user" placeholder="El-pastas ar naudotojo vardas">
			<p>Slaptažodis</p>
			<input type="password" name="password" placeholder="Slaptažodis">
			
			
			<p>
			<button type ="submit">Prisijungti</button>
			<a class ="regis" href = "signin.php"> Registruotis</a>
			</p>
		</form>
		
		<div class="container text-center">
			<p><a href = "PagrindinisPuslapis.php"> Į pagrindinį puslapį?</a></p>
		</div>
	</div>
</body>
	  
</html>