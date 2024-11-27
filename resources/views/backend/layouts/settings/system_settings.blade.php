@extends('backend.app')

@section('title', 'System Settings')

@section('content')
{{-- ========== Title Wrapper Start ========== --}}
<div class="title-wrapper pt-30 mb-4 s py-4">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title">
                <h2 class="fw-bold text-dark">System Settings</h2>
            </div>
        </div>
        <div class="col-md-6 text-md-end">
            <div class="breadcrumb-wrapper">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">
                                <i class="bi bi-house-door-fill"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">Settings</li>
                        <li class="breadcrumb-item active">System Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
{{-- ========== Title Wrapper End ========== --}}

{{-- ========== Form Start ========== --}}
<div class="form-layout-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style shadow-sm rounded p-4">
                <form method="POST" action="{{ route('system.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- Title & Email --}}
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" placeholder="Enter Title" id="title" name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ $setting->title ?? '' }}" />
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" placeholder="Enter Email" id="email" name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ $setting->email ?? '' }}" />
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- System Name & Copyright Text --}}
                        <div class="col-md-6 mb-3">
                            <label for="system_name" class="form-label">System Name:</label>
                            <input type="text" placeholder="Enter System Name" id="system_name" name="system_name"
                                class="form-control @error('system_name') is-invalid @enderror"
                                value="{{ $setting->system_name ?? '' }}" />
                            @error('system_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="copyright_text" class="form-label">Copyright Text:</label>
                            <input type="text" placeholder="Enter Copyright Text" id="copyright_text" name="copyright_text"
                                class="form-control @error('copyright_text') is-invalid @enderror"
                                value="{{ $setting->copyright_text ?? '' }}" />
                            @error('copyright_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- Logo & Favicon --}}
                        <div class="col-md-6 mb-3">
                            <label for="logo" class="form-label">Logo:</label>
                            <input type="file" class="form-control dropify @error('logo') is-invalid @enderror"
                                name="logo" id="logo" data-default-file="@isset($setting){{ asset($setting->logo) }}@endisset" />
                            @error('logo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="favicon" class="form-label">Favicon:</label>
                            <input type="file" class="form-control dropify @error('favicon') is-invalid @enderror"
                                name="favicon" id="favicon" data-default-file="@isset($setting){{ asset($setting->favicon) }}@endisset" />
                            @error('favicon')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        {{-- Description --}}
                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">About the System:</label>
                            <textarea placeholder="Type here..." id="description" name="description"
                                class="form-control @error('description') is-invalid @enderror">{{ $setting->description ?? '' }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Submit & Cancel Buttons --}}
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary px-4 py-2">Save Changes</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-danger px-4 py-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- ========== Form End ========== --}}
@endsection

@push('script')
<script>
    // Classic Editor for description
    ClassicEditor.create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
@endpush