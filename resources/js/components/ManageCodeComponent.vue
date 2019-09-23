<template>
    <div class="qr-manage-code" ng-click="" ng-class="getCodeClass()"><span
            class="checkboxes-container qr-manage-code__checkbox ng-hide"
            ng-show="checkbox.visible"><input ng-checked="selected" type="checkbox"><label
            class="qr-manage-code__checkbox-label"><input type="checkbox"
                                                          ng-click="select()"></label></span>
        <div class="qr-manage-code--row-first">
            <div class="qr-manage-code__type ng-binding"
                 ng-bind="::value.type_name">Website
            </div>
            <span class="qr-manage-code__type-icon icon icon-manage-code-url"
                  ng-class="getTypeIcon()"></span>
            <div ng-switch="titleEditing"><!-- ngSwitchDefault:  -->
                <div class="qr-manage-code__title ng-binding ng-scope qr-manage-code__title--editable"
                     ng-click="startTitleEdit()" ng-class="getTitleClass()"
                     ng-switch-default="" ng-bind="getVisibleTitle()">
                    http://www.sina.com
                </div><!-- end ngSwitchWhen: --><!-- ngSwitchWhen: true --></div>
            <div class="qr-manage-code--row-first--col-left"><span
                    class="qr-manage-code__folder-icon icon icon-qr-folder-outline"></span>
                <div class="qr-manage-code__folder"><span
                        class="qr-manage-code__folder-name ng-binding"
                        ng-click="openFolderModal()" ng-bind="getFolderName()">No folder</span>
                </div>
                <div class="qr-manage-code__date ng-binding"><span
                        class="qr-manage-code__date-icon icon icon-business-time"></span>Sep
                    19, 2019
                </div>
            </div>
            <div class="qr-manage-code__stats qr-manage-code--visible-mobile">
                <div class="qr-manage-code__scans ng-binding"
                     ng-bind="getTotalScans()">0
                </div>
                <div class="qr-manage-code__scans-label ng-binding"
                     ng-bind="::scansLabel">Scans
                </div>
                <a ng-href="#!/insights?folder=active&amp;id=10925069"
                   class="qr-manage-code__insights ng-binding"
                   ng-click="openInsights($event)"
                   href="#!/insights?folder=active&amp;id=10925069">Details<span
                        class="qr-manage-code__insights-icon icon icon-qr-insights"></span></a>
            </div>
            <div class="qr-manage-code--row-first--col-right"><span
                    class="qr-manage-code__status ng-binding ng-hide"
                    ng-show="getStatus()" ng-class="getStatusClass()"
                    ng-bind="getStatus()"></span>
                <div class="qr-manage-code__url"
                     ng-show="::(getUrl() || !value.trackable)"><span
                        class="qr-manage-code__url-icon icon icon-qr-link"
                        ng-show="::getUrl()"></span>
                    <div class="qr-manage-code__url-container"><a
                            class="qr-manage-code__url-link ng-binding"
                            ng-href="https://qrco.de/bbFoE8" target="_blank"
                            ng-show="::getUrl()" ng-bind="getUrl()"
                            href="https://qrco.de/bbFoE8">qrco.de/bbFoE8</a><i
                            class="qr-manage-code__edit-icon icon icon-avatar-edit"
                            ng-show="::getUrl()" ng-click="openShortUrlEdit()"
                            data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="Edit Short URL"></i></div>
                    <span class="qr-manage-code__static ng-binding ng-hide"
                          ng-hide="::value.trackable" ng-bind="::staticLabel">Static/Non-trackable</span>
                    <!-- ngIf: !isDemo -->
                    <div class="qr-manage-code__target ng-scope"
                         ng-show="getTarget()" ng-if="!isDemo"><span
                            class="qr-manage-code__target-icon icon icon-qr-link-arrow"
                            ng-show="::value.trackable"></span><a
                            ng-href="http://www.sina.com" target="_blank"
                            class="ng-binding" href="http://www.sina.com">www.sina.com<span
                            ng-bind="getSecondTargetPart()"
                            class="ng-binding"></span></a></div>
                    <!-- end ngIf: !isDemo --></div>
            </div>
        </div>
        <div class="qr-manage-code--row-second">
            <div class="qr-manage-code--row-second--col-left">
                <div class="qr-manage-code__stats" ng-show="::value.trackable">
                    <div class="qr-manage-code__scans ng-binding"
                         ng-bind="getTotalScans()">0
                    </div>
                    <div class="qr-manage-code__scans-label ng-binding"
                         ng-bind="::scansLabel">Scans
                    </div>
                    <a ng-href="#!/insights?folder=active&amp;id=10925069"
                       class="qr-manage-code__insights ng-binding"
                       ng-click="openInsights($event)"
                       href="#!/insights?folder=active&amp;id=10925069">Details<span
                            class="qr-manage-code__insights-icon icon icon-qr-insights"></span></a>
                </div>
                <qr-code-image class="qr-manage-code__qr ng-isolate-scope"
                               url="value.image_url" code-id="value.id">
                    <div class="qr-code-image"><img class="qr-code-image__image"
                                                    ng-src="https://qrcgcustomers.s3.eu-west-1.amazonaws.com/account6092707/qrcodes/17644309.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJB2HRMXMYBGR2KIQ%2F20190920%2Feu-west-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190920T031749Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=3600&amp;X-Amz-Signature=fa3d2e81057dfd7d0c78e1517f43528ef919dc582f0592bc9958bf4646152977"
                                                    ng-show="imageUrl &amp;&amp; !loading"
                                                    alt=""
                                                    src="https://qrcgcustomers.s3.eu-west-1.amazonaws.com/account6092707/qrcodes/17644309.png?X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&amp;X-Amz-Algorithm=AWS4-HMAC-SHA256&amp;X-Amz-Credential=AKIAJB2HRMXMYBGR2KIQ%2F20190920%2Feu-west-1%2Fs3%2Faws4_request&amp;X-Amz-Date=20190920T031749Z&amp;X-Amz-SignedHeaders=host&amp;X-Amz-Expires=3600&amp;X-Amz-Signature=fa3d2e81057dfd7d0c78e1517f43528ef919dc582f0592bc9958bf4646152977"
                                                    style="">
                        <div class="qr-code-image__spinner ng-hide"
                             ng-show="loading" style="">
                            <qr-spinner loading="loading" class="ng-isolate-scope">
                                <div class="qr-spinner ng-hide" ng-show="loading"
                                     ng-style="getStyles()" style=""></div>
                            </qr-spinner>
                        </div>
                    </div>
                </qr-code-image>
            </div>
            <div class="qr-manage-code--row-second--col-right">
                <qr-manage-download
                        class="qr-manage-code__download ng-isolate-scope"
                        value="value" is-admin="isAdmin" open="open.download"
                        is-demo="isDemo"><!-- ngIf: open.demo -->
                    <!-- ngIf: open.expire -->
                    <div class="qr-manage-download--new">
                        <div class="qr-manage-download"
                             ng-class="open.menu ? 'qr-manage-download--active' : ''">
                            <button class="qr-manage-download__button ng-binding"
                                    type="button" ng-click="buttonClick()"
                                    ng-class="getButtonClass()"
                                    ng-bind="getLabel()">Download
                            </button><!-- ngIf: open.move -->
                            <!-- ngIf: open.delete --><!-- ngIf: open.pause -->
                            <!-- ngIf: open.activate --><!-- ngIf: open.download -->
                        </div>
                        <div class="qr-manage-download__actions"
                             ng-class="open.menu ? 'qr-manage-download__actions--active' : ''">
                            <!-- ngIf: windowWidth > 1200 -->
                            <qr-download-manage items="::actions"
                                                ng-if="windowWidth > 1200"
                                                is-demo="isDemo"
                                                class="ng-scope ng-isolate-scope">
                                <!-- ngIf: open.demo -->
                                <!-- ngRepeat: item in items track by $index -->
                                <!-- ngIf: $index <= 2 && isVisible(item) -->
                                <button class="qr-icon-menu__item ng-scope"
                                        ng-repeat="item in items track by $index"
                                        ng-if="$index <= 2 &amp;&amp; isVisible(item)"
                                        ng-click="click(item)" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="Edit content"><i
                                        class="qr-icon-menu__icon icon icon-avatar-edit"
                                        ng-class="getIconClass(item)"></i></button>
                                <!-- end ngIf: $index <= 2 && isVisible(item) -->
                                <!-- end ngRepeat: item in items track by $index -->
                                <!-- ngIf: $index <= 2 && isVisible(item) -->
                                <button class="qr-icon-menu__item ng-scope"
                                        ng-repeat="item in items track by $index"
                                        ng-if="$index <= 2 &amp;&amp; isVisible(item)"
                                        ng-click="click(item)" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="Design QR Code"><i
                                        class="qr-icon-menu__icon icon icon-qr-palette"
                                        ng-class="getIconClass(item)"></i></button>
                                <!-- end ngIf: $index <= 2 && isVisible(item) -->
                                <!-- end ngRepeat: item in items track by $index -->
                                <!-- ngIf: $index <= 2 && isVisible(item) -->
                                <button class="qr-icon-menu__item ng-scope"
                                        ng-repeat="item in items track by $index"
                                        ng-if="$index <= 2 &amp;&amp; isVisible(item)"
                                        ng-click="click(item)" data-toggle="tooltip"
                                        data-placement="bottom" title=""
                                        data-original-title="Move to folder"><i
                                        class="qr-icon-menu__icon icon icon-qr-folder"
                                        ng-class="getIconClass(item)"></i></button>
                                <!-- end ngIf: $index <= 2 && isVisible(item) -->
                                <!-- end ngRepeat: item in items track by $index -->
                                <!-- ngIf: $index <= 2 && isVisible(item) -->
                                <!-- end ngRepeat: item in items track by $index -->
                                <!-- ngIf: $index <= 2 && isVisible(item) -->
                                <!-- end ngRepeat: item in items track by $index -->
                                <!-- ngIf: $index <= 2 && isVisible(item) -->
                                <!-- end ngRepeat: item in items track by $index -->
                            </qr-download-manage>
                            <!-- end ngIf: windowWidth > 1200 -->
                            <button class="qr-manage-download__actions-more"
                                    type="button" ng-class="item.class"
                                    ng-click="menuClick()"><span
                                    class="qr-manage-download__icon icon icon-menu-vertical"
                                    data-toggle="tooltip" data-placement="bottom"
                                    title="" data-original-title=""></span></button>
                            <!-- ngIf: open.menu --></div>
                    </div>
                </qr-manage-download>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ManageCodeComponent"
    }
</script>

<style scoped>

</style>