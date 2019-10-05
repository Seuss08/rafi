<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>Login CRUD</h2></center>
	<br/>
	<!-- cek pesan notifikasi -->
	<div class="login">
	<br/>
		<form action="cek_login.php" method="post">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" placeholder="Masukkan username">
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" placeholder="Masukkan password">
			</div>		
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
</html>