                   <div class="content-body">
            <div class="container-fluid">
                   <div class="row">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bank Details</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('user.bank-update')}}" method="POST">
                            @csrf
                                <div class="row form-material">
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label class="form-label">Account Number</label>
                                        <input type="text" id="date-format" value="" name="account_number" class="form-control" placeholder="Account Number">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label class="form-label">Account Holder</label>
                                        <input type="text" id="date-format" value="" name="account_holder" class="form-control" placeholder="Account Holder">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label class="form-label">Bank Name</label>
                                        <input class="form-control" id="timepicker" value="" name="bank_name" placeholder="Check time">
                                    </div>                                    
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label class="form-label">Branch Name</label>
                                        <input class="form-control" id="timepicker" value="" name="branch_name" placeholder="Check time">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6">
                                        <label class="form-label">IFSC Code</label>
                                        <div class="input-group mb-3">
											<input class="form-control" id="timepicker" value="" name="ifsc_code" placeholder="Check time">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6">
                                        <label class="form-label">Send Bank Details</label>
                                        <div class="input-group mb-3">
											<button class="btn btn-primary" type="submit">Button</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    </div>
                    </div>
                    @include('partials.notify')