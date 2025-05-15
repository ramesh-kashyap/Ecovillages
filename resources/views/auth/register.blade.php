<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
   <!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="">
	<meta name="keywords" content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
	<meta name="description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:title" content="Dompet - Payment Admin Dashboard Bootstrap Template">
	<meta property="og:description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<!-- Page Title Here -->
	<title>Ecovillages</title>
	
	
	
      <link href="{{asset('')}}assets/css/style1.css" rel="stylesheet">


</head>

<body class="vh-100"data-typography="cairo" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sidebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1">
   <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Sign up your account</h3>
							<p>Sign in to your account to start using Dompact</p>
						</div>
@if(session('notify'))
    @foreach(session('notify') as $msg)
        <div class="alert alert-{{ $msg[0] }} alert-dismissible fade show" role="alert">
            {{ $msg[1] }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

						<form action="{{ route('registers') }}" method="post">

                            @csrf

							<div class="mb-4">
								<label class="mb-1 text-dark">Name</label>
								<input type="text"name="name" class="form-control form-control"placeholder="enter your name" value=""required>
							</div>
                            <div class="mb-4">
								<label class="mb-1 text-dark">Sponsor</label>
								<input type="text"name="sponsor" class="form-control form-control"placeholder="enter your username" value="">
							</div>
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email"name="email" class="form-control form-control"placeholder="enter your email" value="">
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password"id="dlab-password" name="password"class="form-control form-control"placeholder="enter your password" value="">
								<span class="show-pass eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
							</div>
                            <div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Confirm Password</label>
								<input type="password"id="dlab-password" name="password_confirmation"class="form-control form-control" placeholder="enter your c_password" value="">
								<span class="show-pass eye">
								
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								
								</span>
							</div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
										<label class="form-check-label mt-1" for="customCheckBox1">Remember my preference</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="{{route('login')}}" class="btn-link text-primary">Sign in</a>
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
							</div>
							<!-- <h6 class="login-title"><span>Or continue with</span></h6> -->
							
							<!-- <div class="mb-3">
								<ul class="d-flex align-self-center justify-content-center">
									<li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
									<li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
									<li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
								</ul>
							</div> -->
							<!-- <p class="text-center">Not registered?  
								<a class="btn-link text-primary" href="page-error-404.html">Register</a>
							</p> -->
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100"data-theme-version="dark">
						<div class="login-content">
							<a href="index.html"><img src="images/logo-full.png" class="mb-3" alt=""></a>
							
							<p style="color: #fff;">Your true value is determined by how much more you give in value than you take in payment. ...</p>
						</div>
						<div class="login-media text-center">
							<img src="{{asset('')}}assets/images/login.png" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

</body>
@include('partials.notify')

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
  <script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>

</html>