<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

	<!-- <script src="js/dist/sweetalert2.all.min.js"></script> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="bg mx-3 my-4">
		@if(session()->has('loginError'))
			<div class="toast show" role="alert">
				<div class="toast-header">
					<strong class="mr-auto">
						{{ session('loginError') }}
					</strong>
				</div>
				<div class="toast-body">
					Silahkan pastikan email dan kata sandi sudah benar.
				</div>
			</div>
		@endif
		<div class="row">

			<div class="col-7">
				<div class="col">
					<img class="m-5" src="image/icon_problemsolver.png" alt="">
				</div>
				<div class="col py-5">
					<img class="img-background" src="image/Illustration.png" alt="">
				</div>
				<div class="col footer">
					<h1><i> Sistem Rekapitulasi Data</i></h1>
					<p>Created by Problem Solver</p>
				</div>
			</div>


			<div class="col">
				<div class="border m-5 py-5 bg-white login text-center">
					<form action="/login" method="post" class="py-5">
						{{ csrf_field() }}
						<h1 class="pt-5">Selamat Datang...</h1>
						<h2 class="text-secondary">Mohon masukkan email dan kata sandi anda</h2>
						<div class="mx-5 mt-5 form-group">
							<input type="email" class="form-control p-4 @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email anda" value="{{ old('email') }}">
							@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="mx-5 form-group">
							<input type="password" class="form-control p-4 @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan password anda">
							@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="mx-5 form-group">
							{{-- <div class="input-group mb-2">
								<div class="input-group-prepend captcha">
									<span>{!! captcha_img() !!}</span>
									<button type="button" class="btn btn-danger" class="reload" id="reload">
										&#x21bb;
									</button>
								</div>
								<input type="text" class="form-control p-4" id="basic-url" aria-describedby="basic-addon3"  placeholder="Input captcha" name="remember_token" disabled>
							</div> --}}
							<div class="text-right">
								<a href="resetpw" class=" text-secondary">Forgot password ?</a>
							</div>
						</div>
							<button type="submit" class="mt-5 btn btn-login text-white">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
<script>
	$('#reload').click(function () {
		console.log('masuk')
		$.ajax({
			type: 'get',
			url: '/reload-captcha',
			dataType: 'json',
			success: function (data) {
				console.log(data);
				$(".captcha span").html(data.captcha);
			}
		});
	});
</script>			
</html>
