@extends('backend.app')

@section('title', 'Profile Settings')

@section('content')
{{-- Title and Breadcrumb --}}
<div class="title-wrapper py-4">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="page-title fw-bold text-primary">
                <i class="lni lni-user"></i> Profile Settings
            </h2>
        </div>
        <div class="col-md-6 text-end">
            <nav>
                <ol class="breadcrumb bg-light p-2 rounded">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Profile Settings</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="row mt-4">
    {{-- Profile Card --}}
    <div class="col-md-8 mx-auto">
        <div class="card border-0 shadow rounded-4">
            <div class="card-header bg-dark text-white d-flex align-items-center">
                <h5 class="mb-0">
                    <i class="lni lni-user"></i> Personal Information
                </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('update.profile') }}">
                    @csrf
                    {{-- Profile Picture --}}
                    <div class="text-center mb-4">
                        <div class="profile-picture position-relative d-inline-block">
                            <img id="profile-picture"
                                src="{{ asset(Auth::user()->avatar ?? 'frontend/images/profile.png') }}"
                                alt="Profile Picture"
                                class="rounded-circle shadow-lg"
                                style="width: 130px; height: 130px; object-fit: cover; border: 3px solid #ddd;">
                            <label for="profile_picture_input"
                                class="btn btn-sm btn-outline-primary position-absolute bottom-0 end-0 translate-middle">
                                <i class="lni lni-camera"></i>
                            </label>
                            <input type="file" id="profile_picture_input" class="d-none">
                        </div>
                        <p class="mt-2 text-muted">Upload a clear and professional picture.</p>
                    </div>

                    {{-- Name and Email --}}
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">Name</label>
                            <input type="text" id="name" name="name" class="form-control shadow-sm"
                                value="{{ Auth::user()->name }}" placeholder="Your full name">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" id="email" name="email" class="form-control shadow-sm"
                                value="{{ Auth::user()->email }}" placeholder="Your email address">
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-success shadow-sm px-4">
                            <i class="lni lni-save"></i> Save Changes
                        </button>
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary shadow-sm px-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Password Section --}}
<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card border-0 shadow rounded-4">
            <div class="card-header bg-danger text-white d-flex align-items-center">
                <h5 class="mb-0">
                    <i class="lni lni-lock"></i> Update Password
                </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('update.Password') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="old_password" class="form-label fw-semibold">Current Password</label>
                        <input type="password" id="old_password" name="old_password" class="form-control shadow-sm"
                            placeholder="Enter current password">
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="password" class="form-label fw-semibold">New Password</label>
                            <input type="password" id="password" name="password" class="form-control shadow-sm"
                                placeholder="Enter new password">
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control shadow-sm" placeholder="Confirm new password">
                        </div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-danger shadow-sm px-4">
                            <i class="lni lni-lock-alt"></i> Update Password
                        </button>
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary shadow-sm px-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        // Profile picture update
        $('#profile_picture_input').change(function() {
            const formData = new FormData();
            formData.append('profile_picture', $(this)[0].files[0]);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: "{{ route('update.profile.picture') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.success) {
                        $('#profile-picture').attr('src', data.image_url);
                        toastr.success('Profile picture updated successfully.');
                    } else {
                        toastr.error(data.message);
                    }
                },
                error: function() {
                    toastr.error('An error occurred while updating the profile picture.');
                }
            });
        });
    });
</script>
@endpush