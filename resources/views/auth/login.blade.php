<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>::Cafe Login::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link href="{{asset('assets/dashboard/css/app.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/dashboard/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/dashboard/vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashboard/vendors/iCheck/css/bootstrapValidator.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/dashboard/css/login.css')}}" rel="stylesheet">
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/dashboard/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">

    <div class="card-header nocolor">
        <h2 class="text-center">
            Авторизация
        </h2>
    </div>
    <div class="row">
        <div class="col-md-10 ml-auto">
            <div class="card-body social">
                <div class="clearfix">
                    <div class="col-12 col-sm-9">
                        <hr class="omb_hrOr">
                        <span class="omb_spanOr"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-sm-6 form_width">
                        <form action="{{ route('login') }}" id="authentication" class="login_validator" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="sr-only"> E-mail</label>
                                <div class="input-group  input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-lg @error('email') is-invalid @enderror" id="email" name="email"
                                           placeholder="E-mail" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <div class="input-group input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" id="password"
                                           name="password" placeholder="Пароль" required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="form-group checkbox">
                                <label for="remember">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                                </label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Вход</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('assets/dashboard/js/app.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/dashboard/vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{asset('assets/dashboard/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/dashboard/js/login2.js')}}"></script>
</body>

</html>

