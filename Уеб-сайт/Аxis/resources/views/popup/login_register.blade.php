<div class="login-register">
    <div class="outer">
        <div class="inner">
            <div class="row">
                <a href="#" class="login-content-btn underline hover:underline-none">Log In</a>
                <a href="#" class="register-content-btn underline">Register</a>
            </div>
            <div class="content login active">
                @include('popup.login')
            </div>
            <div class="content register">
                @include('popup.register')
            </div>
            <h4 class="line-login-options"><span>Or</span></h4>
            <div class="social-login">

                <a  class="py-2 px-4 flex justify-center items-center  bg-blue-600 hover:bg-blue-700 text-white w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg ">
                <i class="fab fa-facebook text-white"></i>
                Sign Up via Facebook
                </a>

                <a  class="py-2 px-4 flex justify-center items-center  bg-red-600 hover:bg-red-700 text-white w-full transition ease-in duration-200 text-center text-base font-semibold rounded-lg ">
                <i class="fab fa-google text-white"></i>
                Sign in with Google
                </a>

            </div>
        </div>
    </div>
</div>
