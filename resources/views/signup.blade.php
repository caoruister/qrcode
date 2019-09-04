<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>二维码生成器</title>

    <link href="{{ asset("css/app-signup.css") }}" rel="stylesheet">
</head>
<body class="app-signup" id="app-signup">

<div class="ab-test-signup--standard" style="height: 100%">
    <!-- start: Navigation -->
    <div class="app-signup__nav container">
        <div class="row">
            <div class="col-sm-12">
                <a class="app-signup__nav-back-btn" href="javascript:history.back()">返回</a>
            </div>
        </div>
    </div>
    <!-- start: Navigation -->

    <!-- start: Main-Container -->
    <div class="app-signup__main container">

        <div class="row">
            <div class="app-signup__wrapper">

                <h1 class="app-signup__page-title">
                    二维码生成器 <span class="app-signup__page-title--tag">Pro（专业版）</span>
                </h1>

                <!-- start: register-box -->
                <div class="row app-signup__register-box">

                    <!-- start: left side: register form -->
                    <div class="col-sm-7 col-xs-12 signup-form">
                        <h3 class="signup-form__header">
                            立即<span>免费注册</span></h3>
                        <div id="app-signup-form" class="login registration" dir="ltr">

                            <!-- start: login-form -->
                            <div class="form signup-form__form">
                                <!-- form -->
                                <form id="user-form" action="/zh/site/signup?target=topnav" method="POST">
                                    <div style="display:none"><input type="hidden"
                                                                     value="3ea0a5b9af5a6e35bb0c547f840ece3cb89a8981"
                                                                     name="YII_CSRF_TOKEN"></div>
                                    <!-- hidden-fields -->
                                    <input name="User[affiliate_id]" id="User_affiliate_id" type="hidden" value="0">
                                    <input name="User[language]" id="User_language" type="hidden" value="en"> <input
                                            name="User[redirectOnSuccess]" id="User_redirectOnSuccess" type="hidden"
                                            value=""> <input name="User[redirectHash]" id="User_redirectHash"
                                                             type="hidden" value="">

                                    <input type="hidden" name="YII_CSRF_TOKEN"
                                           value="3ea0a5b9af5a6e35bb0c547f840ece3cb89a8981">


                                    <div class="form-group signup-form__form-group">
                                        <!-- email -->
                                        <input maxlength="100" class="form-control" placeholder="Email"
                                               required="required" name="User[email]" id="User_email" type="text">
                                        <label for="User_email" class="signup-form__label"
                                               style="display: none">Email</label>
                                        <svg class="signup-form__error-icon" style="display: none;"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect width="24" height="24" fill="none"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="Erro_Icon" data-name="Erro Icon" clip-path="url(#clip-path)">
                                                <rect id="Rechteck_1476" data-name="Rechteck 1476" width="24"
                                                      height="24" fill="#fff"></rect>
                                                <path id="Pfad_16813" data-name="Pfad 16813"
                                                      d="M46.249,0a11,11,0,1,0,11,11A11,11,0,0,0,46.249,0Zm1.914,3.438L48.03,6.6l-.535,5.644H45L44.468,6.6l-.135-3.167ZM46.249,18.51a2.054,2.054,0,1,1,1.994-2.054A1.982,1.982,0,0,1,46.249,18.51Z"
                                                      transform="translate(-34.249 1)" fill="#fa6e79"></path>
                                            </g>
                                        </svg>
                                        <div class="app-signup-error app-signup-error--email" id="User_email_em_"
                                             style="display:none"></div>
                                    </div>

                                    <div class="form-group signup-form__form-group">
                                        <!-- password -->
                                        <input class="form-control" maxlength="100" placeholder="Password"
                                               required="required" name="User[password]" id="User_password"
                                               type="password">
                                        <div id="password-strength"><span class="password-min-char">You must enter a minimum of 5 characters</span><span
                                                    class="password-strength-bar"
                                                    style="opacity: 1; display: block; background-color: rgb(255, 0, 0); width: 1%;">Weak</span>
                                        </div>
                                        <label for="User_password" class="signup-form__label" style="display: none">Password</label>
                                        <svg class="signup-form__error-icon" style="display: none;"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <defs>
                                                <clipPath id="clip-path2">
                                                    <rect width="24" height="24" fill="none"></rect>
                                                </clipPath>
                                            </defs>
                                            <g id="Erro_Icon2" data-name="Erro Icon" clip-path="url(#clip-path2)">
                                                <rect id="Rechteck_1476_1" data-name="Rechteck 1476" width="24"
                                                      height="24" fill="#fff"></rect>
                                                <path id="Pfad_16813_1" data-name="Pfad 16813"
                                                      d="M46.249,0a11,11,0,1,0,11,11A11,11,0,0,0,46.249,0Zm1.914,3.438L48.03,6.6l-.535,5.644H45L44.468,6.6l-.135-3.167ZM46.249,18.51a2.054,2.054,0,1,1,1.994-2.054A1.982,1.982,0,0,1,46.249,18.51Z"
                                                      transform="translate(-34.249 1)" fill="#fa6e79"></path>
                                            </g>
                                        </svg>
                                        <div class="app-signup-error app-signup-error--password" id="User_password_em_"
                                             style="display:none"></div>
                                    </div>

                                    <div class="checkbox signup-form__checkbox">
                                        <input id="ytUser_terms" type="hidden" value="0" name="User[terms]"><input
                                                name="User[terms]" id="User_terms" value="1" type="checkbox"> <label
                                                for="User_terms" class="signup-form__checkbox--label">
                <span class="signup-form__checkbox--label-inner">
                    I agree with the <a href="http://www.qr-code-generator.com/company/terms/" target="_blank">Terms of Service</a> and <a
                            href="http://www.qr-code-generator.com/company/privacy-policy/" target="_blank">Privacy Policy</a>.                </span>
                                        </label>
                                        <div class="app-signup-error app-signup-error--terms" id="User_terms_em_"
                                             style="display:none"></div>
                                    </div>
                                    <div class="buttons signup-form__button">
                                        <button class="btn btn-block btn-lg btn-primary signup-button"
                                                onclick="$('.ab-test-signup--standard #user-form').submit();" name="yt0"
                                                type="button"><span
                                                    class="signup-form__button--text">Register now</span><span
                                                    class="sk-three-bounce signup-form__button--spinner">
                    <span class="sk-child sk-bounce1"></span>
                    <span class="sk-child sk-bounce2"></span>
                    <span class="sk-child sk-bounce3"></span>
                </span></button>
                                    </div>

                                    <a class="button button--large button--contained signup-button"
                                       onclick="$('.ab-test-signup #user-form').submit();" style="display: none">
            <span class="signup-button__text-wrapper">
                <span class="signup-button-text">
                    Register now                </span>
            </span>
                                        <span class="sk-three-bounce signup-button__spinner" style="display: none">
                <span class="sk-child sk-bounce1"></span>
                <span class="sk-child sk-bounce2"></span>
                <span class="sk-child sk-bounce3"></span>
            </span>
                                    </a>

                                </form>
                            </div>
                            <!-- end: login-form -->

                        </div>
                    </div>
                    <!-- end: left side: register form -->

                    <!-- start: right side: infos -->
                    <div class="col-sm-5 col-xs-12 signup-info">

                        <p class="signup-info__text"><span style="font-weight:700;">14天免费免责试用所有功能</span>。然后使用我们的Free（免费）、Starter（入门）、Advanced（高级）或Pro（专业）方案。
                        </p>

                        <!-- start: customer-logos -->
                        <div class="signup-info__customers container-fluid">
                            <p class="signup-info__customers--header">我们的客户</p>

                            <div class="row">
                                <div class="col-xs-12 signup-info__customers--col">
                                    <img src="{{ asset("images/customer-logos-signup.jpg") }}" alt="我们的客户">
                                </div>
                            </div>
                        </div>
                        <!-- end: customer-logos -->

                    </div>
                    <!-- end: right side: infos -->

                </div>
                <!-- end: register-box -->

                <!-- start: footer -->
                <div class="app-signup__footer">
                    <p class="app-signup__footer--text">
                        已经有账户？ <a class="app-signup__footer--link" href="/signin">在这里登录。</a>
                    </p>
                </div>
                <!-- end: footer -->

            </div>
        </div>

    </div>
    <!-- end: Main-Container -->
