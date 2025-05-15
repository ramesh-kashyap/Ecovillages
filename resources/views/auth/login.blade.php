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
    <!-- Font Awesome 6 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<!-- Page Title Here -->
	<title>Dompet - Payment Admin Dashboard Bootstrap Template</title>
	
	
	
     <link href="{{asset('')}}assets/css/style1.css" rel="stylesheet">

</head>

<body class="vh-100"data-typography="cairo" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sidebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1"
 >
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Sign In</h3>
							<p>Sign in to your account to start using Dompact</p>
						</div>
						<form action="{{ route('login') }}" method="post">
                            @csrf
							<div class="mb-4">
								<label class="mb-1 text-dark">Username</label>
								<input type="text" class="form-control form-control" name="username">
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" id="passwordInput" name="password" class="form-control form-control" value="Password">
								<span class="show-pass eye" onclick="togglePassword()">								
									<i class="fa fa-eye-slash"  id="eyeIcon" ></i>
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
									<a href="page-forgot-password.html" class="btn-link text-primary">Forgot Password?</a>
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Sign In</button>
							</div>
							<h6 class="login-title"><span>Or continue with</span></h6>
							
							<p class="text-center">Not registered?  
								<a class="btn-link text-primary" href="page-register.html">Register</a>
							</p>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100" data-theme-version="dark">
						<div class="login-content">
							<a href="index.html"><img src="{{asset('')}}assets/images/logo-full.png" class="mb-3" alt=""></a>
							
							<p>Your true value is determined by how much more you give in value than you take in payment. ...</p>
						</div>
						<div class="login-media text-center">
							<img src="{{asset('')}}assets/images/login.png" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
@include('partials.notify')
     <script>
        function togglePassword() {
            const input = document.getElementById("passwordInput");
            // const icon = document.getElementById("eyeIcon");    

            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";                
            }
        }
    </script>
    <script src="vendor/global/global.min.js"></script>
      <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
	
</body>
</html>