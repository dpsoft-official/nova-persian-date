<template>
    <panel-item :field="fieldPersian"/>
</template>

<script>
    import jMoment from "moment-jalaali";

    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],
        computed: {
            fieldPersian() {
                if (this.field.value) {
                    let date = jMoment(this.field.value).format(this.field.format || 'jYYYY/jMM/jDD HH:mm:ss');
                    this.field.value = `<span class="date-rtl">${date}</span>`;
                    this.field.asHtml = true;
                }
                return this.field;
            }
        }
    }
</script>

<style>
    .date-rtl {
        direction: ltr !important;
        float: right;
    }
</style>