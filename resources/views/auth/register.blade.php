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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>



    <!-- Mobile Specific -->    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <!-- Page Title Here -->
    <title>Ecovillages</title>



    <link href="{{asset('')}}assets/css/style1.css" rel="stylesheet">


</head>

<body class="vh-100" data-typography="cairo" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sidebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                            <h3 class="title">Sign up your account</h3>
                            <p>Sign in to your account to start using Ecovillages</p>
                        </div>
                        <!-- @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </div>
                        @endif -->

                        <form action="{{ route('registers') }}" method="post">
                            @csrf


                            <div class="mb-4">
                                <label class="mb-1 text-dark">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" required>
                            </div>

                            <div class="mb-4">
                                <label class="mb-1 text-dark">Sponsor</label>
                                <input type="text" name="sponsor" class="form-control" placeholder="Enter sponsor username" value="{{ old('sponsor', request('ref')) }}" required>
                            </div>
                           
                             <div class="mb-4">
                                <label class="mb-1 text-dark">phone</label><br>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Enter your phone number" value="{{ old('email') }}"maxlength="10"  required style="width: 501px;">
                                <input type="hidden" id="country_code" name="country_code">
                            </div>
                            <div class="mb-4">
                                <label class="mb-1 text-dark">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-4 position-relative">
                                <label class="mb-1 text-dark">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                                <span class="show-pass eye" onclick="togglePassword('password', this)">
                                    <i class="fa fa-eye-slash"></i>
                                </span>
                            </div>

                            <div class="mb-4 position-relative">
                                <label class="mb-1 text-dark">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm your password" required>
                                <span class="show-pass eye" onclick="togglePassword('password_confirmation', this)">
                                    <i class="fa fa-eye-slash"></i>
                                </span>
                            </div>

                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                <label class="form-check-label" for="customCheckBox1">Remember my preference</label>
                            </div>

                            <div class="mb-4 text-end">
                                <a href="{{ route('login') }}" class="btn-link text-primary">Sign In</a>
                            </div>

                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-primary btn-block" style="background-color:rgb(73, 175, 69);">Sign Up</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- <div class="col-xl-6 col-lg-6">
                    <div class="pages-left h-100" data-theme-version="dark">
                        <div class="login-content">
                            <a href="index.html"><img src="images/logo-full.png" class="mb-3" alt=""></a>

                            <p style="color: #fff;">Your true value is determined by how much more you give in value than you take in payment. ...</p>
                        </div>
                        <div class="login-media text-center"style="filter: invert(84%) sepia(88%) saturate(747%) hue-rotate(85deg) brightness(60%) contrast(139%)
">
                            <img src="{{asset('')}}assets/images/login.png" alt="">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

</body>
@include('partials.notify')

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->

<script>
  const input = document.querySelector("#phone");
  const iti = window.intlTelInput(input, {
    initialCountry: "in",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });

  input.addEventListener("input", function () {
    const countryCode = iti.getSelectedCountryData().dialCode;
    document.querySelector("#country_code").value = "+" + countryCode;
  });

  // Also set on init (in case value pre-filled)
  document.addEventListener("DOMContentLoaded", function () {
    const countryCode = iti.getSelectedCountryData().dialCode;
    document.querySelector("#country_code").value = "+" + countryCode;
  });
</script>


<script src="vendor/global/global.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>

</html>