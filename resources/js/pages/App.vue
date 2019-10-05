<template>
    <div>
        <div class="qr-navbar ng-scope" ng-style="getNavbarStyle()" ng-controller="qrNavbarCtrl"
             ng-init="route='manage/new'" data-navbar="">
            <div class="qr-navbar__element" ng-hide="route == 'create/index' || route == 'create/new'">
                <i class="icon-logo-icon qr-navbar__logo"></i>
            </div>
            <div class="qr-navbar__element" ng-hide="route == 'create/index' || route == 'create/new'">
                <div class="qr-navbar__separator"></div>
            </div>

            <div class="qr-navbar__element">
                <div class="qr-navbar__element qr-navbar__menu noselect" ng-click="toggleMenu()"
                     ng-show="route == 'manage/new'">
                    <i class="icon-thin-menu"></i>
                    <span>Menu</span>
                </div>
            </div>

            <div class="qr-navbar__element pull-right"
                 ng-show="route != 'upgrade/index' &amp;&amp; route != 'upgrade/paymentform' &amp;&amp; route != 'create/index' &amp;&amp; route != 'create/new'">
                <div class="qr-navbar__element">
                    <qr-news-bell icon-as-svg="true" status="true"
                                  items="[{'id':'20','message':'Wondering how to use QR Codes for your business? See great use cases for retailers, restaurants, packaged goods, nonprofits and more.','updated_at':'2019-04-08 08:02:37','icon':'icon-qr-lightbulb','color':'#4F5557','label':'Choose your business','url':'https://www.qr-code-generator.com/qr-codes-for/?utm_source=app_website&amp;utm_medium=notification_bell&amp;utm_campaign=qrcodesfor'},{'id':'19','message':'You can now find all QR Code customization options under Download - plus, we\'ve added JPG and SVG support for custom QR Codes','updated_at':'2019-02-15 08:35:30','icon':'icon-whitelabeling','color':'#4F5557','label':'','url':''},{'id':'18','message':'How to print QR Codes on flyers, banners, business cards and more','updated_at':'2018-11-30 13:49:07','icon':'icon-graphic-print','color':'#4F5557','label':'View Examples','url':'https://www.qr-code-generator.com/qr-codes-on/?utm_source=app_website&amp;utm_medium=notification_bell&amp;utm_campaign=qrcodeson'}]"
                                  mobile-mode="bellMobileMode" class="ng-isolate-scope">
                        <div class="qr-news-bell qr-news-bell--mark" ng-class="getElementClass()"><span
                                class="qr-news-bell__icon" ng-class="getIconClass()" ng-click="click($event)"><svg
                                ng-show="iconAsSvg" width="20px" height="25px" viewBox="0 0 20 25" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class=""><desc>Created with Sketch.</desc><defs><path
                                d="M932,386.375 C933.375,386.375 934.5,385.25 934.5,383.875 L929.5,383.875 C929.5,385.25 930.6125,386.375 932,386.375 Z M939.5,378.875 L939.5,372.625 C939.5,368.7875 937.45,365.575 933.875,364.725 L933.875,363.875 C933.875,362.8375 933.0375,362 932,362 C930.9625,362 930.125,362.8375 930.125,363.875 L930.125,364.725 C926.5375,365.575 924.5,368.775 924.5,372.625 L924.5,378.875 L922,381.375 L922,382.625 L942,382.625 L942,381.375 L939.5,378.875 Z"
                                id="path-1"></path></defs><g id="__Icons" stroke="none" stroke-width="1" fill="none"
                                                             fill-rule="evenodd"><g id="Artboard"
                                                                                    transform="translate(-922.000000, -362.000000)"
                                                                                    fill-rule="nonzero"><g
                                id="bell_icon"><use fill-opacity="0.1" fill="#FFFFFF" fill-rule="evenodd"
                                                    xlink:href="#path-1"></use><path stroke-opacity="0.3"
                                                                                     stroke="#FFFFFF" stroke-width="1"
                                                                                     d="M933.936143,384.375 L930.062965,384.375 C930.284681,385.237066 931.066437,385.875 932,385.875 C932.926416,385.875 933.712301,385.234495 933.936143,384.375 Z M922.5,381.582107 L922.5,382.125 L941.5,382.125 L941.5,381.582107 L939,379.082107 L939,372.625 C939,368.884848 936.994102,365.980543 933.759343,365.21144 L933.375,365.120057 L933.375,363.875 C933.375,363.113642 932.761358,362.5 932,362.5 C931.238642,362.5 930.625,363.113642 930.625,363.875 L930.625,365.120376 L930.240275,365.21153 C926.994919,365.980465 925,368.870331 925,372.625 L925,379.082107 L922.5,381.582107 Z"></path></g></g></g></svg></span>
                            <qr-news-window open="open" mobile-mode="mobileMode" items="items" right="true"
                                            class="ng-isolate-scope">
                                <qr-popup open="open" mobile-mode="false" top-offset="" right="true"
                                          class="ng-isolate-scope">
                                    <div class="qr-popup  qr-popup--right" ng-class="getPopupClasses()"
                                         ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                                         style="z-index: 20000;">
                                        <ng-transclude>
                                            <div class="qr-news-window ng-scope"><h6
                                                    class="qr-news-window__title ng-binding">What's new?</h6><span
                                                    class="qr-news-window__close" ng-click="closeIt()">×</span>
                                                <div class="qr-news-window__content ps-container ps-theme-default"
                                                     data-ps-id="b58551f7-39b0-99d1-c663-26da17535d53">
                                                    <qr-news-item class="qr-news-window__item ng-scope ng-isolate-scope"
                                                                  ng-repeat="item in items track by $index"
                                                                  value="item">
                                                        <div class="qr-news-item"><span
                                                                class="qr-news-item__icon icon-qr-lightbulb"
                                                                ng-class="value.icon" ng-style="{color: value.color}"
                                                                style="color: rgb(79, 85, 87);"></span>
                                                            <div class="qr-news-item__message ng-binding">Wondering how
                                                                to use QR Codes for your business? See great use cases
                                                                for retailers, restaurants, packaged goods, nonprofits
                                                                and more.
                                                            </div>
                                                            <a class="qr-news-item__action ng-binding"
                                                               href="https://www.qr-code-generator.com/qr-codes-for/?utm_source=app_website&amp;utm_medium=notification_bell&amp;utm_campaign=qrcodesfor"
                                                               target="_blank"
                                                               ng-show="value.label &amp;&amp; value.url">Choose your
                                                                business</a>
                                                            <div class="qr-news-item__date ng-binding">Apr 8, 2019</div>
                                                        </div>
                                                    </qr-news-item>
                                                    <qr-news-item class="qr-news-window__item ng-scope ng-isolate-scope"
                                                                  ng-repeat="item in items track by $index"
                                                                  value="item">
                                                        <div class="qr-news-item"><span
                                                                class="qr-news-item__icon icon-whitelabeling"
                                                                ng-class="value.icon" ng-style="{color: value.color}"
                                                                style="color: rgb(79, 85, 87);"></span>
                                                            <div class="qr-news-item__message ng-binding">You can now
                                                                find all QR Code customization options under Download -
                                                                plus, we've added JPG and SVG support for custom QR
                                                                Codes
                                                            </div>
                                                            <a class="qr-news-item__action ng-binding ng-hide" href=""
                                                               target="_blank"
                                                               ng-show="value.label &amp;&amp; value.url"></a>
                                                            <div class="qr-news-item__date ng-binding">Feb 15, 2019
                                                            </div>
                                                        </div>
                                                    </qr-news-item>
                                                    <qr-news-item class="qr-news-window__item ng-scope ng-isolate-scope"
                                                                  ng-repeat="item in items track by $index"
                                                                  value="item">
                                                        <div class="qr-news-item"><span
                                                                class="qr-news-item__icon icon-graphic-print"
                                                                ng-class="value.icon" ng-style="{color: value.color}"
                                                                style="color: rgb(79, 85, 87);"></span>
                                                            <div class="qr-news-item__message ng-binding">How to print
                                                                QR Codes on flyers, banners, business cards and more
                                                            </div>
                                                            <a class="qr-news-item__action ng-binding"
                                                               href="https://www.qr-code-generator.com/qr-codes-on/?utm_source=app_website&amp;utm_medium=notification_bell&amp;utm_campaign=qrcodeson"
                                                               target="_blank"
                                                               ng-show="value.label &amp;&amp; value.url">View
                                                                Examples</a>
                                                            <div class="qr-news-item__date ng-binding">Nov 30, 2018
                                                            </div>
                                                        </div>
                                                    </qr-news-item>
                                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                        <div class="ps-scrollbar-x" tabindex="0"
                                                             style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps-scrollbar-y-rail" style="top: 0px; right: 6px;">
                                                        <div class="ps-scrollbar-y" tabindex="0"
                                                             style="top: 0px; height: 0px;"></div>
                                                    </div>
                                                </div>
                                                <div class="qr-news-window__actions" ng-switch="isLoading">
                                                    <div ng-switch-default="" class="ng-scope">
                                                        <button class="qr-news-window__action" type="button"
                                                                ng-click="loadMore()">Load more
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </ng-transclude>
                                    </div>
                                    <div class="qr-popup__layer" ng-click="onLayerClick()" ng-class="getLayerClasses()"
                                         ng-style="{zIndex: getLayerZIndex()}" style="z-index: 19999;"></div>
                                </qr-popup>
                            </qr-news-window>
                        </div>
                    </qr-news-bell>
                </div>

                <div class="qr-navbar__element ml-25">
                    <div class="help" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" title=""
                         data-original-title="Customer ID:6108935">
                        <a href="https://help.qr-code-generator.com/en"
                           onclick="_gaq.push(['_trackEvent','Headbar', 'Info', 'open intercom']);" target="_help">?</a>
                    </div>
                </div>

                <div class="qr-navbar__element">
                    <div class="qr-navbar__separator qr-navbar__separator--left"></div>
                </div>

                <div class="qr-navbar__element">
                    <div class="qr-navbar__dropdown qr-navbar__dropdown__text noselect" v-on:click="toggleDropdown()"
                         v-bind:class="{'qr-navbar__dropdown--open': dropdownOpen}">
                        <span>Account</span>
                        <div class="qr-navbar__dropdown__text--icon qr-navbar__dropdown__text--icon--menu-arrow icon-down-open-mini"></div>

                        <div class="qr-navbar__dropdown__text--icon qr-navbar__dropdown__text--icon--menu-gear">
                            <svg width="27px" height="26px" viewBox="0 0 22 22" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Shape</title>
                                <desc>Created with Sketch.</desc>
                                <defs>
                                    <path d="M20,9 L18.7,9 C18.5,8.3 18.2,7.6 17.8,6.9 L18.7,6 C19.5,5.2 19.5,4 18.7,3.2 C17.9,2.4 16.7,2.4 15.9,3.2 L15,4.1 C14.4,3.7 13.7,3.4 12.9,3.2 L12.9,2 C12.9,0.9 12,0 10.9,0 C9.8,0 8.9,0.9 8.9,2 L8.9,3.3 C8.3,3.5 7.6,3.7 6.9,4.1 L6.1,3.2 C5.3,2.4 4.1,2.4 3.3,3.2 C2.5,4 2.5,5.2 3.3,6 L4.2,6.9 C3.7,7.6 3.5,8.3 3.3,9 L2,9 C0.9,9 0,9.9 0,11 C0,12.1 0.9,13 2,13 L3.3,13 C3.5,13.7 3.8,14.4 4.2,15.1 L3.3,16 C2.5,16.8 2.5,18 3.3,18.8 C4.1,19.6 5.3,19.6 6.1,18.8 L7,17.9 C7.6,18.3 8.3,18.6 9.1,18.8 L9.1,20 C9.1,21.1 10,22 11.1,22 C12.2,22 13.1,21.1 13.1,20 L13.1,18.7 C13.8,18.5 14.5,18.2 15.2,17.8 L16.1,18.7 C16.9,19.5 18.1,19.5 18.9,18.7 C19.7,17.9 19.7,16.7 18.9,15.9 L18,15 C18.4,14.4 18.7,13.7 18.9,12.9 L20,12.9 C21.1,12.9 22,12 22,10.9 C22,9.9 21.1,9 20,9 Z M11,14 C9.3,14 8,12.7 8,11 C8,9.3 9.3,8 11,8 C12.7,8 14,9.3 14,11 C14,12.7 12.7,14 11,14 Z"
                                          id="path-1"></path>
                                </defs>
                                <g id="Artboard" fill-rule="evenodd" transform="translate(-1201.000000, -110.000000)">
                                    <g id="settings-gear-65" transform="translate(1201.000000, 110.000000)"
                                       fill-rule="nonzero">
                                        <g id="gear-icon">
                                            <use fill-opacity="1" fill="none" fill-rule="evenodd"
                                                 xlink:href="#path-1"></use>
                                            <path fill-opacity="0.1" fill="#FFFFFF" stroke-opacity="0.35"
                                                  stroke="#FFFFFF" stroke-width="1"
                                                  d="M20,9.5 L18.3228493,9.5 L18.219238,9.13736056 C18.0305773,8.47704797 17.746425,7.81402596 17.3658784,7.14806947 L17.176404,6.81648922 L18.3464466,5.64644661 C18.9511845,5.04170876 18.9511845,4.15829124 18.3464466,3.55355339 C17.7417088,2.94881554 16.8582912,2.94881554 16.2535534,3.55355339 L15.0637089,4.74339784 L14.7226499,4.51602515 C14.1720705,4.14897221 13.5248987,3.87161289 12.7787322,3.68507125 L12.4,3.5903882 L12.4,2 C12.4,1.17614237 11.7238576,0.5 10.9,0.5 C10.0761424,0.5 9.4,1.17614237 9.4,2 L9.4,3.66037961 L9.05811388,3.77434165 C7.69960052,4.22717944 7.65872447,4.24231872 7.14806947,4.53412157 L6.79582579,4.73540367 L6.52629534,4.43218192 L5.74644661,3.55355339 C5.14170876,2.94881554 4.25829124,2.94881554 3.65355339,3.55355339 C3.04881554,4.15829124 3.04881554,5.04170876 3.65355339,5.64644661 L4.85305804,6.84595126 L4.60686674,7.1906191 C4.39990256,7.48036894 4.23979888,7.78429457 4.10287575,8.13282619 C3.99604456,8.40476012 3.92641589,8.62757186 3.78076197,9.13736056 L3.67715071,9.5 L2,9.5 C1.17614237,9.5 0.5,10.1761424 0.5,11 C0.5,11.8238576 1.17614237,12.5 2,12.5 L3.67715071,12.5 L3.78076197,12.8626394 C3.96942271,13.522952 4.25357501,14.185974 4.63412157,14.8519305 L4.823596,15.1835108 L3.65355339,16.3535534 C3.04881554,16.9582912 3.04881554,17.8417088 3.65355339,18.4464466 C4.25829124,19.0511845 5.14170876,19.0511845 5.74644661,18.4464466 L6.93629106,17.2566022 L7.2773501,17.4839749 C7.8279295,17.8510278 8.47510125,18.1283871 9.22126781,18.3149287 L9.6,18.4096118 L9.6,20 C9.6,20.8238576 10.2761424,21.5 11.1,21.5 C11.9238576,21.5 12.6,20.8238576 12.6,20 L12.6,18.3228493 L12.9626394,18.219238 C13.622952,18.0305773 14.285974,17.746425 14.9519305,17.3658784 L15.2835108,17.176404 L16.4535534,18.3464466 C17.0582912,18.9511845 17.9417088,18.9511845 18.5464466,18.3464466 C19.1511845,17.7417088 19.1511845,16.8582912 18.5464466,16.2535534 L17.3566022,15.0637089 L17.5839749,14.7226499 C17.9510278,14.1720705 18.2283871,13.5248987 18.4149287,12.7787322 L18.5096118,12.4 L20,12.4 C20.8238576,12.4 21.5,11.7238576 21.5,10.9 C21.5,10.1646273 20.811636,9.5 20,9.5 Z M11,14.5 C9.02385763,14.5 7.5,12.9761424 7.5,11 C7.5,9.02385763 9.02385763,7.5 11,7.5 C12.9761424,7.5 14.5,9.02385763 14.5,11 C14.5,12.9761424 12.9761424,14.5 11,14.5 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>

                    </div>
                    <div class="qr-navbar__account-dropdown-container">
                        <div class="qr-navbar__scrollable-container ps-container ps-theme-default"
                             data-ps-id="d8a0effc-e8be-1b88-d31c-6e8f6f0871b5">
                            <ul class="qr-navbar__dropdown__container">
                                <li>
                                    <a href="/account/">
                                        My Account <i class="icon-qr-my-account"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/usermanagement/">
                                        User Management <i class="icon-qr-user-management"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/whitelabel/">
                                        Whitelabel Options <i class="icon-qr-whitelabel"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/api/?from=options">
                                        API Keys <i class="icon-options"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/upgrade/?from=options">
                                        Features &amp; Pricing <i class="icon-qr-features-pricing"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://help.qr-code-generator.com/en" target="_help">
                                        Help Center <i class="icon-qr-help-center"></i>
                                    </a>
                                </li>
                                <li class="divider-container">
                                    <div class="divider"></div>
                                </li>
                                <li>
                                    <a href="/logout/">
                                        Logout <i class="icon-qr-log-out"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
                                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </div>
                        <div class="qr-popup__layer" ng-click="onLayerClick()" ng-class="getLayerClasses()"></div>
                    </div>
                </div>
            </div>

            <div class="qr-navbar__trial-banner">
            </div>
        </div>

        <div id="page">
            <div id="content">
            </div>

            <manage-view-component is-admin="''"
                                   aws-credentials="{'url':'//qrcgcustomers.s3-eu-west-1.amazonaws.com','inputs':{'Content-Type':'','acl':'public-read','success_action_status':'201','policy':'eyJleHBpcmF0aW9uIjoiMjAxOS0wOS0yMFQ5OjE3OjMzWiIsImNvbmRpdGlvbnMiOlt7ImJ1Y2tldCI6InFyY2djdXN0b21lcnMifSx7ImFjbCI6InB1YmxpYy1yZWFkIn0sWyJzdGFydHMtd2l0aCIsIiRrZXkiLCJhY2NvdW50NjA5MjcwN1wvIl0sWyJzdGFydHMtd2l0aCIsIiRDb250ZW50LVR5cGUiLCIiXSx7InN1Y2Nlc3NfYWN0aW9uX3N0YXR1cyI6IjIwMSJ9LHsieC1hbXotY3JlZGVudGlhbCI6IkFLSUFKQjJIUk1YTVlCR1IyS0lRXC8yMDE5MDkyMFwvZXUtd2VzdC0xXC9zM1wvYXdzNF9yZXF1ZXN0In0seyJ4LWFtei1hbGdvcml0aG0iOiJBV1M0LUhNQUMtU0hBMjU2In0seyJ4LWFtei1kYXRlIjoiMjAxOTA5MjBUMDMxNzMzWiJ9LHsieC1hbXotZXhwaXJlcyI6Ijg2NDAwIn0sWyJzdGFydHMtd2l0aCIsIiRmaWxlbmFtZSIsIiJdLFsic3RhcnRzLXdpdGgiLCIkdmFybmFtZSIsIiJdXX0=','X-amz-credential':'AKIAJB2HRMXMYBGR2KIQ/20190920/eu-west-1/s3/aws4_request','X-amz-algorithm':'AWS4-HMAC-SHA256','X-amz-date':'20190920T031733Z','X-amz-expires':'86400','X-amz-signature':'f9129f390ed64ba38086b61aa544f7d2bc3683b11e1f88ae2ccaa52d47513561'}}"
                                   class="ng-isolate-scope"></manage-view-component>

        </div>
    </div>
</template>

<script>
    import ManageViewComponent from "../components/ManageViewComponent";
    export default {
        components: {ManageViewComponent},
        data: function () {
            return {
                dropdownOpen: false,
            }
        },
        computed: {},
        created: function () {
            axios.post('/api/v1/createNew', {
                qr_code_text: that.formalUrl,
            }, {
                responseType: 'blob'
            }).then(res => {
                console.log(res)

            }).catch(err => {
                console.log(err)
            });
        },
        methods: {
            toggleDropdown: function () {
                this.dropdownOpen = !this.dropdownOpen;
            }
        }
    }
</script>

<style scoped>

</style>