	<div class="content-body">
	    <div class="container-fluid">
	        <!-- Row -->
	        <div class="row">
	            <div class="col-xl-12">
	                <div class="filter cm-content-box box-primary">
	                    <div class="content-title">
	                        <div class="cpa">
	                            <i class="fa-sharp fa-solid fa-filter me-2"></i>Filter
	                        </div>
	                        <div class="tools">
	                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
	                        </div>
	                    </div>
	                    <div class="cm-content-body form excerpt">

	                        <form action="{{ route('user.DepositHistory') }}" method="GET">
	                            <div class="card-body">
	                                <div class="row">
	                                    <div class="col-xl-3 col-sm-6">
	                                        <input type="text"name="title" class="form-control mb-xl-0 mb-3" id="exampleFormControlInput1" placeholder="Title"value="{{ @$search }}">
	                                    </div>
	                                    <div class="col-xl-3  col-sm-6 mb-3 mb-xl-0">
	                                        <select class="nice-select form-control default-select dashboard-select-2 h-auto wide" aria-label="Default select example">
	                                            <option selected>Select Status</option>
	                                            <option value="1">Published</option>
	                                            <option value="2">Draft</option>
	                                            <option value="3">Trash</option>
	                                            <option value="4">Private</option>
	                                            <option value="5">Pending</option>
	                                        </select>
	                                    </div>
	                                    <div class="col-xl-3 col-sm-6">
	                                        <input type="search" name="search" class="form-control mb-3 mb-xl-0" placeholder="2017-06-04" id="datepicker">
	                                    </div>
	                                    <div class="col-xl-3 col-sm-6">
	                                        <button class="btn btn-primary" title="Click here to Search" type="button"><i class="fa fa-search me-1"></i>Filter</button>
	                                        <button class="btn btn-danger light" title="Click here to remove filter" type="button">Remove</button>
	                                    </div>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	                <div class="mb-4">
	                    <a href="#" class="btn btn-primary">Add Content</a>
	                </div>
	                <div class="filter cm-content-box box-primary">
	                    <div class="content-title">
	                        <div class="cpa">
	                            <i class="fa-solid fa-file-lines me-1"></i>Deposit Report
	                        </div>
	                        <div class="tools">
	                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
	                        </div>
	                    </div>
	                    <div class="cm-content-body form excerpt">
	                        <div class="card-body pt-2">
	                            <div class="table-responsive">

	                                <table class="table table-responsive-sm mb-0">
	                                    <thead>
	                                        <tr>
	                                            <th style="">
	                                                <div class="form-check">
	                                                    <input class="form-check-input" type="checkbox" value="" id="checkAll">
	                                                    <label class="form-check-label" for="checkAll">

	                                                    </label>
	                                                </div>
	                                            </th>
	                                            <th><strong>S.No</strong></th>
	                                            <th><strong>User Id</strong></th>
	                                            <th><strong>Amount</strong></th>
	                                            <th><strong>Date</strong></th>
	                                            <th><strong>Payment Mode</strong></th>
	                                            <th><strong>Status</strong></th>
	                                            <th style="width:85px;"><strong>Actions</strong></th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <?php if (is_array($deposit_list) || is_object($deposit_list)) { ?>

	                                            <?php $cnt = 0; ?>
	                                            @foreach($deposit_list as $value)
	                                            <tr>
	                                                <td>
	                                                    <div class="form-check">
	                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
	                                                        <label class="form-check-label" for="flexCheckDefault-1">

	                                                        </label>
	                                                    </div>
	                                                </td>



	                                                <td><b><?= $cnt += 1 ?></b></td>
	                                                <td>{{ $value->user_id_fk }}</td>
	                                                <td>{{currency()}} {{ $value->amount }}</< /td>
	                                                <td>{{ $value->created_at}}</< /td>
	                                                <td>{{ $value->payment_mode}}</td>
	                                                <td class="recent-stats"><i class="fa fa-circle text-success me-1"></i>{{ $value->status}}</< /td>
	                                                <td>
	                                                    <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-pencil"></i></a>
	                                                    <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp rounded-circle"><i class="fa fa-trash"></i></a>
	                                                </td>
	                                            </tr>
	                                            @endforeach

	                                        <?php } ?>
	                                    </tbody>
	                                </table>
	                                {{ $deposit_list->withQueryString()->links() }}


	                            </div>
	                            <div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center mt-3">
	                                <small class="mb-xl-0 mb-2">Page 1 of 5, showing 2 records out of 8 total, starting on record 1, ending on 2</small>
	                                <nav aria-label="Page navigation example">
	                                    <ul class="pagination mb-2 mb-sm-0">
	                                        <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a></li>
	                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
	                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
	                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
	                                        <li class="page-item"><a class="page-link " href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a></li>
	                                    </ul>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>