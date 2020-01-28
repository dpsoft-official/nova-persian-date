<template>
    <span class="date-rtl">{{ persianDate }}</span>
</template>

<script>
    import jMoment from "moment-jalaali";

    export default {
        props: ['resourceName', 'field'],
        computed: {
            persianDate() {
                if (this.field.value) {
                    return jMoment(this.field.value).format(this.field.format || 'jYYYY/jMM/jDD HH:mm:ss');
                }
            }
        }
    }
</script>

<style>
    .date-rtl{
        direction: ltr!important;
        float: right;
    }
</style>