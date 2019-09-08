<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>二维码生成器</title>

    <link href="{{ asset("css/app-signup.css") }}" rel="stylesheet">
</head>
<body class="app-signup" id="app-signup">

<div id="app" class="ab-test-signup--standard" style="height: 100%">
    <div class="app-signup__nav container">
        <div class="row">
            <div class="col-sm-12">
                <a class="app-signup__nav-back-btn" href="/">返回</a>
            </div>
        </div>
    </div>

    <div class="app-signup__main container">

        <div class="row">
            <div class="app-signup__wrapper">

                <h1 class="app-signup__page-title">
                    二维码生成器 <span class="app-signup__page-title--tag">Pro（专业版）</span>
                </h1>

                <div class="row app-signup__register-box">

                    <div class="col-sm-7 col-xs-12 signup-form">
                        <h3 class="signup-form__header">
                            立即<span>免费注册</span></h3>
                        <div id="app-signup-form" class="login registration" dir="ltr">

                            <div class="form signup-form__form">
                                <form id="user-form" action="{{ route('register') }}" method="POST"
                                      @submit="onSubmit" novalidate="true">
                                    @csrf

                                    <div class="form-group signup-form__form-group">
                                        <input id="email" placeholder="Email" type="text"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="form-group signup-form__form-group">
                                        <input id="password" placeholder="Password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="checkbox signup-form__checkbox">

                                        <input type="checkbox" name="agree" id="agree" {{ old('agree') ? 'checked' : '' }}>
                                        <label for="agree" class="signup-form__checkbox--label">
                                            <span class="signup-form__checkbox--label-inner">
                                                I agree with the <a href="http://www.qr-code-generator.com/company/terms/" target="_blank">Terms of Service</a> and <a
                                                        href="http://www.qr-code-generator.com/company/privacy-policy/" target="_blank">Privacy Policy</a>.                </span>
                                        </label>
                                        <div class="form-control @error('password') is-invalid @enderror" style="display: none">
                                        </div>

                                        @error('agree')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="buttons signup-form__button">
                                        <button class="btn btn-block btn-lg btn-primary signup-button"
                                                type="submit"><span
                                                    class="signup-form__button--text">Register now</span><span
                                                    class="sk-three-bounce signup-form__button--spinner">
                    <span class="sk-child sk-bounce1"></span>
                    <span class="sk-child sk-bounce2"></span>
                    <span class="sk-child sk-bounce3"></span>
                </span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5 col-xs-12 signup-info">

                        <p class="signup-info__text"><span style="font-weight:700;">14天免费免责试用所有功能</span>。然后使用我们的Free（免费）、Starter（入门）、Advanced（高级）或Pro（专业）方案。
                        </p>

                        <div class="signup-info__customers container-fluid">
                            <p class="signup-info__customers--header">我们的客户</p>

                            <div class="row">
                                <div class="col-xs-12 signup-info__customers--col">
                                    <img src="{{ asset("images/customer-logos-signup.jpg") }}" alt="我们的客户">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="app-signup__footer">
                    <p class="app-signup__footer--text">
                        已经有账户？ <a class="app-signup__footer--link" href="/login">在这里登录。</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Scripts -->
<script src="{{ asset("js/manifest.js") }}"></script>
<script src="{{ asset("js/vendor.js") }}"></script>
<script src="{{ asset("js/app.js") }}"></script>
<script src="{{ asset("js/digitialspaghetti.password.min.js") }}"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            checked: false,
        },
        mounted: function () {
            jQuery('#password').pstrength();
        },
        methods: {
            onSubmit(e) {
            },
        }
    });
</script>

</body>
</html>



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

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
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
