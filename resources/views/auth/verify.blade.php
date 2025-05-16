<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Success</title>
     <link href="{{asset('')}}user/css/style.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            /* background: #f5f5f5; */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .wrapper {
            background: #302f2f3d;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
            width: 90%;
        }
        h1 {
            margin-bottom: 30px;
            color: #333;
        }
        h4 {
            margin: 10px 0;
            font-size: 18px;
        }
        .main-color {
            color: #ffc70d;
            font-weight: 700;
        }
        .btn-registration {
            display: inline-block;
            margin-top: 30px;
            background: linear-gradient(to right, #ffc70d, #ff9800);
            padding: 12px 30px;
            border-radius: 8px;
            color: #000;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .btn-registration:hover {
            background: linear-gradient(to right, #ff9800, #ffc70d);
        }
    </style>
</head>
<body data-typography="cairo" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sidebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1" >

<div class="wrapper" >
    <h1>Register Successfully</h1>

    @if(session()->has('messages'))
        <?php $user_details = session()->get('messages'); ?>

        <h4>Congratulations! Your Account has been successfully Created.</h4>
        <h4>Dear <span class="main-color">{{ $user_details->name }}</span>,</h4>
        <h4>
            You have been successfully registered.<br>
            Your user ID is <span class="main-color">{{ $user_details->username }}</span>,<br>
            Password is: <span class="main-color">{{ $user_details->PSR }}</span><br>
            Transaction Password is: <span class="main-color">{{ $user_details->TPSR }}</span><br>
            Please check your mail for more details.
        </h4>
    @endif

    <a href="{{ route('login-page') }}" class="btn-registration">Login</a>
</div>

</body>
</html>
