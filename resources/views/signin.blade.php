<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>二维码生成器</title>

    <link href="{{ asset("css/app-signin.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/libs.min.css") }}" rel="stylesheet">
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
        </div><!-- .title-wrap -->

        <div class="box box-padding box-login">
            <h1>登 录</h1>


            <form id="login-form" action="https://app.qr-code-generator.com/site/login" method="post">
                <div style="display:none"><input type="hidden" value="3ea0a5b9af5a6e35bb0c547f840ece3cb89a8981"
                                                 name="YII_CSRF_TOKEN"></div>
                <div class="success">
                    <input placeholder="E-Mail" name="LoginForm[email]" id="LoginForm_email" type="text">
                    <div class="errorMessage" id="LoginForm_email_em_" style="display:none"></div>
                </div>
                <div class="success">

                    <input placeholder="Password" name="LoginForm[password]" id="LoginForm_password" type="password">
                    <div class="errorMessage" id="LoginForm_password_em_" style="display:none"></div>
                </div>
                <div class="rememberMe clr box-footer">
                    <div class="checkbox" style="margin-left: -30px !important;">
            <span class="checkboxes-container green-checkbox">
				<input id="ytLoginForm_rememberMe" type="hidden" value="0" name="LoginForm[rememberMe]"><input
                        class="activated" name="LoginForm[rememberMe]" id="LoginForm_rememberMe" value="1"
                        type="checkbox">                <label for="LoginForm_rememberMe">Remember me</label>
            </span>
                    </div>
                    <div class="errorMessage" id="LoginForm_rememberMe_em_" style="display:none"></div>
                    <input class="btn btn-primary btn-lg" type="submit" name="yt0" value="Log In">
                    <div class="text-center">
                        <a class=" forgot btn btn-link" href="https://app.qr-code-generator.com/forgot">忘记密码?</a></div><!-- .text-center -->
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

        <script type="text/javascript">
            // extend(window, "qr.site.login");
            // window.qr.site.login = {
            //     init: function () {
            //         $(".btn-primary").on("click", function () {
            //             var $this = $(this);
            //             $this.addClass("disabled");
            //         });
            //     },
            //     afterValidateCallback: function () {
            //         $(".btn-primary").removeClass("disabled");
            //         return true;
            //     }
            // };
            //
            // $(document).ready(function () {
            //     window.qr.site.login.init();
            // });

        </script>
    </div>

</div><!-- #login_left -->


<div id="footer">
    <div class="inner">
        <p>
            ©
            QR-Code-Generator.com 2019.
            'QR Code' is a trademark of DENSO WAVE INCORPORATED <a
                    href="http://www.qr-code-generator.com/company/legal-notice/">Legal Notice</a>
        </p>
    </div><!-- .inner -->
</div><!-- footer -->

<!-- Scripts -->
<script src="{{ asset("js/manifest.js") }}"></script>
<script src="{{ asset("js/vendor.js") }}"></script>
<script src="{{ asset("js/app.js") }}"></script>
<script type="text/javascript">
    /*<![CDATA[*/
    jQuery(function ($) {
        // jQuery('#login-form').yiiactiveform({
        //     'afterValidate': window.qr.site.login.afterValidateCallback, 'validateOnSubmit': true, 'attributes': [{
        //         'id': 'LoginForm_email',
        //         'inputID': 'LoginForm_email',
        //         'errorID': 'LoginForm_email_em_',
        //         'model': 'LoginForm',
        //         'name': 'email',
        //         'enableAjaxValidation': false,
        //         'clientValidation': function (value, messages, attribute) {
        //
        //             if (jQuery.trim(value) == '') {
        //                 messages.push("Email cannot be blank.");
        //             }
        //
        //         }
        //     }, {
        //         'id': 'LoginForm_password',
        //         'inputID': 'LoginForm_password',
        //         'errorID': 'LoginForm_password_em_',
        //         'model': 'LoginForm',
        //         'name': 'password',
        //         'enableAjaxValidation': false,
        //         'clientValidation': function (value, messages, attribute) {
        //
        //             if (jQuery.trim(value) == '') {
        //                 messages.push("Password cannot be blank.");
        //             }
        //
        //         }
        //     }, {
        //         'id': 'LoginForm_rememberMe',
        //         'inputID': 'LoginForm_rememberMe',
        //         'errorID': 'LoginForm_rememberMe_em_',
        //         'model': 'LoginForm',
        //         'name': 'rememberMe',
        //         'enableAjaxValidation': false,
        //         'clientValidation': function (value, messages, attribute) {
        //
        //             if (jQuery.trim(value) != '' && value != "1" && value != "0") {
        //                 messages.push("Remember me must be either 1 or 0.");
        //             }
        //
        //         }
        //     }], 'errorCss': 'error'
        // });
    });
    /*]]>*/
</script>


<iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
        src="https://vars.hotjar.com/box-90f3a29ef7448451db5af955688970d7.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
</body>
</html>