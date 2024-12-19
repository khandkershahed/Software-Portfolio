<x-frontend-app-layout :title="'Register'">

    <div class="register-login-box">
        <section class="register-login-box-area">
            <div class="container mt-5">
                <div class="card p-0 border-0">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="register-login-bg py-5">
                                    <div class="register-login-side-content p-5">
                                        <!-- Welcome Message -->
                                        <div class="pb-5">
                                            <h4 class="mb-0 text-white">
                                                Welcome To Join Us!
                                            </h4>
                                            <h1 class="fw-bold text-white">
                                                Register for a New Account!
                                            </h1>
                                        </div>
                                        <p class="text-white">
                                            Create an account to manage your projects, track
                                            your activities, and stay up to date with the
                                            latest updates.
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

                                <form class="p-5" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="mb-5">
                                        <h2>Sign Up</h2>
                                    </div>
                                    <!-- Full Name -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="fullName"
                                                    placeholder="Enter your full name" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Email Address -->
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Enter your email address" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Phone Number -->
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <input type="tel" class="form-control" name="phone" id="phone"
                                                    placeholder="Enter your phone number" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Password -->
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="password"
                                                        placeholder="Enter your password" name="password"
                                                        aria-label="Password" required />
                                                    <button class="btn btn-outline-danger rounded-0" type="button"
                                                        id="button-addon1"
                                                        onclick="togglePasswordVisibility('password', 'button-addon1')">
                                                        <i class="fa-solid fa-lock"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <!-- Confirm Password -->
                                            <div class="mb-3">
                                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                                <div class="input-group">

                                                    <input type="password" class="form-control"
                                                        name="password_confirmation" id="confirmPassword"
                                                        placeholder="Confirm your password" required />

                                                    <button class="btn btn-outline-danger rounded-0" type="button"
                                                        id="button-addon2"
                                                        onclick="togglePasswordVisibility('confirmPassword', 'button-addon2')">
                                                        <i class="fa-solid fa-lock"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Terms & Privacy -->
                                    {{-- <div class="form-check ps-0 mt-4">
                                        <div class="register-checkbox">
                                            <input class="inp-cbx" id="cbx-465" type="checkbox" />
                                            <label class="cbx" for="cbx-465"><span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg></span><span>
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
                                        </div>
                                    </div> --}}

                                    <!-- Submit Button -->
                                    <button type="submit" class="btn-common-three animated mt-4 w-100">
                                        Register Now
                                    </button>

                                    <!-- Sign Up Link -->
                                    <div class="mt-4 text-center">
                                        <p class="text-muted mb-0">
                                            Already have an account?
                                            <a href="login.html" class="text-primary">Login Now</a>
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
