
<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViserAsset - Dashboard</title>
    <meta name="title" Content="ViserAsset - Dashboard">
    <meta name="description" content="AssetLab is a leading investment management company that specializes in managing various assets.">
    <meta name="keywords" content="viserasset,asset,management,investment,roi,interest,farm,crypto">
    <link rel="shortcut icon" href="https://script.viserlab.com/viserasset/assets/images/logo_icon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="https://script.viserlab.com/viserasset/assets/images/logo_icon/logo.png">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="ViserAsset - Dashboard">
    
    <meta itemprop="name" content="ViserAsset - Dashboard">
    <meta itemprop="description" content="AssetLab is a leading investment management company that specializes in managing various assets.">
    <meta itemprop="image" content="https://script.viserlab.com/viserasset/assets/images/seo/67d790a84bd001742180520.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Asset Management And Investment System">
    <meta property="og:description" content="AssetLab is a leading investment management company that specializes in managing various assets.">
    <meta property="og:image" content="https://script.viserlab.com/viserasset/assets/images/seo/67d790a84bd001742180520.png">
    <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1180">
    <meta property="og:image:height" content="600">
    <meta property="og:url" content="https://script.viserlab.com/viserasset/user/dashboard">
    
    <meta name="twitter:card" content="summary_large_image">


    <link href="https://script.viserlab.com/viserasset/assets/global/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/viserasset/assets/global/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://script.viserlab.com/viserasset/assets/global/css/line-awesome.min.css" />
    <link rel="stylesheet" href="https://script.viserlab.com/viserasset/assets/templates/basic/css/select2.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/viserasset/assets/templates/basic/css/lightcase.css">
    <link rel="stylesheet" href="https://script.viserlab.com/viserasset/assets/templates/basic/css/flatpickr.min.css">
    <link rel="stylesheet" href="https://script.viserlab.com/viserasset/assets/templates/basic/css/main.css?v1">
    <link rel="stylesheet" href="https://script.viserlab.com/viserasset/assets/templates/basic/css/custom.css">

    
        <style>
        .countdown {
            width: 200px;
            margin: 0 auto;
        }

        .progress-sm {
            height: 12px;
            max-width: 240px;
            margin: 0 auto;
        }

        @media (max-width: 991px) {
            .countdown {
                width: auto;
                margin: 0 0 0 auto;
            }

            .progress-sm {
                margin: 0 0 0 auto;
            }
        }
    </style>
     <style>

     </style>
 
    <link rel="stylesheet"
        href="https://script.viserlab.com/viserasset/assets/templates/basic/css/color.php?color=02a730&secondColor=00290c">
</head>

