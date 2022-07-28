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

	<title>Ubah Kata Sandi</title>
</head>
<body>

	<div class="progressbar">
            <li>Identitas</li>
            <li class="active">Ubah Kata Sandi</li>
            <li>Berhasil</li>
</div>
	<div class="container mt-5">
        <p class="login-text mt-4" style="font-size: 2rem; ">Ubah Kata Sandi</p>
        @error('password')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
		<form action="/update_pass" method="POST" class="login-email" >

            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
			<div class="input-group">
				<input type="password" placeholder="Kata Sandi Baru" name="password">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Konfirmasi Kata Sandi Baru" name="password_confirmation">
			</div>
			<div class="mt-3 btn-group">
				{{-- <a href="/ubahpw"> --}}
                    <button class="kirim" type="submit">
                        Kirim
                    </button>
                {{-- </a> --}}
			</div>
            <div class="btn-group">
				{{-- <a href="/resetpw"> --}}
                    <button class="btn mb-5" type="reset">
                        Reset
                    </button>
                {{-- </a> --}}
			</div>
		</form>
	</div>
</body>
</html>