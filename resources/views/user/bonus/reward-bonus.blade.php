<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Reward Bonus</h2>
            <!-- <div class="flex-align gap-2">
                <a href="{{route('user.ticket')}}"
                    class="btn btn--sm btn--base "> <i class="fas fa-plus"></i>
                    New Ticket</a>
            </div> -->
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <!-- <div class="card-header">
                        <form class="table-search-wrapper">
                            <div class="input-group style-left">
                                <input type="text" class="form-control form--control md-style" name="search" placeholder="Search by Name, Username, Email" value="{{ request()->search }}">
                                <button class="input-group-text">
                                    <img src="{{asset('')}}user/images/search.png" width="20" height="20" alt="">
                                </button>
                            </div>
                        </form>
                    </div> -->
                   <div class="card-body">
                       <table class="table table table--responsive--md">
                           <thead>
                               <tr>
                                   <th>Sr No</th>
                                   <th>Rank</th>
                                   <th>Leg 1</th>
                                   <th>Leg 2</th>
                                   <th>Leg 3</th>
                                   <th>Status</th>
                                   <th>Rewards</th>
                               </tr>
                           </thead>
                           <tbody>
   <tbody>
    @php
        // Collect all approved reward levels
        $approvedLevels = collect($rewardIncomes)
            ->where('status', 'Approved')
            ->pluck('level')
            ->map(function ($v) { return (int) $v; })
            ->unique()
            ->toArray();
    @endphp

    @foreach([
        ['rank' => 'Manager', 'reward' => '5000'],
        ['rank' => 'Form Manager', 'reward' => '15000'],
        ['rank' => 'Sen. Form Manager', 'reward' => '40000'],
        ['rank' => 'Asso Manager', 'reward' => '1 Lakh'],
        ['rank' => 'Asso Sen. Manager', 'reward' => '2.5 Lakh'],
        ['rank' => 'Platinum Rank', 'reward' => '7.5 Lakh'],
        ['rank' => 'Diamond', 'reward' => '20 Lakh'],
        ['rank' => 'Green Diamond', 'reward' => '50 Lakh'],
        ['rank' => 'Crown Diamond', 'reward' => '1 Cr'],
        ['rank' => 'Ambassador', 'reward' => '2 Cr'],
        ['rank' => 'Crown Ambassador', 'reward' => '5 Cr'],
    ] as $i => $row)
        @php
            $level = $i + 1;
            $highlight = in_array($level, $approvedLevels);
        @endphp

        <tr @if($highlight) style="background-color: #d4edda" @endif>
            <td>{{ $level }}</td>
            <td>{{ $row['rank'] }}</td>
            <td>{{ $level }} Lakh</td>
            <td>{{ $level }} Lakh</td>
            <td>{{ $level }} Lakh</td>            
            <td>{{ $row['reward'] }}</td>
            <td>{{ $highlight ? 'Approved' : 'Pending' }}</td>
        </tr>
    @endforeach
</tbody>

</tbody>

                       </table>
                   </div>
                </div>


            </div>
        </div>
    </div>

</div>