<body>
    <div class="preloader">
        <div class="loader-p"></div>
    </div>

    <!--==================== Preloader End ====================-->
    <!--==================== Overlay Start ====================-->
    <div class="body-overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="sidebar-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <a class="scroll-top"><i class="fas fa-angle-up"></i></a>
    <!-- ==================== Scroll to Top End Here ==================== -->


        
    <div class="dashboard position-relative">
        <div class="dashboard__inner flex-wrap">

            <div class="sidebar-menu">
     <span class="sidebar-menu__close d-lg-none d-block"><i class="fas fa-times"></i></span>

     <div class="sidebar-logo">
         <a href="https://script.viserlab.com/viserasset" class="sidebar-logo__link"><img src="https://script.viserlab.com/viserasset/assets/images/logo_icon/logo.png" alt="" /></a>
     </div>

     <ul class="sidebar-menu-list">
         <li class="sidebar-menu-list__item active">
             <a href="https://script.viserlab.com/viserasset/user/dashboard" class="sidebar-menu-list__link">
                 <span class="icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                         fill="none">
                         <path
                             d="M0.888889 8.88889H6.22222C6.71111 8.88889 7.11111 8.48889 7.11111 8V0.888889C7.11111 0.4 6.71111 0 6.22222 0H0.888889C0.4 0 0 0.4 0 0.888889V8C0 8.48889 0.4 8.88889 0.888889 8.88889ZM0.888889 16H6.22222C6.71111 16 7.11111 15.6 7.11111 15.1111V11.5556C7.11111 11.0667 6.71111 10.6667 6.22222 10.6667H0.888889C0.4 10.6667 0 11.0667 0 11.5556V15.1111C0 15.6 0.4 16 0.888889 16ZM9.77778 16H15.1111C15.6 16 16 15.6 16 15.1111V8C16 7.51111 15.6 7.11111 15.1111 7.11111H9.77778C9.28889 7.11111 8.88889 7.51111 8.88889 8V15.1111C8.88889 15.6 9.28889 16 9.77778 16ZM8.88889 0.888889V4.44444C8.88889 4.93333 9.28889 5.33333 9.77778 5.33333H15.1111C15.6 5.33333 16 4.93333 16 4.44444V0.888889C16 0.4 15.6 0 15.1111 0H9.77778C9.28889 0 8.88889 0.4 8.88889 0.888889Z"
                             fill="currentColor" />
                     </svg>
                 </span>
                 <span class="text">Dashboard</span>
             </a>
         </li>

         <li class="sidebar-menu-list__item has-dropdown ">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
               <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18"
                        fill="none">
                        <path
                            d="M11.2 4.68662C10.1334 3.98442 9.02224 3.55777 8 3.55777C6.97776 3.55777 5.86665 3.98442 4.80002 4.68662C2.25776 6.33999 0 9.52218 0 12.1089C0 15.9755 4.77333 17.78 8 17.78C11.2267 17.78 16 15.9755 16 12.1089C16 9.52218 13.7422 6.33999 11.2 4.68662ZM7.65332 10.2244H8.42666C9.55556 10.2244 10.48 11.1844 10.48 12.3577C10.48 13.2378 9.95557 13.9933 9.21779 14.3133C9.17335 14.7488 8.80004 15.1044 8.3378 15.1044C8.3378 15.1044 8.3378 15.1044 8.3289 15.1044C7.93779 15.0955 7.6089 14.8378 7.49334 14.4822H6.48C5.99112 14.4822 5.59111 14.0822 5.59111 13.5933C5.59111 13.1044 5.99112 12.7044 6.48 12.7044H8.42667C8.57781 12.7044 8.70222 12.5444 8.70222 12.3577C8.70222 12.1622 8.57782 12.0022 8.42667 12.0022H7.65333C6.51558 12.0022 5.5911 11.0511 5.5911 9.87776C5.5911 8.73996 6.42666 7.82443 7.49333 7.74441C7.59999 7.37998 7.93777 7.11333 8.33778 7.11333C8.73779 7.11333 9.07557 7.37109 9.18223 7.73556H9.59108C10.08 7.73556 10.48 8.13551 10.48 8.62445C10.48 9.11333 10.08 9.51333 9.59108 9.51333H7.65332C7.50222 9.51333 7.36886 9.67333 7.36886 9.85996C7.36887 10.0733 7.50222 10.2244 7.65332 10.2244Z"
                            fill="currentColor" />
                        <path
                            d="M3.14615 1.16667C2.91508 1.57552 2.87059 2.06446 3.03948 2.5089C3.2706 3.10444 3.62618 3.63776 4.08836 4.0911C4.15949 4.03776 4.23951 3.98443 4.31059 3.94C4.48837 3.82445 4.65726 3.71778 4.83506 3.62001C5.92837 2.99778 7.01284 2.66889 7.9995 2.66889C8.98616 2.66889 10.0706 2.99778 11.1639 3.62001C11.3417 3.71778 11.5106 3.82444 11.6884 3.94C11.7595 3.98444 11.8395 4.03777 11.9106 4.0911C12.3728 3.63776 12.7195 3.10444 12.9506 2.5089C13.1284 2.06446 13.0839 1.57552 12.8529 1.16667C12.595 0.713329 12.1417 0.402236 11.6084 0.31332C9.21728 -0.10444 6.78172 -0.10444 4.39061 0.31332C3.85731 0.402236 3.40396 0.713329 3.14615 1.16667Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <span class="text">My Investment</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">

                    <li class="sidebar-submenu-list__item ">
                        <a href="https://script.viserlab.com/viserasset/user/invest/log" class="sidebar-submenu-list__link">
                            <span class="text">Investment</span>
                        </a>
                    </li>

                    <li class="sidebar-submenu-list__item ">
                        <a href="https://script.viserlab.com/viserasset/user/invest/schedule" class="sidebar-submenu-list__link">
                            <span class="text">Schedule Investment</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="sidebar-menu-list__item has-dropdown ">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.4 0H3.6C1.62 0 0 1.6 0 3.55556C0 5.06667 0.9 6.31111 2.25 6.84444V3.55556C2.25 3.2 2.43 2.84444 2.61 2.57778C2.79 2.31111 3.24 2.22222 3.6 2.22222H14.4C14.76 2.22222 15.12 2.4 15.39 2.57778C15.66 2.75556 15.75 3.2 15.75 3.55556V6.84444C17.1 6.31111 18 5.06667 18 3.55556C18 1.6 16.38 0 14.4 0ZM14.4 14.2222V3.55556H3.6V14.2222C3.6 15.2 4.41 16 5.4 16H12.6C13.59 16 14.4 15.2 14.4 14.2222ZM8.28 8.35556L7.65 8.97778C7.38 9.24444 6.93 9.24444 6.66 8.97778C6.39 8.71111 6.39 8.26667 6.66 8L7.83 6.84444C8.46 6.22222 9.45 6.22222 10.08 6.84444L11.25 8C11.52 8.26667 11.52 8.71111 11.25 8.97778C10.98 9.24444 10.53 9.24444 10.26 8.97778L9.63 8.35556V12.0889C9.63 12.4444 9.36 12.8 8.91 12.8C8.46 12.8 8.19 12.5333 8.19 12.0889V8.35556H8.28Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <span class="text">Deposit Money</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item ">
                        <a href="https://script.viserlab.com/viserasset/user/deposit" class="sidebar-submenu-list__link">
                            <span class="text">Deposit Money</span>
                        </a>
                    </li>
                    <li class="sidebar-submenu-list__item ">
                        <a href="https://script.viserlab.com/viserasset/user/deposit/history" class="sidebar-submenu-list__link">
                            <span class="text">Deposit Log</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="sidebar-menu-list__item has-dropdown ">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                        fill="none">
                        <path
                            d="M3.55555 0H14.2222C16.1778 0 17.7778 1.6 17.7778 3.55555C17.7778 5.06666 16.8889 6.31111 15.5555 6.84444V3.55555C15.5555 3.2 15.3778 2.84444 15.2 2.57778C15.0222 2.31111 14.5778 2.22222 14.2222 2.22222H3.55555C3.2 2.22222 2.84444 2.4 2.57778 2.57778C2.31111 2.75555 2.22222 3.2 2.22222 3.55555V6.84444C0.888888 6.31111 0 5.06666 0 3.55555C0 1.6 1.6 0 3.55555 0Z"
                            fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.2233 3.55556V14.2222C14.2233 15.2 13.4233 16 12.4455 16H5.33442C4.35664 16 3.55664 15.2 3.55664 14.2222V3.55556H14.2233ZM7.55664 10.2222L8.17886 10.8444V7.11111C8.17886 6.75556 8.44553 6.4 8.88997 6.4C9.33442 6.4 9.60108 6.66667 9.60108 7.11111V10.8444L10.2233 10.2222C10.49 9.95556 10.9344 9.95556 11.2011 10.2222C11.4677 10.4889 11.4677 10.9333 11.2011 11.2L10.0455 12.3556C9.4233 12.9778 8.44553 12.9778 7.82331 12.3556L6.66775 11.2C6.40108 10.9333 6.40108 10.4889 6.66775 10.2222C6.93442 9.95556 7.28997 9.95556 7.55664 10.2222Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <span class="text">Withdraw Money</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item ">
                        <a href="https://script.viserlab.com/viserasset/user/withdraw" class="sidebar-submenu-list__link">
                            <span class="text">Withdraw Money</span>
                        </a>
                    </li>
                    <li class="sidebar-submenu-list__item ">
                        <a href="https://script.viserlab.com/viserasset/user/withdraw/history" class="sidebar-submenu-list__link">
                            <span class="text">Withdraw Log</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

         <li class="sidebar-menu-list__item ">
             <a href="https://script.viserlab.com/viserasset/user/transactions" class="sidebar-menu-list__link">
                 <span class="icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                         fill="none">
                         <path
                             d="M16.7188 2.28125C16.4271 1.92708 16.4271 1.57292 16.7188 1.21875C17.0729 0.927083 17.4271 0.927083 17.7812 1.21875L19.7812 3.21875C19.9271 3.36458 20 3.54167 20 3.75C20 3.95833 19.9271 4.13542 19.7812 4.28125L17.7812 6.28125C17.4271 6.57292 17.0729 6.57292 16.7188 6.28125C16.4271 5.92708 16.4271 5.57292 16.7188 5.21875L17.4375 4.5H12C11.5417 4.45833 11.2917 4.20833 11.25 3.75C11.2917 3.29167 11.5417 3.04167 12 3H17.4375L16.7188 2.28125ZM3.28125 12.7812L2.5625 13.5L3.28125 12.7812L2.5625 13.5H8C8.45833 13.5417 8.70833 13.7917 8.75 14.25C8.70833 14.7083 8.45833 14.9583 8 15H2.5625L3.28125 15.7188C3.57292 16.0729 3.57292 16.4271 3.28125 16.7812C2.92708 17.0729 2.57292 17.0729 2.21875 16.7812L0.21875 14.7812C0.0729167 14.6354 0 14.4583 0 14.25C0 14.0417 0.0729167 13.8646 0.21875 13.7188L2.21875 11.7188C2.57292 11.4271 2.92708 11.4271 3.28125 11.7188C3.57292 12.0729 3.57292 12.4271 3.28125 12.7812ZM3 3H10.5625H3H10.5625C10.4375 3.22917 10.375 3.47917 10.375 3.75C10.3958 4.20833 10.5521 4.59375 10.8438 4.90625C11.1562 5.19792 11.5417 5.35417 12 5.375H15.6562C15.5312 5.9375 15.6771 6.44792 16.0938 6.90625C16.4271 7.21875 16.8125 7.375 17.25 7.375C17.6875 7.375 18.0729 7.21875 18.4062 6.90625L19 6.3125V13C18.9792 13.5625 18.7812 14.0312 18.4062 14.4062C18.0312 14.7812 17.5625 14.9792 17 15H9.4375C9.5625 14.7708 9.625 14.5208 9.625 14.25C9.60417 13.7917 9.44792 13.4062 9.15625 13.0938C8.84375 12.8021 8.45833 12.6458 8 12.625H4.34375C4.46875 12.0625 4.32292 11.5521 3.90625 11.0938C3.57292 10.7812 3.1875 10.625 2.75 10.625C2.3125 10.625 1.92708 10.7812 1.59375 11.0938L1 11.7188V5C1.02083 4.4375 1.21875 3.96875 1.59375 3.59375C1.96875 3.21875 2.4375 3.02083 3 3ZM5 5H3H5H3V7C3.5625 6.97917 4.03125 6.78125 4.40625 6.40625C4.78125 6.03125 4.97917 5.5625 5 5ZM17 11C16.4375 11.0208 15.9688 11.2188 15.5938 11.5938C15.2188 11.9688 15.0208 12.4375 15 13H17V11ZM10 12C10.5417 12 11.0417 11.8646 11.5 11.5938C11.9583 11.3229 12.3229 10.9583 12.5938 10.5C12.8646 10.0208 13 9.52083 13 9C13 8.47917 12.8646 7.97917 12.5938 7.5C12.3229 7.04167 11.9583 6.67708 11.5 6.40625C11.0417 6.13542 10.5417 6 10 6C9.45833 6 8.95833 6.13542 8.5 6.40625C8.04167 6.67708 7.67708 7.04167 7.40625 7.5C7.13542 7.97917 7 8.47917 7 9C7 9.52083 7.13542 10.0208 7.40625 10.5C7.67708 10.9583 8.04167 11.3229 8.5 11.5938C8.95833 11.8646 9.45833 12 10 12Z"
                             fill="currentColor" />
                     </svg>
                 </span>
                 <span class="text">Transaction</span>
             </a>
         </li>

         <li class="sidebar-menu-list__item ">
             <a href="https://script.viserlab.com/viserasset/user/referrals" class="sidebar-menu-list__link">
                 <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="5" r="3"/>
                        <circle cx="5" cy="19" r="3"/>
                        <circle cx="19" cy="19" r="3"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m-7 4l7-4m7 4l-7-4"/>
                      </svg>                      
                 </span>
                 <span class="text">Referrals</span>
             </a>
         </li>

         
         <li class="sidebar-menu-list__item has-dropdown ">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13"
                        fill="none">
                        <path
                            d="M4.25 3.4375H14.875V9.8125H4.25V3.4375ZM17 0.25C18.1621 0.25 19.125 1.21289 19.125 2.375V5.03125C18.2285 5.03125 17.5312 5.76172 17.5312 6.625C17.5312 7.52148 18.2285 8.21875 19.125 8.21875V10.875C19.125 12.0703 18.1621 13 17 13H2.125C0.929688 13 0 12.0703 0 10.875V8.21875C0.863281 8.21875 1.59375 7.52148 1.59375 6.625C1.59375 5.76172 0.863281 5.03125 0 5.03125V2.375C0 1.21289 0.929688 0.25 2.125 0.25H17ZM3.1875 9.8125C3.1875 10.4102 3.65234 10.875 4.25 10.875H14.875C15.4395 10.875 15.9375 10.4102 15.9375 9.8125V3.4375C15.9375 2.87305 15.4395 2.375 14.875 2.375H4.25C3.65234 2.375 3.1875 2.87305 3.1875 3.4375V9.8125Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <span class="text">Support Ticket</span>
            </a>
            <div class="sidebar-submenu">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item ">
                        <a href="https://script.viserlab.com/viserasset/ticket/new" class="sidebar-submenu-list__link">
                            <span class="text">Create New</span>
                        </a>
                    </li>

                    <li class="sidebar-submenu-list__item ">
                        <a href="https://script.viserlab.com/viserasset/ticket" class="sidebar-submenu-list__link">
                            <span class="text">My Ticket</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
     
         <li class="sidebar-menu-list__item has-dropdown ">
             <a href="javascript:void(0)" class="sidebar-menu-list__link">
                 <span class="icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
     <path
         d="M17.4023 6.12109C17.543 6.4375 17.4375 6.75391 17.1914 7L15.6797 8.37109C15.7148 8.65234 15.75 8.96875 15.75 9.25C15.75 9.56641 15.7148 9.88281 15.6797 10.1641L17.1914 11.5352C17.4375 11.7812 17.543 12.0977 17.4023 12.4141C17.2617 12.8359 17.0859 13.2227 16.875 13.6094L16.6992 13.8906C16.4531 14.2773 16.207 14.6641 15.9258 15.0156C15.7148 15.2617 15.3633 15.332 15.0469 15.2266L13.1133 14.6289C12.6211 14.9805 12.0938 15.2617 11.5664 15.5078L11.1094 17.5117C11.0391 17.8281 10.793 18.0742 10.4766 18.1445C9.98438 18.2148 9.49219 18.25 8.96484 18.25C8.47266 18.25 7.98047 18.2148 7.48828 18.1445C7.17188 18.0742 6.92578 17.8281 6.85547 17.5117L6.39844 15.5078C5.87109 15.2617 5.34375 14.9805 4.85156 14.6289L2.91797 15.2266C2.60156 15.332 2.25 15.2617 2.03906 15.0156C1.75781 14.6641 1.51172 14.2773 1.26562 13.8906L1.08984 13.6094C0.878906 13.2227 0.703125 12.8359 0.5625 12.4141C0.421875 12.0977 0.527344 11.7812 0.773438 11.5352L2.28516 10.1641C2.25 9.88281 2.25 9.56641 2.25 9.25C2.25 8.96875 2.25 8.65234 2.28516 8.37109L0.773438 7C0.527344 6.75391 0.421875 6.4375 0.5625 6.12109C0.703125 5.69922 0.878906 5.3125 1.08984 4.92578L1.26562 4.64453C1.51172 4.25781 1.75781 3.87109 2.03906 3.51953C2.25 3.27344 2.60156 3.20312 2.91797 3.30859L4.85156 3.90625C5.34375 3.55469 5.87109 3.23828 6.39844 3.02734L6.85547 1.02344C6.92578 0.707031 7.17188 0.460938 7.48828 0.390625C7.98047 0.320312 8.47266 0.25 9 0.25C9.49219 0.25 9.98438 0.320312 10.4766 0.390625C10.793 0.460938 11.0391 0.707031 11.1094 1.02344L11.5664 3.02734C12.0938 3.23828 12.6211 3.55469 13.1133 3.90625L15.0469 3.30859C15.3633 3.20312 15.7148 3.27344 15.9258 3.51953C16.207 3.87109 16.4531 4.25781 16.6992 4.64453L16.875 4.92578C17.0859 5.3125 17.2617 5.69922 17.4023 6.12109ZM9 12.0625C10.5469 12.0625 11.8125 10.832 11.8125 9.25C11.8125 7.70312 10.5469 6.4375 9 6.4375C7.41797 6.4375 6.1875 7.70312 6.1875 9.25C6.1875 10.832 7.41797 12.0625 9 12.0625Z"
         fill="currentColor" />
 </svg>
                 </span>
                 <span class="text">Setting</span>
             </a>
             <div class="sidebar-submenu">
                 <ul class="sidebar-submenu-list">
                     <li class="sidebar-submenu-list__item ">
                         <a href="https://script.viserlab.com/viserasset/user/profile-setting" class="sidebar-submenu-list__link">
                             <span class="text">Profile Setting</span>
                         </a>
                     </li>
                     <li class="sidebar-submenu-list__item ">
                         <a href="https://script.viserlab.com/viserasset/user/change-password" class="sidebar-submenu-list__link">
                             <span class="text">Change Password</span>
                         </a>
                     </li>
                     <li class="sidebar-submenu-list__item ">
                         <a href="https://script.viserlab.com/viserasset/user/twofactor" class="sidebar-submenu-list__link">
                             <span class="text">2FA Security</span>
                         </a>
                     </li>
                 </ul>
             </div>
         </li>


         <li class="sidebar-menu-list__item">
             <a href="https://script.viserlab.com/viserasset/user/logout" class="sidebar-menu-list__link log-out">
                 <span class="icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17"
                         fill="none">
                         <path
                             d="M3.375 16.125C1.47656 16.125 0 14.6133 0 12.75V3.75C0 1.88672 1.47656 0.375 3.375 0.375H5.625C6.22266 0.375 6.75 0.902344 6.75 1.5C6.75 2.13281 6.22266 2.625 5.625 2.625H3.375C2.74219 2.625 2.25 3.15234 2.25 3.75V12.75C2.25 13.3828 2.74219 13.875 3.375 13.875H5.625C6.22266 13.875 6.75 14.4023 6.75 15C6.75 15.6328 6.22266 16.125 5.625 16.125H3.375ZM17.7188 7.65234C18.0703 7.96875 18.0703 8.56641 17.7188 8.84766L12.6562 13.6289C12.4102 13.875 12.0586 13.9102 11.7422 13.8047C11.4258 13.6641 11.25 13.3477 11.25 13.0312V10.5H6.75C6.11719 10.5 5.625 10.0078 5.625 9.375V7.125C5.625 6.52734 6.11719 6 6.75 6H11.25V3.46875C11.25 3.15234 11.4258 2.83594 11.7422 2.69531C12.0586 2.58984 12.4102 2.625 12.6562 2.87109L17.7188 7.65234Z"
                             fill="currentColor" />
                     </svg>
                 </span>
                 <span class="text">Logout</span>
             </a>
         </li>
     </ul>
 </div>

 
            <div class="dashboard__right">

                <div class="dashboard-header">
    <div class="container-fluid">
        <div class="dashboard-header-wrapper">
            <div class="dashboard-header-left">
                <div class="d-xl-none">
                    <button class="navigation-bar">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="page-title d-none d-xl-block">
                    <a href="https://script.viserlab.com/viserasset/user/profile-setting" class="page-title-link text-white">
                        <span><i class="fas fa-user-circle"></i></span>
                        rameshk036</a>
                </div>
            </div>
            <div class="dashboard-header-right">

                <div class="dropdown user-dropdown">
                    <button class="lang-box-btn" data-bs-toggle="dropdown">
                        <span class="user-info-wrapper">
                            <span class="user-info-thumb">
                                <img class="fit-image"
                                    src="https://script.viserlab.com/viserasset/assets/images/avatar.png"
                                    alt="" />
                            </span>
                            <span class="user-info-content d-none d-sm-block">
                                <span class="name">Rameshk Kashyap</span>
                            </span>
                            <span class="user-info-arrow">
                                <i class="fa-solid fa-caret-down"></i>
                            </span>
                        </span>
                    </button>
                    <ul class="dropdown-menu">
                        <li class="user-dropdown-item">
                            <a href="https://script.viserlab.com/viserasset/user/profile-setting" class="user-dropdown-link">
                                <span class="icon">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <span class="text">Profile</span>
                            </a>
                        </li>
                        <li class="user-dropdown-item">
                            <a href="https://script.viserlab.com/viserasset/user/change-password" class="user-dropdown-link">
                                <span class="icon">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <span class="text">Change Password</span>
                            </a>
                        </li>
                        <li class="user-dropdown-item">
                            <a href="https://script.viserlab.com/viserasset/user/twofactor" class="user-dropdown-link">
                                <span class="icon">
                                    <i class="fa-solid fa-qrcode"></i>
                                </span>
                                <span class="text">2FA Security</span>
                            </a>
                        </li>

                        <li class="user-dropdown-item">
                            <a href="https://script.viserlab.com/viserasset/user/logout" class="user-dropdown-link">
                                <span class="icon">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </span>
                                <span class="text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
                <div class="dashboard-body">

                        <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Dashboard</h2>
            <div class="flex-align gap-2">
                <a href="https://script.viserlab.com/viserasset/plan" class="btn btn--base btn--sm">Invest Now</a>
            </div>
        </div>
        <div class="notice"></div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                                    <div class="alert alert--info mb-3" role="alert">
                        <div class="alert__icon"><i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="alert__content">
                            <h6 class="alert__title">KYC Verification Required</h6>
                            <p class="alert__desc">Complete KYC to unlock the full potential of our platform! KYC helps us verify your identity and keep things secure. It is quick and easy just follow the on-screen instructions. Get started with KYC verification now! <a href="https://script.viserlab.com/viserasset/user/kyc-form">Click Here to Submit Documents</a>
                            </p>
                        </div>
                    </div>
                
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                                    <div class="alert alert--danger mb-3" role="alert">
                        <div class="alert__icon"><i class="fas fa-exclamation-triangle"></i></div>
                        <div class="alert__content">
                            <h6 class="alert__title">Empty Balance</h6>
                            <p class="alert__desc"><i>Your balance is empty. Please make <a href="https://script.viserlab.com/viserasset/user/deposit" class="link-color">deposit</a> for your next investment.</i></p>
                        </div>
                    </div>
                
                
                
                
                                    <div class="alert alert--warning mb-3" role="alert">
                        <div class="alert__icon"><i class="fas fa-user-lock"></i>
                        </div>
                        <div class="alert__content">
                            <h6 class="alert__title">2FA Authentication</h6>
                            <p class="alert__desc"><i>To keep safe your account, Please enable <a href="https://script.viserlab.com/viserasset/user/twofactor" class="link-color">2FA</a> security.</i>
                                It will make secure your account and balance.</p>
                        </div>
                    </div>
                
            </div>
        </div>

        <div class="mb-4">
            <div class="row gy-4">
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet">
                                <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1" />
                                <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Deposit Wallet</p>
                            <h5 class="count">$0.00 USD</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-minimal">
                                <path d="M17 14h.01" />
                                <path d="M7 7h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Interest Wallet</p>
                            <h5 class="count">$0.00 USD</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M11.18 23.938c-.854.975.62 2.305 1.499 1.325a20.45 20.45 0 0 1 7.764-5.381c.3-.057.671.168 1.02.118.483-.01 11.874.067 11.931-.119a20.313 20.313 0 0 1 7.227 4.815.999.999 0 0 0 .719.304c.843.027 1.344-1.095.719-1.696-2.024-2.089-4.4-3.71-7.047-4.881.49-.87.46-1.953-.006-2.82C38.859 13.076 42.204 4.77 35.21 4H18.63c-1.24 0-2.4.55-3.185 1.507-2.525 3.264.728 8.159 3.389 10.095-.463.864-.498 1.942-.012 2.81-2.878 1.26-5.56 3.179-7.641 5.526zM21.465 18c-1.312-.023-1.318-1.98 0-2h10.912c1.312.02 1.318 1.976 0 2zm-3.483-6.085c-1.266-1.732-2.697-5.646.649-5.915h16.58c3.344.269 1.917 4.184.648 5.915a8.884 8.884 0 0 1-2.388 2.314A2.971 2.971 0 0 0 32.376 14H21.464c-.383 0-.748.093-1.094.23a8.87 8.87 0 0 1-2.389-2.315zM4 53.27c-.075 3.62 3.117 6.802 6.73 6.73h19.98a1 1 0 1 0 0-2H10.73a4.698 4.698 0 0 1-3.344-1.389c-2.365-2.213-1.527-6.477 1.455-7.685.505-.209.747-.85.506-1.34-2.745-5.744-2.518-12.894.578-18.411a1 1 0 0 0-1.75-.97C6.379 31.445 5.43 35.161 5.43 38.95c0 2.988.579 5.881 1.721 8.616-.42.268-.814.583-1.177.946A6.67 6.67 0 0 0 4 53.27zM59.165 40.236c-1.03-.094-2.031-.457-2.44-1.523-.457-.987.012-2.007.66-2.775a1 1 0 0 0-.108-1.288l-3.927-3.928a.998.998 0 0 0-1.288-.107l-.583.416c-1.27.978-3.388.134-3.597-1.49l-.118-.706a1 1 0 0 0-.987-.835h-5.554a1 1 0 0 0-.987.835l-.118.707c-.202 1.593-2.309 2.484-3.598 1.489-.549-.43-1.228-.938-1.87-.309l-3.927 3.928c-.619.645-.135 1.307.308 1.871.98 1.27.133 3.388-1.491 3.597l-.705.118a1 1 0 0 0-.835.986v5.556a1 1 0 0 0 .835.986l.706.118c1.595.205 2.486 2.305 1.49 3.598-.429.547-.936 1.229-.308 1.87l3.927 3.928a1 1 0 0 0 1.288.107c1.798-1.665 4.205-.677 4.298 1.78a1 1 0 0 0 .987.835h5.554a1 1 0 0 0 .987-.835l.118-.706c.203-1.594 2.306-2.485 3.598-1.49.547.429 1.227.936 1.87.309l3.927-3.928a1 1 0 0 0 .108-1.288c-1.664-1.797-.678-4.205 1.78-4.298a1 1 0 0 0 .835-.986v-5.556a1 1 0 0 0-.835-.986zM58 45.933c-2.892.471-4.456 4.205-2.734 6.6l-2.733 2.733c-2.373-1.709-6.127-.182-6.6 2.734h-3.866c-.277-1.402-1.223-2.559-2.585-3.121a4.24 4.24 0 0 0-4.015.387l-2.733-2.733c.797-1.191.943-2.683.373-4.049A4.234 4.234 0 0 0 30 45.934v-3.867c2.892-.471 4.456-4.205 2.734-6.6l2.733-2.733c2.378 1.71 6.125.181 6.6-2.734h3.866c.471 2.892 4.202 4.456 6.6 2.734l2.733 2.733c-1.708 2.376-.183 6.124 2.734 6.6v3.866z"
                                        fill="currentColor" opacity="1" data-original="currentColor"></path>
                                    <path d="M51.042 39.146a1 1 0 0 0-.416 1.352c2.69 4.81-1.108 11.13-6.626 11.002-4.014.086-7.586-3.481-7.5-7.5-.128-5.516 6.193-9.318 11.001-6.626a1 1 0 0 0 1.353-.416c.87-1.874-3.655-2.458-4.854-2.458-5.238 0-9.5 4.262-9.5 9.5.498 12.587 18.498 12.597 19 0 .007-1.193-.594-5.728-2.458-4.854z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                                    <path d="M43.466 41.795h2.67c1.313-.02 1.316-1.978 0-2H45v-.184c-.087-1.469-2.188-1.232-2 .232-3.072.6-2.688 5.103.466 5.157.54.05 1.644-.25 1.67.603 0 .332-.27.602-.602.602h-2.67a1 1 0 1 0 0 2H43c-.138 1.574 2.185 1.554 2-.048 3.072-.6 2.688-5.103-.466-5.157h-1.068c-.787-.003-.788-1.201 0-1.205z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                                </g>
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Total Invest</p>
                            <h5 class="count">$0.00 USD</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ticket">
                                <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                                <path d="M13 5v2" />
                                <path d="M13 17v2" />
                                <path d="M13 11v2" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Total Ticket                            </p>
                            <h5 class="count">1</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader">
                                <path d="M12 2v4" />
                                <path d="m16.2 7.8 2.9-2.9" />
                                <path d="M18 12h4" />
                                <path d="m16.2 16.2 2.9 2.9" />
                                <path d="M12 18v4" />
                                <path d="m4.9 19.1 2.9-2.9" />
                                <path d="M2 12h4" />
                                <path d="m4.9 4.9 2.9 2.9" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Pending Deposits</p>
                            <h5 class="count">$0.00 USD</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <g fill="currentColor">
                                        <path
                                            d="M18 7h.75a.75.75 0 0 0-.75-.75zm0 4h-.75zM6 7v-.75a.75.75 0 0 0-.75.75zm11.25 0v4h1.5V7zm0 4v8h1.5v-8zM16 20.25H8v1.5h8zM6.75 19V7h-1.5v12zM6 7.75h12v-1.5H6zm0-4h12v-1.5H6zM2.75 7A3.25 3.25 0 0 1 6 3.75v-1.5A4.75 4.75 0 0 0 1.25 7zM6 10.25A3.25 3.25 0 0 1 2.75 7h-1.5A4.75 4.75 0 0 0 6 11.75zM21.25 7A3.25 3.25 0 0 1 18 10.25v1.5A4.75 4.75 0 0 0 22.75 7zm1.5 0A4.75 4.75 0 0 0 18 2.25v1.5A3.25 3.25 0 0 1 21.25 7zm-5.5 12c0 .69-.56 1.25-1.25 1.25v1.5A2.75 2.75 0 0 0 18.75 19zM8 20.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 8 21.75zM13.47 13.116a.75.75 0 1 0 1.06-1.06zm-.763-1.823-.53.53zm-1.414 0 .53.53zm-1.823.763a.75.75 0 1 0 1.06 1.06zm1.78 4.53a.75.75 0 0 0 1.5 0zm1.5-5a.75.75 0 0 0-1.5 0zm1.78.47-1.293-1.293-1.06 1.06 1.293 1.293zm-3.767-1.293L9.47 12.055l1.06 1.061 1.293-1.293zm2.474 0a1.75 1.75 0 0 0-2.474 0l1.06 1.06a.25.25 0 0 1 .354 0zm-.487 5.823v-5h-1.5v5z"
                                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Total Deposits</p>
                            <h5 class="count">$0.00 USD</h5>
                        </div>
                    </div>
                </div>



                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-dashed">
                                <path d="M10.1 2.182a10 10 0 0 1 3.8 0" />
                                <path d="M13.9 21.818a10 10 0 0 1-3.8 0" />
                                <path d="M17.609 3.721a10 10 0 0 1 2.69 2.7" />
                                <path d="M2.182 13.9a10 10 0 0 1 0-3.8" />
                                <path d="M20.279 17.609a10 10 0 0 1-2.7 2.69" />
                                <path d="M21.818 10.1a10 10 0 0 1 0 3.8" />
                                <path d="M3.721 6.391a10 10 0 0 1 2.7-2.69" />
                                <path d="M6.391 20.279a10 10 0 0 1-2.69-2.7" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Pending Withdrawals</p>
                            <h5 class="count"> $0.00 USD</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <g fill="currentColor">
                                        <path
                                            d="M18 7h.75a.75.75 0 0 0-.75-.75zm0 4h-.75zM6 7v-.75a.75.75 0 0 0-.75.75zm11.25 0v4h1.5V7zm0 4v8h1.5v-8zM16 20.25H8v1.5h8zM6.75 19V7h-1.5v12zM6 7.75h12v-1.5H6zm0-4h12v-1.5H6zM2.75 7A3.25 3.25 0 0 1 6 3.75v-1.5A4.75 4.75 0 0 0 1.25 7zM6 10.25A3.25 3.25 0 0 1 2.75 7h-1.5A4.75 4.75 0 0 0 6 11.75zM21.25 7A3.25 3.25 0 0 1 18 10.25v1.5A4.75 4.75 0 0 0 22.75 7zm1.5 0A4.75 4.75 0 0 0 18 2.25v1.5A3.25 3.25 0 0 1 21.25 7zm-5.5 12c0 .69-.56 1.25-1.25 1.25v1.5A2.75 2.75 0 0 0 18.75 19zM8 20.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 8 21.75zM14.53 15.53a.75.75 0 1 0-1.06-1.06zm-3.237.763.53-.53zm-.763-1.823a.75.75 0 1 0-1.06 1.06zM12.75 11a.75.75 0 0 0-1.5 0zm-1.5 5a.75.75 0 0 0 1.5 0zm2.22-1.53-1.293 1.293 1.06 1.06 1.293-1.293zm-1.647 1.293L10.53 14.47l-1.06 1.06 1.293 1.293zm.354 0a.25.25 0 0 1-.354 0l-1.06 1.06a1.75 1.75 0 0 0 2.474 0zM11.25 11v5h1.5v-5z"
                                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Total Withdrawals</p>
                            <h5 class="count"> $0.00 USD</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-cards">
                                <rect width="18" height="18" x="3" y="3" rx="2" />
                                <path d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2" />
                                <path d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Deposit Wallet Invest                            </p>
                            <h5 class="count">$0.00 USD</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2m-1-1h5m-5 0a2 2 0 1 1 0-4m5 4v-4" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Interest Wallet Invest</p>
                            <h5 class="count">$0.00 USD</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18M3 16l5-5 4 4 6-6 3 3" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Running Invest                            </p>
                            <h5 class="count">$0.00 USD</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2m-1-1h5m-5 0a2 2 0 1 1 0-4m5 4v-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 20l3 3 5-5" />
                            </svg>

                        </span>
                        <div class="widget-card__content">
                            <p class="title">Completed Invest                            </p>
                            <h5 class="count">$0.00 USD</h5>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <div class="mb-4">
            <div class="card custom--card">
                <div class="card-header flex-between gap-2">
                    <h5 class="card-title">Latest Investments</h5>
                </div>
                <script>
    "use strict"

    function createCountDown(elementId, sec) {
        var tms = sec;
        var x = setInterval(function() {
            var distance = tms * 1000;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.getElementById(elementId).innerHTML = days + "d: " + hours + "h " + minutes + "m " +
                seconds + "s ";
            if (distance < 0) {
                clearInterval(x);
                document.getElementById(elementId).innerHTML = "COMPLETE";
            }
            tms--;
        }, 1000);
    }
