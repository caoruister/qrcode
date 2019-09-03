<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config("app.name") }}</title>

    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
</head>
<body class="qrcode-generated">
<div class="header header-nav-start" data-js="header-container">
    <div class="navigation navigation--startpage">
        <div class="container-fluid">
            <div class="row">
                <div class="navigation__logo col-sm-6 col-7 d-flex align-items-center">
                    <a href="/" class="egoditor-logo">
                        <img class="egoditor-logo__mark"
                             src="https://cdn-web.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/logos/egoditor/logo-icon-blue.svg">
                        <span class="egoditor-logo__text">QR Code Generator</span>
                        <h1 class="egoditor-logo__text egoditor-logo__text--sub">免费创建二维码</h1>
                    </a>
                </div>

                <div class="navigation__menu col-sm-6 col-5 d-flex justify-content-end align-items-center">
                    <ul class="navigation__menu-list align-items-center">

                        <li>
                            <a class="btn btn__rounded btn__rounded--blue" href="https://www.qr-code-generator.com/">Start</a>
                        </li>
                        <li>
                            <a class="btn btn__rounded btn__rounded--blue"
                               href="https://www.qr-code-generator.com/solutions/">Solutions</a>
                        </li>
                        <li>
                            <a class="btn btn__rounded btn__rounded--blue"
                               href="https://www.qr-code-generator.com/features/">Features</a>
                        </li>
                        <li>
                            <a class="btn btn__rounded btn__rounded--blue"
                               href="https://www.qr-code-generator.com/customers/">Customers</a>
                        </li>
                        <li>
                            <a class="btn btn__rounded btn__rounded--blue"
                               href="https://www.qr-code-generator.com/qr-code-marketing/">Resources</a>
                        </li>
                        <li>
                            <a class="btn btn__rounded btn__rounded--blue" href="/signup?target=topnav">注册</a>
                        </li>
                        <li>
                            <a class="btn btn__rounded btn__rounded--blue" href="https://app.qr-code-generator.com/en/">登录</a>
                        </li>
                    </ul>
                    <a href="#" class="btn toggle menu-toggle">
                        <i class="icon icon--menu-toggle icon-business-fab" data-js="mobile-nav-toggle"></i>
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>

