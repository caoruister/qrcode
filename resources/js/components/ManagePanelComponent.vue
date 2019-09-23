<template>
    <div class="qr-manage-panel">
        <div class="qr-manage-panel__scrollable-container ps-container ps-theme-default qr-manage-panel--trial ps-active-y"
             ng-style="getPanelStyle()"
             data-ps-id="09d73b18-07f2-42f6-f3f7-8146ee24d9de" style="padding-bottom: 109px;">
            <div class="qr-manage-panel__search"><i
                    class="qr-manage-panel__search__icon icon-qr-search"></i><input
                    class="qr-manage-panel__search__input"
                    placeholder="Search QR Codes..." v-model="searchQuery"
                    ng-model-options="{debounce: 300, getterSetter: true}"><i
                    class="qr-manage-panel__search__icon-delete icon-event-close"
                    v-show="searchQuery" v-on:click="searchQuery('')"></i></div>
            <h6 class="qr-manage-panel__heading" ng-bind="::qrHeading">My QR Codes</h6>

            <manage-folder-component v-for="filter in filters" v-bind:key="filter.id" v-bind:value="filter.name" v-bind:icon="filter.icon"
                                     v-bind:count="filter.count" v-show="filter.visible" v-bind:menu="false"></manage-folder-component>

            <div ng-class="lineClass" class="qr-manage-panel__line" style=""></div>
            <h6 class="qr-manage-panel__heading">My
                Folders</h6>

            <manage-folder-component v-for="folder in getFolders" v-bind:key="folder.id" v-bind:value="folder.name" v-bind:editing="true"
                                     v-bind:icon="folder.icon" v-bind:animated="true" v-bind:is-menu-visible="true"></manage-folder-component>

            <button type="button" class="qr-manage-panel__add" v-on:click="addFolder()"
                    data-ng-disabled="addingFolder"><span
                    class="qr-manage-panel__icon icon icon-plus-1"></span>New Folder
            </button>
            <!--<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">-->
                <!--<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>-->
            <!--</div>-->
            <!--<div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px; height: 421px;">-->
                <!--<div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 335px;"></div>-->
            <!--</div>-->
        </div>
    </div>
</template>

<script>
    import ManageFolderComponent from "./ManageFolderComponent";

    export default {
        name: "ManagePanelComponent",
        components: {ManageFolderComponent},
        data: function () {
            return {
                searchQuery: '',
                filters: [{
                    id: 1,
                    name: 'All',
                    count: 2,
                    icon: 'icon-qr-all',
                    visible: true,
                },
                {
                    id: 2,
                    name: 'Active',
                    count: 2,
                    icon: 'icon-active',
                    visible: true,
                },
                {
                    id: 3,
                    name: 'Paused',
                    count: 0,
                    icon: 'icon-qr-paused',
                    visible: true,
                }],
                folders: []
            }
        },
        computed: {
            getFolders: function () {
                return this.folders;
            }
        },
        methods: {
            searchQuery: function () {

                return true;
            },
            addFolder: function () {
                this.folders.push({
                    name: 'Untitled folder',
                    icon: 'icon-qr-folder'
                })
            },

        }
    }
</script>

<style scoped>

</style>