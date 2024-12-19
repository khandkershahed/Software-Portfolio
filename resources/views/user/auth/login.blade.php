{{-- <x-guest-layout> --}}
<!-- Session Status -->
{{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

{{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
{{-- <div class="row g-0 justify-content-center align-items-center">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55);backdrop-filter: blur(30px);">
                <div class="card-body p-5 shadow-5 text-center">
                    <h2 class="fw-bold mb-5">Log In</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="form-outline">
                                <x-input-label class="form-label" for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control form-control-solid" type="email"
                                    name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-outline">
                                <x-input-label class="form-label" for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control form-control-solid" type="password"
                                    name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Checkbox -->
                        <div class="row justify-content-between align-items-center">
                            <div class="form-check d-flex justify-content-center align-items-center mb-3">
                                <input class="form-check-input me-2" type="checkbox" value="" id="remember_me"
                                    name="remember" />
                                <label class="form-check-label" for="remember_me">
                                    {{ __('Remember me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="form-check d-flex justify-content-center align-items-center mb-3">
                                    <h6 class="d-flex justify-content-center align-items-center">
                                        {{ __('Forgot your password?') }}
                                        <a href="{{ route('password.request') }}"
                                            class="btn btn-sm btn-link text-gray fw-bold fs-6">{{ __('Click Here...') }}</a>
                                    </h6>
                                </div>
                            @endif
                        </div>

                        <!-- Submit button -->
                        <x-primary-button class="btn btn-primary btn-block mb-4">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
                alt="" />
        </div>
    </div>
</x-guest-layout> --}}

<x-frontend-app-layout :title="'Login'">

    <div class="login-box">
        <section class="login-box-area">
            <div class="container">
                <div class="card p-0 border-0">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="login-bg py-5">
                                    <div class="login-side-content p-5">
                                        <!-- Welcome Message -->
                                        <div class="pb-5">
                                            <h4 class="mb-0 text-white">Welcome Back</h4>
                                            <h1 class="fw-bold text-white">
                                                Login to Your Account!
                                            </h1>
                                        </div>
                                        <p class="text-white">
                                            Access your dashboard, manage your projects, and
                                            stay up to date with the latest news. Please enter
                                            your credentials below to log in.
                                        </p>

                                        <p class="text-white pt-4">
                                            <span class="fw-bold fs-4">Need help?</span>
                                            <br />
                                            Visit our
                                            <a href="/help" class="text-white fw-bold">Help Center</a>
                                            for <a href="" class="fw-bold">FAQs</a>, or
                                            contact our support team.
                                        </p>
                                        <div class="pt-3">
                                            <p class="text-white mb-0">
                                                <i class="fa-solid fa-call"></i> +880 171 4243
                                                446
                                            </p>
                                            <p class="text-white">sales@ngenitltd.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <form class="p-5 py-5" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div>
                                        <h1>Sign In</h1>
                                    </div>

                                    <div class="my-3 mt-5">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" />
                                    </div>

                                    <div class="">
                                        <label for="exampleInputEmail1" class="form-label">Password</label>
                                        <div class="input-group mb-2">
                                            <input type="password" class="form-control" name="password" id="passwordInput"
                                                placeholder="Enter your password" aria-label="Password"
                                                aria-describedby="button-addon1" />
                                            <button class="btn btn-outline-danger rounded-0" type="button"
                                                id="button-addon1" onclick="togglePasswordVisibility()">
                                                <i class="fa-solid fa-lock"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-check ps-0 mt-4">

                                        <div class="palatform_checkbox">

                                            <input class="platform_input" id="platform_label-106" type="checkbox"
                                                value="Graphics Design" name="remember" />

                                            <label class="platform_label" for="platform_label-106">
                                                <span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                </span>
                                                <span> Remember Me! With This Account. </span>
                                            </label>
                                        </div>

                                        {{-- <div class="palatform_checkbox mb-2">
                                            <input class="platform_input" id="platform_label-103" type="checkbox"
                                                value="Graphics Design" onclick="handleCheckboxClick()" />
                                            <label class="platform_label" for="platform_label-103">
                                                <span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                </span>
                                                <span>
                                                    Yes, I accept the
                                                    <a href="/terms-of-service" class="text-primary fw-semibold"
                                                        target="_blank">Terms of
                                                        Service</a>
                                                    and
                                                    <a href="/privacy-policy" class="text-primary fw-semibold"
                                                        target="_blank">Privacy
                                                        Policy</a>.
                                                </span>
                                            </label>
                                        </div> --}}

                                    </div>
                                    <button type="submit" class="btn-common-three animated mt-4 w-100">
                                        Submit
                                    </button>
                                    <!-- Sign Up Link -->
                                    <div class="mt-4 text-center">
                                        <p class="text-muted mb-0">
                                            Don’t have an account?
                                            <a href="{{ route('register') }}" class="text-primary">Sign Up Now</a>
                                        </p>
                                        <p class="text-muted mb-0">
                                            Forgot Your
                                            <a href="{{ route('password.request') }}" class="text-primary">Password?</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-frontend-app-layout>
