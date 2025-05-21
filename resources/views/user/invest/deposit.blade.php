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
                                    <label class="form--label">Enter Amount</label>
                                    <input type="number" class="form-control form--control md-style"
                                      name="amount" min="25000" placeholder="Enter Amount" step="25000" required id="amountInput">
                                      <p id="amountError" class="text-danger" style="font-size:13px; margin-top: 5px;"></p>
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
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById('depositForm');
        const input = document.getElementById('amountInput');
        const messagePara = input.nextElementSibling; // Gets the <p> right after the input

        // ✅ Show value change in console
        input.addEventListener('input', function () {

            // Clear previous error message as user types
            messagePara.textContent = '';
        });

        // ✅ Validation on form submission
        form.addEventListener('input', function (e) {
            const value = parseInt(input.value);
            const min = 25000;
            const step = 25000;

            if (isNaN(value) || value < min || value % step !== 0) {
                e.preventDefault();

                // Show error message in the <p> tag
                messagePara.textContent = 'Amount must be at least 25000 and in multiples of 25000';
                messagePara.style.color = 'red';

                return false;
            }
        });
    });
</script>





