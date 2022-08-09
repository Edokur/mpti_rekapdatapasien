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
	<main>
		<div class="m-4 login">
			<div class="row p-5">
				<div class="col-8 p-2">
					<img class="img-logo" src="image/icon_problemsolver.png"  alt="">
					<div>
						<img class="mx-auto mt-5 d-block ilustration" width="80%" src="image/Illustration.png" alt="">
					</div>
				</div>
				<div class="col p-0">
					<div class="card card-login bg-white">
						<form action="/login" method="post">
						{{ csrf_field() }}
							<header class="m-5 text-center">
								<h2 class="mt-5">Selamat Datang...</h2>
								<p>Mohon masukkan email dan kata sandi anda</p>
							</header>
							<main class="mx-5">
								<div class="form-groub form-login">
									<div class="form-email">
										<input class="form-control input-email mb-3 bg-light" type="email" placeholder="Masukkan email" id="email" name="email" value="{{ old('email') }}">
										@error('email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
									<div class="form-password">
										<input class="form-control input-password mb-3 bg-light" type="password" placeholder="Masukkan password" id="password" name="password">
										@error('password')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
										@enderror
									</div>
								</div>
								<div class="text-right">
									<a href="/resetpass" class="text-secondary">Lupa password?</a>
								</div>
							</main>
							<div class="mx-5 my-5 button">
								<button class="btn btn-login text-white" type="submit">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>		
		<footer class="ml-4 mb-4 footer">
			<h2>Sistem Rekapitulasi Data</h2>
			<h6>Created by Problem Solver</h6>
		</footer>
	</main>
	@include('sweetalert::alert')
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