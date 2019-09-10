<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="qr-manage-bar__button">
                    <router-link class="qr-create-code-button" :to="{ name: 'create' }"><span class="qr-create-code-button__icon fa fa-plus"></span>Create QR Code</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {}
</script>

<style scoped>

</style>