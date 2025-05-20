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
                            <input type="hidden" name="network" value="{{ $bankDetails->network }}" autocomplete="off">
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
                <label class="form--label">Amount <span data-bs-toggle="tooltip" data-bs-title="Upload the image of front side of your NID"></span>   </label>
                                    <input type="number"
                    class="form-control form--control md-style"
                    value="{{ $amount }}" readonly name="amount">                    
                            </div>
        </div>
         <!-- <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Wallet Address <span data-bs-toggle="tooltip" data-bs-title="Upload the image of front side of your NID"></span>   </label>
                                    <input type="number"
                    class="form-control form--control md-style"
                    name="wallet_address" readonly value="{{ $wallet_address }}">                    
                            </div>
        </div> -->
            <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Transaction Hash<span data-bs-toggle="tooltip" data-bs-title="Upload the image of back side of your NID"></span>   </label>
                                  <input type="Text"
                    class="form-control form--control md-style"
                    placeholder="upload reciep" placeholder="enter transaction id" name="txHash">
                            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Upload Reciept<span data-bs-toggle="tooltip" data-bs-title="Upload the image of back side of your NID"></span>   </label>
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

    