</div>

<!-- Scripts -->
<script src="{{ asset("js/manifest.js") }}"></script>
<script src="{{ asset("js/vendor.js") }}"></script>
<script src="{{ asset("js/app.js") }}"></script>

<script type="text/javascript">
    /*<![CDATA[*/
    jQuery(function ($) {
        // jQuery('#User_password').pStrength({minChar: 5});
        // jQuery('#user-form').yiiactiveform({
        //     'validateOnSubmit': true, 'validateOnChange': false, 'beforeValidate': function (form) {
        //         $(".sk-three-bounce").show();
        //         $(".signup-form__button--text").hide();
        //         $(".signup-button .signup-button__text-wrapper").hide();
        //         return true;
        //     }, 'afterValidate': function (form, data, hasError) {
        //
        //         if (hasError) {
        //             $(".sk-three-bounce").hide();
        //             $(".signup-form__button--text").show();
        //             $(".signup-button .signup-button__text-wrapper").show();
        //         }
        //         return true;
        //     }, 'attributes': [{
        //         'id': 'User_email',
        //         'inputID': 'User_email',
        //         'errorID': 'User_email_em_',
        //         'model': 'User',
        //         'name': 'email',
        //         'enableAjaxValidation': true,
        //         'clientValidation': function (value, messages, attribute) {
        //
        //
        //             if (!value.match(/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/)) {
        //                 messages.push("Email is not a valid email address.");
        //             }
        //
        //
        //             if (jQuery.trim(value) == '') {
        //                 messages.push("Email cannot be blank.");
        //             }
        //
        //
        //             if (jQuery.trim(value) != '') {
        //
        //                 if (value.length < 5) {
        //                     messages.push("Email is too short (minimum is 5 characters).");
        //                 }
        //
        //                 if (value.length > 100) {
        //                     messages.push("Email is too long (maximum is 100 characters).");
        //                 }
        //
        //             }
        //
        //         }
        //     }, {
        //         'id': 'User_password',
        //         'inputID': 'User_password',
        //         'errorID': 'User_password_em_',
        //         'model': 'User',
        //         'name': 'password',
        //         'enableAjaxValidation': true,
        //         'clientValidation': function (value, messages, attribute) {
        //
        //             if (jQuery.trim(value) == '') {
        //                 messages.push("Password cannot be blank.");
        //             }
        //
        //
        //             if (jQuery.trim(value) != '') {
        //
        //                 if (value.length < 5) {
        //                     messages.push("Password is too short (minimum is 5 characters).");
        //                 }
        //
        //                 if (value.length > 100) {
        //                     messages.push("Password is too long (maximum is 100 characters).");
        //                 }
        //
        //             }
        //
        //         }
        //     }, {
        //         'id': 'User_terms',
        //         'inputID': 'User_terms',
        //         'errorID': 'User_terms_em_',
        //         'model': 'User',
        //         'name': 'terms',
        //         'enableAjaxValidation': true,
        //         'clientValidation': function (value, messages, attribute) {
        //
        //             if (value != 1) {
        //                 messages.push("You must accept the terms and conditions of service.".replace('{compareValue}', 1));
        //             }
        //
        //         }
        //     }], 'focus': 'email', 'errorCss': 'error'
        // });
    });
    /*]]>*/
</script>

<!-- end: body app-signup -->


<div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.49839491330674157"><img
            style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.8696494930547893" width="0"
            height="0" alt=""
            src="https://bat.bing.com/action/0?ti=5103640&amp;Ver=2&amp;mid=fe03b0b0-74c2-8c58-fc57-b542e1e010e4&amp;pi=1200101525&amp;lg=zh-CN&amp;sw=1280&amp;sh=800&amp;sc=24&amp;tl=%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%94%9F%E6%88%90%E5%99%A8&amp;p=https%3A%2F%2Fapp.qr-code-generator.com%2Fzh%2Fsite%2Fsignup%3Ftarget%3Dtopnav&amp;r=https%3A%2F%2Fzh.qr-code-generator.com%2F&amp;lt=2196&amp;evt=pageLoad&amp;msclkid=N&amp;rn=555226">
</div>
<iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
        src="https://vars.hotjar.com/box-90f3a29ef7448451db5af955688970d7.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>



</body>
</html>

