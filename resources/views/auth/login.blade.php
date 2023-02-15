<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion</title>
    {{--
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon"> --}}
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    {{--
    <link rel="shortcut icon" href="assets/images/fav.jpg"> --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}" />
</head>

<body class="form-login-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto login-desk">
                <div class="row">
                    <div class="col-md-7 detail-box">
                        <img class="logo" src="{{ asset('admin/assets/images/logo.png') }}" alt="">
                        <div class="detailsh">
                            <img class="help" src="{{ asset('admin/assets/images/help.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-5 loginform">
                        <h4>Bienvenu 👋</h4>
                        <div class="login-det">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-row">
                                    <label for="">Email</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="far fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" aria-label="email" aria-describedby="basic-addon1"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="">Mot De Passe</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Enter Password" aria-label="Username"
                                            aria-describedby="basic-addon1" name="password" required
                                            autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="forget">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>
                                    <label class="" for="remember" style="font-size: 12px">
                                        Se Souvenir De Moi
                                    </label>
                                </div> <br> <br>

                                <button type="submit" class="btn btn-sm btn-danger">Login</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

<script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/slider/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/script.js') }}"></script>

</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free Tour and Travel Website Tempalte | Smarteyeapps.com</title>
    {{--
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon"> --}}
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    {{--
    <link rel="shortcut icon" href="assets/images/fav.jpg"> --}}
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}" />
</head>

<body>



</body>

<script src="{{ asset('admin/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/slider/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/script.js')}}"></script>

</html>
