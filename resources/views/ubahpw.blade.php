<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/resetpw.css">

	<title>Ubah Kata Sandi</title>
</head>
<body>

	<div class="progressbar">
            <li>Identitas</li>
            <li class="active">Ubah Kata Sandi</li>
            <li>Berhasil</li>
</div>
	<div class="container">
		<form action="cek_login.php" method="POST" class="login-email" >
			<p class="login-text" style="font-size: 2rem; ">Identitas</p>
			<div class="input-group">
				<input type="email" placeholder="Kata Sandi Baru" name="email" required>
			</div>
			<div class="input-group">
				<input type="number" placeholder="Konfirmasi Kata Sandi Baru" name="password" required>
			</div>
			<br>
			
			<div class="input-group">
				<button name="submit" class="button">Kirim</button>
			</div>
            <div class="input-group">
				<button name="submit" class="button">Reset</button>
			</div>
		</form>
	</div>
</body>
</html>