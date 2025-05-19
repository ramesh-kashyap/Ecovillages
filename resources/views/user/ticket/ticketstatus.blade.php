@include('layouts.upnl.header')
  <div class="dashboard-body">

                    <div class="container-fluid">
                        <div class="flex-between mb-32 gap-3">
                            <h2 class="fs-30">Support Tickets</h2>
                            <div class="flex-align gap-2">
                                <a href="{{route('user.ticket')}}"
                                    class="btn btn--sm btn--base "> <i class="fas fa-plus"></i>
                                    New Ticket</a>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-12">
                                <div class="card custom--card h-100">
                                    <div class="card-body">
                                        <table class="table table table--responsive--md">
                                            <thead>
                                                <tr>
                                                    <th>Subject</th>
                                                    <th>Status</th>
                                                    <th>Priority</th>
                                                    <th>Last Reply</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> <a href="https://script.viserlab.com/viserasset/ticket/view/270604"
                                                            class="fw-bold">
                                                            [Ticket#270604] Hyey </a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--success">Open</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge--danger">High</span>
                                                    </td>
                                                    <td>54 minutes ago </td>

                                                    <td>
                                                        <a href="https://script.viserlab.com/viserasset/ticket/view/270604"
                                                            class="btn btn--light btn--sm">
                                                            <i class="fas fa-desktop"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>

                </div>
@include('layouts.upnl.footer')
