<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>::Admin Register::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link href="{{asset('assets/dashboard/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashboard/vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashboard/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashboard/css/login.css')}}" rel="stylesheet">
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="{{asset('assets/dashboard/img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row " id="form-login">
        <div class="col-sm-12">
            <div class="card-header nocolor">
                <h2 class="text-center text-primary">
                 Регистрация
                </h2>
            </div>
            <div class="card-body social">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 offset-2">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}" id="register_form">
                            @csrf
                            <div class="form-group row ">
                                <label class="control-label col-sm-3" for="name">Имя<sup>*</sup> :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"> <i class="fa fa-fw fa-user-md text-primary"></i>
                                        </span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Имя" name="name"
                                               id="name" value="{{ old('name') }}" required autocomplete="name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-sm-3" for="email">Email<sup>*</sup>  :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope text-primary"></i>
                                        </span>
                                        <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email"
                                               id="email" value="{{ old('email') }}" required autocomplete="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-sm-3" for="password">Пароль<sup>*</sup>  :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-text rounded-0">
                                            <i class="fa fa-fw fa-key text-primary"></i>
                                        </span>
                                        <input type="password" placeholder="Пароль" class="form-control" name="password"
                                               id="password" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-sm-3" for="password_confirmation">Подтверждение пароля<sup>*</sup>  :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="password" placeholder="Подтвердите пароль" class="form-control"
                                               name="password_confirmation" id="password_confirmation"/>
                                        <span class="input-group-text rounded-0">
                                            <i class="fa fa-fw fa-key text-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="offset-sm-3">
                                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/dashboard/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/dashboard/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/dashboard/vendors/moment/js/moment.min.js')}}"></script>
<script src="{{asset('assets/dashboard/vendors/iCheck/js/icheck.js')}}" type="text/javascript" ></script>
<script src="{{asset('assets/dashboard/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/dashboard/js/register2.js')}}" type="text/javascript"></script>
</body>

</html>
