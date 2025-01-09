<!doctype html>
<html lang="en">
  <head>
  	<title>KAF Learning-Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('loginForm/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url({{ asset('loginForm/images/bg.jpg') }})">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">KAF Learning-Center</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Login User</h3>
		      <form class="signin-form" action="{{ route('login') }}" method="POST">
			  @csrf	
				<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="name" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" >Sign In</button>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('loginForm/js/jquery.min.js')}}"></script>
  <script src="{{asset('loginForm/js/popper.js')}}"></script>
  <script src="{{asset('loginForm/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('loginForm/js/main.js')}}"></script>

	</body>
</html>