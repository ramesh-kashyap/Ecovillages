<div class="dashboard-body">

    <div class="container-fluid py-60">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-lg-10">
                <div class="card custom--card">
                    <div class="card-header">
                        <h5 class="card-title">Deposit</h5>
                    </div>
                    <div class="card-body">
                        <form id="depositForm" method="post"
                            action="{{ route('user.confirmDeposit') }}">
                            @csrf
                            <!-- <input type="hidden" name="_token" value="wQAMB8LqAZT4SPIOLVY6kKpuDYUltnNJPNvTVECF" autocomplete="off"> -->
                            <div class="row">
                                <!-- <div class="col-md-6"> -->
                                <div class="form-group">
                                    <label class="form--label">Amount</label>
                                    <input type="number" class="form-control form--control md-style"
                                      name="amount" min="25000" step="25000" required id="amountInput">
                                </div>
                                <!-- </div> -->
                                <!-- <div class="col-md-6">
            <div class="form-group">
                <label class="form--label">Email   </label>
                                    <input type="email"
                    class="form-control form--control md-style"
                    name="email"
                    value=""
                     required >
                            </div>
        </div> -->
                                <!-- <div class="col-md-6">-->
                                <div class="form-group">
                                    <label class="form--label">Network</label>
                                    <select class="form-select form--control md-style select2" name="network"
                                        id="network" data-minimum-results-for-search="-1" name="gender" required>
                                        <option value="bank-transfer">BANK TRANSFER</option>
                                        <!-- <option value="usdtBep20">USDT.BEP20</option> -->
                                    </select>
                                    <!-- </div> -->
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
<script>
    "use strict";
    document.getElementById('depositForm').addEventListener('submit', function(e) {
        
        const input = document.getElementById('amountInput');
        console.log(input);
        const value = parseInt(input.value);
        const min = 25000;
        const step = 25000;

        // Validate amount
        if (isNaN(value) || value < min || value % step !== 0) {
            e.preventDefault(); // Stop form submission
            
            // Show iziToast popup error
            iziToast.error({
                message: 'Amount must be at least 25000 and in multiples of 25000',
                position: "topRight"
            });

            return false;
        }
    });
</script>