<main class="content" id="app">
    <div class="generator__wrapper" data-js="generator-wrapper">
        <div class="generator__background">
            <h2 class="generator__loading-indicator">Loading ...</h2>
        </div>
        <div class="container">
            <div class="generator__back-icon-wrapper" data-js="generator-back-icon"><i
                        class="icon icon-arrow-icon generator__back-icon" data-state="rotate-180" style="display: none"
                        v-show="!isQrCodeTextChanged" v-on:click="goBack"></i></div>
            <div class="generator">
                <div class="container">
                    <div class="row">
                        <button id="ab-test" style="display: none" type="button"></button>
                        <div class="col-12 generator__main">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 generator-forms" v-show="isQrCodeTextChanged">
                                    <div class="row">
                                        <div class="col-lg-12 generator__radio-btn-container">
                                            <div class="form-group__radio"><label
                                                        class="egoditor-radio__label"><input v-model="isDynamic"
                                                                                             value="false"
                                                                                             name="radio"
                                                                                             type="radio"> 静态
                                                    <div class="egoditor-radio__button--blue"></div>
                                                </label></div>
                                            <div class="form-group__radio"><label
                                                        class="egoditor-radio__label"><input name="radio"
                                                                                             type="radio"
                                                                                             v-model="isDynamic"
                                                                                             value="true"> 动态
                                                    <div class="egoditor-radio__button--blue"></div>
                                                </label></div>
                                            <a class="generator__modal-open egoditor-radio__dynamic-mean"
                                               data-gtm-event="what-dynamic-mean">动态是什么意思？</a></div>
                                    </div>
                                    <input data-js="currentQrCodeType" type="hidden" value="url"
                                           data-gtm-qrcode-type="url">
                                    <div class="generator-forms__wrapper" id="filedrop-container">
                                        <div class="generator-navigation__wrapper">
                                            <nav class="generator-navigation">
                                                <ul class="generator-navigation__nav-tabs"><!---->
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'website' }"
                                                                v-on:click="isActiveChanged('website')">
                                                            <div class="generator-navigation__nav-link-inner">
                                                                <i class="generator-navigation__icon icon-generator-url"></i>
                                                                网址 <span
                                                                        class="generator-navigation__tooltip"> 扫描后打开网址 </span>
                                                            </div>
                                                        </a></li>
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'vcard' }"
                                                                v-on:click="isActiveChanged('vcard')">
                                                            <div class="generator-navigation__nav-link-inner"><i
                                                                        class="generator-navigation__icon icon-generator-vcard"></i>
                                                                名片 <span class="generator-navigation__tooltip"> 在手机上保存联系方式 </span>
                                                            </div>
                                                        </a></li>
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'text' }"
                                                                v-on:click="isActiveChanged('text')">
                                                            <div class="generator-navigation__nav-link-inner">
                                                                <i class="generator-navigation__icon icon-generator-text"></i>
                                                                文本 <span
                                                                        class="generator-navigation__tooltip"> 展示任何静态文本 </span>
                                                            </div>
                                                        </a></li>
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'email' }"
                                                                v-on:click="isActiveChanged('email')">
                                                            <div class="generator-navigation__nav-link-inner"><i
                                                                        class="generator-navigation__icon icon-generator-email"></i>
                                                                邮件 <span class="generator-navigation__tooltip"> 发送带有预定义文本的邮件 </span>
                                                            </div>
                                                        </a></li>
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'sms' }"
                                                                v-on:click="isActiveChanged('sms')">
                                                            <div class="generator-navigation__nav-link-inner">
                                                                <i class="generator-navigation__icon icon-generator-sms"></i>
                                                                短信息 <span class="generator-navigation__tooltip"> 发送带有预定义文本的短信息 </span>
                                                            </div>
                                                        </a></li>
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'facebook' }"
                                                                v-on:click="isActiveChanged('facebook')">
                                                            <div class="generator-navigation__nav-link-inner"><i
                                                                        class="generator-navigation__icon icon-generator-facebook"></i>
                                                                Facebook <span
                                                                        class="generator-navigation__tooltip"> 显示Facebook按键 </span>
                                                            </div>
                                                        </a></li>
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'pdf' }"
                                                                v-on:click="isActiveChanged('pdf')">
                                                            <div class="generator-navigation__nav-link-inner">
                                                                <i class="generator-navigation__icon icon-generator-pdf"></i>
                                                                PDF <span
                                                                        class="generator-navigation__tooltip"> 显示PDF文件 </span>
                                                            </div>
                                                        </a></li>
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'mp3' }"
                                                                v-on:click="isActiveChanged('mp3')">
                                                            <div class="generator-navigation__nav-link-inner">
                                                                <i class="generator-navigation__icon icon-generator-mp3"></i>
                                                                MP3 <span
                                                                        class="generator-navigation__tooltip"> 播放MP3文件 </span>
                                                            </div>
                                                        </a></li>
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'appstore' }"
                                                                v-on:click="isActiveChanged('appstore')">
                                                            <div class="generator-navigation__nav-link-inner">
                                                                <i class="generator-navigation__icon icon-generator-app"></i>
                                                                App stores <span
                                                                        class="generator-navigation__tooltip"> 转到不同的应用市场 </span>
                                                            </div>
                                                        </a></li>
                                                    <li class="generator-navigation__nav-items"><!----><a
                                                                href="javascript:void(0);"
                                                                class="generator-navigation__nav-link"
                                                                v-bind:class="{ active: isActive == 'picture' }"
                                                                v-on:click="isActiveChanged('picture')">
                                                            <div class="generator-navigation__nav-link-inner"><i
                                                                        class="generator-navigation__icon icon-generator-images"></i>
                                                                图片 <span
                                                                        class="generator-navigation__tooltip"> 展示相册 </span>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </nav>
                                            <div class="generator-forms__body">
                                                <div style="display: none" v-show="isActive == 'website'">
                                                    <h2 class="form-header">网站（网址）</h2>
                                                    <form>
                                                        <div class="form-group row">
                                                            <div class="col-12"><input autofocus=""
                                                                                       class="form-control form-control--input-primary"
                                                                                       formcontrolname="websiteUrl"
                                                                                       type="text"
                                                                                       v-model="website.url"
                                                                                       v-on:keyup="qrCodeTextChanged"
                                                                                       placeholder="https://www.example.com">
                                                            </div>
                                                        </div>
                                                        <button class="btn btn--green btn--green--generator-submit"
                                                                v-bind:class="{'btn--green--disabled' : !isQrCodeTextChanged}"
                                                                v-on:click="create" data-js="generator-submit-btn"
                                                                type="button"><i
                                                                    class="icon icon-refresh-icon"></i> 创建二维码
                                                        </button>
                                                        <input data-gtm-event="show-restriction"
                                                               id="show-restriction-tracker" type="hidden">
                                                    </form>
                                                </div>
                                                <div style="display: none" v-show="isActive == 'vcard'">
                                                    <h2 class="form-header">名片二维码</h2>
                                                    <form novalidate="">
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="firstname">姓名：</label>
                                                            <div class="col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-6"><input
                                                                                class="form-control"
                                                                                formcontrolname="firstname"
                                                                                id="firstname" type="text"
                                                                                v-model="vCard.firstName"
                                                                                v-on:keyup="qrCodeTextChanged"
                                                                                placeholder="名字："></div>
                                                                    <div class="col-6"><input
                                                                                class="form-control"
                                                                                formcontrolname="lastname"
                                                                                id="lastname" type="text"
                                                                                v-model="vCard.lastName"
                                                                                v-on:keyup="qrCodeTextChanged"
                                                                                placeholder="姓氏："></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="mobileNumber">号码：</label>
                                                            <div class="col-sm-9"><input
                                                                        class="form-control"
                                                                        formcontrolname="mobileNumber"
                                                                        id="mobileNumber" type="text"
                                                                        v-model="vCard.mobile"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                        placeholder="手机"></div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="phoneNumber"></label>
                                                            <div class="col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-6"><input
                                                                                class="form-control"
                                                                                formcontrolname="phoneNumber"
                                                                                id="phoneNumber" type="text"
                                                                                v-model="vCard.phone"
                                                                                v-on:keyup="qrCodeTextChanged"
                                                                                placeholder="电话"></div>
                                                                    <div class="col-6"><input
                                                                                class="form-control"
                                                                                formcontrolname="faxNumber"
                                                                                id="faxNumber" type="text"
                                                                                v-model="vCard.fax"
                                                                                v-on:keyup="qrCodeTextChanged"
                                                                                placeholder="传真"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="email">邮箱：</label>
                                                            <div class="col-sm-9"><input
                                                                        class="form-control"
                                                                        formcontrolname="email" id="email"
                                                                        type="text"
                                                                        v-model="vCard.email"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                        placeholder="your@email.com">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="company">公司：</label>
                                                            <div class="col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-6"><input
                                                                                class="form-control"
                                                                                formcontrolname="company"
                                                                                id="company" type="text"
                                                                                v-model="vCard.company"
                                                                                v-on:keyup="qrCodeTextChanged"
                                                                                placeholder="公司"></div>
                                                                    <div class="col-6"><input
                                                                                class="form-control"
                                                                                formcontrolname="job" id="job"
                                                                                type="text"
                                                                                v-model="vCard.job"
                                                                                v-on:keyup="qrCodeTextChanged"
                                                                                placeholder="您的职业">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="street">街道：</label>
                                                            <div class="col-sm-9"><input
                                                                        class="form-control"
                                                                        formcontrolname="street" id="street"
                                                                        type="text"
                                                                        v-model="vCard.street"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                ></div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="city">市：</label>
                                                            <div class="col-sm-9">
                                                                <div class="row">
                                                                    <div class="col-7"><input
                                                                                class="form-control"
                                                                                formcontrolname="city" id="city"
                                                                                type="text"
                                                                                v-model="vCard.city"
                                                                                v-on:keyup="qrCodeTextChanged"
                                                                        ></div>
                                                                    <div class="col-5"><input
                                                                                class="form-control"
                                                                                formcontrolname="zip" id="zip"
                                                                                type="text"
                                                                                v-model="vCard.zip"
                                                                                v-on:keyup="qrCodeTextChanged"
                                                                                placeholder="邮政编码">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="state">州/省：</label>
                                                            <div class="col-sm-9"><input
                                                                        class="form-control"
                                                                        formcontrolname="state" id="state"
                                                                        type="text"
                                                                        v-model="vCard.state"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                ></div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="country">国家：</label>
                                                            <div class="col-sm-9"><input
                                                                        class="form-control"
                                                                        formcontrolname="country" id="country"
                                                                        type="text"
                                                                        v-model="vCard.country"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                ></div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="website">网站：</label>
                                                            <div class="col-sm-9"><input
                                                                        class="form-control"
                                                                        formcontrolname="website" id="website"
                                                                        type="text"
                                                                        v-model="vCard.website"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                        placeholder="www.your-website.com"></div>
                                                        </div>
                                                        <button class="btn btn--green btn--green--generator-submit"
                                                                v-bind:class="{'btn--green--disabled' : !isQrCodeTextChanged}"
                                                                v-on:click="create" type="button">
                                                            <i class="icon icon-refresh-icon"></i> 创建二维码
                                                        </button>
                                                    </form>
                                                </div>
                                                <div style="display: none" v-show="isActive == 'text'">
                                                    <h2 class="form-header">文本二维码</h2>
                                                    <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label" for="textMessage">信息：</label>
                                                            <div class="col-sm-9"><textarea
                                                                        class="form-control ng-untouched ng-pristine ng-valid"
                                                                        formcontrolname="textMessage" id="textMessage"
                                                                        rows="3" placeholder="请输入文本内容"
                                                                        v-model="text.value"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                ></textarea></div>
                                                        </div>
                                                        <button class="btn btn--green btn--green--generator-submit"
                                                                data-form-btn="text" data-gtm-event="create-button"
                                                                data-js="generator-submit-btn" type="button"
                                                                v-bind:class="{'btn--green--disabled' : !isQrCodeTextChanged}"
                                                                v-on:click="create">
                                                            <i class="icon icon-refresh-icon"></i> 创建二维码
                                                        </button>
                                                    </form>
                                                </div>
                                                <div style="display: none" v-show="isActive == 'email'">
                                                    <h2 class="form-header">邮箱二维码</h2>
                                                    <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="email">邮箱：</label>
                                                            <div class="col-sm-9"><input
                                                                        class="form-control ng-untouched ng-pristine ng-valid"
                                                                        formcontrolname="email" id="email" type="text"
                                                                        placeholder="您的邮箱地址"
                                                                        v-model="email.to"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                ></div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="subject">主题：</label>
                                                            <div class="col-sm-9"><input
                                                                        class="form-control ng-untouched ng-pristine ng-valid"
                                                                        formcontrolname="subject" id="subject"
                                                                        type="text" placeholder="产品需求"
                                                                        v-model="email.sub"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                ></div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label" for="emailMessage">信息：</label>
                                                            <div class="col-sm-9"><textarea
                                                                        class="form-control ng-untouched ng-pristine ng-valid"
                                                                        formcontrolname="emailMessage" id="emailMessage"
                                                                        rows="3"
                                                                        placeholder="我想了解更多信息······"
                                                                        v-model="email.body"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                ></textarea></div>
                                                        </div>
                                                        <button class="btn btn--green btn--green--generator-submit"
                                                                data-gtm-event="create-button" type="button"
                                                                v-bind:class="{'btn--green--disabled' : !isQrCodeTextChanged}"
                                                                v-on:click="create">
                                                            <i class="icon icon-refresh-icon"></i> 创建二维码
                                                        </button>
                                                    </form>
                                                </div>
                                                <div style="display: none" v-show="isActive == 'sms'">
                                                    <h2 class="form-header">短信息二维码</h2>
                                                    <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="smsNumber">号码：</label>
                                                            <div class="col-sm-9"><input
                                                                        class="form-control ng-untouched ng-pristine ng-valid"
                                                                        formcontrolname="smsNumber" id="smsNumber"
                                                                        type="text" placeholder="您的号码"
                                                                        v-model="sms.to"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                ></div>
                                                        </div>
                                                        <div class="form-group row"><label
                                                                    class="col-sm-3 col-form-label"
                                                                    for="smsMessage">信息：</label>
                                                            <div class="col-sm-9"><textarea
                                                                        class="form-control ng-untouched ng-pristine ng-valid"
                                                                        formcontrolname="smsMessage" id="smsMessage"
                                                                        rows="3" placeholder="请输入文本内容"
                                                                        v-model="sms.body"
                                                                        v-on:keyup="qrCodeTextChanged"
                                                                ></textarea></div>
                                                        </div>
                                                        <button class="btn btn--green btn--green--generator-submit"
                                                                data-gtm-event="create-button" type="button"
                                                                v-bind:class="{'btn--green--disabled' : !isQrCodeTextChanged}"
                                                                v-on:click="create">
                                                            <i class="icon icon-refresh-icon"></i> 创建二维码
                                                        </button>
                                                    </form>
                                                </div>
                                                <div style="display: none" v-show="isActive == 'facebook'">
                                                    <h2 class="form-header">Facebook二维码</h2>
                                                    <p class="text__normal">推广您的Facebook页面，赢得更多点赞和好友。</p><a
                                                            class="btn btn--blue btn--blue--pull-down"
                                                            href="https://app.qr-code-generator.com/site/signup/?target=promo-dyn-facebook">
                                                        立即免费注册 <i class="icon icon--right icon-chevron-right"></i></a>
                                                </div>
                                                <div style="display: none" v-show="isActive == 'pdf'">
                                                    <h2 class="form-header">PDF二维码</h2>
                                                    <p class="text__normal">提供任何PDF文件，例如数字版的手册、杂志、产品目录和电子书。</p><a
                                                            class="btn btn--blue btn--blue--pull-down"
                                                            href="https://app.qr-code-generator.com/site/signup/?target=promo-dyn-pdf">
                                                        立即免费注册 <i class="icon icon--right icon-chevron-right"></i></a>
                                                </div>
                                                <div style="display: none" v-show="isActive == 'mp3'">
                                                    <h2 class="form-header">MP3二维码</h2>
                                                    <p class="text__normal">在可定制的移动播放器中分享音乐、有声读物或播客。</p><a
                                                            class="btn btn--blue btn--blue--pull-down"
                                                            href="https://app.qr-code-generator.com/site/signup/?target=promo-dyn-mp3">
                                                        立即免费注册 <i class="icon icon--right icon-chevron-right"></i></a>
                                                </div>
                                                <div style="display: none" v-show="isActive == 'appstore'">
                                                    <h2 class="form-header">注册创建应用二维码</h2>
                                                    <p class="text__normal">有了应用二维码，客户可以连接到苹果应用市场、Google
                                                        Play应用市场或亚马逊应用商店，轻松下载您的应用。</p><a
                                                            class="btn btn--blue btn--blue--pull-down"
                                                            href="https://app.qr-code-generator.com/site/signup/?target=promo-dyn-app">
                                                        立即免费注册 <i class="icon icon--right icon-chevron-right"></i></a>
                                                </div>
                                                <div style="display: none" v-show="isActive == 'picture'">
                                                    <h2 class="form-header">相册</h2>
                                                    <p class="text__normal">分享一系列关于产品、公司、活动的图片。</p><a
                                                            class="btn btn--blue btn--blue--pull-down"
                                                            href="https://app.qr-code-generator.com/site/signup/?target=promo-dyn-gallery">
                                                        立即免费注册 <i class="icon icon--right icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popover popover--dynamic-code" hidden=""><h4 class="form-header">
                                            创建动态二维码前请先注册</h4><a class="btn btn--blue"
                                                                href="https://app.qr-code-generator.com/site/signup/?target=dynamic-code-hint">立即免费注册<i
                                                    class="icon icon--right icon-chevron-right"></i></a>
                                        <p class="text__small text__small--generator-popover"> 已经有账户？ <a
                                                    class="anchor--blue"
                                                    href="https://app.qr-code-generator.com/?dynamic_info_login">登录</a>
                                        </p></div>
                                </div>
                                <div class="col-xl-4 col-lg-4 generator-preview generator-preview--hidden-mobile"
                                     v-show="!isQrCodeTextChanged">
                                    <div class="generator-preview__wrapper">
                                        <div class="generator-preview__noframe-body" id="frameBody"><!---->
                                            <img class="generator-preview__image"
                                                 src="{{ asset("images/websiteQRCode_noFrame.png") }}"
                                                 v-if="!svgCode">
                                            <div data-js="preview-svgContainer" id="svgContainer" v-html="svgCode"
                                                 v-bind:style="svgStyle"></div>
                                        </div>
                                        <div class="generator-preview__customizer">
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div aria-controls="customizer-frame"
                                                             aria-expanded="true"
                                                             data-target="#customizer-frame"
                                                             data-toggle="collapse"><span
                                                                    class="generator-preview__customizer-title">边框</span><i
                                                                    class="icon icon-chevron-down"></i></div>
                                                    </div>
                                                    <div aria-labelledby="headingOne" class="collapse show"
                                                         data-parent="#accordion" id="customizer-frame">
                                                        <div class="card-body"><!---->
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameName == 'no-frame' }"
                                                                 v-on:click="frameChanged('no-frame')">
                                                                <i class="icon icon-ui-close"></i></div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameName == 'bottom-frame' }"
                                                                 v-on:click="frameChanged('bottom-frame')">
                                                                <i class="icon icon-frame2"></i></div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameName == 'bottom-tooltip' }"
                                                                 v-on:click="frameChanged('bottom-tooltip')">
                                                                <i class="icon icon-frame1"></i></div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameName == 'top-header' }"
                                                                 v-on:click="frameChanged('top-header')">
                                                                <i class="icon icon-frame3"></i></div>
                                                            <div>
                                                                <a class="generator__modal-open generator__modal-open--underline"
                                                                   data-gtm-event="frame-restriction">定制</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div aria-controls="customizer-color"
                                                             data-target="#customizer-color"
                                                             data-toggle="collapse"><span
                                                                    class="generator-preview__customizer-title">Color</span><i
                                                                    class="icon icon-chevron-down"></i></div>
                                                    </div>
                                                    <div aria-labelledby="headingOne" class="collapse"
                                                         data-parent="#accordion" id="customizer-color">
                                                        <div class="card-body"><!---->
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#000000' }"
                                                                 v-on:click="colorChanged('#000000')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(0, 0, 0);"></div>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#445f6f' }"
                                                                 v-on:click="colorChanged('#445f6f')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(68, 95, 111);"></div>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#704b4b' }"
                                                                 v-on:click="colorChanged('#704b4b')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(112, 75, 75);"></div>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#4caf50' }"
                                                                 v-on:click="colorChanged('#4caf50')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(76, 175, 80);"></div>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#e7c027' }"
                                                                 v-on:click="colorChanged('#e7c027')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(231, 192, 39);"></div>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#c23332' }"
                                                                 v-on:click="colorChanged('#c23332')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(194, 51, 50);"></div>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#1d78aa' }"
                                                                 v-on:click="colorChanged('#1d78aa')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(29, 120, 170);"></div>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#c843ed' }"
                                                                 v-on:click="colorChanged('#c843ed')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(200, 67, 237);"></div>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#c7407f' }"
                                                                 v-on:click="colorChanged('#c7407f')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(199, 64, 127);"></div>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': frameColor == '#384af0' }"
                                                                 v-on:click="colorChanged('#384af0')">
                                                                <div class="generator-preview__customizer-color"
                                                                     style="background-color: rgb(56, 74, 240);"></div>
                                                            </div>
                                                            <div>
                                                                <a class="generator__modal-open generator__modal-open--underline"
                                                                   data-gtm-event="color-restriction"> 定制 </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div aria-controls="customizer-logo"
                                                             data-target="#customizer-logo"
                                                             data-toggle="collapse"><span
                                                                    class="generator-preview__customizer-title">Logo</span><i
                                                                    class="icon icon-chevron-down"></i></div>
                                                    </div>
                                                    <div aria-labelledby="headingOne" class="collapse"
                                                         data-parent="#accordion" id="customizer-logo">
                                                        <div class="card-body">
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': qrCodeLogo == '' }"
                                                                 v-on:click="logoChanged('')"><i
                                                                        class="icon icon--customizer-logo icon-ui-close"></i>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': qrCodeLogo == 'scan-me' }"
                                                                 v-on:click="logoChanged('scan-me')"><i
                                                                        class="icon icon--customizer-logo icon-scan-me"></i>
                                                            </div>
                                                            <div class="generator-preview__customizer-btn"
                                                                 v-bind:class="{ 'generator-preview__customizer-btn--active': qrCodeLogo == 'scan-me-square' }"
                                                                 v-on:click="logoChanged('scan-me-square')"><i
                                                                        class="icon icon--customizer-logo icon-scan-me-square"></i>
                                                            </div>
                                                            <div>
                                                                <a class="generator__modal-open generator__modal-open--underline"
                                                                   data-gtm-event="logo-restriction"> Upload
                                                                    your own </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="generator-preview__download">
                                            <div class="d-flex justify-content-between align-items-center"
                                                 style="width: 100%">
                                                <button class="btn btn__rounded btn__rounded--green"
                                                        v-bind:class="{ 'btn__rounded--green--disabled': !svgCode || qrGenLoading }"
                                                        v-on:click="download">
                                                    <div class="btn__multiline-content"><i
                                                                class="icon icon-icon-download-thin"></i>
                                                        <div class="btn__multiline-content-wrapper"><span
                                                                    class="btn__multiline-content--text-top">下载</span><span
                                                                    class="btn__multiline-content--text-bottom">PNG</span>
                                                        </div>
                                                    </div>
                                                </button>
                                                <button class="btn btn__rounded btn__rounded--transparent btn__rounded--transparent--green-border"
                                                        v-bind:class="{'btn__rounded--transparent--disabled' : !svgCode || qrGenLoading}">
                                                    <div class="btn__multiline-content"><i
                                                                class="icon icon-icon-download-thin"></i>
                                                        <div class="btn__multiline-content-wrapper"><span
                                                                    class="btn__multiline-content--text-top">Vector</span><span
                                                                    class="btn__multiline-content--text-bottom">SVG/EPS</span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="seperator__wrapper">
                                            <div class="seperator__vertical-line"></div>
                                            <div class="seperator__container">
                                                <div class="seperator__spinner" v-if="qrGenLoading"></div>
                                                <i class="icon icon-check-done seperator__check"
                                                   v-if="!qrGenLoading && !!svgCode"></i>
                                                <i class="icon icon-chevron-right seperator__arrow"
                                                   v-if="!qrGenLoading && !svgCode"></i>
                                            </div>
                                            <div class="seperator__container-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-backdrop fade in" v-bind:class="{'show' : isDownload}" v-if="isDownload"></div>
    <div class="modal fade" v-bind:class="{'show' : isDownload}" role="dialog" tabindex="-1" aria-modal="true"
         style="display: block;" v-if="isDownload">
        <div role="document" class="modal-dialog download-modal">
            <div class="modal-content">
                <div class="modal-body download-modal__body"><i aria-label="Close"
                                                                class="icon icon-close-round generator-modal__close generator-modal__close--outer"
                                                                v-on:click="isDownload = false;"></i>
                    <div class="download-modal__header-container"><h5 class="header-container__header"><i
                                    class="icon icon-icon-download-thin"></i><span
                                    class="header-container__header-text">几秒钟后自动开始下载</span><img
                                    class="header-container__loading-img"
                                    src="{{ asset("images/download_preloader.gif") }}">
                        </h5></div>
                    <div class="download-modal__subheader-container"><h5 class="subheader-container__subheader">
                            希望有更多的人扫描您的二维码？</h5>
                        <p class="subheader-container__text"> 添加彩色带标志的二维码可以吸引更多的客户。您还可以查看有多少人扫描过二维码。免费注册立即试用。 </p>
                        <div class="subheader-container__arrow-down subheader-container__arrow-down--front"></div>
                        <div class="subheader-container__arrow-down subheader-container__arrow-down--back"></div>
                    </div>
                    <div class="download-modal__main-container"><h5 class="main-container__header">QR Code Generator
                            <span class="main-container__header--pro-badge">Pro（专业版）</span></h5>
                        <ul class="main-container__feature-list">
                            <li class="main-container__feature"><i
                                        class="icon main-container__feature-icon icon-checkmark-circled"></i> 定制二维码
                            </li>
                            <li class="main-container__feature"><i
                                        class="icon main-container__feature-icon icon-checkmark-circled"></i>
                                获取PNG、EPS、SVG版本
                            </li>
                            <li class="main-container__feature"><i
                                        class="icon main-container__feature-icon icon-checkmark-circled"></i> 查看扫描次数
                            </li>
                            <li class="main-container__feature"><i
                                        class="icon main-container__feature-icon icon-checkmark-circled"></i>
                                即使在打印后仍可编辑内容
                            </li>
                        </ul>
                        <a class="btn btn--green btn--green--signup"
                           href="https://app.qr-code-generator.com/site/signup/?target=download-dialog">立即免费注册 <i
                                    class="icon icon--right icon-chevron-right"></i></a></div><!----><!---->
                    <div class="download-modal__footer-container"><p class="footer-container__text">已经有账户？ <a
                                    class="anchor--blue" href="https://app.qr-code-generator.com/">在这里登录。</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- Scripts -->
