<template>
    <div class="qr-manage-content qr-manage-content--panel-open" data-manage-content="">
        <div ng-show="!isAdmin" class="qr-manage-content__banner qr-manage-content__banner_open"
             data-alert-banner="">

            <!--<open-invoice-component open="account.payment_open &amp;&amp; !account.trial"-->
                                    <!--payment-tx-id="account.payment_txid"-->
                                    <!--ng-class="{forceDisplayBlock: account.payment_open &amp;&amp; !account.trial}"-->
                                    <!--class="ng-isolate-scope"></open-invoice-component>-->

        </div>

        <div class="qr-manage-content__items" ng-show="!statistics.open"><span
                class="qr-manage-content__checkbox checkboxes-container blue-checkbox"
                v-if="checkbox.visible"><input type="checkbox" id="qr-manage-content-checkbox"
                                                  v-on:click="checkAll()"
                                                  v-model="checkbox.checkAllState"><label
                class="qr-manage-content__checkbox-label" for="qr-manage-content-checkbox"></label></span>


            <manage-bar-component is-admin="isAdmin" total-selected="checkbox.totalSelected"
                                  selected-codes="checkbox.selectedCodes" search-query="getSearchQuery()"
                                  class="ng-isolate-scope"></manage-bar-component>

            <div ng-hide="isLoadingCodes" class="" style="">
                <!-- ngRepeat: code in codes track by code.id -->

                <manage-code-component ng-repeat="code in codes track by code.id" value="code"
                                       is-admin="isAdmin" checkbox="checkbox"
                                       class="ng-scope ng-isolate-scope" style=""></manage-code-component>

                <div class="qr-manage-content__loading ng-hide" ng-show="isLoadingCodes"
                     ng-style="getLoadingAreaStyles(windowHeight)" style="padding-top: 0px;">


                    <spinner-component class="qr-manage-content__spinner ng-isolate-scope"
                                       loading="isLoadingCodes" size="32px"></spinner-component>

                    <div class="qr-manage-content__loading-message ng-binding"
                         ng-bind="::loadingMessage">Loading QR Codes...
                    </div>
                </div>
                <div class="qr-manage-content__empty ng-hide"
                     ng-show="!isLoadingCodes &amp;&amp; codes.length === 0 &amp;&amp; !getSearchQuery()"
                     style=""><span class="qr-manage-content__icon icon icon-active"
                                    ng-class="getFolderIconClass()"></span>
                    <p class="qr-manage-content__empty-text ng-binding" ng-bind="getEmptyText()">There
                        are no active QR Codes</p></div>
                <div class="qr-manage-content__empty qr-manage-content__empty--search ng-hide"
                     ng-show="!isLoadingCodes &amp;&amp; codes.length === 0 &amp;&amp; getSearchQuery()">
                    <img class="qr-manage-content__cody" ng-src="">
                    <p class="qr-manage-content__empty-text ng-binding"
                       ng-bind="getNoSearchResultsMessage()">No search results found for "" in this
                        folder.</p>
                    <button type="button" class="qr-manage-content__search-all ng-binding"
                            ng-click="searchAll()" ng-show="isSearchAllVisible()"
                            ng-bind="::searchInAllLabel">Search in All QR Codes?
                    </button>
                </div>

                <resources-component ng-if="isResourcesVisible()" class="ng-scope ng-isolate-scope"
                                     style=""></resources-component>

            </div>

            <statistics-view-component open="statistics.open" code="statistics.code" is-demo="statistics.demo"
                                       class="ng-isolate-scope"></statistics-view-component>
        </div>
    </div>
</template>

<script>
    import OpenInvoiceComponent from "./OpenInvoiceComponent";
    import ManageBarComponent from "./ManageBarComponent";
    import ManageCodeComponent from "./ManageCodeComponent";
    import SpinnerComponent from "./SpinnerComponent";
    import ResourcesComponent from "./ResourcesComponent";
    import StatisticsViewComponent from "./StatisticsViewComponent";

    export default {
        name: "ManageContentComponent",
        components: {
            StatisticsViewComponent,
            ResourcesComponent, SpinnerComponent, ManageCodeComponent, ManageBarComponent, OpenInvoiceComponent
        },
        data: function () {
            return {
                checkbox: {
                    visible: false,
                    checkAllState: false,
                }
            }
        },
        computed: {},
        methods: {
            checkAll: function () {
                
            }
        }
    }
</script>

<style scoped>

</style>