<!doctype html>
<html lang="en">

<head>
	<title>Buku Tamu Pameran</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Buku Tamu Pameran Kecamatan Pakisaji</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{url('/frontend/images/bg-1.jpg')}});">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h4 class="mb-3">Masukan Data Diri</h4>
								</div>
							</div>

							@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
							@endif


							<form action="{{url('simpan-bukutamu')}}" method="post" class="signin-form">
								@csrf
								<div class="form-group mb-3">
									<label class="label" for="name">Nama</label>
									<input type="text" name="nama" class="form-control" placeholder="Silahkan isikan nama" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Alamat</label>
									<input type="text" name="alamat" class="form-control" placeholder="Silahkan isikan alamat" required>
								</div>

								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Simpan</button>
								</div>

								<div class="mt-5">
									<a href="{{url('dashboard')}}">Dashboard</a>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('/frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('/frontend/js/popper.js')}}"></script>
	<script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/frontend/js/main.js')}}"></script>

</body>

</html>