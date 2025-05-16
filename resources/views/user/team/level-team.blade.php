<div class="card-body">
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <input type="text" class="form-control mb-xl-0 mb-3" name="search" placeholder="Search by Name, Username, Email" value="{{ request()->search }}">
        </div>
        <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
            <select class="nice-select form-control default-select dashboard-select-2 h-auto wide" name="status">
                <option>Select Status</option>
                <option value="Active" {{ request()->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="Pending" {{ request()->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            </select> 
        </div>
        <div class="col-xl-3 col-sm-6">
            <input type="date" class="form-control mb-3 mb-xl-0" name="date" value="{{ request()->date }}">
        </div>
        <div class="col-xl-3 col-sm-6">
            <button class="btn btn-primary" type="submit" title="Click here to Search"><i class="fa fa-search me-1"></i>Filter</button>
            <a href="{{ route('user.level-team') }}" class="btn btn-danger light" title="Click here to remove filter">Remove</a>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-responsive-sm mb-0">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Joining Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($direct_team as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->jdate }}</td>
                    <td class="recent-stats">
                        <i class="fa fa-circle {{ $user->active_status == 'Active' ? 'text-success' : 'text-warning' }} me-1"></i>
                        {{ ucfirst($user->active_status) }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No records found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center mt-3">
    {{ $direct_team->appends(request()->query())->links() }}
</div>
