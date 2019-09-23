<template>
    <div class="qr-resources">
        <qr-modal open="open" close-icon="true" class="ng-isolate-scope">
            <qr-popup open="open" modal-mode="true" auto-close="" visible-layer="true"
                      no-padding="" min-width="" left-offset=""
                      class="ng-isolate-scope">
                <div class="qr-popup  qr-popup--modal" ng-class="getPopupClasses()"
                     ng-style="{marginTop: topOffset, minWidth: minWidth, marginLeft: leftOffset, zIndex: getPopupZIndex()}"
                     style="z-index: 20000;">
                    <ng-transclude><i
                            class="qr-popup__close-icon icon-thin-close ng-scope"
                            ng-show="closeIcon" ng-click="closeWindow()"></i><h6
                            class="qr-modal__title ng-binding ng-scope ng-hide"
                            ng-show="title"><span
                            class="qr-modal__title-label ng-binding ng-hide"
                            ng-show="titleLabel" ng-bind="titleLabel"></span></h6>
                        <p class="qr-modal__description ng-binding ng-scope ng-hide"
                           ng-show="description" ng-bind="description"></p>
                        <ng-transclude class="ng-scope">
                            <iframe id="previewIframe" data-ng-src="about:blank"
                                    class="ng-scope" src="about:blank"></iframe>
                        </ng-transclude>
                        <div class="qr-modal__buttons ng-scope ng-hide"
                             ng-show="buttons.length > 0">
                            <!-- ngRepeat: button in buttons --></div>
                    </ng-transclude>
                </div>
                <div class="qr-popup__layer qr-popup__layer--visible"
                     ng-click="onLayerClick()" ng-class="getLayerClasses()"
                     ng-style="{zIndex: getLayerZIndex()}"
                     style="z-index: 19999;"></div>
            </qr-popup>
        </qr-modal>
        <div class="qr-resources__resource qr-resources__resource--left"
             ng-click="!isMobile &amp;&amp; openModal(campaignUrl)"><i
                class="icon icon-qr-lightbulb"></i>
            <div class="qr-resources__resource__text ng-binding"
                 ng-bind-html="::campaignText">Need some inspiration? View our favorite
                <a class="qr-resources__resource__link"
                   href="https://www.qr-code-generator.com/examples/?utm_campaign=examples">QR
                    Code Campaign Examples</a>.
            </div>
        </div>
        <div class="qr-resources__resource"
             ng-click="!isMobile &amp;&amp; openModal(printUrl)"><i
                class="icon icon-qr-print"></i>
            <div class="qr-resources__resource__text ng-binding"
                 ng-bind-html="::printText">Ready to go live? Read this <a
                    class="qr-resources__resource__link"
                    href="https://www.qr-code-generator.com/qr-code-marketing/print-qr-codes-correctly/?utm_campaign=print_qr_codes">Top
                10 Printing Tips</a> to get everything right with publishing your Code.
            </div>
        </div>
        <div class="qr-resources__resource qr-resources__resource--right"
             ng-click="!isMobile &amp;&amp; openModal(designUrl)"><i
                class="icon icon-qr-brush"></i>
            <div class="qr-resources__resource__text ng-binding"
                 ng-bind-html="::designText">Want to get as many scans as possible? <a
                    class="qr-resources__resource__link"
                    href="https://www.qr-code-generator.com/qr-code-marketing/individual-design-of-qr-codes/?utm_campaign=individual_design">Check
                out the How To Design QR Codes Guide</a>.
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ResourcesComponent"
    }
</script>

<style scoped>

</style>