<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>二维码生成器</title>

    <link href="{{ asset("css/app-signin.css") }}" rel="stylesheet">
</head>

<body id="new-design" class="nav-dark nav-icon no-ad compact">

<div id="login_left">

    <div class="qr-navbar">
        <div class="qr-navbar__element">
            <i class="icon-logo-icon qr-navbar__logo"></i>
        </div>
        <div class="qr-navbar__element">
            <div class="qr-navbar__separator"></div>
        </div>
        <div class="qr-navbar__element">
            <div class="qr-navbar__element qr-navbar__menu qr-navbar__menu__back-button">
                <a href="/">
                    <i class="icon-event-back"></i>
                    <span>返回首页</span>
                </a>
            </div>
        </div>
    </div>

    <div id="page">
        <div class="title-wrap">
            <h1 class="has-span">二维码生成器<span class="heading-tag">Pro</span></h1>
        </div>

        <div class="box box-padding box-login">
            <h1>登 录</h1>

            <form id="login-form" action="{{ route('login') }}" method="post">
                @csrf

                <div class="form-group">
                    <div style="margin-bottom: 30px">
                        <input id="email" type="email" placeholder="E-Mail"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div style="margin-bottom: 30px">
                        <input id="password" type="password" placeholder="Password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="rememberMe clr box-footer">
                    <div class="checkbox" style="margin-left: -30px !important;">
            <span class="checkboxes-container green-checkbox"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>                <label
                        for="remember">Remember me</label>
            </span>
                    </div>
                    <input class="btn btn-primary btn-lg" type="submit" name="yt0" value="Log In">
                    <div class="text-center">
                        <a class=" forgot btn btn-link" href="{{ route('password.request') }}">忘记密码?</a></div>
                </div>
            </form>
            <div class="social-login-line">
                <span class="social-login-line__label">or</span>
            </div>
            <div class="social-login">
                <a class="social-login__button social-login__button--google"
                   href="https://app.qr-code-generator.com/oauth/withGoogle" target="_top">
                    Login with Google </a>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="inner">
        <p>
            ©
            QR-Code-Generator.com 2019.
            'QR Code' is a trademark of DENSO WAVE INCORPORATED <a
                    href="http://www.qr-code-generator.com/company/legal-notice/">Legal Notice</a>
        </p>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset("js/manifest.js") }}"></script>
<script src="{{ asset("js/vendor.js") }}"></script>
<script src="{{ asset("js/app.js") }}"></script>

</body>
</html>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
