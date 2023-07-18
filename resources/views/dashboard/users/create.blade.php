@extends('layouts.dashboard.base')
@section('pageTitle', 'Create a new User')
@section('custom-style')
    <!-- Plugin Css -->
    <link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Users</h4>
                            </div>
                        </div>
                        <!-- end page title -->
                        <!-- Start Page-content-Wrapper -->
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Create a new user</h4>
                                            @include('layouts.dashboard.alerts')
                                            <form class="needs-validation"
                                                  id="validation-form"
                                                  action="{{route('users.store')}}"
                                                  method="post"
                                                  enctype="multipart/form-data"
                                                  novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="name">
                                                                Name
                                                            </label>
                                                            <input type="text"
                                                                   class="form-control @error('name') is-invalid @enderror"
                                                                   id="name"
                                                                   placeholder="Name"
                                                                   name="name"
                                                                   value="{{ old('name') }}"
                                                                   required>
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="email">
                                                                Email
                                                            </label>
                                                            <input type="email"
                                                                   class="form-control @error('email') is-invalid @enderror"
                                                                   id="email"
                                                                   placeholder="Email"
                                                                   name="email"
                                                                   value="{{ old('email') }}"
                                                                   required
                                                            >
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- End Row -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="password">
                                                                Password
                                                            </label>
                                                            <input type="password"
                                                                   class="form-control @error('password') is-invalid @enderror"
                                                                   id="password"
                                                                   placeholder="Password"
                                                                   name="password"
                                                                   value="{{ old('password') }}"
                                                                   required>
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="password_confirmation">
                                                                Confirm Password
                                                            </label>
                                                            <input type="password"
                                                                   class="form-control @error('password_confirmation') is-invalid @enderror"
                                                                   id="password_confirmation"
                                                                   placeholder="Re-Type Password"
                                                                   name="password_confirmation"
                                                                   value="{{ old('password_confirmation') }}"
                                                                   data-parsley-equalto="#password"
                                                                   required
                                                            >
                                                            @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3 form-group">
                                                            <label class="form-label" for="role_id">
                                                                Role
                                                            </label>
                                                            <div class="mb-3 row">
                                                                <div class="col-md-10">
                                                                    <select name="role_id"
                                                                            class="form-select @error('role_id') is-invalid @enderror"
                                                                            aria-label="Default select example"
                                                                            required>
                                                                        <option selected disabled>Role</option>
                                                                        @foreach($roles as $role)
                                                                            <option
                                                                                value="{{$role->id}}">{{$role->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            @error('role_id')
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </form>
                                            <!-- End Form -->
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- end row -->

                        </div>
                        <!-- End Page-content -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                © {{date('Y')}}
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
            @section('custom-script')
                <!-- validation init -->
                <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script>
                <!-- parsley plugin -->
                <script src="{{asset('assets/libs/parsleyjs/parsley.min.js')}}"></script>
                <script>
                    $(function () {
                        $('#validation-form').validate({
                            errorElement: 'span',
                            errorPlacement: function (error, element) {
                                error.addClass('invalid-feedback');
                                element.closest('.form-group').append(error);
                            },
                            highlight: function (element, errorClass, validClass) {
                                $(element).addClass('is-invalid');
                            },
                            unhighlight: function (element, errorClass, validClass) {
                                $(element).removeClass('is-invalid');
                            }
                        });
                    });
                </script>
@endsection
@endsection
