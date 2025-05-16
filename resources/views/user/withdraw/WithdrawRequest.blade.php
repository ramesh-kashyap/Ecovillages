





 <div class="content-body">
            <div class="container-fluid">

<div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Withdraw</h4>
                            </div>
                            <div class="px-2">
                              <p>{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}</p>
                            </div>
                            
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="depositForm" method="post" action="{{route('user.Withdraw-Request')}}">
                                         @csrf
                                        <div class="mb-3">
                                            <input type="number" class="form-control input-default" placeholder="Enter Amount" name="amount"  required>
                                        </div>
                                        <!-- <div class="mb-3">
                                            <select class="default-select form-control wide mb-3" name="network" id="network">											
											<option  value="bank-transfer">BANK TRANSFER</option>
										    </select>
                                        </div> -->
                                        <div class="mb-3">
                                            <input type="password" class="form-control input-default" placeholder="Enter Transaction Password" name="transaction_password"  required>
                                        </div>
                                        <div class="col-12">
                                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
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
        @include('partials.notify')