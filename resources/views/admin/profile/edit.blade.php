@extends('layout.mainlayout_admin')
@section('title', 'Edit Profile')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Profile Information -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <form method="POST" action="{{ route('profile.update', $admin) }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <!-- Basic -->
                            <div class="col-md-12">
                                <div class="pro-title d-flex justify-content-between">
                                    <h6>Personal information</h6>
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-4 mb-3">
                                    <label for="name_en">Name EN</label>
                                    <input type="text" class="form-control" id="name_en" name="name_en"
                                        placeholder="name" value="{{ $admin->name_en }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="name_ar">Name AR</label>
                                    <input type="text" class="form-control" id="name_ar" name="name_ar"
                                        placeholder="name" value="{{ $admin->name_ar }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="email" value="{{ $admin->email }}" required>
                                </div>
                                @if ($admin->username ?? '')
                                    <div class="col-md-4 mb-3">
                                        <label for="username">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="username">@</span>
                                            <input type="text" readonly class="form-control" id="username"
                                                name="username" placeholder="Username" value="{{ $admin->username }}"
                                                required>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-4 mb-3">
                                        <label for="username">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="username">@</span>
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="Username" required>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-4 mb-3">
                                    <label for="mobile">Phone number</label>
                                    <input type="tel" class="form-control" id="mobile" name="mobile"
                                        placeholder="+12345678" value="{{ $admin->mobile }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="profile_image">Profile Image</label>
                                    <input id="profile_image" name="profile_image" class="form-control" type="file">
                                </div>
                            </div>
                            <!-- Description -->
                            <div class="form-row row">
                                <label for="description" class="col-form-label col-md-2">Description</label>
                                <div class="col-md-12 mb-3">
                                    <textarea rows="5" cols="5" id="description" name="description" class="form-control"
                                        placeholder="Enter text here">{{ $admin->description }}</textarea>
                                </div>
                            </div>
                            <!-- Personal Info -->
                            <div class="form-row row">
                                <div class="col-md-4 mb-3">
                                    <label for="date_of_birth">Date of birth</label>
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                                        placeholder="date_of_birth" value="{{ $admin->date_of_birth }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="gender">Gender</label>
                                    <div class="col-md-10">
                                        <select id="gender" name="gender" class="form-select select">
                                            <option>-- Select Gender --</option>
                                            <option value="M" {{ $admin->gender == 'M' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="F" {{ $admin->gender == 'F' ? 'selected' : '' }}>Female
                                            </option>
                                            <option value="O" {{ $admin->gender == 'O' ? 'selected' : '' }}>Others
                                            </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" id="age" name="age"
                                        placeholder="Enter you age" value="{{ $admin->age }}" required>
                                </div>
                            </div>
                            <!-- Address -->
                            <div class="form-row row">
                                <div class="col-md-12 mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Address" value="{{ $admin->address }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" placeholder="Country"
                                        name="country" value="{{ $admin->country }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="state" name="state"
                                        placeholder="State" value="{{ $admin->state }}" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="zip_code">Zip Code</label>
                                    <input type="text" class="form-control" id="zip_code" name="zip_code"
                                        placeholder="Zip Code" value="{{ $admin->zip_code }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="pro-title">
                                    <h6>Social media links</h6>
                                    <p>Please provide correct links to make you accessible.</p>
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="col-md-4 mb-3">
                                    <label for="twitter">Twitter Profile Link</label>
                                    <input type="url" class="form-control" id="twitter" name="twitter"
                                        placeholder="https://www.twitter.com/" value="{{ $admin->twitter }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="facebook">Facebook Profile link</label>
                                    <input type="url" class="form-control" id="facebook" name="facebook"
                                        placeholder="https://www.facebook.com/" value="{{ $admin->facebook }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="linkedin">Linkedin Profile link</label>
                                    <input type="url" class="form-control" id="linkedin" name="linkedin"
                                        placeholder="https://www.linkedn.com/" value="{{ $admin->linkedin }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="instagram">Instagram Profile link</label>
                                    <input type="url" class="form-control" id="instagram" name="instagram"
                                        placeholder="https://www.instagram.com/" value="{{ $admin->instagram }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="youtube">Youtube link</label>
                                    <input type="url" class="form-control" id="youtube" name="youtube"
                                        placeholder="https://www.youbute.com/" value="{{ $admin->youtube }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="pinterest">Pinterest link</label>
                                    <input type="url" class="form-control" id="pinterest" name="pinterest"
                                        placeholder="https://www.pinterest.com/" value="{{ $admin->pinterest }}">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Profile Information -->
        </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

@endsection
