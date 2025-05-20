
<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Direct Team</h2>
            <!-- <div class="flex-align gap-2">
                <a href="{{route('user.ticket')}}"
                    class="btn btn--sm btn--base "> <i class="fas fa-plus"></i>
                    New Ticket</a>
            </div> -->
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <div class="card-header">
                            <form class="table-search-wrapper">
                                <div class="input-group style-left">
                                    <input type="text" class="form-control form--control md-style" name="search" placeholder="Search by Name, Username, Email" value="{{ request()->search }}">
                                    <button class="input-group-text">
                                        <i class="las la-search">Search</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    <div class="card-body">
                        <table class="table table table--responsive--md">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
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
                                    <td>{{ $index + 1 }}
                                    </td>
                                    <td>
                                        <span>{{ $user->username }}</span>
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>{{ $user->email }}</td>

                                    <td>{{ $user->phone }}
                                    </td>
                                    <td>
                                        {{ $user->jdate }}
                                    </td>
                                    <td>
                                        <span class="{{ $user->active_status == 'Active' ? 'badge badge--success' : 'badge badge--danger' }}">{{ ucfirst($user->active_status) }}</span>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="100%">
                                            <div class="empty-message ">
                                                <p class="empty-message-icon">
                                                    <img src="https://script.viserlab.com/viserasset/assets/templates/basic/images/no-data.gif"
                                                        alt="image">
                                                </p>
                                                <p class="empty-message-text">No deposit history found</p>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            
                            </tbody>
                            </tbody>

                        </table>

                    </div>
                    {{ $direct_team->appends(request()->query())->links() }}
                </div>


            </div>
        </div>
    </div>

</div>