</script>

<div class="card-body">
    <table class="table table--responsive--md">
        <thead>
            <tr>
                <th>
                    Investment Plan                </th>
                <th>Return</th>
                <th>Received</th>
                <th>Next payment</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                            <tr>
                    <td colspan="100%">
                        <div class="empty-message ">
    <p class="empty-message-icon">
        <img src="https://script.viserlab.com/viserasset/assets/templates/basic/images/no-data.gif" alt="image">
    </p>
    <p class="empty-message-text">No invest history found</p>
</div>                    </td>
                </tr>
            
        </tbody>
    </table>
</div>


            </div>
        </div>
    </div>

    
                </div>
            </div>
            
        </div>
    </div>

    
    
    <script src="https://script.viserlab.com/viserasset/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/viserasset/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/viserasset/assets/templates/basic/js/viewport.jquery.js"></script>
    <script src="https://script.viserlab.com/viserasset/assets/templates/basic/js/select2.min.js"></script>
    <script src="https://script.viserlab.com/viserasset/assets/templates/basic/js/lightcase.js"></script>
    <script src="https://script.viserlab.com/viserasset/assets/templates/basic/js/flatpickr.js"></script>
    <script src="https://script.viserlab.com/viserasset/assets/templates/basic/js/main.js"></script>

            <link href="https://script.viserlab.com/viserasset/assets/global/css/iziToast.min.css" rel="stylesheet">
