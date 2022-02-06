<h2 class="nice-message">We're glad to see you again!</h2>
<h3 class="sign-up-message">Don't have an account? <span class="sign-up underline text-blue-500 font-semibold"> <a href=""> Sign Up!</a></span></h3>
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="row">
        {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label> --}}

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="row">
        {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- <div class="row">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div> --}}

    <div class="row forgot-password-holder">
        @if (Route::has('password.request'))
            <a class="btn-link underline" href="{{ route('password.request') }}">
                {{ __('Forgot Password?') }}
            </a>
        @endif
    </div>

    <div class="row">
        <button type="submit" class="py-2 px-4 mt-2 mb-2 border-2 border-blue-500 bg-blue-500 hover:border-blue-500 hover:bg-white text-white hover:text-blue-500 hover:text-blue w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg  ">
            {{ __('Login') }}
        </button>
    </div>

    {{-- <div class="row">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link underline" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div> --}}
</form>