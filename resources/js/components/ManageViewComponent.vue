<template>
    <div class="qr-manage-view">
        <manage-panel-component is-admin="isAdmin"></manage-panel-component>

        <manage-content-component is-admin="isAdmin"></manage-content-component>
    </div>
</template>

<script>
    import ManagePanelComponent from "./ManagePanelComponent";
    import ManageContentComponent from "./ManageContentComponent";

    export default {
        name: "ManageViewComponent",
        components: {ManageContentComponent, ManagePanelComponent},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
