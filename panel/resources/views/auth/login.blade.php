
@extends('layouts.app')

@section('content')
<body class="hold-transition login-page"><section class="section-forms">
    <div class="container" align="center">

            <div class="row justify-content-between align-items-center">
                
                     <div class="col-sm-12">
                        <div class="login-box">
    <div class="login-box-body">
    <h3 class="text-center mt-0 mb-4">
        <img src="{{asset('assets\dist\img\logo.png')}}" height="70px;">
    </h3> 
    <p class="login-box-msg">Login to start youccccr session</p>

    <div id="infoMessage" class="text-center"></div>

     <form method="POST" action="{{ route('login') }}">
                        @csrf
<input type="hidden" name="csrf_test_name" value="0d7bd63019575f3aa92b9cfea21504a8">                                                                                                  
        <div class="form-group has-feedback">
            <input id="email" type="tel" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="mobile" autofocus>
            @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="fa fa-envelope form-control-feedback"></span>
            <span class="help-block"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span class="help-block"></span>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row">
            <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label></div>

                </label>
            </div>
            </div>
            <div class="col-xs-4">
                 <button type="submit" class="btn btn-success btn-block btn-flat">
                                    {{ __('Login') }}
                                </button>

                               
           <!--  <input type="submit" name="submit" value="Login" id="submit" class="btn btn-success btn-block btn-flat"> -->
            </div>
        </div>
        </form>
         @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
       <!--  <a href="auth/forgot_password" class="text-center">Forgot your password?</a> -->

    </div>
</div>
                    
                </div>
            </div>
        </div>
</section>

<script src="./dist/js/login.js"></script>
<script src="./dist/js/bootstrap.min.js"></script>
<script src="./dist/js/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
        });
    });
</script>

</body>@endsection
