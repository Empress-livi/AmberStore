{{-- <x-guest-layout>
    <a href="/" class="flex justify-center items-center">
        <x-application-logo class="w-20 h-20 text-gray-500 fill-current"/>
    </a>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

    <form method="POST" action="{{ route('register') }}">
    @csrf

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')"/>
            <x-input type="text"
                     name="name"
                     id="name"
                     value="{{ old('name') }}"
                     required
                     autofocus
            />
        </div>

        <!-- Email Address -->
        <div class="mt-3">
            <x-label for="email" :value="__('Email')"/>
            <x-input type="email"
                     name="email"
                     id="email"
                     value="{{ old('email') }}"
                     required/>
        </div>

        <!-- Password -->
        <div class="mt-3">
            <x-label for="password" :value="__('Password')"/>
            <x-input type="password"
                     name="password"
                     id="password"
                     required
                     autocomplete="current-password"
            />
        </div>

        <!-- Confirm Password -->
        <div class="mt-3">
            <x-label for="password_confirmation" :value="__('Confirm Password')"/>
            <x-input type="password"
                     name="password_confirmation"
                     id="password_confirmation"
                     required
            />
        </div>

        <div class="flex flex-col items-end mt-4">
            <x-button class="w-full">
                {{ __('Register') }}
            </x-button>

            <a class="mt-4 text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Minimal and Clean Sign up / Login and Forgot Form by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="style-3">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="menu">
						<li><a href="/">Home</a></li>
						<li class="active"><a href="/register">Sign Up</a></li>
						<li><a href="{{ route('login') }}">Login</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-push-8">
					
                    
                    
					<!-- Start Sign In Form -->
					<form method="POST" action="{{ route('register') }}" class="fh5co-form animate-box" data-animate-effect="fadeInRight">@csrf
						<h2>Sign Up</h2>
						<div class="form-group">
							{{-- <div class="alert alert-success" role="alert">Your info has been saved.</div> --}}
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="alert alert-success" role="alert" :errors="$errors"/>
						</div>
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus id="name" placeholder="Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email" autocomplete="off" name="email" value="{{ old('email') }}" required>
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password"  name="password" required autocomplete="current-password">
						</div>
						<div class="form-group">
							<label for="re-password" class="sr-only">Re-type Password</label>
							<input type="password" class="form-control" id="re-password" placeholder="Re-type Password" name="password_confirmation" 
                            required autocomplete="off">
						</div>
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>
						<div class="form-group">
							<p>Already registered? <a href="{{ route('login') }}">Sign In</a></p>
						</div>
						<div class="form-group">
							<input type="submit" value="Sign Up" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->


				</div>
			</div>
			<div class="row" style="padding-top: 60px; clear: both;">
				<div class="col-md-12 text-center"><p><small>&copy; All Rights Reserved. Designed by <a href="https://freehtml5.co">FreeHTML5.co</a></small></p></div>
			</div>
		</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="js/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

