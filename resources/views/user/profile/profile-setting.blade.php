                   <div class="content-body">
            <div class="container-fluid">
                   <div class="row">
                   <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profile</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.update-profile') }}" method="POST">
                            @csrf

                                <div class="row form-material">
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label class="form-label">Registration Date</label>
                                        <p class="form-control">{{ date('m/d/Y h:i:s a',strtotime($profile_data->created_at)) }}</p>
                                    </div>
                                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label class="form-label">User Name</label>
                                        <input type="text" id="date-format" value="{{ $profile_data->name }}" name="name" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input class="form-control" id="timepicker" value="{{ $profile_data->email }}" name="email" placeholder="Check time">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6">
                                        <label class="form-label">Min Date set</label>
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