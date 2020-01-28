Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-persian-date', require('./components/IndexField'))
    Vue.component('detail-nova-persian-date', require('./components/DetailField'))
    Vue.component('form-nova-persian-date', require('./components/FormField'))

    Vue.component('index-nova-persian-date-time', require('./components/date-time/IndexField'))
    Vue.component('detail-nova-persian-date-time', require('./components/date-time/DetailField'))
    Vue.component('form-nova-persian-date-time', require('./components/date-time/FormField'))
})