<script src="{{ asset("js/manifest.js") }}"></script>
<script src="{{ asset("js/vendor.js") }}"></script>
<script src="{{ asset("js/app.js") }}"></script>
<script>
    new Vue({
        el: '#app',
        data: {
            isDynamic: false,
            qrCodeText: '',
            frameName: 'no-frame',
            frameText: 'Scan me',
            frameIconName: 'mobile',
            frameColor: '#000000',
            foregroundColor: '#000000',
            qrCodeLogo: '',
            svgCode: '',
            isActive: 'website',
            qrGenLoading: false,
            isDownload: false,
            isQrCodeTextChanged: true,
            website: {
                url: '',
            },
            vCard: {
                firstName: '',
                lastName: '',
                mobile: '',
                phone: '',
                tax: '',
                email: '',
                company: '',
                job: '',
                street: '',
                city: '',
                zip: '',
                state: '',
                country: '',
                website: '',
            },
            text: {
                value: '',
            },
            email: {
                to: '',
                sub: '',
                body: '',
            },
            sms: {
                to: '',
                body: '',
            }
        },
        created: function () {
        },
        computed: {
            svgStyle: function () {
                return this.qrGenLoading ? {
                    opacity: 0.1,
                    display: 'block',
                } : {
                    opacity: 1,
                    display: 'block',
                }
            }
        },
        methods: {
            create: function () {
                let that = this;
                that.qrGenLoading = true;
                that.setQrCodeText();

                let params = {
                    frame_name: that.frameName,
                    qr_code_text: that.qrCodeText,
                    frame_text: 'Scan me',
                    frame_icon_name: 'mobile',
                    frame_color: that.frameColor,
                    foreground_color: that.foregroundColor,
                    qr_code_logo: that.qrCodeLogo,
                };

                axios.post('/api/v1/create',  params).then(res => {
                    console.log(res)
                    $(document.body).addClass('body--generator-step-2');

                    that.qrGenLoading = false;
                    that.isQrCodeTextChanged = false;
                    that.svgCode = res.data;
                }).catch(err => {
                    console.log(err)
                });
            },
            setQrCodeText: function () {

                if (this.isActive == 'website') {
                    this.qrCodeText = this._padScheme(this.website.url);
                } else if (this.isActive == 'vcard') {
                    let {
                        lastName,
                        firstName,
                        company,
                        job,
                        street,
                        state,
                        city,
                        zip,
                        country,
                        phone,
                        mobile,
                        fax,
                        email,
                        website
                    } = this.vCard;

                    let qrCodeText = 'BEGIN:VCARD';
                    qrCodeText += '\nVERSION:3.0';
                    qrCodeText += '\nN:' + lastName + ';' + firstName;
                    qrCodeText += '\nFN:' + firstName + " " + lastName;
                    qrCodeText += '\nORG:' + company;
                    qrCodeText += '\nTITLE:' + job;
                    qrCodeText += '\nADR:;;' + street + ';' + state + ';' + city + ';' + zip + ';' + country;
                    qrCodeText += '\nTEL;WORK;VOICE:' + phone;
                    qrCodeText += '\nTEL;CELL:' + mobile;
                    qrCodeText += '\nTEL;FAX:' + fax;
                    qrCodeText += '\nEMAIL;WORK;INTERNET:' + email;
                    qrCodeText += '\nURL:' + website;
                    qrCodeText += '\nEND:VCARD\n';

                    this.qrCodeText = qrCodeText;
                } else if (this.isActive == 'text') {
                    this.qrCodeText = this.text.value;
                } else if (this.isActive == 'email') {
                    let {to, sub, body} = this.email;
                    let qrCodeText = 'MATMSG:TO:' + to + ';SUB:' + sub + ';BODY:' + body+ ';;';
                    this.qrCodeText = qrCodeText;
                } else if (this.isActive == 'sms') {
                    let {to, body} = this.sms;
                    let qrCodeText = 'SMSTO:' + to + ':' + body;
                    this.qrCodeText = qrCodeText;
                }
            },
            isActiveChanged: function (isActive) {
                this.isActive = isActive;
            },
            qrCodeTextChanged: function () {
                this.isQrCodeTextChanged = true;
            },
            frameChanged: function (frameName) {
                this.frameName = frameName;
                this.create();
            },
            colorChanged: function (color) {
                this.frameColor = color;
                this.foregroundColor = color;
                this.create();
            },
            logoChanged: function (logo) {
                this.qrCodeLogo = logo;
                this.create();
            },
            download: function () {
                let that = this;
                that.isDownload = true;

                axios.post('/api/v1/create', {
                    frame_name: that.frameName,
                    qr_code_text: that.qrCodeText,
                    frame_text: 'Scan me',
                    frame_icon_name: 'mobile',
                    frame_color: that.frameColor,
                    foreground_color: that.foregroundColor,
                    qr_code_logo: that.qrCodeLogo,
                    image_format: 'PNG',
                    image_width: 300,
                    download: 1,
                }, {
                    responseType: 'blob'
                }).then(res => {
                    console.log(res)

                    let blob = new Blob([res.data], {type: "image/png;charset=utf-8"});

                    if (that._isMobile()) {
                        let newPage = window.open();
                        let url = window.URL.createObjectURL(blob);
                        newPage.location.href = url;
                    } else {
                        FileSaver.saveAs(blob, "frame.png");
                    }
                    // if (window.navigator.msSaveOrOpenBlob) {
                    //     navigator.msSaveBlob(blob, 'frame.png');
                    // } else {
                    //     // 创建隐藏的可下载链接
                    //     let eleLink = document.createElement('a');
                    //     eleLink.download = 'frame.png';
                    //     eleLink.style.display = 'none';
                    //     // 字符内容转变成blob地址
                    //     eleLink.href = URL.createObjectURL(blob);
                    //     // 触发点击
                    //     document.body.appendChild(eleLink);
                    //     eleLink.click();
                    //     // 然后移除
                    //     document.body.removeChild(eleLink);
                    //     window.URL.revokeObjectURL(eleLink.href);
                    // }
                }).catch(err => {
                    console.log(err)
                });
            },
            goBack: function () {
                this.isQrCodeTextChanged = true;
                $(document.body).removeClass('body--generator-step-2');
            },
            _padScheme: function (website) {
                return website ? (website.startsWith('http') ? website : 'http://' + website) : 'https://www.example.com';
            },
            _isMobile: function () {
                return navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i)
            }
        }
    })

</script>
</body>
</html>
