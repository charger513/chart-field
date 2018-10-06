Nova.booting((Vue, router) => {
    require('peity')

    Vue.component('index-chart-field', require('./components/IndexField'));
    Vue.component('detail-chart-field', require('./components/DetailField'));
    Vue.component('form-chart-field', require('./components/FormField'));
})
