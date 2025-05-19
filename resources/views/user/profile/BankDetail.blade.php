<div class="dashboard-body">

    <div class="container-fluid py-60">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-lg-10">
                <div class="card custom--card">
                    <div class="card-header">
                        <h5 class="card-title">Bank Details</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.bank-update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Account Number</label>
                                        <input type="number" class="form-control form--control md-style md-style" value=""
                                            placeholder="Account Number" name="account_number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Account Holder</label>
                                        <input type="text" class="form-control form--control md-style"
                                            name="account_holder" placeholder="Account Holder" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Branch Holder</label>
                                        <input type="text" class="form-control form--control md-style"
                                            name="branch_name" placeholder="Branch Holder" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">Bank Name</label>
                                        <input type="text" class="form-control form--control md-style md-style"
                                            placeholder="Account Number" name="bank_name" placeholder="Check time"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form--label">IFSC Code</label>
                                        <input type="text" class="form-control form--control md-style"
                                            name="ifsc_code" placeholder="Check time" step="any" required>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">NID Front Side  <span data-bs-toggle="tooltip" data-bs-title="Upload the image of front side of your NID"><i class="fas fa-info-circle"></i></span>   </label>
                                    <input
                    type="file"
                    class="form-control form--control md-style"
                    name="nid_front_side"
                     required                     accept=" .jpg,  .jpeg,  .png, "
                    >
                    <pre class="text--base mt-1">Supported mimes: jpg,jpeg,png</pre>
                            </div>
        </div>
            <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">NID Back Side  <span data-bs-toggle="tooltip" data-bs-title="Upload the image of back side of your NID"><i class="fas fa-info-circle"></i></span>   </label>
                                    <input
                    type="file"
                    class="form-control form--control md-style"
                    name="nid_back_side"
                     required                     accept=" .jpg,  .jpeg,  .png, "
                    >
                    <pre class="text--base mt-1">Supported mimes: jpg,jpeg,png</pre>
                            </div>
        </div> -->
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
