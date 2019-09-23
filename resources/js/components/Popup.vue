<template>
    <div>
        <div class="qr-popup  qr-popup--open qr-popup--right" ng-class="getPopupClasses()"
             ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
             style="margin-top: -10px; z-index: 20000;">
                <div class="qr-popup-menu ng-scope" ng-class="{'qr-popup-menu--mobile': mobileMode}">
                    <div class="qr-popup-menu__header ng-binding"><span class="qr-popup-menu__close"
                                                                        ng-click="closeThis(); onClose();">×</span><span
                            class="qr-popup-menu__back icon icon-chevron-left-medium ng-hide"
                            ng-click="closeThis(); onClose();" ng-show="alwaysOpen === 'true'" style=""></span>
                    </div><!-- ngRepeat: item in items | filter:isVisible track by $index -->
                    <div ng-repeat="item in items | filter:isVisible track by $index" class="ng-scope" style="">
                        <button type="button"
                                class="qr-popup-menu__item ng-binding qr-popup-menu__item--has-icons undefined"
                                ng-click="click(item, $index)" ng-show="item.label"
                                ng-mouseenter="openSubmenu(item, $index)" ng-class="getItemClass(item)"><i
                                class="qr-popup-menu__icon icon icon-avatar-edit" ng-class="getIconClass(item)"
                                ng-show="getIconClass(item)"></i><i class="qr-popup-menu__arrow ng-hide"
                                                                    ng-class="getArrowClass(item)"
                                                                    ng-show="getArrowClass(item)"></i>Rename
                        </button><!-- ngIf: !item.label --><!-- ngIf: item.items && item.items.length > 0 --></div>
                    <!-- end ngRepeat: item in items | filter:isVisible track by $index -->
                    <div ng-repeat="item in items | filter:isVisible track by $index" class="ng-scope">
                        <button type="button"
                                class="qr-popup-menu__item ng-binding qr-popup-menu__item--has-icons undefined"
                                ng-click="click(item, $index)" ng-show="item.label"
                                ng-mouseenter="openSubmenu(item, $index)" ng-class="getItemClass(item)"><i
                                class="qr-popup-menu__icon icon icon-action-delete" ng-class="getIconClass(item)"
                                ng-show="getIconClass(item)"></i><i class="qr-popup-menu__arrow ng-hide"
                                                                    ng-class="getArrowClass(item)"
                                                                    ng-show="getArrowClass(item)"></i>Delete
                        </button><!-- ngIf: !item.label --><!-- ngIf: item.items && item.items.length > 0 --></div>
                    <!-- end ngRepeat: item in items | filter:isVisible track by $index --></div>
        </div>
        <!--<div class="qr-popup__layer qr-popup__layer&#45;&#45;open" ng-click="onLayerClick()" ng-class="getLayerClasses()"-->
             <!--ng-style="{zIndex: getLayerZIndex()}" style="z-index: 19999;"></div>-->
    </div>
</template>

<script>
    export default {
        name: "Popup",
        beforeMount() {
            this._close = e => {
                // 如果点击发生在当前组件内部，则不处理
                if (this.$el.contains(e.target)) {
                    return;
                }
                this.$emit('hide');
            };
            document.body.addEventListener('click', this._close);
        },
        beforeDestroy() {
            document.body.removeEventListener('click', this._close);
        }

    }
</script>

<style scoped>

</style>