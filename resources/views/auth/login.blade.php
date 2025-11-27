<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <!-- Logo above the card -->
        <div class="logo-wrapper">
            <img src="{{ asset('images/logo-itsm.png') }}" alt="Logo" class="logo-img">
        </div>

        <div class="login-container">
            <div class="login-card">
                <!-- Header -->
                <div class="login-header">
                    <h2>Welcome Back</h2>
                    <p>Log in to your account</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Login Form -->
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="form-group">
                        <div class="input-wrapper">
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">Email Address</label>
                            <span class="focus-border"></span>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="error-message" />
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <div class="input-wrapper password-wrapper">
                            <input type="password" id="password" name="password" required>
                            <label for="password">Password</label>
                            <button type="button" id="passwordToggle" class="password-toggle">
                                <span class="eye-icon"></span>
                            </button>
                            <span class="focus-border"></span>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="error-message" />
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="login-btn btn">
                        <span class="btn-text">Sign In</span>
                        <span class="btn-loader"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