<link href="https://script.viserlab.com/viserasset/assets/global/css/iziToast_custom.css" rel="stylesheet">
<script src="https://script.viserlab.com/viserasset/assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";
    const colors = {
        success: '#28c76f',
        error: '#eb2222',
        warning: '#ff9f43',
        info: '#1e9ff2',
    }

    const icons = {
        success: 'fas fa-check-circle',
        error: 'fas fa-times-circle',
        warning: 'fas fa-exclamation-triangle',
        info: 'fas fa-exclamation-circle',
    }

    const notifications = [];
    const errors = [];


    const triggerToaster = (status, message) => {
        iziToast[status]({
            title: status.charAt(0).toUpperCase() + status.slice(1),
            message: message,
            position: "topRight",
            backgroundColor: '#fff',
            icon: icons[status],
            iconColor: colors[status],
            progressBarColor: colors[status],
            titleSize: '1rem',
            messageSize: '1rem',
            titleColor: '#474747',
            messageColor: '#a2a2a2',
            transitionIn: 'obunceInLeft'
        });
    }

    if (notifications.length) {
        notifications.forEach(element => {
            triggerToaster(element[0], element[1]);
        });
    }

    if (errors.length) {
        errors.forEach(error => {
            triggerToaster('error', error);
        });
    }

    function notify(status, message) {
        if (typeof message == 'string') {
            triggerToaster(status, message);
        } else {
            $.each(message, (i, val) => triggerToaster(status, val));
        }
    }
