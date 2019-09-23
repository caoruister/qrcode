<template>
    <div class="qr-manage-bar" ng-switch="totalSelected"><!-- ngSwitchWhen: 0 -->
        <div class="qr-manage-bar__folder ng-scope" ng-switch-when="0"><span
                class="qr-manage-bar__folder-icon icon icon-active"
                ng-class="getFolderIconClass()"></span><span
                class="qr-manage-bar__folder-name ng-binding" ng-bind="getFolderName()">Active QR Codes</span><span
                class="qr-manage-bar__count ng-binding" ng-show="getCountString()"
                ng-bind="getCountString()" style="">(2)</span></div>

        <div v-show="searchQuery" class="qr-manage-bar__search ng-binding ng-hide">/
            Search results for <span class="qr-manage-bar__search-query ng-binding"
                                     v-bind="searchQuery"></span></div>
        <qr-choice-button class="qr-manage-bar__filter"
                          items="::filterItems" value="filter"
                          v-show="isFilterVisible">
            <div class="qr-choice-button">
                <button type="button" class="qr-choice-button__button"
                        ng-class="getButtonClass()" ng-click="click()">All QR Codes<span
                        class="qr-choice-button__caret"
                        ng-class="getCaretClass()"></span></button>
                <qr-popup open="open" right="" popup-menu-class="" top-offset=""
                          visible-layer="" min-width="" left-offset="" no-layer=""
                          mobile-mode="" class="ng-scope ng-isolate-scope">
                    <div class="qr-popup " ng-class="getPopupClasses()"
                         ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                         style="z-index: 20000;">
                        <ng-transclude>
                            <div class="qr-popup-menu ng-scope"
                                 ng-class="{'qr-popup-menu--mobile': mobileMode}">
                                <div class="qr-popup-menu__header ng-binding"><span
                                        class="qr-popup-menu__close"
                                        ng-click="closeThis(); onClose();">×</span><span
                                        class="qr-popup-menu__back icon icon-chevron-left-medium ng-hide"
                                        ng-click="closeThis(); onClose();"
                                        ng-show="alwaysOpen === 'true'"></span></div>
                                <!-- ngRepeat: item in items | filter:isVisible track by $index -->
                                <div ng-repeat="item in items | filter:isVisible track by $index"
                                     class="ng-scope">
                                    <button type="button"
                                            class="qr-popup-menu__item ng-binding qr-popup-menu__item--selected"
                                            ng-click="click(item, $index)"
                                            ng-show="item.label"
                                            ng-mouseenter="openSubmenu(item, $index)"
                                            ng-class="getItemClass(item)"><i
                                            class="qr-popup-menu__icon icon icon-undefined"
                                            ng-class="getIconClass(item)"
                                            ng-show="getIconClass(item)"></i><i
                                            class="qr-popup-menu__arrow ng-hide"
                                            ng-class="getArrowClass(item)"
                                            ng-show="getArrowClass(item)"></i>All QR
                                        Codes
                                    </button><!-- ngIf: !item.label -->
                                    <!-- ngIf: item.items && item.items.length > 0 -->
                                </div>
                                <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                <div ng-repeat="item in items | filter:isVisible track by $index"
                                     class="ng-scope">
                                    <button type="button"
                                            class="qr-popup-menu__item ng-binding"
                                            ng-click="click(item, $index)"
                                            ng-show="item.label"
                                            ng-mouseenter="openSubmenu(item, $index)"
                                            ng-class="getItemClass(item)"><i
                                            class="qr-popup-menu__icon icon icon-undefined"
                                            ng-class="getIconClass(item)"
                                            ng-show="getIconClass(item)"></i><i
                                            class="qr-popup-menu__arrow ng-hide"
                                            ng-class="getArrowClass(item)"
                                            ng-show="getArrowClass(item)"></i>Active QR
                                        Codes
                                    </button><!-- ngIf: !item.label -->
                                    <!-- ngIf: item.items && item.items.length > 0 -->
                                </div>
                                <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                <div ng-repeat="item in items | filter:isVisible track by $index"
                                     class="ng-scope">
                                    <button type="button"
                                            class="qr-popup-menu__item ng-binding"
                                            ng-click="click(item, $index)"
                                            ng-show="item.label"
                                            ng-mouseenter="openSubmenu(item, $index)"
                                            ng-class="getItemClass(item)"><i
                                            class="qr-popup-menu__icon icon icon-undefined"
                                            ng-class="getIconClass(item)"
                                            ng-show="getIconClass(item)"></i><i
                                            class="qr-popup-menu__arrow ng-hide"
                                            ng-class="getArrowClass(item)"
                                            ng-show="getArrowClass(item)"></i>Paused QR
                                        Codes
                                    </button><!-- ngIf: !item.label -->
                                    <!-- ngIf: item.items && item.items.length > 0 -->
                                </div>
                                <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                            </div>
                        </ng-transclude>
                    </div>
                    <div class="qr-popup__layer" ng-click="onLayerClick()"
                         ng-class="getLayerClasses()"
                         ng-style="{zIndex: getLayerZIndex()}"
                         style="z-index: 19999;"></div>
                </qr-popup>
            </div>
        </qr-choice-button>
        <div class="qr-manage-bar__button ng-isolate-scope" v-on:click="createQRCode"
                               ng-click="" is-admin="isAdmin"><a
                class="qr-create-code-button ng-binding" ng-href=""
                ng-click="checkAccount()"><span
                class="qr-create-code-button__icon icon icon-plus-1"></span>Create QR
            Code</a></div>
        <qr-choice-button v-show="!searchQuery"
                          class="qr-manage-bar__sort ng-isolate-scope"
                          items="::sortItems" right="true" value="sort">
            <div class="qr-choice-button">
                <button type="button" class="qr-choice-button__button ng-binding"
                        ng-class="getButtonClass()" ng-click="click()">Last Created<span
                        class="qr-choice-button__caret"
                        ng-class="getCaretClass()"></span></button>
                <qr-popup open="open" right="true" popup-menu-class="" top-offset=""
                          visible-layer="" min-width="" left-offset="" no-layer=""
                          mobile-mode="" class="ng-scope ng-isolate-scope">
                    <div class="qr-popup  qr-popup--right" ng-class="getPopupClasses()"
                         ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                         style="z-index: 20000;">
                        <ng-transclude>
                            <div class="qr-popup-menu ng-scope"
                                 ng-class="{'qr-popup-menu--mobile': mobileMode}">
                                <div class="qr-popup-menu__header ng-binding"><span
                                        class="qr-popup-menu__close"
                                        ng-click="closeThis(); onClose();">×</span><span
                                        class="qr-popup-menu__back icon icon-chevron-left-medium ng-hide"
                                        ng-click="closeThis(); onClose();"
                                        ng-show="alwaysOpen === 'true'"></span></div>
                                <!-- ngRepeat: item in items | filter:isVisible track by $index -->
                                <div ng-repeat="item in items | filter:isVisible track by $index"
                                     class="ng-scope">
                                    <button type="button"
                                            class="qr-popup-menu__item ng-binding qr-popup-menu__item--selected"
                                            ng-click="click(item, $index)"
                                            ng-show="item.label"
                                            ng-mouseenter="openSubmenu(item, $index)"
                                            ng-class="getItemClass(item)"><i
                                            class="qr-popup-menu__icon icon icon-undefined"
                                            ng-class="getIconClass(item)"
                                            ng-show="getIconClass(item)"></i><i
                                            class="qr-popup-menu__arrow ng-hide"
                                            ng-class="getArrowClass(item)"
                                            ng-show="getArrowClass(item)"></i>Last
                                        Created
                                    </button><!-- ngIf: !item.label -->
                                    <!-- ngIf: item.items && item.items.length > 0 -->
                                </div>
                                <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                <div ng-repeat="item in items | filter:isVisible track by $index"
                                     class="ng-scope">
                                    <button type="button"
                                            class="qr-popup-menu__item ng-binding"
                                            ng-click="click(item, $index)"
                                            ng-show="item.label"
                                            ng-mouseenter="openSubmenu(item, $index)"
                                            ng-class="getItemClass(item)"><i
                                            class="qr-popup-menu__icon icon icon-undefined"
                                            ng-class="getIconClass(item)"
                                            ng-show="getIconClass(item)"></i><i
                                            class="qr-popup-menu__arrow ng-hide"
                                            ng-class="getArrowClass(item)"
                                            ng-show="getArrowClass(item)"></i>Name
                                    </button><!-- ngIf: !item.label -->
                                    <!-- ngIf: item.items && item.items.length > 0 -->
                                </div>
                                <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                <div ng-repeat="item in items | filter:isVisible track by $index"
                                     class="ng-scope">
                                    <button type="button"
                                            class="qr-popup-menu__item ng-binding"
                                            ng-click="click(item, $index)"
                                            ng-show="item.label"
                                            ng-mouseenter="openSubmenu(item, $index)"
                                            ng-class="getItemClass(item)"><i
                                            class="qr-popup-menu__icon icon icon-undefined"
                                            ng-class="getIconClass(item)"
                                            ng-show="getIconClass(item)"></i><i
                                            class="qr-popup-menu__arrow ng-hide"
                                            ng-class="getArrowClass(item)"
                                            ng-show="getArrowClass(item)"></i>Most
                                        Scanned
                                    </button><!-- ngIf: !item.label -->
                                    <!-- ngIf: item.items && item.items.length > 0 -->
                                </div>
                                <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                            </div>
                        </ng-transclude>
                    </div>
                    <div class="qr-popup__layer" ng-click="onLayerClick()"
                         ng-class="getLayerClasses()"
                         ng-style="{zIndex: getLayerZIndex()}"
                         style="z-index: 19999;"></div>
                </qr-popup>
            </div>
        </qr-choice-button>
        <qr-multidropdown filter-items="::filterItems" sort-items="::sortItems"
                          v-show="isFilterVisible" filter="filter" sort="sort"
                          class="ng-isolate-scope">
            <div class="qr-manage-bar__multidropdown">
                <button type="button" class="qr-choice-button__button"
                        ng-class="getButtonClass()" ng-click="click()">
                    <div class="icon-qr-filters"></div>
                    <span class="qr-choice-button__caret"
                          ng-class="getCaretClass()"></span></button>
            </div>
            <div class="qr-manage-bar__multidropdown__menu ng-hide"
                 ng-style="!showFilter &amp;&amp; {'max-width':'300px'}" ng-hide="!open"
                 style="max-width: 300px;">
                <qr-choice-button
                        class="qr-manage-bar__multidropdown__filter ng-isolate-scope ng-hide"
                        items="filterItems" value="filter" ng-show="showFilter">
                    <div class="qr-choice-button">
                        <button type="button"
                                class="qr-choice-button__button ng-binding"
                                ng-class="getButtonClass()" ng-click="click()">All QR
                            Codes<span class="qr-choice-button__caret"
                                       ng-class="getCaretClass()"></span></button>
                        <qr-popup open="open" right="" popup-menu-class="" top-offset=""
                                  visible-layer="" min-width="" left-offset=""
                                  no-layer="" mobile-mode=""
                                  class="ng-scope ng-isolate-scope">
                            <div class="qr-popup " ng-class="getPopupClasses()"
                                 ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                                 style="z-index: 20000;">
                                <ng-transclude>
                                    <div class="qr-popup-menu ng-scope"
                                         ng-class="{'qr-popup-menu--mobile': mobileMode}">
                                        <div class="qr-popup-menu__header ng-binding">
                                                                            <span class="qr-popup-menu__close"
                                                                                  ng-click="closeThis(); onClose();">×</span><span
                                                class="qr-popup-menu__back icon icon-chevron-left-medium ng-hide"
                                                ng-click="closeThis(); onClose();"
                                                ng-show="alwaysOpen === 'true'"></span>
                                        </div>
                                        <!-- ngRepeat: item in items | filter:isVisible track by $index -->
                                        <div ng-repeat="item in items | filter:isVisible track by $index"
                                             class="ng-scope">
                                            <button type="button"
                                                    class="qr-popup-menu__item ng-binding qr-popup-menu__item--selected"
                                                    ng-click="click(item, $index)"
                                                    ng-show="item.label"
                                                    ng-mouseenter="openSubmenu(item, $index)"
                                                    ng-class="getItemClass(item)"><i
                                                    class="qr-popup-menu__icon icon icon-undefined"
                                                    ng-class="getIconClass(item)"
                                                    ng-show="getIconClass(item)"></i><i
                                                    class="qr-popup-menu__arrow ng-hide"
                                                    ng-class="getArrowClass(item)"
                                                    ng-show="getArrowClass(item)"></i>All
                                                QR Codes
                                            </button><!-- ngIf: !item.label -->
                                            <!-- ngIf: item.items && item.items.length > 0 -->
                                        </div>
                                        <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                        <div ng-repeat="item in items | filter:isVisible track by $index"
                                             class="ng-scope">
                                            <button type="button"
                                                    class="qr-popup-menu__item ng-binding"
                                                    ng-click="click(item, $index)"
                                                    ng-show="item.label"
                                                    ng-mouseenter="openSubmenu(item, $index)"
                                                    ng-class="getItemClass(item)"><i
                                                    class="qr-popup-menu__icon icon icon-undefined"
                                                    ng-class="getIconClass(item)"
                                                    ng-show="getIconClass(item)"></i><i
                                                    class="qr-popup-menu__arrow ng-hide"
                                                    ng-class="getArrowClass(item)"
                                                    ng-show="getArrowClass(item)"></i>Active
                                                QR Codes
                                            </button><!-- ngIf: !item.label -->
                                            <!-- ngIf: item.items && item.items.length > 0 -->
                                        </div>
                                        <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                        <div ng-repeat="item in items | filter:isVisible track by $index"
                                             class="ng-scope">
                                            <button type="button"
                                                    class="qr-popup-menu__item ng-binding"
                                                    ng-click="click(item, $index)"
                                                    ng-show="item.label"
                                                    ng-mouseenter="openSubmenu(item, $index)"
                                                    ng-class="getItemClass(item)"><i
                                                    class="qr-popup-menu__icon icon icon-undefined"
                                                    ng-class="getIconClass(item)"
                                                    ng-show="getIconClass(item)"></i><i
                                                    class="qr-popup-menu__arrow ng-hide"
                                                    ng-class="getArrowClass(item)"
                                                    ng-show="getArrowClass(item)"></i>Paused
                                                QR Codes
                                            </button><!-- ngIf: !item.label -->
                                            <!-- ngIf: item.items && item.items.length > 0 -->
                                        </div>
                                        <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                    </div>
                                </ng-transclude>
                            </div>
                            <div class="qr-popup__layer" ng-click="onLayerClick()"
                                 ng-class="getLayerClasses()"
                                 ng-style="{zIndex: getLayerZIndex()}"
                                 style="z-index: 19999;"></div>
                        </qr-popup>
                    </div>
                </qr-choice-button>
                <qr-choice-button
                        class="qr-manage-bar__multidropdown__sort ng-isolate-scope qr-manage-bar__multidropdown__sort--single"
                        items="sortItems" right="true" value="sort"
                        ng-class="getSortButtonClass()">
                    <div class="qr-choice-button">
                        <button type="button"
                                class="qr-choice-button__button ng-binding"
                                ng-class="getButtonClass()" ng-click="click()">Last
                            Created<span class="qr-choice-button__caret"
                                         ng-class="getCaretClass()"></span></button>
                        <qr-popup open="open" right="true" popup-menu-class=""
                                  top-offset="" visible-layer="" min-width=""
                                  left-offset="" no-layer="" mobile-mode=""
                                  class="ng-scope ng-isolate-scope">
                            <div class="qr-popup  qr-popup--right"
                                 ng-class="getPopupClasses()"
                                 ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                                 style="z-index: 20000;">
                                <ng-transclude>
                                    <div class="qr-popup-menu ng-scope"
                                         ng-class="{'qr-popup-menu--mobile': mobileMode}">
                                        <div class="qr-popup-menu__header ng-binding">
                                                                            <span class="qr-popup-menu__close"
                                                                                  ng-click="closeThis(); onClose();">×</span><span
                                                class="qr-popup-menu__back icon icon-chevron-left-medium ng-hide"
                                                ng-click="closeThis(); onClose();"
                                                ng-show="alwaysOpen === 'true'"></span>
                                        </div>
                                        <!-- ngRepeat: item in items | filter:isVisible track by $index -->
                                        <div ng-repeat="item in items | filter:isVisible track by $index"
                                             class="ng-scope">
                                            <button type="button"
                                                    class="qr-popup-menu__item ng-binding qr-popup-menu__item--selected"
                                                    ng-click="click(item, $index)"
                                                    ng-show="item.label"
                                                    ng-mouseenter="openSubmenu(item, $index)"
                                                    ng-class="getItemClass(item)"><i
                                                    class="qr-popup-menu__icon icon icon-undefined"
                                                    ng-class="getIconClass(item)"
                                                    ng-show="getIconClass(item)"></i><i
                                                    class="qr-popup-menu__arrow ng-hide"
                                                    ng-class="getArrowClass(item)"
                                                    ng-show="getArrowClass(item)"></i>Last
                                                Created
                                            </button><!-- ngIf: !item.label -->
                                            <!-- ngIf: item.items && item.items.length > 0 -->
                                        </div>
                                        <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                        <div ng-repeat="item in items | filter:isVisible track by $index"
                                             class="ng-scope">
                                            <button type="button"
                                                    class="qr-popup-menu__item ng-binding"
                                                    ng-click="click(item, $index)"
                                                    ng-show="item.label"
                                                    ng-mouseenter="openSubmenu(item, $index)"
                                                    ng-class="getItemClass(item)"><i
                                                    class="qr-popup-menu__icon icon icon-undefined"
                                                    ng-class="getIconClass(item)"
                                                    ng-show="getIconClass(item)"></i><i
                                                    class="qr-popup-menu__arrow ng-hide"
                                                    ng-class="getArrowClass(item)"
                                                    ng-show="getArrowClass(item)"></i>Name
                                            </button><!-- ngIf: !item.label -->
                                            <!-- ngIf: item.items && item.items.length > 0 -->
                                        </div>
                                        <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                        <div ng-repeat="item in items | filter:isVisible track by $index"
                                             class="ng-scope">
                                            <button type="button"
                                                    class="qr-popup-menu__item ng-binding"
                                                    ng-click="click(item, $index)"
                                                    ng-show="item.label"
                                                    ng-mouseenter="openSubmenu(item, $index)"
                                                    ng-class="getItemClass(item)"><i
                                                    class="qr-popup-menu__icon icon icon-undefined"
                                                    ng-class="getIconClass(item)"
                                                    ng-show="getIconClass(item)"></i><i
                                                    class="qr-popup-menu__arrow ng-hide"
                                                    ng-class="getArrowClass(item)"
                                                    ng-show="getArrowClass(item)"></i>Most
                                                Scanned
                                            </button><!-- ngIf: !item.label -->
                                            <!-- ngIf: item.items && item.items.length > 0 -->
                                        </div>
                                        <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                                    </div>
                                </ng-transclude>
                            </div>
                            <div class="qr-popup__layer" ng-click="onLayerClick()"
                                 ng-class="getLayerClasses()"
                                 ng-style="{zIndex: getLayerZIndex()}"
                                 style="z-index: 19999;"></div>
                        </qr-popup>
                    </div>
                </qr-choice-button>
            </div>
        </qr-multidropdown>
    </div>
</template>

<script>
    export default {
        name: "ManageBarComponent",
        data: function () {
            return {
                searchQuery: false,
            }
        },
        computed: {
            isFilterVisible: function () {
                return false;
            }
        },
        methods: {
            createQRCode: function () {
                this.$router.push('/create');
            }
        },

    }
</script>

<style scoped>

</style>