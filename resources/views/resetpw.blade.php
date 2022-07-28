<!DOCTYPE html>
<html>
<head>

	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
    <!-- CSS Assets -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    <link rel="stylesheet" href="css/resetpw.css">

	<title>Reset Password - Identitas</title>
</head>
<body>
    <div class="progressbar mt-5">
        <li class="active">Identitas</li>
        <li>Ubah Kata Sandi</li>
        <li>Berhasil</li>
	</div>
	<div class="container mt-5" >
		<form action="cek_pass" method="POST" class="login-email" >
            @csrf
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<p class="login-text mt-4">Identitas</p>
			<div class="input-group">
                <input type="email" placeholder="Masukkan e-mail Anda" name="email" required>
			</div>
			<div class="input-group">
                <input type="text" placeholder="Masukkan No. Handphone" name="no_hp" required>
			</div>
            <div class="btn-groub">
                <button class="btn btn-purple text-white" type="submit">
                    Kirim
                </button>
                <button class="btn btn-outline-danger mt-3" type="reset">
                    Reset
                </button>
            </div>
		</form>
        @error('gagal')
            <div class="text-danger mt-5">{{ $message }}</div>
        @enderror
	</div>
</body>
</html>