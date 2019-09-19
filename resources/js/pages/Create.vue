<template>
    <div>
        <div class="qr-navbar" data-navbar="" style="background: none; position: relative;">

            <div class="qr-navbar__element" v-show="!secondStep">
                <div class="qr-navbar__element qr-navbar__menu qr-navbar__menu__back-button noselect"
                     ng-show="route != 'manage/new'">
                    <a ng-click="goBack($event)" href="/home">
                        <i class="icon-event-back"></i>

                        <span ng-show="route != 'create/index' &amp;&amp; route != 'create/new'"
                              class="ng-hide">Back</span>

                    </a>
                </div>
            </div>
        </div>

        <div class="section-content section-content_generator-add newgenerator row  addMode  generator_preview"
             :class="{'state-generator-data': secondStep, 'state-generator-codetype': !secondStep}"
             style="padding-bottom: 64px;">
            <div class="grid">
                <div class="col">
                    <div class="row-generator-body ">
                        <div class="section-generator ">
                            <div class="carousel slide">
                                <div class="carousel-inner ">
                                    <div class="codetype-view item white-form" v-bind:class="{'active': !secondStep}">
                                        <div class="redesign" data-new-status="">
                                            <div class="row row-generator-codetype-chooser white-form codetype-menu v1">

                                                <div class="col-lg-12 content-group mb-40 heading__section">
                                                    <h3>Select your QR Code Type
                                                        <button class="btn-help visible-lg-inline-block" title=""
                                                                data-original-title=""></button>
                                                    </h3>
                                                    <div class="content-wrapper text-center">
                                                        <span class="title "><span
                                                                class="text">Dynamic Codes</span></span>
                                                        <span class="tools" v-on:click="showDynamic= !showDynamic"><i
                                                                class="icon-minus icon-minus-1"
                                                                v-bind:class="{'icon-minus-1':showDynamic,'icon-plus-1':!showDynamic}"></i></span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 content-group mb-40 pl-0 pr-0 industry__search">
                                                    <div class="create__header create__header--position">
                                                        <h3 class="create__heading">Select your QR Code type</h3>
                                                        <div class="create-header__search-box">
                                                            <div class="create-header__search-container">
                                                                <input type="search"
                                                                       placeholder="Try &quot;Educational Institution&quot;"
                                                                       maxlength="400"
                                                                       class="input__control input_theme_create-search"
                                                                       tabindex="1" data-industry-search="">
                                                                <button type="button"
                                                                        class="button button_theme_reset button_industry"
                                                                        autocomplete="off" aria-pressed="false"
                                                                        tabindex="0"
                                                                        aria-disabled="false">
                            <span class="button__text">
                                <svg class="search__icon-view" xmlns="http://www.w3.org/2000/svg" width="17.811"
                                     height="17.811">
                                    <g transform="translate(-1.25 -1.25)" fill="none" stroke-linecap="square"
                                       stroke-miterlimit="10" stroke-width="1.5">
                                        <path d="M18 18l-4.942-4.942"></path>
                                        <circle cx="6.232" cy="6.232" r="6.232" transform="translate(2 2)"></circle>
                                    </g>
                                </svg>
                            </span>
                                                                </button>
                                                                <div class="search__icon-box">
                                                                    <button type="button"
                                                                            class="button button_theme_reset button_left-drop-down"
                                                                            autocomplete="off" aria-pressed="false"
                                                                            tabindex="2" aria-disabled="false">
                                                                        <svg class="search__icon-arrow-down"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="8.828" height="14.828">
                                                                            <path data-name="Path 16849"
                                                                                  d="M1.414 13.414l6-6-6-6" fill="none"
                                                                                  stroke-linecap="square"
                                                                                  stroke-miterlimit="10"
                                                                                  stroke-width="2"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <span class="badge badge_new-search ng-scope"
                                                                          ng-if="searchBox.newLabelValue <= 0">New</span>
                                                                </div>
                                                                <div class="search__suggest-container">
                                                                    <div class="search__suggest ps-container ps-theme-default ps-active-y"
                                                                         data-ps-id="bea24d86-4a7f-e85a-ccec-7a66dec95f20">
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Tourism" aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="1" style="">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--tourism">
                                            <i class="icon icon-industry-tourism"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Tourism</span>
                                                                        </div>
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Personal Use" aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="2">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--personal-use">
                                            <i class="icon icon-industry-personal-use"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Personal Use</span>
                                                                        </div>
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Photographer &amp; Videographer"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="3">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--photographer-videographer">
                                            <i class="icon icon-industry-photographer-videographer"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Photographer &amp; Videographer</span>
                                                                        </div>
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Cities &amp; Culture"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="4">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--cities-culture">
                                            <i class="icon icon-industry-cities-culture"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Cities &amp; Culture</span>
                                                                        </div>
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Event Management"
                                                                             aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="5">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--event-management">
                                            <i class="icon icon-industry-event-management"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Event Management</span>
                                                                        </div>
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Musician &amp; Artists"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="6">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--musician-artists">
                                            <i class="icon icon-industry-musician-artists"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Musician &amp; Artists</span>
                                                                        </div>
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Home &amp; Repair"
                                                                             aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="7">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--home-repair">
                                            <i class="icon icon-industry-home-repair"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Home &amp; Repair</span>
                                                                        </div>
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Finance &amp; Insurance"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="8">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--finance-insurance">
                                            <i class="icon icon-industry-finance-insurance"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Finance &amp; Insurance</span>
                                                                        </div>
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Business Consultants"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="9">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--business-consultants">
                                            <i class="icon icon-industry-business-consultants"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Business Consultants</span>
                                                                        </div>
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Publishers" aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="10">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--publishers">
                                            <i class="icon icon-industry-publishers"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Publishers</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Real Estate" aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="11">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--real-estate">
                                            <i class="icon icon-industry-real-estate"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Real Estate</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Restaurants &amp; Bars"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="12">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--restaurants-bars">
                                            <i class="icon icon-industry-restaurants-bars"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Restaurants &amp; Bars</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Retail" aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="13">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--retail">
                                            <i class="icon icon-industry-retail"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Retail</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Software &amp; IT"
                                                                             aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="14">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--software-it">
                                            <i class="icon icon-industry-software-it"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Software &amp; IT</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Nonprofits" aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="15">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--nonprofits">
                                            <i class="icon icon-industry-nonprofits"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Nonprofits</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Hotels &amp; Resorts"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="16">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--hotels-resorts">
                                            <i class="icon icon-industry-hotels-resorts"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Hotels &amp; Resorts</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Gyms &amp; Wellness"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="17">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--gyms-wellness">
                                            <i class="icon icon-industry-gyms-wellness"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Gyms &amp; Wellness</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Government" aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="18">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--government">
                                            <i class="icon icon-industry-government"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Government</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Educational Institutions"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="19">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--educational-institutions">
                                            <i class="icon icon-industry-educational-institutions"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Educational Institutions</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Products" aria-selected="false"
                                                                             aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="20">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--products">
                                            <i class="icon icon-industry-products"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Products</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-hide="states.loading"
                                                                             ng-repeat="industry in industries | industrySearch:industrySearchKeyword"
                                                                             title="Doctors &amp; Healthcare"
                                                                             aria-selected="false" aria-disabled="false"
                                                                             class="search__suggest-item ng-scope"
                                                                             ng-click="selectIndustry(industry, $event)"
                                                                             data-industry-id="21">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon search__suggest-icon--doctors-healthcare">
                                            <i class="icon icon-industry-doctors-healthcare"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name ng-binding">Doctors &amp; Healthcare</span>
                                                                        </div>
                                                                        /login
                                                                        <div ng-show="states.noSearchResults"
                                                                             class="search__suggest-item search__suggest-item--no-search-results ng-hide">
                                    <span class="search__suggest-icon-container">
                                        <span class="search__suggest-icon">
                                            <i class="icon icon-zoom-search"></i>
                                        </span>
                                    </span>
                                                                            <span class="search__suggest-name">No search results. Try "<span
                                                                                    data-search-suggestion=""></span>"</span>
                                                                        </div>
                                                                        <div class="ps-scrollbar-x-rail"
                                                                             style="left: 0px; bottom: 0px;">
                                                                            <div class="ps-scrollbar-x" tabindex="0"
                                                                                 style="left: 0px; width: 0px;"></div>
                                                                        </div>
                                                                        <div class="ps-scrollbar-y-rail"
                                                                             style="top: 0px; height: 192px; right: 0px;">
                                                                            <div class="ps-scrollbar-y" tabindex="0"
                                                                                 style="top: 0px; height: 24px;"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="content-wrapper text-center ng-scope"
                                                         ng-if="industryDemos.length <= 0">
                <span class="title ">
                    <span class="text">Dynamic Codes</span>
                </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 dynamiccodes"
                                                     v-bind:class="{'hidden':!showDynamic}">

                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6 col-sm-12">
                                                        <a data-type="url" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'durl'}"
                                                           v-on:click="selectItem('durl')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/url">
                                                            <i class="icon icon-creation-code-url pull-left"></i>
                                                            <h4>Website</h4>
                                                            <small class="text-ellipsis"
                                                                   title="Link to any page on the web">
                                                                Link to any page on the web
                                                            </small>
                                                        </a>
                                                    </div>
                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dsocial" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'dsocial'}"
                                                           v-on:click="selectItem('dsocial')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dsocial"
                                                           has-video="false">
                                                            <i class="icon icon-creation-code-social pull-left"></i>
                                                            <h4>Social Media</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Link to your social media channels">
                                                                Link to your social media channels
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="coupon" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'coupon'}"
                                                           v-on:click="selectItem('coupon')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/coupon"
                                                           has-video="false">
                                                            <i class="icon icon-coupon pull-left"></i>
                                                            <h4>Coupons</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Share coupons and discounts">
                                                                Share coupons and discounts
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6 col-sm-12">
                                                        <a data-type="angular" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'angular'}"
                                                           v-on:click="selectItem('angular')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/angular"
                                                           has-video="false">
                                                            <i class="icon icon-creation-code-vcard pull-left"></i>
                                                            <h4>vCard Plus</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Share personalized contact details">
                                                                Share personalized contact details
                                                            </small>

                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dbusiness_page" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'dbusiness_page'}"
                                                           v-on:click="selectItem('dbusiness_page')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dbusiness_page"
                                                           has-video="false">
                                                            <i class="icon icon-manage-code-business-page pull-left"></i>
                                                            <h4>Business Page</h4>
                                                            <small class="text-ellipsis"
                                                                   title="Provide your company information">
                                                                Provide your company information
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="feedback" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'feedback'}"
                                                           v-on:click="selectItem('feedback')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/feedback"
                                                           has-video="false">
                                                            <i class="icon icon-creation-code-feedback pull-left"></i>
                                                            <h4>Feedback</h4>
                                                            <small class="text-ellipsis"
                                                                   title="Collect feedback and get rated">
                                                                Collect feedback and get rated
                                                            </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="drating" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'drating'}"
                                                           v-on:click="selectItem('drating')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/drating">
                                                            <i class="icon icon-creation-code-rating pull-left"></i>
                                                            <h4>Rating</h4>
                                                            <small class="text-ellipsis"
                                                                   title="Ask a question and get rated">
                                                                Ask a question and get rated
                                                            </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dvideo" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'dvideo'}"
                                                           v-on:click="selectItem('dvideo')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dvideo"
                                                           has-video="false">
                                                            <i class="icon icon-creation-add-video pull-left"></i>
                                                            <h4>Video</h4>
                                                            <small class="text-ellipsis" title="Show the video page">
                                                                Share one or more videos
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="devent" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'devent'}"
                                                           v-on:click="selectItem('devent')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/devent"
                                                           has-video="false">
                                                            <i class="icon icon-creation-code-event pull-left"></i>
                                                            <h4>Event</h4>
                                                            <small class="text-ellipsis" title="Promote your event">
                                                                Promote your event
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dpdf" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'dpdf'}"
                                                           v-on:click="selectItem('dpdf')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dpdf">
                                                            <i class="icon icon-creation-code-pdf pull-left"></i>
                                                            <h4>PDF</h4>
                                                            <small class="text-ellipsis"
                                                                   title="Link to a mobile-optimized PDF">
                                                                Link to a mobile-optimized PDF
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="facebook" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'facebook'}"
                                                           v-on:click="selectItem('facebook')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/facebook">
                                                            <i class="icon icon-creation-code-facebook pull-left"></i>
                                                            <h4>Facebook</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Get more Likes for your page">
                                                                Get more Likes for your page
                                                            </small>
                                                        </a>
                                                    </div>


                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dapp" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'dapp'}"
                                                           v-on:click="selectItem('dapp')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dapp">
                                                            <i class="icon icon-creation-code-app pull-left"></i>
                                                            <h4>App</h4>

                                                            <small class="text-ellipsis"
                                                                   title="View your app on various App Stores">
                                                                View your app on various App Stores
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dmp3" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'dmp3'}"
                                                           v-on:click="selectItem('dmp3')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dmp3">
                                                            <i class="icon icon-creation-code-dmp3 pull-left"></i>
                                                            <h4>MP3</h4>

                                                            <small class="text-ellipsis" title="Play an audio file">
                                                                Play an audio file
                                                            </small>
                                                        </a>
                                                    </div>


                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dgallery" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'dgallery'}"
                                                           v-on:click="selectItem('dgallery')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dgallery">
                                                            <i class="icon icon-creation-code-gallery pull-left"></i>
                                                            <h4>Images</h4>
                                                            <span class="badge new"> updated</span>
                                                            <small class="text-ellipsis"
                                                                   title="Show a series of photos">
                                                                Show a series of photos
                                                            </small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-generator-codetype-chooser white-form codetype-menu v2 hidden">

                                                <div class="col-lg-12 content-group mb-40">
                                                    <h3>Select your QR Code Type
                                                        <button class="btn-help visible-lg-inline-block" title=""
                                                                data-original-title=""></button>
                                                    </h3>
                                                    <div class="content-wrapper text-center">
                                                        <span class="title "><span
                                                                class="text">Dynamic Codes</span></span>
                                                        <span class="tools" v-on:click="showDynamic= !showDynamic"><i
                                                                class="icon-minus icon-minus-1"
                                                                v-bind:class="{'icon-minus-1':showDynamic,'icon-plus-1':!showDynamic}"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 dynamiccodes"
                                                     v-bind:class="{'hidden':!showDynamic}">

                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6 col-sm-12">
                                                        <a data-type="url" class="btn-codetype" id="codeFormId_1"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/url">
                                                            <i class="icon icon-creation-code-url pull-left"></i>
                                                            <h4>Website</h4>
                                                            <small class="text-ellipsis"
                                                                   title="Link to any page on the web">
                                                                Link to any page on the web
                                                            </small>
                                                        </a>
                                                    </div>
                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dpdf" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dpdf"
                                                           id="codeFormId_20">
                                                            <i class="icon icon-creation-code-pdf pull-left"></i>
                                                            <h4>PDF</h4>
                                                            <small class="text-ellipsis"
                                                                   title="Link to a mobile-optimized PDF">
                                                                Link to a mobile-optimized PDF
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6 col-sm-12">
                                                        <a data-type="angular" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/angular"
                                                           id="codeFormId_12" has-video="false">
                                                            <i class="icon icon-creation-code-vcard pull-left"></i>
                                                            <h4>vCard Plus</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Share personalized contact details">
                                                                Share personalized contact details
                                                            </small>

                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dvideo" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dvideo"
                                                           id="codeFormId_16" has-video="false">
                                                            <i class="icon icon-creation-add-video pull-left"></i>
                                                            <h4>Video</h4>
                                                            <small class="text-ellipsis" title="Show the video page">
                                                                Share one or more videos
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="facebook" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/facebook"
                                                           id="codeFormId_4">
                                                            <i class="icon icon-creation-code-facebook pull-left"></i>
                                                            <h4>Facebook</h4>
                                                            <span class="badge new"> updated</span>
                                                            <small class="text-ellipsis"
                                                                   title="Get more Likes for your page">
                                                                Get more Likes for your page
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dsocial" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dsocial"
                                                           id="codeFormId_14" has-video="false">
                                                            <i class="icon icon-creation-code-social pull-left"></i>
                                                            <h4>Social Media</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Link to your social media channels">
                                                                Link to your social media channels
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="app" class="btn-codetype" id="codeFormId_3"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/app">
                                                            <i class="icon icon-creation-code-app pull-left"></i>
                                                            <h4>App</h4>
                                                            <small class="text-ellipsis"
                                                                   title="View your app on various App Stores">
                                                                View your app on various App Stores
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="feedback" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/feedback"
                                                           id="codeFormId_17" has-video="false">
                                                            <i class="icon icon-creation-code-feedback pull-left"></i>
                                                            <h4>Feedback</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Collect feedback and get rated">
                                                                Collect feedback and get rated
                                                            </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="drating" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/drating"
                                                           id="codeFormId_19">
                                                            <i class="icon icon-creation-code-rating pull-left"></i>
                                                            <h4>Rating</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Ask a question and get rated">
                                                                Ask a question and get rated
                                                            </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="coupon" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/coupon"
                                                           id="codeFormId_18" has-video="false">
                                                            <i class="icon icon-coupon pull-left"></i>
                                                            <h4>Coupons</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Share coupons and discounts">
                                                                Share coupons and discounts
                                                            </small>
                                                        </a>
                                                    </div>


                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dbusiness_page" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dbusiness_page"
                                                           id="codeFormId_15" has-video="false">
                                                            <i class="icon icon-manage-code-business-page pull-left"></i>
                                                            <h4>Business Page</h4>
                                                            <small class="text-ellipsis"
                                                                   title="Provide your company information">
                                                                Provide your company information
                                                            </small>
                                                        </a>
                                                    </div>


                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="devent" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/devent"
                                                           id="codeFormId_13" has-video="false">
                                                            <i class="icon icon-creation-code-event pull-left"></i>
                                                            <h4>Event</h4>
                                                            <small class="text-ellipsis" title="Promote your event">
                                                                Promote your event
                                                            </small>
                                                        </a>
                                                    </div>


                                                    <!--Left card-->

                                                    <!--Right card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="dmp3" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/dmp3"
                                                           id="codeFormId_22">
                                                            <i class="icon icon-creation-code-dmp3 pull-left"></i>
                                                            <h4>MP3</h4>
                                                            <span class="badge new"> updated</span>
                                                            <small class="text-ellipsis" title="Play an audio file">
                                                                Play an audio file
                                                            </small>
                                                        </a>
                                                    </div>


                                                    <!--Left card-->
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="gallery" class="btn-codetype"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/gallery"
                                                           id="codeFormId_7">
                                                            <i class="icon icon-creation-code-gallery pull-left"></i>
                                                            <h4>Images</h4>
                                                            <small class="text-ellipsis"
                                                                   title="Show a series of photos">
                                                                Show a series of photos
                                                            </small>
                                                        </a>

                                                    </div>


                                                </div>
                                            </div>
                                            <div class="row row-generator-codetype-chooser white-form codetype-menu mb20 mt-0">

                                                <div class="col-lg-12 content-group mb-40 mt_10">

                                                    <div class="content-wrapper text-center">
                                                        <span class="title "><span
                                                                class="text">Static Codes</span></span>
                                                        <span class="tools" v-on:click="showStatic= !showStatic">
                    <i class="icon-minus" v-bind:class="{'icon-minus-1':showStatic,'icon-plus-1':!showStatic}"></i>
                </span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 staticcodes"
                                                     v-bind:class="{'hidden':!showStatic}">
                                                    <div class="code-type-card col-lg-6 ">
                                                        <a data-type="url_static" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'surl'}"
                                                           v-on:click="selectItem('surl')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/url?action=static">
                                                            <i class="icon icon-creation-code-url pull-left"></i>
                                                            <h4>Website</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Link to any page on the web">
                                                                Link to any page on the web
                                                            </small>

                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="vcard" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'vcard'}"
                                                           v-on:click="selectItem('vcard')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/vcard"
                                                           id="codeFormId_2">
                                                            <i class="icon icon-creation-code-vcard pull-left"></i>
                                                            <h4>vCard</h4>

                                                            <small class="text-ellipsis" title="Share contact details">
                                                                Share contact details
                                                            </small>
                                                        </a>
                                                    </div>


                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="email" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'email'}"
                                                           v-on:click="selectItem('email')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/email"
                                                           id="codeFormId_8">
                                                            <i class="icon icon-creation-code-email pull-left"></i>
                                                            <h4>Email</h4>

                                                            <small class="text-ellipsis" title="Get email messages">
                                                                Get email messages
                                                            </small>
                                                        </a>
                                                    </div>
                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="sms" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'sms'}"
                                                           v-on:click="selectItem('sms')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/sms"
                                                           id="codeFormId_9">
                                                            <i class="icon icon-creation-code-sms pull-left"></i>
                                                            <h4>SMS</h4>

                                                            <small class="text-ellipsis" title=" Get text messages">
                                                                Get text messages
                                                            </small>
                                                        </a>
                                                    </div>

                                                    <div class="code-type-card col-lg-6">
                                                        <a data-type="text" class="btn-codetype"
                                                           v-bind:class="{'active': selected == 'text'}"
                                                           v-on:click="selectItem('text')"
                                                           loadurl="https://app.qr-code-generator.com/create/getform/add/text"
                                                           id="codeFormId_10">
                                                            <i class="icon icon-creation-code-text pull-left"></i>
                                                            <h4>Text</h4>

                                                            <small class="text-ellipsis"
                                                                   title="Display a short message">
                                                                Display a short message
                                                            </small>

                                                        </a>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="formHere" class="item redesign" v-bind:class="{'active': secondStep}">
                                        <form name="UrlCodeTrckable" id="UrlCodeTrckable" action="/create/handlecodesubmit" method="post">
