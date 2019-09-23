<template>
    <div class="qr-open-invoice ng-hide" ng-show="open">
        <div class="qr-open-invoice__container"><h6
                class="qr-open-invoice__title ng-binding" ng-bind="::title">There is an
            unpaid invoice in your account</h6>
            <p class="qr-open-invoice__message ng-binding" ng-bind-html="getMessage()">
                <a class="qr-open-invoice__link"
                   href="/creditcard/payinvoice?invoice_txid=null"><strong>Pay now by
                    credit card</strong></a> or go to <a class="qr-open-invoice__link"
                                                         href="/billing/?unpaidinvoice"><strong>Billing</strong></a>
                for more information.</p></div>
    </div>
</template>

<script>
    export default {
        name: "OpenInvoiceComponent"
    }
</script>

<style scoped>

</style>