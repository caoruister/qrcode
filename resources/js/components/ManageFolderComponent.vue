<template>
    <div class="qr-manage-folder" v-bind:class="{'qr-manage-folder--animated': animated}"
         ng-switch="isEditing()">
        <div v-if="!isEditing">
            <a class="qr-manage-folder__button" ng-href="#!/?folder=all"
               ng-class="getClass()"
               href="#!/?folder=all">
                <span class="qr-manage-folder__icon icon"
                      v-bind:class="icon"></span>
                <span
                        class="qr-manage-folder__label">{{value}}</span>
                <span
                        class="qr-manage-folder__count" v-show="count >= 0"
                        style="">&nbsp;({{count}})</span>
                <i class="qr-manage-folder__menu icon icon-menu-vertical ng-scope icon-menu-vertical--visible"
                   v-on:click="clickMenu" v-if="menu !== false"
                   v-bind:class="{'icon-menu-vertical--visible' : isMenuAvailable}"></i>
            </a>
        </div>

        <div class="qr-manage-folder__edit" v-else style=""><span
                class="qr-manage-folder__icon icon icon-qr-folder" ng-class="getIconClass()"></span><input
                class="qr-manage-folder__input ng-pristine ng-untouched ng-valid" ng-model="folderName.value"
                ng-blur="finishEditing()" ng-keyup="keyUp($event)" ng-disabled="sendingRequest"></div>

        <popup open="open" right="true" popup-menu-class="" top-offset="-10px" visible-layer="" min-width=""
               left-offset="" no-layer="" v-on:hide="isMenuAvailable = false" v-if="isMenuAvailable"></popup>
    </div>
</template>

<script>
    import Popup from "./Popup";

    export default {
        name: "ManageFolderComponent",
        components: {Popup},
        props: ['icon', 'value', 'count', 'animated', 'menu', 'editing', 'isMenuVisible'],
        data: function () {
            return {
                isMenuAvailable: false,
            }
        },
        computed: {
            isEditing: function () {
                return false;
            }
        },
        methods: {
            clickMenu: function () {
                this.isMenuAvailable = !this.isMenuAvailable;
            },
        }
    }
</script>

<style scoped>

</style>