<div style="display:none"><input type="hidden" value="13b4ba5911767e7290861f461df1ceae45e8787a" name="YII_CSRF_TOKEN"></div>        <input type="hidden" id="shorturlHolder" name="codeValue" value="!">
    <input type="hidden" id="shortcodeHolder" value="">
    <input type="hidden" name="oldCodeId" id="oldCodeId" value="0">
    <input name="UrlBarcode[qrcode_type_id]" id="UrlBarcode_qrcode_type_id" type="hidden" value="1">    <input name="UrlBarcode[folder_id]" id="UrlBarcode_folder_id" type="hidden" value="1">    <input name="UrlBarcode[industry_id]" id="UrlBarcode_industry_id" type="hidden">    <input name="UrlBarcode[qr_demo_id]" id="UrlBarcode_qr_demo_id" type="hidden">    <input name="UrlBarcode[designer_templates_id]" id="UrlBarcode_designer_templates_id" type="hidden" value="0">    <input name="UrlBarcode[app_templates_id]" id="UrlBarcode_app_templates_id" type="hidden" value="0">    <input class="trackableIndicator" name="UrlBarcode[trackable]" id="UrlBarcode_trackable" type="hidden" value="1">    <input name="UrlBarcode[user_id]" id="UrlBarcode_user_id" type="hidden">    <input name="UrlBarcode[active]" id="UrlBarcode_active" type="hidden" value="1">    <input name="UrlBarcode[trash]" id="UrlBarcode_trash" type="hidden" value="0">    <input name="UrlBarcode[filename]" id="UrlBarcode_filename" type="hidden">    <input name="UrlBarcode[total_scans]" id="UrlBarcode_total_scans" type="hidden" value="0">    <input name="UrlBarcode[unique_scans]" id="UrlBarcode_unique_scans" type="hidden" value="0">    <input class="itemId" name="UrlBarcode[_record_id]" id="UrlBarcode__record_id" type="hidden" value="0">    <input name="UrlBarcode[json_data]" id="UrlBarcode_json_data" type="hidden" value="{}">
    <input class="downloadIndicator" type="hidden" value="no" name="downloadIndicatorName" id="downloadIndicatorName">
            <input class="backColorField" value="ffffff" name="UrlBarcode[back_color]" id="UrlBarcode_back_color" type="hidden">        <input class="frontColorField" value="000000" name="UrlBarcode[front_color]" id="UrlBarcode_front_color" type="hidden">        <input class="errorCorrectionField" value="M" name="UrlBarcode[error_correction]" id="UrlBarcode_error_correction" type="hidden">
