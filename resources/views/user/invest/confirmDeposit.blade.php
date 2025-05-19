@include('layouts.upnl.header')

<div class="dashboard-body">

                        <div class="container-fluid py-60">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-lg-10">
                <div class="card custom--card">
                    <div class="card-header">
                        <h5 class="card-title">Deposit</h5>
                    </div>
                    <div class="card-body">
                        <form  method="POST" action="{{ route('user.fundActivation') }}">
                            @csrf
                            <!-- <input type="hidden" name="_token" value="wQAMB8LqAZT4SPIOLVY6kKpuDYUltnNJPNvTVECF" autocomplete="off"> -->
                            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Company Ac. Number</label>
                                    <input type="number"
                    class="form-control form--control md-style md-style"
                    name="account_no" readonly value="{{ $bankDetails->account_no }}"
                     required >
                            </div>
        </div>
            <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">IFSC Code</label>
                                    <input type="text"
                    class="form-control form--control md-style"
                    name="ifsc_code" readonly value="{{ $bankDetails->ifsc_code }}"
                     required                     >
                            </div>
        </div>
            <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Branch Name</label>
                <input type="Text"
                    class="form-control form--control md-style"
                    name="branch_name" readonly value="{{ $bankDetails->branch_name }}"
                    step="any" required>
                            </div>
        </div>
            <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Bank Name </label>
                                    <input type="Text"
                    class="form-control form--control md-style"
                   name="bank_name" readonly value="{{ $bankDetails->bank_name }}">
                            </div>
        </div>
            <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Amount <span data-bs-toggle="tooltip" data-bs-title="Upload the image of front side of your NID"><i class="fas fa-info-circle"></i></span>   </label>
                                    <input type="number"
                    class="form-control form--control md-style"
                    value="{{ $amount }}" readonly name="amount">                    
                            </div>
        </div>
         <!-- <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Wallet Address <span data-bs-toggle="tooltip" data-bs-title="Upload the image of front side of your NID"><i class="fas fa-info-circle"></i></span>   </label>
                                    <input type="number"
                    class="form-control form--control md-style"
                    name="wallet_address" readonly value="{{ $wallet_address }}">                    
                            </div>
        </div> -->
            <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Transaction Hash<span data-bs-toggle="tooltip" data-bs-title="Upload the image of back side of your NID"><i class="fas fa-info-circle"></i></span>   </label>
                                  <input type="Text"
                    class="form-control form--control md-style"
                    placeholder="upload reciep" placeholder="enter transaction id" name="txHash">
                            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Upload Reciept<span data-bs-toggle="tooltip" data-bs-title="Upload the image of back side of your NID"><i class="fas fa-info-circle"></i></span>   </label>
                                  <input
                    type="file"
                    class="form-control form--control md-style"
                    name="account"
                     required                     accept=" .jpg,  .jpeg,  .png, "
                    >
                    <pre class="text--base mt-1">Supported mimes: jpg,jpeg,png</pre>
                            </div>
        </div>
    </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn--base w-100">Submit</button>
                            </div>
                        </form>
                    </div>
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

    const notifications = [["error","You are not KYC verified. For being KYC verified, please provide these information"]];
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
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
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