</script>
    
    
    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://script.viserlab.com/viserasset/change/" + $(this).val();
            });

            $('.policy').on('click', function() {
                $.get('https://script.viserlab.com/viserasset/cookie/accept', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            $('.select2').each(function(index, element) {
                $(element).select2();
            });


            $('.select2-basic').each(function(index, element) {
                $(element).select2({
                    dropdownParent: $(element).closest('.select2-parent')
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            var inputElements = $('[type=text],[type=password],select,textarea');
            $.each(inputElements, function(index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });


            $.each($('input:not([type=checkbox]):not([type=hidden]), select, textarea'), function(i, element) {

                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }

            });

            $('.showFilterBtn').on('click', function() {
                $('.responsive-filter-card').slideToggle();
            });

            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title], [data-title], [data-bs-title]'))
            tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });


            let disableSubmission = false;
            $('.disableSubmission').on('submit', function(e) {
                if (disableSubmission) {
                    e.preventDefault()
                } else {
                    disableSubmission = true;
                }
            });

            Array.from(document.querySelectorAll('table')).forEach(table => {
                let heading = table.querySelectorAll('thead tr th');
                Array.from(table.querySelectorAll('tbody tr')).forEach((row) => {
                    Array.from(row.querySelectorAll('td')).forEach((colum, i) => {
                        colum.setAttribute('data-label', heading[i].innerText)
                    });
                });
            });

        })(jQuery);
    </script>
    
    <script>
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>

<script>
if (window.top != window.self) {
    document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="'+window.self.location+'" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
}
</script>


<script>
    adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
    adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
    adroll_version = "2.0";
    (function(w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll  = w.adroll  || [];
        w.adroll.f = [ 'setProperties', 'identify', 'track' ];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                return function() {
                    w.adroll.push([ n, arguments ])
                }
            })(w.adroll.f[a])
        }
        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async  = 1;
        e.src  = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1ME4K0RD7K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1ME4K0RD7K');
</script>

</body>

</html>
