<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">My Profile</h2>
        </div>
        <div class="mb-4">
            <div class="row gy-4">
                <div class="col-lg-5 col-xxl-4">
                    <div class="card custom--card h-100">
                        <div class="card-body">
                            <div class="profile-preview mb-4">
                                <div class="profile-preview__banner"></div>
                                <div class="profile-preview__thumb">
                                    <img id="preview-image"
                                        src="https://script.viserlab.com/viserasset/assets/images/avatar.png"
                                        alt="Profile Preview" />
                                </div>
                            </div>

                            <div class="personal-info">
                                <h6 class="mb-3">Personal Information</h6>
                                <ul class="personal-info__list">
                                    <li class="personal-info__item">
                                        <span class="title">First Name</span>
                                        <span class="devide">:</span>
                                        <span class="desc">{{ $profile_data->name }}</span>
                                    </li>
                                    <li class="personal-info__item">
                                        <span class="title">Last Name</span>
                                        <span class="devide">:</span>
                                        <span class="desc">{{ $profile_data->lastname }}</span>
                                    </li>
                                    <li class="personal-info__item">
                                        <span class="title">Email</span>
                                        <span class="devide">:</span>
                                        <span class="desc">{{ $profile_data->email }}</span>
                                    </li>
                                    <li class="personal-info__item">
                                        <span class="title">Mobile</span>
                                        <span class="devide">:</span>
                                        <span class="desc">{{ $profile_data->phone }}</span>
                                    </li>
                                    <li class="personal-info__item">
                                        <span class="title">Address</span>
                                        <span class="devide">:</span>
                                        <span class="desc">{{ $profile_data->address }}</span>
                                    </li>
                                    <li class="personal-info__item">
                                        <span class="title">State</span>
                                        <span class="devide">:</span>
                                        <span class="desc">{{ $profile_data->state }}</span>
                                    </li>
                                    <li class="personal-info__item">
                                        <span class="title">Zip Code</span>
                                        <span class="devide">:</span>
                                        <span class="desc">{{ $profile_data->zipCode }}</span>
                                    </li>
                                    <li class="personal-info__item">
                                        <span class="title">City</span>
                                        <span class="devide">:</span>
                                        <span class="desc">{{ $profile_data->city }}</span>
                                    </li>
                                    <li class="personal-info__item">
                                        <span class="title">Country</span>
                                        <span class="devide">:</span>
                                        <span class="desc">{{ $profile_data->country }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl-8">
                    <div class="card custom--card profile-card h-100">
                        <div class="card-body">
                            <form class="register" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token"
                                    value="wQAMB8LqAZT4SPIOLVY6kKpuDYUltnNJPNvTVECF" autocomplete="off">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form--label fs-14">Profile Image</label>
                                            <label for="profile-image" class="file-upload">
                                                <input type="file" name="profile_image"
                                                    id="profile-image" class="d-none"
                                                    accept=".jpg, .png, .jpeg" />
                                                <span class="file-upload__thumb">
                                                    <img id="upload-thumb"
                                                        src="https://script.viserlab.com/viserasset/assets/images/avatar.png"
                                                        alt="Upload Thumbnail" />

                                                </span>
                                                <span class="file-upload__icon">
                                                    <i class="fa-solid fa-camera"></i>
                                                </span>
                                            </label>
                                            <div class="mt-2">
                                                <small class="mt-3"> Supported Files:<b>.png, .jpg,
                                                        .jpeg.</b>
                                                    Image will be resized into <b> 80x80</b>px </small>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name" class="form--label fs-14">First
                                                Name</label>
                                            <input type="text" id="name" name="firstname"
                                                value="Rameshk" class="form--control md-style" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="lastname" class="form--label fs-14">Last
                                                Name</label>
                                            <input type="lastname" id="email" name="lastname"
                                                value="Kashyap" class="form--control md-style" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form--label fs-14">Address</label>
                                            <input type="text"
                                                class="form-control form--control md-style"
                                                name="address" value="Ramnagar">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form--label fs-14">State</label>
                                            <input type="text"
                                                class="form-control form--control  md-style"
                                                name="state" value="Haryana">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="city" class="form--label fs-14">Zip Code</label>
                                            <input type="text"
                                                class="form-control form--control md-style" name="zip"
                                                value="132103">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="state" class="form--label fs-14">City</label>
                                            <input type="text"
                                                class="form-control form--control md-style" name="city"
                                                value="Panipat">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn--base btn--md w-100">
                                            Update Profile </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('partials.notify')

<script>
    $('#profile-image').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                $('#preview-image').attr('src', e.target.result);
                $('#upload-thumb').attr('src', e.target.result);
            };

            reader.readAsDataURL(file);
        }
    });
</script> -->