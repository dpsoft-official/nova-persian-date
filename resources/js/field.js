Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-persian-date', require('./components/IndexField').default)
    Vue.component('detail-nova-persian-date', require('./components/DetailField').default)
    Vue.component('form-nova-persian-date', require('./components/FormField').default)

    Vue.component('index-nova-persian-date-time', require('./components/date-time/IndexField').default)
    Vue.component('detail-nova-persian-date-time', require('./components/date-time/DetailField').default)
    Vue.component('form-nova-persian-date-time', require('./components/date-time/FormField').default)
})