<!--End: Angular Wrapper-->
<div class="angularWrapper inapp-helpV1 init"><!-- Triggering the different inapp advertising see filters when they popup -->
    <!--Start: Angular Controller-->
    <div ng-controller="AngularBaseController as cs" class="ng-scope white-form foldabel-form">

<div class="hidden">
    <input ng-model="qrcode_title" value="" ng-init="qrcode_title=''" placeholder="My Website QR Code" data-content="Give your code a description, it helps you to identify the code in the management and you can search for it, too." name="UrlBarcode[title]" id="UrlBarcode_title" type="hidden" class="ng-pristine ng-untouched ng-valid">    <div class="errorMessage" id="UrlBarcode_title_em_" style="display:none"></div><button class="btn-help hidden-xs" data-original-title="" title=""><i class="icon-help"> </i></button>
    <input ng-model="qrcode_geolocation" value="0" name="UrlBarcode[geolocation]" id="UrlBarcode_geolocation" type="text" class="ng-pristine ng-untouched ng-valid">    <div class="errorMessage" id="UrlBarcode_geolocation_em_" style="display:none"></div>
</div>



        <!-- begin: Title Editing -->
        <div class="section-title" ng-class="IsDisplay ? 'section-title--backdrop' : ''">
            <!-- QR Code Type Icon Element -->
            <div class="section-title__icon">
                <i class="icon--title-editing icon-creation-code-url" data-title-icon=""></i>
            </div>
            <!-- QR Code Type Title -->
            <div class="section-title__name">
                <input class="input--title-editing ng-pristine ng-untouched ng-valid" id="qrcode_title_0" ng-change="dismissHintCookie()" type="text" ng-model="qrcode_title" placeholder="My Website QR Code" data-title-input="" autocomplete="off">

                <label class="section-title__label" for="qrcode_title_0">Name your QR Code</label>

                <span class="btn-help-icon section-title__icon_tooltip" ng-class="IsDisplay ? 'hidden' : ''" rel="tooltip" data-trigger="hover" data-placement="left" data-original-title="Names help you to stay organized and will only appear in your account and are not displayed to customers who scan your QR Codes."></span>

                <!-- ngIf: IsDisplay -->
            </div>
        </div>
        <!-- end: Title Editing -->
        <div class="form-container">
            <div class="section-header section-open not-formly">
                <div class="form-title-row">
                    <div class="col-md-1 box-icon hidden-sm">
                        <div class="round-no text-center mt10" style="margin-top: 20px !important;">
                            <i class="icon-edit-b"></i>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-11 box-title">
                        <h3>Enter your website address                            <button class="btn-help visible-lg-inline-block" title="" data-original-title=""></button>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="section-body">
                <div class="section_type_container section_information">
                    <div class="row form-input-row formly-field">
                        <div class="col-lg-offset-1 col-sm-12 col-lg-11 mb-10">
                            <p class="section-subheadline">Type in the website to link with your QR Code</p>
                        </div>


                        <div class="mb-10">
                            <div class="col-sm-1 col-md-1 box-icon hidden-xs hidden-sm"></div>
                            <div class="col-sm-12 col-md-3 box-label">
                                Website:
                            </div>
                            <div class="col-sm-12 col-md-8 box-input" v-bind:class="{'error': barCodeError}">
                                <input v-model="modelUrl" required="required" spellcheck="false" class="required canHaveError" placeholder="http://www.my-website.com" name="url" id="url" type="text" maxlength="1500" v-on:input="websiteChanged">
                                <div data-error-container="" class="errorMessage" id="UrlBarcode_url_em_" style="display:none"></div>
                                <div class="errorHolder errorMessage pull-right" style="position: relative;top: -29px;" data-error-container="#errorUrlBarcode_url" data-error-msg="Please enter a website address and click on next."></div>
                                <span id="errorUrlBarcode_url"></span>
                                <div class="popover popover-error fade right in" role="tooltip" id="popover256828" style="top: -21px; left: 6px; display: block; position: relative;" v-show="barCodeError">
                                    <div class="arrow"></div>
                                    <h3 class="popover-title" style="display: none;"></h3>
                                    <div class="popover-content">{{errorMsg}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-container hidden" id="advancedOptions">
    <div class="section-header" ng-click="formState.advancedOptions = !formState.advancedOptions" ng-class="{'active section-open':formState.advancedOptions}">
        <div class="toggle-collapse">
            <div class="checkboxes-container fold-checkbox">
                <input type="checkbox" ng-attr-id="section_advance_options" ng-checked="!formState.advancedOptions" checked="checked">
                <label ng-attr-for="section_advance_options" class="checkbox_label ml-20"></label>
            </div>
        </div>
        <div class="form-title-row form-hidden-trigger-row hide-during-loading">
            <div class="col-md-1 box-icon hidden-sm">
                <div class="round-no text-center mt10">
                    <i class="icon-creation-advanced"></i>
                </div>
            </div>
            <div class="col-sm-12 col-md-11 box-title">
                <h3>
                    Advanced Options                </h3>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="section_type_container section_advance_options section-close" ng-class="{'section-close': !formState.advancedOptions}" style="">
            <!--start: Avanced settings-->
            <div ng-class="{hidden:!formState.advancedOptions}" class=" row form-input-row mt-25 hidden " style="display:none;">
                <div class="col-sm-1 box-icon hidden-xs hidden-sm"></div>
                <div class="col-sm-12 col-md-3 box-label">
                    Label:
                    <span class="btn-help-icon visible-lg-inline-block " title="" rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Name your QR Code to stay organized. You will only see this label in the Manage page of your account."></span>

                </div>
                <div class="col-sm-12 col-md-8 box-input">
                    <input id="qrcode_title_1" type="text" ng-model="qrcode_title" placeholder="My Website QR Code" class="ng-pristine ng-untouched ng-valid">
                </div>
            </div>
                            <div ng-class="{hidden:!formState.advancedOptions}" class=" row form-input-row mt-25 mb-0 hidden ">
                    <div class="col-sm-1 box-icon hidden-xs hidden-sm"></div>
                    <div class="col-sm-12 col-md-3 box-label">
                        Geolocation:
                    </div>
                    <div class="col-sm-12 col-md-7 checkboxes-container green-checkbox mt-15">
                        <input type="checkbox" id="qrcode_geolocation_checkbox" ng-model="qrcode_geolocation" ng-true-value="1" ng-false-value="0" ng-init="qrcode_geolocation=0" class="ng-pristine ng-untouched ng-valid">
                        <label for="qrcode_geolocation_checkbox" class="mr-10 label-geolocation">Ask smartphone users for geolocation</label>
                        <span class="btn-help-icon visible-lg-inline-block" title="" rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Ask users to provide their exact location at the time of scan. This may cause cautious users to discontinue. Note that you will still receive IP-based location data when turned off."></span>
                    </div>
                </div>
                        <!--end: Avanced settings-->
        </div>
    </div>
</div>



        <!--End: Angular Controller-->
    </div>
    <!--End: Angular Wrapper--></div>


<input class="hidden" type="submit" name="yt0" value="notvisible">


</form>
                                    </div>
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
                        <div class="footer-generator-actions content-footer redesign generator-float-bottom"
                             style="margin-left: 0px;">
                            <div class="table-cell-middle">
                                <div class="container" style="width: 100%;max-width: 100%">
                                    <div class="col-lg-12 col-xs-12">
                                        <div class="row firststep">
                                            <div class="section-content section-content_generator-footer">
                                                <div class="grid">
                                                    <div class="col">
                                                        <div class="col-lg-12">
                                                            <button class="btn green lc big btn-generator-next pull-right col-lg-6 btn_create_next ladda-button"
                                                                    v-bind:class="{'disabled': !isActive}"
                                                                    v-on:click="nextFirstStep"
                                                                    data-style="expand-left"><span
                                                                    class="ladda-label">Next</span><span
                                                                    class="ladda-spinner"></span></button>
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
                                                        <button class="btn lc btn-generator-prev pull-left" v-on:click="secondStep = false"><i
                                                                class="icon icon-chevron-left-medium pull-left"></i>Back
                                                        </button>
                                                        <div class="footer__view-mobile" data-generate-mobile-bar="">
                                                            <ul>
                                                                <li class="btn-generator-prev">
                                                                    <i class="icon icon-arrow-24px"></i>
                                                                </li>
                                                                <!-- ngRepeat: item in items -->
                                                                <li ng-repeat="item in items"
                                                                    ng-class="{'active': item.id == states.activeItem}"
                                                                    ng-click="states.activeItem = item.id; states.viewType = item.class; codeValidation(); disableScrolling(); toggleView();"
                                                                    class="ng-scope">
                                                                    <i ng-class="'icon icon-' + item.icon"
                                                                       class="icon icon-pencil-24px"></i>
                                                                </li><!-- end ngRepeat: item in items -->
                                                                <li ng-repeat="item in items"
                                                                    ng-class="{'active': item.id == states.activeItem}"
                                                                    ng-click="states.activeItem = item.id; states.viewType = item.class; codeValidation(); disableScrolling(); toggleView();"
                                                                    class="ng-scope">
                                                                    <i ng-class="'icon icon-' + item.icon"
                                                                       class="icon icon-phone-24px"></i>
                                                                </li><!-- end ngRepeat: item in items -->
                                                                <li ng-repeat="item in items"
                                                                    ng-class="{'active': item.id == states.activeItem}"
                                                                    ng-click="states.activeItem = item.id; states.viewType = item.class; codeValidation(); disableScrolling(); toggleView();"
                                                                    class="ng-scope">
                                                                    <i ng-class="'icon icon-' + item.icon"
                                                                       class="icon icon-qr-code-mobile"></i>
                                                                </li><!-- end ngRepeat: item in items -->
                                                            </ul>
                                                        </div>
                                                        <button type="button"
                                                                class="btn green lc big block btn-generator-save-directly pull-right col-lg-6 ladda-button"
                                                                data-style="expand-left"><span
                                                                class="ladda-label">Next</span><span
                                                                class="ladda-spinner"></span></button>
                                                    </div>
                                                    <div class="col col-fixed footer__bar" style="width:466px;">
                                                        <div class="footer__button">
                                                            <!--                                    <button type="button" class="btn green lc big block btn-generator-save-directly ladda-button" data-style="expand-left">-->
                                                            <!--</button>-->
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
                        </div>
                    </div>
                </div>
                <div class="col col-fixed col-preview" style="width:466px;">
                    <!--  begin: overflow base -->
                    <div class="overflow_base"></div>
                    <!--  end: overflow base -->
                    <div class="redesign data__mockup" style="margin-left: 0px;">

                        <div class="preview clearfix mockup__preview url_noAffix " v-bind:class="{'active': isActive, 'showQRCode affix': showQRCode, 'affix-top': !showQRCode}"
                             data-spy="affix"
                             data-offset-top="26">
                            <button class="btn-slide-toggler btn-slide-toggler_label" style="display: none" v-bind:class="{'active': !showQRCode}">
            <span class="btn-slide-toggler__phone" v-on:click="showQRCode = false">
                Preview            </span>
                                <span class="btn-slide-toggler__code" v-on:click="genQRCode">
                QR Code            </span>
                            </button>
                            <div class="preview-qrcode mockup__qrcode qrcode_create" v-bind:class="{'barCodeError': barCodeError}" style="position: fixed; top: 24px; display: none;" v-show="showQRCode">
                                <div class="code" id="barcodeHere">
                                    <div class="qr-preview-overlay" v-bind:class="{'loading2': true}" style="opacity: 0;"></div>

                                    <img id="barcodeImage" :src="barcodeImage" alt="">
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
                            <div class="preview-smartphone clearfix active mockup__smartphone" style="position: fixed; top: 24px; display: none;" v-show="!showQRCode">
                                <div class="preview-smartphone-wrapper noVideo mockup__smartphone-wrapper">
                                    <div id="smartphonePlaceholder" class="placeholder ratchet"><div class="template template-url">
                                        <header class="bar bar-nav">
                                            <div class="pure-g">
                                                <div class="browser-input pure-u-5-6">{{formalUrl}}</div>
                                                <div class="browser-refresh pure-u-1-6">
                                                    <!--<img src="/img/generator/template-url-icon-refresh.svg">-->
                                                </div>
                                            </div>

                                        </header>

                                        <div class="text-center content template_url" style="padding-top:200px;background-image:none;">
                                            <div class="arrow_box">
                                                <span>Some QR Codes types will show a live preview here but not this one. View and test your QR Code in the next step!</span>
                                            </div>
                                            <img src="/images/CodyE_PointingLeft.svg">
                                        </div>

                                    </div>

                                    </div>

                                    <div class="previewNoVideoText">
                                        <span class="static-code-text">No live preview</span>
                                        <div class="code-white-card">
                                            <img id="code-image" src="">
                                            <div class="code-text">
                                                <i id="code-icon" class="icon-creation-code-url"></i>
                                                <span>
                                Scan to see a live preview                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="loading-video">
                                        <div>Loading video</div>
                                        <div class="progress">
                                            <div class="loading-bar indeterminate"></div>
                                        </div>
                                    </div>

                                    <div id="imgPlaceholder" class="placeholder ratchet previewNoVideo"
                                         style="overflow: hidden;">
                                        <img :src="previewImg" style="max-width:320px;width:320px;">
                                    </div>
                                </div>
                            </div>
                            <div class="landscapeOrientation" style="display: none;">
                                <i class="icon icon-rotate-phone-48px-v1"></i>
                                <h5>Rotate device to display preview mode</h5>
                            </div>
                        </div>
                        <div class="creation-no-default" v-show="!isActive">
                            <img src="//cdn.qr-code-generator.com/img/generator/cody/CodyE_PointingLeft.svg">
                            <div>Please choose one to view a page preview</div>
                        </div>
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
                selected: '',
                isActive: false,
                secondStep: false,
                modelUrl: '',
                showQRCode: false,
                barCodeError: false,
                errorMsg: '',
                barcodeImage: '/images/qrcode_placeholder.png',
            }
        },
        computed: {
            previewImg: function () {
                return this.isActive ? '/images/preview-type-' + (this.selected.indexOf('url') != -1 ? 'url' : this.selected) + '-en.jpg' : '';
            },
            formalUrl: function () {
                return this.modelUrl ? 'http://' + this.modelUrl : '';
            }
        },
        methods: {
            selectItem: function (item) {
                this.selected = item;
                this.isActive = true;
            },
            nextFirstStep: function () {
                this.secondStep = true;
            },
            websiteChanged: function() {
                this.showQRCode = false;

                if (!/(https?|ftp|file):\/\/[-A-Za-z0-9+&@#/%?=~_|!:,.;]+[-A-Za-z0-9+&@#/%=~_|]/i.test(this.formalUrl)) {
                    this.barCodeError = true;
                    this.errorMsg = 'Website is not a valid URL.';
                } else {
                    this.barCodeError = false;
                    this.errorMsg = '';
                }
            },
            genQRCode: function() {
                this.showQRCode = true;

                if (!this.formalUrl) {
                    this.barCodeError = true;
                    this.errorMsg = 'Please enter a website address and click on next.';
                } else if (!/(https?|ftp|file):\/\/[-A-Za-z0-9+&@#/%?=~_|!:,.;]+[-A-Za-z0-9+&@#/%=~_|]/i.test(this.formalUrl)) {
                    this.barCodeError = true;
                    this.errorMsg = 'Website is not a valid URL.';
                } else {
                    this.barCodeError = false;
                    this.barcodeImage = '/api/v1/create?frame_name=no-frame&image_format=PNG&image_width=500&download=1&qr_code_text=' + this.formalUrl;
                }
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