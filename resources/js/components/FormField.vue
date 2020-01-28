<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <date-picker
                    :id="field.name"
                    type="date"
                    :class="errorClasses"
                    :color="color"
                    :placeholder="placeholder"
                    inputClass="w-full form-control form-input form-input-bordered date-ltr"
                    :format="format"
                    :initial-value="persianDate"
                    v-model="value"
            ></date-picker>

        </template>
    </default-field>
</template>

<script>
    import VuePersianDatetimePicker from 'vue-persian-datetime-picker'
    import jMoment from "moment-jalaali"
    import {FormField, HandlesValidationErrors} from 'laravel-nova'

    export default {
        mixins: [FormField, HandlesValidationErrors],

        props: ['resourceName', 'resourceId', 'field'],
        computed: {
            format() {
                return this.field.format || 'jYYYY/jMM/jDD';
            },
            persianDate() {
                if (!this.field.value) {
                    return '';

                } else {
                    return jMoment(this.field.value).format(this.format);
                }

            },
            placeholder() {
                return jMoment().format(this.format)
            },
            altDateValue() {
                return this.value ? jMoment(this.value, this.format).format('YYYY-MM-DD') : '';
            },
            color() {
                return this.field.color || `rgb(30, 136, 229)`;
            }
        },
        methods: {
            setInitialValue() {

                this.value = this.persianDate;
            },

            fill(formData) {
                formData.append(this.field.attribute, this.altDateValue || '');
            },
        },
        components: {
            datePicker: VuePersianDatetimePicker
        }
    }
</script>

<style>
    .date-ltr {
        direction: ltr !important;
        text-align: right;
    }
</style>