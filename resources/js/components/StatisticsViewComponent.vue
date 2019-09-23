<template>
    <div>
        <!--<div class="statistics-back-button ng-hide" ng-show="open"><a-->
                <!--ng-href="#!/?folder=active" ng-click="delayTransition($event)"-->
                <!--href="#!/?folder=active"><i class="icon-event-back"></i><span-->
                <!--class="ng-binding">Back</span></a></div>-->
        <div class="qr-statistics-view ng-hide" ng-class="getStatisticsClass()" ng-show="open">
            <!-- ngIf: showOpenDemoBanner -->
            <div class="top-header">
                <div class="code-info">

                    <manage-code-component value="code" is-admin="false" checkbox="false"
                                           is-demo="isDemo" class="ng-isolate-scope"></manage-code-component>

                    <div class="redesign"><i class="icon-thin-close"
                                             ng-click="closeFullPreview()"></i>
                        <div class="preview active" ng-click="openFullPreview()">
                            <div class="preview-smartphone active">
                                <iframe class="code-preview" ng-hide="fullPreview"
                                        scrolling="no"></iframe>
                                <iframe class="code-preview ng-hide" ng-show="fullPreview"
                                        scrolling="yes"></iframe>
                            </div>
                        </div>
                    </div>
                    <span class="code-status ng-binding ng-hide" ng-show="getStatus()"
                          ng-class="getStatusClass()" ng-bind="getStatus()"></span></div>
            </div>
            <div class="statistics-content">
                <qr-campaign-info value="code" disabled="isDemo" open="open"
                                  class="ng-isolate-scope">
                    <qr-campaign-info-modal open="openCampaignModal" campaign-info="campaign"
                                            items="items" item-images="itemImages"
                                            qr-code="value" class="ng-isolate-scope">
                        <qr-modal data-title="Campaign Info" open="open" buttons="getButtons()"
                                  auto-close="false" close-icon="true"
                                  class="qr-campaign-info-modal ng-isolate-scope">
                            <qr-popup open="open" modal-mode="true" auto-close="false"
                                      visible-layer="true" no-padding="true" min-width=""
                                      left-offset="" class="ng-isolate-scope">
                                <div class="qr-popup  qr-popup--modal qr-popup--no-padding"
                                     ng-class="getPopupClasses()"
                                     ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                                     style="z-index: 20000;">
                                    <ng-transclude><i
                                            class="qr-popup__close-icon icon-thin-close ng-scope"
                                            ng-show="closeIcon" ng-click="closeWindow()"></i><h6
                                            class="qr-modal__title ng-binding ng-scope"
                                            ng-show="title">Campaign Info<span
                                            class="qr-modal__title-label ng-binding ng-hide"
                                            ng-show="titleLabel" ng-bind="titleLabel"></span>
                                    </h6>
                                        <p class="qr-modal__description ng-binding ng-scope ng-hide"
                                           ng-show="description" ng-bind="description"></p>
                                        <ng-transclude class="ng-scope">
                                            <!-- ngIf: open --></ng-transclude>
                                        <div class="qr-modal__buttons ng-scope"
                                             ng-show="buttons.length > 0">
                                            <!-- ngRepeat: button in buttons -->
                                            <button type="button" ng-repeat="button in buttons"
                                                    ng-class="getButtonClass(button)"
                                                    ng-click="click(button)"
                                                    ng-bind="button.label"
                                                    class="ng-binding ng-scope qr-modal__button">
                                                Save
                                            </button><!-- end ngRepeat: button in buttons -->
                                            <button type="button" ng-repeat="button in buttons"
                                                    ng-class="getButtonClass(button)"
                                                    ng-click="click(button)"
                                                    ng-bind="button.label"
                                                    class="ng-binding ng-scope qr-modal__button qr-modal__button--link">
                                                Cancel
                                            </button><!-- end ngRepeat: button in buttons -->
                                        </div>
                                    </ng-transclude>
                                </div>
                                <div class="qr-popup__layer qr-popup__layer--visible"
                                     ng-click="onLayerClick()" ng-class="getLayerClasses()"
                                     ng-style="{zIndex: getLayerZIndex()}"
                                     style="z-index: 19999;"></div>
                            </qr-popup>
                        </qr-modal>
                    </qr-campaign-info-modal>
                    <qr-demo-modal open="openDemoModal" class="ng-isolate-scope">
                        <qr-modal open="open" data-title="Feature not available"
                                  buttons="::buttons" close-icon="true"
                                  class="ng-isolate-scope">
                            <qr-popup open="open" modal-mode="true" auto-close=""
                                      visible-layer="true" no-padding="true" min-width=""
                                      left-offset="" class="ng-isolate-scope">
                                <div class="qr-popup  qr-popup--modal qr-popup--no-padding"
                                     ng-class="getPopupClasses()"
                                     ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                                     style="z-index: 20000;">
                                    <ng-transclude><i
                                            class="qr-popup__close-icon icon-thin-close ng-scope"
                                            ng-show="closeIcon" ng-click="closeWindow()"></i><h6
                                            class="qr-modal__title ng-binding ng-scope"
                                            ng-show="title">Feature not available<span
                                            class="qr-modal__title-label ng-binding ng-hide"
                                            ng-show="titleLabel" ng-bind="titleLabel"></span>
                                    </h6>
                                        <p class="qr-modal__description ng-binding ng-scope ng-hide"
                                           ng-show="description" ng-bind="description"></p>
                                        <ng-transclude class="ng-scope">
                                            <div class="qr-pause-code-modal__content ng-binding ng-scope"
                                                 ng-bind="::message">This feature is not
                                                available in the Demo Statistics.
                                            </div>
                                        </ng-transclude>
                                        <div class="qr-modal__buttons ng-scope"
                                             ng-show="buttons.length > 0">
                                            <!-- ngRepeat: button in buttons -->
                                            <button type="button" ng-repeat="button in buttons"
                                                    ng-class="getButtonClass(button)"
                                                    ng-click="click(button)"
                                                    ng-bind="button.label"
                                                    class="ng-binding ng-scope qr-modal__button">
                                                OK
                                            </button><!-- end ngRepeat: button in buttons -->
                                        </div>
                                    </ng-transclude>
                                </div>
                                <div class="qr-popup__layer qr-popup__layer--visible"
                                     ng-click="onLayerClick()" ng-class="getLayerClasses()"
                                     ng-style="{zIndex: getLayerZIndex()}"
                                     style="z-index: 19999;"></div>
                            </qr-popup>
                        </qr-modal>
                    </qr-demo-modal>
                    <div class="qr-campaign-info">
                        <div class="qr-campaign-info__total-scans"><span
                                class="title ng-binding">Total Scans</span>
                            <div class="total-scans ng-binding"></div>
                            <span class="divider">/</span>
                            <div class="unique-scans ng-binding"> Unique</div>
                        </div>
                        <div class="qr-campaign-info__menu">
                            <div class="qr-campaign-info__menu__element"><span
                                    class="title ng-binding">Medium</span><i
                                    class="icon icon-qr-plus-squared"
                                    ng-click="openCampaignInfoModal()"
                                    ng-hide="campaign.imageName"></i>
                                <!-- ngIf: campaign.imageName --><a
                                        ng-switch="campaign.material"
                                        ng-click="openCampaignInfoModal()" class="add-info"
                                        ng-class="getLinkStyle(campaign.material)">
                                    <!-- ngSwitchWhen:  --><i ng-switch-when=""
                                                              class="qr-campaign-info__menu__element__icon icon icon-event-about ng-scope"></i>
                                    <!-- end ngSwitchWhen: --><!-- ngSwitchWhen:  --><span
                                        ng-switch-when=""
                                        class="ng-binding ng-scope">Add info</span>
                                    <!-- end ngSwitchWhen: --><!-- ngSwitchDefault:  --></a>
                            </div>
                            <div class="qr-campaign-info__menu__element"><span
                                    class="title ng-binding">Print Run</span><a
                                    ng-switch="campaign.printRun"
                                    ng-click="openCampaignInfoModal()" class="add-info"
                                    ng-class="getLinkStyle(campaign.printRun)">
                                <!-- ngSwitchWhen:  --><i ng-switch-when=""
                                                          class="qr-campaign-info__menu__element__icon icon icon-event-about ng-scope"></i>
                                <!-- end ngSwitchWhen: --><!-- ngSwitchWhen:  --><span
                                    ng-switch-when=""
                                    class="ng-binding ng-scope">Add info</span>
                                <!-- end ngSwitchWhen: --><!-- ngSwitchDefault:  --></a></div>
                            <div class="qr-campaign-info__menu__element"><span
                                    class="title ng-binding">Campaign Start</span><a
                                    ng-switch="campaign.dateStart"
                                    ng-click="openCampaignInfoModal()"
                                    class="add-info add-info--edit"
                                    ng-class="getLinkStyle(campaign.dateStart)">
                                <!-- ngSwitchWhen:  --><!-- ngSwitchWhen:  -->
                                <!-- ngSwitchDefault:  --><span ng-switch-default=""
                                                                class="ng-binding ng-scope">Sep 20, 2019</span>
                                <!-- end ngSwitchWhen: --></a></div>
                            <div class="qr-campaign-info__menu__element"><span
                                    class="title ng-binding">Campaign End</span><a
                                    ng-switch="campaign.dateEnd"
                                    ng-click="openCampaignInfoModal()" class="add-info"
                                    ng-class="getLinkStyle(campaign.dateEnd)">
                                <!-- ngSwitchWhen:  --><i ng-switch-when=""
                                                          class="qr-campaign-info__menu__element__icon icon icon-event-about ng-scope"></i>
                                <!-- end ngSwitchWhen: --><!-- ngSwitchWhen:  --><span
                                    ng-switch-when=""
                                    class="ng-binding ng-scope">Add info</span>
                                <!-- end ngSwitchWhen: --><!-- ngSwitchDefault:  --></a></div>
                        </div>
                    </div>
                </qr-campaign-info>
                <qr-campaign-charts value="code" disabled="isDemo" class="ng-isolate-scope">
                    <qr-demo-modal open="openDemoModal" class="ng-isolate-scope">
                        <qr-modal open="open" data-title="Feature not available"
                                  buttons="::buttons" close-icon="true"
                                  class="ng-isolate-scope">
                            <qr-popup open="open" modal-mode="true" auto-close=""
                                      visible-layer="true" no-padding="true" min-width=""
                                      left-offset="" class="ng-isolate-scope">
                                <div class="qr-popup  qr-popup--modal qr-popup--no-padding"
                                     ng-class="getPopupClasses()"
                                     ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                                     style="z-index: 20000;">
                                    <ng-transclude><i
                                            class="qr-popup__close-icon icon-thin-close ng-scope"
                                            ng-show="closeIcon" ng-click="closeWindow()"></i><h6
                                            class="qr-modal__title ng-binding ng-scope"
                                            ng-show="title">Feature not available<span
                                            class="qr-modal__title-label ng-binding ng-hide"
                                            ng-show="titleLabel" ng-bind="titleLabel"></span>
                                    </h6>
                                        <p class="qr-modal__description ng-binding ng-scope ng-hide"
                                           ng-show="description" ng-bind="description"></p>
                                        <ng-transclude class="ng-scope">
                                            <div class="qr-pause-code-modal__content ng-binding ng-scope"
                                                 ng-bind="::message">This feature is not
                                                available in the Demo Statistics.
                                            </div>
                                        </ng-transclude>
                                        <div class="qr-modal__buttons ng-scope"
                                             ng-show="buttons.length > 0">
                                            <!-- ngRepeat: button in buttons -->
                                            <button type="button" ng-repeat="button in buttons"
                                                    ng-class="getButtonClass(button)"
                                                    ng-click="click(button)"
                                                    ng-bind="button.label"
                                                    class="ng-binding ng-scope qr-modal__button">
                                                OK
                                            </button><!-- end ngRepeat: button in buttons -->
                                        </div>
                                    </ng-transclude>
                                </div>
                                <div class="qr-popup__layer qr-popup__layer--visible"
                                     ng-click="onLayerClick()" ng-class="getLayerClasses()"
                                     ng-style="{zIndex: getLayerZIndex()}"
                                     style="z-index: 19999;"></div>
                            </qr-popup>
                        </qr-modal>
                    </qr-demo-modal>
                    <qr-datepicker-modal open="open.modal.datepicker" from="apiScanParams.from"
                                         to="apiScanParams.to" group="apiScanParams.group_by"
                                         class="ng-isolate-scope">
                        <qr-modal open="open" buttons="getButtons()"
                                  class="qr-datepicker-modal ng-isolate-scope">
                            <qr-popup open="open" modal-mode="true" auto-close=""
                                      visible-layer="true" no-padding="true" min-width=""
                                      left-offset="" class="ng-isolate-scope">
                                <div class="qr-popup  qr-popup--modal qr-popup--no-padding"
                                     ng-class="getPopupClasses()"
                                     ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                                     style="z-index: 20000;">
                                    <ng-transclude><i
                                            class="qr-popup__close-icon icon-thin-close ng-scope ng-hide"
                                            ng-show="closeIcon" ng-click="closeWindow()"></i><h6
                                            class="qr-modal__title ng-binding ng-scope ng-hide"
                                            ng-show="title"><span
                                            class="qr-modal__title-label ng-binding ng-hide"
                                            ng-show="titleLabel" ng-bind="titleLabel"></span>
                                    </h6>
                                        <p class="qr-modal__description ng-binding ng-scope ng-hide"
                                           ng-show="description" ng-bind="description"></p>
                                        <ng-transclude class="ng-scope">
                                            <div ng-init="initDatepicker()"
                                                 class="qr-datepicker-modal__content ng-scope">
                                                <div id="dp1"><input
                                                        id="chartdatetimepickerstart"
                                                        type="hidden" value="2019-09-20"
                                                        style="">
                                                    <div class="bootstrap-datetimepicker-widget usetwentyfour dropdown-menu picker-open bottom"
                                                         style="z-index: 99999999 !important; position: fixed; top: 1px; left: 0px; right: auto;"
                                                         id="qr-calendar">
                                                        <ul class="list-unstyled">
                                                            <li class="collapse in">
                                                                <div class="datepicker">
                                                                    <div class="datepicker-days"
                                                                         style="display: block;">
                                                                        <table class="table-condensed">
                                                                            <thead>
                                                                            <tr>
                                                                                <th class="prev">
                                                                                    ‹
                                                                                </th>
                                                                                <th colspan="5"
                                                                                    class="picker-switch">
                                                                                    September
                                                                                    2019
                                                                                </th>
                                                                                <th class="next disabled">
                                                                                    ›
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="dow">
                                                                                    Su
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Mo
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Tu
                                                                                </th>
                                                                                <th class="dow">
                                                                                    We
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Th
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Fr
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Sa
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="day old">
                                                                                    25
                                                                                </td>
                                                                                <td class="day old">
                                                                                    26
                                                                                </td>
                                                                                <td class="day old">
                                                                                    27
                                                                                </td>
                                                                                <td class="day old">
                                                                                    28
                                                                                </td>
                                                                                <td class="day old">
                                                                                    29
                                                                                </td>
                                                                                <td class="day old">
                                                                                    30
                                                                                </td>
                                                                                <td class="day old">
                                                                                    31
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day">
                                                                                    1
                                                                                </td>
                                                                                <td class="day">
                                                                                    2
                                                                                </td>
                                                                                <td class="day">
                                                                                    3
                                                                                </td>
                                                                                <td class="day">
                                                                                    4
                                                                                </td>
                                                                                <td class="day">
                                                                                    5
                                                                                </td>
                                                                                <td class="day">
                                                                                    6
                                                                                </td>
                                                                                <td class="day">
                                                                                    7
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day">
                                                                                    8
                                                                                </td>
                                                                                <td class="day">
                                                                                    9
                                                                                </td>
                                                                                <td class="day">
                                                                                    10
                                                                                </td>
                                                                                <td class="day">
                                                                                    11
                                                                                </td>
                                                                                <td class="day">
                                                                                    12
                                                                                </td>
                                                                                <td class="day">
                                                                                    13
                                                                                </td>
                                                                                <td class="day">
                                                                                    14
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day">
                                                                                    15
                                                                                </td>
                                                                                <td class="day">
                                                                                    16
                                                                                </td>
                                                                                <td class="day">
                                                                                    17
                                                                                </td>
                                                                                <td class="day">
                                                                                    18
                                                                                </td>
                                                                                <td class="day">
                                                                                    19
                                                                                </td>
                                                                                <td class="day active today">
                                                                                    20
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    21
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day disabled">
                                                                                    22
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    23
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    24
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    25
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    26
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    27
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    28
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day disabled">
                                                                                    29
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    30
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    1
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    2
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    3
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    4
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    5
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="datepicker-months"
                                                                         style="display: none;">
                                                                        <table class="table-condensed">
                                                                            <thead>
                                                                            <tr>
                                                                                <th class="prev">
                                                                                    ‹
                                                                                </th>
                                                                                <th colspan="5"
                                                                                    class="picker-switch">
                                                                                    2019
                                                                                </th>
                                                                                <th class="next disabled">
                                                                                    ›
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td colspan="7">
                                                                                    <span class="month">Jan</span><span
                                                                                        class="month">Feb</span><span
                                                                                        class="month">Mar</span><span
                                                                                        class="month">Apr</span><span
                                                                                        class="month">May</span><span
                                                                                        class="month">Jun</span><span
                                                                                        class="month">Jul</span><span
                                                                                        class="month">Aug</span><span
                                                                                        class="month active">Sep</span><span
                                                                                        class="month disabled">Oct</span><span
                                                                                        class="month disabled">Nov</span><span
                                                                                        class="month disabled">Dec</span>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="datepicker-years"
                                                                         style="display: none;">
                                                                        <table class="table-condensed">
                                                                            <thead>
                                                                            <tr>
                                                                                <th class="prev">
                                                                                    ‹
                                                                                </th>
                                                                                <th colspan="5"
                                                                                    class="picker-switch">
                                                                                    2010-2019
                                                                                </th>
                                                                                <th class="next">
                                                                                    ›
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td colspan="7">
                                                                                    <span class="year old">2009</span><span
                                                                                        class="year">2010</span><span
                                                                                        class="year">2011</span><span
                                                                                        class="year">2012</span><span
                                                                                        class="year">2013</span><span
                                                                                        class="year">2014</span><span
                                                                                        class="year">2015</span><span
                                                                                        class="year">2016</span><span
                                                                                        class="year">2017</span><span
                                                                                        class="year">2018</span><span
                                                                                        class="year active">2019</span><span
                                                                                        class="year old disabled">2020</span>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="picker-switch accordion-toggle">
                                                                <a class="btn"
                                                                   style="width:100%"><span
                                                                        class="glyphicon glyphicon-time"></span></a>
                                                            </li>
                                                            <li class="collapse">
                                                                <div class="timepicker">
                                                                    <div class="timepicker-picker">
                                                                        <table class="table-condensed">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                       class="btn"
                                                                                       data-action="incrementHours"><span
                                                                                        class="glyphicon glyphicon-chevron-up"></span></a>
                                                                                </td>
                                                                                <td class="separator"></td>
                                                                                <td><a href="#"
                                                                                       class="btn"
                                                                                       data-action="incrementMinutes"><span
                                                                                        class="glyphicon glyphicon-chevron-up"></span></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><span
                                                                                        data-action="showHours"
                                                                                        data-time-component="hours"
                                                                                        class="timepicker-hour">00</span>
                                                                                </td>
                                                                                <td class="separator">
                                                                                    :
                                                                                </td>
                                                                                <td><span
                                                                                        data-action="showMinutes"
                                                                                        data-time-component="minutes"
                                                                                        class="timepicker-minute">00</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                       class="btn"
                                                                                       data-action="decrementHours"><span
                                                                                        class="glyphicon glyphicon-chevron-down"></span></a>
                                                                                </td>
                                                                                <td class="separator"></td>
                                                                                <td><a href="#"
                                                                                       class="btn"
                                                                                       data-action="decrementMinutes"><span
                                                                                        class="glyphicon glyphicon-chevron-down"></span></a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="timepicker-hours"
                                                                         data-action="selectHour"
                                                                         style="display: none;">
                                                                        <table class="table-condensed">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    00
                                                                                </td>
                                                                                <td class="hour">
                                                                                    01
                                                                                </td>
                                                                                <td class="hour">
                                                                                    02
                                                                                </td>
                                                                                <td class="hour">
                                                                                    03
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    04
                                                                                </td>
                                                                                <td class="hour">
                                                                                    05
                                                                                </td>
                                                                                <td class="hour">
                                                                                    06
                                                                                </td>
                                                                                <td class="hour">
                                                                                    07
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    08
                                                                                </td>
                                                                                <td class="hour">
                                                                                    09
                                                                                </td>
                                                                                <td class="hour">
                                                                                    10
                                                                                </td>
                                                                                <td class="hour">
                                                                                    11
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    12
                                                                                </td>
                                                                                <td class="hour">
                                                                                    13
                                                                                </td>
                                                                                <td class="hour">
                                                                                    14
                                                                                </td>
                                                                                <td class="hour">
                                                                                    15
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    16
                                                                                </td>
                                                                                <td class="hour">
                                                                                    17
                                                                                </td>
                                                                                <td class="hour">
                                                                                    18
                                                                                </td>
                                                                                <td class="hour">
                                                                                    19
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    20
                                                                                </td>
                                                                                <td class="hour">
                                                                                    21
                                                                                </td>
                                                                                <td class="hour">
                                                                                    22
                                                                                </td>
                                                                                <td class="hour">
                                                                                    23
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="timepicker-minutes"
                                                                         data-action="selectMinute"
                                                                         style="display: none;">
                                                                        <table class="table-condensed">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="minute">
                                                                                    00
                                                                                </td>
                                                                                <td class="minute">
                                                                                    05
                                                                                </td>
                                                                                <td class="minute">
                                                                                    10
                                                                                </td>
                                                                                <td class="minute">
                                                                                    15
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="minute">
                                                                                    20
                                                                                </td>
                                                                                <td class="minute">
                                                                                    25
                                                                                </td>
                                                                                <td class="minute">
                                                                                    30
                                                                                </td>
                                                                                <td class="minute">
                                                                                    35
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="minute">
                                                                                    40
                                                                                </td>
                                                                                <td class="minute">
                                                                                    45
                                                                                </td>
                                                                                <td class="minute">
                                                                                    50
                                                                                </td>
                                                                                <td class="minute">
                                                                                    55
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="dp2"><input id="chartdatetimepickerend"
                                                                     type="hidden"
                                                                     value="2019-09-20"
                                                                     style="">
                                                    <div class="bootstrap-datetimepicker-widget usetwentyfour dropdown-menu picker-open bottom"
                                                         style="z-index: 99999999 !important; position: fixed; top: 1px; left: 0px; right: auto;"
                                                         id="qr-calendar">
                                                        <ul class="list-unstyled">
                                                            <li class="collapse in">
                                                                <div class="datepicker">
                                                                    <div class="datepicker-days"
                                                                         style="display: block;">
                                                                        <table class="table-condensed">
                                                                            <thead>
                                                                            <tr>
                                                                                <th class="prev disabled">
                                                                                    ‹
                                                                                </th>
                                                                                <th colspan="5"
                                                                                    class="picker-switch">
                                                                                    September
                                                                                    2019
                                                                                </th>
                                                                                <th class="next disabled">
                                                                                    ›
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <th class="dow">
                                                                                    Su
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Mo
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Tu
                                                                                </th>
                                                                                <th class="dow">
                                                                                    We
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Th
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Fr
                                                                                </th>
                                                                                <th class="dow">
                                                                                    Sa
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="day old disabled">
                                                                                    25
                                                                                </td>
                                                                                <td class="day old disabled">
                                                                                    26
                                                                                </td>
                                                                                <td class="day old disabled">
                                                                                    27
                                                                                </td>
                                                                                <td class="day old disabled">
                                                                                    28
                                                                                </td>
                                                                                <td class="day old disabled">
                                                                                    29
                                                                                </td>
                                                                                <td class="day old disabled">
                                                                                    30
                                                                                </td>
                                                                                <td class="day old disabled">
                                                                                    31
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day disabled">
                                                                                    1
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    2
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    3
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    4
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    5
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    6
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    7
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day disabled">
                                                                                    8
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    9
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    10
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    11
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    12
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    13
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    14
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day disabled">
                                                                                    15
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    16
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    17
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    18
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    19
                                                                                </td>
                                                                                <td class="day active today">
                                                                                    20
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    21
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day disabled">
                                                                                    22
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    23
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    24
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    25
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    26
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    27
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    28
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="day disabled">
                                                                                    29
                                                                                </td>
                                                                                <td class="day disabled">
                                                                                    30
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    1
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    2
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    3
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    4
                                                                                </td>
                                                                                <td class="day new disabled">
                                                                                    5
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="datepicker-months"
                                                                         style="display: none;">
                                                                        <table class="table-condensed">
                                                                            <thead>
                                                                            <tr>
                                                                                <th class="prev disabled">
                                                                                    ‹
                                                                                </th>
                                                                                <th colspan="5"
                                                                                    class="picker-switch">
                                                                                    2019
                                                                                </th>
                                                                                <th class="next disabled">
                                                                                    ›
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td colspan="7">
                                                                                    <span class="month disabled">Jan</span><span
                                                                                        class="month disabled">Feb</span><span
                                                                                        class="month disabled">Mar</span><span
                                                                                        class="month disabled">Apr</span><span
                                                                                        class="month disabled">May</span><span
                                                                                        class="month disabled">Jun</span><span
                                                                                        class="month disabled">Jul</span><span
                                                                                        class="month disabled">Aug</span><span
                                                                                        class="month active">Sep</span><span
                                                                                        class="month disabled">Oct</span><span
                                                                                        class="month disabled">Nov</span><span
                                                                                        class="month disabled">Dec</span>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="datepicker-years"
                                                                         style="display: none;">
                                                                        <table class="table-condensed">
                                                                            <thead>
                                                                            <tr>
                                                                                <th class="prev disabled">
                                                                                    ‹
                                                                                </th>
                                                                                <th colspan="5"
                                                                                    class="picker-switch">
                                                                                    2010-2019
                                                                                </th>
                                                                                <th class="next">
                                                                                    ›
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td colspan="7">
                                                                                    <span class="year old disabled">2009</span><span
                                                                                        class="year disabled">2010</span><span
                                                                                        class="year disabled">2011</span><span
                                                                                        class="year disabled">2012</span><span
                                                                                        class="year disabled">2013</span><span
                                                                                        class="year disabled">2014</span><span
                                                                                        class="year disabled">2015</span><span
                                                                                        class="year disabled">2016</span><span
                                                                                        class="year disabled">2017</span><span
                                                                                        class="year disabled">2018</span><span
                                                                                        class="year active">2019</span><span
                                                                                        class="year old disabled">2020</span>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="picker-switch accordion-toggle">
                                                                <a class="btn"
                                                                   style="width:100%"><span
                                                                        class="glyphicon glyphicon-time"></span></a>
                                                            </li>
                                                            <li class="collapse">
                                                                <div class="timepicker">
                                                                    <div class="timepicker-picker">
                                                                        <table class="table-condensed">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                       class="btn"
                                                                                       data-action="incrementHours"><span
                                                                                        class="glyphicon glyphicon-chevron-up"></span></a>
                                                                                </td>
                                                                                <td class="separator"></td>
                                                                                <td><a href="#"
                                                                                       class="btn"
                                                                                       data-action="incrementMinutes"><span
                                                                                        class="glyphicon glyphicon-chevron-up"></span></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><span
                                                                                        data-action="showHours"
                                                                                        data-time-component="hours"
                                                                                        class="timepicker-hour">00</span>
                                                                                </td>
                                                                                <td class="separator">
                                                                                    :
                                                                                </td>
                                                                                <td><span
                                                                                        data-action="showMinutes"
                                                                                        data-time-component="minutes"
                                                                                        class="timepicker-minute">00</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                       class="btn"
                                                                                       data-action="decrementHours"><span
                                                                                        class="glyphicon glyphicon-chevron-down"></span></a>
                                                                                </td>
                                                                                <td class="separator"></td>
                                                                                <td><a href="#"
                                                                                       class="btn"
                                                                                       data-action="decrementMinutes"><span
                                                                                        class="glyphicon glyphicon-chevron-down"></span></a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="timepicker-hours"
                                                                         data-action="selectHour"
                                                                         style="display: none;">
                                                                        <table class="table-condensed">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    00
                                                                                </td>
                                                                                <td class="hour">
                                                                                    01
                                                                                </td>
                                                                                <td class="hour">
                                                                                    02
                                                                                </td>
                                                                                <td class="hour">
                                                                                    03
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    04
                                                                                </td>
                                                                                <td class="hour">
                                                                                    05
                                                                                </td>
                                                                                <td class="hour">
                                                                                    06
                                                                                </td>
                                                                                <td class="hour">
                                                                                    07
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    08
                                                                                </td>
                                                                                <td class="hour">
                                                                                    09
                                                                                </td>
                                                                                <td class="hour">
                                                                                    10
                                                                                </td>
                                                                                <td class="hour">
                                                                                    11
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    12
                                                                                </td>
                                                                                <td class="hour">
                                                                                    13
                                                                                </td>
                                                                                <td class="hour">
                                                                                    14
                                                                                </td>
                                                                                <td class="hour">
                                                                                    15
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    16
                                                                                </td>
                                                                                <td class="hour">
                                                                                    17
                                                                                </td>
                                                                                <td class="hour">
                                                                                    18
                                                                                </td>
                                                                                <td class="hour">
                                                                                    19
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="hour">
                                                                                    20
                                                                                </td>
                                                                                <td class="hour">
                                                                                    21
                                                                                </td>
                                                                                <td class="hour">
                                                                                    22
                                                                                </td>
                                                                                <td class="hour">
                                                                                    23
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="timepicker-minutes"
                                                                         data-action="selectMinute"
                                                                         style="display: none;">
                                                                        <table class="table-condensed">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="minute">
                                                                                    00
                                                                                </td>
                                                                                <td class="minute">
                                                                                    05
                                                                                </td>
                                                                                <td class="minute">
                                                                                    10
                                                                                </td>
                                                                                <td class="minute">
                                                                                    15
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="minute">
                                                                                    20
                                                                                </td>
                                                                                <td class="minute">
                                                                                    25
                                                                                </td>
                                                                                <td class="minute">
                                                                                    30
                                                                                </td>
                                                                                <td class="minute">
                                                                                    35
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="minute">
                                                                                    40
                                                                                </td>
                                                                                <td class="minute">
                                                                                    45
                                                                                </td>
                                                                                <td class="minute">
                                                                                    50
                                                                                </td>
                                                                                <td class="minute">
                                                                                    55
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </ng-transclude>
                                        <div class="qr-modal__buttons ng-scope"
                                             ng-show="buttons.length > 0">
                                            <!-- ngRepeat: button in buttons -->
                                            <button type="button" ng-repeat="button in buttons"
                                                    ng-class="getButtonClass(button)"
                                                    ng-click="click(button)"
                                                    ng-bind="button.label"
                                                    class="ng-binding ng-scope qr-modal__button">
                                                Save
                                            </button><!-- end ngRepeat: button in buttons -->
                                            <button type="button" ng-repeat="button in buttons"
                                                    ng-class="getButtonClass(button)"
                                                    ng-click="click(button)"
                                                    ng-bind="button.label"
                                                    class="ng-binding ng-scope qr-modal__button qr-modal__button--link">
                                                Cancel
                                            </button><!-- end ngRepeat: button in buttons -->
                                        </div>
                                    </ng-transclude>
                                </div>
                                <div class="qr-popup__layer qr-popup__layer--visible"
                                     ng-click="onLayerClick()" ng-class="getLayerClasses()"
                                     ng-style="{zIndex: getLayerZIndex()}"
                                     style="z-index: 19999;"></div>
                            </qr-popup>
                        </qr-modal>
                    </qr-datepicker-modal>
                    <qr-reset-scans-modal open="open.modal.reset" class="ng-isolate-scope">
                        <qr-modal open="open" data-title="Reset Scans" buttons="::buttons"
                                  class="ng-isolate-scope">
                            <qr-popup open="open" modal-mode="true" auto-close=""
                                      visible-layer="true" no-padding="true" min-width=""
                                      left-offset="" class="ng-isolate-scope">
                                <div class="qr-popup  qr-popup--modal qr-popup--no-padding"
                                     ng-class="getPopupClasses()"
                                     ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                                     style="z-index: 20000;">
                                    <ng-transclude><i
                                            class="qr-popup__close-icon icon-thin-close ng-scope ng-hide"
                                            ng-show="closeIcon" ng-click="closeWindow()"></i><h6
                                            class="qr-modal__title ng-binding ng-scope"
                                            ng-show="title">Reset Scans<span
                                            class="qr-modal__title-label ng-binding ng-hide"
                                            ng-show="titleLabel" ng-bind="titleLabel"></span>
                                    </h6>
                                        <p class="qr-modal__description ng-binding ng-scope ng-hide"
                                           ng-show="description" ng-bind="description"></p>
                                        <ng-transclude class="ng-scope">
                                            <div class="qr-reset-scans-modal__content ng-binding ng-scope"
                                                 ng-bind-html="::message">Resetting your scans
                                                will make you lose all scan data related to this
                                                QR Code. Are you sure?
                                            </div>
                                        </ng-transclude>
                                        <div class="qr-modal__buttons ng-scope"
                                             ng-show="buttons.length > 0">
                                            <!-- ngRepeat: button in buttons -->
                                            <button type="button" ng-repeat="button in buttons"
                                                    ng-class="getButtonClass(button)"
                                                    ng-click="click(button)"
                                                    ng-bind="button.label"
                                                    class="ng-binding ng-scope qr-modal__button">
                                                Cancel
                                            </button><!-- end ngRepeat: button in buttons -->
                                            <button type="button" ng-repeat="button in buttons"
                                                    ng-class="getButtonClass(button)"
                                                    ng-click="click(button)"
                                                    ng-bind="button.label"
                                                    class="ng-binding ng-scope qr-modal__button qr-modal__button--link">
                                                Reset
                                            </button><!-- end ngRepeat: button in buttons -->
                                        </div>
                                    </ng-transclude>
                                </div>
                                <div class="qr-popup__layer qr-popup__layer--visible"
                                     ng-click="onLayerClick()" ng-class="getLayerClasses()"
                                     ng-style="{zIndex: getLayerZIndex()}"
                                     style="z-index: 19999;"></div>
                            </qr-popup>
                        </qr-modal>
                    </qr-reset-scans-modal>
                    <div class="qr-campaign-charts">
                        <button class="qr-campaign-charts__date ng-binding" type="button"
                                ng-click="menuDayClick()"><span class="icon-qr-calendar"></span>Auto<span
                                ng-hide="open.menu.day" class="icon-down-open-mini"></span><span
                                ng-show="open.menu.day"
                                class="icon-up-open-mini ng-hide"></span></button>
                        <div class="datePopup"><!-- ngIf: open.menu.day --></div>
                        <button class="qr-campaign-charts__groupBy ng-binding" type="button"
                                ng-click="menuGroupByClick()">Auto<span
                                ng-hide="open.menu.groupBy"
                                class="icon-down-open-mini"></span><span
                                ng-show="open.menu.groupBy"
                                class="icon-up-open-mini ng-hide"></span></button>
                        <div class="groupPopup"><!-- ngIf: open.menu.groupBy --></div>
                        <button class="qr-campaign-charts__download ng-binding" type="button"
                                ng-click="menuDownloadClick()"><span
                                class="icon-options"></span>Options<span
                                ng-hide="open.menu.download" class="icon-down-open-mini"></span><span
                                ng-show="open.menu.download"
                                class="icon-up-open-mini ng-hide"></span></button>
                        <!-- ngIf: open.menu.download -->
                        <div class="qr-campaign-charts__statistics">
                            <!-- ngIf: openEmptyState -->
                            <div class="qr-campaign-charts__statistics__element line-chart">
                                <span class="title ng-binding">Scans over time</span>
                                <canvas ng-hide="chartLoading"
                                        style="width: 475px; height: 330px; display: block;"
                                        id="scansOverTime" width="950" height="660"
                                        class="chartjs-render-monitor ng-hide"></canvas>
                                <div ng-show="chartLoading"
                                     class="qr-campaign-charts__statistics__element--loading">
                                    <qr-spinner
                                            class="qr-manage-content__spinner ng-isolate-scope"
                                            loading="true" size="32px">
                                        <div class="qr-spinner" ng-show="loading"
                                             ng-style="getStyles()"
                                             style="width: 32px; height: 32px;"></div>
                                    </qr-spinner>
                                    <div class="loadingMessage ng-binding">Loading Scans</div>
                                </div>
                            </div>
                            <div class="qr-campaign-charts__statistics__element horizontal-bar-chart">
                                <span class="title ng-binding">Scans by operating system</span>
                                <div ng-show="OSLoading"
                                     class="qr-campaign-charts__statistics__element--loading">
                                    <qr-spinner
                                            class="qr-manage-content__spinner ng-isolate-scope"
                                            loading="true" size="32px">
                                        <div class="qr-spinner" ng-show="loading"
                                             ng-style="getStyles()"
                                             style="width: 32px; height: 32px;"></div>
                                    </qr-spinner>
                                    <div class="loadingMessage ng-binding">Loading Operating
                                        Systems
                                    </div>
                                </div>
                                <table ng-hide="OSLoading"
                                       class="qr-campaign-charts__statistics__element__table ng-hide">
                                    <thead>
                                    <tr>
                                        <th style="min-width: 120px" class="ng-binding">OS</th>
                                        <th style="width: 67%" class="ng-binding">Scans</th>
                                        <th>%</th>
                                    </tr>
                                    </thead>
                                </table>
                                <div ng-show="!OSLoading &amp;&amp; !OSstatistics.length"
                                     class="emptyMessage ng-binding ng-hide">No data available
                                </div>
                                <div class="content-scrollable ps-container ps-theme-default"
                                     data-chart="platform" data-page="1"
                                     data-ps-id="b273e3b5-bb19-2dcb-5b43-3b0d9e37a3cd">
                                    <table ng-hide="OSLoading"
                                           class="qr-campaign-charts__statistics__element__table ng-hide">
                                        <tbody>
                                        <!-- ngRepeat: item in OSstatistics track by $index --></tbody>
                                    </table>
                                    <div class="contentLoading" style="display: none;">
                                        <qr-spinner loading="true" size="22px"
                                                    class="ng-isolate-scope">
                                            <div class="qr-spinner" ng-show="loading"
                                                 ng-style="getStyles()"
                                                 style="width: 22px; height: 22px;"></div>
                                        </qr-spinner>
                                        <span class="lzLoadingMessage ng-binding">Loading...</span>
                                    </div>
                                    <div class="ps-scrollbar-x-rail"
                                         style="left: 0px; bottom: 0px;">
                                        <div class="ps-scrollbar-x" tabindex="0"
                                             style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps-scrollbar-y-rail"
                                         style="top: 0px; right: 0px;">
                                        <div class="ps-scrollbar-y" tabindex="0"
                                             style="top: 0px; height: 0px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="horizontal-line tables--less"
                                 ng-class="getChartsClass()"></div>
                            <div class="vertical-line"></div>
                            <div class="show-full" ng-click="toggleStatistics()"><span
                                    ng-hide="showFullStatistics" class="ng-binding">Show full statistics<span
                                    class="icon-down-open-mini"></span></span><span
                                    ng-show="showFullStatistics" class="ng-binding ng-hide">Show less<span
                                    class="icon-up-open-mini"></span></span></div>
                            <div class="tables tables--less" ng-class="getChartsClass()">
                                <div class="qr-campaign-charts__statistics__element top-countries">
                                    <span class="title ng-binding">Scans by top countries</span>
                                    <div ng-show="countryLoading"
                                         class="qr-campaign-charts__statistics__element--loading">
                                        <qr-spinner
                                                class="qr-manage-content__spinner ng-isolate-scope"
                                                loading="true" size="32px">
                                            <div class="qr-spinner" ng-show="loading"
                                                 ng-style="getStyles()"
                                                 style="width: 32px; height: 32px;"></div>
                                        </qr-spinner>
                                        <div class="loadingMessage ng-binding">Loading
                                            Countries
                                        </div>
                                    </div>
                                    <table ng-hide="countryLoading"
                                           class="qr-campaign-charts__statistics__element__table ng-hide">
                                        <thead>
                                        <tr>
                                            <th style="width:10%">#</th>
                                            <th style="width:55%" class="ng-binding">Country
                                            </th>
                                            <th style="width:25%" class="ng-binding">Scans</th>
                                            <th style="width:10%">%</th>
                                        </tr>
                                        </thead>
                                    </table>
                                    <div ng-show="!countryLoading &amp;&amp; !countryStatistics.length"
                                         class="emptyMessage ng-binding ng-hide">No data
                                        available
                                    </div>
                                    <div class="content-scrollable ps-container ps-theme-default"
                                         data-chart="country" data-page="1"
                                         data-ps-id="da8e3b1d-7cf1-6cc6-55e7-e28bdd5e560d">
                                        <table ng-hide="countryLoading"
                                               class="qr-campaign-charts__statistics__element__table ng-hide">
                                            <tbody>
                                            <!-- ngRepeat: item in countryStatistics track by $index --></tbody>
                                        </table>
                                        <div class="contentLoading" style="display: none;">
                                            <qr-spinner loading="true" size="22px"
                                                        class="ng-isolate-scope">
                                                <div class="qr-spinner" ng-show="loading"
                                                     ng-style="getStyles()"
                                                     style="width: 22px; height: 22px;"></div>
                                            </qr-spinner>
                                            <span class="lzLoadingMessage ng-binding">Loading...</span>
                                        </div>
                                        <div class="ps-scrollbar-x-rail"
                                             style="left: 0px; bottom: 0px;">
                                            <div class="ps-scrollbar-x" tabindex="0"
                                                 style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps-scrollbar-y-rail"
                                             style="top: 0px; right: 0px;">
                                            <div class="ps-scrollbar-y" tabindex="0"
                                                 style="top: 0px; height: 0px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="qr-campaign-charts__statistics__element top-cities">
                                    <span class="title ng-binding">Scans by top cities</span>
                                    <div ng-show="cityLoading"
                                         class="qr-campaign-charts__statistics__element--loading">
                                        <qr-spinner
                                                class="qr-manage-content__spinner ng-isolate-scope"
                                                loading="true" size="32px">
                                            <div class="qr-spinner" ng-show="loading"
                                                 ng-style="getStyles()"
                                                 style="width: 32px; height: 32px;"></div>
                                        </qr-spinner>
                                        <div class="loadingMessage ng-binding">Loading Cities
                                        </div>
                                    </div>
                                    <table ng-hide="cityLoading"
                                           class="qr-campaign-charts__statistics__element__table ng-hide">
                                        <thead>
                                        <tr>
                                            <th style="width:10%">#</th>
                                            <th style="width:55%" class="ng-binding">City</th>
                                            <th style="width:25%" class="ng-binding">Scans</th>
                                            <th style="width:10%">%</th>
                                        </tr>
                                        </thead>
                                    </table>
                                    <div ng-show="!cityLoading &amp;&amp; !cityStatistics.length"
                                         class="emptyMessage ng-binding ng-hide">No data
                                        available
                                    </div>
                                    <div class="content-scrollable ps-container ps-theme-default"
                                         data-chart="city" data-page="1"
                                         data-ps-id="0197ae3c-6cdc-77d0-8c0c-1f4d669f3308">
                                        <table ng-hide="cityLoading"
                                               class="qr-campaign-charts__statistics__element__table ng-hide">
                                            <tbody>
                                            <!-- ngRepeat: item in cityStatistics track by $index --></tbody>
                                        </table>
                                        <div class="contentLoading" style="display: none;">
                                            <qr-spinner loading="true" size="22px"
                                                        class="ng-isolate-scope">
                                                <div class="qr-spinner" ng-show="loading"
                                                     ng-style="getStyles()"
                                                     style="width: 22px; height: 22px;"></div>
                                            </qr-spinner>
                                            <span class="lzLoadingMessage ng-binding">Loading...</span>
                                        </div>
                                        <div class="ps-scrollbar-x-rail"
                                             style="left: 0px; bottom: 0px;">
                                            <div class="ps-scrollbar-x" tabindex="0"
                                                 style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps-scrollbar-y-rail"
                                             style="top: 0px; right: 0px;">
                                            <div class="ps-scrollbar-y" tabindex="0"
                                                 style="top: 0px; height: 0px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </qr-campaign-charts>
            </div>
        </div>
    </div>
</template>

<script>
    import ManageCodeComponent from "./ManageCodeComponent";
    export default {
        name: "StatisticsViewComponent",
        components: {ManageCodeComponent}
    }
</script>

<style scoped>

</style>