<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TechMarketHub</title>
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
	<!-- CSS Link -->
	<link rel="stylesheet" href="{{ asset('accueil/css/bootstrap5.min.css') }}">
	<link rel="stylesheet" href="{{ asset('accueil/css/fontawesome5.min.css') }}">
	<link rel="stylesheet" href="{{ asset('accueil/css/style.css') }}">
	<!-- Favicon -->
	<link rel='shortcut icon' type='image/x-icon' href='{{ asset('accueil/images/icon.png') }}'/>

	<style>
		body{
		    background: #6e727e;
		}
		.register-area {
		    background: #6e727e;
		    overflow: hidden;
		}
		.register{
			max-width: 500px;
			width: 100%;
			margin:10rem auto;
			background: #fff;
			box-shadow: 0 0 5px #999;
			padding: 1rem;
			border-radius: 5px;
		}
		.register .form-group label{margin-bottom: 5px; margin-top:10px ;}
	</style>
</head>
<body>
	<div class="main">
		<div class="register-area">
			<div class="container">
				<div class="register">
					<div class="login-text border-bottom text-center pb-2">
						<h4>Inscription</h4>
					</div>
					<form action="{{route('register.clients.action')}}" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label for="name">Nom:</label>
									<input type="text" class="form-control" name="nom" id="name">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" class="form-control" name="email" id="email">
								</div>
							</div>
							{{-- <div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label for="number">Numéro de téléphone:</label>
									<input type="text" class="form-control" name="number" id="number">
								</div>
							</div> --}}
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="password">Mot de passe:</label>
									<input type="password" class="form-control" name="password" id="password">
								</div>
							</div>
							{{-- <div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="c_password">Confirm Password:</label>
									<input type="text" class="form-control" name="c_password" id="c_password">
								</div>
							</div> --}}
							<div class="form-group">
								<button class="btn color_1_bg mt-3" name="user_register">Inscription</button>
							</div>
						</div>
 					</form> 
				</div>
			</div>
		</div>
	</div>
</body>
</html>
