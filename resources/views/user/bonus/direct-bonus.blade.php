
<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Direct Income</h2>
            <!-- <div class="flex-align gap-2">
                <a href="{{route('user.ticket')}}"
                    class="btn btn--sm btn--base "> <i class="fas fa-plus"></i>
                    New Ticket</a>
            </div> -->
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <div class="card-body">
                        <table class="table table table--responsive--md">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>User Id</th>
                                    <th>Package</th>
                                    <th>Amount</th>
                                    <th>Remarks</th>
                                    <th>payment system</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (is_array($level_income) || is_object($level_income)) { ?>
                                        <?php date_default_timezone_set('UTC');
                                        $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                        @foreach ($level_income as $value)
                                <tr>
                                    <td> {{ $cnt + $loop->iteration }}
                                    </td>
                                    <td>
                                        <span class="badge badge--success">{{ $value->user_id_fk }}</span>
                                    </td>
                                    <td>
                                        {{ $value->amt }}
                                    </td>
                                    <td>{{ $value->comm }} {{ generalDetail()->cur_text }}</td>

                                    <td>
                                         {{ $value->remarks }} 
                                    </td>
                                    <td>
                                        {{ generalDetail()->cur_text }}
                                    </td>
                                </tr>
                                @endforeach

                                    <?php } ?>

                                </tbody>
                            </table>
                            
                            </tbody>
                            </tbody>

                        </table>

                    </div>
                    {{ $level_income->withQueryString()->links() }}
                </div>


            </div>
        </div>
    </div>

</div>