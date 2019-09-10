<template>
        <div class="section-content section-content_generator-add newgenerator row state-generator-codetype addMode  generator_preview">
            <div class="backdrop-overlay" data-backdrop-overlay=""></div>
            <div class="grid">
                <div class="col">
                    <div class="row-generator-body ">
                        <div class="section-generator ">
                            <div class="carousel slide">
                                <div class="carousel-inner ">
                                    <div class="codetype-view item active white-form">
                                        <div class="redesign" data-new-status="">
                                            <div class="row row-generator-codetype-chooser white-form codetype-menu v1">

                                                <div class="col-lg-12 content-group mb-40 heading__section">
                                                    <h3>Select your QR Code Type                <button class="btn-help visible-lg-inline-block" title="" data-original-title=""></button>
                                                    </h3>
                                                    <div class="content-wrapper text-center">
                                                        <span class="title "><span class="text">Dynamic Codes</span></span>
                                                        <span class="tools" v-on:click="showDynamic= !showDynamic"><i class="icon-minus icon-minus-1" v-bind:class="{'icon-minus-1':showDynamic,'icon-plus-1':!showDynamic}"></i></span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 content-group mb-40 pl-0 pr-0 industry__search">
                                                    <div class="create__header create__header--position">
                                                        <h3 class="create__heading">Select your QR Code type</h3>
                                                        <div class="create-header__search-box">
                                                            <div class="create-header__search-container">
                                                                <input type="search" placeholder="Try &quot;Educational Institution&quot;" maxlength="400" class="input__control input_theme_create-search ng-pristine ng-untouched ng-valid ng-valid-maxlength" tabindex="1" data-industry-search="" ng-model="industrySearchKeyword" ng-model-options="{ debounce: 500 }" ng-change="startSearching(industrySearchKeyword)" ng-focus="searchFieldFocus()" ng-blur="searchFieldFocusLost($event)">
                                                                <button type="button" class="button button_theme_reset button_industry" autocomplete="off" aria-pressed="false" tabindex="0" aria-disabled="false">
                            <span class="button__text">
                                <svg class="search__icon-view" xmlns="http://www.w3.org/2000/svg" width="17.811" height="17.811">
                                    <g transform="translate(-1.25 -1.25)" fill="none" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1.5">
                                        <path d="M18 18l-4.942-4.942"></path>
                                        <circle cx="6.232" cy="6.232" r="6.232" transform="translate(2 2)"></circle>
                                    </g>
                                </svg>
                            </span>
                                                                </button>
                                                                <div class="search__icon-box">
                                                                    <button type="button" class="button button_theme_reset button_left-drop-down" autocomplete="off" aria-pressed="false" tabindex="2" aria-disabled="false" ng-click="displaySearchSuggestions()">
                                                                        <svg class="search__icon-arrow-down" xmlns="http://www.w3.org/2000/svg" width="8.828" height="14.828">
                                                                            <path data-name="Path 16849" d="M1.414 13.414l6-6-6-6" fill="none" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <span class="badge badge_new-search ng-scope" ng-if="searchBox.newLabelValue <= 0">New</span>
                                                                </div>
                                                                <div class="search__suggest-container">
                                                                    <div class="search__suggest ps-container ps-theme-default ps-active-y" data-ps-id="bea24d86-4a7f-e85a-ccec-7a66dec95f20">
                                                                        <div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Tourism" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="1" style="">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--tourism">
                                            <i class="icon icon-industry-tourism"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Tourism</span>
                                                                    </div><div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Personal Use" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="2">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--personal-use">
                                            <i class="icon icon-industry-personal-use"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Personal Use</span>
                                                                    </div><div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Photographer &amp; Videographer" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="3">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--photographer-videographer">
                                            <i class="icon icon-industry-photographer-videographer"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Photographer &amp; Videographer</span>
                                                                    </div><div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Cities &amp; Culture" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="4">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--cities-culture">
                                            <i class="icon icon-industry-cities-culture"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Cities &amp; Culture</span>
                                                                    </div><div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Event Management" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="5">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--event-management">
                                            <i class="icon icon-industry-event-management"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Event Management</span>
                                                                    </div><div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Musician &amp; Artists" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="6">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--musician-artists">
                                            <i class="icon icon-industry-musician-artists"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Musician &amp; Artists</span>
                                                                    </div><div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Home &amp; Repair" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="7">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--home-repair">
                                            <i class="icon icon-industry-home-repair"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Home &amp; Repair</span>
                                                                    </div><div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Finance &amp; Insurance" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="8">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--finance-insurance">
                                            <i class="icon icon-industry-finance-insurance"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Finance &amp; Insurance</span>
                                                                    </div><div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Business Consultants" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="9">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--business-consultants">
                                            <i class="icon icon-industry-business-consultants"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Business Consultants</span>
                                                                    </div><div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Publishers" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="10">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--publishers">
                                            <i class="icon icon-industry-publishers"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Publishers</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Real Estate" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="11">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--real-estate">
                                            <i class="icon icon-industry-real-estate"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Real Estate</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Restaurants &amp; Bars" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="12">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--restaurants-bars">
                                            <i class="icon icon-industry-restaurants-bars"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Restaurants &amp; Bars</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Retail" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="13">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--retail">
                                            <i class="icon icon-industry-retail"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Retail</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Software &amp; IT" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="14">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--software-it">
                                            <i class="icon icon-industry-software-it"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Software &amp; IT</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Nonprofits" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="15">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--nonprofits">
                                            <i class="icon icon-industry-nonprofits"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Nonprofits</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Hotels &amp; Resorts" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="16">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--hotels-resorts">
                                            <i class="icon icon-industry-hotels-resorts"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Hotels &amp; Resorts</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Gyms &amp; Wellness" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="17">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--gyms-wellness">
                                            <i class="icon icon-industry-gyms-wellness"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Gyms &amp; Wellness</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Government" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="18">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--government">
                                            <i class="icon icon-industry-government"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Government</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Educational Institutions" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="19">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--educational-institutions">
                                            <i class="icon icon-industry-educational-institutions"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Educational Institutions</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Products" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="20">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--products">
                                            <i class="icon icon-industry-products"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Products</span>
                                                                    </div>/login<div ng-hide="states.loading" ng-repeat="industry in industries | industrySearch:industrySearchKeyword" title="Doctors &amp; Healthcare" aria-selected="false" aria-disabled="false" class="search__suggest-item ng-scope" ng-click="selectIndustry(industry, $event)" data-industry-id="21">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--doctors-healthcare">
                                            <i class="icon icon-industry-doctors-healthcare"></i>
                                        </span>
                                    </span>
                                                                        <span class="search__suggest-name ng-binding">Doctors &amp; Healthcare</span>
                                                                    </div>/login
                                                                        <div ng-show="states.noSearchResults" class="search__suggest-item search__suggest-item--no-search-results ng-hide">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon">
                                            <i class="icon icon-zoom-search"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name">No search results. Try "<span data-search-suggestion=""></span>"</span>
                                                                        </div>
                                                                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 192px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 24px;"></div></div></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                   <div class="content-wrapper text-center ng-scope" ng-if="industryDemos.length <= 0">
                <span class="title ">
                    <span class="text">Dynamic Codes</span>
                </span>
                                                </div>
                                                </div>
                                                <div class="col-lg-12 dynamiccodes" v-bind:class="{'hidden':!showDynamic}">

                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6 col-sm-12">
                                                        <a data-type="url" class="btn-codetype" id="codeFormId_1" loadurl="https://app.qr-code-generator.com/create/getform/add/url">
                                                            <i class="icon icon-creation-code-url pull-left"></i>
                                                            <h4>Website</h4>
                                                            <small class="text-ellipsis" title="Link to any page on the web">
                                                                Link to any page on the web                    </small>
                                                        </a>
                                                    </div>
                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dsocial" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dsocial" id="codeFormId_14" has-video="false">
                                                            <i class="icon icon-creation-code-social pull-left"></i>
                                                            <h4>Social Media</h4>

                                                            <small class="text-ellipsis" title="Link to your social media channels">
                                                                Link to your social media channels                    </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="coupon" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/coupon" id="codeFormId_18" has-video="false">
                                                            <i class="icon icon-coupon pull-left"></i>
                                                            <h4>Coupons</h4>

                                                            <small class="text-ellipsis" title="Share coupons and discounts">
                                                                Share coupons and discounts                    </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6 col-sm-12">
                                                        <a data-type="angular" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/angular" id="codeFormId_12" has-video="false">
                                                            <i class="icon icon-creation-code-vcard pull-left"></i>
                                                            <h4>vCard Plus</h4>

                                                            <small class="text-ellipsis" title="Share personalized contact details">
                                                                Share personalized contact details                    </small>

                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dbusiness_page" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dbusiness_page" id="codeFormId_15" has-video="false">
                                                            <i class="icon icon-manage-code-business-page pull-left"></i>
                                                            <h4>Business Page</h4>
                                                            <small class="text-ellipsis" title="Provide your company information">
                                                                Provide your company information                    </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="feedback" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/feedback" id="codeFormId_17" has-video="false">
                                                            <i class="icon icon-creation-code-feedback pull-left"></i>
                                                            <h4>Feedback</h4>
                                                            <small class="text-ellipsis" title="Collect feedback and get rated">
                                                                Collect feedback and get rated                    </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="drating" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/drating" id="codeFormId_19">
                                                            <i class="icon icon-creation-code-rating pull-left"></i>
                                                            <h4>Rating</h4>
                                                            <small class="text-ellipsis" title="Ask a question and get rated">
                                                                Ask a question and get rated                    </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dvideo" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dvideo" id="codeFormId_16" has-video="false">
                                                            <i class="icon icon-creation-add-video pull-left"></i>
                                                            <h4>Video</h4>
                                                            <small class="text-ellipsis" title="Show the video page">
                                                                Share one or more videos                    </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="devent" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/devent" id="codeFormId_13" has-video="false">
                                                            <i class="icon icon-creation-code-event pull-left"></i>
                                                            <h4>Event</h4>
                                                            <small class="text-ellipsis" title="Promote your event">
                                                                Promote your event                    </small>
                                                        </a>
                                                    </div>

                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dpdf" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dpdf" id="codeFormId_20">
                                                            <i class="icon icon-creation-code-pdf pull-left"></i>
                                                            <h4>PDF</h4>
                                                            <small class="text-ellipsis" title="Link to a mobile-optimized PDF">
                                                                Link to a mobile-optimized PDF                    </small>
                                                        </a>
                                                    </div>

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="facebook" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/facebook" id="codeFormId_4">
                                                            <i class="icon icon-creation-code-facebook pull-left"></i>
                                                            <h4>Facebook</h4>

                                                            <small class="text-ellipsis" title="Get more Likes for your page">
                                                                Get more Likes for your page                    </small>
                                                        </a>
                                                    </div>


                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dapp" class="btn-codetype" id="codeFormId_21" loadurl="https://app.qr-code-generator.com/create/getform/add/dapp">
                                                            <i class="icon icon-creation-code-app pull-left"></i>
                                                            <h4>App</h4>

                                                            <small class="text-ellipsis" title="View your app on various App Stores">
                                                                View your app on various App Stores                    </small>
                                                        </a>
                                                    </div>

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dmp3" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dmp3" id="codeFormId_22">
                                                            <i class="icon icon-creation-code-dmp3 pull-left"></i>
                                                            <h4>MP3</h4>

                                                            <small class="text-ellipsis" title="Play an audio file">
                                                                Play an audio file                    </small>
                                                        </a>
                                                    </div>


                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dgallery" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dgallery" id="codeFormId_23">
                                                            <i class="icon icon-creation-code-gallery pull-left"></i>
                                                            <h4>Images</h4>
                                                            <span class="badge new"> updated</span>
                                                            <small class="text-ellipsis" title="Show a series of photos">
                                                                Show a series of photos                    </small>
                                                        </a>

                                                    </div>


                                                </div>
                                            </div>
                                            <div class="row row-generator-codetype-chooser white-form codetype-menu v2 hidden">

                                                <div class="col-lg-12 content-group mb-40">
                                                    <h3>Select your QR Code Type                <button class="btn-help visible-lg-inline-block" title="" data-original-title=""></button>
                                                    </h3>
                                                    <div class="content-wrapper text-center">
                                                        <span class="title "><span class="text">Dynamic Codes</span></span>
                                                        <span class="tools" v-on:click="showDynamic= !showDynamic"><i class="icon-minus icon-minus-1" v-bind:class="{'icon-minus-1':showDynamic,'icon-plus-1':!showDynamic}"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 dynamiccodes" v-bind:class="{'hidden':!showDynamic}">

                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6 col-sm-12">
                                                        <a data-type="url" class="btn-codetype" id="codeFormId_1" loadurl="https://app.qr-code-generator.com/create/getform/add/url">
                                                            <i class="icon icon-creation-code-url pull-left"></i>
                                                            <h4>Website</h4>
                                                            <small class="text-ellipsis" title="Link to any page on the web">
                                                                Link to any page on the web                    </small>
                                                        </a>
                                                    </div>
                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dpdf" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dpdf" id="codeFormId_20">
                                                            <i class="icon icon-creation-code-pdf pull-left"></i>
                                                            <h4>PDF</h4>
                                                            <small class="text-ellipsis" title="Link to a mobile-optimized PDF">
                                                                Link to a mobile-optimized PDF                    </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6 col-sm-12">
                                                        <a data-type="angular" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/angular" id="codeFormId_12" has-video="false">
                                                            <i class="icon icon-creation-code-vcard pull-left"></i>
                                                            <h4>vCard Plus</h4>

                                                            <small class="text-ellipsis" title="Share personalized contact details">
                                                                Share personalized contact details                    </small>

                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dvideo" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dvideo" id="codeFormId_16" has-video="false">
                                                            <i class="icon icon-creation-add-video pull-left"></i>
                                                            <h4>Video</h4>
                                                            <small class="text-ellipsis" title="Show the video page">
                                                                Share one or more videos                    </small>
                                                        </a>
                                                    </div>

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="facebook" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/facebook" id="codeFormId_4">
                                                            <i class="icon icon-creation-code-facebook pull-left"></i>
                                                            <h4>Facebook</h4>
                                                            <span class="badge new"> updated</span>
                                                            <small class="text-ellipsis" title="Get more Likes for your page">
                                                                Get more Likes for your page                    </small>
                                                        </a>
                                                    </div>

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dsocial" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dsocial" id="codeFormId_14" has-video="false">
                                                            <i class="icon icon-creation-code-social pull-left"></i>
                                                            <h4>Social Media</h4>

                                                            <small class="text-ellipsis" title="Link to your social media channels">
                                                                Link to your social media channels                    </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="app" class="btn-codetype" id="codeFormId_3" loadurl="https://app.qr-code-generator.com/create/getform/add/app">
                                                            <i class="icon icon-creation-code-app pull-left"></i>
                                                            <h4>App</h4>
                                                            <small class="text-ellipsis" title="View your app on various App Stores">
                                                                View your app on various App Stores                    </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="feedback" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/feedback" id="codeFormId_17" has-video="false">
                                                            <i class="icon icon-creation-code-feedback pull-left"></i>
                                                            <h4>Feedback</h4>

                                                            <small class="text-ellipsis" title="Collect feedback and get rated">
                                                                Collect feedback and get rated
                                                            </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="drating" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/drating" id="codeFormId_19">
                                                            <i class="icon icon-creation-code-rating pull-left"></i>
                                                            <h4>Rating</h4>

                                                            <small class="text-ellipsis" title="Ask a question and get rated">
                                                                Ask a question and get rated
                                                            </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="coupon" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/coupon" id="codeFormId_18" has-video="false">
                                                            <i class="icon icon-coupon pull-left"></i>
                                                            <h4>Coupons</h4>

                                                            <small class="text-ellipsis" title="Share coupons and discounts">
                                                                Share coupons and discounts                    </small>
                                                        </a>
                                                    </div>


                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dbusiness_page" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dbusiness_page" id="codeFormId_15" has-video="false">
                                                            <i class="icon icon-manage-code-business-page pull-left"></i>
                                                            <h4>Business Page</h4>
                                                            <small class="text-ellipsis" title="Provide your company information">
                                                                Provide your company information                    </small>
                                                        </a>
                                                    </div>


                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="devent" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/devent" id="codeFormId_13" has-video="false">
                                                            <i class="icon icon-creation-code-event pull-left"></i>
                                                            <h4>Event</h4>
                                                            <small class="text-ellipsis" title="Promote your event">
                                                                Promote your event                    </small>
                                                        </a>
                                                    </div>


                                                    <!--Left card-->

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dmp3" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/dmp3" id="codeFormId_22">
                                                            <i class="icon icon-creation-code-dmp3 pull-left"></i>
                                                            <h4>MP3</h4>
                                                            <span class="badge new"> updated</span>
                                                            <small class="text-ellipsis" title="Play an audio file">
                                                                Play an audio file                    </small>
                                                        </a>
                                                    </div>


                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="gallery" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/gallery" id="codeFormId_7">
                                                            <i class="icon icon-creation-code-gallery pull-left"></i>
                                                            <h4>Images</h4>
                                                            <small class="text-ellipsis" title="Show a series of photos">
                                                                Show a series of photos                    </small>
                                                        </a>

                                                    </div>


                                                </div>
                                            </div>
                                            <div class="row row-generator-codetype-chooser white-form codetype-menu mb20 mt-0">

                                                <div class="col-lg-12 content-group mb-40 mt_10">

                                                    <div class="content-wrapper text-center">
                                                        <span class="title "><span class="text">Static Codes</span></span>
                                                        <span class="tools" v-on:click="showStatic= !showStatic">
                    <i class="icon-minus" v-bind:class="{'icon-minus-1':showStatic,'icon-plus-1':!showStatic}"></i>
                </span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 staticcodes" v-bind:class="{'hidden':!showStatic}">
                                                    <div class="code-type-card col-lg-6 ">
                                                        <a data-type="url_static" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/url?action=static" id="codeFormId_1">
                                                            <i class="icon icon-creation-code-url pull-left"></i>
                                                            <h4>Website</h4>

                                                            <small class="text-ellipsis" title="Link to any page on the web">
                                                                Link to any page on the web                    </small>

                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="vcard" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/vcard" id="codeFormId_2">
                                                            <i class="icon icon-creation-code-vcard pull-left"></i>
                                                            <h4>vCard</h4>

                                                            <small class="text-ellipsis" title="Share contact details">
                                                                Share contact details                    </small>
                                                        </a>
                                                    </div>


                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="email" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/email" id="codeFormId_8">
                                                            <i class="icon icon-creation-code-email pull-left"></i>
                                                            <h4>Email</h4>

                                                            <small class="text-ellipsis" title="Get email messages">
                                                                Get email messages                    </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="sms" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/sms" id="codeFormId_9">
                                                            <i class="icon icon-creation-code-sms pull-left"></i>
                                                            <h4>SMS</h4>

                                                            <small class="text-ellipsis" title=" Get text messages">
                                                                Get text messages                    </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="text" class="btn-codetype" loadurl="https://app.qr-code-generator.com/create/getform/add/text" id="codeFormId_10">
                                                            <i class="icon icon-creation-code-text pull-left"></i>
                                                            <h4>Text</h4>

                                                            <small class="text-ellipsis" title="Display a short message">
                                                                Display a short message                    </small>

                                                        </a>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                                                </div>
                                    <div id="formHere" class="item redesign"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sk-three-bounce">
                        <div class="sk-child sk-bounce1"></div>
                        <div class="sk-child sk-bounce2"></div>
                        <div class="sk-child sk-bounce3"></div>
                    </div>
                    <div class="apply-fixedBottom-footerGenerator">
                        <div class="footer-generator-actions content-footer redesign generator-float-bottom" style="margin-left: 0px;">
                            <div class="table-cell-middle">
                                <div class="container" style="width: 100%;">
                                    <div class="col-lg-12 col-xs-12">
                                        <div class="row firststep">
                                            <div class="section-content section-content_generator-footer">
                                                <div class="grid">
                                                    <div class="col">
                                                        <div class="col-lg-12">
                                                            <button class="btn green lc big btn-generator-next pull-right col-lg-6 btn_create_next disabled ladda-button" data-style="expand-left"><span class="ladda-label">Next</span><span class="ladda-spinner"></span></button>
                                                        </div>
                                                    </div>
                                                    <div class="col col-fixed col-preview" style="width:466px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row secondstep">
                                            <div class="section-content section-content_generator-footer">
                                                <div class="grid">
                                                    <div class="col footer__left">
                                                        <button class="btn lc btn-generator-prev pull-left"><i class="icon icon-chevron-left-medium pull-left"></i>Back</button>
                                                        <div class="footer__view-mobile" data-generate-mobile-bar="">
                                                            <ul>
                                                                <li class="btn-generator-prev">
                                                                    <i class="icon icon-arrow-24px"></i>
                                                                </li>
                                                                <!-- ngRepeat: item in items --><li ng-repeat="item in items" ng-class="{'active': item.id == states.activeItem}" ng-click="states.activeItem = item.id; states.viewType = item.class; codeValidation(); disableScrolling(); toggleView();" class="ng-scope">
                                                                <i ng-class="'icon icon-' + item.icon" class="icon icon-pencil-24px"></i>
                                                            </li><!-- end ngRepeat: item in items --><li ng-repeat="item in items" ng-class="{'active': item.id == states.activeItem}" ng-click="states.activeItem = item.id; states.viewType = item.class; codeValidation(); disableScrolling(); toggleView();" class="ng-scope">
                                                                <i ng-class="'icon icon-' + item.icon" class="icon icon-phone-24px"></i>
                                                            </li><!-- end ngRepeat: item in items --><li ng-repeat="item in items" ng-class="{'active': item.id == states.activeItem}" ng-click="states.activeItem = item.id; states.viewType = item.class; codeValidation(); disableScrolling(); toggleView();" class="ng-scope">
                                                                <i ng-class="'icon icon-' + item.icon" class="icon icon-qr-code-mobile"></i>
                                                            </li><!-- end ngRepeat: item in items -->
                                                            </ul>
                                                        </div>
                                                        <button type="button" class="btn green lc big block btn-generator-save-directly pull-right col-lg-6 ladda-button" data-style="expand-left"><span class="ladda-label">Next</span><span class="ladda-spinner"></span></button>
                                                    </div>
                                                    <div class="col col-fixed footer__bar" style="width:466px;">
                                                        <div class="footer__button">
                                                            <!--                                    <button type="button" class="btn green lc big block btn-generator-save-directly ladda-button" data-style="expand-left">--><!--</button>-->
                                                            <!--<button class="btn green lc big block btn-generator-done simple-save-btn">Done</button>
                                                            <button class="download-save-btn-left hidden btn green lc big block btn-generator-done">Done</button>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>            </div>
                </div>
                <div class="col col-fixed col-preview" style="width:466px;">
                    <!--  begin: overflow base -->
                    <div class="overflow_base"></div>
                    <!--  end: overflow base -->
                    <div class="redesign data__mockup" style="margin-left: 0px;">

                        <div class="preview clearfix mockup__preview" data-spy="affix" data-offset-top="26">
                            <button class="btn-slide-toggler btn-slide-toggler_label active" style="display: none">
            <span class="btn-slide-toggler__phone">
                Preview            </span>
                                <span class="btn-slide-toggler__code">
                QR Code            </span>
                            </button>
                            <div class="preview-qrcode mockup__qrcode qrcode_create" style="display: none;">
                                <div class="code" id="barcodeHere">
                                    <div class="qr-preview-overlay" style="opacity: 0;"></div>
                                    <img id="barcodeImage" src="/images/qrcode_placeholder.png" alt="">
                                    <div class="mockup__qrcode-error">
                                        <div class="mockup__qrcode-error-content">
                                            <i class="icon icon-info-icon"></i>
                                            <h4>Fill in the required fields in the form to preview your QR Code</h4>
                                        </div>
                                    </div>
                                </div>
                                <h3>Scan this QR Code to preview</h3>
                                <p>You can customize the design of your <br> QR Code in the next step.</p>
                            </div>
                            <div class="preview-smartphone clearfix active mockup__smartphone" style="">
                                <div class="preview-smartphone-wrapper noVideo mockup__smartphone-wrapper ng-scope" ng-controller="previewController" style="display: none;">
                                    <div id="smartphonePlaceholder" class="placeholder ratchet"></div>
                                    <div class="previewNoVideoText">
                                        <span class="static-code-text" style="display: none">No live preview</span>
                                        <div class="code-white-card" style="display: none;">
                                            <img id="code-image" src="">
                                            <div class="code-text">
                                                <i id="code-icon" class="icon-creation-code-url"></i>
                                                <span>
                                Scan to see a live preview                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="loading-video" style="display: none">
                                        <div>Loading video</div>
                                        <div class="progress">
                                            <div class="loading-bar indeterminate"></div>
                                        </div>
                                    </div>

                                    <div id="imgPlaceholder" class="placeholder ratchet previewNoVideo" style="overflow: hidden;"></div>
                                </div>
                            </div>
                            <div class="landscapeOrientation" style="display: none;">
                                <i class="icon icon-rotate-phone-48px-v1"></i>
                                <h5>Rotate device to display preview mode</h5>
                            </div>
                        </div>
                        <div class="creation-no-default" style="display: block;">
                            <img src="//cdn.qr-code-generator.com/img/generator/cody/CodyE_PointingLeft.svg">
                            <div>Please choose one to view a page preview</div>
                        </div>
                    </div>

                          </div>
            </div>
        </div>
</template>

<script>
    export default {
        data: function () {
            return {
                showDynamic: true,
                showStatic: false,
            }
        }
    }
</script>

<style scoped>

    @media (min-width: 992px) {
        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%;
            float: left;
        }
    }

</style>