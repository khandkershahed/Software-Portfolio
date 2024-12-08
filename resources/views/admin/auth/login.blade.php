<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NgenIt Training | Admin-Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('backend/login/assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend/login/assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/login/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend/login/assets/css/demo2/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon"
        href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}"
        type="image/x-icon" />

    <style>
        .position-relative {
            position: relative;
        }

        .bi-eye,
        .bi-eye-slash {
            font-size: 1rem;
            /* Adjust size as needed */
            color: #535151;
            /* Adjust color as needed */
        }

        .form-control {
            padding-right: 2.5rem;
            /* Add space for the eye icon */
        }
    </style>


</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">

                                <div class="col-md-4 pe-md-0">
                                    <div class="">
                                        <img alt="Logo" src="{{ asset('backend/login/assets/logo/5500661.jpg') }}"
                                            class="" style="width: 300px; height:500px;" />
                                    </div>
                                </div>

                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">

                                        <a href="{{ route('admin.login') }}"
                                            class="noble-ui-logo logo-light d-block mb-2 text-center mb-4">

                                            <img alt="Logo"
                                                src="{{ asset('backend/login/assets/logo/Logo_White.png') }}"
                                                class="" style="width: 90px; height: 100%;" />

                                        </a>

                                        <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>

                                        <form class="forms-sample" action="{{ route('admin.login') }}" method="POST">

                                            @csrf

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" autocomplete="off"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" id="login"
                                                    placeholder="">

                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3 position-relative">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" autocomplete="off" name="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="password" autocomplete="current-password" placeholder="">

                                                <i id="togglePassword" class="bi bi-eye position-absolute"
                                                    style="top: 73%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>

                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="form-check mb-3">
                                                <input type="checkbox" class="form-check-input" id="remember_me"
                                                    name="remember">

                                                <label class="form-check-label" for="authCheck">
                                                    Remember me
                                                </label>

                                            </div>

                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary me-2 px-3 mb-2 mb-md-0 text-white">Login
                                                </button>
                                            </div>

                                            <a href="{{ route('admin.password.request') }}"
                                                class="d-block mt-3 text-muted">Forgot Password?
                                                Click Here</a>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('backend/login/assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('backend/login/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/login/assets/js/template.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');

            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Toggle the eye icon
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
        });
    </script>

    <!-- endinject -->


</body>

</html>
